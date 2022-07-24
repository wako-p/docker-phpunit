<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Hoge;

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
