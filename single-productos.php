<?php include "partials/header.php";
$args = array(
  'post_type'   => 'productos',
  'post_status' => 'publish',
	'posts_per_page' => 6,
  'tax_query' => array(
      array(
        'taxonomy' => 'tipo',
        'field' => 'slug',
        'terms' => get_the_terms( $post->ID, 'tipo' )[0]->slug
      )
   )
);
$prod = new WP_Query( $args );
?>
<section id="detalle" class="pad-top-50 pad-bot-150">
	<div class="container position-relative bg-white">
    <div class="row">
			<div class="col-md-12">
        <a class="dark-color" target="_self" href="<?php echo get_site_url(); ?>">Inicio</a> >
        <a class="dark-color" target="_self" href="<?php echo get_site_url(); ?>/productos">Catálogo</a> >
        <a class="dark-color" target="_self" href="<?php echo get_site_url() . '/categoria-producto/' . get_the_terms( $post->ID, 'tipo' )[0]->slug; ?>">
          <?php echo get_the_terms( $post->ID, 'tipo' )[0]->name; ?>
        </a> >
        <?php echo get_the_title(); ?>
				<h2 class="font2 text-uppercase divider mar-top-15"><?php echo get_the_title(); ?></h2>
			</div>
    </div>
    <div class="row mar-bot-30">
      <div class="col-md-5">
        <div id="galeria">
          <?php $images = get_field('galeria'); if( $images ): ?>
            <?php foreach( $images as $image ): ?>
              <div class="background img-producto" style="background-image: url(<?php echo $image['url']; ?>)"></div>
            <?php endforeach; ?>
          <?php endif; ?>
				</div>
      </div>
      <div class="col-md-7">
        <p>
          <?php echo get_field("descripcion"); ?>
        </p>
        <?php if ( get_field("link_carro_compras") ) : ?>
        <a class="dark-color pink-background d-inline-block mar-top-15 hvr-grow" href="<?php echo get_field("link_carro_compras"); ?>" target="_blank">
          <i class="hvr-grow fas fa-cart-plus"></i> Comprar desde la tienda
        </a>
        <?php endif; ?>
      </div>
    </div>
    <?php include "partials/membresia.php"; ?>
	</div>
</section>
<?php if ($prod->post_count >= 4) : ?>
<section id="sextoys" class="pad-top-50 pad-bot-50 pink-background">
	<div class="container position-relative">
    <div class="row mar-bot-30">
			<div class="col-md-12 font2 text-uppercase">
				<h2 class="divider">mas artículos de <?php echo get_the_terms( $post->ID, 'tipo' )[0]->slug; ?></h2>
			</div>
      <?php if( $prod->have_posts() ) : while( $prod->have_posts() ) : $prod->the_post(); ?>
        <?php include 'partials/loop-productos.php'; ?>
      <?php endwhile; endif; ?>
    </div>
	</div>
</section>
<?php endif; ?>
<?php include "partials/footer.php"; ?>
