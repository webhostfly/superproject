<?php
if (function_exists("register_field_group")) {
    register_field_group(
        array(
            'id' => 'acf_council_event',
            'title' => 'NSC Event',
            'fields' => array(
                array (
                    'key' => 'field_329re556a8900',
                    'label' => __('Dek'),
                    'name' => 'dek',
                    'type' => 'text',
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'formatting' => 'none',
                    'maxlength' => '',
                ),
                array (
                    'key' => 'field_678ro223x7794',
                    'label' => 'Hero Type',
                    'name' => 'hero_type',
                    'type' => 'select',
                    'choices' => array (
                        'small' => 'Small Hero',
                        'cover' => 'Cover Hero',
                    ),
                    'default_value' => '',
                    'allow_null' => 1,
                    'multiple' => 0,
                ),
                array (
                    'key' => 'field_482pz401w8242',
                    'label' => __('Hero'),
                    'name' => 'hero',
                    'type' => 'flexible_content',
                    'layouts' => array (
                        array (
                            'label' => __('Image'),
                            'name' => 'image',
                            'display' => 'row',
                            'min' => '',
                            'max' => '',
                            'sub_fields' => array (
                                array (
                                    'key' => 'field_074qa119n5021',
                                    'label' => __('Image'),
                                    'name' => 'image',
                                    'type' => 'image',
                                    'column_width' => '',
                                    'save_format' => 'object',
                                    'preview_size' => 'thumbnail',
                                    'library' => 'all',
                                ),
                            ),
                        ),
                        array (
                            'label' => __('Video'),
                            'name' => 'video',
                            'display' => 'row',
                            'min' => '',
                            'max' => '',
                            'sub_fields' => array (
                                array (
                                    'key' => 'field_904nm692e2531',
                                    'label' => __('Video URL'),
                                    'name' => 'video_url',
                                    'type' => 'text',
                                    'column_width' => '',
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'formatting' => 'html',
                                    'maxlength' => '',
                                ),
                                array (
                                    'key' => 'field_801pw610r0026',
                                    'label' => __('Caption'),
                                    'name' => 'caption',
                                    'type' => 'text',
                                    'column_width' => '',
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'formatting' => 'none',
                                    'maxlength' => '',
                                ),
                                array (
                                    'key' => 'field_996bz921u1023',
                                    'label' => __('Credit'),
                                    'name' => 'credit',
                                    'type' => 'text',
                                    'column_width' => '',
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'formatting' => 'none',
                                    'maxlength' => '',
                                ),
                            ),
                        ),
                    ),
                    'button_label' => 'Add Row',
                    'min' => '',
                    'max' => '',
                ),
                array(
                    'key' => 'field_619dp347s7752',
                    'label' => 'Date',
                    'name' => 'event_date',
                    'type' => 'date_picker',
                    'instructions' => 'The date and time of this event.',
                    'default_value' => '',
                    'date_format' => 'yymmdd',
				    'display_format' => 'mm/dd/yy',
                    'placeholder' => '',
                    'prepend' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_892lo223w9006',
                    'label' => 'Time',
                    'name' => 'event_time',
                    'type' => 'text',
                    'instructions' => 'The time of day this event will occur.',
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'formatting' => 'none',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_100fp496o1138',
                    'label' => 'Location',
                    'name' => 'location',
                    'type' => 'text',
                    'instructions' => 'The location of this event.',
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'formatting' => 'none',
                    'maxlength' => '',
                ),
                 array(
                    'key' => 'field_100fp496o1199',
                    'label' => 'General Location',
                    'name' => 'general_location',
                    'type' => 'text',
                    'instructions' => 'A more broad location for the landing page.',
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'formatting' => 'none',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_349te699q6883',
                    'label' => 'Event Description',
                    'name' => 'description',
                    'type' => 'wysiwyg',
                    'instructions' => '',
                    'default_value' => '',
                    'toolbar' => 'basic',
                    'media_upload' => 'no',
                ),
                  array(
                    'key' => 'field_100fp496o1429',
                    'label' => 'RSVP',
                    'name' => 'rsvp_link',
                    'type' => 'text',
                    'instructions' => 'Enter full URL or email address. For URLs be sure to include the "http://" prefix. For email addresses, add a "mailto:" prefix.',
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'formatting' => 'none',
                    'maxlength' => '',
                ),
                  array(
                    'key' => 'field_100fp496o1430',
                    'label' => 'Link type',
                    'name' => 'rsvp_link_type',
                    'type' => 'select',
                    'instructions' => '',
                    'default_value' => 'RSVP',
                    'choices' => array(
						'RSVP'	=> 'RSVP',
						'Request Invite' => 'Request Invite'
					),
					'allow_null' => 0,
                    'multiple' => 0,
                ),
                  array(
                    'key' => 'field_576b17d4f5dac',
                    'label' => 'Council branch location',
                    'name' => 'council_branch_location',
                    'type' => 'select',
                    'instructions' => 'Select Council branch location.',
                    'default_value' => array('--- Select branch location ---'=>'--- Select branch location ---'),
                    'choices' => array(
						'DC'	=> 'DC',
						'New York City'	=> 'New York City',
						'San Francisco' => 'San Francisco'
					),
					'allow_null' => 0,
                    'multiple' => 0,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'nscevent',
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