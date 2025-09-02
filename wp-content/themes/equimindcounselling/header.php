<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style>
        * {
            box-sizing: border-box;
        }
        
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
            z-index: 1002;
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
        
        .main-navigation li {
            margin: 0;
        }
        
        .main-navigation a {
            color: #2c3e50;
            font-weight: 500;
            transition: color 0.3s ease;
            font-size: 15px;
            text-decoration: none;
            display: block;
            padding: 5px 0;
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
            z-index: 1002;
            position: relative;
        }
        
        .mobile-menu-toggle span {
            display: block;
            width: 25px;
            height: 2px;
            background-color: #2c3e50;
            margin: 5px 0;
            transition: all 0.3s ease;
            transform-origin: center;
        }
        
        .mobile-menu-toggle.active span:nth-child(1) {
            transform: rotate(45deg) translateY(7px);
        }
        
        .mobile-menu-toggle.active span:nth-child(2) {
            opacity: 0;
        }
        
        .mobile-menu-toggle.active span:nth-child(3) {
            transform: rotate(-45deg) translateY(-7px);
        }
        
        .mobile-close {
            display: none;
            position: absolute;
            top: 20px;
            right: 20px;
            background: #5b8c85;
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 24px;
            cursor: pointer;
            z-index: 1003;
        }
        
        @media (max-width: 992px) {
            .main-navigation a {
                font-size: 14px;
            }
            
            .main-navigation ul {
                gap: 20px;
            }
        }
        
        @media (max-width: 768px) {
            .header-container {
                padding: 12px 15px;
            }
            
            .site-logo {
                font-size: 20px;
            }
            
            .mobile-menu-toggle {
                display: block;
            }
            
            .main-navigation {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                max-width: 300px;
                height: 100vh;
                background-color: white;
                box-shadow: -2px 0 10px rgba(0,0,0,0.1);
                transition: right 0.3s ease;
                z-index: 1001;
                overflow-y: auto;
            }
            
            .main-navigation.active {
                right: 0;
            }
            
            .main-navigation ul {
                flex-direction: column;
                padding: 80px 30px 30px;
                gap: 0;
            }
            
            .main-navigation li {
                border-bottom: 1px solid #ecf5f3;
            }
            
            .main-navigation li:last-child {
                border-bottom: none;
            }
            
            .main-navigation a {
                font-size: 16px;
                padding: 15px 0;
                display: block;
            }
            
            .mobile-close {
                display: block;
            }
            
            .mobile-overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0,0,0,0.5);
                z-index: 999;
                opacity: 0;
                transition: opacity 0.3s ease;
            }
            
            .mobile-overlay.active {
                display: block;
                opacity: 1;
            }
        }
        
        @media (max-width: 480px) {
            .site-logo {
                font-size: 18px;
            }
            
            .header-container {
                padding: 10px 12px;
            }
            
            .main-navigation {
                width: 85%;
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
        const navLinks = document.querySelectorAll('.main-navigation a');
        
        function toggleMenu() {
            navigation.classList.toggle('active');
            overlay.classList.toggle('active');
            menuToggle.classList.toggle('active');
            document.body.style.overflow = navigation.classList.contains('active') ? 'hidden' : '';
        }
        
        function closeMenu() {
            navigation.classList.remove('active');
            overlay.classList.remove('active');
            menuToggle.classList.remove('active');
            document.body.style.overflow = '';
        }
        
        menuToggle.addEventListener('click', toggleMenu);
        overlay.addEventListener('click', closeMenu);
        
        // Close menu when clicking on a link
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 768) {
                    closeMenu();
                }
            });
        });
        
        // Handle window resize
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (window.innerWidth > 768) {
                    closeMenu();
                }
            }, 250);
        });
    });
</script>