// var arrTimer = [];
// var progressTimerA; //加载进度定时器
// var progressTimerB; //加载进度定时器
// var previewTimer; //动态预览定时器

// var activaVideoId; //上次选择视频ID

// // 鼠标移动到视频上的全局状态
// var isMouse = false;

var banner = $('.rank-a');
    banner.click(function(){
        $(this).attr('data-href')
        console.log($(this).attr('data-href'));
        window.open($(this).attr('data-href'),'_blank')
        
    })
// // console.log($('.rank-a')[0]);

// var p_arr = [1, 99];
// function getResult(arr) {
//     var pSum = eval(arr.join("+"));
//     for (var i = 0; i < arr.length; i++) {
//         var random = parseInt(Math.random() * pSum);
//         if (random < arr[i]) {
//             return i;
//         } else {
//             pSum -= arr[i];
//         }
//     }
// }
// // getResult(p_arr);

// if (getResult(p_arr) === 0) {
// //   videoCardPlay();   
// }
// document.addEventListener('scroll', function() {
//     // console.log(getResult(p_arr));
//     if (getResult(p_arr) === 0) {
//         // videoCardPlay();   
//     }
// })

// function videoCardPlay() {
//     var bannerArr = [];
//     for (let index = 0; index < banner.length; index++) {
//       var scope = (banner[index].offsetHeight * (100 - 80)) / 100;
//       var cH = document.documentElement.clientHeight;
//       var tY = $('.v-s-nav-box-h').hasClass('v-s-nav-box-hide') ? banner[index].getBoundingClientRect().top : banner[index].getBoundingClientRect().top - $('.v-s-nav-box-h').height();
//       var bY = banner[index].getBoundingClientRect().bottom;
//       if (tY < - scope || bY > cH + scope) {
//         // console.log('不在可见范围。');
//         // banner[index].data('isPlay', '0');
//         let motionPreview = banner[index].children[1];
//         // $(motionPreview).css('display', 'none');
//         bannerArr = [];
//       } else {
//         // 在可见范围
//         // console.log(banner[index]);
//         // console.log(banner[index].dataset.sl)
//         bannerArr.push(banner[index]);
//         $('.rank-a .motion-preview').css('display', 'none').html('');
//       for (let i in arrTimer) {
//             clearInterval(arrTimer[i]);
//         }
//         for (let bi = 0; bi < 2; bi++) {
//             if (!bannerArr[bi]) continue;
//             let sl = bannerArr[bi].dataset.sl;
//             let childrenImg = bannerArr[bi].children[0];
//             let motionPreview = bannerArr[bi].children[1];
//             // if ($(motionPreview).css('display') === 'block') {
//             //     continue;
//             // }
//             const img = new Image();
//             motionPreview.style.display = "block";
//             if (sl.split("/")[5].search("m3u8") != -1) {
//                 img.src = `https://faimg.com/${sl.split("/")[4]}.jpg`;
//             } else {
//                 img.src = `https://faimg.com/${sl.split("/")[5]}.jpg`;
//             }
//             img.onload = (e) => {
    
//                 let posterHeight = childrenImg.height;
//                 let posterClit = 0;
//                 let imgClit = img.width / 100 / img.height;
//                 let width = (posterHeight - posterClit) * imgClit;
//                 let posterBgPosition = 0;
    
//                 // 动态预览图
//                 previewTimer = setInterval(function (e) {
//                     motionPreview.innerHTML = `<div style="width:${(posterHeight - posterClit) * imgClit
//                         }px;height:${posterHeight - posterClit}px;background-size:auto ${posterHeight - posterClit
//                         }px;background-image:url(${img.src
//                         });background-position:-${posterBgPosition}px 0;"></div>`;
    
//                     posterBgPosition += width;
    
//                     if (posterBgPosition > img.width) {
//                         posterBgPosition = 0;
//                     }
    
//                 }, 360);
//                 arrTimer.push(previewTimer)
//             };
//             img.onerror = (e) => {
//                 console.log('onerror:' + e);
    
//             }
//         }
        
//       }
//     }
// }

// // $('.video-card-img-toggle').css('display', 'none');
// $('.rank-a').click(function (e) {
//     console.log(e);
//     if (e.target.id == 'videoCardImgToggle') {
//         // 点击预览事件
//         isMouse = true;
//         let videoId = e.currentTarget.dataset.vid;

//         // 媒体地址
//         let sl = e.currentTarget.dataset.sl;

//         let childrenImg = e.currentTarget.children[0];
//         let motionPreview = e.currentTarget.children[1];
//         let progressBox = e.currentTarget.children[3];
//         let progressBar = e.currentTarget.children[3].children[0].children[0];
//         let isVip = 0;
//         if (e.currentTarget.children.length > 4) {
//             isVip = Number(e.currentTarget.children[4].dataset.vip);
//         }
//         let userinfo = localStorage.getItem('userinfo') // 读取userinfo缓存
//         if (userinfo) {
//             userinfo = JSON.parse(userinfo);
//         }
//         console.log(isVip);
//         // 开启VIP视频禁止非VIP用户预览
//         if (isVip && userinfo.vip.level != isVip) {
//             return
//         }

//         // 清除进行中的预览
//         for (let i in arrTimer) {
//             clearInterval(arrTimer[i]);
//         }

//         $('.rank-a .motion-preview').css('display', 'none').html('');

//         $('.rank-a .progress-box').hide();
//         $('.rank-a .progress-box .progress .progress-bar').css({ width: '0%' });

//         if (activaVideoId == videoId) {
//             activaVideoId = undefined
//             return
//         }

//         activaVideoId = videoId;


//         let progress = 0; //进度条进度

//         progressTimerB = setInterval(function (e) {
//             progress += 0.1;
//             progressBox.style.display = 'block';
//             progressBar.style.width = `${progress}%`;
//             if (progress >= 90) {
//                 clearInterval(progressTimerB);
//             }
//         }, 3);
//         arrTimer.push(progressTimerB)

//         const img = new Image();
//         if (sl.split("/")[5].search("m3u8") != -1) {
//             img.src = `https://faimg.com/${sl.split("/")[4]}.jpg`;
//         } else {
//             img.src = `https://faimg.com/${sl.split("/")[5]}.jpg`;
//         }
//         img.onload = (e) => {

//             let posterHeight = childrenImg.height;
//             let posterClit = 0;
//             let imgClit = img.width / 100 / img.height;
//             let width = (posterHeight - posterClit) * imgClit;
//             let posterBgPosition = 0;

//             // 加载进度条
//             progressTimerA = setInterval(function (e) {
//                 progress += 0.8;
//                 progressBox.style.display = 'block';
//                 progressBar.style.width = `${progress}%`;
//                 if (progress >= 100) {
//                     progressBox.style.display = 'none';
//                     clearInterval(progressTimerA);
//                 }
//             }, 3);
//             arrTimer.push(progressTimerA)

//             // 动态预览图
//             previewTimer = setInterval(function (e) {
//                 motionPreview.style.display = "block";
//                 motionPreview.innerHTML = `<div style="width:${(posterHeight - posterClit) * imgClit
//                     }px;height:${posterHeight - posterClit}px;background-size:auto ${posterHeight - posterClit
//                     }px;background-image:url(${img.src
//                     });background-position:-${posterBgPosition}px 0;"></div>`;

//                 posterBgPosition += width;

//                 if (posterBgPosition > img.width) {
//                     posterBgPosition = 0;
//                 }

//             }, 360);
//             arrTimer.push(previewTimer)
//         };
//         img.onerror = (e) => {
//             console.log('onerror:' + e);

//         }

//     } else {
//         // 点击链接事件
//         let href = e.currentTarget.dataset.href;
//         location.href = href
//     }
// })

// let ua = navigator.userAgent.toLocaleLowerCase()
// window.isVideoZindex = false;
// let videoZindexBrowser = ['ucbrowser', 'quark', 'baidu', 'XiaoMi', 'Miui', 'mibrowser'];
// if (true || videoZindexBrowser.some(function (u) {return ua.indexOf(u) > -1})) {
//     window.isVideoZindex = true;
// }

// // 视频BOX高度自动计算
// try {
//     let rankDom = document.getElementsByClassName('rank-a')[0];
//     let clientWidth = rankDom.clientWidth;
//     let clientHeight = rankDom.clientHeight;
//     $('.rank-a').css('height', `${clientWidth * 0.67}px`)
// } catch (e) {
// }
