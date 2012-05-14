<div id="family_obj">
  <li>
    <h3><?php echo $family->getName(); ?></h3>
    <img src="/uploads/family/<?php echo $family->getPic(); ?>" >
    <?php echo link_to('Voir le family', "family_show", $family) ?>
  </li>
</div>