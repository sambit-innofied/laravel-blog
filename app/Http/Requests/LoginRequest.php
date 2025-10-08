<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules()
    {
        return [
            "email" => "required|string|email|exists:users,email",
            "password" => "required|string"
        ];
    }

    public function data($key = null, $default = null)
    {
        return [
            "email" => $this->input("email"),
            "password" => $this->input("password")
        ];
    }
}