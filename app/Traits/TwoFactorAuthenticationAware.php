<?php

namespace App\Traits;

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
}
