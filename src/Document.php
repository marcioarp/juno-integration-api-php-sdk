<?php

namespace TamoJuno;

use TamoJuno\Resource;

class Document extends Resource
{
    public function endpoint(): string
    {
        return 'documents';
    }

    // public function createDigitalAccount(array $form_params = [])
    // {
    //     return $this->create($form_params);
    // }

    public function getDocuments()
    {
        return $this->all();
    }

    public function getDocument($id)
    {
        return $this->retrieve($id);
    }

    public function uploadDocuments($id = null, array $form_params = [])
    {
        return $this->post($id, 'files', $form_params, 'multipart');
    }
}
