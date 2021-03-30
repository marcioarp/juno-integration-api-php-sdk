<?php

namespace TamoJuno;

class CreditCard extends Resource {

    public function endpoint(): string
    {
        return 'credit-cards/tokenization';
    }

    public function tokenizeCard(array $form_params = [])
    {
        return $this->create($form_params);
    }
}
