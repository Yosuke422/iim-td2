<?php

declare(strict_types=1);

namespace Iim\Td2;

class Api 
{
    public function getRandomNumber(): int 
    {
        return rand(0,100);
    }
}