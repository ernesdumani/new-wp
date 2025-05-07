<?php get_header();  ?>
<div id="content" class="site-content">
<main id="main" class="site-main">
    <div class="container">
        <header>
      <h1><?php esc_html_e('Page not found!' 'wp_devs');?></h1>
        <p><?php esc_html_e('unffortunatly the page u tried does not exist.', '')?></p>
    </header>
    <div class="error">
        <p><?php esc_html_e('how about doing a search?', 'wp-devs'); ?></p>
        <?php get_searc_form();?>
        <?php 
        the_widget('WP_Widget_Recent_Posts',
        array(
            'title'=> 'Latest Posts'
            'number'=> 3
        )
        );
        ?>
    </div>
    </div>
</main>
</div>
</div>
<php get_footer(); ?>