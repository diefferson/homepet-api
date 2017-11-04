<?php
namespace Domain;

/**
 * @author - Diefferson Santos
*/
class Hotel{

	private $code;
	private $name;
	private $email;
    private $price;
	private $address;
	private $contactEmail;
	private $contactPhone;
	private $coordenates;
	private $cep;
	private $city;
	private $uf;
	private $status;
    private $description;
    private $coverImage;
    private $rating;
    private $ratingsNumber;
    private $commentsNumber;
    private $images;
    private $services;

    public function __construct(){
        $this->rating = 0;
        $this->ratingsNumber = 0;
        $this->commentsNumber = 0;
    }

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

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * @param mixed $contactEmail
     *
     * @return self
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * @param mixed $contactPhone
     *
     * @return self
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoordinates()
    {
        return $this->coordenates;
    }

    /**
     * @param mixed $coordenates
     *
     * @return self
     */
    public function setCoordinates(Coordinate $coordenates)
    {
        $this->coordenates = $coordenates;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     *
     * @return self
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     *
     * @return self
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoverImage()
    {
        return $this->coverImage;
    }

    /**
     * @param mixed $coverImage
     *
     * @return self
     */
    public function setCoverImage($coverImage)
    {
        $this->coverImage = $coverImage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param mixed $images
     *
     * @return self
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
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
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @return mixed
     */
    public function getRatingsNumber()
    {
        return $this->ratingsNumber;
    }

    /**
     * @param mixed $ratingsNumber
     *
     * @return self
     */
    public function setRatingsNumber($ratingsNumber)
    {
        $this->ratingsNumber = $ratingsNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommentsNumber()
    {
        return $this->commentsNumber;
    }

    /**
     * @param mixed $commentsNumber
     *
     * @return self
     */
    public function setCommentsNumber($commentsNumber)
    {
        $this->commentsNumber = $commentsNumber;

        return $this;
    }

    /**
    * @return mixed
    */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param mixed $services
     *
     * @return self
     */
    public function setServices($services)
    {
        $this->services = $services;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }


    public static function doHotel($date){

        $hotel = new Hotel();

        if($date['code_hotel']){ $hotel->setCode($date['code_hotel']); }
        if($date['name']){ $hotel->setName($date['name']); }
        if($date['address']){ $hotel->setAddress($date['address']); }
        if($date['price']){ $hotel->setPrice($date['price']); }
        if($date['contact_email']){ $hotel->setContactEmail($date['contact_email']); }
        if($date['contact_phone']){ $hotel->setContactPhone($date['contact_phone']); }
        if($date['cep']){ $hotel->setCep($date['cep']); }
        if($date['city']){ $hotel->setCity($date['city']); }
        if($date['uf']){ $hotel->setUf($date['uf']); }
        if($date['status']){ $hotel->setStatus($date['status']); }
        if($date['description']){ $hotel->setDescription($date['description']); }
        if($date['cover_image']){ $hotel->setCoverImage($date['cover_image']); }
        if($date['ratings']){ $hotel->setRatingsNumber($date['ratings']); }
        if($date['rating']){ $hotel->setRating($date['rating']); }
        if($date['comments']){ $hotel->setCommentsNumber($date['comments']); }
        if($date['services']){ $hotel->setServices($date['services']); }

        if($date['latitude'] && $date['longitude']){
            $hotel->setCoordinates(new Coordinate($date['latitude'], $date['longitude']));
        }

        return $hotel;
    }
}