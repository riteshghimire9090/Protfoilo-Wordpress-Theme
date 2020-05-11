<?php

//action
add_action("wp_enqueue_scripts","devpro_script");
add_action("init","devpro_custom_navbar");
add_action("customize_register","devpro_customizer_register");
add_action( 'init', 'devpro_init' );
add_action("admin_init", "dev_pro_admin_init");
add_action('save_post', 'dev_pro_save_price');


//function

function devpro_script()
{


    wp_enqueue_script("jquery","https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js");
    wp_enqueue_script("script_js",get_template_directory_uri()."/js/scripts.min.js");
    wp_enqueue_style("style",get_template_directory_uri()."/css/styles.css");
    wp_enqueue_style("lato","https://fonts.googleapis.com/css?family=Lato:300,400,700,900");
    wp_enqueue_style("bootstrap",get_template_directory_uri()."/css/bootstrap.min.css");
    wp_enqueue_style("font-awesome",get_template_directory_uri()."/libs/font-awesome/css/font-awesome.min.css");



}
function devpro_custom_navbar()
{
    if (function_exists('register_nav_menu'))
    {
       register_nav_menu("primary",__("Primary Navbar","devpro"));
    }
}
function devpro_customizer_register($customizer)
{

    $customizer->add_section("devpro_personal_detail",[
        "title"=>"Personal Detail",
        "priority"=>10
    ]);
    $customizer->add_setting("devpro_personal_detail_handle_name",[
        "default"=>""
    ]);
    $customizer->add_control(
        new WP_Customize_Control(
            $customizer,
            'devpro_personal_detail_handle_name',
            array(
                'label'          => __( 'Name', 'devpro' ),
                'section'        => 'devpro_personal_detail',
                'settings'       => 'devpro_personal_detail_handle_name',
                'type'           => 'text'
            )
        )
    );
    $customizer->add_setting("devpro_personal_detail_handle_profession",[
        "default"=>""
    ]);
    $customizer->add_control(
        new WP_Customize_Control(
            $customizer,
            'devpro_personal_detail_handle_profession',
            array(
                'label'          => __( 'Profession', 'devpro' ),
                'section'        => 'devpro_personal_detail',
                'settings'       => 'devpro_personal_detail_handle_profession',
                'type'           => 'text'
            )
        )
    );
    $customizer->add_setting("devpro_personal_detail_handle_download_url",[
    "default"=>""
]);
    $customizer->add_control(
        new WP_Customize_Control(
            $customizer,
            'ju_facedevpro_handle',
            array(
                'label'          => __( 'Download Resume Url', 'devpro' ),
                'section'        => 'devpro_personal_detail',
                'settings'       => 'devpro_personal_detail_handle_download_url',
                'type'           => 'textarea'
            )
        )
    );
    $customizer->add_setting("devpro_personal_detail_handle_about",[
    "default"=>""
]);
    $customizer->add_control(
        new WP_Customize_Control(
            $customizer,
            'ju_facedevpro_handle',
            array(
                'label'          => __( 'About You', 'devpro' ),
                'section'        => 'devpro_personal_detail',
                'settings'       => 'devpro_personal_detail_handle_about',
                'type'           => 'textarea'
            )
        )
    );

    $customizer->add_section("devpro_social_media",[
        "title"=>"Social Media Links",
        "priority"=>10
    ]);
    $customizer->add_setting("devpro_social_media_github",[
        "default"=>""
    ]);
    $customizer->add_control(
        new WP_Customize_Control(
            $customizer,
            'devpro_social_media_github',
            array(
                'label'          => __( 'Github Links', 'devpro' ),
                'section'        => 'devpro_social_media',
                'settings'       => 'devpro_social_media_github',
                'type'           => 'text'
            )
        )
    );
    $customizer->add_setting("devpro_social_media_stack_over_flow",[
        "default"=>""
    ]);
    $customizer->add_control(
        new WP_Customize_Control(
            $customizer,
            'devpro_social_media_stack_over_flow',
            array(
                'label'          => __( 'Stack Overflow Links', 'devpro' ),
                'section'        => 'devpro_social_media',
                'settings'       => 'devpro_social_media_stack_over_flow',
                'type'           => 'text'
            )
        )
    );
    $customizer->add_setting("devpro_social_media_linkedin",[
        "default"=>""
    ]);
    $customizer->add_control(
        new WP_Customize_Control(
            $customizer,
            'devpro_social_media_linkedin',
            array(
                'label'          => __( 'Linkedin Links', 'devpro' ),
                'section'        => 'devpro_social_media',
                'settings'       => 'devpro_social_media_linkedin',
                'type'           => 'text'
            )
        )
    );
    $customizer->add_setting("devpro_social_media_linkedin",[
        "default"=>""
    ]);
    $customizer->add_control(
        new WP_Customize_Control(
            $customizer,
            'devpro_social_media_linkedin',
            array(
                'label'          => __( 'Linkedin Links', 'devpro' ),
                'section'        => 'devpro_social_media',
                'settings'       => 'devpro_social_media_linkedin',
                'type'           => 'text'
            )
        )
    );

    $customizer->add_setting("devpro_social_media_facebook",[
        "default"=>""
    ]);
    $customizer->add_control(
        new WP_Customize_Control(
            $customizer,
            'devpro_social_media_facebook',
            array(
                'label'          => __( 'Facebook Links', 'devpro' ),
                'section'        => 'devpro_social_media',
                'settings'       => 'devpro_social_media_facebook',
                'type'           => 'text'
            )
        )
    );
    $customizer->add_setting("devpro_social_media_twitter",[
        "default"=>""
    ]);
    $customizer->add_control(
        new WP_Customize_Control(
            $customizer,
            'devpro_social_media_twitter',
            array(
                'label'          => __( 'Twitter Links', 'devpro' ),
                'section'        => 'devpro_social_media',
                'settings'       => 'devpro_social_media_twitter',
                'type'           => 'text'
            )
        )
    );
    $customizer->add_setting("devpro_social_media_google_plus",[
        "default"=>""
    ]);
    $customizer->add_control(
        new WP_Customize_Control(
            $customizer,
            'devpro_social_media_google_plus',
            array(
                'label'          => __( 'Google++ Links', 'devpro' ),
                'section'        => 'devpro_social_media',
                'settings'       => 'devpro_social_media_google_plus',
                'type'           => 'text'
            )
        )
    );
}
function devpro_init() {
    add_theme_support( 'post-thumbnails' );
    $labels = array(
        'name'                  => _x( 'Experiences', 'Post type general name', 'devpro' ),
        'singular_name'         => _x( 'Experience', 'Post type singular name', 'devpro' ),
        'menu_name'             => _x( 'Experience', 'Admin Menu text', 'devpro' ),
        'name_admin_bar'        => _x( 'Experience', 'Add New on Toolbar', 'devpro' ),
        'add_new'               => __( 'Add New', 'devpro' ),
        'add_new_item'          => __( 'Add New Experience', 'devpro' ),
        'new_item'              => __( 'New Experience', 'devpro' ),
        'edit_item'             => __( 'Edit Experience', 'devpro' ),
        'view_item'             => __( 'View Experience', 'devpro' ),
        'all_items'             => __( 'All Experience', 'devpro' ),
        'search_items'          => __( 'Search Experience', 'devpro' ),
        'parent_item_colon'     => __( 'Parent Experience:', 'devpro' ),
        'not_found'             => __( 'No Experience found.', 'devpro' ),
        'not_found_in_trash'    => __( 'No Experience found in Trash.', 'devpro' ),
        'featured_image'        => _x( 'Experience Cover Image', 'Overrides the Featured Image phrase for this post type. Added in 4.3', 'devpro' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image phrase for this post type. Added in 4.3', 'devpro' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image phrase for this post type. Added in 4.3', 'devpro' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image phrase for this post type. Added in 4.3', 'devpro' ),
        'archives'              => _x( 'Experience archives', 'The post type archive label used in nav menus. Default “Post Archives. Added in 4.4', 'devpro' ),
        'insert_into_item'      => _x( 'Insert into Experience', 'Overrides the “Insert into post/Insert into page phrase (used when inserting media into a post). Added in 4.4', 'devpro' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Experience', 'Overrides the “Uploaded to this post/Uploaded to this page phrase (used when viewing media attached to a post). Added in 4.4', 'devpro' ),
        'filter_items_list'     => _x( 'Filter Experience list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list/Filter pages list. Added in 4.4', 'devpro' ),
        'items_list_navigation' => _x( 'Experience list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation/Pages list navigation. Added in 4.4', 'devpro' ),
        'items_list'            => _x( 'Experience list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list/Pages list. Added in 4.4', 'devpro' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'experience' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'custom-fields', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'Experience', $args );

    $labelseducation = array(
        'name'                  => _x( 'Educations', 'Post type general name', 'devpro' ),
        'singular_name'         => _x( 'Education', 'Post type singular name', 'devpro' ),
        'menu_name'             => _x( 'Education', 'Admin Menu text', 'devpro' ),
        'name_admin_bar'        => _x( 'Education', 'Add New on Toolbar', 'devpro' ),
        'add_new'               => __( 'Add New', 'devpro' ),
        'add_new_item'          => __( 'Add New Education', 'devpro' ),
        'new_item'              => __( 'New Education', 'devpro' ),
        'edit_item'             => __( 'Edit Education', 'devpro' ),
        'view_item'             => __( 'View Education', 'devpro' ),
        'all_items'             => __( 'All Education', 'devpro' ),
        'search_items'          => __( 'Search Education', 'devpro' ),
        'parent_item_colon'     => __( 'Parent Education:', 'devpro' ),
        'not_found'             => __( 'No Education found.', 'devpro' ),
        'not_found_in_trash'    => __( 'No Education found in Trash.', 'devpro' ),
        'featured_image'        => _x( 'Education Cover Image', 'Overrides the “Featured Image phrase for this post type. Added in 4.3', 'devpro' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image phrase for this post type. Added in 4.3', 'devpro' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image phrase for this post type. Added in 4.3', 'devpro' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image phrase for this post type. Added in 4.3', 'devpro' ),
        'archives'              => _x( 'Education archives', 'The post type archive label used in nav menus. Default “Post Archives. Added in 4.4', 'devpro' ),
        'insert_into_item'      => _x( 'Insert into Education', 'Overrides the “Insert into post/Insert into page phrase (used when inserting media into a post). Added in 4.4', 'devpro' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Education', 'Overrides the “Uploaded to this post/Uploaded to this page phrase (used when viewing media attached to a post). Added in 4.4', 'devpro' ),
        'filter_items_list'     => _x( 'Filter Education list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list/Filter pages list. Added in 4.4', 'devpro' ),
        'items_list_navigation' => _x( 'Education list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation/Pages list navigation. Added in 4.4', 'devpro' ),
        'items_list'            => _x( 'Education list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list/Pages list. Added in 4.4', 'devpro' ),
    );

    $argseducation = array(
        'labels'             => $labelseducation,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'education' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor',  'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'Education', $argseducation );


    $labelsproject = array(
        'name'                  => _x( 'Projects', 'Post type general name', 'devpro' ),
        'singular_name'         => _x( 'Project', 'Post type singular name', 'devpro' ),
        'menu_name'             => _x( 'Project', 'Admin Menu text', 'devpro' ),
        'name_admin_bar'        => _x( 'Project', 'Add New on Toolbar', 'devpro' ),
        'add_new'               => __( 'Add New', 'devpro' ),
        'add_new_item'          => __( 'Add New Project', 'devpro' ),
        'new_item'              => __( 'New Project', 'devpro' ),
        'edit_item'             => __( 'Edit Project', 'devpro' ),
        'view_item'             => __( 'View Project', 'devpro' ),
        'all_items'             => __( 'All Project', 'devpro' ),
        'search_items'          => __( 'Search Project', 'devpro' ),
        'parent_item_colon'     => __( 'Parent Project:', 'devpro' ),
        'not_found'             => __( 'No Project found.', 'devpro' ),
        'not_found_in_trash'    => __( 'No Project found in Trash.', 'devpro' ),
        'featured_image'        => _x( 'Project Cover Image', 'Overrides the “Featured Image phrase for this post type. Added in 4.3', 'devpro' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image phrase for this post type. Added in 4.3', 'devpro' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image phrase for this post type. Added in 4.3', 'devpro' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image phrase for this post type. Added in 4.3', 'devpro' ),
        'archives'              => _x( 'Project archives', 'The post type archive label used in nav menus. Default “Post Archives. Added in 4.4', 'devpro' ),
        'insert_into_item'      => _x( 'Insert into Project', 'Overrides the “Insert into post/Insert into page phrase (used when inserting media into a post). Added in 4.4', 'devpro' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Project', 'Overrides the “Uploaded to this post/Uploaded to this page phrase (used when viewing media attached to a post). Added in 4.4', 'devpro' ),
        'filter_items_list'     => _x( 'Filter Project list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list/Filter pages list. Added in 4.4', 'devpro' ),
        'items_list_navigation' => _x( 'Project list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation/Pages list navigation. Added in 4.4', 'devpro' ),
        'items_list'            => _x( 'Project list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list/Pages list. Added in 4.4', 'devpro' ),
    );

    $argsproject = array(
        'labels'             => $labelsproject,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'project' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor',  'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'Project', $argsproject );


    $labelscontact_us = array(
        'name'                  => _x( 'Contact Us', 'Post type general name', 'devpro' ),
        'singular_name'         => _x( 'Contact Us', 'Post type singular name', 'devpro' ),
        'menu_name'             => _x( 'Contact Us', 'Admin Menu text', 'devpro' ),
        'name_admin_bar'        => _x( 'Contact Us', 'Add New on Toolbar', 'devpro' ),
        'add_new'               => __( 'Add New', 'devpro' ),
        'add_new_item'          => __( 'Add New Contact Us', 'devpro' ),
        'new_item'              => __( 'New Contact Us', 'devpro' ),
        'edit_item'             => __( 'Edit Contact Us', 'devpro' ),
        'view_item'             => __( 'View Contact Us', 'devpro' ),
        'all_items'             => __( 'All Contact Us', 'devpro' ),
        'search_items'          => __( 'Search Contact Us', 'devpro' ),
        'parent_item_colon'     => __( 'Parent Contact Us:', 'devpro' ),
        'not_found'             => __( 'No Contact Us  found.', 'devpro' ),
        'not_found_in_trash'    => __( 'No Contact Us found in Trash.', 'devpro' ),
        'featured_image'        => _x( 'Contact Us Cover Image', 'Overrides the “Featured Image phrase for this post type. Added in 4.3', 'devpro' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image phrase for this post type. Added in 4.3', 'devpro' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image phrase for this post type. Added in 4.3', 'devpro' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image phrase for this post type. Added in 4.3', 'devpro' ),
        'archives'              => _x( 'Contact Us archives', 'The post type archive label used in nav menus. Default “Post Archives. Added in 4.4', 'devpro' ),
        'insert_into_item'      => _x( 'Insert into Contact Us', 'Overrides the “Insert into post/Insert into page phrase (used when inserting media into a post). Added in 4.4', 'devpro' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Contact Us', 'Overrides the “Uploaded to this post/Uploaded to this page phrase (used when viewing media attached to a post). Added in 4.4', 'devpro' ),
        'filter_items_list'     => _x( 'Filter Contact Us list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list/Filter pages list. Added in 4.4', 'devpro' ),
        'items_list_navigation' => _x( 'Contact Us  list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation/Pages list navigation. Added in 4.4', 'devpro' ),
        'items_list'            => _x( 'Contact Us list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list/Pages list. Added in 4.4', 'devpro' ),
    );

    $argscontact_us = array(
        'labels'             => $labelscontact_us,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'contact_us' ),
        'capability_type'    => 'post',

        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor',  'excerpt' ),
    );

    register_post_type( 'contact_us', $argscontact_us );
    register_taxonomy_for_object_type( 'post_tag', 'project' );
}
function dev_pro_admin_init()
{
    add_meta_box("experience_id", "From", "meta_options", "experience_id", "side", "high");
    add_meta_box("experience_id_to", "TO", "meta_options", "experience_id_to", "side", "high");
}
function meta_options()
{
    global $post;
    $custom = get_post_custom($post->ID);
    $price = $custom["Experience To"][0];
    ?>
    <label>Experience To:</label><input type="date" name="experience_to" value="<?php echo $price; ?>" />
    <?php
    $experience_from = $custom["Experience From"][0];
    ?>
    <label>Experience From:</label><input type="date" name="experience_from" value="<?php echo $experience_from; ?>" />
    <?php
}
function dev_pro_save_price()
{
    global $post;
    update_post_meta($post->ID, "Experience TO", $_POST["experience_to"]);
    update_post_meta($post->ID, "Experience From", $_POST["experience_from"]);
}
//var_dump($_POST['email']);
if ($_POST['email'])
{
        $new_post = array(
            'post_title' =>  $_POST['email'],
            'post_content' => $_POST['message'],
            'post_status' => 'publish',
            'post_excerpt' => $_POST['subject'] ,
            'post_date' => date('Y-m-d H:i:s'),
            'post_author' => 1,
            'post_type' => 'contact_us'
        );
$post_id = wp_insert_post($new_post);

    return "ok";
    die();
}




