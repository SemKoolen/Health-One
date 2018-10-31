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
</head>

<body style="background-color:#bcbcbc;">
    <div class="container" style="padding:0px;background-color:rgba(255,255,255,0.53);">
        <nav class="navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button" style="background-color:#424242;">
            <div class="container"><a class="navbar-brand" href="#"><span><img src="assets/img/logo.png"></span> </a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav nav-right">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">home </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="faq.html">faq </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="contact.php">contact </a></li>
                    </ul>
                    <p class="ml-auto navbar-text actions">
                        <a href="login.html" class="login">Log In</a>
                        <a class="btn btn-light action-button" role="button" href="signup.html">Sign Up</a>
                    </p>
            </div>
    </div>
    </nav>
    <section id="contact" style="padding:40px;padding-right:5px;padding-left:4px;">
        <div class="container">
            <form action="javascript:void();" method="post" id="contactForm" style="padding:15px;">
                <div class="form-row" style="margin-left:0px;margin-right:0px;padding:10px;">
                    <div class="col-md-6" style="padding-left:20px;padding-right:20px;">
                        <fieldset></fieldset>
                        <legend><i class="fa fa-info"></i>&nbsp;Bedrijfsinformatie</legend>
                        <p></p>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><i class="fa fa-building"></i></td>
                                        <td>KvK: 58314687, BTW:&nbsp;NL223674965B01</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-map-marker"></i></td>
                                        <td>Prins Bernhardweg 27, 7241 DH Lochem</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-phone"></i></td>
                                        <td>085 - 301 90 77 </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-envelope"></i></td>
                                        <td>info@stackip.nl</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-md-6" id="message" style="padding-right:20px;padding-left:20px;">
                        <fieldset>
                            <legend><i class="fa fa-envelope"></i>&nbsp;Contactformulier</legend>
                        </fieldset>
                        <div class="form-group has-feedback"><label for="from_name">Volledige naam</label><input class="form-control" type="text" name="from_name" required="" placeholder="Voornaam en Achternaam" id="from_name" tabindex="-1"></div>
                        <div class="form-group has-feedback"><label for="from_email">Email</label><input class="form-control" type="email" name="from_email" required="" placeholder="Uw email adres" id="from_email"></div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group has-feedback"><label for="from_phone">Titel van bericht</label><input class="form-control" type="text" name="subject" placeholder="Titel van bericht" id="from_phone"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group"><label for="calltime">Afdeling</label>
                                     <select class="form-control" id="calltime">
                                        <option>Zorgverzekeraar</option>
                                        <option>Web-developer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label for="comments">Bericht</label><textarea class="form-control" rows="5" name="Comments" placeholder="Type uw bericht hier.." id="comments"></textarea></div>
                        <div class="form-group"><button class="btn btn-primary active btn-block" type="submit" style="background-color:#303641;">Send <i class="fa fa-chevron-circle-right"></i></button></div>
                        <hr>
                    </div>
                </div>
            </form>
        </div>
    </section>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>