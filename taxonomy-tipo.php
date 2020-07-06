<?php include "partials/header.php";
$args = array(
  'post_type'   => 'productos',
  'post_status' => 'publish',
	'tax_query' => array(
      array(
        'taxonomy' => 'tipo',
        'field' => 'slug',
        'terms' => get_queried_object()->slug
      )
   )
);
$prod = new WP_Query( $args );
?>
<?php include "partials/archivo-productos.php"; ?>
<?php include "partials/footer.php"; ?>
