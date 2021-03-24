<?php

namespace TamoJuno;

class Charge extends Resource {

    public function endpoint(): string
    {
        return 'charges';
    }

    public function create(array $form_params = [])
    {
        return $this->create($form_params);
    }
}
