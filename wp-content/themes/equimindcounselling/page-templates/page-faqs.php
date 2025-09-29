<?php
/*
Template Name: FAQs
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
        background: linear-gradient(135deg, #ecf5f3, #d4e8e4);
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
    }

    .page-loader.loaded {
        opacity: 0;
        visibility: hidden;
    }

    .loader-content {
        text-align: center;
    }

    .loader-logo {
        font-size: 32px;
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 20px;
        opacity: 0;
        animation: fadeInUp 0.8s ease forwards;
    }

    .loader-dots {
        display: flex;
        gap: 8px;
        justify-content: center;
    }

    .loader-dot {
        width: 12px;
        height: 12px;
        background: #5b8c85;
        border-radius: 50%;
        animation: pulse 1.5s ease-in-out infinite;
    }

    .loader-dot:nth-child(2) { animation-delay: 0.2s; }
    .loader-dot:nth-child(3) { animation-delay: 0.4s; }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
        from {
            opacity: 0;
            transform: translateY(20px);
        }
    }

    /* Hero Section Enhanced */
    .faqs-hero {
        background: linear-gradient(135deg, rgba(236, 245, 243, 0.85) 0%, rgba(212, 232, 228, 0.85) 100%),
                    url('/wp-includes/images/hero-faqs.png') center center / cover no-repeat;
        padding: 120px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
        min-height: 60vh;
        display: flex;
        align-items: center;
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

    .faqs-hero::after {
        content: '';
        position: absolute;
        bottom: -40%;
        left: -20%;
        width: 50%;
        height: 180%;
        background: radial-gradient(circle, rgba(74, 114, 104, 0.08) 0%, transparent 70%);
        animation: float 25s ease-in-out infinite reverse;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        25% { transform: translateY(-15px) rotate(2deg); }
        50% { transform: translateY(-20px) rotate(5deg); }
        75% { transform: translateY(-10px) rotate(3deg); }
    }

    .hero-content {
        position: relative;
        z-index: 1;
        width: 100%;
    }

    .faqs-hero h1 {
        font-size: 52px;
        color: #1a2332;
        margin-bottom: 25px;
        font-weight: 700;
        line-height: 1.2;
        opacity: 0;
        animation: heroFadeInUp 0.8s ease forwards;
        animation-delay: 0.2s;
    }

    .faqs-hero p {
        font-size: 26px;
        color: #1a2332;
        max-width: 800px;
        margin: 0 auto;
        font-style: italic;
        font-weight: 500;
        text-shadow: 0 1px 3px rgba(255, 255, 255, 0.5);
        opacity: 0;
        animation: heroFadeInUp 0.8s ease forwards;
        animation-delay: 0.4s;
    }

    @keyframes heroFadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
        from {
            opacity: 0;
            transform: translateY(30px);
        }
    }

    /* Search Section */
    .search-section {
        background: white;
        padding: 40px 0;
        border-bottom: 1px solid #ecf5f3;
        position: sticky;
        top: 0;
        z-index: 100;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        opacity: 0;
        animation: fadeInUp 0.8s ease forwards;
        animation-delay: 0.6s;
    }

    .search-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .search-box {
        position: relative;
    }

    .search-input {
        width: 100%;
        padding: 15px 50px 15px 20px;
        border: 2px solid #e8f0ef;
        border-radius: 30px;
        font-size: 16px;
        transition: all 0.3s ease;
        background: white;
    }

    .search-input:focus {
        outline: none;
        border-color: #5b8c85;
        box-shadow: 0 0 0 4px rgba(91, 140, 133, 0.1);
    }

    .search-icon {
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        color: #5b8c85;
        font-size: 20px;
    }

    .search-results {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: white;
        border: 1px solid #e8f0ef;
        border-radius: 10px;
        margin-top: 10px;
        max-height: 300px;
        overflow-y: auto;
        display: none;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        z-index: 10;
    }

    .search-results.active {
        display: block;
    }

    .search-result-item {
        padding: 15px 20px;
        cursor: pointer;
        transition: background 0.2s ease;
        border-bottom: 1px solid #f0f7f5;
    }

    .search-result-item:hover {
        background: #ecf5f3;
    }

    .search-result-item strong {
        color: #5b8c85;
    }

    /* Main FAQs Section */
    .faqs-main {
        padding: 60px 0 80px;
        background: linear-gradient(180deg, #ffffff 0%, #f9fbfa 100%);
        position: relative;
    }

    .faqs-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Category Filter */
    .category-filter {
        background: white;
        padding: 30px;
        border-radius: 20px;
        margin-bottom: 50px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.8s ease forwards;
        animation-delay: 0.2s;
    }

    .filter-title {
        text-align: center;
        color: #1a2332;
        font-size: 24px;
        margin-bottom: 25px;
    }

    .filter-buttons {
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
    }

    .filter-btn {
        padding: 12px 25px;
        background: #f9fbfa;
        border: 2px solid transparent;
        border-radius: 25px;
        color: #6c7983;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .filter-btn::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        background: rgba(91, 140, 133, 0.1);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        transition: width 0.4s, height 0.4s;
    }

    .filter-btn:hover::before {
        width: 100px;
        height: 100px;
    }

    .filter-btn:hover {
        background: #ecf5f3;
        transform: translateY(-2px);
    }

    .filter-btn.active {
        background: linear-gradient(135deg, #5b8c85, #4a7268);
        color: white;
        border-color: #5b8c85;
    }

    .filter-btn span {
        position: relative;
        z-index: 1;
    }

    /* FAQ Categories */
    .faq-category {
        margin-bottom: 60px;
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.5s ease;
    }

    .faq-category.show {
        opacity: 1;
        transform: translateY(0);
    }

    .faq-category.hidden {
        display: none;
    }

    .category-title {
        color: #5b8c85;
        font-size: 32px;
        margin-bottom: 35px;
        padding-bottom: 15px;
        border-bottom: 3px solid #ecf5f3;
        display: flex;
        align-items: center;
        gap: 15px;
        position: relative;
    }

    .category-title::after {
        content: '';
        position: absolute;
        bottom: -3px;
        left: 0;
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, #5b8c85, #4a7268);
        transition: width 0.3s ease;
    }

    .faq-category:hover .category-title::after {
        width: 100px;
    }

    .category-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #ecf5f3, #d4e8e4);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        transition: all 0.3s ease;
    }

    .faq-category:hover .category-icon {
        transform: rotate(10deg) scale(1.1);
        background: linear-gradient(135deg, #5b8c85, #4a7268);
    }

    /* FAQ Items Enhanced */
    .faq-item {
        background: white;
        border-radius: 15px;
        margin-bottom: 20px;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        opacity: 0;
        transform: translateX(-20px);
    }

    .faq-item.animate-in {
        opacity: 1;
        transform: translateX(0);
    }

    .faq-item:hover {
        box-shadow: 0 8px 25px rgba(91, 140, 133, 0.12);
        transform: translateX(5px);
    }

    .faq-item.active {
        box-shadow: 0 10px 30px rgba(91, 140, 133, 0.15);
    }

    .faq-question {
        padding: 25px 30px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: white;
        transition: all 0.3s ease;
        position: relative;
    }

    .faq-question::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 4px;
        background: linear-gradient(180deg, #5b8c85, #4a7268);
        transform: scaleY(0);
        transition: transform 0.3s ease;
    }

    .faq-item.active .faq-question::before {
        transform: scaleY(1);
    }

    .faq-question:hover {
        background: linear-gradient(90deg, #f9fbfa 0%, transparent 100%);
    }

    .faq-question h3 {
        color: #1a2332;
        font-size: 19px;
        margin: 0;
        flex: 1;
        padding-right: 20px;
        line-height: 1.5;
    }

    .faq-toggle {
        width: 35px;
        height: 35px;
        background: linear-gradient(135deg, #5b8c85, #4a7268);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        flex-shrink: 0;
    }

    .faq-item.active .faq-toggle {
        transform: rotate(45deg);
        background: linear-gradient(135deg, #4a7268, #3d5f56);
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        background: linear-gradient(180deg, #f9fbfa 0%, white 100%);
    }

    .faq-item.active .faq-answer {
        max-height: 600px;
    }

    .answer-content {
        padding: 0 30px 30px;
    }

    .faq-answer p {
        color: #2c3e50;
        line-height: 1.9;
        margin: 0;
        font-size: 16px;
        opacity: 0;
        transform: translateY(-10px);
        animation: fadeInUp 0.5s ease forwards;
        animation-delay: 0.1s;
    }

    .faq-answer ul {
        margin: 20px 0 0 0;
        padding: 0;
        list-style: none;
    }

    .faq-answer ul li {
        position: relative;
        padding-left: 30px;
        margin-bottom: 12px;
        color: #2c3e50;
        line-height: 1.7;
        opacity: 0;
        transform: translateX(-10px);
        animation: slideIn 0.5s ease forwards;
    }

    .faq-answer ul li:nth-child(1) { animation-delay: 0.2s; }
    .faq-answer ul li:nth-child(2) { animation-delay: 0.3s; }
    .faq-answer ul li:nth-child(3) { animation-delay: 0.4s; }
    .faq-answer ul li:nth-child(4) { animation-delay: 0.5s; }
    .faq-answer ul li:nth-child(5) { animation-delay: 0.6s; }

    @keyframes slideIn {
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .faq-answer ul li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: white;
        background: linear-gradient(135deg, #5b8c85, #4a7268);
        width: 20px;
        height: 20px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-weight: bold;
    }

    /* Contact CTA Enhanced */
    .contact-prompt {
        background: linear-gradient(135deg, #5b8c85 0%, #4a7268 100%);
        padding: 60px;
        border-radius: 25px;
        text-align: center;
        color: white;
        margin-top: 80px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(91, 140, 133, 0.3);
    }

    .contact-prompt::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 40%;
        height: 200%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
        animation: float 15s ease-in-out infinite;
    }

    .contact-prompt-content {
        position: relative;
        z-index: 1;
    }

    .contact-prompt h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: white;
        opacity: 0;
        animation: fadeInUp 0.8s ease forwards;
    }

    .contact-prompt p {
        font-size: 18px;
        margin-bottom: 30px;
        opacity: 0.95;
        opacity: 0;
        animation: fadeInUp 0.8s ease forwards;
        animation-delay: 0.2s;
    }

    .btn-faq {
        background-color: white;
        color: #5b8c85;
        padding: 15px 40px;
        border-radius: 30px;
        font-weight: 600;
        display: inline-block;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        text-decoration: none;
        font-size: 17px;
        position: relative;
        overflow: hidden;
        opacity: 0;
        animation: fadeInUp 0.8s ease forwards;
        animation-delay: 0.4s;
    }

    .btn-faq::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        background: rgba(91, 140, 133, 0.1);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }

    .btn-faq:hover::before {
        width: 300px;
        height: 300px;
    }

    .btn-faq:hover {
        background-color: #f0f7f5;
        transform: translateY(-3px);
        box-shadow: 0 8px 30px rgba(0,0,0,0.2);
        color: #4a7268;
    }

    /* No Results Message */
    .no-results {
        text-align: center;
        padding: 60px 20px;
        display: none;
    }

    .no-results.show {
        display: block;
        opacity: 0;
        animation: fadeInUp 0.5s ease forwards;
    }

    .no-results h3 {
        color: #5b8c85;
        font-size: 24px;
        margin-bottom: 15px;
    }

    .no-results p {
        color: #6c7983;
        font-size: 16px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .faqs-hero h1 {
            font-size: 36px;
        }

        .faqs-hero p {
            font-size: 20px;
            padding: 0 20px;
        }

        .filter-buttons {
            gap: 10px;
        }

        .filter-btn {
            padding: 10px 20px;
            font-size: 14px;
        }

        .faq-question {
            padding: 20px;
        }

        .faq-question h3 {
            font-size: 17px;
        }

        .category-title {
            font-size: 26px;
        }

        .contact-prompt {
            padding: 40px 20px;
        }

        .contact-prompt h2 {
            font-size: 28px;
        }

        .search-section {
            position: relative;
        }
    }

    @media (max-width: 480px) {
        .faqs-hero h1 {
            font-size: 28px;
        }

        .faqs-hero p {
            font-size: 18px;
        }

        .filter-btn {
            padding: 8px 16px;
            font-size: 13px;
        }

        .faq-toggle {
            width: 30px;
            height: 30px;
            font-size: 18px;
        }
    }
</style>

<main id="primary" class="site-main">
    <!-- Page Loader -->
    <div class="page-loader" id="pageLoader">
        <div class="loader-content">
            <div class="loader-logo">EquiMind</div>
            <div class="loader-dots">
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
            </div>
        </div>
    </div>

    <section class="faqs-hero">
        <div class="container hero-content">
            <h1>Frequently Asked Questions</h1>
            <p>Find answers to common questions about therapy, sessions, and what to expect</p>
        </div>
    </section>

    <!-- Search Section -->
    <section class="search-section">
        <div class="search-container">
            <div class="search-box">
                <input type="text" class="search-input" id="searchInput" placeholder="Search for a question...">
                <span class="search-icon">🔍</span>
                <div class="search-results" id="searchResults"></div>
            </div>
        </div>
    </section>

    <section class="faqs-main">
        <div class="faqs-container">

            <!-- Category Filter -->
            <div class="category-filter">
                <h2 class="filter-title">Browse by Category</h2>
                <div class="filter-buttons">
                    <button class="filter-btn active" data-category="all">
                        <span>All Questions</span>
                    </button>
                    <button class="filter-btn" data-category="general">
                        <span>General</span>
                    </button>
                    <button class="filter-btn" data-category="sessions">
                        <span>Sessions</span>
                    </button>
                    <button class="filter-btn" data-category="practical">
                        <span>Practical</span>
                    </button>
                    <button class="filter-btn" data-category="specific">
                        <span>Specific Services</span>
                    </button>
                </div>
            </div>

            <!-- No Results Message -->
            <div class="no-results" id="noResults">
                <h3>No questions found</h3>
                <p>Try adjusting your search or browse all categories</p>
            </div>

            <!-- General Questions -->
            <div class="faq-category show" data-category="general">
                <h2 class="category-title">
                    <span class="category-icon">❓</span>
                    General Questions
                </h2>

                <div class="faq-item" data-search="therapy right for me counselling psychotherapy">
                    <div class="faq-question">
                        <h3>How do I know if therapy is right for me?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <div class="answer-content">
                            <p>
                                Therapy can be helpful if you're experiencing emotional difficulties, life challenges,
                                relationship issues, or simply want to understand yourself better. You don't need to be
                                in crisis to benefit from therapy. If you're curious, the free 15-minute consultation
                                can help us explore whether therapy would be beneficial for you.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-search="difference counselling psychotherapy">
                    <div class="faq-question">
                        <h3>What's the difference between counselling and psychotherapy?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <div class="answer-content">
                            <p>
                                The terms are often used interchangeably. Generally, counselling tends to be shorter-term
                                and focused on specific issues, while psychotherapy may be longer-term and explore deeper
                                patterns. I offer both approaches, tailored to your individual needs and preferences.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-search="how long therapy duration time">
                    <div class="faq-question">
                        <h3>How long will I need therapy?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <div class="answer-content">
                            <p>
                                This varies greatly depending on your individual needs, goals, and circumstances.
                                Some people find a few sessions helpful, while others benefit from longer-term work.
                                We'll regularly review your progress together and you're always in control of how
                                long you continue therapy.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-search="confidential confidentiality privacy">
                    <div class="faq-question">
                        <h3>Is everything I say confidential?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <div class="answer-content">
                            <p>
                                Yes, therapy is confidential in line with NCPS ethical guidelines and UK law.
                                The only exceptions are if I believe you or someone else is at serious risk of harm,
                                or if required by law. These boundaries will be clearly explained in our first session.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- About Sessions -->
            <div class="faq-category show" data-category="sessions">
                <h2 class="category-title">
                    <span class="category-icon">💬</span>
                    About Sessions
                </h2>

                <div class="faq-item" data-search="session length duration time 50 minutes">
                    <div class="faq-question">
                        <h3>How long are therapy sessions?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <div class="answer-content">
                            <p>
                                Standard sessions are 50 minutes long. For younger children, sessions may be
                                30-40 minutes to match their attention span. The initial assessment session
                                may be slightly longer.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-search="frequency often weekly sessions">
                    <div class="faq-question">
                        <h3>How often should I have sessions?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <div class="answer-content">
                            <p>
                                Most clients benefit from weekly sessions, especially at the beginning. This helps
                                maintain momentum and build a strong therapeutic relationship. As you progress,
                                we can adjust frequency to fortnightly or monthly if appropriate.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-search="first session initial assessment">
                    <div class="faq-question">
                        <h3>What happens in the first session?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <div class="answer-content">
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
                </div>

                <div class="faq-item" data-search="online sessions video therapy remote">
                    <div class="faq-question">
                        <h3>Do you offer online sessions?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <div class="answer-content">
                            <p>
                                Yes, I offer secure online sessions to clients across the UK. Online therapy has
                                been shown to be as effective as in-person therapy for many issues. You'll need
                                a private space, stable internet connection, and a device with camera and microphone.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Practical Information -->
            <div class="faq-category show" data-category="practical">
                <h2 class="category-title">
                    <span class="category-icon">📋</span>
                    Practical Information
                </h2>

                <div class="faq-item" data-search="cost price fee payment">
                    <div class="faq-question">
                        <h3>How much do sessions cost?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <div class="answer-content">
                            <p>
                                Sessions are £65 for a 50-minute session. I offer a sliding scale for those on
                                reduced income - please discuss this during your consultation if needed. Payment
                                is due before each session or can be arranged in blocks.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-search="cancellation policy notice 48 hours">
                    <div class="faq-question">
                        <h3>What is your cancellation policy?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <div class="answer-content">
                            <p>
                                I require 48 hours notice for cancellations or rescheduling. Sessions cancelled
                                with less notice will be charged in full, except in genuine emergencies. This
                                policy helps maintain the continuity of your therapy and respects the time reserved
                                for you.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-search="free consultation 15 minutes">
                    <div class="faq-question">
                        <h3>Do you offer a free consultation?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <div class="answer-content">
                            <p>
                                Yes, I offer a free 15-minute consultation by phone or video call. This gives us
                                a chance to briefly discuss your needs, ask any questions, and see if we feel like
                                a good therapeutic match before committing to sessions.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-search="book booking appointment contact">
                    <div class="faq-question">
                        <h3>How do I book a session?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <div class="answer-content">
                            <p>
                                You can book your free consultation through the contact page, by email, or by phone.
                                After the consultation, if we decide to work together, we'll arrange a regular
                                session time that works for both of us.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Specific Services -->
            <div class="faq-category show" data-category="specific">
                <h2 class="category-title">
                    <span class="category-icon">🎯</span>
                    Specific Services
                </h2>

                <div class="faq-item" data-search="children age young therapy">
                    <div class="faq-question">
                        <h3>At what age can children start therapy?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <div class="answer-content">
                            <p>
                                I work with children from age 5 upwards. For younger children, therapy is adapted
                                to be age-appropriate, using play, creative activities, and shorter sessions.
                                Parent involvement is usually more significant with younger children.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-search="hypnotherapy hypnosis control">
                    <div class="faq-question">
                        <h3>Will hypnotherapy make me lose control?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <div class="answer-content">
                            <p>
                                No, you remain in control throughout hypnotherapy. It's a state of focused relaxation
                                where you're aware of everything happening. You cannot be made to do anything against
                                your will, and you can come out of hypnosis whenever you choose.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-search="cultural background diversity">
                    <div class="faq-question">
                        <h3>How do you support clients from different cultural backgrounds?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <div class="answer-content">
                            <p>
                                I bring both professional training in cultural competence and lived experience as
                                a South Asian woman. I work to understand and respect your cultural context, values,
                                and experiences, integrating this understanding into our therapeutic work.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-search="couples families family therapy">
                    <div class="faq-question">
                        <h3>Do you work with couples or families?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <div class="answer-content">
                            <p>
                                My primary focus is individual therapy for adults and young people. However, I do
                                involve parents/carers in children's therapy where appropriate, and can provide
                                family support sessions when working with young clients.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact CTA -->
            <div class="contact-prompt">
                <div class="contact-prompt-content">
                    <h2>Still Have Questions?</h2>
                    <p>If you couldn't find the answer you're looking for, please don't hesitate to get in touch.</p>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-faq">Contact Me</a>
                </div>
            </div>

        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Page Loader
        const pageLoader = document.getElementById('pageLoader');
        if (pageLoader) {
            setTimeout(() => {
                pageLoader.classList.add('loaded');
            }, 600);
        }

        // FAQ Toggle Functionality
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');

            question.addEventListener('click', function() {
                const wasActive = item.classList.contains('active');

                // Close all other items in the same category
                const category = item.closest('.faq-category');
                const categoryItems = category.querySelectorAll('.faq-item');
                categoryItems.forEach(catItem => {
                    catItem.classList.remove('active');
                });

                // Toggle current item
                if (!wasActive) {
                    item.classList.add('active');
                }
            });
        });

        // Category Filter
        const filterButtons = document.querySelectorAll('.filter-btn');
        const categories = document.querySelectorAll('.faq-category');
        const noResults = document.getElementById('noResults');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const targetCategory = this.dataset.category;

                // Update active button
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                // Show/hide categories
                let hasVisibleCategory = false;
                categories.forEach(category => {
                    if (targetCategory === 'all' || category.dataset.category === targetCategory) {
                        category.classList.remove('hidden');
                        setTimeout(() => {
                            category.classList.add('show');
                        }, 10);
                        hasVisibleCategory = true;
                    } else {
                        category.classList.remove('show');
                        setTimeout(() => {
                            category.classList.add('hidden');
                        }, 300);
                    }
                });

                // Show/hide no results message
                if (hasVisibleCategory) {
                    noResults.classList.remove('show');
                } else {
                    noResults.classList.add('show');
                }

                // Scroll to top of FAQs section
                const faqsMain = document.querySelector('.faqs-main');
                const offset = 100;
                const bodyRect = document.body.getBoundingClientRect().top;
                const elementRect = faqsMain.getBoundingClientRect().top;
                const elementPosition = elementRect - bodyRect;
                const offsetPosition = elementPosition - offset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            });
        });

        // Search Functionality
        const searchInput = document.getElementById('searchInput');
        const searchResults = document.getElementById('searchResults');
        let searchTimeout;

        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            const query = this.value.toLowerCase().trim();

            if (query.length < 2) {
                searchResults.classList.remove('active');
                searchResults.innerHTML = '';

                // Show all items if search is cleared
                if (query.length === 0) {
                    faqItems.forEach(item => {
                        item.style.display = 'block';
                    });
                    categories.forEach(category => {
                        category.classList.remove('hidden');
                        category.classList.add('show');
                    });
                    noResults.classList.remove('show');
                }
                return;
            }

            searchTimeout = setTimeout(() => {
                performSearch(query);
            }, 300);
        });

        function performSearch(query) {
            let hasResults = false;
            searchResults.innerHTML = '';

            // Search through FAQ items
            faqItems.forEach(item => {
                const searchText = item.dataset.search.toLowerCase();
                const questionText = item.querySelector('h3').textContent.toLowerCase();

                if (searchText.includes(query) || questionText.includes(query)) {
                    item.style.display = 'block';
                    hasResults = true;

                    // Add to search results dropdown
                    const resultItem = document.createElement('div');
                    resultItem.className = 'search-result-item';
                    resultItem.innerHTML = highlightMatch(item.querySelector('h3').textContent, query);
                    resultItem.addEventListener('click', function() {
                        scrollToItem(item);
                        searchResults.classList.remove('active');
                        searchInput.value = '';
                    });
                    searchResults.appendChild(resultItem);
                } else {
                    item.style.display = 'none';
                }
            });

            // Show/hide categories based on visible items
            categories.forEach(category => {
                const visibleItems = category.querySelectorAll('.faq-item:not([style*="display: none"])');
                if (visibleItems.length > 0) {
                    category.classList.remove('hidden');
                    category.classList.add('show');
                } else {
                    category.classList.remove('show');
                    category.classList.add('hidden');
                }
            });

            // Show results or no results message
            if (hasResults) {
                searchResults.classList.add('active');
                noResults.classList.remove('show');
            } else {
                searchResults.classList.remove('active');
                noResults.classList.add('show');
            }
        }

        function highlightMatch(text, query) {
            const regex = new RegExp(`(${query})`, 'gi');
            return text.replace(regex, '<strong>$1</strong>');
        }

        function scrollToItem(item) {
            // Ensure parent category is visible
            const category = item.closest('.faq-category');
            category.classList.remove('hidden');
            category.classList.add('show');

            // Reset filter to "All"
            filterButtons.forEach(btn => {
                btn.classList.remove('active');
                if (btn.dataset.category === 'all') {
                    btn.classList.add('active');
                }
            });

            // Show all categories
            categories.forEach(cat => {
                cat.classList.remove('hidden');
                cat.classList.add('show');
            });

            // Show all items
            faqItems.forEach(faqItem => {
                faqItem.style.display = 'block';
            });

            // Scroll to item
            setTimeout(() => {
                const offset = 120;
                const bodyRect = document.body.getBoundingClientRect().top;
                const elementRect = item.getBoundingClientRect().top;
                const elementPosition = elementRect - bodyRect;
                const offsetPosition = elementPosition - offset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });

                // Open the item
                setTimeout(() => {
                    item.classList.add('active');
                }, 500);
            }, 100);
        }

        // Click outside search results to close
        document.addEventListener('click', function(e) {
            if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
                searchResults.classList.remove('active');
            }
        });

        // Animate FAQ items on scroll
        const animateObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animate-in');
                    }, index * 50);
                    animateObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        faqItems.forEach(item => {
            animateObserver.observe(item);
        });

        // Animate other elements
        const animateElements = document.querySelectorAll('.category-filter, .contact-prompt');
        animateElements.forEach(el => {
            animateObserver.observe(el);
        });
    });
</script>

<?php get_footer(); ?>