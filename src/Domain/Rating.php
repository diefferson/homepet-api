<?php
namespace Domain;

/**
 * @author - Diefferson Santos
*/
class Rating{

	private $codeHotel;
	private $codeUser;
	private $rating;
    private $date;


    /**
     * @return mixed
     */
    public function getCodeHotel()
    {
        return $this->codeHotel;
    }

    /**
     * @param mixed $codeHotel
     *
     * @return self
     */
    public function setCodeHotel($codeHotel)
    {
        $this->codeHotel = $codeHotel;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodeUser()
    {
        return $this->codeUser;
    }

    /**
     * @param mixed $codeUser
     *
     * @return self
     */
    public function setCodeUser($codeUser)
    {
        $this->codeUser = $codeUser;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     *
     * @return self
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }


    public static function doRating($date){

        $rating = new Rating();

        if($date['code_hotel']){
            $rating->setCodeHotel($date['code_hotel']);    
        }
        
        if($date['code_user']){
            $rating->setCodeUser($date['code_user']);    
        }
        
        if($date['rating']){
            $rating->setRating($date['rating']);    
        }
        
        if($date['date']){
            $rating->setDate($date['date']);    
        }
    
        return $rating;

    }
}