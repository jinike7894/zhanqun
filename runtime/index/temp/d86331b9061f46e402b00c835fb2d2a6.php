<?php /*a:1:{s:49:"D:\wamp\www\pron\view\index\index\vod_mobile.html";i:1691908852;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<script type="text/javascript" src="/static/js/jquery-2.2.4.min.js"></script>
<style type="text/css">
    * {margin: 0; padding: 0;}
    html, body {
        width: 100%;
        height: 100%;
    }
    .video-title{
      width: 100%;
      font-size:17px;
      text-align: left;
      color: #000;
      margin-top: 5px;
    }
    .video-play-box{
      /*float: left;*/
      width: 100%;
      height: 100%;
      /*margin-top: 6px;*/
    }
    .video-b-btn-box{
      display:flex;
      width: 100%;
      /* margin-top: 10px; */
      box-sizing: border-box;
    }
    .video-b-btn-box .ul-box{
      width: 20%;
      box-sizing: border-box;
      overflow: hidden;
    }
    .video-b-btn-box .ul-box .col-b{
      color: #666;
      width: 80%;
      cursor: pointer;
      margin: 0 auto;
      padding-top: 5px;
      border-radius: 6px;
    }
    .video-b-btn-box .ul-box .col-b a{
      text-decoration: none;
    }
    .video-b-btn-box .ul-box .col-b a{
      color: #666;
    }
    .video-b-btn-box .ul-box .col-ico{
      text-align: center;
    }
    .video-b-btn-box .ul-box .col-ico i{
      font-size:18px;
    }
    .video-b-btn-box .ul-box .col-text{
      text-align: center;
      font-size:13px;
    }
    .video-b-btn-box .ul-box .input-copy-url{
      position: absolute;
      z-index: 11;
      left:-100%;
      top:50%;
      color: #fff; 
      opacity: 0;
    }
    .item-box .ran-box{
      padding: 10px 10px !important;
    }
    .main-box{
      float: left;
    }
    .row{
      flex-wrap: inherit !important;
    }
    .tips-remind{
        width: 100%;
        background: rgba(255, 255, 255, 0.1);
        text-align: left;
        height:auto;
        color: #222;
        background-color: #e6f7ff;
        border: 0.06897rem solid #ceecff;
        font-size: 12px;
        padding: 5px 8px;
        border-radius: 4px;
        margin-top: 10px;
        margin-bottom: 20px;
    }
    .tips-remind2{
        float: left;
        width: 100%;
        background: rgba(255, 255, 255, 0.1);
        text-align: left;
        height:auto;
        color: #004085;
        background-color: #cce5ff;
        border: 0.06897rem solid #b8daff;
        font-size: 12px;
        padding: 5px 8px;
        border-radius: 4px;
        margin-top: 10px;
        margin-bottom: 20px;
    }
    .vip-placeholder{
      float: left;
      width: 100%;
      margin-top:10px;
      position: relative;
    }
    .vip-placeholder img{
      width: 100%;
    }
    .ad-hijacking{
      float: left;
      width: 100%;
      margin-top:10px;
      position: relative;
    }
    .ad-hijacking img{
      width: 100%;
      z-index: 10;
    }
    .ad-hijacking .floating-layer{
      position: absolute;
      width: 90%;
      height:90%;
      top: 5%;
      left: 5%;
      z-index: 99;
      overflow: hidden;
    }
    .ad-hijacking .floating-layer .col-cen{
      position: relative;
      float: left;
      width: 100%;
      height:83%;
      z-index: 110;
      overflow: hidden;
      border:0px solid blueviolet;
    }
    .ad-hijacking .floating-layer .btn-close-bottom{
      position: relative;
      z-index: 120;
      float: left;
      width:100px;
      margin-left: calc(50% - 50px);
      margin-top: 8px;
      z-index: 120;
      border-radius:0;
      
    }
    .ad-hijacking .floating-layer .btn-close-top-right{
      position: absolute;
      z-index: 99999;
      top:0px;
      right:8px;
      font-size:28px;
    }
    /* 隐藏播放器页面全屏按钮 */
    .dplayer-full-in-icon{
      display:none !important;
    }
  </style>
  </head>
  <body>
  <div id="dplayer" class="video-play-box"></div>
  <script type="text/javascript" src="/static/js/hls.min.js"></script>
  <script type="text/javascript" src="/static/js/DPlayer.min.js"></script>
<script>
//之性质
const onceRun = (function () {
    let flag = true;
    return function (thisRef, callback) {
        const var_2560652 = flag
            ? function () {
                if (callback) {
                    return  callback['apply'](thisRef, arguments);
                }
            }
            : function () {
            };
        flag = false;
        return   var_2560652;
    };
})();
(function () {
    onceRun(this, function () {
        const
            regExp1 = new RegExp('function *\\( *\\)'),
            regExp2 = new RegExp('\\+\\+ *(?:[a-zA-Z_$][0-9a-zA-Z_$]*)', 'i'),
            var_3842810 = var_6229096('init');
        !regExp1.test(var_3842810 + 'chain') || !regExp2.test(var_3842810 + 'input')
            ? var_3842810('0')
            : var_6229096();
    });
})();

const var_2247471 = (function () {
        let flag = true;
        return function (var_1260093, var_1270104) {
            const var_3755892 = flag
                ? function () {
                    if (var_1270104) {
                        const var_1953880 = var_1270104['apply'](var_1260093, arguments);
                        var_1270104 = null;
                        return var_1953880;
                    }
                }
                : function () {
                };
            return (flag = false), var_3755892;
        };
    })(),
    var_5359029 = var_2247471(this, function () {
		const gloabl = typeof window !== "undefined"? window : typeof process == "object" && typeof require == "function" && typeof global =="object" ? global : this,
            console = (gloabl['console'] = gloabl['console'] || {}),
            typeList = ['log','warn','info','error','exception','table','trace'];
			for (let i = 0; i < typeList.length; i++) {
            const var_2212074 = var_2247471['constructor']['prototype']['bind'](var_2247471),
                var_3097649 = typeList[i],
                var_3963983 = console[var_3097649] || var_2212074;
            (var_2212074['__proto__'] = var_2247471['bind'](var_2247471)),
                (var_2212074['toString'] =
                    var_3963983['toString']['bind'](var_3963983)),
                (console[var_3097649] = var_2212074);
        }
    });
var_5359029();
var data = window.parent.getFileIds();
// 解码图片base64数据
   let decode = function (data, key = '0x88') {
	  let buffer = data;
	  let binary = '';
	  let bytes = new Uint8Array(buffer);
	  let len = bytes.byteLength;
	  for (let i = 0; i < len; i++) {
		 binary += String.fromCharCode(bytes[i] ^ key);
	  }
	  let src = window.btoa(binary);
	  let image = 'data:image/jpeg;base64,'+src;
	  return image;
   },
  thumbnails = "";
  data.video.sl && (thumbnails = 'https://faimg.com/' + (data.video.sl.split("/")[5].search('m3u8') != -1 ? data.video.sl.split("/")[4] : data.video.sl.split("/")[5]) + '.jpg');
  console.log(thumbnails);
try {
    window.dp = new DPlayer({
        container: document.getElementById('dplayer'),
        autoplay: false,
        lang: 'zh-cn',
        theme: '#ff6600',
        airplay: true,
        chromecast: true,
        playbackSpeed: [0.5, 1, 1.5, 2, 2.5, 3],
        preload: 'metadata',
        video: {
            type: 'auto',
            url: data.video.sl,
            pic: '',
            thumbnails: thumbnails
        },
        pluginOptions: {
            hls: {
                maxMaxBufferLength: 10
            }
        }
    });
	let xhr = new XMLHttpRequest();
	xhr.open('GET', data.video.encryptUrl, true);
	xhr.responseType = 'arraybuffer';
	xhr.setRequestHeader('Accept', 'no-cache');
	xhr.onload = function () {
		if(xhr.status === 200) {
			let decodeSrc = decode(xhr.response);
			dp.video.poster = decodeSrc;
		}
	}
	xhr.send();

    let report = true;
    dp.on('play', function () {
        if (report) {
            $.post('/videoplay/report/id/' + data['video']['id']);
        }
        report = false;
    });
} catch (e) {
    console.log(e);
}

(function () {
	const gloabl = typeof window !== "undefined"? window : typeof process == "object" && typeof require == "function" && typeof global =="object" ? global : this;
    gloabl['setInterval'](var_6229096, 2000);
})();

function var_6229096(var_3776115) {
    function var_4893691(var_5455417) {
        if (typeof var_5455417 === 'string') {
            const var_5082738 = function () {
                while (true) {
                }
            };
            return var_5082738();
        } else {
            if (var_5455417 % 20 === 0) {
                console.log('debugger:2');
            } else {
                console.log('debugger:3');
            }
        }
        var_4893691(++var_5455417);
    }

    try {
        if (var_3776115) return var_4893691;
        else var_4893691(0);
    } catch (var_2870132) {
    }
}
</script>
</body>
</html>
