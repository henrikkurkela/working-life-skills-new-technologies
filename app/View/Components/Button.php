<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $text;
    public $color;
    public $type;

    public function __construct($text, $color, $type)
    {
        $this->text = $text;
        $this->color = $color;
        $this->type = $type;
    }

    public function render()
    {
        return view('components.button');
    }
}
