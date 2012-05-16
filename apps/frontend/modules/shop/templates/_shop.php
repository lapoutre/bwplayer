<div id="family_obj">
  <li>
    <h3><?php //echo $family->getName(); ?><?php echo link_to($product->getName(), "shop_show", $product, array('style' => 'text-decoration: none;color: black;')) ?></h3>
<!--    <img src="/uploads/family/<?php //echo $family->getPic(); ?>" >-->
    <?php echo link_to('<img src="/uploads/shop/'.$product->getPic().'">', "shop_show", $product) ?>
    <?php // echo link ?>
  </li>
</div>