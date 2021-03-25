<?php

namespace TamoJuno;

class Charge extends Resource {

    public function endpoint(): string
    {
        return 'charges';
    }

    public function createCharge(array $form_params = [])
    {
        return $this->create($form_params);
    }
}
