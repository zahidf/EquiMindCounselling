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
            padding: 18px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: padding 0.3s ease;
        }
        
        header.scrolled .header-container {
            padding: 12px 20px;
        }
        
        .site-logo {
            font-size: 26px;
            font-weight: 700;
            color: #1a2332;
            font-family: 'Georgia', serif;
            z-index: 1002;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: font-size 0.3s ease;
        }
        
        header.scrolled .site-logo {
            font-size: 22px;
        }
        
        .site-logo::before {
            content: '';
            width: 35px;
            height: 35px;
            background: linear-gradient(135deg, #5b8c85 0%, #4a7268 100%);
            border-radius: 8px;
            display: inline-block;
            position: relative;
            transition: transform 0.3s ease;
        }
        
        .site-logo:hover::before {
            transform: rotate(10deg);
        }
        
        .site-logo a {
            color: inherit;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
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
            background: linear-gradient(135deg, #5b8c85 0%, #4a7268 100%);
            border: none;
            cursor: pointer;
            padding: 8px;
            z-index: 1002;
            position: relative;
            border-radius: 8px;
            width: 44px;
            height: 44px;
            justify-content: center;
            align-items: center;
            transition: transform 0.3s ease;
        }
        
        .mobile-menu-toggle:hover {
            transform: scale(1.05);
        }
        
        .mobile-menu-toggle:active {
            transform: scale(0.95);
        }
        
        .mobile-menu-toggle span {
            display: block;
            width: 22px;
            height: 2px;
            background-color: white;
            margin: 4px auto;
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            transform-origin: center;
            border-radius: 2px;
        }
        
        .mobile-menu-toggle.active span:nth-child(1) {
            transform: rotate(45deg) translateY(6px);
        }
        
        .mobile-menu-toggle.active span:nth-child(2) {
            opacity: 0;
            transform: scaleX(0);
        }
        
        .mobile-menu-toggle.active span:nth-child(3) {
            transform: rotate(-45deg) translateY(-6px);
        }
        
        .mobile-menu-header {
            display: none;
            padding: 20px 25px;
            border-bottom: 1px solid #ecf5f3;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            background: white;
            z-index: 10;
        }
        
        .mobile-menu-title {
            font-size: 20px;
            font-weight: 600;
            color: #1a2332;
            font-family: 'Georgia', serif;
        }
        
        .mobile-menu-close {
            background: linear-gradient(135deg, #5b8c85 0%, #4a7268 100%);
            color: white;
            border: none;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .mobile-menu-close:hover {
            transform: rotate(90deg);
            box-shadow: 0 5px 15px rgba(91, 140, 133, 0.3);
        }
        
        .mobile-menu-close svg {
            width: 20px;
            height: 20px;
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
                padding: 15px;
            }
            
            header.scrolled .header-container {
                padding: 12px 15px;
            }
            
            .site-logo {
                font-size: 20px;
                flex: 1;
            }
            
            header.scrolled .site-logo {
                font-size: 18px;
            }
            
            .site-logo::before {
                width: 30px;
                height: 30px;
            }
            
            .mobile-menu-toggle {
                display: flex;
            }
            
            .main-navigation {
                position: fixed;
                top: 0;
                right: -100%;
                width: 85%;
                max-width: 320px;
                height: 100vh;
                background: linear-gradient(180deg, #ffffff 0%, #f8fafa 100%);
                box-shadow: -5px 0 20px rgba(0,0,0,0.15);
                transition: right 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
                z-index: 1001;
                overflow-y: auto;
                overflow-x: hidden;
            }
            
            .main-navigation.active {
                right: 0;
            }
            
            .mobile-menu-header {
                display: flex;
            }
            
            .main-navigation ul {
                flex-direction: column;
                padding: 20px 25px 30px;
                gap: 5px;
            }
            
            .main-navigation li {
                border-bottom: none;
                opacity: 0;
                transform: translateX(20px);
                animation: slideIn 0.3s forwards;
            }
            
            .main-navigation.active li {
                opacity: 1;
                transform: translateX(0);
            }
            
            .main-navigation li:nth-child(1) { animation-delay: 0.1s; }
            .main-navigation li:nth-child(2) { animation-delay: 0.15s; }
            .main-navigation li:nth-child(3) { animation-delay: 0.2s; }
            .main-navigation li:nth-child(4) { animation-delay: 0.25s; }
            .main-navigation li:nth-child(5) { animation-delay: 0.3s; }
            .main-navigation li:nth-child(6) { animation-delay: 0.35s; }
            
            @keyframes slideIn {
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }
            
            .main-navigation a {
                font-size: 17px;
                padding: 15px 10px;
                display: block;
                border-radius: 8px;
                transition: all 0.3s ease;
                position: relative;
            }
            
            .main-navigation a::after {
                display: none;
            }
            
            .main-navigation a:hover {
                background-color: #ecf5f3;
                padding-left: 20px;
            }
            
            .main-navigation li:last-child {
                margin-top: 20px;
                padding-top: 20px;
                border-top: 1px solid #ecf5f3;
            }
            
            .main-navigation li:last-child a {
                background: linear-gradient(135deg, #5b8c85 0%, #4a7268 100%);
                color: white;
                padding: 15px 20px;
                text-align: center;
                font-weight: 600;
            }
            
            .main-navigation li:last-child a:hover {
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(91, 140, 133, 0.3);
                padding-left: 20px;
            }
            
            
            .mobile-overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(180deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.4) 100%);
                z-index: 999;
                opacity: 0;
                transition: opacity 0.3s ease;
                backdrop-filter: blur(5px);
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
            
            header.scrolled .site-logo {
                font-size: 16px;
            }
            
            .site-logo::before {
                width: 28px;
                height: 28px;
            }
            
            .header-container {
                padding: 12px;
            }
            
            header.scrolled .header-container {
                padding: 10px 12px;
            }
            
            .main-navigation {
                width: 90%;
                max-width: none;
            }
            
            .mobile-menu-toggle {
                width: 40px;
                height: 40px;
            }
        }
        
        @media (max-width: 375px) {
            .site-logo {
                font-size: 16px;
            }
            
            .site-logo span {
                display: none;
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
        
        <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Toggle navigation" aria-expanded="false" aria-controls="main-navigation">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </button>
        
        <nav class="main-navigation" id="main-navigation" role="navigation">
            <div class="mobile-menu-header">
                <span class="mobile-menu-title">Menu</span>
                <button class="mobile-menu-close" id="mobile-menu-close" aria-label="Close menu">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
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
        const menuClose = document.getElementById('mobile-menu-close');
        const navigation = document.getElementById('main-navigation');
        const overlay = document.getElementById('mobile-overlay');
        const navLinks = document.querySelectorAll('.main-navigation a');
        
        // Scroll detection for header
        let lastScrollTop = 0;
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
            
            // Hide/show header on scroll (optional)
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                // Scrolling down
                header.style.transform = 'translateY(-100%)';
            } else {
                // Scrolling up
                header.style.transform = 'translateY(0)';
            }
            
            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
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
        if (menuClose) {
            menuClose.addEventListener('click', closeMenu);
        }
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
                    setTimeout(closeMenu, 100); // Small delay for better UX
                }
            });
        });
        
        // Handle window resize
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (window.innerWidth > 768 && navigation.classList.contains('active')) {
                    closeMenu();
                }
            }, 250);
        });
        
        // Prevent scroll when menu is open on iOS
        let scrollPosition = 0;
        navigation.addEventListener('touchmove', function(e) {
            e.preventDefault();
        }, { passive: false });
    });
</script>