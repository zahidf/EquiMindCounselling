<?php
function equimind_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'equimindcounselling'),
        'footer' => __('Footer Menu', 'equimindcounselling'),
    ));
}
add_action('after_setup_theme', 'equimind_theme_setup');

function equimind_enqueue_styles() {
    wp_enqueue_style('equimind-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'equimind_enqueue_styles');

function equimind_register_page_templates($templates) {
    $templates['page-templates/page-home.php'] = 'Home Page';
    $templates['page-templates/page-about.php'] = 'About Page';
    $templates['page-templates/page-services.php'] = 'Services Page';
    $templates['page-templates/page-adult-therapy.php'] = 'Adult Therapy';
    $templates['page-templates/page-child-therapy.php'] = 'Child & Adolescent Therapy';
    $templates['page-templates/page-hypnotherapy.php'] = 'Hypnotherapy';
    $templates['page-templates/page-specialist-support.php'] = 'Specialist Support';
    $templates['page-templates/page-approach.php'] = 'My Approach';
    $templates['page-templates/page-faqs.php'] = 'FAQs';
    $templates['page-templates/page-contact.php'] = 'Contact';
    $templates['page-templates/page-intake-form.php'] = 'Client Intake Form';
    return $templates;
}
add_filter('theme_page_templates', 'equimind_register_page_templates');