<?php
/* Smarty version 4.1.1, created on 2022-08-06 14:34:30
  from 'C:\xampp\htdocs\www\SistemaWeb\templates\teste.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ee5fd6cb1da5_66225221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba3c5638bb8e391dabab5d511f54d6969d6340ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\SistemaWeb\\templates\\teste.php',
      1 => 1659789266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ee5fd6cb1da5_66225221 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/css/bootstrap.min.css">
    <link rel="stylesheet" href="templates/css/fontawesome.min.css">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
> -->
    <title>Document</title>
</head>
<body>
<?php echo $_smarty_tpl->tpl_vars['var1']->value;?>
 ao <?php echo $_smarty_tpl->tpl_vars['var2']->value;?>


<?php echo $_smarty_tpl->tpl_vars['minha']->value;?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'dados');
$_smarty_tpl->tpl_vars['dados']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dados']->value) {
$_smarty_tpl->tpl_vars['dados']->do_else = false;
echo $_smarty_tpl->tpl_vars['dados']->value['nome'];?>
<br>


<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<button class="btn btn-warning">Pousada Japere <i class="fa-duotone fa-car"></i>'</button>
</body>
</html><?php }
}
