<?php
namespace src\juno\integration\api\model;

class DigitalAccount extends BaseModel {
    private $resourceToken;
    private $type;
    private $status;
    private $personType;
    private $document;
    private $createdOn;

    /**
     * @return mixed
     */
    public function getResourceToken()
    {
        return $this->resourceToken;
    }

    /**
     * @param mixed $resourceToken
     */
    public function setResourceToken($resourceToken): void
    {
        $this->resourceToken = $resourceToken;
    }

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
    public function getPersonType()
    {
        return $this->personType;
    }

    /**
     * @param mixed $personType
     */
    public function setPersonType($personType): void
    {
        $this->personType = $personType;
    }

    /**
     * @return mixed
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param mixed $document
     */
    public function setDocument($document): void
    {
        $this->document = $document;
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
}

?>