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
                <div class="project__item">
                    <?php
                        // Get the ACF field values
                        $other_projects = get_field('other_project_6');
                        if ($other_projects && !empty($other_projects['other_project_image_6']) && !empty($other_projects['other_project_image_6_url'])) {
                            $other_project_image_6 = $other_projects['other_project_image_6'];
                            $other_project_image_6_url = $other_projects['other_project_image_6_url'];
                        ?>
                            <a href="<?php echo $other_project_image_6_url; ?>">
                                <img src="<?php echo $other_project_image_6['url']; ?>" alt="<?php echo $other_project_image_6['alt']; ?>">
                                <div class="project__item-overlay">
                                    <div class="overlay-text">Click Me!</div>
                                </div>
                            </a>
                    <?php } ?>
                </div>
                <div class="project__item">
                    <?php
                        // Get the ACF field values
                        $other_projects = get_field('other_project_7');
                        if ($other_projects && !empty($other_projects['other_project_image_7']) && !empty($other_projects['other_project_image_7_url'])) {
                            $other_project_image_7 = $other_projects['other_project_image_7'];
                            $other_project_image_7_url = $other_projects['other_project_image_7_url'];
                        ?>
                            <a href="<?php echo $other_project_image_7_url; ?>">
                                <img src="<?php echo $other_project_image_7['url']; ?>" alt="<?php echo $other_project_image_7['alt']; ?>">
                                <div class="project__item-overlay">
                                    <div class="overlay-text">Click Me!</div>
                                </div>
                            </a>
                    <?php } ?>
                </div>
                <div class="project__item">
                    <?php
                        // Get the ACF field values
                        $other_projects = get_field('other_project_8');
                        if ($other_projects && !empty($other_projects['other_project_image_8']) && !empty($other_projects['other_project_image_8_url'])) {
                            $other_project_image_8 = $other_projects['other_project_image_8'];
                            $other_project_image_8_url = $other_projects['other_project_image_8_url'];
                        ?>
                            <a href="<?php echo $other_project_image_8_url; ?>">
                                <img src="<?php echo $other_project_image_8['url']; ?>" alt="<?php echo $other_project_image_8['alt']; ?>">
                                <div class="project__item-overlay">
                                    <div class="overlay-text">Click Me!</div>
                                </div>
                            </a>
                    <?php } ?>
                </div>
                <div class="project__item">
                    <?php
                        // Get the ACF field values
                        $other_projects = get_field('other_project_9');
                        if ($other_projects && !empty($other_projects['other_project_image_9']) && !empty($other_projects['other_project_image_9_url'])) {
                            $other_project_image_9 = $other_projects['other_project_image_9'];
                            $other_project_image_9_url = $other_projects['other_project_image_9_url'];
                        ?>
                            <a href="<?php echo $other_project_image_9_url; ?>">
                                <img src="<?php echo $other_project_image_9['url']; ?>" alt="<?php echo $other_project_image_9['alt']; ?>">
                                <div class="project__item-overlay">
                                    <div class="overlay-text">Click Me!</div>
                                </div>
                            </a>
                    <?php } ?>
                </div>
                <div class="project__item">
                    <?php
                        // Get the ACF field values
                        $other_projects = get_field('other_project_10');
                        if ($other_projects && !empty($other_projects['other_project_image_10']) && !empty($other_projects['other_project_image_10_url'])) {
                            $other_project_image_10 = $other_projects['other_project_image_10'];
                            $other_project_image_10_url = $other_projects['other_project_image_10_url'];
                        ?>
                            <a href="<?php echo $other_project_image_10_url; ?>">
                                <img src="<?php echo $other_project_image_10['url']; ?>" alt="<?php echo $other_project_image_10['alt']; ?>">
                                <div class="project__item-overlay">
                                    <div class="overlay-text">Click Me!</div>
                                </div>
                            </a>
                    <?php } ?>
                </div>
                <div class="project__item">
                    <?php
                        // Get the ACF field values
                        $other_projects = get_field('other_project_11');
                        if ($other_projects && !empty($other_projects['other_project_image_11']) && !empty($other_projects['other_project_image_11_url'])) {
                            $other_project_image_11 = $other_projects['other_project_image_11'];
                            $other_project_image_11_url = $other_projects['other_project_image_11_url'];
                        ?>
                            <a href="<?php echo $other_project_image_11_url; ?>">
                                <img src="<?php echo $other_project_image_11['url']; ?>" alt="<?php echo $other_project_image_11['alt']; ?>">
                                <div class="project__item-overlay">
                                    <div class="overlay-text">Click Me!</div>
                                </div>
                            </a>
                    <?php } ?>
                </div>
                <div class="project__item">
                    <?php
                        // Get the ACF field values
                        $other_projects = get_field('other_project_12');
                        if ($other_projects && !empty($other_projects['other_project_image_12']) && !empty($other_projects['other_project_image_12_url'])) {
                            $other_project_image_12 = $other_projects['other_project_image_12'];
                            $other_project_image_12_url = $other_projects['other_project_image_12_url'];
                        ?>
                            <a href="<?php echo $other_project_image_12_url; ?>">
                                <img src="<?php echo $other_project_image_12['url']; ?>" alt="<?php echo $other_project_image_12['alt']; ?>">
                                <div class="project__item-overlay">
                                    <div class="overlay-text">Click Me!</div>
                                </div>
                            </a>
                    <?php } ?>
                </div>
        </div>
    </section>