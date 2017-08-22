{{ Theme::asset()->usePath()->add('home-css', 'css/home.css') }}
{{ Theme::asset()->usePath()->add('home-js', 'js/home.js') }}

    <!--NAVIGATION-->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#home-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">JMGG</a>
            </div>
            <div class="collapse navbar-collapse" id="home-navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a id="white-a" data-id="#white" href="#" class="fa fa-cloud"></a></li>
                    <li><a id="blue-a" data-id="#blue" href="#" class="fa fa-cloud blue"></a></li>
                    <li><a id="orange-a" data-id="#orange" href="#" class="fa fa-cloud orange"></a></li>
                    <li><a id="yellow-a" data-id="#yellow" href="#" class="fa fa-cloud yellow"></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--1ST SECTION-->
    <section id="white" class="mydiv">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 person-img-height">
                    <img src="{{url('/img/naked.png')}}"/>
                </div>
                <div class="col-md-4 content-height">
                    <div class="content-container">
                        <div class="page1-header">
                            <h1>HELLO!</h1>
                        </div>
                        <p>My name is <strong>Jomel Marty Guiao</strong>.</p>
                        <p>Basically, I'm just a male human being</p>
                        <p>but I can wear different suits.</p>
                        <br/>
                        <p>So please <strong>scroll</strong>,</p>
                        <p>it's a bit cold out there.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--2ND PAGE-->
    <section id="blue" class="mydiv">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-height">
                        <div class="header">
                            <h1>I'M A FRONT-END DEVELOPER</h1>
                        </div>
                    </div>
                    <div class="label-height">
                        <div class="label-container">
                            <p>My name is <strong>Jomel Marty Guiao</strong>.</p>
                            <p>Basically, I'm just a male human being but I can wear different suits.</p>
                            <br/>
                            <p>So please <strong>scroll</strong>,</p>
                            <p>it's a bit cold out there.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 person-img-height">
                    <img src="{{url('/img/dress.png')}}"/>
                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </section>
    <section id="orange" class="mydiv">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-height">
                        <div class="header">
                            <h1>I'M A FRONT-END DEVELOPER</h1>
                        </div>
                    </div>
                    <div class="label-height">
                        <div class="label-container">
                            <p>My name is <strong>Jomel Marty Guiao</strong>.</p>
                            <p>Basically, I'm just a male human being</p>
                            <p>but I can wear different suits.</p>
                            <br/>
                            <p>So please <strong>scroll</strong>,</p>
                            <p>it's a bit cold out there.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 person-img-height">
                    <img src="{{url('/img/jersey.png')}}"/>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </section>
    <section id="yellow" class="mydiv">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-height">
                        <div class="header">
                            <h1>I'M A FRONT-END DEVELOPER</h1>
                        </div>
                    </div>
                    <div class="label-height">
                        <div class="label-container">
                            <p>My name is <strong>Jomel Marty Guiao</strong>.</p>
                            <p>Basically, I'm just a male human being</p>
                            <p>but I can wear different suits.</p>
                            <br/>
                            <p>So please <strong>scroll</strong>,</p>
                            <p>it's a bit cold out there.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 person-img-height">
                    <img src="{{url('/img/good.png')}}"/>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </section>
