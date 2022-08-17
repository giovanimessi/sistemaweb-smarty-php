<?php

include ("libs/Smarty.class.php");
$smarty = new smarty();

function conectar(){
    $servidor = "localhost";
    $user = 'root';
    $senha = "";
    $nomebd = 'sistemaweb';

    $con = new  mysqli($servidor,$user,$senha,$nomebd);
    return $con;
}
?>