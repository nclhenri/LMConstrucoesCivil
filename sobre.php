<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="resposivo.css">
    <link rel="stylesheet" href="style.css">
    <title>LM Construções - Sobre</title>
</head>

<body>
    <main>
        <?php require_once('conteudo/header.php'); ?>
        <?php require_once('conteudo/banner.php'); ?>

        <section class="sobreNos site">
            <div class="cabecalho">
                <img src="./img/missaoVisaoValores.png" alt="">
                <h2>Missão, visão e valores</h2>
                <img src="./img/linhaPreta.png" alt="">
            </div>

            <div class="conteudo site">
                <div class="primeiraParte">
                    <p>
                        <strong>Missão</strong> <br>
                        Perceber e entender as oportunidades de mercado, desenvolvendo produtos e soluções de engenharia para incorporações e construções, agregando valor e satisfação aos clientes, parceiros e colaboradores.
                        <br> <strong>Visão</strong> <br>
                        Ser referência na gestão de negócios na área de engenharia e de incorporação, gerando soluções equilibradas para cadeia envolvendo colaboradores, sócios e clientes com solidez, crescimento sustentado e resultados em suas operações.
                        <br> <strong>Valores</strong> <br>
                        Transformamos adversidades em oportunidades, agindo com humildade e gentileza. Cultivamos o “Bom dia” e o “Muito obrigado”.
                    </p>
                    <img src="./img/casas.png" alt="">
                </div>
                <div class="texto">
                    <p>
                        Lorem ipsum dolor sit amet. Ea voluptates labore et voluptas necessitatibus et quos aliquam. Hic necessitatibus doloremque et saepe rerum et nisi corporis ut molestias consequatur et optio consectetur non adipisci Quis At temporibus quam?

                        Rem blanditiis nulla ut incidunt dolorem est magni voluptatem sed earum possimus. In ullam perferendis aut quia voluptatum 33 accusamus modi eos voluptate aspernatur. Ut voluptatibus eius et maxime labore eos voluptates nihil sed Quis ratione sit inventore repudiandae aut recusandae ullam et sunt voluptatem. Qui temporibus velit aut internos praesentium est harum eaque ut velit repellendus hic delectus consequuntur non maxime esse et nihil perspiciatis.
                        Vel internos praesentium aut aperiam voluptate ut sunt facere. Ut harum modi qui nulla autem 33 maiores ducimus.
                        Aut excepturi animi vel ratione consequatur 33 quibusdam animi eum quam incidunt. Eum debitis rerum qui suscipit laboriosam qui voluptatem molestias ut voluptatum tempore? Sed quisquam cupiditate qui quisquam.
                    </p>
                </div>
            </div>
        </section>

        <section class="sobreNos site">
            <div class="cabecalho">
                <img src="./img/quemSomos.png" alt="">
                <h2>Quem somos</h2>
                <img src="./img/linhaPreta.png" alt="">
            </div>

            <div class="engenheiroSobre">
                <img src="./img/engenheiro.png" alt="">
                <div class="informacoes">
                    <div>
                        <h2>Luan</h2>
                        <h3>Engeheiro Civil</h3>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet. Ea voluptates labore et voluptas necessitatibus et quos aliquam. Hic necessitatibus doloremque et saepe rerum et nisi corporis ut molestias consequatur et optio consectetur non adipisci.

                        Rem blanditiis nulla ut incidunt dolorem est magni voluptatem sed earum possimus. In ullam perferendis aut quia voluptatum 33 accusamus modi eos voluptate aspernatur. Ut voluptatibus eius et maxime labore eos voluptates.
                        m blanditiis nulla ut incidunt dolorem est magni voluptatem sed earum possimus. In ullam perferendis aut quia voluptatum 33 accusamus modi eos voluptate aspernatur. Ut voluptatibus
                        m blanditiis nulla ut incidunt dolorem est magni voluptatem sed earum possimus. In ullam perferendis aut quia voluptatum 33 accusamus modi eos voluptate aspernatur. Ut voluptatibus
                        em blanditiis nulla ut incidunt dolorem est magni voluptatem sed earum possimus. In ullam perferendis aut quia voluptatum 33 accusamus modi eos voluptate aspernatur. Ut voluptatibus eius et maxime labore eos voluptates.
                        m blanditiis nulla ut incidunt dolorem est magni voluptatem sed earum possimus. In ullam perferendis aut quia
                        em blanditiis nulla ut incidunt dolorem est magni voluptatem sed earum possimus. In ullam perferendis aut quia voluptatum 33 accusamus modi eos voluptate aspernatur. Ut voluptatibus eius et maxime labore eos voluptates.
                        m blanditiis nulla ut incidunt dolorem est magni voluptatem sed earum possimus. In ullam perferendis aut quia
                    </p>
                </div>
            </div>
        </section>

        
        <?php require_once('conteudo/footer.php'); ?>
    </main>
    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
    $(document).ready(function () {
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