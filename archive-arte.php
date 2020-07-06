<?php include "partials/header.php";
$args = array(
  'post_type'   => 'arte',
  'post_status' => 'publish',
	'posts_per_page' => -1,
);
$arte = new WP_Query( $args ); if( $arte->have_posts() ) :
?>
<section id="archive_arte" class="pad-bot-100 pad-top-50">
	<div class="container">
		<div class="row">
			<div class="col-md-12 font2 text-uppercase">
				<h2 class="divider">arte erótico</h2>
			</div>
			<?php while( $arte->have_posts() ) : $arte->the_post(); ?>
        <div class="col-md-3 hvr-grow">
          <div class="background position-relative" style="background-image: url(<?php echo get_field('galeria_de_arte')[0]['url']; ?>)">
            <a class="font2 position-absolute" target="_self" href="<?php echo get_permalink(); ?>"></a>
          </div>
          <h4 class="font2">
            <a class="dark-color font2" target="_self" href="<?php echo get_permalink(); ?>">
              <?php echo get_the_title(  ); ?>
            </a>
          </h4>
          <p>
            <a class="dark-background font2" target="_self" href="<?php echo get_permalink(); ?>">
  						ver más...
  					</a>
          </p>
        </div>
      <?php endwhile; wp_reset_postdata(); endif; ?>
		</div>
	</div>
</section>
<?php include "partials/footer.php"; ?>
