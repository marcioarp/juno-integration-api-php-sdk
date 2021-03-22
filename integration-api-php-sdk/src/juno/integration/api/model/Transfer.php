<?php
namespace src\juno\integration\api\model;

class Transfer extends BaseModel {
    private $digitalAccountId;
    private $creationDate;
    private $transferDate;
    private $amount;
    private $status;
    private $recipient;

    /**
     * @return mixed
     */
    public function getDigitalAccountId()
    {
        return $this->digitalAccountId;
    }

    /**
     * @param mixed $digitalAccountId
     */
    public function setDigitalAccountId($digitalAccountId): void
    {
        $this->digitalAccountId = $digitalAccountId;
    }

    /**
     * @return mixed
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param mixed $creationDate
     */
    public function setCreationDate($creationDate): void
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return mixed
     */
    public function getTransferDate()
    {
        return $this->transferDate;
    }

    /**
     * @param mixed $transferDate
     */
    public function setTransferDate($transferDate): void
    {
        $this->transferDate = $transferDate;
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
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param mixed $recipient
     */
    public function setRecipient($recipient): void
    {
        $this->recipient = $recipient;
    }
}
?>