<?php
namespace src\juno\integration\api\model;

class QRCode {
    private $success;
    private $cancellationId;

    /**
     * @return mixed
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param mixed $success
     */
    public function setSuccess($success): void
    {
        $this->success = $success;
    }

    /**
     * @return mixed
     */
    public function getCancellationId()
    {
        return $this->cancellationId;
    }

    /**
     * @param mixed $cancellationId
     */
    public function setCancellationId($cancellationId): void
    {
        $this->cancellationId = $cancellationId;
    }
}
?>