<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de registro</title>
    <link rel="stylesheet" href="../CSS/style.cssSA.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body>
    <div class="container-fluid m-0 p-0">
    <header>
            <div class="d-lg-none">

                <nav class="navbar navbar-light bg-light p-0">
                    <div class="container">
                        <a class="navbar-brand" href="pagina_inicial.php">S.A. Bombeiros</a>
                    </div>
                </nav>
            </div>
        </header>
    </div>
    <div class="paizao">
        
        <div class="registrar">
            <p><b>REGISTRAR-SE</b></p>
        </div>

        <form action="../php/registro_proc.php" method="post" style="
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    gap: 30px;
    align-items: center;">

        <div class="camp_nome">
            <input type="name" class="input_text" placeholder="Nome completo" name="name" 
                            id="name">
        </div>
        <div class="camp_nome">
            <input type="email" class="input_text" placeholder="Digite seu E-mail" name="email" 
                            id="email">
        </div>
        <div class="camp_nome">
            <input type="password" class="input_text" placeholder="Digite sua senha" name="password" 
                            id="senha">
        </div>
        <div class="camp_nome">
            <input type="text" class="input_text" placeholder="Digite seu cpf" name="cpf" 
                            id="senha">
        </div>
        <div class="botao_registrar" style="margin-right: 20px">
            <input class="btn_registrar" type="submit" value="Registrar" name="Registrar"> 
        </div>
    </div>
</form>
<footer class="text-center text-lg-start">
            <div class="text-center p-3">
                &copy; 2023 Bombeiros/Projeto Noar. Todos os direitos reservados.
            </div>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>