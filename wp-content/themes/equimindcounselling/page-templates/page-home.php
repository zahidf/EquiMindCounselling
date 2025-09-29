<?php
/*
Template Name: Home Page
*/
get_header();
?>

<style>
    /* Loading Animation */
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
        50% { transform: scale(1.3); opacity: 1; }
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
    .hero-section {
        background: linear-gradient(135deg, rgba(236, 245, 243, 0.7) 0%, rgba(212, 232, 228, 0.7) 100%),
                    url('/wp-includes/images/hero-home.png') center center / cover no-repeat;
        padding: 100px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
        min-height: 80vh;
        display: flex;
        align-items: center;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 60%;
        height: 200%;
        background: radial-gradient(circle, rgba(91, 140, 133, 0.1) 0%, transparent 70%);
        animation: float 20s ease-in-out infinite;
    }

    .hero-section::after {
        content: '';
        position: absolute;
        bottom: -50%;
        left: -10%;
        width: 50%;
        height: 200%;
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
        max-width: 800px;
        margin: 0 auto;
        padding: 0 20px;
        width: 100%;
    }

    .hero-title {
        font-size: 48px;
        color: #1a2332;
        margin-bottom: 20px;
        font-weight: 700;
        line-height: 1.2;
        opacity: 0;
        animation: heroFadeInUp 0.8s ease forwards;
        animation-delay: 0.2s;
    }

    .hero-subtitle {
        font-size: 24px;
        color: #1a2332;
        margin-bottom: 30px;
        font-style: italic;
        font-weight: 500;
        text-shadow: 0 1px 3px rgba(255, 255, 255, 0.5);
        opacity: 0;
        animation: heroFadeInUp 0.8s ease forwards;
        animation-delay: 0.4s;
    }

    .hero-text {
        font-size: 18px;
        color: #2c3e50;
        line-height: 1.8;
        margin-bottom: 40px;
        opacity: 0;
        animation: heroFadeInUp 0.8s ease forwards;
        animation-delay: 0.6s;
    }

    .hero-buttons {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
        opacity: 0;
        animation: heroFadeInUp 0.8s ease forwards;
        animation-delay: 0.8s;
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

    /* Enhanced Button Styles */
    .btn {
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        transform: translateZ(0);
    }

    .btn::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }

    .btn:hover::before {
        width: 300px;
        height: 300px;
    }

    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(91, 140, 133, 0.3);
    }

    .btn-secondary {
        background: transparent;
        border: 2px solid #5b8c85;
        color: #5b8c85;
    }

    .btn-secondary:hover {
        background: #5b8c85;
        color: white;
        border-color: #5b8c85;
    }
    
    .services-overview {
        padding: 80px 0;
        background-color: #ffffff;
        position: relative;
    }

    .section-title {
        text-align: center;
        font-size: 36px;
        color: #1a2332;
        margin-bottom: 50px;
        opacity: 0;
        animation: fadeInUp 0.8s ease forwards;
    }

    .section-title.in-view {
        animation: fadeInUp 0.8s ease forwards;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .service-card {
        background: linear-gradient(135deg, #ffffff 0%, #fafbfb 100%);
        border: 1px solid #e8f0ef;
        border-radius: 15px;
        padding: 35px 30px;
        text-align: center;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        opacity: 0;
        transform: translateY(30px);
    }

    .service-card.fade-in {
        opacity: 1;
        transform: translateY(0);
    }

    .service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #5b8c85, #4a7268);
        transform: scaleX(0);
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .service-card::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(91, 140, 133, 0.03) 0%, transparent 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .service-card:hover {
        box-shadow: 0 15px 40px rgba(91, 140, 133, 0.15);
        transform: translateY(-8px) scale(1.02);
        background: linear-gradient(135deg, #ffffff 0%, #f5f9f8 100%);
    }

    .service-card:hover::before {
        transform: scaleX(1);
    }

    .service-card:hover::after {
        opacity: 1;
    }

    .service-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #ecf5f3, #d4e8e4);
        border-radius: 50%;
        margin: 0 auto 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        color: #5b8c85;
        transition: all 0.4s ease;
        position: relative;
    }

    .service-card:hover .service-icon {
        transform: rotateY(360deg);
        background: linear-gradient(135deg, #5b8c85, #4a7268);
        color: white;
    }

    .service-card h3 {
        font-size: 22px;
        color: #1a2332;
        margin-bottom: 15px;
        transition: color 0.3s ease;
    }

    .service-card:hover h3 {
        color: #5b8c85;
    }

    .service-card p {
        color: #6c7983;
        line-height: 1.7;
        margin-bottom: 25px;
    }

    .service-link {
        color: #5b8c85;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        transition: all 0.3s ease;
        position: relative;
        padding-bottom: 2px;
    }

    .service-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background: #5b8c85;
        transition: width 0.3s ease;
    }

    .service-link:hover {
        gap: 12px;
        color: #4a7268;
    }

    .service-link:hover::after {
        width: 100%;
    }
    
    .welcome-section {
        padding: 80px 0;
        background: linear-gradient(180deg, #f9fbfa 0%, #ffffff 100%);
        position: relative;
        overflow: hidden;
    }

    .welcome-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 200%;
        height: 100%;
        background: radial-gradient(ellipse at center, rgba(91, 140, 133, 0.03) 0%, transparent 70%);
    }

    .welcome-content {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    .welcome-text {
        font-size: 18px;
        line-height: 1.9;
        color: #2c3e50;
        margin-bottom: 30px;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.8s ease forwards;
    }

    .specialisms-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 20px;
        margin: 40px auto;
        padding: 0;
        text-align: left;
        max-width: 800px;
    }

    .specialisms-list li {
        list-style: none;
        padding: 15px 20px 15px 50px;
        position: relative;
        color: #2c3e50;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        opacity: 0;
        transform: translateX(-20px);
        display: flex;
        align-items: center;
    }

    .specialisms-list li.slide-in {
        opacity: 1;
        transform: translateX(0);
    }

    .specialisms-list li:hover {
        transform: translateX(5px);
        box-shadow: 0 4px 15px rgba(91, 140, 133, 0.15);
    }

    .specialisms-list li::before {
        content: '';
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        width: 20px;
        height: 20px;
        background: linear-gradient(135deg, #5b8c85, #4a7268);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .specialisms-list li::after {
        content: '✓';
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        color: white;
        font-weight: bold;
        font-size: 12px;
    }

    /* Testimonials Section */
    .testimonials-section {
        padding: 80px 0;
        background: white;
        position: relative;
    }

    .testimonials-container {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .testimonial-carousel {
        position: relative;
        min-height: 250px;
        overflow: hidden;
    }

    .testimonial-slide {
        position: absolute;
        width: 100%;
        opacity: 0;
        transform: translateX(100px);
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .testimonial-slide.active {
        opacity: 1;
        transform: translateX(0);
        position: relative;
    }

    .testimonial-content {
        text-align: center;
        padding: 40px;
        background: linear-gradient(135deg, #f9fbfa 0%, #ecf5f3 100%);
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    }

    .testimonial-text {
        font-size: 18px;
        line-height: 1.8;
        color: #2c3e50;
        font-style: italic;
        margin-bottom: 20px;
    }

    .testimonial-author {
        font-weight: 600;
        color: #1a2332;
        margin-bottom: 5px;
    }

    .testimonial-role {
        color: #6c7983;
        font-size: 14px;
    }

    .testimonial-dots {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 30px;
    }

    .dot {
        width: 10px;
        height: 10px;
        background: #d4e8e4;
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .dot.active {
        background: #5b8c85;
        transform: scale(1.3);
    }

    .trust-section {
        padding: 60px 0;
        background: linear-gradient(180deg, #ffffff 0%, #f9fbfa 100%);
        border-top: 1px solid #e8f0ef;
    }

    .trust-container {
        max-width: 600px;
        margin: 0 auto;
        text-align: center;
        padding: 0 20px;
    }

    .trust-title {
        font-size: 20px;
        color: #6c7983;
        margin-bottom: 30px;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 400;
        opacity: 0;
        animation: fadeInUp 0.8s ease forwards;
    }

    .trust-badges {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 40px;
        flex-wrap: wrap;
    }

    .trust-badge {
        background: white;
        padding: 25px 35px;
        border-radius: 12px;
        font-weight: 600;
        color: #2c3e50;
        border: 2px solid #e8f0ef;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.8s ease forwards;
        animation-delay: 0.2s;
    }

    .trust-badge:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(91, 140, 133, 0.15);
        border-color: #5b8c85;
    }
    
    /* Responsive Styles */
    @media (max-width: 992px) {
        .hero-section {
            padding: 80px 0;
        }
        
        .hero-title {
            font-size: 42px;
        }
        
        .services-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }
    }
    
    @media (max-width: 768px) {
        .hero-section {
            padding: 60px 0;
        }
        
        .hero-section::before {
            width: 80%;
            right: -30%;
        }
        
        .hero-title {
            font-size: 32px;
            padding: 0 10px;
        }
        
        .hero-subtitle {
            font-size: 20px;
            margin-bottom: 20px;
        }
        
        .hero-text {
            font-size: 16px;
            margin-bottom: 30px;
            padding: 0 10px;
        }
        
        .hero-buttons {
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
        
        .hero-buttons .btn {
            width: 90%;
            max-width: 280px;
        }
        
        .services-overview,
        .welcome-section {
            padding: 50px 0;
        }
        
        .section-title {
            font-size: 28px;
            margin-bottom: 30px;
            padding: 0 10px;
        }
        
        .services-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        
        .service-card {
            padding: 25px 20px;
        }
        
        .specialisms-list {
            grid-template-columns: 1fr;
            margin: 30px 0;
        }
        
        .trust-section {
            padding: 40px 0;
        }
        
        .trust-badges {
            flex-direction: column;
            gap: 15px;
        }
        
        .trust-badge {
            width: 90%;
            max-width: 280px;
        }
    }
    
    @media (max-width: 480px) {
        .hero-section {
            padding: 40px 0;
        }
        
        .hero-title {
            font-size: 26px;
        }
        
        .hero-subtitle {
            font-size: 18px;
        }
        
        .hero-text {
            font-size: 15px;
        }
        
        .section-title {
            font-size: 24px;
        }
        
        .service-card h3 {
            font-size: 20px;
        }
        
        .service-card p {
            font-size: 14px;
        }
        
        .service-icon {
            width: 50px;
            height: 50px;
            font-size: 20px;
        }
        
        .welcome-text {
            font-size: 15px;
        }
        
        .trust-title {
            font-size: 16px;
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

    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">EquiMind Counselling</h1>
            <p class="hero-subtitle">Balancing Mind, Heart, and Healing</p>
            <p class="hero-text">
                Life's challenges can feel overwhelming, isolating, and confusing. At EquiMind Counselling,
                I offer a compassionate, culturally informed, and trauma-sensitive approach to therapy for
                adults and young people. Whether you're struggling with anxiety, grief, relationship
                challenges, or identity concerns, I'm here to help you find clarity, strength, and new possibilities.
            </p>
            <div class="hero-buttons">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn">Book Your Free 15-Minute Consultation</a>
                <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-secondary">Explore Services</a>
            </div>
        </div>
    </section>
    
    <section class="welcome-section">
        <div class="welcome-content">
            <h2 class="section-title">Welcome to Your Journey of Healing</h2>
            <p class="welcome-text">
                At EquiMind Counselling, I offer an integrative, trauma-informed approach for adults, 
                children, and young people. I combine evidence-based therapeutic models to provide a 
                personalised, collaborative experience. My practice is inclusive, culturally sensitive, 
                and rooted in the belief that change is possible at any stage of life.
            </p>
            
            <h3 style="margin: 40px 0 20px; color: #1a2332;">Specialisms Include:</h3>
            <ul class="specialisms-list">
                <li>Anxiety, depression, and stress management</li>
                <li>Bereavement and processing domestic abuse</li>
                <li>Cultural identity and racial trauma</li>
                <li>Relationship and family challenges</li>
                <li>Trauma recovery</li>
                <li>Hypnotherapy for adults and children</li>
            </ul>
        </div>
    </section>
    
    <section class="services-overview">
        <div class="container">
            <h2 class="section-title">How I Can Help</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">👥</div>
                    <h3>Adult Therapy</h3>
                    <p>Emotional resilience, self-discovery, and support through life transitions. Find clarity and develop practical coping strategies.</p>
                    <a href="<?php echo esc_url(home_url('/adult-therapy')); ?>" class="service-link">Learn more →</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">🌱</div>
                    <h3>Children & Young People</h3>
                    <p>Collaborative work with children (8 years and up) and young people. Creative approaches to build resilience and emotional expression.</p>
                    <a href="<?php echo esc_url(home_url('/child-therapy')); ?>" class="service-link">Learn more →</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">🧘</div>
                    <h3>Hypnotherapy</h3>
                    <p>Overcome pain, phobias, and stress for adults and children. Gentle, focused support for lasting positive change.</p>
                    <a href="<?php echo esc_url(home_url('/hypnotherapy')); ?>" class="service-link">Learn more →</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">💫</div>
                    <h3>Specialist Support</h3>
                    <p>Cultural identity exploration, baby loss support, and bereavement counselling with sensitivity and lived experience.</p>
                    <a href="<?php echo esc_url(home_url('/specialist-support')); ?>" class="service-link">Learn more →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="testimonials-container">
            <h2 class="section-title">What Clients Say</h2>
            <div class="testimonial-carousel" id="testimonialCarousel">
                <div class="testimonial-slide active">
                    <div class="testimonial-content">
                        <p class="testimonial-text">
                            "Working with EquiMind Counselling has been transformative. The compassionate and culturally-aware approach helped me navigate through difficult times with clarity and strength."
                        </p>
                        <div class="testimonial-author">Sarah M.</div>
                        <div class="testimonial-role">Adult Therapy Client</div>
                    </div>
                </div>
                <div class="testimonial-slide">
                    <div class="testimonial-content">
                        <p class="testimonial-text">
                            "The trauma-informed approach and genuine empathy made me feel truly heard and understood. I've gained invaluable tools for managing anxiety and building resilience."
                        </p>
                        <div class="testimonial-author">James L.</div>
                        <div class="testimonial-role">Individual Counselling</div>
                    </div>
                </div>
                <div class="testimonial-slide">
                    <div class="testimonial-content">
                        <p class="testimonial-text">
                            "My child has flourished through the creative therapeutic approaches. The safe, nurturing environment has helped them express emotions and develop coping strategies."
                        </p>
                        <div class="testimonial-author">Maria K.</div>
                        <div class="testimonial-role">Parent of Young Client</div>
                    </div>
                </div>
            </div>
            <div class="testimonial-dots">
                <span class="dot active" data-slide="0"></span>
                <span class="dot" data-slide="1"></span>
                <span class="dot" data-slide="2"></span>
            </div>
        </div>
    </section>

    <section class="trust-section">
        <div class="trust-container">
            <h3 class="trust-title">Professional Memberships</h3>
            <div class="trust-badges">
                <div class="trust-badge">NCPS Accredited Member</div>
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

        // Smooth scroll for anchor links
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

        // Service Cards Animation
        const serviceCards = document.querySelectorAll('.service-card');
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const fadeInObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('fade-in');
                        entry.target.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
                    }, index * 100);
                    fadeInObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        serviceCards.forEach(card => {
            fadeInObserver.observe(card);
        });

        // Specialisms List Animation
        const specialismItems = document.querySelectorAll('.specialisms-list li');
        const slideInObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('slide-in');
                        entry.target.style.transition = 'all 0.5s ease';
                        entry.target.style.transitionDelay = `${index * 0.1}s`;
                    }, index * 50);
                    slideInObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        specialismItems.forEach(item => {
            slideInObserver.observe(item);
        });

        // Testimonial Carousel
        const testimonialSlides = document.querySelectorAll('.testimonial-slide');
        const dots = document.querySelectorAll('.dot');
        let currentSlide = 0;
        let testimonialInterval;

        function showSlide(index) {
            testimonialSlides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            testimonialSlides[index].classList.add('active');
            dots[index].classList.add('active');
            currentSlide = index;
        }

        function nextSlide() {
            const nextIndex = (currentSlide + 1) % testimonialSlides.length;
            showSlide(nextIndex);
        }

        // Auto-rotate testimonials
        if (testimonialSlides.length > 0) {
            testimonialInterval = setInterval(nextSlide, 5000);

            // Dot navigation
            dots.forEach(dot => {
                dot.addEventListener('click', function() {
                    clearInterval(testimonialInterval);
                    showSlide(parseInt(this.dataset.slide));
                    testimonialInterval = setInterval(nextSlide, 5000);
                });
            });

            // Pause on hover
            const carousel = document.getElementById('testimonialCarousel');
            if (carousel) {
                carousel.addEventListener('mouseenter', () => clearInterval(testimonialInterval));
                carousel.addEventListener('mouseleave', () => {
                    testimonialInterval = setInterval(nextSlide, 5000);
                });
            }
        }

        // Parallax Effect
        let ticking = false;
        function updateParallax() {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.hero-section::before, .hero-section::after');
            const heroSection = document.querySelector('.hero-section');

            if (heroSection) {
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

        // Dynamic text animation on scroll
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

        document.querySelectorAll('.section-title, .welcome-text, .trust-title, .trust-badge').forEach(el => {
            el.style.animationPlayState = 'paused';
            textObserver.observe(el);
        });

        // Add subtle hover effects to buttons
        const buttons = document.querySelectorAll('.btn');
        buttons.forEach(btn => {
            btn.addEventListener('mouseenter', function(e) {
                const rect = this.getBoundingClientRect();
                const ripple = document.createElement('span');
                ripple.style.position = 'absolute';
                ripple.style.borderRadius = '50%';
                ripple.style.transform = 'scale(0)';
                ripple.style.animation = 'ripple 0.6s ease-out';
                this.appendChild(ripple);

                setTimeout(() => ripple.remove(), 600);
            });
        });

        // Smooth number counter animation
        const animateValue = (element, start, end, duration) => {
            const startTimestamp = Date.now();
            const step = () => {
                const timestamp = Date.now();
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                element.innerHTML = Math.floor(progress * (end - start) + start);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        };

        // Add professional touch with micro-interactions
        document.querySelectorAll('.service-icon').forEach(icon => {
            icon.addEventListener('mouseenter', function() {
                this.style.animationPlayState = 'running';
            });
        });

        // Enhance form interactions if contact form exists
        const contactForm = document.querySelector('.contact-form');
        if (contactForm) {
            const inputs = contactForm.querySelectorAll('input, textarea');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });
                input.addEventListener('blur', function() {
                    if (!this.value) {
                        this.parentElement.classList.remove('focused');
                    }
                });
            });
        }
    });

    // Add ripple animation keyframes
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
</script>

<?php get_footer(); ?>