<?php

namespace TamoJuno;

use TamoJuno\Resource;

class Data extends Resource
{
    public function endpoint(): string
    {
        return 'data';
    }

    public function getBanks()
    {
        return $this->get('banks');
    }

    public function getCompanyTypes()
    {
        return $this->get('company-types');
    }

    public function getBusinessAreas()
    {
        return $this->get('business-areas');
    }
}