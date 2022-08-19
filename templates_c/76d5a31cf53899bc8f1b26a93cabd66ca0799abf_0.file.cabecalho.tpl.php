<?php
/* Smarty version 4.1.1, created on 2022-08-19 14:15:24
  from 'C:\xampp\htdocs\www\SistemaWeb\templates\cabecalho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ff7edc55e7f8_64312670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76d5a31cf53899bc8f1b26a93cabd66ca0799abf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\SistemaWeb\\templates\\cabecalho.tpl',
      1 => 1660911274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff7edc55e7f8_64312670 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
        <link rel="stylesheet" type="text/css" href="templates/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="templates/css/bootstrap3.min.css">
        <link rel="stylesheet" type="text/css" href="templates/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    
    
        <?php echo '<script'; ?>
 type="text/javascript" src="templates/js/jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="templates/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="templates/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="templates/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
        
    </head>
    <body>
        <div class="container" style="width:90%">
            <div class="row">
                <div class="col-12 text-center mb-5 para_imprimir">
                    <h1 class="display-5"><i class="fas fa-user-friends text-secondary mr-3"></i>Sistema de Gerenciamento</h1>
                <p>Controle de Funcionários </p>
            
                </div>
            </div>
            
        
    <?php }
}
