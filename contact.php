<html lang="en">

<head>
    <title>BIOTIC LIFE SCIENCE</title>
    <link rel="icon" href="style_sheets/pictures/logotit.png" type="image/icon type" width="100%">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-
    referrer"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script src="scripts/jquery.min.js"></script>
    <link rel="stylesheet" href="style_sheets/animate.css">
    <link rel="stylesheet" href="style_sheets/bootstrap.min.css">
    <link rel="stylesheet" href="style_sheets/style.css">

    <style>
        .contact {
            color: #026635;
        }

    </style>

</head>

<body>
    <?php include "header.php" ?>

    <div class="col-sm-12 enqbg">
        <div class="enq pt-5 pb-5">
            <h1 class="fon1 text-center c1 fpad my-auto p-5">Contact Us</h1>
        </div>
    </div>


    <section id="contact">
        <div class="container pt-5">
            <div class="row">
                <div class="col-sm-5 maildown">
                    <div class="fon2">Come Visit Us At</div>
                    <h1 class="fon1">Our Address</h1>
                    <div class="fon2 col-sm-7">
                        Biotic Life Sciences (India) Ltd. Pvt.
                        J-155, vaniga Valagam, Mattuthavani,
                        Madurai - 625 007. India
                        Tel : +91 452 2586633, Fax : +91 452 2587733
                    </div>

                    <hr class="mt-5">

                    <div class="row">
                        <div class="col-sm-4"> <i class="fa-solid fa-envelope mailico p-4"></i>
                        </div>
                        <div class="col-sm-8">
                            <h4 class="mt-3">Our E-mail</h4> <br>
                            <h5 class="c9 lgup">bioticlifescience@gmail.com</h5>
                        </div>

                    </div>
                </div>

                <div class="col-sm-7 bgc7 mt-5">


                    <div class="fon3 c5 pt-3">Send Message</div>
                    <h1 class="fon1">Drop Us A line</h1>

                    <form class="m-2" name="form" role="form" method="post" enctype="multipart/form-data" id="commentform" action="contactform.php">
                        <div class="row">
                            <div class="form-group p-3 col-sm-6">
                                <label class="c9" for="name">Name:</label>
                                <input name="name" type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group p-3 col-sm-6">
                                <label class="c9" for="mail">Email:</label>
                                <input name="mail" type="email" class="form-control" id="mail">
                            </div>
                            <div class="form-group p-3 col-sm-6">
                                <label class="c9" for="mail">Phone Number:</label>
                                <input name="num" type="text" class="form-control" id="num">
                            </div>
                            <div class="form-group p-3 col-sm-6">
                                <label class="c9" for="mail">Subject</label>
                                <input name="sub" type="text" class="form-control" id="sub">
                            </div>

                            <div class="form-group p-3">
                                <label class="c9" for="comment">Comment:</label>
                                <textarea name="mess" class="form-control" rows="5" id="comment"></textarea>
                            </div>
                            <div class="col-sm-6 mt-2">
                                <img src="captcha.php" class="capim mb-2" />
                                <input type="text" class="chumcha mt-2" name="captcha" id="captcha" maxlength="6" size="15" placeholder="captcha...." required="required" />
                            </div>

                            <input class="btn bgc5 mlg col-sm-4 c1" name="submit" id="submit" type="submit" value="Submit">
                        </div>
                    </form>




                </div>


            </div>
        </div>
        <hr>

        <div class="container p-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31439.823450560245!2d78.138238!3d9.935794!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c5ccd415811b%3A0x6f9897203317bb32!2sMattuthavani%2C%20Madurai%2C%20Tamil%20Nadu%20625020%2C%20India!5e0!3m2!1sen!2sus!4v1662010039978!5m2!1sen!2sus" width="100%" height="80%;" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


    </section>



    <?php include "footer.php" ?>

    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                var upbtn = $(window).scrollTop();
                if (upbtn > 0) {
                    $(".snav").css("opacity", "1");
                    $(".wnav").css("opacity", "0");
                    $(".snav").css("transition", ".5s");
                    $(".wnav").css("transition", ".5s");
                } else {
                    $(".wnav").css("opacity", "1");
                    $(".snav").css("opacity", "0");
                    $(".snav").css("transition", ".5s");
                    $(".wnav").css("transition", ".5s");
                }
            });
        });

    </script>


    <script>
        new WOW().init();

    </script>

    <script src="scripts/wow.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>
</body>

</html>
