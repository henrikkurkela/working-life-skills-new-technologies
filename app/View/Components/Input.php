<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $name;
    public $label;
    public $autocomplete;

    public function __construct($type, $name, $label, $autocomplete)
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->autocomplete = $autocomplete;
    }

    public function render()
    {
        return view('components.input');
    }
}
