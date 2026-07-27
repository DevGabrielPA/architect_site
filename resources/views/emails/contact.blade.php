<!DOCTYPE html>
<html>
<body style="font-family: sans-serif; color: #333; line-height: 1.6;">
    <h2 style="color: #6b3527;">New website inquiry</h2>

    <p><strong>Name:</strong> {{ $data['full_name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone_full'] }}</p>
    <p><strong>Estimated budget:</strong> {{ $data['budget'] }}</p>

    <hr>
    <p style="color: #888; font-size: 12px;">Sent from the contact form at {{ config('app.url') }}</p>
</body>
</html>
