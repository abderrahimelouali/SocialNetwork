<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class profileRequest extends FormRequest
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
            'name' => 'required|min:3|max:50',
            'email' => [
                'required',
                'email',
                Rule::unique('profiles'),
            ],
            'password' => 'required|min:6|max:55|confirmed',
            'bio' => 'nullable|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // 2MB max
        ];
    }
}
