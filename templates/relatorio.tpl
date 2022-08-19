<div class="col-md-9">

    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <center><b>Relátorio de Usuários - {$smarty.now|date_format}</b></center>
        </div>
        <div class="panel-body" width="95%">
            <table id="usuario" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Usuário</th>

                </thead>
                {foreach from=$array_usuarios item=usuario}
                    <tr>
                        <td>{$usuario.id_usuario}</td>
                        <td>{$usuario.nome_completo}</td>
                        <td>{$usuario.usuario}</td>

                    </tr>
                {/foreach}
            </table>
        </div>
        <div class="mb-4">
            <center>
                <a href="index.php" class="btn btn-danger para_imprimir">Cancelar </a>
                <button class="btn btn-success para_imprimir" onclick="imprimir_rel()">Imprimir</button>


            </center>
        </div>
    </div>

</div>

<script type="text/javascript">
    function imprimir_rel() {
        $('.para_imprimir').hide();
        window.print();
        $(".para_imprimir").show();

    }
</script>