<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="resposivo.css">
    <link rel="stylesheet" href="style.css">
    <title>LM Construções - Sobre</title>
</head>

<body>
    <main>
        <?php require_once('conteudo/header.php'); ?>
        <?php require_once('conteudo/banner.php'); ?>
        <section class="missaoVisao site">
            <h2 class="tituloMissao">Missão, Visão e Valores</h2>
            <div class="cardMissao">
                <div class="estruturaMissao">
                    <img src="./img/missao.png" alt="">
                    <h2>Missão</h2>
                </div>
                <div>
                    <img src="./img/linhaSeparacao.png" alt="">
                </div>
                <p>
                    Perceber e entender as oportunidades de mercado, desenvolvendo produtos e soluções de engenharia para incorporações e construções, agregando valor e satisfação aos clientes, parceiros e colaboradores.
                </p>
            </div>
            <div class="cardMissao">
                <div class="estruturaMissao">
                    <img src="./img/visao.png" alt="">
                    <h2>Visão</h2>
                </div>
                <div>
                    <img src="./img/linhaSeparacao.png" alt="">
                </div>
                <p>
                    Ser referência na gestão de negócios na área de engenharia e de incorporação, gerando soluções equilibradas para cadeia envolvendo colaboradores, sócios e clientes com solidez, crescimento sustentado e resultados em suas operações.
                </p>
            </div>
            <div class="cardMissao">
                <div class="estruturaMissao">
                    <img src="./img/valores.png" alt="">
                    <h2>Valores</h2>
                </div>
                <div>
                    <img src="./img/linhaSeparacao.png" alt="">
                </div>
                <p>
                    Transformamos adversidades em oportunidades, agindo com humildade e gentileza. Cultivamos o “Bom dia” e o “Muito obrigado”.
                </p>
            </div>
        </section>
        <section class="qualidades site">
            <div class="estruturaQualidade">
                <div>
                    <h2>Qualidades</h2>
                </div>
                <div class="descricaoQualidade">
                    <p>
                        Desenvolvemos produtos e serviços dentro dos mais altos padrões de excelência. Cumprimos o que prometemos, respeitando os prazos estabelecidos, inovando e aprimorando nossos processos continuamente.
                    </p>
                </div>
            </div>

            <div class="separacao site">
                <img src="./img/separacao.png" alt="">
            </div>

            <div class="estruturaQualidade">
                <div>
                    <h2>Resultados</h2>
                </div>
                <div class="descricaoQualidade">
                    <p>
                        Buscamos os melhores resultados, com equilíbrio em todos os seus componentes e agilidade na tomada de decisões.
                    </p>
                </div>
            </div>
        </section>

        <section class="Sobre site">
            <div class="quemSomos">
                <img src="./img/quemSomos.png" alt="">
                <h2>Quem Somos</h2>
                <img class="linhaPreta" src="./img/linhaPreta.png" alt="">
            </div>

            <div class="estruturaEngenheiro">
                <div class="fotoEngenheiro">
                    <img src="./img/engeenheiro.png" alt="">
                </div>
                <div class="informacoesEngenheiro">
                    <h2>Luan Brito</h2>
                    <h3 class="formacao">Engenheiro Civil</h2>
                    <p>Lorem ipsum dolor sit amet. Ea voluptates labore et voluptas necessitatibus et quos aliquam. Hic necessitatibus doloremque et saepe rerum et nisi corporis ut molestias consequatur et optio consectetur non adipisci.</p>
                </div>
            </div>

            <div class="localizacao">
                <div>
                    <img src="./img/localizacao.png" alt="">
                    <h2>Nossa Localização</h2>
                </div>

                <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.300047017055!2d-46.40990982457507!3d-23.485699778851945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63a3b19c6433%3A0xf137b951236862cd!2sR.%20Tiet%C3%AA%2C%20836%20-%20Vila%20Seabra%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2008180-410!5e0!3m2!1spt-BR!2sbr!4v1704306170070!5m2!1spt-BR!2sbr" width="1000   " height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="separacao2 site">
                <img src="./img/separacao2.png" alt="">
            </div>

            <?php require_once('conteudo/formulario.php'); ?>
        </section>

        <?php require_once('conteudo/footer.php'); ?>
    </main>
    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.banner').slick({
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                arrows: false
            });
        });
    </script>
</body>


</html>