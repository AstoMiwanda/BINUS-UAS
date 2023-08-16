<?php

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

/**
 * @throws ValidationException
 */
function validatePassword($password): array
{
    $rules = [
        'password' => [
            'required',
            'min:8',
            'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
        ],
    ];

    return Validator::make(['password' => $password], $rules)->validate();
}
