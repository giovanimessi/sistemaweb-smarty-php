<?php 


$conectar = conectar();
$sql = "SELECT * FROM func";

$consultar_funcionario = mysqli_query($conectar, $sql);
$array_funcionario = array();

while($linha_dados = mysqli_fetch_array($consultar_funcionario)){
	$array_funcionario[] = $linha_dados;
}


$smarty->assign("array_funcionario", $array_funcionario);
$smarty->display("editar_func.tpl");
 ?>