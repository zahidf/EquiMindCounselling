<?php

class Hostinger_Frontend_Translations {
    protected $frontend_translations;
    protected $chatbot_translations;

    public function __construct() {
        $this->setup_translations();
    }

    public function get_frontend_translations(): array {
        return $this->frontend_translations;
    }

    public function get_chatbot_translations(): array {
        return $this->chatbot_translations;
    }

    protected function setup_translations(): void {
        $this->frontend_translations = array(
            'tones_selected'     => esc_html__( 'tones selected', 'hostinger-ai-assistant' ),
            'voice_tones'        => array(
                'neutral'     => esc_html__( 'Neutral', 'hostinger-ai-assistant' ),
                'formal'      => esc_html__( 'Formal', 'hostinger-ai-assistant' ),
                'trustworthy' => esc_html__( 'Trustworthy', 'hostinger-ai-assistant' ),
                'friendly'    => esc_html__( 'Friendly', 'hostinger-ai-assistant' ),
                'witty'       => esc_html__( 'Witty', 'hostinger-ai-assistant' ),
            ),
            'example_keywords'   => esc_html__( 'Example: website development, WordPress tutorial, ...', 'hostinger-ai-assistant' ),
            'at_least_ten'       => esc_html__( 'Enter at least 10 characters', 'hostinger-ai-assistant' ),
            'let_us_now_more'    => esc_html__( 'Let us now more about your post idea. Share more details for better results', 'hostinger-ai-assistant' ),
            'youre_good'         => esc_html__( 'You\'re good to go, but you can share more details for better results', 'hostinger-ai-assistant' ),
            'add_new_with_ai'    => esc_html__( 'Create Post with AI', 'hostinger-ai-assistant' ),
            'ai_generated_image' => esc_html__( 'AI-generated image', 'hostinger-ai-assistant' ),
            'use_image_as'       => esc_html__( 'Use this image as:', 'hostinger-ai-assistant' ),
            'set_as_featured'    => esc_html__( 'External featured image', 'hostinger-ai-assistant' ),
            'set_as_content'     => esc_html__( 'Insert this image inside content', 'hostinger-ai-assistant' ),
        );

        /* translators: %s: MCP plugin name */
        $mcp_subtitle    = __( 'To let Kodee manage your site on your behalf, we will install and pre-configure the %s for you. This allows Kodee to perform actions like creating pages or updating settings. You can revoke this permission at any time in your Hostinger Tools settings.', 'hostinger-ai-assistant' );
        $mcp_plugin_name = '<b>' . __( 'WordPress MCP plugin', 'hostinger-ai-assistant' ) . '</b>';
        $mcp_subtitle    = sprintf( $mcp_subtitle, $mcp_plugin_name );
        $mcp_subtitle    = strip_tags( $mcp_subtitle, '<b>' );

        $this->chatbot_translations = array(
            'main'           => array(
                'intro'                      => esc_html__( 'Hi, I\'m Kodee, your personal AI assistant. You can ask me any questions you have regarding WordPress. I\'m still learning, so sometimes can make mistakes. What questions do you have?', 'hostinger-ai-assistant' ),
                'title'                      => esc_html__( 'Kodee', 'hostinger-ai-assistant' ),
                'beta_badge'                 => esc_html__( 'Beta', 'hostinger-ai-assistant' ),
                'tooltip_feedback'           => esc_html__( 'Leave feedback', 'hostinger-ai-assistant' ),
                'tooltip_reset'              => esc_html__( 'Restart chatbot', 'hostinger-ai-assistant' ),
                'tooltip_close'              => esc_html__( 'Close', 'hostinger-ai-assistant' ),
                'question_input_placeholder' => esc_html__( 'Write your question', 'hostinger-ai-assistant' ),
                'disclaimer'                 => esc_html__( 'AI may produce inaccurate information', 'hostinger-ai-assistant' ),
                'button'                     => __( 'Ask AI', 'hostinger-ai-assistant' ),
            ),
            'modal_feedback' => array(
                'title'               => esc_html__( 'Rate your experience using Kodee', 'hostinger-ai-assistant' ),
                'question'            => esc_html__( 'Share Your Experience', 'hostinger-ai-assistant' ),
                'score_poor'          => esc_html__( 'Poor', 'hostinger-ai-assistant' ),
                'score_excellent'     => esc_html__( 'Excellent', 'hostinger-ai-assistant' ),
                'comment_placeholder' => esc_html__( 'Write your feedback', 'hostinger-ai-assistant' ),
                'confirm_button'      => esc_html__( 'Send', 'hostinger-ai-assistant' ),
                'thanks_message'      => esc_html__( 'Thank you for your feedback', 'hostinger-ai-assistant' ),
            ),
            'modal_restart'  => array(
                'title'          => esc_html__( 'Clear chat', 'hostinger-ai-assistant' ),
                'description'    => esc_html__( 'Please note that all chat messages will be permanently deleted. This action cannot be undone. Proceeding will result in the removal of all messages from this chat session.', 'hostinger-ai-assistant' ),
                'cancel_button'  => esc_html__( 'Cancel', 'hostinger-ai-assistant' ),
                'confirm_button' => esc_html__( 'Clear chat' ),
            ),
            'error'          => array(
                'unavailable'      => esc_html__( 'Sorry, the AI Chatbot is currently unavailable. Please try again later.', 'hostinger-ai-assistant' ),
                'timeout'          => esc_html__( 'Sorry, the AI Chatbot request timed out. Please try again later.', 'hostinger-ai-assistant' ),
                'unclear_question' => esc_html__( 'I\'m sorry, I didn\'t understand your question. Could you please rephrase it or ask something different?', 'hostinger-ai-assistant' ),
            ),
            'mcp-modal'      => array(
                'title'    => esc_html__( 'Allow Kodee to manage your site', 'hostinger-ai-assistant' ),
                'subtitle' => $mcp_subtitle,
                'deny'     => esc_html__( 'No, thanks', 'hostinger-ai-assistant' ),
                'accept'   => esc_html__( 'Grant Permission', 'hostinger-ai-assistant' ),
            ),
        );
    }
}
