<?php
/*
Template Name: FAQs
*/
get_header();
?>

<style>
    .faqs-hero {
        background: linear-gradient(135deg, rgba(236, 245, 243, 0.7) 0%, rgba(212, 232, 228, 0.7) 100%),
                    url('/wp-includes/images/hero-faqs.png') center center / cover no-repeat;
        padding: 100px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    
    .faqs-hero::before {
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
    
    .faqs-hero h1 {
        font-size: 48px;
        color: #1a2332;
        margin-bottom: 20px;
        font-weight: 700;
        line-height: 1.2;
        position: relative;
        z-index: 1;
    }
    
    .faqs-hero p {
        font-size: 24px;
        color: #5b8c85;
        max-width: 800px;
        margin: 0 auto;
        font-style: italic;
        position: relative;
        z-index: 1;
    }
    
    .faqs-main {
        padding: 80px 0;
        background-color: #ffffff;
    }
    
    .faqs-container {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .faq-category {
        margin-bottom: 60px;
    }
    
    .category-title {
        color: #5b8c85;
        font-size: 28px;
        margin-bottom: 30px;
        padding-bottom: 15px;
        border-bottom: 2px solid #ecf5f3;
        display: flex;
        align-items: center;
        gap: 15px;
    }
    
    .category-icon {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #ecf5f3, #d4e8e4);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }
    
    .faq-item {
        background-color: #f9fbfa;
        border-radius: 10px;
        margin-bottom: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    
    .faq-item:hover {
        box-shadow: 0 5px 15px rgba(91, 140, 133, 0.1);
    }
    
    .faq-question {
        padding: 20px 25px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #f9fbfa;
        transition: background-color 0.3s ease;
    }
    
    .faq-question:hover {
        background-color: #ecf5f3;
    }
    
    .faq-question h3 {
        color: #1a2332;
        font-size: 18px;
        margin: 0;
        flex: 1;
    }
    
    .faq-toggle {
        width: 30px;
        height: 30px;
        background-color: #5b8c85;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        transition: transform 0.3s ease;
    }
    
    .faq-item.active .faq-toggle {
        transform: rotate(45deg);
        background-color: #4a7268;
    }
    
    .faq-answer {
        padding: 0 25px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding 0.3s ease;
        background-color: white;
    }
    
    .faq-item.active .faq-answer {
        padding: 20px 25px 25px;
        max-height: 500px;
    }
    
    .faq-answer p {
        color: #2c3e50;
        line-height: 1.8;
        margin: 0;
    }
    
    .faq-answer ul {
        margin: 15px 0 0 20px;
        padding: 0;
        list-style: none;
    }
    
    .faq-answer ul li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 10px;
        color: #2c3e50;
    }
    
    .faq-answer ul li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: #5b8c85;
        font-weight: bold;
    }
    
    .quick-links {
        background-color: #ecf5f3;
        padding: 40px;
        border-radius: 15px;
        margin-bottom: 60px;
    }
    
    .quick-links h2 {
        color: #1a2332;
        font-size: 24px;
        margin-bottom: 20px;
        text-align: center;
    }
    
    .links-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
        margin-top: 25px;
    }
    
    .quick-link {
        background-color: white;
        padding: 15px 20px;
        border-radius: 8px;
        text-align: center;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .quick-link:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(91, 140, 133, 0.15);
    }
    
    .quick-link a {
        color: #5b8c85;
        font-weight: 500;
        text-decoration: none;
    }
    
    .contact-prompt {
        background: linear-gradient(135deg, #5b8c85 0%, #4a7268 100%);
        padding: 50px;
        border-radius: 15px;
        text-align: center;
        color: white;
        margin-top: 60px;
    }
    
    .contact-prompt h2 {
        font-size: 28px;
        margin-bottom: 15px;
        color: white;
    }
    
    .contact-prompt p {
        font-size: 16px;
        margin-bottom: 25px;
        opacity: 0.95;
    }
    
    .btn-faq {
        background-color: white;
        color: #5b8c85;
        padding: 12px 30px;
        border-radius: 25px;
        font-weight: 600;
        display: inline-block;
        transition: all 0.3s ease;
    }
    
    .btn-faq:hover {
        background-color: #f0f7f5;
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.2);
    }
    
    @media (max-width: 768px) {
        .links-grid {
            grid-template-columns: 1fr;
        }
        
        .faq-question h3 {
            font-size: 16px;
        }
    }
</style>

<main id="primary" class="site-main">
    <section class="faqs-hero">
        <div class="container">
            <h1>Frequently Asked Questions</h1>
            <p>Find answers to common questions about therapy, sessions, and what to expect</p>
        </div>
    </section>
    
    <section class="faqs-main">
        <div class="faqs-container">
            
            <div class="quick-links">
                <h2>Quick Navigation</h2>
                <div class="links-grid">
                    <div class="quick-link" onclick="scrollToCategory('general')">
                        <a href="#general">General Questions</a>
                    </div>
                    <div class="quick-link" onclick="scrollToCategory('sessions')">
                        <a href="#sessions">About Sessions</a>
                    </div>
                    <div class="quick-link" onclick="scrollToCategory('practical')">
                        <a href="#practical">Practical Information</a>
                    </div>
                    <div class="quick-link" onclick="scrollToCategory('specific')">
                        <a href="#specific">Specific Services</a>
                    </div>
                </div>
            </div>
            
            <div class="faq-category" id="general">
                <h2 class="category-title">
                    <span class="category-icon">❓</span>
                    General Questions
                </h2>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <h3>How do I know if therapy is right for me?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Therapy can be helpful if you're experiencing emotional difficulties, life challenges, 
                            relationship issues, or simply want to understand yourself better. You don't need to be 
                            in crisis to benefit from therapy. If you're curious, the free 15-minute consultation 
                            can help us explore whether therapy would be beneficial for you.
                        </p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <h3>What's the difference between counselling and psychotherapy?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            The terms are often used interchangeably. Generally, counselling tends to be shorter-term 
                            and focused on specific issues, while psychotherapy may be longer-term and explore deeper 
                            patterns. I offer both approaches, tailored to your individual needs and preferences.
                        </p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <h3>How long will I need therapy?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            This varies greatly depending on your individual needs, goals, and circumstances. 
                            Some people find a few sessions helpful, while others benefit from longer-term work. 
                            We'll regularly review your progress together and you're always in control of how 
                            long you continue therapy.
                        </p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <h3>Is everything I say confidential?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Yes, therapy is confidential in line with NCPS ethical guidelines and UK law. 
                            The only exceptions are if I believe you or someone else is at serious risk of harm, 
                            or if required by law. These boundaries will be clearly explained in our first session.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="faq-category" id="sessions">
                <h2 class="category-title">
                    <span class="category-icon">💬</span>
                    About Sessions
                </h2>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <h3>How long are therapy sessions?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Standard sessions are 50 minutes long. For younger children, sessions may be 
                            30-40 minutes to match their attention span. The initial assessment session 
                            may be slightly longer.
                        </p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <h3>How often should I have sessions?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Most clients benefit from weekly sessions, especially at the beginning. This helps 
                            maintain momentum and build a strong therapeutic relationship. As you progress, 
                            we can adjust frequency to fortnightly or monthly if appropriate.
                        </p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <h3>What happens in the first session?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            The first session is an opportunity for us to get to know each other. We'll discuss:
                        </p>
                        <ul>
                            <li>What brings you to therapy</li>
                            <li>Your goals and hopes for our work together</li>
                            <li>Relevant background and history</li>
                            <li>Practical arrangements and boundaries</li>
                            <li>Any questions you have about the process</li>
                        </ul>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <h3>Do you offer online sessions?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Yes, I offer secure online sessions to clients across the UK. Online therapy has 
                            been shown to be as effective as in-person therapy for many issues. You'll need 
                            a private space, stable internet connection, and a device with camera and microphone.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="faq-category" id="practical">
                <h2 class="category-title">
                    <span class="category-icon">📋</span>
                    Practical Information
                </h2>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <h3>How much do sessions cost?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Sessions are £65 for a 50-minute session. I offer a sliding scale for those on 
                            reduced income - please discuss this during your consultation if needed. Payment 
                            is due before each session or can be arranged in blocks.
                        </p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <h3>What is your cancellation policy?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            I require 48 hours notice for cancellations or rescheduling. Sessions cancelled 
                            with less notice will be charged in full, except in genuine emergencies. This 
                            policy helps maintain the continuity of your therapy and respects the time reserved 
                            for you.
                        </p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <h3>Do you offer a free consultation?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Yes, I offer a free 15-minute consultation by phone or video call. This gives us 
                            a chance to briefly discuss your needs, ask any questions, and see if we feel like 
                            a good therapeutic match before committing to sessions.
                        </p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <h3>How do I book a session?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            You can book your free consultation through the contact page, by email, or by phone. 
                            After the consultation, if we decide to work together, we'll arrange a regular 
                            session time that works for both of us.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="faq-category" id="specific">
                <h2 class="category-title">
                    <span class="category-icon">🎯</span>
                    Specific Services
                </h2>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <h3>At what age can children start therapy?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            I work with children from age 5 upwards. For younger children, therapy is adapted 
                            to be age-appropriate, using play, creative activities, and shorter sessions. 
                            Parent involvement is usually more significant with younger children.
                        </p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <h3>Will hypnotherapy make me lose control?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            No, you remain in control throughout hypnotherapy. It's a state of focused relaxation 
                            where you're aware of everything happening. You cannot be made to do anything against 
                            your will, and you can come out of hypnosis whenever you choose.
                        </p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <h3>How do you support clients from different cultural backgrounds?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            I bring both professional training in cultural competence and lived experience as 
                            a South Asian woman. I work to understand and respect your cultural context, values, 
                            and experiences, integrating this understanding into our therapeutic work.
                        </p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <h3>Do you work with couples or families?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            My primary focus is individual therapy for adults and young people. However, I do 
                            involve parents/carers in children's therapy where appropriate, and can provide 
                            family support sessions when working with young clients.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="contact-prompt">
                <h2>Still Have Questions?</h2>
                <p>If you couldn't find the answer you're looking for, please don't hesitate to get in touch.</p>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-faq">Contact Me</a>
            </div>
            
        </div>
    </section>
</main>

<script>
    function toggleFaq(element) {
        const faqItem = element.parentElement;
        const wasActive = faqItem.classList.contains('active');
        
        document.querySelectorAll('.faq-item').forEach(item => {
            item.classList.remove('active');
        });
        
        if (!wasActive) {
            faqItem.classList.add('active');
        }
    }
    
    function scrollToCategory(categoryId) {
        const element = document.getElementById(categoryId);
        const offset = 100;
        const bodyRect = document.body.getBoundingClientRect().top;
        const elementRect = element.getBoundingClientRect().top;
        const elementPosition = elementRect - bodyRect;
        const offsetPosition = elementPosition - offset;
        
        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
        });
    }
    
    document.addEventListener('DOMContentLoaded', function() {
        const faqItems = document.querySelectorAll('.faq-item');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '0';
                        entry.target.style.transform = 'translateX(-20px)';
                        entry.target.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                        
                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateX(0)';
                        }, 50);
                    }, index * 50);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        faqItems.forEach(item => {
            item.style.opacity = '0';
            observer.observe(item);
        });
    });
</script>

<?php get_footer(); ?>