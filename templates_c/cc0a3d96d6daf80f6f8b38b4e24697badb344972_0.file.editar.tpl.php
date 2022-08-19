<?php
/* Smarty version 4.1.1, created on 2022-08-19 01:25:41
  from 'C:\xampp\htdocs\www\SistemaWeb\templates\editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62feca75b708c2_40511606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc0a3d96d6daf80f6f8b38b4e24697badb344972' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\SistemaWeb\\templates\\editar.tpl',
      1 => 1660865139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62feca75b708c2_40511606 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="default col-md-9 mb-5">

    <div class="panel panel-primary ">
        <div class="panel panel-heading active">
            <center><b>Editar Usuario</b></center>
        </div>
        <div class="panel-body width= '95%'">
            <form name="adicionar_usuario" method="POST">
                <div class="form-group">
                    <div class="form-group">
                        <span class="input-group-addon">
                            <input type="hidden" name="id_usuario" id="id_usuario" value=<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
>


                        </span>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            Nome Completo
                        </span>
                        <input type="text" name="nome_completo" id="nome_completo" placeholder="Nome Completo"
                            class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['nome_completo']->value;?>
" required>
                    </div>

                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Nome Usuário &nbsp&nbsp
                        </span>
                        <input type="text" name="usuario" id="usuario" placeholder="insira o usuario"
                            class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
" required>
                    </div>

                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Senha:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        </span>
                        <input type="password" name="senha" id="senha" placeholder="insira a senha" class="form-control"
                            value="<?php echo $_smarty_tpl->tpl_vars['senha']->value;?>
" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Confirmar Senha:
                        </span>
                        <input type="password" name="confirma_Senha" id="confirma_Senha" placeholder="confirme a senha"
                            class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['confirmaSenha']->value;?>
" required>
                    </div>
                   
                </div>

                <center>
                    <input type="submit" name="btn_inserir" class="btn btn-success" value="Inserir Usúario">
                    <a href="index.php" class="btn btn-danger">&nbsp&nbsp&nbsp&nbsp Cancelar &nbsp&nbsp&nbsp&nbsp </a>
                    <button type="reset" class="btn btn-warning">Resetar Form</button>
                </center>

            </form>

        </div>
    </div>

</div>

</div><?php }
}
