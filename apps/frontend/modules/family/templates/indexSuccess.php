FAMILY <br>
<div id="ul_family">
  <ul id="list-family">
    <?php foreach ($families as $i => $f) : ?>
      <?php include_partial('family/family', array('family' => $f)); ?>
    <?php endforeach; ?>
  </ul>
</div>