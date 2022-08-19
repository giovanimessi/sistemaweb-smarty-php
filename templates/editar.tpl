<div class="default col-md-9 mb-5">

    <div class="panel panel-primary ">
        <div class="panel panel-heading active">
            <center><b>Editar Usuario</b></center>
        </div>
        <div class="panel-body width= '95%'">
            <form name="adicionar_usuario" method="POST">
                <div class="form-group">
                    <div class="form-group">
                        <span class="input-group-addon">
                            <input type="hidden" name="id_usuario" id="id_usuario" value={$id_usuario}>


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
                            Nome Usuário &nbsp&nbsp
                        </span>
                        <input type="text" name="usuario" id="usuario" placeholder="insira o usuario"
                            class="form-control" value="{$usuario}" required>
                    </div>

                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Senha:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        </span>
                        <input type="password" name="senha" id="senha" placeholder="insira a senha" class="form-control"
                            value="{$senha}" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Confirmar Senha:
                        </span>
                        <input type="password" name="confirma_Senha" id="confirma_Senha" placeholder="confirme a senha"
                            class="form-control" value="{$confirmaSenha}" required>
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

</div>