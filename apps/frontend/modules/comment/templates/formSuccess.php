Poster un commentaire :<br>
<form id="form_contact" method="post" action="<?php echo url_for('comment/form?id='.$news_id) ?>" style="text-align: center">
  <?php echo $form->renderHiddenFields(false) ?>
  Your nickname:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $form['nick']->render(array()) ?><br><br><br><br>
  Message:&nbsp;&nbsp;<?php echo $form['message']->render(array('style' => 'width:867px', 'rows' => '10')) ?><br>
  <input type="submit" value="Poster le commentaire !">
</form>