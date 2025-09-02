<?php
/*
Template Name: Services Page
*/
get_header();
?>

<style>
    .services-hero {
        background: linear-gradient(135deg, #f9fbfa 0%, #ecf5f3 100%);
        padding: 80px 0;
        text-align: center;
    }
    
    .services-hero h1 {
        font-size: 42px;
        color: #1a2332;
        margin-bottom: 20px;
    }
    
    .services-hero p {
        font-size: 20px;
        color: #5b8c85;
        max-width: 700px;
        margin: 0 auto;
        line-height: 1.6;
    }
    
    .services-main {
        padding: 80px 0;
        background-color: #ffffff;
    }
    
    .services-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .services-intro {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 60px;
    }
    
    .services-intro p {
        font-size: 18px;
        line-height: 1.8;
        color: #2c3e50;
    }
    
    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
        gap: 40px;
        margin-bottom: 60px;
    }
    
    .service-block {
        background-color: #ffffff;
        border: 1px solid #e8f0ef;
        border-radius: 12px;
        padding: 40px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .service-block::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, #5b8c85, #4a7268);
    }
    
    .service-block:hover {
        box-shadow: 0 15px 40px rgba(91, 140, 133, 0.12);
        transform: translateY(-3px);
    }
    
    .service-header {
        display: flex;
        align-items: flex-start;
        margin-bottom: 25px;
    }
    
    .service-icon-large {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #ecf5f3, #d4e8e4);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        margin-right: 20px;
        flex-shrink: 0;
    }
    
    .service-title-section h2 {
        color: #1a2332;
        font-size: 26px;
        margin-bottom: 8px;
    }
    
    .service-subtitle {
        color: #5b8c85;
        font-size: 16px;
        font-style: italic;
    }
    
    .service-description {
        color: #2c3e50;
        line-height: 1.8;
        margin-bottom: 25px;
        font-size: 16px;
    }
    
    .service-features {
        margin-bottom: 25px;
    }
    
    .service-features h4 {
        color: #1a2332;
        font-size: 18px;
        margin-bottom: 15px;
        font-weight: 600;
    }
    
    .feature-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: grid;
        grid-template-columns: 1fr;
        gap: 10px;
    }
    
    .feature-list li {
        padding-left: 28px;
        position: relative;
        color: #6c7983;
        line-height: 1.6;
    }
    
    .feature-list li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: #5b8c85;
        font-weight: bold;
        font-size: 16px;
    }
    
    .service-benefits {
        background-color: #f9fbfa;
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 25px;
    }
    
    .service-benefits h4 {
        color: #1a2332;
        font-size: 18px;
        margin-bottom: 15px;
        font-weight: 600;
    }
    
    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
    }
    
    .benefit-item {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #2c3e50;
        font-size: 14px;
    }
    
    .benefit-item::before {
        content: '•';
        color: #5b8c85;
        font-size: 20px;
        line-height: 1;
    }
    
    .service-cta {
        display: flex;
        gap: 15px;
        margin-top: 30px;
    }
    
    .btn-service {
        padding: 12px 28px;
        background-color: #5b8c85;
        color: white;
        border-radius: 25px;
        font-weight: 500;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
    }
    
    .btn-service:hover {
        background-color: #4a7268;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(91, 140, 133, 0.3);
    }
    
    .btn-service-outline {
        padding: 12px 28px;
        background-color: transparent;
        color: #5b8c85;
        border: 2px solid #5b8c85;
        border-radius: 25px;
        font-weight: 500;
        transition: all 0.3s ease;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
    }
    
    .btn-service-outline:hover {
        background-color: #ecf5f3;
        border-color: #4a7268;
        color: #4a7268;
    }
    
    .specialist-section {
        background-color: #f9fbfa;
        padding: 60px 0;
        margin-top: 40px;
    }
    
    .specialist-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .specialist-title {
        text-align: center;
        color: #1a2332;
        font-size: 36px;
        margin-bottom: 50px;
    }
    
    .specialist-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }
    
    .specialist-card {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        border-left: 4px solid #5b8c85;
        transition: all 0.3s ease;
    }
    
    .specialist-card:hover {
        box-shadow: 0 10px 30px rgba(91, 140, 133, 0.12);
        transform: translateX(5px);
    }
    
    .specialist-card h3 {
        color: #1a2332;
        font-size: 22px;
        margin-bottom: 15px;
    }
    
    .specialist-card p {
        color: #6c7983;
        line-height: 1.7;
        margin-bottom: 20px;
    }
    
    .specialist-link {
        color: #5b8c85;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        transition: gap 0.3s ease;
    }
    
    .specialist-link:hover {
        gap: 10px;
    }
    
    @media (max-width: 768px) {
        .services-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }
        
        .benefits-grid {
            grid-template-columns: 1fr;
        }
        
        .service-cta {
            flex-direction: column;
        }
        
        .specialist-grid {
            grid-template-columns: 1fr;
        }
        
        .service-header {
            flex-direction: column;
            text-align: center;
        }
        
        .service-icon-large {
            margin: 0 auto 20px;
        }
    }
</style>

<main id="primary" class="site-main">
    <section class="services-hero">
        <div class="container">
            <h1>Professional Therapy Services</h1>
            <p>Comprehensive support for adults, children, and families through evidence-based therapeutic approaches</p>
        </div>
    </section>
    
    <section class="services-main">
        <div class="services-container">
            <div class="services-intro">
                <p>
                    Every individual's journey is unique. I offer a range of therapeutic services tailored to meet 
                    your specific needs, whether you're seeking support for yourself, your child, or your family. 
                    All services are provided with cultural sensitivity, trauma-informed care, and a commitment to 
                    your wellbeing.
                </p>
            </div>
            
            <div class="services-grid">
                <div class="service-block">
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
                        <h4>Areas of Support:</h4>
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
                        <h4>Benefits:</h4>
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
                
                <div class="service-block">
                    <div class="service-header">
                        <div class="service-icon-large">🌱</div>
                        <div class="service-title-section">
                            <h2>Child & Adolescent Therapy</h2>
                            <p class="service-subtitle">Developmentally appropriate support for young people</p>
                        </div>
                    </div>
                    
                    <p class="service-description">
                        Working with children and young people requires a special approach. I create a warm, 
                        engaging environment where young clients feel safe to express themselves through talking, 
                        play, and creative activities.
                    </p>
                    
                    <div class="service-features">
                        <h4>Therapeutic Approach:</h4>
                        <ul class="feature-list">
                            <li>Age-appropriate interventions</li>
                            <li>Creative and play-based techniques</li>
                            <li>Collaboration with parents/carers</li>
                            <li>School-related challenges support</li>
                            <li>Emotional regulation skills</li>
                            <li>Building resilience and confidence</li>
                        </ul>
                    </div>
                    
                    <div class="service-benefits">
                        <h4>Focus Areas:</h4>
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
                
                <div class="service-block">
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
                        <h4>Applications:</h4>
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
                        <h4>Approach:</h4>
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
                
                <div class="service-block">
                    <div class="service-header">
                        <div class="service-icon-large">💫</div>
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
                        <h4>Benefits of Online Therapy:</h4>
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
                        <h4>Technical Requirements:</h4>
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
        const serviceBlocks = document.querySelectorAll('.service-block');
        const specialistCards = document.querySelectorAll('.specialist-card');
        
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '0';
                        entry.target.style.transform = 'translateY(30px)';
                        entry.target.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                        
                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }, 100);
                    }, index * 150);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        serviceBlocks.forEach(block => {
            block.style.opacity = '0';
            observer.observe(block);
        });
        
        specialistCards.forEach(card => {
            card.style.opacity = '0';
            observer.observe(card);
        });
    });
</script>

<?php get_footer(); ?>