<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página Forró Artistas">
    <meta name="author" content="Rodrigo de Moraes">
    <link rel="icon" href="images/favico.ico">
    <title>Forró</title>

    <!--Folhas de estilo, css próprio por último -->
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
        

        <?php
            include 'includes/nav.php';
        ?>
      

          <header class="row">
            <div class="col-12 col-md-12 col-sm-12">
                <img src="images/header.jpg" width="100%" height="300" />
            </div>
        </header>

        <article>
          <div class="row section-inicial">
            <div class="col-md-4 offset-md-1 col-lg-4 offset-lg-0">
              <h1>Principais artistas</h1>
              <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
              
            </div>
  
            <div class="col">
              <img src="images/forro-secondary-topo.jpg" class="img-fluid imgs-prima rounded musica-brasileira" alt="Três artistas do forró reunidos">
            </div>
          </div>
          
  
          <section class="row section-artistas">
              <div class="col-md-6 col-lg-6 col-sm-12">
                <h2>Luiz Gonzaga</h2>
                <img src="images/Luiz-Gonzaga.jpg" class="img-fluid img-secondary rounded mx-auto d-block" alt="Fotografia de Luiz Gonzaga" height="150px">
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
              </div>
              <div class="col-md-6 col-lg-6 col-sm-12">
                  <h2>Carmelia Alves</h2>
                <img src="images/Carmelia-Alves.jpg" class="img-fluid img-secondary rounded mx-auto d-block" alt="Fotografia de Carmelia Alves" height="150px">
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
              </div>
             
          </section>
  
          <section class="row section-artistas">
              <div class="col-md-6 col-lg-6 col-sm-12">
                <h2>Trio-Nordestino</h2>
                <img src="images/Trio-Nordestino.jpg" class="img-fluid img-secondary rounded mx-auto d-block" alt="Fotografia do Trio Nordestino" height="150px">
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
              </div>
              <div class="col-md-6 col-lg-6 col-sm-12">
                  <h2>Elba Ramalho</h2>
                <img src="images/Elba-Ramalho.jpg" class="img-fluid img-secondary rounded mx-auto d-block" alt="Fotografia de Elba Ramalho" height="150px">
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
              </div>
             
          </section>
        </article>
            <!-- Playlist -->
            <div class="container">
                <section class="row botoes">
                    <div class="col-sm-12 col-md-6 col-lg-6 offset-md-3">
                        <h2 class="titulo">Ouças as Playlists</h2>
                        <div class="row">
                            <div class="col-6 button-spotify">
                                <a href="https://open.spotify.com/playlist/0llZ4rA8VVZtEXmBav8oRN" target="_blank"><img src="images/logospotify.png" class="img-fluid" alt="imagem do logo da marca spotify"></a>
                            </div>
                            <div class="col-6 button-youtube">
                                <a href="https://www.youtube.com/watch?v=CCZVUcadB2s&list=PLxFfose56Ajf5F-nGlOXC6MuqtrhY0x17" target="_blank" ><img src="images/logoyoutube.png" class="img-fluid" alt="imagem do logo da marca Youtube"></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

      
        <section class="row botao-voltar">
            <div class="col-12 col-md-12 col-sm-12 positionbutton">
                <button type="button" class="btn btn-success"><a href="forro-primary.php">Voltar</a></button>
            </div>
        </section>

        <?php
            include 'includes/footer.php';
         ?>
    
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body></html>
