<?php

namespace TamoJuno;

use TamoJuno\Resource;

class Data extends Resource
{
    public function endpoint(): string
    {
        return 'data';
    }

    public function getBanks($id = null, $action = null)
    {
        return $this->get($id, 'banks');
    }

    public function getCompanyTypes($id = null, $action = null)
    {
        return $this->get($id, 'company-types');
    }

    public function getBusinessAreas($id = null, $action = null)
    {
        return $this->get($id, 'business-areas');
    }
}