<?php
try{
$conecta = new PDO('mysql:host=mysql01-farm8.kinghost.net;dbname=luisfrs03', 'luisfrs03','l123321l');
}catch(PDOException $e){

echo $e->getMessage();

}


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$ultima_alteracao = $_POST[date('Y-m-d')];
$erro = false;


$inserindo=$conecta->prepare("INSERT INTO tabela1(nome, email, senha, ultima_alteracao) VALUES (:nome, :email, :senha, :ultima_alteracao)");

$codifica = md5($senha);

$inserindo->bindValue(":nome", $nome);
$inserindo->bindValue(":email", $email);
$inserindo->bindValue(":senha", $codifica);
$inserindo->bindValue(":ultima_alteracao",$ultima_alteracao);

$inserindo->execute();

?>
