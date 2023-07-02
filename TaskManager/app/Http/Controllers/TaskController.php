<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Task;

class TaskController extends Controller
{
   
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }


    public function store(Request $request)
    {
        $request->validate([
            'título' => 'required',
            'descrição' => 'required',
            'status' => 'required',
        ]);

        $tasks = Task::create($request->all());
        return response()->json($tasks);
    }


    public function show(Task $tasks)
    {
        return response()->json($tasks);
    }

    public function update(Request $request, Task $tasks)
    {
        $tasks->update($request->all());
        return response()->json($tasks);
    }


    public function destroy(Task $tasks)
    {
        $tasks->delete();
        return response()->json(null, 204);
    }
}
