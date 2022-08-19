<?php
/* Smarty version 4.1.1, created on 2022-08-19 14:17:35
  from 'C:\xampp\htdocs\www\SistemaWeb\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ff7f5f13f203_12022955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2f389c579bbec3de82acba243c6c5f3490f8550' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\SistemaWeb\\templates\\menu.tpl',
      1 => 1660911443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff7f5f13f203_12022955 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="default col-sm-3">
    <div class="list-group para_imprimir">
        <a href="{}" class="list-group-item active">
            Menu Usuários
        </a>
        <a href="index.php?ac=adicionar_usuario" class="list-group-item list-group-item-action">Inserir Usuários</a>
        <a href="index.php?ac=editar_usuario" class="list-group-item list-group-item-action">Editar Usuários</a>
        <a href="index.php?ac=relatorio" class="list-group-item list-group-item-action">Relaórios de Usuários</a>
        <a href="sair.php" class="list-group-item list-group-item-action">  Sair</a>


    </div>
    <div class="list-group mt-2 para_imprimir">
        <a href="" class="list-group-item active">
            Menu Funcionários
        </a>
        <a href="" class="list-group-item list-group-item-action">Inserir Funcionários</a>
        <a href="" class="list-group-item list-group-item-action">Editar Funcionários</a>
        <a href="" class="list-group-item list-group-item-action">Relaórios de Funcionários</a>

    </div>

</div><?php }
}
