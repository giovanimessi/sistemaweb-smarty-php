<?php
/* Smarty version 4.1.1, created on 2022-08-19 14:10:56
  from 'C:\xampp\htdocs\www\SistemaWeb\templates\relatorio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ff7dd000e0b9_91282957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '197a5b25ea2a41575db92389e4042b47799fb357' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\SistemaWeb\\templates\\relatorio.tpl',
      1 => 1660911047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff7dd000e0b9_91282957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\www\\SistemaWeb\\includes\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="col-md-9">

    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <center><b>Relátorio de Usuários - <?php echo smarty_modifier_date_format(time());?>
</b></center>
        </div>
        <div class="panel-body" width="95%">
            <table id="usuario" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Usuário</th>

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

                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
        <div class="mb-4">
            <center>
                <a href="index.php" class="btn btn-danger para_imprimir">Cancelar </a>
                <button class="btn btn-success para_imprimir" onclick="imprimir_rel()">Imprimir</button>


            </center>
        </div>
    </div>

</div>

<?php echo '<script'; ?>
 type="text/javascript">
    function imprimir_rel() {
        $('.para_imprimir').hide();
        window.print();
        $(".para_imprimir").show();

    }
<?php echo '</script'; ?>
><?php }
}
