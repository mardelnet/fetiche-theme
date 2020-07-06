<?php // Template Name: Arte Erótico ?>
<?php include "partials/header.php"; ?>
<section class="pad-top-50 pad-bot-150">
	<div class="container position-relative bg-white">
    <div class="row">
			<h2 class="font2 text-uppercase font-italic divider"><?php echo get_the_title(); ?></h2>
    </div>
    <div id="arte" class="row mar-bot-30">
      <?php $images = get_field('galeria_de_arte'); if( $images ): ?>
        <?php foreach( $images as $image ): ?>
					<div class="col-md-3 hvr-grow mar-bot-30">
	          <div class="background" style="background-image: url(<?php echo $image['url']; ?>)"></div>
					</div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <?php include "partials/membresia.php"; ?>
	</div>
</section>
<?php include "partials/novedades.php"; ?>
<?php include "partials/footer.php"; ?>
