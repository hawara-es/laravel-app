<?php

namespace App\View\Components\Auth;

use App\Traits\HasBags;
use App\Traits\TwoFactorAuthenticationAware;
use Illuminate\Support\ViewErrorBag;
use Illuminate\View\Component;

class ConfirmPasswordForm extends Component
{
    use HasBags, TwoFactorAuthenticationAware;

    /**
     * Form errors to display.
     *
     * @var Illuminate\Support\ViewErrorBag|null
     */
    public $errors;

    /**
     * Create the component instance.
     *
     * @param  ViewErrorBag|null  $errors
     * @param  array|null  $bags
     * @return void
     */
    public function __construct(ViewErrorBag $errors, array $bags = [])
    {
        $this->errors = $errors;
        $this->setBags($bags);
        $this->setAutoIds(['password']);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.auth.confirm-password-form');
    }
}
