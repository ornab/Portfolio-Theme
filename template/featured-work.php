<div class="featured-work">

    <div class="container">
        <div class="row">

            <?php
            global $post;

            $args = array( 'post_type' => 'featured work', 'posts_per_page' => 1 );
            $myposts = get_posts ($args);
            foreach ($myposts as $post ): setup_postdata($post);

                $feature_thumb = get_post_meta($post->ID,'feature-thumb',true);
                $feature_link = get_post_meta($post->ID,'feature-link',true);

                ?>

                 <div class="col-md-6">
                    <h3>FEATURED WORK</h3>

                    <div class="test"></div>

                    <div class="feature-img">

                        <img src="<?php  echo get_template_directory_uri(); ?>/img/underline.png" alt="">
                    </div>
                    <img src="<?php  echo $feature_thumb; ?>" alt="">
                </div>
                <div class="featured-section">

                    <div class="col-md-6">
                        <h4><?php the_title();?></h4>
                        <p><?php the_excerpt();?> </p>

                        <a href="<?php echo $feature_link; ?>" class="slide-btn">Learn More</a>
                    </div>
                </div>


            <?php endforeach; ?>




        </div>


    </div>
</div>