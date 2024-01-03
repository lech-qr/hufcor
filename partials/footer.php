        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 footer-info">
                            <img src="img/logo.png" alt="<?php echo $nazwa ?> - <?php echo $tytul ?>">
                            <p><?php echo $onas ?></p>
                        </div>

                        <div class="col-lg-3 col-md-6 offset-lg-3 footer-contact">
                            <h4>Skontaktuj się z nami</h4>
                            <p>
                                <strong>Adres:</strong><br>
                                <?php echo $adres ?><br>
                                <strong>Telefon:</strong> <a href="tel:<?php echo $telefon ?>"><?php echo $telefon ?></a><br>
                                <strong>Email:</strong> <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a><br>
                            </p>

                            <div class="social-links">
                                <a href="https://www.facebook.com/Hufcor-Polska-101457884766577" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><?php echo $nazwa ?></strong> <?php echo date("Y"); ?>. All Rights Reserved.
                </div>
            </div>
        </footer><!-- #footer -->

        <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/jquery/jquery-migrate.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/superfish/hoverIntent.js"></script>
        <script src="lib/superfish/superfish.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/venobox/venobox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Contact Form JavaScript File -->
        <script src="php/contactform.js"></script>

        <!-- Template Main Javascript File -->
        <script src="js/main.min.js"></script>
    </body>

</html>