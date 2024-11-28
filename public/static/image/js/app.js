function copy(n) {
    var t = document.createElement("input");
    t.value = n || window.location.href,
        document.body.appendChild(t),
        t.select(),
        document.execCommand("Copy"),
        t.className = "oInput",
        t.style.display = "none",
        alert("澶嶅埗鎴愬姛,璇峰幓鍏跺畠娴忚鍣ㄧ矘璐�")
}
!function () {
    $('.js-copy').click(copy)
    var o = $(".nav-c .item");
    function n(n) {
        if (isNaN(n) || n < 0) return !1;
        o.removeClass("active"),
            o.eq(n).addClass("active"),
            window.sessionStorage.setItem('_i', String(n))
        window.scrollTo({
            top: 0,
            //   behavior: "smooth",
        });
    }
    function t(n) {
        var t, e, r, i = [];
        for (t = 0; t < n.length; t++)(e = n.charCodeAt(t)) < 128 ? i.push(e) : e < 2048 ? i.push(192 + (e >> 6 & 31), 128 + (63 & e)) : ((r = 55296 ^ e) >> 10 == 0 ? (e = (r << 10) + (56320 ^ n.charCodeAt(++t)) + 65536, i.push(240 + (e >> 18 & 7), 128 + (e >> 12 & 63))) : i.push(224 + (e >> 12 & 15)), i.push(128 + (e >> 6 & 63), 128 + (63 & e)));
        return i
    }
    function e(n) {
        var e, r, i, a = new Uint8Array(t(n)),
            o = 16 + (a.length + 8 >>> 6 << 4),
            n = new Uint8Array(o << 2);
        for (n.set(new Uint8Array(a.buffer)), n = new Uint32Array(n.buffer), i = new DataView(n.buffer), e = 0; e < o; e++) n[e] = i.getUint32(e << 2);
        n[a.length >> 2] |= 128 << 24 - 8 * (3 & a.length),
            n[o - 1] = a.length << 3;
        var c = [],
            l = [function () {
                return d[1] & d[2] | ~d[1] & d[3]
            },
            function () {
                return d[1] ^ d[2] ^ d[3]
            },
            function () {
                return d[1] & d[2] | d[1] & d[3] | d[2] & d[3]
            },
            function () {
                return d[1] ^ d[2] ^ d[3]
            }],
            u = function (n, t) {
                return n << t | n >>> 32 - t
            },
            s = [1518500249, 1859775393, -1894007588, -899497514],
            d = [1732584193, -271733879, null, null, -1009589776];
        for (d[2] = ~d[0], d[3] = ~d[1], e = 0; e < n.length; e += 16) {
            var f = d.slice(0);
            for (r = 0; r < 80; r++) c[r] = r < 16 ? n[e + r] : u(c[r - 3] ^ c[r - 8] ^ c[r - 14] ^ c[r - 16], 1),
                i = u(d[0], 5) + l[r / 20 | 0]() + d[4] + c[r] + s[r / 20 | 0] | 0,
                d[1] = u(d[1], 30),
                d.pop(),
                d.unshift(i);
            for (r = 0; r < 5; r++) d[r] = d[r] + f[r] | 0
        }
        i = new DataView(new Uint32Array(d).buffer);
        for (var e = 0; e < 5; e++) d[e] = i.getUint32(e << 2);
        return Array.prototype.map.call(new Uint8Array(new Uint32Array(d).buffer),
            function (n) {
                return (n < 16 ? "0" : "") + n.toString(16)
            }).join("")
    }
    function r(n) {
        var t = {
            ua: navigator.userAgent
        },
            e = $('meta[name="c"]').attr("c");
        return e && (t.channel = e),
            t.width = window.screen.width,
            t.height = window.screen.height,
            Object.assign(t, n)
    }
    function i(n) {
        return a.baseUrl + n
    }
    var a = {
        baseUrl: "" || "",
        clickUrl: "/tongji",
        installUrl: "/install"
    };
    n(window.sessionStorage.getItem('_i'))
    let aIndex = o.index($(".nav-c .item.active"));
    // c = new Swiper(".swiper-c", {
    //     autoHeight: !0,
    //     initialSlide: aIndex,
    //     on: {
    //         slideChange: function () {
    //             n(this.activeIndex)
    //         }
    //     }
    // });
    // o.on("click",
    //     function () {
    //         var t = o.index(this);
    //         n(t),
    //             c.slideTo(t)
    //     });
    //点击广告事件
    $(document).ready(function () {
        $('.ad').on('click', function() { 
            var ad = $(this);
            var data={}
            //获取ua
             data.ua= navigator.userAgent;
            //获取channel
             data.channel= ad.attr('data-channel');
            //获取屏幕宽
            data.width= $(window).width();
            //获取屏幕高
            data.height= $(window).height();
            //获取屏幕尺寸随便来个尺寸
            data.c= "261*253";
            //获取type 直接等于download
            data.type= "download";
            //获取广告id
            data.id= ad.attr('data-id');
            //获取站点id
            data.site= ad.attr('data-site');
            //发送统计数据
            $.post(a.clickUrl, data,
              function (res) {
                 console.log(res)
            })
            //跳转url
           var url=ad.attr('data-url');
           window.open(url, '_blank');
         });
    })

    // function createdSwiper(id, config = {
    //     slidesPerView: 2.15, // 涓€娆℃樉绀� 110 涓� Slides
    //     spaceBetween: 5, // Slides 涔嬮棿鐨勯棿璺�
    //     touchMoveStopPropagation: false,
    //     scrollbar: {
    //         el: ".swiper-scrollbar"
    //     }
    // }
    // ) {
    //     return new Swiper(id, config);
    // };
    // createdSwiper('.swiper-banner', {
    //     autoplay: !0,
    //     slidesPerView: 1.2,
    //     spaceBetween: -4,
    //     centeredSlides: true,
    //     loop: true,
    //     pagination: {
    //         el: '.swiper-pagination'
    //     }
    // })
    // createdSwiper('#ad-swiper')
    // var l = 0,
    //     u = 0; !
    //         function (n) {
    //             function t() {
    //                 r = window.innerWidth || document.documentElement.clientWidth,
    //                     e = r > 500 ? .75 : 375 / r
    //             }
    //             var e = 1,
    //                 r = 375;
    //             window.addEventListener("resize", t),
    //                 window.addEventListener("touchstart",
    //                     function (t) {
    //                         if (!t.isTrusted) return n && n(376, 300 + Math.floor(2e3 * Math.random())),
    //                             !1;
    //                         var i = t.touches[0],
    //                             a = i.clientX + window.scrollX;
    //                         r > 500 && (a -= Math.floor((r - 500) / 2));
    //                         var o = i.clientY + window.scrollY,
    //                             c = Math.floor(e * a),
    //                             l = Math.floor(e * o);
    //                         c >= 0 && c <= 375 && n && n(c, l)
    //                     },
    //                     !0),
    //                 t()
    //         }(function (n, t) {
    //             l = n,
    //                 u = t
    //         }),
            // $("a").click(adClick);

    $(document).ready(function () {
           var data={};
           data.ua=navigator.userAgent;
           data.width== $(window).width();
           data.height=$(window).height();
           data.site_id=$("#site_id").val();
           data.channel=$("#channel").val();
            $.post(i(a.installUrl), data,
                function () {
                    console.log("install done!")
                })
    })

}();