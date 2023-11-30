<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclua o arquivo de configuração do banco de dados
    include_once "dbdb.php"; // Substitua "config.php" pelo nome do seu arquivo de configuração

    // Obtém os dados do formulário
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpf = $_POST["cpf"];

    // Verifica se o e-mail já está cadastrado
    $email_check_query = "SELECT * FROM usuario WHERE email_usuario='$email' LIMIT 1";
    $result_email = $conn->query($email_check_query);
    $user_email = $result_email->fetch_assoc();

    // Verifica se o CPF já está cadastrado
    $cpf_check_query = "SELECT * FROM usuario WHERE CPF_usuario='$cpf' LIMIT 1";
    $result_cpf = $conn->query($cpf_check_query);
    $user_cpf = $result_cpf->fetch_assoc();

    if ($user_email) {
        // E-mail já cadastrado, redireciona para a página de registro com mensagem de erro
        header("Location: registro.php?error=email_duplicado");
        exit();
    }

    if ($user_cpf) {
        // CPF já cadastrado, redireciona para a página de registro com mensagem de erro
        header("Location: registro.php?error=cpf_duplicado");
        exit();
    }

    // Insere os dados no banco de dados
    $sql = "INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario, CPF_usuario) VALUES ('$name', '$email', '$password', '$cpf')";

    if ($conn->query($sql) === TRUE) {
        // Registro bem-sucedido, você pode redirecionar para uma página de sucesso se necessário
        header("Location: pagina_inicial.php");
        exit();
    } else {
        // Erro ao registrar, redireciona para a página de registro com mensagem de erro
        header("Location: registro.php?error=erro_registro");
        exit();
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
} else {
    // Se o formulário não foi enviado, redirecione para a página de registro
    header("Location: registro.php");
    exit();
}
?>
