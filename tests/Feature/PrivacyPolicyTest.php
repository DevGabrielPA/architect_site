<?php

namespace Tests\Feature;

use Tests\TestCase;

class PrivacyPolicyTest extends TestCase
{
    public function test_privacy_policy_renders_in_every_locale(): void
    {
        config(['mail.contact_to' => 'privacy@example.com']);

        foreach (['' => 'en', '/pt' => 'pt', '/fr' => 'fr', '/es' => 'es', '/it' => 'it'] as $prefix => $locale) {
            $this->get($prefix . '/privacy-policy')
                ->assertOk()
                ->assertSee(trans('privacy.heading', [], $locale))
                ->assertSee('<a href="mailto:privacy@example.com">privacy@example.com</a>', false)
                ->assertDontSee(':email');
        }
    }

    public function test_footer_and_contact_form_link_to_privacy_policy(): void
    {
        $this->get('/pt/contact')
            ->assertOk()
            ->assertSee('class="cf-privacy-notice"', false)
            ->assertSee(locale_url_to('pt', '/privacy-policy'), false)
            ->assertDontSee(':link');
    }

    public function test_privacy_policy_is_in_sitemap(): void
    {
        $this->get('/sitemap.xml')->assertOk()->assertSee('/privacy-policy');
    }
}
