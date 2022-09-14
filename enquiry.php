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
        .enquiry{
            color: #026635;
        }
    </style>
    
    
</head>

<body>
    <?php include "header.php" ?>

    <div class="col-sm-12 enqbg">
        <div class="enq pt-5 pb-5">
            <h1 class="fon1 text-center c1 fpad my-auto p-5">Enquiry</h1>
        </div>
    </div>

    <section id="enquiry">

        <div class="container pt-5">
            <div class="row">
                <div class="col-sm-6 pt-5">
                    <h2 class="fon1"> Enquiry</h2>
                    <form class="p-2 m-2" name="form" role="form" method="post" enctype="multipart/form-data" id="commentform" action="contactform.php">
                        <div class="form-group p-2">
                            <label class="c9" for="name">Name:</label>
                            <input name="name" type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group p-2">
                            <label class="c9" for="mail">Email:</label>
                            <input name="mail" type="email" class="form-control" id="mail">
                        </div>
                        <div class="form-group p-2">
                            <label class="c9" for="mail">Phone Number:</label>
                            <input name="num" type="text" class="form-control" id="mail">
                        </div>
                        <div class="form-group p-2">
                            <label class="c9" for="comment">Address:</label>
                            <textarea name="add" class="form-control" rows="5" id="comment"></textarea>
                        </div>                       
                        <div class="form-group p-2">
                            <label class="c9" for="comment">Comment:</label>
                            <textarea name="mess" class="form-control" rows="5" id="comment"></textarea>
                        </div>
                        <div class="col-sm-6 mt-2 mx-2">
                            <img src="captcha.php" class="capim mb-2" />
                            <input type="text" class="chumcha mt-2" name="captcha" id="captcha" maxlength="6" size="15" placeholder="captcha...." required="required" />
                        </div>
                        
                         <input name="submit" id="submit" type="submit"  class="btn btn-block bgc5 m-2 col-sm-12 c1" value="submit">

                    </form>

                </div>
                
                <div class="col-sm-6 p-4">
                    <img src="style_sheets/pictures/enq.jpg" class="sha nodrag" width="100%">
                </div>
                
                
            </div>
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
