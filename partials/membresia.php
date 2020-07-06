<div id="membresia" class="container bg-dark position-relative background" style="background-image:url(<?php echo get_field( 'imagen_fondo' , 'options' ); ?>)">
  <div class="row">
    <div class="col-md-5 offset-1">
      <h3><?php echo get_field( "titulo" , "options" ); ?></h3>
      <p><?php echo get_field( "mensaje" , "options" ); ?></p>
    </div>
    <div class="col-md-5">
      <?php echo do_shortcode('[contact-form-7 id="123" title="Membresía"]') ?>
    </div>
  </div>
</div>
