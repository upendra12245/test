<?php

class Ps_1767_otp_verificationMobile_otpModuleFrontController extends
ModuleFrontController
{


    public $ssl = true;
    public $php_self = 'authentication';
    public $auth = false;


	
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
	     $this->setTemplate('module:ps_1767_otp_verification/views/templates/front/mobile.tpl');
      // echo "vfh";
	
	}

 public function postProcess(){
      $should_redirect = false;

      if (Tools::isSubmit('save')){
      $mobile=Tools::getValue('mobile');
      $login_form = Tools::getValue('mobile');

$res = Db::getInstance()->insert('ps_1767_otp_verification', array(
          'mobile'      => pSQL($mobile),
          'otp'      => pSQL($otp),
      ));
 
if ($res > 0 ) {
   $should_redirect = true;
    $er =  $this->context->smarty->assign([
                'login_form' => $login_form->getProxy(),
            ]);
         print_r($er);
}

         

        
            //$this->setTemplate('customer/authentication');
           Tools::redirect('http://localhost/emailtemplate/module/ps_1767_otp_verification/mobileotp');

echo "lkgvje";

// $api_key = 'Fl7tSUnh2aWBTNimk0o3OcGbAxwrfsKReCjLpPYuHvE41zDgdqPbgwto4Tz5eEy3qjVHRDhxfZ1OYJMG';
// 	$otp = rand('1111', '9999');
// $msg = 'Your OTP is '. $otp;
// $fields = array(
//     "message" => $msg,
//     "language" => "english",
//     "route" => "q",
//     "numbers" => $mobile,
// );

// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_SSL_VERIFYHOST => 0,
//   CURLOPT_SSL_VERIFYPEER => 0,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "POST",
//   CURLOPT_POSTFIELDS => json_encode($fields),
//   CURLOPT_HTTPHEADER => array(
//     "authorization: $api_key",
//     "accept: */*",
//     "cache-control: no-cache",
//     "content-type: application/json"
//   ),
// ));

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

//  Db::getInstance()->insert('ps_1767_otp_verification', array(
//           'mobile'      => pSQL($mobile),
//           'otp'      => pSQL($otp),
//       ));
 

// if ($err) {
//   //echo "cURL Error #:" . $err;
// } else {
//  // echo $response;
//      $should_redirect = true;
//       $this->context->smarty->assign([
//                 'login_form' => $login_form->getProxy(),
//             ]);

// 	Tools::redirect('http://localhost/emailtemplate/module/ps_1767_otp_verification/mobileotp');

 
//  }


      }
    }



}