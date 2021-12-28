<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Page Info -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon -->
    <script src="https://kit.fontawesome.com/44147d9e89.js" crossorigin="anonymous"></script><!--icon-->

    <!-- Style -->
    <link href="../estilo/style.css" rel="stylesheet">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;700&family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet"/>
    
    <title>Modalidades</title>
</head>
<body>
    <header id="header" class="header" >
        <div class="logo left">
            <img src="../images/abutre_logo.png">
        </div>
            <nav class="desktop right">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="eventos.php">Eventos</a></li>
                    <li><a href="#modalidades">Modalidades</a></li>
                    <li><a href="lojinha.php">Lojinha</a></li>
                    <li><a href="hinos.php">Hinos</a></li>
                    <li><a href="parcerias.php">Parcerias</a></li>
                </ul>
            </nav>

            <nav class="container center right">
                <div class="menu">
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="eventos.php">Eventos</a></li>
                        <li><a href="#modalidades">Modalidades</a></li>
                        <li><a href="lojinha.php">Lojinha</a></li>
                        <li><a href="hinos.php">Hinos</a></li>
                        <li><a href="parcerias.php">Parcerias</a></li>
                    </ul>
                </div>
                <div class="toggle open right"><i class="fas fa-bars"></i></div>
                <div class="toggle close right"><i class="far fa-times-circle"></i></div>
            </nav>
            <div class="clear"></div>
    </header>
    <br><br><br><br>

    <!-- -------------Section Principais------------- -->
    <section class="section" id="principais">
        <div class="container">
            <div class="cards">
                <div class="card">
                    <i class="fas fa-volleyball-ball"></i>
                    <h3 class="title">Modalidaes</h3>
                    <p>Visa incrementar ações no meio esportivo e atividade física, com intuito de educar os participantes 
                        para uma vida mais ativa e ocupando o tempo livre com práticas saudáveis.</p>
                    <p>Promove o esporte em caráter sócio educativo, fundamentado na participação, 
                        na formação e no rendimento, tendo em vista um aprendizado prático de valores 
                        com integração social, espírito de equipe e valorização pessoal.</p>
                    <p>Escolha sua modalidade e seja mais um atleta abutre de coração a representar a faculdade. 
                        Contamos com você!</p>
                    
                </div>
            </div>
        </div>
    </section><!-- Principais -->

    <div class="divider-1"></div>

    <!-- -------------Section slide------------- -->
    <section class="section" id="modalities">
        <div class="titulo">   
            <p>Arraste para o lado e visualize nossas fotos!</p>
            <h2 class="title">Atletismo</h2>
        </div> 
        <div class="modalities swiper-container">
            <div class="swiper-wrapper">
                <div class="modalitie swiper-slide">
                    <blockquote>
                    <cite>
                        <img src="../images/batukabutre.jpg"/> 
                        <p>Atletismo 2019</p>
                    </cite>
                    </blockquote>
                </div>

                <div class="modalitie swiper-slide">
                    <blockquote>
                    <cite>
                        <img src="../images/mocas.jpg"/> 
                        <p>Atletismo 2020</p>
                    </cite>
                    </blockquote>
                </div>
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <h2 class="lado right"><i class="fas fa-arrow-right"></i></h2>
      </section><!-- section -->
    

    <!-- footer -->
    <footer>
        <div class="center">
            <p>© Associação Atlética Acadêmica Akira Nakadaira - Faculdade de Medicina da UNIMAR - 2022 - Todos os Direitos Reservados</p>
        </div><!--center-->
    </footer>

    <!----- swiper ----->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <!-- scrollreveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!----- main.js ---->
    <script src="../js/main.js"></script>
</body>
</html>