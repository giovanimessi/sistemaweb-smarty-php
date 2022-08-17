<div class="col-md-9">
	
	<div class="panel panel-primary">
		<div class="panel panel-heading">
			<center><b>Editar Usuários</b></center>
		</div>
		<div class="panel-body" width="95%">
			<table id="usuario" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<th>ID</th>
					<th>Nome</th>
					<th>Usuário</th>
					<th>Opções</th>
				</thead>
				{foreach from=$array_usuarios item=usuario}
				<tr>
					<td>{$usuario.id_usuario}</td>
					<td>{$usuario.nome_completo}</td>
					<td>{$usuario.usuario}</td>
					<td>
						<a href="index.php?ac=editar&id={$usuario.id_usuario}" class="btn btn-primary"><i class="fas fa-user-edit  mr-2"></i>Editar</a>

						<a href="index.php?ac=excluir&id={$usuario.id_usuario}" class="btn btn-danger"><i class="far fa-trash-alt mr-2"></i>Excluir</a>
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