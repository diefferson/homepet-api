<?php
namespace Domain;

/**
 * @author - Diefferson Santos
*/
class Comentario{

	private $codigoHotel;
	private $codigoUsuario;
	private $comentario;


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
}