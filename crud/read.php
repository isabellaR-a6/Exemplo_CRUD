<?php
include 'conexao.php';

$sql = "SELECT*FROM usuarios"; //consulta todos os usuários
$result = $conn->query($sql); //executa a consulta

if($result->num_rows >0){ //se há resultados
     echo"<table border='1'><tr><th>ID</th><th>Nome</th><th>Email</th><th>Ações</th></tr>";
     while($row = $result->fetch_assoc()){

        echo"<tr>
        <td>" . $row["id"]. "</td>
        <td>" . $row["nome"]. "</td>
        <td>" . $row["email"]. "</td>
        <td>
        <a href= 'update.php?id=" .$row["id"]. "'>Editar</a>

        <a href= 'delete.php?id=". $row["id"]. "'>Excluir</a>
        </td>
        </tr>";
      }
      echo "</table>"; //Fecha a tabela

     }else{
        echo "Nenhum usuário encontrado."; //Mensagem se não houver usuários
     }

?>