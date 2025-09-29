<?php
/*
Template Name: Contact
*/
get_header();
?>

<style>
    /* Page Loader */
    .page-loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #ecf5f3 0%, #d4e8e4 100%);
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: opacity 0.5s ease, visibility 0.5s ease;
    }

    .page-loader.loaded {
        opacity: 0;
        visibility: hidden;
    }

    .loader-content {
        text-align: center;
    }

    .loader-circle {
        width: 60px;
        height: 60px;
        border: 3px solid rgba(91, 140, 133, 0.2);
        border-top-color: #5b8c85;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin: 0 auto 20px;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* Hero Section Enhanced */
    .contact-hero {
        background: linear-gradient(135deg, rgba(236, 245, 243, 0.9) 0%, rgba(212, 232, 228, 0.9) 100%),
                    url('/wp-includes/images/hero-contact.png') center center / cover no-repeat;
        padding: 120px 0 100px;
        text-align: center;
        position: relative;
        overflow: hidden;
        min-height: 400px;
    }

    .contact-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 60%;
        height: 200%;
        background: radial-gradient(circle, rgba(91, 140, 133, 0.08) 0%, transparent 70%);
        animation: float 25s ease-in-out infinite;
    }

    .contact-hero::after {
        content: '';
        position: absolute;
        bottom: -30%;
        left: -15%;
        width: 50%;
        height: 150%;
        background: radial-gradient(circle, rgba(74, 114, 104, 0.06) 0%, transparent 70%);
        animation: float 30s ease-in-out infinite reverse;
        animation-delay: 5s;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg) scale(1); }
        33% { transform: translateY(-30px) rotate(3deg) scale(1.05); }
        66% { transform: translateY(20px) rotate(-2deg) scale(0.95); }
    }

    .contact-hero h1 {
        font-size: 52px;
        color: #1a2332;
        margin-bottom: 25px;
        font-weight: 700;
        line-height: 1.2;
        position: relative;
        z-index: 1;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.8s ease forwards;
        animation-delay: 0.2s;
    }

    .contact-hero p {
        font-size: 24px;
        color: #2c3e50;
        max-width: 800px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
        font-weight: 400;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.8s ease forwards;
        animation-delay: 0.4s;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Animated Connection Lines */
    .connection-lines {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none;
        opacity: 0.1;
    }

    .connection-line {
        position: absolute;
        height: 1px;
        background: linear-gradient(90deg, transparent, #5b8c85, transparent);
        animation: lineFlow 8s linear infinite;
    }

    .connection-line:nth-child(1) {
        top: 20%;
        width: 60%;
        left: -60%;
        animation-delay: 0s;
    }

    .connection-line:nth-child(2) {
        top: 50%;
        width: 80%;
        left: -80%;
        animation-delay: 2s;
    }

    .connection-line:nth-child(3) {
        top: 80%;
        width: 70%;
        left: -70%;
        animation-delay: 4s;
    }

    @keyframes lineFlow {
        to {
            transform: translateX(200%);
        }
    }

    .contact-main {
        padding: 80px 0;
        background: linear-gradient(to bottom, #ffffff 0%, #fafbfb 100%);
        position: relative;
    }

    .contact-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
    }

    /* Form Section Enhanced */
    .contact-form-section {
        background: linear-gradient(135deg, #ffffff 0%, #f9fbfa 100%);
        padding: 45px;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.08);
        position: relative;
        overflow: hidden;
        opacity: 0;
        transform: translateX(-30px);
        animation: slideInLeft 0.8s ease forwards;
        animation-delay: 0.6s;
    }

    @keyframes slideInLeft {
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .contact-form-section::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, #5b8c85, #4a7268, #5b8c85);
        border-radius: 20px;
        opacity: 0;
        z-index: -1;
        transition: opacity 0.3s ease;
    }

    .contact-form-section:hover::before {
        opacity: 0.1;
    }

    .contact-form-section h2 {
        color: #1a2332;
        font-size: 32px;
        margin-bottom: 20px;
        position: relative;
    }

    .contact-form-section h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, #5b8c85, #4a7268);
        border-radius: 2px;
    }

    .form-intro {
        color: #6c7983;
        font-size: 16px;
        margin-bottom: 35px;
        margin-top: 25px;
        line-height: 1.7;
    }

    .contact-form {
        display: flex;
        flex-direction: column;
        gap: 22px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .form-group label {
        color: #1a2332;
        font-weight: 500;
        margin-bottom: 10px;
        font-size: 15px;
        transition: color 0.3s ease;
    }

    .form-group.focused label {
        color: #5b8c85;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        padding: 14px 18px;
        border: 2px solid #e8f0ef;
        border-radius: 10px;
        font-size: 15px;
        transition: all 0.3s ease;
        font-family: inherit;
        background-color: #fafbfb;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #5b8c85;
        box-shadow: 0 0 0 4px rgba(91, 140, 133, 0.1);
        background-color: white;
        transform: translateY(-2px);
    }

    .form-group textarea {
        resize: vertical;
        min-height: 120px;
    }

    /* Floating Labels Effect */
    .form-group input:not(:placeholder-shown),
    .form-group textarea:not(:placeholder-shown) {
        padding-top: 20px;
        padding-bottom: 8px;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 22px;
    }

    /* Animated Checkbox */
    .checkbox-group {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin: 15px 0;
        cursor: pointer;
        transition: transform 0.2s ease;
    }

    .checkbox-group:hover {
        transform: translateX(5px);
    }

    .checkbox-group input[type="checkbox"] {
        margin-top: 4px;
        width: 18px;
        height: 18px;
        cursor: pointer;
        position: relative;
    }

    .checkbox-group input[type="checkbox"]:checked {
        animation: checkBounce 0.4s ease;
    }

    @keyframes checkBounce {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.2); }
    }

    .checkbox-group label {
        color: #6c7983;
        font-size: 14px;
        line-height: 1.6;
        cursor: pointer;
    }

    /* Submit Button Enhanced */
    .form-submit {
        background: linear-gradient(135deg, #5b8c85 0%, #4a7268 100%);
        color: white;
        padding: 16px 40px;
        border: none;
        border-radius: 30px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 25px;
        position: relative;
        overflow: hidden;
    }

    .form-submit::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: translate(-50%, -50%);
        transition: width 0.5s ease, height 0.5s ease;
    }

    .form-submit:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(91, 140, 133, 0.3);
    }

    .form-submit:hover::before {
        width: 300px;
        height: 300px;
    }

    .form-submit:active {
        transform: translateY(-1px);
    }

    .form-submit.success {
        background: linear-gradient(135deg, #5cb85c, #4cae4c);
        animation: successPulse 0.5s ease;
    }

    @keyframes successPulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    /* Info Section Enhanced */
    .contact-info-section {
        padding: 40px 0;
        opacity: 0;
        transform: translateX(30px);
        animation: slideInRight 0.8s ease forwards;
        animation-delay: 0.8s;
    }

    @keyframes slideInRight {
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .info-block {
        margin-bottom: 40px;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.5s ease;
    }

    .info-block.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .info-block h3 {
        color: #1a2332;
        font-size: 24px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .info-icon {
        width: 45px;
        height: 45px;
        background: linear-gradient(135deg, #ecf5f3, #d4e8e4);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        animation: iconFloat 3s ease-in-out infinite;
    }

    @keyframes iconFloat {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
    }

    .info-content {
        background: linear-gradient(135deg, #ffffff 0%, #f9fbfa 100%);
        padding: 30px;
        border-radius: 15px;
        border-left: 4px solid #5b8c85;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .info-content::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(91, 140, 133, 0.05), transparent);
        transition: left 0.6s ease;
    }

    .info-content:hover {
        transform: translateX(5px);
        box-shadow: 0 8px 30px rgba(91, 140, 133, 0.15);
    }

    .info-content:hover::before {
        left: 100%;
    }

    .info-content p {
        color: #2c3e50;
        line-height: 1.8;
        margin-bottom: 15px;
    }

    .info-content strong {
        color: #1a2332;
        font-weight: 600;
    }

    /* Contact Methods Grid */
    .contact-methods {
        display: grid;
        gap: 18px;
        margin-top: 25px;
    }

    .contact-method {
        display: flex;
        align-items: center;
        gap: 18px;
        padding: 18px;
        background: linear-gradient(135deg, #ffffff 0%, #fafbfb 100%);
        border-radius: 12px;
        transition: all 0.3s ease;
        cursor: pointer;
        border: 1px solid transparent;
        position: relative;
        overflow: hidden;
    }

    .contact-method::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #5b8c85, transparent);
        transition: left 0.5s ease;
    }

    .contact-method:hover {
        box-shadow: 0 5px 20px rgba(91, 140, 133, 0.15);
        transform: translateX(8px);
        border-color: #e8f0ef;
    }

    .contact-method:hover::before {
        left: 100%;
    }

    .method-icon {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #ecf5f3, #d4e8e4);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        transition: all 0.3s ease;
    }

    .contact-method:hover .method-icon {
        transform: rotate(360deg) scale(1.1);
        background: linear-gradient(135deg, #5b8c85, #4a7268);
    }

    .method-text {
        flex: 1;
    }

    .method-text h4 {
        color: #1a2332;
        font-size: 16px;
        margin-bottom: 4px;
        font-weight: 600;
    }

    .method-text p {
        color: #6c7983;
        font-size: 14px;
        margin: 0;
    }

    /* Consultation Banner Enhanced */
    .consultation-banner {
        background: linear-gradient(135deg, #5b8c85 0%, #4a7268 100%);
        padding: 35px;
        border-radius: 20px;
        text-align: center;
        color: white;
        margin-top: 35px;
        position: relative;
        overflow: hidden;
        opacity: 0;
        transform: scale(0.95);
        transition: all 0.5s ease;
    }

    .consultation-banner.visible {
        opacity: 1;
        transform: scale(1);
    }

    .consultation-banner::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        animation: rotate 20s linear infinite;
    }

    @keyframes rotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .consultation-banner h3 {
        font-size: 28px;
        margin-bottom: 18px;
        color: white;
        position: relative;
        z-index: 1;
    }

    .consultation-banner p {
        opacity: 0.95;
        margin-bottom: 25px;
        line-height: 1.7;
        position: relative;
        z-index: 1;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
    }

    .consultation-features {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 25px;
        position: relative;
        z-index: 1;
    }

    .consultation-feature {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        font-size: 15px;
        padding: 12px;
        background: rgba(255,255,255,0.1);
        border-radius: 25px;
        transition: all 0.3s ease;
        cursor: default;
    }

    .consultation-feature:hover {
        background: rgba(255,255,255,0.2);
        transform: translateY(-3px);
    }

    .consultation-feature::before {
        content: '✓';
        width: 24px;
        height: 24px;
        background-color: rgba(255,255,255,0.3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: bold;
    }

    /* Location Info Enhanced */
    .location-info {
        background: linear-gradient(135deg, #ecf5f3 0%, #e0eeec 100%);
        padding: 35px;
        border-radius: 15px;
        margin-top: 35px;
        position: relative;
        overflow: hidden;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.5s ease;
    }

    .location-info.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .location-info::before {
        content: '🌍';
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 80px;
        opacity: 0.1;
        animation: spin 20s linear infinite;
    }

    .location-info h3 {
        color: #1a2332;
        font-size: 22px;
        margin-bottom: 18px;
        position: relative;
        z-index: 1;
    }

    .location-info p {
        color: #2c3e50;
        line-height: 1.8;
        position: relative;
        z-index: 1;
    }

    .online-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: linear-gradient(135deg, #ffffff, #f9fbfa);
        padding: 10px 20px;
        border-radius: 25px;
        color: #5b8c85;
        font-weight: 600;
        margin-top: 20px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        position: relative;
        z-index: 1;
    }

    .online-badge:hover {
        transform: scale(1.05);
        box-shadow: 0 5px 20px rgba(91, 140, 133, 0.2);
    }

    .online-badge::before {
        content: '🌐';
        font-size: 18px;
        animation: pulse 2s ease-in-out infinite;
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.2); }
    }

    /* Success Message */
    .success-message {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        background: white;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.2);
        z-index: 10000;
        text-align: center;
        max-width: 450px;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .success-message.show {
        transform: translate(-50%, -50%) scale(1);
        opacity: 1;
    }

    .success-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #5cb85c, #4cae4c);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 40px;
        color: white;
        animation: successBounce 0.5s ease;
    }

    @keyframes successBounce {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.2); }
    }

    .success-message h3 {
        color: #1a2332;
        font-size: 24px;
        margin-bottom: 15px;
    }

    .success-message p {
        color: #6c7983;
        line-height: 1.6;
    }

    .success-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        z-index: 9999;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .success-overlay.show {
        opacity: 1;
        visibility: visible;
    }

    /* Responsive Design */
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
            font-size: 36px;
        }

        .contact-hero p {
            font-size: 20px;
        }

        .contact-form-section {
            padding: 30px;
            animation: fadeIn 0.8s ease forwards;
        }

        .contact-info-section {
            animation: fadeIn 0.8s ease forwards;
        }
    }

    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }
</style>

<!-- Page Loader -->
<div class="page-loader" id="pageLoader">
    <div class="loader-content">
        <div class="loader-circle"></div>
        <p style="color: #5b8c85; font-size: 16px;">Preparing your journey...</p>
    </div>
</div>

<main id="primary" class="site-main">
    <section class="contact-hero">
        <div class="connection-lines">
            <div class="connection-line"></div>
            <div class="connection-line"></div>
            <div class="connection-line"></div>
        </div>
        <div class="container">
            <h1>Get in Touch</h1>
            <p>Take the first step towards positive change and healing</p>
        </div>
    </section>

    <section class="contact-main">
        <div class="contact-container">

            <div class="contact-form-section">
                <h2>Send a Message</h2>
                <p class="form-intro">
                    Complete the form below and I'll get back to you within 48 hours to arrange
                    your free consultation. Your journey to wellness begins here.
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

<!-- Success Message Modal -->
<div class="success-overlay" id="successOverlay"></div>
<div class="success-message" id="successMessage">
    <div class="success-icon">✓</div>
    <h3>Message Sent Successfully!</h3>
    <p>Thank you for reaching out. I'll review your message and get back to you within 48 hours to arrange your free consultation.</p>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Page Loader
        const pageLoader = document.getElementById('pageLoader');
        if (pageLoader) {
            setTimeout(() => {
                pageLoader.classList.add('loaded');
            }, 800);
        }

        // Form Interactions
        const formGroups = document.querySelectorAll('.form-group');
        formGroups.forEach(group => {
            const input = group.querySelector('input, select, textarea');
            if (input) {
                input.addEventListener('focus', () => {
                    group.classList.add('focused');
                });
                input.addEventListener('blur', () => {
                    if (!input.value) {
                        group.classList.remove('focused');
                    }
                });
            }
        });

        // Form Submission
        const contactForm = document.getElementById('contactForm');
        const successOverlay = document.getElementById('successOverlay');
        const successMessage = document.getElementById('successMessage');

        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const submitBtn = this.querySelector('.form-submit');
            const originalText = submitBtn.textContent;

            // Animate button
            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;
            submitBtn.style.background = 'linear-gradient(135deg, #6c7983, #5a6b75)';

            setTimeout(() => {
                submitBtn.textContent = 'Message Sent!';
                submitBtn.classList.add('success');

                // Show success message
                successOverlay.classList.add('show');
                successMessage.classList.add('show');

                setTimeout(() => {
                    // Reset form
                    this.reset();
                    submitBtn.textContent = originalText;
                    submitBtn.style.background = '';
                    submitBtn.disabled = false;
                    submitBtn.classList.remove('success');

                    // Remove focused classes
                    formGroups.forEach(group => {
                        group.classList.remove('focused');
                    });

                    // Hide success message
                    successOverlay.classList.remove('show');
                    successMessage.classList.remove('show');
                }, 3000);
            }, 1500);
        });

        // Click overlay to close success message
        successOverlay.addEventListener('click', function() {
            successOverlay.classList.remove('show');
            successMessage.classList.remove('show');
        });

        // Scroll Animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        // Info blocks animation
        const infoBlocks = document.querySelectorAll('.info-block');
        const infoObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, index * 150);
                    infoObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        infoBlocks.forEach(block => {
            infoObserver.observe(block);
        });

        // Consultation banner animation
        const consultationBanner = document.querySelector('.consultation-banner');
        const consultationObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    consultationObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        if (consultationBanner) {
            consultationObserver.observe(consultationBanner);
        }

        // Location info animation
        const locationInfo = document.querySelector('.location-info');
        const locationObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    locationObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        if (locationInfo) {
            locationObserver.observe(locationInfo);
        }

        // Parallax effect for hero section
        const hero = document.querySelector('.contact-hero');
        let ticking = false;

        function updateParallax() {
            const scrolled = window.pageYOffset;
            const parallaxSpeed = 0.5;

            if (hero) {
                hero.style.transform = `translateY(${scrolled * parallaxSpeed}px)`;
            }

            ticking = false;
        }

        function requestTick() {
            if (!ticking) {
                window.requestAnimationFrame(updateParallax);
                ticking = true;
            }
        }

        window.addEventListener('scroll', requestTick);

        // Contact method hover effects
        const contactMethods = document.querySelectorAll('.contact-method');
        contactMethods.forEach(method => {
            method.addEventListener('mouseenter', function() {
                const icon = this.querySelector('.method-icon');
                icon.style.color = 'white';
            });

            method.addEventListener('mouseleave', function() {
                const icon = this.querySelector('.method-icon');
                icon.style.color = '';
            });
        });

        // Form field animations
        const formInputs = document.querySelectorAll('.form-group input, .form-group select, .form-group textarea');
        formInputs.forEach((input, index) => {
            input.style.opacity = '0';
            input.style.transform = 'translateY(20px)';

            setTimeout(() => {
                input.style.transition = 'all 0.5s ease';
                input.style.opacity = '1';
                input.style.transform = 'translateY(0)';
            }, 1000 + (index * 100));
        });

        // Smooth scroll for any anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    });
</script>

<?php get_footer(); ?>