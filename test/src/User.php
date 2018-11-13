<?php
use PHPUnit\Framework\TestCase;
use Pokedex\ValueObjects\Email;
use Pokedex\User;
require_once ('../../src/User.php');
require_once ('../../src/AbstractEmail.php');
require_once ('../../src/ValueObjects/Email.php');

class UserTest extends TestCase {

    public function testUserExists(){
        $mockPDO = $this->createMock(PDO::class); //create mock of database object e.g PDO::class
        $mockStmt = $this->createMock(PDOStatement::class); //create a mock of stmt object which is used by the prepare method on line 18

        $mockStmt->method('execute')->willReturn(true); //mock these because these methods are called on stmt
        $mockStmt->method('rowCount')->willReturn(1); //mock these because these methods are called on stmt

        $mockPDO->method('prepare')->willReturn($mockStmt);

        $mockEmail = $this->createMock(Email::class); //mock the email address note lines 3,6,7

        $user = new User($mockEmail, $mockPDO);
        $this->assertInstanceOf(User::class, $user);
    }

    public function testUserDoesntExist(){
        $mockPDO = $this->createMock(PDO::class); //create mock of database object e.g PDO::class
        $mockStmt = $this->createMock(PDOStatement::class); //create a mock of stmt object which is used by the prepare method on line 18

        $mockStmt->method('execute')->willReturn(true); //mock these because these methods are called on stmt
        $mockStmt->method('rowCount')->willReturn(0); //mock these because these methods are called on stmt

        $mockPDO->method('prepare')->willReturn($mockStmt);

        $mockEmail = $this->createMock(Email::class); //mock the email address note lines 3,6,7

        $user = new User($mockEmail, $mockPDO);
        $this->assertInstanceOf(User::class, $user);
    }

}
