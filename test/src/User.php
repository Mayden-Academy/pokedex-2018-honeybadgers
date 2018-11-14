<?php
use PHPUnit\Framework\TestCase;
use Pokedex\ValueObjects\Email;
use Pokedex\User;
require_once ('../../src/User.php');
require_once ('../../src/Abstracts/AbstractEmail.php');
require_once ('../../src/ValueObjects/Email.php');

class UserTest extends TestCase {

    public function testUserExists(){
        $mockPDO = $this->createMock(PDO::class);
        $mockStmt = $this->createMock(PDOStatement::class);

        $mockStmt->method('execute')->willReturn(true);
        $mockStmt->method('rowCount')->willReturn(1);

        $mockPDO->method('prepare')->willReturn($mockStmt);

        $mockEmail = $this->createMock(Email::class);

        $user = new User($mockEmail, $mockPDO);
        $this->assertInstanceOf(User::class, $user);
    }

    public function testUserDoesntExist(){
        $mockPDO = $this->createMock(PDO::class);
        $mockStmt = $this->createMock(PDOStatement::class);

        $mockStmt->method('execute')->willReturn(true);
        $mockStmt->method('rowCount')->willReturn(0);

        $mockPDO->method('prepare')->willReturn($mockStmt);

        $mockEmail = $this->createMock(Email::class);

        $user = new User($mockEmail, $mockPDO);
        $this->assertInstanceOf(User::class, $user);
    }

}
