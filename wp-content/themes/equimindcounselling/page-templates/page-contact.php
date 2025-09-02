<?php
/*
Template Name: Contact
*/
get_header();
?>

<style>
    .contact-hero {
        background: linear-gradient(135deg, #ecf5f3 0%, #d4e8e4 100%);
        padding: 100px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    
    .contact-hero::before {
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
    
    .contact-hero h1 {
        font-size: 48px;
        color: #1a2332;
        margin-bottom: 20px;
        font-weight: 700;
        line-height: 1.2;
        position: relative;
        z-index: 1;
    }
    
    .contact-hero p {
        font-size: 24px;
        color: #5b8c85;
        max-width: 800px;
        margin: 0 auto;
        font-style: italic;
        position: relative;
        z-index: 1;
    }
    
    .contact-main {
        padding: 80px 0;
        background-color: #ffffff;
    }
    
    .contact-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
    }
    
    .contact-form-section {
        background-color: #f9fbfa;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    }
    
    .contact-form-section h2 {
        color: #1a2332;
        font-size: 28px;
        margin-bottom: 25px;
    }
    
    .form-intro {
        color: #5b8c85;
        font-size: 16px;
        margin-bottom: 30px;
        line-height: 1.6;
    }
    
    .contact-form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    
    .form-group {
        display: flex;
        flex-direction: column;
    }
    
    .form-group label {
        color: #1a2332;
        font-weight: 500;
        margin-bottom: 8px;
        font-size: 14px;
    }
    
    .form-group input,
    .form-group select,
    .form-group textarea {
        padding: 12px 15px;
        border: 1px solid #e8f0ef;
        border-radius: 8px;
        font-size: 15px;
        transition: all 0.3s ease;
        font-family: inherit;
    }
    
    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #5b8c85;
        box-shadow: 0 0 0 3px rgba(91, 140, 133, 0.1);
    }
    
    .form-group textarea {
        resize: vertical;
        min-height: 120px;
    }
    
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }
    
    .checkbox-group {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin: 10px 0;
    }
    
    .checkbox-group input[type="checkbox"] {
        margin-top: 4px;
    }
    
    .checkbox-group label {
        color: #6c7983;
        font-size: 14px;
        line-height: 1.5;
    }
    
    .form-submit {
        background-color: #5b8c85;
        color: white;
        padding: 14px 30px;
        border: none;
        border-radius: 25px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 20px;
    }
    
    .form-submit:hover {
        background-color: #4a7268;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(91, 140, 133, 0.3);
    }
    
    .contact-info-section {
        padding: 40px 0;
    }
    
    .info-block {
        margin-bottom: 40px;
    }
    
    .info-block h3 {
        color: #1a2332;
        font-size: 24px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 12px;
    }
    
    .info-icon {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #ecf5f3, #d4e8e4);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }
    
    .info-content {
        background-color: #f9fbfa;
        padding: 25px;
        border-radius: 10px;
        border-left: 3px solid #5b8c85;
    }
    
    .info-content p {
        color: #2c3e50;
        line-height: 1.7;
        margin-bottom: 15px;
    }
    
    .info-content strong {
        color: #1a2332;
        font-weight: 600;
    }
    
    .contact-methods {
        display: grid;
        gap: 15px;
        margin-top: 20px;
    }
    
    .contact-method {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 15px;
        background-color: white;
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .contact-method:hover {
        box-shadow: 0 3px 10px rgba(91, 140, 133, 0.1);
        transform: translateX(5px);
    }
    
    .method-icon {
        width: 35px;
        height: 35px;
        background-color: #ecf5f3;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        color: #5b8c85;
    }
    
    .method-text {
        flex: 1;
    }
    
    .method-text h4 {
        color: #1a2332;
        font-size: 16px;
        margin-bottom: 3px;
    }
    
    .method-text p {
        color: #6c7983;
        font-size: 14px;
        margin: 0;
    }
    
    .consultation-banner {
        background: linear-gradient(135deg, #5b8c85 0%, #4a7268 100%);
        padding: 30px;
        border-radius: 15px;
        text-align: center;
        color: white;
        margin-top: 30px;
    }
    
    .consultation-banner h3 {
        font-size: 24px;
        margin-bottom: 15px;
        color: white;
    }
    
    .consultation-banner p {
        opacity: 0.95;
        margin-bottom: 20px;
        line-height: 1.6;
    }
    
    .consultation-features {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
        margin-top: 20px;
    }
    
    .consultation-feature {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        font-size: 14px;
    }
    
    .consultation-feature::before {
        content: '✓';
        width: 20px;
        height: 20px;
        background-color: rgba(255,255,255,0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
    }
    
    .location-info {
        background-color: #ecf5f3;
        padding: 30px;
        border-radius: 10px;
        margin-top: 30px;
    }
    
    .location-info h3 {
        color: #1a2332;
        font-size: 20px;
        margin-bottom: 15px;
    }
    
    .location-info p {
        color: #2c3e50;
        line-height: 1.7;
    }
    
    .online-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background-color: white;
        padding: 8px 16px;
        border-radius: 20px;
        color: #5b8c85;
        font-weight: 500;
        margin-top: 15px;
    }
    
    .online-badge::before {
        content: '🌐';
        font-size: 16px;
    }
    
    @media (max-width: 768px) {
        .contact-container {
            grid-template-columns: 1fr;
        }
        
        .form-row {
            grid-template-columns: 1fr;
        }
        
        .consultation-features {
            grid-template-columns: 1fr;
        }
        
        .contact-hero h1 {
            font-size: 32px;
        }
    }
</style>

<main id="primary" class="site-main">
    <section class="contact-hero">
        <div class="container">
            <h1>Get in Touch</h1>
            <p>Take the first step towards positive change</p>
        </div>
    </section>
    
    <section class="contact-main">
        <div class="contact-container">
            
            <div class="contact-form-section">
                <h2>Send a Message</h2>
                <p class="form-intro">
                    Complete the form below and I'll get back to you within 48 hours to arrange 
                    your free consultation.
                </p>
                
                <form class="contact-form" id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">First Name *</label>
                            <input type="text" id="firstName" name="firstName" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="lastName">Last Name *</label>
                            <input type="text" id="lastName" name="lastName" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    
                    <div class="form-group">
                        <label for="service">Service Interest</label>
                        <select id="service" name="service">
                            <option value="">Please select...</option>
                            <option value="adult">Adult Therapy</option>
                            <option value="child">Child & Adolescent Therapy</option>
                            <option value="hypnotherapy">Hypnotherapy</option>
                            <option value="cultural">Cultural Identity Support</option>
                            <option value="babyloss">Baby Loss Support</option>
                            <option value="domestic">Domestic Abuse Recovery</option>
                            <option value="unsure">Not sure yet</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="preferred">Preferred Contact Method</label>
                        <select id="preferred" name="preferred">
                            <option value="email">Email</option>
                            <option value="phone">Phone</option>
                            <option value="either">Either</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Tell me a bit about what brings you to therapy (optional)</label>
                        <textarea id="message" name="message" placeholder="Feel free to share as much or as little as you're comfortable with..."></textarea>
                    </div>
                    
                    <div class="checkbox-group">
                        <input type="checkbox" id="consent" name="consent" required>
                        <label for="consent">
                            I understand that this form is for initial contact only and does not 
                            constitute a therapeutic relationship. I consent to being contacted using 
                            the details provided.
                        </label>
                    </div>
                    
                    <button type="submit" class="form-submit">Send Message</button>
                </form>
            </div>
            
            <div class="contact-info-section">
                
                <div class="info-block">
                    <h3>
                        <span class="info-icon">📞</span>
                        Contact Information
                    </h3>
                    <div class="info-content">
                        <p><strong>Email:</strong> contact@equimindcounselling.com</p>
                        <p><strong>Response Time:</strong> Within 48 hours</p>
                        <p><strong>Sessions:</strong> Online (UK-wide)</p>
                        
                        <div class="contact-methods">
                            <div class="contact-method">
                                <div class="method-icon">✉️</div>
                                <div class="method-text">
                                    <h4>Email</h4>
                                    <p>Best for initial enquiries</p>
                                </div>
                            </div>
                            
                            <div class="contact-method">
                                <div class="method-icon">📱</div>
                                <div class="method-text">
                                    <h4>Phone</h4>
                                    <p>Available for consultations</p>
                                </div>
                            </div>
                            
                            <div class="contact-method">
                                <div class="method-icon">💻</div>
                                <div class="method-text">
                                    <h4>Video Call</h4>
                                    <p>Secure online sessions</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="consultation-banner">
                    <h3>Free 15-Minute Consultation</h3>
                    <p>
                        Not sure if therapy is right for you? Book a free consultation to discuss 
                        your needs and see if we're a good fit.
                    </p>
                    <div class="consultation-features">
                        <div class="consultation-feature">No obligation</div>
                        <div class="consultation-feature">Confidential</div>
                        <div class="consultation-feature">Phone or video</div>
                    </div>
                </div>
                
                <div class="location-info">
                    <h3>Session Location</h3>
                    <p>
                        All sessions are currently conducted online via a secure, encrypted video 
                        platform. This allows me to work with clients across the UK, providing 
                        flexibility and convenience while maintaining the quality and effectiveness 
                        of in-person therapy.
                    </p>
                    <div class="online-badge">Available UK-wide</div>
                </div>
                
                <div class="info-block">
                    <h3>
                        <span class="info-icon">⏰</span>
                        Office Hours
                    </h3>
                    <div class="info-content">
                        <p><strong>Monday - Friday:</strong> 9:00 AM - 7:00 PM</p>
                        <p><strong>Saturday:</strong> 10:00 AM - 2:00 PM</p>
                        <p><strong>Sunday:</strong> Closed</p>
                        <p style="margin-top: 15px; font-style: italic; color: #6c7983;">
                            Evening appointments available for those unable to attend during standard hours.
                        </p>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
</main>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const submitBtn = this.querySelector('.form-submit');
        const originalText = submitBtn.textContent;
        
        submitBtn.textContent = 'Sending...';
        submitBtn.disabled = true;
        
        setTimeout(() => {
            submitBtn.textContent = 'Message Sent!';
            submitBtn.style.backgroundColor = '#5cb85c';
            
            setTimeout(() => {
                this.reset();
                submitBtn.textContent = originalText;
                submitBtn.style.backgroundColor = '';
                submitBtn.disabled = false;
                
                alert('Thank you for your message! I will get back to you within 48 hours.');
            }, 2000);
        }, 1500);
    });
    
    document.addEventListener('DOMContentLoaded', function() {
        const infoBlocks = document.querySelectorAll('.info-block, .consultation-banner');
        
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
                    }, index * 100);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        infoBlocks.forEach(block => {
            block.style.opacity = '0';
            observer.observe(block);
        });
    });
</script>

<?php get_footer(); ?>