
<?php

class Ps_1767_otp_verification extends Module{
	

	public function __construct()
    {
        $this->name = 'ps_1767_otp_verification';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Verts';
        $this->need_instance = 1;
        $this->bootstrap = 1;
        parent::__construct();
        $this->displayName = $this->l('Otp Verification');
        $this->description = $this->l('This module is developed to otp verification.');
        $this->ps_versions_compliancy = array('min' => '1.7.6.0', 'max' => _PS_VERSION_);
       // $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

  }
  public function install()
        {
          include_once($this->local_path.'sql/install.php');
        	return parent:: install() && $this->registerHook('displayCustomerLoginFormAfter');
        }

 public function uninstall()
        {
          include_once($this->local_path.'sql/uninstall.php');
          if (!parent::uninstall())
            return false;
          return true;
        }


 public function getContent(){

   return $this->display(__FILE__,'views/templates/admin/configure.tpl');

 }


public function hookdisplayCustomerLoginFormAfter
() {

return $this->display(__FILE__, 'views/templates/front/button.tpl');

	//echo "bfognbhfgoi";

}
 public function getBreadcrumbLinks()
    {
        $breadcrumb = parent::getBreadcrumbLinks();
 print_r($breadcrumb);
        if (Tools::isSubmit('submitCreate') || Tools::isSubmit('create_account')) {
            $breadcrumb['links'][] = [
                'title' => $this->trans('Create an account', [], 'Shop.Theme.Customeraccount'),
                'url' => $this->context->link->getPageLink('authentication'),
            ];
        } else {
            $breadcrumb['links'][] = [
                'title' => $this->trans('Log in to your account', [], 'Shop.Theme.Customeraccount'),
                'url' => $this->context->link->getPageLink('authentication'),
            ];
        }

        return $breadcrumb;
    }

   
}