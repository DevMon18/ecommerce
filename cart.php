<?php
ob_start();
// include header.php file
include('header.php');
?>

<?php

/*  include cart items if it is not empty */
count($product->getData('cart')) ? include('libs/_cart-template.php') : include('libs/_cart-notFound.php');
/*  include cart items if it is not empty */

/*  include top sale section */
include('libs/_new-phones.php');
/*  include top sale section */

?>

<?php
// include footer.php file
include('footer.php');
?>
