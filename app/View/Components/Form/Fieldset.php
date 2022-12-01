<?php

namespace App\View\Components\Form;

use App\Traits\HasBags;
use Illuminate\View\Component;

class Fieldset extends Component
{
    use HasBags;

    /**
     * Fieldset legend.
     *
     * @var string
     */
    public $legend;

    /**
     * Direction followed to stack the label and the input.
     *
     * There are two valid values: col & row.
     *
     * @var string
     */
    public $direction;

    /**
     * Create the component instance.
     *
     * @param  string|null  $legend
     * @param  string|null  $direction
     * @param  array|null  $bags
     * @return void
     */
    public function __construct($legend = null, $direction = 'col', array $bags = [])
    {
        $this->legend = $legend;

        if (in_array($direction, ['col', 'row'])) {
            $this->direction = $direction;
        }

        $this->setBags($bags);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.fieldset');
    }
}
