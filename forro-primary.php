<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página sobre o estilo musical forró">
    <meta name="author" content="Rodrigo de Moraes">
    <link rel="icon" href="images/favico.ico">
    <title>Forró</title>

    <!--Folhas de estilo, css próprio por último  -->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="/css/meu.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/forro.css">
    <!-- Links para as fontes do título -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="container">

            <?php
                include 'includes/nav.php';
            ?>


          <header class="row">
            <div class="col-12 col-md-12 col-sm-12">
                <img src="images/header.jpg" width="100%" height="300" />
            </div>
        </header>
      
        <article>
          <section class="row section-inicial">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="images/forro-topo.jpg" class="img-fluid musica-brasileira imgs-prima rounded" alt="Uma típica festa junina brasileira, com pessoas com chapéu de palha, dançando enfileirados">
              </div>  
            <div class="col-lg-6 col-md-6 col-sm-12">
              <h1>Forró</h1>
              <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
            </div>
          </section>
          

          <section class="row section-variedades">
              <div class="col-lg-4 col-md-6">
                <h2>Sanfoneiro</h2>
                <img src="images/variedades01.jpg" class="img-fluid imgs-prima rounded" alt="Um retrato em desenho de um sanfoneiro num tom alaranjado">
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
              </div>
              <div class="col-lg-4 col-md-6">
                <h2>Dança</h2>
                <img src="images/variedades02.jpg" class="img-fluid imgs-prima rounded" alt="Um retrato em desenho de pessoas dançando, em um tom alaranjado">
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
              </div>
              <div class="col-lg-4 col-md-6">
                  <h2>Alegria</h2>
                  <img src="images/variedades03.jpg" class="img-fluid imgs-prima rounded" alt="Um retrato em desenho de três homens tocando instrumentos típicos do estilo forró, em um tom alaranjado">
                  <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
                  
              </div>


          </section>
        </article>

        <section class="row">
          <div class="offset-lg-2 co-lg-8 offset-md-2 col-md-8 col-sm-12">

            <img src="images/forro_slogan.jpg" class="img-fluid musica-brasileira forro-primary align-self-center imgs-prima rounded" alt="">

            <div class="row botao-vejamais">
                <section class="col-12 col-md-12 col-sm-12 positionbutton">
                    <button type="button" class="btn btn-success"><a href="forro-secondary.php">Veja mais</a></button>
                </section>
            </div>
          </div>
         
      </section>
      
      <?php
            include 'includes/footer.php';
        ?>

        
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body></html>
