<div class="col-md-9">
	
	<div class="panel panel-primary">
		<div class="panel panel-heading">
			<center><b>Editar Funcionários</b></center>
		</div>
		<div class="panel-body" width="95%">
			<table id="usuario" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<th>ID</th>
					<th>Nome Completo</th>
					<th>CPF</th>
                    <th>Endereço</th>
					<th>Telefone</th>
					<th>Opções</th>
				</thead>
				{foreach from=$array_funcionario item=funcionario}
				<tr>
					<td>{$funcionario.id_func}</td>
					<td>{$funcionario.nome_completo}</td>
					<td>{$funcionario.cpf}</td>
                    <td>{$funcionario.endreco}</td>
                    <td>{$funcionario.telefone}</td>


					<td>
						<a href="index.php?ac=editar_funcionar&id={$funcionario.id_func}" class="btn btn-primary"><i class="fas fa-user-edit  mr-2"></i>Editar</a>

						<a href="index.php?ac=excluir&id={$funcionario.id_func}" class="btn btn-danger"><i class="far fa-trash-alt mr-2"></i>Excluir</a>
					</td>
				</tr>
				{/foreach}
			</table>
		</div>
	</div>

</div>


<script type="text/javascript">
	$(document).ready(function(){
		$("#usuario").DataTable();
	});
</script>