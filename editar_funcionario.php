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
	$id_func = $_POST["id_func"];
	$nome_completo = addslashes($_POST['nome_completo']);
    $cpf = addslashes($_POST['cpf']);
    $endereco = addslashes($_POST['endreco']);
    $telefone = $_POST['telefone'];

	if($senha != $confirmaSenha){
		echo "<script>
		alert('As senhas são diferentes');
		location.replace('index.php?ac=editar&id= ". $_GET["id"] ." ');
		</script>"; 
	}

	$sql = "UPDATE func SET nome_completo = '$nome_completo', cpf = '$cpf',
   endreco = '$endereco', telefone = '$telefone' WHERE id_func = '$id_func' ";

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


$id_func = $_GET["id"];

$sql = "SELECT * FROM func WHERE id_func='$id_func'";
$consultar_funcionario = mysqli_query($conectar, $sql);

while($linha_dados = mysqli_fetch_array($consultar_funcionario)){
	$id_func = $linha_dados["id_func"];
	$nome_completo = $linha_dados["nome_completo"];
	$cpf = $linha_dados["cpf"];
	$telefone = $linha_dados["telefone"];
	$endereco = $linha_dados["endreco"];
}

$smarty->assign("id_func", $id_func);
$smarty->assign("nome_completo", $nome_completo);
$smarty->assign("cpf", $cpf);
$smarty->assign("endreco", $endereco);
$smarty->assign("telefone", $telefone);
$smarty->display("editar_funcionario.tpl");

?>