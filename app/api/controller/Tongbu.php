<?php
namespace app\api\controller;

use app\BaseController;
use \think\facade\Db;

class Tongbu extends BaseController
{
    public function fabu()
    {
        // $tuijian$
        // $beiyong$
        // $xiazaiapp$
        // $youxiang$
        // $yongjiu$
        // $fabu$
        $onlineemail = sysconfig('site', 'onlineemail');
        $foreverurl = sysconfig('site', 'foreverurl');
        $tuijianurl = sysconfig('site', 'tuijianurl');
        $beiyongurl = sysconfig('site', 'beiyongurl');
        $downloadapp = sysconfig('site', 'downloadapp');
        
        $fabu = str_replace('chaxun','fb',$foreverurl);
        
        $from_file_name = "fabu/index.txt";
        $from_chaxunfile_name = "chaxun/index.txt";
        
        $to_file_name = "fabu/index.html";
        $to_chaxunfile_name = "chaxun/index.html";
        
        $fabuhtml = file_get_contents($from_file_name);
        $search = array("@@tuijian@@","@@beiyong@@","@@xiazaiapp@@","@@youxiang@@","@@yongjiu@@");
        $replace = array($tuijianurl,$beiyongurl,$downloadapp,$onlineemail,$foreverurl);
        $fabuhtml = str_replace($search, $replace, $fabuhtml);
        file_put_contents($to_file_name,$fabuhtml);
        
        
        $chaxunhtml = file_get_contents($from_chaxunfile_name);
        $search = array("@@fabu@@","@@youxiang@@","@@yongjiu@@");
        $replace = array($fabu,$onlineemail,$foreverurl);
        $chaxunhtml = str_replace($search, $replace, $chaxunhtml);
        file_put_contents($to_chaxunfile_name,$chaxunhtml);
        var_dump($replace);
    }
    
    public function fan()
    {
        $res = Db::execute("UPDATE ea_mall_videos SET sort = FLOOR(RAND() * 4000);");
        var_dump($res);
    }

}