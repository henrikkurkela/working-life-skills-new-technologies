<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class TasksController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'task' => 'required'
        ]);

        try {
            $task = Task::create([
                'task' => $request->task,
                'user_id' => auth()->id()
            ]);
            return redirect('dashboard');
        } catch (\Exception $error) {
            return redirect('dashboard')->withErrors($error->getMessage());
        }
    }

    public function delete(Request $request, $id)
    {
        try {
            $task = Task::where([
                'id' => $id,
                'user_id' => auth()->id()
            ])->firstOrFail();
            $task->delete();
            return redirect('dashboard');
        } catch (\Exception $error) {
            return redirect('dashboard')->withErrors($error->getMessage());
        }
    }
}
