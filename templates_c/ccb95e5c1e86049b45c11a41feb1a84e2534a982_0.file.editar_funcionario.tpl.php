<?php
/* Smarty version 4.1.1, created on 2022-08-19 19:06:59
  from 'C:\xampp\htdocs\www\SistemaWeb\templates\editar_funcionario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ffc333d67023_15293270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccb95e5c1e86049b45c11a41feb1a84e2534a982' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\SistemaWeb\\templates\\editar_funcionario.tpl',
      1 => 1660928816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ffc333d67023_15293270 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="default col-md-9 mb-5">

    <div class="panel panel-primary ">
        <div class="panel panel-heading active">
            <center><b>Editar Funcionario</b></center>
        </div>
        <div class="panel-body width= '95%'">
            <form name="adicionar_usuario" method="POST">
                <div class="form-group">
                    <div class="form-group">
                        <span class="input-group-addon">
                            <input type="hidden" name="id_func" id="id_func" value="<?php echo $_smarty_tpl->tpl_vars['id_func']->value;?>
">


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
                            CPF &nbsp&nbsp
                        </span>
                        <input type="text" name="cpf" id="cpf" placeholder="insira o cpf"
                            class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cpf']->value;?>
" required>
                    </div>

                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Endereço:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        </span>
                        <input type="text" name="endreco" id="endreco" placeholder="insira o endereço" class="form-control"
                            value="<?php echo $_smarty_tpl->tpl_vars['endreco']->value;?>
" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Telefone:
                        </span>
                        <input type="text" name="telefone" id="telefone" placeholder="telefone"
                            class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['telefone']->value;?>
" required>
                    </div>
                   
                </div>

                <center>
                    <input type="submit" name="btn_inserir" class="btn btn-success" value="Editar">
                    <a href="index.php" class="btn btn-danger">&nbsp&nbsp&nbsp&nbsp Cancelar &nbsp&nbsp&nbsp&nbsp </a>
                    <button type="reset" class="btn btn-warning">Resetar Form</button>
                </center>

            </form>

        </div>
    </div>

</div>

</div><?php }
}
