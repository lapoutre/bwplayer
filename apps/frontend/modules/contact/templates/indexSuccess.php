<form id="form_contact" method="post" action="<?php echo url_for('@contact?id=1') ?>" style="text-align: center">
  <?php echo $form->renderHiddenFields(false) ?>
  your email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $form['email']->render(array()) ?><br><br><br><br>
  message:&nbsp;&nbsp;<?php echo $form['message']->render(array('style' => 'width:867px', 'rows' => '10')) ?><br>
  <input type="submit" value="Send">
</form>