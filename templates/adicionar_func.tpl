<div class="default col-md-9 mb-5">

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
                            class="form-control" value="{$smarty.post.nome_completo}" required>
                    </div>

                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            CPF
                        </span>
                        <input type="text" name="cpf" id="cpf" placeholder="cpf"
                            class="form-control" value="{$smarty.post.cpf}" required>
                    </div>

                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                      Endereço &nbsp&nbsp
                        </span>
                        <input type="text" name="endreco" id="endreco" placeholder="insira o usuario"
                            class="form-control" value="{$smarty.post.endreco}" required>
                    </div>

                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                      Telefone:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        </span>
                        <input type="telefone" name="telefone" id="telefone" placeholder="insira o telefone"
                            class="form-control" value="{$smarty.post.telefone}" required>
                    </div>
                </div>
                <center>                     {$alerta}
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

</div>