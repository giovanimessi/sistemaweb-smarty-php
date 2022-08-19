<?php 

session_start();

 $conectar = conectar();


if($_GET["id"]!="" && isset($_GET["opc"]) && $_GET["opc"]=="del"){
	$id_usuario=$_GET["id"];

	$sql = "DELETE FROM usuarios WHERE id_usuario = '$id_usuario'";
	$result = mysqli_query($conectar, $sql);
	if($result){
		echo "<script>
		alert('Usuário excluido com sucesso!');
		location.replace('index.php?ac=editar_usuario');
		</script>"; 
	}else{
		echo "<script>
		alert('O usuário não foi excluido!');
		location.replace('index.php?ac=editar_usuario');
		</script>"; 
	}

}else{
	$id_usuario=$_GET["id"];
	$sql = "SELECT * FROM usuarios WHERE id_usuario='$id_usuario'";
$consultar_usuarios = mysqli_query($conectar, $sql);

while($linha_dados = mysqli_fetch_array($consultar_usuarios)){
	$id_usuario = $linha_dados["id_usuario"];
	$nome_completo = $linha_dados["nome_completo"];
	$usuario = $linha_dados["usuario"];
	$senha = $linha_dados["senha"];
	$confirmaSenha = $linha_dados["confirma_Senha"];
}

$smarty->assign("id_usuario", $id_usuario);
$smarty->assign("nome_completo", $nome_completo);
$smarty->assign("usuario", $usuario);
$smarty->assign("senha", $senha);
$smarty->assign("confirma_Senha", $confirmaSenha);
$smarty->display("excluir.tpl");
}

 ?>