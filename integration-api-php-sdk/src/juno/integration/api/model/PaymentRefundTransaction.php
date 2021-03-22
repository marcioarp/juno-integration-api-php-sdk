<?php
namespace src\juno\integration\api\model;

class PaymentRefundTransaction extends BaseModel {
    private $transactionId;
    private $installments;
    private array $payments = [];
    private array $refunds = [];

    /**
     * @return mixed
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param mixed $transactionId
     */
    public function setTransactionId($transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @return mixed
     */
    public function getInstallments()
    {
        return $this->installments;
    }

    /**
     * @param mixed $installments
     */
    public function setInstallments($installments): void
    {
        $this->installments = $installments;
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
    public function getRefunds(): array
    {
        return $this->refunds;
    }

    /**
     * @param array $refunds
     */
    public function setRefunds(array $refunds): void
    {
        $this->refunds = $refunds;
    }

}
?>