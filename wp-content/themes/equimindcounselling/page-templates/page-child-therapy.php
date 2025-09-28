<?php
/*
Template Name: Therapy with Children and Young People
*/
get_header();
?>

<style>
    .child-therapy-hero {
        background: linear-gradient(135deg, rgba(236, 245, 243, 0.7) 0%, rgba(212, 232, 228, 0.7) 100%),
                    url('/wp-includes/images/hero-services.png') center center / cover no-repeat;
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }
    
    .child-therapy-hero::before {
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
    
    .child-hero-content {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
        text-align: center;
        position: relative;
        z-index: 1;
    }
    
    .child-hero-content h1 {
        font-size: 48px;
        color: #1a2332;
        margin-bottom: 20px;
        font-weight: 700;
        line-height: 1.2;
    }
    
    .child-hero-content p {
        font-size: 24px;
        color: #5b8c85;
        line-height: 1.6;
        font-style: italic;
    }
    
    .age-badges {
        display: flex;
        gap: 15px;
        justify-content: center;
        margin-top: 30px;
        flex-wrap: wrap;
    }
    
    .age-badge {
        background-color: white;
        padding: 10px 20px;
        border-radius: 20px;
        font-weight: 500;
        color: #5b8c85;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    
    .child-overview {
        padding: 80px 0;
        background-color: #ffffff;
    }
    
    .child-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .overview-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
        margin-bottom: 60px;
    }
    
    .overview-content h2 {
        color: #1a2332;
        font-size: 32px;
        margin-bottom: 25px;
    }
    
    .overview-content p {
        color: #2c3e50;
        line-height: 1.8;
        margin-bottom: 20px;
        font-size: 16px;
    }
    
    .overview-image {
        background: linear-gradient(135deg, #ecf5f3 0%, #fef5e7 100%);
        padding: 40px;
        border-radius: 20px;
        text-align: center;
        min-height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 80px;
        opacity: 0.3;
    }
    
    .support-areas {
        background-color: #f9fbfa;
        padding: 60px 0;
    }
    
    .support-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .support-card {
        background-color: white;
        padding: 30px;
        border-radius: 15px;
        text-align: center;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }
    
    .support-card:hover {
        border-color: #5b8c85;
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(91, 140, 133, 0.15);
    }
    
    .support-emoji {
        font-size: 48px;
        margin-bottom: 20px;
    }
    
    .support-card h3 {
        color: #1a2332;
        font-size: 20px;
        margin-bottom: 15px;
    }
    
    .support-card p {
        color: #6c7983;
        line-height: 1.6;
        font-size: 14px;
    }
    
    .therapeutic-approach {
        padding: 80px 0;
        background-color: #ffffff;
    }
    
    .approach-intro {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 50px;
        padding: 0 20px;
    }
    
    .approach-intro h2 {
        color: #1a2332;
        font-size: 32px;
        margin-bottom: 20px;
    }
    
    .approach-intro p {
        color: #5b8c85;
        font-size: 18px;
        line-height: 1.6;
    }
    
    .techniques-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .technique-item {
        background-color: #fef9f3;
        padding: 25px;
        border-radius: 10px;
        border-left: 4px solid #f4a460;
        transition: all 0.3s ease;
    }
    
    .technique-item:hover {
        background-color: #fef5e7;
        transform: translateX(5px);
    }
    
    .technique-item h4 {
        color: #1a2332;
        font-size: 18px;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .technique-icon {
        font-size: 24px;
    }
    
    .technique-item p {
        color: #6c7983;
        line-height: 1.6;
        font-size: 14px;
    }
    
    .parent-involvement {
        background-color: #ecf5f3;
        padding: 60px 0;
    }
    
    .parent-content {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
        text-align: center;
    }
    
    .parent-content h2 {
        color: #1a2332;
        font-size: 32px;
        margin-bottom: 30px;
    }
    
    .parent-info {
        background-color: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        text-align: left;
    }
    
    .parent-info h3 {
        color: #5b8c85;
        font-size: 22px;
        margin-bottom: 20px;
    }
    
    .parent-info p {
        color: #2c3e50;
        line-height: 1.8;
        margin-bottom: 20px;
    }
    
    .parent-list {
        list-style: none;
        padding: 0;
        margin: 20px 0;
    }
    
    .parent-list li {
        padding: 10px 0;
        padding-left: 30px;
        position: relative;
        color: #2c3e50;
        line-height: 1.6;
    }
    
    .parent-list li::before {
        content: '🤝';
        position: absolute;
        left: 0;
        font-size: 18px;
    }
    
    .age-specific {
        padding: 60px 0;
        background-color: #ffffff;
    }
    
    .age-tabs {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .age-tabs h2 {
        text-align: center;
        color: #1a2332;
        font-size: 32px;
        margin-bottom: 40px;
    }
    
    .tab-buttons {
        display: flex;
        gap: 10px;
        justify-content: center;
        margin-bottom: 40px;
        flex-wrap: wrap;
    }
    
    .tab-button {
        padding: 12px 25px;
        background-color: #f9fbfa;
        border: 2px solid #e8f0ef;
        border-radius: 25px;
        color: #6c7983;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .tab-button:hover {
        background-color: #ecf5f3;
    }
    
    .tab-button.active {
        background-color: #5b8c85;
        color: white;
        border-color: #5b8c85;
    }
    
    .tab-content {
        display: none;
        background-color: #f9fbfa;
        padding: 40px;
        border-radius: 15px;
    }
    
    .tab-content.active {
        display: block;
    }
    
    .tab-content h3 {
        color: #1a2332;
        font-size: 24px;
        margin-bottom: 20px;
    }
    
    .tab-content p {
        color: #2c3e50;
        line-height: 1.8;
        margin-bottom: 20px;
    }
    
    .tab-features {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
        margin-top: 20px;
    }
    
    .tab-feature {
        background-color: white;
        padding: 15px;
        border-radius: 8px;
        color: #2c3e50;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .feature-dot {
        width: 8px;
        height: 8px;
        background-color: #5b8c85;
        border-radius: 50%;
        flex-shrink: 0;
    }
    
    @media (max-width: 768px) {
        .overview-grid {
            grid-template-columns: 1fr;
        }
        
        .tab-features {
            grid-template-columns: 1fr;
        }
        
        .child-hero-content h1 {
            font-size: 32px;
        }
    }
</style>

<main id="primary" class="site-main">
    <section class="child-therapy-hero">
        <div class="child-hero-content">
            <h1>Therapy with Children and Young People</h1>
            <p>Supporting young people to navigate emotions, build resilience, and thrive</p>
            <div class="age-badges">
                <span class="age-badge">Ages 8-12</span>
                <span class="age-badge">Ages 12-17</span>
                <span class="age-badge">Young Adults 18+</span>
            </div>
        </div>
    </section>
    
    <section class="child-overview">
        <div class="child-container">
            <div class="overview-grid">
                <div class="overview-content">
                    <h2>Creating Safe Spaces for Young Minds</h2>
                    <p>
                        Children and young people face unique challenges as they grow and develop. From navigating 
                        school pressures to managing big emotions, young minds need specialised support that meets 
                        them where they are.
                    </p>
                    <p>
                        My approach with young clients is warm, creative, and developmentally appropriate. I use a 
                        combination of talking therapy, creative techniques, and play-based interventions to help 
                        children and adolescents express themselves, understand their feelings, and develop healthy 
                        coping strategies.
                    </p>
                    <p>
                        Every young person is unique, and therapy is tailored to their individual needs, interests, 
                        and developmental stage. Together, we create a space where they feel heard, valued, and empowered 
                        to make positive changes.
                    </p>
                </div>
                <div class="overview-image">
                    🌱
                </div>
            </div>
        </div>
    </section>
    
    <section class="support-areas">
        <div class="support-grid">
            <div class="support-card">
                <div class="support-emoji">😟</div>
                <h3>Anxiety & Worries</h3>
                <p>Help managing fears, school anxiety, social worries, and overwhelming thoughts</p>
            </div>
            
            <div class="support-card">
                <div class="support-emoji">🎭</div>
                <h3>Emotional Regulation</h3>
                <p>Learning to understand and manage big feelings in healthy ways</p>
            </div>
            
            <div class="support-card">
                <div class="support-emoji">🏫</div>
                <h3>School Challenges</h3>
                <p>Support with bullying, peer pressure, academic stress, and transitions</p>
            </div>
            
            <div class="support-card">
                <div class="support-emoji">👨‍👩‍👧</div>
                <h3>Family Changes</h3>
                <p>Navigating divorce, separation, new siblings, or family dynamics</p>
            </div>
            
            <div class="support-card">
                <div class="support-emoji">💔</div>
                <h3>Loss & Grief</h3>
                <p>Age-appropriate support for bereavement and significant losses</p>
            </div>
            
            <div class="support-card">
                <div class="support-emoji">🌟</div>
                <h3>Self-Esteem</h3>
                <p>Building confidence, self-worth, and positive self-image</p>
            </div>
        </div>
    </section>
    
    <section class="therapeutic-approach">
        <div class="approach-intro">
            <h2>How I Work with Young People</h2>
            <p>Therapy is adapted to be engaging, age-appropriate, and effective for each developmental stage</p>
        </div>
        
        <div class="techniques-grid">
            <div class="technique-item">
                <h4><span class="technique-icon">🎨</span> Creative Expression</h4>
                <p>Art, drawing, and crafts to help express feelings that are hard to put into words</p>
            </div>
            
            <div class="technique-item">
                <h4><span class="technique-icon">📖</span> Storytelling</h4>
                <p>Stories and metaphors to help understand feelings and learn coping strategies</p>
            </div>
            
            <div class="technique-item">
                <h4><span class="technique-icon">💬</span> Talk Therapy</h4>
                <p>Age-appropriate conversations for older children and teens who prefer verbal expression</p>
            </div>
            
        </div>
    </section>
    
    
    <section class="age-specific">
        <div class="age-tabs">
            <h2>Age-Specific Approaches</h2>
            
            <div class="tab-buttons">
                <button class="tab-button active" onclick="showTab('children')">Children (8-12)</button>
                <button class="tab-button" onclick="showTab('adolescents')">Adolescents (12-17)</button>
                <button class="tab-button" onclick="showTab('young-adults')">Young Adults (18+)</button>
            </div>
            
            <div id="children" class="tab-content active">
                <h3>Working with Children (8-12 years)</h3>
                <p>
                    Children often express themselves best through creative activities. Sessions 
                    are structured to be engaging while addressing therapeutic goals.
                </p>
                <div class="tab-features">
                    <div class="tab-feature">
                        <span class="feature-dot"></span>
                        Session time appropriate for age
                    </div>
                    <div class="tab-feature">
                        <span class="feature-dot"></span>
                        Use of creative techniques
                    </div>
                    <div class="tab-feature">
                        <span class="feature-dot"></span>
                        Focus on emotional literacy
                    </div>
                </div>
            </div>
            
            <div id="adolescents" class="tab-content">
                <h3>Working with Adolescents (12-17 years)</h3>
                <p>
                    Teenagers face unique challenges as they navigate identity, peer relationships, and increasing 
                    independence. Therapy provides a confidential space to explore these issues without judgment. 
                    I balance talk therapy with creative techniques based on individual preferences.
                </p>
                <div class="tab-features">
                    <div class="tab-feature">
                        <span class="feature-dot"></span>
                        Full 50-minute sessions
                    </div>
                    <div class="tab-feature">
                        <span class="feature-dot"></span>
                        Greater autonomy and confidentiality
                    </div>
                    <div class="tab-feature">
                        <span class="feature-dot"></span>
                        Focus on identity and relationship issues
                    </div>
                    <div class="tab-feature">
                        <span class="feature-dot"></span>
                        Practical coping strategies for exam stress
                    </div>
                </div>
            </div>
            
            <div id="young-adults" class="tab-content">
                <h3>Working with Young Adults (18+ years)</h3>
                <p>
                    Young adults face transitions into independence, university, work, and adult relationships. 
                    Therapy offers support in navigating these changes while building a strong sense of self. 
                    Sessions are fully confidential and tailored to individual needs and goals.
                </p>
                <div class="tab-features">
                    <div class="tab-feature">
                        <span class="feature-dot"></span>
                        Full adult therapy approach
                    </div>
                    <div class="tab-feature">
                        <span class="feature-dot"></span>
                        Complete confidentiality
                    </div>
                    <div class="tab-feature">
                        <span class="feature-dot"></span>
                        Focus on life transitions and identity
                    </div>
                    <div class="tab-feature">
                        <span class="feature-dot"></span>
                        Building adult coping strategies
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="cta-section" style="background: linear-gradient(135deg, #f4a460 0%, #ff8c42 100%); padding: 60px 0; text-align: center;">
        <div class="cta-content">
            <h2 style="color: white;">Supporting Your Child's Emotional Wellbeing</h2>
            <p style="color: white; opacity: 0.95;">Every child deserves a space to be heard, understood, and supported. Let's work together to help your child thrive.</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-white">Book Parent Consultation</a>
                <a href="<?php echo esc_url(home_url('/faqs')); ?>" class="btn-outline-white">Parent FAQs</a>
            </div>
        </div>
    </section>
</main>

<script>
    function showTab(tabName) {
        const tabs = document.querySelectorAll('.tab-content');
        const buttons = document.querySelectorAll('.tab-button');
        
        tabs.forEach(tab => {
            tab.classList.remove('active');
        });
        
        buttons.forEach(button => {
            button.classList.remove('active');
        });
        
        document.getElementById(tabName).classList.add('active');
        event.target.classList.add('active');
    }
    
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.support-card, .technique-item');
        
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