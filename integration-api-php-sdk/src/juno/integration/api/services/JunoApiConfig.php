<?php 
namespace src\juno\integration\api\services; 

class JunoApiConfig {
    public const TOKEN_TIMEOUT = 5000;
    public const CACHE_TIMEOUT = 6 * 60 * 60 * 1000;

    public $clientId;
    public $clientSecret;
    public $publicToken;
    public $idempotencyKey;
    public $Environment;

    /*JunoApiConfig() {
        $sandbox();
        UnirestConfig::configure();
    }
    function JunoApiConfig::production(){
        $this->env = new ProductionEnviroment;
        return $this->env;
    } */

}
?>