<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array
     */
    protected function passwordRules()
    {
        /**
         * Facilitate enabling and disabling the password
         * confirmation field via configuration.
         */
        if (config('fortify.use_password_confirm')) {
            return ['required', 'string', new Password, 'confirm'];
        }

        return ['required', 'string', new Password];
    }
}
