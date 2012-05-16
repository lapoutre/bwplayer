<?php foreach ($news as $i => $n) : ?>
      <?php include_partial('news/news', array('article' => $n)); ?>
<?php endforeach; ?>