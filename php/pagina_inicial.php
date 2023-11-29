<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de registro</title>
    <link rel="stylesheet" href="../CSS/style.cssSA.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


</head>
<body>
    <div class="container-fluid m-0 p-0">
        <header>
            <div class="d-lg-none">

                <nav class="navbar navbar-light bg-light p-0">
                    <div class="container">
                        <a class="navbar-brand" href="#">S.A. Bombeiros</a>
                    </div>
                </nav>

                <div class="offcanvas offcanvas-start" id="offcanvasNav">

                    <div class="offcanvas-header">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Fechar"></button>
                    </div>

                    
                </div>
            </div>
        </header>
    </div>
    <div class="paipagini">
        <button class="paginain">
        <div class="logo_medicina">
            <img src="../IMAGENS/logo_medicina.png" alt="">
        </div>
    </button>
    <button class="paginain">
        <div class="registrar_ocorrencia">
            <a href="../php/registrar_oco.php"><img src="../IMAGENS/registrar ocorrencia.PNG" alt=""></a>
        </div>
    </button>
    <button class="paginain">
        <div class="historico_ocorrencia">
            <img src="../IMAGENS/historico.ocorrencia.PNG" alt="">
        </div>
    </button>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <?php
    // Inicia a sessão
    session_start();

    // Verifica se há uma mensagem de cadastro na sessão
    if (isset($_SESSION['cadastro_msg'])) {
        $cadastro_msg = $_SESSION['cadastro_msg'];
        unset($_SESSION['cadastro_msg']);

        // Exibe o alerta de cadastro
        echo '<script>
            Swal.fire({
                icon: "success",
                title: "Cadastro realizado com sucesso!",
                text: "' . $cadastro_msg . '",
                timer: 3000, // 3 segundos
                showConfirmButton: false
            });
        </script>';
    }

    // Verifica se há uma mensagem de popup na sessão
    if (isset($_SESSION['popup_msg'])) {
        $popup_msg = $_SESSION['popup_msg'];
        unset($_SESSION['popup_msg']);

        // Exibe o popup de boas-vindas personalizado
        echo '<script>
            Swal.fire({
                icon: "success",
                title: "Bem-vindo(a)!",
                text: "' . $popup_msg . '",
                timer: 3000, // 3 segundos
                showConfirmButton: false,
                customClass: {
                    popup: "swal-custom-popup",
                    title: "swal-custom-title",
                    content: "swal-custom-content"
                }
            });
        </script>';
    }
    ?>
</body>
</html>