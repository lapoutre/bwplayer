<h3><?php echo $article->getTitle(); ?></h3>
    <img src="/uploads/news/<?php echo $article->getPic(); ?>" style="float: left;" >
 <p><div class="content-body">   <?php echo $article->getBody(ESC_RAW); ?></div> </p>
<?php include_partial('news/comment', array('comments' => $comments)); ?>
<br>
<a href="<?php echo url_for('comment/form?id='.$article->getId()); ?>" class="post-comment">Poster un commentaire</a>

