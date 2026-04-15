<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faxina Confiavel</title>
    <link rel="shortcut icon" href="imagens/icone.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <img class="banner-imagem" src="imagens/Banner.png" alt="Banner da Faxina Confiavel">

        <nav class="header-nav">
            <a href="index.php?pagina=home">Home</a>
            <a href="index.php?pagina=funcionamento">Quem somos</a>
            <a href="index.php?pagina=servico">Serviços</a>
            <a href="index.php?pagina=contato">Contato</a>
        </nav>
    </header>

    <main>
        <?php
            //recuperar a variavel pagina que esta vindo por get
            $pagina = $_GET["pagina"] ?? "home";
            $pagina = "paginas/{$pagina}.php";

            //verificar se a pagina existe
            if(file_exists($pagina)){
                include $pagina;
            }else{
                include "paginas/404.php";
            }
        ?>
    </main>
    <footer class="footer">
        <p>Desenvolvido por Ana Carolina</p>
    </footer>
</body>
</html>
