<?php

// ini_set('display_errors',1);;
// ini_set('display_startup_erros',1);
// error_reporting(E_ALL); 


$conectar = conectar();
$sql = "SELECT * FROM usuarios";

$consultar_usuarios = mysqli_query($conectar, $sql);
$array_usuarios = array();

while($linha_dados = mysqli_fetch_array($consultar_usuarios)){
	$array_usuarios[] = $linha_dados;
}



$data_atual = date("d/m/Y");

$smarty->assign('data_atual',$data_atual);
$smarty->assign("array_usuarios", $array_usuarios);

$smarty->display('relatorio.tpl');
?>