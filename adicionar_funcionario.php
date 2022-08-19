<?php

conectar();

$alerta = '';
if($_POST){
    $nome_completo = addslashes($_POST['nome_completo']);
 
    $cpf = addslashes($_POST['cpf']);

    $endreco = addslashes($_POST['endreco']);
    $telefone = addslashes($_POST['telefone']);

    $conectar = conectar();
    $sql = "SELECT * FROM func where cpf = '$cpf'";
    $result = mysqli_query($conectar,$sql);


 if(mysqli_num_rows($result) > 0){

   $alerta="<div class='alert-danger mb-5' role='alert' >
   <span class='glyphicon glyphicon-exclamation-sign' mr-3>Já existe cadastro!!</span></div>";

  }else if($cada = ''){
   
    $alerta="<div class='alert-danger mb-5' role='alert' >
    <span class='glyphicon glyphicon-exclamation-sign' mr-3>Erro ao cadastrar usúarios</span></div>";

   

   }else{
 
   $cada = "INSERT INTO func (nome_completo, cpf,endreco,telefone) values('$nome_completo',
   '$cpf','$endreco','$telefone')";

   $res = mysqli_query($conectar, $cada);

   $alerta="<div class='alert-success mb-5' role='alert' >
   <i class='fas fa-check-circle' mr-3' ><h2>Cadastrado com sucesso!!</h2></i></div>";

   }
 

 

}
$smarty->assign('alerta',$alerta);

$smarty->display("adicionar_func.tpl");


?>