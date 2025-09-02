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
    
    // Add inline CSS for responsive utilities
    $responsive_css = '
        /* Global Responsive Utilities */
        @media (max-width: 768px) {
            .hero-section, .hero-hero, section[class*="-hero"] {
                padding: 60px 0 !important;
            }
            
            .hero-section::before, section[class*="-hero"]::before {
                width: 80% !important;
                right: -30% !important;
            }
            
            h1, .hero-title, [class*="-hero"] h1 {
                font-size: 32px !important;
                padding: 0 10px;
            }
            
            .container {
                padding: 0 15px !important;
            }
            
            .btn {
                min-width: 140px;
            }
            
            /* Fix grid layouts */
            .form-grid, .services-grid, [class*="-grid"] {
                grid-template-columns: 1fr !important;
            }
            
            /* Fix CTA sections */
            .cta-buttons, .hero-buttons {
                flex-direction: column !important;
                align-items: center !important;
                gap: 10px !important;
            }
            
            .cta-buttons a, .hero-buttons a {
                width: 90% !important;
                max-width: 280px !important;
            }
        }
        
        @media (max-width: 480px) {
            h1, .hero-title, [class*="-hero"] h1 {
                font-size: 26px !important;
            }
            
            h2 {
                font-size: 22px !important;
            }
            
            h3 {
                font-size: 20px !important;
            }
            
            p {
                font-size: 15px !important;
            }
        }
    ';
    wp_add_inline_style('equimind-style', $responsive_css);
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