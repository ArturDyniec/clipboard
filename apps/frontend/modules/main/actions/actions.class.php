<?php

/**
 * Main actions.
 *
 * @package    clipboard
 * @subpackage Main
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MainActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }
  public function executeShow(sfWebRequest $request)
  {

  }
  public function executeRegulamin(sfWebRequest $request)
  {

  }
  public function executeOserwisie(sfWebRequest $request)
  {

  }
  
}


