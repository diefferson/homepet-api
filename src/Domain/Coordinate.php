<?php
namespace Domain;

/**
 * @author - Diefferson Santos
*/
class Coordinate{

	private $latitude;
	private $longitude;

    public function __construct($latitude = 0, $longitude = 0){
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
	
    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }
}