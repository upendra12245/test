<?php

/**
 * 
 */
class Ps_1767_otp_verificationTaskModuleFrontController extends ModuleFrontController
{
	
	public function __construct()
	{

		 //$this->bootstrap = true;
		parent::__construct();

	}
	public function init(){

       $this->bootstrap = 1;
		parent::init();
 
	}

	public function initContent(){

		parent::initContent();
		//$this->setTemplate('opt.tpl');
      $this->setTemplate('module:ps_1767_otp_verification/views/templates/front/otp.tpl');
		//echo "klbfg";
  
      
	}
}