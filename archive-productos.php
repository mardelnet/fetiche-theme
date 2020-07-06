<?php include "partials/header.php";
$args = array(
  'post_type'   => 'productos',
  'post_status' => 'publish',
);
$prod = new WP_Query( $args );
?>
<?php include "partials/archivo-productos.php"; ?>
<?php include "partials/footer.php"; ?>
