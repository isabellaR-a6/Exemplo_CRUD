<?php
include 'conexao.php';

if(isset($_GET['id'])){   // verifica se o id foi passado
    $id = $_GET['id']; //recebe o id
    $sql = "SELECT*FROM usuarios WHERE id=$id"; //consulta o usuario
    $result = $conn->query($sql); //executa a consulta
    $usuario = $result->fetch_assoc(); //Obtém os dados do usuario
}

//se o formulario for enviado

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome']; //recebe o novo nome
    $email = $_POST ['email']; //recebe o novo email
    $sql = "UPDATE usuarios SET nome='$nome', email='$email' WHERE id=$id"; // prepara a atualização

    if($conn->query($sql) === TRUE){
        header("Location: index.php"); // Redireciona se a atualização for bem sucedida
    }else{
        echo"Erro: " .$conn->error; //Mostra erro,se houver 
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atualização de Usuários</title>
</head>
<body>
    <h1>Atualizar Usuários</h1>
    <form action="" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $usuario['nome'];?>" required>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required>
        <input type="submit" value="Atualizar">
    </form>

    <a href="index.php">Cancelar</a> 
    <!-- link para voltar -->

</body>
</html>