<?php

include ("includes/config.ini.php");

$minha = "Bem vindo ao Smarty";
$smarty->assign('minha',$minha);
$smarty->assign(array('var1'=> 'Seja bem Vindo','var2'=> "Curso de smarty"));

$array[0]['nome'] = "Giovani Moura Messias";

$array[1]['nome'] = " Messias";

$array[3]['nome'] = " Moura Messias";

$smarty->assign('array',$array);
$smarty->display('cabecalho.php');
?>