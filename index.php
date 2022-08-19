<?php

session_start();


include('includes/config.ini.php');
////////////////
$titulo = "Sistema de Gerenciamento";

////////////
$smarty->assign('titulo', $titulo);
$smarty->display('cabecalho.tpl');

if(!isset($_SESSION['usuario'])){

    $botao = "disabled";
}
$smarty->assign('botao',$botao);
$smarty->display('menu.tpl');

if ($_GET['ac'] && $_GET['ac'] == 'adicionar_usuario') {
    include "adicionar_usuario.php";

}
 else if ($_GET["ac"] && $_GET["ac"] == "editar_usuario") {
    include("editar_usuario.php");

  } else if ($_GET["ac"] && $_GET["ac"] == "editar") {
        include("editar.php");
    
  } else if ($_GET["ac"] && $_GET["ac"] == "excluir") {
    include("excluir.php");


} else if ($_GET["ac"] && $_GET["ac"] == "relatorio") {
    include("relatorio.php");

} else if ($_GET["ac"] && $_GET["ac"] == "adicionar_funcionario") {
    include("adicionar_funcionario.php");


} else if ($_GET["ac"] && $_GET["ac"] == "editar_funcionario") {
    include("editar_func.php");


} else if ($_GET["ac"] && $_GET["ac"] == "editar_funcionar") {
    include("editar_funcionario.php");




} else if (!isset($_SESSION['usuario'])) {
    include("login.php");
}else{
?>
<div class="defaul col-md-9">
    <img src ="includes/img/sistema.jpeg" width="75%">
</div>
<?php
}




$smarty->display('rodape.tpl');
