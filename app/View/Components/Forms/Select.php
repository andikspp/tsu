<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    public $label;
    public $id;
    public $name;
    public $options;
    public $selected;
    public $isRequired;
    public $hintText;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $label = "",
        $id = "",
        $name = "",
        $options = [],
        $selected = null,
        $isRequired = false,
        $hintText = null
    ) {
        $this->label = $label;
        $this->id = $id;
        $this->name = $name;
        $this->options = $options;
        $this->selected = $selected;
        $this->isRequired = $isRequired;
        $this->hintText = $hintText;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.select');
    }
}
