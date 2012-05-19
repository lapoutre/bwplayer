<h3><?php echo $product->getName(); ?></h3>
    <img src="/uploads/shop/<?php echo $product->getPic(); ?>" >
 <p>   <?php echo $product->getDescription(); ?> </p>
 <p>   Tracklist : <?php echo $product->getTracklist(); ?> </p>
 <p>   Date de sortie : <?php echo $product->getReleaseDate(); ?> </p>
 <p>   Lien Soundcloud<?php echo $product->getSoundcloud(); ?> </p>
 <p>   Prix : <?php echo $product->getPrix(); ?> </p>
