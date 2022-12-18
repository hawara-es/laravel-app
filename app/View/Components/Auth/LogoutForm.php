<?php

namespace App\View\Components\Auth;

use Illuminate\View\Component;

class LogoutForm extends Component
{
    /**
     * Show the form to guest users.
     *
     * @var bool
     */
    public $showToGuest;

    /**
     * Create the component instance.
     *
     * @param  bool|null  $showToGuest
     * @return void
     */
    public function __construct(bool $showToGuest = false)
    {
        $this->showToGuest = $showToGuest;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.auth.logout-form');
    }
}
