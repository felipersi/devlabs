<?php
    try{
    $conecta = new PDO('mysql:host=mysql01-farm8.kinghost.net;dbname=luisfrs03', 'luisfrs03','l123321l')or print (mysql_error());
    }catch(PDOException $e){

    echo $e->getMessage();

    }
    ?>
