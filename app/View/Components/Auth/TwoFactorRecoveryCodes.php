<?php

namespace App\View\Components\Auth;

use App\Traits\HasBags;
use App\Traits\TwoFactorAuthenticationAware;
use Illuminate\View\Component;

class TwoFactorRecoveryCodes extends Component
{
    use HasBags, TwoFactorAuthenticationAware;

    /**
     * Create the component instance.
     *
     * @param  array|null  $bags
     * @return void
     */
    public function __construct(array $bags = [])
    {
        $this->setBags($bags);
        $this->setAutoIds(['help']);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.auth.two-factor-recovery-codes');
    }
}
