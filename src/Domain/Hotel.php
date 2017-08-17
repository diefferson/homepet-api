<?php
namespace Domain;

/**
 * @author - Diefferson Santos
*/
class Hotel{

	private $codigo;
	private $nome;
	private $email;
	private $senha;
	private $endereco;
	private $emailContato;
	private $telefoneContato;
	private $coordenadas;
	private $cep;
	private $cidade;
	private $uf;
	private $status;
    private $descricao;
    private $urlImagemCapa;
    private $imagens = array();


    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     *
     * @return self
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

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
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     *
     * @return self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     *
     * @return self
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailContato()
    {
        return $this->emailContato;
    }

    /**
     * @param mixed $emailContato
     *
     * @return self
     */
    public function setEmailContato($emailContato)
    {
        $this->emailContato = $emailContato;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelefoneContato()
    {
        return $this->telefoneContato;
    }

    /**
     * @param mixed $telefoneContato
     *
     * @return self
     */
    public function setTelefoneContato($telefoneContato)
    {
        $this->telefoneContato = $telefoneContato;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoordenadas()
    {
        return $this->coordenadas;
    }

    /**
     * @param mixed $coordenadas
     *
     * @return self
     */
    public function setCoordenadas(Coordenada $coordenadas)
    {
        $this->coordenadas = $coordenadas;

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
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     *
     * @return self
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

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
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     *
     * @return self
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrlImagemCapa()
    {
        return $this->urlImagemCapa;
    }

    /**
     * @param mixed $urlImagemCapa
     *
     * @return self
     */
    public function setUrlImagemCapa($urlImagemCapa)
    {
        $this->urlImagemCapa = $urlImagemCapa;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getImagens()
    {
        return $this->imagens;
    }

    /**
     * @param mixed $imagens
     *
     * @return self
     */
    public function setImagens($imagens)
    {
        $this->imagens = $imagens;

        return $this;
    }
}