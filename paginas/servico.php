<section class="conteudo-principal servicos-pagina">
    <div class="servicos-hero">
        <span class="badge servicos-etiqueta">Nossos servicos</span>
        <h1>Escolha o tipo de limpeza ideal para sua rotina</h1>
        <p>
            Criamos servicos pensados para casas, apartamentos e ambientes de trabalho.
            Veja as opcoes disponiveis e agende o atendimento que faz mais sentido para voce.
        </p>
    </div>

    <?php
        $servicos = [
            [
                "icone" => "01",
                "titulo" => "Limpeza residencial",
                "descricao" => "Ideal para manter sua casa limpa, organizada e acolhedora no dia a dia.",
                "itens" => [
                    "Limpeza de quartos, sala e cozinha",
                    "Organizacao basica dos ambientes",
                    "Cuidado com banheiros e superficies",
                ],
                "destaque" => false,
            ],
            [
                "icone" => "02",
                "titulo" => "Limpeza comercial",
                "descricao" => "Perfeita para escritorios, consultorios e pequenos negocios que precisam de boa apresentacao.",
                "itens" => [
                    "Ambiente limpo para clientes e equipe",
                    "Atendimento com discricao e cuidado",
                    "Rotina adaptada ao seu horario",
                ],
                "destaque" => true,
            ],
            [
                "icone" => "03",
                "titulo" => "Limpeza pos-obra",
                "descricao" => "Pensada para remover poeira e residuos depois de reformas, deixando o espaco pronto para uso.",
                "itens" => [
                    "Remocao de poeira acumulada",
                    "Limpeza detalhada de pisos e vidros",
                    "Mais conforto depois da reforma",
                ],
                "destaque" => false,
            ],
            [
                "icone" => "04",
                "titulo" => "Passadoria e organizacao",
                "descricao" => "Um apoio extra para deixar roupas, armarios e rotina da casa mais organizados.",
                "itens" => [
                    "Passadoria com capricho",
                    "Organizacao de roupas e objetos",
                    "Mais praticidade para o seu dia",
                ],
                "destaque" => false,
            ],
        ];
    ?>

    <div class="row g-4 servicos-grid">
        <?php foreach ($servicos as $servico): ?>
            <div class="col-md-6">
                <article class="card border-0 shadow-sm h-100 servico-card<?= $servico["destaque"] ? " servico-card-destaque" : "" ?>">
                    <div class="card-body d-grid servico-card-body">
                        <div class="servico-topo">
                            <span class="servico-icone"><?= $servico["icone"] ?></span>
                            <h2 class="card-title"><?= $servico["titulo"] ?></h2>
                        </div>

                        <p class="card-text">
                            <?= $servico["descricao"] ?>
                        </p>

                        <ul class="servico-lista">
                            <?php foreach ($servico["itens"] as $item): ?>
                                <li><?= $item ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <a class="btn btn-primary rounded-pill servico-botao" href="index.php?pagina=contato">Agendar agora</a>
                    </div>
                </article>
            </div>
        <?php endforeach; ?>
    </div>

    <section class="servicos-cta">
        <div>
            <h2>Precisa de ajuda para escolher o servico?</h2>
            <p>
                Entre em contato com a nossa equipe e vamos indicar a melhor opcao para sua necessidade.
            </p>
        </div>

        <a class="btn btn-light rounded-pill servicos-cta-botao" href="index.php?pagina=contato">Falar com a equipe</a>
    </section>
</section>
