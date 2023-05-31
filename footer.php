<?php 

?>


<section style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/noise.png), 
        url(<?php echo get_template_directory_uri(); ?>/assets/images/blurry-white-black.svg);"
        id="contact" class="contact accent">
        <div class="section__container">
            <div class="contact__container">
                <h2>Get in touch</h2>
                <p>Im tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent
                    taciti
                    sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus
                    enim egestas,
                </p>
                <button class="contact_btn" role="button"><span class="text">Shoot me an email!</span><span>Thank
                        you!</span></button>
                <div class="socials">
                    <ul class="social-list">
                        <li class="social-list__item">
                            <a class="social-list__link" href="https://codepen.io">
                                <i class="fab fa-codepen"></i>
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a class="social-list__link" href="http://dribbble.com">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a class="social-list__link" href="https://twitter.com">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a class="social-list__link" href="https://github.com">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </ul>
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