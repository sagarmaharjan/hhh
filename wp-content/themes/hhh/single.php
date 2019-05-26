<?php get_header()?>

<h1>This is from single.php</h1>

<?php 
    while(have_posts()) {
        the_post();
?>
<img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>" alt="">
<h3><?php the_title();?></h3>
<p><?php the_content();?></p>
<small><?php the_excerpt();?></small>
<?php comment_form()?>
<?php }?>

<?php get_footer()?>