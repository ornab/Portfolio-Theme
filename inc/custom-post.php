
<?php

function Theme_E_custom_posts(){
register_post_type( 'featured work',
array(
'labels' => array(
'name' => __( 'Featured Work' ),
'singular_name' => __( 'Featured Work' )
),
'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
'public' => true
)
);

    register_post_type( 'Team',
        array(
            'labels' => array(
                'name' => __( 'Teams' ),
                'singular_name' => __( 'Team' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => true
        )
    );
}

add_action( 'init', 'Theme_E_custom_posts' );



?>