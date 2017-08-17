<?php
namespace Utils;

use JMS\Serializer\SerializerBuilder;

/**
 * @author Diefferson SAntos
 * 
 * Classe responsável por emitir uma resposta padrão a todas as saídas da API
*/
class ResponseApi
{
	/**
	 * @var Integer - Código de resposta da API 
	 * 
	*/
	private $code;

	/**
	 * @var String - Mensagem de erro caso houver 
	 * 
	*/
	private $message;

	/**
	 * @var Object - Resposta da API
	 * 
	*/
	private $content;

	public function __construct($code = null, $message = null, $content = null){

		$this->code 	  = $code;
		$this->message 	  = $message;
		$this->content 	  = $content;
	}

    public function getResponse(){

        $format = 'json';

        $serializer = SerializerBuilder::create()->build();

        $response = $serializer->serialize($this, $format);

        return $response;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
}
