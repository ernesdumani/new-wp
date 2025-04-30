<?php 
function dstheme_costumizer($wp_costumize )   {
// 1 copyright cestion
$wp_cotumize->add section(
    'sec_copyright', 
    array(
        'title'=> 'Copyright Settings',
        'description'=> 'Copyright Settings'
    )
    );
    $wp_costumize->add_setting(
        'set_copyright', 
        array(
            'type' => 'theme_mod',
            'default' => 'Copyright X - All Rights Reserved',
            'sanitize_callback'=> 'sanitize'
        )
        );
        $wp_costumize->

}
add_action( 'costumize_register', 'dstheme_costumizer')
?>