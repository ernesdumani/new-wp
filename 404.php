<?php get_header();  ?>
<div id="content" class="site-content">
<main id="main" class="site-main">
    <div class="container">
        <header>
      <h1> page not found</h1>
        <p>unffortunatly the page u tried does not exist.</p>
    </header>
    <div class="error">
        <p>how about doing a search?</p>
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