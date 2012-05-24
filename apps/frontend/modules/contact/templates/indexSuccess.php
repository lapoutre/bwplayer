<form id="form_contact" method="post" action="<?php echo url_for('@contact?id=1') ?>" style="text-align: center">
  <?php echo $form->renderHiddenFields(false) ?>
  Votre email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $form['email']->render(array()) ?><br><br><br><br>
  Ce que vous cherchez &agrave; contacter:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $form['type_contact'] ?><br><br>
  message:&nbsp;&nbsp;<?php echo $form['message']->render(array('style' => 'width:867px', 'rows' => '10')) ?><br>
  <input type="submit" value="Send">
</form>