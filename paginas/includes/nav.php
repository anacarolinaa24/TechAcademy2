<nav class="header-nav" aria-label="Navegacao principal">
    <button
        class="header-menu-botao"
        type="button"
        aria-expanded="false"
        aria-controls="header-menu-lista"
        data-menu-toggle
    >
        <span>Menu</span>
        <span class="header-menu-icone" aria-hidden="true"></span>
    </button>

    <div class="header-menu-lista" id="header-menu-lista" data-menu-panel data-open="false">
        <?php foreach ($navLinks as $slug => $label): ?>
            <a
                href="index.php?pagina=<?= $slug ?>"
                class="<?= $paginaAtual === $slug ? "is-active" : "" ?>"
                <?= $paginaAtual === $slug ? 'aria-current="page"' : "" ?>
            >
                <?= $label ?>
            </a>
        <?php endforeach; ?>
    </div>
</nav>
