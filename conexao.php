<?php

try{
	//Faz conexão com o banco de dados

	$conectar = new PDO("mysql:host=localhost;port=3306;dbname=pdo;","root","1234");
	//echo "Conectado com sucesso!";

}catch ( PDOException $e){
	//Caso ocorra algum erro na conexão com o banco, exibe a mensagem
	echo "Falha ao conectar com o banco de dados: ", $e->getMessage();

}