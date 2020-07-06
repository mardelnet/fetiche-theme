<?php include "partials/header.php";
$args = array(
  'post_type'   => 'productos',
  'post_status' => 'publish',
	'posts_per_page' => -1,
  'meta_key'		=> 'inicio',
	'meta_value'	=> true
);
$prod = new WP_Query( $args );
?>
<section id="slider">
  <?php if( have_rows('slider_principal','options') ): while ( have_rows('slider_principal','options') ) : the_row(); ?>
	<div class="position-relative">
    <div class="overlay"></div>
		<div class="background position-absolute" style="background-image: url(<?php the_sub_field('imagen','options'); ?>)"></div>
    <h3 class="position-absolute typewriter font2 text-uppercase">
      <?php the_sub_field('texto','options'); ?>
    </h3>
    <h4 class="position-absolute font2 typewriter2">
      <?php the_sub_field('texto_secundario','options'); ?>
    </h4>
	</div>
  <?php endwhile; endif; ?>
</section>
<section id="sextoys" class="home bg-light">
	<div class="container pad-bot-100 position-relative bg-light">
    <div class="row">
			<div class="col-md-12 font2 text-uppercase">
				<h2 class="divider">sex toys destacados</h2>
			</div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div id="productos" class="productos">
          <?php if( $prod->have_posts() ) : while( $prod->have_posts() ) : $prod->the_post(); ?>
            <?php include 'partials/loop-productos.php'; ?>
          <?php endwhile; endif; ?>
				</div>
      </div>
      <div class="col-md-4 hvr-grow destacado">
        <div class="background position-relative"">
        <?php //echo get_field( 'imagen_destacada_1' , 'options' ); ?>
        <video src=" <?php echo get_field( 'imagen_destacada_1' , 'options' ); ?>" width="100%" height="100%" autoplay muted loop controls></video>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 d-none d-sm-block">
        <div id="productos2" class="productos" dir="rtl">
          <?php if( $prod->have_posts() ) : while( $prod->have_posts() ) : $prod->the_post(); ?>
            <?php include 'partials/loop-productos.php'; ?>
          <?php endwhile; endif; ?>
				</div>
      </div>
      <div class="col-md-4 hvr-grow destacado">
        <div class="background position-relative" style="background-image: url(<?php echo get_field( 'imagen_destacada_2' , 'options' ); ?>)">
          <a class="position-absolute" target="_self" href="<?php echo get_site_url() .'/categoria-producto/'. get_field( 'categoria_destacada_2' , 'options' )->slug; ?>" >
            <div class="overlay">
              <h3><?php echo get_field( 'categoria_destacada_2' , 'options' )->name; ?></h3>
            </div>
          </a>
        </div>
      </div>
		</div>
	</div>
</section>
<section id="nosotrxs" class="pad-top-100 pad-bot-100">
	<div class="container">
		<div class="row">
			<div class="col-md-12 font2 text-uppercase">
				<h2 class="divider">nosotrxs</h2>
			</div>
			<div class="col-md-5">
        <div id="galeria">
          <?php $images = get_field('galeria_fotos','options'); if( $images ): ?>
            <?php foreach( $images as $image ): ?>
              <div class="background" style="background-image: url(<?php echo $image['url']; ?>)"></div>
            <?php endforeach; ?>
          <?php endif; ?>
				</div>
			</div>
			<div class="col-md-7">
				<?php echo get_field('texto','options'); ?>
			</div>
		</div>
	</div>
</section>
<?php include "partials/membresia.php"; ?>
<?php include "partials/redes.php"; ?>
<?php include "partials/novedades.php"; ?>
<?php include "partials/footer.php"; ?>
