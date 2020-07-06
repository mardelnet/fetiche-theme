<section id="sextoys" class="pad-top-100 pad-bot-150">
	<div class="container position-relative bg-white">
    <div class="row">
			<div class="col-md-12 font2 text-uppercase">
				<?php if ( is_tax() ) : ?>
					<h2 class="divider"><?php echo get_queried_object()->name; ?></h2>
				<?php else : ?>
					<h2 class="divider">catálogo de sex toys</h2>
				<?php endif; ?>
			</div>
    </div>
    <div class="row mar-bot-30">
      <div class="col-md-9">
        <div class="row">
          <?php if( $prod->have_posts() ) : while( $prod->have_posts() ) : $prod->the_post(); ?>
            <?php include 'loop-productos.php'; ?>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="col-md-3">
				<?php if ( is_tax() ) : ?>
					<div class="categorias">
						<h3 class="mar-bot-30">SubCategorías</h3>
						<?php $subacts = get_terms(['taxonomy' => get_queried_object()->taxonomy, 'parent' => get_queried_object_id(),]); ?>
						<?php foreach ( $subacts as $subact) : ?>
							<a href="<?php echo get_term_link( $subact ); ?>" class="dark-color hvr-grow" target="_self">
								<?php echo $subact->name; ?>
							</a>
						<?php endforeach; ?>
					</div>
				<?php else : ?>
					<div class="categorias">
		        <h3 class="mar-bot-30">Categorías</h3>
		        <?php foreach ($terms as $term) : ?>
		        <a class="dark-color hvr-grow" target="_self" href="<?php echo get_site_url(); ?>/categoria-producto/<?php echo $term->slug ?>">
		          <?php echo ($term->name); ?>
		        </a>
		          <?php if ( empty( $term->children ) == false ) : ?>
		            <?php foreach ($term->children as $children) : ?>
		              <br> -
		              <a class="dark-color hvr-grow" target="_self" href="<?php echo get_site_url(); ?>/categoria-producto/<?php echo $children->slug ?>">
		                <?php echo $children->name; ?>
		              </a>
		            <?php endforeach; ?>
		          <?php endif; ?><br>
        	<?php endforeach; ?>
					</div>
				<?php endif; ?>
      </div>
    </div>
    <?php include "membresia.php"; ?>
	</div>
</section>
