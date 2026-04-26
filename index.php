<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $baseUrl = str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"]));
        $baseUrl = $baseUrl === "/" ? "" : rtrim($baseUrl, "/");
        $cssUrl = $baseUrl . "/css/style.css?v=" . filemtime(__DIR__ . "/css/style.css");
        $iconeUrl = $baseUrl . "/imagens/icone.png";
        $bannerUrl = $baseUrl . "/imagens/Banner.png";
        $paginaAtual = $_GET["pagina"] ?? "home";
        $navLinks = [
            "home" => "Home",
            "funcionamento" => "Quem somos",
            "servico" => "Servicos",
            "contato" => "Contato",
        ];
    ?>
    <title>Faxina Confiavel</title>
    <link rel="shortcut icon" href="<?= $iconeUrl ?>">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    >
    <link rel="stylesheet" href="<?= $cssUrl ?>">
</head>
<body>
    <header class="header">
        <img class="banner-imagem" src="<?= $bannerUrl ?>" alt="Banner da Faxina Confiavel">

        <?php include __DIR__ . "/paginas/includes/nav.php"; ?>
    </header>

    <main>
        <?php
            //recuperar a variavel pagina que esta vindo por get
            $pagina = $paginaAtual;
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
        <div class="footer-conteudo">
            <div class="footer-marca">
                <h2>Faxina Confiavel</h2>
                <p>
                    Solucoes em limpeza com atendimento acolhedor, profissionais cuidadosas
                    e mais praticidade para sua rotina.
                </p>
            </div>

            <div class="footer-coluna">
                <h3>Navegacao</h3>
                <?php foreach ($navLinks as $slug => $label): ?>
                    <a href="index.php?pagina=<?= $slug ?>"><?= $label ?></a>
                <?php endforeach; ?>
            </div>

            <div class="footer-coluna">
                <h3>Contato</h3>
                <a href="tel:+5500000000000">(00) 0000-0000</a>
                <a href="https://wa.me/5500000000000" target="_blank" rel="noopener noreferrer">WhatsApp</a>
                <a href="mailto:contato@faxinaconfiavel.com.br">contato@faxinaconfiavel.com.br</a>
                <span>Atendimento com agendamento previo</span>
            </div>

            <div class="footer-coluna">
                <h3>Atendimento</h3>
                <span>Limpeza residencial</span>
                <span>Limpeza comercial</span>
                <span>Pos-obra</span>
                <a class="btn btn-light rounded-pill footer-cta" href="index.php?pagina=contato">Agendar atendimento</a>
            </div>
        </div>

        <div class="footer-rodape">
            <p>Faxina Confiavel</p>
            <p>Desenvolvido por Ana Carolina</p>
        </div>
    </footer>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"
    ></script>
</body>
</html>
