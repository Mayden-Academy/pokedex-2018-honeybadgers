<?php

use PHPUnit\Framework\TestCase;
use Pokedex\ViewHelpers\LoginViewHelper;
require_once ('../../../src/ViewHelpers/LoginViewHelper.php');

class TestLoginViewHelper extends TestCase
{

    public $get = [
        'error' => 1
    ];

    public function testOutputErrorSuccess() {
        $errorMessage = LoginViewHelper::outputError($this->get);
        $this->assertEquals('Your email address is invalid', $errorMessage);
    }

    public function testOutputErrorFailure() {
        $get = ['error' => 'gibberish'];
        $errorMessage = LoginViewHelper::outputError($get);
        $this->assertEquals('An unknown error has occurred. Please try again.', $errorMessage);
    }

    public function testOutputErrorMalformed() {
        $get = 'gibberish';
        $this->expectException(TypeError::class);
        $errorMessage = LoginViewHelper::outputError($get);
    }
}