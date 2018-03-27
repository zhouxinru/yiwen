<?php
class Bind_scan_EweiShopV2Page extends PluginMobilePage
{
    public function main()
    {
        global $_W;
        global $_GPC;
        $token = $_GPC['token'];
        list($merchid, $uniacid, $rand) = explode('_', $token);

        if(md5($merchid.$uniacid.$rand) == $token) {
           pdo_update('ewei_shop_merch_user', array('bind_openid' => $_W['openid'], 'bind_nickname' => $_W['fans']['nickname']), array('uniacid' => $uniacid, 'merchid' => $merchid));
           $msg = "绑定成功";
        } else {
           $msg = "绑定失败";
        }
        include $this->template();
    }
}
?>