<?php

namespace Tests\Unit\Components\Auth;

use Illuminate\Support\Facades\Blade;
use Tests\AppTestCase as TestCase;

class ForgotPasswordFormTest extends TestCase
{
    private function render() {
        $result = Blade::render('<x-auth.forgot-password-form />');
        $this->crawl($result);
        return $this->crawler->filter('form.auth-forgot-password-form');
    }

    public function test_the_component_renders_a_form()
    {
        $form = $this->render();
        $this->assertEquals(1, $form->count());
    }

    public function test_the_method_is_post()
    {
        $form = $this->render();
        $this->assertEquals(1, $form->filter('[method=post]')->count());
    }

    public function test_the_action_targets_user_confirm_password()
    {
        $form = $this->render();
        $this->assertEquals(1, $form->filter('[action$="forgot-password"]')->count());
    }

    public function test_the_form_has_a_submit_button()
    {
        $form = $this->render();
        $this->assertEquals(1, $form->filter('button[type=submit]')->count());
    }

    public function test_the_form_has_an_email_field()
    {
        $form = $this->render();
        $this->assertEquals(1, $form->filter('input[name=email]')->count());
    }
}
