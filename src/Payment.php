<?php

namespace TamoJuno;

use TamoJuno\Resource;

class Payment extends Resource {

    public function endpoint(): string
    {
        return 'payments';
    }

    public function createPayment(array $form_params = [])
    {
        return $this->create($form_params);
    }

    public function capture($id = null, $action = null, array $form_params = [])
    {
        return $this->post($id, 'capture', $form_params);
    }

    public function refunds($id = null, $action = null, array $form_params = [])
    {
        return $this->post($id, 'refunds', $form_params);
    }
}