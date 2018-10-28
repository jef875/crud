<?php 

//-----------------------CONNECT-----------------------------------------------------
/*
try {
	$pdo = new PDO("mysql:dbname=crudpdo; host=localhost","root","");
} catch (PDOException $e) {
	echo "Erro com o banco de dados: ".$e->getMessage();
}
catch(Exception $e)
{
	echo "Erro genérico ".$e->getMessage();
}
*/
//-----------------------INSERT-----------------------------------------------------
//1 forma insert
/*$res = $pdo->prepare("INSERT INTO pessoa (nome, telefone, email) VALUES(:n, :t, :e)");
$res->bindValue(":n", "Jefferson");
$res->bindValue(":t", "00000000");
$res->bindValue(":e", "teste@gmail.com");
$res->execute();
*/

//2 forma insert
//$pdo->query("INSERT INTO pessoa(nome, telefone, email)VALUES('Segunda forma', '000000', 'teste@gmail.com')");

//--------------------DELETE//UPDATE-------------------------------------------------
//1 forma delete
/*$cmd = $pdo->prepare("DELETE FROM pessoa WHERE id = :id");
$id = 2;
$cmd->bindValue(":id", $id);
$cmd->execute();
*/

//2 forma delete
//$res = $pdo->query("DELETE FROM pessoa WHERE id = '1'");

//1 forma update
/*$cmd = $pdo->prepare("UPDATE pessoa SET email = :e WHERE id = :id");
$cmd->bindValue(":e", "update@gmail.com");
$cmd->bindValue(":id", 1);
$cmd->execute();
*/

//2 forma update
//$res = $pdo->query("UPDATE pessoa SET email = 'query@hotmail.com' WHERE id = '3'");
?>