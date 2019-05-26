<?php
/*
    Template Name: Gallery
*/

?>

<?php get_header();?>
<?php while ( have_posts() ) {
		the_post(); ?>
	<main>
        <section class="showcase-banner">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="main-title"><?php the_title();?></h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery">
            <div class="container">
                <div class="row">
				<?php
                            $args = array(
                                'post_type' => 'gallery',
                                'posts_per_page' => -1
                            );
                        
                            $galleryPost = new WP_Query($args);
                            while($galleryPost->have_posts()) {
                                $galleryPost->the_post();
                                
                        ?>
                    <div class="col col-4 mt-4">
                        <div class="gallery__item">
                            <a href="#">
                                <img src=<?php echo get_the_post_thumbnail_url(get_the_ID())?>" alt="Hyolmo dashain campaign">
                            </a>
                            <h3><a href="#"><?php the_title()?></a></h3>
                            <h5>2018 Causes</h5>
                        </div>
					</div>
					<?php
							}
							wp_reset_postdata();
					?>
                    <!-- <div class="col col-4 mt-4">
                        <div class="gallery__item">
                            <a href="#">
                                <img src="img/charity-bckg.jpg" alt="Hyolmo dashain campaign">
                            </a>
                            <h3><a href="#">Dashain Camp 2074</a></h3>
                            <h5>2018 Causes</h5>
                        </div>
                    </div>
                    <div class="col col-3 mt-4">
                        <div class="gallery__item">
                            <a href="#">
                                <img src="img/evts.jpg" alt="Hyolmo dashain campaign">
                            </a>
                            <h3><a href="#">Dashain Camp 2074</a></h3>
                            <h5>2018 Causes</h5>
                        </div>
                    </div>
                    <div class="col col-5">
                        <div class="gallery__item">
                            <a href="#">
                                <img src="img/evt.jpg" alt="Hyolmo dashain campaign">
                            </a>
                            <h3><a href="#">Dashain Camp 2074</a></h3>
                            <h5>2018 Causes</h5>
                        </div>
                    </div>
                    <div class="col col-5">
                        <div class="gallery__item">
                            <a href="#">
                                <img src="img/footer-bckg.jpg" alt="Hyolmo dashain campaign">
                            </a>
                            <h3><a href="#">Dashain Camp 2074</a></h3>
                            <h5>2018 Causes</h5>
                        </div>
                    </div>
                    <div class="col col-3 mt-4">
                        <div class="gallery__item">
                            <a href="#">
                                <img src="img/featured.jpg" alt="Hyolmo dashain campaign">
                            </a>
                            <h3><a href="#">Dashain Camp 2074</a></h3>
                            <h5>2018 Causes</h5>
                        </div>
                    </div>
                    <div class="col col-4 mt-4">
                        <div class="gallery__item">
                            <a href="#">
                                <img src="img/testimonials.jpg" alt="Hyolmo dashain campaign">
                            </a>
                            <h3><a href="#">Dashain Camp 2074</a></h3>
                            <h5>2018 Causes</h5>
                        </div>
                    </div>
                    <div class="col col-3 mt-4">
                        <div class="gallery__item">
                            <a href="#">
                                <img src="img/charity-bckg.jpg" alt="Hyolmo dashain campaign">
                            </a>
                            <h3><a href="#">Dashain Camp 2074</a></h3>
                            <h5>2018 Causes</h5>
                        </div>
                    </div>
                    <div class="col col-6">
                        <div class="gallery__item">
                            <a href="#">
                                <img src="img/charity-bckg.jpg" alt="Hyolmo dashain campaign">
                            </a>
                            <h3><a href="#">Dashain Camp 2074</a></h3>
                            <h5>2018 Causes</h5>
                        </div>
                    </div>
                    <div class="col col-3 mt-4">
                        <div class="gallery__item">
                            <a href="#">
                                <img src="img/charity-bckg.jpg" alt="Hyolmo dashain campaign">
                            </a>
                            <h3><a href="#">Dashain Camp 2074</a></h3>
                            <h5>2018 Causes</h5>
                        </div>
					</div> -->
					
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-primary">Load More</a>
                </div>
            </div>
        </section>
	</main>
	
<?php }?>
	
<?php get_footer();?>