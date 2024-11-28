<?php
// 应用公共文件

use app\common\service\AuthService;
use think\facade\Cache;
use think\facade\Db;

if (!function_exists('__url')) {

    /**
     * 构建URL地址
     * @param string $url
     * @param array $vars
     * @param bool $suffix
     * @param bool $domain
     * @return string
     */
    function __url(string $url = '', array $vars = [], $suffix = true, $domain = false)
    {
        return url($url, $vars, $suffix, $domain)->build();
    }
}

if (!function_exists('password')) {

    /**
     * 密码加密算法
     * @param $value 需要加密的值
     * @param $type  加密类型，默认为md5 （md5, hash）
     * @return mixed
     */
    function password($value)
    {
        $value = sha1('blog_') . md5($value) . md5('_encrypt') . sha1($value);
        return sha1($value);
    }
}

if (!function_exists('xdebug')) {

    /**
     * debug调试
     * @deprecated 不建议使用，建议直接使用框架自带的log组件
     * @param string|array $data 打印信息
     * @param string $type 类型
     * @param string $suffix 文件后缀名
     * @param bool $force
     * @param null $file
     */
    function xdebug($data, $type = 'xdebug', $suffix = null, $force = false, $file = null)
    {
        !is_dir(runtime_path() . 'xdebug/') && mkdir(runtime_path() . 'xdebug/');
        if (is_null($file)) {
            $file = is_null($suffix) ? runtime_path() . 'xdebug/' . date('Ymd') . '.txt' : runtime_path() . 'xdebug/' . date('Ymd') . "_{$suffix}" . '.txt';
        }
        file_put_contents($file, "[" . date('Y-m-d H:i:s') . "] " . "========================= {$type} ===========================" . PHP_EOL, FILE_APPEND);
        $str = (is_string($data) ? $data : (is_array($data) || is_object($data)) ? print_r($data, true) : var_export($data, true)) . PHP_EOL;
        $force ? file_put_contents($file, $str) : file_put_contents($file, $str, FILE_APPEND);
    }
}

if (!function_exists('sysconfig')) {

    /**
     * 获取系统配置信息
     * @param $group
     * @param null $name
     * @return array|mixed
     */
    function sysconfig($group, $name = null)
    {
        $where = ['group' => $group];
        $value = empty($name) ? Cache::get("sysconfig_{$group}") : Cache::get("sysconfig_{$group}_{$name}");
        if (empty($value)) {
            if (!empty($name)) {
                $where['name'] = $name;
                $value = \app\admin\model\SystemConfig::where($where)->value('value');
                Cache::tag('sysconfig')->set("sysconfig_{$group}_{$name}", $value, 3600);
            } else {
                $value = \app\admin\model\SystemConfig::where($where)->column('value', 'name');
                Cache::tag('sysconfig')->set("sysconfig_{$group}", $value, 3600);
            }
        }
        return $value;
    }
}

if (!function_exists('array_format_key')) {

    /**
     * 二位数组重新组合数据
     * @param $array
     * @param $key
     * @return array
     */
    function array_format_key($array, $key)
    {
        $newArray = [];
        foreach ($array as $vo) {
            $newArray[$vo[$key]] = $vo;
        }
        return $newArray;
    }
}

if (!function_exists('auth')) {

    /**
     * auth权限验证
     * @param $node
     * @return bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    function auth($node = null)
    {
        $authService = new AuthService(session('admin.id'));
        $check = $authService->checkNode($node);
        return $check;
    }
}

if (!function_exists('ismobile')) {

    /**
     * 根据UA判断PC还是手机
     * @return bool
     */
    function ismobile()
    {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (preg_match('/iphone|ipod|ipad|android/i', $user_agent)) {
            return true;
        }
        return false;
    }
}
if (!function_exists('qqw')) {

    /**
     * 把数据除以1000
     * @return bool
     */
    function qqw($num)
    {
        $data = $num;
        if ($num >= 10000) {
            $data = round(intval($num) / 10000, 2) . 'w';
        }
        return $data;
    }
}


if (!function_exists('getIP')) {
    function getIP()
    {
        if (isset($_SERVER)) {
            if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $realip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
                $realip = $_SERVER['HTTP_CLIENT_IP'];
            } else {
                $realip = $_SERVER['REMOTE_ADDR'];
            }
        } else {
            if (getenv("HTTP_X_FORWARDED_FOR")) {
                $realip = getenv("HTTP_X_FORWARDED_FOR");
            } elseif (getenv("HTTP_CLIENT_IP")) {
                $realip = getenv("HTTP_CLIENT_IP");
            } else {
                $realip = getenv("REMOTE_ADDR");
            }
        }
        return $realip;
    }
}



if (!function_exists('replaceVideoCdn')) {
    function replaceVideoCdn($oldPath, $configName): string
    {
        $url_parts = parse_url($oldPath);
        $path = isset($url_parts['path']) ? $url_parts['path'] : '';
        return sysconfig('site', $configName) . $path;
    }
}

if (!function_exists('replaceAdCdn')) {
    function replaceAdCdn($oldPath): string
    {
        $file_extension = pathinfo($oldPath, PATHINFO_EXTENSION);
        $newPath = preg_replace('/\.[^.]+$/', "_file." . $file_extension, $oldPath);

        $adCdnConfig = sysconfig('site', 'ad_cdn');
        if (empty($adCdnConfig)) {
            return $newPath;
        }
        $url_parts = parse_url($newPath);
        $path = isset($url_parts['path']) ? $url_parts['path'] : '';
        return sysconfig('site', 'ad_cdn') . $path;
    }
}

if (!function_exists('replaceManhuaCdn')) {
    function replaceManhuaCdn($oldPath): string
    {
        $file_extension = pathinfo($oldPath, PATHINFO_EXTENSION);
        $newPath = preg_replace('/\.[^.]+$/', "_file." . $file_extension, $oldPath);

        $adCdnConfig = sysconfig('site', 'manhua_img_cdn');
        if (empty($adCdnConfig)) {
            return $newPath;
        }
        $url_parts = parse_url($newPath);
        $path = isset($url_parts['path']) ? $url_parts['path'] : '';
        return sysconfig('site', 'manhua_img_cdn') . $path;
    }
}



if (!function_exists('mbConvert')) {
    function mbConvert($value)
    {
        if (is_array($value)) {
            $arr = [];
            foreach ($value as $key => &$item) {
                $unicode = unpack('n*', mb_convert_encoding($item, 'UTF-16BE', 'UTF-8'));
                $str = '';
                foreach ($unicode as $val) {
                    $str .= '&#' . $val . ';';
                }
                $arr[$key] = $str;
            }
            return $arr;
        }

        $unicode = unpack('n*', mb_convert_encoding($value, 'UTF-16BE', 'UTF-8'));
        $str = '';
        foreach ($unicode as $val) {
            $str .= '&#' . $val . ';';
        }
        return $str;
    }
}


if (!function_exists('qsj')) {
    function qsj($num)
    {
        $sjs = mt_rand(0, 99) + 1;
        if (($num >= 1 && $num <= 99 && $sjs >= 1 && $sjs <= $num) || $num >= 100) {
            return true;
        } else {
            return false;
        }
    }
}
//减去关闭得广告
function checkDisplayAd($site, $ad)
{
    if (!$ad) {
        return $ad;
    }
    $adres = Db::name("site")->where("id", $site)->find();
    $adres = json_decode($adres["display_show"], true);
    if ($adres) {
        foreach ($adres as $k => $v) {
            foreach ($ad as $ka => $va) {
                if ($va["id"] == $v) {
                    unset($ad[$ka]);
                }
            }
        }
    }

    return $ad;
}
//拼接站内广告得链接
function checkZhanneiAd($site, $ad, $channel)
{
    if (!$ad) {
        return $ad;
    }
    $siteres = Db::name("site")->where("id", $site)->find();
    $adres = json_decode($siteres["zhannei_settings"], true);
    if (!empty($adres)) {
        foreach ($ad as $ka => $va) {

            if ($va["url_type"] == 1) {
                foreach ($adres as $k => $v) {
                    if ($v["pid"] == $va["id"]) {

                        if ($v["site_id"] == $siteres["id"]) {
                            $ad[$ka]["androidurl"] = $siteres["domain"] . "/" . $channel . ".html";
                        }
                    }
                }
            }
        }
    }

    return $ad;
}
//字数显示
function fontsize($string)
{
    $substring = mb_substr($string, 0, 40, 'UTF-8') . "....";
    return $substring;
}
function fontsize2($string)
{
    $substring = mb_substr($string, 0, 5, 'UTF-8') . "....";
    return $substring;
}
function fontsize3($string)
{
    $substring = mb_substr($string, 0, 10, 'UTF-8') . "....";
    return $substring;
}
//获取小说的分类
function getNovelCate($id)
{
    $cate = Db::name("mall_novelcate")->where(["id" => $id])->find();
    return $cate["title"];
}
//获取图片得分类
function getImageCate($id)
{

    $cate = Db::name("mall_img_cate")->where(["id" => $id])->find();
    return $cate["title"];
}
function timesrand()
{
    return rand(1, 2);
}
//获取小说的章数
function novelNum($id)
{
    $num = Db::name("novel_catalogs")->where(["novel_id" => $id])->count();
    return $num;
}
//获取漫画得章数
function comicsNum($id)
{
    $num = Db::name("comic_catalogs")->where(["novel_id" => $id])->count();
    return $num;
}
//观看数 变k
function eyek($num)
{
    if ($num >= 1000) {
        return round($num / 1000, 1);
    }
    return (string)$num;
}
function eyew($num)
{
    if ($num >= 10000) {
        return round($num / 10000, 1);
    }
    return (string)$num;
}
//获取吃瓜的分类
function chiguaCate($id)
{
    $cate = Db::name("mall_chigua_cate")->where(["id" => $id])->find();
    return $cate["title"];
}
//获取站点名称
function siteName($id)
{
    $site = Db::name("site")->where(["id" => $id])->find();
    return $site["name"];
}
//日期转年月日
function dateToYmd($time)
{
    return date("Y 年 m 月 d 日", $time);
}
//获取图片分类前8得内容
function imageOrder($cate_id)
{
    $res = Db::name("mall_img")->where("cate_id", $cate_id)->order("eye desc")->limit(8)->select();
    $str = "";
    if ($res) {
        foreach ($res as $k => $v) {
            $str .= ' <div class="home_card_list">
                    <div class="home_card_left">
                        <div class="home_card_num" style="background: #D13E3E;">' . $k . '</div>
                        <div class="home_card_name">' . $v["title"] . '</div>
                    </div>
                    <div class="home_card_right">
                        <img src="/static/image/img/huo.png" class="home_card_huo">
                        <div class="home_card_name">' . $v["eye"] . '</div>
                    </div>
                </div>';
        }
    }
    return $str;
}
//获取图片第一个图片
function imagefirst($img)
{
    $array = explode(",", $img);
    return $array[0];
}
//获取广告得分类
function getAdCate($cate_id)
{
    $res = Db::name("pcategory")->where(["id" => $cate_id])->find();
    if ($res["title"]) {
        $res["title"] = getFirstSixChineseChars($res["title"]);
    }
    return $res["title"];
}

function getFirstSixChineseChars($string)
{
    // 判断字符串长度
    $length = mb_strlen($string, 'UTF-8');
    if ($length > 6) {
        // 截取前6个汉字
        return mb_substr($string, 0, 6, 'UTF-8');
    }
    return $string; // 如果字符串长度小于等于6，返回原字符串
}
//video去除前面的域名
function urlparse($url){
     $parsedUrl = parse_url($url, PHP_URL_PATH); // 输出结果 
     return  $parsedUrl;
}
//漫画小说picen
function mxUrl($pic){

    return mbConvert(replaceManhuaCdn($pic));
}