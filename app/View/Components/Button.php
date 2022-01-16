<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $color;
    public $type;

    public function __construct($color = 'red', $type = 'submit')
    {
        $this->color = $color;
        $this->type = $type;
    }

    public function render()
    {
        return view('components.button');
    }
}
