<div class="comment">
  <?php foreach ($comments as $i => $comment) : ?>
    <?php if ($comment->getIsApproved()): ?>
      <div id="comment_body">
        <span style="font-style: italic;color: #333333;">Posté par</span> <span id="nick_comment"><?php echo $comment->getNick(); ?></span>,  le <?php echo $comment->getCreatedAt(); ?><br>
        <p id="message_comment"><?php echo $comment->getMessage(); ?></p><br>
      </div><br>
    <?php endif; ?>
  <?php endforeach; ?>
</div>


