<?php if ( is_archive() ) {
  $col = 3;
}
else {
  $col = 2;
}
?>
<div class="col-md-<?php echo $col; ?> col-6 productos text-center hvr-grow mar-bot-30">
  <div class="background position-relative" style="background-image: url(<?php echo get_field('galeria')[0]['url']; ?>)">
    <a class="position-absolute" target="_self" href="<?php echo get_permalink(); ?>"></a>
  </div>
  <a class="dark-color" target="_self" href="<?php echo get_permalink(); ?>">
    <?php echo get_the_title(); ?>
  </a>
</div>
