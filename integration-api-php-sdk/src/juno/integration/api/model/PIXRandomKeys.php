<?php
namespace src\juno\integration\api\model;

class PixRandomKeys extends BaseModel  {
    private $key;
    private $creationDateTime;
    private $ownershipDateTime;
    private $claimRequestDateTime;

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     */
    public function setKey($key): void
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getCreationDateTime()
    {
        return $this->creationDateTime;
    }

    /**
     * @param mixed $creationDateTime
     */
    public function setCreationDateTime($creationDateTime): void
    {
        $this->creationDateTime = $creationDateTime;
    }

    /**
     * @return mixed
     */
    public function getOwnershipDateTime()
    {
        return $this->ownershipDateTime;
    }

    /**
     * @param mixed $ownershipDateTime
     */
    public function setOwnershipDateTime($ownershipDateTime): void
    {
        $this->ownershipDateTime = $ownershipDateTime;
    }

    /**
     * @return mixed
     */
    public function getClaimRequestDateTime()
    {
        return $this->claimRequestDateTime;
    }

    /**
     * @param mixed $claimRequestDateTime
     */
    public function setClaimRequestDateTime($claimRequestDateTime): void
    {
        $this->claimRequestDateTime = $claimRequestDateTime;
    }
}
?>