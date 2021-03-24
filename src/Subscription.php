<?php

namespace TamoJuno;

use TamoJuno\Resource;

class Subscription extends Resource {

    public function endpoint(): string
    {
        return 'subscriptions';
    }

    public function createSubscription(array $form_params = [])
    {
        return $this->create($form_params);
    }

    public function simulation($id, array $form_params = [])
    {
        return $this->post($id, 'simulation', $form_params);
    }

    public function activation($id, array $form_params = [])
    {
        return $this->post($id, 'activation', $form_params);
    }

    public function deactivation($id, array $form_params = [])
    {
        return $this->post($id, 'deactivation', $form_params);
    }

    public function cancelation($id, array $form_params = [])
    {
        return $this->post($id, 'cancelation', $form_params);
    }

    public function completion($id, array $form_params = [])
    {
        return $this->post($id, 'completion', $form_params);
    }

    public function getSubscription($id)
    {
        return $this->retrieve($id);
    }

    public function getSubscriptions()
    {
        return $this->retrieveAll();
    }

}
