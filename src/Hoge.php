<?php declare(strict_types=1);

namespace App;

class Hoge
{
    public function hello(): string
    {
        return "hello";
    }
}

$hoge = new Hoge();
$result = $hoge->hello();