<?php
namespace Domain;

/**
 * @author - Diefferson Santos
*/
class Service{

	private $code;
	private $name;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public static function doService($data){
        $service  = new Service();
        if($data['code_service']){
            $service->setCode($data['code_service']);
        }

        if($data['name']){
            $service->setName($data['name']);
        }

        return $data;
    }
}