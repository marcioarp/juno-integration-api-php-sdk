<?php
namespace TamoJuno;

use TamoJuno\Resource;

class Webhook extends Resource {

    public function endpoint(): string
    {
        return 'notifications/webhooks';
    }

    public function create(array $form_params = [])
    {
        return $this->create($form_params);
    }
}
