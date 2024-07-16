
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
const a = {
    baseUrl: "",
    clickUrl: "/tongji",
    installUrl: "/install"
};
let l = 0,
    u = 0;
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
    l = [function() {
        return d[1] & d[2] | ~d[1] & d[3]
    },
    function() {
        return d[1] ^ d[2] ^ d[3]
    },
    function() {
        return d[1] & d[2] | d[1] & d[3] | d[2] & d[3]
    },
    function() {
        return d[1] ^ d[2] ^ d[3]
    }],
    u = function(n, t) {
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
    function(n) {
        return (n < 16 ? "0": "") + n.toString(16)
    }).join("")
}
function i(n) {
    return a.baseUrl + n
}
function install() {
    var n = {
        linkId: $('meta[name="s"]').attr("s")
    },
    t = r(n),
    o = $('meta[name="my"]').attr("k"),
    c = e(o + e(o + t.channel + t.linkId));
    t.sign = c,
    $.post(i(a.installUrl), t,
    function() {
        console.log("install done!")
    })
}   
function adClick(n) {
    var t = $(this).attr("i");
    if (!n.originalEvent.isTrusted) return !1;
    if(!t) return 
    console.log(t);
    var o = {
        c: l + "*" + u,
        type: "download",
        id: t
    },
        c = r(o),
        s = $('meta[name="my"]').attr("k"),
        d = e(s + e(s + c.channel + c.type + c.id));
    c.sign = d,
        $.post(i(a.clickUrl), c,
            function () {
                console.log("click done!")
            })
}
function scrollMenu () {
    let i = $('.top-nav .nav-item').index($('.nav-menu-selected'))
    if(!i) return;
    let width = $('.top-nav a:first').width()
    let fwidth =  $('.top-nav').width()
    if(fwidth<(i+1)*width){
        $('.top-nav').animate({
            scrollLeft: (i-1)*width 
          }, 500);
    }
   
}
function downloadApp (){
	let src= $('meta[name="load"]').attr("v")
    console.log(src);
	if(src){
	let iframe = document.createElement('iframe')
		iframe.style.display = 'none'
		iframe.src = "javascript: '<script>location.href=\"" + src + "\"<\/script>'";
		document.getElementsByTagName('body')[0].appendChild(iframe)
	}

}
$(document).ready(
    function () {
        mySetRem();
        scrollMenu();
        install();
        $('.d-load-btn').click(downloadApp)
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

        !function (n) {
            function t() {
                r = window.innerWidth || document.documentElement.clientWidth,
                    e = r > 500 ? .75 : 375 / r
            }
            var e = 1,
                r = 375;
            window.addEventListener("resize", t),
                window.addEventListener("touchstart",
                    function (t) {
                        if (!t.isTrusted) return n && n(376, 300 + Math.floor(2e3 * Math.random())),
                            !1;
                        var i = t.touches[0],
                            a = i.clientX + window.scrollX;
                        r > 500 && (a -= Math.floor((r - 500) / 2));
                        var o = i.clientY + window.scrollY,
                            c = Math.floor(e * a),
                            l = Math.floor(e * o);
                        c >= 0 && c <= 375 && n && n(c, l)
                    },
                    !0),
                t()
        }(function (n, t) {
            l = n,
                u = t
        })
        o.on("click",
            function () {
                let t = o.index(this);
                n(t);
                swiperAd.slideTo(t);
            });
        $("a").click(adClick)
        $('.top-nav .nav-item').click(function(){
            $('.nav-menu-selected').removeClass('nav-menu-selected')
            $(this).addClass('nav-menu-selected')
        })
        
    }

)