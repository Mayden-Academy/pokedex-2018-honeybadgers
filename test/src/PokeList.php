<?php
use PHPUnit\Framework\TestCase;
use Pokedex\PokeList;
require_once ('../../src/PokeList.php');

class PokeListTest extends TestCase {

    public function testConstructPass() {
        $mockPDO = $this->createMock(PDO::class);
        $mockStmt = $this->createMock(PDOStatement::class);

        $mockPDO->method('prepare')->willReturn($mockStmt);
        $mockStmt->method('execute')->willReturn(true);
        $mockStmt->method('fetchAll')->willReturn([]);

        $pokeList = new PokeList($mockPDO);
        $this->assertInstanceOf(PokeList::class, $pokeList);
    }
}