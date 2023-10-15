<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LM Construções - Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="resposivo.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Archivo:wght@300;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Carrois+Gothic&display=swap');
    </style>
</head>

<body>
    <main>
        <?php require_once('conteudo/header.php'); ?>
        <?php require_once('conteudo/banner.php'); ?>
        <section class="servicos ">
            <h2>O QUE FAZEMOS?</h2>
            <h3>SERVIÇOS</h3>

            <div class="estruturaCards">
                <div class="cards">
                    <div>
                        <img src="./img/Home.svg" alt="">
                    </div>
                    <div class="tituloCards">
                        <h2>OBRAS RESIDENCIAIS</h2>
                    </div>
                    <div>

                        <p>
                            Planejamento, projeto e gestão. Garatindo segurança e eficiência.

                        </p>
                    </div>

                </div>

                <div class="cards ">
                    <div>
                        <img src="./img/predio.svg" alt="">
                    </div>
                    <div class="tituloCards">
                        <h2>OBRAS COMERCIAIS</h2>
                    </div>
                    <div>

                        <p>
                            Construção e renovação de edifícios e espaços comerciais.
                        </p>
                    </div>

                </div>

                <div class="cards">
                    <div>
                        <img src="./img/ferramenta.svg" alt="">
                    </div>
                    <div class="tituloCards">
                        <h2>REFORMA</h2>
                    </div>
                    <div>

                        <p>
                            Melhorias e atualizações, estéticas ou funcionais.
                        </p>
                    </div>

                </div>

            </div>
            <p>Restou alguma dúvida? Nos mande uma mensagem <a href="tel:+55(11)999999-9999">Clicando aqui!</a> ou (11)
                99999-9999</p>

        </section>
        <section class="estruturaGaleria">
            <h2>GALERIA</h2>
            <div class="galeria">

                <div class="imagensGaleria">

                    <img src="./img/fotoUmGaleria.png" alt="">
                    <img src="./img/fotoDoisGaleria.png" alt="">
                    <img src="./img/fotoTresGaleria.png" alt="">

                </div>
                <button>Veja Mais</button>
            </div>
        </section>
        <?php require_once('conteudo/formulario.php'); ?>
        <?php require_once('conteudo/footer.php'); ?>
    </main>
    <script src="./js/script.js"></script>
</body>
</html>