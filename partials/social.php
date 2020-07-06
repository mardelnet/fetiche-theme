<a class="dark-color" target="_blank" href="<?php echo get_field('facebook','options') ?>">
  <i class="hvr-grow fab fa-facebook"></i>
</a>
<a class="dark-color" target="_blank" href="<?php echo get_field('twitter','options') ?>">
  <i class="hvr-grow fab fa-twitter-square"></i>
</a>
<a class="dark-color" target="_blank" href="https://wa.me/+549<?php echo preg_replace('/[^0-9]/', '', get_field('telefono','options')); ?>">
  <i class="hvr-grow fab fa-whatsapp-square"></i>
</a>
<a class="dark-color" target="_blank" href="<?php echo get_field('instagram','options') ?>">
  <i class="hvr-grow fab fa-instagram"></i>
</a>
<a class="dark-color" target="_blank" href="mailto:<?php echo get_field('email','options') ?>">
  <i class="hvr-grow fas fa-envelope"></i>
</a>
<a class="dark-color" target="_blank" href="<?php echo get_field('shop','options') ?>">
  <i class="hvr-grow fas fa-cart-plus"></i>
</a>
