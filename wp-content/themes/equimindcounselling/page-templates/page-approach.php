<?php
/*
Template Name: My Approach
*/
get_header();
?>

<style>
    .approach-hero {
        background: linear-gradient(135deg, #e8f2f0 0%, #d4e8e4 100%);
        padding: 80px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    
    .approach-hero::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100px;
        background: linear-gradient(to top, white, transparent);
    }
    
    .approach-hero-content {
        max-width: 800px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
        z-index: 1;
    }
    
    .approach-hero h1 {
        font-size: 42px;
        color: #1a2332;
        margin-bottom: 20px;
    }
    
    .approach-hero p {
        font-size: 20px;
        color: #5b8c85;
        line-height: 1.6;
    }
    
    .philosophy-section {
        padding: 80px 0;
        background-color: #ffffff;
    }
    
    .philosophy-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .philosophy-intro {
        max-width: 800px;
        margin: 0 auto 60px;
        text-align: center;
    }
    
    .philosophy-intro h2 {
        color: #1a2332;
        font-size: 32px;
        margin-bottom: 25px;
    }
    
    .philosophy-intro p {
        color: #2c3e50;
        font-size: 18px;
        line-height: 1.8;
    }
    
    .modalities-section {
        background-color: #f9fbfa;
        padding: 80px 0;
    }
    
    .modalities-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 40px;
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .modality-card {
        background-color: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .modality-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, #5b8c85, #4a7268);
        transform: scaleX(0);
        transition: transform 0.3s ease;
        transform-origin: left;
    }
    
    .modality-card:hover::before {
        transform: scaleX(1);
    }
    
    .modality-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(91, 140, 133, 0.15);
    }
    
    .modality-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #ecf5f3, #d4e8e4);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        margin-bottom: 20px;
    }
    
    .modality-card h3 {
        color: #1a2332;
        font-size: 24px;
        margin-bottom: 15px;
    }
    
    .modality-subtitle {
        color: #5b8c85;
        font-size: 14px;
        font-style: italic;
        margin-bottom: 20px;
    }
    
    .modality-card p {
        color: #2c3e50;
        line-height: 1.7;
        margin-bottom: 20px;
    }
    
    .modality-techniques {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .modality-techniques li {
        padding: 8px 0;
        color: #6c7983;
        position: relative;
        padding-left: 25px;
        font-size: 14px;
    }
    
    .modality-techniques li::before {
        content: '→';
        position: absolute;
        left: 0;
        color: #5b8c85;
    }
    
    .integration-section {
        padding: 80px 0;
        background-color: #ffffff;
    }
    
    .integration-content {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .integration-content h2 {
        text-align: center;
        color: #1a2332;
        font-size: 32px;
        margin-bottom: 40px;
    }
    
    .integration-visual {
        background: linear-gradient(135deg, #f9fbfa 0%, #ecf5f3 100%);
        padding: 40px;
        border-radius: 20px;
        margin-bottom: 40px;
        text-align: center;
    }
    
    .integration-circles {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: -30px;
        margin: 30px 0;
        position: relative;
    }
    
    .circle {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: 500;
        color: white;
        text-align: center;
        padding: 20px;
        position: relative;
        z-index: 1;
    }
    
    .circle:nth-child(1) {
        background-color: #5b8c85;
        z-index: 3;
    }
    
    .circle:nth-child(2) {
        background-color: #7a9d96;
        margin-left: -30px;
        z-index: 2;
    }
    
    .circle:nth-child(3) {
        background-color: #94afa9;
        margin-left: -30px;
        z-index: 1;
    }
    
    .integration-text {
        color: #2c3e50;
        line-height: 1.8;
        font-size: 16px;
    }
    
    .values-section {
        background-color: #ecf5f3;
        padding: 80px 0;
    }
    
    .values-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .values-header {
        text-align: center;
        margin-bottom: 50px;
    }
    
    .values-header h2 {
        color: #1a2332;
        font-size: 32px;
        margin-bottom: 20px;
    }
    
    .values-header p {
        color: #5b8c85;
        font-size: 18px;
        max-width: 700px;
        margin: 0 auto;
    }
    
    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }
    
    .value-card {
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        text-align: center;
        transition: all 0.3s ease;
    }
    
    .value-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(91, 140, 133, 0.12);
    }
    
    .value-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #5b8c85, #4a7268);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 32px;
        color: white;
    }
    
    .value-card h3 {
        color: #1a2332;
        font-size: 20px;
        margin-bottom: 15px;
    }
    
    .value-card p {
        color: #6c7983;
        line-height: 1.6;
        font-size: 14px;
    }
    
    .process-section {
        padding: 80px 0;
        background-color: #ffffff;
    }
    
    .process-content {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .process-content h2 {
        text-align: center;
        color: #1a2332;
        font-size: 32px;
        margin-bottom: 40px;
    }
    
    .session-flow {
        background-color: #f9fbfa;
        padding: 40px;
        border-radius: 15px;
        margin-bottom: 40px;
    }
    
    .session-flow h3 {
        color: #5b8c85;
        font-size: 24px;
        margin-bottom: 30px;
    }
    
    .flow-step {
        display: flex;
        align-items: flex-start;
        margin-bottom: 25px;
        position: relative;
        padding-left: 50px;
    }
    
    .flow-step::before {
        content: attr(data-step);
        position: absolute;
        left: 0;
        top: 0;
        width: 35px;
        height: 35px;
        background-color: #5b8c85;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }
    
    .flow-step h4 {
        color: #1a2332;
        font-size: 18px;
        margin-bottom: 8px;
    }
    
    .flow-step p {
        color: #6c7983;
        line-height: 1.6;
        font-size: 15px;
    }
    
    .expectations-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-top: 40px;
    }
    
    .expectation-box {
        background-color: #f9fbfa;
        padding: 30px;
        border-radius: 10px;
    }
    
    .expectation-box h4 {
        color: #5b8c85;
        font-size: 20px;
        margin-bottom: 20px;
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
        padding: 10px 0;
        color: #2c3e50;
        position: relative;
        padding-left: 25px;
    }
    
    .expectation-list li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: #5b8c85;
        font-weight: bold;
    }
    
    @media (max-width: 768px) {
        .modalities-grid {
            grid-template-columns: 1fr;
        }
        
        .integration-circles {
            flex-direction: column;
            gap: 20px;
        }
        
        .circle {
            margin-left: 0 !important;
        }
        
        .expectations-grid {
            grid-template-columns: 1fr;
        }
        
        .approach-hero h1 {
            font-size: 32px;
        }
    }
</style>

<main id="primary" class="site-main">
    <section class="approach-hero">
        <div class="approach-hero-content">
            <h1>My Therapeutic Approach</h1>
            <p>An integrative, person-centred way of working that honors your unique journey</p>
        </div>
    </section>
    
    <section class="philosophy-section">
        <div class="philosophy-container">
            <div class="philosophy-intro">
                <h2>Philosophy of Healing</h2>
                <p>
                    I believe that you are the expert on your own life. My role is to provide a safe, 
                    supportive space where you can explore your thoughts and feelings, gain new insights, 
                    and discover your own path to healing. Therapy is a collaborative journey where your 
                    voice, choices, and pace are always respected.
                </p>
            </div>
        </div>
    </section>
    
    <section class="modalities-section">
        <div class="modalities-grid">
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
                <div class="modality-icon">🎨</div>
                <h3>Creative & Expressive Methods</h3>
                <p class="modality-subtitle">Beyond words</p>
                <p>
                    Sometimes feelings are hard to put into words. Creative approaches like art, 
                    writing, imagery, and metaphor can help express and process emotions in 
                    different ways, particularly helpful for trauma and complex feelings.
                </p>
                <ul class="modality-techniques">
                    <li>Art and drawing exercises</li>
                    <li>Guided imagery</li>
                    <li>Metaphor and storytelling</li>
                    <li>Expressive writing</li>
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
                    <p>Honoring and integrating your cultural background, values, and lived experiences.</p>
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
            
            <div class="session-flow">
                <h3>Your Therapy Journey</h3>
                
                <div class="flow-step" data-step="1">
                    <div>
                        <h4>Initial Contact</h4>
                        <p>Free 15-minute consultation to discuss your needs and see if we're a good fit.</p>
                    </div>
                </div>
                
                <div class="flow-step" data-step="2">
                    <div>
                        <h4>Assessment Sessions</h4>
                        <p>First few sessions to understand your history, current challenges, and therapy goals.</p>
                    </div>
                </div>
                
                <div class="flow-step" data-step="3">
                    <div>
                        <h4>Collaborative Planning</h4>
                        <p>Together we identify focus areas and discuss which approaches might be most helpful.</p>
                    </div>
                </div>
                
                <div class="flow-step" data-step="4">
                    <div>
                        <h4>Ongoing Therapy</h4>
                        <p>Regular sessions where we work through your concerns at your pace.</p>
                    </div>
                </div>
                
                <div class="flow-step" data-step="5">
                    <div>
                        <h4>Review & Adjust</h4>
                        <p>Regular check-ins to ensure therapy is meeting your needs and adjust as necessary.</p>
                    </div>
                </div>
            </div>
            
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
    
    <section class="cta-section" style="background: linear-gradient(135deg, #5b8c85 0%, #4a7268 100%); padding: 60px 0; text-align: center;">
        <div class="cta-content">
            <h2 style="color: white;">Ready to Begin Your Journey?</h2>
            <p style="color: white; opacity: 0.95;">Let's work together to create positive change in your life</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-white">Book Consultation</a>
                <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn-outline-white">Explore Services</a>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.modality-card, .value-card, .flow-step');
        
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
    });
</script>

<?php get_footer(); ?>