<?php 
namespace src\juno\integration\api\services; 

class JunoApiManager {
    public const CONTENT_TYPE_HEADER = "Content-type";
    public const CONTENT_ENCODING_HEADER = "Content-encoding";

    public const X_RESOURCE_TOKEN = "X-Resource-Token";
    public const X_API_VERSION = "X-API-Version";
    public const X_IDEMPOTENCY_KEY = "X-Idempotency-Key";

    public const JunoApiConfig::config = new JunoApiConfig();
    public const JunoApiResources::resources =  new JunoApiResources();

    private JunoApiManager(){

    }

    public static config() {
        return JunoApiConfig::config;
    }
    public static getPixService(){
        return resources::getPixService;
    } 
    public static  getDataService(){
        return resources::getDataService;
    }
    public static getSubscriptionService(){
        return resources::getSubscriptionService;
    }
    public static getPlanService(){
        return resources::getPlanService
    }
    public static getChargeService() {
        return resources::getChargeService();
    }
    
    public static getPicpayService() {
    	return resources::getPicpayService();
    }

    public static getBalanceService() {
        return resources::getBalanceService();
    }

    public static getPaymentService() {
        return resources::getPaymentService();
    }

    public static getDocumentService() {
        return resources::getDocumentService();
    }

    public static getTransferService() {
        return resources::getTransferService();
    }

    public static getCreditCardService() {
        return resources::getCreditCardService();
    }

    public static getBillPaymentService() {
        return resources::getBillPaymentService();
    }

    public static getCredentialsService() {
        return resources::getCredentialsService();
    }

    public static getNotificationService() {
        return resources::getNotificationService();
    }

    public static getAuthorizationService() {
        return resources::getAuthorizationService();
    }

    public static getDigitalAccountService() {
        return resources::getDigitalAccountService();
    }
    

    

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