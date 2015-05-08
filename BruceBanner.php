<?php

/**
 * Bruce Banner class
 * Don't get him angry!
 */
require_once(dirname(__FILE__).'/Hulk.php');

class BruceBanner
{
  /**
   * Forces Bruce to get angry
   */
  public function codeGreen()
  {
    $this->getAngry();
  }
  
  /**
   * Don't get me angry...
   * You wouldn't like me when I'm angry...
   */
  public function getAngry()
  {
    new Hulk($this);    
  }
}