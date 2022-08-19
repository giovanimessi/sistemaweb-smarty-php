<?php
/* Smarty version 4.1.1, created on 2022-08-19 01:55:50
  from 'C:\xampp\htdocs\www\SistemaWeb\templates\excluir.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62fed18664edd1_23890523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91a2385760a9e11fab4dc5cf9e450726715ccef1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\SistemaWeb\\templates\\excluir.tpl',
      1 => 1660866484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fed18664edd1_23890523 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="default col-md-9">
 <div class="panel panel-primary">
 	<div class="panel panel-heading"> <center> <b>Excluir Usuário</b></center></div>
 	<div class="panel-body" width="95%">
		<div class="alert alert-danger" role="alert">
		<h3>
		<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		<span class="sr-only">Erro:</span>
		Deseja Excluir o usuário <b><?php echo $_smarty_tpl->tpl_vars['nome_completo']->value;?>
? </b>
		</h3>
		<hr>
		Ao excluir o usuário perderá todos os privilégios e todas as suas informações serão excluidas do banco de dados!!
		<center>
			 <a href="index.php?ac=excluir&id=<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
&opc=del" class="btn btn-primary"><span class="glyphicon glyphicon-trash">&nbsp;</span>Excluir Definitivamente</a>
             <a href="index.php" class="btn btn-danger">Cancelar</a>
 			</center>
		</div>
 	</div>
 </div>
</div><?php }
}
