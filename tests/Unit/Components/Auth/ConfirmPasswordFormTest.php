<?php

namespace Tests\Unit\Components\Auth;

use Illuminate\Support\Facades\Blade;
use Tests\AppTestCase as TestCase;

class ConfirmPasswordFormTest extends TestCase
{
    private function render() {
        $result = Blade::render('<x-auth.confirm-password-form />');
        $this->crawl($result);
        return $this->crawler->filter('form.auth-confirm-password');
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
        $this->assertEquals(1, $form->filter('[action$="/user/confirm-password"]')->count());
    }

    public function test_the_form_has_a_submit_button()
    {
        $form = $this->render();
        $this->assertEquals(1, $form->filter('button[type=submit]')->count());
    }

    public function test_the_form_has_a_password_field()
    {
        $form = $this->render();
        $this->assertEquals(1, $form->filter('input[name=password]')->count());
    }
}
