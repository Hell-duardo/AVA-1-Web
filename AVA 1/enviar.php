<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);
    
    echo "<h2>Mensagem recebida!</h2>";
    echo "Nome: $nome <br>";
    echo "Email: $email <br>";
    echo "Mensagem: $mensagem <br>";
}
?>