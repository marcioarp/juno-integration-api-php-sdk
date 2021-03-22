<?php
namespace src\juno\integration\api\model;

class TokenizedCreditCard {
    private $creditCardId;
    private $last4CardNumber;
    private $expirationMonth;
    private $expirationYear;

    /**
     * @return mixed
     */
    public function getCreditCardId()
    {
        return $this->creditCardId;
    }

    /**
     * @param mixed $creditCardId
     */
    public function setCreditCardId($creditCardId): void
    {
        $this->creditCardId = $creditCardId;
    }

    /**
     * @return mixed
     */
    public function getLast4CardNumber()
    {
        return $this->last4CardNumber;
    }

    /**
     * @param mixed $last4CardNumber
     */
    public function setLast4CardNumber($last4CardNumber): void
    {
        $this->last4CardNumber = $last4CardNumber;
    }

    /**
     * @return mixed
     */
    public function getExpirationMonth()
    {
        return $this->expirationMonth;
    }

    /**
     * @param mixed $expirationMonth
     */
    public function setExpirationMonth($expirationMonth): void
    {
        $this->expirationMonth = $expirationMonth;
    }

    /**
     * @return mixed
     */
    public function getExpirationYear()
    {
        return $this->expirationYear;
    }

    /**
     * @param mixed $expirationYear
     */
    public function setExpirationYear($expirationYear): void
    {
        $this->expirationYear = $expirationYear;
    }
}
?>