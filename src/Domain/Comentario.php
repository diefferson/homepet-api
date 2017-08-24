<?php
namespace Domain;

/**
 * @author - Diefferson Santos
*/
class Comentario{

	private $codigoHotel;
	private $codigoUsuario;
	private $comentario;
    private $data;


    /**
     * @return mixed
     */
    public function getCodigoHotel()
    {
        return $this->codigoHotel;
    }

    /**
     * @param mixed $codigoHotel
     *
     * @return self
     */
    public function setCodigoHotel($codigoHotel)
    {
        $this->codigoHotel = $codigoHotel;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigoUsuario()
    {
        return $this->codigoUsuario;
    }

    /**
     * @param mixed $codigoUsuario
     *
     * @return self
     */
    public function setCodigoUsuario($codigoUsuario)
    {
        $this->codigoUsuario = $codigoUsuario;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * @param mixed $comentario
     *
     * @return self
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     *
     * @return self
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
}