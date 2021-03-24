<?php

namespace TamoJuno;

class Plan extends Resource {

    public function endpoint(): string
    {
        return 'plans';
    }

    public function createPlan(array $form_params = [])
    {
        return $this->create($form_params);
    }

    public function activation($id, array $form_params = [])
    {
        return $this->post($id, 'activation', $form_params);
    }

    public function deactivation($id, array $form_params = [])
    {
        return $this->post($id, 'deactivation', $form_params);
    }

    public function getPlan($id)
    {
        return $this->retrieve($id);
    }

    public function getPlans()
    {
        return $this->retrieveAll();
    }
}
