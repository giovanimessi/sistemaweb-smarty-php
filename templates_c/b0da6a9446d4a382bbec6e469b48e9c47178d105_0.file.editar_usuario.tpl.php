<?php
/* Smarty version 4.1.1, created on 2022-08-17 16:18:39
  from 'C:\xampp\htdocs\www\SistemaWeb\templates\editar_usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62fcf8bf57fa73_01899201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0da6a9446d4a382bbec6e469b48e9c47178d105' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\SistemaWeb\\templates\\editar_usuario.tpl',
      1 => 1660745915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fcf8bf57fa73_01899201 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-9">
	
	<div class="panel panel-primary">
		<div class="panel panel-heading">
			<center><b>Editar Usuários</b></center>
		</div>
		<div class="panel-body" width="95%">
			<table id="usuario" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<th>ID</th>
					<th>Nome</th>
					<th>Usuário</th>
					<th>Opções</th>
				</thead>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nome_completo'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['usuario'];?>
</td>
					<td>
						<a href="index.php?ac=editar&id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
" class="btn btn-primary"><i class="fas fa-user-edit  mr-2"></i>Editar</a>

						<a href="index.php?ac=excluir&id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
" class="btn btn-danger"><i class="far fa-trash-alt mr-2"></i>Excluir</a>
					</td>
				</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</table>
		</div>
	</div>

</div>


<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
		$("#usuario").DataTable();
	});
<?php echo '</script'; ?>
><?php }
}
