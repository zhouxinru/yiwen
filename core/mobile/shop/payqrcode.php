<?php
if (!(defined('IN_IA')))
{
    exit('Access Denied');
}
class Payqrcode_EweiShopV2Page extends MobilePage
{
    public function create()
    {
        global $_W;
        $url = mobileUrl('order/new', array('id' => 213, 'mid' => 97), true);
        $qrcode = m('qrcode')->createQrcode($url);
        include $this->template();
    }
}