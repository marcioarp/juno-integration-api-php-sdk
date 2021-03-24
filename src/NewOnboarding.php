<?php

namespace TamoJuno;

use TamoJuno\Resource;

class NewOnboarding extends Resource {

    public function endpoint(): string
    {
        return 'onboarding/link-request';
    }

    public function createWhitelabel(array $form_params = [])
    {
        return $this->create($form_params);
    }
}