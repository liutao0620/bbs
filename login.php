<?php
/**
 * @version        $Id: login.php 1 8:38 2010��7��9��Z tianya $
 * @package        kecheng8.Member
 * @copyright      Copyright (c) 2007 - 2010, kecheng8, Inc.
 * @license        http://help.kecheng8.com/usersguide/license.html
 * @link           http://www.kecheng8.com
 */
require_once(dirname(__FILE__)."/config.php");
if($cfg_ml->IsLogin())
{
    ShowMsg('���Ѿ���½ϵͳ����������ע�ᣡ', 'index.php');
    exit();
}
require_once(dirname(__FILE__)."/templets/login.htm");