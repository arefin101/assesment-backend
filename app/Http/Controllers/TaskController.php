<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function addTask(Request $request)
    {
        $new_task = new Task();

        $new_task->name = $request->name;
        $new_task->level = 0;

        $new_task->save();

        return response(['new_task' => $new_task], 201);

    }

    public function getTasks()
    {
        $tasks = Task::get();

        return response(['tasks' => $tasks], 200);

    }

    public function upadateTask($id, Request $request)
    {

        $task = Task::find($id);

        $task->level = $request->level;

        $task->save();

        return response(['task' => $task], 200);

    }

}
