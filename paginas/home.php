<section class="conteudo-principal home-pagina">
    <section class="home-hero">
        <div class="home-hero-texto">
            <span class="badge home-etiqueta">Faxina Confiavel</span>
            <h1>Encontre profissionais de confianca para cuidar do seu espaco</h1>
            <p>
                Atendimento acolhedor, limpeza feita com capricho e profissionais preparadas
                para trazer mais leveza para a sua rotina.
            </p>

            <div class="home-acoes">
                <a class="btn btn-primary btn-lg rounded-pill home-botao-principal" href="index.php?pagina=contato">Agendar atendimento</a>
                <a class="btn btn-outline-secondary btn-lg rounded-pill home-botao-secundario" href="index.php?pagina=servico">Ver servicos</a>
            </div>
        </div>

        <div class="painel-destaque home-destaque">
            <strong>Atendimento com carinho e profissionalismo</strong>
            <p>
                Cada profissional e escolhida para oferecer um servico cuidadoso, pontual e seguro.
            </p>

            <div class="home-mini-metricas">
                <div>
                    <span>+300</span>
                    <p>faxinas realizadas</p>
                </div>

                <div>
                    <span>98%</span>
                    <p>clientes satisfeitos</p>
                </div>
            </div>
        </div>
    </section>

    <section class="row g-3 home-metricas">
        <div class="col-md-4">
            <article class="card border-0 shadow-sm h-100 home-metrica-card">
                <div class="card-body">
                    <strong>+300</strong>
                    <span>atendimentos concluidos com cuidado e organizacao</span>
                </div>
            </article>
        </div>

        <div class="col-md-4">
            <article class="card border-0 shadow-sm h-100 home-metrica-card">
                <div class="card-body">
                    <strong>3 profissionais</strong>
                    <span>com perfis diferentes para combinar com sua necessidade</span>
                </div>
            </article>
        </div>

        <div class="col-md-4">
            <article class="card border-0 shadow-sm h-100 home-metrica-card">
                <div class="card-body">
                    <strong>Agendamento facil</strong>
                    <span>contato rapido pelo site para marcar seu atendimento</span>
                </div>
            </article>
        </div>
    </section>

    <section class="persona-secao">
        <div class="persona-cabecalho">
            <span class="badge home-etiqueta">Para quem e este site</span>
            <h2>Feito para quem precisa de ajuda rapida e confiavel com a limpeza</h2>
        </div>

        <div class="row g-4">
            <div class="col-lg-5">
                <article class="card border-0 shadow-sm h-100 persona-card">
                    <div class="card-body persona-card-corpo">
                        <span class="persona-titulo">Persona principal</span>
                        <h3>Mariana Alves, 36 anos</h3>
                        <p>
                            Mariana trabalha o dia inteiro, cuida da casa e da familia e tem pouco tempo para manter tudo em ordem sozinha.
                        </p>
                        <p>
                            Ela precisa encontrar uma profissional de confianca com rapidez, entender os servicos com clareza e agendar sem complicacao.
                        </p>
                    </div>
                </article>
            </div>

            <div class="col-lg-7">
                <article class="card border-0 shadow-sm h-100 persona-card persona-card-destaque">
                    <div class="card-body persona-card-corpo">
                        <span class="persona-titulo">Principal dor que resolvemos</span>
                        <h3>Facilitar a contratacao de um servico confiavel sem perda de tempo</h3>
                        <p>
                            O site foi pensado para reduzir inseguranca e duvidas no primeiro contato. Por isso, mostramos os servicos de forma objetiva,
                            destacamos profissionais com perfis diferentes e deixamos o caminho para falar com a equipe sempre visivel.
                        </p>
                        <ul class="persona-lista">
                            <li>Ajuda a comparar rapidamente os tipos de servico</li>
                            <li>Passa mais confianca antes do contato</li>
                            <li>Direciona o usuario para o agendamento de forma simples</li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="profissionais-secao">
        <div class="profissionais-cabecalho">
            <div>
                <span class="badge home-etiqueta">Nossa equipe</span>
                <h2>Conheca algumas profissionais em destaque</h2>
            </div>

            <p>
                Deslize os cards para o lado e veja qual perfil combina mais com o que voce precisa.
            </p>
        </div>

        <?php
            $profissionais = [
                [
                    "iniciais" => "AS",
                    "fotoClasse" => "profissional-foto-um",
                    "nome" => "Ana Souza",
                    "especialidade" => "Residencial",
                    "descricao" => "Especialista em rotina domestica, organizacao leve e limpeza detalhada de ambientes familiares.",
                    "metricas" => [
                        ["valor" => "+180", "texto" => "faxinas realizadas"],
                        ["valor" => "4 anos", "texto" => "de experiencia"],
                    ],
                    "tags" => ["Pontual", "Cuidadosa", "Organizada"],
                    "cta" => "Agendar com Ana",
                ],
                [
                    "iniciais" => "MC",
                    "fotoClasse" => "profissional-foto-dois",
                    "nome" => "Mariana Costa",
                    "especialidade" => "Comercial",
                    "descricao" => "Atua com limpeza de escritorios e espacos de atendimento, sempre com discricao e agilidade.",
                    "metricas" => [
                        ["valor" => "+120", "texto" => "faxinas realizadas"],
                        ["valor" => "3 anos", "texto" => "de experiencia"],
                    ],
                    "tags" => ["Agil", "Discreta", "Profissional"],
                    "cta" => "Agendar com Mariana",
                ],
                [
                    "iniciais" => "JL",
                    "fotoClasse" => "profissional-foto-tres",
                    "nome" => "Juliana Lima",
                    "especialidade" => "Pos-obra",
                    "descricao" => "Indicada para limpezas mais intensas, com foco em acabamento, poeira acumulada e recuperacao do ambiente.",
                    "metricas" => [
                        ["valor" => "+95", "texto" => "faxinas realizadas"],
                        ["valor" => "5 anos", "texto" => "de experiencia"],
                    ],
                    "tags" => ["Detalhista", "Experiente", "Caprichosa"],
                    "cta" => "Agendar com Juliana",
                ],
            ];
        ?>

        <div class="profissionais-carrossel">
            <?php foreach ($profissionais as $profissional): ?>
                <article class="card border-0 shadow-sm profissional-card">
                    <div class="profissional-foto <?= $profissional["fotoClasse"] ?>"><?= $profissional["iniciais"] ?></div>

                    <div class="card-body profissional-conteudo">
                        <div class="profissional-topo">
                            <h3><?= $profissional["nome"] ?></h3>
                            <span class="badge text-bg-light"><?= $profissional["especialidade"] ?></span>
                        </div>

                        <p>
                            <?= $profissional["descricao"] ?>
                        </p>

                        <div class="profissional-metricas">
                            <?php foreach ($profissional["metricas"] as $metrica): ?>
                                <div>
                                    <strong><?= $metrica["valor"] ?></strong>
                                    <span><?= $metrica["texto"] ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <ul class="profissional-tags">
                            <?php foreach ($profissional["tags"] as $tag): ?>
                                <li><?= $tag ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <a class="btn btn-primary rounded-pill profissional-botao" href="index.php?pagina=contato"><?= $profissional["cta"] ?></a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</section>
