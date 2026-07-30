<?php

namespace App\Mail\Transport;

use RuntimeException;
use Symfony\Component\Mailer\SentMessage;
use Symfony\Component\Mailer\Transport\AbstractTransport;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;

/**
 * Sends mail through the Resend HTTPS API instead of raw SMTP, since some hosts
 * (e.g. Render's free tier) block outbound SMTP ports.
 */
class ResendApiTransport extends AbstractTransport
{
    public function __construct(private readonly string $apiKey)
    {
        parent::__construct();
    }

    protected function doSend(SentMessage $message): void
    {
        $email = $message->getOriginalMessage();

        if (! $email instanceof Email) {
            throw new RuntimeException('ResendApiTransport only supports Symfony Email messages.');
        }

        $payload = [
            'from' => $this->formatAddress($email->getFrom()[0]),
            'to' => array_map($this->formatAddress(...), $email->getTo()),
            'subject' => (string) $email->getSubject(),
        ];

        if ($replyTo = $email->getReplyTo()) {
            $payload['reply_to'] = array_map($this->formatAddress(...), $replyTo);
        }

        if ($html = $email->getHtmlBody()) {
            $payload['html'] = $html;
        }

        if ($text = $email->getTextBody()) {
            $payload['text'] = $text;
        }

        $ch = curl_init('https://api.resend.com/emails');
        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                'Authorization: Bearer '.$this->apiKey,
                'Content-Type: application/json',
            ],
            CURLOPT_POSTFIELDS => json_encode($payload),
            CURLOPT_TIMEOUT => 15,
        ]);

        $response = curl_exec($ch);
        $curlError = curl_error($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($curlError !== '') {
            throw new RuntimeException("Resend API request failed: {$curlError}");
        }

        if ($status >= 300) {
            throw new RuntimeException("Resend API returned status {$status}: {$response}");
        }
    }

    private function formatAddress(Address $address): string
    {
        return $address->getName() !== ''
            ? sprintf('%s <%s>', $address->getName(), $address->getAddress())
            : $address->getAddress();
    }

    public function __toString(): string
    {
        return 'resend+api://api.resend.com';
    }
}
