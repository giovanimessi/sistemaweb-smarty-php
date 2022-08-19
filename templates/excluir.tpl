<div class="default col-md-9">
 <div class="panel panel-primary">
 	<div class="panel panel-heading"> <center> <b>Excluir Usuário</b></center></div>
 	<div class="panel-body" width="95%">
		<div class="alert alert-danger" role="alert">
		<h3>
		<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		<span class="sr-only">Erro:</span>
		Deseja Excluir o usuário <b>{$nome_completo}? </b>
		</h3>
		<hr>
		Ao excluir o usuário perderá todos os privilégios e todas as suas informações serão excluidas do banco de dados!!
		<center>
			 <a href="index.php?ac=excluir&id={$id_usuario}&opc=del" class="btn btn-primary"><span class="glyphicon glyphicon-trash">&nbsp;</span>Excluir Definitivamente</a>
             <a href="index.php" class="btn btn-danger">Cancelar</a>
 			</center>
		</div>
 	</div>
 </div>
</div>