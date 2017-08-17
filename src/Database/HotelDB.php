<?php
namespace Database;

use Utils\DefaultDB;
use Domain\Hotel;
use Domain\Coordenada;
/**
 * @author - Diefferson Santos
*/
class HotelDB extends DefaultDB{

	public function listaHoteis(){

		$this->getConnection();
		
		$selectStatement = 	$this->pdo->select()
		                       		  ->from(self::TB_HOTEL);

		$stmt = $selectStatement->execute();
		$data = $stmt->fetchAll();

        $this->closeConection();

        $hoteis = array();

        foreach ($data as $key => $value) {
        	$hoteis[] = $this->trataHotel($value);
        }
        
		return $hoteis;
	}

	private function trataHotel($data){

		$hotel = new Hotel();
		$hotel->setCodigo($data['codigo_hotel']);
		$hotel->setNome($data['nome']);
		$hotel->setEndereco($data['endereco']);
		$hotel->setEmailContato($data['email_contato']);
		$hotel->setTelefoneContato($data['telefone_contato']);
		$hotel->setCoordenadas(new Coordenada($data['latitude'], $data['longitude']));
		$hotel->setCep($data['cep']);
		$hotel->setCidade($data['cidade']);
		$hotel->setUf($data['uf']);
		$hotel->setStatus($data['status']);
		$hotel->setDescricao($data['descricao']);
		$hotel->setUrlImagemCapa($data['imagem_capa']);
		
		return $hotel;

	}

}