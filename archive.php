<?php // Template Name: Novedades ?>
<?php $noticias = wp_get_recent_posts(); ?>
<?php include "partials/header.php"; ?>
<section id="nosotrxs" class="pad-top-100 pad-bot-100">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
        <div id="galeria">
					<div class="background hvr-grow position-relative" style="background-image: url(<?php echo get_field('imagen_destacada',$noticias[0]['ID']); ?>)">
            <a class="font2 position-absolute" target="_self" href="<?php echo get_permalink($noticias[0]['ID']); ?>"></a>
          </div>
				</div>
			</div>
			<div class="col-md-7">
				<h4 class="font2">
					<a class="dark-color font2" target="_self" href="<?php echo get_permalink($noticia['ID']); ?>">
						<?php echo get_the_title( $noticias[0]['ID'] ); ?>
					</a>
				</h4><br>
        <strong><?php echo get_the_date( "d/m/y" , $noticias[0]['ID'] ); ?></strong> /
				<?php echo substr( get_field('descripcion',$noticias[0]['ID']), 0, 500 ); ?>...<br>
				<a class="dark-background font2" target="_self" href="<?php echo get_permalink($noticia['ID']); ?>">
					leer más...
				</a>
			</div>
		</div>
	</div>
</section>
<?php include "partials/novedades.php"; ?>
<?php include "partials/footer.php"; ?>
