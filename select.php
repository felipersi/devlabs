<?php
include("conecta.php");
$sql=$conecta->query("SELECT `nome_func`, `sobrenome_func` FROM `funcionarios`");

$sql->execute();
while($linha=$sql->fetch(PDO::FETCH_ASSOC)){
print "Nome: " .$linha["nome_func"]. " Sobrenome: " .$linha["sobrenome_func"]. "<br />";

}
?>
