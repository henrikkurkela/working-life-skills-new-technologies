<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getDashboard()
    {
        try {
            $tasks = Task::where(['user_id' => auth()->id()])->get();
            return view('dashboard', [
                'tasks' => $tasks ?? []
            ]);
        } catch (\Exception $error) {
            return redirect()->back()->with('error', 'Unable to load dashboard, try again later.');
        }
    }
}
