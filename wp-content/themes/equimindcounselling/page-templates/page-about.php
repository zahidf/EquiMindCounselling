<?php
/*
Template Name: About Page
*/
get_header();
?>

<style>
    .about-hero {
        background: linear-gradient(135deg, rgba(236, 245, 243, 0.3) 0%, rgba(212, 232, 228, 0.3) 100%),
                    url('/wp-includes/images/hero-about.png') center center / cover no-repeat;
        padding: 100px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
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
    
    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(5deg); }
    }
    
    .about-hero h1 {
        font-size: 48px;
        color: #1a2332;
        margin-bottom: 20px;
        font-weight: 700;
        line-height: 1.2;
        position: relative;
        z-index: 1;
    }
    
    .about-hero p {
        font-size: 24px;
        color: #5b8c85;
        max-width: 800px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
        font-style: italic;
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
    }
    
    .profile-image {
        width: 100%;
        max-width: 300px;
        height: 400px;
        background: linear-gradient(135deg, #ecf5f3 0%, #d4e8e4 100%);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #5b8c85;
        font-size: 18px;
        margin-bottom: 30px;
    }
    
    .profile-info {
        background-color: #f9fbfa;
        padding: 25px;
        border-radius: 10px;
        border-left: 4px solid #5b8c85;
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
        margin: 30px 0;
        padding-left: 30px;
        border-left: 2px solid #e8f0ef;
    }
    
    .timeline-item {
        position: relative;
        padding-bottom: 30px;
    }
    
    .timeline-item::before {
        content: '';
        position: absolute;
        left: -36px;
        top: 5px;
        width: 10px;
        height: 10px;
        background-color: #5b8c85;
        border-radius: 50%;
        border: 2px solid #ffffff;
        box-shadow: 0 0 0 3px #ecf5f3;
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
        gap: 20px;
        margin: 30px 0;
    }
    
    .qualification-card {
        background-color: #f9fbfa;
        padding: 20px;
        border-radius: 8px;
        border-left: 3px solid #5b8c85;
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
        padding: 20px;
    }
    
    .value-icon {
        width: 60px;
        height: 60px;
        margin: 0 auto 15px;
        background: linear-gradient(135deg, #ecf5f3, #d4e8e4);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
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
    <section class="about-hero">
        <div class="container">
            <h1>Meet Your Therapist</h1>
            <p>Zeenat - Accredited Psychotherapist & Counsellor</p>
        </div>
    </section>
    
    <section class="about-content">
        <div class="about-container">
            <aside class="therapist-profile">
                <div class="profile-image">
                    [Professional Photo]
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
        const timelineItems = document.querySelectorAll('.timeline-item');
        const valueItems = document.querySelectorAll('.value-item');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '0';
                        entry.target.style.transform = 'translateX(-20px)';
                        entry.target.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                        
                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateX(0)';
                        }, 100);
                    }, index * 100);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        timelineItems.forEach(item => {
            item.style.opacity = '0';
            observer.observe(item);
        });
        
        valueItems.forEach(item => {
            item.style.opacity = '0';
            observer.observe(item);
        });
    });
</script>

<?php get_footer(); ?>