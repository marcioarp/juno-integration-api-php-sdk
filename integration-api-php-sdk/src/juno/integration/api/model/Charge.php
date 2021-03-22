<?php
namespace src\juno\integration\api\model;

class Charge extends BaseModel {
    private $code;
    private $reference;
    private $dueDate;
    private $link;
    private $checkoutUrl;
    private $installmentLink;
    private $payNumber;
    private $amount;
    private $status;
    private $billetDetails;
    private $payments = [];
    private $pix = [];

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference): void
    {
        $this->reference = $reference;
    }

    /**
     * @return mixed
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param mixed $dueDate
     */
    public function setDueDate($dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link): void
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getCheckoutUrl()
    {
        return $this->checkoutUrl;
    }

    /**
     * @param mixed $checkoutUrl
     */
    public function setCheckoutUrl($checkoutUrl): void
    {
        $this->checkoutUrl = $checkoutUrl;
    }

    /**
     * @return mixed
     */
    public function getInstallmentLink()
    {
        return $this->installmentLink;
    }

    /**
     * @param mixed $installmentLink
     */
    public function setInstallmentLink($installmentLink): void
    {
        $this->installmentLink = $installmentLink;
    }

    /**
     * @return mixed
     */
    public function getPayNumber()
    {
        return $this->payNumber;
    }

    /**
     * @param mixed $payNumber
     */
    public function setPayNumber($payNumber): void
    {
        $this->payNumber = $payNumber;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getBilletDetails()
    {
        return $this->billetDetails;
    }

    /**
     * @param mixed $billetDetails
     */
    public function setBilletDetails($billetDetails): void
    {
        $this->billetDetails = $billetDetails;
    }

    /**
     * @return array
     */
    public function getPayments(): array
    {
        return $this->payments;
    }

    /**
     * @param array $payments
     */
    public function setPayments(array $payments): void
    {
        $this->payments = $payments;
    }

    /**
     * @return array
     */
    public function getPix(): array
    {
        return $this->pix;
    }

    /**
     * @param array $pix
     */
    public function setPix(array $pix): void
    {
        $this->pix = $pix;
    }

}



?>