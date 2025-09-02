<footer id="colophon" class="site-footer">
    <style>
        .site-footer {
            background-color: #1a2332;
            color: #ecf5f3;
            padding: 60px 0 30px;
            margin-top: 80px;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-column h3 {
            color: #ecf5f3;
            font-size: 18px;
            margin-bottom: 20px;
            font-family: 'Georgia', serif;
        }
        
        .footer-column p, .footer-column ul {
            line-height: 1.8;
            color: #b8c5d6;
            font-size: 14px;
        }
        
        .footer-column ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .footer-column ul li {
            margin-bottom: 10px;
        }
        
        .footer-column a {
            color: #b8c5d6;
            transition: color 0.3s ease;
        }
        
        .footer-column a:hover {
            color: #5b8c85;
        }
        
        .footer-bottom {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 20px 0;
            border-top: 1px solid #2c3e50;
            text-align: center;
            color: #8896a8;
            font-size: 13px;
        }
        
        .footer-bottom a {
            color: #8896a8;
        }
        
        .footer-bottom a:hover {
            color: #5b8c85;
        }
        
        .professional-badges {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-top: 20px;
        }
        
        .badge-placeholder {
            background-color: #2c3e50;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 12px;
            color: #b8c5d6;
        }
        
        @media (max-width: 768px) {
            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .site-footer {
                padding: 40px 0 20px;
                margin-top: 60px;
            }
        }
    </style>
    
    <div class="footer-content">
        <div class="footer-column">
            <h3>EquiMind Counselling</h3>
            <p>A safe, confidential, and supportive space to explore, heal, and grow. Professional therapy services for adults, children, and young people.</p>
            <div class="professional-badges">
                <span class="badge-placeholder">NCPS Accredited</span>
            </div>
        </div>
        
        <div class="footer-column">
            <h3>Services</h3>
            <ul>
                <li><a href="<?php echo esc_url(home_url('/adult-therapy')); ?>">Adult Therapy</a></li>
                <li><a href="<?php echo esc_url(home_url('/child-therapy')); ?>">Child & Adolescent Therapy</a></li>
                <li><a href="<?php echo esc_url(home_url('/hypnotherapy')); ?>">Hypnotherapy</a></li>
                <li><a href="<?php echo esc_url(home_url('/specialist-support')); ?>">Specialist Support</a></li>
            </ul>
        </div>
        
        <div class="footer-column">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="<?php echo esc_url(home_url('/about')); ?>">About Me</a></li>
                <li><a href="<?php echo esc_url(home_url('/my-approach')); ?>">My Approach</a></li>
                <li><a href="<?php echo esc_url(home_url('/faqs')); ?>">FAQs</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
            </ul>
        </div>
        
        <div class="footer-column">
            <h3>Get in Touch</h3>
            <p>Ready to take the first step? Book your free 15-minute consultation today.</p>
            <p style="margin-top: 15px;">
                <strong>Email:</strong> contact@equimindcounselling.com<br>
                <strong>Sessions:</strong> Online (UK-wide)
            </p>
        </div>
    </div>
    
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> EquiMind Counselling. All rights reserved. | 
        <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy</a> | 
        <a href="<?php echo esc_url(home_url('/terms-of-service')); ?>">Terms of Service</a></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>