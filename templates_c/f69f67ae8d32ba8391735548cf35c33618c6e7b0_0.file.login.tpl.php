<?php
/* Smarty version 4.1.1, created on 2022-08-17 01:09:55
  from 'C:\xampp\htdocs\www\SistemaWeb\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62fc23c3cdb759_01152811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f69f67ae8d32ba8391735548cf35c33618c6e7b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\SistemaWeb\\templates\\login.tpl',
      1 => 1660691379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fc23c3cdb759_01152811 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="default col-md-9">
    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <center><b>Efetuar Login</b></center>
        </div>
        <div class="panel-body" width="95%">
            <form name="registrar_usuario" method="post">
                <?php echo $_smarty_tpl->tpl_vars['alerta']->value;?>

                

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Usuário&nbsp   
                        </span>
                        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Insira seu nome de usuário"  required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Senha&nbsp &nbsp 
                        </span>
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Insira sua senha" required>
                    </div>
                </div>


                

                <center>
                    <input type="submit" name="btn_inserir" value="Login" class="btn btn-primary">
                    
                </center>

            </form>
        </div>
    </div>
</div>
</div><?php }
}
