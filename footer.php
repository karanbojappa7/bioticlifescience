    <footer>
        <div class="container pb-2">
            <div class="row">
                <div class="col-sm-4 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <div class="col-sm-8 mx-auto pb-4"><img class="bgc1 p-3 nodrag" src="style_sheets/pictures/logo.png" width="100%"></div>
                    <div class="c1 p-2 fon3">Biotic Life Sciences (India) Pvt. Ltd.has strategic collaborations with internationally reputed organisations whose global presence and wide spectrum experience in agriculture related products gives the farmers the most effective organic agri inputs.</div>
                </div>

                <div class="col-sm-2 pt-5 mt-5 c1 nmnp fon3 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <h4 class="tu fon2">Quick links</h4>
                    <a href="index.php"><div class="c1 p-1">HOME</div></a>
                    <a href="profile.php"><div class="c1 p-1">PROFILE</div></a>
                    <a href="product.php"><div class="c1 p-1">PRODUCT</div></a>
                    <a href="enquiry.php"><div class="c1 p-1">ENQURY</div></a>
                    <a href="contact.php"><div class="c1 p-1">CONTACT US</div></a>
                </div>

                <div class="col-sm-3 c1 pt-5 mt-5 nmnp wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <h4 class="px-3 fon2">ADDRESS</h4>
                    <div class="px-3 fon3">Biotic Life Sciences (India) Ltd. Pvt.
                        J-155, vaniga Valagam, Mattuthavani,
                        Madurai - 625 007. India
                        Tel : +91 452 2586633, Fax : +91 452 2587733
                        Email : bioticlifescience@gmail.com</div>
                    <div class="pt-2 px-3 mb-3">
                        <a href="#" target="_blank"><i class="c1 soc  fab fa-facebook-square"></i></a>
                        <a href="#" target="_blank"><i class="c1 soc px-1 fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="c1 soc px-1 fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-sm-3 pt-5 mt-5 nmnp wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <h4 class="c1 fon2 px-3">Need a Sample</h4>
                    <form class="m-2" name="form" role="form" method="post" enctype="multipart/form-data" id="commentform" action="contactform.php">
                        <input name="name" type="text" placeholder="Name" class="form-control m-2 fon3">
                        <input name="mail" type="email" placeholder="Email id" class="form-control m-2 fon3">
                        <input name="product" type="text" placeholder="Product Name" class="form-control m-2 fon3">
                        <input name="num" type="text" placeholder="Mobile Number" class="form-control m-2 fon3">
                        <div class="col-sm-6 mx-2">
                            <img src="captcha.php" class="capim mb-2 bgc5" />
                            <input type="text" class="chumcha" name="captcha" id="captcha" maxlength="6" size="15" placeholder="captcha...." required="required" />
                        </div>
                        <input name="submit" id="submit" type="submit"  class="mx-2 btn bgc5 mt-2 c1 col-sm-12" value="submit">
                    </form>
                </div>

            </div>

            <div class="footline wow fadeInLeft mt-3" data-wow-duration="1.5s" data-wow-delay="1s">
            </div>
            <div class="c1 text-end p-3 mt-2 tu fon3 wow fadeInDown" data-wow-duration="2s" data-wow-delay="1.2s">
                Disclaimer | Privacy Policy | Terms of Services | Sitemap</div>

        </div>
    </footer>

    <div class="cpy p-3 fon3">
        <div class="text-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.5s">Copyright © 2022 bioticLife.sciencec All rights reserved. Designed by <span class="e9"><a href="https://enternine.com/" class="e9" target="_blank">E9DS</a></span></div>
    </div>

      <div class="btn upbtn">
                <i class="fa fa-caret-up" aria-hidden="true"></i>
            </div>
        <script>
        $(document).ready(function() {
            $('.upbtn').click(function() {
                $('html,body').animate({
                    scrollTop: $('.wnav').offset().top
                }, 200);
            });
        });

    </script>
    
        <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                var upbtn = $(window).scrollTop();
                if (upbtn > 0) {
                    $(".upbtn").css("opacity", "1");
                    $(".upbtn").css("transition", ".5s");
                } else {
                    $(".upbtn").css("opacity", "0");
                    $(".upbtn").css("transition", ".5s");
                }
            });
        });

    </script>
