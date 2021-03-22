<?php
namespace src\juno\integration\api\model;

class PixStaticQRCode extends BaseModel {
    private $qrcodeInBase64;
    private $imageInBase64;

    /**
     * @return mixed
     */
    public function getQrcodeInBase64()
    {
        return $this->qrcodeInBase64;
    }

    /**
     * @param mixed $qrcodeInBase64
     */
    public function setQrcodeInBase64($qrcodeInBase64): void
    {
        $this->qrcodeInBase64 = $qrcodeInBase64;
    }

    /**
     * @return mixed
     */
    public function getImageInBase64()
    {
        return $this->imageInBase64;
    }

    /**
     * @param mixed $imageInBase64
     */
    public function setImageInBase64($imageInBase64): void
    {
        $this->imageInBase64 = $imageInBase64;
    }
}
?>