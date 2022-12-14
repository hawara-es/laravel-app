<?php

namespace App\View\Components\Form;

use App\Traits\HasBags;
use Illuminate\Support\ViewErrorBag;
use Illuminate\View\Component;

class Errors extends Component
{
    use HasBags;

    /**
     * Form errors to display.
     *
     * @var \Illuminate\Support\ViewErrorBag|null
     */
    public $errors;

    /**
     * Create the component instance.
     *
     * @param  \Illuminate\Support\ViewErrorBag|null  $errors
     * @param  array|null  $bags
     * @return void
     */
    public function __construct(ViewErrorBag $errors, array $bags = [])
    {
        $this->errors = $errors;
        $this->setBags($bags);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.errors');
    }
}
