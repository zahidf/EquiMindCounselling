<?php
/*
Template Name: My Approach
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

    .loader-text {
        font-size: 24px;
        color: #1a2332;
        font-weight: 600;
        opacity: 0;
        animation: fadeInUp 0.8s ease forwards;
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
    .approach-hero {
        background: linear-gradient(135deg, rgba(236, 245, 243, 0.85) 0%, rgba(212, 232, 228, 0.85) 100%),
                    url('/wp-includes/images/hero-approach.png') center center / cover no-repeat;
        padding: 120px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
        min-height: 70vh;
        display: flex;
        align-items: center;
    }

    .approach-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 60%;
        height: 200%;
        background: radial-gradient(circle, rgba(91, 140, 133, 0.1) 0%, transparent 70%);
        animation: float 20s ease-in-out infinite;
    }

    .approach-hero::after {
        content: '';
        position: absolute;
        bottom: -40%;
        left: -20%;
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

    .approach-hero-content {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
        z-index: 1;
    }

    .approach-hero h1 {
        font-size: 52px;
        color: #1a2332;
        margin-bottom: 25px;
        font-weight: 700;
        line-height: 1.2;
        opacity: 0;
        animation: heroFadeInUp 0.8s ease forwards;
        animation-delay: 0.2s;
    }

    .approach-hero p {
        font-size: 26px;
        color: #1a2332;
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
        transform: translateY(-3px) scale(1.05);
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

    /* Philosophy Section */
    .philosophy-section {
        padding: 80px 0;
        background-color: #ffffff;
        position: relative;
    }

    .philosophy-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .philosophy-intro {
        max-width: 900px;
        margin: 0 auto 60px;
        text-align: center;
        opacity: 0;
        transform: translateY(20px);
    }

    .philosophy-intro.animate-in {
        animation: fadeInUp 0.8s ease forwards;
    }

    .philosophy-intro h2 {
        color: #1a2332;
        font-size: 38px;
        margin-bottom: 30px;
        position: relative;
        display: inline-block;
    }

    .philosophy-intro h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, #5b8c85, #4a7268);
    }

    .philosophy-intro p {
        color: #2c3e50;
        font-size: 19px;
        line-height: 1.9;
    }

    /* Modalities Section Enhanced */
    .modalities-section {
        background: linear-gradient(180deg, #f9fbfa 0%, #ffffff 100%);
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }

    .modalities-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 200%;
        height: 100%;
        background: radial-gradient(ellipse at center, rgba(91, 140, 133, 0.03) 0%, transparent 70%);
    }

    .modalities-title {
        text-align: center;
        color: #1a2332;
        font-size: 38px;
        margin-bottom: 50px;
        opacity: 0;
        animation: fadeInUp 0.8s ease forwards;
    }

    .modalities-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 45px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
        z-index: 1;
    }

    .modality-card {
        background: white;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        opacity: 0;
        transform: translateY(30px);
        cursor: pointer;
    }

    .modality-card.animate-in {
        opacity: 1;
        transform: translateY(0);
    }

    .modality-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 6px;
        background: linear-gradient(90deg, #5b8c85, #4a7268);
        transform: scaleX(0);
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        transform-origin: left;
    }

    .modality-card:hover::before {
        transform: scaleX(1);
    }

    .modality-card::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(91, 140, 133, 0.05) 0%, transparent 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
    }

    .modality-card:hover::after {
        opacity: 1;
    }

    .modality-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 15px 40px rgba(91, 140, 133, 0.15);
    }

    .modality-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #ecf5f3, #d4e8e4);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        margin-bottom: 25px;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
    }

    .modality-card:hover .modality-icon {
        transform: rotateY(360deg) scale(1.1);
        background: linear-gradient(135deg, #5b8c85, #4a7268);
        box-shadow: 0 8px 25px rgba(91, 140, 133, 0.3);
    }

    .modality-icon::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 20px;
        border: 2px solid #5b8c85;
        opacity: 0;
        animation: iconPulse 2s ease-in-out infinite;
    }

    .modality-card:hover .modality-icon::after {
        animation-play-state: running;
    }

    @keyframes iconPulse {
        0% {
            transform: scale(1);
            opacity: 1;
        }
        100% {
            transform: scale(1.4);
            opacity: 0;
        }
    }

    .modality-card h3 {
        color: #1a2332;
        font-size: 26px;
        margin-bottom: 15px;
        transition: color 0.3s ease;
    }

    .modality-card:hover h3 {
        color: #5b8c85;
    }

    .modality-subtitle {
        color: #5b8c85;
        font-size: 15px;
        font-style: italic;
        margin-bottom: 20px;
        opacity: 0.9;
    }

    .modality-card p {
        color: #2c3e50;
        line-height: 1.8;
        margin-bottom: 25px;
    }

    .modality-techniques {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .modality-techniques li {
        padding: 10px 0;
        color: #6c7983;
        position: relative;
        padding-left: 30px;
        font-size: 15px;
        transition: all 0.3s ease;
    }

    .modality-techniques li::before {
        content: '→';
        position: absolute;
        left: 0;
        color: #5b8c85;
        font-weight: bold;
        transition: transform 0.3s ease;
    }

    .modality-card:hover .modality-techniques li {
        padding-left: 35px;
    }

    .modality-card:hover .modality-techniques li::before {
        transform: translateX(5px);
    }

    /* Integration Section Enhanced */
    .integration-section {
        padding: 80px 0;
        background-color: #ffffff;
        position: relative;
    }

    .integration-content {
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .integration-content h2 {
        text-align: center;
        color: #1a2332;
        font-size: 38px;
        margin-bottom: 50px;
        position: relative;
    }

    .integration-visual {
        background: linear-gradient(135deg, #f9fbfa 0%, #ecf5f3 100%);
        padding: 50px;
        border-radius: 25px;
        margin-bottom: 40px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        position: relative;
        overflow: hidden;
    }

    .integration-visual::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 40%;
        height: 200%;
        background: radial-gradient(circle, rgba(91, 140, 133, 0.1) 0%, transparent 70%);
        animation: float 15s ease-in-out infinite;
    }

    .integration-circles {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: -30px;
        margin: 40px 0;
        position: relative;
        z-index: 1;
    }

    .circle {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        font-weight: 600;
        color: white;
        text-align: center;
        padding: 20px;
        position: relative;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
    }

    .circle:nth-child(1) {
        background: linear-gradient(135deg, #5b8c85, #4a7268);
        z-index: 3;
        animation: circleFloat 3s ease-in-out infinite;
    }

    .circle:nth-child(2) {
        background: linear-gradient(135deg, #7a9d96, #6b8e87);
        margin-left: -30px;
        z-index: 2;
        animation: circleFloat 3s ease-in-out infinite 0.5s;
    }

    .circle:nth-child(3) {
        background: linear-gradient(135deg, #94afa9, #85a09a);
        margin-left: -30px;
        z-index: 1;
        animation: circleFloat 3s ease-in-out infinite 1s;
    }

    @keyframes circleFloat {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    .circle:hover {
        transform: scale(1.1) translateY(-5px);
        box-shadow: 0 10px 30px rgba(91, 140, 133, 0.3);
        z-index: 10 !important;
    }

    .integration-text {
        color: #2c3e50;
        line-height: 1.9;
        font-size: 17px;
        position: relative;
        z-index: 1;
    }

    /* Values Section Enhanced */
    .values-section {
        background: linear-gradient(180deg, #ecf5f3 0%, #f9fbfa 100%);
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }

    .values-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .values-header {
        text-align: center;
        margin-bottom: 60px;
        opacity: 0;
        animation: fadeInUp 0.8s ease forwards;
    }

    .values-header h2 {
        color: #1a2332;
        font-size: 38px;
        margin-bottom: 20px;
    }

    .values-header p {
        color: #5b8c85;
        font-size: 19px;
        max-width: 700px;
        margin: 0 auto;
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 35px;
    }

    .value-card {
        background: white;
        padding: 35px;
        border-radius: 20px;
        text-align: center;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        opacity: 0;
        transform: translateY(30px) rotateX(-10deg);
        transform-style: preserve-3d;
        perspective: 1000px;
    }

    .value-card.animate-in {
        opacity: 1;
        transform: translateY(0) rotateX(0);
    }

    .value-card:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0 15px 40px rgba(91, 140, 133, 0.15);
    }

    .value-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #5b8c85, #4a7268);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        font-size: 36px;
        color: white;
        transition: transform 0.6s ease, box-shadow 0.3s ease;
        position: relative;
        transform-style: preserve-3d;
        perspective: 1000px;
    }

    .value-card:hover .value-icon {
        transform: scale(1.1);
        box-shadow: 0 8px 25px rgba(91, 140, 133, 0.4);
    }

    .value-icon::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 3px solid #5b8c85;
        opacity: 0;
        transform: scale(1);
        transition: all 0.3s ease;
    }

    .value-card:hover .value-icon::after {
        opacity: 0.3;
        transform: scale(1.2);
    }

    .value-card h3 {
        color: #1a2332;
        font-size: 22px;
        margin-bottom: 15px;
    }

    .value-card p {
        color: #6c7983;
        line-height: 1.7;
        font-size: 15px;
    }

    /* Process Section Enhanced */
    .process-section {
        padding: 80px 0;
        background-color: #ffffff;
        position: relative;
    }

    .process-content {
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .process-content h2 {
        text-align: center;
        color: #1a2332;
        font-size: 38px;
        margin-bottom: 50px;
    }

    .expectations-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        margin-top: 50px;
    }

    .expectation-box {
        background: linear-gradient(135deg, #f9fbfa 0%, #ffffff 100%);
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        opacity: 0;
        transform: translateX(-30px);
        border-left: 5px solid transparent;
        border-image: linear-gradient(180deg, #5b8c85 0%, #4a7268 100%);
        border-image-slice: 1;
    }

    .expectation-box:nth-child(2) {
        transform: translateX(30px);
    }

    .expectation-box.animate-in {
        opacity: 1;
        transform: translateX(0);
    }

    .expectation-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(91, 140, 133, 0.15);
    }

    .expectation-box h4 {
        color: #5b8c85;
        font-size: 22px;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .expectation-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .expectation-list li {
        padding: 12px 0;
        color: #2c3e50;
        position: relative;
        padding-left: 30px;
        transition: all 0.3s ease;
    }

    .expectation-list li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: white;
        font-weight: bold;
        background: linear-gradient(135deg, #5b8c85, #4a7268);
        width: 20px;
        height: 20px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
    }

    .expectation-list li:hover {
        padding-left: 35px;
        color: #1a2332;
    }

    /* CTA Section Enhanced */
    .cta-section {
        background: linear-gradient(135deg, #5b8c85 0%, #4a7268 100%);
        padding: 80px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .cta-section::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 40%;
        height: 200%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
        animation: float 20s ease-in-out infinite;
    }

    .cta-content {
        position: relative;
        z-index: 1;
    }

    .cta-content h2 {
        color: white;
        font-size: 42px;
        margin-bottom: 20px;
        opacity: 0;
        animation: fadeInUp 0.8s ease forwards;
    }

    .cta-content p {
        color: white;
        opacity: 0.95;
        font-size: 20px;
        margin-bottom: 40px;
        opacity: 0;
        animation: fadeInUp 0.8s ease forwards;
        animation-delay: 0.2s;
    }

    .cta-buttons {
        display: flex;
        gap: 25px;
        justify-content: center;
        margin-top: 35px;
        flex-wrap: wrap;
        opacity: 0;
        animation: fadeInUp 0.8s ease forwards;
        animation-delay: 0.4s;
    }

    .btn-white {
        background-color: #ffffff;
        color: #1a2332;
        padding: 16px 36px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        font-size: 17px;
        display: inline-block;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        border: 2px solid #ffffff;
        position: relative;
        overflow: hidden;
    }

    .btn-white::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        background: rgba(91, 140, 133, 0.1);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }

    .btn-white:hover::before {
        width: 300px;
        height: 300px;
    }

    .btn-white:hover {
        background-color: #f9fbfa;
        transform: translateY(-3px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
        color: #5b8c85;
    }

    .btn-outline-white {
        background-color: transparent;
        color: #ffffff;
        padding: 16px 36px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        font-size: 17px;
        display: inline-block;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border: 2px solid #ffffff;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        position: relative;
        overflow: hidden;
    }

    .btn-outline-white::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s;
    }

    .btn-outline-white:hover::before {
        left: 100%;
    }

    .btn-outline-white:hover {
        background-color: #ffffff;
        color: #5b8c85;
        transform: translateY(-3px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .modalities-grid {
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 35px;
        }
    }

    @media (max-width: 768px) {
        .approach-hero {
            padding: 80px 20px;
            min-height: auto;
        }

        .approach-hero h1 {
            font-size: 36px;
        }

        .approach-hero p {
            font-size: 20px;
        }

        .hero-badges {
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .modalities-grid {
            grid-template-columns: 1fr;
            padding: 0 15px;
        }

        .modality-card {
            padding: 30px;
        }

        .integration-circles {
            flex-direction: column;
            gap: 20px;
        }

        .circle {
            margin-left: 0 !important;
            width: 120px;
            height: 120px;
        }

        .values-grid {
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .expectations-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .expectation-box {
            padding: 30px;
            transform: none;
        }

        .cta-buttons {
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .btn-white,
        .btn-outline-white {
            width: 260px;
            text-align: center;
        }

        .philosophy-intro h2,
        .integration-content h2,
        .values-header h2,
        .process-content h2 {
            font-size: 28px;
        }

        /* Disable complex animations on mobile */
        .modality-card:hover,
        .value-card:hover {
            transform: translateY(-3px);
        }

        .modality-icon,
        .value-icon {
            transition: transform 0.3s ease;
        }

        .modality-card:hover .modality-icon,
        .value-card:hover .value-icon {
            transform: scale(1.1);
        }
    }

    @media (max-width: 480px) {
        .approach-hero h1 {
            font-size: 28px;
        }

        .approach-hero p {
            font-size: 18px;
        }

        .hero-badge {
            font-size: 14px;
            padding: 8px 16px;
        }

        .modality-card {
            padding: 25px 20px;
        }

        .value-card {
            padding: 25px 20px;
        }
    }
</style>

<main id="primary" class="site-main">
    <!-- Page Loader -->
    <div class="page-loader" id="pageLoader">
        <div class="loader-content">
            <div class="loader-text">Exploring Our Approach...</div>
        </div>
    </div>

    <section class="approach-hero">
        <div class="approach-hero-content">
            <h1>My Therapeutic Approach</h1>
            <p>An integrative, person-centred way of working that honors your unique journey</p>
            <div class="hero-badges">
                <div class="hero-badge">Evidence-Based</div>
                <div class="hero-badge">Trauma-Informed</div>
                <div class="hero-badge">Culturally Sensitive</div>
                <div class="hero-badge">Collaborative</div>
            </div>
        </div>
    </section>

    <section class="philosophy-section">
        <div class="philosophy-container">
            <div class="philosophy-intro">
                <h2>Philosophy of Healing</h2>
                <p>
                    I believe that you are the expert in your own life. My role is to provide a safe,
                    supportive space where you can explore your thoughts and feelings, gain new insights,
                    and discover your own path to healing. Therapy is a collaborative journey where your
                    voice, choices, and pace are always respected.
                </p>
            </div>
        </div>
    </section>

    <section class="modalities-section">
        <h2 class="modalities-title">Therapeutic Modalities</h2>
        <div class="modalities-grid">
            <div class="modality-card">
                <div class="modality-icon">🔍</div>
                <h3>Psychodynamic Therapy</h3>
                <p class="modality-subtitle">Understanding deeper patterns</p>
                <p>
                    We explore how past experiences, particularly from early relationships, influence
                    your current thoughts, feelings, and behaviors. This insight can help break
                    repeating patterns and foster lasting change.
                </p>
                <ul class="modality-techniques">
                    <li>Exploring unconscious processes</li>
                    <li>Understanding defense mechanisms</li>
                    <li>Examining relationship patterns</li>
                    <li>Working with transference</li>
                </ul>
            </div>

            <div class="modality-card">
                <div class="modality-icon">❤️</div>
                <h3>Person-Centred Therapy</h3>
                <p class="modality-subtitle">You lead the way</p>
                <p>
                    This approach places you at the center of the therapeutic process. I provide
                    unconditional positive regard, empathy, and genuineness, creating a space where
                    you feel safe to explore and express yourself authentically.
                </p>
                <ul class="modality-techniques">
                    <li>Non-directive exploration</li>
                    <li>Unconditional acceptance</li>
                    <li>Empathetic understanding</li>
                    <li>Self-directed growth</li>
                </ul>
            </div>

            <div class="modality-card">
                <div class="modality-icon">🧠</div>
                <h3>Cognitive Behavioural Therapy</h3>
                <p class="modality-subtitle">Practical tools for change</p>
                <p>
                    CBT provides structured, practical techniques to identify and change unhelpful
                    thought patterns and behaviors. This approach offers concrete strategies you
                    can use in daily life to manage symptoms and challenges.
                </p>
                <ul class="modality-techniques">
                    <li>Thought challenging</li>
                    <li>Behavioral activation</li>
                    <li>Problem-solving strategies</li>
                    <li>Coping skills development</li>
                </ul>
            </div>

            <div class="modality-card">
                <div class="modality-icon">🌊</div>
                <h3>Mindfulness & Somatic Approaches</h3>
                <p class="modality-subtitle">Mind-body connection</p>
                <p>
                    Incorporating awareness of the body and present moment helps you connect with
                    your emotions, manage anxiety, and develop a deeper understanding of how
                    stress and trauma are held in the body.
                </p>
                <ul class="modality-techniques">
                    <li>Breathing exercises</li>
                    <li>Body awareness practices</li>
                    <li>Grounding techniques</li>
                    <li>Mindful observation</li>
                </ul>
            </div>

            <div class="modality-card">
                <div class="modality-icon">🛡️</div>
                <h3>Trauma-Informed Practice</h3>
                <p class="modality-subtitle">Safety and stabilization first</p>
                <p>
                    All my work is underpinned by trauma-informed principles, ensuring that
                    therapy feels safe, predictable, and empowering. We work at your pace,
                    always prioritizing your sense of safety and control.
                </p>
                <ul class="modality-techniques">
                    <li>Phased approach to healing</li>
                    <li>Window of tolerance work</li>
                    <li>Resource building</li>
                    <li>Collaborative treatment</li>
                </ul>
            </div>

            <div class="modality-card">
                <div class="modality-icon">🧘</div>
                <h3>Hypnotherapy Integration</h3>
                <p class="modality-subtitle">Accessing inner resources</p>
                <p>
                    When appropriate, clinical hypnotherapy can be integrated to access your
                    subconscious resources, facilitate relaxation, and support positive changes
                    at a deeper level of awareness.
                </p>
                <ul class="modality-techniques">
                    <li>Relaxation and stress reduction</li>
                    <li>Resource state activation</li>
                    <li>Positive suggestion therapy</li>
                    <li>Inner child work</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="integration-section">
        <div class="integration-content">
            <h2>An Integrated Approach</h2>

            <div class="integration-visual">
                <div class="integration-circles">
                    <div class="circle">Your Needs</div>
                    <div class="circle">Evidence-Based Methods</div>
                    <div class="circle">Personalized Therapy</div>
                </div>
                <p class="integration-text">
                    Rather than following a one-size-fits-all approach, I draw from various therapeutic
                    models to create a tailored experience that fits your unique needs, preferences, and
                    goals. This integrative approach means we can be flexible, adapting our work together
                    as you grow and change throughout your therapeutic journey.
                </p>
            </div>
        </div>
    </section>

    <section class="values-section">
        <div class="values-container">
            <div class="values-header">
                <h2>Core Values in Practice</h2>
                <p>These principles guide every aspect of our work together</p>
            </div>

            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">🤝</div>
                    <h3>Collaborative</h3>
                    <p>Therapy is a partnership. Your input, feedback, and preferences shape our work together.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">🌍</div>
                    <h3>Culturally Sensitive</h3>
                    <p>Honoring and integrating your cultural background, beliefs, and unique lived experience.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">🛡️</div>
                    <h3>Trauma-Informed</h3>
                    <p>Prioritizing emotional safety and working at a pace that feels right for you.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">💪</div>
                    <h3>Strengths-Based</h3>
                    <p>Building on your existing resilience, resources, and capabilities.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">🔒</div>
                    <h3>Confidential</h3>
                    <p>Creating a private, secure space where you can share without judgment.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">✨</div>
                    <h3>Holistic</h3>
                    <p>Considering all aspects of your life and wellbeing in our work together.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="process-section">
        <div class="process-content">
            <h2>What to Expect</h2>

            <div class="expectations-grid">
                <div class="expectation-box">
                    <h4>💚 What You Can Expect From Me</h4>
                    <ul class="expectation-list">
                        <li>Non-judgmental, empathetic presence</li>
                        <li>Professional boundaries and ethics</li>
                        <li>Cultural sensitivity and awareness</li>
                        <li>Flexibility in approach</li>
                        <li>Commitment to your wellbeing</li>
                        <li>Ongoing professional development</li>
                    </ul>
                </div>

                <div class="expectation-box">
                    <h4>🌟 What I Ask From You</h4>
                    <ul class="expectation-list">
                        <li>Openness to the process</li>
                        <li>Regular attendance when possible</li>
                        <li>Honest communication</li>
                        <li>Patience with yourself</li>
                        <li>Willingness to try new perspectives</li>
                        <li>Self-compassion during challenges</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Begin Your Journey?</h2>
            <p>Let's work together to create positive change in your life</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-white">Book Consultation</a>
                <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn-outline-white">Explore Services</a>
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
            }, 600);
        }

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

        // Intersection Observer for Animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        // Animate Philosophy Section
        const philosophyIntro = document.querySelector('.philosophy-intro');
        if (philosophyIntro) {
            const philosophyObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                        philosophyObserver.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            philosophyObserver.observe(philosophyIntro);
        }

        // Animate Modality Cards
        const modalityCards = document.querySelectorAll('.modality-card');
        const modalityObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animate-in');
                        entry.target.style.transitionDelay = `${index * 0.1}s`;
                    }, index * 100);
                    modalityObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        modalityCards.forEach(card => {
            modalityObserver.observe(card);
        });

        // Animate Value Cards
        const valueCards = document.querySelectorAll('.value-card');
        const valueObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animate-in');
                        entry.target.style.animationDelay = `${index * 0.1}s`;
                    }, index * 80);
                    valueObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        valueCards.forEach(card => {
            valueObserver.observe(card);
        });

        // Animate Expectation Boxes
        const expectationBoxes = document.querySelectorAll('.expectation-box');
        const expectationObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animate-in');
                    }, index * 200);
                    expectationObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        expectationBoxes.forEach(box => {
            expectationObserver.observe(box);
        });

        // Parallax Effect for Hero
        let ticking = false;
        function updateParallax() {
            const scrolled = window.pageYOffset;
            const heroSection = document.querySelector('.approach-hero');

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

        // Interactive Circles
        const circles = document.querySelectorAll('.circle');
        circles.forEach((circle, index) => {
            circle.addEventListener('mouseenter', function() {
                circles.forEach(c => c.style.zIndex = '1');
                this.style.zIndex = '10';
            });

            circle.addEventListener('mouseleave', function() {
                circles.forEach((c, i) => {
                    c.style.zIndex = 3 - i;
                });
            });
        });

        // Button Ripple Effect
        const buttons = document.querySelectorAll('.btn-white, .btn-outline-white');
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

        // Animate Text Elements
        const animateText = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        };

        const textObserver = new IntersectionObserver(animateText, {
            threshold: 0.3
        });

        document.querySelectorAll('.modalities-title, .values-header, .cta-content h2, .cta-content p').forEach(el => {
            if (el) {
                el.style.animationPlayState = 'paused';
                textObserver.observe(el);
            }
        });

        // Enhanced Hover Effects for Cards
        modalityCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                const icon = this.querySelector('.modality-icon');
                if (icon) {
                    icon.style.animationPlayState = 'running';
                }
            });

            card.addEventListener('mouseleave', function() {
                const icon = this.querySelector('.modality-icon');
                if (icon) {
                    setTimeout(() => {
                        icon.style.animationPlayState = 'paused';
                    }, 400);
                }
            });
        });

        valueCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                const icon = this.querySelector('.value-icon');
                if (icon && icon.style.animationPlayState) {
                    icon.style.animationPlayState = 'running';
                }
            });

            card.addEventListener('mouseleave', function() {
                const icon = this.querySelector('.value-icon');
                if (icon && icon.style.animationPlayState) {
                    icon.style.animationPlayState = 'paused';
                }
            });
        });

        // Mobile Touch Optimization
        if ('ontouchstart' in window) {
            document.body.classList.add('touch-device');
        }
    });
</script>

<?php get_footer(); ?>