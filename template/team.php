<div class="team">
    <div class="container">
        <div class="row">
            <h3>OUR TEAM</h3>
            <div class="test">


            </div>
            <div class="team-img">
                <img src="<?php  echo get_template_directory_uri(); ?>/img/underline.png" alt="">


            </div>
            <div class="member">

                <?php
                global $post;

                $args = array( 'post_type' => 'Team', 'posts_per_page' => 5 );
                $myposts = get_posts ($args);
                foreach ($myposts as $post ): setup_postdata($post);

                $team_thumb = get_post_meta($post->ID,'team-thumb',true);
                $fb_link = get_post_meta($post->ID,'fb-link',true);
                    $twitter_link = get_post_meta($post->ID,'twitter-link',true);
                    $google_link = get_post_meta($post->ID,'google-link',true);
                    $youtube_link = get_post_meta($post->ID,'youtube-link',true);
                    $skype_link = get_post_meta($post->ID,'skype-link',true);

                ?>
                <div class="col-md-3">
                    <div class="member-details">



                        <h3><?php the_title();?><br/>
                            <span><?php the_excerpt();?></span> </h3>

                        <p class="social-icons"><a href="<?php echo $fb_link;?> "><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo $twitter_link;?> "><i class="fa fa-twitter"></i></a><a href=""><i class="fa fa-dribbble"></i></a>
                            <a href="<?php echo $google_link;?> "><i class="fa fa-google-plus"></i></a>
                            <a href="<?php echo $youtube_link;?> "><i class="fa fa-youtube"></i></a>
                            <a href="<?php echo $skype_link;?> "><i class="fa fa-skype"></i></a></p>
                    </div>

                    <img src="<?php  echo $team_thumb; ?>" alt="">


                </div>

                <?php endforeach;?>
            </div>




        </div>


    </div>
</div>