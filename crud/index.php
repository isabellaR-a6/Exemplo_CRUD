<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Simples</title>
</head>
<body>
    <h1>Gerenciamento de Usuario </h1>
    <!-- os dados da página usando o action leva os dados pra outra página -->
    <form action="store.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <input type="submit" value="Adicionar Usuário">
    </form>
    <hr>
    <h2>Lista de Usuários</h2>
    <div id="usuarios">
        <!-- inclui a lista de usuários -->
         <?php
         include 'read.php';
         //lista os dados dos usuario em tabela
         ?>
    </div>

</body>
</html>