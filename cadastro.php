<?php
require(conexao.php);
//conectar o banco de dados, com o servidor (localhost), usuario(root), senha do usuario ("") e banco de dados (2tid)//
    if (isset($_POST['salvar'])){ //chamar a rotina do botão submit//

$nome=$_POST["nome"];
$email=$_POST["email"];
$senha=$_POST["senha"];  // criar as variáveis php e guardar os conteúdos das variáveis do html//

$submit="INSERT INTO cadastro (nome, email, senha) VALUE ('$nome','$email','$senha')";
$resultado=mysqli_query($conexao,$salva);}  //executar a linha query com a conexao//

?>