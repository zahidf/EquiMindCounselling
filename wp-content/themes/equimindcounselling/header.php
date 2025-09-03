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
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
            transform: translateY(0);
        }
        
        header.scrolled {
            box-shadow: 0 4px 20px rgba(0,0,0,0.12);
        }
        
        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 16px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: padding 0.3s ease;
        }
        
        header.scrolled .header-container {
            padding: 10px 20px;
        }
        
        .site-logo {
            font-size: 24px;
            font-weight: 600;
            color: #1a2332;
            font-family: 'Georgia', serif;
            z-index: 1002;
            transition: font-size 0.3s ease;
        }
        
        header.scrolled .site-logo {
            font-size: 20px;
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
            gap: 35px;
            align-items: center;
        }
        
        .main-navigation li {
            margin: 0;
            position: relative;
        }
        
        .main-navigation a {
            color: #2c3e50;
            font-weight: 500;
            transition: all 0.3s ease;
            font-size: 15px;
            text-decoration: none;
            display: block;
            padding: 8px 0;
            position: relative;
            letter-spacing: 0.3px;
        }
        
        .main-navigation a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #5b8c85, #4a7268);
            transform: translateX(-50%);
            transition: width 0.3s ease;
        }
        
        .main-navigation a:hover {
            color: #5b8c85;
        }
        
        .main-navigation a:hover::after {
            width: 100%;
        }
        
        .main-navigation li:last-child a {
            background: linear-gradient(135deg, #5b8c85 0%, #4a7268 100%);
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .main-navigation li:last-child a::after {
            display: none;
        }
        
        .main-navigation li:last-child a:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(91, 140, 133, 0.3);
        }
        
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 8px;
            z-index: 1002;
            position: relative;
            width: 36px;
            height: 36px;
            justify-content: center;
            align-items: center;
            transition: opacity 0.3s ease;
        }
        
        .mobile-menu-toggle:active {
            opacity: 0.7;
        }
        
        .mobile-menu-toggle span {
            display: block;
            width: 22px;
            height: 2px;
            background-color: #2c3e50;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            transition: all 0.3s ease;
        }
        
        .mobile-menu-toggle span:nth-child(1) {
            top: 11px;
        }
        
        .mobile-menu-toggle span:nth-child(2) {
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
        }
        
        .mobile-menu-toggle span:nth-child(3) {
            bottom: 11px;
        }
        
        .mobile-menu-toggle.active span:nth-child(1) {
            top: 50%;
            transform: translateX(-50%) translateY(-50%) rotate(45deg);
        }
        
        .mobile-menu-toggle.active span:nth-child(2) {
            opacity: 0;
        }
        
        .mobile-menu-toggle.active span:nth-child(3) {
            bottom: 50%;
            transform: translateX(-50%) translateY(50%) rotate(-45deg);
        }
        
        .mobile-menu-header {
            display: none;
        }
        
        @media (max-width: 992px) {
            .main-navigation a {
                font-size: 14px;
            }
            
            .main-navigation ul {
                gap: 25px;
            }
            
            .main-navigation li:last-child a {
                padding: 8px 16px;
                font-size: 14px;
            }
            
            .site-logo {
                font-size: 22px;
            }
            
            .site-logo::before {
                width: 32px;
                height: 32px;
            }
        }
        
        @media (max-width: 768px) {
            .header-container {
                padding: 12px 15px;
            }
            
            header.scrolled .header-container {
                padding: 8px 15px;
            }
            
            .site-logo {
                font-size: 18px;
                flex: 1;
            }
            
            header.scrolled .site-logo {
                font-size: 16px;
            }
            
            .mobile-menu-toggle {
                display: flex;
            }
            
            .main-navigation {
                position: fixed;
                top: 0;
                right: -200px;
                width: 200px;
                height: 100vh;
                background: #ffffff;
                box-shadow: -2px 0 8px rgba(0,0,0,0.08);
                transition: right 0.25s ease;
                z-index: 1001;
                overflow-y: auto;
                overflow-x: hidden;
            }
            
            .main-navigation.active {
                right: 0;
            }
            
            .main-navigation::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 60px;
                background: linear-gradient(180deg, #ffffff 0%, rgba(255,255,255,0) 100%);
                pointer-events: none;
                z-index: 1;
            }
            
            .main-navigation ul {
                flex-direction: column;
                padding: 65px 0 0;
                gap: 0;
                margin: 0;
                list-style: none;
                height: 100%;
            }
            
            .main-navigation li {
                margin: 0;
                border: none;
                display: flex;
                flex-direction: column;
            }
            
            .main-navigation li:first-child a {
                border-top: 1px solid #f0f0f0;
            }
            
            .main-navigation li:not(:last-child) a {
                border-bottom: 1px solid #f0f0f0;
            }
            
            .main-navigation li:last-child {
                margin-top: auto;
                margin-bottom: 20px;
                padding: 0 15px;
            }
            
            .main-navigation a {
                font-size: 14px;
                padding: 14px 20px;
                display: block;
                text-align: center;
                transition: all 0.2s ease;
                position: relative;
                color: #2c3e50;
                text-decoration: none;
                font-weight: 400;
                letter-spacing: 0.2px;
            }
            
            .main-navigation a::after {
                display: none;
            }
            
            .main-navigation a:hover {
                background-color: #f8fafa;
                color: #5b8c85;
            }
            
            .main-navigation a:active {
                background-color: #ecf5f3;
            }
            
            .main-navigation li:last-child a {
                background: #5b8c85;
                color: white;
                padding: 11px 20px;
                text-align: center;
                border-radius: 22px;
                font-weight: 500;
                font-size: 13px;
                border: none;
            }
            
            .main-navigation li:last-child a:hover {
                background: #4a7268;
                color: white;
            }
            
            .main-navigation li:last-child a:active {
                background: #3a5c58;
                transform: scale(0.98);
            }
            
            .mobile-overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0,0,0,0.3);
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
                font-size: 16px;
            }
            
            header.scrolled .site-logo {
                font-size: 15px;
            }
            
            .header-container {
                padding: 10px 12px;
            }
            
            header.scrolled .header-container {
                padding: 8px 12px;
            }
            
            .main-navigation {
                width: 180px;
                right: -180px;
            }
            
            .main-navigation a {
                font-size: 13px;
                padding: 13px 18px;
            }
            
            .main-navigation li:last-child {
                padding: 0 12px;
                margin-bottom: 15px;
            }
            
            .main-navigation li:last-child a {
                padding: 10px 18px;
                font-size: 12px;
            }
        }
        
        @media (max-width: 375px) {
            .main-navigation {
                width: 170px;
                right: -170px;
            }
            
            .main-navigation a {
                padding: 12px 16px;
                font-size: 13px;
            }
            
            .main-navigation li:last-child {
                padding: 0 10px;
                margin-bottom: 15px;
            }
            
            .main-navigation li:last-child a {
                padding: 9px 16px;
                font-size: 12px;
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
        
        <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Toggle navigation" aria-expanded="false" aria-controls="main-navigation" type="button">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </button>
        
        <nav class="main-navigation" id="main-navigation" role="navigation">
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
        const header = document.getElementById('masthead');
        const menuToggle = document.getElementById('mobile-menu-toggle');
        const navigation = document.getElementById('main-navigation');
        const overlay = document.getElementById('mobile-overlay');
        const navLinks = document.querySelectorAll('.main-navigation a');
        
        // Simple scroll detection for header
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }, false);
        
        // Mobile menu functionality
        function toggleMenu() {
            navigation.classList.toggle('active');
            overlay.classList.toggle('active');
            menuToggle.classList.toggle('active');
            document.body.style.overflow = navigation.classList.contains('active') ? 'hidden' : '';
            
            // Accessibility
            menuToggle.setAttribute('aria-expanded', navigation.classList.contains('active'));
        }
        
        function closeMenu() {
            navigation.classList.remove('active');
            overlay.classList.remove('active');
            menuToggle.classList.remove('active');
            document.body.style.overflow = '';
            menuToggle.setAttribute('aria-expanded', 'false');
        }
        
        menuToggle.addEventListener('click', toggleMenu);
        overlay.addEventListener('click', closeMenu);
        
        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && navigation.classList.contains('active')) {
                closeMenu();
            }
        });
        
        // Close menu when clicking on a link
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 768) {
                    closeMenu();
                }
            });
        });
        
        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768 && navigation.classList.contains('active')) {
                closeMenu();
            }
        });
    });
</script>