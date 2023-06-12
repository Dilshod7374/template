!function () {
    "use strict";
    window.spwidgetLoaderAdded || (window.addEventListener("load", (function () {
        var e = document.querySelectorAll("script[data-sp-widget-id]"), t = "".concat(e[0].getAttribute("src").replace("/loader().js", "")), n = 1;
        (function () {
            var e = ["utm_source", "utm_medium", "utm_campaign", "utm_content", "utm_term"], t = new URLSearchParams(window.location.search);
            window.oSpP || (window.oSpP = {});
            e.forEach((function (e) {
                var n = t.get(e);
                n && (window.sessionStorage[e] = n), window.sessionStorage[e] && (window.oSpP[e] = window.sessionStorage[e])
            }))
        })(), "function" != typeof NodeList.prototype.forEach && (NodeList.prototype.forEach = Array.prototype.forEach);

        function o(e) {
            var t = /origin="(https:\/\/[\w.]+)/.exec(e)[1], n = /user_ref="(\d+)/.exec(e)[1];
            return e = (e = e.replace(new RegExp(t, "g"), window.location.origin)).replace(new RegExp(n, "g"), r())
        }

        function r() {
            var e = (new Date).getTime();
            return "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, (function (t) {
                var n = (e + 16 * Math.random()) % 16 | 0;
                return e = Math.floor(e / 16), ("x" === t ? n : 3 & n | 8).toString(16)
            }))
        }

        function a(e) {
            for (var t, n = /lang="([_a-zA-Z]+)"/.exec(e)[1], o = /data-ref="(.*)"/g, a = e.replace("telegramWidgetPAYLOAD", r()); null !== (t = o.exec(e));) {
                var i = c(t[1], n), s = new RegExp(t[1], "g");
                a     = a.replace(s, i)
            }
            return a
        }

        function c(e, t) {
            var n = JSON.parse(window.atob(e)), o = document.querySelectorAll("input.sp_push_custom_data"), r = {subscribe_url: window.location.href};
            for (var a in o.forEach((function (e) {
                r[e.name] = e.value
            })), window.oSpP) r[a] = window.oSpP[a];
            n.contact_variables = r, n.lang = t;
            try {
                return btoa(encodeURIComponent(JSON.stringify(n)))
            } catch (t) {
                return e
            }
        }

        function i() {
            var e = document.createElement("script");
            e.src = "".concat(t, "/widget-handler.js"), e.onload = function () {
                window.spMessengersWidget.init()
            }, document.head.appendChild(e)
        }

        e.forEach((function (r) {
            var c = r.getAttribute("data-sp-widget-id"), s = "".concat(t, "/widgets/").concat(c, ".html");
            "https://login.sendpulse.local/dist/js/messengers" === t && (s = "//s3.eu-central-1.amazonaws.com/fbstore.sendpulse.stage/widgets/".concat(c, ".html"));
            var d = new XMLHttpRequest;
            d.onload = function () {
                var t = this.response, c = a(t), s = /class=".*(sp-embed|sp-button|sp-checkbox).*"/.exec(t), d = /class=".*(sp-checkbox).*"/.exec(t);
                s ? (d && (c = o(c)), r.insertAdjacentHTML("afterend", c)) : document.body.insertAdjacentHTML("beforeend", c), n === e.length && i(), n++
            }, d.open("GET", s), d.send()
        }))
    }), !1), window.spwidgetLoaderAdded = !0)
}();
