<?php

class Ps_1767_otp_verificationMobileotpModuleFrontController extends
ModuleFrontController
{

    public $auth = true;
    public $php_self = 'my-account';
    public $authRedirection = 'my-account';
    public $ssl = true;
	
	public function __construct()
	{
		parent::__construct();

	}
	public function init(){

       $this->bootstrap = true;
		   parent::init();
 
	}

	public function initContent(){

		parent::initContent();
		$this->setTemplate('module:ps_1767_otp_verification/views/templates/front/mobileotp.tpl');

        $er =$this->context->smarty->assign(array('key' => $this->context->cookie->key));
        // print_r($er);
        // exit();
        $this->setTemplate('customer/my-account');
    }



 public function postProcess()
    {

      if (Tools::isSubmit('save'))
      {
        //echo "hoh";
     $otpvalue = Tools::getValue('otpvalue');
 
   $SELECT = Db::getInstance()->getRow('SELECT * FROM `'._DB_PREFIX_.'ps_1767_otp_verification`  WHERE `otp`= "'.$otpvalue.'"');
// print_r($SELECT);
// echo $SELECT['otp'];
if (($SELECT['otp']==$otpvalue)) {

  //Tools::redirect('http://localhost/emailtemplate/module/ps_1767_otp_verification/task');
  //Tools::redirect('http://localhost/emailtemplate/en/my-account');
 $sql = 'UPDATE '._DB_PREFIX_.'ps_1767_otp_verification SET `otp`="
  " WHERE  WHERE `otp`= "'.$otpvalue.'"';
   $res =  Db::getInstance()->execute($sql);

}else {
  echo "not match OTP..";
}
      }

    }



}