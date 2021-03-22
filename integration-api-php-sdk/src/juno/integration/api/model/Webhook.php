<?php
namespace src\juno\integration\api\model;

class Webhook extends BaseModel {
    private $url;
    private $secret;
    private $status; // TODO: Create enum structure
    private $eventTypes = [];
}
?>