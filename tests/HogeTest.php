<?php
require_once(dirname(__FILE__)."/../src/Hoge.php");

use PHPUnit\Framework\TestCase;
use src\Hoge;

class HogeTest extends TestCase
{
    public function test_hello(): void
    {
        // when:
        $hoge = new Hoge();
        $actual = $hoge->hello();

        // then:
        $this->assertSame("hello", $actual);
    }
}
