<?php 
$conectar = conectar();
$sql = "SELECT * FROM usuarios";

$consultar_usuarios = mysqli_query($conectar, $sql);
$array_usuarios = array();

while($linha_dados = mysqli_fetch_array($consultar_usuarios)){
	$array_usuarios[] = $linha_dados;
}


$smarty->assign("array_usuarios", $array_usuarios);
$smarty->display("editar_usuario.tpl");
 ?>