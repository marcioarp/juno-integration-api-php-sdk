<?php
namespace src\juno\integration\api\model;

class BankAccount extends BaseModel {

    private $bankNumber;
    private $agencyNumber;
    private $accountNumber;
    private $accountComplementNumber;
    private $accountType;
    private $accountHolder;

    /**
     * @return mixed
     */
    public function getBankNumber()
    {
        return $this->bankNumber;
    }

    /**
     * @param mixed $bankNumber
     */
    public function setBankNumber($bankNumber): void
    {
        $this->bankNumber = $bankNumber;
    }

    /**
     * @return mixed
     */
    public function getAgencyNumber()
    {
        return $this->agencyNumber;
    }

    /**
     * @param mixed $agencyNumber
     */
    public function setAgencyNumber($agencyNumber): void
    {
        $this->agencyNumber = $agencyNumber;
    }

    /**
     * @return mixed
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param mixed $accountNumber
     */
    public function setAccountNumber($accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * @return mixed
     */
    public function getAccountComplementNumber()
    {
        return $this->accountComplementNumber;
    }

    /**
     * @param mixed $accountComplementNumber
     */
    public function setAccountComplementNumber($accountComplementNumber): void
    {
        $this->accountComplementNumber = $accountComplementNumber;
    }

    /**
     * @return mixed
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param mixed $accountType
     */
    public function setAccountType($accountType): void
    {
        $this->accountType = $accountType;
    }

    /**
     * @return mixed
     */
    public function getAccountHolder()
    {
        return $this->accountHolder;
    }

    /**
     * @param mixed $accountHolder
     */
    public function setAccountHolder($accountHolder): void
    {
        $this->accountHolder = $accountHolder;
    }
}
?>