<?php

/* 
 * Hulk Class
 * Can only be created with an instance of BruceBanner
 * 
 * Can only 'smash' when constructed
 * Can be put to sleep with a 'lullaby'
 */

class Hulk
{
  public $reaction = false;
  
  /**
   * Cause a reaction and create the hulk
   * @param BruceBanner $bruceBanner - an instance of BruceBanner
   */
  public function __construct(BruceBanner $bruceBanner)
  {
    $this->reaction = true;
    $this->smash();
  }
  
  /**
   * Smash...
   */
  private function smash()
  {
    if($this->reaction)
    {
      echo 'smash';
    }
    else
    {
      echo 'derp';
    }
  }
  
  /**
   * Put the hulk to sleep
   */
  public function calm(PrettyGirl $prettyGirl)
  {
    $this->reaction = false;
    $this->__destruct();
  }
  
  /**
   * return to BruceBanner status
   * @return boolean
   */
  public function __destruct()
  {
    if($this->reaction)
    {
      return false;
    }
  }
}

