<?php

namespace TamoJuno;

use TamoJuno\Resource;

class AccessToken extends Resource
{

    public function endpoint(): string
    {
        return 'oauth/token';
    }

}