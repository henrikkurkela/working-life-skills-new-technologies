<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Task extends Component
{
    public $id;
    public $task;

    public function __construct($id, $task)
    {
        $this->id = $id;
        $this->task = $task;
    }

    public function render()
    {
        return view('components.task');
    }
}
