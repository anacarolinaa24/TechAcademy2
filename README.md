# Faxina Confiavel

Projeto web desenvolvido para apresentar servicos de limpeza de forma clara, acolhedora e confiavel. O site foi pensado para facilitar o primeiro contato com clientes, destacando profissionais, tipos de atendimento e canais de agendamento.

## Sobre o projeto

O `Faxina Confiavel` simula a presenca digital de uma empresa de limpeza, com foco em:

- apresentacao da marca
- exibicao dos servicos oferecidos
- destaque para profissionais da equipe
- formulario e canais de contato para agendamento

## Persona

O site foi pensado para atender principalmente pessoas que precisam contratar servicos de limpeza com rapidez, seguranca e confianca.

### Persona principal

- Nome ficticio: Mariana Alves
- Idade: 36 anos
- Profissao: assistente administrativa
- Rotina: trabalha o dia inteiro, cuida da casa e da familia, e possui pouco tempo para organizar tudo sozinha

### Necessidades e dores

- encontrar uma profissional de limpeza confiavel sem perder tempo
- entender com clareza quais servicos sao oferecidos
- sentir seguranca antes de entrar em contato
- conseguir agendar com praticidade

### Como o site responde a essa persona

- apresenta os servicos de forma visual e organizada
- destaca profissionais com experiencia e qualificacoes
- usa chamadas claras para contato e agendamento
- oferece uma navegacao simples, com foco em confianca e facilidade de uso

## Paginas do site

- `Home`: apresenta a proposta da empresa, metricas de confianca e cards das profissionais.
- `Quem somos`: explica como funciona o atendimento e a jornada do cliente.
- `Servicos`: exibe os tipos de limpeza oferecidos em cards com chamada para agendamento.
- `Contato`: reune formulario, canais de atendimento, beneficios e FAQ.
- `404`: pagina de erro para rotas inexistentes.

## Tecnologias utilizadas

- PHP
- HTML5
- CSS3

## Estrutura do projeto

```text
techAcademy2/
|-- css/
|   `-- style.css
|-- imagens/
|   |-- 404.png
|   |-- Banner.png
|   `-- icone.png
|-- paginas/
|   |-- 404.php
|   |-- contato.php
|   |-- funcionamento.php
|   |-- home.php
|   `-- servico.php
|-- index.php
`-- README.md
```

## Como executar localmente

1. Clone este repositorio:

```bash
git clone https://github.com/anacarolinaa24/TechAcademy2.git
```

2. Coloque o projeto dentro da pasta do seu servidor local, como `htdocs` no XAMPP.

3. Inicie o Apache no XAMPP.

4. Acesse no navegador:

```text
http://localhost/techAcademy2/
```

## Funcionalidades atuais

- navegacao entre paginas via parametro `pagina`
- layout responsivo com foco em apresentacao visual
- cards de servicos com CTA de agendamento
- carrossel horizontal de profissionais na home
- formulario de contato com selecao de servico
- footer com links rapidos e canais de contato

## Melhorias futuras

- integrar o formulario com envio real de mensagens
- corrigir e reforcar a pagina 404
- adicionar fotos reais das profissionais
- implementar validacao no roteamento das paginas
- padronizar completamente textos e codificacao dos arquivos

## Autoria

Desenvolvido por Ana Carolina.
