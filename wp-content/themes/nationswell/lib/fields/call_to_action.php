<?php
if (function_exists("register_field_group")) {
    register_field_group(
        array(
            'id' => 'acf_call-to-action',
            'title' => 'Call to Action',
            'fields' => array(
                array(
                    'key' => 'field_528bcb5146eda',
                    'label' => 'Type',
                    'name' => 'type',
                    'type' => 'select',
                    'required' => 1,
                    'choices' => array(
                        'freeform' => 'Freeform',
                        'petition' => 'Change.org Petition',
                        'donation' => 'Rally Donation',
                        'subscribe' => 'MailChimp Signup',
                        'tweet' => 'Tweet a Politician',
                    ),
                    'default_value' => '',
                    'allow_null' => 0,
                    'multiple' => 0,
                ),
                array(
                    'key' => 'field_528bcfb546edb',
                    'label' => 'Tout Heading',
                    'name' => 'tout_heading',
                    'type' => 'text',
                    'instructions' => 'Heading the appears in the Call to Action Sidebar Tout',
                    'default_value' => '',
                    'placeholder' => 'Show your Support',
                    'prepend' => '',
                    'append' => '',
                    'formatting' => 'none',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_528bd0d346edc',
                    'label' => 'Tout Sub Heading',
                    'name' => 'tout_sub_heading',
                    'type' => 'text',
                    'instructions' => 'Sub heading the appears in the Call to Action Sidebar Tout',
                    'default_value' => '',
                    'placeholder' => 'Donate to the New Energy Economy',
                    'prepend' => '',
                    'append' => '',
                    'formatting' => 'none',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_528bf225d4221',
                    'label' => 'Heading',
                    'name' => 'heading',
                    'type' => 'text',
                    'instructions' => 'This appears in the Panel',
                    'default_value' => '',
                    'placeholder' => 'Donate to Change.org',
                    'prepend' => '',
                    'append' => '',
                    'formatting' => 'none',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_528bd2c346ede',
                    'label' => 'Description',
                    'name' => 'description',
                    'type' => 'wysiwyg',
                    'instructions' => 'Describe this action to the user. This field appears in the Take Action Panel',
                    'conditional_logic' => array(
                        'status' => 1,
                        'rules' => array(
                            array(
                                'field' => 'field_528bcb5146eda',
                                'operator' => '==',
                                'value' => 'freeform',
                            ),
                            array(
                                'field' => 'field_528bcb5146eda',
                                'operator' => '==',
                                'value' => 'donation',
                            ),
                        ),
                        'allorany' => 'any',
                    ),
                    'default_value' => '',
                    'toolbar' => 'basic',
                    'media_upload' => 'no',
                ),
                array(
                    'key' => 'field_528bd11746edd',
                    'label' => 'Image',
                    'name' => 'image',
                    'type' => 'image',
                    'instructions' => 'Image the appears in the Take Action Panel',
                    'conditional_logic' => array(
                        'status' => 1,
                        'rules' => array(
                            array(
                                'field' => 'field_528bcb5146eda',
                                'operator' => '==',
                                'value' => 'freeform',
                            ),
                            array(
                                'field' => 'field_528bcb5146eda',
                                'operator' => '==',
                                'value' => 'donation',
                            ),
                        ),
                        'allorany' => 'any',
                    ),
                    'save_format' => 'object',
                    'preview_size' => 'thumbnail',
                    'library' => 'all',
                ),
                array(
                    'key' => 'field_528bd34946edf',
                    'label' => 'External Link',
                    'name' => 'external_link',
                    'type' => 'text',
                    'instructions' => 'A link to an external web page. This field appears in the Take Action Panel',
                    'conditional_logic' => array(
                        'status' => 1,
                        'rules' => array(
                            array(
                                'field' => 'field_528bcb5146eda',
                                'operator' => '==',
                                'value' => 'freeform',
                            ),
                        ),
                        'allorany' => 'all',
                    ),
                    'default_value' => '',
                    'placeholder' => 'http://www.redcross.org',
                    'prepend' => '',
                    'append' => '',
                    'formatting' => 'none',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_528d3245014b8',
                    'label' => 'External Link Text',
                    'name' => 'external_link_text',
                    'type' => 'text',
                    'conditional_logic' => array(
                        'status' => 1,
                        'rules' => array(
                            array(
                                'field' => 'field_528bcb5146eda',
                                'operator' => '==',
                                'value' => 'freeform',
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
                    'key' => 'field_528bd7735938b',
                    'label' => 'Rally Id',
                    'name' => 'rally_id',
                    'type' => 'text',
                    'instructions' => 'The Rally ID from https://rally.org/ You can get this from the URL of a rally page.',
                    'conditional_logic' => array(
                        'status' => 1,
                        'rules' => array(
                            array(
                                'field' => 'field_528bcb5146eda',
                                'operator' => '==',
                                'value' => 'donation',
                            ),
                        ),
                        'allorany' => 'all',
                    ),
                    'default_value' => '',
                    'placeholder' => '03QPrMvQzn5',
                    'prepend' => '',
                    'append' => '',
                    'formatting' => 'none',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_528bd8175938c',
                    'label' => 'Change.org URL',
                    'name' => 'change_url',
                    'type' => 'text',
                    'instructions' => 'The URL of a Petition on Change.org',
                    'conditional_logic' => array(
                        'status' => 1,
                        'rules' => array(
                            array(
                                'field' => 'field_528bcb5146eda',
                                'operator' => '==',
                                'value' => 'petition',
                            ),
                        ),
                        'allorany' => 'all',
                    ),
                    'default_value' => '',
                    'placeholder' => 'http://www.change.org/petitions/nationswell-create-a-call-to-action',
                    'prepend' => '',
                    'append' => '',
                    'formatting' => 'none',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_528bd87f5938d',
                    'label' => 'MailChimp Form Action',
                    'name' => 'mailchimp_id',
                    'type' => 'text',
                    'instructions' => 'The form action string from MailChimp. This is a long URL that you need to get out of an embeddable MailChimp subscribe form.',
                    'conditional_logic' => array(
                        'status' => 1,
                        'rules' => array(
                            array(
                                'field' => 'field_528bcb5146eda',
                                'operator' => '==',
                                'value' => 'subscribe',
                            ),
                        ),
                        'allorany' => 'all',
                    ),
                    'default_value' => '',
                    'placeholder' => 'http://ronikdesign.us5.list-manage.com/subscribe/post?u=b98ffb95799b26d50c42d8be2&id=34499b765e',
                    'prepend' => '',
                    'append' => '',
                    'formatting' => 'none',
                    'maxlength' => '',
                ),
                array (
                    'key' => 'field_529e97081e580',
                    'label' => 'Tweet Text',
                    'name' => 'tweet_text',
                    'type' => 'text',
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'formatting' => 'none',
                    'maxlength' => 140,
                    'conditional_logic' => array(
                        'status' => 1,
                        'rules' => array(
                            array(
                                'field' => 'field_528bcb5146eda',
                                'operator' => '==',
                                'value' => 'tweet',
                            ),
                        ),
                        'allorany' => 'all',
                    ),
                ),
                array(
                    'key' => 'field_528bddd2d2efd',
                    'label' => 'Icon',
                    'name' => 'icon',
                    'type' => 'select',
                    'instructions' => 'This determines the Icon that appears along with the Take Action Panel',
                    'required' => 1,
                    'choices' => array(
                        'link' => 'Link',
                        'purchase' => 'Purchase',
                        'donate' => 'Donate',
                        'donate' => 'Donate',
                        'cta-signup' => 'Signup',
                        'cta-speak-out' => 'Speak Out',
                        'email' => '@ Symbol',
                        'get_involved' => 'Get Involved',
                        'speak_out' => 'Speak Out Alternative',
                    ),
                    'default_value' => '',
                    'allow_null' => 0,
                    'multiple' => 0,
                ),
                array(
                    'key' => 'field_528fec3946b30',
                    'label' => 'Goal Date',
                    'name' => 'goal_date',
                    'type' => 'date_picker',
                    'date_format' => 'yymmdd',
                    'display_format' => 'yy-mm-dd',
                    'first_day' => 1,
                ),
                array(
                    'key' => 'field_528fec7a46b31',
                    'label' => 'Goal Amount',
                    'name' => 'goal_amount',
                    'type' => 'number',
                    'conditional_logic' => array(
                        'status' => 1,
                        'rules' => array(
                            array(
                                'field' => 'field_528bcb5146eda',
                                'operator' => '==',
                                'value' => 'petition',
                            ),
                            array(
                                'field' => 'field_528bcb5146eda',
                                'operator' => '==',
                                'value' => 'subscribe',
                            ),
                        ),
                        'allorany' => 'any',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'min' => '',
                    'max' => '',
                    'step' => '',
                ),
                array (
                    'key' => 'field_529e5ffde97a4',
                    'label' => 'Current Amount',
                    'name' => 'current_amount',
                    'type' => 'number',
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'min' => '',
                    'max' => '',
                    'step' => '',
                ),
                array (
                    'key' => 'field_529e601de97a5',
                    'label' => 'Goal Amount Display',
                    'name' => 'goal_amount_display',
                    'type' => 'radio',
                    'choices' => array (
                        'absolute' => 'Absolute Total',
                        'percentage' => 'Percentage of Total',
                    ),
                    'other_choice' => 0,
                    'save_other_choice' => 0,
                    'default_value' => 'absolute',
                    'layout' => 'vertical',
                ),
                array (
                    'key' => 'field_529e607be97a6',
                    'label' => 'Show Action Stats on Tout',
                    'name' => 'show_action_stats_on_tout',
                    'type' => 'true_false',
                    'message' => '',
                    'default_value' => 1,
                ),
                array (
                    'key' => 'field_52962ad392b7f',
                    'label' => 'Social Share Text',
                    'name' => 'social_share_text',
                    'type' => 'text',
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'formatting' => 'none',
                    'maxlength' => 140,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'ns_call_to_action',
                        'order_no' => 0,
                        'group_no' => 0,
                    ),
                ),
            ),
            'options' => array(
                'position' => 'normal',
                'layout' => 'no_box',
                'hide_on_screen' => array(),
            ),
            'menu_order' => 0,
        )
    );
}
