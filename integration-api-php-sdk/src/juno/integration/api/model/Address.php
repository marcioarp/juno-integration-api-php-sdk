<?php
namespace src\juno\integration\api\model;

class Address {

    private $street;
    private $number;
    private $complement;
    private $neighborhood;
    private $city;
    private $state;
    private $postCode;

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street): void
    {
        $this->street = $street;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number): void
    {
        $this->number = $number;
    }

    public function getComplement()
    {
        return $this->complement;
    }

    public function setComplement($complement): void
    {
        $this->complement = $complement;
    }

    public function getNeighborhood()
    {
        return $this->neighborhood;
    }

    public function setNeighborhood($neighborhood): void
    {
        $this->neighborhood = $neighborhood;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city): void
    {
        $this->city = $city;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state): void
    {
        $this->state = $state;
    }

    public function getPostCode()
    {
        return $this->postCode;
    }

    public function setPostCode($postCode): void
    {
        $this->postCode = $postCode;
    }

}

?>