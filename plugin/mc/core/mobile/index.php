<?php
class Index_EweiShopV2Page extends PluginMobilePage
{
	public function main()
	{
		global $_W;
		global $_GPC;
		include $this->template();
	}

       public function payqrcode() {
		global $_W;
		global $_GPC;
		$openid = $_W['openid'];
		$id = intval($_GPC['id']);
		$url = mobileUrl('order/new', array('id' => 213, 'mid' => 97), true);
		$qrcode = m('qrcode')->createQrcode($url);
                print_r($_W);
		include $this->template();
       }
}


?>
