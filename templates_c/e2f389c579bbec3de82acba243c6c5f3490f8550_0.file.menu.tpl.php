<?php
/* Smarty version 4.1.1, created on 2022-08-19 17:45:45
  from 'C:\xampp\htdocs\www\SistemaWeb\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ffb0292471f8_43518683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2f389c579bbec3de82acba243c6c5f3490f8550' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\SistemaWeb\\templates\\menu.tpl',
      1 => 1660923940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ffb0292471f8_43518683 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="default col-sm-3">
    <div class="list-group para_imprimir">
        <a href="{}" class="list-group-item active">
            Menu Usuários
        </a>
        <a href="index.php?ac=adicionar_usuario <?php echo $_smarty_tpl->tpl_vars['botao']->value;?>
" class="list-group-item list-group-item-action ">Inserir Usuários</a>
        <a href="index.php?ac=editar_usuario <?php echo $_smarty_tpl->tpl_vars['botao']->value;?>
" class="list-group-item list-group-item-action ">Editar Usuários</a>
        <a href="index.php?ac=relatorio <?php echo $_smarty_tpl->tpl_vars['botao']->value;?>
" class="list-group-item list-group-item-action ">Relaórios de Usuários</a>
        <a href="sair.php" class="list-group-item list-group-item-action ">  Sair</a>


    </div>
    <div class="list-group mt-2 para_imprimir">
        <a href="" class="list-group-item active">
            Menu Funcionários
        </a>
        <a href="index.php?ac=adicionar_funcionario <?php echo $_smarty_tpl->tpl_vars['botao']->value;?>
" class="list-group-item list-group-item-action">Inserir Funcionários</a>
        <a href="index.php?ac=editar_funcionario <?php echo $_smarty_tpl->tpl_vars['botao']->value;?>
" class="list-group-item list-group-item-action">Editar Funcionários</a>
        <a href="" class="list-group-item list-group-item-action">Relaórios de Funcionários</a>

    </div>

</div><?php }
}
