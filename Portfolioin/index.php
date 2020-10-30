<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Jonathan Charlet</title>
  <meta charset="UTF-8">

  <link rel="stylesheet"  href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./Portfoliio.css">
  <link rel="stylesheet" href="./styles.css">
  <script src="https://kit.fontawesome.com/3dd159f7e5.js" crossorigin="anonymous"></script>
</head>



<body>


    <!-- Navbar (sit on top) -->
    <div class="w3-top">
      <div class="w3-bar" id="myNavbar">
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);"
          onclick="toggleFunction()" title="Toggle Navigation Menu">
          <i class="fa fa-bars"></i>
        </a>
        <a href="#home" style="color :#000000" class="w3-bar-item w3-button">HOME</a>
        <a href="#about" style="color :#000000" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i>
          ABOUT</a>
          <a href="#skills" style="color :#000000" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-laptop-code"></i>
          SKILLS</a>
        <a href="#portfolio" style="color :#000000" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i>
          PORTFOLIO</a>
          <a href="#cursus" style="color :#000000" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-graduation-cap"></i>
          CURSUS</a>
        <a href="#contact" style="color :#000000" class="w3-bar-item w3-button w3-hide-small"><i
            class="fa fa-envelope"></i> CONTACT</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
          <i class="fa fa-search"></i>
        </a>
      </div>

      <!-- Navbar on small screens -->
      <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
        <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
        <a href="#skills" class="w3-bar-item w3-button" onclick="toggleFunction()">SKILLS</a>
        <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
        <a href="#cursus" class="w3-bar-item w3-button" onclick="toggleFunction()">CURSUS</a>
        <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
        <a href="#" class="w3-bar-item w3-button">SEARCH</a>
      </div>
    </div>

    <!-- First Parallax Image with Logo Text -->
    <div class="backimg-1 w3-display-container w3-opacity-min" id="home">
      <div class="w3-display-middle" style="white-space:nowrap;">
        <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">WEB DEVELOPPER</span>
      </div>
    </div>

    <!-- Container (About Section) -->
    <div class="w3-content w3-container w3-padding-64" id="about">
      <h3 class="w3-center">ABOUT ME</h3>
      <p class="w3-center"><em>I LOVE WEB DEVELOPPEMENT</em></p>

      <p>
       Bonjour/bonsoir ! Voici mon premier portfolio.
       Je l'ai fait avec Bootstrap.
       Je m'appelle Jonathan Charlet, je suis actuellement en Licence Professionnelle en Développement Web Front-end.
       Je suis passionné par l'informatique et le graphisme, c'est pourquoi j'ai voulu combiner les deux, en poursuivant mes études en développement web.
       Les jeux vidéo, les mangas et la culture japonaise dans son ensemble font également partie de mes passions. 
       Au cours de mes trois années en informatique, j'ai pu apprendre le développement web avec HTML / CSS, ReactJs, PHP, Bootstrap, Java. 
       Mon principal défaut est ma timidité et mes principales qualités sont ma rigueur et ma capacité à ne jamais rien abandonner.
       Mon ambition est de créer ma propre entreprise dans quelques années.
      </p>
      <div class="w3-row">
        <div class="w3-col m6 w3-center w3-padding-large">
          <p><b><i class="fa fa-user w3-margin-right"></i>Jonathan Charlet</b></p><br>
          <img src="./img/pictureme.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off"
            alt="" width="500" height="333">
        </div>

        <!-- Hide this text on small devices -->
        <div class="w3-col m6 w3-hide-small w3-padding-large">
          <p>
            Bienvenue sur mon site web. 
            Sur cette page, vous pouvez apprendre qui je suis, mes passions, mon parcours, mes compétences, mes connaissances et les projets que j'ai réalisés.
            Si vous souhaitez en savoir plus, ou me proposer un entretien, n'hésitez pas à me contacter via la rubrique "Contact".</p>
        </div>
      </div>
      
    </div>

    
    <!-- Container (Portfolio Section) -->
    <div class="w3-content w3-container w3-padding-64" id="skills">
      <h3 class="w3-center">SKILLS</h3>
      <p class="w3-center"><em>Les langages et outils avec lesquels je travaille.<br></em></p><br>
      <p class="w3-large w3-center w3-padding-16">Je suis vraiment à l'aise en:</p>

      <p class="w3-wide"><i class="fab fa-html5"></i></i>HTML/CSS</p>
      <div class="w3-light-grey">
        <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fab fa-react"></i></i>ReactJs</p>
      <div class="w3-light-grey">
        <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fab fa-js"></i></i>Js</p>
      <div class="w3-light-grey">
        <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">80%</div>
      </div>
      <br> <br>
      <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
      <div class="w3-row-padding w3-center">
        <div class="w3-col m3">
          <img src="./img/ReactJslogo.png" style="width:100%" onclick="onClick(this)"
            class="w3-hover-opacity" alt="ReactJs">
        </div>

        <div class="w3-col m3">
          <img src="./img/htmlcss.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
            alt="html/css">
        </div>

        <div class="w3-col m3">
          <img src="./img/phplogo.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
            alt="php">
        </div>

        <div class="w3-col m3">
          <img src="./img/jslogo.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
            alt="js">
        </div>
      </div>

      <div class="w3-row-padding w3-center w3-section">
        <div class="w3-col m2 center">
          <img src="./img/pythonlogo.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
            alt="python">
        </div>

        <div class="w3-col m2">
          <img src="./img/Photoshoplogo.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
            alt="photoshop">
        </div>
      </div>
    </div>

    <!-- <div class="w3-row w3-center w3-dark-grey w3-padding-16">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">14+</span><br>
        Partners
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">55+</span><br>
        Projects Done
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">89+</span><br>
        Happy Clients
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">150+</span><br>
        Meetings
      </div>
    </div> -->


    <!-- Second Parallax Image with Portfolio Text -->
    


    <!-- Portfolio section -->

    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
      <div class="bgimg-2 w3-display-container w3-opacity-min">
        <div class="w3-display-middle">
          <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
        </div>
      </div><br>
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">MY WORK</h2>
          <h3 class="section-subheading text-muted">Les projets que j'ai réalisés</h3>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="portfolio-item">
              <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                </div>
                <img class="img-fluid" src="./img/dnasports.png" alt="" />
              </a>
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading">DNA SPORT</div>
                <div class="portfolio-caption-subheading text-muted">Page web vitrine</div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="portfolio-item">
              <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                </div>
                <img class="img-fluid" src="./img/dnavalue.png" alt="" />
              </a>
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading">DNA VALUE</div>
                <div class="portfolio-caption-subheading text-muted">Page web vitrine</div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="portfolio-item">
              <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                </div>
                <img class="img-fluid" src="./img/logoletflix.png" alt="" />
              </a>
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading">LETFLIX</div>
                <div class="portfolio-caption-subheading text-muted">Application mobile android</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Modals-->
    <!-- Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal"> <i class="fas fa-times fa-3x"></i></div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">
                  <!-- Project Details Go Here-->
                  <h2 class="text-uppercase">DNA SPORTS</h2>
                  <p class="item-intro text-muted">Showcase web page.</p>
                  <img class="img-fluid d-block" src="./img/dnasports.png" alt="" />
                  <p>
                  Lors de mon stage à la fin de la deuxième année de DUT, j'ai effectué un stage de deux mois au sein de l'entreprise DNA GA.
                  J'ai développé cette page vitrine en HTML / CSS.
                  Elle visait à présenter l'une des solutions proposées par l'entreprise. <br> <a href="https://dna-arena.com/">Voir la page</a></p>
                  <ul class="mx-auto list-inline">
                    <li>Date de début: Juillet 2020</li>
                    <li>Date de fin: Septembre 2020</li>
                    <li>Client: DNA GA</li>
                    <li>Category: Page web vitrine</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times mr-1"></i>
                    Clore le projet
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal"> <i class="fas fa-times fa-3x"></i></div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">
                  <!-- Project Details Go Here-->
                  <h2 class="text-uppercase">DNA VALUE</h2>
                  <p class="item-intro text-muted">Page web vitrine</p>
                  <img class="img-fluid d-block mx-auto" src="./img/dnavalue.png" alt="" />
                  <p>Durant mon stage de fin de deuxième année de DUT, j'ai effectué un stage de deux mois au seins de l'entreprise DNA GA.
                     J'ai développé cette page vitrine en ReactJs et HTML/CSS. 
                     Elle avait pour but de présenté l'une des solution que propose l'entreprise <br> <a href="https://dna-ga.com/dnavalue">Voir la page</a></p>
                  <ul class="list-inline">
                    <li>Date de début: Juillet 2020</li>
                    <li>Date de fin: Septembre 2020</li>
                    <li>Client: DNA GA</li>
                    <li>Category: Page web vitrine</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times mr-1"></i>
                    Clore le Projet
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal"> <i class="fas fa-times fa-3x"></i></div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">
                  <!-- Project Details Go Here-->
                  <h2 class="text-uppercase">LETFLIX</h2>
                  <p class="item-intro text-muted">Application mobile Android</p>
                  <img class="img-fluid d-block mx-auto" src="./img/logoletflix.png" alt="" />
                  <p>Durant ma deuxième année de DUT, j'ai eu pour projet de développer une application mobile sous android studio. L'objectif était de développer une application mobile qui répondent à un problème. J'ai donc imaginé LETFLIX. Cette application à pour but de régler un problème qu'entent qu'uilisateur de Netflix j'ai souvent rencontré. En effet, lorsque j'utilise Netflix je me suis rendu compte que moi et beaucoup d'autres utilisateurs, passons généralement beaucoup plus de temps à chercher un programme plutôt qu'a en regardé. LETFLIX (LET pour "laisser" car la doctrine de mon application est "Laisser LETFLIX choisir pour vous) est donc un générateur aléatoire des programmes présents sur Netflix. Différents thèmes sont présent et les utilisateurs peuvent choisir un programme au hasard parmis ces thèmes.</p>
                  <ul class="list-inline">
                    <li>Date de début: Juillet 2020</li>
                    <li>date de fin: Septembre 2020</li>
                    <li>Client: Sorbonne Paris Nord</li>
                    <li>Category: Application mobile</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times mr-1"></i>
                    Clore le  Projet
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

<!-- Second Parallax Image with Portfolio Text -->
<div class="backimg-4 w3-display-container w3-opacity-min">
      <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide">CURSUS</span>
      </div>
    </div>


<!-- Cursus Section -->
<section class="page-section  mb-0" id="cursus">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Cursus</h2>
                <h3 class="section-subheading" style="color: ">Voici mon cursus.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="./img/em.jpg" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Septembre 2020 à actuellement</h4>
                            <h4 class="subheading">L'Ecole Multimédia</h4>
                        </div>
                        <div class="timeline-body"><p style="color: #1abc9c">Bachelor développeur Web front-end en alterance</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="./img/iut.png" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Septembre 2018 à septembre 2020</h4>
                            <h4 class="subheading">IUT Sorbonne Paris Nord</h4>
                        </div>
                        <div class="timeline-body"><p style="color: #1abc9c">DUT Informatique</p></div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="./img/jjr.png" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Septembre 2015 à juillet 2018</h4>
                            <h4 class="subheading">Lycée Jean Jacques Rousseau</h4>
                        </div>
                        <div class="timeline-body"><p style="color: #1abc9c">Terminal Scientifique spécialisation SVT</p></div>
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <!-- Third Parallax Image with Portfolio Text -->

    <div class="backimg-3 w3-display-container w3-opacity-min">
      <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
      </div>
    </div>

    <!-- Container (Contact Section) -->
    <div class="w3-content w3-container w3-padding-64" id="contact">
      <h3 class="w3-center">WHERE I WORK</h3>
      <p class="w3-center"><em>J'attends vos retours !</em></p>

      <div class="w3-row w3-padding-32 w3-section">
        <div class="w3-col m4 w3-container">
          <img src="./img/googlemap.png" class="w3-image w3-round" style="width:100%">
        </div>
        <div class="w3-col m8 w3-panel">
          <div class="w3-large w3-margin-bottom">
            <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Paris, France<br>
            <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: 06.10.59.78.60<br>
            <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email:
            jonathan.charlet.pro@gmail.com<br>
          </div>
          <p>Une question ?  <i class="fas fa-mouse-pointer"></i></i></i>  n'hésitez pas, j'y répondrais.</p>

          <?php
            if(isset($_POST['mailform'])) {

                if(!empty($_POST['name']) AND !empty($_POST['mail']) AND !empty($_POST['message'])) {
                  $header="MIME-Version: 1.0\r\n";
                  $header.='From:"portfolio-jonathan-charlet.com"<support@portfolio-jonathan-charlet.com>'."\n";
                  $header.='Content-Type:text/html; charset="uft-8"'."\n";
                  $header.='Content-Transfer-Encoding: 8bit';

                    $message='
                    <html>
                        <body>
                            <div align="center">
                                <u>Nom de l\'expéditeur :</u>'.$_POST['name'].'<br />
                                <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
                                <br />
                                '.nl2br($_POST['message']).'
                            </div>
                        </body>
                    </html>
                    ';

                    mail("jonathan.charlet.pro@gmail.com", "CONTACT - Portfolio CHARLET Jonathan", $message, $header);
                    $msg="Votre message a bien été envoyé !";

                }else {
                    $msg="Tous les champs doivent être complétés !";
                }
            }
        ?>
          <form action="" method="POST">
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Name" required name="name">
              </div>
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Email" required name="mail">
              </div>
            </div>
            <input class="w3-input w3-border" type="text" placeholder="Message" required name="message">
            <button class="btn btn-dark m-2" type="submit" value="Envoyer !" name="mailform"><i class="fa fa-paper-plane"></i> SEND MESSAGE</button>
          </form>
          <?php
              if(isset($msg)) {
                  echo $msg;
              }
          ?>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
      <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
      <div class="w3-xlarge w3-section">
        <a href= "https://www.instagram.com/?hl=fr"> <i class="fab fa-instagram"></i></i></a>
        <a href= "https://github.com/"> <i class="fab fa-github"></i></i></a>
        <a href= "https://twitter.com/Jonathan_gab_ch"> <i class="fa fa-twitter w3-hover-opacity"></i></a>
        <a href="https://www.linkedin.com/in/jonathan-charlet/"><i class="fa fa-linkedin"></i></a>
        <br><br><h6>© Jonathan CHARLET  2020. All rights reserved.</h6>
      </div>
    </footer>

    <script>
      // Modal Image Gallery
      function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
      }

      // Change style of navbar on scroll
      window.onscroll = function () {
        myFunction()
      };

      function myFunction() {
        var navbar = document.getElementById("myNavbar");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
          navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
        } else {
          navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
        }
      }

      // Used to toggle the menu on small screens when clicking on the menu button
      function toggleFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
        } else {
          x.className = x.className.replace(" w3-show", "");
        }
      }
    </script>

    <!-- Pluggins JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <!-- <script src="../Portfolio/scripts.js"></script> -->
  </body>

  </html>