<?php
/*
Template Name: About Page
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
        font-size: 28px;
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
    .about-hero {
        background: linear-gradient(135deg, rgba(236, 245, 243, 0.85) 0%, rgba(212, 232, 228, 0.85) 100%),
                    url('/wp-includes/images/hero-about.png') center center / cover no-repeat;
        padding: 120px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
        min-height: 60vh;
        display: flex;
        align-items: center;
    }

    .about-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 60%;
        height: 200%;
        background: radial-gradient(circle, rgba(91, 140, 133, 0.1) 0%, transparent 70%);
        animation: float 20s ease-in-out infinite;
    }

    .about-hero::after {
        content: '';
        position: absolute;
        bottom: -30%;
        left: -15%;
        width: 50%;
        height: 150%;
        background: radial-gradient(circle, rgba(74, 114, 104, 0.08) 0%, transparent 70%);
        animation: float 25s ease-in-out infinite reverse;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        25% { transform: translateY(-15px) rotate(2deg); }
        50% { transform: translateY(-20px) rotate(5deg); }
        75% { transform: translateY(-10px) rotate(3deg); }
    }

    .hero-content-wrapper {
        position: relative;
        z-index: 1;
        width: 100%;
    }

    .about-hero h1 {
        font-size: 52px;
        color: #1a2332;
        margin-bottom: 25px;
        font-weight: 700;
        line-height: 1.2;
        opacity: 0;
        animation: heroFadeInUp 0.8s ease forwards;
        animation-delay: 0.2s;
    }

    .about-hero p {
        font-size: 26px;
        color: #1a2332;
        max-width: 800px;
        margin: 0 auto;
        font-style: italic;
        font-weight: 500;
        text-shadow: 0 1px 3px rgba(255, 255, 255, 0.5);
        opacity: 0;
        animation: heroFadeInUp 0.8s ease forwards;
        animation-delay: 0.4s;
    }

    .hero-badge {
        display: inline-block;
        margin-top: 30px;
        padding: 12px 25px;
        background: white;
        border-radius: 30px;
        color: #5b8c85;
        font-weight: 600;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        opacity: 0;
        animation: heroFadeInUp 0.8s ease forwards;
        animation-delay: 0.6s;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hero-badge:hover {
        transform: translateY(-2px);
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
    
    .about-content {
        padding: 80px 0;
        background-color: #ffffff;
    }
    
    .about-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 60px;
        align-items: start;
    }
    
    .therapist-profile {
        position: sticky;
        top: 100px;
        opacity: 0;
        transform: translateX(-30px);
        animation: slideInLeft 0.8s ease forwards;
        animation-delay: 0.3s;
    }

    @keyframes slideInLeft {
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .profile-image {
        width: 100%;
        max-width: 300px;
        height: 400px;
        background: linear-gradient(135deg, #ecf5f3 0%, #d4e8e4 100%);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: visible;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .profile-image:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(91, 140, 133, 0.2);
    }

    /* Interactive Canvas Tree Styles */
    #treeCanvas {
        width: 100%;
        height: 350px;
        cursor: crosshair;
        border-radius: 10px;
    }

    .tree-hint {
        position: absolute;
        bottom: 15px;
        left: 50%;
        transform: translateX(-50%);
        color: #5b8c85;
        font-size: 12px;
        opacity: 0;
        animation: fadeIn 1s ease forwards;
        animation-delay: 2s;
        text-align: center;
        pointer-events: none;
        background: rgba(255, 255, 255, 0.9);
        padding: 5px 10px;
        border-radius: 15px;
    }

    .tree-of-life-container:hover .tree-hint {
        opacity: 0.8;
    }

    /* Basic fadeIn animation for tree hint */
    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }

    .profile-info {
        background: linear-gradient(135deg, #f9fbfa 0%, #ffffff 100%);
        padding: 30px;
        border-radius: 15px;
        border-left: 4px solid #5b8c85;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .profile-info:hover {
        transform: translateX(5px);
        box-shadow: 0 8px 30px rgba(91, 140, 133, 0.15);
    }
    
    .profile-info h3 {
        color: #1a2332;
        font-size: 20px;
        margin-bottom: 15px;
    }
    
    .profile-info p {
        color: #6c7983;
        line-height: 1.6;
        margin-bottom: 10px;
    }
    
    .about-details h2 {
        color: #1a2332;
        font-size: 32px;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 15px;
    }
    
    .about-details h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, #5b8c85, #4a7268);
    }
    
    .about-details h3 {
        color: #1a2332;
        font-size: 24px;
        margin: 40px 0 20px;
    }
    
    .about-details p {
        color: #2c3e50;
        line-height: 1.8;
        margin-bottom: 20px;
        font-size: 16px;
    }
    
    .journey-timeline {
        margin: 40px 0;
        padding-left: 40px;
        border-left: 3px solid transparent;
        border-image: linear-gradient(180deg, #5b8c85 0%, #4a7268 100%);
        border-image-slice: 1;
        position: relative;
    }

    .timeline-item {
        position: relative;
        padding-bottom: 40px;
        opacity: 0;
        transform: translateX(-30px);
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .timeline-item.animate-in {
        opacity: 1;
        transform: translateX(0);
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: -46px;
        top: 5px;
        width: 16px;
        height: 16px;
        background: linear-gradient(135deg, #5b8c85, #4a7268);
        border-radius: 50%;
        border: 3px solid #ffffff;
        box-shadow: 0 0 0 5px #ecf5f3, 0 3px 10px rgba(91, 140, 133, 0.3);
        transition: all 0.3s ease;
    }

    .timeline-item:hover::before {
        transform: scale(1.3);
        box-shadow: 0 0 0 8px #ecf5f3, 0 5px 20px rgba(91, 140, 133, 0.4);
    }

    .timeline-item::after {
        content: '';
        position: absolute;
        left: -43px;
        top: 8px;
        width: 10px;
        height: 10px;
        background: white;
        border-radius: 50%;
        opacity: 0;
        animation: pulse 2s ease-in-out infinite;
    }

    .timeline-item:hover::after {
        opacity: 1;
    }

    @keyframes pulse {
        0%, 100% { transform: scale(0.8); opacity: 1; }
        50% { transform: scale(1.2); opacity: 0.5; }
    }
    
    .timeline-item h4 {
        color: #5b8c85;
        font-size: 18px;
        margin-bottom: 10px;
        font-weight: 600;
    }
    
    .timeline-item p {
        color: #6c7983;
        line-height: 1.6;
    }
    
    .qualifications-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin: 40px 0;
    }

    .qualification-card {
        background: linear-gradient(135deg, #ffffff 0%, #f9fbfa 100%);
        padding: 25px;
        border-radius: 12px;
        border-left: 4px solid transparent;
        border-image: linear-gradient(180deg, #5b8c85 0%, #4a7268 100%);
        border-image-slice: 1;
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        opacity: 0;
        transform: translateY(20px);
    }

    .qualification-card.fade-in {
        opacity: 1;
        transform: translateY(0);
    }

    .qualification-card::before {
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

    .qualification-card:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 10px 30px rgba(91, 140, 133, 0.15);
    }

    .qualification-card:hover::before {
        opacity: 1;
    }
    
    .qualification-card h4 {
        color: #1a2332;
        font-size: 16px;
        margin-bottom: 8px;
        font-weight: 600;
    }
    
    .qualification-card p {
        color: #6c7983;
        font-size: 14px;
        margin: 0;
    }
    
    .personal-statement {
        background-color: #f9fbfa;
        padding: 40px;
        border-radius: 10px;
        margin: 60px 0;
    }
    
    .personal-statement h2 {
        color: #1a2332;
        font-size: 28px;
        margin-bottom: 25px;
        text-align: center;
    }
    
    .personal-statement p {
        color: #2c3e50;
        line-height: 1.9;
        margin-bottom: 20px;
        font-size: 16px;
    }
    
    .values-section {
        padding: 60px 0;
        background-color: #ffffff;
    }
    
    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 30px;
        max-width: 900px;
        margin: 40px auto 0;
    }
    
    .value-item {
        text-align: center;
        padding: 25px;
        transition: all 0.3s ease;
        opacity: 0;
        transform: translateY(30px);
    }

    .value-item.animate-in {
        opacity: 1;
        transform: translateY(0);
    }

    .value-item:hover {
        transform: translateY(-10px);
    }

    .value-icon {
        width: 70px;
        height: 70px;
        margin: 0 auto 20px;
        background: linear-gradient(135deg, #ecf5f3, #d4e8e4);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        box-shadow: 0 5px 15px rgba(91, 140, 133, 0.2);
    }

    .value-item:hover .value-icon {
        transform: rotateY(360deg) scale(1.1);
        background: linear-gradient(135deg, #5b8c85, #4a7268);
        box-shadow: 0 8px 25px rgba(91, 140, 133, 0.3);
    }

    .value-icon::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 2px solid #5b8c85;
        opacity: 0;
        animation: rippleOut 2s ease-in-out infinite;
    }

    .value-item:hover .value-icon::after {
        animation-play-state: running;
    }

    @keyframes rippleOut {
        0% {
            transform: scale(1);
            opacity: 1;
        }
        100% {
            transform: scale(1.5);
            opacity: 0;
        }
    }
    
    .value-item h4 {
        color: #1a2332;
        font-size: 18px;
        margin-bottom: 10px;
    }
    
    .value-item p {
        color: #6c7983;
        font-size: 14px;
        line-height: 1.6;
    }
    
    @media (max-width: 768px) {
        .about-container {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        
        .therapist-profile {
            position: static;
            text-align: center;
        }
        
        .profile-image {
            margin: 0 auto 30px;
        }
        
        .personal-statement {
            padding: 30px 20px;
        }
        
        .values-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<main id="primary" class="site-main">
    <!-- Page Loader -->
    <div class="page-loader" id="pageLoader">
        <div class="loader-content">
            <div class="loader-text">Preparing Your Journey...</div>
        </div>
    </div>

    <section class="about-hero">
        <div class="container hero-content-wrapper">
            <h1>Meet Your Therapist</h1>
            <p>Zeenat - Accredited Psychotherapist & Counsellor</p>
            <div class="hero-badge">Over 10 Years of Experience</div>
        </div>
    </section>
    
    <section class="about-content">
        <div class="about-container">
            <aside class="therapist-profile">
                <div class="profile-image tree-of-life-container">
                    <canvas id="treeCanvas"></canvas>
                    <div class="tree-hint">Move your mouse to see the tree respond</div>
                </div>
                <div class="profile-info">
                    <h3>Professional Memberships</h3>
                    <p><strong>NCPS</strong> - Accredited Member</p>
                    <p><strong>Psychotherapist</strong></p>
                    <p><strong>Trauma-Informed Practitioner</strong></p>
                </div>
            </aside>
            
            <div class="about-details">
                <h2>About Me</h2>
                <p>
                    With over a decade of experience across psychotherapy, health and social care, and education, 
                    I provide a grounded and compassionate therapeutic presence. My work is informed by trauma theory, 
                    attachment-based approaches, and multicultural competence, ensuring therapy is safe, affirming, 
                    and relevant to your needs.
                </p>
                
                <p>
                    I bring lived experience and deep understanding to exploring racial identity, systemic discrimination, 
                    and cultural complexities in a safe and affirming way. As a South Asian woman, I understand the 
                    nuanced challenges of navigating cultural identity, systemic discrimination, and intergenerational 
                    expectations.
                </p>
                
                <h3>Professional Journey</h3>
                <div class="journey-timeline">
                    <div class="timeline-item">
                        <h4>Health Promotion & Public Health</h4>
                        <p>Began in public health promotion, supporting children, young people, and families with preventive health initiatives and wellbeing programmes.</p>
                    </div>
                    
                    <div class="timeline-item">
                        <h4>Education & Teaching</h4>
                        <p>Taught in Further Education, with a focus on wellbeing, personal development, and supporting students through challenging life transitions.</p>
                    </div>
                    
                    <div class="timeline-item">
                        <h4>Domestic Abuse Services</h4>
                        <p>Worked in domestic abuse services, facilitating psychoeducational behaviour change programmes and supporting survivors in their recovery journey.</p>
                    </div>
                    
                    <div class="timeline-item">
                        <h4>Multi-Disciplinary Collaboration</h4>
                        <p>Partnered with multidisciplinary teams to address complex family needs and support victim/survivors with comprehensive, holistic care.</p>
                    </div>
                </div>
                
                <h3>Qualifications & Training</h3>
                <div class="qualifications-grid">
                    <div class="qualification-card">
                        <h4>Psychotherapy & Counselling</h4>
                        <p>Advanced diploma in integrative counselling and psychotherapy</p>
                    </div>
                    
                    <div class="qualification-card">
                        <h4>NCPS Accreditation</h4>
                        <p>Accredited Member of the National Counselling & Psychotherapy Society</p>
                    </div>
                    
                    <div class="qualification-card">
                        <h4>Hypnotherapy Certification</h4>
                        <p>Certified in clinical hypnotherapy for adults and children</p>
                    </div>
                    
                    <div class="qualification-card">
                        <h4>Specialist Training</h4>
                        <p>Trauma-informed practice, cultural competence, and bereavement support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="personal-statement">
        <div class="container">
            <h2>Personal Statement</h2>
            <p>
                My journey of self-discovery as a third-generation South Asian woman has shaped both my personal 
                identity and my professional path. Growing up, I had the privilege of experiencing the richness 
                of two worlds — the traditions, values, and sense of belonging within my heritage, alongside the 
                freedoms, diversity, and opportunities of British society. While this blend has been deeply enriching, 
                it has also presented moments of reflection about identity, belonging, and how to balance different influences.
            </p>
            
            <p>
                Through my own experiences and observations, I have become passionate about supporting British South 
                Asian women who are navigating their own journeys of self-understanding. These may involve balancing 
                personal goals with family expectations, honouring cultural traditions while exploring independence, 
                or managing the different roles and responsibilities women often carry within families and communities.
            </p>
            
            <p>
                I am mindful of the value and strength found in cultural heritage — from strong family bonds to 
                community support — and my aim is to work in a way that respects and preserves these connections. 
                My approach is about helping clients find ways to 
                communicate, understand, and live authentically within the relationships and traditions that matter to them.
            </p>
            
            <p>
                In my work, I strive to create a safe and collaborative space where clients can explore identity, 
                build confidence, and strengthen both their sense of self and their relationships with others. 
                My hope is to contribute to a narrative where mental and emotional wellbeing are openly valued, 
                identity is celebrated, and women feel empowered to define their own paths while remaining connected 
                to their cultural roots.
            </p>
        </div>
    </section>
    
    <section class="values-section">
        <div class="container">
            <h2 style="text-align: center; color: #1a2332; font-size: 32px; margin-bottom: 20px;">Core Values in My Practice</h2>
            <div class="values-grid">
                <div class="value-item">
                    <div class="value-icon">🛡️</div>
                    <h4>Trauma-Informed</h4>
                    <p>Prioritising emotional safety and pacing sessions to your readiness</p>
                </div>
                
                <div class="value-item">
                    <div class="value-icon">🌍</div>
                    <h4>Culturally Inclusive</h4>
                    <p>Respecting and valuing diverse identities, traditions, and perspectives</p>
                </div>
                
                <div class="value-item">
                    <div class="value-icon">🤝</div>
                    <h4>Collaborative</h4>
                    <p>Therapy is co-created to ensure relevance and empowerment</p>
                </div>
                
                <div class="value-item">
                    <div class="value-icon">💻</div>
                    <h4>Accessible</h4>
                    <p>Online sessions available across the UK for your convenience</p>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Page Loader Animation
        const pageLoader = document.getElementById('pageLoader');
        if (pageLoader) {
            setTimeout(() => {
                pageLoader.classList.add('loaded');
            }, 600);
        }

        // Smooth Scroll for Internal Links
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

        // Timeline Animation
        const timelineItems = document.querySelectorAll('.timeline-item');
        const timelineObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animate-in');
                        // Animate the connecting line
                        if (index > 0) {
                            const line = entry.target.previousElementSibling;
                            if (line) {
                                setTimeout(() => {
                                    line.style.opacity = '1';
                                }, 200);
                            }
                        }
                    }, index * 150);
                    timelineObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        });

        timelineItems.forEach(item => {
            timelineObserver.observe(item);
        });

        // Qualification Cards Animation
        const qualificationCards = document.querySelectorAll('.qualification-card');
        const cardObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('fade-in');
                        entry.target.style.transitionDelay = `${index * 0.1}s`;
                    }, index * 100);
                    cardObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -30px 0px'
        });

        qualificationCards.forEach(card => {
            cardObserver.observe(card);
        });

        // Value Items Animation
        const valueItems = document.querySelectorAll('.value-item');
        const valueObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animate-in');
                        entry.target.style.transitionDelay = `${index * 0.15}s`;
                    }, index * 100);
                    valueObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2
        });

        valueItems.forEach(item => {
            valueObserver.observe(item);
        });

        // Personal Statement Animation
        const personalStatement = document.querySelector('.personal-statement');
        if (personalStatement) {
            const statementObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '0';
                        entry.target.style.transform = 'translateY(30px)';
                        setTimeout(() => {
                            entry.target.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }, 100);
                        statementObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            statementObserver.observe(personalStatement);
        }

        // Parallax Effect for Hero
        let ticking = false;
        function updateParallax() {
            const scrolled = window.pageYOffset;
            const heroSection = document.querySelector('.about-hero');

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

        // Profile Image Interaction
        const profileImage = document.querySelector('.profile-image');
        if (profileImage) {
            profileImage.addEventListener('mousemove', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const rotateX = (y - centerY) / 10;
                const rotateY = (centerX - x) / 10;

                this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
            });

            profileImage.addEventListener('mouseleave', function() {
                this.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
            });
        }

        // Add Text Animation on Scroll
        const animateText = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '0';
                    entry.target.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        entry.target.style.transition = 'all 0.6s ease';
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, 100);
                    observer.unobserve(entry.target);
                }
            });
        };

        const textObserver = new IntersectionObserver(animateText, {
            threshold: 0.3
        });

        document.querySelectorAll('.about-details h2, .about-details h3, .personal-statement h2').forEach(el => {
            textObserver.observe(el);
        });

        // Progressive Text Reveal
        const paragraphs = document.querySelectorAll('.about-details p, .personal-statement p');
        const paragraphObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '0';
                    entry.target.style.transform = 'translateY(15px)';
                    setTimeout(() => {
                        entry.target.style.transition = 'all 0.5s ease';
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, 50);
                    paragraphObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -30px 0px'
        });

        paragraphs.forEach(p => {
            paragraphObserver.observe(p);
        });

        // Floating Animation for Hero Elements
        const heroElements = document.querySelectorAll('.about-hero::before, .about-hero::after');
        let scrollPos = 0;

        window.addEventListener('scroll', () => {
            scrollPos = window.pageYOffset;
            if (heroElements.length > 0) {
                requestAnimationFrame(() => {
                    const hero = document.querySelector('.about-hero');
                    if (hero) {
                        hero.style.setProperty('--scroll', scrollPos);
                    }
                });
            }
        });

        // Add Hover Effect to Timeline Items
        timelineItems.forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateX(10px)';
            });

            item.addEventListener('mouseleave', function() {
                if (this.classList.contains('animate-in')) {
                    this.style.transform = 'translateX(0)';
                }
            });
        });

        // Interactive Profile Info
        const profileInfo = document.querySelector('.profile-info');
        if (profileInfo) {
            const infoItems = profileInfo.querySelectorAll('p');
            infoItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateX(-20px)';
                setTimeout(() => {
                    item.style.transition = 'all 0.5s ease';
                    item.style.opacity = '1';
                    item.style.transform = 'translateX(0)';
                }, 800 + (index * 100));
            });
        }

        // Add Number Counter Animation for Experience Badge
        const heroBadge = document.querySelector('.hero-badge');
        if (heroBadge) {
            const animateValue = (element, start, end, duration) => {
                const startTimestamp = Date.now();
                const step = () => {
                    const timestamp = Date.now();
                    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                    const value = Math.floor(progress * (end - start) + start);
                    element.textContent = `Over ${value} Years of Experience`;
                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    }
                };
                window.requestAnimationFrame(step);
            };

            const badgeObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            animateValue(entry.target, 0, 10, 1500);
                        }, 600);
                        badgeObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            badgeObserver.observe(heroBadge);
        }

        // Interactive Canvas Tree Animation
        const canvas = document.getElementById('treeCanvas');
        if (canvas) {
            const ctx = canvas.getContext('2d');
            const rect = canvas.getBoundingClientRect();

            // Set canvas size
            canvas.width = rect.width;
            canvas.height = rect.height;

            // Tree parameters
            let iterations = 1;
            let maxIterations = 7;
            let angleOfExpL = Math.PI / 6;
            let angleOfExpR = Math.PI / 3;
            let param = 0;
            let mouse = { x: canvas.width / 2, y: canvas.height / 2 };
            let isGrowing = true;

            // Therapeutic colors (calming greens and earthy tones)
            const colors = ["5b8c85", "6b9b94", "4a7268", "7ca39c", "8db4ae", "3d5e58"];
            let colorId = 0;

            // Point constructor
            function Point(x, y) {
                this.x = x;
                this.y = y;
            }

            // Get direction between two points
            function getDir(pointA, pointB) {
                return -Math.atan2(pointB.x - pointA.x, pointB.y - pointA.y) + Math.PI / 2;
            }

            // Draw line function
            function drawLine(pointA, pointB, size) {
                const opacity = Math.min(0.8, size / iterations + 0.3);
                ctx.strokeStyle = `rgba(139, 111, 77, ${opacity})`;
                ctx.lineWidth = size;
                ctx.lineCap = 'round';
                ctx.beginPath();
                ctx.moveTo(pointA.x, pointA.y);
                ctx.lineTo(pointB.x, pointB.y);
                ctx.stroke();
                ctx.closePath();
            }

            // Recursive tree iteration
            function iterate(startPoint, deg, iteration) {
                const length = (iterations / iteration) * 12;
                const lineBeginning = startPoint;
                const size = Math.max(0.5, length / 25);

                const lineEnding = new Point(
                    lineBeginning.x + length * Math.cos(deg + angleOfExpL),
                    lineBeginning.y + length * Math.sin(deg + angleOfExpL)
                );
                const lineEnding2 = new Point(
                    lineBeginning.x + length * Math.cos(deg - angleOfExpR),
                    lineBeginning.y + length * Math.sin(deg - angleOfExpR)
                );

                drawLine(lineBeginning, lineEnding, size);
                drawLine(lineBeginning, lineEnding2, size);

                if (iteration >= iterations) {
                    // Draw leaves/flowers at the ends
                    ctx.fillStyle = "#" + colors[colorId % colors.length];
                    colorId++;

                    // Leaf 1
                    ctx.globalAlpha = 0.7;
                    ctx.beginPath();
                    ctx.arc(lineEnding.x, lineEnding.y, 4 + Math.sin(param/20) * 1, 0, 2 * Math.PI, false);
                    ctx.fill();
                    ctx.closePath();

                    // Leaf 2
                    ctx.beginPath();
                    ctx.arc(lineEnding2.x, lineEnding2.y, 3 + Math.cos(param/15) * 1, 0, 2 * Math.PI, false);
                    ctx.fill();
                    ctx.closePath();
                    ctx.globalAlpha = 1;

                    return;
                }

                iterate(lineEnding, deg + angleOfExpL, iteration + 1);
                iterate(lineEnding2, deg - angleOfExpR, iteration + 1);
            }

            // Animation loop
            function animate() {
                // Clear canvas
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                // Center the tree
                ctx.save();
                ctx.translate(canvas.width / 2, canvas.height - 50);

                // Gradually grow the tree
                if (isGrowing && iterations < maxIterations) {
                    iterations += 0.03;
                }

                // Reset color counter
                colorId = 0;

                // Calculate angles based on mouse position
                const mouseInfluence = 0.3;
                angleOfExpR = Math.PI / 3 + Math.sin(param / 20) * 0.1 +
                             ((mouse.x - canvas.width / 2) / canvas.width) * mouseInfluence;
                angleOfExpL = Math.PI / 6 + Math.cos(param / 15) * 0.1 -
                             ((mouse.x - canvas.width / 2) / canvas.width) * mouseInfluence;

                // Draw trunk
                drawLine(new Point(0, 0), new Point(0, -80), 5);

                // Draw roots
                ctx.globalAlpha = 0.6;
                drawLine(new Point(0, 0), new Point(-20, 20), 3);
                drawLine(new Point(0, 0), new Point(20, 20), 3);
                drawLine(new Point(0, 0), new Point(-10, 25), 2);
                drawLine(new Point(0, 0), new Point(10, 25), 2);
                ctx.globalAlpha = 1;

                // Start recursive tree drawing
                iterate(new Point(0, -80), -Math.PI / 2, 1);

                ctx.restore();

                param += 0.5;
                requestAnimationFrame(animate);
            }

            // Mouse movement handler
            canvas.addEventListener('mousemove', function(e) {
                const rect = canvas.getBoundingClientRect();
                mouse.x = e.clientX - rect.left;
                mouse.y = e.clientY - rect.top;
            });

            // Touch support for mobile
            canvas.addEventListener('touchmove', function(e) {
                e.preventDefault();
                const rect = canvas.getBoundingClientRect();
                const touch = e.touches[0];
                mouse.x = touch.clientX - rect.left;
                mouse.y = touch.clientY - rect.top;
            });

            // Start animation
            animate();

            // Handle window resize
            window.addEventListener('resize', function() {
                const rect = canvas.getBoundingClientRect();
                canvas.width = rect.width;
                canvas.height = rect.height;
            });
        }
    });
</script>

<?php get_footer(); ?>