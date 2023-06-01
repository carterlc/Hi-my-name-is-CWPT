<?php
/*
 * Template Name: Landing Template
 */
?>

<?php
    get_header();
?>

    <!-- Introduction -->
    <section style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/noise.png), 
        url(<?php echo get_template_directory_uri(); ?>/assets/images/blurry-white-red.svg);"
        id="home" class="intro dark">
        <div class="section__container">
            <div class="heading__container">
                <h1>Hi, my name is Carter.</h1>
                <div class="heading__container-bottom">
                    <p class="sub-heading dash light">A<span class="accent-text"> front-end </span>web
                        developer/designer</p>
                    <div class="socials">


                    <?php

                        wp_nav_menu(
                            array(
                                'menu' => 'hero',
                                'container' => '',
                                'theme_location' => 'Hero social icons',
                                'items_wrap' => '<ul id="" class="social-list">%3$s</ul>'
                            )
                        );

                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/noise.png), 
        url(<?php echo get_template_directory_uri(); ?>/assets/images/blurry-red-black.svg);"
        id="about" class="about light">
        <div class="section__container">
            <div class="about__container">
                <div class="heading__container">
                    <h2>About me</h2>
                    <p class="sub-heading dash dark">My story</p>
                    <p class="about-me-txt">My name is Carter, and I am a student trying to get into the web design
                        industry. Born and raised
                        on
                        a
                        farm
                        in Saskatchewan I found love in technology and design. These two interests led me to
                        pursuing a
                        diploma
                        in
                        Interactive design and Technology through Saskatchewan Polytechnic. Over my time at Sask
                        Poly I
                        have
                        gathered experience in HTML, CSS, JavaScript and PHP. By using these tools, along with my
                        design
                        skills,
                        I
                        am able to make good looking interactable websites that are also responsive. Some things I
                        enjoy
                        other
                        than
                        creating interactive websites are fishing, skating, and playing video games.</p>
                </div>
                <img src="assets/linkedin_portrait_400px_2.jpg" alt="portrait">
            </div>
        </div>
    </section>
    <section style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/noise.png), 
        url(<?php echo get_template_directory_uri(); ?>/assets/images/blurry-white.svg);"
        id="tools" class="tools dark">
        <div class="tools__heading">
            <h2>My toolbox</h2>
            <p class="sub-heading">Here is what I have learned since becoming a web developer</p>
        </div>
        <div class="slider">
            <div class="slider__container">
                <img src="assets/DailyDose.png" alt="">
                <img src="assets/DailyDose.png" alt="">
                <img src="assets/DailyDose.png" alt="">
                <img src="assets/DailyDose.png" alt="">
                <img src="assets/DailyDose.png" alt="">
            </div>
        </div>
    </section>
    <section style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/noise.png), 
        url(<?php echo get_template_directory_uri(); ?>/assets/images/blurry-red-black.svg);"
        class="services light">
        <div class="section__container">
            <div class="heading__container">
                <h2>What I Provide</h2>
                <p class="sub-heading dash dark">My Services</p>
            </div>
            <div class="services__container">
                <div class="service__info">
                    <h3><span class="double-fs">1.</span>design</h3>
                    <p>Im tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent
                        taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor
                        purus
                        luctus enim egestas, ac scelerisque ante pulvinar.</p>
                </div>
                <div class="service__info">
                    <h3><span class="double-fs">2.</span>Developement</h3>
                    <p>Im tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent
                        taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor
                        purus
                        luctus enim egestas, ac scelerisque ante pulvinar.</p>
                </div>
                <div class="service__info">
                    <h3><span class="double-fs">3.</span>CMS Management</h3>
                    <p>Im tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent
                        taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor
                        purus
                        luctus enim egestas, ac scelerisque ante pulvinar.</p>
                </div>
            </div>
        </div>
    </section>
    <section style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/noise.png), 
        url(<?php echo get_template_directory_uri(); ?>/assets/images/blurry-white-red.svg);"
        id="projects" class="projects dark">
        <div class="section__container">
            <div class="projects__container">
                <div class="heading__container grid-item-1">
                    <h2>Website</h2>
                    <p class="sub-heading dash light">Development</p>
                </div>
                <div class="grid-item-2">
                    <img src="assets/DailyDose.png" alt="">
                </div>
                <div class="projects__description dash light grid-item-3">
                    <div class="project__title">
                        <h3 class="x-large">1.</h3>
                        <h3>NASA POTD</h3>
                    </div>
                    <p>Im tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent
                        taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor
                        purus
                        luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus
                        nisl,
                        eu tempor urna. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia.
                        Aliquam in elementum tellus.
                    </p>
                    <button class="project__button">
                        <span>More Details</span>
                        <svg width="34" height="34" viewbox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle stroke="black" stroke-width="3"></circle>
                            <path
                                d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"
                                fill="black"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/noise.png), 
        url(<?php echo get_template_directory_uri(); ?>/assets/images/blurry-red-black.svg);"
        class="projects light">
        <div class="section__container">
            <div class="projects__container">
                <div class="heading__container grid-item-1">
                    <h2>Branding</h2>
                    <p class="sub-heading dash dark">Design</p>
                </div>
                <div class="grid-item-2">
                    <img src="assets/P2INNACLE_LOGO-50.jpg" alt="">
                </div>
                <div class="projects__description dash dark grid-item-3">
                    <div class="project__title">
                        <h3 class="x-large">2.</h3>
                        <h3>P2 Logo</h3>
                    </div>
                    <p>Im tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent
                        taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor
                        purus
                        luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus
                        nisl,
                        eu tempor urna. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia.
                        Aliquam in elementum tellus.
                    </p>
                    <button class="project__button">
                        <span>More Details</span>
                        <svg width="34" height="34" viewbox="0 0 74 74" fill="black" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"
                                fill="black"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/noise.png), 
        url(<?php echo get_template_directory_uri(); ?>/assets/images/blurry-white-red.svg);"
        id="other" class="other dark">
        <div class="section__container">
            <div class="heading__container">
                <h2>Other projects</h2>
                <p class="sub-heading dash light">almost there...</p>
            </div>
            <div class="other__projects">
                <div class="project__item">
                    <a href="#">
                        <img src="assets/P2INNACLE_LOGO-50.jpg" alt="ProjectImage">
                        <div class="project__item-overlay">
                            <div class="overlay-text">Hover me!</div>
                        </div>
                    </a>
                </div>
                <div class="project__item">
                    <a href="#">
                        <img src="assets/P2INNACLE_LOGO-50.jpg" alt="ProjectImage">
                        <div class="project__item-overlay">
                            <div class="overlay-text">Hover me!</div>
                        </div>
                    </a>
                </div>
                <div class="project__item">
                    <a href="#">
                        <img src="assets/P2INNACLE_LOGO-50.jpg" alt="ProjectImage">
                        <div class="project__item-overlay">
                            <div class="overlay-text">Hover me!</div>
                        </div>
                    </a>
                </div>
                <div class="project__item">
                    <a href="#">
                        <img src="assets/P2INNACLE_LOGO-50.jpg" alt="ProjectImage">
                        <div class="project__item-overlay">
                            <div class="overlay-text">Hover me!</div>
                        </div>
                    </a>
                </div>
                <div class="project__item">
                    <a href="#">
                        <img src="assets/P2INNACLE_LOGO-50.jpg" alt="ProjectImage">
                        <div class="project__item-overlay">
                            <div class="overlay-text">Hover me!</div>
                        </div>
                    </a>
                </div>
                <div class="project__item">
                    <a href="#">
                        <img src="assets/P2INNACLE_LOGO-50.jpg" alt="ProjectImage">
                        <div class="project__item-overlay">
                            <div class="overlay-text">Hover me!</div>
                        </div>
                    </a>
                </div>
                <div class="project__item">
                    <a href="#">
                        <img src="assets/P2INNACLE_LOGO-50.jpg" alt="ProjectImage">
                        <div class="project__item-overlay">
                            <div class="overlay-text">Hover me!</div>
                        </div>
                    </a>
                </div>
                <div class="project__item">
                    <a href="#">
                        <img src="assets/P2INNACLE_LOGO-50.jpg" alt="ProjectImage">
                        <div class="project__item-overlay">
                            <div class="overlay-text">Hover me!</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php
        get_footer();
    ?>
</html>