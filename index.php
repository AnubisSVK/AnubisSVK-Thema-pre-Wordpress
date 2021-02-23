<?php get_header(); ?>
<div class="container"><br>
<div class="row">
        <div class="col-lg-12">
        </div>
        <div class="col-xs-12 col-md-9" id="contentIsHere">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1><strong><?php the_title(); ?></strong></h1>
<hr>
<p style="color:white;"><?php the_content(__('(viac...)')); ?></p>

<?php endwhile; else: ?>

<p style="color:white;"><?php _e('Ľutujeme, vašim kritériám nezodpovedajú žiadne príspevky.'); ?></p>

<?php endif; ?>
</div>
<br>
<p>Posledná zmena: <?php the_time('F jS, Y') ?> o <?php the_time('G:i'); ?> </p>
<br>
</div>
<?php get_sidebar(); ?>
</div></div></div>
<?php get_footer(); ?>