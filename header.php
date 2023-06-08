<?php 

?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body>
    <header>
        <div class="logo">
            <?php
                if(function_exists('the_custom_logo')) {

                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                    
                }
            ?>
            <img class="logo-svg" src="<?php echo $logo[0] ?>" alt="logo" ></img>
            <!-- <svg class="logo-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
                <path class="svg__path" d="M522.5,293.4c-17.8,0-35,2.3-51.4,6.5l0,141.8c13.7-12.3,31.7-19.7,51.4-19.7c29,0,54.2,16,67.4,39.6l112-63.1C666.7,335.7,599.5,293.4,522.5,293.4z"/>
                <path class="svg__path" d="M724.7,613.6C685,684.2,609.5,731.8,522.9,731.8c-127.8,0-231.4-103.6-231.4-231.4c0-127.8,103.6-231.4,231.4-231.4c86.7,0,162.2,47.6,201.8,118.1l4.2-2.4l107.8-60.7C775,214.3,657.6,140.3,522.9,140.3c-198.9,0-360,161.2-360,360c0,198.8,161.1,360,360,360c134.7,0,252.1-74,313.8-183.5L728.9,616L724.7,613.6z"/>
                <path class="svg__path" d="M589.9,536.1c-13.2,23.6-38.4,39.6-67.4,39.6c-42.6,0-77.1-34.5-77.1-77.1l0-190.7c-75.4,30.5-128.6,104.4-128.6,190.7c0,113.6,92.1,205.7,205.7,205.7c77,0,144.2-42.3,179.4-105L589.9,536.1z"/>
            </svg> -->
        </div>
        <?php
if (!is_single()) :
    ?>
        <button class="hamburger-nav" aria-label="toggle navigation">
            <svg class="hamburger" viewbox="0 0 100 100" width="50">
                <rect class="line top" width="60" height="8" x="10" y="20"></rect>
                <rect class="line middle" width="60" height="8" x="10" y="50"></rect>
                <rect class="line bottom" width="60" height="8" x="10" y="80"></rect>
            </svg>
        </button>

        <nav class="nav">
                        <?php
                            wp_nav_menu(
                                array(
                                    'menu' => 'primary',
                                    'container' => '',
                                    'theme_location' => 'primary',
                                    'items_wrap' => '<ul id="" class="nav__list">%3$s</ul>'
                                )
                            );
                        ?>
        </nav>
        <?php
endif;
?>
    </header>
