<?php
/*
Template Name: Hypnotherapy
*/
get_header();
?>

<style>
    .hypno-hero {
        background: linear-gradient(135deg, #e8e3f5 0%, #d6c9e8 100%);
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }
    
    .hypno-hero::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(139, 91, 140, 0.1) 0%, transparent 70%);
        animation: pulse 4s ease-in-out infinite;
    }
    
    @keyframes pulse {
        0%, 100% { transform: translate(-50%, -50%) scale(1); opacity: 0.3; }
        50% { transform: translate(-50%, -50%) scale(1.1); opacity: 0.1; }
    }
    
    .hypno-hero-content {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
        text-align: center;
        position: relative;
        z-index: 1;
    }
    
    .hypno-hero-content h1 {
        font-size: 42px;
        color: #1a2332;
        margin-bottom: 20px;
    }
    
    .hypno-hero-content p {
        font-size: 20px;
        color: #6b5b8c;
        line-height: 1.6;
    }
    
    .hypno-intro {
        padding: 80px 0;
        background-color: #ffffff;
    }
    
    .hypno-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .intro-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
        margin-bottom: 60px;
    }
    
    .intro-content h2 {
        color: #1a2332;
        font-size: 32px;
        margin-bottom: 25px;
    }
    
    .intro-content p {
        color: #2c3e50;
        line-height: 1.8;
        margin-bottom: 20px;
        font-size: 16px;
    }
    
    .myth-box {
        background-color: #fef9ff;
        border-left: 4px solid #8b5b8c;
        padding: 20px;
        border-radius: 8px;
        margin-top: 30px;
    }
    
    .myth-box h4 {
        color: #8b5b8c;
        font-size: 18px;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .myth-box ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .myth-box li {
        padding: 8px 0;
        color: #2c3e50;
        position: relative;
        padding-left: 25px;
    }
    
    .myth-box li::before {
        content: '✗';
        position: absolute;
        left: 0;
        color: #d9534f;
        font-weight: bold;
    }
    
    .myth-box li.truth::before {
        content: '✓';
        color: #5cb85c;
    }
    
    .applications-section {
        background-color: #f9fbfa;
        padding: 80px 0;
    }
    
    .applications-header {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 50px;
        padding: 0 20px;
    }
    
    .applications-header h2 {
        color: #1a2332;
        font-size: 32px;
        margin-bottom: 20px;
    }
    
    .applications-header p {
        color: #5b8c85;
        font-size: 18px;
        line-height: 1.6;
    }
    
    .applications-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .application-card {
        background-color: white;
        padding: 35px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .application-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, #8b5b8c, #6b4b7c);
        transform: scaleX(0);
        transition: transform 0.3s ease;
        transform-origin: left;
    }
    
    .application-card:hover::before {
        transform: scaleX(1);
    }
    
    .application-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(139, 91, 140, 0.15);
    }
    
    .app-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #e8e3f5, #d6c9e8);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        margin-bottom: 20px;
    }
    
    .application-card h3 {
        color: #1a2332;
        font-size: 22px;
        margin-bottom: 15px;
    }
    
    .application-card p {
        color: #6c7983;
        line-height: 1.6;
        margin-bottom: 20px;
    }
    
    .app-examples {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .app-examples li {
        padding: 5px 0;
        color: #8b5b8c;
        font-size: 14px;
        position: relative;
        padding-left: 20px;
    }
    
    .app-examples li::before {
        content: '•';
        position: absolute;
        left: 0;
        font-size: 18px;
    }
    
    .process-section {
        padding: 80px 0;
        background-color: #ffffff;
    }
    
    .process-header {
        text-align: center;
        margin-bottom: 50px;
    }
    
    .process-header h2 {
        color: #1a2332;
        font-size: 32px;
        margin-bottom: 20px;
    }
    
    .process-timeline {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
    }
    
    .process-timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 2px;
        background-color: #e8e3f5;
    }
    
    .process-step {
        display: flex;
        align-items: center;
        margin-bottom: 60px;
        position: relative;
    }
    
    .process-step:nth-child(even) {
        flex-direction: row-reverse;
    }
    
    .step-content {
        flex: 1;
        padding: 30px;
        background-color: #f9fbfa;
        border-radius: 10px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
    }
    
    .process-step:nth-child(odd) .step-content {
        margin-right: 40px;
        text-align: right;
    }
    
    .process-step:nth-child(even) .step-content {
        margin-left: 40px;
    }
    
    .step-number {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 50px;
        background-color: #8b5b8c;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        font-weight: bold;
        z-index: 1;
    }
    
    .step-content h3 {
        color: #1a2332;
        font-size: 20px;
        margin-bottom: 15px;
    }
    
    .step-content p {
        color: #6c7983;
        line-height: 1.6;
    }
    
    .safety-section {
        background-color: #ecf5f3;
        padding: 60px 0;
    }
    
    .safety-content {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
        text-align: center;
    }
    
    .safety-content h2 {
        color: #1a2332;
        font-size: 32px;
        margin-bottom: 30px;
    }
    
    .safety-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .safety-item {
        background-color: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
    }
    
    .safety-icon {
        font-size: 32px;
        margin-bottom: 15px;
    }
    
    .safety-item h4 {
        color: #5b8c85;
        font-size: 18px;
        margin-bottom: 10px;
    }
    
    .safety-item p {
        color: #6c7983;
        line-height: 1.6;
        font-size: 14px;
    }
    
    .age-groups {
        padding: 60px 0;
        background-color: #ffffff;
    }
    
    .age-groups-content {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .age-groups h2 {
        text-align: center;
        color: #1a2332;
        font-size: 32px;
        margin-bottom: 50px;
    }
    
    .age-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }
    
    .age-card {
        background: linear-gradient(135deg, #f9fbfa 0%, #ecf5f3 100%);
        padding: 35px;
        border-radius: 15px;
        text-align: center;
        transition: all 0.3s ease;
    }
    
    .age-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(91, 140, 133, 0.15);
    }
    
    .age-card h3 {
        color: #1a2332;
        font-size: 24px;
        margin-bottom: 20px;
    }
    
    .age-card p {
        color: #2c3e50;
        line-height: 1.7;
        margin-bottom: 20px;
    }
    
    .age-benefits {
        text-align: left;
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .age-benefits li {
        padding: 8px 0;
        color: #5b8c85;
        position: relative;
        padding-left: 25px;
        font-size: 14px;
    }
    
    .age-benefits li::before {
        content: '✓';
        position: absolute;
        left: 0;
        font-weight: bold;
    }
    
    @media (max-width: 768px) {
        .intro-grid {
            grid-template-columns: 1fr;
        }
        
        .process-timeline::before {
            left: 20px;
        }
        
        .process-step,
        .process-step:nth-child(even) {
            flex-direction: column;
        }
        
        .step-content,
        .process-step:nth-child(odd) .step-content,
        .process-step:nth-child(even) .step-content {
            margin: 0;
            margin-top: 30px;
            text-align: left;
        }
        
        .step-number {
            left: 20px;
            transform: translateX(-50%);
        }
    }
</style>

<main id="primary" class="site-main">
    <section class="hypno-hero">
        <div class="hypno-hero-content">
            <h1>Clinical Hypnotherapy</h1>
            <p>Harnessing the power of your subconscious mind for lasting positive change</p>
        </div>
    </section>
    
    <section class="hypno-intro">
        <div class="hypno-container">
            <div class="intro-grid">
                <div class="intro-content">
                    <h2>What is Clinical Hypnotherapy?</h2>
                    <p>
                        Clinical hypnotherapy is a powerful therapeutic technique that uses guided relaxation and 
                        focused attention to achieve a heightened state of awareness. In this relaxed state, you 
                        can explore thoughts, feelings, and memories that might be hidden from your conscious mind.
                    </p>
                    <p>
                        Far from the stage hypnosis you might have seen, clinical hypnotherapy is a collaborative 
                        process where you remain in control throughout. It's a safe, evidence-based approach that 
                        can help with a wide range of physical and emotional challenges.
                    </p>
                    
                    <div class="myth-box">
                        <h4>🔍 Myths vs Reality</h4>
                        <ul>
                            <li>You won't lose control or consciousness</li>
                            <li>You can't be made to do anything against your will</li>
                            <li>You won't reveal secrets or private information</li>
                            <li class="truth">You'll be deeply relaxed but aware</li>
                            <li class="truth">You'll remember the session</li>
                            <li class="truth">You're always in control</li>
                        </ul>
                    </div>
                </div>
                
                <div class="intro-content">
                    <h2>How Can It Help?</h2>
                    <p>
                        Hypnotherapy works by bypassing the critical, analytical part of your mind and communicating 
                        directly with your subconscious. This is where our habits, beliefs, and automatic responses 
                        are stored.
                    </p>
                    <p>
                        By accessing this deeper level of consciousness, we can work together to:
                    </p>
                    <ul style="list-style: none; padding: 0; margin: 20px 0;">
                        <li style="padding: 10px 0; color: #5b8c85;">✓ Reframe negative thought patterns</li>
                        <li style="padding: 10px 0; color: #5b8c85;">✓ Release limiting beliefs</li>
                        <li style="padding: 10px 0; color: #5b8c85;">✓ Develop new, positive behaviors</li>
                        <li style="padding: 10px 0; color: #5b8c85;">✓ Process and heal from past experiences</li>
                        <li style="padding: 10px 0; color: #5b8c85;">✓ Enhance natural abilities and resources</li>
                    </ul>
                    <p>
                        I offer hypnotherapy for both adults and children, always ensuring it's appropriate and 
                        beneficial for your specific situation.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="applications-section">
        <div class="applications-header">
            <h2>Applications of Hypnotherapy</h2>
            <p>Clinical hypnotherapy can be effective for a wide range of concerns</p>
        </div>
        
        <div class="applications-grid">
            <div class="application-card">
                <div class="app-icon">🎯</div>
                <h3>Anxiety & Stress</h3>
                <p>Calm your nervous system and develop inner peace through relaxation techniques and positive suggestions.</p>
                <ul class="app-examples">
                    <li>General anxiety</li>
                    <li>Panic attacks</li>
                    <li>Social anxiety</li>
                    <li>Performance anxiety</li>
                </ul>
            </div>
            
            <div class="application-card">
                <div class="app-icon">😨</div>
                <h3>Fears & Phobias</h3>
                <p>Overcome specific fears that limit your life, from flying to public speaking to medical procedures.</p>
                <ul class="app-examples">
                    <li>Fear of flying</li>
                    <li>Claustrophobia</li>
                    <li>Animal phobias</li>
                    <li>Medical/dental anxiety</li>
                </ul>
            </div>
            
            <div class="application-card">
                <div class="app-icon">💪</div>
                <h3>Confidence Building</h3>
                <p>Strengthen self-esteem and unlock your potential through positive reinforcement and visualization.</p>
                <ul class="app-examples">
                    <li>Self-esteem issues</li>
                    <li>Public speaking</li>
                    <li>Interview confidence</li>
                    <li>Sports performance</li>
                </ul>
            </div>
            
            <div class="application-card">
                <div class="app-icon">🩹</div>
                <h3>Pain Management</h3>
                <p>Learn to manage chronic pain and discomfort through mind-body techniques and relaxation.</p>
                <ul class="app-examples">
                    <li>Chronic pain</li>
                    <li>Headaches/migraines</li>
                    <li>IBS symptoms</li>
                    <li>Post-surgery recovery</li>
                </ul>
            </div>
            
            <div class="application-card">
                <div class="app-icon">🚭</div>
                <h3>Habit Change</h3>
                <p>Break unwanted habits and establish healthier patterns through subconscious reprogramming.</p>
                <ul class="app-examples">
                    <li>Smoking cessation</li>
                    <li>Weight management</li>
                    <li>Nail biting</li>
                    <li>Sleep improvement</li>
                </ul>
            </div>
            
            <div class="application-card">
                <div class="app-icon">🧠</div>
                <h3>Trauma & PTSD</h3>
                <p>Gently process and integrate difficult experiences in a safe, controlled environment.</p>
                <ul class="app-examples">
                    <li>Past trauma</li>
                    <li>PTSD symptoms</li>
                    <li>Grief processing</li>
                    <li>Emotional healing</li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="process-section">
        <div class="process-header">
            <h2>The Hypnotherapy Process</h2>
        </div>
        
        <div class="process-timeline">
            <div class="process-step">
                <div class="step-content">
                    <h3>Initial Consultation</h3>
                    <p>We discuss your goals, explain the process, and ensure hypnotherapy is right for you. This is your opportunity to ask questions and feel comfortable.</p>
                </div>
                <div class="step-number">1</div>
            </div>
            
            <div class="process-step">
                <div class="step-content">
                    <h3>Induction & Relaxation</h3>
                    <p>Using gentle techniques, I guide you into a deeply relaxed state. You might feel like you're daydreaming or in that peaceful moment just before sleep.</p>
                </div>
                <div class="step-number">2</div>
            </div>
            
            <div class="process-step">
                <div class="step-content">
                    <h3>Therapeutic Work</h3>
                    <p>In this relaxed state, we work with positive suggestions, imagery, and techniques specific to your goals. You remain aware and in control throughout.</p>
                </div>
                <div class="step-number">3</div>
            </div>
            
            <div class="process-step">
                <div class="step-content">
                    <h3>Emergence & Integration</h3>
                    <p>You're gently brought back to full awareness, feeling refreshed and relaxed. We discuss the experience and any insights gained.</p>
                </div>
                <div class="step-number">4</div>
            </div>
            
            <div class="process-step">
                <div class="step-content">
                    <h3>Reinforcement</h3>
                    <p>I may provide self-hypnosis techniques or recordings to practice at home, reinforcing the positive changes between sessions.</p>
                </div>
                <div class="step-number">5</div>
            </div>
        </div>
    </section>
    
    <section class="safety-section">
        <div class="safety-content">
            <h2>Safety & Ethics</h2>
            <div class="safety-grid">
                <div class="safety-item">
                    <div class="safety-icon">🛡️</div>
                    <h4>Always Safe</h4>
                    <p>Hypnotherapy is completely safe when practiced by a qualified professional. You cannot get "stuck" in hypnosis.</p>
                </div>
                
                <div class="safety-item">
                    <div class="safety-icon">🤝</div>
                    <h4>Full Consent</h4>
                    <p>Everything is explained clearly, and we only proceed with your full understanding and consent.</p>
                </div>
                
                <div class="safety-item">
                    <div class="safety-icon">🔒</div>
                    <h4>Confidential</h4>
                    <p>All sessions are completely confidential, following the same ethical guidelines as counselling.</p>
                </div>
                
                <div class="safety-item">
                    <div class="safety-icon">✨</div>
                    <h4>Integrated Approach</h4>
                    <p>Hypnotherapy can be used alongside traditional counselling for enhanced therapeutic outcomes.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="age-groups">
        <div class="age-groups-content">
            <h2>Hypnotherapy for Different Ages</h2>
            
            <div class="age-cards">
                <div class="age-card">
                    <h3>Adults</h3>
                    <p>
                        Adult hypnotherapy sessions are tailored to your specific needs and goals. We work 
                        collaboratively to address your concerns using techniques appropriate for adult minds.
                    </p>
                    <ul class="age-benefits">
                        <li>Full 50-minute sessions</li>
                        <li>Complex issue resolution</li>
                        <li>Self-hypnosis training</li>
                        <li>Integration with counselling</li>
                    </ul>
                </div>
                
                <div class="age-card">
                    <h3>Children & Teens</h3>
                    <p>
                        Children are naturally imaginative, making them excellent candidates for hypnotherapy. 
                        Sessions are playful, using stories and visualization appropriate for their age.
                    </p>
                    <ul class="age-benefits">
                        <li>Shorter, engaging sessions</li>
                        <li>Story-based techniques</li>
                        <li>Parent involvement</li>
                        <li>Fun, imaginative approach</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="cta-section" style="background: linear-gradient(135deg, #8b5b8c 0%, #6b4b7c 100%); padding: 60px 0; text-align: center;">
        <div class="cta-content">
            <h2 style="color: white;">Discover the Power of Your Mind</h2>
            <p style="color: white; opacity: 0.95;">Ready to unlock your potential and create lasting positive change? Let's explore how hypnotherapy can help you.</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-white">Book Consultation</a>
                <a href="<?php echo esc_url(home_url('/faqs')); ?>" class="btn-outline-white">Learn More</a>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.application-card, .safety-item, .age-card');
        const steps = document.querySelectorAll('.process-step');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '0';
                        entry.target.style.transform = 'translateY(20px)';
                        entry.target.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                        
                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }, 50);
                    }, index * 75);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        cards.forEach(card => {
            card.style.opacity = '0';
            observer.observe(card);
        });
        
        steps.forEach(step => {
            step.style.opacity = '0';
            observer.observe(step);
        });
    });
</script>

<?php get_footer(); ?>