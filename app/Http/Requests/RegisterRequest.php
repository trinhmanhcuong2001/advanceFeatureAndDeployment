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
            'name' => 'required|string|max:255',
            'email' => 'email|required|unique:users,email',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).+$/',

        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Trường :attribute không được để trống',
            'email' => 'Email phải đúng định dạng',
            'unique' => ':attribute đã tồn tại',
            'regex' =>  ':attribute phải chứa cả ký từ đặc biệt, chữ hoa và chữ thường',
            'min' => 'Trường :attribute phải ít nhất :value ký tự'
        ];
    }
}
