@extends('layout.main')
@section('content')
    <!--Hero_Section-->
    <section id="hero_section" class="top_cont_outer">
        <div class="hero_wrapper">
            <div class="container">
                <div class="hero_section">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="top_left_cont intro zoomIn wow animated">
                                <h2>THOMAZ MACHADO<br> <strong>WEB DEVELOPER</strong></h2>
                                <p>
                                    I am a FullStack Web Developer with 4 years of experience and completing the Computer Engineering Bachelor Degree
                                    <br/>
                                    I specialise in ASP.NET MVC, PHP (with Laravel), SQL Server, Azure DevOps and Git
                                    <br/>
                                    Enthusiastic about life, design and innovation.
                                </p>
                                <div class="underline"></div>
                                <ul class="social_links">
                                    <li class="twitter animated bounceIn wow delay-02s animated" style="visibility: visible; animation-name: bounceIn;">
                                        <a href="https://github.com/thomazdsm"><i class="fa fa-github"></i></a>
                                    </li>
                                    <li class="pinterest animated bounceIn wow delay-04s animated" style="visibility: visible; animation-name: bounceIn;">
                                        <a href="https://www.linkedin.com/in/thomaz-smachado/"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li class="gplus animated bounceIn wow delay-05s animated" style="visibility: visible; animation-name: bounceIn;">
                                        <a href="#"><i class="fa fa-whatsapp"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Hero_Section-->

    @include('layout.navbar')

    <!--Aboutus-->
    <section id="aboutUs"><!--Aboutus-->
        <div class="inner_wrapper aboutUs-container fadeInLeft animated wow">
            <div class="container">
                <h2>Who Am I</h2>
                <h6>Lorem ipsum dolor sit amet, consectetur Morbi sagittis, sem quisci ipsum</h6>
                <div class="inner_section">
                    <div class="row">
                        <div class="col-lg-12 about-us">
                            <div class="row">
                                <div class="col-md-6">
                                    <img class="img-responsive" src="img/about3.jpg" align="">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <h3>I Develop Awesome Web Apps</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur Morbi sagittis, sem quisci ipsum gravida tortor orci ipsum gravida tortor. Lorem ipsum dolor sit amet, tortor orci ipsum gravida tortor. Lorem ipsum dolor sit amet, conseconsectetur.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur Morbi sagittis, sem quisci ipsum gravida tortor orci ipsum gravida tortor.
                                    </p>
                                    <ul class="about-us-list">
                                        <li class="points">Consectetur Morbi sagittis, sem quisci ipsum gravida tortor</li>
                                        <li class="points">Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida </li>
                                        <li class="points">Lorem ipsum dolor sit amet, consectetur Morbi sagittis, sem quisci gravida </li>
                                        <li class="points">Sagittis, sem quis lacinia faucibus, orci ipsum gravida </li>
                                    </ul><!-- /.about-us-list -->

                                </div><!-- /.col-md-6 -->

                            </div><!-- /.row -->
                        </div><!-- /.col-lg-12 -->
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--Aboutus-->

    <!--Research Areas-->
    <section  id="service">
        <div class="container">
            <h2>Research Areas</h2>
            <h6>Lorem ipsum dolor sit amet, consectetur Morbi sagittis, sem quisci ipsum</h6>
            <div class="service_wrapper">
                <div class="row">
                    <div class="col-md-3">
                        <div class="service_icon delay-03s animated wow  zoomIn">
                            <span><i class="fa fa-brain"></i></span>
                        </div>
                        <div class="service_block">
                            <h3 class="animated fadeInUp wow">Artificial Inteligence</h3>
                            <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service_icon icon2  delay-03s animated wow zoomIn">
                            <span><i class="fa fa-message"></i></span>
                        </div>
                        <div class="service_block">
                            <h3 class="animated fadeInUp wow">Natural Language Processing</h3>
                            <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service_icon icon3  delay-03s animated wow zoomIn">
                            <span><i class="fa fa-microchip"></i></span>
                        </div>
                        <div class="service_block">
                            <h3 class="animated fadeInUp wow">Robotics with AI</h3>
                            <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service_icon icon3  delay-03s animated wow zoomIn">
                            <span><i class="fa fa-file-code"></i></span>
                        </div>
                        <div class="service_block">
                            <h3 class="animated fadeInUp wow">Development</h3>
                            <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Research Areas-->

    <!-- Skills -->
    <section id="Portfolio" class="content">
        <!-- Container -->
        <div class="container portfolio_title">
            <!-- Title -->
            <div class="section-title">
                <h2>Skills</h2>
                <h6>Lorem ipsum dolor sit amet, consectetur Morbi sagittis, sem quisci ipsum</h6>
            </div>
            <!--/Title -->
        </div>
        <!-- Container -->

        <div class="portfolio-top"></div>

        <!-- Portfolio Filters -->
        <div class="portfolio">
            <div id="filters" class="sixteen columns">
                <ul class="clearfix">
                    <li><a id="all" href="#" data-filter="*" class="active">
                            <h5>All</h5>
                        </a>
                    </li>
                    <li><a class="" href="#" data-filter=".lang">
                            <h5>Languages</h5>
                        </a>
                    </li>
                    <li><a class="" href="#" data-filter=".plat">
                            <h5>Platform</h5>
                        </a>
                    </li>
                    <li><a class="" href="#" data-filter=".db">
                            <h5>Database</h5>
                        </a>
                    </li>
                    <li><a class="" href="#" data-filter=".app">
                            <h5>Software</h5>
                        </a>
                    </li>
                </ul>
            </div>
            <!--/Portfolio Filters -->

            <!-- Portfolio Wrapper -->
            <div class="isotope fadeInLeft animated wow grid" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper">
                <!-- Portfolio Item -->
                <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four lang isotope-item effect-oscar">
                    <div class="portfolio_img">
                        <img src="img/bg_aspnet.jpg"  alt="Portfolio 1">
                    </div>
                    <figcaption>
                        <div>
                            <a href="img/bg_aspnet.jpg" class="fancybox">
                                <h2>ASP.NET</h2>
                            </a>
                        </div>
                    </figcaption>
                </figure>
                <!--/Portfolio Item -->
                <!-- Portfolio Item -->
                <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four lang isotope-item effect-oscar">
                    <div class="portfolio_img">
                        <img src="img/bg_php.jpg"  alt="Portfolio 1">
                    </div>
                    <figcaption>
                        <div>
                            <a href="img/bg_php.jpg" class="fancybox">
                                <h2>PHP</h2>
                            </a>
                        </div>
                    </figcaption>
                </figure>
                <!--/Portfolio Item -->
                <!-- Portfolio Item -->
                <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four lang isotope-item effect-oscar">
                    <div class="portfolio_img">
                        <img src="img/bg_python.jpg"  alt="Portfolio 1">
                    </div>
                    <figcaption>
                        <div>
                            <a href="img/bg_python.jpg" class="fancybox">
                                <h2>PYTHON</h2>
                            </a>
                        </div>
                    </figcaption>
                </figure>
                <!--/Portfolio Item -->
                <!-- Portfolio Item -->
                <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four db isotope-item effect-oscar">
                    <div class="portfolio_img">
                        <img src="img/bg_db.jpg"  alt="Portfolio 1">
                    </div>
                    <figcaption>
                        <div>
                            <a href="img/bg_db.jpg" class="fancybox">
                                <h2>MySQL</h2>
                            </a>
                        </div>
                    </figcaption>
                </figure>
                <!--/Portfolio Item -->
                <!-- Portfolio Item -->
                <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four db isotope-item effect-oscar">
                    <div class="portfolio_img">
                        <img src="img/bg_db.jpg"  alt="Portfolio 1">
                    </div>
                    <figcaption>
                        <div>
                            <a href="img/bg_db.jpg" class="fancybox">
                                <h2>SQL Server</h2>
                            </a>
                        </div>
                    </figcaption>
                </figure>
                <!--/Portfolio Item -->
                <!-- Portfolio Item -->
                <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four plat isotope-item effect-oscar">
                    <div class="portfolio_img">
                        <img src="img/bg_azure.jpg"  alt="Portfolio 1">
                    </div>
                    <figcaption>
                        <div>
                            <a href="img/bg_azure.jpg" class="fancybox">
                                <h2>Azure</h2>
                            </a>
                        </div>
                    </figcaption>
                </figure>
                <!--/Portfolio Item -->
                <!-- Portfolio Item -->
                <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four soft isotope-item effect-oscar">
                    <div class="portfolio_img">
                        <img src="img/bg_matlab.jpg"  alt="Portfolio 1">
                    </div>
                    <figcaption>
                        <div>
                            <a href="img/bg_matlab.jpg" class="fancybox">
                                <h2>MatLab</h2>
                            </a>
                        </div>
                    </figcaption>
                </figure>
                <!--/Portfolio Item -->
                <!-- Portfolio Item -->
                <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four app isotope-item effect-oscar">
                    <div class="portfolio_img">
                        <img src="img/bg_solidworks.jpg"  alt="Portfolio 1">
                    </div>
                    <figcaption>
                        <div>
                            <a href="img/bg_solidworks.jpg" class="fancybox">
                                <h2>SolidWorks</h2>
                            </a>
                        </div>
                    </figcaption>
                </figure>
                <!--/Portfolio Item -->
            </div>
            <!--/Portfolio Wrapper -->
        </div>
        <!--/Portfolio Filters -->

        <div class="portfolio_btm"></div>

        <div id="project_container">
            <div class="clear"></div>
            <div id="project_data"></div>
        </div>
    </section>
    <!--/Skills -->

    <!--client_logos-->
    <section class="page_section" id="clients"><!--page_section-->
        <h2>Worked For</h2>
        <!--page_section-->
        <div class="client_logos"><!--client_logos-->
            <div class="container">
                <ul class="fadeInRight animated wow">
                    <li><a href="https://www.siacorp.com.br/" target="_blank"><img src="{{asset('img/siacorp.png')}}" style="height: auto;width: 150px;"></a></li>
                    <li><a href="https://www.uemanet.uema.br" target="_blank"><img src="{{asset('img/uemanet3.jpg')}}" style="height: auto;width: 80px;"></a></li>
                    <li><a href="https://www.vale.com" target="_blank"><img src="{{asset('img/vale2.png')}}" style="height: auto;width: 150px;"></a></li>
                    <li><a href="https://www.mafroeduc.com/" target="_blank"><img src="{{asset('img/mafroeduc.png')}}" style="height: auto;width: 150px;"></a></li>
                    <li><a href="http://www.neperge.ufma.br/" target="_blank"><img src="{{asset('img/neperge.png')}}" style="height: auto;width: 100px;"></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--/client_logos-->

    <!--Footer-->
    <footer class="footer_wrapper" id="contact">
        <div class="container">
            <section class="page_section contact" id="contact">
                <div class="contact_section">
                    <h2>Get In Touch</h2>
{{--                    <h6>Lorem ipsum dolor sit amet, consectetur Morbi sagittis, sem quisci ipsum</h6>--}}
                </div>
                <div class="row">
                    <div class="col-lg-4 wow fadeInLeft">
                        <div class="contact_info">
                            <div class="detail">
                                <h4>Thomaz Machado</h4>
                                <p>São Luís, Maranhão - Brasil</p>
                            </div>
                            <div class="detail">
                                <h4>Email Us</h4>
                                <p>tsm@thomazmachado.com.br</p>
                                <p>tsmwebdeveloper@gmail.com</p>
                            </div>
                        </div>
                        <ul class="social_links">
                            <li class="twitter animated bounceIn wow delay-02s animated" style="visibility: visible; animation-name: bounceIn;">
                                <a href="https://github.com/thomazdsm"><i class="fa fa-github"></i></a>
                            </li>
                            <li class="pinterest animated bounceIn wow delay-04s animated" style="visibility: visible; animation-name: bounceIn;">
                                <a href="https://www.linkedin.com/in/thomaz-smachado/"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li class="gplus animated bounceIn wow delay-05s animated" style="visibility: visible; animation-name: bounceIn;">
                                <a href="#"><i class="fa fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8 wow fadeInLeft delay-06s">
                        <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
                        <form name="sentMessage" id="contactForm"  novalidate>
                            <div class="control-group">
                                <div class="controls">
                                    <input type="text" class="form-control"
                                           placeholder="Full Name" id="name" required
                                           data-validation-required-message="Please enter your name" />
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <input type="email" class="form-control" placeholder="Email"
                                           id="email" required
                                           data-validation-required-message="Please enter your email" />
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="controls">
                                     <textarea rows="10" cols="100" class="form-control"
                                               placeholder="Message" id="message" required
                                               data-validation-required-message="Please enter your message" minlength="5"
                                               data-validation-minlength-message="Min 5 characters"
                                               maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>
                            <div id="success"> </div> <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary pull-right">Send</button><br />
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <div class="container">
            <div class="footer_bottom"><span>Copyright © 2022. <a href="#hero_section" class="scroll-link">TSM - Web Developer</a> by Thomaz Machado</span> </div>
        </div>
    </footer>
    <!--/Footer-->
@stop
