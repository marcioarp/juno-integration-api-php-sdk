<?php
namespace src\juno\integration\api\model;

class Subscription {
    private $createdOn;
    private $dueDay;
    private $status;
    private $startsOn;
    private $lastBillingDate;
    private $nextBillingDate;

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
    public function getDueDay()
    {
        return $this->dueDay;
    }

    /**
     * @param mixed $dueDay
     */
    public function setDueDay($dueDay): void
    {
        $this->dueDay = $dueDay;
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
    public function getStartsOn()
    {
        return $this->startsOn;
    }

    /**
     * @param mixed $startsOn
     */
    public function setStartsOn($startsOn): void
    {
        $this->startsOn = $startsOn;
    }

    /**
     * @return mixed
     */
    public function getLastBillingDate()
    {
        return $this->lastBillingDate;
    }

    /**
     * @param mixed $lastBillingDate
     */
    public function setLastBillingDate($lastBillingDate): void
    {
        $this->lastBillingDate = $lastBillingDate;
    }

    /**
     * @return mixed
     */
    public function getNextBillingDate()
    {
        return $this->nextBillingDate;
    }

    /**
     * @param mixed $nextBillingDate
     */
    public function setNextBillingDate($nextBillingDate): void
    {
        $this->nextBillingDate = $nextBillingDate;
    }
}
?>