<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class Form extends Component
{
    /**
     * HTTP verb.
     *
     * @var string
     */
    public $verb;

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
     * Form action attribute.
     *
     * @var string
     */
    public $action;

    /**
     * If provided, the action will be set to the
     * URL corresponding to the `$actionRoute` route.
     *
     * @var string
     */
    public $actionRoute;

    /**
     * Form legend.
     *
     * @var string
     */
    public $legend;

    /**
     * Direction of fields.
     *
     * There are two valid values: col & row.
     *
     * @var string
     */
    public $direction;

    /**
     * Create the component instance.
     *
     * @param string|null $verb
     * @param string|null $action
     * @param string|null $actionRoute
     * @param string|null $direction
     * @return void
     */
    public function __construct(
        $verb = 'GET',
        $action = null,
        $actionRoute = null,
        $legend = null,
        $direction = 'col')
    {
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

        if (! is_null($legend)) {
            $this->legend = $legend;
        }

        if (in_array($direction, ['col', 'row'])) {
            $this->direction = $direction;
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