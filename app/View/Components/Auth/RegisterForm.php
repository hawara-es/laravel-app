<?php

namespace App\View\Components\Auth;

use App\Traits\HasBags;
use Illuminate\View\Component;

class RegisterForm extends Component
{
    use HasBags;

    /**
     * Create the component instance.
     *
     * @param array|null $bags
     * @return void
     */
    public function __construct(array $bags = [])
    {
        $this->setBags($bags);
        $this->setAutoIds(['name', 'email', 'password', 'password_confirmation']);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.auth.register-form');
    }
}
