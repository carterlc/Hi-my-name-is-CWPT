<?php 
$email="carterlc@live.ca";
?>
<section style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/noise.png), 
        url(<?php echo get_template_directory_uri(); ?>/assets/images/blurry-white-black.svg);"
        id="contact" class="contact accent">
        <div class="section__container">
            <div class="contact__container">
                <h2 data-aos="fade-in" data-aos-duration="1000">Get in touch</h2>
                <p data-aos="fade-in" data-aos-delay="500" data-aos-duration="1000">Thanks for visiting, for general inquiries please email me at carterlc@live.ca!</p>
                <button class="contact_btn" role="button">
                    <a href="<?php echo esc_url( 'mailto:' . antispambot( $email ) ); ?>">
                        <span class="text">Shoot me an email!</span>
                        <span>Thank you!</span>
                    </a>
                </button>

                <div class="socials">
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'footer',
                            'container' => '',
                            'theme_location' => 'footer',
                            'items_wrap' => '<ul id="" class="social-list">%3$s</ul>'
                        )
                    );
                ?>
                </div>
                <button id="backToTop"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z" />
                    </svg></button>
            </div>
        </div>
    </section>

  <?php
    wp_footer();
  ?>

</body>