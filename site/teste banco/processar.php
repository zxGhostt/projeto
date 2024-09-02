<?php
// Configurações do banco de dados (ajuste conforme necessário)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meubanco";

// Criar conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Capturar dados do formulário
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

// Preparar e executar a consulta SQL
$sql = "INSERT INTO pacientes (nome, idade, email, telefone) VALUES ('$nome', '$idade', '$email', '$telefone')";

if ($conn->query($sql) === TRUE) {
    echo "Novo registro criado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechar a conexão
$conn->close();
?>
