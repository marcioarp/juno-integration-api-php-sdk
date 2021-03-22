<?php
namespace src\juno\integration\api\model;

class Balance {

    private $balance;
    private $withheldBalance;
    private $transferableBalance;

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param mixed $balance
     */
    public function setBalance($balance): void
    {
        $this->balance = $balance;
    }

    /**
     * @return mixed
     */
    public function getWithheldBalance()
    {
        return $this->withheldBalance;
    }

    /**
     * @param mixed $withheldBalance
     */
    public function setWithheldBalance($withheldBalance): void
    {
        $this->withheldBalance = $withheldBalance;
    }

    /**
     * @return mixed
     */
    public function getTransferableBalance()
    {
        return $this->transferableBalance;
    }

    /**
     * @param mixed $transferableBalance
     */
    public function setTransferableBalance($transferableBalance): void
    {
        $this->transferableBalance = $transferableBalance;
    }


}


?>