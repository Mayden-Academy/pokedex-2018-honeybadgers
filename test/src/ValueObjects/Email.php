<?php
use PHPUnit\Framework\TestCase;
use Pokedex\ValueObjects\Email;
require_once ('../../../src/Abstracts/AbstractEmail.php');
require_once ('../../../src/ValueObjects/Email.php');
require_once ('../../../src/Exceptions/EmailException.php');

class EmailTest extends TestCase
{

    public function testConstructPass() {
        $email = new Email('test@hotmail.com');
        $this->assertInstanceOf(Email::class, $email);
    }

    public function testConstructFail() {
        $this->expectException(\Pokedex\Exceptions\EmailException::class);
        $email = new Email('test');
    }

    public function testConstructMalformed() {
        $this->expectException(TypeError::class);
        $email = new Email([]);
    }

    public function testToString()  {
        $test = new Email('test@hotmail.com');
        $test = (string)$test;
        $this->assertEquals('test@hotmail.com', $test);
    }
}