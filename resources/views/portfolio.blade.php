{{ Theme::asset()->usePath()->add('portfolio-css', 'css/portfolio.css') }}
{{ Theme::asset()->usePath()->add('home-js', 'js/home.js') }}
{{ Theme::asset()->usePath()->add('stylesheet-css', 'css/stylesheet.css') }}

<!--HOME-->
<section id="home">
    <div class="container">
        <div class="img-overlay">
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="home-text typewriter">
                    <p>Hello;</p>
                    <h4>I'm Jomel Marty Guiao.</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--NAVIGATION-->
<div id="navigation">
    <nav class = "navbar navbar-default my-nav" role = "navigation" data-spy="affix" data-offset-top="900">
        <div class="container-fluid">
            <div class = "navbar-header">
                <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#myNavbar">
                    <span class = "sr-only">Toggle navigation</span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>
                <a class ="navbar-brand" href = "#">JMGG</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            <ul id="nav-id" class="nav navbar-nav navbar-right">
                <li id="about-li" class="active"><a data-id="#about" href = "javascript:void(0)">ABOUT</a></li>
                <li id="skills-li" class="show-skills"><a data-id="#skills" href="javascript:void(0)">SKILLS</a></li>
                <li id="experience-li"><a data-id="#experience" href = "javascript:void(0)">EXPERIENCE</a></li>
                <li id="projects-li"><a data-id="#projects" href = "javascript:void(0)">PROJECTS</a></li>
            </ul>
            </div>
        </div>
    </nav>
</div>
<!--ABOUT-->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="section-title">About.</h1>
            </div>
        </div>
        <div class="row row-margin">
            <div class="col-md-5 wow fadeInLeft">
                <div class="about-header">
                    <h3>Introduction</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum fringilla sem, non varius eros vehicula eu.</p>
                <div>
                    <button type="button" class="btn-download btn">Download CV</button>
                </div>
            </div>
            <div class="col-md-2 my-picture-container">
                <img src="{{url('/img/businessman.png') }}" />
            </div>
            <div class="col-md-5 wow fadeInRight">
                <div class="about-header">
                    <h3>Information</h3>
                </div>
                    <ul class="information-container">
                        <li class="fa fa-envelope-o"> Email Address: mrjomelguiao@gmail.com</li>
                        <li class="fa fa-phone">  Contact Number: 09279480774</li>
                        <li class="fa fa-birthday-cake"> Birthday: August 11,1995</li>
                        <li class="fa fa-home ">  Address: #40 Tongco St. Marulas, Valenzuela</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SKILLS-->
<section id="skills">
    <div class="skills-blur"></div>
    <div class="container">
        <div class="img-overlay">
        </div>
        <div class="row">
            <div class="col-md-11">
                <h1 class="section-title" >Skills.</h1>
            </div>
            <div class="col-md-1 skills-bulb" data-toggle="tooltip" title="Click Me!">
                <div class="bulb-container show-skills">
                    <a href="#show-skills">
                        <p class="fa fa-lightbulb-o"></p>
                    </a>
                </div>
            </div>
        </div>
        <div class="row row-margin">
            <div class="col-md-3 wow flipInX">
                <div class="skills-container">
                    <img src="{{url('/img/php.svg') }}" />
                    <p>PHP</p>
                </div>
                <div class="progress-bar-container">
                    <div class="progress">
                        <div id="one" class="progress-bar progress-bar-striped active prg1 prg-color" role="progressbar"
                             aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:0%" data-per="85">
                            0%
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow flipInX">
                <div class="skills-container">
                    <img src="{{url('/img/html.svg') }}" />
                    <p>HTML</p>
                </div>
                <div class="progress-bar-container">
                    <div class="progress">
                        <div id="one" class="progress-bar progress-bar-striped active prg2 prg-color" role="progressbar"
                             aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:0%" data-per="86">
                            0%
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow flipInX">
                <div class="skills-container">
                    <img src="{{url('/img/css3.svg') }}" />
                    <p>CSS</p>
                </div>
                <div class="progress-bar-container">
                    <div class="progress">
                        <div id="one" class="progress-bar progress-bar-striped active prg3 prg-color" role="progressbar"
                             aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:0%" data-per="84">
                            0%
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow flipInX">
                <div class="skills-container">
                    <img src="{{url('/img/bootstrap.svg') }}" />
                    <p>Bootstrap</p>
                </div>
                <div class="progress-bar-container">
                    <div class="progress">
                        <div id="one" class="progress-bar progress-bar-striped active prg4 prg-color" role="progressbar"
                             aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:0%" data-per="75">
                            0%
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-margin">
            <div class="col-md-3 wow flipInX">
                <div class="skills-container">
                    <img src="{{url('/img/javascript.svg') }}" />
                    <p>Javascript</p>
                </div>
                <div class="progress-bar-container">
                    <div class="progress">
                        <div id="one" class="progress-bar progress-bar-striped active prg5 prg-color" role="progressbar"
                             aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:0%" data-per="64">
                            0%
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow flipInX">
                <div class="skills-container">
                    <img src="{{url('/img/jquery.svg') }}" />
                    <p>Jquery</p>
                </div>
                <div class="progress-bar-container">
                    <div class="progress">
                        <div id="one" class="progress-bar progress-bar-striped active prg6 prg-color" role="progressbar"
                             aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:0%" data-per="64">
                            0%
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow flipInX">
                <div class="skills-container">
                    <img src="{{url('/img/laravel.svg') }}" />
                    <p>Laravel</p>
                </div>
                <div class="progress-bar-container">
                    <div class="progress">
                        <div id="one" class="progress-bar progress-bar-striped active prg7 prg-color" role="progressbar"
                             aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:0%" data-per="65">
                            0%
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow flipInX">
                <div class="skills-container">
                    <img src="{{url('/img/photoshop.svg') }}" />
                    <p>Photoshop</p>
                </div>
                <div class="progress-bar-container">
                    <div class="progress">
                        <div id="one" class="progress-bar progress-bar-striped active prg8 prg-color" role="progressbar"
                             aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:0%" data-per="89">
                            0%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--EXPERIENCE-->
<section id="experience">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="section-title">Experience.</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row row-img">
                    <div class="col-sm-3 wow zoomIn">
                        <div class="img-container">
                            <img src="{{url('/img/republisys-gray.png') }}"/>
                            <img class="img-hover-display" src="{{url('/img/republisys.png') }}"/>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="border-text  wow fadeIn">
                            <span class="border-style">2016 - PRESENT</span>
                        </div>
                        <div class="wow fadeIn">
                            <h1 class="experience-title">
                                <p class="fa fa-briefcase"></p>
                                Jr. Quality Assurance Analyst
                            </h1>
                            <p class="content-alignment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum fringilla sem, non varius eros vehicula eu. Etiam libero nisl, bibendum quis efficitur at, gravida eget purus. Morbi ullamcorper euismod dui, vel fermentum lacus dignissim sed. consectetur adipiscing elit. Cras condimentum fringilla sem, non varius eros vehicula eu. Etiam libero nisl, bibendum quis efficitur at, gravida eget purus. Morbi ullamcorper euismod dui, vel fermentum lacus dignissim sed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row row-img">
                    <div class="col-sm-3 wow zoomIn">
                        <div class="img-container ">
                            <img src="{{url('/img/codeninja-gray.png') }}"/>
                            <img class="img-hover-display" src="{{url('/img/codeninja.png') }}"/>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="border-text wow fadeIn">
                            <span class="border-style">2016</span>
                        </div>
                        <div class="wow fadeIn">
                            <h1 class="experience-title">
                                <p class="fa fa-briefcase"></p>
                                Jr. Quality Assurance Analyst
                            </h1>
                            <p class="content-alignment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum fringilla sem, non varius eros vehicula eu. Etiam libero nisl, bibendum quis efficitur at, gravida eget purus. Morbi ullamcorper euismod dui, vel fermentum lacus dignissim sed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--EDUCATION-->
<section id="education">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="section-title">Education.</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 wow fadeIn">
                <div class="border-text wow fadeIn">
                    <span class="border-style">2008</span>
                </div>
                <h3  class="fa fa-graduation-cap educ-header">  Elementary</h3>
                <h4>Sta. Rita Catholic School</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum fringilla sem, non varius eros vehicula eu.</p>
            </div>
            <div class="col-md-4 wow fadeIn">
                <div class="border-text">
                    <span class="border-style">2012</span>
                </div>
                <h3  class="fa fa-graduation-cap educ-header">  High School</h3>
                <h4>St. Catherine's Academy</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum fringilla sem, non varius eros vehicula eu.</p>
            </div>
            <div class="col-md-4 wow fadeIn">
                <div class="border-text">
                    <span class="border-style">2016</span>
                </div>
                <h3  class="fa fa-graduation-cap educ-header">  College</h3>
                <h4>Polytechnic University of the Philippines</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum fringilla sem, non varius eros vehicula eu.</p>
            </div>
        </div>
    </div>
</section>
<!--OBJECTIVE-->
<section id="objective">
    <div class="container">
        <div class="img-overlay"></div>
        <div class="row">
            <div class="col-md-12 title-color">
                <h1 class="section-title">Objective.</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-color">
                <ul>
                <li class="fa fa-usb text-style wow fadeInUp">   To learn things related to my profession and adapt new technology trend where my talend will be optimally utilized.</li>
                <li class="fa fa-usb text-style wow fadeInUp">   To expand my knowledge in Programming and Website/Software Developement.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--PROJECTS-->
<section id="projects">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="section-title">Projects.</h1>
            </div>
        </div>
        <div class="row row-margin">
            <div class="col-md-3 wow zoomIn">
                <a href="#hrms" data-toggle="modal">
                    <div class="img-wrap">
                        <img src="{{url('/img/hrmslogo.jpg') }}">
                        <div class="img-overlay-project"></div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 wow zoomIn">
                <a href="#loyal-currency" data-toggle="modal">
                    <div class="img-wrap">
                        <img src="{{url('/img/lc.png') }}">
                        <div class="img-overlay-project"></div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 wow zoomIn">
                <a href="#fonebayad" data-toggle="modal">
                    <div class="img-wrap">
                        <img src="{{url('/img/fonebayad.jpg') }}">
                        <div class="img-overlay-project"></div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 wow zoomIn">
                <a href="#" data-toggle="modal">
                    <div class="img-wrap">
                        <img src="{{url('/img/no-image-available.png') }}">
                        <div class="img-overlay-project"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
<!--HRMS modal-->
    <div id="hrms" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="modal-title">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Project Details</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="project-img-modal bg-img1">
                                    <div><img src="{{url('/img/hrms3.png') }}"></div>
                                    <div><img src="{{url('/img/hrms1.png') }}"></div>
                                    <div><img src="{{url('/img/hrms2.png') }}"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>Project -</h4>
                                <p>Human Resource Management System</p>
                                <h4>Description -</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum fringilla sem, non varius eros vehicula eu. Etiam libero nisl, bibendum quis efficitur at, gravida eget purus. Morbi ullamcorper euismod dui, vel fermentum lacus dignissim sed. consectetur adipiscing elit. Cras condimentum fringilla sem, non varius eros vehicula eu. Etiam libero nisl, bibendum quis efficitur at, gravida eget purus. Morbi ullamcorper euismod dui, vel fermentum lacus dignissim sed.</p>
                                <a href="http://hrms.republisys.com" target="_blank">http://hrms.republisys.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="container">
                        <div class="row row-margin">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-project-custom" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--end-->
    <!--Loyal Currency modal-->
    <div id="loyal-currency" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="modal-title">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Project Details</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="project-img-modal bg-img2">
                                    <div><img src="{{url('/img/lc3.png') }}"></div>
                                    <div><img src="{{url('/img/lc1.png') }}"></div>
                                    <div><img src="{{url('/img/lc2.png') }}"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>Project -</h4>
                                <p>Loyal Currency</p>
                                <h4>Description -</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum fringilla sem, non varius eros vehicula eu. Etiam libero nisl, bibendum quis efficitur at, gravida eget purus. Morbi ullamcorper euismod dui, vel fermentum lacus dignissim sed. consectetur adipiscing elit. Cras condimentum fringilla sem, non varius eros vehicula eu. Etiam libero nisl, bibendum quis efficitur at, gravida eget purus. Morbi ullamcorper euismod dui, vel fermentum lacus dignissim sed.</p>
                                <a href="http://hrms.loyalcurrency.com/" target="_blank">http://hrms.loyalcurrency.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="container">
                        <div class="row row-margin">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-project-custom" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end-->
    <!--Fonebayad modal-->
    <div id="fonebayad" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="modal-title">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Project Details</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="project-img-modal bg-img3">
                                    <div><img src="{{url('/img/fonebayad3.png') }}"></div>
                                    <div><img src="{{url('/img/fonebayad1.png') }}"></div>
                                    <div><img src="{{url('/img/fonebayad2.png') }}"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>Project -</h4>
                                <p>Fonebayad</p>
                                <h4>Description -</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum fringilla sem, non varius eros vehicula eu. Etiam libero nisl, bibendum quis efficitur at, gravida eget purus. Morbi ullamcorper euismod dui, vel fermentum lacus dignissim sed. consectetur adipiscing elit. Cras condimentum fringilla sem, non varius eros vehicula eu. Etiam libero nisl, bibendum quis efficitur at, gravida eget purus. Morbi ullamcorper euismod dui, vel fermentum lacus dignissim sed.</p>
                                <a href="https://dev.www2.fonebayad.com" target="_blank">https://dev.www2.fonebayad.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="container">
                        <div class="row row-margin">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-project-custom" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end-->
</section>
<!--FOOTER-->
<section id="footer">
    <div class="footer-padding">
        <div class="container">
            <div class="row">
                <ul class="footer-social text-center">
                    <li class="wow tada">
                        <a href="https://www.google.com.ph/?gfe_rd=cr&ei=XON-WbbUCq3o8AeV34HIDg&gws_rd=ssl" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="wow tada">
                        <a href="https://www.google.com.ph/?gfe_rd=cr&ei=XON-WbbUCq3o8AeV34HIDg&gws_rd=ssl" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    <li class="wow tada">
                        <a href="https://www.google.com.ph/?gfe_rd=cr&ei=XON-WbbUCq3o8AeV34HIDg&gws_rd=ssl" target="_blank">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li class="wow tada">
                        <a href="https://www.google.com.ph/?gfe_rd=cr&ei=XON-WbbUCq3o8AeV34HIDg&gws_rd=ssl" target="_blank">
                            <i class="fa fa-github"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="transparent-line"></div>
            </div>
            <div class="row">
                <div class="copyright-content">
                   <p>Jomel Marty Guiao © Copyright 2017</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SCROLL TOP-->
<div class="scroll-top">
    <a class="page-scroll" href="#page-top"><span class="fa fa-chevron-up"  data-toggle="tooltip" title="Back To Top"></span></a>
</div>