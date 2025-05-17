<?php

namespace App\Http\Controllers;

use App\Enums\Status;
use App\Http\Resources\TaskResource;
use App\Models\Task;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $totalPendingTasks = Task::query()
            ->where('status', Status::Pending)
            ->count();
        $myPendingTasks = Task::query()
            ->where('status', Status::Pending)
            ->where('assigned_user_id', $user->id)
            ->count();


        $totalProgressTasks = Task::query()
            ->where('status', Status::InProgress)
            ->count();
        $myProgressTasks = Task::query()
            ->where('status', Status::InProgress)
            ->where('assigned_user_id', $user->id)
            ->count();


        $totalCompletedTasks = Task::query()
            ->where('status', Status::Completed)
            ->count();
        $myCompletedTasks = Task::query()
            ->where('status', Status::Completed)
            ->where('assigned_user_id', $user->id)
            ->count();

        $activeTasks = Task::query()
            ->whereIn('status', [Status::Pending, Status::InProgress])
            ->where('assigned_user_id', $user->id)
            ->limit(10)
            ->get();
        $activeTasks = TaskResource::collection($activeTasks);
        return inertia("Dashboard", compact(
            "totalPendingTasks",
            "myPendingTasks",
            "totalProgressTasks",
            "myProgressTasks",
            "totalCompletedTasks",
            "myCompletedTasks",
            "activeTasks",
        ));
    }
}
