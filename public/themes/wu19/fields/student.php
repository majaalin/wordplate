<?php 
declare(strict_types=1);

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'Student info',
        'title' => 'Student info',
        'fields' => array (
            array (
                'key' => 'Email',
                'label' => 'Email',
                'name' => 'email',
                'type' => 'email',
            ),
            array (
                'key' => 'Github profile',
                'label' => 'Github profile',
                'name' => 'github',
                'type' => 'url',
            )
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'student',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'side',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
    ));
    
    endif;