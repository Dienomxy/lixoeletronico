<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = htmlspecialchars(trim($_POST['email']));
    $data_nascimento = htmlspecialchars(trim($_POST['data_nascimento']));
    $cpf = htmlspecialchars(trim($_POST['cpf']));
    $endereco = htmlspecialchars(trim($_POST['endereco']));
    $estado = htmlspecialchars(trim($_POST['estado']));
    $senha = htmlspecialchars(trim($_POST['senha']));
    $confirmar_senha = htmlspecialchars(trim($_POST['confirmar_senha']));
    
    
    if ($senha !== $confirmar_senha) {
        echo "As senhas não coincidem.";
        exit;
    }

    echo "<h2>Cadastro realizado com sucesso!</h2>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Data de Nascimento:</strong> $data_nascimento</p>";
    echo "<p><strong>CPF:</strong> $cpf</p>";
    echo "<p><strong>Endereço:</strong> $endereco</p>";
    echo "<p><strong>Estado:</strong> $estado</p>";
} else {
    echo "Método de requisição inválido.";
}
?>
