<?php
namespace src\juno\integration\api\model;

class CompanyType {
    private $type;

    /**
     * CompanyType constructor.
     * @param $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
}
?>