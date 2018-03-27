<?php
class Payqrcode_EweiShopV2Page extends PluginMobilePage
{
    public function main()
    {
        global $_W;
        global $_GPC;
        //$url = mobileUrl('goods/detail', array('id' => 1, 'mid' => 1), true);
        //$qrcode = m('qrcode')->createQrcode($url);
        include $this->template();
    }
}
?>