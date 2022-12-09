<?php

namespace App\View\Components\Auth;

use App\Traits\HasBags;
use App\Traits\TwoFactorAuthenticationAware;
use Illuminate\View\Component;

class TwoFactorQrCode extends Component
{
    use HasBags, TwoFactorAuthenticationAware;

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.auth.two-factor-qr-code');
    }
}
