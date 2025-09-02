<?php
/*
Template Name: Adult Therapy
*/
get_header();
?>

<style>
    .adult-therapy-hero {
        background: linear-gradient(135deg, #ecf5f3 0%, #d4e8e4 100%);
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }
    
    .adult-therapy-hero::before {
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
    
    .hero-content-adult {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
        text-align: center;
        position: relative;
        z-index: 1;
    }
    
    .hero-content-adult h1 {
        font-size: 48px;
        color: #1a2332;
        margin-bottom: 20px;
        font-weight: 700;
        line-height: 1.2;
    }
    
    .hero-content-adult p {
        font-size: 24px;
        color: #5b8c85;
        line-height: 1.6;
        font-style: italic;
    }
    
    .therapy-overview {
        padding: 80px 0;
        background-color: #ffffff;
    }
    
    .therapy-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .overview-intro {
        max-width: 800px;
        margin: 0 auto 60px;
        text-align: center;
    }
    
    .overview-intro h2 {
        color: #1a2332;
        font-size: 32px;
        margin-bottom: 25px;
    }
    
    .overview-intro p {
        font-size: 18px;
        line-height: 1.8;
        color: #2c3e50;
    }
    
    .issues-section {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 40px;
        margin-bottom: 60px;
    }
    
    .issues-column {
        background-color: #f9fbfa;
        padding: 35px;
        border-radius: 10px;
        border-left: 4px solid #5b8c85;
    }
    
    .issues-column h3 {
        color: #1a2332;
        font-size: 24px;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .issue-icon {
        width: 35px;
        height: 35px;
        background: linear-gradient(135deg, #5b8c85, #4a7268);
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 18px;
    }
    
    .issues-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .issues-list li {
        padding: 12px 0;
        border-bottom: 1px solid #e8f0ef;
        color: #2c3e50;
        position: relative;
        padding-left: 25px;
    }
    
    .issues-list li:last-child {
        border-bottom: none;
    }
    
    .issues-list li::before {
        content: '→';
        position: absolute;
        left: 0;
        color: #5b8c85;
        font-weight: bold;
    }
    
    .approach-section {
        background-color: #ffffff;
        padding: 60px 0;
        border-top: 1px solid #e8f0ef;
    }
    
    .approach-content {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .approach-content h2 {
        color: #1a2332;
        font-size: 32px;
        text-align: center;
        margin-bottom: 40px;
    }
    
    .approach-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-bottom: 40px;
    }
    
    .approach-card {
        text-align: center;
        padding: 30px 20px;
        background-color: #ffffff;
        border: 1px solid #e8f0ef;
        border-radius: 10px;
        transition: all 0.3s ease;
    }
    
    .approach-card:hover {
        box-shadow: 0 10px 25px rgba(91, 140, 133, 0.1);
        transform: translateY(-3px);
        border-color: #5b8c85;
    }
    
    .approach-number {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #ecf5f3, #d4e8e4);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 22px;
        font-weight: bold;
        color: #5b8c85;
    }
    
    .approach-card h4 {
        color: #1a2332;
        font-size: 20px;
        margin-bottom: 15px;
    }
    
    .approach-card p {
        color: #6c7983;
        line-height: 1.6;
        font-size: 15px;
    }
    
    .benefits-section {
        background-color: #f9fbfa;
        padding: 80px 0;
    }
    
    .benefits-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .benefits-header {
        text-align: center;
        margin-bottom: 50px;
    }
    
    .benefits-header h2 {
        color: #1a2332;
        font-size: 32px;
        margin-bottom: 20px;
    }
    
    .benefits-header p {
        color: #5b8c85;
        font-size: 18px;
        max-width: 600px;
        margin: 0 auto;
    }
    
    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }
    
    .benefit-card {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        text-align: center;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .benefit-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 3px;
        background: linear-gradient(90deg, #5b8c85, #4a7268);
        transition: width 0.3s ease;
    }
    
    .benefit-card:hover::before {
        width: 100%;
    }
    
    .benefit-card:hover {
        box-shadow: 0 15px 35px rgba(91, 140, 133, 0.12);
        transform: translateY(-5px);
    }
    
    .benefit-icon {
        font-size: 36px;
        margin-bottom: 20px;
    }
    
    .benefit-card h3 {
        color: #1a2332;
        font-size: 20px;
        margin-bottom: 15px;
    }
    
    .benefit-card p {
        color: #6c7983;
        line-height: 1.6;
    }
    
    .cta-section {
        background: linear-gradient(135deg, #5b8c85 0%, #4a7268 100%);
        padding: 60px 0;
        text-align: center;
        color: white;
    }
    
    .cta-content h2 {
        font-size: 32px;
        margin-bottom: 20px;
        color: white;
    }
    
    .cta-content p {
        font-size: 18px;
        margin-bottom: 30px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
        opacity: 0.95;
    }
    
    .cta-buttons {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .btn-white {
        background-color: white;
        color: #5b8c85;
        padding: 14px 30px;
        border-radius: 25px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
    }
    
    .btn-white:hover {
        background-color: #f0f7f5;
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.2);
    }
    
    .btn-outline-white {
        background-color: transparent;
        color: white;
        border: 2px solid white;
        padding: 12px 30px;
        border-radius: 25px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
    }
    
    .btn-outline-white:hover {
        background-color: rgba(255,255,255,0.1);
        transform: translateY(-2px);
    }
    
    @media (max-width: 768px) {
        .issues-section {
            grid-template-columns: 1fr;
        }
        
        .approach-grid {
            grid-template-columns: 1fr;
        }
        
        .benefits-grid {
            grid-template-columns: 1fr;
        }
        
        .hero-content-adult h1 {
            font-size: 32px;
        }
    }
</style>

<main id="primary" class="site-main">
    <section class="adult-therapy-hero">
        <div class="hero-content-adult">
            <h1>Adult Therapy</h1>
            <p>Empowering you to navigate life's challenges with clarity, resilience, and renewed purpose</p>
        </div>
    </section>
    
    <section class="therapy-overview">
        <div class="therapy-container">
            <div class="overview-intro">
                <h2>A Safe Space for Your Journey</h2>
                <p>
                    Life can present us with challenges that feel overwhelming to face alone. Whether you're 
                    dealing with immediate stressors or long-standing patterns, therapy offers a confidential 
                    space to explore, understand, and transform your experiences. Together, we'll work at your 
                    pace to help you find clarity, develop coping strategies, and create meaningful change.
                </p>
            </div>
            
            <div class="issues-section">
                <div class="issues-column">
                    <h3><span class="issue-icon">🧠</span> Emotional Wellbeing</h3>
                    <ul class="issues-list">
                        <li>Anxiety and panic attacks</li>
                        <li>Depression and low mood</li>
                        <li>Stress and burnout</li>
                        <li>Emotional regulation difficulties</li>
                        <li>Self-esteem and confidence issues</li>
                        <li>Anger management</li>
                    </ul>
                </div>
                
                <div class="issues-column">
                    <h3><span class="issue-icon">💔</span> Life Transitions & Loss</h3>
                    <ul class="issues-list">
                        <li>Grief and bereavement</li>
                        <li>Baby loss and pregnancy loss</li>
                        <li>Relationship breakdown</li>
                        <li>Career transitions</li>
                        <li>Life stage adjustments</li>
                        <li>Identity exploration</li>
                    </ul>
                </div>
                
                <div class="issues-column">
                    <h3><span class="issue-icon">👥</span> Relationships & Family</h3>
                    <ul class="issues-list">
                        <li>Communication difficulties</li>
                        <li>Boundary setting</li>
                        <li>Family conflicts</li>
                        <li>Intimacy and trust issues</li>
                        <li>Co-dependency patterns</li>
                        <li>Social anxiety and isolation</li>
                    </ul>
                </div>
                
                <div class="issues-column">
                    <h3><span class="issue-icon">🌟</span> Trauma & Recovery</h3>
                    <ul class="issues-list">
                        <li>Post-traumatic stress</li>
                        <li>Childhood trauma effects</li>
                        <li>Domestic abuse recovery</li>
                        <li>Cultural and racial trauma</li>
                        <li>Complex trauma</li>
                        <li>Dissociation and flashbacks</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="approach-section">
        <div class="approach-content">
            <h2>How We'll Work Together</h2>
            
            <div class="approach-grid">
                <div class="approach-card">
                    <div class="approach-number">1</div>
                    <h4>Initial Consultation</h4>
                    <p>A free 15-minute call to discuss your needs and see if we're a good fit</p>
                </div>
                
                <div class="approach-card">
                    <div class="approach-number">2</div>
                    <h4>Assessment Session</h4>
                    <p>Understanding your history, current challenges, and therapy goals</p>
                </div>
                
                <div class="approach-card">
                    <div class="approach-number">3</div>
                    <h4>Collaborative Planning</h4>
                    <p>Creating a tailored approach that fits your unique needs and preferences</p>
                </div>
                
                <div class="approach-card">
                    <div class="approach-number">4</div>
                    <h4>Regular Sessions</h4>
                    <p>Weekly 50-minute sessions, with flexibility to adjust frequency as needed</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="benefits-section">
        <div class="benefits-container">
            <div class="benefits-header">
                <h2>Benefits of Adult Therapy</h2>
                <p>Investing in your mental health creates ripple effects across all areas of your life</p>
            </div>
            
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">🎯</div>
                    <h3>Greater Self-Awareness</h3>
                    <p>Understand your patterns, triggers, and responses to develop deeper insight into yourself</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">🛠️</div>
                    <h3>Practical Tools</h3>
                    <p>Learn evidence-based techniques to manage symptoms and navigate daily challenges</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">💪</div>
                    <h3>Emotional Resilience</h3>
                    <p>Build capacity to handle stress, setbacks, and uncertainty with greater ease</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">🌱</div>
                    <h3>Personal Growth</h3>
                    <p>Move beyond survival mode to thrive and reach your full potential</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">❤️</div>
                    <h3>Improved Relationships</h3>
                    <p>Develop healthier communication patterns and deeper connections with others</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">✨</div>
                    <h3>Life Satisfaction</h3>
                    <p>Find meaning, purpose, and joy in your daily life and future aspirations</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Begin Your Healing Journey?</h2>
            <p>Taking the first step towards therapy is an act of courage and self-care. I'm here to support you every step of the way.</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-white">Book Free Consultation</a>
                <a href="<?php echo esc_url(home_url('/faqs')); ?>" class="btn-outline-white">View FAQs</a>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.approach-card, .benefit-card');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '0';
                        entry.target.style.transform = 'scale(0.9)';
                        entry.target.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                        
                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'scale(1)';
                        }, 50);
                    }, index * 100);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        cards.forEach(card => {
            card.style.opacity = '0';
            observer.observe(card);
        });
    });
</script>

<?php get_footer(); ?>