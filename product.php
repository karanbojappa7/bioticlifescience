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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="scripts/jquery.min.js"></script>
    <link rel="stylesheet" href="style_sheets/animate.css">
    <link rel="stylesheet" href="style_sheets/bootstrap.min.css">
    <link rel="stylesheet" href="style_sheets/style.css">


    <style>
        .products {
            color: #026635;
        }

    </style>

</head>




<body>

    <?php include "header.php" ?>

    <h1 class="text-center fon1 p-3 mt-2 xsdown">Our <span class="c5">Products</span></h1>

    <div class="container pb-5">
        <div class="row">
            <div class="col-sm-5 mx-auto p-5 allprods">
                <img src="style_sheets/pictures/ban1.png" class="nodrag" width="100%">
                <h4 class="fon1 c5 pt-2">Biofertilizers</h4>
                <div class="fon2">Biofertilizers are living microbes that enhance plant nutrition by either by mobilizing or increasing nutrient availability in soils.</div>
                <a class="c1 " href="biofertilizers.php">
                    <div class="mt-2 bgc5 col-sm-12 col-lg-6 p-2 text-center fon3">View all products</div>
                </a>
            </div><hr class="d-block d-sm-none">
            <div class="col-sm-5 mx-auto p-5 allprods">
                <img src="style_sheets/pictures/ban2.png" class="sha nodrag" width="100%">
                <h4 class="fon1 c5 pt-2">biostimulants</h4>
                <div class="fon2">A plant biostimulant is any substance or microorganism applied to plants with the aim to enhance nutrition efficiency, regardless of its nutrients content.</div>
                <a class="c1 " href="biostimulant.php">
                    <div class="mt-2 bgc5 col-sm-12 col-lg-6 p-2 text-center fon3">View all products</div>
                </a>
            </div><hr class="d-block d-sm-none">
            <div class="col-sm-5 mx-auto p-5 allprods">
                <img src="style_sheets/pictures/ban3.png" class="sha nodrag" width="100%">
                <h4 class="fon1 c5 pt-2">micronutrient fertilizer</h4>
                <div class="fon2">Micronutrients are the fertilizers that are required in very small quantities but are crucial for various plant growth and development processes such as helping in protein flowering, fruiting, etc.</div>
                <a class="c1" href="sugarmover.php">
                    <div class="mt-2 bgc5 col-sm-12 col-lg-6 p-2 text-center mt-1 fon3">View all products</div>
                </a>
            </div><hr class="d-block d-sm-none">
            <div class="col-sm-5 mx-auto p-5 allprods">
                <img src="style_sheets/pictures/ban4.png" class="sha nodrag" width="100%">
                <h4 class="fon1 c5 pt-2">pesticides</h4>
                <div class="fon2">A pesticide is any substance used to kill, repel, or control certain forms of plant or animal life that are considered to be pests.</div>
                <a class="c1" href="pestisdes.php">
                    <div class="mt-2 bgc5 col-sm-12 col-lg-6 p-2 text-center mt-2 fon3">View all products</div>
                </a>
            </div><hr class="d-block d-sm-none">
            <div class="col-sm-5 mx-auto p-5 allprods">
                <img src="style_sheets/pictures/ban5.png" class="sha nodrag" width="100%">
                <h4 class="fon1 c5 pt-2">secondary nutrients fertilizers</h4>
                <div class="fon2">These are the Nutrients that are required by plants in lesser quantities than the primary nutrients. </div>
                <a class="c1" href="snf.php">
                    <div class="mt-2 bgc5 col-sm-12 col-lg-6 p-2 text-center mt-2 fon3">View all products</div>
                </a>
            </div><hr class="d-block d-sm-none">
            <div class="col-sm-5 mx-auto p-5 allprods">
                <img src="style_sheets/pictures/ban6.png" class="sha nodrag" width="100%">
                <h4 class="fon1 c5 pt-2">water soluble fertilizers</h4>
                <div class="fon2">Water soluble fertilizers are fertilizers that are 100% soluble in water which is applied through Foliar Spray & Fertigation techniques in which the nutrients are readily absorbed and used in the plant system without any wastage through evaporation, leaching and runoff.</div>
                <a class="c1" href="wsf.php">
                    <div class="mt-2 bgc5 col-sm-12 col-lg-6 p-2 text-center mt-1 fon3">View all products</div>
                </a>
            </div>
        </div>
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
