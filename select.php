<?php
include("conecta.php");
$sql=$conecta->query("SELECT `nome_func`, `sobrenome_func` FROM `funcionarios` GROUP BY nome_func,sobrenome_func ORDER BY nome_func ASC");

$sql->execute();
while($linha=$sql->fetch(PDO::FETCH_ASSOC)){
print "Nome: " .$linha["nome_func"]. " Sobrenome: " .$linha["sobrenome_func"]. "<br />";

}
?>
