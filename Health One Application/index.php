
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/css/Contact-form-simple.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/icons/material-icons.css">
</head>

<body style="background-color:#bcbcbc;">
    <div class="container" style="padding:0px;">
        <div class="row" id="nav">
            <div class="col">
                <nav class="navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button" style="background-color:#424242;">
                    <div class="container"><a class="navbar-brand" href="#"><span><img src="assets/img/logo.png"></span> </a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div
                            class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav nav-right">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">home </a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="faq.html">faq </a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="contact.php">contact </a></li>
                            </ul>
                            <p class="ml-auto navbar-text actions">
                                <a href="#" onclick="on()" class="login">Log In</a>
                                <a class="btn btn-light action-button" role="button" href="signup.html">Sign Up</a>
                            </p>
                            <div id="overlay">
                                <div id="text">
                                    <form>
                                        <div class="form-group">
                                            <div class="text-center">
                                                <i class="material-icons md-128">
                                                    account_circle
                                                </i>
                                            </div>
                                            <label for="exampleSelect1">Gebruiker</label>
                                            <select class="form-control" id="exampleSelect1">
                                                <option>Verzekeringsmedewerker</option>
                                                <option>Arts</option>
                                                <option>Apotheker</option>
                                            </select>
                                        </div>
                                    </form>
                                    <button type="button" onclick="off()" class="btn btn-success btn-sm float-left">
                                        <span class="material-icons md-18">done</span>
                                    </button>
                                    <button type="button" onclick="off()" class="btn btn-danger btn-sm float-right">
                                            <span class="material-icons md-18">clear</span>
                                    </button>
                                </div>
                            </div>

                            <script>
                                function on() {
                                    document.getElementById("overlay").style.display = "block";
                                }

                                function off() {
                                    document.getElementById("overlay").style.display = "none";
                                }
                            </script>
                    </div>
            </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="simple-slider">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image:url(&quot;assets/img/apotheker.jpg&quot;);"></div>
                        <div class="swiper-slide" style="background-image:url(&quot;assets/img/lab.jpg&quot;);"></div>
                        <div class="swiper-slide" style="background-image:url(&quot;assets/img/eyevine3.14492330_boughtWEB.jpg&quot;);"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="features-boxed">
                <div class="intro">
                    <h2 class="text-center">Features </h2>
                    <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
                </div>
                <div class="row justify-content-center features" style="padding:30px 10px;">
                    <div class="col-sm-6 col-md-5 col-lg-4 item">
                        <div class="box"><i class="fa fa-map-marker icon"></i>
                            <h3 class="name">Works everywhere</h3>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-4 item">
                        <div class="box"><i class="fa fa-clock-o icon"></i>
                            <h3 class="name">Always available</h3>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-4 item">
                        <div class="box"><i class="fa fa-list-alt icon"></i>
                            <h3 class="name">Customizable </h3>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-4 item">
                        <div class="box"><i class="fa fa-plane icon"></i>
                            <h3 class="name">Fast </h3>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-4 item">
                        <div class="box"><i class="fa fa-phone icon"></i>
                            <h3 class="name">Mobile-first</h3>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>