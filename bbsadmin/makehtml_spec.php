<?php
/**
 * ����ר��
 *
 * @version        $Id: makehtml_spec.php 1 11:17 2010��7��19��Z tianya $
 * @package        kecheng8.Administrator
 * @copyright      Copyright (c) 2007 - 2010, kecheng8, Inc.
 * @license        http://help.kecheng8.com/usersguide/license.html
 * @link           http://www.kecheng8.com
 */
require_once(dirname(__FILE__)."/config.php");
CheckPurview('sys_MakeHtml');
$isremote = empty($isremote)? 0 : $isremote;
$serviterm = empty($serviterm)? "" : $serviterm;
if(empty($dopost)) $dopost = "";

if($dopost=="ok")
{
    require_once(DEDEINC."/arc.specview.class.php");
    if($cfg_remote_site=='Y' && $isremote=="1")
    {
        if($serviterm!="")
        {
            list($servurl,$servuser,$servpwd) = explode(',',$serviterm);
            $config=array( 'hostname' => $servurl, 'username' => $servuser,
                           'password' => $servpwd,'debug' => 'TRUE');
        } else {
            $config=array();
        }
        if(!$ftp->connect($config)) exit('Error:None FTP Connection!');
    }
    $sp = new SpecView();
    $rurl = $sp->MakeHtml($isremote);
    echo "�ɹ���������ר��HTML�б�<a href='$rurl' target='_blank'>Ԥ��</a>";
    exit();
}
include DedeInclude('templets/makehtml_spec.htm');