<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getDashboard(Request $request)
    {
        $request->validate([
            'mode' => 'nullable|in:table,cards'
        ]);

        try {
            if ($request->mode) {
                $request->session()->put('mode', $request->mode);
            }

            $tasks = Task::where(['user_id' => auth()->id()])->get();

            return view('home', [
                'tasks' => $tasks ?? []
            ]);
        } catch (\Exception $error) {
            return redirect()->back()->with('error', 'Unable to load dashboard, try again later.');
        }
    }
}
