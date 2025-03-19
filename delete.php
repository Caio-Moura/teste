<?php
include("connection.php"); // Inclui o arquivo de conexão ao banco de dados

// Pegando a variável do formulário
$NOME = $_POST['nome'];

// Fazendo o comando para excluir dados na tabela do banco
$sql = "DELETE FROM clientes WHERE nome = '$NOME'";

if (mysqli_query($conn, $sql)) {
    echo "$NOME excluído com sucesso.";
} else {
    echo "Falha ao excluir: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<a href="index.php"><button type="button" class="btn btn-primary">Voltar</button></a>
