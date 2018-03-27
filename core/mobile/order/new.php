<?php
if (!(defined('IN_IA')))
{
    exit('Access Denied');
}
class New_EweiShopV2Page extends MobileLoginPage
{
    public function main()
    {
        include $this->template();
    }
}