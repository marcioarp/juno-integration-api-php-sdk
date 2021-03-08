<?php
namespace src\juno\integration\api\model;

class QRCode /* extends BaseModel*/ {
    public $referenceId;
    public $qrcodeContent;
    public $qrcodeBase64;
    public $paymentUrl;
    public $picpayResult;
    public $junoResult;
    public $expiresAt;
}
?>