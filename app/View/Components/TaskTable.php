<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TaskTable extends Component
{
    public $tasks;

    public function __construct($tasks = [])
    {
        $this->tasks = $tasks;
    }

    public function render()
    {
        return view('components.task-table');
    }
}
