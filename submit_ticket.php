<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escola";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$problema = $_POST['problema'];

$sql = "INSERT INTO tickets (nome, email, problema) VALUES ('$nome', '$email', '$problema')";

if ($conn->query($sql) === TRUE) {
    echo "Ticket enviado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
