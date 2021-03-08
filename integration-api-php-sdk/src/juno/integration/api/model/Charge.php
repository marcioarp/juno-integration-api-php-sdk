<?php
namespace src\juno\integration\api\model;

class Charge /*extends BaseModel */{
    public $code;
    public $reference;
    public $duedate;
    public $link;
    public $checkoutUrl;
    public $installmentLink;
    public $payNumber;
    public $amount;
    public $billetDetails;
    public $payments; 
}

class BilletDetails {
    public $bankAccount;
    public $ourNumber;
    public $barcodeNumber;
    public $portfolio;
}

?>