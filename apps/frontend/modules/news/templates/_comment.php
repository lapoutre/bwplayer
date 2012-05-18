<div class="comment">
<?php foreach ($comments as $i => $comment) : ?>
  <?php if($comment->getIsApproved()): ?>
  _______________________________________________________<br>
  <?php echo $comment->getNick(); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <?php echo $comment->getCreatedAt(); ?><br><br>
  <?php echo $comment->getMessage(); ?><br>
 <?php endif; ?>
<?php endforeach; ?>
</div>


