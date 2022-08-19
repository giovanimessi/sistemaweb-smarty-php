<?php 
/*
session_start();
 ini_set('display_errors',1);;
 ini_set('display_startup_erros',1);
 error_reporting(E_ALL); 
*/
session_start();
$conectar = conectar();
$alerta = '';
if($_POST){
	$id_usuario = $_POST["id_usuario"];
	$nome_completo = addslashes($_POST['nome_completo']);
    $usuario = addslashes($_POST['usuario']);
    $senha = md5($_POST['senha']);
    $confirmaSenha = md5($_POST['confirma_Senha']);

	if($senha != $confirmaSenha){
		echo "<script>
		alert('As senhas são diferentes');
		location.replace('index.php?ac=editar&id= ". $_GET["id"] ." ');
		</script>"; 
	}

	$sql = "UPDATE usuarios SET nome_completo = '$nome_completo', usuario = '$usuario',
   senha = '$senha', confirma_Senha = '$confirmaSenha' WHERE id_usuario = '$id_usuario' ";

	$result = mysqli_query($conectar, $sql);


	if($result == ''){
		
		echo "<script>
		alert('Erro ao Atualizar');
		location.replace('index.php?ac=editar&id= ". $_GET["id"] ." ');
		</script>"; 
		}else{

			echo "<script>
		alert('Usuário editado com sucesso!');
		location.replace('index.php?ac=editar_usuario');
		</script>"; 
		
	}

}


$id_usuario = $_GET["id"];

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
$smarty->display("editar.tpl");

?>