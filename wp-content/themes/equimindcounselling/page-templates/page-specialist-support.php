<?php
/*
Template Name: Specialist Support
*/
get_header();
?>

<style>
    .specialist-hero {
        background: linear-gradient(135deg, #ecf5f3 0%, #d4e8e4 100%);
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }
    
    .specialist-hero::before {
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
    
    .specialist-hero-content {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
        text-align: center;
        position: relative;
        z-index: 1;
    }
    
    .specialist-hero-content h1 {
        font-size: 48px;
        color: #1a2332;
        margin-bottom: 20px;
        font-weight: 700;
        line-height: 1.2;
    }
    
    .specialist-hero-content p {
        font-size: 24px;
        color: #5b8c85;
        line-height: 1.6;
        font-style: italic;
    }
    
    .specialist-areas {
        padding: 80px 0;
        background-color: #ffffff;
    }
    
    .specialist-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .area-section {
        margin-bottom: 80px;
    }
    
    .area-header {
        display: flex;
        align-items: center;
        gap: 30px;
        margin-bottom: 40px;
        padding: 40px;
        background: linear-gradient(135deg, #f9fbfa 0%, #ecf5f3 100%);
        border-radius: 15px;
    }
    
    .area-icon-large {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, #ba8778, #9a6758);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 48px;
        color: white;
        flex-shrink: 0;
    }
    
    .area-intro h2 {
        color: #1a2332;
        font-size: 32px;
        margin-bottom: 15px;
    }
    
    .area-intro p {
        color: #5b8c85;
        font-size: 18px;
        line-height: 1.6;
    }
    
    .cultural-identity {
        background-color: #fef9f6;
        padding: 60px;
        border-radius: 20px;
        margin-bottom: 60px;
    }
    
    .cultural-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        margin-bottom: 40px;
    }
    
    .cultural-text h3 {
        color: #ba8778;
        font-size: 24px;
        margin-bottom: 20px;
    }
    
    .cultural-text p {
        color: #2c3e50;
        line-height: 1.8;
        margin-bottom: 20px;
    }
    
    .cultural-challenges {
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    }
    
    .cultural-challenges h4 {
        color: #1a2332;
        font-size: 20px;
        margin-bottom: 20px;
    }
    
    .challenge-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .challenge-list li {
        padding: 12px 0;
        border-bottom: 1px solid #f0e8e4;
        color: #2c3e50;
        position: relative;
        padding-left: 30px;
    }
    
    .challenge-list li:last-child {
        border-bottom: none;
    }
    
    .challenge-list li::before {
        content: '◆';
        position: absolute;
        left: 0;
        color: #ba8778;
        font-size: 12px;
    }
    
    .personal-note {
        background-color: #fff8f5;
        border-left: 4px solid #ba8778;
        padding: 25px;
        border-radius: 8px;
        margin-top: 30px;
    }
    
    .personal-note h4 {
        color: #ba8778;
        font-size: 18px;
        margin-bottom: 15px;
        font-style: italic;
    }
    
    .personal-note p {
        color: #2c3e50;
        line-height: 1.8;
        font-style: italic;
    }
    
    .baby-loss {
        background-color: #f0f7f5;
        padding: 60px;
        border-radius: 20px;
        margin-bottom: 60px;
    }
    
    .baby-loss-content h3 {
        color: #5b8c85;
        font-size: 28px;
        text-align: center;
        margin-bottom: 30px;
    }
    
    .loss-intro {
        max-width: 800px;
        margin: 0 auto 40px;
        text-align: center;
    }
    
    .loss-intro p {
        color: #2c3e50;
        font-size: 17px;
        line-height: 1.8;
    }
    
    .support-aspects {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin-bottom: 40px;
    }
    
    .aspect-card {
        background-color: white;
        padding: 25px;
        border-radius: 10px;
        text-align: center;
        transition: all 0.3s ease;
    }
    
    .aspect-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(91, 140, 133, 0.15);
    }
    
    .aspect-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #ecf5f3, #d4e8e4);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
        font-size: 24px;
    }
    
    .aspect-card h4 {
        color: #1a2332;
        font-size: 18px;
        margin-bottom: 10px;
    }
    
    .aspect-card p {
        color: #6c7983;
        font-size: 14px;
        line-height: 1.6;
    }
    
    .memorial-box {
        background-color: #ecf5f3;
        padding: 30px;
        border-radius: 10px;
        text-align: center;
    }
    
    .memorial-box h4 {
        color: #5b8c85;
        font-size: 20px;
        margin-bottom: 15px;
    }
    
    .memorial-box p {
        color: #2c3e50;
        line-height: 1.7;
    }
    
    .domestic-abuse {
        background-color: #fef5f9;
        padding: 60px;
        border-radius: 20px;
        margin-bottom: 60px;
    }
    
    .abuse-content h3 {
        color: #c06c84;
        font-size: 28px;
        text-align: center;
        margin-bottom: 30px;
    }
    
    .recovery-journey {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin: 40px 0;
    }
    
    .journey-step {
        background-color: white;
        padding: 25px;
        border-radius: 10px;
        text-align: center;
        position: relative;
    }
    
    .journey-step::after {
        content: '→';
        position: absolute;
        right: -10px;
        top: 50%;
        transform: translateY(-50%);
        color: #c06c84;
        font-size: 20px;
        font-weight: bold;
    }
    
    .journey-step:last-child::after {
        display: none;
    }
    
    .step-number {
        width: 40px;
        height: 40px;
        background-color: #c06c84;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
        font-weight: bold;
    }
    
    .journey-step h4 {
        color: #1a2332;
        font-size: 16px;
        margin-bottom: 10px;
    }
    
    .journey-step p {
        color: #6c7983;
        font-size: 13px;
        line-height: 1.5;
    }
    
    .safety-notice {
        background-color: #fff0f5;
        border: 2px solid #c06c84;
        padding: 25px;
        border-radius: 10px;
        margin-top: 30px;
    }
    
    .safety-notice h4 {
        color: #c06c84;
        font-size: 18px;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .safety-notice p {
        color: #2c3e50;
        line-height: 1.7;
    }
    
    .approach-summary {
        background-color: #f9fbfa;
        padding: 60px 0;
    }
    
    .approach-content {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
        text-align: center;
    }
    
    .approach-content h2 {
        color: #1a2332;
        font-size: 32px;
        margin-bottom: 30px;
    }
    
    .principles-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .principle {
        text-align: center;
    }
    
    .principle-icon {
        font-size: 36px;
        margin-bottom: 15px;
    }
    
    .principle h4 {
        color: #5b8c85;
        font-size: 18px;
        margin-bottom: 10px;
    }
    
    .principle p {
        color: #6c7983;
        font-size: 14px;
        line-height: 1.6;
    }
    
    @media (max-width: 768px) {
        .area-header {
            flex-direction: column;
            text-align: center;
        }
        
        .cultural-content {
            grid-template-columns: 1fr;
        }
        
        .journey-step::after {
            display: none;
        }
        
        .recovery-journey {
            grid-template-columns: 1fr;
        }
    }
</style>

<main id="primary" class="site-main">
    <section class="specialist-hero">
        <div class="specialist-hero-content">
            <h1>Specialist Support Services</h1>
            <p>Compassionate, culturally informed care for life's most challenging experiences</p>
        </div>
    </section>
    
    <section class="specialist-areas">
        <div class="specialist-container">
            
            <div class="area-section">
                <div class="area-header">
                    <div class="area-icon-large">🌍</div>
                    <div class="area-intro">
                        <h2>Cultural & Racial Identity</h2>
                        <p>A safe space to explore identity, belonging, and the impact of cultural experiences</p>
                    </div>
                </div>
                
                <div class="cultural-identity">
                    <div class="cultural-content">
                        <div class="cultural-text">
                            <h3>Navigating Multiple Worlds</h3>
                            <p>
                                For many of us living between cultures, the journey of self-discovery involves 
                                navigating multiple identities, expectations, and worlds. This can bring richness 
                                and complexity to our lives, but also unique challenges that deserve understanding 
                                and support.
                            </p>
                            <p>
                                Whether you're exploring your cultural identity, processing experiences of racism 
                                and discrimination, or finding balance between heritage and personal autonomy, 
                                this space is for you.
                            </p>
                        </div>
                        
                        <div class="cultural-challenges">
                            <h4>Common Experiences We Can Explore:</h4>
                            <ul class="challenge-list">
                                <li>Code-switching and identity shifts</li>
                                <li>Intergenerational cultural conflicts</li>
                                <li>Experiences of racism and microaggressions</li>
                                <li>Cultural guilt and family expectations</li>
                                <li>Belonging and "not being enough"</li>
                                <li>Intersectionality and multiple identities</li>
                                <li>Cultural trauma and historical wounds</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="personal-note">
                        <h4>My Personal Understanding</h4>
                        <p>
                            "As a third-generation South Asian woman, I bring both professional expertise and 
                            lived experience to this work. I understand the delicate balance of honoring our 
                            heritage while forging our own path, the weight of representation, and the journey 
                            of defining ourselves on our own terms. This isn't about choosing sides – it's about 
                            integration, understanding, and finding your authentic voice."
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="area-section">
                <div class="area-header">
                    <div class="area-icon-large">🕊️</div>
                    <div class="area-intro">
                        <h2>Baby Loss & Bereavement</h2>
                        <p>Gentle support through the profound grief of pregnancy and infant loss</p>
                    </div>
                </div>
                
                <div class="baby-loss">
                    <div class="baby-loss-content">
                        <h3>Honoring Your Loss, Supporting Your Healing</h3>
                        
                        <div class="loss-intro">
                            <p>
                                The loss of a baby – whether through miscarriage, stillbirth, neonatal death, or 
                                termination for medical reasons – is a profound grief that touches every aspect of 
                                your being. Your loss is real, your grief is valid, and your baby matters.
                            </p>
                        </div>
                        
                        <div class="support-aspects">
                            <div class="aspect-card">
                                <div class="aspect-icon">💙</div>
                                <h4>Pregnancy Loss</h4>
                                <p>Support through miscarriage and recurrent loss, honoring each unique journey</p>
                            </div>
                            
                            <div class="aspect-card">
                                <div class="aspect-icon">⭐</div>
                                <h4>Stillbirth</h4>
                                <p>Compassionate care for the devastating loss of your baby</p>
                            </div>
                            
                            <div class="aspect-card">
                                <div class="aspect-icon">🌸</div>
                                <h4>Neonatal Loss</h4>
                                <p>Support following the death of your baby after birth</p>
                            </div>
                            
                            <div class="aspect-card">
                                <div class="aspect-icon">🤍</div>
                                <h4>TFMR</h4>
                                <p>Non-judgmental support for termination for medical reasons</p>
                            </div>
                            
                            <div class="aspect-card">
                                <div class="aspect-icon">🌈</div>
                                <h4>Rainbow Pregnancy</h4>
                                <p>Managing anxiety and complex emotions in pregnancy after loss</p>
                            </div>
                            
                            <div class="aspect-card">
                                <div class="aspect-icon">👨‍👩‍👧</div>
                                <h4>Family Support</h4>
                                <p>Supporting partners and siblings through grief</p>
                            </div>
                        </div>
                        
                        <div class="memorial-box">
                            <h4>Creating Space for Memory</h4>
                            <p>
                                Together we can find ways to honor your baby's memory, navigate significant dates, 
                                and create meaningful rituals. There's no timeline for grief, no right way to feel, 
                                and no expectation to "move on." This is about learning to carry your love and loss 
                                together as you move forward.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="area-section">
                <div class="area-header">
                    <div class="area-icon-large">💜</div>
                    <div class="area-intro">
                        <h2>Domestic Abuse</h2>
                        <p>Trauma-informed support for survivors on the path to healing and empowerment</p>
                    </div>
                </div>
                
                <div class="domestic-abuse">
                    <div class="abuse-content">
                        <h3>Reclaiming Your Life, Rebuilding Your Strength</h3>
                        
                        <p style="text-align: center; max-width: 800px; margin: 0 auto 40px; color: #2c3e50; line-height: 1.8;">
                            Surviving domestic abuse takes incredible strength. Whether you've recently left, 
                            are planning to leave, or are processing past experiences, you deserve support that 
                            honors your journey and helps you reclaim your sense of self.
                        </p>
                        
                        <div class="recovery-journey">
                            <div class="journey-step">
                                <div class="step-number">1</div>
                                <h4>Safety First</h4>
                                <p>Establishing physical and emotional safety</p>
                            </div>
                            
                            <div class="journey-step">
                                <div class="step-number">2</div>
                                <h4>Processing Trauma</h4>
                                <p>Understanding the impact at your own pace</p>
                            </div>
                            
                            <div class="journey-step">
                                <div class="step-number">3</div>
                                <h4>Rebuilding Identity</h4>
                                <p>Rediscovering who you are beyond survival</p>
                            </div>
                            
                            <div class="journey-step">
                                <div class="step-number">4</div>
                                <h4>Empowerment</h4>
                                <p>Reclaiming agency and building your future</p>
                            </div>
                        </div>
                        
                        <div class="safety-notice">
                            <h4>🛡️ Your Safety is Paramount</h4>
                            <p>
                                All sessions are completely confidential. I have extensive experience working with 
                                domestic abuse survivors and understand the complexities of leaving, staying, and 
                                healing. There is no judgment here – only support for whatever decisions are right 
                                for you. We work at your pace, with your safety always as the priority.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    
    <section class="approach-summary">
        <div class="approach-content">
            <h2>My Approach to Specialist Support</h2>
            <p style="font-size: 18px; color: #5b8c85; margin-bottom: 40px;">
                Each of these areas requires deep sensitivity, cultural awareness, and specialized understanding
            </p>
            
            <div class="principles-grid">
                <div class="principle">
                    <div class="principle-icon">🤲</div>
                    <h4>Culturally Informed</h4>
                    <p>Understanding the cultural context of your experiences</p>
                </div>
                
                <div class="principle">
                    <div class="principle-icon">🛡️</div>
                    <h4>Trauma-Sensitive</h4>
                    <p>Working at your pace with complete safety</p>
                </div>
                
                <div class="principle">
                    <div class="principle-icon">💝</div>
                    <h4>Non-Judgmental</h4>
                    <p>Accepting all experiences without criticism</p>
                </div>
                
                <div class="principle">
                    <div class="principle-icon">🌟</div>
                    <h4>Strengths-Based</h4>
                    <p>Building on your resilience and resources</p>
                </div>
                
                <div class="principle">
                    <div class="principle-icon">🤝</div>
                    <h4>Collaborative</h4>
                    <p>You are the expert in your own life</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="supervision-section" style="background-color: #f9fbfa; padding: 80px 0;">
        <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
            <h2 style="text-align: center; color: #1a2332; font-size: 32px; margin-bottom: 40px;">Clinical Supervision</h2>
            
            <div style="background-color: white; padding: 50px; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08);">
                <p style="color: #2c3e50; line-height: 1.8; margin-bottom: 25px; font-size: 16px;">
                    Alongside my counselling practice, I also offer supervision for both individuals and groups. 
                    I believe supervision should be a collaborative, supportive, and reflective space where we can 
                    explore your practice, celebrate strengths, and work through challenges.
                </p>
                
                <p style="color: #2c3e50; line-height: 1.8; margin-bottom: 25px; font-size: 16px;">
                    I adapt my approach to suit your needs, drawing on different models to guide our work together. 
                    This includes the Functional Model, which supports the professional, restorative, and developmental 
                    aspects of your practice, and the 7-Eyed Model, which brings a wider systemic and relational lens 
                    to supervision.
                </p>
                
                <p style="color: #2c3e50; line-height: 1.8; margin-bottom: 30px; font-size: 16px;">
                    Whether you're looking for one-to-one supervision or a group setting, my aim is to create a safe 
                    and thoughtful space that helps you grow in confidence, develop your skills, and maintain ethical, 
                    grounded practice.
                </p>
                
                <div style="background-color: #ecf5f3; padding: 25px; border-radius: 10px; margin-top: 30px;">
                    <h3 style="color: #5b8c85; font-size: 20px; margin-bottom: 15px;">Supervision Sessions</h3>
                    <p style="color: #1a2332; font-size: 18px; font-weight: 500; margin-bottom: 10px;">£80 for 90-minute session</p>
                    <p style="color: #6c7983; font-size: 14px; line-height: 1.6;">
                        I take your privacy and confidentiality seriously and work in line with the General Data Protection 
                        Regulation (GDPR, 2018).
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="cta-section" style="background: linear-gradient(135deg, #ba8778 0%, #9a6758 100%); padding: 60px 0; text-align: center;">
        <div class="cta-content">
            <h2 style="color: white;">You Don't Have to Navigate This Alone</h2>
            <p style="color: white; opacity: 0.95;">Whatever you're facing, support is available. Let's explore how therapy can help you heal and thrive.</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-white">Book Consultation</a>
                <a href="<?php echo esc_url(home_url('/my-approach')); ?>" class="btn-outline-white">Learn About My Approach</a>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.aspect-card, .journey-step, .principle');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '0';
                        entry.target.style.transform = 'scale(0.95)';
                        entry.target.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                        
                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'scale(1)';
                        }, 50);
                    }, index * 50);
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