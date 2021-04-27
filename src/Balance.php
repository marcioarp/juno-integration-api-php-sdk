<?php

namespace TamoJuno;

class Balance extends Resource
{
    public function endpoint(): string
    {
        return 'balance';
    }

    public function retrieveBalance()
    {
        return $this->all();
    }
}
