<?php

session_start();


include('includes/config.ini.php');
////////////////
$titulo = "Sistema de Gerenciamento";

////////////
$smarty->assign('titulo', $titulo);
$smarty->display('cabecalho.tpl');
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


} else if (!isset($_SESSION['usuario'])) {
    include("login.php");
}

$smarty->display('rodape.tpl');
