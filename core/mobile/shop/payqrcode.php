<?php
if (!(defined('IN_IA')))
{
    exit('Access Denied');
}
class Payqrcode_EweiShopV2Page extends MobilePage
{
    public function main()
    {
        global $_W;
        global $_GPC;
        $url = mobileUrl('order/new', array('id' => 213, 'mid' => 97), true);
        $merchid = intval($_GPC['merchid']);
        $qrcode = m('qrcode')->createShopPayQrcode($url);
        include $this->template();
    }

}
