<?php 
namespace src\juno\integration\api\services; 

class JunoApiManager {
    public const CONTENT_TYPE_HEADER = "Content-type";
    public const CONTENT_ENCODING_HEADER = "Content-encoding";
    public const X_RESOURCE_TOKEN = "X-Resource-Token";
    public const X_API_VERSION = "X-API-Version";
    

}
//Teste 
var_dump(JunoApiManager::CONTENT_TYPE_HEADER);
echo "<br/><br/><br/>";
var_dump(JunoApiManager::CONTENT_ENCODING_HEADER);
echo "<br/><br/><br/>";
var_dump(JunoApiManager::X_API_VERSION);
echo "<br/><br/><br/>";
var_dump(JunoApiManager::X_RESOURCE_TOKEN);
?>