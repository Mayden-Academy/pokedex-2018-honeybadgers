<?php

use PHPUnit\Framework\TestCase;
use Pokedex\ViewHelpers\LoginViewHelper;
require_once ('../../../src/ViewHelpers/LoginViewHelper.php');

class TestLoginViewHelper extends TestCase
{

    public function testOutputErrorSuccess() {
        $errorMessage = LoginViewHelper::outputError(['error' => 1]);
        $this->assertEquals('Your email address is invalid', $errorMessage);
        $errorMessage = LoginViewHelper::outputError(['error' => 2]);
        $this->assertEquals('An unknown error has occurred. Please try again.', $errorMessage);
        $errorMessage = LoginViewHelper::outputError(['error' => 3]);
        $this->assertEquals('An email address is required', $errorMessage);
    }

    public function testOutputErrorFailure() {
        $errorMessage = LoginViewHelper::outputError(['error' => 'gibberish']);
        $this->assertEquals('An unknown error has occurred. Please try again.', $errorMessage);
    }

    public function testOutputErrorMalformed() {
        $get = 'gibberish';
        $this->expectException(TypeError::class);
        $errorMessage = LoginViewHelper::outputError($get);
    }
}