<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style>
        header {
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .site-logo {
            font-size: 24px;
            font-weight: 600;
            color: #1a2332;
            font-family: 'Georgia', serif;
        }
        
        .site-logo a {
            color: inherit;
            text-decoration: none;
        }
        
        .main-navigation {
            display: flex;
            align-items: center;
        }
        
        .main-navigation ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 30px;
        }
        
        .main-navigation a {
            color: #2c3e50;
            font-weight: 500;
            transition: color 0.3s ease;
            font-size: 15px;
        }
        
        .main-navigation a:hover {
            color: #5b8c85;
        }
        
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 10px;
        }
        
        .mobile-menu-toggle span {
            display: block;
            width: 25px;
            height: 2px;
            background-color: #2c3e50;
            margin: 5px 0;
            transition: 0.3s;
        }
        
        @media (max-width: 768px) {
            .mobile-menu-toggle {
                display: block;
            }
            
            .main-navigation {
                position: fixed;
                top: 0;
                right: -300px;
                width: 300px;
                height: 100vh;
                background-color: white;
                box-shadow: -2px 0 10px rgba(0,0,0,0.1);
                transition: right 0.3s ease;
                z-index: 1001;
            }
            
            .main-navigation.active {
                right: 0;
            }
            
            .main-navigation ul {
                flex-direction: column;
                padding: 80px 30px;
                gap: 20px;
            }
            
            .main-navigation a {
                font-size: 18px;
            }
            
            .mobile-overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0,0,0,0.5);
                z-index: 1000;
            }
            
            .mobile-overlay.active {
                display: block;
            }
        }
    </style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
    <div class="header-container">
        <div class="site-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                EquiMind Counselling
            </a>
        </div>
        
        <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        
        <nav class="main-navigation" id="main-navigation">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
                <li><a href="<?php echo esc_url(home_url('/services')); ?>">Services</a></li>
                <li><a href="<?php echo esc_url(home_url('/my-approach')); ?>">My Approach</a></li>
                <li><a href="<?php echo esc_url(home_url('/faqs')); ?>">FAQs</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="mobile-overlay" id="mobile-overlay"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('mobile-menu-toggle');
        const navigation = document.getElementById('main-navigation');
        const overlay = document.getElementById('mobile-overlay');
        
        menuToggle.addEventListener('click', function() {
            navigation.classList.toggle('active');
            overlay.classList.toggle('active');
        });
        
        overlay.addEventListener('click', function() {
            navigation.classList.remove('active');
            overlay.classList.remove('active');
        });
    });
</script>