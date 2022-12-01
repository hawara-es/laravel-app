<?php

namespace App\View\Components\Form;

use App\Traits\HasBags;
use Illuminate\View\Component;

class Input extends Component
{
    use HasBags;

    /**
     * Input DOM id.
     *
     * @var string
     */
    public $id;

    /**
     * Create the component instance.
     *
     * @param  string|null  $id
     * @param  array|null  $bags
     * @return void
     */
    public function __construct(string $id = null, array $bags = [])
    {
        if ($id) {
            $bags['input']['id'] = $id;
        }

        $this->setBags($bags);
        $this->setAutoIds(['input']);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input');
    }
}
