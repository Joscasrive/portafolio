<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Portafolio</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><i class="fa fa-code"></i> Portafolio</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">
                            <i class="fa fa-list"></i> Proyectos</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about"><i class="fa fa-user"></i> Acerca de Mi</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact"><i class="fa fa-lock"></i> Contactos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
              
          
                      <div class="container">
                <div class="content-center">
                  <div class="cc-profile-image"><a href="#"><img src="assets/img/Jose.png" alt="Image"/></a></div>
                 
                </div>
              </div>
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Jose Castillo</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-laptop-code"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0"> Desarrollador - Ingeniero</p>
           
        </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Proyectos</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-tasks"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    @yield('content')
                    
    
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Acerca de Mi</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-user-shield"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Destaco por mis conocimientos informaticos y pasion por el area tecnologica, mi trabajo es ayudar a las empresas a solucionar sus problemas a través del  Desarrollo Web, Infraestructura de redes , Soporte Técnico , Software y Hardware.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">En el mundo de la informática los cambios son contantes, acelerados y con mucho enfoque innovador, por tal razón siempre estoy en constante investigacion y aprendizaje de las nuevas tecnologias el primer paso es cambiar nosotros mismos para luego convencer a otro de que los cambios son favorables partimos de experiencias vividas.</p></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    
                    <a href="{{route('files.descargar')}}" class="btn btn-xl btn-outline-light" >
                        <i class="fa-solid fa-file-pdf"></i>
                        Descargar Curriculum Ahora!
                    </a>
                  
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
                    <!-- Client Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contactos</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-users"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
    <div class="box">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 text-center">
                <div class="box-column">
                    <div class="box-header box-header-twitter">
                        <i class="fa-brands fa-linkedin fa-3x" aria-hidden="true"></i>

                    </div>
                    <div class="box-bottom">
                        <div class="box-title twitter-title">
                            <a target="_blank" href="https://www.linkedin.com/in/jose-castillo-a11b552a8/">Linkedin</a> 
                        </div>
                        
                       
                    </div>
                 </div>
            </div>
            
            <div class="col-lg-4 col-12 text-center">
                <div class="box-column">
                    <div class="box-header box-header-instagram">
                        <i class="fab fa-instagram-square fa-3x" aria-hidden="true"></i>

                    </div>
                    <div class="box-bottom">
                        <div class="box-title twitter-title">
                            <a  target="_blank" href="https://www.instagram.com/joscasr/">Instagram</a>
                        </div>
                        
                    </div>
                 </div>
            </div>   
                 
            <div class="col-lg-4 col-12 text-center">
                <div class="box-column">
                    <div class="box-header box-header-facebook">
                        <i class="fab fa-facebook-square fa-3x" aria-hidden="true"></i>

                    </div>
                    <div class="box-bottom">
                        <div class="box-title twitter-title">
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=100010467331381&sk=about">Facebook</a>
                        </div>
                        
                    </div>
                 </div>
            </div>   
        </div>      
    </div>
</div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h6 class="text-uppercase mb-4">Dirección</h6>
                        <p class="lead mb-0">
                            Lara/Cabudare, Venezuela
                            <br />
                            Sector Uva II
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h6 class="text-uppercase mb-4">Redes sociales</h6>
                        <a  target="_blank" class="btn btn-outline-light btn-social mx-1" href="https://github.com/Joscasrive"><i class="fab fa-fw fa-github"></i></a>
                        <a  target="_blank"class="btn btn-outline-light btn-social mx-1" href="https://api.whatsapp.com/send/?phone=584245453940"><i class="fab fa-fw fa-whatsapp"></i></a>
                        

                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h6 class="text-uppercase mb-4">Desarrollado por</h6>
                        <p class="lead mb-0">
                            Jose Castillo 
                            <hr />
                            Joscasrive@gmail.com
                            
                            
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Jose Castillo 2024</small></div>
        </div>
        <!-- Portfolio Modals-->
       
        </div>

    
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
       
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    </body>
</html>
