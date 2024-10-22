<?php

namespace App\Http\Controllers\Api\V1;


use App\Models\Task;
use App\Http\Requests\store;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use Illuminate\Http\RedirectResponse;
// use App\Http\Requests\StoreTaskRequest;
// use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
   
    public function index()
    {
        return TaskResource::collection(Task::all());
    }
    public function show(Task $task){
        return TaskResource::make($task);
    }
    public function store(store $request)
    {
        $task=Task::create($request->validated());
        return TaskResource::make($task);
    }
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}