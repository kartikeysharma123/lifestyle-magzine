<?php
defined( 'ABSPATH' ) || exit;

add_action( 'init', 'ultp_chatgpt_init' );
function ultp_chatgpt_init() {
	if ( ultimate_post()->get_setting('ultp_chatgpt') == 'true' ) {
		add_filter( 'ultp_settings', 'get_chatgpt_settings', 10, 1 );
	}
}

function get_chatgpt_settings( $config ) {
	$arr = array(
		'ultp_chatgpt' => array(
			'label' => __( 'ChatGPT', 'ultimate-post' ),
			'attr'  => array(
				'chatgpt_heading'    => array(
					'type'  => 'heading',
					'label' => __( 'ChatGPT Settings', 'ultimate-post' ),
				),
				'chatgpt_secret_key' => array(
					'type'  => 'text',
					'label' => __( 'OpenAI API Secret Key', 'ultimate-post' ),
					'desc'  => __( 'For using ChatGPT addon, you have to add your OpenAI secret key.', 'ultimate-post' ),
					'link'  => __( 'https://platform.openai.com/account/api-keys' ),
					'linkText'  => __( 'Get key.', 'ultimate-post' ),
				),
				'chatgpt_model' => array(
                    'type'    => 'select',
                    'label'   => __( 'OpenAI Model', 'ultimate-post' ),
                    'desc'    => __( 'Choose your preferable OpenAI model', 'ultimate-post' ),
                    'options' => array(
                        'gpt-3.5-turbo' => 'gpt-3.5-turbo',
                        'text-davinci-002' => 'text-davinci-002',
                        'text-davinci-003' => 'text-davinci-003',
                        'gpt-4' => 'gpt-4',
                    ),
					'default' => 'gpt-3.5-turbo'
                ),
				'chatgpt_response_time' => array(
                    'type'     => 'number',
                    'label'   => __( 'Response Time', 'ultimate-post' ),
                    'desc'    => __( 'Choose your preferable OpenAI response time', 'ultimate-post' ),
                    'default' => 60
                ),
				'chatgpt_max_tokens' => array(
                    'type'     => 'number',
                    'label'   => __( 'Max Tokens', 'ultimate-post' ),
                    'desc'    => __( 'Choose your preferable OpenAI max Number of Tokens to be generated by ChatGPT', 'ultimate-post' ),
                    'default' => 400
                ),
			),
		),
	);
	return array_merge( $config, $arr );
}