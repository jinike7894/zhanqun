var arrTimer = [];
var progressTimerA; //加载进度定时器
var progressTimerB; //加载进度定时器
var previewTimer; //动态预览定时器

var activaVideoId; //上次选择视频ID

// 鼠标移动到视频上的全局状态
var isMouse = false;

// 鼠标移入到视频事件
// $(document).on("mouseenter", ".rank-a", function (e) {
$(".rank-a").mouseenter(function (e) {
    // console.log(e);

    isMouse = true;
    let videoId = e.currentTarget.dataset.vid;
    activaVideoId = videoId;
    // 媒体地址
    let sl = e.currentTarget.dataset.sl;

    let childrenImg = e.currentTarget.children[0];
    let motionPreview = e.currentTarget.children[1];
    let progressBox = e.currentTarget.children[3];
    let progressBar = e.currentTarget.children[3].children[0].children[0];
    let isVip = 0;
    if(e.currentTarget.children.length > 4){
        isVip = Number(e.currentTarget.children[4].dataset.vip);
    }
    let userinfo = localStorage.getItem('userinfo') // 读取userinfo缓存
    if(userinfo){
        userinfo = JSON.parse(userinfo);
    }
    // 开启VIP视频禁止非VIP用户预览
    if(isVip && userinfo.vip.level != isVip){
        return
    }

    setTimeout(function () {
        if (videoId == activaVideoId) {

            let progress = 0; //进度条进度

            progressTimerB = setInterval(function (e) {
                progress += 0.1;
                progressBox.style.display = 'block';
                progressBar.style.width = `${progress}%`;
                if (progress >= 90) {
                    clearInterval(progressTimerB);
                }
            }, 3);
            arrTimer.push(progressTimerB)

            const img = new Image();
            if (sl.split("/")[5].search("m3u8") != -1) {
                img.src = `https://faimg.com/${sl.split("/")[4]}.jpg`;
            } else {
                img.src = `https://faimg.com/${sl.split("/")[5]}.jpg`;
            }
            img.onload = (e) => {
                // console.log("onload");

                if (videoId != activaVideoId) {
                    progressBox.style.display = 'none';
                    return
                }

                let posterHeight = childrenImg.height;
                let posterClit = 0;
                let imgClit = img.width / 100 / img.height;
                let width = (posterHeight - posterClit) * imgClit;
                let posterBgPosition = 0;

                // motionPreview.style.width = (posterHeight - posterClit) * imgClit + "px";
                // motionPreview.style.height = posterHeight - posterClit + "px";
                // motionPreview.style.backgroundSize = "auto " + (posterHeight - posterClit) + "px";
                // motionPreview.style.backgroundImage = "url(" + img.src + ")";
                // motionPreview.style.backgroundPosition = "-" + posterBgPosition + "px 0";

                // 加载进度条
                progressTimerA = setInterval(function (e) {
                    progress += 0.8;
                    progressBox.style.display = 'block';
                    progressBar.style.width = `${progress}%`;
                    if (progress >= 100) {
                        progressBox.style.display = 'none';
                        clearInterval(progressTimerA);
                    }
                }, 3);
                arrTimer.push(progressTimerA)

                // 动态预览图
                previewTimer = setInterval(function (e) {
                    motionPreview.style.display = "block";
                    motionPreview.innerHTML = `<div style="width:${(posterHeight - posterClit) * imgClit
                        }px;height:${posterHeight - posterClit}px;background-size:auto ${posterHeight - posterClit
                        }px;background-image:url(${img.src
                        });background-position:-${posterBgPosition}px 0;"></div>`;

                    posterBgPosition += width;

                    if (posterBgPosition > img.width) {
                        posterBgPosition = 0;
                    }

                }, 360);
                arrTimer.push(previewTimer)
            };
            img.onerror = (e) => {
                console.log('onerror:' + e);

            }
        }
    }, 1000)
});

// 鼠标移出到视频事件
// $(document).on("mouseleave", ".rank-a", function (e) {
$(".rank-a").mouseleave(function (e) {
    // console.log("mouseleave");
    isMouse = false;
    activaVideoId = null;

    setTimeout(function () {
        for (let i in arrTimer) {
            clearInterval(arrTimer[i]);
        }

        $('.rank-a .motion-preview').css('display', 'none').html('');

        $('.rank-a .progress-box').hide();
        $('.rank-a .progress-box .progress .progress-bar').css({ width: '0%' });
    }, 30)
});
