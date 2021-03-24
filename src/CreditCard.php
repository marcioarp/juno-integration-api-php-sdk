<?php

namespace TamoJuno;

class creditCard extends Resource {

    public function endpoint(): string
    {
        return 'credit-cards/tokenization';
    }

    public function tokenization(array $form_params = [])
    {
        return $this->create($form_params);
    }
}
