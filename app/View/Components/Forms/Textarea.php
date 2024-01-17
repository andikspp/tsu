<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    public $label;
    public $id;
    public $name;
    public $value;
    public $isRequired;
    public $hintText;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $label = "",
        $id = "",
        $name = "",
        $value = "",
        $isRequired = false,
        $hintText = null
    ) {
        $this->label = $label;
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
        $this->isRequired = $isRequired;
        $this->hintText = $hintText;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.textarea');
    }
}
