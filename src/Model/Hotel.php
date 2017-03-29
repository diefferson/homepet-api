<?php
namespace Model;

class Hotel{

	private $id;
	private $nome;
	private $valorDiaria;
	private $endereco;
	private $numero;
	private $bairro;
	private $cidade;
	private $uf;
	private $cep;
	private $latitude;
	private $longitude;
	private $avaliacao;

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
  	public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of nome.
     *
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Sets the value of nome.
     *
     * @param mixed $nome the nome
     *
     * @return self
     */
  	public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Gets the value of valorDiaria.
     *
     * @return mixed
     */
    public function getValorDiaria()
    {
        return $this->valorDiaria;
    }

    /**
     * Sets the value of valorDiaria.
     *
     * @param mixed $valorDiaria the valor diaria
     *
     * @return self
     */
  	public function setValorDiaria($valorDiaria)
    {
        $this->valorDiaria = $valorDiaria;

        return $this;
    }

    /**
     * Gets the value of endereco.
     *
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Sets the value of endereco.
     *
     * @param mixed $endereco the endereco
     *
     * @return self
     */
  	public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Gets the value of numero.
     *
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Sets the value of numero.
     *
     * @param mixed $numero the numero
     *
     * @return self
     */
  	public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Gets the value of bairro.
     *
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Sets the value of bairro.
     *
     * @param mixed $bairro the bairro
     *
     * @return self
     */
  	public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Gets the value of cidade.
     *
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Sets the value of cidade.
     *
     * @param mixed $cidade the cidade
     *
     * @return self
     */
  	public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Gets the value of uf.
     *
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Sets the value of uf.
     *
     * @param mixed $uf the uf
     *
     * @return self
     */
  	public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Gets the value of cep.
     *
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Sets the value of cep.
     *
     * @param mixed $cep the cep
     *
     * @return self
     */
  	public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Gets the value of latitude.
     *
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets the value of latitude.
     *
     * @param mixed $latitude the latitude
     *
     * @return self
     */
  	public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Gets the value of longitude.
     *
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets the value of longitude.
     *
     * @param mixed $longitude the longitude
     *
     * @return self
     */
  	public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Gets the value of avaliacao.
     *
     * @return mixed
     */
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    /**
     * Sets the value of avaliacao.
     *
     * @param mixed $avaliacao the avaliacao
     *
     * @return self
     */
  	public function setAvaliacao($avaliacao)
    {
        $this->avaliacao = $avaliacao;

        return $this;
    }
}