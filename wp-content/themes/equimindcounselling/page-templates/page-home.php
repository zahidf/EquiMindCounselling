<?php
/*
Template Name: Home Page
*/
get_header();
?>

<style>
    .hero-section {
        background: linear-gradient(135deg, #ecf5f3 0%, #d4e8e4 100%);
        padding: 100px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
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
    
    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(5deg); }
    }
    
    .hero-content {
        position: relative;
        z-index: 1;
        max-width: 800px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .hero-title {
        font-size: 48px;
        color: #1a2332;
        margin-bottom: 20px;
        font-weight: 700;
        line-height: 1.2;
    }
    
    .hero-subtitle {
        font-size: 24px;
        color: #5b8c85;
        margin-bottom: 30px;
        font-style: italic;
    }
    
    .hero-text {
        font-size: 18px;
        color: #2c3e50;
        line-height: 1.8;
        margin-bottom: 40px;
    }
    
    .hero-buttons {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .services-overview {
        padding: 80px 0;
        background-color: #ffffff;
    }
    
    .section-title {
        text-align: center;
        font-size: 36px;
        color: #1a2332;
        margin-bottom: 50px;
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
        background: #ffffff;
        border: 1px solid #e8f0ef;
        border-radius: 10px;
        padding: 30px;
        text-align: center;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
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
        transition: transform 0.3s ease;
    }
    
    .service-card:hover {
        box-shadow: 0 10px 30px rgba(91, 140, 133, 0.15);
        transform: translateY(-5px);
    }
    
    .service-card:hover::before {
        transform: scaleX(1);
    }
    
    .service-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #ecf5f3, #d4e8e4);
        border-radius: 50%;
        margin: 0 auto 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: #5b8c85;
    }
    
    .service-card h3 {
        font-size: 22px;
        color: #1a2332;
        margin-bottom: 15px;
    }
    
    .service-card p {
        color: #6c7983;
        line-height: 1.6;
        margin-bottom: 20px;
    }
    
    .service-link {
        color: #5b8c85;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        transition: gap 0.3s ease;
    }
    
    .service-link:hover {
        gap: 10px;
    }
    
    .welcome-section {
        padding: 80px 0;
        background-color: #f9fbfa;
    }
    
    .welcome-content {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
        text-align: center;
    }
    
    .welcome-text {
        font-size: 18px;
        line-height: 1.8;
        color: #2c3e50;
        margin-bottom: 30px;
    }
    
    .specialisms-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
        margin: 40px 0;
        text-align: left;
    }
    
    .specialisms-list li {
        list-style: none;
        padding-left: 25px;
        position: relative;
        color: #2c3e50;
    }
    
    .specialisms-list li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: #5b8c85;
        font-weight: bold;
    }
    
    .trust-section {
        padding: 60px 0;
        background-color: #ffffff;
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
    }
    
    .trust-badges {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 40px;
        flex-wrap: wrap;
    }
    
    .trust-badge {
        background-color: #f9fbfa;
        padding: 20px 30px;
        border-radius: 8px;
        font-weight: 500;
        color: #2c3e50;
        border: 2px solid #e8f0ef;
    }
    
    @media (max-width: 768px) {
        .hero-title {
            font-size: 36px;
        }
        
        .hero-subtitle {
            font-size: 20px;
        }
        
        .hero-text {
            font-size: 16px;
        }
        
        .services-grid {
            grid-template-columns: 1fr;
        }
        
        .specialisms-list {
            grid-template-columns: 1fr;
        }
    }
</style>

<main id="primary" class="site-main">
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">EquiMind Counselling</h1>
            <p class="hero-subtitle">Balancing Mind, Heart, and Healing</p>
            <p class="hero-text">
                Life's challenges can feel overwhelming, isolating, and confusing. At EquiMind Counselling, 
                I offer a compassionate, culturally informed, and trauma-sensitive approach to therapy for 
                adults, young people, and families. Whether you're struggling with anxiety, grief, relationship 
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
                <li>Bereavement and baby loss</li>
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
                    <h3>Child & Adolescent Support</h3>
                    <p>Collaborative, holistic work with children and young people. Creative approaches to build resilience and emotional expression.</p>
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
        const serviceCards = document.querySelectorAll('.service-card');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '0';
                        entry.target.style.transform = 'translateY(20px)';
                        entry.target.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                        
                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }, 100);
                    }, index * 100);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        serviceCards.forEach(card => {
            card.style.opacity = '0';
            observer.observe(card);
        });
    });
</script>

<?php get_footer(); ?>