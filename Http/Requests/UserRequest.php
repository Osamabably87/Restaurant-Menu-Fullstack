<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PHPStan\PhpDocParser\Ast\Type\ThisTypeNode;

class UserRequest extends FormRequest
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
        $id=$this->route('id');
       return [
              'name' => 'required|string|filled|min:3|max:255',
              'email' => ['required','email','unique:users,email,'.$id],
             'password' => ['required', 'confirmed', 'min:8'],
        ];
    }
}
