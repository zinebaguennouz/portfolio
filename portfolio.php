
<?php
include "config_1.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zineb aguennouz </title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <!-- main style -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">

            <div class="preloader" aria-busy="true" aria-label="Loading, please wait." role="progressbar">
            </div>

        </div>
    </div>
    <!-- ./Preloader -->
    
    <!-- header -->
    <header class="navbar-fixed-top" style="background-color:   #d7f4fb">
        <nav>
            <ul>
            
                <li><a href="#about"><?php echo $lang['p1']?></a></li>
                <li><a href="#experience"><?php echo $lang['p2']?></a></li>
                <li><a href="#projects"><?php echo $lang['p3']?></a></li>
                <li><a href="#contact"><?php echo $lang['p4']?></a></li>
                <a href="log-in.php">log in</a>
                
            </ul>
        </nav>
    </header>
    <!-- ./header -->
    
    <!-- home -->
    <div  style="background-image: url(img/1a8da1087320b2d92908a02b4bfb399409f6bce5.jpg)" class="section" id="home" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="disply-table">
                <div class="table-cell" data-aos="fade-up" data-aos-delay="0">
                    <h4 style="color: #567997">zineb.aguennouz</h4>
                    <h1 style="color: #def5eb"><?php echo $lang['p5']?><br /> à.youcode</h1> </div>
            </div>
        </div>
    </div>
    <!-- ./home -->
    
    <!-- about -->
    <div class="section" id="about">
        <div class="container">
        
            <div class="col-md-6" data-aos="fade-up">
                <h4>01</h4>
                <h1 class="size-50"Savoir>.<br /><?php echo $lang['p6']?>.</h1>
                <div class="h-50"></div>
                <p><?php echo $lang['p7']?></p>
                <p><?php echo $lang['p8']?></p>
                <p>Je suis quelqu'un d'entreprenant dans la vie de tout les jours, je sais ou je vais car j'ai des objectifs, des passions, des désirs. 
                </p>
                <div class="h-50"></div> <img src="img/Signature.svg" width="230" alt="" />
                <div class="h-50"></div>
            </div>
            <div class="col-md-6 about-img-div">
                <div class="about-border" data-aos="fade-up" data-aos-delay=".5"></div>
                <img src="img/49841158_781463735532216_1029226197373943808_n.jpg" width="400" class="img-responsive" alt="" align="right" data-aos="fade-right" data-aos-delay="0" />
            </div>
        </div>
    </div>
    <!-- ./about -->
    
    <!-- experience  -->
    <div class="section" id="experience">
        <div class="container">
            <div class="col-md-12">
                <h4>02</h4>
                <h1 class="size-50">Mes <br /> Expérience</h1>
                <div class="h-50"></div>
            </div>
            <div class="col-md-12">
                <ul class="timeline">
                    <li class="timeline-event" data-aos="fade-up">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">un mois de stage . mars 2018</p>
                            <h3>un mois de stage à l'agence BMCE banque</h3>
                            <h4>à youssoufia</h4>
                           <!--<p><strong>Projektmanagement mit Scrum</strong>
                                <br>Ständiges Verbessern des agilen Entwicklungsprozesses beispielsweise durch Grunt, Yeoman, GIT, JIRA und BrowserStack.</p>-->
                        </div>
                    </li>
                    <li class="timeline-event" data-aos="fade-up" data-aos-delay=".2">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">un mois de stage .  octobre  2017</p>
                            <h3>un mois de stage à la direction provinciale de l'éducation nationale</h3>
                            <h4>à youssoufia</h4>
                           <!-- <p>Konzeption, Design und Produktion von Digitalen Magazinen mit InDesign, der Adobe Digital Publishing Suite und HTML5. Co-Autorin der Fachbücher "Digitales Publizieren für Tablets" und "Adobe Digital Publishing Suite" erschienen im dpunkt.verlag.</p>-->
                        </div>
                    </li>
                  <!--  <li class="timeline-event" data-aos="fade-up" data-aos-delay=".4">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">April 2014</p>
                            <h3>konplan gmbh</h3>
                            <h4>IT-Consultant</h4>
                            <p><strong>Systemarchitektur, Consulting</strong>
                                <br>Konzeption und Modellierung von Systemen und APIs für Digital Publishing und Entitlement nach SOA</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /experience -->
    
    <!-- projects -->
    <div class="section" id="projects">
        <div class="container">
            <div class="col-md-12">
                <h4>03</h4>
                <h1 class="size-50"> Mes <br /> Mes projets</h1> 
            </div>
            <!-- main container -->
            <div class="main-container portfolio-inner clearfix">
                <!-- portfolio div -->
                <div class="portfolio-div">
                    <div class="portfolio">
                        <!-- portfolio_filter -->
                        <div class="categories-grid wow fadeInLeft">
                            <nav class="categories">
                                <ul class="portfolio_filter">
                                    <li><a href="" class="active" data-filter="*">challenge css</a></li>
                                    <li><a href="" data-filter=".photography">Photography</a></li>
                                    <li><a href="" data-filter=".logo">Logo</a></li>
                                    <li><a href="" data-filter=".graphics">refonte d'un site de youcode</a></li>
                                    <li><a href="" data-filter=".ads">cabinet medicaldu dr duchmol</a></li>
                                    <li><a href="" data-filter=".fashion"> E-poket</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- portfolio_filter -->
                        
                        <!-- portfolio_container -->
                        <div class="no-padding portfolio_container clearfix" data-aos="fade-up">
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6  fashion logo">
                                <a id="demo01" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/01.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>challenge css</span> <em>Créer des animations en utilisant les spécificités CSS3</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 ads graphics">
                                <a id="demo02" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/02.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Floating mockups</span> <em>Ads / Graphique</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 photography">
                                <a id="demo03" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/03.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Montre intelligente photoréaliste</span> <em>La photographie</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work 
                            <div class="col-md-4 col-sm-6 fashion ads">
                                <a id="demo04" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/04.jpg
                                    " alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Held by hands</span> <em>Fashion / Ads</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>-->
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 graphics ads">
                                <a id="demo05" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/05.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>refonte d'un site de youcode </span> <em>travalle en grope </em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work septembre -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 photography">
                                <a id="demo06" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/06.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Photorealistic smartwatch</span> <em>Photography</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 graphics ads">
                                <a id="demo07" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/07.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>cabinet medicaldu dr duchmol</span> <em>un tableu d'emploi de tempe creé par html</em> </div>
                                        </div>M
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 graphics ads">
                                <a id="demo08" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/09.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span> E-poket</span> <em>est une application pour contrôler un budget et plus d'options pour contrôler votre budget de manière simple.</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work 
                            <div class="col-md-4 col-sm-6 graphics ads">
                                <a id="demo09" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/08.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Mobile devices</span> <em>Graphics / Ads</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>-->
                            <!-- end single work -->
                        </div>
                        <!-- end portfolio_container -->
                    </div>
                    <!-- portfolio -->
                </div>
                <!-- end portfolio div -->
            </div>
            <!-- end main container -->
        </div>
    </div>
    <!-- ./projects -->
    
    <!-- contact -->
    <div class="section" id="contact">
        <div class="container">
            <div class="col-md-12">
                <h4>04</h4>
                <h1 class="size-50">Contact  Me</h1>
                <div class="h-50"></div>
            </div>
            <div class="col-md-4" data-aos="fade-up">

                <h3>Phone Number</h3>
                <p>0618930205</p>
                <h3> facebook</h3>
                <p>zineb aguennouz</p>
                <h3>Email</h3>
                <p>zinebaguennouz@gmail.com</p>

                <h3>Social Network</h3>

                <ul class="social">
                    <li><a href="https://www.facebook.com/profile.php?id=10000986095927"><i class="ion-social-facebook"></i> </a> </li>
                  <!--./  <li><a href="#"><i class="ion-social-twitter"></i></a></li>-->
                    <li><a href="https://www.instagram.com/zineb.ag.99gmail.com2313/?hl=fr"><i class="ion-social-instagram"></i></a></li>
                   <!--./ <li><a href="#"><i class="ion-social-dribbble"></i></a></li>-->
                   <li><a href="https://www.linkedin.com/in/zineb-aguennouz-7035b6174/"><i class="ion-social-linkedin"></i></a></li>
                    <li><a href="https://github.com/zinebaguennouz"><i class="fab fa-github"></i></a></li>
                </ul>
                <div class="clearfix"></div>
                <div class="h-50"></div>
            </div>
            <div class="col-md-8" data-aos="fade-up">
                <form class="contact-bg" id="contact-form" name="contact" method="POST" novalidate="novalidate" action="php.php">
                    <input type="text" name="name" class="form-control" placeholder="Your Name"  />
                    <input type="text" name="email" class="form-control" placeholder="Your E-mail"  />
                    <input type="text" name="subject" class="form-control" placeholder="Subject"  />
                    <textarea name="message" class="form-control" placeholder="Your Message" style="height:120px"></textarea>
                    <button id="submit" type="submit" name="submit" class="btn btn-glance">Send</button>
                    <!-- <div id="success">
                        <p class="green textcenter"> Your message was sent successfully! I will be in touch as soon as I can. </p>
                    </div>
                    <div id="error">
                        <p> Something went wrong, try refreshing and submitting the form again. </p>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
    <!-- ./contact -->


    <!--DEMO01-->
    <div id="animatedModal" class="popup-modal">
        <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
        <div id="btn-close-modal" class="close-animatedModal close-popup-modal"> <i class="ion-close-round"></i> </div>
        <div class="clearfix"></div>
        <div class="modal-content">
            <div class="container">
                <div class="portfolio-padding">
                    <div class="col-md-8 col-md-offset-2">
                        <!-- <h2>Geschäfts Eines<br /> Web-Studios</h2> -->
                        <div class="h-50"></div>
                      <!--   <p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value. Quickly promote premium strategic theme areas vis-a-vis.</p>
                        <p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value.</p>
                        <br /> -->
                        <br /> <img src="img/portfolio/55560442_816752945361952_1432023052324962304_n.png" alt="" class="img-responsive" />
                       <!--  <br />
                        <br />
                        <p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value. Quickly promote premium strategic theme areas vis-a-vis.</p>
                        <p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value.</p>
                        <br /> -->
                        <br /> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- buton switch les langue -->
    <a href="portfolio.php?lang=fr" class=" language fixed-bottom m-3" style="position:fixed;bottom:30px;left:25px"><img
        src="https://img.icons8.com/color/32/000000/france.png"></a>
     <a href="portfolio.php?lang=en" class="language fixed-bottom ml-3 mb-5 " style="position:fixed;bottom:30px;left:60px"><img
        src="https://img.icons8.com/color/32/000000/great-britain.png"></a>
  
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!--  plugins  -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.form.js"></script>
    <!-- <script src="js/jquery.validate.min.js"></script> -->

    <!--  main script  -->
    <script src="js/custom.js"></script>
</body>

</html>