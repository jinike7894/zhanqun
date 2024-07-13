
function mySetRem() {
    // rem-demo/util/rem.js
    // 设置基准大小
    const baseSize = 16
    function setRem() {
        // 当前页面宽度相对于 750 宽的缩放比例
        const scale = document.documentElement.clientWidth / 750
        document.documentElement.style.fontSize = (baseSize * Math.min(scale, 2)) + 'px'
    }
    // 初始化
    setRem()
    window.onresize = function () {
        setRem()
    }
}
function createdS(id, options = {}) {
    if (!id) return
    return new Swiper(id, options);
}


$(document).ready(
    function () {
        mySetRem()
        createdS('#swiper-banner', {
            loop: !0,
            autoplay: !0,
            observer: !0,
            slidesPerView: 'auto',
        })
        let o = $('.ad-menu-wrap .ad-menu-item')
        function n(n) {
            if (isNaN(n) || n < 0) return !1;
            o.removeClass("active"),
                o.eq(n).addClass("active")
        }

        const swiperAd = createdS('#swiper-ad', {
            autoHeight: !0,
            on: {
                slideChange: function () {
                    n(this.activeIndex)
                }
            }
        })
        o.on("click",
            function () {
                let t = o.index(this);
                n(t);
                swiperAd.slideTo(t);
            });
    }

)