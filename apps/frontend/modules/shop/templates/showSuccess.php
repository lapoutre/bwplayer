<?php use_helper('I18N'); ?>
<h3><?php echo $product->getName(); ?></h3>
<img src="/uploads/shop/<?php echo $product->getPic(); ?>" >
<p>   <?php echo $product->getDescription(); ?> </p><br>
<p>
<form method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="zoltan_1337805106_biz@gmail.com">
    <input type="hidden" name="item_name" value="<?php echo $product->getName(); ?>">
    <input type="hidden" name="currency_code" value="EUR">
    <input type="hidden" name="item_number" value="1">
    <input type="hidden" name="amount" value="<?php echo (float)$prix; ?>">
    <input type="hidden" name="shipping" value="0.00">
    <input type="hidden" name="return" value="">
    <input type="image" src="https://www.sandbox.paypal.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" width="68" height="23" alt="Effectuez vos paiements via PayPal : une solution rapide, gratuite et sécurisée">
</form>
</p>
