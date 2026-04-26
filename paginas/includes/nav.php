<nav class="navbar navbar-expand-lg header-nav" aria-label="Navegacao principal">
    <div class="container-fluid header-nav-container">
        <a class="navbar-brand header-brand" href="index.php?pagina=home">Faxina Confiavel</a>

        <button
            class="navbar-toggler header-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#header-menu-lista"
            aria-controls="header-menu-lista"
            aria-expanded="false"
            aria-label="Abrir navegacao"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="header-menu-lista">
            <ul class="navbar-nav align-items-lg-center gap-lg-2">
                <?php foreach ($navLinks as $slug => $label): ?>
                    <li class="nav-item">
                        <a
                            href="index.php?pagina=<?= $slug ?>"
                            class="nav-link btn header-link<?= $paginaAtual === $slug ? " active" : "" ?>"
                            <?= $paginaAtual === $slug ? 'aria-current="page"' : "" ?>
                        >
                            <?= $label ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>
