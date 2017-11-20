<?php
namespace Utils;

use JMS\Serializer\SerializerBuilder;

/**
 * @author Diefferson SAntos
*/
class ResponseApi
{
    /**
     * @var Integer - API response http code
     * 
    */
    private $code;

	/**
	 * @var String - API response message
	 * 
	*/
	private $message;

    /**
     * @var Integer - API respnse count
     * 
    */
    private $count;

    /**
     * @var Integer - API respnse next
     * 
    */
    private $next;

     /**
     * @var Integer - API respnse previous
     * 
    */
    private $previous;

	/**
	 * @var Object - API response content
	 * 
	*/
	private $content;

	public function __construct($content = null, $message = "OK" , $code = 200){
        $this->code       = $code;
		$this->message 	  = $message;
		$this->content 	  = $content;
	}

    public function getResponse(){

        $format = 'json';

        $serializer = SerializerBuilder::create()->build();

        $response = $serializer->serialize($this, $format);

        return $response;
    }

    /**
     * @return Integer - API response http code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param Integer - API response http code $code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return String - API response message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param String - API response message $message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return Integer - API respnse count
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param Integer - API respnse count $count
     *
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return Integer - API respnse next
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @param Integer - API respnse next $next
     *
     * @return self
     */
    public function setNext($next)
    {
        $this->next = $next;

        return $this;
    }

    /**
     * @return Integer - API respnse previous
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    /**
     * @param Integer - API respnse previous $previous
     *
     * @return self
     */
    public function setPrevious($previous)
    {
        $this->previous = $previous;

        return $this;
    }

    /**
     * @return Object - API response content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param Object - API response content $content
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
}
