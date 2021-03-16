<?php 
namespace src\juno\integration\api\services; 

class JunoApiConfig {
    public static const TOKEN_TIMEOUT = 5000;
    public static const CACHE_TIMEOUT = 6 * 60 * 60 * 1000;

    public $clientId;
    public $clientSecret;
    public $publicToken;
    public $idempotencyKey;
    public $env;

    JunoApiConfig() {
        $sandbox();
        UnirestConfig::configure();
    }
    public production(){
        $this->env = new ProductionEnviroment;
        return $this->env;
    }

}
?>