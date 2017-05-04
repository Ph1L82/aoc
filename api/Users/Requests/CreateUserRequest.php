<?php

namespace Api\Users\Requests;

use Infrastructure\Http\ApiRequest;

class CreateUserRequest extends ApiRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user' => 'array|required',
            'user.email' => 'required|email',
            'user.name' => 'required|string',
            'user.password' => 'required|string|min:8',
            'user.department_id' => 'required|integer',
            'user.role' => 'required|string'
        ];
    }

    public function attributes()
    {
        return [
            'user.email' => 'the user\'s email'
        ];
    }
}
