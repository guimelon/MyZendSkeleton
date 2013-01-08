<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
//use ScnSocialAuth\Controller;

class TestController extends AbstractActionController
{
    public function indexAction()
    {
        
    	/*if ($this->zfcUserAuthentication()->hasIdentity()) {
    		//get the email of the user
    		echo $this->zfcUserAuthentication()->getIdentity()->getEmail();
    		//get the user_id of the user
    		echo $this->zfcUserAuthentication()->getIdentity()->getId();
    		//get the username of the user
    		echo $this->zfcUserAuthentication()->getIdentity()->getUsername();
    		//get the display name of the user
    		echo $this->zfcUserAuthentication()->getIdentity()->getDisplayname();
    	}
    	else{
    			
    	}
    	
    	return new ViewModel();
        
        */
       
    	if (!$this->zfcUserAuthentication()->hasIdentity()) {
    		return $this->redirect()->toRoute('zfcuser/login');
    	}
    	return new ViewModel();
    }
}
