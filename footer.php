<footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <nav class="footer__nav nav">
                    <ul class="nav__list">
                        <li class="nav__list-item"><a class="nav__link" href="https://ru.wikipedia.org">About Us</a></li>
                        <li class="nav__list-item"><a class="nav__link" href="https://www.gismeteo.by/weather-minsk-4248/">How it Works</a></li>
                        <li class="nav__list-item"><a class="nav__link" href="https://dodopizza.by/">FAQ</a></li>
                        <li class="nav__list-item"><a class="nav__link" href="https://dominos.by/">Contact Us</a></li>
                        <li class="nav__list-item"><a class="nav__link" href="https://pzz.by/">Privacy Policy</a></li>
                    </ul>
                </nav>
                <a href="<?php echo home_url();?>">
                    <img class="logo" src="<?php bloginfo( 'template_url' ); ?> ./assets/img/logo-arch.svg" alt="logo">
                </a>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

    <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./libs/Magnific-Popup/jquery.magnific-popup.min.js"></script>
    <script src="./libs/slick/slick.min.js"></script>
    <script src="./js/main.js"></script>-->
</body>
</html>