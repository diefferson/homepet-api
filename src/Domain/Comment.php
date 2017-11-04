<?php
namespace Domain;

/**
 * @author - Diefferson Santos
*/
class Comment{

	private $codeHotel;
    private $codeUser;
    private $nameUser;
	private $avatarUser;
	private $comment;
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
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

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

    /**
     * @return mixed
     */
    public function getNameUser()
    {
        return $this->nameUser;
    }

    /**
     * @param mixed $nameUser
     *
     * @return self
     */
    public function setNameUser($nameUser)
    {
        $this->nameUser = $nameUser;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAvatarUser()
    {
        return $this->avatarUser;
    }

    /**
     * @param mixed $avatarUser
     *
     * @return self
     */
    public function setAvatarUser($avatarUser)
    {
        $this->avatarUser = $avatarUser;

        return $this;
    }

     public static function doComment($date){

        $comment = new Comment();

        if($date['code_hotel']){
            $comment->setCodeHotel($date['code_hotel']);    
        }
        
        if($date['code_user']){
            $comment->setCodeUser($date['code_user']);    
        }

        if($date['name_user']){
            $comment->setNameUser($date['name_user']);    
        }

        if($date['avatar_user']){
            $comment->setAvatarUser($date['avatar_user']);    
        }
        
        if($date['comment']){
            $comment->setComment($date['comment']);    
        }
        
        if($date['date']){
            $comment->setDate($date['date']);    
        }
    
        return $comment;

    }
}