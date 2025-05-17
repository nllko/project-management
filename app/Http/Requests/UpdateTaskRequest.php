<?php

namespace App\Http\Requests;

use App\Enums\Priority;
use App\Enums\Status;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class UpdateTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "project_id" => ["required", Rule::exists("projects", "id")],
            "name" => ["required", "max:255"],
            "description" => ["nullable", "string"],
            "status" => ["required", Rule::enum(Status::class)],
            "priority" => ["required", Rule::enum(Priority::class)],
            "assigned_user_id" => ["required", Rule::exists("users", "id")],
            "image_path" => ["nullable", File::image()],
            "due_date" => ["nullable", "date", Rule::date()->after(today())]
        ];
    }
}
