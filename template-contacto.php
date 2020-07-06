<?php // Template Name: Contacto ?>
<?php include "partials/header.php"; ?>
<section id="contacto" class="pad-top-50">
	<div class="container position-relative bg-white">
    <div class="row">
			<div class="col-md-12">
				<h2 class="font2 text-uppercase divider"><?php echo get_the_title(); ?></h2>
			</div>
    </div>
		<div class="row pad-bot-100">
			<div class="col-md-4">
				<strong>Ubicación:</strong><br> <?php echo get_field('domicilio','options') ?>, Mar del Plata<br><br>
				<strong>Whatsapp:</strong><br> <?php echo get_field('telefono','options') ?><br><br>
				<strong>Email:</strong><br> <a class="dark-color" href="mailto:<?php echo get_field('email','options') ?>" target="_blank"><?php echo get_field('email','options') ?></a><hr>
				Seguinos en Facebook, <a class="dark-color" href="<?php echo get_field('facebook','options') ?>" target="_blank"><strong>hacé clic acá</strong></a><br>
				Seguinos en Twitter, <a class="dark-color" href="<?php echo get_field('twitter','options') ?>" target="_blank"><strong>hacé clic acá</strong></a><br>
				Seguinos en Instagram, <a class="dark-color" href="<?php echo get_field('instagram','options') ?>" target="_blank"><strong>hacé clic acá</strong></a><hr>
				¿Queŕes comprar online? <a class="dark-color" href="<?php echo get_field('shop','options') ?>" target="_blank"><strong>Visitá la tienda</strong></a><br>
			</div>
			<div class="col-md-4">
				<iframe src="https://www.google.com/maps?q=<?php echo get_field('domicilio','options') ?>, Mar del Plata, Argentina&output=embed"></iframe>
			</div>
			<div class="col-md-4">
				<?php echo do_shortcode( '[contact-form-7 id="50" title="Contact form 1"]' ); ?>
			</div>
    </div>
    <?php include "partials/membresia.php"; ?>
	</div>
</section>
<?php include "partials/redes.php"; ?>
<?php include "partials/footer.php"; ?>
