<?php include "partials/header.php"; ?>
<section id="detalle" class="pad-top-50 pad-bot-100">
	<div class="container position-relative bg-white">
    <div class="row font2">
			<div class="col-md-6 text-uppercase">
				<h2 class="divider"><?php echo get_the_title(); ?></h2>
			</div>
			<div class="col-md-6 font2 text-right">
				<a class="dark-background hvr-grow" href="<?php echo get_site_url(); ?>/novedades">ver todas las novedades</a>
			</div>
    </div>
    <div class="row mar-bot-30">
      <div id="galeria" class="col-md-6 hvr-grow">
        <div class="background" style="background-image: url(<?php echo get_field('imagen_destacada'); ?>)"></div>
      </div>
      <div class="col-md-6">
        <?php echo get_field("descripcion"); ?>

        <?php if ( have_rows("links_prensa") ) : 
          
							while ( have_rows('links_prensa') ) : the_row(); ?>

                <a class="dark-color pink-background d-inline-block mar-top-15 hvr-grow" href="<?php echo get_sub_field('link_prensa'); ?>" target="_blank">
                  <i class="hvr-grow fas fa-newspaper"></i> Ver nota de prensa
                </a>

        <?php 
              endwhile;
          endif;
        ?>
        
      </div>
    </div>
	</div>
</section>
<?php include "partials/novedades.php"; ?>
<?php include "partials/footer.php"; ?>
