<?php

use App\Product;
use App\ProductImage;

$productObj = new Product;
$productImageObj = new ProductImage;

require 'header.php';

?>

<script>
$(function() {
    $('.image-col').matchHeight();  /* make all columns the same height */
});
</script>

<div class="container no-padding-ever">
	<div class="page-title-container">
		<div class="col-sm-12">
		<i class="fa fa-picture-o"></i>
		<h1><?= $category_title ?></h1>		
		</div>
	</div>
</div>

<div class="container">

        <div class="row">
	
	<?php
	
	foreach( $productObj->getAllByCategory($category_id) as $product ){
	
	$row = $productImageObj->getRowByField('product_id', $product->id);
	
	?>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-30 image-col">
                <a class="thumbnail" href="<?= DOMAIN ?>/product/<?= $product->seo_url ?>">
                    <img class="img-responsive" src="<?= DOMAIN ?>/product-images/<?= $row->id ?>.<?= $row->ext ?>" alt="<?= $row->alt ?>">
                </a>
		
	<h4 class="text-center"><?= $product->title ?></h4>
		
            </div>
  
	<?php } ?>
  
        </div>


</div>


<?php require 'footer.php'; ?>