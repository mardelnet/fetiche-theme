<?php if ( !is_page_template() == "Novedades" ) { $noticias = wp_get_recent_posts(4); } ?>
<section id="noticias" class="pink-background logo-divider position-relative pad-bot-100 pad-top-100">
	<div class="container">
    <div class="row">
      <div class="col-md-6 font2 text-uppercase">
				<h2 class="divider">últimas novedades</h2>
			</div>
			<div class="col-md-6 font2 font2 text-right">
				<?php if ( !is_page_template() == "Novedades" ) : ?>
					<a class="dark-background hvr-grow" href="<?php echo get_site_url(); ?>/novedades">ver todas las novedades</a>
				<?php endif; ?>
			</div>
      <?php $i=0; foreach( $noticias as $noticia ) : ?>
        <div class="col-md-3 hvr-grow <?php if ( is_page_template() == "Novedades" ) : ?>mar-bot-50<?php endif; ?>">
          <div class="background position-relative" style="background-image: url(<?php echo get_field('imagen_destacada',$noticia['ID']); ?>)">
            <a class="font2 position-absolute" target="_self" href="<?php echo get_permalink($noticia['ID']); ?>"></a>
          </div>
          <h4 class="font2 mar-bot-15">
            <a class="dark-color font2" target="_self" href="<?php echo get_permalink($noticia['ID']); ?>">
              <?php echo get_the_title( $noticia['ID'] ); ?>
            </a>
          </h4>
          <p>
            <strong><?php echo get_field( "fecha",$noticia['ID'] ); ?></strong> /
						<?php echo substr( get_field('descripcion',$noticia['ID']), 0, 150 ); ?>...<br>
            <a class="dark-background font2" target="_self" href="<?php echo get_permalink($noticia['ID']); ?>">
  						leer más...
  					</a>
          </p>
        </div>
      <?php $i++; endforeach; ?>
    </div>
	</div>
</section>
