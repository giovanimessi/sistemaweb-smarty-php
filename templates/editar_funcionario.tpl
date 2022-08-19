<div class="default col-md-9 mb-5">

    <div class="panel panel-primary ">
        <div class="panel panel-heading active">
            <center><b>Editar Funcionario</b></center>
        </div>
        <div class="panel-body width= '95%'">
            <form name="adicionar_usuario" method="POST">
                <div class="form-group">
                    <div class="form-group">
                        <span class="input-group-addon">
                            <input type="hidden" name="id_func" id="id_func" value="{$id_func}">


                        </span>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            Nome Completo
                        </span>
                        <input type="text" name="nome_completo" id="nome_completo" placeholder="Nome Completo"
                            class="form-control" value="{$nome_completo}" required>
                    </div>

                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            CPF &nbsp&nbsp
                        </span>
                        <input type="text" name="cpf" id="cpf" placeholder="insira o cpf"
                            class="form-control" value="{$cpf}" required>
                    </div>

                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Endereço:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        </span>
                        <input type="text" name="endreco" id="endreco" placeholder="insira o endereço" class="form-control"
                            value="{$endreco}" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Telefone:
                        </span>
                        <input type="text" name="telefone" id="telefone" placeholder="telefone"
                            class="form-control" value="{$telefone}" required>
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

</div>