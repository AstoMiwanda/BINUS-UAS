<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Validation\ValidationException;

class PasswordValidationTest extends TestCase
{
    /**
     * @throws ValidationException
     */
    public function test_valid_password_passes_validation()
    {
        $password = 'V4lid!';

        $this->assertTrue(validatePassword($password));
    }

    public function test_invalid_password_fails_validation()
    {
        $this->expectException(ValidationException::class);

        $password = 'invalid';

        validatePassword($password);
    }
}
