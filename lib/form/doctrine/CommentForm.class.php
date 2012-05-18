<?php

/**
 * Comment form.
 *
 * @package    bwrecords
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CommentForm extends BaseCommentForm
{
  public function configure()
  {
      
      unset(
      $this['created_at'], $this['updated_at'], $this['is_approved'], $this['Article_id'], $this['slug']
    );
  }
  
  public function save($news_id = null){
      $values = $this->getValues();
      
      $comment = new Comment();
      $comment->setIsApproved(false);
      $comment->setNick($values["nick"]);
      $comment->setMessage($values["message"]);
      $comment->setArticleId($news_id);
      
      
      $comment->save();
  }
}
