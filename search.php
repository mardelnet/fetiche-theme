<?php include "partials/header.php";?>
<section id="sextoys" class="pad-top-100 pad-bot-150">
	<div class="container position-relative bg-white">
    <div class="row">
			<div class="col-md-12 font2 text-uppercase">
				<h2 class="divider">resultados de la búsqueda: <?php the_search_query(); ?></h2>
			</div>
    </div>
    <div class="row mar-bot-30">
      <div class="col-md-12">
        <div class="row">
          <?php if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
            <?php include 'partials/loop-productos.php'; ?>
          <?php endwhile; ?>
					<?php else : ?>
						<div class="col-md-12">No se han obtenido resultados.</div>
					<?php endif; ?>
        </div>
      </div>
    </div>
    <?php include "partials/membresia.php"; ?>
	</div>
</section>
<?php include "partials/footer.php"; ?>
