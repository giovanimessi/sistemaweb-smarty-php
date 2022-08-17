<?php
/* Smarty version 4.1.1, created on 2022-08-09 13:30:04
  from 'C:\xampp\htdocs\www\SistemaWeb\templates\adicionar_usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62f2453c2436c4_83062914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e6389578ac19369055a03e15a9b4cec5a8ffd22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\SistemaWeb\\templates\\adicionar_usuario.tpl',
      1 => 1660044547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f2453c2436c4_83062914 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="default col-md-9 mb-5">

    <div class="panel panel-primary ">
        <div class="panel panel-heading active">
            <center><b>Adicionar Usuario</b></center>
        </div>
        <div class="panel-body width= '95%'">
            <form name="adicionar_usuario" method="POST">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Nome Completo
                        </span>
                        <input type="text" name="nome_completo" id="nome_completo" placeholder="Nome Completo"
                            class="form-control" value="<?php echo $_POST['nome_completo'];?>
" required>
                    </div>

                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                      Nome  Usuário &nbsp&nbsp
                        </span>
                        <input type="text" name="usuario" id="usuario" placeholder="insira o usuario"
                            class="form-control" value="<?php echo $_POST['usuario'];?>
" required>
                    </div>

                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                      Senha:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        </span>
                        <input type="password" name="senha" id="senha" placeholder="insira a senha"
                            class="form-control" value="<?php echo $_POST['senha'];?>
" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                      Confirmar Senha:
                        </span>
                        <input type="password" name="confirma_Senha" id="confirmaSenha" placeholder="confirme a senha"
                            class="form-control" value="<?php echo $_POST['confirma_Senha'];?>
" required>
                    </div>
                   <center>                     <?php echo $_smarty_tpl->tpl_vars['alerta']->value;?>

                   </center>
                </div>

                <center>
                <input type="submit" name="btn_inserir" class="btn btn-success"
                 value="Inserir Usúario">
                 <a href="index.php" class="btn btn-danger">&nbsp&nbsp&nbsp&nbsp Cancelar &nbsp&nbsp&nbsp&nbsp </a>
                 <button type="reset"class="btn btn-warning">Resetar Form</button>
                </center>

            </form>

        </div>
    </div>

</div>

</div><?php }
}
