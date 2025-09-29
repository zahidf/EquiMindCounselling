<?php
/*
Template Name: Services Page
*/
get_header();
?>

<style>
    /* Page Loader */
    .page-loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #ecf5f3, #d4e8e4);
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
    }

    .page-loader.loaded {
        opacity: 0;
        visibility: hidden;
    }

    .loader-content {
        text-align: center;
    }

    .loader-logo {
        font-size: 32px;
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 20px;
        opacity: 0;
        animation: fadeInUp 0.8s ease forwards;
    }

    .loader-dots {
        display: flex;
        gap: 8px;
        justify-content: center;
    }

    .loader-dot {
        width: 12px;
        height: 12px;
        background: #5b8c85;
        border-radius: 50%;
        animation: pulse 1.5s ease-in-out infinite;
    }

    .loader-dot:nth-child(2) { animation-delay: 0.2s; }
    .loader-dot:nth-child(3) { animation-delay: 0.4s; }

    @keyframes pulse {
        0%, 100% { transform: scale(1); opacity: 0.5; }
        50% { transform: scale(1.5); opacity: 1; }
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
        from {
            opacity: 0;
            transform: translateY(20px);
        }
    }

    /* Hero Section Enhanced */
    .services-hero {
        background: linear-gradient(135deg, rgba(236, 245, 243, 0.85) 0%, rgba(212, 232, 228, 0.85) 100%),
                    url('/wp-includes/images/hero-services.png') center center / cover no-repeat;
        padding: 120px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
        min-height: 70vh;
        display: flex;
        align-items: center;
    }

    .services-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 60%;
        height: 200%;
        background: radial-gradient(circle, rgba(91, 140, 133, 0.1) 0%, transparent 70%);
        animation: float 20s ease-in-out infinite;
    }

    .services-hero::after {
        content: '';
        position: absolute;
        bottom: -40%;
        left: -15%;
        width: 50%;
        height: 180%;
        background: radial-gradient(circle, rgba(74, 114, 104, 0.08) 0%, transparent 70%);
        animation: float 25s ease-in-out infinite reverse;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        25% { transform: translateY(-15px) rotate(2deg); }
        50% { transform: translateY(-20px) rotate(5deg); }
        75% { transform: translateY(-10px) rotate(3deg); }
    }

    .hero-content {
        position: relative;
        z-index: 1;
        width: 100%;
    }

    .services-hero h1 {
        font-size: 54px;
        color: #1a2332;
        margin-bottom: 25px;
        font-weight: 700;
        line-height: 1.2;
        opacity: 0;
        animation: heroFadeInUp 0.8s ease forwards;
        animation-delay: 0.2s;
    }

    .services-hero p {
        font-size: 26px;
        color: #1a2332;
        max-width: 900px;
        margin: 0 auto 35px;
        line-height: 1.6;
        font-style: italic;
        font-weight: 500;
        text-shadow: 0 1px 3px rgba(255, 255, 255, 0.5);
        opacity: 0;
        animation: heroFadeInUp 0.8s ease forwards;
        animation-delay: 0.4s;
    }

    .hero-badges {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 30px;
        opacity: 0;
        animation: heroFadeInUp 0.8s ease forwards;
        animation-delay: 0.6s;
    }

    .hero-badge {
        padding: 10px 20px;
        background: white;
        border-radius: 25px;
        color: #5b8c85;
        font-weight: 600;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .hero-badge:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(91, 140, 133, 0.2);
    }

    @keyframes heroFadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
        from {
            opacity: 0;
            transform: translateY(30px);
        }
    }

    /* Services Main Section */
    .services-main {
        padding: 80px 0;
        background-color: #ffffff;
        position: relative;
    }

    .services-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .services-intro {
        text-align: center;
        max-width: 900px;
        margin: 0 auto 70px;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.8s ease forwards;
        animation-delay: 0.2s;
    }

    .services-intro p {
        font-size: 19px;
        line-height: 1.9;
        color: #2c3e50;
    }

    /* Interactive Service Cards */
    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
        gap: 45px;
        margin-bottom: 70px;
    }

    .service-block {
        background: linear-gradient(135deg, #ffffff 0%, #fafbfb 100%);
        border: 1px solid #e8f0ef;
        border-radius: 20px;
        padding: 45px;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        opacity: 0;
        transform: translateY(30px);
        cursor: pointer;
    }

    .service-block.animate-in {
        opacity: 1;
        transform: translateY(0);
    }

    .service-block::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 6px;
        background: linear-gradient(90deg, #5b8c85, #4a7268);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .service-block:hover::before {
        transform: scaleX(1);
    }

    .service-block::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(91, 140, 133, 0.03) 0%, transparent 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
        pointer-events: none;
    }

    .service-block:hover::after {
        opacity: 1;
    }

    .service-block:hover {
        box-shadow: 0 20px 50px rgba(91, 140, 133, 0.15);
        transform: translateY(-5px) scale(1.02);
        background: linear-gradient(135deg, #ffffff 0%, #f5f9f8 100%);
    }

    .service-header {
        display: flex;
        align-items: flex-start;
        margin-bottom: 30px;
        transition: transform 0.3s ease;
    }

    .service-block:hover .service-header {
        transform: translateX(5px);
    }

    .service-icon-large {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #ecf5f3, #d4e8e4);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 36px;
        margin-right: 25px;
        flex-shrink: 0;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        box-shadow: 0 5px 15px rgba(91, 140, 133, 0.2);
    }

    .service-block:hover .service-icon-large {
        transform: rotateY(360deg) scale(1.1);
        background: linear-gradient(135deg, #5b8c85, #4a7268);
        box-shadow: 0 8px 25px rgba(91, 140, 133, 0.3);
    }

    .service-icon-large::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 20px;
        border: 2px solid #5b8c85;
        opacity: 0;
        animation: iconPulse 2s ease-in-out infinite;
    }

    .service-block:hover .service-icon-large::after {
        animation-play-state: running;
    }

    @keyframes iconPulse {
        0% {
            transform: scale(1);
            opacity: 1;
        }
        100% {
            transform: scale(1.3);
            opacity: 0;
        }
    }

    .service-title-section h2 {
        color: #1a2332;
        font-size: 28px;
        margin-bottom: 10px;
        transition: color 0.3s ease;
    }

    .service-block:hover .service-title-section h2 {
        color: #5b8c85;
    }

    .service-subtitle {
        color: #5b8c85;
        font-size: 17px;
        font-style: italic;
        opacity: 0.9;
    }

    .service-description {
        color: #2c3e50;
        line-height: 1.9;
        margin-bottom: 30px;
        font-size: 16px;
        transition: color 0.3s ease;
    }

    /* Expandable Features Section */
    .service-features {
        margin-bottom: 30px;
        position: relative;
    }

    .service-features h4 {
        color: #1a2332;
        font-size: 19px;
        margin-bottom: 20px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
        transition: color 0.3s ease;
        user-select: none;
        padding: 10px;
        background: linear-gradient(135deg, #f9fbfa, transparent);
        border-radius: 8px;
    }

    .service-features h4:hover {
        color: #5b8c85;
        background: linear-gradient(135deg, #ecf5f3, transparent);
    }

    .service-features h4::after {
        content: '▼';
        font-size: 14px;
        transition: transform 0.3s ease;
        color: #5b8c85;
        display: inline-block;
        width: 20px;
        height: 20px;
        text-align: center;
    }

    .service-features.expanded h4::after {
        transform: rotate(180deg);
    }

    .feature-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: grid;
        grid-template-columns: 1fr;
        gap: 15px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        opacity: 0;
    }

    .service-features.expanded .feature-list {
        max-height: 600px;
        opacity: 1;
        transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s ease 0.1s;
    }

    .feature-list li {
        padding: 12px 12px 12px 35px;
        position: relative;
        color: #6c7983;
        line-height: 1.7;
        background: #f9fbfa;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .service-features.expanded .feature-list li {
        animation: slideIn 0.5s ease forwards;
        opacity: 0;
    }

    .service-features.expanded .feature-list li:nth-child(1) { animation-delay: 0.1s; }
    .service-features.expanded .feature-list li:nth-child(2) { animation-delay: 0.15s; }
    .service-features.expanded .feature-list li:nth-child(3) { animation-delay: 0.2s; }
    .service-features.expanded .feature-list li:nth-child(4) { animation-delay: 0.25s; }
    .service-features.expanded .feature-list li:nth-child(5) { animation-delay: 0.3s; }
    .service-features.expanded .feature-list li:nth-child(6) { animation-delay: 0.35s; }
    .service-features.expanded .feature-list li:nth-child(7) { animation-delay: 0.4s; }

    @keyframes slideIn {
        from {
            transform: translateX(-20px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .feature-list li:hover {
        background: linear-gradient(135deg, #ecf5f3, #e8f0ef);
        transform: translateX(5px);
    }

    .feature-list li::before {
        content: '✨';
        position: absolute;
        left: 10px;
        color: #5b8c85;
        font-size: 16px;
    }

    /* Benefits Section Enhanced */
    .service-benefits {
        background: linear-gradient(135deg, #f9fbfa 0%, #ecf5f3 100%);
        padding: 25px;
        border-radius: 15px;
        margin-bottom: 30px;
        border: 1px solid #e8f0ef;
        transition: all 0.3s ease;
    }

    .service-block:hover .service-benefits {
        box-shadow: 0 5px 20px rgba(91, 140, 133, 0.1);
    }

    .service-benefits h4 {
        color: #1a2332;
        font-size: 19px;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    .benefit-item {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #2c3e50;
        font-size: 15px;
        padding: 10px;
        background: white;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .benefit-item:hover {
        transform: translateX(5px);
        box-shadow: 0 3px 10px rgba(91, 140, 133, 0.15);
    }

    .benefit-item::before {
        content: '✓';
        color: white;
        background: linear-gradient(135deg, #5b8c85, #4a7268);
        width: 20px;
        height: 20px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-weight: bold;
        flex-shrink: 0;
    }

    /* CTA Buttons Enhanced */
    .service-cta {
        display: flex;
        gap: 20px;
        margin-top: 35px;
    }

    .btn-service {
        padding: 14px 32px;
        background: linear-gradient(135deg, #5b8c85, #4a7268);
        color: white;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border: none;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        position: relative;
        overflow: hidden;
    }

    .btn-service::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }

    .btn-service:hover::before {
        width: 300px;
        height: 300px;
    }

    .btn-service:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(91, 140, 133, 0.3);
    }

    .btn-service-outline {
        padding: 14px 32px;
        background-color: transparent;
        color: #5b8c85;
        border: 2px solid #5b8c85;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        position: relative;
        overflow: hidden;
    }

    .btn-service-outline::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(91, 140, 133, 0.1), transparent);
        transition: left 0.5s;
    }

    .btn-service-outline:hover::before {
        left: 100%;
    }

    .btn-service-outline:hover {
        background: linear-gradient(135deg, #ecf5f3, #e8f0ef);
        border-color: #4a7268;
        color: #4a7268;
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(91, 140, 133, 0.15);
    }

    /* Specialist Section Enhanced */
    .specialist-section {
        background: linear-gradient(180deg, #f9fbfa 0%, #ffffff 100%);
        padding: 80px 0;
        margin-top: 60px;
        position: relative;
        overflow: hidden;
    }

    .specialist-section::before {
        content: '';
        position: absolute;
        top: -50%;
        left: 50%;
        transform: translateX(-50%);
        width: 200%;
        height: 200%;
        background: radial-gradient(ellipse at center, rgba(91, 140, 133, 0.05) 0%, transparent 70%);
    }

    .specialist-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
        z-index: 1;
    }

    .specialist-title {
        text-align: center;
        color: #1a2332;
        font-size: 42px;
        margin-bottom: 60px;
        position: relative;
        opacity: 0;
        animation: fadeInUp 0.8s ease forwards;
    }

    .specialist-title::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: linear-gradient(90deg, #5b8c85, #4a7268);
    }

    .specialist-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 35px;
    }

    .specialist-card {
        background: white;
        padding: 35px;
        border-radius: 20px;
        border-left: 5px solid transparent;
        border-image: linear-gradient(180deg, #5b8c85 0%, #4a7268 100%);
        border-image-slice: 1;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        opacity: 0;
        transform: translateY(30px);
        position: relative;
        overflow: hidden;
    }

    .specialist-card.animate-in {
        opacity: 1;
        transform: translateY(0);
    }

    .specialist-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(91, 140, 133, 0.05) 0%, transparent 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .specialist-card:hover::before {
        opacity: 1;
    }

    .specialist-card:hover {
        box-shadow: 0 15px 40px rgba(91, 140, 133, 0.15);
        transform: translateX(10px) translateY(-5px);
    }

    .specialist-card h3 {
        color: #1a2332;
        font-size: 24px;
        margin-bottom: 20px;
        transition: color 0.3s ease;
    }

    .specialist-card:hover h3 {
        color: #5b8c85;
    }

    .specialist-card p {
        color: #6c7983;
        line-height: 1.8;
        margin-bottom: 25px;
    }

    .specialist-link {
        color: #5b8c85;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
        position: relative;
        padding-bottom: 2px;
    }

    .specialist-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background: #5b8c85;
        transition: width 0.3s ease;
    }

    .specialist-link:hover {
        gap: 15px;
        color: #4a7268;
    }

    .specialist-link:hover::after {
        width: 100%;
    }

    /* Responsive Styles */
    @media (max-width: 992px) {
        .services-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .specialist-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }
    }

    @media (max-width: 768px) {
        .services-hero {
            padding: 80px 20px;
            min-height: auto;
        }

        .services-hero h1 {
            font-size: 32px;
            line-height: 1.3;
            padding: 0 10px;
        }

        .services-hero p {
            font-size: 18px;
            padding: 0 10px;
        }

        .hero-badges {
            gap: 10px;
            margin-top: 20px;
        }

        .hero-badge {
            font-size: 14px;
            padding: 8px 16px;
        }

        .services-main {
            padding: 50px 0;
        }

        .services-intro {
            margin-bottom: 40px;
            padding: 0 15px;
        }

        .services-intro p {
            font-size: 16px;
            line-height: 1.8;
        }

        .services-grid {
            grid-template-columns: 1fr;
            gap: 30px;
            padding: 0 15px;
        }

        .service-block {
            padding: 30px 20px;
            border-radius: 15px;
        }

        .service-block:hover {
            transform: none;
            box-shadow: 0 10px 30px rgba(91, 140, 133, 0.12);
        }

        .service-header {
            flex-direction: row;
            align-items: center;
            margin-bottom: 20px;
        }

        .service-icon-large {
            width: 60px;
            height: 60px;
            font-size: 28px;
            margin-right: 15px;
            border-radius: 15px;
        }

        .service-block:hover .service-icon-large {
            transform: scale(1.1);
        }

        .service-title-section h2 {
            font-size: 22px;
        }

        .service-subtitle {
            font-size: 14px;
        }

        .service-description {
            font-size: 15px;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .service-features h4 {
            font-size: 17px;
            padding: 8px;
        }

        .feature-list li {
            padding: 10px 10px 10px 30px;
            font-size: 14px;
        }

        .service-benefits {
            padding: 20px 15px;
        }

        .service-benefits h4 {
            font-size: 17px;
            margin-bottom: 15px;
        }

        .benefits-grid {
            grid-template-columns: 1fr;
            gap: 10px;
        }

        .benefit-item {
            font-size: 14px;
            padding: 8px;
        }

        .service-cta {
            flex-direction: column;
            gap: 15px;
            margin-top: 25px;
        }

        .btn-service,
        .btn-service-outline {
            width: 100%;
            text-align: center;
            padding: 12px 25px;
            font-size: 15px;
        }

        .specialist-section {
            padding: 50px 0;
            margin-top: 40px;
        }

        .specialist-title {
            font-size: 28px;
            margin-bottom: 40px;
            padding: 0 15px;
        }

        .specialist-grid {
            grid-template-columns: 1fr;
            gap: 25px;
            padding: 0 15px;
        }

        .specialist-card {
            padding: 25px 20px;
            border-radius: 15px;
        }

        .specialist-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(91, 140, 133, 0.12);
        }

        .specialist-card h3 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .specialist-card p {
            font-size: 14px;
            line-height: 1.7;
        }

        .specialist-link {
            font-size: 14px;
        }

        /* Disable complex animations on mobile for performance */
        .service-block,
        .specialist-card {
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
    }

    @media (max-width: 480px) {
        .services-hero h1 {
            font-size: 26px;
        }

        .services-hero p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .hero-badge {
            font-size: 12px;
            padding: 6px 12px;
        }

        .service-block {
            padding: 25px 15px;
        }

        .service-icon-large {
            width: 50px;
            height: 50px;
            font-size: 24px;
        }

        .service-title-section h2 {
            font-size: 20px;
        }

        .service-features h4 {
            font-size: 16px;
        }

        .specialist-title {
            font-size: 24px;
        }
    }

    /* Touch device optimizations */
    @media (hover: none) and (pointer: coarse) {
        .service-block:hover,
        .specialist-card:hover {
            transform: none;
        }

        .service-features h4 {
            padding: 12px;
            background: linear-gradient(135deg, #ecf5f3, transparent);
        }

        .btn-service,
        .btn-service-outline {
            -webkit-tap-highlight-color: transparent;
        }
    }
</style>

<main id="primary" class="site-main">
    <!-- Page Loader -->
    <div class="page-loader" id="pageLoader">
        <div class="loader-content">
            <div class="loader-logo">EquiMind</div>
            <div class="loader-dots">
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
            </div>
        </div>
    </div>

    <section class="services-hero">
        <div class="container hero-content">
            <h1>Professional Therapy Services</h1>
            <p>Comprehensive support for adults, children, and young people through evidence-based therapeutic approaches</p>
            <div class="hero-badges">
                <div class="hero-badge">✨ Trauma-Informed</div>
                <div class="hero-badge">🌍 Culturally Sensitive</div>
                <div class="hero-badge">💚 Person-Centered</div>
                <div class="hero-badge">🔒 Confidential</div>
            </div>
        </div>
    </section>

    <section class="services-main">
        <div class="services-container">
            <div class="services-intro">
                <p>
                    Every individual's journey is unique. I offer a range of therapeutic services tailored to meet
                    your specific needs, whether you're seeking support for yourself or your child.
                    All services are provided with cultural sensitivity, trauma-informed care, and a commitment to
                    your wellbeing.
                </p>
            </div>

            <div class="services-grid">
                <div class="service-block" data-service="adult-therapy">
                    <div class="service-header">
                        <div class="service-icon-large">👥</div>
                        <div class="service-title-section">
                            <h2>Adult Therapy</h2>
                            <p class="service-subtitle">Individual counselling for personal growth and healing</p>
                        </div>
                    </div>

                    <p class="service-description">
                        Providing a safe, confidential space to explore your thoughts, feelings, and experiences.
                        Whether you're dealing with immediate challenges or long-standing patterns, I offer
                        compassionate support tailored to your unique circumstances.
                    </p>

                    <div class="service-features">
                        <h4>Areas of Support</h4>
                        <ul class="feature-list">
                            <li>Anxiety, stress, and burnout</li>
                            <li>Depression and low mood</li>
                            <li>Grief, loss, and bereavement</li>
                            <li>Relationship and family difficulties</li>
                            <li>Workplace stress and conflict</li>
                            <li>Trauma and post-traumatic growth</li>
                            <li>Self-esteem and confidence issues</li>
                        </ul>
                    </div>

                    <div class="service-benefits">
                        <h4>What You'll Gain</h4>
                        <div class="benefits-grid">
                            <span class="benefit-item">Greater emotional clarity</span>
                            <span class="benefit-item">Enhanced coping strategies</span>
                            <span class="benefit-item">Improved relationships</span>
                            <span class="benefit-item">Stronger sense of self</span>
                        </div>
                    </div>

                    <div class="service-cta">
                        <a href="<?php echo esc_url(home_url('/adult-therapy')); ?>" class="btn-service">Learn More</a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-service-outline">Book Consultation</a>
                    </div>
                </div>

                <div class="service-block" data-service="child-therapy">
                    <div class="service-header">
                        <div class="service-icon-large">🌱</div>
                        <div class="service-title-section">
                            <h2>Children & Young People</h2>
                            <p class="service-subtitle">Developmentally appropriate support for young minds</p>
                        </div>
                    </div>

                    <p class="service-description">
                        Working with children and young people requires a special approach. I create a warm,
                        engaging environment where young clients feel safe to express themselves through talking,
                        play, and creative activities.
                    </p>

                    <div class="service-features">
                        <h4>Therapeutic Approach</h4>
                        <ul class="feature-list">
                            <li>Age-appropriate interventions</li>
                            <li>Creative and play-based techniques</li>
                            <li>School-related challenges support</li>
                            <li>Emotional regulation skills</li>
                            <li>Building resilience and confidence</li>
                            <li>Family involvement when appropriate</li>
                        </ul>
                    </div>

                    <div class="service-benefits">
                        <h4>Focus Areas</h4>
                        <div class="benefits-grid">
                            <span class="benefit-item">Anxiety and worries</span>
                            <span class="benefit-item">Behavioural challenges</span>
                            <span class="benefit-item">Family changes</span>
                            <span class="benefit-item">School difficulties</span>
                        </div>
                    </div>

                    <div class="service-cta">
                        <a href="<?php echo esc_url(home_url('/child-therapy')); ?>" class="btn-service">Learn More</a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-service-outline">Book Consultation</a>
                    </div>
                </div>

                <div class="service-block" data-service="hypnotherapy">
                    <div class="service-header">
                        <div class="service-icon-large">🧘</div>
                        <div class="service-title-section">
                            <h2>Hypnotherapy</h2>
                            <p class="service-subtitle">Gentle, focused support for lasting change</p>
                        </div>
                    </div>

                    <p class="service-description">
                        Clinical hypnotherapy can be a powerful tool for addressing subconscious patterns and
                        facilitating positive change. I offer safe, ethical hypnotherapy for both adults and
                        children, always with clear consent and collaboration.
                    </p>

                    <div class="service-features">
                        <h4>Applications</h4>
                        <ul class="feature-list">
                            <li>Pain management</li>
                            <li>Phobia reduction</li>
                            <li>Confidence building</li>
                            <li>Stress and anxiety management</li>
                            <li>Habit change</li>
                            <li>Performance enhancement</li>
                        </ul>
                    </div>

                    <div class="service-benefits">
                        <h4>Our Approach</h4>
                        <div class="benefits-grid">
                            <span class="benefit-item">Client-led process</span>
                            <span class="benefit-item">Clear consent</span>
                            <span class="benefit-item">Safe techniques</span>
                            <span class="benefit-item">Integrated with therapy</span>
                        </div>
                    </div>

                    <div class="service-cta">
                        <a href="<?php echo esc_url(home_url('/hypnotherapy')); ?>" class="btn-service">Learn More</a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-service-outline">Book Consultation</a>
                    </div>
                </div>

                <div class="service-block" data-service="online-therapy">
                    <div class="service-header">
                        <div class="service-icon-large">💻</div>
                        <div class="service-title-section">
                            <h2>Online Therapy</h2>
                            <p class="service-subtitle">Accessible support from wherever you are</p>
                        </div>
                    </div>

                    <p class="service-description">
                        All services are available online, providing flexible, convenient access to therapy from
                        the comfort of your own space. Online therapy has been shown to be as effective as
                        in-person sessions for many concerns.
                    </p>

                    <div class="service-features">
                        <h4>Benefits of Online Therapy</h4>
                        <ul class="feature-list">
                            <li>Access from anywhere in the UK</li>
                            <li>No travel time or costs</li>
                            <li>Comfort of familiar environment</li>
                            <li>Flexible scheduling options</li>
                            <li>Secure, confidential platform</li>
                            <li>Same quality of care</li>
                        </ul>
                    </div>

                    <div class="service-benefits">
                        <h4>Technical Requirements</h4>
                        <div class="benefits-grid">
                            <span class="benefit-item">Stable internet</span>
                            <span class="benefit-item">Private space</span>
                            <span class="benefit-item">Device with camera</span>
                            <span class="benefit-item">Headphones recommended</span>
                        </div>
                    </div>

                    <div class="service-cta">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-service">Get Started</a>
                        <a href="<?php echo esc_url(home_url('/faqs')); ?>" class="btn-service-outline">View FAQs</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="specialist-section">
        <div class="specialist-container">
            <h2 class="specialist-title">Specialist Support Areas</h2>

            <div class="specialist-grid">
                <div class="specialist-card">
                    <h3>Cultural & Racial Identity</h3>
                    <p>
                        A safe space to explore experiences of racism, microaggressions, and cultural expectations.
                        I bring lived experience and understanding to support you in navigating identity, belonging,
                        and cultural complexity.
                    </p>
                    <a href="<?php echo esc_url(home_url('/specialist-support')); ?>" class="specialist-link">Explore this service →</a>
                </div>

                <div class="specialist-card">
                    <h3>Baby Loss & Bereavement</h3>
                    <p>
                        Sensitive, non-judgmental support for those experiencing the unique grief of baby loss.
                        I provide a compassionate space to process your loss, honour your baby's memory, and
                        navigate the complex emotions of grief.
                    </p>
                    <a href="<?php echo esc_url(home_url('/specialist-support')); ?>" class="specialist-link">Explore this service →</a>
                </div>

                <div class="specialist-card">
                    <h3>Domestic Abuse Recovery</h3>
                    <p>
                        Trauma-informed support for survivors of domestic abuse. Working at your pace, we focus
                        on safety, rebuilding autonomy, processing trauma, and developing strategies for healing
                        and empowerment.
                    </p>
                    <a href="<?php echo esc_url(home_url('/specialist-support')); ?>" class="specialist-link">Explore this service →</a>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Page Loader
        const pageLoader = document.getElementById('pageLoader');
        if (pageLoader) {
            setTimeout(() => {
                pageLoader.classList.add('loaded');
            }, 800);
        }

        // Service Blocks Animation
        const serviceBlocks = document.querySelectorAll('.service-block');
        const blockObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animate-in');
                        entry.target.style.transitionDelay = `${index * 0.15}s`;
                    }, index * 100);
                    blockObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        serviceBlocks.forEach(block => {
            blockObserver.observe(block);
        });

        // Specialist Cards Animation
        const specialistCards = document.querySelectorAll('.specialist-card');
        const cardObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animate-in');
                        entry.target.style.transitionDelay = `${index * 0.2}s`;
                    }, index * 150);
                    cardObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -30px 0px'
        });

        specialistCards.forEach(card => {
            cardObserver.observe(card);
        });

        // Expandable Features Toggle
        const featureSections = document.querySelectorAll('.service-features');
        featureSections.forEach(section => {
            const heading = section.querySelector('h4');
            const list = section.querySelector('.feature-list');

            // Start with sections expanded on desktop, collapsed on mobile
            const isMobile = window.innerWidth <= 768;
            if (!isMobile) {
                section.classList.add('expanded');
                if (list) {
                    list.style.maxHeight = list.scrollHeight + 'px';
                }
            }

            if (heading && list) {
                heading.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    section.classList.toggle('expanded');
                    const isExpanded = section.classList.contains('expanded');

                    if (isExpanded) {
                        // Calculate the actual height needed
                        list.style.maxHeight = list.scrollHeight + 'px';

                        // Recalculate on window resize
                        setTimeout(() => {
                            list.style.maxHeight = list.scrollHeight + 'px';
                        }, 100);
                    } else {
                        list.style.maxHeight = '0px';
                    }
                });

                // Add keyboard accessibility
                heading.setAttribute('tabindex', '0');
                heading.setAttribute('role', 'button');
                heading.setAttribute('aria-expanded', section.classList.contains('expanded'));

                heading.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        heading.click();
                    }
                });
            }
        });

        // Recalculate heights on window resize
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                featureSections.forEach(section => {
                    const list = section.querySelector('.feature-list');
                    if (list && section.classList.contains('expanded')) {
                        list.style.maxHeight = list.scrollHeight + 'px';
                    }
                });
            }, 250);
        });

        // Parallax Effect
        let ticking = false;
        function updateParallax() {
            const scrolled = window.pageYOffset;
            const heroSection = document.querySelector('.services-hero');

            if (heroSection && scrolled < window.innerHeight) {
                const speed = 0.5;
                const yPos = -(scrolled * speed);
                heroSection.style.backgroundPositionY = `${yPos}px`;
            }

            ticking = false;
        }

        function requestTick() {
            if (!ticking) {
                window.requestAnimationFrame(updateParallax);
                ticking = true;
            }
        }

        window.addEventListener('scroll', requestTick);

        // Service Block Interactive Hover
        serviceBlocks.forEach(block => {
            block.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) scale(1.02)';
            });

            block.addEventListener('mouseleave', function() {
                if (this.classList.contains('animate-in')) {
                    this.style.transform = 'translateY(0) scale(1)';
                }
            });
        });

        // Button Ripple Effect
        const buttons = document.querySelectorAll('.btn-service, .btn-service-outline');
        buttons.forEach(btn => {
            btn.addEventListener('click', function(e) {
                const rect = this.getBoundingClientRect();
                const ripple = document.createElement('span');
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;

                ripple.style.position = 'absolute';
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.style.borderRadius = '50%';
                ripple.style.background = 'rgba(255, 255, 255, 0.5)';
                ripple.style.animation = 'ripple 0.6s ease-out';
                ripple.style.pointerEvents = 'none';

                this.appendChild(ripple);
                setTimeout(() => ripple.remove(), 600);
            });
        });

        // Add Ripple Animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        // Smooth Scroll for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Text Animation on Scroll
        const animateText = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        };

        const textObserver = new IntersectionObserver(animateText, {
            threshold: 0.5
        });

        document.querySelectorAll('.specialist-title, .services-intro').forEach(el => {
            el.style.animationPlayState = 'paused';
            textObserver.observe(el);
        });

        // Count Animation for Hero Badges
        const badges = document.querySelectorAll('.hero-badge');
        const badgeObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'bounceIn 0.6s ease forwards';
                    badgeObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        badges.forEach(badge => {
            badgeObserver.observe(badge);
        });

        // Add Bounce Animation
        const bounceStyle = document.createElement('style');
        bounceStyle.textContent = `
            @keyframes bounceIn {
                0% {
                    transform: scale(0.3);
                    opacity: 0;
                }
                50% {
                    transform: scale(1.05);
                }
                70% {
                    transform: scale(0.9);
                }
                100% {
                    transform: scale(1);
                    opacity: 1;
                }
            }
        `;
        document.head.appendChild(bounceStyle);
    });
</script>

<?php get_footer(); ?>