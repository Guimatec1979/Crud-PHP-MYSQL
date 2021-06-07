<?php
include_once "conexao.php";

try{
	//Evitar SQL injection
	$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	


	$update = $conectar->prepare("DELETE FROM login WHERE id = :id");
	$update->bindParam(':id', $id);
	$update->execute();

	header("location: index.php");

}catch(PDOException $e){

	echo "Erro: " . $e->getMessage() ;
}
?>