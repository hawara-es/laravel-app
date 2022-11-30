<?php

namespace App\View\Components;

use App\Traits\HasBags;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class Form extends Component
{
    use HasBags;

    /**
     * > Since HTML forms can't make PUT, PATCH, or
     * > DELETE requests, you will need to add a
     * > hidden _method field to spoof these HTTP
     * > verbs.
     *
     * @var string
     * @see https://laravel.com/docs/9.x/blade#forms
     */
    public $_method;

    /**
     * Create the component instance.
     */
    public function __construct(
        public ?string $id = null,
        public ?string $verb = 'GET',
        public ?string $action = null,
        public ?string $actionRoute = null,
        public ?string $legend = null,
        public ?string $direction = 'col',
        ?array $bags = [])
    {
        if (! in_array($direction, ['col', 'row'])) {
            throw new \InvalidArgumentException('Only col and row are valid values for the direction.');
        }

        if ($id) {
            $bags['form']['id'] = $id;
        }

        $this->setBags($bags);
        $this->setAutoIds(['form', 'fieldset', 'submit']);

        if (in_array($verb, ['PUT', 'PATCH', 'DELETE'])) {
            $this->verb = 'POST';
            $this->_method = $verb;
        } elseif (in_array($verb, ['GET', 'POST'])) {
            $this->verb = $verb;
            $this->_method = null;
        }

        if (!is_null($actionRoute) && Route::has($actionRoute)) {
            $this->action = route($actionRoute);
        } else {
            $this->action = $action;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.index');
    }
}