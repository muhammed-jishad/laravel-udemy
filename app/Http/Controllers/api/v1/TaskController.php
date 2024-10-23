<?php

namespace App\Http\Controllers\Api\V1;


use App\Models\Task;
use App\Http\Requests\store;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;
use App\Http\Resources\TaskResource;
use Illuminate\Http\RedirectResponse;


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
    public function update(UpdateRequest $request, Task $task)
    {
        $task->update($request->validated());
        return TaskResource::make($task);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}