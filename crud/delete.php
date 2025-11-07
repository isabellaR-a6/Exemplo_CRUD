<?php
include 'conexao.php'; 

if(isset($_GET['id'])) { //Verifica se o id foi passado
    $id = $_GET['id']; //recebe o id
    $sql = "DELETE FROM usuarios WHERE id=$id"; //Prepara a exclusão

    if($conn->query($sql) === TRUE){
        header("Location: index.php"); //Redireciona se a exclusão for bem sucedida
    }else{
        echo "Erro: " . $conn->error; //Mostra erro, se houver
    }
}


?>