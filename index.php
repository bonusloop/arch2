<?php get_header(); ?>

    <section class="main">
        <div class="container">
            <h1 class="main__title"><?php the_field('main__title'); ?><span>House</span></h1>
            <div class="main__inner">
                <div class="main__wrapper">
                    <p class="main__text"><?php the_field('main__text'); ?></p>
                    <button class="main__btn btn">Free Consultation</button>
                </div>
                <img class="main__img" src="<?php the_field('main__img'); ?>" alt="main-img">
            </div>
        </div>
    </section>

    <section class="gallery" id="gallery">
        <div class="container">
            <h2 class="gallery__title title">Build professional valuable room for you</h2>
            <div class="gallery-inner">
                <a class="gallery__link" href="<?php echo IMG_DIR; ?>/image-1.png" title="image-1"><img class="gallery__img" src="<?php echo IMG_DIR; ?>/image-1.png" alt=""></a>
                <a class="gallery__link" href="<?php echo IMG_DIR; ?>/image-2.png" title="image-2"><img class="gallery__img" src="<?php echo IMG_DIR; ?>/image-2.png" alt=""></a>
                <a class="gallery__link" href="<?php echo IMG_DIR; ?>/image-3.png" title="image-3"><img class="gallery__img" src="<?php echo IMG_DIR; ?>/image-3.png" alt=""></a>
                <a class="gallery__link" href="<?php echo IMG_DIR; ?>/image-4.png" title="image-4"><img class="gallery__img" src="<?php echo IMG_DIR; ?>/image-4.png" alt=""></a>
                <a class="gallery__link" href="<?php echo IMG_DIR; ?>/image-5.png" title="image-5"><img class="gallery__img" src="<?php echo IMG_DIR; ?>/image-5.png" alt=""></a>
                <a class="gallery__link" href="<?php echo IMG_DIR; ?>/image-6.png" title="image-6"><img class="gallery__img" src="<?php echo IMG_DIR; ?>/image-6.png" alt=""></a>
            </div>
        </div>
    </section>

    <section class="features" id="features">
        <div class="container">
            <h2 class="features__title title">Build your needs with Archmove</h2>
            <div class="features__inner">
                <img class="features__img" src="<?php echo IMG_DIR; ?>/Features-section.png" alt="">
                <div class="features__wrapper">

                    <div class="features__feature feature">
                        <div class="features__icon-box">
                            <img src="<?php echo IMG_DIR; ?>/icon-1.svg" alt="">
                        </div>
                        <div class="feature__info">
                            <h3 class="feature__title">100% guaranteed project completion</h3>
                            <p class="feature__text">Build safe, comfortable and transparent with a project management application with a joint account.</p>
                        </div>
                    </div>

                    <div class="features__feature feature">
                        <div class="features__icon-box">
                            <img src="<?php echo IMG_DIR; ?>/icon-2.svg" alt="">
                        </div>
                        <div class="feature__info">
                            <h3 class="feature__title">No additional fees</h3>
                            <p class="feature__text">There are no hidden costs. The value of the offer you get is the value you paid.</p>
                        </div>

                    </div>
                    <div class="features__feature feature">
                        <div class="features__icon-box">
                            <img src="<?php echo IMG_DIR; ?>/icon-3.svg" alt="">
                        </div>
                        <div class="feature__info">
                            <h3 class="feature__title">Get escort from the Team</h3>
                            <p class="feature__text">Monitor reports from the Arsitag team who check directly in the field.</p>
                        </div>
                    </div>

                    <button class="features__btn btn">CONSULTATION</button>
                </div>
            </div>
        </div>
    </section>
        
    <section class="reviews" id="reviews">
        <div class="container">
            <div class="reviews-top">
                <h2 class="reviews-top__title title">Sound Too Good To Be True?</h2>
                <div class="reviews-slider" >

                    <div class="reviews-slider__item">
                        <p class="review__text">
                            We just wanted to thank you for this fantastic website! We are so grateful for being able to advertise our Petite cabin and receive feedback from people from all over the U.S. and even further.
                        </p>
                        <div class="review__autor">
                            <span class="review__autor-name">Adam Morph</span> ??? <span class="review__autor-prof"> CEO A lfatech</span>
                        </div>
                    </div>

                    <div class="reviews-slider__item">
                        <p class="review__text">
                            We just wanted to thank you for this fantastic website! We are so grateful for being able to advertise our Petite cabin and receive feedback from people from all over the U.S. and even further.
                        </p>
                        <div class="review__autor">
                            <span class="review__autor-name">Adam Morph</span> ??? <span class="review__autor-prof"> CEO A lfatech</span>
                        </div>
                    </div>
                    
                    <div class="reviews-slider__item">
                        <p class="review__text">
                            We just wanted to thank you for this fantastic website! We are so grateful for being able to advertise our Petite cabin and receive feedback from people from all over the U.S. and even further.
                        </p>
                        <div class="review__autor">
                            <span class="review__autor-name">Adam Morph</span> ??? <span class="review__autor-prof"> CEO A lfatech</span>
                        </div>
                    </div>

                </div>
            </div>

            <div class="reviews-bottom">
                <img class="reviews__img" src="<?php echo IMG_DIR; ?>/Reviews-section.png" alt="">
                <div class="reviews-inner">
                    <h2 class="reviews-bottom__title title">Realize your dream project with <span>Archmove</span></h2>
                    <button class="reviews__btn btn">FREE CONSULTATION</button>
                </div>
            </div>
        </div>

    </section>

    <section class="partners" id="partners">
        <div class="container">
            <div class="partners__inner">
                <h2 class="partners__title title">Our Partners</h2>
                <div class="partners__wrapper">
                    <img class="partners__img" src="<?php echo IMG_DIR; ?>/partner-1.png" alt="">
                    <img class="partners__img" src="<?php echo IMG_DIR; ?>/partner-2.png" alt="">
                    <img class="partners__img" src="<?php echo IMG_DIR; ?>/partner-3.png" alt="">
                    <img class="partners__img" src="<?php echo IMG_DIR; ?>/partner-4.png" alt="">
                    <img class="partners__img" src="<?php echo IMG_DIR; ?>/partner-5.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>