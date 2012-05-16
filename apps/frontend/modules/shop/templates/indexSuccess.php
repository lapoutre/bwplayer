<div id="ul_family">
  <ul id="list-family">
    <?php foreach ($products as $i => $p) : ?>
      <?php include_partial('shop/shop', array('product' => $p)); ?>
    <?php endforeach; ?>
  </ul>
</div>