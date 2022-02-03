<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Page Info -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon -->
    <script src="https://kit.fontawesome.com/44147d9e89.js" crossorigin="anonymous"></script><!--icon-->

    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- Style -->
    <link href="estilo/style.css" rel="stylesheet">
    
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;700&family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet"/>

    <title>Medicina Unimar</title>
    
</head>
<body>
    <header id="header" class="header" >
        <div class="logo left">
            <img src="images/abutre_logo.png">
        </div>
            <nav class="desktop right">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="pages/eventos.php">Eventos</a></li>
                    <li><a href="pages/modalidades.php">Modalidades</a></li>
                    <li><a href="pages/lojinha.php">Lojinha</a></li>
                    <li><a href="pages/hinos.php">Hinos</a></li>
                    <li><a href="pages/parcerias.php">Parcerias</a></li>
                </ul>
            </nav>
            <!-- menu -->
            <nav class="container center right">
                <div class="menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="pages/eventos.php">Eventos</a></li>
                        <li><a href="pages/modalidades.php">Modalidades</a></li>
                        <li><a href="pages/lojinha.php">Lojinha</a></li>
                        <li><a href="pages/hinos.php">Hinos</a></li>
                        <li><a href="pages/parcerias.php">Parcerias</a></li>
                    </ul>
                </div>
                
                <!-- togles -->
                <div class="toggle open right"><i class="fas fa-bars"></i></div>
                <div class="toggle close right"><i class="far fa-times-circle"></i></div>
            </nav>
        <div class="clear"></div>
    </header>
    <!---------Banner Principal---------->
    <section class="banner-principal" id="home">
        <div class="overlay"></div>
        <div class="center">
            <form class="unimar">
                <div class="title">
                    <br><!-- espaçamento  -->
                    <h2>Atlética</h2>
                    <h2>Medicina</h2>
                    <h2>Unimar</h2>
                    <h3>a.a.a.a.n</h3>
                    <p>Associação Atlética Acadêmica Akira Nakadaira</p>
                </div>
            </form>
        </div>
    </section class=><!-- banner principal -->

    <!-- risco -->
    <section class="risco">
        <div class="center">
            <h1>Raça, Sangue, Tesão e Suor</h1>
        </div>
    </section><!-- risco -->

    <!-------- Descrição Autor --------->
    <section class="descricao-autor" id="about">
        <div class="center">
            <div class="w50 left">
                <h2>O que é A.A.A.A.N ?</h2>
                <div class="text">
                    <p>A Associação Atlética Acadêmica Akira Nakadaira – AAAAN - é uma associação sem 
                    fins lucrativos formada por alunos do curso de <strong>Medicina da Universidade de Marília</strong>.</p>
                    <p>Nossas atividades envolvem a promoção de práticas esportivas entre os alunos, 
                    campeonatos com outras faculdades, além da realização de eventos de integração, 
                    como festas e ações sociais.</p>
                    <p>As práticas esportivas oferecidas contam com inúmeras modalidades, que tem como 
                    principais objetivos não só promover integração entre os alunos, mas também 
                    oferecer uma ferramenta de manutenção de saúde mental e física aos alunos.</p>
                    <p>Os treinos ocorrem semanalmente de segunda-feira à quinta-feira. Além de proporcionar 
                    uma maneira de distração, os treinos possuem o importante objetivo de organizar times 
                    competitivos para defender nossa faculdade nos <strong>Jogos Universitários de Medicina 
                    (JUMED)</strong>, competindo com diversos cursos de Medicina do estado de São Paulo. </p>
                </div>
            </div>

            <!-- imagem -->
            <div class="w50 left">
                <div class="image">
                    <img class="perfil" src="images/perfil.jpg">
                </div>
            </div>

        <div class="clear"></div>
        </div>
    </section><!--descrição autor-->

    <div class="divider-1"></div>

    <!-------------- Principais ----------------->
    <section class="section" id="principais">
        <div class="container">
            <h2 class="title">Principais</h2>
            <p class="principal">
                Nossa atletica é muito grande e temos muito a lhe apresentar, sendo assim separamos
                <strong>três principais</strong> pesquisas em nossa pagina para você acessar!
            </p>
            <div class="cards">
                <div class="card">
                    <i class="icon far fa-calendar-alt"></i>
                    <h3 class="title">
                        <a href="pages/eventos.php">Eventos</a>
                    </h3>
                    <p>Aqui você pode acessar nossos Eventos, sendo assim você 
                        fica por dentro de toda nossa programação já agendada</p>
                </div>
                <div class="card">
                    <i class="icon fas fa-users"></i>
                    <h3 class="title">
                        <a href="pages/modalidades.php">Modalidades</a>
                    </h3>
                    <p>Nossa Atlética tem muita historia pra contar! Também  somos conhecidos por 
                        nossas conquistas em varias modalidades esportivas</p>
                </div>
                <div class="card" href="pages/lojinha.php">
                    <i class="icon fas fa-store"></i>
                    <h3 class="title">
                        <a href="pages/lojinha.php">Lojinha</a>
                    </h3>
                    <p>Em nossa lojinha vendemos diversos produtos de nossa atlética que você 
                        vai se surpreender, entre e de uma conferida no que temos a te oferecer
                    </p>
                </div>
            </div>
        </div>
    </section><!-- Principais -->

    <div class="divider-2"></div>

    <!-------------- Contact ----------------->
    <section class="contact" id="contact">
        <div class="text">
            <h2 class="title">Entre em contato com a gente!</h2>
            <p>
              Entre em contato com a nossa Atletica, queremos tirar suas dúvidas,
              ouvir suas críticas e sugestões.
            </p>
            <a
              href="https://www.instagram.com/medicinaunimar/" 
              class="buttoninst"  target="_blank"><i class="fab fa-instagram"></i></i>Entrar em contato
            </a>
        </div>

        <!---- links ---->
        <div class="links">
            <ul>
              <!-- <li><i class="fas fa-phone-alt"></i> 43 999067168</li> -->
              <li><i class="fas fa-map-marker-alt"></i> Universidade Unimar - Marilia</li>
            </ul>
        </div>
    </section><!---- Contact ---->
    
    <!--------- footer --------->
    <footer>
        <div class="center">
            <p>© Associação Atlética Acadêmica Akira Nakadaira - Faculdade de Medicina da UNIMAR - 2022 - Todos os Direitos Reservados</p>
        </div>
    </footer><!----- footer ----->

    <!----- botao top ----->
    <a href="#home" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

    <!----- swiper ----->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <!----- main.js ---->
    <script src="js/main.js"></script>
</body>
</html>