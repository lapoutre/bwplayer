<h3><?php echo $article->getTitle(); ?></h3>
    <img src="/uploads/news/<?php echo $article->getPic(); ?>" style="float: left;" >
 <p><div class="content-body">   <?php echo $article->getBody(ESC_RAW); ?></div> </p><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo url_for('comment/form?id='.$article->getId()); ?>" class="post-comment" >Poster un commentaire</a><br><br><br>
<?php include_partial('news/comment', array('comments' => $comments)); ?>
<br>


