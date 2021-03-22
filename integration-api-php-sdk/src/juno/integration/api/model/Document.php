<?php
namespace src\juno\integration\api\model;

class Document extends BaseModel {
    private $type;
    private $description;
    private $approvalStatus;
    private $rejectionReason;
    private $details;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getApprovalStatus()
    {
        return $this->approvalStatus;
    }

    /**
     * @param mixed $approvalStatus
     */
    public function setApprovalStatus($approvalStatus): void
    {
        $this->approvalStatus = $approvalStatus;
    }

    /**
     * @return mixed
     */
    public function getRejectionReason()
    {
        return $this->rejectionReason;
    }

    /**
     * @param mixed $rejectionReason
     */
    public function setRejectionReason($rejectionReason): void
    {
        $this->rejectionReason = $rejectionReason;
    }

    /**
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param mixed $details
     */
    public function setDetails($details): void
    {
        $this->details = $details;
    }
}
?>