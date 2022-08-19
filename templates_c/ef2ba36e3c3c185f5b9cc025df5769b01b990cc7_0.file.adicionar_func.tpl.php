<?php
/* Smarty version 4.1.1, created on 2022-08-19 16:14:26
  from 'C:\xampp\htdocs\www\SistemaWeb\templates\adicionar_func.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ff9ac27a3c08_10720682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef2ba36e3c3c185f5b9cc025df5769b01b990cc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\SistemaWeb\\templates\\adicionar_func.tpl',
      1 => 1660918462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff9ac27a3c08_10720682 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="default col-md-9 mb-5">

    <div class="panel panel-primary ">
        <div class="panel panel-heading active">
            <center><b>Adicionar Funcionario</b></center>
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
                            CPF
                        </span>
                        <input type="text" name="cpf" id="cpf" placeholder="cpf"
                            class="form-control" value="<?php echo $_POST['cpf'];?>
" required>
                    </div>

                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                      Endereço &nbsp&nbsp
                        </span>
                        <input type="text" name="endreco" id="endreco" placeholder="insira o usuario"
                            class="form-control" value="<?php echo $_POST['endreco'];?>
" required>
                    </div>

                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                      Telefone:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        </span>
                        <input type="telefone" name="telefone" id="telefone" placeholder="insira o telefone"
                            class="form-control" value="<?php echo $_POST['telefone'];?>
" required>
                    </div>
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
