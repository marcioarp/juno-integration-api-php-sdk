<?php

namespace TamoJuno;

use TamoJuno\Resource;

class DigitalAccount extends Resource {

    public function endpoint(): string
    {
        return 'digital-accounts';
    }

    public function createDigitalAccount(array $form_params = [])
    {
        return $this->create($form_params);
    }

    public function retrieveDigitalAccount()
    {
        return $this->retrieveAll();
    }

    public function updateDigitalAccount(array $form_params = [])
    {
        return $this->updateSome($form_params);
    }

}
