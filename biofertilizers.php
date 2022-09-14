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


    <script src="scripts/jquery.min.js"></script>
    <link rel="stylesheet" href="style_sheets/animate.css">
    <link rel="stylesheet" href="style_sheets/bootstrap.min.css">
    <link rel="stylesheet" href="style_sheets/style.css">

    <style>
        .products {
            color: #026635;
        }


        .capim {
            background-image: url(style_sheets/pictures/cap_bg.jpg);
        }

    </style>

</head>

<body>
    <?php include "header.php" ?>
    <section id="product1" class="pb-5">
        <div class="container pt-5">

            <h4 class="tu fon2 wow fadeInUp c5" data-wow-duration="1.5s" data-wow-delay=".5s">Product</h4>
            <h1 class="tu fon1 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">Biofertizers</h1>
            <div class="row">
                <div class="col-sm-6 ">
                    <img src="style_sheets/pictures/prod1.png" width="100%" class="nodrag wow fadeInLeft scale sha" data-wow-duration="1.5s" data-wow-delay=".5s">
                                        <div class="p-1 ">
                        <div class="btn c1 bgc4 fon3 col-sm-12 p-2    text-center  btnend " data-bs-toggle="modal" data-bs-target="#biofertizers">Request a sample</div>

                        <div class="modal" id="biofertizers">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Requet a sample</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form name="form" role="form" method="post" enctype="multipart/form-data" id="commentform" action="contactform.php">
                                            <div class="col-sm-6 mx-auto p-3">
                                                Product: <input type="text" value="BIOFERT PROM" class="form-control mx-auto d-block" name="product">
                                                Name : <input type="text" class="form-control mx-auto d-block" name="name">
                                                E-mail: <input type="text" class="form-control mx-auto d-block" name="mail">
                                                Message : <input type="text" class="form-control mx-auto d-block" name="mess">

                                                <div class="col-sm-6 mt-2">
                                                    <img src="captcha.php" class="capim mb-2" />
                                                    <input type="text" class="chumcha mt-2" name="captcha" id="captcha" maxlength="6" size="15" placeholder="captcha...." required="required" />
                                                </div>

                                                <input name="submit" id="submit" type="submit" class="btn  btn-warning mt-2 c1 col-sm-12" value="submit">

                                            </div>
                                        </form>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 p-3 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <h1 class="fon1 tu c5">BIOFERT PROM </h1>
                    <div class="fon2 "><b>(PHOSPHROUS RICH ORGANIC MANURE)</b></div>
                    <ul class="pt-4 fon3"><h5 class="fon1">Benifits:</h5>
                        <li>Phosphorus is the vital component of ATP the
                            (Energy unit) of plants
                        </li>
                        <li>It improves electrical conductivity of soil and enhances the activity of beneficial microorganisms in soil.</li>
                        <li>Phosphorous is essential for the general health and vigour of plants </li>
                        <li>It also balances the soil PH. </li>
                        <li>It helps in humus formation.</li>
                    </ul><h5 class="fon2 px-2">Dosage:</h5>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3 c1">Soil application: 80 Kgs - 120 Kgs / acre</div>
                    </div>
                </div>
                
                

                <div class="col-sm-6 pt-5 wow fadeInDown order-2 order-lg-1" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <h1 class="fon1 tu c5">IMAXX (VAM) BIOFERT PROM </h1><h5 class="fon1">Benifits:</h5>
                    <div class="fon2 ">Is made on water soluble carrier contains endo-mychorrhizal species
                        Provide the plant additional access to soil nutrients and water and thus helps the plants to overcome nutrient burn and drought.
                        Triggers the plant immune system to release “defense-related chemicals.
                        Solubilizes and mobilizes the nutrients into root at vertical cells.
                        <br><br>
                        <h5 class="fon2">Dosage:</h5>
                    </div>
                    <div class="col-sm-8 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Fertigation/Soil Drenching : 100 grams to 250 grams
                            per acre</div>
                    </div>
                </div>

                <div class="col-sm-6 pt-5 wow fadeInLeft   order-1 " data-wow-duration="1.5s" data-wow-delay=".8s">
                    <img src="style_sheets/pictures/biostim.png" class="nodrag scale sha" width="100%">
                    <div class="p-1 ">
                        <div class="btn c1 bgc4 fon3 col-sm-12 p-2   text-center  btnend " data-bs-toggle="modal" data-bs-target="#imax">Request a sample</div>

                        
                        <div class="modal" id="imax">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Requet a sample</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form name="form" role="form" method="post" enctype="multipart/form-data" id="commentform" action="contactform.php">
                                            <div class="col-sm-6 mx-auto p-3">
                                                Product: <input type="text" value="Imaxx (VAM)" class="form-control mx-auto d-block" name="product">
                                                Name : <input type="text" class="form-control mx-auto d-block" name="name">
                                                E-mail: <input type="text" class="form-control mx-auto d-block" name="mail">
                                                Message : <input type="text" class="form-control mx-auto d-block" name="mess">
                                                <!--                                                <div class="g-recaptcha pt-2" data-sitekey="6Ldbdg0TAAAAAI7KAf72Q6uagbWzWecTeBWmrCpJ"></div>-->
                                                <div class="col-sm-6 mt-2">
                                                    <img src="captcha.php" class="capim mb-2" />
                                                    <input type="text" class="chumcha mt-2" name="captcha" id="captcha" maxlength="6" size="15" placeholder="captcha...." required="required" />
                                                </div>

                                                <input name="submit" id="submit" type="submit" class="btn  btn-warning mt-2 c1 col-sm-12" value="submit">

                                            </div>
                                        </form>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>



            </div>
        </div>
    </section>
    <div class=" pb-5 mb-3 proddown">
        <?php include "three.php" ?>
    </div>
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
