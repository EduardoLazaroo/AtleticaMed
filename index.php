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

    <title>Atletica</title>
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
                <div class="toggle open right"><i class="fas fa-bars"></i></div>
                <div class="toggle close right"><i class="far fa-times-circle"></i></div>
            </nav>
            <div class="clear"></div>
    </header>
    <!-- -------Banner Principal-------- -->
    <section class="banner-principal" id="home">
        <div class="overlay"></div>
        <div class="center">
            <form  class="unimar">
                <div>
                    <br><!-- espaçamento  -->
                    <h2>Atlética</h2>
                    <h2>Medicina</h2>
                    <h2>Unimar</h2>
                    <h3>a.a.a.a.n</h3>
                    <p>Associação Atlética Acadêmica Akira Nakadaira</p>
                </div>
            </form>
        </div>
    </section class=><!--banner principal-->

    <section class="risco">
        <div class="center">
            <h1>Raça, sangue, tesão e Suor</h1>
        </div>
    </section>

    <!-- -------Descrição Autor-------- -->
    <section class="descricao-autor" id="about">
        <div class="center">
            <div class="w50 left">
            <h2>O que é A.A.A.A.N ?</h2>
            <div class="text">  <strong></strong>
                <p>A Associação Atlética Acadêmica Akira Nakadaira – AAAAN - é uma associação sem 
                fins lucrativos formada por alunos do curso de <strong>medicina da Universidade de Marília</strong>.</p>
                <p>Nossas atividades envolvem a promoção de práticas esportivas entre os alunos, 
                campeonatos com outras faculdades, além da realização de eventos de integração, 
                como festas e ações sociais.</p>
                <p>As práticas esportivas oferecidas contam com inúmeras modalidades, que tem como 
                principais objetivos não só promover integração entre os alunos, mas também 
                oferecer uma ferramenta de manutenção de saúde mental e física aos alunos da 
                Medicina</p>
                <p>Os treinos ocorrem semanalmente de segunda-feira à quinta-feira. Além de proporcionar 
                uma maneira de distração, os treinos possuem o importante objetivo de organizar times 
                competitivos para defender nossa faculdade nos <strong>Jogos Universitários de Medicina 
                (JUMED)</strong>, competindo com diversos cursos de Medicina do estado de São Paulo. </p>
            </div>
            </div>

            <div class="w50 left">
                <div class="image">
                    <img class="right perfil" src="images/perfil.jpg">
                </div>
            </div>

            <div class="clear"></div>

        </div>
    </section><!--descrição autor-->

    <div class="divider-1"></div>

    <!-------------- Principais ------------------>
    <section class="section" id="principais">
        <div class="container">
          <h2 class="title">Principais</h2>
          <p class="principal">
            Nossa atletica é muito grande e temos muito a lhe apresentar, 
            sendo assim, separei <strong>três principais</strong> pesquisas em nossa pagina para você.
          </p>
            <div class="cards">
                <div class="card">
                    <i class="icon far fa-calendar-alt"></i>
                    <h3 class="title">Eventos</h3>
                    <p>Aqui você pode acessar noosos Eventos, 
                    sendo assim você fica por dentro de toda nossa programação já agendada.</p>
                </div>
                <div class="card">
                    <i class="icon fas fa-users"></i>
                    <h3 class="title">Modalidaes</h3>
                    <p>Nossa Atlética tem historia pra contar! Tambem somos conhecidos por nossas conquistas
                    em varias modalidades esportivas, de uma olhadinha...</p>
                </div>
                <div class="card" href="pages/lojinha.php">
                    <i class="icon fas fa-store"></i>
                    <h3 class="title">Lojinha</h3>
                    <p>Em nosso loja vendemos diversos produtos que você vai se surpreeender, entre e de 
                    uma conferida no que temos a te oferecer.
                    </p>
                </div>
            </div>
        </div>
    </section><!-- Principais -->

    <div class="divider-2"></div>

    <!--------------- Section ----------------->
    <section class="section" id="testimonials">
        <h2 class="title">gestão Atletica medicina 2022</h2>
        <div class="testimonials swiper-container">
            <div class="swiper-wrapper">
                <div class="testimonial swiper-slide">
                    <blockquote>
                    <h3>
                        Alista de planejamento
                    </h3>
                    <cite>
                        <img src="https://randomuser.me/api/portraits/men/81.jpg"/> 
                        <p>Jhony Soares</p>
                    </cite>
                    </blockquote>
                </div>

                <div class="testimonial swiper-slide">
                    <blockquote>
                    <h3>
                        Alista de planejamento
                    </h3>    
                    <cite>
                        <img src="https://randomuser.me/api/portraits/women/60.jpg"/> 
                        <p>Wanessinha69</p>
                    </cite>
                    </blockquote>
                </div>

                <div class="testimonial swiper-slide">
                    <blockquote>
                    <h3>
                        Alista de planejamento
                    </h3>
                    <cite>
                        <img src="https://randomuser.me/api/portraits/men/25.jpg"/> 
                        <p>Jhonatan da Rocha</p>
                    </cite>
                    </blockquote>
                </div>

                <div class="testimonial swiper-slide">
                    <blockquote>
                    <h3>
                        Alista de planejamento
                    </h3>
                    <cite>
                        <img src="https://randomuser.me/api/portraits/men/80.jpg"/> 
                        <p>Klauber Dos SAntos</p>
                    </cite>
                    </blockquote>
                </div>

                <div class="testimonial swiper-slide">
                    <blockquote>
                    <h3>
                        Alista de planejamento
                    </h3>
                    <cite>
                        <img src="https://randomuser.me/api/portraits/men/85.jpg"/> 
                        <p>EddySakamoto </p>
                    </cite>
                    </blockquote>
                </div>
                <div class="testimonial swiper-slide">
                    <blockquote>
                    <h3>
                        Alista de planejamento
                    </h3>    
                    <cite>
                        <img src="https://randomuser.me/api/portraits/women/60.jpg"/> 
                        <p>Wanessinha69</p>
                    </cite>
                    </blockquote>
                </div>

                <div class="testimonial swiper-slide">
                    <blockquote>
                    <h3>
                        Alista de planejamento
                    </h3>
                    <cite>
                        <img src="https://randomuser.me/api/portraits/men/25.jpg"/> 
                        <p>Jhonatan da Rocha</p>
                    </cite>
                    </blockquote>
                </div>

                <div class="testimonial swiper-slide">
                    <blockquote>
                    <h3>
                        Alista de planejamento
                    </h3>
                    <cite>
                        <img src="https://randomuser.me/api/portraits/men/80.jpg"/> 
                        <p>Klauber Dos SAntos</p>
                    </cite>
                    </blockquote>
                </div>

                <div class="testimonial swiper-slide">
                    <blockquote>
                    <h3>
                        Alista de planejamento
                    </h3>
                    <cite>
                        <img src="https://randomuser.me/api/portraits/men/85.jpg"/> 
                        <p>EddySakamoto </p>
                    </cite>
                    </blockquote>
                </div>
            </div>
        </div>
        <h2 class="lado right"><i class="fas fa-arrow-right"></i></h2>
    </section> <!---- Section ----->
      
    <div class="divider-1"></div>

    <!-------------- Contact ----------------->
    <section class="contact" id="contact">
        <div class="text">
            <h2 class="title">Entre em contato com a gente!</h2>
            <p>
              Entre em contato com a nossa Atletica, queremos tirar suas dúvidas,
              ouvir suas críticas e sugestões.
            </p>
            <a
              href="https://api.whatsapp.com/send?phone=+5518998065592&text=Oi. Boa tarde!" 
              class="buttonzap"  target="_blank"><i class="fab fa-whatsapp"></i>Entrar em contato
            </a>
            <a
              href="https://www.instagram.com/" 
              class="buttoninst"  target="_blank"><i class="fab fa-instagram"></i></i>Entrar em contato
            </a>
        </div>
        <!---- links ---->
        <div class="links">
            <ul>
              <li><i class="fas fa-phone-alt"></i> 14 99806-5592</li>
              <li><i class="fas fa-map-marker-alt"></i> R. Amauri Souza, 346</li>
              <li><i class="fas fa-envelope-open-text"></i> contato@atletica.com</li>
            </ul>
        </div>
    </section><!---- Contact ---->
    
    <!----- footer ----->
    <footer>
        <div class="center">
            <p>© Associação Atlética Acadêmica Akira Nakadaira - Faculdade de Medicina da UNIMAR - 2022 - Todos os Direitos Reservados</p>
        </div>
    </footer>

    <!----- botao top ----->
    <a href="#home" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

    <!----- swiper ----->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <!-- scrollreveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!----- main.js ---->
    <script src="js/main.js"></script>
</body>
</html>