<?php include "partials/header.php"; ?>
<section id="arte" class="pad-top-50 pad-bot-50">
	<div class="container position-relative bg-white">
    <div class="row">
			<div class="col-md-6 font2 text-uppercase">
				<h2 class="font2 text-uppercase font-italic divider"><?php echo get_the_title(); ?></h2>
			</div>
			<div class="col-md-6 font2 font2 text-right">
				<a class="dark-background hvr-grow" href="<?php echo get_site_url(); ?>/arte">
					ver a todos los artistas
				</a>
			</div>
    </div>
    <div id="arte" class="row mar-bot-30">
      <?php $images = get_field('galeria_de_arte'); if( $images ): ?>
        <?php foreach( $images as $image ): ?>
					<div class="col-md-3 hvr-grow mar-bot-30">
	          <a data-fancybox="gallery" href="<?php echo $image['url']; ?>">
							<div class="background" style="background-image: url(<?php echo $image['url']; ?>)"></div>
						</a>
					</div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
	</div>
</section>
<?php include "partials/footer.php"; ?>
