<?php
if (function_exists("register_field_group")) {
    register_field_group(array(
        'id' => 'acf_sponsored-story',
        'title' => 'Sponsored/Partner Story',
        'fields' => array(
            array(
                'key' => 'field_54e657693b5bf',
                'label' => '',
                'name' => 'sponsored_story',
                'type' => 'checkbox',
                'choices' => array(
					'1'	=> 'This is a sponsored story or a story being published in partnership with a third party'
				),
                'default_value' => 0,
				'layout' => 'horizontal',
				
            ),
			array(
                'key' => 'field_54e657693b5d0',
                'label' => 'Label',
                'name' => 'sponsored_story_label',
                'type' => 'radio',
				'instructions' => 'Please choose the label that describes the type of this story.',
                'message' => '',
                'default_value' => 1,
				'choices' => array(
					'Presented by'	=> 'Presented by',
					'In partnership with'	=> 'In partnership with',
				),
				'conditional_logic' => array(
                    'status' => 1,
                    'rules' => array(
                        array(
                            'field' => 'field_54e657693b5bf',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                    'allorany' => 'all',
                ),
            ),

            array(
                'key' => 'field_54e657963b5c0',
                'label' => 'Sponsor/Partner name',
                'name' => 'sponsor_name',
                'type' => 'text',
                'conditional_logic' => array(
                    'status' => 1,
                    'rules' => array(
                        array(
                            'field' => 'field_54e657693b5bf',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_54e657963b5c2',
                'label' => 'Sponsor/Partner link',
                'name' => 'sponsor_link',
                'type' => 'text',
                'conditional_logic' => array(
                    'status' => 1,
                    'rules' => array(
                        array(
                            'field' => 'field_54e657693b5bf',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_54e657aa3b5c1',
                'label' => 'Sponsor/Partner Image',
                'name' => 'sponsor_image',
                'type' => 'image',
                'conditional_logic' => array(
                    'status' => 1,
                    'rules' => array(
                        array(
                            'field' => 'field_54e657693b5bf',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'save_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
			array(
                'key' => 'field_54e657693b5d1',
                'label' => 'Sponsor/Partner image toggle',
                'name' => 'sponsored_image_toggle',
                'type' => 'radio',
				'instructions' => 'Please choose if you want to display the sponsor/partner image you added above in header banner',
                'message' => '',
                'default_value' => 'Yes',
				'choices' => array(
					'Yes'	=> 'Yes',
					'No'	=> 'No',
				),
				'conditional_logic' => array(
                    'status' => 1,
                    'rules' => array(
                        array(
                            'field' => 'field_54e657693b5bf',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                    'allorany' => 'all',
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));
}
