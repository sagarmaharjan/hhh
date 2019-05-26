<?php get_header();?>

<h2>From index.php</h2>

<?php 
    while(have_posts()) {
        the_post();
?>
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>" alt="">
        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
        <p><?php the_content();?></p>

<?php
    }
?> 

<h2>This of Cause Post</h2>
<?php 

    $args = array(
        'post_type' => 'cause',
        'posts_per_page' => 1
    );

    $blogposts = new WP_Query($args);

    while($blogposts->have_posts()) {
        $blogposts->the_post();
        ?>
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>" alt="">
        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
        <p><?php the_content();?></p>

<?php
    }?>

<?php get_footer();?>