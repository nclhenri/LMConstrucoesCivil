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
    <link rel="stylesheet" href="./cssLightBox/lightbox.css">
    <title>LM Construções - Galeria</title>
</head>

<body>
    <main>
        <?php require_once('conteudo/header.php'); ?>
        <?php require_once('conteudo/banner.php'); ?>
        <section class="galeriaPagina site">
            <h2>Nossa galeria</h2>
            <div class="obrasCivis">
                <h2>Obras Civis</h2>
                <h3 class="clique">Clique para ampliar!</h3>
                <div class="galeriaObrasCivis">
                    <div class="aa">
                        <a href="./img/obrasCivisOriginal.png" data-lightbox="aa" data-title="Ponte"><img src="./img/obrasCivis1.png" alt=""></a>
                        <a href="./img/obrasCivisOriginal2.png" data-lightbox="aa" data-title="Estradas"><img src="./img/obrasCivis2.png" alt=""></a>
                        <a href="./img/obrasCivisOriginal3.jpg" data-lightbox="aa" data-title="Represas"><img src="./img/obrasCivis3.png" alt=""></a>
                    </div>
                </div>
            </div>

            <div class="obrasCivis">
                <h2>Edifícios</h2>
                <div class="galeriaObrasCivis">
                    <div class="aa">
                        <a href="./img/edificio1.png" data-lightbox="aa" data-title="Edifício"><img src="./img/edificio1.png" alt=""></a>
                        <a href="./img/edificio2.png" data-lightbox="aa" data-title="Edifício"><img src="./img/edificio2.png" alt=""></a>
                        <a href="./img/edificio3.png" data-lightbox="aa" data-title="Edifício"><img src="./img/edificio3.png" alt=""></a>
                    </div>
                </div>
            </div>

            <div class="obrasCivis">
                <h2>Casas</h2>
                <div class="galeriaObrasCivis">
                    <div class="aa">
                        <a href="./img/casaOriginal1.png" data-lightbox="aa" data-title="Ponte"><img src="./img/casa1.png" alt=""></a>
                        <a href="./img/casaOriginal2.png" data-lightbox="aa" data-title="Estradas"><img src="./img/casa2.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        <?php require_once('conteudo/footer.php'); ?>
    </main>
    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="./jsLightBox/lightbox.js"></script>
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