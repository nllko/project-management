<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = User::query();

        $sortField = request("sort_field", "created_at");
        $sortDirection = request("sort_direction", "desc");

        if (request("name")) {
            $query->where("name", "like", "%" . request("name") . "%");
        }
        if (request("email")) {
            $query->where("email", "like", "%" . request("email") . "%");
        }
        $users = $query->orderBy($sortField, $sortDirection)->paginate(10)->onEachSide(1);

        return inertia("User/Index", [
            "users" => UserResource::collection($users),
            "queryParams" => request()->query() ?: null,
            "success" => session("success"),
        ]);
    }
}
