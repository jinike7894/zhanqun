//  $(document).ready(function () {
//         $('.ad').on('click', function() { 
//             var ad = $(this);
//             var data={}
//             //获取ua
//              data.ua= navigator.userAgent;
//             //获取channel
//              data.channel= ad.attr('data-channel');
//             //获取屏幕宽
//             data.width= $(window).width();
//             //获取屏幕高
//             data.height= $(window).height();
//             //获取屏幕尺寸随便来个尺寸
//             data.c= "261*253";
//             //获取type 直接等于download
//             data.type= "download";
//             //获取广告id
//             data.id= ad.attr('data-id');
//             //获取站点id
//             data.site= ad.attr('data-site');
//             //发送统计数据
//             $.post(a.clickUrl, data,
//               function (res) {
//                  console.log(res)
//             })
//             //跳转url
//            var url=ad.attr('data-url');
//            window.open(url, '_blank');
//          });
//     })