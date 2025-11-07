<?php
include 'conexao.php';

// Verifica se o fórmualrio foi enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
$nome = $_POST['nome']; //recebe o nome
$email = $_POST ['email']; //recebe o email
$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
//Prepara a consulta

// executa a consulta e verifica se foi bem adicionada

if($conn->query($sql) === TRUE){
    header("Location: index.php"); //redireciona para a página principal
}else{
    echo "ERROR:". $conn->error; //mostra erro se houver
}
}

?>