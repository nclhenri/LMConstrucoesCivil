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
        <section class="site">
            <div class="soMargin">
                <div class="tituloLM">
                    <h2>A LM Construção Civil</h2>
                </div>
                <p class="preto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, dignissimos asperiores! Cum inventore dolorem recusandae obcaecati, consequatur omnis officia dolores repellendus dignissimos vitae possimus aspernatur ad totam. Odio, deleniti molestiae.</p>
            </div>

            <div class="organizacao site">
                <div class="cards2">
                    <div>
                        <img src="./img/bandeira.png" alt="">
                        <h2>Missão</h2>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sint aliquam et facere eligendi hic est nulla facilis voluptas, vero in. Modi reprehenderit hic eveniet commodi dolor vero cupiditate odio.</p>
                    </div>
                </div>

                <div class="cards2">
                    <div>
                        <img src="./img/olho.png" alt="">
                        <h2>Visão</h2>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sint aliquam et facere eligendi hic est nulla facilis voluptas, vero in. Modi reprehenderit hic eveniet commodi dolor vero cupiditate odio.</p>
                    </div>
                </div>

                <div class="cards2">
                    <div>
                        <img src="./img/valor.png" alt="">
                        <h2>Valores</h2>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sint aliquam et facere eligendi hic est nulla facilis voluptas, vero in. Modi reprehenderit hic eveniet commodi dolor vero cupiditate odio.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="qualidadeResultado site">
            <div>
                <div>
                    <h2>Qualidade</h2>
                </div>
                <p class="preto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dolorum dolores nihil totam libero voluptatibus earum, unde dolorem. Repellendus voluptates mollitia expedita facilis labore in quibusdam aspernatur consequuntur earum numquam.</p>
            </div>
            <img class="trocarImagem" src="./img/&.png" alt="">
            <img class="separacao"  src="./img/separacao.png" alt="">
            <div>
                <div>
                    <h2>Resultados</h2>
                </div>
                <p class="preto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dolorum dolores nihil totam libero voluptatibus earum, unde dolorem. Repellendus voluptates mollitia expedita facilis labore in quibusdam aspernatur consequuntur earum numquam.</p>
            </div>
        </section>

        <section class="nossaEquipe site">
            <h2 class="nossaEquipeTitle">Nossa Equipe</h2>
            <div class="estruturaEquipe">
                <div class="imagemEngenheiro">
                    <img src="./img/engenheiro.png" alt="">
                </div>
                <div class="informacoesEstrutura">
                    <div class="">
                        <h2>Luan Brito</h2>
                        <h3 class="preto cargo">Engenheiro Civil</h3>
                    </div>
                    <div>
                        <p class="preto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quaerat quisquam vero perspiciatis ad, necessitatibus ducimus repellendus corrupti quos nemo consequuntur, autem non odit animi numquam soluta eum, eius nulla.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <?php require_once('conteudo/formulario.php') ?>
        </section>

        <section class="responsive-iframe-container site">
            <div class="localizacao2">
                <h2>Nossa localização</h2>
                <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.3000470170637!2d-46.40990982457508!3d-23.485699778851945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63a3b19c6433%3A0xf137b951236862cd!2sR.%20Tiet%C3%AA%2C%20836%20-%20Vila%20Seabra%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2008180-410!5e0!3m2!1spt-BR!2sbr!4v1707665251304!5m2!1spt-BR!2sbr" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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