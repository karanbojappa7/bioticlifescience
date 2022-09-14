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

    <section id="product1" class="pb-5">
        <div class="container pt-5">
            <h4 class="tu fon2 wow fadeInUp c5" data-wow-duration="1.5s" data-wow-delay=".5s">Product</h4>
            <h1 class="tu fon1 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">biostimulants</h1>
            <div class="row">



                <div class="col-sm-6">
                    <img src="style_sheets/pictures/cluster.png" width="100%" class="nodrag scale sha wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">

                    <div class="d-flex p-1 ">
                        <div class="btn c1 bgc4 fon3 col-sm-12 p-2   text-center  btnend" data-bs-toggle="modal" data-bs-target="#clusterg">Request a sample</div>

                        <div class="modal" id="clusterg">
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
                                                Product: <input name="product" type="text" value="ClusterG" class="form-control mx-auto d-block">
                                                Name : <input name="name" type="text" class="form-control mx-auto d-block">
                                                E-mail: <input name="mail" type="text" class="form-control mx-auto d-block">
                                                Message : <input name="mess" type="text" class="form-control mx-auto d-block">
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
                    <h1 class="fon1 tu c5">CLUSTER G </h1>
                    <div class="fon2 "><b>(Protein Hydrolysate 50% min)</b></div>
                    <ul class="pt-4 fon2"> <h5 class="fon1">Benifits:</h5>
                        <li>Enhances nutrient uptake and nutrient use efficiency in plants
                        </li>
                        <li>Photosynthesis process is enhanced & leads to better synthesis of chlorophyll & helps to improve yield.</li>
                        <li>Helps the plants to form more territory roots </li>
                        <li>Improves yield</li>
                  </ul><h5 class="fon2 px-2">Dosage:</h5>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Soil application Dosage: 1 Kgs to 2 Kgs per acre</div>
                    </div>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Foliar application Dosage: 1 gram to 1.25 grams per lit of water.</div>
                    </div>
                </div>

                <div class="col-sm-6 pt-5 wow fadeInDown order-2 order-lg-1" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <h1 class="fon1 tu c5">TOPSTAR G</h1>
                    <ul class="pt-4 fon2"> <h5 class="fon1">Benifits:</h5>
                        <li>TOPSTAR G (Protein Hydrolysate 2.50% min)
                        </li>
                        <li>Enhances nutrient uptake and nutrient use efficiency in plants </li>
                        <li>Increases the production and quality of the crop</li>
                        <li>Photosynthesis process is enhanced & leads to better synthesis of chlorophyll & helps to improve yield.</li>
                        <li>Reduces fruit and flower drop </li>
                        <li>Helps the plants to form more territory roots</li>
                        <li>Increases the production and quality of the of the produce </li>
                  </ul><h5 class="fon2 px-2">Dosage:</h5>
                    <div class="col-sm-8 m-3">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Soil application Dosage: 8 Kgs to 16 Kgs per acre</div>
                    </div>
                </div>

                <div class="col-sm-6 pt-5 wow fadeInLeft order-1" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <img src="style_sheets/pictures/topstar.png" class="nodrag scale sha" width="100%">
                    <div class="d-flex p-1 ">
                        <div class="btn c1 bgc4 fon3 col-sm-12 p-2   text-center  btnend" data-bs-toggle="modal" data-bs-target="#topstarg">Request a sample</div>



                        <div class="modal" id="topstarg">
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
                                                Product: <input name="product" type="text" value="Topstar G " class="form-control mx-auto d-block">
                                                Name : <input name="name" type="text" class="form-control mx-auto d-block">
                                                E-mail: <input name="mail" type="text" class="form-control mx-auto d-block">
                                                Message : <input name="mess" type="text" class="form-control mx-auto d-block">
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

        <div class="container pt-5">
            <div class="row">
            
            


                <div class="col-sm-6">
                    <img src="style_sheets/pictures/amine.png" width="100%" class="nodrag scale sha wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">

                    <div class="d-flex p-1 ">
                        <div class="btn c1 bgc4 fon3 col-sm-12 p-2   text-center  btnend" data-bs-toggle="modal" data-bs-target="#aminstar">Request a sample</div>
     

                        <div class="modal" id="aminstar">
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
                                                Product: <input name="product" type="text" value="Aminstar" class="form-control mx-auto d-block">
                                                Name : <input name="name" type="text" class="form-control mx-auto d-block">
                                                E-mail: <input name="mail" type="text" class="form-control mx-auto d-block">
                                                Message : <input name="mess" type="text" class="form-control mx-auto d-block">
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
                    <h1 class="fon1 tu c5">AMIN STAR </h1>
                    <div class="fon2 "><b>(Protein Hydrolysate 20% min)</b></div>
                    <ul class="pt-4 fon2"> <h5 class="fon1">Benifits:</h5>
                        <li>Enhances the nutrient uptake and nutrient use efficiency in plants
                        </li>
                        <li>Increases the production and quality of the crop</li>
                        <li>Photosynthesis process is enhanced & leads to better synthesis of chlorophyll & helps to improve yield.</li>
                        <li>Reduces flower & fruit drop.</li>
                        <li>• Improves yield & keeping quality of the produce.</li>
                  </ul><h5 class="fon2 px-2">Dosage:</h5>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Foliar application Dosage: 2.5 ml to 3 ml per lit of water.</div>
                    </div>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Soil/ Drip application : 5 to 10 lit per acre</div>
                    </div>
                </div>

                <div class="col-sm-6 pt-5 wow fadeInDown order-2 order-lg-1" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <h1 class="fon1 tu c5">MAGIC B-20 </h1>
                    <div class="fon2 "><b>(Protein Hydrolysate 12% min)</b></div>
                    <ul class="pt-4 fon2"> <h5 class="fon1">Benifits:</h5>
                        <li>Enhances nutrient uptake and nutrient use efficiency in plants.</li>
                        <li>Increases the production and quality of the crop </li>
                        <li>Photosynthesis process is enhanced & leads to better synthesis of chlorophyll & helps to improve yield.</li>
                        <li>Reduces fruit and flower drop </li>
                        <li>Improves yield & keeping quality of the produce.</li>
                        <li>Easily absorbed by plants .</li>
                        <li>Safe to use </li>
                  </ul><h5 class="fon2 px-2">Dosage:</h5>
                    <div class="col-sm-8 m-3">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Foliar application Dosage: 1ml to 1.25 ml per lit of water. Enhances nutrient uptake and nutrient use efficiency in plants </div>
                    </div>
                </div>

                <div class="col-sm-6 pt-5 wow fadeInLeft order-1" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <img src="style_sheets/pictures/magicb20.png" class="nodrag scale sha" width="100%">
                    <div class="d-flex p-1 ">
                        <div class="btn c1 bgc4 fon3 col-sm-12 p-2   text-center  btnend" data-bs-toggle="modal" data-bs-target="#magicb20">Request a sample</div>
    
                        <div class="modal" id="magicb20">
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
                                                Product: <input name="product" type="text" value="Magic B-20" class="form-control mx-auto d-block">
                                                Name : <input name="name" type="text" class="form-control mx-auto d-block">
                                                E-mail: <input name="mail" type="text" class="form-control mx-auto d-block">
                                                Message : <input name="mess" type="text" class="form-control mx-auto d-block">
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








        <div class="container pt-5">
            <div class="row">
            

                <div class="col-sm-6 ">
                    <img src="style_sheets/pictures/bitamin.png" width="100%" class="nodrag scale sha wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">

                    <div class="d-flex p-1 ">
                        <div class="btn c1 bgc4 fon3 col-sm-12 p-2   text-center  btnend" data-bs-toggle="modal" data-bs-target="#bitamin">Request a sample</div>
                        <div class="modal" id="bitamin">
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
                                                Product: <input name="product" type="text" value="Bitamin" class="form-control mx-auto d-block">
                                                Name : <input name="name" type="text" class="form-control mx-auto d-block">
                                                E-mail: <input name="mail" type="text" class="form-control mx-auto d-block">
                                                Message : <input name="mess" type="text" class="form-control mx-auto d-block">
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




                <div class="col-sm-6 p-3 wow fadeInDown " data-wow-duration="1.5s" data-wow-delay=".8s">
                    <h1 class="fon1 tu c5">BITAMIN</h1>
                    <div class="fon2 "><b>(Alginic acid 10% min)</b></div>
                    <ul class="pt-4 fon2"> <h5 class="fon1">Benifits:</h5>
                        <li>Higher nutrient uptake.</li>
                        <li>Increases the Bio Mass of the Plant </li>
                        <li>Increases the defence of the plant against natural disasters </li>
                        <li>Better branching / tillering and Increased foliage.</li>
                        <li>Reduction in the flower & fruit drop.</li>
                        <li>Better development of grains / fruits.</li>
                        <li>Increase in the size and weight of the grains / fruits.</li>
                        <li>Easily absorbed by plants </li>
                        <li>Higher yield & better quality of the produce.</li>
                  </ul><h5 class="fon2 px-2">Dosage:</h5>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Foliar application Dosage: 2.5 ml to 3 ml per lit of water.</div>
                    </div>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Soil/ Drip application : 5 to 10 lit per acre</div>
                    </div>
                </div>




                <div class="col-sm-6 p-3 wow fadeInDown  order-2 order-lg-1 " data-wow-duration="1.5s" data-wow-delay=".8s">
                    <h1 class="fon1 tu c5">GREEN GOLD </h1>
                    <div class="fon2 "><b>(Alginic acid 1% min)</b></div>
                    <ul class="pt-4 fon2"> <h5 class="fon1">Benifits:</h5>
                        <li>Higher nutrient uptake.</li>
                        <li>Better branching / tillering and increased foliage. </li>
                        <li>Increases the defence of the plant against natural disasters </li>
                        <li>Reduction in the flower & fruit drop.</li>
                        <li>Better development of grains / fruits.</li>
                        <li>Increase in the size and weight of the grains / fruits.</li>
                        <li>Higher yield & better quality of the produce.</li>
                  </ul><h5 class="fon2 px-2">Dosage:</h5>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Foliar application Dosage: 2.5 ml to 3 ml per lit of water.</div>
                    </div>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Soil/ Drip application : 5 to 10 lit per acre</div>
                    </div>
                </div>

                <div class="col-sm-6 pt-5 wow fadeInLeft order-1" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <img src="style_sheets/pictures/greengold.png" class="nodrag scale sha" width="100%">
                    <div class="d-flex p-1 ">
                        <div class="btn c1 bgc4 fon3 col-sm-12 p-2   text-center  btnend" data-bs-toggle="modal" data-bs-target="#gg">Request a sample</div>
   


                        <div class="modal" id="gg">
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
                                                Product: <input name="product" type="text" value="Green Gold" class="form-control mx-auto d-block">
                                                Name : <input name="name" type="text" class="form-control mx-auto d-block">
                                                E-mail: <input name="mail" type="text" class="form-control mx-auto d-block">
                                                Message : <input name="mess" type="text" class="form-control mx-auto d-block">
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








        <div class="container pt-5">
            <div class="row">
            


                <div class="col-sm-6">
                    <img src="style_sheets/pictures/symester.png" width="100%" class="nodrag scale sha wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">

                    <div class="d-flex p-1 ">
                        <div class="btn c1 bgc4 fon3 col-sm-12 p-2   text-center  btnend" data-bs-toggle="modal" data-bs-target="#symester">Request a sample</div>
         

                        <div class="modal" id="symester">
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
                                                Product: <input name="product" type="text" value="Symestar" class="form-control mx-auto d-block">
                                                Name : <input name="name" type="text" class="form-control mx-auto d-block">
                                                E-mail: <input name="mail" type="text" class="form-control mx-auto d-block">
                                                Message : <input name="mess" type="text" class="form-control mx-auto d-block">
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




                <div class="col-sm-6 p-3 wow fadeInDown " data-wow-duration="1.5s" data-wow-delay=".8s">
                    <h1 class="fon1 tu c5">SYME STAR </h1>
                    <div class="fon2 "><b>(Alginic acid 0.8% min)</b></div>
                    <ul class="pt-4 fon2"> <h5 class="fon1">Benifits:</h5>
                        <li>Higher nutrient uptake.</li>
                        <li>Increases the defence of the plant against natural disasters </li>
                        <li>Better branching / tillering and Increased foliage.</li>
                        <li>Reduction in the flower & fruit drop.</li>
                        <li>Better development of grains / fruits.</li>
                        <li>Higher yield & better quality of the produce.</li>
                  </ul><h5 class="fon2 px-2">Dosage:</h5>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Foliar application Dosage: 2.5 ml to 3 ml per lit of water.</div>
                    </div>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Soil/ Drip application : 5 to 10 lit per acre</div>
                    </div>
                </div>




                <div class="col-sm-6 p-3 wow fadeInDown  order-2 order-lg-1" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <h1 class="fon1 tu c5">GREEN GOLD G </h1>
                    <div class="fon2 "><b>(Alginic acid 0.1% min)</b></div>
                    <ul class="pt-4 fon2"> <h5 class="fon1">Benifits:</h5>
                        <li>Activates seed germination and plant growth</li>
                        <li>Enhances soil structure , Retention of soil moisture during dry periods </li>
                        <li>Profuse primary and secondary root development. </li>
                        <li>Increases Bio mass of the plant . ( Length and breadth of leaves )</li>
                        <li>Higher nutrient uptake.</li>
                        <li>Better branching / tillering</li>
                        <li>Reduction in the flower & fruit drop.</li>
                        <li>Higher yield & better quality of the produce.</li>
                  </ul><h5 class="fon2 px-2">Dosage:</h5>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Soil application Dosage: 8kgs to 16kgs per Acre.</div>
                    </div>
                </div>

                <div class="col-sm-6 pt-5 wow fadeInLeft order-1" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <img src="style_sheets/pictures/ggg.png" class="nodrag scale sha" width="100%">
                    <div class="d-flex p-1 ">
                        <div class="btn c1 bgc4 fon3 col-sm-12 p-2   text-center  btnend" data-bs-toggle="modal" data-bs-target="#ggg">Request a sample</div>
       


                        <div class="modal" id="ggg">
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
                                                Product: <input name="product" type="text" value="Green Gold G" class="form-control mx-auto d-block">
                                                Name : <input name="name" type="text" class="form-control mx-auto d-block">
                                                E-mail: <input name="mail" type="text" class="form-control mx-auto d-block">
                                                Message : <input name="mess" type="text" class="form-control mx-auto d-block">
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




        <div class="container pt-5">
            <div class="row">
            

                <div class="col-sm-6">
                    <img src="style_sheets/pictures/microhumeplus.png" width="100%" class="nodrag scale sha wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">

                    <div class="d-flex p-1 ">
                        <div class="btn c1 bgc4 fon3 col-sm-12 p-2   text-center  btnend" data-bs-toggle="modal" data-bs-target="#microhume5">Request a sample</div>
         

                        <div class="modal" id="microhume5">
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
                                                Product: <input name="product" type="text" value="MICRO HUME 5%" class="form-control mx-auto d-block">
                                                Name : <input name="name" type="text" class="form-control mx-auto d-block">
                                                E-mail: <input name="mail" type="text" class="form-control mx-auto d-block">
                                                Message : <input name="mess" type="text" class="form-control mx-auto d-block">
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




                <div class="col-sm-6 p-3 wow fadeInDown " data-wow-duration="1.5s" data-wow-delay=".8s">
                    <h1 class="fon1 tu c5">MICRO HUME 5% </h1>
                    <div class="fon2 "><b>Bio stimulant</b></div>
                    <ul class="pt-4 fon2"> <h5 class="fon1">Benifits:</h5>
                        <li>Activates better seed germination</li>
                        <li>Enhance seeding vigour & root growth.</li>
                        <li>Improves microbial activity in soil .</li>
                        <li>Stimulates root initiation and root growth </li>
                        <li>Increases nutrient uptake </li>
                        <li>Improves the texture and structure of soil </li>
                        <li>They chelate harmful toxins in soil </li>
                        <li>Improves water retention capacity of soil </li>
                        <li>Resulting in higher yield & better quality of the produce</li>
                  </ul><h5 class="fon2 px-2">Dosage:</h5>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Foliar application Dosage: 2.5 ml to 3 ml per lit of water.</div>
                    </div>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Soil / Drip application : 5 to 10 lit per acre</div>
                    </div>
                </div>




                <div class="col-sm-6 p-3 wow fadeInDown  order-2 order-lg-1" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <h1 class="fon1 tu c5">SUPERHUME 97+</h1>
                    <div class="fon2 "><b> (Humic acid 50% min)</b></div>
                    <ul class="pt-4 fon2"> <h5 class="fon1">Benifits:</h5>
                        <li>Activates seed germination and plant growth</li>
                        <li>Enhance seeding vigour & root growth.</li>
                        <li>Improves microbial activity in soil . </li>
                        <li>Stimulates root initiation and root growth</li>
                        <li>Increases nutrient uptake</li>
                        <li>Improves the texture and structure of soil</li>
                        <li>They chelate harmful toxins in soil </li>
                        <li>Improves water retention capacity of soil</li>
                        <li>Resulting in higher yield & better quality of the produce</li>
                  </ul><h5 class="fon2 px-2">Dosage:</h5>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Soil application Dosage: 2 Kgs to 3 Kgs per acre</div>
                    </div>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Foliar application Dosage: 1 gram per lit of water.</div>
                    </div>
                </div>

                <div class="col-sm-6 pt-5 wow fadeInLeft order-1" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <img src="style_sheets/pictures/superhume97.png" class="nodrag scale sha" width="100%">
                    <div class="d-flex p-1 ">
                        <div class="btn c1 bgc4 fon3 col-sm-12 p-2   text-center  btnend" data-bs-toggle="modal" data-bs-target="#superhume97">Request a sample</div>
 

                        <div class="modal" id="superhume97">
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
                                                Product: <input name="product" type="text" value="Superhume 97+" class="form-control mx-auto d-block">
                                                Name : <input name="name" type="text" class="form-control mx-auto d-block">
                                                E-mail: <input name="mail" type="text" class="form-control mx-auto d-block">
                                                Message : <input name="mess" type="text" class="form-control mx-auto d-block">
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




        <div class="container pt-5">
            <div class="row">
            



                <div class="col-sm-6 ">
                    <img src="style_sheets/pictures/microhumeplu.png" width="100%" class="nodrag scale sha wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">

                    <div class="d-flex p-1 ">
                        <div class="btn c1 bgc4 fon3 col-sm-12 p-2   text-center  btnend" data-bs-toggle="modal" data-bs-target="#microhumeplus">Request a sample</div>
   

                        <div class="modal" id="microhumeplus">
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
                                                Product: <input name="product" type="text" value="Microhume Plus" class="form-control mx-auto d-block">
                                                Name : <input name="name" type="text" class="form-control mx-auto d-block">
                                                E-mail: <input name="mail" type="text" class="form-control mx-auto d-block">
                                                Message : <input name="mess" type="text" class="form-control mx-auto d-block">
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




                <div class="col-sm-6 p-3 wow fadeInDown " data-wow-duration="1.5s" data-wow-delay=".8s">
                    <h1 class="fon1 tu c5">MICRO HUME PLUS</h1>
                    <div class="fon2 "><b> (Humic acid 6% min)</b></div>
                    <ul class="pt-4 fon2"> <h5 class="fon1">Benifits:</h5>
                        <li>Activates better seed germination</li>
                        <li>Enhance seeding vigour & root growth.</li>
                        <li>Improves microbial activity in soil .</li>
                        <li>Stimulates root initiation and root growth </li>
                        <li>Increases nutrient uptake </li>
                        <li>Improves the texture and structure of soil </li>
                        <li>They chelate harmful toxins in soil </li>
                        <li>Improves water retention capacity of soil </li>
                        <li>Resulting in higher yield & better quality of the produce</li>
                  </ul><h5 class="fon2 px-2">Dosage:</h5>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Foliar application Dosage: 2.5 ml to 3 ml per lit of water.</div>
                    </div>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Soil/ Drip application : 5 to 10 lit per acre</div>
                    </div>
                </div>




                <div class="col-sm-6 p-3 wow fadeInDown  order-2 order-lg-1" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <h1 class="fon1 tu c5">MICROSTAR</h1>
                    <div class="fon2 "><b> (Protein Hydrolysate 6% min Granule)</b></div>
                    <ul class="pt-4 fon2"> <h5 class="fon1">Benifits:</h5>
                        <li>Higher intake of nutrients.</li>
                        <li>Increases the production and quality of the crop</li>
                        <li>Photosynthesis process is enhanced & leads to better synthesis of chlorophyll & helps to improve yield. </li>
                        <li>Reduces flower & fruit drop.</li>
                        <li>Improves yield & keeping quality of the produce.</li>
                  </ul><h5 class="fon2 px-2">Dosage:</h5>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Soil application Dosage: 20 kg per Acre. Repeat once in every month for continuous flowering crop</div>
                    </div>

                </div>

                <div class="col-sm-6 pt-5 wow fadeInLeft order-1" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <img src="style_sheets/pictures/microstar.png" class="nodrag scale sha" width="100%">
                    <div class="d-flex p-1 ">
                        <div class="btn c1 bgc4 fon3 col-sm-12 p-2   text-center  btnend" data-bs-toggle="modal" data-bs-target="#microstar">Request a sample</div>
 


                        <div class="modal" id="microstar">
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
                                                Product: <input name="product" type="text" value="Microstar" class="form-control mx-auto d-block">
                                                Name : <input name="name" type="text" class="form-control mx-auto d-block">
                                                E-mail: <input name="mail" type="text" class="form-control mx-auto d-block">
                                                Message : <input name="mess" type="text" class="form-control mx-auto d-block">
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




        <div class="container pt-5">
            <div class="row">
            


                <div class="col-sm-6 ">
                    <img src="style_sheets/pictures/bioticpowerstar.png" width="100%" class="nodrag scale sha wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">

                    <div class="d-flex p-1 ">
                        <div class="btn c1 bgc4 fon3 col-sm-12 p-2   text-center  btnend" data-bs-toggle="modal" data-bs-target="#bioticpowerstar">Request a sample</div>
      

                        <div class="modal" id="bioticpowerstar">
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
                                                Product: <input name="product" type="text" value="Biotic Power Star" class="form-control mx-auto d-block">
                                                Name : <input name="name" type="text" class="form-control mx-auto d-block">
                                                E-mail: <input name="mail" type="text" class="form-control mx-auto d-block">
                                                Message : <input name="mess" type="text" class="form-control mx-auto d-block">
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




                <div class="col-sm-6 p-3 wow fadeInDown " data-wow-duration="1.5s" data-wow-delay=".8s">
                    <h1 class="fon1 tu c5">BIOTIC POWER STAR</h1>
                    <div class="fon2 "><b> (Protein Hydrolysate 5 % min Granule)</b></div>
                    <ul class="pt-4 fon2"> <h5 class="fon1">Benifits:</h5>
                        <li>Higher intake of nutrients.</li>
                        <li>Increases the production and quality of the crop</li>
                        <li>Photosynthesis process is enhanced & leads to better synthesis of chlorophyll & helps to improve yield.</li>
                        <li>Reduces flower & fruit drop.</li>
                        <li>Improves yield & keeping quality of the produce.</li>
                        <li>Improves the texture and structure of soil </li>
                        <li>They chelate harmful toxins in soil </li>
                        <li>Improves water retention capacity of soil </li>
                        <li>Resulting in higher yield & better quality of the produce</li>
                  </ul><h5 class="fon2 px-2">Dosage:</h5>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Soil application Dosage: 20 kg per Acre.
                            Repeat once in every month for continuous flowering crop
                        </div>
                    </div>
                </div>




                <div class="col-sm-6 p-3 wow fadeInDown  order-2 order-lg-1" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <h1 class="fon1 tu c5">VIRISTA</h1>
                    <div class="fon2 "><b>(Fulvic acid 8% Liquid)</b></div>
                    <ul class="pt-4 fon2"> <h5 class="fon1">Benifits:</h5>
                        <li>Increases the yield and improves plant quality.</li>
                        <li>Increases the cation exchange capacity (CEC) in soil.</li>
                        <li>Easy to handle, with good technical compatibility and miscibility with other additives.</li>
                        <li>Stimulates enzymatic activity and increases the plant’s own defences against abiotic Stress factors.</li>
                        <li>Promotes the collection and transport of micronutrients contained in leaf fertilizers.</li>
                        <li>Acts as an antioxidant against free radicals and thus prevents cellular damage.</li>
                        <li>Boosts  the  immune   system of the   plants</li>
                  </ul><h5 class="fon2 px-2">Dosage:</h5>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Foliar application Dosage: 2.5 ml to 3 ml per lit of water.</div>
                    </div>

                </div>

                <div class="col-sm-6 pt-5 wow fadeInLeft order-1" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <img src="style_sheets/pictures/virista.png" class="nodrag scale sha" width="100%">
                    <div class="d-flex p-1 ">
                        <div class="btn c1 bgc4 fon3 col-sm-12 p-2   text-center  btnend" data-bs-toggle="modal" data-bs-target="#virista">Request a sample</div>
      

                        <div class="modal" id="virista">
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
                                                Product: <input name="product" type="text" value="Virista" class="form-control mx-auto d-block">
                                                Name : <input name="name" type="text" class="form-control mx-auto d-block">
                                                E-mail: <input name="mail" type="text" class="form-control mx-auto d-block">
                                                Message : <input name="mess" type="text" class="form-control mx-auto d-block">
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





        <div class="container pt-5">
            <div class="row">
            

                <div class="col-sm-6 ">
                    <img src="style_sheets/pictures/vitak10.png" width="100%" class="nodrag scale sha wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">

                    <div class="d-flex p-1 ">
                        <div class="btn c1 bgc4 fon3 col-sm-12 p-2   text-center  btnend" data-bs-toggle="modal" data-bs-target="#vitak10">Request a sample</div>


                        <div class="modal" id="vitak10">
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
                                                Product: <input name="product" type="text" value="Vita k10" class="form-control mx-auto d-block">
                                                Name : <input name="name" type="text" class="form-control mx-auto d-block">
                                                E-mail: <input name="mail" type="text" class="form-control mx-auto d-block">
                                                Message : <input name="mess" type="text" class="form-control mx-auto d-block">
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




                <div class="col-sm-6 p-3 wow fadeInDown " data-wow-duration="1.5s" data-wow-delay=".8s">
                    <h1 class="fon1 tu c5">VITA K10</h1>
                    <div class="fon2 "><b> ( Protein Hydrolysate & Amino acid 6%, Seaweed Extract ( as K2O) – 10% )</b></div>
                    <ul class="pt-4 fon2"> <h5 class="fon1">Benifits:</h5>
                        <li>Helps in conversion of plant nitrogen in to amino  acid and protein </li>
                        <li>Maintains   the water  contents  of plant cells </li>
                        <li>Prevents  lodging </li>
                        <li>Increases  the  Pod size  , grain  size  and weight </li>
                        <li>Enhances  the   colour and the  size  of  fruits   and vegetables  .</li>
                        <li>Ultimately increases  the  yield  and marketable  value  of the product     </li>
                  </ul><h5 class="fon2 px-2">Dosage:</h5>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">2.5 ml per lit of water.
                        </div>
                    </div>
                </div>




                <div class="col-sm-6 p-3 wow fadeInDown  order-2 order-lg-1" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <h1 class="fon1 tu c5">NUTRAL</h1>
                    <ul class="pt-4 fon2"> <h5 class="fon1">Benifits:</h5>
                        <li>Act as water pH controller</li>
                        <li>Has wetting property and spreading property giving greater coverage and hence increased efficacy.</li>
                        <li>Neutralizes the hardness and decreases EC of spray water</li>
                        <li>As acidifier makes spray solutions acidic which penetrate well to enhance the spray performance</li>
                        <li>Is effective across the whole spectrum of products – fungicides, insecticides, herbicides, foliar </li>
                        <li>nutrients & PGRs</li>
                  </ul><h5 class="fon2 px-2">Dosage:</h5>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">Foliar application Dosage : 0.5ml to 2ml per lit of water depends upon spray water.</div>
                    </div>

                </div>

                <div class="col-sm-6 pt-5 wow fadeInLeft order-1" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <img src="style_sheets/pictures/nutral.png" class="nodrag scale sha" width="100%">
                    <div class="d-flex p-1 ">
                        <div class="btn c1 bgc4 fon3 col-sm-12 p-2   text-center  btnend" data-bs-toggle="modal" data-bs-target="#nutral">Request a sample</div>
    

                        <div class="modal" id="nutral">
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
                                                Product: <input name="product" type="text" value="Nutral" class="form-control mx-auto d-block">
                                                Name : <input name="name" type="text" class="form-control mx-auto d-block">
                                                E-mail: <input name="mail" type="text" class="form-control mx-auto d-block">
                                                Message : <input name="mess" type="text" class="form-control mx-auto d-block">
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



        <div class="container pt-5">
            <div class="row">
            

                <div class="col-sm-6">
                    <img src="style_sheets/pictures/spredwell.png" width="100%" class="nodrag scale sha wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">

                    <div class="d-flex p-1 ">
                        <div class="btn c1 bgc4 fon3 col-sm-12 p-2   text-center  btnend" data-bs-toggle="modal" data-bs-target="#spredwell">Request a sample</div>


                        <div class="modal" id="spredwell">
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
                                                Product: <input name="product" type="text" value="Spredwell" class="form-control mx-auto d-block">
                                                Name : <input name="name" type="text" class="form-control mx-auto d-block">
                                                E-mail: <input name="mail" type="text" class="form-control mx-auto d-block">
                                                Message : <input name="mess" type="text" class="form-control mx-auto d-block">
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




                <div class="col-sm-6 p-3 wow fadeInDown " data-wow-duration="1.5s" data-wow-delay=".8s">
                    <h1 class="fon1 tu c5">SPREADWELL</h1>
                    <ul class="pt-4 fon2"> <h5 class="fon1">Benifits:</h5>
                        <li> Non Iconic wetting agent cum spreading agent</li>
                        <li>Prevents Waste full Run-off</li>
                        <li>Allows Uniform Spread of Spray Deposit</li>
                        <li>Improves Spray Adherence on Hostile lead Surfaces</li>
                        <li>Improves Permeation into Leaf Membranes</li>
                        <li>Can be Mixed with all insecticide, Bio – products, fungicides, Micro Nutrients, Plant Nutrients </li>
                        <li>NPK Foliar Fertilizers & Weedicides</li>
                  </ul><h5 class="fon2 px-2">Dosage:</h5>
                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">50ml per 100 litres of water for low volume spray
                        </div>
                    </div>                    <div class="col-sm-12 p-2 ">
                        <div class="btn bgc8  mx-auto d-block c1 yelbtn fon3">25ml per 50 litres of water for high volume spray
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

    <!--  script's  -->

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
</body></html>
