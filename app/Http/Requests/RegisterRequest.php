<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            "name" => "required|string|max:255",
            "email" => "required|unique:users,email",
            "password" => "required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).+$/"
        ];
    }

    public function attributes(): array
    {
        return [
            "name" => "Tên",
            "email" => "Email",
            "password" => "Password",
        ];
    }

    public function messages(): array
    {
        return [
            "required" => ":attribute không được để trống",
            "unique" => ":attribute đã tồn tại",
            "min" => ":attribute ít nhất có :value ký tự",
            "regex" => ":attribute phải có chứa ký tự đặc biệt, chữ hoa và chữ thường"
        ];
    }
}
