<?php
/*
 * Template Name: Landing Template
 */
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carterlc</title>

    <!-- My stylesheet -->
    <!-- <link rel="stylesheet" href="css/styling.css"> -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
        integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
    
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Poppins&display=swap"
        rel="stylesheet">

    <!-- <link rel="stylesheet" href="/wp-content/themes/himynameis/style.css"> -->

</head>
<?php
wp_head();
?>
<body>

    <header>
        <div class="logo">
            <svg class="logo-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
                <path class="svg__path" d="M522.5,293.4c-17.8,0-35,2.3-51.4,6.5l0,141.8c13.7-12.3,31.7-19.7,51.4-19.7c29,0,54.2,16,67.4,39.6l112-63.1C666.7,335.7,599.5,293.4,522.5,293.4z"/>
                <path class="svg__path" d="M724.7,613.6C685,684.2,609.5,731.8,522.9,731.8c-127.8,0-231.4-103.6-231.4-231.4c0-127.8,103.6-231.4,231.4-231.4c86.7,0,162.2,47.6,201.8,118.1l4.2-2.4l107.8-60.7C775,214.3,657.6,140.3,522.9,140.3c-198.9,0-360,161.2-360,360c0,198.8,161.1,360,360,360c134.7,0,252.1-74,313.8-183.5L728.9,616L724.7,613.6z"/>
                <path class="svg__path" d="M589.9,536.1c-13.2,23.6-38.4,39.6-67.4,39.6c-42.6,0-77.1-34.5-77.1-77.1l0-190.7c-75.4,30.5-128.6,104.4-128.6,190.7c0,113.6,92.1,205.7,205.7,205.7c77,0,144.2-42.3,179.4-105L589.9,536.1z"/>
            </svg>
        </div>
        <button class="hamburger-nav" aria-label="toggle navigation">
            <svg class="hamburger" viewbox="0 0 100 100" width="50">
                <rect class="line top" width="60" height="8" x="10" y="20"></rect>
                <rect class="line middle" width="60" height="8" x="10" y="50"></rect>
                <rect class="line bottom" width="60" height="8" x="10" y="80"></rect>
            </svg>
        </button>
        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item"><a href="#home" class="nav__link dash accent">Home</a></li>
                <li class="nav__item"><a href="#about" class="nav__link dash accent">About</a></li>
                <li class="nav__item"><a href="#projects" class="nav__link dash accent">Projects</a></li>
                <li class="nav__item"><a href="#contact" class="nav__link dash accent">Contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- Introduction -->
    <section id="home" class="intro dark">
        <div class="section__container">
            <div class="heading__container">
                <h1>Hi, my name is Carter.</h1>
                <div class="heading__container-bottom">
                    <p class="sub-heading dash light">A<span class="accent-text"> front-end </span>web
                        developer/designer</p>
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
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="about light">
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
    <section id="tools" class="tools dark">
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
    <section class="services light">
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
    <section id="projects" class="projects dark">
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
    <section class="projects light">
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
    <section id="other" class="other dark">
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
    <section id="contact" class="contact accent">
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

    <script src="js/index.js"></script>

</body>

</html>