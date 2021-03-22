<?php
namespace src\juno\integration\api\model;

class BillPayment{
    private $beneficiaryDocument;
    private $billAmount;
    private $billType;
    private $createdOn;
    private $dueDate;
    private $numericalBarCode;
    private $paidAmount;
    private $payeeId;
    private $paymentDate;
    private $paymentDescription;
    private $status;

    /**
     * @return mixed
     */
    public function getBeneficiaryDocument()
    {
        return $this->beneficiaryDocument;
    }

    /**
     * @param mixed $beneficiaryDocument
     */
    public function setBeneficiaryDocument($beneficiaryDocument): void
    {
        $this->beneficiaryDocument = $beneficiaryDocument;
    }

    /**
     * @return mixed
     */
    public function getBillAmount()
    {
        return $this->billAmount;
    }

    /**
     * @param mixed $billAmount
     */
    public function setBillAmount($billAmount): void
    {
        $this->billAmount = $billAmount;
    }

    /**
     * @return mixed
     */
    public function getBillType()
    {
        return $this->billType;
    }

    /**
     * @param mixed $billType
     */
    public function setBillType($billType): void
    {
        $this->billType = $billType;
    }

    /**
     * @return mixed
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * @param mixed $createdOn
     */
    public function setCreatedOn($createdOn): void
    {
        $this->createdOn = $createdOn;
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
    public function getNumericalBarCode()
    {
        return $this->numericalBarCode;
    }

    /**
     * @param mixed $numericalBarCode
     */
    public function setNumericalBarCode($numericalBarCode): void
    {
        $this->numericalBarCode = $numericalBarCode;
    }

    /**
     * @return mixed
     */
    public function getPaidAmount()
    {
        return $this->paidAmount;
    }

    /**
     * @param mixed $paidAmount
     */
    public function setPaidAmount($paidAmount): void
    {
        $this->paidAmount = $paidAmount;
    }

    /**
     * @return mixed
     */
    public function getPayeeId()
    {
        return $this->payeeId;
    }

    /**
     * @param mixed $payeeId
     */
    public function setPayeeId($payeeId): void
    {
        $this->payeeId = $payeeId;
    }

    /**
     * @return mixed
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * @param mixed $paymentDate
     */
    public function setPaymentDate($paymentDate): void
    {
        $this->paymentDate = $paymentDate;
    }

    /**
     * @return mixed
     */
    public function getPaymentDescription()
    {
        return $this->paymentDescription;
    }

    /**
     * @param mixed $paymentDescription
     */
    public function setPaymentDescription($paymentDescription): void
    {
        $this->paymentDescription = $paymentDescription;
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
}

?>