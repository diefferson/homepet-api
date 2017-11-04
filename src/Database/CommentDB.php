<?php
namespace Database;

use Utils\DefaultDB;
use Domain\Comment;
use Domain\Coordinate;
/**
 * @author - Diefferson Santos
*/
class CommentDB extends DefaultDB{

	public function searchComments($codeHotel){

		$this->getConnection();
		
		$selectStatement = 	$this->pdo->select()
		                       		  ->from("tb_comment_hotel")
		                       		  ->where("code_hotel", "=", $codeHotel);

		$stmt = $selectStatement->execute();
		$date = $stmt->fetchAll();

        $this->closeConection();

        $comments = array();

        foreach ($date as $key => $value) {
        	$comments[] = Comment::doComment($value);
        }
        
		return $comments;
	}

	public function saveComment(Comment $comment){

		$this->getConnection();

		$insertStatement = $this->pdo->insert(
									array(
										'code_hotel',
										'code_user',
										'comment',
										'date',
									)
								)
                       			->into("tb_comment_hotel")
                      	 		->values(
                      	 			array(
                      	 				$comment->getCodeHotel(),
                      	 				$comment->getCodeUser(),
                      	 				$comment->getComment(),
                      	 				date('Y-m-d')
                      	 				
									)
								);
        try{
         	$insertStatement->execute(false);
         	return true;
        }catch(\Exception $e){
        	$this->container->logger->warning("Error saving comment", [$e->getMessage()]);
        	return false;
        }finally{
        	$this->closeConection();
        }
	
	}

}