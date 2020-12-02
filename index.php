<!DOCTYPE php>
<php lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favico.ico">

    <title>Musica Brasileira</title>

    <!-- Normalize CSS para resstar os defaults do browser  -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- O meu vem por último pq estamos reescrevendo as regras dos anteriores -->
    <link href="css/meu.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/base.css"/>
    <link rel="stylesheet" href="css/index.css"/>

    <!-- Links das fontes aqui --------------------------------------------- -->
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
                <img src="images/header.jpg" width="100%" height="300"/>
            </div>
          </header>
      
              <section class="row topo-home">
                <div class="col-12">
                  <h1>Música Brasileira</h1>
                  <div class="col-10 offset-1">
                    <img src="images/home-top.jpg" class="img-fluid musica-brasileira" alt="" width="100%" height=>
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
                  </div>  
                </div>
              </section>
              

              <!-- secão com as 5 chamadas paras as páginas -->
              <section class="row">
                  <div class="col-lg-4  col-md-6">
                    <h2>Axé</h2>
                    <img src="images/home-axe.jpg" class="img-fluid img-sec" alt="">
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>

                    <!-- Botões de acesso ___>>>>>>>>> -->
                    <div class="row botao-vejamais">
                      <section class="col-12 col-md-12 col-sm-12 positionbutton">
                        <button type="button" class="btn btn-dark"><a href="axe-primary.php">Veja mais</a></button>
                      </section>
                    </div>
                    
                    
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <h2>Rock</h2>
                    <img src="images/home-rock.jpg" class="img-fluid img-sec" alt="">
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>

                    <!-- Botões de acesso ___>>>>>>>>> -->
                    <div class="row botao-vejamais">
                      <section class="col-12 col-md-12 col-sm-12 positionbutton">
                        <button type="button" class="btn btn-dark"><a href="rock-primary.php">Veja mais</a></button>
                      </section>
                    </div>

                  </div>

                  <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0 forro">
                    <h2>Forró</h2>
                    <img src="images/home-forro.jpg" class="img-fluid img-sec" alt="">
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>

                    <!-- Botões de acesso ___>>>>>>>>> -->
                    <div class="row botao-vejamais">
                      <section class="col-12 col-md-12 col-sm-12 positionbutton">
                        <button type="button" class="btn btn-dark"><a href="forro-primary.php">Veja mais</a></button>
                      </section>
                    </div>
                  </div>
              </section>
      
              <section class="row justify-content-between">
                <div class="col-lg-4 col-md-6">
                  <h2>Samba</h2>
                  <img src="images/home-samba.jpg" class="img-fluid img-sec" alt="">
                  <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>

                  <!-- Botões de acesso ___>>>>>>>>> -->
                  <div class="row botao-vejamais">
                      <section class="col-12 col-md-12 col-sm-12 positionbutton">
                        <button type="button" class="btn btn-dark"><a href="samba-primary.php">Veja mais</a></button>
                      </section>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 mpb">
                  <h2>Mpb</h2>
                  <img src="images/home-mpb.jpg" class="img-fluid img-sec" alt="">
                  <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
                  <!-- Botões de acesso ___>>>>>>>>> -->
                  <div class="row botao-vejamais">
                      <section class="col-12 col-md-12 col-sm-12 positionbutton">
                        <button type="button" class="btn btn-dark"><a href="mpb-primary.php">Veja mais</a></button>
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

</body></php>
