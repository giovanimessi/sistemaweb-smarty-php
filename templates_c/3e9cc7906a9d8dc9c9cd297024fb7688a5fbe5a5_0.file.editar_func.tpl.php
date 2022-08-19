<?php
/* Smarty version 4.1.1, created on 2022-08-19 18:56:39
  from 'C:\xampp\htdocs\www\SistemaWeb\templates\editar_func.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ffc0c7191636_19095567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e9cc7906a9d8dc9c9cd297024fb7688a5fbe5a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\SistemaWeb\\templates\\editar_func.tpl',
      1 => 1660928193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ffc0c7191636_19095567 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-9">
	
	<div class="panel panel-primary">
		<div class="panel panel-heading">
			<center><b>Editar Funcionários</b></center>
		</div>
		<div class="panel-body" width="95%">
			<table id="usuario" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<th>ID</th>
					<th>Nome Completo</th>
					<th>CPF</th>
                    <th>Endereço</th>
					<th>Telefone</th>
					<th>Opções</th>
				</thead>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_funcionario']->value, 'funcionario');
$_smarty_tpl->tpl_vars['funcionario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['funcionario']->value) {
$_smarty_tpl->tpl_vars['funcionario']->do_else = false;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['id_func'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['nome_completo'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['cpf'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['endreco'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['telefone'];?>
</td>


					<td>
						<a href="index.php?ac=editar_funcionar&id=<?php echo $_smarty_tpl->tpl_vars['funcionario']->value['id_func'];?>
" class="btn btn-primary"><i class="fas fa-user-edit  mr-2"></i>Editar</a>

						<a href="index.php?ac=excluir&id=<?php echo $_smarty_tpl->tpl_vars['funcionario']->value['id_func'];?>
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
