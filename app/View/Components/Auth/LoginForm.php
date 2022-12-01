<?php

namespace App\View\Components\Auth;

use App\Traits\HasBags;
use Illuminate\View\Component;

class LoginForm extends Component
{
    use HasBags;

    /**
     * Create the component instance.
     *
     * @param  array|null  $bags
     * @return void
     */
    public function __construct(array $bags = [])
    {
        $this->setBags($bags);
        $this->setAutoIds(['email', 'password', 'remember']);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.auth.login-form');
    }
}
