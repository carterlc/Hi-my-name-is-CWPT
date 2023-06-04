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
                    <?php
                        // Get the ACF field values
                        $other_projects = get_field('other_project_1');
                        if ($other_projects && !empty($other_projects['other_project_image_1']) && !empty($other_projects['other_project_image_1_url'])) {
                            $other_project_image_1 = $other_projects['other_project_image_1'];
                            $other_project_image_1_url = $other_projects['other_project_image_1_url'];
                        ?>
                            <a href="<?php echo $other_project_image_1_url; ?>">
                                <img src="<?php echo $other_project_image_1['url']; ?>" alt="<?php echo $other_project_image_1['alt']; ?>">
                                <div class="project__item-overlay">
                                    <div class="overlay-text">Click Me!</div>
                                </div>
                            </a>
                    <?php } ?>
                </div>
                <div class="project__item">
                    <?php
                        // Get the ACF field values
                        $other_projects = get_field('other_project_2');
                        if ($other_projects && !empty($other_projects['other_project_image_2']) && !empty($other_projects['other_project_image_2_url'])) {
                            $other_project_image_2 = $other_projects['other_project_image_2'];
                            $other_project_image_2_url = $other_projects['other_project_image_2_url'];
                        ?>
                            <a href="<?php echo $other_project_image_2_url; ?>">
                                <img src="<?php echo $other_project_image_2['url']; ?>" alt="<?php echo $other_project_image_2['alt']; ?>">
                                <div class="project__item-overlay">
                                    <div class="overlay-text">Click Me!</div>
                                </div>
                            </a>
                    <?php } ?>
                </div>
                <div class="project__item">
                    <?php
                        // Get the ACF field values
                        $other_projects = get_field('other_project_3');
                        if ($other_projects && !empty($other_projects['other_project_image_3']) && !empty($other_projects['other_project_image_3_url'])) {
                            $other_project_image_3 = $other_projects['other_project_image_3'];
                            $other_project_image_3_url = $other_projects['other_project_image_3_url'];
                        ?>
                            <a href="<?php echo $other_project_image_3_url; ?>">
                                <img src="<?php echo $other_project_image_3['url']; ?>" alt="<?php echo $other_project_image_3['alt']; ?>">
                                <div class="project__item-overlay">
                                    <div class="overlay-text">Click Me!</div>
                                </div>
                            </a>
                    <?php } ?>
                </div>
            <div class="project__item">
                    <?php
                        // Get the ACF field values
                        $other_projects = get_field('other_project_4');
                        if ($other_projects && !empty($other_projects['other_project_image_4']) && !empty($other_projects['other_project_image_4_url'])) {
                            $other_project_image_4 = $other_projects['other_project_image_4'];
                            $other_project_image_4_url = $other_projects['other_project_image_4_url'];
                        ?>
                            <a href="<?php echo $other_project_image_4_url; ?>">
                                <img src="<?php echo $other_project_image_4['url']; ?>" alt="<?php echo $other_project_image_4['alt']; ?>">
                                <div class="project__item-overlay">
                                    <div class="overlay-text">Click Me!</div>
                                </div>
                            </a>
                    <?php } ?>
                </div>
                <div class="project__item">
                    <?php
                        // Get the ACF field values
                        $other_projects = get_field('other_project_5');
                        if ($other_projects && !empty($other_projects['other_project_image_5']) && !empty($other_projects['other_project_image_5_url'])) {
                            $other_project_image_5 = $other_projects['other_project_image_5'];
                            $other_project_image_5_url = $other_projects['other_project_image_5_url'];
                        ?>
                            <a href="<?php echo $other_project_image_5_url; ?>">
                                <img src="<?php echo $other_project_image_5['url']; ?>" alt="<?php echo $other_project_image_5['alt']; ?>">
                                <div class="project__item-overlay">
                                    <div class="overlay-text">Click Me!</div>
                                </div>
                            </a>
                    <?php } ?>
                </div>

                <!-- <div class="project__item">
                <a href="">
                        <img src="assets/images/P2INNACLE_LOGO-50.jpg" alt="ProjectImage">
                        <div class="project__item-overlay">
                            <div class="overlay-text">Hover me!</div>
                        </div>
                    </a>
                </div> -->
        </div>
    </section>