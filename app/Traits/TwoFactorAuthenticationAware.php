<?php

namespace App\Traits;

use Laravel\Fortify\Features;

trait TwoFactorAuthenticationAware
{
    public function twoFactorIsEnabled() {
        $user = auth()->user();

        return $user && $user->two_factor_secret;
    }

    public function twoFactorIsConfirmed() {
        $user = auth()->user();

        return $this->twoFactorIsEnabled() && (bool) $user->two_factor_confirmed_at;
    }

    public function twoFactorQrCode() {
        if ($this->twoFactorIsEnabled()) {
            return auth()->user()->twoFactorQrCodeSvg();
        }
    }

    public function twoFactorRecoveryCodes() {
        if ($this->twoFactorIsEnabled()) {
            return auth()->user()->recoveryCodes();
        }
    }

    public function confirmPasswordIsEnabled() {
        return Features::optionEnabled('two-factor-authentication', 'confirmPassword');
    }

    public function passwordIsConfirmed() {
        return (time() - session()->get('auth.password_confirmed_at', 0)) < config('auth.password_timeout', 900);
    }
}
