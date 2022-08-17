<?php

conectar();

$alerta = '';
if($_POST){
    $nome_completo = $_POST['nome_completo'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $confirmaSenha = $_POST['confirma_Senha'];

    $conectar = conectar();
    $sql = "SELECT * FROM usuarios where usuario = '$usuario'";
    $result = mysqli_query($conectar,$sql);


    if($senha !=  $confirmaSenha){
 
    $alerta="<div class='alert-danger mb-5' role='alert' >
    <span class='glyphicon glyphicon-exclamation-sign' mr-3>As senhas nao sao  iguais!!</span></div>";

    }else if(mysqli_num_rows($result) > 0){

   $alerta="<div class='alert-danger mb-5' role='alert' >
   <span class='glyphicon glyphicon-exclamation-sign' mr-3>Já existe cadastro!!</span></div>";
    
   }else{
 
   $cada = "INSERT INTO usuarios (nome_completo, usuario,senha,confirma_Senha) values('$nome_completo',
   '$usuario','$senha','$confirmaSenha')";

   $res = mysqli_query($conectar, $cada);

   $alerta="<div class='alert-success mb-5' role='alert' >
   <i class='fas fa-check-circle' mr-3' ><h2>Cadastrado com sucesso!!</h2></i></div>";


   if($cada == ''){
   
      $alerta="<div class='alert-danger mb-5' role='alert' >
      <span class='glyphicon glyphicon-exclamation-sign' mr-3>Erro ao cadastrar usúarios</span></div>";

   }

 }

}
$smarty->assign('alerta',$alerta);

$smarty->display("adicionar_usuario.tpl");


?>