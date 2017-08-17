<?php
namespace Utils;

/**
 * @author - Diefferson Santos
*/
class DefaultDB{

	protected $pdo;
	protected $container;

	const TB_AVALIACAO = "tb_avalaicao_hotel";
	const TB_COMENTARIO = "tb_comentario_hotel";
	const TB_HOTEL = "tb_hotel";
	const TB_IMAGENS = "tb_imagem_hotel";
	const TB_SERVICO = "tb_servico";
	const TB_SERVICO_HOTEL = "TB_SERVICO_HOTEL";
	const TB_USUARIO = "tb_usuario";
	
	public function __construct($container){
		$this->pdo = $container->pdo;
		$this->container = $container;
	}

	public function getConnection(){
		$this->pdo = $this->container->pdo;
	}

	public function closeConection(){
		$this->pdo = null;
	}
}