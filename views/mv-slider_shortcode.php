<h3><?php echo (!empty($content)) ? esc_html($content) : esc_html(MV_Slider_Settings::$options['mv_slider_title']); ?>
</h3>
<div class="mv-slider flexslider">
    <ul class="slides">
        <?php

        $args = array(
            'post_type' => 'mv-slider',
            'post_status' => 'publish',
            'post__in' => $id,
            'orderby' => $orderby
        );

        $my_query = new WP_Query($args);

        if ($my_query->have_posts()):
            while ($my_query->have_posts()):
                $my_query->the_post();
                ?>
                <li>
                    <div class="mvs-container">
                        <div class="slider-details-container">
                            <div class="wrapper">
                                <div class="slider-title">
                                    <h2><?php the_title() ?></h2>
                                </div>
                                <?php the_post_thumbnail('medium_large'); ?>
                                <div class="slider-description">
                                    <div class="subtitle">Subtitle</div>
                                    <a href="#" class="link">Button text</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php
            endwhile;
        endif;

        ?>

    </ul>
</div>