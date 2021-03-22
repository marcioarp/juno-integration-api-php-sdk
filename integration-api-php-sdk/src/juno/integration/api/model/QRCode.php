<?php
namespace src\juno\integration\api\model;

class QRCode {
    private $referenceId;
    private $qrcodeContent;
    private $qrcodeBase64;
    private $paymentUrl;
    private $picpayResult;
    private $junoResult;
    private $expiresAt;

    /**
     * @return mixed
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * @param mixed $referenceId
     */
    public function setReferenceId($referenceId): void
    {
        $this->referenceId = $referenceId;
    }

    /**
     * @return mixed
     */
    public function getQrcodeContent()
    {
        return $this->qrcodeContent;
    }

    /**
     * @param mixed $qrcodeContent
     */
    public function setQrcodeContent($qrcodeContent): void
    {
        $this->qrcodeContent = $qrcodeContent;
    }

    /**
     * @return mixed
     */
    public function getQrcodeBase64()
    {
        return $this->qrcodeBase64;
    }

    /**
     * @param mixed $qrcodeBase64
     */
    public function setQrcodeBase64($qrcodeBase64): void
    {
        $this->qrcodeBase64 = $qrcodeBase64;
    }

    /**
     * @return mixed
     */
    public function getPaymentUrl()
    {
        return $this->paymentUrl;
    }

    /**
     * @param mixed $paymentUrl
     */
    public function setPaymentUrl($paymentUrl): void
    {
        $this->paymentUrl = $paymentUrl;
    }

    /**
     * @return mixed
     */
    public function getPicpayResult()
    {
        return $this->picpayResult;
    }

    /**
     * @param mixed $picpayResult
     */
    public function setPicpayResult($picpayResult): void
    {
        $this->picpayResult = $picpayResult;
    }

    /**
     * @return mixed
     */
    public function getJunoResult()
    {
        return $this->junoResult;
    }

    /**
     * @param mixed $junoResult
     */
    public function setJunoResult($junoResult): void
    {
        $this->junoResult = $junoResult;
    }

    /**
     * @return mixed
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * @param mixed $expiresAt
     */
    public function setExpiresAt($expiresAt): void
    {
        $this->expiresAt = $expiresAt;
    }
}
?>