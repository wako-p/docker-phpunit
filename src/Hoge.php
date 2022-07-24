<?php

namespace src;

class Hoge
{
    public function hello(): string
    {
        return "hello";
    }
}

$hoge = new Hoge();
$result = $hoge->hello();