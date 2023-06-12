(() => {
    var __webpack_modules__     = {
        554   : (e, t, n) => {
            var i, r = n.g.crypto || n.g.msCrypto;
            if (r && r.getRandomValues) {
                var s = new Uint8Array(16);
                i     = function () {
                    return r.getRandomValues(s), s
                }
            }
            if (!i) {
                var o = new Array(16);
                i     = function () {
                    for (var e = 0, t = void 0; e < 16; e++) 0 == (3 & e) && (t = 4294967296 * Math.random()), o[e] = t >>> ((3 & e) << 3) & 255;
                    return o
                }
            }
            for (var a = [], c = 0; c < 256; ++c) a[c] = (c + 256).toString(16).substr(1);

            function u(e, t) {
                var n = t || 0, i = a;
                return i[e[n++]] + i[e[n++]] + i[e[n++]] + i[e[n++]] + "-" + i[e[n++]] + i[e[n++]] + "-" + i[e[n++]] + i[e[n++]] + "-" + i[e[n++]] + i[e[n++]] + "-" + i[e[n++]] + i[e[n++]] + i[e[n++]] + i[e[n++]] + i[e[n++]] + i[e[n++]]
            }

            var l     = i(), d = [1 | l[0], l[1], l[2], l[3], l[4], l[5]], h = 16383 & (l[6] << 8 | l[7]), p = 0, m = 0;
            e.exports = {
                v1   : function (e, t, n) {
                    var i = t && n || 0, r = t || [], s = void 0 !== (e = e || {}).clockseq ? e.clockseq : h, o = void 0 !== e.msecs ? e.msecs : (new Date).getTime(), a = void 0 !== e.nsecs ? e.nsecs : m + 1, c = o - p + (a - m) / 1e4;
                    if (c < 0 && void 0 === e.clockseq && (s = s + 1 & 16383), (c < 0 || o > p) && void 0 === e.nsecs && (a = 0), a >= 1e4) throw new Error("uuid.v1(): Can't create more than 10M uuids/sec");
                    p = o, m = a, h = s;
                    var l = (1e4 * (268435455 & (o += 122192928e5)) + a) % 4294967296;
                    r[i++] = l >>> 24 & 255, r[i++] = l >>> 16 & 255, r[i++] = l >>> 8 & 255, r[i++] = 255 & l;
                    var g = o / 4294967296 * 1e4 & 268435455;
                    r[i++] = g >>> 8 & 255, r[i++] = 255 & g, r[i++] = g >>> 24 & 15 | 16, r[i++] = g >>> 16 & 255, r[i++] = s >>> 8 | 128, r[i++] = 255 & s;
                    for (var f = e.node || d, w = 0; w < 6; ++w) r[i + w] = f[w];
                    return t || u(r)
                }, v4: function (e, t, n) {
                    var r = t && n || 0;
                    "string" == typeof e && (t = "binary" == e ? new Array(16) : null, e = null);
                    var s = (e = e || {}).random || (e.rng || i)();
                    if (s[6] = 15 & s[6] | 64, s[8] = 63 & s[8] | 128, t) for (var o = 0; o < 16; ++o) t[r + o] = s[o];
                    return t || u(s)
                }
            }
        }, 338: (e, t, n) => {
            e.exports = /^((?!chrome).)*safari/i.test(navigator.userAgent) ? n(53) : n(838)
        }, 53 : (e, t, n) => {
            "use strict";
            n.r(t), n.d(t, {default: () => h});
            var i   = n(187), r = n(817);
            const s = "web.com.flocktory.default";
            const o = {
                isPushNotificationsSupported: function () {
                    return "safari" in window && "pushNotification" in window.safari
                }, subscribe                : function (e) {
                    return e = e || {}, new Promise(((t, n) => {
                        if (!e.safariServiceUrl) return n(new Error("options.safariServiceUrl should be defined"));
                        window.safari.pushNotification.requestPermission(e.safariServiceUrl || "https://api.flocktory.com", e.safariPushId || s, e.data || {}, (e => {
                            try {
                                t(a(e))
                            } catch (e) {
                                n(e)
                            }
                        }))
                    }))
                }, init                     : function () {
                    const e = window.safari.pushNotification.permission(s);
                    return new Promise(((t, n) => {
                        try {
                            t(a(e))
                        } catch (e) {
                            n(e)
                        }
                    }))
                }
            };

            function a(e) {
                if ("granted" === e.permission) return e.deviceToken;
                if ("denied" === e.permission) return null;
                if ("default" === e.permission) return null;
                throw new Error("Incorrect state")
            }

            var c   = n(257);
            const u = "safari", l = o.isPushNotificationsSupported();

            class d extends i.EventEmitter {
                constructor(e) {
                    super(), this.ip = e.ip, this.emitPushStatus = this.emitPushStatus.bind(this), this.checkPushStatus = this.checkPushStatus.bind(this), this.requestPush = this.requestPush.bind(this), this.siteId = e.siteId, this.uuid = r.Z.v4()
                }

                emitPushStatus(e) {
                    return e.secure = !0, e.supported = l, e.siteId = this.siteId, e.platform = u, e.availableOnNewPage = !1, this.emit("pushStatus", e)
                }

                checkPushStatus() {
                    l ? "denied" !== Notification.permission ? o.init().then((e => {
                        e ? this.emitPushStatus({subscribed: !0, subscriptionId: e}) : this.emitPushStatus({subscribed: !1})
                    })).catch((e => (0, c.Z)("safari-push-manager").error(e, "SafariPushManager: checkPushStatus error"))) : this.emitPushStatus({subscribed: !1, denied: !0}) : this.emitPushStatus({subscribed: !1})
                }

                requestPush(e) {
                    null == e && (e = {});
                    const t = e.campaignId;
                    return o.init().then((n => n ? null : o.subscribe({safariServiceUrl: `https://api.flocktory.com/p/push/sites/${this.siteId}`, safariPushId: "web.com.flocktory." + this.siteId, data: {"site-id": String(this.siteId), platform: u, authenticationToken: `${this.siteId}|${e.sessionId || this.uuid}|${t}|${this.ip}`, userAgent: window.navigator.userAgent, referrerURL: window.location.href}}))).then((e => (this.emit("pushSystemShown"), this.emitPushStatus({
                        subscribed    : !!e,
                        denied        : !e,
                        subscriptionId: e
                    })))).catch((e => (e.code === e.ABORT_ERR && e instanceof DOMException && this.emitPushStatus({subscribed: !1, denied: !0}), (0, c.Z)("safari-push-manager").error(e, "SafariPushManager: requestPush error"))))
                }
            }

            const h = d
        }, 838: (e, t, n) => {
            "use strict";
            n.r(t), n.d(t, {default: () => p});
            var i = n(187), r = n.n(i);

            function s() {
                return function () {
                    const e = navigator.userAgent;
                    return "serviceWorker" in navigator && "showNotification" in ServiceWorkerRegistration.prototype && "PushManager" in window && -1 === e.indexOf("YaBrowser/15.12.1.6476") && !/\YaBrowser\/[0-9\.]+ \(beta\)/.test(e)
                }()
            }

            function o() {
                return null == navigator.serviceWorker ? Promise.reject("No serviceWorker") : navigator.serviceWorker.ready.then((e => e.pushManager.getSubscription()))
            }

            function a(e) {
                return e.pushManager.subscribe({userVisibleOnly: !0})
            }

            const c                 = {
                init                           : function (e) {
                    return e = e || "/flock_push_worker.js", s() && navigator && navigator.serviceWorker ? navigator.serviceWorker.register(e).then(o) : Promise.reject("Service Worker not supported")
                }, isPushNotificationsSupported: s, subscribe: function (e) {
                    const t = e && e.withGeoLocation || !1;
                    return null == navigator.serviceWorker ? Promise.reject("No serviceWorker") : navigator.serviceWorker.ready.then((e => t && "default" === window.Notification.permission ? navigator.permissions.query({name: "geolocation"}).then((t => ("prompt" === t.state && navigator.geolocation.getCurrentPosition((() => {
                    })), window.Notification.requestPermission().then((() => a(e)))))) : a(e)))
                }
            };
            var u                   = n(257);
            const {EventEmitter: l} = r(), d = c.isPushNotificationsSupported(), h = "https:" === window.location.protocol;
            const p                 = class extends l {
                constructor(e) {
                    super(), this.emitPushStatus = this.emitPushStatus.bind(this), this.checkPushStatus = this.checkPushStatus.bind(this), this.requestPush = this.requestPush.bind(this), this.setPushDenied = this.setPushDenied.bind(this), this.setPushSubscribed = this.setPushSubscribed.bind(this), this.openPopup = this.openPopup.bind(this), this.storage = e.storage, this.backend = e.backend, this.checkActivePushSubscription = () => e.backend.checkActivePushSubscription(), this.workerPath = e.workerPath, this.siteId = e.siteId, this.forcedInsecure = e.forcedInsecure || !1
                }

                emitPushStatus(e) {
                    const t = {...e, secure: h, supported: d, siteId: this.siteId, availableOnNewPage: !h};
                    return this.emit("pushStatus", t), (0, u.Z)("push").info("Push status", t)
                }

                checkPushStatus(e) {
                    let t = null;
                    if (e.campaignId && (t = e.campaignId), !d) return this.emitPushStatus({subscribed: !1});
                    if (function () {
                        try {
                            if (!window.document.querySelector("link[rel=manifest]")) {
                                const e = document.createElement("link");
                                e.setAttribute("href", "/manifest.json"), e.setAttribute("rel", "manifest");
                                const t = document.querySelector("head");
                                if (null == t) throw new Error("No head");
                                t.appendChild(e)
                            }
                        } catch (e) {
                            (0, u.Z)("push").error(e, "Inser manifest error")
                        }
                    }(), "denied" === window.Notification.permission) return this.emitPushStatus({subscribed: !1, denied: !0});
                    return Promise.all([this.checkActivePushSubscription(), h ? c.init(this.workerPath) : null, (() => this.storage.get("pushDenied"))(this.siteId)]).then((([e, n, i]) => i ? this.emitPushStatus({subscribed: !1, denied: !0}) : e ? this.emitPushStatus({subscribed: !0}) : null == n || e ? null != n && e ? this.emitPushStatus({subscribed: !0, subscriptionId: n.endpoint}) : this.emitPushStatus({subscribed: !1}) : this.attachUserToSession(n, t).then((() => {
                        null != n && this.emitPushStatus({subscribed: !0, subscriptionId: n.endpoint})
                    })))).catch((e => (this.emitPushStatus({subscribed: !1, error: !0}), (0, u.Z)("push").warn("ChromePushManager: checkPushStatus error", e))))
                }

                attachUserToSession(e, t) {
                    return this.backend.attachPushToSession(e, t)
                }

                requestPush(e) {
                    null == e && (e = {campaignId: null, withGeoLocation: !1, subdomain: "", newWindow: null});
                    const t = e.campaignId, n = e.withGeoLocation || !1;
                    return h ? c.init(this.workerPath).then((e => e || (this.emit("pushSystemShown"), c.subscribe({withGeoLocation: n})))).then((e => {
                        const n = e && e.endpoint;
                        return n ? this.attachUserToSession(e, t).then((() => this.emitPushStatus({subscribed: !0, subscriptionId: n}))) : this.emitPushStatus({subscribed: !1, denied: !0})
                    })).catch((e => (e.code === e.ABORT_ERR || 0 === e.code) && e instanceof window.DOMException ? this.emitPushStatus({subscribed: !1, denied: !0}) : ((0, u.Z)("push").error(e, "ChromePushManager: requestPush error"), this.emitPushStatus({subscribed: !1, error: !0, denied: !0})))) : this.openPopup(e)
                }

                setPushDenied(e) {
                    return this.emitPushStatus({fromNewWindow: e.fromNewWindow, subscribed: !1, denied: !0}), this.storage.set("pushDenied", !0)
                }

                setPushSubscribed(e) {
                    const t = (i = e => e.campaignId, null != (n = e) ? i(n) : void 0);
                    var n, i;
                    return this.attachUserToSession(e.subscription, t), this.emitPushStatus({fromNewWindow: e.fromNewWindow, subscribed: !0, subscriptionId: e.subscription.endpoint})
                }

                openPopup(e) {
                    const t = e.campaignId;
                    let n   = "menubar=no,location=no,resizable=no,scrollbars=no,status=no,";
                    n += `width=${e.newWindow && e.newWindow.width || 530},`;
                    n += `height=${e.newWindow && e.newWindow.height || 360},`;
                    n += `left=${e.newWindow && e.newWindow.left || 300},`;
                    n += `top=${e.newWindow && e.newWindow.top || 0}`, e.newWindow && null != e.newWindow.params && (n = e.newWindow.params);
                    const i = e.newWindow ? e.newWindow.title : "Flocktory push", r = e.newWindow ? e.newWindow.url : `https://${e.subdomain}.flocktory.com/u_shaman_adv/push/subdomains/${e.subdomain}/index.html?siteId=${this.siteId}`, s = window.open(r, i, n), o = e => {
                        let n;
                        if (!/^pusher /.test(e.data)) return;
                        try {
                            n = JSON.parse(e.data.slice(7))
                        } catch (e) {
                            return
                        }
                        const i = function () {
                            return s.close(), window.removeEventListener("message", o)
                        };
                        switch (n.state) {
                            case"subscribed":
                                i(), this.attachUserToSession(n.subscription, t), this.emitPushStatus({fromNewWindow: !0, subscribed: !0, subscriptionId: n.subscription.endpoint});
                                break;
                            case"denied":
                                i(), this.setPushDenied({fromNewWindow: !0}), this.emitPushStatus({fromNewWindow: !0, subscribed: !1, denied: !0});
                                break;
                            case"error":
                                (0, u.Z)("push").error(new Error(n.message)), i(), this.emitPushStatus({fromNewWindow: !0, subscribed: !1, denied: !0})
                        }
                    };
                    return window.addEventListener("message", o)
                }
            }
        }, 257: (e, t, n) => {
            "use strict";
            n.d(t, {Z: () => h, p: () => o});
            var i   = n(955), r = n(370);
            const s = "flocktoryLogEnabled", o = {ALL: 0, WARN: 1, ERROR: 2, SILENT: 3};
            let a   = o.ALL;
            const c = {}, u = window.console || {
                info() {
                }, warn() {
                }, error() {
                }
            }, l    = e => e.reason instanceof Error && e.reason.stack && e.reason.stack.indexOf("flocktory") > -1, d = e => {
                const t = `[${e}]`, n = t => a < t || c[e] < t;
                return {
                    info       : (...e) => {
                        r.isLoggingEnabled && n(o.WARN) && u.info(t, ...e)
                    }, warn    : (...e) => {
                        r.isLoggingEnabled && n(o.ERROR) && u.warn(t, ...e)
                    }, error   : (e, ...i) => {
                        r.isLoggingEnabled && n(o.SILENT) && u.error(e, t, ...i)
                    }, setLevel: t => {
                        c[e] = t
                    }
                }
            };
            d.setLevel = e => {
                a = e
            }, d.enable = () => {
                i.Z.set(s, a)
            }, d.disable = () => {
                void 0 !== i.Z.get(s) && i.Z.remove(s)
            }, window.addEventListener("unhandledrejection", (e => {
                l(e) && d("onunhandledrejection").error(e.reason)
            })), window.addEventListener("error", (e => {
                l(e) && d("onerror").error(e.reason)
            }));
            const h = d
        }, 25 : e => {
            var t;
            e.exports.t = (t = navigator.userAgent || navigator.vendor || window.opera, /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(t) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(t.substr(0, 4)))
        }, 370: (e, t, n) => {
            "use strict";
            let i;

            function r() {
                if (i) return i;
                let e = !0, t = window, n = 0;
                for (; e;) {
                    try {
                        t.opener !== t.parent && t.parent !== t.self && t.parent.document.body ? t = t.parent : e = !1
                    } catch (t) {
                        e = !1
                    }
                    n > 10 && (e = !1), n++
                }
                return i = t, t
            }

            function s() {
                const e = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
                let t   = window.screen.width;
                const n = window.innerWidth;
                return e && n > 0 || (t = n), e && n >= 720 && (t = n), e && t <= 670
            }

            function o() {
                const e = navigator.userAgent;
                return e.indexOf("Mozilla/5.0") > -1 && e.indexOf("Android ") > -1 && e.indexOf("AppleWebKit") > -1 && -1 === e.indexOf("Chrome")
            }

            function a(e) {
                return "[object Object]" === Object.prototype.toString.call(e)
            }

            function c() {
                let e, t, n, i, r, s;
                const o = {}, a = (window.location.search || "").replace(/^\?/, "").split(/&amp;|&/);
                for (i = 0, r = a.length; i < r; i++) {
                    t = a[i], s = t.split("="), e = s[0], n = s[1];
                    try {
                        o[e] = decodeURIComponent(n || "")
                    } catch (e) {
                    }
                }
                return o
            }

            function u() {
                return String(navigator.userAgent).includes("YaBrowser")
            }

            function l() {
                const {userAgent: e} = navigator, t = !!e.match(/iPad/i) || !!e.match(/iPhone/i), n = !!e.match(/WebKit/i);
                return t && n && !e.match(/CriOS/i)
            }

            function d(e) {
                return "[object Number]" === {}.toString.call(e)
            }

            function h(e, t) {
                return Object.keys(e).forEach((n => {
                    t(e[n], n, e)
                })), e
            }

            function p(e, ...t) {
                return t.forEach((t => {
                    null != t && Object.keys(t).forEach((n => {
                        if (null == t) return;
                        const i = t[n];
                        void 0 !== i && (a(i) ? a(e[n]) ? p(e[n], i) : e[n] = p({}, i) : e[n] = i)
                    }))
                })), e
            }

            function m(e, t) {
                for (let n = e.length - 1; n >= 0; n--) if (t(e[n])) return e[n];
                return null
            }

            function g(e, t, n) {
                let i, r, s, o = null, a = 0;
                const c        = n || {leading: !0, trailing: !0}, u = function () {
                    a = !1 === c.leading ? 0 : Date.now(), o = null, s = e.apply(i, r || []), o || (i = r = null)
                };
                return function () {
                    const n = Date.now();
                    a || !1 !== c.leading || (a = n);
                    const l = t - (n - a);
                    return i = this, r = arguments, l <= 0 || l > t ? (o && (clearTimeout(o), o = null), a = n, s = e.apply(i, r), o || (i = r = null)) : o || !1 === c.trailing || (o = setTimeout(u, l)), s
                }
            }

            function f(e, t, n) {
                let i;
                return function () {
                    const r = this, s = arguments, o = function () {
                        i = null, n || e.apply(r, s)
                    }, a    = n && !i;
                    clearTimeout(i), i = setTimeout(o, t), a && e.apply(r, s)
                }
            }

            function w(e) {
                return Object.keys(e).map((t => [t, e[t]]))
            }

            function v(e, t) {
                if (!e) throw new Error("Assert error: " + t)
            }

            function y(e, t) {
                return e.reduce(((e, n) => (e[t(n) ? 0 : 1].push(n), e)), [[], []])
            }

            function b(e, t, n) {
                const i           = t.split(".");
                let r             = 0;
                const {length: s} = i;
                for (; null != e && r < s;) e = e[i[r++]];
                return r && r == s && null != e ? e : n
            }

            function _(e) {
                return e.filter(((t, n) => e.indexOf(t) === n))
            }

            function k(e) {
                return e.filter(Boolean)
            }

            function S(e, ...t) {
                return t.reduce(((e, t) => e.filter((e => t.indexOf(e) > -1))), e)
            }

            function E(e, t) {
                return new Promise((e => setTimeout((() => e(t)))), e)
            }

            function I(e) {
                const t = null == e ? 0 : e.length, n = {};
                let i   = -1;
                for (; ++i < t;) {
                    const t = e[i];
                    n[t[0]] = t[1]
                }
                return n
            }

            function A(e, t) {
                const n = e.replace(/[[\]]/g, "\\$&"), i = new RegExp("[?&]" + n + "(=([^&#]*)|&|#|$)").exec(t);
                return i ? i[2] ? decodeURIComponent(i[2].replace(/\+/g, " ")) : "" : null
            }

            function T(e, t = []) {
                if ("object" != typeof e) return e;
                if (e && "object" == typeof e && e.$value) return e.$value;
                if (e && "object" == typeof e && 0 === t.length) return null;
                const {$variable: n} = e, i = t.find((e => e.id === n));
                return i ? i.value : null
            }

            function C(e) {
                const t = Object.keys(e).find((e => "$value" !== e));
                return t ? {[t]: e[t]} : null
            }

            function P(e) {
                let t;
                try {
                    t = document.querySelector(e)
                } catch (e) {
                    t = null
                }
                return t
            }

            function O(e) {
                return e.replace(/^(BEFORE|AFTER)\s+/, "")
            }

            function L(e) {
                let t   = "insert";
                const n = O(e);
                return /^BEFORE\s+/.test(e) && (t = "before"), /^AFTER\s+/.test(e) && (t = "after"), [t, n]
            }

            function x(e) {
                return t => `flockapi:${e}:${t}`
            }

            n.r(t), n.d(t, {
                assert                    : () => v,
                compact                   : () => k,
                debounce                  : () => f,
                deepMerge                 : () => p,
                findLast                  : () => m,
                forOwn                    : () => h,
                fromPairs                 : () => I,
                get                       : () => b,
                getContainerSelectorValue : () => O,
                getElementOrderAndSelector: () => L,
                getHtmlElement            : () => P,
                getLocationParams         : () => c,
                getParameterByName        : () => A,
                getTopWindow              : () => r,
                getTriggerCondition       : () => C,
                getValOrVariableVal       : () => T,
                intersection              : () => S,
                isAndroidBrowser          : () => o,
                isIosSafari               : () => l,
                isLoggingEnabled          : () => N,
                isMobile                  : () => s,
                isNumber                  : () => d,
                isObject                  : () => a,
                isYaBrowser               : () => u,
                pairs                     : () => w,
                partition                 : () => y,
                storageKeyComposer        : () => x,
                throttle                  : () => g,
                timeout                   : () => E,
                uniq                      : () => _
            });
            const N = void 0 !== n(955).Z.get("flocktoryLogEnabled")
        }, 962: e => {
            e.exports = {
                defaultClosedLength: 18e5,
                pageViewsLog       : {checkInterval: 1e3},
                exitIntent         : {sensitivity: 1},
                storageKeys        : {
                    precheckoutShown   : "precheckoutShown:",
                    viewedPagesCount   : "viewedPagesCount:",
                    pageViewsLog       : "pageViewsLog",
                    sessionId          : "sessionId",
                    globalSessionId    : "__flocktory-web_session2",
                    utmTags            : "utmTags",
                    utmTagsHypothetical: "utmTagsHypothetical",
                    pageViewsHolds     : "pageViewsHolds:",
                    precheckoutShownLog: "precheckoutShownLog",
                    abTests            : "abTests",
                    cart               : "cart",
                    precheckoutClosed  : "precheckoutClosed",
                    itemsViewLog       : "itemsViewLog",
                    categoryViewLog    : "categoryViewLog",
                    pushSubscribeLog   : "pushSubscribeLog",
                    snapshotMeta       : "snapshotMeta",
                    campaignEaEvents   : "campaignEaEvents",
                    campaignHitLog     : "campaignHitLog"
                }
            }
        }, 585: (__unused_webpack_module, __webpack_exports__, __webpack_require__) => {
            "use strict";
            __webpack_require__.d(__webpack_exports__, {Z: () => __WEBPACK_DEFAULT_EXPORT__});
            var _common_utils__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(370), _common_log__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(257);
            const threshold                                = 500, parseInterval = 1500;
            let integrationElements                        = [];
            const flocktorySelector                        = ".i-flocktory", toArray = e => Array.prototype.slice.call(e), parse = function (actions, shareData, win, flocktory) {
                (0, _common_utils__WEBPACK_IMPORTED_MODULE_0__.assert)(actions && shareData && win, "no enough params to parse");
                const {document} = win;
                let elements     = document.querySelectorAll(flocktorySelector);
                elements = toArray(elements), elements.forEach((el => {
                    if (el.flocktoryInited) return;
                    const data = el.dataset, actionName = (data.flAction || "").replace(/-([a-z])/g, (e => e[1].toUpperCase())), action = actions[actionName], actionData = {}, actionParams = {};
                    toArray(el.attributes).forEach((attr => {
                        const {name} = attr;
                        if (!/^data-fl-/.test(name)) return;
                        let value = el.getAttribute(name), parts = /^data-fl-(.*)$/.exec(name)[1].split("-"), prop;
                        if (!parts || !parts.length) return;
                        if ("json" === parts[parts.length - 1]) {
                            try {
                                value = eval(`(${value})`)
                            } catch (e) {
                                try {
                                    value = JSON.parse(value)
                                } catch (e) {
                                    (0, _common_log__WEBPACK_IMPORTED_MODULE_1__.Z)("parser").warn("Bad json in element.", name, value)
                                }
                            }
                            parts.pop()
                        }
                        "params" === parts[0] ? (parts = parts.slice(1), prop = actionParams) : prop = actionData;
                        let i   = 0;
                        const l = parts.length;
                        for (; i < l;) i === l - 1 ? prop[parts[i]] = value : prop = prop[parts[i]] = prop[parts[i]] || {}, i++
                    })), action ? "addData" !== actionName ? (actionParams.rootElement = el, flocktory.ready((() => {
                        const e   = (0, _common_utils__WEBPACK_IMPORTED_MODULE_0__.deepMerge)({}, actionData, {params: actionParams});
                        el.action = action(e)
                    }))) : shareData.addData(actionData) : ((0, _common_log__WEBPACK_IMPORTED_MODULE_1__.Z)("parser").warn("No actions " + actionName), shareData.addData(actionData)), el.flocktoryInited = !0, integrationElements.push(el)
                }));
                const _elements = [];
                let i           = 0;
                const l         = integrationElements.length;
                for (; i < l;) {
                    const e = integrationElements[i];
                    win.document.body.contains(e) ? _elements.push(e) : null != __guard__(e.action, (e => e.destroy)) && e.action.destroy(), i++
                }
                integrationElements = _elements
            };

            function __WEBPACK_DEFAULT_EXPORT__(e, t, n, i) {
                parse(e, t, n, i);
                const r = (0, _common_utils__WEBPACK_IMPORTED_MODULE_0__.throttle)(parse.bind(null, e, t, n, i), threshold);
                let s;
                n.document.body && n.MutationObserver && (s = new n.MutationObserver(r), s.observe(n.document.body, {subtree: !0, attributes: !1, characterData: !1, childList: !0}));
                const o = setInterval(r, parseInterval);
                return {destroy: () => (clearInterval(o), null != s && s.disconnect(), (0, _common_utils__WEBPACK_IMPORTED_MODULE_0__.timeout)(threshold))}
            }

            function __guard__(e, t) {
                return null != e ? t(e) : void 0
            }
        }, 817: (e, t, n) => {
            "use strict";
            let i;
            n.d(t, {Z: () => h});
            const r = n.g.crypto || n.g.msCrypto;
            if (r && r.getRandomValues) {
                const e = new Uint8Array(16);
                i       = function () {
                    return r.getRandomValues(e), e
                }
            }
            if (!i) {
                const e = new Array(16);
                i       = function () {
                    for (let t, n = 0; n < 16; n++) 0 == (3 & n) && (t = 4294967296 * Math.random()), e[n] = t >>> ((3 & n) << 3) & 255;
                    return e
                }
            }
            let s = [];
            for (let e = 0; e < 256; ++e) s[e] = (e + 256).toString(16).substr(1);

            function o(e, t) {
                let n   = t || 0;
                const i = s;
                return i[e[n++]] + i[e[n++]] + i[e[n++]] + i[e[n++]] + "-" + i[e[n++]] + i[e[n++]] + "-" + i[e[n++]] + i[e[n++]] + "-" + i[e[n++]] + i[e[n++]] + "-" + i[e[n++]] + i[e[n++]] + i[e[n++]] + i[e[n++]] + i[e[n++]] + i[e[n++]]
            }

            const a = i(), c = [1 | a[0], a[1], a[2], a[3], a[4], a[5]];
            let u   = 16383 & (a[6] << 8 | a[7]), l = 0, d = 0;
            const h = {
                v1   : function (e, t, n) {
                    let i   = t && n || 0, r = t || [], s = void 0 !== (e = e || {}).clockseq ? e.clockseq : u, a = void 0 !== e.msecs ? e.msecs : (new Date).getTime(), h = void 0 !== e.nsecs ? e.nsecs : d + 1;
                    const p = a - l + (h - d) / 1e4;
                    if (p < 0 && void 0 === e.clockseq && (s = s + 1 & 16383), (p < 0 || a > l) && void 0 === e.nsecs && (h = 0), h >= 1e4) throw new Error("uuid.v1(): Can't create more than 10M uuids/sec");
                    l = a, d = h, u = s, a += 122192928e5;
                    const m = (1e4 * (268435455 & a) + h) % 4294967296;
                    r[i++] = m >>> 24 & 255, r[i++] = m >>> 16 & 255, r[i++] = m >>> 8 & 255, r[i++] = 255 & m;
                    const g = a / 4294967296 * 1e4 & 268435455;
                    r[i++] = g >>> 8 & 255, r[i++] = 255 & g, r[i++] = g >>> 24 & 15 | 16, r[i++] = g >>> 16 & 255, r[i++] = s >>> 8 | 128, r[i++] = 255 & s;
                    const f = e.node || c;
                    for (let e = 0; e < 6; ++e) r[i + e] = f[e];
                    return t || o(r)
                }, v4: function (e, t, n) {
                    const r = t && n || 0;
                    "string" == typeof e && (t = "binary" == e ? new Array(16) : null, e = null);
                    const s = (e = e || {}).random || (e.rng || i)();
                    if (s[6] = 15 & s[6] | 64, s[8] = 63 & s[8] | 128, t) for (let e = 0; e < 16; ++e) t[r + e] = s[e];
                    return t || o(s)
                }
            }
        }, 742: (e, t) => {
            "use strict";
            t.byteLength = function (e) {
                var t = c(e), n = t[0], i = t[1];
                return 3 * (n + i) / 4 - i
            }, t.toByteArray = function (e) {
                var t, n, s    = c(e), o = s[0], a = s[1], u = new r(function (e, t, n) {
                    return 3 * (t + n) / 4 - n
                }(0, o, a)), l = 0, d = a > 0 ? o - 4 : o;
                for (n = 0; n < d; n += 4) t = i[e.charCodeAt(n)] << 18 | i[e.charCodeAt(n + 1)] << 12 | i[e.charCodeAt(n + 2)] << 6 | i[e.charCodeAt(n + 3)], u[l++] = t >> 16 & 255, u[l++] = t >> 8 & 255, u[l++] = 255 & t;
                2 === a && (t = i[e.charCodeAt(n)] << 2 | i[e.charCodeAt(n + 1)] >> 4, u[l++] = 255 & t);
                1 === a && (t = i[e.charCodeAt(n)] << 10 | i[e.charCodeAt(n + 1)] << 4 | i[e.charCodeAt(n + 2)] >> 2, u[l++] = t >> 8 & 255, u[l++] = 255 & t);
                return u
            }, t.fromByteArray = function (e) {
                for (var t, i = e.length, r = i % 3, s = [], o = 16383, a = 0, c = i - r; a < c; a += o) s.push(u(e, a, a + o > c ? c : a + o));
                1 === r ? (t = e[i - 1], s.push(n[t >> 2] + n[t << 4 & 63] + "==")) : 2 === r && (t = (e[i - 2] << 8) + e[i - 1], s.push(n[t >> 10] + n[t >> 4 & 63] + n[t << 2 & 63] + "="));
                return s.join("")
            };
            for (var n = [], i = [], r = "undefined" != typeof Uint8Array ? Uint8Array : Array, s = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/", o = 0, a = s.length; o < a; ++o) n[o] = s[o], i[s.charCodeAt(o)] = o;

            function c(e) {
                var t = e.length;
                if (t % 4 > 0) throw new Error("Invalid string. Length must be a multiple of 4");
                var n = e.indexOf("=");
                return -1 === n && (n = t), [n, n === t ? 0 : 4 - n % 4]
            }

            function u(e, t, i) {
                for (var r, s, o = [], a = t; a < i; a += 3) r = (e[a] << 16 & 16711680) + (e[a + 1] << 8 & 65280) + (255 & e[a + 2]), o.push(n[(s = r) >> 18 & 63] + n[s >> 12 & 63] + n[s >> 6 & 63] + n[63 & s]);
                return o.join("")
            }

            i["-".charCodeAt(0)] = 62, i["_".charCodeAt(0)] = 63
        }, 252: (e, t, n) => {
            function i(e, t) {
                var n = e.location.pathname.split("/");
                for (e.document.cookie = t + "; path=/"; n.length > 0;) e.document.cookie = t + "; path=" + n.join("/"), n.pop()
            }

            function r(e) {
                for (var t = e.document.cookie.split("; "), n = 0; n < t.length; n++) {
                    var r = encodeURIComponent(t[n].split(";")[0].split("=")[0]) + "=; expires=Thu, 01-Jan-1970 00:00:01 GMT";
                    i(e, r);
                    for (var s = e.location.hostname.split("."); s.length > 0;) i(e, r + "; domain=" + s.join(".")), s.shift()
                }
            }

            void 0 !== (e = n.nmd(e)) && (e.exports = function (e) {
                return r.bind(e, e)
            })
        }, 187: e => {
            "use strict";
            var t, n = "object" == typeof Reflect ? Reflect : null, i = n && "function" == typeof n.apply ? n.apply : function (e, t, n) {
                return Function.prototype.apply.call(e, t, n)
            };
            t        = n && "function" == typeof n.ownKeys ? n.ownKeys : Object.getOwnPropertySymbols ? function (e) {
                return Object.getOwnPropertyNames(e).concat(Object.getOwnPropertySymbols(e))
            } : function (e) {
                return Object.getOwnPropertyNames(e)
            };
            var r    = Number.isNaN || function (e) {
                return e != e
            };

            function s() {
                s.init.call(this)
            }

            e.exports = s, e.exports.once = function (e, t) {
                return new Promise((function (n, i) {
                    function r(n) {
                        e.removeListener(t, s), i(n)
                    }

                    function s() {
                        "function" == typeof e.removeListener && e.removeListener("error", r), n([].slice.call(arguments))
                    }

                    g(e, t, s, {once: !0}), "error" !== t && function (e, t, n) {
                        "function" == typeof e.on && g(e, "error", t, n)
                    }(e, r, {once: !0})
                }))
            }, s.EventEmitter = s, s.prototype._events = void 0, s.prototype._eventsCount = 0, s.prototype._maxListeners = void 0;
            var o = 10;

            function a(e) {
                if ("function" != typeof e) throw new TypeError('The "listener" argument must be of type Function. Received type ' + typeof e)
            }

            function c(e) {
                return void 0 === e._maxListeners ? s.defaultMaxListeners : e._maxListeners
            }

            function u(e, t, n, i) {
                var r, s, o, u;
                if (a(n), void 0 === (s = e._events) ? (s = e._events = Object.create(null), e._eventsCount = 0) : (void 0 !== s.newListener && (e.emit("newListener", t, n.listener ? n.listener : n), s = e._events), o = s[t]), void 0 === o) o = s[t] = n, ++e._eventsCount; else if ("function" == typeof o ? o = s[t] = i ? [n, o] : [o, n] : i ? o.unshift(n) : o.push(n), (r = c(e)) > 0 && o.length > r && !o.warned) {
                    o.warned = !0;
                    var l    = new Error("Possible EventEmitter memory leak detected. " + o.length + " " + String(t) + " listeners added. Use emitter.setMaxListeners() to increase limit");
                    l.name = "MaxListenersExceededWarning", l.emitter = e, l.type = t, l.count = o.length, u = l, console && console.warn && console.warn(u)
                }
                return e
            }

            function l() {
                if (!this.fired) return this.target.removeListener(this.type, this.wrapFn), this.fired = !0, 0 === arguments.length ? this.listener.call(this.target) : this.listener.apply(this.target, arguments)
            }

            function d(e, t, n) {
                var i = {fired: !1, wrapFn: void 0, target: e, type: t, listener: n}, r = l.bind(i);
                return r.listener = n, i.wrapFn = r, r
            }

            function h(e, t, n) {
                var i = e._events;
                if (void 0 === i) return [];
                var r = i[t];
                return void 0 === r ? [] : "function" == typeof r ? n ? [r.listener || r] : [r] : n ? function (e) {
                    for (var t = new Array(e.length), n = 0; n < t.length; ++n) t[n] = e[n].listener || e[n];
                    return t
                }(r) : m(r, r.length)
            }

            function p(e) {
                var t = this._events;
                if (void 0 !== t) {
                    var n = t[e];
                    if ("function" == typeof n) return 1;
                    if (void 0 !== n) return n.length
                }
                return 0
            }

            function m(e, t) {
                for (var n = new Array(t), i = 0; i < t; ++i) n[i] = e[i];
                return n
            }

            function g(e, t, n, i) {
                if ("function" == typeof e.on) i.once ? e.once(t, n) : e.on(t, n); else {
                    if ("function" != typeof e.addEventListener) throw new TypeError('The "emitter" argument must be of type EventEmitter. Received type ' + typeof e);
                    e.addEventListener(t, (function r(s) {
                        i.once && e.removeEventListener(t, r), n(s)
                    }))
                }
            }

            Object.defineProperty(s, "defaultMaxListeners", {
                enumerable: !0, get: function () {
                    return o
                }, set    : function (e) {
                    if ("number" != typeof e || e < 0 || r(e)) throw new RangeError('The value of "defaultMaxListeners" is out of range. It must be a non-negative number. Received ' + e + ".");
                    o = e
                }
            }), s.init = function () {
                void 0 !== this._events && this._events !== Object.getPrototypeOf(this)._events || (this._events = Object.create(null), this._eventsCount = 0), this._maxListeners = this._maxListeners || void 0
            }, s.prototype.setMaxListeners = function (e) {
                if ("number" != typeof e || e < 0 || r(e)) throw new RangeError('The value of "n" is out of range. It must be a non-negative number. Received ' + e + ".");
                return this._maxListeners = e, this
            }, s.prototype.getMaxListeners = function () {
                return c(this)
            }, s.prototype.emit = function (e) {
                for (var t = [], n = 1; n < arguments.length; n++) t.push(arguments[n]);
                var r = "error" === e, s = this._events;
                if (void 0 !== s) r = r && void 0 === s.error; else if (!r) return !1;
                if (r) {
                    var o;
                    if (t.length > 0 && (o = t[0]), o instanceof Error) throw o;
                    var a = new Error("Unhandled error." + (o ? " (" + o.message + ")" : ""));
                    throw a.context = o, a
                }
                var c = s[e];
                if (void 0 === c) return !1;
                if ("function" == typeof c) i(c, this, t); else {
                    var u = c.length, l = m(c, u);
                    for (n = 0; n < u; ++n) i(l[n], this, t)
                }
                return !0
            }, s.prototype.addListener = function (e, t) {
                return u(this, e, t, !1)
            }, s.prototype.on = s.prototype.addListener, s.prototype.prependListener = function (e, t) {
                return u(this, e, t, !0)
            }, s.prototype.once = function (e, t) {
                return a(t), this.on(e, d(this, e, t)), this
            }, s.prototype.prependOnceListener = function (e, t) {
                return a(t), this.prependListener(e, d(this, e, t)), this
            }, s.prototype.removeListener = function (e, t) {
                var n, i, r, s, o;
                if (a(t), void 0 === (i = this._events)) return this;
                if (void 0 === (n = i[e])) return this;
                if (n === t || n.listener === t) 0 == --this._eventsCount ? this._events = Object.create(null) : (delete i[e], i.removeListener && this.emit("removeListener", e, n.listener || t)); else if ("function" != typeof n) {
                    for (r = -1, s = n.length - 1; s >= 0; s--) if (n[s] === t || n[s].listener === t) {
                        o = n[s].listener, r = s;
                        break
                    }
                    if (r < 0) return this;
                    0 === r ? n.shift() : function (e, t) {
                        for (; t + 1 < e.length; t++) e[t] = e[t + 1];
                        e.pop()
                    }(n, r), 1 === n.length && (i[e] = n[0]), void 0 !== i.removeListener && this.emit("removeListener", e, o || t)
                }
                return this
            }, s.prototype.off = s.prototype.removeListener, s.prototype.removeAllListeners = function (e) {
                var t, n, i;
                if (void 0 === (n = this._events)) return this;
                if (void 0 === n.removeListener) return 0 === arguments.length ? (this._events = Object.create(null), this._eventsCount = 0) : void 0 !== n[e] && (0 == --this._eventsCount ? this._events = Object.create(null) : delete n[e]), this;
                if (0 === arguments.length) {
                    var r, s = Object.keys(n);
                    for (i = 0; i < s.length; ++i) "removeListener" !== (r = s[i]) && this.removeAllListeners(r);
                    return this.removeAllListeners("removeListener"), this._events = Object.create(null), this._eventsCount = 0, this
                }
                if ("function" == typeof (t = n[e])) this.removeListener(e, t); else if (void 0 !== t) for (i = t.length - 1; i >= 0; i--) this.removeListener(e, t[i]);
                return this
            }, s.prototype.listeners = function (e) {
                return h(this, e, !0)
            }, s.prototype.rawListeners = function (e) {
                return h(this, e, !1)
            }, s.listenerCount = function (e, t) {
                return "function" == typeof e.listenerCount ? e.listenerCount(t) : p.call(e, t)
            }, s.prototype.listenerCount = p, s.prototype.eventNames = function () {
                return this._eventsCount > 0 ? t(this._events) : []
            }
        }, 746: e => {
            function t(e, t) {
                if (!e) throw new Error(t || "Assertion failed")
            }

            e.exports = t, t.equal = function (e, t, n) {
                if (e != t) throw new Error(n || "Assertion failed: " + e + " != " + t)
            }
        }, 757: function (e) {
            e.exports = function (e) {
                var t = {};

                function n(i) {
                    if (t[i]) return t[i].exports;
                    var r = t[i] = {i, l: !1, exports: {}};
                    return e[i].call(r.exports, r, r.exports, n), r.l = !0, r.exports
                }

                return n.m = e, n.c = t, n.d = function (e, t, i) {
                    n.o(e, t) || Object.defineProperty(e, t, {enumerable: !0, get: i})
                }, n.r = function (e) {
                    "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {value: "Module"}), Object.defineProperty(e, "__esModule", {value: !0})
                }, n.t = function (e, t) {
                    if (1 & t && (e = n(e)), 8 & t) return e;
                    if (4 & t && "object" == typeof e && e && e.__esModule) return e;
                    var i = Object.create(null);
                    if (n.r(i), Object.defineProperty(i, "default", {enumerable: !0, value: e}), 2 & t && "string" != typeof e) for (var r in e) n.d(i, r, function (t) {
                        return e[t]
                    }.bind(null, r));
                    return i
                }, n.n = function (e) {
                    var t = e && e.__esModule ? function () {
                        return e.default
                    } : function () {
                        return e
                    };
                    return n.d(t, "a", t), t
                }, n.o = function (e, t) {
                    return Object.prototype.hasOwnProperty.call(e, t)
                }, n.p = "", n(n.s = 0)
            }([
                function (e, t, n) {
                    "use strict";
                    n.r(t), n.d(t, "UuidTool", (function () {
                        return s
                    })), n.d(t, "Uuid", (function () {
                        return r
                    }));
                    var i  = {uuid: /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/i}, r = function () {
                        function e(e) {
                            this.id = "", "string" == typeof e ? this.fromString(e) : Array.isArray(e) ? this.fromBytes(e) : this.generate()
                        }

                        return e.fromJson = function (t) {
                            if ("string" == typeof t && (t = JSON.parse(t)), !t || !t.id) throw new TypeError("The input cannot be converted to Uuid.");
                            return new e(t.id)
                        }, e.prototype.generate = function () {
                            var e = new Array(16).fill(0).map((function () {
                                return 256 * Math.random() & 255
                            }));
                            return e[6] = 79 & (64 | e[6]), this.fromBytes(e), this
                        }, e.prototype.fromBytes = function (e) {
                            return this.id = e.map((function (e) {
                                return ("00" + e.toString(16)).slice(-2)
                            })).join("").replace(/(.{8})(.{4})(.{4})(.{4})(.{12})/, "$1-$2-$3-$4-$5"), this.id = this.toString(), this
                        }, e.prototype.toBytes = function () {
                            return (this.id.replace(/-/g, "").match(/.{2}/g) || []).map((function (e) {
                                return parseInt(e, 16)
                            }))
                        }, e.prototype.fromString = function (e) {
                            return this.id = e.trim(), this.id = this.toString(), this
                        }, e.prototype.toString = function () {
                            switch (e.stringExportFormat) {
                                default:
                                case"lowercase":
                                    return this.id.toLowerCase();
                                case"uppercase":
                                    return this.id.toUpperCase()
                            }
                        }, e.prototype.isValid = function () {
                            return "string" == typeof this.id && 36 === this.id.length && i.uuid.test(this.id)
                        }, e.prototype.equals = function (t) {
                            return "string" == typeof t && (t = new e(t)), this.toString() === t.toString()
                        }, e.stringExportFormat = "lowercase", e
                    }(), s = function () {
                        function e() {
                        }

                        return e.toBytes = function (e) {
                            return (new r).fromString(e).toBytes()
                        }, e.toString = function (e) {
                            return (new r).fromBytes(e).toString()
                        }, e.newUuid = function () {
                            return (new r).toString()
                        }, e.isUuid = function (e) {
                            return (new r).fromString(e).isValid()
                        }, e.compare = function (e, t) {
                            return new r(e).equals(new r(t))
                        }, e
                    }()
                }
            ])
        }, 955: (e, t, n) => {
            "use strict";

            function i(e) {
                for (var t = 1; t < arguments.length; t++) {
                    var n = arguments[t];
                    for (var i in n) e[i] = n[i]
                }
                return e
            }

            n.d(t, {Z: () => s});
            var r   = function e(t, n) {
                function r(e, r, s) {
                    if ("undefined" != typeof document) {
                        "number" == typeof (s = i({}, n, s)).expires && (s.expires = new Date(Date.now() + 864e5 * s.expires)), s.expires && (s.expires = s.expires.toUTCString()), e = encodeURIComponent(e).replace(/%(2[346B]|5E|60|7C)/g, decodeURIComponent).replace(/[()]/g, escape);
                        var o = "";
                        for (var a in s) s[a] && (o += "; " + a, !0 !== s[a] && (o += "=" + s[a].split(";")[0]));
                        return document.cookie = e + "=" + t.write(r, e) + o
                    }
                }

                return Object.create({
                    set              : r, get: function (e) {
                        if ("undefined" != typeof document && (!arguments.length || e)) {
                            for (var n = document.cookie ? document.cookie.split("; ") : [], i = {}, r = 0; r < n.length; r++) {
                                var s = n[r].split("="), o = s.slice(1).join("=");
                                try {
                                    var a = decodeURIComponent(s[0]);
                                    if (i[a] = t.read(o, a), e === a) break
                                } catch (e) {
                                }
                            }
                            return e ? i[e] : i
                        }
                    }, remove        : function (e, t) {
                        r(e, "", i({}, t, {expires: -1}))
                    }, withAttributes: function (t) {
                        return e(this.converter, i({}, this.attributes, t))
                    }, withConverter : function (t) {
                        return e(i({}, this.converter, t), this.attributes)
                    }
                }, {attributes: {value: Object.freeze(n)}, converter: {value: Object.freeze(t)}})
            }({
                read    : function (e) {
                    return '"' === e[0] && (e = e.slice(1, -1)), e.replace(/(%[\dA-F]{2})+/gi, decodeURIComponent)
                }, write: function (e) {
                    return encodeURIComponent(e).replace(/%(2[346BF]|3[AC-F]|40|5[BDE]|60|7[BCD])/g, decodeURIComponent)
                }
            }, {path: "/"});
            const s = r
        }
    }, __webpack_module_cache__ = {};

    function __webpack_require__(e) {
        var t = __webpack_module_cache__[e];
        if (void 0 !== t) return t.exports;
        var n = __webpack_module_cache__[e] = {id: e, loaded: !1, exports: {}};
        return __webpack_modules__[e].call(n.exports, n, n.exports, __webpack_require__), n.loaded = !0, n.exports
    }

    __webpack_require__.n = e => {
        var t = e && e.__esModule ? () => e.default : () => e;
        return __webpack_require__.d(t, {a: t}), t
    }, __webpack_require__.d = (e, t) => {
        for (var n in t) __webpack_require__.o(t, n) && !__webpack_require__.o(e, n) && Object.defineProperty(e, n, {enumerable: !0, get: t[n]})
    }, __webpack_require__.g = function () {
        if ("object" == typeof globalThis) return globalThis;
        try {
            return this || new Function("return this")()
        } catch (e) {
            if ("object" == typeof window) return window
        }
    }(), __webpack_require__.o = (e, t) => Object.prototype.hasOwnProperty.call(e, t), __webpack_require__.r = e => {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {value: "Module"}), Object.defineProperty(e, "__esModule", {value: !0})
    }, __webpack_require__.nmd = e => (e.paths = [], e.children || (e.children = []), e);
    var __webpack_exports__ = {};
    (() => {
        "use strict";
        var e   = __webpack_require__(257);
        var t   = __webpack_require__(370);
        const n = (0, e.Z)("system");

        function i(e, ...t) {
            return {factory: e, params: t, edges: [], _edges: [], instance: null}
        }

        function r(e) {
            return e.map((e => e))
        }

        var s, o = (s = function (e, t) {
            return s = Object.setPrototypeOf || {__proto__: []} instanceof Array && function (e, t) {
                e.__proto__ = t
            } || function (e, t) {
                for (var n in t) Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n])
            }, s(e, t)
        }, function (e, t) {
            if ("function" != typeof t && null !== t) throw new TypeError("Class extends value " + String(t) + " is not a constructor or null");

            function n() {
                this.constructor = e
            }

            s(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n)
        });
        const a  = function (e) {
            function t() {
                return null !== e && e.apply(this, arguments) || this
            }

            return o(t, e), t
        }(Array);
        var c;
        !function (e) {
            e.HANDSHAKE_REQUEST = "HANDSHAKE_REQUEST", e.HANDSHAKE_RESPONSE = "HANDSHAKE_RESPONSE", e.DATA_REQUEST = "DATA_REQUEST", e.DATA_RESPONSE = "DATA_RESPONSE"
        }(c || (c = {}));
        var u, l, d, h = [c.HANDSHAKE_REQUEST, c.DATA_REQUEST], p = [c.HANDSHAKE_RESPONSE, c.DATA_RESPONSE];
        !function (e) {
            e.COOKIES = "COOKIES", e.LS = "LS", e.LS_PER_SITE = "LS_PER_SITE"
        }(u || (u = {})), function (e) {
            e.GET_VALUE = "GET_VALUE", e.SET_VALUE = "SET_VALUE", e.REMOVE_VALUE = "REMOVE_VALUE", e.CLEAR = "CLEAR", e.CHECK_STORAGE = "CHECK_STORAGE"
        }(l || (l = {})), function (e) {
            e.AVAILABLE = "AVAILABLE", e.UNAVAILABLE = "UNAVAILABLE", e.FULL = "FULL", e.UNKNOWN = "UNKNOWN"
        }(d || (d = {}));
        var m   = {
            VALIDATION_FIELD_NOT_FOUND   : "Mandatory request field(s) not found",
            VALIDATION_SET_NO_VALUE      : 'For the "'.concat(l.SET_VALUE, ' action "value" must be specified'),
            VALIDATION_UNSUPPORTED_ACTION: "Unsupported action requested. Must be one of: ".concat(Object.values(l).join(", ")),
            VALIDATION_INCORRECT_STORAGE : "Incorrect storage provided",
            VALIDATION_SITE_ID_NOT_FOUND : 'For the per-site LS storage the "meta.siteId" field must be specified',
            STORAGE_NOT_AVAILABLE        : "The storage is not available"
        }, g    = "flocktoryLogEnabled", f = "https:" === location.protocol, w = "https://api.flocktory.com", v = function () {
            return Date.now().toString(36) + Math.random().toString(36).substr(2)
        }, y    = 0;
        const b = function (e) {
            this.id = v(), this.debugNumber = ++y, this.messageType = e
        };
        var _   = function () {
            var e = function (t, n) {
                return e = Object.setPrototypeOf || {__proto__: []} instanceof Array && function (e, t) {
                    e.__proto__ = t
                } || function (e, t) {
                    for (var n in t) Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n])
                }, e(t, n)
            };
            return function (t, n) {
                if ("function" != typeof n && null !== n) throw new TypeError("Class extends value " + String(n) + " is not a constructor or null");

                function i() {
                    this.constructor = t
                }

                e(t, n), t.prototype = null === n ? Object.create(n) : (i.prototype = n.prototype, new i)
            }
        }();
        const k = function (e) {
            function t(t, n, i) {
                var r = e.call(this, t) || this;
                return r.requestId = n, r.requestDebugNumber = i, r
            }

            return _(t, e), t
        }(b);
        var S   = function () {
            var e = function (t, n) {
                return e = Object.setPrototypeOf || {__proto__: []} instanceof Array && function (e, t) {
                    e.__proto__ = t
                } || function (e, t) {
                    for (var n in t) Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n])
                }, e(t, n)
            };
            return function (t, n) {
                if ("function" != typeof n && null !== n) throw new TypeError("Class extends value " + String(n) + " is not a constructor or null");

                function i() {
                    this.constructor = t
                }

                e(t, n), t.prototype = null === n ? Object.create(n) : (i.prototype = n.prototype, new i)
            }
        }();
        const E = function (e) {
            function t(t, n) {
                return e.call(this, c.DATA_RESPONSE, t, n) || this
            }

            return S(t, e), t
        }(k);
        var I   = function () {
            var e = function (t, n) {
                return e = Object.setPrototypeOf || {__proto__: []} instanceof Array && function (e, t) {
                    e.__proto__ = t
                } || function (e, t) {
                    for (var n in t) Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n])
                }, e(t, n)
            };
            return function (t, n) {
                if ("function" != typeof n && null !== n) throw new TypeError("Class extends value " + String(n) + " is not a constructor or null");

                function i() {
                    this.constructor = t
                }

                e(t, n), t.prototype = null === n ? Object.create(n) : (i.prototype = n.prototype, new i)
            }
        }();
        const A = function (e) {
            function t(t) {
                var n = this, i = t.name, r = t.value, s = t.expireAt, o = t.action, a = t.storage, u = t.meta;
                return (n = e.call(this, c.DATA_REQUEST) || this).name = i, n.value = r, n.expireAt = s, n.action = o, n.storage = a, n.meta = u, n
            }

            return I(t, e), t.prototype.generateResponse = function () {
                var e = new E(this.id, this.debugNumber);
                return e.name = this.name, e.action = this.action, e.storage = this.storage, e.meta = this.meta, e
            }, t.deserialize = function (e) {
                var n = e.id, i = e.debugNumber, r = new t(e);
                return r.id = n, r.debugNumber = i, r
            }, t
        }(b);
        var T   = function () {
            var e = function (t, n) {
                return e = Object.setPrototypeOf || {__proto__: []} instanceof Array && function (e, t) {
                    e.__proto__ = t
                } || function (e, t) {
                    for (var n in t) Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n])
                }, e(t, n)
            };
            return function (t, n) {
                if ("function" != typeof n && null !== n) throw new TypeError("Class extends value " + String(n) + " is not a constructor or null");

                function i() {
                    this.constructor = t
                }

                e(t, n), t.prototype = null === n ? Object.create(n) : (i.prototype = n.prototype, new i)
            }
        }();
        const C = function (e) {
            function t(t, n) {
                return e.call(this, c.HANDSHAKE_RESPONSE, t, n) || this
            }

            return T(t, e), t
        }(k);
        var P   = function () {
            var e = function (t, n) {
                return e = Object.setPrototypeOf || {__proto__: []} instanceof Array && function (e, t) {
                    e.__proto__ = t
                } || function (e, t) {
                    for (var n in t) Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n])
                }, e(t, n)
            };
            return function (t, n) {
                if ("function" != typeof n && null !== n) throw new TypeError("Class extends value " + String(n) + " is not a constructor or null");

                function i() {
                    this.constructor = t
                }

                e(t, n), t.prototype = null === n ? Object.create(n) : (i.prototype = n.prototype, new i)
            }
        }();
        const O = function (e) {
            function t() {
                return e.call(this, c.HANDSHAKE_REQUEST) || this
            }

            return P(t, e), t.prototype.generateResponse = function () {
                return new C(this.id, this.debugNumber)
            }, t.deserialize = function (e) {
                var n = e.id, i = e.debugNumber, r = new t;
                return r.id = n, r.debugNumber = i, r
            }, t
        }(b);
        var L   = function (e, t, n) {
            if (n || 2 === arguments.length) for (var i, r = 0, s = t.length; r < s; r++) !i && r in t || (i || (i = Array.prototype.slice.call(t, 0, r)), i[r] = t[r]);
            return e.concat(i || Array.prototype.slice.call(t))
        };
        const x = function (e) {
            var t = e.id, n = e.name, i = e.value, r = e.action, s = e.storage, o = e.meta, a = [l.CHECK_STORAGE, l.CLEAR].includes(r), c = L(L(L(L([], t ? [] : ['"id"'], !0), a || n ? [] : ['"name"'], !0), r ? [] : ['"action"'], !0), s ? [] : ['"storage"'], !0).join(", ");
            if (c) throw new Error("".concat(m.VALIDATION_FIELD_NOT_FOUND, ": ").concat(c));
            if (r === l.SET_VALUE && !i) throw new Error(m.VALIDATION_SET_NO_VALUE);
            if (!Object.keys(l).includes(r)) throw new Error("".concat(m.VALIDATION_UNSUPPORTED_ACTION, ': "').concat(r, '"'));
            if (!Object.values(u).includes(s)) throw new Error(m.VALIDATION_INCORRECT_STORAGE);
            if (r !== l.CHECK_STORAGE && s === u.LS_PER_SITE && !(null == o ? void 0 : o.siteId)) throw new Error(m.VALIDATION_SITE_ID_NOT_FOUND)
        };
        var N   = __webpack_require__(252), D = __webpack_require__.n(N), V = __webpack_require__(955);
        const R = function () {
            function e() {
            }

            return e.prototype.doRequestAction = function (e) {
                var t = e.name, n = e.value, i = e.action, r = e.expireAt, s = this.getStatus() === d.AVAILABLE;
                if (i !== l.CHECK_STORAGE && !s) throw new Error("".concat(m.STORAGE_NOT_AVAILABLE, ": ").concat(this.getName()));
                switch (i) {
                    case l.GET_VALUE:
                        return this.getValue(t);
                    case l.SET_VALUE:
                        this.setValue(t, n, r);
                        break;
                    case l.REMOVE_VALUE:
                        this.removeValue(t);
                        break;
                    case l.CLEAR:
                        this.clear();
                        break;
                    case l.CHECK_STORAGE:
                        return s
                }
            }, e
        }();
        var U   = function () {
            var e = function (t, n) {
                return e = Object.setPrototypeOf || {__proto__: []} instanceof Array && function (e, t) {
                    e.__proto__ = t
                } || function (e, t) {
                    for (var n in t) Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n])
                }, e(t, n)
            };
            return function (t, n) {
                if ("function" != typeof n && null !== n) throw new TypeError("Class extends value " + String(n) + " is not a constructor or null");

                function i() {
                    this.constructor = t
                }

                e(t, n), t.prototype = null === n ? Object.create(n) : (i.prototype = n.prototype, new i)
            }
        }(), M  = function () {
            return M = Object.assign || function (e) {
                for (var t, n = 1, i = arguments.length; n < i; n++) for (var r in t = arguments[n]) Object.prototype.hasOwnProperty.call(t, r) && (e[r] = t[r]);
                return e
            }, M.apply(this, arguments)
        }, j    = 864e5;
        const F = function (e) {
            function t() {
                return null !== e && e.apply(this, arguments) || this
            }

            return U(t, e), t.prototype.getName = function () {
                return u.COOKIES
            }, t.prototype.getStatus = function () {
                var e = "".concat(t.STATUS_COOKIE_NAME, "_").concat(v()), n = Date.now() + j;
                try {
                    return this.setValue(e, t.STATUS_COOKIE_VALUE, n), this.getValue(e) === t.STATUS_COOKIE_VALUE ? d.AVAILABLE : d.UNAVAILABLE
                } catch (e) {
                    return this.getValue(g) && console.error("[getStatus]", e), d.UNKNOWN
                } finally {
                    this.removeValue(e)
                }
            }, t.prototype.getValue = function (e) {
                return V.Z.get(e)
            }, t.prototype.setValue = function (e, n, i) {
                var r = M({}, t.DEFAULT_COOKIES_PARAMS);
                i && (r.expires = Math.round((i - Date.now()) / j)), V.Z.set(e, n, r)
            }, t.prototype.removeValue = function (e) {
                V.Z.remove(e, t.DEFAULT_COOKIES_PARAMS)
            }, t.prototype.clear = function () {
                console.log("[clear] Use this method for development purposes only"), D()(window)()
            }, t.STATUS_COOKIE_NAME = "CookieStorage_status_test", t.STATUS_COOKIE_VALUE = "test", t.DEFAULT_COOKIES_PARAMS = f ? {sameSite: "none", secure: !0} : {}, t
        }(R);
        var $   = function () {
            var e = function (t, n) {
                return e = Object.setPrototypeOf || {__proto__: []} instanceof Array && function (e, t) {
                    e.__proto__ = t
                } || function (e, t) {
                    for (var n in t) Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n])
                }, e(t, n)
            };
            return function (t, n) {
                if ("function" != typeof n && null !== n) throw new TypeError("Class extends value " + String(n) + " is not a constructor or null");

                function i() {
                    this.constructor = t
                }

                e(t, n), t.prototype = null === n ? Object.create(n) : (i.prototype = n.prototype, new i)
            }
        }();
        const W = function (e) {
            function t() {
                return null !== e && e.apply(this, arguments) || this
            }

            return $(t, e), t.prototype.getName = function () {
                return u.LS
            }, t.prototype.getStatus = function () {
                try {
                    this.setValue(t.STATUS_ITEM_KEY, t.STATUS_ITEM_VALUE), this.removeValue(t.STATUS_ITEM_KEY)
                } catch (e) {
                    if ("QUOTA_EXCEEDED_ERR" === e.name) return d.FULL;
                    if ("NS_ERROR_DOM_QUOTA_REACHED" === e.name) return d.FULL;
                    try {
                        if (0 === parseInt(window.localStorage.remainingSpace, 10)) return d.FULL
                    } catch (e) {
                        return V.Z.get(g) && console.error("[getStatus]", e), d.UNKNOWN
                    }
                    return d.UNAVAILABLE
                }
                return d.AVAILABLE
            }, t.prototype.getValue = function (e) {
                return window.localStorage.getItem(e)
            }, t.prototype.setValue = function (e, t) {
                window.localStorage.setItem(e, t)
            }, t.prototype.removeValue = function (e) {
                window.localStorage.removeItem(e)
            }, t.prototype.clear = function () {
                console.log("[clear] Use this method for development purposes only"), window.localStorage.clear()
            }, t.STATUS_ITEM_KEY = "LsStorage_status_test", t.STATUS_ITEM_VALUE = "test", t
        }(R);
        var q   = function () {
            var e = function (t, n) {
                return e = Object.setPrototypeOf || {__proto__: []} instanceof Array && function (e, t) {
                    e.__proto__ = t
                } || function (e, t) {
                    for (var n in t) Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n])
                }, e(t, n)
            };
            return function (t, n) {
                if ("function" != typeof n && null !== n) throw new TypeError("Class extends value " + String(n) + " is not a constructor or null");

                function i() {
                    this.constructor = t
                }

                e(t, n), t.prototype = null === n ? Object.create(n) : (i.prototype = n.prototype, new i)
            }
        }(), B  = function (e) {
            function t(n) {
                var i           = e.call(this) || this;
                i.fullKeyPrefix = t.buildFullKeyPrefix(n);
                try {
                    i.clearOldValues()
                } catch (e) {
                    V.Z.get(g) && console.error(e)
                }
                return i
            }

            return q(t, e), t.buildFullKeyPrefix = function (e) {
                return "".concat(t.STORAGE_KEY_MAIN_PREFIX, ":").concat(e, ":")
            }, t.prototype.getName = function () {
                return u.LS_PER_SITE
            }, t.prototype.buildStorageKey = function (e) {
                return "".concat(this.fullKeyPrefix).concat(e)
            }, t.getValueObject = function (e) {
                var t = window.localStorage.getItem(e);
                if (t) return JSON.parse(t)
            }, t.prototype.clearOldValues = function () {
                var e = this;
                Object.keys(window.localStorage).filter((function (t) {
                    return t.startsWith(e.fullKeyPrefix)
                })).forEach((function (e) {
                    var n = t.getValueObject(e);
                    if (n) {
                        var i = n.expireAt;
                        (i && i < Date.now() || null === i) && window.localStorage.removeItem(e)
                    }
                }))
            }, t.prototype.getValue = function (e) {
                var n = this.buildStorageKey(e), i = t.getValueObject(n);
                if (i) return i.value ? "number" != typeof i.expireAt || i.expireAt > Date.now() ? i.value : void 0 : i
            }, t.prototype.setValue = function (e, n, i) {
                var r = this.buildStorageKey(e), s = JSON.stringify({value: n, expireAt: i || Date.now() + t.DEFAULT_EXPIRE_IN, updateTs: Date.now()});
                window.localStorage.setItem(r, s)
            }, t.prototype.removeValue = function (e) {
                var t = this.buildStorageKey(e);
                window.localStorage.removeItem(t)
            }, t.prototype.clear = function () {
                var e = this;
                Object.keys(window.localStorage).filter((function (t) {
                    return t.startsWith(e.fullKeyPrefix)
                })).forEach((function (e) {
                    return window.localStorage.removeItem(e)
                }))
            }, t.STORAGE_KEY_MAIN_PREFIX = "flockapi", t.DEFAULT_EXPIRE_IN = 2592e6, t
        }(W);
        const z = B;
        window.addEventListener("message", (function (e) {
            var t = e.data, n = e.origin;
            if (h.includes(null == t ? void 0 : t.messageType) && (window.location.origin === w || n === w)) {
                var i = t.messageType === c.HANDSHAKE_REQUEST ? function (e) {
                    return O.deserialize(e).generateResponse()
                }(t) : function (e) {
                    var t = A.deserialize(e), n = t.generateResponse();
                    try {
                        x(t);
                        var i = t.storage, r = t.meta;
                        if (t.messageType === c.DATA_REQUEST) {
                            var s = void 0;
                            switch (i) {
                                case u.COOKIES:
                                    s = new F;
                                    break;
                                case u.LS:
                                    s = new W;
                                    break;
                                case u.LS_PER_SITE:
                                    s = new z(r.siteId)
                            }
                            n.value = s.doRequestAction(t)
                        }
                    } catch (e) {
                        n.errorMessage = e.message, n.errorStack = e.stack
                    }
                    return n
                }(t);
                window.parent.postMessage(i, n)
            }
        }));
        var K    = __webpack_require__(746), H = __webpack_require__.n(K), Z = "iframe_flock_data_provider", G = "https://api.flocktory.com", J = V.Z.get(g), Y = function (e, t, n, i) {
            return new (n || (n = Promise))((function (r, s) {
                function o(e) {
                    try {
                        c(i.next(e))
                    } catch (e) {
                        s(e)
                    }
                }

                function a(e) {
                    try {
                        c(i.throw(e))
                    } catch (e) {
                        s(e)
                    }
                }

                function c(e) {
                    var t;
                    e.done ? r(e.value) : (t = e.value, t instanceof n ? t : new n((function (e) {
                        e(t)
                    }))).then(o, a)
                }

                c((i = i.apply(e, t || [])).next())
            }))
        }, Q     = function (e, t) {
            var n, i, r, s, o = {
                label  : 0, sent: function () {
                    if (1 & r[0]) throw r[1];
                    return r[1]
                }, trys: [], ops: []
            };
            return s = {next: a(0), throw: a(1), return: a(2)}, "function" == typeof Symbol && (s[Symbol.iterator] = function () {
                return this
            }), s;

            function a(s) {
                return function (a) {
                    return function (s) {
                        if (n) throw new TypeError("Generator is already executing.");
                        for (; o;) try {
                            if (n = 1, i && (r = 2 & s[0] ? i.return : s[0] ? i.throw || ((r = i.return) && r.call(i), 0) : i.next) && !(r = r.call(i, s[1])).done) return r;
                            switch (i = 0, r && (s = [2 & s[0], r.value]), s[0]) {
                                case 0:
                                case 1:
                                    r = s;
                                    break;
                                case 4:
                                    return o.label++, {value: s[1], done: !1};
                                case 5:
                                    o.label++, i = s[1], s = [0];
                                    continue;
                                case 7:
                                    s = o.ops.pop(), o.trys.pop();
                                    continue;
                                default:
                                    if (!(r = o.trys, (r = r.length > 0 && r[r.length - 1]) || 6 !== s[0] && 2 !== s[0])) {
                                        o = 0;
                                        continue
                                    }
                                    if (3 === s[0] && (!r || s[1] > r[0] && s[1] < r[3])) {
                                        o.label = s[1];
                                        break
                                    }
                                    if (6 === s[0] && o.label < r[1]) {
                                        o.label = r[1], r = s;
                                        break
                                    }
                                    if (r && o.label < r[2]) {
                                        o.label = r[2], o.ops.push(s);
                                        break
                                    }
                                    r[2] && o.ops.pop(), o.trys.pop();
                                    continue
                            }
                            s = t.call(e, o)
                        } catch (e) {
                            s = [6, e], i = 0
                        } finally {
                            n = r = 0
                        }
                        if (5 & s[0]) throw s[1];
                        return {value: s[0] ? s[1] : void 0, done: !0}
                    }([s, a])
                }
            }
        }, X     = function (e) {
            return void 0 === e && (e = 0), new Promise((function (t) {
                return setTimeout(t, e)
            }))
        }, ee    = function (e, t) {
            return void 0 === t && (t = 100), Y(void 0, void 0, void 0, (function () {
                return Q(this, (function (n) {
                    switch (n.label) {
                        case 0:
                            H()((i = e, Boolean(i) && "[object Function]" === {}.toString.call(i)), '[waitFor] The "predicate" must be a function'), n.label = 1;
                        case 1:
                            return e() ? [3, 3] : [4, X(t)];
                        case 2:
                            return n.sent(), [3, 1];
                        case 3:
                            return [2]
                    }
                    var i
                }))
            }))
        }, te    = function (e, t) {
            H()(e, '[createTimeoutPromise] parameter "originalPromise" not found'), H()("number" == typeof t && t > 0, '[createTimeoutPromise] parameter "timeoutMillis" must be a positive number');
            var n  = new Promise((function (e, n) {
                return setTimeout((function () {
                    n(new Error("Promise timed out after ".concat(t, " milliseconds")))
                }), t)
            })), i = new Promise((function (e) {
                e(null)
            }));
            return Promise.race([e, n]).catch((function (e) {
                return J && console.warn(e), i
            }))
        }, ne    = function (e, t, n, i) {
            return new (n || (n = Promise))((function (r, s) {
                function o(e) {
                    try {
                        c(i.next(e))
                    } catch (e) {
                        s(e)
                    }
                }

                function a(e) {
                    try {
                        c(i.throw(e))
                    } catch (e) {
                        s(e)
                    }
                }

                function c(e) {
                    var t;
                    e.done ? r(e.value) : (t = e.value, t instanceof n ? t : new n((function (e) {
                        e(t)
                    }))).then(o, a)
                }

                c((i = i.apply(e, t || [])).next())
            }))
        }, ie    = function (e, t) {
            var n, i, r, s, o = {
                label  : 0, sent: function () {
                    if (1 & r[0]) throw r[1];
                    return r[1]
                }, trys: [], ops: []
            };
            return s = {next: a(0), throw: a(1), return: a(2)}, "function" == typeof Symbol && (s[Symbol.iterator] = function () {
                return this
            }), s;

            function a(s) {
                return function (a) {
                    return function (s) {
                        if (n) throw new TypeError("Generator is already executing.");
                        for (; o;) try {
                            if (n = 1, i && (r = 2 & s[0] ? i.return : s[0] ? i.throw || ((r = i.return) && r.call(i), 0) : i.next) && !(r = r.call(i, s[1])).done) return r;
                            switch (i = 0, r && (s = [2 & s[0], r.value]), s[0]) {
                                case 0:
                                case 1:
                                    r = s;
                                    break;
                                case 4:
                                    return o.label++, {value: s[1], done: !1};
                                case 5:
                                    o.label++, i = s[1], s = [0];
                                    continue;
                                case 7:
                                    s = o.ops.pop(), o.trys.pop();
                                    continue;
                                default:
                                    if (!(r = o.trys, (r = r.length > 0 && r[r.length - 1]) || 6 !== s[0] && 2 !== s[0])) {
                                        o = 0;
                                        continue
                                    }
                                    if (3 === s[0] && (!r || s[1] > r[0] && s[1] < r[3])) {
                                        o.label = s[1];
                                        break
                                    }
                                    if (6 === s[0] && o.label < r[1]) {
                                        o.label = r[1], r = s;
                                        break
                                    }
                                    if (r && o.label < r[2]) {
                                        o.label = r[2], o.ops.push(s);
                                        break
                                    }
                                    r[2] && o.ops.pop(), o.trys.pop();
                                    continue
                            }
                            s = t.call(e, o)
                        } catch (e) {
                            s = [6, e], i = 0
                        } finally {
                            n = r = 0
                        }
                        if (5 & s[0]) throw s[1];
                        return {value: s[0] ? s[1] : void 0, done: !0}
                    }([s, a])
                }
            }
        };
        const re = function () {
            function e(e, t) {
                this.isInitialized = !1, this.isInitializationProgress = !1, H()(e, '[constructor] Mandatory parameter "storage" not found'), H()(Object.values(u).includes(e), '[constructor] Incorrect parameter "storage" provided'), this.storage = e, this.options = t
            }

            return e.prototype.createIframe = function () {
                var t;
                return ne(this, void 0, void 0, (function () {
                    var n, i;
                    return ie(this, (function (r) {
                        switch (r.label) {
                            case 0:
                                return n = (null === (t = this.options) || void 0 === t ? void 0 : t.iframeUrlCommitHash) ? "".concat(this.options.iframeUrlCommitHash, "/") : "", [
                                    4, new Promise((function (e) {
                                        var t, i = document.createElement("iframe");
                                        i.id = Z, i.name = Z, i.src = "".concat(G, "/v2/provider/").concat(n, "provider.html"), i.width = "0", i.height = "0", i.style.position = "absolute", i.style.top = "-2000px", i.style.left = "0px", i.onload = function () {
                                            return e(null)
                                        }, t = function () {
                                            return document.body.appendChild(i)
                                        }, H()(t instanceof Function, '[executeBodySafe] parameter "callback" must be a function'), document.body ? t() : document.addEventListener("DOMContentLoaded", t)
                                    }))
                                ];
                            case 1:
                                r.sent(), i = !1, r.label = 2;
                            case 2:
                                return i ? [3, 5] : [
                                    4, e.send(new O).then((function () {
                                        i = !0
                                    }))
                                ];
                            case 3:
                                return r.sent(), [4, X(e.CONTINUOUS_HANDSHAKE_INTERVAL)];
                            case 4:
                                return r.sent(), [3, 2];
                            case 5:
                                return [2]
                        }
                    }))
                }))
            }, e.prototype.init = function (t) {
                return void 0 === t && (t = e.CONSUMER_DEFAULT_INIT_TIMEOUT), ne(this, void 0, void 0, (function () {
                    var n, i = this;
                    return ie(this, (function (r) {
                        return H()(!this.isInitialized, "[init] Consumer already initialized"), H()(!this.isInitializationProgress, "[init] Consumer initialization already in progress"), this.isInitializationProgress = !0, n = function () {
                            return ne(i, void 0, void 0, (function () {
                                return ie(this, (function (t) {
                                    switch (t.label) {
                                        case 0:
                                            return window.flocktory.provider.isInitializationProgress ? [
                                                4, ee((function () {
                                                    return !window.flocktory.provider.isInitializationProgress
                                                }), e.INITIALIZATION_FINISH_WAIT_INTERVAL)
                                            ] : [3, 2];
                                        case 1:
                                            return t.sent(), [3, 4];
                                        case 2:
                                            return document.getElementById(Z) ? [3, 4] : (window.flocktory.provider.isInitializationProgress = !0, [4, this.createIframe()]);
                                        case 3:
                                            t.sent(), window.flocktory.provider.isInitializationProgress = !1, t.label = 4;
                                        case 4:
                                            return this.isInitialized = !0, this.isInitializationProgress = !1, [2]
                                    }
                                }))
                            }))
                        }, [2, te(n(), t)]
                    }))
                }))
            }, e.send = function (t) {
                return ne(this, void 0, void 0, (function () {
                    var n, i, r, s;
                    return ie(this, (function (o) {
                        switch (o.label) {
                            case 0:
                                n = t.id, i = t.debugNumber, s = new Promise((function (s, o) {
                                    r = function (t) {
                                        var i = t.data, r = i.messageType, a = i.requestId, c = i.requestDebugNumber, u = i.errorMessage;
                                        p.includes(r) && a === n && (e.logMessaging(r, c, i), u ? o(new Error(u)) : s(i))
                                    }, window.addEventListener("message", r), window.frames[Z].postMessage(t, G), e.logMessaging(t.messageType, i, t)
                                })), o.label = 1;
                            case 1:
                                return o.trys.push([1, , 3, 4]), [4, te(s, e.POST_MESSAGE_SEND_TIMEOUT)];
                            case 2:
                                return [2, o.sent()];
                            case 3:
                                return r && window.removeEventListener("message", r), [7];
                            case 4:
                                return [2]
                        }
                    }))
                }))
            }, e.logMessaging = function (e, t, n) {
                if (J) {
                    var i = h.includes(e) ? "--\x3e" : "<--";
                    console.log("[js-bro]", "".concat(i, " (").concat(t, ")"), n)
                }
            }, e.prototype.isStorageAvailable = function (t) {
                var n;
                return ne(this, void 0, void 0, (function () {
                    var i, r, s;
                    return ie(this, (function (o) {
                        switch (o.label) {
                            case 0:
                                return i = (t || {}).meta, r = i || (null === (n = this.options) || void 0 === n ? void 0 : n.meta), [4, e.send(new A({action: l.CHECK_STORAGE, storage: this.storage, meta: r}))];
                            case 1:
                                return s = o.sent(), [2, Boolean(null == s ? void 0 : s.value)]
                        }
                    }))
                }))
            }, e.prototype.getValue = function (t, n) {
                var i, r;
                return ne(this, void 0, void 0, (function () {
                    var s, o, a, c, u, d;
                    return ie(this, (function (h) {
                        switch (h.label) {
                            case 0:
                                return o = (s = n || {}).expireAt, a = s.meta, c = o || (null === (i = this.options) || void 0 === i ? void 0 : i.expireAt), u = a || (null === (r = this.options) || void 0 === r ? void 0 : r.meta), H()(this.isInitialized, "[getValue] Consumer not initialized"), H()(t, '[getValue] Mandatory parameter "name" not found'), [4, e.send(new A({name: t, action: l.GET_VALUE, expireAt: c, meta: u, storage: this.storage}))];
                            case 1:
                                return [2, null == (d = h.sent()) ? void 0 : d.value]
                        }
                    }))
                }))
            }, e.prototype.setValue = function (t, n, i) {
                var r, s;
                return ne(this, void 0, void 0, (function () {
                    var o, a, c, u, d;
                    return ie(this, (function (h) {
                        return a = (o = i || {}).expireAt, c = o.meta, u = a || (null === (r = this.options) || void 0 === r ? void 0 : r.expireAt), d = c || (null === (s = this.options) || void 0 === s ? void 0 : s.meta), H()(this.isInitialized, "[setValue] Consumer not initialized"), H()(t, '[setValue] Mandatory parameter "name" not found'), H()(n, '[setValue] Mandatory parameter "value" not found'), [
                            2, e.send(new A({
                                name    : t,
                                value   : n,
                                action  : l.SET_VALUE,
                                expireAt: u,
                                meta    : d,
                                storage : this.storage
                            }))
                        ]
                    }))
                }))
            }, e.prototype.removeValue = function (t, n) {
                var i, r;
                return ne(this, void 0, void 0, (function () {
                    var s, o, a, c, u;
                    return ie(this, (function (d) {
                        return o = (s = n || {}).expireAt, a = s.meta, c = o || (null === (i = this.options) || void 0 === i ? void 0 : i.expireAt), u = a || (null === (r = this.options) || void 0 === r ? void 0 : r.meta), H()(this.isInitialized, "[removeValue] Consumer not initialized"), H()(t, '[removeValue] Mandatory parameter "name" not found'), [2, e.send(new A({name: t, action: l.REMOVE_VALUE, expireAt: c, meta: u, storage: this.storage}))]
                    }))
                }))
            }, e.prototype.clear = function (t) {
                var n;
                return ne(this, void 0, void 0, (function () {
                    var i, r;
                    return ie(this, (function (s) {
                        return i = (t || {}).meta, r = i || (null === (n = this.options) || void 0 === n ? void 0 : n.meta), console.log("[clear] Use clearing for development purposes only"), H()(this.isInitialized, "[clear] Consumer not initialized"), [2, e.send(new A({action: l.CLEAR, storage: this.storage, meta: r}))]
                    }))
                }))
            }, e.CONSUMER_DEFAULT_INIT_TIMEOUT = 1e4, e.POST_MESSAGE_SEND_TIMEOUT = 1e3, e.INITIALIZATION_FINISH_WAIT_INTERVAL = 50, e.CONTINUOUS_HANDSHAKE_INTERVAL = 50, e
        }();
        var se   = __webpack_require__(742), oe = __webpack_require__(757), ae = function (e, t, n, i) {
            return new (n || (n = Promise))((function (r, s) {
                function o(e) {
                    try {
                        c(i.next(e))
                    } catch (e) {
                        s(e)
                    }
                }

                function a(e) {
                    try {
                        c(i.throw(e))
                    } catch (e) {
                        s(e)
                    }
                }

                function c(e) {
                    var t;
                    e.done ? r(e.value) : (t = e.value, t instanceof n ? t : new n((function (e) {
                        e(t)
                    }))).then(o, a)
                }

                c((i = i.apply(e, t || [])).next())
            }))
        }, ce    = function (e, t) {
            var n, i, r, s, o = {
                label  : 0, sent: function () {
                    if (1 & r[0]) throw r[1];
                    return r[1]
                }, trys: [], ops: []
            };
            return s = {next: a(0), throw: a(1), return: a(2)}, "function" == typeof Symbol && (s[Symbol.iterator] = function () {
                return this
            }), s;

            function a(s) {
                return function (a) {
                    return function (s) {
                        if (n) throw new TypeError("Generator is already executing.");
                        for (; o;) try {
                            if (n = 1, i && (r = 2 & s[0] ? i.return : s[0] ? i.throw || ((r = i.return) && r.call(i), 0) : i.next) && !(r = r.call(i, s[1])).done) return r;
                            switch (i = 0, r && (s = [2 & s[0], r.value]), s[0]) {
                                case 0:
                                case 1:
                                    r = s;
                                    break;
                                case 4:
                                    return o.label++, {value: s[1], done: !1};
                                case 5:
                                    o.label++, i = s[1], s = [0];
                                    continue;
                                case 7:
                                    s = o.ops.pop(), o.trys.pop();
                                    continue;
                                default:
                                    if (!(r = o.trys, (r = r.length > 0 && r[r.length - 1]) || 6 !== s[0] && 2 !== s[0])) {
                                        o = 0;
                                        continue
                                    }
                                    if (3 === s[0] && (!r || s[1] > r[0] && s[1] < r[3])) {
                                        o.label = s[1];
                                        break
                                    }
                                    if (6 === s[0] && o.label < r[1]) {
                                        o.label = r[1], r = s;
                                        break
                                    }
                                    if (r && o.label < r[2]) {
                                        o.label = r[2], o.ops.push(s);
                                        break
                                    }
                                    r[2] && o.ops.pop(), o.trys.pop();
                                    continue
                            }
                            s = t.call(e, o)
                        } catch (e) {
                            s = [6, e], i = 0
                        } finally {
                            n = r = 0
                        }
                        if (5 & s[0]) throw s[1];
                        return {value: s[0] ? s[1] : void 0, done: !0}
                    }([s, a])
                }
            }
        };
        const ue = function () {
            function e() {
                this.isInitializationStarted = !1, this.isInitialized = !1
            }

            return e.prototype.init = function (e) {
                return void 0 === e && (e = re.CONSUMER_DEFAULT_INIT_TIMEOUT), ae(this, void 0, void 0, (function () {
                    return ce(this, (function (t) {
                        switch (t.label) {
                            case 0:
                                return H()(!this.isInitialized, "[init] Already initialized"), H()(!this.isInitializationStarted, "[init] Initialization already started"), this.initTimeout = e, this.isInitializationStarted = !0, [4, this._init()];
                            case 1:
                                return t.sent(), this.isInitialized = !0, this.isInitializationStarted = !1, [2]
                        }
                    }))
                }))
            }, e
        }();
        var le   = function () {
            var e = function (t, n) {
                return e = Object.setPrototypeOf || {__proto__: []} instanceof Array && function (e, t) {
                    e.__proto__ = t
                } || function (e, t) {
                    for (var n in t) Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n])
                }, e(t, n)
            };
            return function (t, n) {
                if ("function" != typeof n && null !== n) throw new TypeError("Class extends value " + String(n) + " is not a constructor or null");

                function i() {
                    this.constructor = t
                }

                e(t, n), t.prototype = null === n ? Object.create(n) : (i.prototype = n.prototype, new i)
            }
        }(), de  = function (e, t, n, i) {
            return new (n || (n = Promise))((function (r, s) {
                function o(e) {
                    try {
                        c(i.next(e))
                    } catch (e) {
                        s(e)
                    }
                }

                function a(e) {
                    try {
                        c(i.throw(e))
                    } catch (e) {
                        s(e)
                    }
                }

                function c(e) {
                    var t;
                    e.done ? r(e.value) : (t = e.value, t instanceof n ? t : new n((function (e) {
                        e(t)
                    }))).then(o, a)
                }

                c((i = i.apply(e, t || [])).next())
            }))
        }, he    = function (e, t) {
            var n, i, r, s, o = {
                label  : 0, sent: function () {
                    if (1 & r[0]) throw r[1];
                    return r[1]
                }, trys: [], ops: []
            };
            return s = {next: a(0), throw: a(1), return: a(2)}, "function" == typeof Symbol && (s[Symbol.iterator] = function () {
                return this
            }), s;

            function a(s) {
                return function (a) {
                    return function (s) {
                        if (n) throw new TypeError("Generator is already executing.");
                        for (; o;) try {
                            if (n = 1, i && (r = 2 & s[0] ? i.return : s[0] ? i.throw || ((r = i.return) && r.call(i), 0) : i.next) && !(r = r.call(i, s[1])).done) return r;
                            switch (i = 0, r && (s = [2 & s[0], r.value]), s[0]) {
                                case 0:
                                case 1:
                                    r = s;
                                    break;
                                case 4:
                                    return o.label++, {value: s[1], done: !1};
                                case 5:
                                    o.label++, i = s[1], s = [0];
                                    continue;
                                case 7:
                                    s = o.ops.pop(), o.trys.pop();
                                    continue;
                                default:
                                    if (!(r = o.trys, (r = r.length > 0 && r[r.length - 1]) || 6 !== s[0] && 2 !== s[0])) {
                                        o = 0;
                                        continue
                                    }
                                    if (3 === s[0] && (!r || s[1] > r[0] && s[1] < r[3])) {
                                        o.label = s[1];
                                        break
                                    }
                                    if (6 === s[0] && o.label < r[1]) {
                                        o.label = r[1], r = s;
                                        break
                                    }
                                    if (r && o.label < r[2]) {
                                        o.label = r[2], o.ops.push(s);
                                        break
                                    }
                                    r[2] && o.ops.pop(), o.trys.pop();
                                    continue
                            }
                            s = t.call(e, o)
                        } catch (e) {
                            s = [6, e], i = 0
                        } finally {
                            n = r = 0
                        }
                        if (5 & s[0]) throw s[1];
                        return {value: s[0] ? s[1] : void 0, done: !0}
                    }([s, a])
                }
            }
        }, pe    = function (e) {
            function t(n) {
                var i = e.call(this) || this;
                return i.cookiesConsumer = new re(u.COOKIES), i.lsConsumer = new re(u.LS), i.isCookiesAvailable = !1, i.isLsAvailable = !1, i.tempSessionId = t.generateSessionId(), i.isRespectOldSessionInCookies = !1, i.isRespectOldSessionInCookies = n, i
            }

            return le(t, e), t.prototype._init = function () {
                return de(this, void 0, void 0, (function () {
                    var e, n, i, r, s, o, a, c, u;
                    return he(this, (function (l) {
                        switch (l.label) {
                            case 0:
                                return [4, this.cookiesConsumer.init(this.initTimeout)];
                            case 1:
                                return l.sent(), [4, this.lsConsumer.init(this.initTimeout)];
                            case 2:
                                return l.sent(), e = this, [4, this.cookiesConsumer.isStorageAvailable()];
                            case 3:
                                return e.isCookiesAvailable = l.sent(), n = this, [4, this.lsConsumer.isStorageAvailable()];
                            case 4:
                                return n.isLsAvailable = l.sent(), this.isCookiesAvailable || this.isLsAvailable ? this.isCookiesAvailable ? [4, this.cookiesConsumer.getValue(t.STORAGE_ITEM_NAME)] : [3, 6] : [2];
                            case 5:
                                return r = l.sent(), [3, 7];
                            case 6:
                                r = null, l.label = 7;
                            case 7:
                                return i = r, this.isLsAvailable ? [4, this.lsConsumer.getValue(t.STORAGE_ITEM_NAME)] : [3, 9];
                            case 8:
                                return o = l.sent(), [3, 10];
                            case 9:
                                o = null, l.label = 10;
                            case 10:
                                return s = o, a = this.isCookiesAvailable && i && (this.isRespectOldSessionInCookies || t.isModernSessionId(i)), c = this.isLsAvailable && t.isModernSessionId(s), u = a ? i : c ? s : t.generateSessionId(), !this.isLsAvailable || s && c || this.lsConsumer.setValue(t.STORAGE_ITEM_NAME, u, {expireAt: t.EXPIRE_AT}), [2]
                        }
                    }))
                }))
            }, t.isModernSessionId = function (e) {
                return t.NEW_GLOBAL_SESSION_REGEXP.test(e)
            }, t.generateSessionId = function (e) {
                var t = e || oe.UuidTool.newUuid(), n = new oe.Uuid(t);
                return n = n.toBytes(), n = (n = se.fromByteArray(n)).replace("==", ""), n = "v:1|s:".concat(n)
            }, t.prototype.getValue = function () {
                return de(this, void 0, void 0, (function () {
                    var e, n;
                    return he(this, (function (i) {
                        switch (i.label) {
                            case 0:
                                return H()(this.isInitialized, "[getValue] GlobalSession not initialized"), this.isCookiesAvailable ? [4, this.cookiesConsumer.getValue(t.STORAGE_ITEM_NAME)] : [3, 2];
                            case 1:
                                if ((e = i.sent()) && (this.isRespectOldSessionInCookies || t.isModernSessionId(e))) return [2, e];
                                i.label = 2;
                            case 2:
                                return this.isLsAvailable ? [4, this.lsConsumer.getValue(t.STORAGE_ITEM_NAME)] : [3, 4];
                            case 3:
                                return n = i.sent(), [2, t.isModernSessionId(n) ? n : this.tempSessionId];
                            case 4:
                                return [2, this.tempSessionId]
                        }
                    }))
                }))
            }, t.STORAGE_ITEM_NAME = "__flocktory-web_session2", t.EXPIRE_AT = (new Date).setFullYear((new Date).getFullYear() + 100500), t.NEW_GLOBAL_SESSION_REGEXP = /^v:[\w.-]+\|s:[^\s]+$/, t
        }(ue);
        const me = pe;
        const ge = function () {
            this.isInitializationProgress = !1, this.api = {FlockDataConsumer: re, GlobalSession: me, ACTIONS: l, STORAGES: u}
        };
        window.flocktory = window.flocktory || new a, window.flocktory.provider = window.flocktory.provider || new ge;
        var fe   = __webpack_require__(962), we = __webpack_require__.n(fe);
        const ve = new Date / 1e3 - 2678400, ye = new Date - 26784e5, be = e => function (t) {
            let n;
            const i = t.slice().reverse();
            for (n = 0; n < i.length; n++) {
                const t = i[n];
                if (e(t, n)) break
            }
            return i.slice(0, n).reverse()
        }, _e    = {
            reducePageViewsLog: be(((e, t) => t > 30 || e.timeIntervals[e.timeIntervals.length - 1].end < ve)), reducePrecheckoutShownLog: be(((e, t) => t > 50 || e.date < ye)), reduceSessionDaysLog: e => e.slice(-30), reduceItemsViewLog(e, t) {
                let n   = (r = e => e.length, (null != (i = e) ? r(i) : void 0) ? e.slice() : []);
                var i, r;
                const s = n.length && n[n.length - 1].sessionId;
                if (t && s) {
                    let e = -1;
                    for (let i = 0; i < n.length; i++) {
                        if (n[i].sessionId === t) {
                            e = i;
                            break
                        }
                    }
                    e > 0 && (n = n.slice(e - 1))
                } else n = s ? [] : n.slice(-1);
                return n
            }
        };
        const ke = (0, e.Z)("splitByExclusions"), Se = e => (e || []).map((e => +e)), Ee = e => (e || []).map((e => String(e)));

        function Ie(e, n, i, r, s) {
            const o = function (e, n, i, r, s) {
                const o               = e.map((e => function (e, n, i, r, s) {
                    const o = Se(e.campaigns), a = n.map((e => 1 + o.indexOf(e))).filter((e => e));
                    let c   = Math.min(...a);
                    c       = Number.isFinite(c) ? c - 1 : 0;
                    let u   = [];
                    if (null != e.timeConstraint && 0 !== e.timeConstraint) {
                        const t = +new Date - 1e3 * e.timeConstraint * 60 * 60 * 24, n = function (e) {
                            return e.reduce(((e, t) => (e[t.campaign] = t.date, e)), {})
                        }(s);
                        Object.keys(n).forEach((e => {
                            n[e] > t && o.includes(+e) && u.push(+e)
                        }))
                    } else e.sessionConstraint ? u = (0, t.intersection)(r, o) : e.pageConstraint && (u = (0, t.intersection)(i, o));
                    return n.map((t => {
                        const n       = function (e, t, n) {
                            const i = 0 === n.length, r = !e.campaigns.includes(String(t)), s = !!n.length && t === n[0], o = e.sessionConstraint || e.timeConstraint ? i || r || s : i || r;
                            r || o || ke.warn({cid: t, campainsFromConstraintWasShown: n.join(","), isAlreadyShown: s, exclusion: e});
                            return o
                        }(e, t, u), i = o.indexOf(t) - c;
                        return n ? {campaign: t, approve: !0, priority: i} : {campaign: t, approve: !1, priority: 0}
                    }))
                }(e, n, i, r, s))), a = function (e, t) {
                    const n = [];
                    e.forEach((e => {
                        null != e && e.forEach((e => {
                            e.approve || n.push(e.campaign)
                        }))
                    }));
                    const i = function (e) {
                        const t = {};
                        return e.forEach((e => {
                            let n = -1;
                            e.forEach(((e, i) => {
                                n < 0 && t[e] > 0 && (n = i)
                            })), n < 0 && e.forEach(((e, i) => {
                                n < 0 && -1 !== t[e] && (n = i)
                            })), n >= 0 && (t[e[n]] = 1), e.forEach(((e, i) => {
                                i !== n && (t[e] = -1)
                            }))
                        })), t
                    }(function (e) {
                        return e.map((e => {
                            const t = [];
                            return null != e && e.sort(((e, t) => e.priority - t.priority)).forEach((e => {
                                e.approve && e.priority >= 0 && t.push(e.campaign)
                            })), t
                        }))
                    }(e));
                    return t.map((e => {
                        let t;
                        t = n.includes(e) ? -1 : i[e] || 1;
                        return {approve: t > 0, campaign: e, priority: 0}
                    }))
                }(function (e) {
                    const t = (e && e[0] || []).reduce(((t, {campaign: n}, i) => (t[n] = e.every((e => e[i].approve)), t)), {});
                    return e.map((e => e.map((({campaign: e, priority: n}) => ({campaign: e, approve: t[e], priority: n})))))
                }(o), n), [c, u]      = (0, t.partition)(a, (e => e.approve)), l = e => e.campaign;
                return [c.map(l), u.map(l)]
            }(e, Se(n), Se(i), Se(r), s);
            return [Ee(o[0]), Ee(o[1])]
        }

        const Ae = (0, e.Z)("approveCampaigns");

        function Te(e) {
            const {ids: n, closedIds: i, shownIds: r, inactivity: s, shownLog: o, sessionId: a, exclusions: c} = e;
            let [u, l]                                                                                         = (0, t.partition)(n, (e => (e => i.includes(e))(e)));
            u.forEach((e => {
                Ae.info(`Campaign ${e} wants to show, but is closed.`)
            })), [l, u] = (0, t.partition)(l, (n => {
                const i = s[String(n)];
                if (!i) return !0;
                const {count: r} = i, {period: o} = i;
                if (null == r || null == o || !(0, t.isNumber)(r) || !(0, t.isNumber)(o)) return !0;
                const a = function (e, t, n) {
                    const i = (new Date).getTime() - t, r = n[String(e)] || {};
                    return Object.keys(r).filter((e => i < Number(e))).reduce(((e, t) => e + r[t]), 0)
                }(n, 1e3 * o, e.hitLog);
                return r > a
            })), u.forEach((e => {
                Ae.info(`Campaign ${e} wants to show, but is in inactivity state.`)
            }));
            const d = function (e, n) {
                const i = e.filter((e => e.session === n)).map((e => e.campaign));
                return (0, t.uniq)(i)
            }(o, a);
            return [l, u] = Ie(c, l, r, d, o), u.forEach((e => {
                Ae.info(`Campaign ${e} wants to show, but stopped by constraints.`)
            })), l
        }

        const {storageKeys: Ce} = we(), Pe = (0, e.Z)("cors");

        class Oe {
            constructor(e) {
                this.lsPerSiteConsumer = e
            }

            toDayStart(e) {
                const t = new Date(e);
                return t.setUTCHours(0), t.setUTCMinutes(0), t.setUTCSeconds(0), t.setUTCMilliseconds(0), t.getTime()
            }

            mergeCampaignsToHitLog(e, n) {
                const i = (0, t.deepMerge)({}, e);
                return n.forEach((e => {
                    const t = this.toDayStart((new Date).getTime());
                    i[e] = i[e] || {}, i[e][t] = i[e][t] || 0, i[e][t]++
                })), i
            }

            setPrecheckoutCampaignsShown(e, t) {
                Promise.all([this.lsPerSiteConsumer.getValue(Ce.campaignHitLog), this.lsPerSiteConsumer.getValue(Ce.precheckoutShownLog)]).then((n => {
                    const i = n[0] || {};
                    let r   = n[1];
                    r = Array.isArray(r) ? r : [], e.forEach((e => {
                        r.push({date: Date.now(), campaign: e, session: t})
                    })), r = _e.reducePrecheckoutShownLog(r), this.lsPerSiteConsumer.setValue(Ce.precheckoutShownLog, r), this.lsPerSiteConsumer.setValue(Ce.campaignHitLog, this.mergeCampaignsToHitLog(i, e))
                }), Pe.error)
            }

            getPrecheckoutApprovedCampaigns(e, t, n, i) {
                return this.lsPerSiteConsumer.isInitialized ? Promise.all([this.lsPerSiteConsumer.getValue(Ce.precheckoutClosed), this.lsPerSiteConsumer.getValue(Ce.campaignHitLog), this.lsPerSiteConsumer.getValue(Ce.sessionId), this.lsPerSiteConsumer.getValue(Ce.precheckoutShownLog)]).then((r => {
                    const s = r[0] || [], o = r[1] || {}, a = r[2], c = r[3] || [], u = s.filter((e => e.expireAt > +new Date)).map((e => e.campaign)), l = a ? a.sessionId : "", d = Te({ids: e, closedIds: u, shownIds: i, inactivity: n, hitLog: o, shownLog: c, sessionId: l, exclusions: t});
                    return this.setPrecheckoutCampaignsShown(d, l), d
                }), (e => (Pe.error(e), []))) : []
            }

            savePrecheckoutCampaignClosedState(e, t) {
                const n = Date.now() + t;
                return this.lsPerSiteConsumer.getValue(Ce.precheckoutClosed).then((t => {
                    let i = t || [];
                    i = i.filter((t => t.campaign !== e)), i.push({campaign: e, expireAt: n}), this.lsPerSiteConsumer.setValue(Ce.precheckoutClosed, i)
                }), Pe.error)
            }
        }

        const Le = 15e3, xe = "getPrecheckoutApprovedCampaigns", Ne = "savePrecheckoutCampaignClosedState", De = "updateStorage", Ve = "getGlobalSessionId", Re = "getCookieValue", Ue = `["${Object.values({GET: "GET", SET: "SET", UNSET: "UNSET", CLEAR: "CLEAR"}).join('", "')}"]`, Me = (0, e.Z)("cors"), je = (0, e.Z)("performance");

        function Fe(e) {
            let n   = [];
            const i = new re(u.LS_PER_SITE, {meta: e}), r = new re(u.COOKIES, {meta: e}), s = new Oe(i), o = !(0, t.isYaBrowser)(), a = new me(o), c = {
                isActionAvailable: e => n.includes(e), getGlobalSessionId: () => a.getValue(), getCookieValue: e => r.getValue(e), getPrecheckoutApprovedCampaigns: (e, t, n, i) => s.getPrecheckoutApprovedCampaigns(e, t, n, i), savePrecheckoutCampaignClosedState: (e, t) => s.savePrecheckoutCampaignClosedState(e, t), updateStorage: (e, t, n, r) => {
                    const {expireAt: s} = r || {};
                    switch (e) {
                        case"get":
                            return i.getValue(t);
                        case"set":
                            return i.setValue(t, n, {expireAt: s});
                        case"unset":
                            return i.removeValue(t);
                        case"clear":
                            return i.clear();
                        default:
                            throw new Error(`Wrong method ${e}. Must be on of ${Ue}`)
                    }
                }
            };
            if ((0, t.isIosSafari)()) return c;
            const l                = a.init(Le).then((() => {
                n.push(Ve), je.info("[cors] globalSession ready", performance.now())
            })).catch(Me.error), d = r.init(Le).then((() => r.isStorageAvailable())).then((e => {
                e && n.push(Re), je.info("[cors] Cookies ready", performance.now())
            })).catch(Me.error), h = i.init(Le).then((() => i.isStorageAvailable())).then((e => {
                n = [...n, ...e ? [Ne, xe, De] : []], je.info("[cors] LS ready", performance.now())
            })).catch(Me.error);
            return (0, t.isYaBrowser)() ? Promise.all([l, d, h]).then((() => c)) : c
        }

        const $e = (0, e.Z)("system");

        class We {
            sessionId          = null;
            storageInstance    = null;
            cacheLabelMailRU   = "timeTrackDSPixelMail";
            cacheLabelWeborama = "timeTrackDSPixelWeborama";
            cacheLabelSegmento = "timeTrackDSPixelSegmento";
            getCachePeriodDay  = () => Date.now() + 864e5;

            constructor(e, t) {
                this.sessionId = e, this.storageInstance = t;
                try {
                    return this.initMailRu(), this.initWeborama(), this.initSegmento(), !0
                } catch (e) {
                    return !1
                }
            }

            initMailRu() {
                const e = `https://top-fwz1.mail.ru/counter?id=2951107;pid=${this.sessionId}`;
                this.cachedRequest(e, this.cacheLabelMailRU, this.getCachePeriodDay())
            }

            initWeborama() {
                const e = JSON.stringify({flocktory_id: this.sessionId}), t = ["https://wf.frontend.weborama.fr/streampixel/?wamid=7629&", `Wvar=${encodeURIComponent(e)}&`, `d.r=${(new Date).getTime()}`].join("");
                this.cachedRequest(t, this.cacheLabelWeborama, this.getCachePeriodDay())
            }

            initSegmento() {
                const e = ["https://tag.rutarget.ru/tag?event=sync&", "partner=flocktory&", `external_visitor_id=${this.sessionId}`].join("");
                this.cachedRequest(e, this.cacheLabelSegmento, this.getCachePeriodDay())
            }

            request(e) {
                const t = document.createElement("iframe");
                t.setAttribute("sandbox", ""), t.referrerPolicy = "no-referrer", t.src = e, t.style.display = "none", t.style.width = 0, t.style.height = 0, t.onload = () => {
                    document.body.removeChild(t)
                }, document.body.appendChild(t)
            }

            cachedRequest(e, t, n) {
                this.isCached(t, n).then((t => t && this.request(e))).catch((e => $e.error(e)))
            }

            isCached(e, t) {
                const n = this.storageInstance;
                return n.get(e).then((e => {
                    const t = parseInt(e || 0, 10);
                    return !t || Number.isNaN(t) || t < Date.now()
                })).then((i => (i && n.set(e, t), i)))
            }
        }

        const {assert: qe} = __webpack_require__(370), Be = (0, e.Z)("Storage service");

        function ze(e, n) {
            qe(n, "No config for Storage");
            const {siteId: i} = n;
            qe(i, "No siteId in Storage config");
            const r = (0, t.storageKeyComposer)(i), s = e && e.isActionAvailable(De), o = e => {
                const t = localStorage.getItem(e);
                return JSON.parse(t && "undefined" !== t ? t : "null")
            }, a    = (t, n, i) => {
                const o = r(t);
                if (qe(null != n, `Storage.set ${o}, null value not allowed`), s) return e.updateStorage("set", t, n, i).then((e => {
                    try {
                        localStorage.setItem(o, JSON.stringify(n))
                    } catch (e) {
                    }
                    return e
                }));
                try {
                    return localStorage.setItem(o, JSON.stringify(n)), Promise.resolve()
                } catch (e) {
                    return Promise.reject(e)
                }
            }, c    = t => {
                const n = r(t);
                if (s) return e.updateStorage("get", t).then((e => (void 0 === e ? localStorage.removeItem(n) : localStorage.setItem(n, JSON.stringify(e)), e)));
                try {
                    return Promise.resolve(o(n))
                } catch (e) {
                    return Promise.reject(e)
                }
            }, u    = {}, l = (e, t) => {
                const n = r(e);
                if (s) {
                    if (u[n]) return new Promise(((n, i) => {
                        setTimeout((() => {
                            l(e, t).then(n).catch(i)
                        }), 1)
                    }));
                    u[n] = !0;
                    try {
                        return c(e).then((i => {
                            const r = t(i);
                            return a(e, r).then((() => (u[n] = !1, r)))
                        }))
                    } catch (e) {
                        return u[n] = !1, Promise.reject(e)
                    }
                }
                try {
                    const e = t(o(n));
                    return localStorage.setItem(n, JSON.stringify(e)), Promise.resolve(e)
                } catch (e) {
                    return Promise.reject(e)
                }
            };
            return {
                get: c, set: a, update: l, clear: () => {
                    Be.warn("Use Storage.clear() only for development");
                    for (let e = 0, t = localStorage.length; e < t; e++) {
                        const t = String(localStorage.key(e));
                        /^flockapi:/.test(t) && localStorage.removeItem(t)
                    }
                    return s ? e.updateStorage("clear") : Promise.resolve()
                }
            }
        }

        var Ke                   = __webpack_require__(338), He = __webpack_require__.n(Ke), Ze = __webpack_require__(187), Ge = __webpack_require__.n(Ze);
        const {EventEmitter: Je} = Ge(), Ye = 250, Qe = ["widgetClose", "bannerClick"];

        class Xe {
            rootElement                  = null;
            cssClasses                   = {};
            _iFrameEventHandlers         = {};
            resizeInterval               = 0;
            type                         = "base";
            noClose                      = !0;
            hasSpinner                   = !1;
            viewportReachedObserversData = [];

            constructor(e, n, i) {
                this.html = e.html, this.paramWidth = e.params.width, this.optionsWidth = e.width, this.rootElement = n, this.events = new Je;
                const r = document.createElement("div"), s = document.createElement("div");
                if (this.elements = {overlay: r, wrapper: s, closeButton: null, iFrame: null, prevIFrame: null}, i(this), r.className += this.cssClasses.overlay, s.className += this.cssClasses.wrapper, this._iFrameEventHandlers = {
                    resize     : this.onResize.bind(this),
                    widgetClose: this.onWidgetClose.bind(this),
                    bannerClick: this.onBannerClick.bind(this),
                    userLogin  : this.onUserLogin.bind(this)
                }, this.externalResizeHandler = (0, t.throttle)((() => this.onResize()), 50), window.addEventListener("resize", this.externalResizeHandler), this.elements.overlay.appendChild(this.elements.wrapper), this.hasSpinner) {
                    const e = document.createElement("div");
                    e.className = this.cssClasses.spinner, this.elements.overlay.appendChild(e)
                }
                this.canShow() && (null != this.rootElement && this.rootElement.appendChild(this.elements.overlay), this.initIFrame(this.html))
            }

            show() {
                this.canShow() ? setTimeout((() => {
                    this.showOverlay(), this.showWrapper()
                }), 0) : this.events.emit("noShow")
            }

            hide() {
                return this.hideWrapper(), this.hideOverlay()
            }

            showWrapper() {
                !this._wrapperShown && this._iFrameLoaded && (this._showEl(this.elements.wrapper), this._wrapperShown = !0)
            }

            hideWrapper() {
                this._hideEl(this.elements.wrapper), this._wrapperShown = !1
            }

            showOverlay() {
                return this._showEl(this.elements.overlay)
            }

            hideOverlay() {
                return this._hideEl(this.elements.overlay)
            }

            initIFrame(e) {
                let n;
                if (this.disposeIframe(), !e) return;
                const i    = e.match("<body [^>]*data-width=['\"]([0-9%px]+)['\"][^>]*>");
                this.width = n = i && i[1];
                const r    = this._createIFrame(n);
                this.elements.iFrame && (this.elements.prevIFrame = this.elements.iFrame), this.elements.wrapper.appendChild(r);
                const s = r.contentWindow.document;
                s.open(), s.write(e), s.close(), this.elements.iFrame = r, this._prevIFrameSize = null, this._iFrameLoaded = !1, this._whenIFrameLoad((() => {
                    this._iFrameLoaded = !0, this._bindIFrameEvents(), this.elements.overlay.classList.add("flockapi-loaded");
                    let e   = 100;
                    let n   = 0;
                    let i;
                    const s = r.contentDocument;
                    if (!s) return;
                    const o = s.body;
                    o && (o.classList.add("jsapi-v2"), (0, t.isMobile)() && o.classList.add("is-mobile"), this._wrapperShown ? (i = this.getIFrameSize(), this.onResize(i), this.elements.prevIFrame && this.elements.prevIFrame.parentNode && this.elements.prevIFrame.parentNode.removeChild(this.elements.prevIFrame)) : (this.showWrapper(), setTimeout((() => {
                        this._isIframeInBody() && (i = this.getIFrameSize(), this.onResize(i))
                    }), 1)), this.resizeInterval = setInterval((() => {
                        if (!this._isIframeInBody()) return void this.clearResizeInterval();
                        const t = this.getIFrameSize();
                        this._equalSizes(i, t) || (this.onResize(t), i = t, n++), (0 == e-- || n >= 2) && this.clearResizeInterval()
                    }), 50), this.afterFrameLoaded())
                }))
            }

            _equalSizes(e, t) {
                return e.width === t.width && e.height === t.height
            }

            afterFrameLoaded() {
            }

            getIFrameSize() {
                const {iFrame: e} = this.elements;
                return {width: e ? this.getIFrameWidth(e, this.width) : 0, height: e ? this.getIFrameHeight(e) : 0}
            }

            getIFrameHeight(e) {
                const t = e.contentDocument;
                if (!t) return 0;
                const {body: n} = t;
                if (!n) return 0;
                const i = n.offsetHeight || e.contentWindow.outerHeight;
                return i + 10 > window.innerHeight ? window.innerHeight - 10 : i
            }

            getIFrameWidth(e, n) {
                const i = e.contentDocument;
                if (!i) return 0;
                const {body: r} = i;
                if (!r) return 0;
                let s = n || r.offsetWidth;
                if (!s) {
                    const e = r.style, t = e.display, n = e.visibility, i = e.position;
                    e.display = "block", e.visibility = "hidden", e.position = "absolute", s = r.offsetWidth, e.display = t, e.visibility = n, e.position = i
                }
                if ((0, t.isMobile)()) {
                    const n = (0, t.isAndroidBrowser)() ? e.contentWindow.innerWidth : (0, t.get)(e, "contentWindow.screen.width", null);
                    s       = Math.max(+s || 0, n || 0, window.innerWidth)
                }
                return s
            }

            canShow() {
                return Boolean(this.rootElement && this.html)
            }

            _showEl(e) {
                return e.classList.add("flockapi-display_block"), setTimeout((() => {
                    e.classList.add("flockapi-show"), setTimeout((() => {
                        e.classList.add("flockapi-shown")
                    }), Ye)
                }), 25)
            }

            _hideEl(e) {
                return e.classList.remove("flockapi-shown"), e.classList.remove("flockapi-show"), setTimeout((() => e.classList.remove("flockapi-display_block")), Ye)
            }

            _createIFrame(e) {
                const n = window.innerWidth > 0 ? window.innerWidth : window.screen.width, i = (0, t.isMobile)() ? n : this.paramWidth || e || "0px", r = document.createElement("iframe");
                return r.className = "flockapi-wrapper_iframe", r.setAttribute("scrolling", "no"), r.setAttribute("frameborder", "0"), r.setAttribute("allowTransparency", "true"), r.style.display = "block", r.style.border = "none", r.style.overflow = "hidden", r.style.width = String(i), r.style.height = "0px", r
            }

            _bindIFrameEvents() {
                let e, t          = !1, n = !1;
                const {iFrame: i} = this.elements;
                if (null == i) return;
                try {
                    e = this._iFrameEvents = i.contentWindow.sharedEvents || i.contentWindow.h.shared.events
                } catch (t) {
                    e = this._iFrameEvents = new Je
                }
                let r = i.contentDocument.querySelectorAll("[role]");
                if (r = [].slice.call(r), r.length && r.forEach((i => {
                    const r = i.getAttribute("role");
                    Qe.indexOf(r) > -1 && i.addEventListener("click", (() => {
                        e.emit ? e.emit(r) : null != e.fire && e.fire(r)
                    })), "widgetClose" === r ? t = !0 : "bannerClick" === r && (n = !0)
                })), t) {
                    const {closeButton: e} = this.elements;
                    null != e && (e.style.display = "none")
                } else this._addWidgetCloseButton();
                n || this._subscribeBannerClick(), Object.keys(this._iFrameEventHandlers).forEach((t => {
                    const n = this._iFrameEventHandlers[t];
                    e.on(t, n)
                }))
            }

            onResize(e) {
                return this.elements.iFrame ? (e = e && Array.isArray(e) ? e : this.getIFrameSize(), this._emptySize(e) || this._prevIFrameSize && this._equalSizes(this._prevIFrameSize, e) ? null : (this.optionsWidth && (e.width = this.optionsWidth), setTimeout((() => this.events.emit("resize", e)), 1), this._prevIFrameSize = e, e)) : null
            }

            onWidgetClose() {
                this.noClose || (this.viewportReachedObserversData.forEach((({observer: e}) => e.destroy())), this.events.emit("widgetClose"), this.hide())
            }

            onUserLogin(e) {
                return e || (e = {}), this.events.emit("userLogin", {data: {sb: e.sb, user_submitted: e.user_submitted, user: {email: e.email, name: e.name}}})
            }

            onBannerClick() {
                return this.events.emit("bannerClick")
            }

            disposeIframe() {
                return this.clearResizeInterval()
            }

            clearResizeInterval() {
                this.resizeInterval && (clearInterval(this.resizeInterval), this.resizeInterval = 0)
            }

            _emptySize(e) {
                return !e.width || !e.height
            }

            _addWidgetCloseButton() {
                if (this.noClose) return;
                if (this.elements.closeButton) return void (this.elements.closeButton.style.display = "block");
                const e = this.elements.closeButton = document.createElement("div");
                this.cssClasses.closeButton.split(" ").forEach((t => e.classList.add(t))), this.elements.wrapper.appendChild(e), e.addEventListener("click", this.onWidgetClose.bind(this))
            }

            _subscribeBannerClick() {
                const {iFrame: e} = this.elements;
                if (null == e) return;
                const t = e.contentDocument, n = this._iFrameEvents;
                n && n.emit && t.addEventListener("click", (() => n.emit("bannerClick")))
            }

            _isIframeInBody() {
                return (0, t.getTopWindow)().document.body.contains(this.elements.iFrame)
            }

            _whenIFrameLoad(e) {
                let t             = !1;
                const {iFrame: n} = this.elements;
                if (null == n) return;
                let i   = 0;
                const r = function () {
                    clearInterval(i)
                }, s    = () => {
                    if (t || !this._isIframeInBody() || !n.parentNode) return void r();
                    const {body: i} = n.contentDocument;
                    !t && i && (t = !0, r(), e())
                };
                "complete" === n.contentDocument.readyState ? setTimeout(s, 0) : n.addEventListener("load", s), i = setInterval(s, 25)
            }

            onViewportReached(e, t) {
                const n = new IntersectionObserver((n => {
                    const {intersectionRatio: i} = n[0];
                    i >= e && (t(i), this.offViewportReached(t))
                }), {threshold: e});
                this.viewportReachedObserversData.push({callback: t, observer: n}), n.observe(this.elements.wrapper)
            }

            offViewportReached(e) {
                const t = this.viewportReachedObserversData.find((t => t.callback === e));
                t && t.observer.disconnect()
            }
        }

        class et extends Xe {
            stdMargin  = 5;
            type       = "popup";
            noClose    = !1;
            hasSpinner = !0;
            cssClasses = {overlay: "flockapi-overlay flockapi-overlay_popup flockapi-overlay_widget", wrapper: "flockapi-wrapper flockapi-wrapper_popup flockapi-wrapper_widget", closeButton: "flockapi-closebutton flockapi-closebutton_popup", spinner: "flockapi-spinner flockapi-spinner_popup"};

            constructor(e) {
                const n = (0, t.getTopWindow)().document.body;
                super(e, n, (t => {
                    t.stdMargin = 5, t.type = "popup", t.noClose = !1, t.hasSpinner = !0, t.cssClasses = {overlay: "flockapi-overlay flockapi-overlay_popup flockapi-overlay_widget", wrapper: "flockapi-wrapper flockapi-wrapper_popup flockapi-wrapper_widget", closeButton: "flockapi-closebutton flockapi-closebutton_popup", spinner: "flockapi-spinner flockapi-spinner_popup"};
                    const {overlay: n} = t.elements;
                    null != e.background && (n.style.background = e.background)
                }))
            }

            onResize(e) {
                let n, i;
                if (!this.elements.iFrame) return;
                const r = (0, t.getTopWindow)(), s = r.innerHeight, o = r.innerWidth, {overlay: a, iFrame: c, wrapper: u} = this.elements;
                if (null == c) return;
                const l         = this.getIFrameSize();
                let {height: d} = l;
                const h         = e => ((0, t.isMobile)() && this.stdMargin || Math.max((s - parseInt(e, 10)) / 2 - 10, 30)) + "px";
                if (e) {
                    if (e = e && Array.isArray(e) ? e : l, this._emptySize(e) || this._prevIFrameSize && this._equalSizes(this._prevIFrameSize, e)) return;
                    this.optionsWidth && (e.width = this.optionsWidth), n = h(e.height), ({width: i} = e), ({height: d} = e), setTimeout((() => this.events.emit("resize", e)), 1)
                } else if (l.width > o) {
                    i       = o;
                    const e = c.contentDocument, t = e.querySelector("html");
                    t && t.classList.add("is-mobile");
                    const n = e.querySelector("body");
                    n && n.classList.add("is-mobile")
                } else n = h((e = l).height), ({width: i} = e), ({height: d} = e);
                i = i || 0, d = d || 0, n = n || 0;
                const p = Number.isNaN(i) ? String(i) : i + "px", m = Number.isNaN(d) ? String(d) : d + "px", g = Number.isNaN(n) ? String(n) : n + "px";
                c.style.width = p, c.style.height = m, u.style.width = p, u.style.height = m, u.style.marginTop = g, u.style.marginBottom = g, a.style.overflowY = "auto", this._prevIFrameSize = {width: i, height: d}
            }
        }

        class tt extends Xe {
            type = "embedded";

            constructor(e) {
                super(e, e.container, (t => {
                    t.type = "embedded", t.rootElement = e.container, t.cssClasses = {overlay: "flockapi-overlay flockapi-overlay_embedded flockapi-overlay_widget", wrapper: "flockapi-wrapper flockapi-wrapper_embedded flockapi-wrapper_widget", closeButton: "flockapi-closebutton flockapi-closebutton_embedded", spinner: "flockapi-spinner flockapi-spinner_embedded"}
                }))
            }

            onResize(e) {
                const t = super.onResize(e);
                if (t) {
                    let {width: e, height: n} = t;
                    Number.isNaN(e) || (e += "px"), Number.isNaN(n) || (n += "px"), this.elements.overlay.style.width = String(e), this.elements.overlay.style.height = String(n), this.elements.wrapper.style.width = String(e), this.elements.wrapper.style.height = String(n);
                    const {iFrame: i} = this.elements;
                    null != i && (i.style.width = String(e), i.style.height = String(n))
                }
            }

            getIFrameWidth(e, t) {
                const n = e.contentDocument;
                if (!n) return 0;
                const {body: i} = n;
                if (!i) return 0;
                let r = t || i.offsetWidth;
                if (!r) {
                    const e = i.style, t = e.display, n = e.visibility, s = e.position;
                    e.display = "block", e.visibility = "hidden", e.position = "absolute", r = i.offsetWidth, e.display = t, e.visibility = n, e.position = s
                }
                return r
            }
        }

        const nt = (0, e.Z)("widget");

        function it(e) {
            const n = e.params && e.params.el;
            if ("popup" === n) return new et(e);
            if ("inner" === n || "" === n) e.container = e.rootElement; else if ("[object String]" === Object.prototype.toString.call(n)) {
                const [i, r] = (0, t.getElementOrderAndSelector)(n);
                let s        = document.querySelector(r);
                if (null != s) {
                    const e = s.parentNode;
                    if ("before" === i) {
                        const t = document.createElement("span");
                        null != e && e.insertBefore(t, s), s = t
                    }
                    if ("after" === i && null != e) {
                        const t = document.createElement("span");
                        null != s && e.insertBefore(t, s.nextSibling), s = t
                    }
                } else nt.warn("no container " + r);
                e.container = s
            } else e.container = n;
            return new tt(e)
        }

        const rt = /iPad; CPU OS 7/.test(navigator.userAgent), st = (0, e.Z)("actions");

        function ot(e, n, i, r, s, o) {
            return (0, t.assert)(s && o, "Actions args"), {
                exchange         : function (e) {
                    s.exchangeBanner({name: (0, t.get)(e, "user.name", null), email: (0, t.get)(e, "user.email", null), spot: (0, t.get)(e, "spot", null)}).then((t => {
                        const n = it({params: {el: t.selector, trigger: "auto"}, html: t.html, noClose: !0, rootElement: e.params.rootElement});
                        n.onViewportReached(.7, (() => {
                            s.trackExchangeBanner(t.loginData)
                        })), n.canShow() && (n.show(), window.dataLayer && window.dataLayer.push({event: "fl_exchange_banner", el: t.selector, html: t.html}))
                    })).catch((() => {
                    }));
                    const {params: i, ...r} = e;
                    n.addData(r)
                }, postcheckout  : function (e) {
                    s.postcheckout(e, o.getUtmTags()).then((e => {
                        rt || setTimeout((() => {
                            it({params: {el: e.el}, html: e.html, background: e.background}).show()
                        }), e.timeout)
                    })).catch((e => {
                        st.warn(e)
                    })), n.addData({user: e.user}), n.cart.reset()
                }, trackItemView(t) {
                    n.addItemView(t), e.trackItemView(t)
                }, trackCategoryView(t) {
                    n.addData(t), e.trackCategoryView(t)
                }, fireEvent(e) {
                    i.fireEvent(e)
                }, getData       : () => n.getData(), addData: e => n.addData(e), trigger: e => new r.Trigger(e), addToCart(e) {
                    n.cart.addItems(e), i.fireEvent({event: "flock_api_add_to_cart", noTrack: !0})
                }, removeFromCart: e => n.cart.removeItems(e), updateCart: e => n.cart.update(e), attachToProfile(e, t) {
                    n.compareSnapshotMetaByPart(e.data).then((i => {
                        function r() {
                            n.addMeta(e.data), t && t()
                        }

                        i ? r() : s.attachToProfile(e.data).then(r)
                    }))
                }, createPushManager({options: e, callback: t}) {
                    t(new (He())(e))
                }
            }
        }

        var at = __webpack_require__(585);

        function ct(t) {
            const n = {utma: {}, utmb: {}, utmc: {}, utmz: {}};
            if (!t) return n;
            try {
                t.replace(/(?:^| |;)__(utm[^;$]*)/g, (function (e, t) {
                    const i = t.slice(0, 4), r = t.slice(5), s = r.split("."), o = n[i];
                    if (o) if ("utma" === i) o.domainHash = s[0], o.userId = s[1], o.initialVisitTs = s[2] && Number(s[2]), o.previousVisitTs = s[3] && Number(s[3]), o.currentVisitTs = s[4] && Number(s[4]), o.pageViews = s[5] && Number(s[5]); else if ("utmb" === i) o.domainHash = s[0], o.pageViews = s[1] && Number(s[1]), o.outboundClick = s[2] && Number(s[2]), o.currentVisitTs = s[3] && Number(s[3]); else if ("utmc" === i) o.domainHash = s[0]; else if ("utmz" === i) {
                        o.domainHash = Number.isNaN(s[0]) ? void 0 : s[0], o.lastCookiesUpdateTs = s[1] && Number(s[1]), o.sessionCounter = s[2] && Number(s[2]), o.resourceCounter = s[3] && Number(s[3]);
                        const e = r.slice(r.indexOf("utm"));
                        e && e.split("|").map((function (e) {
                            e = e.split("=");
                            try {
                                o[e[0]] = __webpack_require__.g.unescape(/^\(.*\)$/.test(e[1]) ? e[1].replace(/^\(?(.*?)\)?$/, "$1") : e[1])
                            } catch (t) {
                                o[e[0]] = e[1]
                            }
                        }))
                    }
                }))
            } catch (t) {
                (0, e.Z)("ga-cookie-parser").error(t)
            }
            return n
        }

        class ut {
            constructor(e, n, i) {
                this.trackCategoryView = this.trackCategoryView.bind(this), this._clearObject = this._clearObject.bind(this), this.trackAddToCart = this.trackAddToCart.bind(this), this.trackRemoveFromCart = this.trackRemoveFromCart.bind(this), (0, t.assert)(n && e), this.state = e, this.backend = i, this.settings = n
            }

            getDefaults() {
                return {links: {site: this.settings.siteId}, payload: {url: window.location.href}}
            }

            trackPageView() {
                const e = ct(String.prototype.slice.call(document.cookie)), t = this.state.getUtmTags(), n = this.state.getHypotheticalUtmTags(), i = {
                    action : "session.page_visit",
                    payload: {resolution: `${window.screen.availWidth}x${window.screen.availHeight}`, ga: {utmcsr: e.utmz.utmcsr || t.source, utmccn: e.utmz.utmccn || t.campaign, utmcmd: e.utmz.utmcmd || t.medium, utmctr: e.utmz.utmctr, utmcct: e.utmz.utmcct, h_utmcsr: n.source, h_utmccn: n.campaign, h_utmcmd: n.medium, previous_visit_ts: e.utma.previousVisitTs, current_visit_ts: e.utma.currentVisitTs, initial_visit_ts: e.utma.initialVisitTs, pageviews: e.utma.pageViews}}
                };
                this.track(i)
            }

            trackItemView(e) {
                const {label: t} = e.item, n = this._clearObject(e.item || {}), {id: i, name: r, url: s, picture: o, price: a, available: c, category_id: u, vendor: l} = n, d = "boolean" == typeof c || "true" === c || "false" === c, h = {action: "customer.item_visit", links: {yandex_offer: dt(e.item, (e => e.id))}, payload: {id: i, name: r, url: s, picture: o, price: a, vendor: l, ...d ? {available: String(c)} : {}, ...u ? {category_id: u} : {}, ...t ? {labels: t} : {}}};
                this.track(h)
            }

            trackCategoryView(e) {
                const t = {action: "customer.category_visit", links: {yandex_category: dt(e.category, (e => e.id))}};
                this.track(t)
            }

            _clearObject(e) {
                const t = {};
                return Object.keys(e).forEach((n => {
                    const i = e[n];
                    ["string", "number", "boolean"].indexOf(typeof i) > -1 && (t[n] = i)
                })), t
            }

            trackAddToCart(e) {
                const t = this._clearObject(e), n = {action: "customer.add_to_cart", links: {yandex_offer: dt(e, (e => e.id)) || null}, payload: {count: dt(e, (e => e.count)) || dt(e, (e => e.quantity)) || null, custom_data: t}};
                this.track(n)
            }

            trackRemoveFromCart(e) {
                const t = this._clearObject(e), n = {action: "customer.remove_from_cart", links: {yandex_offer: dt(e, (e => e.id)) || null}, payload: {count: dt(e, (e => e.count)) || dt(e, (e => e.quantity)) || null, custom_data: t}};
                this.track(n)
            }

            track(e) {
                const n = (0, t.deepMerge)({}, e, this.getDefaults());
                this.backend.ultimate(n)
            }

            trackCustomActivity(e, t, n = {}) {
                const i = this.state.getUtmTags(), r = {url: window.location.href, ...t, ...n};
                Object.keys(i).forEach((e => {
                    r[`utm_${e}`] = i[e]
                }));
                const s = Object.keys(r).map((e => ({key: String(e), value: String(r[e])})));
                this.backend.customActivity(s, e)
            }

            trackCustomEvent(e) {
                this.backend.customEvent(e)
            }
        }

        function lt(e, t, n) {
            return new ut(e, t, n)
        }

        function dt(e, t) {
            return null != e ? t(e) : void 0
        }

        const ht = (0, e.Z)("trigger-manager"), pt = (0, e.Z)("performance");

        class mt {
            constructor(e, t, n, i, r, s) {
                this.behaviorWatcher = t, this.setupApiDataStorage = s, this.state = r, this.storage = e, this.triggers = [], this.behaviorListeners = {
                    check: e => {
                        pt.info("trigger check", performance.now()), e.behaviorWatcher = t, e.behaviorStorage = n, e.documentWatcher = i, this._checkTriggers(e)
                    }
                }, this.inCheckingProcess = !1, this.behaviorWatcher.events.on("check", this.behaviorListeners.check)
            }

            push(e) {
                this.triggers.push(e)
            }

            removeTriggerByCampaignId(e) {
                const t = this.triggers.find((t => t.campaign.id === e));
                t && (t.markExpired(), this.triggers.splice(this.triggers.indexOf(t), 1))
            }

            removeAllTriggers() {
                this.triggers.forEach((e => e.markExpired())), this.triggers = []
            }

            destroy() {
                this.behaviorWatcher.events.removeListener("check", this.behaviorListeners.check)
            }

            _checkTriggers(e) {
                if (this.inCheckingProcess) return void ht.warn("Try to check triggers before previous check ends");
                this.inCheckingProcess = !0;
                const t                = this.triggers.map((t => t.check(e))).filter((e => e));
                Promise.all(t).then((e => this.__checkResults(e))).then((() => {
                    this.inCheckingProcess = !1, this.behaviorWatcher.events.emit("end_check_triggers")
                })).catch((e => {
                    this.inCheckingProcess = !1, ht.error(e, "Check trigger")
                }))
            }

            __checkResults(e) {
                const t = [], n = [];
                return e.forEach((e => {
                    e[0] && (t.push(e[1]), n.push(e[1].campaign.id))
                })), this.state.getApprovedCampaigns(n).then((e => {
                    if (this.setupApiDataStorage.determineExpirationAndFireEventIfNecessary()) return;
                    let n   = e;
                    const i = this.setupApiDataStorage.getSetupApiData();
                    if (i.campaigns) {
                        const t = i.campaigns.map((({id: e}) => e));
                        n       = e.filter((e => t.includes(e)))
                    }
                    t.forEach((e => {
                        n.includes(e.campaign.id) && e.execute()
                    }))
                }))
            }
        }

        class gt {
            static STORAGE_KEY = we().storageKeys.campaignEaEvents;

            constructor(e, t) {
                this.storage = e, this.sessionId = t.getSessionId()
            }

            static factory      = (e, t) => new gt(e, t);
            static buildDataKey = (e, t) => {
                const {id: n, noShowCategory: i, trackCategory: r} = e;
                let s                                              = "no-show" === t ? i : r;
                return s || (s = "DEFAULT_CATEGORY_KEY"), `${n}-${s}`
            };

            _initNewSessionData() {
                return {sessionId: this.sessionId, campaignIdsToActionsMap: {}}
            }

            _cleanOldSessionData(e) {
                return e.sessionId !== this.sessionId ? this._initNewSessionData() : e
            }

            _getEaEvents() {
                return this.storage.get(gt.STORAGE_KEY)
            }

            _setEaEvents(e) {
                return this.storage.set(gt.STORAGE_KEY, e)
            }

            handleEvent(e, t) {
                const n = gt.buildDataKey(e, t);
                return this._getEaEvents().then((e => {
                    const i = e ? this._cleanOldSessionData(e) : this._initNewSessionData();
                    let r   = i.campaignIdsToActionsMap[n];
                    return r || (r = [], i.campaignIdsToActionsMap[n] = r), -1 === r.indexOf(t) && r.push(t), this._setEaEvents(i)
                }))
            }

            isFirstEvent(e, t) {
                const n = gt.buildDataKey(e, t);
                return this._getEaEvents().then((e => {
                    if (!e) return !0;
                    const i = this._cleanOldSessionData(e).campaignIdsToActionsMap[n];
                    return !(i && i.length > 0) || !i.includes(t)
                }))
            }
        }

        const ft = (0, e.Z)("ga");

        class wt {
            static addToDataLayer(e, t, n) {
                if (!window.dataLayer || !window.dataLayer.push) return void (n && ft.warn("GA type dataLayer, but no window.dataLayer"));
                const i = t || "flocktory";
                window.dataLayer.push({event: i, eventCategory: e.category, eventAction: e.action, eventLabel: e.label, nonInteraction: e.nonInteraction ? 1 : 0})
            }

            static trackClassic(e) {
                window._gaq && window._gaq.push ? (window._gaq.push(["_trackEvent", e.category, e.action, e.label, null, {nonInteraction: e.nonInteraction ? 1 : 0}]), wt.addToDataLayer(e, null, !1)) : ft.warn('GA type "classic" but no GA on site')
            }

            static trackUniversal(e, t, n, i) {
                if (!window.ga) return void ft.warn("No window.ga");
                let r = "send";
                t && (r = t + "." + r);
                const s = ["event", e.category, e.action, e.label, {nonInteraction: e.nonInteraction}];
                let o;
                if (i && window.ga.getByName && (o = window.ga.getByName(i)), o && "function" == typeof o.send) o.send(...s); else {
                    if (n && window.ga.getAll) {
                        const e = window.ga.getAll();
                        e && e[0] && (r = e[0].get("name") + "." + r)
                    }
                    window.ga(r, ...s)
                }
                wt.addToDataLayer(e, null, !1)
            }

            static trackDdl(e) {
                window.digitalData && window.digitalData.events && window.digitalData.events.push ? window.digitalData.events.push({name: "Flocktory Event", category: e.category, action: e.action, label: e.label, nonInteraction: Boolean(e.nonInteraction), source: "Flocktory"}) : ft.warn('GA type "ddl" but no DDL on site')
            }

            static trackByType(e, t) {
                const {type: n, gaTrackerName: i, gaDynamicTracker: r, gaTrackingPrefix: s, gaDataLayerEvent: o} = t;
                switch (n) {
                    case"classic":
                        wt.trackClassic(e);
                        break;
                    case"universal":
                        wt.trackUniversal(e, s, r, i);
                        break;
                    case"data_layer":
                        wt.addToDataLayer(e, o, !0);
                        break;
                    case"ddl":
                        wt.trackDdl(e)
                }
            }
        }

        const vt = (0, e.Z)("ym");
        const yt = (0, e.Z)("external tracking");

        class bt {
            constructor(e, t, n, i) {
                this.trackingSettings = n, this.tracker = e, this.campaignEaEventsStorage = i, this.campaign = t, this.versionId = null != t.widget ? t.widget.versionId : "empty"
            }

            _track(e, t) {
                const n = this._getDefaultParams(e, t);
                let i   = this._getCampaignLevelParamsRedefinition(n);
                const r = function (e, t) {
                    const {trackRedefinitions: n} = t, i = t => t.key.action === e.action;
                    return n.find(i)
                }(i, this.campaign);
                i = function (e, t) {
                    const n = {...e};
                    null != t && null != t.value && (n.action = t.value.action, n.nonInteraction = 1 == t.value.nonInteraction);
                    return n
                }(i, r), this._trackToFlocktory(n, i);
                const s = !r || r.enabled;
                null != this.trackingSettings && s && (this.trackToEnabledTrackers(i, this.trackingSettings), yt.info(`${this.trackingSettings.type} track`, i))
            }

            track(e, t) {
                const {campaign: n, campaignEaEventsStorage: i} = this;
                (n.isGaTrackPerSession || n.isTrackEventPerSession) && i ? i.isFirstEvent(n, e).then((r => r ? (this._track(e, t), i.handleEvent(n, e)) : null)).catch((e => {
                    throw new Error(e)
                })) : this._track(e, t)
            }

            _getDefaultParams(e, t) {
                return {category: "flocktory-precheckout", action: e, label: this.__getDefaultLabel(), nonInteraction: t}
            }

            _getCampaignLevelParamsRedefinition(e) {
                const t = {...e};
                return this.campaign.trackCategory && (t.category = this.campaign.trackCategory), this.campaign.trackLabel && (t.label = this.campaign.trackLabel), "no-show" === t.action && (this.campaign.noShowLabel && (t.label = this.campaign.noShowLabel), this.campaign.noShowCategory && (t.category = this.campaign.noShowCategory), this.campaign.noShowAction && (t.action = this.campaign.noShowAction)), t
            }

            __getDefaultLabel() {
                return this.campaign.groupId ? String(this.campaign.groupId) : this.campaign.id
            }

            _trackToFlocktory(e, t) {
                return this.tracker.trackCustomActivity(this.campaign.id, e, t || {})
            }

            trackToEnabledTrackers(e, t) {
                const {gaTrackingEnabled: n, ymTrackingEnabled: i} = t;
                n && wt.trackByType(e, t), i && class {
                    static track(e, t) {
                        const {ymCounterNumber: n} = t;
                        if (null == window.ym) return void vt.warn("No window.ym");
                        const i = {event_category: e.category, event_action: e.action, event_label: e.label, event_time: Date.now()}, r = {[i.event_action]: JSON.stringify(i)};
                        window.ym(n, "params", {flock_event_data: r})
                    }
                }.track(e, t)
            }
        }

        class _t {
            constructor(e, t, n) {
                this.tracker = e, this.storage = t, this.config = n
            }

            logAbTest(t, n) {
                return this.storage.get("abTests").then((i => {
                    i || (i = {[t.id]: {index: 0, isLogged: !1}}), (0, e.Z)("ab").info(`AB test for campaign ${t.id}: variation ${t.groupId} win`);
                    return i[t.id] && i[t.id].isLogged ? Promise.resolve() : this.storage.update("abTests", (e => {
                        const i = e || {};
                        i[t.id] = i[t.id] || {}, i[t.id].isLogged = !0;
                        return new bt(this.tracker, t, n).track("test-passed", !0), i
                    }))
                }))
            }
        }

        class kt extends Ze.EventEmitter {
            static EVENTS  = {EXPIRED: "expired"};
            static factory = () => new kt;

            constructor() {
                super(), this.storage = {}, this.isExpired = !1
            }

            determineExpirationAndFireEventIfNecessary() {
                const e = this.isExpired, {timestamp: t} = this.storage;
                return this.isExpired = t && Date.now() - t >= 216e5, this.isExpired && !e && this.emit(kt.EVENTS.EXPIRED), this.isExpired
            }

            getSetupApiData() {
                return this.storage.setupApiData || {}
            }

            setSetupApiData(e) {
                this.isExpired = !1, this.storage = {timestamp: Date.now(), setupApiData: e}
            }
        }

        const St = (0, e.Z)("precheckout-watcher"), Et = (0, e.Z)("performance"), {pairs: It, getElementOrderAndSelector: At} = __webpack_require__(370);

        function Tt(e, t, n, i, r, s, o, a, c, u, l, d, h, p, m) {
            const g = new _t(c, e, {});
            let f   = [], w = 0;
            const v = new mt(e, n, i, o, l, s);

            function y(e, t) {
                Promise.all(e).then((e => {
                    t === w && (e.forEach((e => {
                        e.isBackgroundExecute ? _(e).execute() : v.push(_(e))
                    })), m.set(e), f = [...f, ...e])
                }))
            }

            function b(e) {
                w++;
                const t = w, n = (f || []).map((e => e.id)), i = e.filter((e => !n.includes(e.id))), r = e.map((e => e.id));
                f = f.reduce(((e, t) => (r.includes(t.id) ? e.push(t) : v.removeTriggerByCampaignId(t.id), e)), []), y(i, t)
            }

            function _(e) {
                let t;
                return null == e.widget ? t = () => function (e) {
                    new bt(c, e, l.getTrackingSettings(), r).track("no-show", !0)
                }(e) : "true" === e.widget.meta["light-widget"] ? t = function (e) {
                    const t = {cid: e.id, vid: e.widget.versionId, motivationId: e.widget.meta.motivation_id};
                    return function (n) {
                        if ("60072" === e.id && 104 === function () {
                            function e(e, t) {
                                for (let n = 0, i = e.length; n < i; n++) if (t(e[n])) return e[n];
                                return null
                            }

                            const t = Array.prototype.slice.call(document.querySelectorAll("script[src]")).map((e => e.getAttribute("src") || "")), n = e => /\/\/[^/]*api.flocktory.com\/v2\/loader\.js/.test(e), i = e(t, n);
                            if (i) {
                                const e = i.match("site_id=([0-9]+)");
                                if (e && e[1]) return parseInt(e[1], 10)
                            }
                            return null
                        }()) {
                            new bt(c, e, l.getTrackingSettings(), r).track("before-show-widget", !0)
                        }
                        h.widget(t).then((i => {
                            if (n.state.expired) return;
                            const {isGaTrackPerSession: s} = e, o = "true" === e.widget.meta.closeOutside, {optinVersionId: a, closeOutsideSeconds: u} = e.widget.meta, d = function (e) {
                                let t = null;
                                if (e.meta.containerSelector) {
                                    const [n, i] = At(e.meta.containerSelector);
                                    if (t = document.querySelector(i), t && ("before" === n || "after" === n)) {
                                        const e = document.createElement("span");
                                        if (e.classList.add("fl-embedded-wrapper"), null != t.parentNode) {
                                            const i = "before" === n ? t : t.nextSibling;
                                            t.parentNode.insertBefore(e, i)
                                        }
                                        t = e
                                    }
                                    if (t && e.meta.containerWrapper) {
                                        const n     = document.createElement("div");
                                        n.innerHTML = e.meta.containerWrapper;
                                        n.firstChild.classList.add("fl-custom-wrapper");
                                        const i = n.firstChild;
                                        null != i && t.insertBefore(i, t.firstChild), t = i
                                    }
                                    return t
                                }
                                return document.body
                            }(e.widget);
                            if (null != d) {
                                const h = new bt(c, e, l.getTrackingSettings(), r);
                                p.create(i, {closeOutside: o, closeOutsideSeconds: u, gaTracker: h, isGaTrackPerSession: s, root: d, optinVersionId: a, motivationId: t.motivationId, trigger: n})
                            }
                        })).catch((e => {
                            St.error(e, {label: "Create light widget err.", cid: t.cid})
                        }))
                    }
                }(e) : St.warn("Bridge widgets are not supported anymore"), new a.Trigger({
                    campaign: e, variables: l.getVariables(), conditions: Ct(e), callback: n => {
                        t(n), e.abTestEnabled && g.logAbTest(e, l.getTrackingSettings())
                    }
                })
            }

            return Et.info("triggerManager start", performance.now()), m.set(l.getCampaigns()), b(l.getCampaigns()), {
                update: (e, t = !1) => l.update(e).then((() => {
                    t ? function (e) {
                        w++;
                        const t = w;
                        v.removeAllTriggers(), f = [], y(e, t)
                    }(l.getCampaigns()) : b(l.getCampaigns())
                }))
            }
        }

        function Ct(e) {
            return function (e) {
                if (null == e) return !0;
                const t = It(e);
                return 0 === t.length || 1 === t.length && "$or" === t[0][0] && null == t[0][1]
            }(e.triggers) ? {url: {$match: ""}} : e.triggers
        }

        const {reduceItemsViewLog: Pt} = _e, Ot = e => null == e.count ? "quantity" : "count", Lt = e => {
            const t = {...e}, n = Ot(e);
            null != e.id && (t.id = String(e.id)), t[n] = parseFloat(e[n]);
            const i = parseFloat(e.price);
            return i == i && (t.price = i), t
        }, xt                          = e => {
            let t = e.item || e.products || {};
            return Array.isArray(t) || (t = [t]), t.map(Lt)
        }, Nt                          = 18e5;

        function Dt(e, n, {siteId: i}, r) {
            class s {
                constructor() {
                    this.updated = !1, this.items = [], e.get("cart").then((e => {
                        e && e.items && !this.updated && e.expireAt > Date.now() && (this.items = e.items)
                    }))
                }

                save() {
                    return e.set("cart", {items: this.items, expireAt: Date.now() + Nt})
                }

                addItem(e) {
                    const i = (0, t.deepMerge)({}, e), r = this.items.find((e => e.id === i.id));
                    if (r) {
                        r[Ot(r)] += i[Ot(i)]
                    } else this.items.push(i);
                    n.trackAddToCart(i)
                }

                addItems(e) {
                    const n = (0, t.deepMerge)({}, e);
                    xt(n).forEach((e => this.addItem(e))), this.save()
                }

                removeItem(e) {
                    const t = this.items.find((t => t.id === e.id));
                    if (t) {
                        t[Ot(t)] -= e[Ot(e)], n.trackRemoveFromCart(e), e = {...t, ...e}
                    }
                }

                removeItems(e) {
                    xt((0, t.deepMerge)({}, e)).forEach((e => this.removeItem(e))), this.items = this.items.filter((e => e[Ot(e)] > 0)), this.save()
                }

                reset() {
                    this.items = [], this.save()
                }

                getItemsCount() {
                    return this.items.reduce(((e, t) => e + t[Ot(t)]), 0)
                }

                getTotalPrice() {
                    return this.items.reduce(((e, t) => e + t.price * t[Ot(t)]), 0)
                }

                getFieldFromCardItems(e) {
                    return this.items.map((t => t[e]))
                }

                update(e) {
                    const t      = e && e.cart && e.cart.items || [];
                    this.updated = !0;
                    const i      = this.items;
                    this.items = t.map(Lt), this.save(), this.items.forEach((e => {
                        const t = i.find((t => t.id === e.id));
                        if (t) {
                            const i = Ot(t), r = parseFloat(e[i]) - parseFloat(t[i]);
                            r > 0 ? n.trackAddToCart({id: e.id, quantity: r}) : r < 0 && n.trackRemoveFromCart({id: e.id, quantity: -r})
                        } else n.trackAddToCart(e)
                    }));
                    i.filter((e => !this.items.find((t => t.id === e.id)))).forEach((e => n.trackRemoveFromCart(e)))
                }
            }

            class o {
                constructor() {
                    this.update = this.update.bind(this), this.isAuthorized = this.isAuthorized.bind(this), this.save = this.save.bind(this), this.location = {}, this.name = null, this.email = null, this.stats = {}
                }

                isUserChanged(e) {
                    return this.email !== e.email
                }

                logout() {
                    this.email = null, this.name = null
                }

                update(e) {
                    e.name && (this.name = e.name), e.email && (this.email = e.email), null != e.location && (this.location = e.location)
                }

                isAuthorized() {
                    return /\S+@\S+\.\S+/.test(this.email)
                }

                hasName() {
                    return !!this.name
                }

                save() {
                }
            }

            class a {
                constructor() {
                    this.sync = this.sync.bind(this), this.mergeAndAssignTags = this.mergeAndAssignTags.bind(this), this.getReferrerToTags = this.getReferrerToTags.bind(this), this.tags = {}, this.hypotheticalTags = {}
                }

                sync(n) {
                    const i = ct(String.prototype.slice.call(document.cookie));
                    return e.get(we().storageKeys.utmTags).then((r => (this.mergeAndAssignTags(i, (0, t.getLocationParams)(), r || {}, this.getReferrerToTags(document.referrer)), e.set(we().storageKeys.utmTagsHypothetical, this.hypotheticalTags), e.set(we().storageKeys.utmTags, this.tags).then((() => n())).catch((() => n())))))
                }

                mergeAndAssignTags(e, t, n, i) {
                    const r = {source: "utmcsr", medium: "utmcmd", campaign: "utmccn", term: "utmctr", content: "utmcct"}, s = parseInt(t.utm_nooverride, 10);
                    ["campaign", "source", "medium", "term", "content"].forEach((o => {
                        const a = e.utmz[r[o]], c = t[`utm_${o}`] || i[o];
                        let u   = a;
                        s || (u = u || c), u = u || n[o], u && (this.tags[o] = u), c && !s && (this.hypotheticalTags[o] = c)
                    }))
                }

                getReferrerToTags(e) {
                    const t = {source: null, medium: null, campaign: null};
                    if (!e) return t;
                    const n = e.split("/")[2], i = e => e.split(".").slice(-2).join(".");
                    return /google\.(com|ru)/i.test(e) ? (t.source = "google", t.medium = "organic") : /googleadservices\.com/i.test(e) ? (t.source = "google", t.medium = "cpc") : /yandex.ru\/clck/i.test(e) ? (t.source = "yandex", t.medium = "organic") : i(n) !== i(window.location.host) && (t.source = n, t.medium = "referral", t.campaign = "referral"), t
                }
            }

            class c {
                constructor() {
                    e.get(we().storageKeys.categoryViewLog).then((e => {
                        this.log = e ? e.ids : {}
                    })), this.currentCategory = void 0
                }

                getCurrent() {
                    return this.currentCategory
                }

                getCountViews() {
                    return Object.keys(this.log).length
                }

                add(e) {
                    this.currentCategory = e, this.log[e] = this.log[e] + 1 || 1, this.save()
                }

                save() {
                    e.set(we().storageKeys.categoryViewLog, {ids: this.log, expireAt: Date.now() + Nt})
                }
            }

            class u {
                constructor() {
                    e.get(we().storageKeys.pushSubscribeLog).then((e => {
                        this.log = e || {}
                    }))
                }

                saveLastSubscriptionTimestamp() {
                    return e.set(we().storageKeys.pushSubscribeLog, {lastSubscriptionTimestamp: +Date.now()}, {expireAt: +new Date + 15552e6})
                }

                getLastSubscriptionTimestamp() {
                    return e.get(we().storageKeys.pushSubscribeLog).then((e => e ? e.lastSubscriptionTimestamp : null))
                }
            }

            class l extends Ze.EventEmitter {
                constructor() {
                    super(), this.sync = this.sync.bind(this), this.addData = this.addData.bind(this), this.addMeta = this.addMeta.bind(this), this.getData = this.getData.bind(this), this.getUser = this.getUser.bind(this), this.getCart = this.getCart.bind(this), this.getHypotheticalUtmTags = this.getHypotheticalUtmTags.bind(this), this.addItemView = this.addItemView.bind(this), this.getCurrentItem = this.getCurrentItem.bind(this), this.getItemsViews = this.getItemsViews.bind(this), this.user = new o, this.cart = new s, this.assigns = {}, this.utmTags = new a, this.category = new c, this.push = new u, this.meta = {}
                }

                sync(e) {
                    this.utmTags.sync(e)
                }

                addData(e) {
                    const n = e.user || e.customer;
                    n && this.user.isUserChanged(n) && ("" === n.email ? this.user.logout() : this.user.update(n), this.emit("add-user", n)), e.cart && (this.cart.update(e), this.emit("add-cart", e.cart)), e.assigns && ((0, t.deepMerge)(this.assigns, e.assigns), this.emit("add-assigns", e.assigns)), e.category && this.category.add(String(e.category.id)), e.meta && this.addMeta(e.meta)
                }

                addMeta(e) {
                    this.meta = Object.assign(this.meta, e), this.setSnapshotMeta(e)
                }

                getData() {
                    return {user: this.user, cart: this.cart, site: {id: i}, assigns: this.assigns, category: this.category, meta: (0, t.deepMerge)({}, this.meta), getSessionId: () => r.getGlobalSessionId()}
                }

                getUser() {
                    return this.user
                }

                getCart() {
                    return this.cart
                }

                getUtmTags() {
                    return this.utmTags.tags
                }

                getHypotheticalUtmTags() {
                    return this.utmTags.hypotheticalTags
                }

                addItemView(t) {
                    const n = t && t.item && t.item.id;
                    return n ? (this.currentItemId = n, this.emit("add-item-view", n), e.get(we().storageKeys.itemsViewLog).then((t => {
                        const i = r.getSessionId();
                        return (t = Pt(t, i)).push({itemId: n, sessionId: i}), e.set(we().storageKeys.itemsViewLog, t)
                    }))) : Promise.reject()
                }

                getCurrentItem() {
                    return new Promise((e => this.currentItemId ? e(this.currentItemId) : this.on("add-item-view", (function () {
                        return e(this.currentItemId)
                    }))))
                }

                getItemsViews() {
                    return e.get(we().storageKeys.itemsViewLog).then((e => {
                        if (!e) return [];
                        const t = e.map((e => e.itemId)), n = {};
                        return t.forEach((e => {
                            n[e] = 1
                        })), Object.keys(n)
                    }))
                }

                isProductPage() {
                    return !!this.currentItemId
                }

                isCategoryPage() {
                    return !!this.category.getCurrent()
                }

                getSnapshotMeta() {
                    return this.getSnapshotMetaRaw().then((e => (e || {}).snapshot || {}))
                }

                getSnapshotMetaRaw() {
                    return e.get(we().storageKeys.snapshotMeta)
                }

                setSnapshotMeta(t) {
                    return this.getSnapshotMetaRaw().then((n => {
                        (n = n || {}).snapshot = n.snapshot || {}, (!n.clearAt || n.clearAt < Date.now()) && (n.clearAt = Date.now() + 12096e5, n.snapshot = {}), Object.assign(n.snapshot, t || {}), e.set(we().storageKeys.snapshotMeta, n)
                    }))
                }

                compareSnapshotMeta(e) {
                    return this.getSnapshotMeta().then((t => {
                        e = e || {}, t = t || {};
                        try {
                            if (JSON.stringify(e) === JSON.stringify(t)) return !0
                        } catch (e) {
                        }
                        const n = Object.keys(e) || [], i = Object.keys(t) || [], r = n.filter((n => Object.prototype.hasOwnProperty.call(t, n) && e[n] === t[n]));
                        return r.length === n.length && r.length === i.length
                    }))
                }

                compareSnapshotMetaByPart(e) {
                    return this.getSnapshotMeta().then((t => {
                        const n = {...t, ...e || {}};
                        return this.compareSnapshotMeta(n)
                    }))
                }
            }

            const d = new l;
            return new Promise((e => d.sync((() => e(d)))))
        }

        const {reducePageViewsLog: Vt} = _e, Rt = we().storageKeys.pageViewsLog, Ut = we().storageKeys.categoryViewLog, Mt = we().storageKeys.itemsViewLog, jt = e => e.reduce(((e, t) => e + t.timeIntervals.reduce(((e, t) => e + (t.end - t.start)), 0)), 0);

        function Ft(e, n) {
            return {
                cleanLog                       : Wt, track() {
                    const i = Math.round(we().pageViewsLog.checkInterval / 1e3);
                    return e.get(Rt).then((r => {
                        let s = [];
                        null != r && (s = r), s = Wt(s, n.getSessionId());
                        let o   = (0, t.findLast)(s, (e => e.viewId === n.getViewId()));
                        const a = Math.round(new Date / 1e3);
                        if (o) {
                            const e = (0, t.findLast)(o.timeIntervals, (e => a - e.end <= i));
                            e ? e.end = a : o.timeIntervals.push({start: a, end: a})
                        } else o = {viewId: n.getViewId(), sessionId: n.getSessionId(), pageUrl: window.location.href, timeIntervals: [{start: a, end: a}]}, s.push(o);
                        return s = Vt(s), e.set(Rt, s)
                    }))
                }, getSessionViewsCount        : t => e.get(Rt).then((e => {
                    e || (e = []);
                    const i = e.reduce(((e, t) => e + (t.sessionId === n.getSessionId() ? 1 : 0)), 0);
                    return t(i)
                })), getSessionPageUrls        : i => e.get(Rt).then((e => i(((e, n = []) => ((0, t.assert)(e, "no ssid"), null === n ? [] : n.filter((t => t.sessionId === e)).map((e => e.pageUrl))))(n.getSessionId(), e)))), getSessionActivityDuration: t => e.get(Rt).then((e => {
                    const i = (e || []).filter((e => e.sessionId === n.getSessionId()));
                    return t(jt(i))
                })), getPageActivityDuration   : t => e.get(Rt).then((e => {
                    const i = (e || []).filter((e => e.viewId === n.getViewId()));
                    return t(jt(i))
                })), getCategoriesViews        : t => e.get(Ut).then((e => t(Date.now() <= e.expireAt ? e : {}))), getCardsViews: t => e.get(Mt).then((e => {
                    const i = (e || []).filter((e => e.sessionId === n.getSessionId()));
                    return t(i)
                })), sessionIsFirst            : i => e.get(Rt).then((e => (e || (e = []), i(!(0, t.findLast)(e, (e => e.sessionId !== n.getSessionId())))))), sessionStartUrl: t => e.get(Rt).then((e => {
                    let n;
                    e || (e = []);
                    const i = $t(e[e.length - 1], (e => e.sessionId));
                    null != i && (n = e.reduce(((e, t) => (t.sessionId === i && (!e.time || e.time > t.timeIntervals[0].start) && (e.time = t.timeIntervals[0].start, e.url = t.pageUrl), e)), {}));
                    const r = $t(n, (e => e.url)) || window.location.href;
                    return t(r)
                })), getShownCampaignsInSession: i => e.get(we().storageKeys.precheckoutShownLog).then((e => {
                    const r = (e || []).filter((e => e.session === n.getSessionId())).map((e => String(e.campaign)));
                    return i((0, t.uniq)(r))
                }))
            }
        }

        function $t(e, t) {
            return null != e ? t(e) : void 0
        }

        function Wt(e, t) {
            if (!e.length) return e;
            let n = e.slice(0);
            n.sort(((e, t) => e.timeIntervals[0].start - t.timeIntervals[0].start));
            const i = n[0].sessionId;
            return n = n.filter((e => e.sessionId === i || e.sessionId === t)), n
        }

        const qt = (0, e.Z)("performance");

        function Bt(e, n, i, r, s, o, a) {
            const c = a && a.checkInterval || 1e3, u = a && a.checkWithoutFocus || !1;
            return new class {
                constructor() {
                    this.startWatching = this.startWatching.bind(this), this.initialEventWatch = this.initialEventWatch.bind(this), this.checkConditions = this.checkConditions.bind(this), this.trackPageViews = this.trackPageViews.bind(this), this.getInactivityDuration = this.getInactivityDuration.bind(this), this.storage = e, this.behaviorStorage = n, this.documentWatcher = i, this.customEvents = r, this.shareData = s, this.lastActivity = new Date, this.viewsLog = null, this.events = new Ze.EventEmitter, this.events.setMaxListeners(0), this.initialEventWatch(), this.startWatching(), qt.info("behaviorWatcher init", performance.now())
                }

                startWatching() {
                    const e = (0, t.throttle)((() => {
                        this.lastActivity = new Date
                    }), 1e3);
                    document.addEventListener("click", e), document.addEventListener("keypress", e), document.addEventListener("keydown", e), document.addEventListener("contextmenu", e);
                    const n = {customEvents: this.initialEvents.events.slice(), events: []};
                    let i   = (0, t.deepMerge)({}, n);
                    this.check = (0, t.throttle)((() => {
                        if (this.documentWatcher.hasFocus() || u) {
                            const e = (0, t.deepMerge)({}, i);
                            this.trackPageViews((() => this.events.emit("check", e))), i = (0, t.deepMerge)({}, n)
                        }
                    }), c / 2, {leading: !0}), this.documentWatcher.events.on("locationchange", (() => {
                        this.events.emit("locationchange"), this.check()
                    })), this.documentWatcher.events.on("focus", (() => {
                        i.events.push("document_focus"), this.check()
                    })), this.documentWatcher.events.on("blur", (() => {
                        i.events.push("document_blur"), this.check()
                    })), this.documentWatcher.events.on("leave", (e => {
                        this.shareData.addMeta({exitCoordinates: e}), i.events.push("document_leave"), this.check()
                    })), this.events.on("end_check_triggers", (() => {
                        i.events = []
                    })), this.initialEvents.off(), this.customEvents.on("fireEvent", (e => {
                        i.customEvents.push(e.event), this.check()
                    })), this.customEvents.on("clean", (() => {
                        i.customEvents = []
                    })), this.customEvents.on("loaderReady", (() => {
                        this.check()
                    })), setInterval(this.check, c)
                }

                initialEventWatch() {
                    const e = [], t = t => e.push(t.event);
                    this.customEvents.on("fireEvent", t), this.initialEvents = {events: e, off: () => this.customEvents.removeListener("fireEvent", t)}
                }

                checkConditions() {
                    this.check()
                }

                trackPageViews(e) {
                    this.behaviorStorage.track().then((() => e())).catch((() => e()))
                }

                getInactivityDuration() {
                    return new Date - this.lastActivity
                }
            }(e, n, i, r, s)
        }

        const {EventEmitter: zt} = Ge();

        class Kt {
            _testing        = !1;
            _stopWatchFocus = () => null;

            constructor(e) {
                null != e && e.testing && (this._testing = !0), this.events = new zt, this.events.setMaxListeners(0), function (e) {
                    let t   = !1;
                    const n = () => {
                        t || (t = !0, document.removeEventListener("DOMContentLoaded", n, !1), window.removeEventListener("load", n, !1), e())
                    };
                    "complete" === document.readyState || "interactive" === document.readyState ? n() : (document.addEventListener("DOMContentLoaded", n, !1), window.addEventListener("load", n, !1))
                }((() => (this._watchFocus(), this._watchLeaving(), this._watchLocation())))
            }

            destroy() {
                this._stopWatchFocus()
            }

            _watchFocus() {
                let e;
                this._pageFocused = this._isPageFocused();
                const n           = (0, t.throttle)((t => {
                    e = this._isPageFocused(t), e !== this._pageFocused && (this._pageFocused = e, this._emitFocusChange())
                }), 500), i       = () => n();
                document.addEventListener("visibilitychange", i);
                const r = () => n({focused: !0});
                window.addEventListener("focus", r);
                const s = () => n({focused: !1});
                let o;
                window.addEventListener("blur", s), this._hasDocFocus() && (o = setInterval(n, 500));
                const a = (0, t.debounce)((() => n({focused: !0}) || !0), 100);
                window.addEventListener("mousemove", a), window.addEventListener("scroll", a), this._stopWatchFocus = () => {
                    document.removeEventListener("visibilitychange", i), window.removeEventListener("focus", r), window.removeEventListener("blur", s), window.removeEventListener("mousemove", a), window.removeEventListener("scroll", a), o && clearInterval(o)
                }
            }

            _isPageFocused(e = {}) {
                let t = null != e.focused ? e.focused : !this._hasDocFocus() || document.hasFocus();
                return this._hasDocVisibility() && (t = t && !document.hidden), t
            }

            _hasDocFocus() {
                return null != document.hasFocus && !this._isTestEnv()
            }

            _hasDocVisibility() {
                return !document.hidden && !this._isTestEnv()
            }

            _isTestEnv() {
                return this._testing
            }

            _emitFocusChange() {
                return this._pageFocused ? this.events.emit("focus") : this.events.emit("blur")
            }

            _watchLeaving() {
                return setTimeout((() => {
                    let e;
                    try {
                        e = window.top.document
                    } catch (t) {
                        e = window.document
                    }
                    const {body: t} = e;
                    return t.addEventListener("mouseout", (e => {
                        let t;
                        if ("SELECT" !== e.target.tagName) {
                            try {
                                t = e.clientY < we().exitIntent.sensitivity
                            } catch (e) {
                            }
                            t && this.events.emit("leave", {x: e.clientX, y: e.clientY})
                        }
                    }))
                }), 1e3)
            }

            _watchLocation() {
                window.addEventListener("popstate", (e => {
                    e.state && this.events.emit("locationchange")
                }))
            }

            hasFocus() {
                return this._pageFocused
            }

            getBattery(e) {
                return null != window.navigator && null != window.navigator.getBattery ? window.navigator.getBattery().then((t => e(t.level))).catch((() => e(1))) : e(1)
            }
        }

        function Ht(e) {
            return new Kt(e)
        }

        class Zt extends Ze.EventEmitter {
            constructor(e) {
                super(), this.tracker = e
            }

            fireEvent(e) {
                return e.noTrack || this.tracker.trackCustomEvent(e.event), this.emit("fireEvent", e)
            }
        }

        function Gt(e) {
            return new Zt(e)
        }

        var Jt   = __webpack_require__(25);
        const Yt = (0, e.Z)("triggers"), Qt = function (e) {
            if ("object" != typeof e) return e;
            let t   = e.$value;
            const n = e.$unit;
            if ("days" === n && (t *= 86400), "hours" === n && (t *= 3600), "minutes" === n && (t *= 60), "time" === n) {
                const [e, n] = t.split(":").map((e => parseInt(e, 10)));
                t            = (new Date).setHours(e, n)
            }
            return t
        };

        function Xt(n, i, r, s, o, a) {
            (0, t.assert)(n && i && r && s && o, "Trigger Factory args");
            let c = window.document.referrer || "";
            try {
                c = decodeURI(c)
            } catch (e) {
            }
            const u = function (e) {
                let t;
                return t = e.$and ? new h(e.$and) : e.$or ? new p(e.$or) : e.$not ? new m(e.$not) : new g(e), t
            }, l    = (n, i) => {
                if (null == n && !(e => {
                    if (!e || "object" == typeof e && 0 === Object.keys(e).length) return !1;
                    const t = Object.keys(e);
                    return 1 === t.length && ["$isNull", "$notNull"].includes(t[0])
                })(i)) return !1;
                if (!i || "object" == typeof i && 0 === Object.keys(i).length) return !0;
                let r = !0;
                if ("object" != typeof i) r = n === i; else {
                    if (null == i.$eq && "boolean" != typeof i.$eq || (r = r && n === Qt(i.$eq)), r && null != i.$match && (r = -1 !== n.toLowerCase().trim().indexOf(String(Qt(i.$match).trim()).toLowerCase())), r && null != i.$regex) try {
                        const e = (0, t.getValOrVariableVal)(i.$regex, o.getVariables());
                        r       = new RegExp(e, "i").test(n)
                    } catch (t) {
                        (0, e.Z)("triggers").warn("Regex condition failed", i.$regex), r = !1
                    }
                    if (r && null != i.$eval) try {
                        r = new Function(i.$eval)({cart: s.cart})
                    } catch (t) {
                        r = !1, (0, e.Z)("triggers").warn("Custom JS trigger have failed", i.$eval)
                    }
                    if (r && i.$ne && (r = "object" != typeof i.$ne || i.$ne.$unit ? n !== Qt(i.$ne) : !l(n, i.$ne)), r && i.$gte && (r = n >= Qt(i.$gte)), r && i.$gt && (r = n > Qt(i.$gt)), r && i.$lte && (r = n <= Qt(i.$lte)), r && i.$lt && (r = n < Qt(i.$lt)), r && i.$or && (r = i.$or.some((e => l(n, e)))), r && i.$includes) {
                        const e = Array.isArray(n) ? n : [n];
                        r       = i.$includes.some((t => e.includes(t)))
                    }
                    if (r && i.$nincludes) {
                        const e = Array.isArray(n) ? n : [n];
                        r       = i.$nincludes.every((t => !e.includes(t)))
                    }
                    if (r && i.$has && (r = !0 === n[i.$has[0]]), r && i.$hasNot && (r = !1 === n[i.$hasNot[0]]), r && i.$and && (r = i.$and.every((e => l(n, e)))), r && i.$between) {
                        const e = Qt(i.$between[0]), t = Qt(i.$between[1]);
                        r       = t > e && n >= e && n <= t || t < e && (n >= e || n <= t)
                    }
                    r && i.$value && (r = n === Qt(i)), r && "boolean" == typeof i.$isNull && (r = !n === Qt(i.$isNull)), r && "boolean" == typeof i.$notNull && (r = !!n === Qt(i.$notNull))
                }
                return r
            };

            class d {
                constructor(e) {
                    Array.isArray(e) ? this.expressions = e.map((e => u(e))) : this.expressions = Object.keys(e).map((t => u(e[t])))
                }

                getContext() {
                    return this.context
                }

                setContext(e) {
                    this.context = e, this.expressions.forEach((t => t.setContext(e)))
                }
            }

            class h extends d {
                check() {
                    return Promise.all(this.expressions.map((e => e.check())))
                }
            }

            class p extends d {
                check() {
                    let e = this.expressions.length;
                    return new Promise(((t, n) => {
                        this.expressions.forEach((i => {
                            i.check().then((() => t())).catch((() => {
                                e--, e <= 0 && n()
                            }))
                        }))
                    }))
                }
            }

            class m extends d {
                constructor(e) {
                    super(e), this.expression = u(e)
                }

                setContext(e) {
                    return this.context = e, this.expression.setContext(e)
                }

                check() {
                    return new Promise(((e, t) => {
                        this.expression.check().then(t).catch(e)
                    }))
                }
            }

            class g {
                constructor(e) {
                    this.check = this.check.bind(this), this.expr = e
                }

                setContext(e) {
                    this.context = e
                }

                getContext() {
                    return this.context
                }

                isBrowserSupportsPush() {
                    return /^((?!chrome).)*safari/i.test(navigator.userAgent) ? "safari" in window && "pushNotification" in window.safari : "Notification" in window && "serviceWorker" in navigator
                }

                check() {
                    const [u, d] = (0, t.pairs)(this.expr)[0];
                    return new Promise(((h, p) => {
                        const m = e => {
                            e ? (Yt.info(`Trigger ${u} for campaign ${this.getContext().campaign.id} passed. Value: `, d), h()) : setTimeout(p, 1)
                        }, g    = o.getUtmTags();
                        switch (u) {
                            case"event":
                                return m(this.context.events.some((e => l(e, d))));
                            case"custom_event":
                                return m(this.context.customEvents.some((e => l(e, d))));
                            case"custom_js":
                                return m(l(!0, d));
                            case"html_element":
                                const h = Object.keys(d)[0], p = (0, t.getValOrVariableVal)(d[h], o.getVariables()), f = (0, t.getContainerSelectorValue)(p), w = (0, t.getHtmlElement)(f);
                                return m(l(w, {[h]: !0}));
                            case"custom_js_value":
                            case"datalayer":
                                const v  = (e => {
                                    const {$eval: n} = e;
                                    if (!n) return null;
                                    const {$value: i} = n;
                                    return [(0, t.getValOrVariableVal)(i, o.getVariables()), (0, t.getTriggerCondition)(n)]
                                })(d), y = v[0];
                                return m(l((t => {
                                    let n;
                                    try {
                                        n = new Function(t)({cart: s.cart})
                                    } catch (n) {
                                        (0, e.Z)("triggers").warn("Custom JS Value trigger have failed", t)
                                    }
                                    return n
                                })(y), (0, t.getTriggerCondition)(v[1])));
                            case"views_count":
                                return n.getSessionViewsCount((e => m(l(e, d))));
                            case"items_views_count":
                                return s.getItemsViews().then((e => m(l(e.length, d))));
                            case"session_activity_duration":
                                return n.getSessionActivityDuration((e => m(l(e, d))));
                            case"page_activity_duration":
                                return n.getPageActivityDuration((e => m(l(e, d))));
                            case"inactivity_duration":
                                return m(l(i.getInactivityDuration() / 1e3, d));
                            case"session_is_first":
                                return n.sessionIsFirst((e => m(l(e, d))));
                            case"url":
                                return m(l(window.location.href, d));
                            case"url_in_history":
                                return n.getSessionPageUrls((e => {
                                    m(e.some((e => l(e, d))))
                                }));
                            case"url_in_history_times": {
                                const e = parseInt((d.$eq || d.$regex).$count, 10);
                                return n.getSessionPageUrls((t => {
                                    m(t.filter((e => {
                                        const {origin: t, pathname: n} = new URL(e), i = `${t}${n.replace(/\/$/, "")}`, r = `${t}${n}`;
                                        return l(e, d) || l(i, d) || l(r, d)
                                    })).length >= e)
                                }))
                            }
                            case"session_start_url":
                                return n.sessionStartUrl((e => m(l(e, d))));
                            case"referrer":
                                return m(l(c, d));
                            case"is_mobile":
                                return m(l(Jt.t, d));
                            case"cookie":
                                const b = V.Z.get();
                                let _   = Object.keys(b).map((e => {
                                    const t = b[e];
                                    return t && "0" !== t && "false" !== t ? e : null
                                }));
                                return _ = _.filter((e => e)), m(_.some((e => l(e, d))));
                            case"is_shown_in_session":
                                return n.getShownCampaignsInSession((e => {
                                    const t = e.includes(String(this.context.campaign.id));
                                    m(l(t, d))
                                }));
                            case"is_campaign_shown_in_session":
                                return n.getShownCampaignsInSession((e => {
                                    m(l(e, d))
                                }));
                            case"user_is_authorized":
                                return m(l(this.context.user.isAuthorized(), d));
                            case"user_has_name":
                                return m(l(this.context.user.hasName(), d));
                            case"category_viewed_times": {
                                const {$eq: {id: e, count: t}} = d;
                                return n.getCategoriesViews((n => {
                                    m((n.ids || [])[e] >= t)
                                }))
                            }
                            case"card_viewed_times":
                                return n.getCardsViews((e => {
                                    const t = e.reduce(((e, {itemId: t}) => (e[t] = (e[t] || 0) + 1, e)), {});
                                    m(Object.values(t).some((e => l(e, d))))
                                }));
                            case"cart_items_count":
                                return m(l(this.context.cart.getItemsCount(), d));
                            case"cart_total_price":
                                return m(l(this.context.cart.getTotalPrice(), d));
                            case"cart_add_item":
                                const k = this.context.customEvents.some((e => "flock_api_add_to_cart" === e));
                                return m(l(k, d));
                            case"cart_items_has_category":
                                return m(this.context.cart.getFieldFromCardItems("categoryId").some((e => l(e, d))));
                            case"cart_items_has_brand":
                                return m(this.context.cart.getFieldFromCardItems("brand").some((e => l(e, d))));
                            case"utm_source":
                                return m(l(g.source, d));
                            case"utm_campaign":
                                return m(l(g.campaign, d));
                            case"utm_medium":
                                return m(l(g.medium, d));
                            case"utm_content":
                                return m(l(g.content, d));
                            case"gclid":
                                return n.getSessionPageUrls((e => {
                                    m(e.some((e => {
                                        const n = (0, t.getParameterByName)("gclid", e);
                                        return l(n, d)
                                    })))
                                }));
                            case"category":
                                return m(l(s.category.getCurrent(), d));
                            case"battery":
                                return r.getBattery((e => m(l(100 * e, d))));
                            case"notification_status":
                                return m(l(String("Notification" in window && Notification.permission), d));
                            case"is_browser_supports_push":
                                return m(l(this.isBrowserSupportsPush(), d));
                            case"local_time":
                                return m(l(new Date, d));
                            case"spot":
                                const S = [].slice.call(window.document.querySelectorAll("[data-fl-spot]")).map((e => e.getAttribute("data-fl-spot")));
                                return m(S.some((e => l(e, d))));
                            case"scroll":
                                const E = document.documentElement, {body: I} = document, A = (E.scrollTop || I.scrollTop) / ((E.scrollHeight || I.scrollHeight) - E.clientHeight) * 100;
                                return m(l(A, d));
                            case"is_product_page":
                                return m(l(s.isProductPage(), d));
                            case"is_category_page":
                                return m(l(s.isCategoryPage(), d));
                            case"count_category_views":
                                return m(l(s.category.getCountViews(), d));
                            case a.getKey():
                                if (!s.currentItemId) return m();
                                const T = a.checkSku(a.getCurrent(this.context.campaign.id), s.currentItemId);
                                return null === T ? m() : m(l(T, d));
                            case"is_incognito":
                                return m(!0);
                            default:
                                return Yt.warn(`wrong trigger condition ${u}`, d), m()
                        }
                    }))
                }
            }

            return {
                Trigger     : class {
                    constructor(e) {
                        this.campaign = e.campaign, this.conditions = e.conditions, this.callback = e.callback, this.variables = e.variables, this.rootExpression = u(this.conditions), this.state = {executed: !1, expired: !1}
                    }

                    check(e) {
                        return this.state.executed || this.state.expired ? null : (null == (e = {...e}).user && (e.user = s.getUser()), null == e.cart && (e.cart = s.getCart()), null == e.campaign && (e.campaign = this.campaign), null == e.event && (e.event = []), null == e.customEvents && (e.customEvents = []), this.rootExpression.setContext(e), new Promise((e => {
                            this.rootExpression.check().then((() => {
                                e([!0, this])
                            })).catch((() => {
                                e([!1, this])
                            }))
                        })))
                    }

                    reset() {
                        this.state.executed = !1
                    }

                    markExpired() {
                        this.state.expired = !0
                    }

                    execute() {
                        this.state.executed = !0, this.callback(this)
                    }
                }, __compare: l
            }
        }

        var en = __webpack_require__(817);

        function tn(e, t, n, i) {
            let r = {source: "", medium: "", campaign: "", term: "", content: ""};
            null != n && (r = n);
            const s = {source: "utmcsr", medium: "utmcmd", campaign: "utmccn", term: "utmctr", content: "utmcct"}, o = ct(e), a = function (e) {
                const t = {source: "", medium: "", campaign: "", term: "", content: ""};
                if (!e) return t;
                const n = e.split("/")[2], i = e => e.split(".").slice(-2).join(".");
                /google\.(com|ru)/i.test(e) ? (t.source = "google", t.medium = "organic") : /googleadservices\.com/i.test(e) ? (t.source = "google", t.medium = "cpc") : /yandex.ru\/clck/i.test(e) ? (t.source = "yandex", t.medium = "organic") : i(n) !== i(window.location.host) && (t.source = n, t.medium = "referral", t.campaign = "referral");
                return t
            }(i), c = parseInt(t.utm_nooverride, 10), u = {source: "", medium: "", campaign: "", term: "", content: ""}, l = {source: "", medium: "", campaign: "", term: "", content: ""};
            return ["campaign", "source", "medium", "term", "content"].forEach((e => {
                const n = o.utmz[s[e]], i = t[`utm_${e}`] || a[e];
                let d   = n;
                c || (d = d || i), d = d || r[e], d && (u[e] = d), i && !c && (l[e] = i)
            })), [u, l]
        }

        const nn = (0, e.Z)("state"), {reducePrecheckoutShownLog: rn} = _e;

        function sn(e, n, i, r) {
            const s = i.getInitialConfig();
            let o   = "/flock_push_worker.js";
            s.serviceWorkerPath && (o = String(s.serviceWorkerPath));
            const a = {
                workerPath              : o,
                campaigns               : s.campaigns,
                tracking                : s.tracking,
                subdomain               : s.subdomain,
                mutualExclusions        : s.exclusions,
                shownIds                : [],
                ip                      : s.clientIp,
                utmTags                 : {source: "", medium: "", campaign: "", term: "", content: ""},
                utmTagsHypothetical     : {source: "", medium: "", campaign: "", term: "", content: ""},
                sessionId               : "",
                viewId                  : en.Z.v1(),
                vapidPublicKey          : s.vapidPublicKey || null,
                enabledProducts         : s["enabled-products"] || [],
                variables               : s.variables || [],
                resubscribePushEnabled  : "2" === s["push-subscription-version"],
                externalTrackingDisabled: Boolean(s.externalTrackingDisabled)
            };

            function c(e) {
                e ? a.ip = e : nn.warn("Empty ip")
            }

            return Promise.all([e.get("utmTags"), an(e)]).then((([r, s]) => {
                a.sessionId = s;
                const o     = tn(document.cookie, (0, t.getLocationParams)(), r, document.referrer);
                return a.utmTags = o[0], a.utmTagsHypothetical = o[1], e.set("utmTagsHypothetical", a.utmTagsHypothetical), e.set("utmTags", a.utmTags), {
                    getSubdomain    : () => a.subdomain, getSessionId: () => a.sessionId, getGlobalSessionId: () => n && n.isActionAvailable(Ve) ? n.getGlobalSessionId() : Promise.resolve(null), getViewId: () => a.viewId, updateViewId() {
                        a.viewId = en.Z.v1()
                    }, getWorkerPath: () => a.workerPath, resetCampaignsShownIds() {
                        a.shownIds = []
                    }, dump         : () => JSON.parse(JSON.stringify(a)), setIp: c, getIp: () => a.ip, getApprovedCampaigns: i => 0 === i.length ? Promise.resolve([]) : n && n.isActionAvailable(xe) ? n.getPrecheckoutApprovedCampaigns(i, a.mutualExclusions, on(a.campaigns), a.shownIds).then((e => (a.shownIds = (0, t.uniq)(a.shownIds.concat(e)), e)), (e => (nn.error(e), []))) : Promise.all([e.get("precheckoutClosed"), e.get("campaignHitLog"), e.get("precheckoutShownLog")]).then((n => {
                        const r         = Array.isArray(n[0]) ? n[0] : [], s = n[2] ? function (e) {
                            if (!Array.isArray(e)) return [];
                            return e.map((e => ({date: new Date(e.date), campaign: e.campaign, session: e.session})))
                        }(n[2]) : [], o = Te({ids: i, shownLog: s, shownIds: a.shownIds, exclusions: a.mutualExclusions, closedIds: r.map((e => e.campaign)), inactivity: on(a.campaigns), hitLog: n[1] || {}, sessionId: a.sessionId});
                        return a.shownIds = (0, t.uniq)(a.shownIds.concat(o)), function (e, n, i) {
                            const r = "precheckoutShownLog", s = e.get(r).then((t => {
                                t       = Array.isArray(t) ? t : [];
                                const s = +new Date;
                                return n.forEach((e => {
                                    t.push({date: s, campaign: e, session: i})
                                })), t = rn(t), e.set(r, t)
                            })), o  = "campaignHitLog", a = e.get(o).then((i => {
                                const r = i || {};
                                return e.set(o, function (e, n) {
                                    const i = (0, t.deepMerge)({}, e);
                                    return n.forEach((e => {
                                        const t = function (e) {
                                            const t = new Date(e);
                                            return t.setUTCHours(0), t.setUTCMinutes(0), t.setUTCSeconds(0), t.setUTCMilliseconds(0), t.getTime()
                                        }((new Date).getTime());
                                        i[e] = i[e] || {}, i[e][t] = i[e][t] || 0, i[e][t]++
                                    })), i
                                }(r, n))
                            }));
                            return Promise.all([s, a]).then((() => null))
                        }(e, o, a.sessionId).then((() => o))
                    })), saveClosedState(t, i) {
                        n?.isActionAvailable(Ne) && n.savePrecheckoutCampaignClosedState(t, i), e.update("precheckoutClosed", (e => {
                            const n = (e || []).filter((e => e.campaign !== t));
                            return n.push({campaign: t, expireAt: Date.now() + i}), n
                        }))
                    }, getUtmTags   : () => a.utmTags, getHypotheticalUtmTags: () => a.utmTagsHypothetical, getCampaigns: () => a.campaigns, getVariables: () => a.variables, getTrackingSettings: () => a.tracking, getVapidPublicKey: () => a.vapidPublicKey, isProductEnabled: e => -1 !== a.enabledProducts.indexOf(e), isResubscribePushEnabled: () => a.resubscribePushEnabled, isExternalTrackingDisabled: () => a.externalTrackingDisabled, update(e, n) {
                        let r = a.utmTags;
                        r.source || (r = a.utmTagsHypothetical);
                        const s = (0, t.getParameterByName)("flocktory-preview-id", window.location.href);
                        return i.requestData(e, r, n, s).then((e => {
                            a.campaigns = e.campaigns, a.mutualExclusions = e.exclusions
                        }))
                    }
                }
            }))
        }

        function on(e) {
            return (0, t.fromPairs)(e.map((e => [e.id, e.inactivity])))
        }

        function an(e) {
            return e.get("sessionId").then((t => {
                if (t && t.sessionId && Date.now() < t.expireAt) return t.sessionId;
                const n = en.Z.v1();
                return e.set("sessionId", {sessionId: n, expireAt: Date.now() + 18e5}).then((() => n))
            }))
        }

        var cn, un = __webpack_require__(554), ln = __webpack_require__.n(un), dn = function () {
            return dn = Object.assign || function (e) {
                for (var t, n = 1, i = arguments.length; n < i; n++) for (var r in t = arguments[n]) Object.prototype.hasOwnProperty.call(t, r) && (e[r] = t[r]);
                return e
            }, dn.apply(this, arguments)
        };
        !function (e) {
            e.COOKIE = "flocktory-uuid", e.LOCAL_STORAGE = "flockapi::siteSessionId"
        }(cn || (cn = {}));
        var hn = function (e) {
            return ("" + e).replace(/-/g, "").split("").map((function (e) {
                return parseInt(e, 16)
            })).join("").split("").reduce((function (e, t, n) {
                var i = Number(t);
                return n % 2 || (i = (i *= 2) < 9 ? i : i - 9), e + i
            }), 0) % 10
        }, pn  = function (e) {
            return 38 === (null == e ? void 0 : e.length) && e.slice(-1) === "" + hn(e.slice(0, -2))
        }, mn  = function (e) {
            try {
                localStorage.setItem(cn.LOCAL_STORAGE, e)
            } catch (e) {
            }
            var t           = new Date(Date.now() + 287712e5).toUTCString();
            document.cookie = cn.COOKIE + "=" + e + "; path=/; expires=" + t
        }, gn  = function () {
            var e, t, n;
            e = dn({}, localStorage), t = Object.keys(e).reduce((function (e, t) {
                return t.match(/flockapi:\d+:siteSessionId/) && (e = t), e
            }), ""), (n = e[t]) && pn(n) && (mn(n), localStorage.removeItem(t));
            var i, r, s, o, a = localStorage.getItem(cn.LOCAL_STORAGE), c = (i = cn.COOKIE, (s = null === (r = document.cookie) || void 0 === r ? void 0 : r.match(new RegExp("(^| )" + i + "=([^;]+)"))) ? s[2] : null), u = a || c;
            return u && pn(u) ? (a !== c && mn(u), u) : (u = (o = ln().v4()) + "-" + hn(o), mn(u), u)
        };
        let fn = 1;

        function wn(e) {
            window[e] = () => null
        }

        function vn(e) {
            const t = document.getElementById(e);
            null != t && document.getElementsByTagName("head")[0].removeChild(t)
        }

        function yn(e, t = 4e4) {
            let n = null;
            return new Promise((i => {
                const r   = "flock_jsonp_" + fn++, s = "callback_" + r;
                window[r] = e => {
                    i(e), n && clearTimeout(n), vn(s), wn(r)
                };
                const o   = e + (-1 === e.indexOf("?") ? "?" : "&"), a = document.createElement("script");
                a.setAttribute("src", "" + o + "callback=" + r), a.setAttribute("id", s), document.getElementsByTagName("head")[0].appendChild(a), n = setTimeout((() => {
                    window[r]({error: new Error(`JSONP request to ${e} timed out`)}), wn(r), vn(s)
                }), t)
            }))
        }

        const bn         = {getSampleData: (e, t) => `${e} - ${t}`}, _n = {PUSH_SUBSCRIBE: "push-subscribe"}, kn = e => JSON.parse(JSON.stringify(e)), Sn = new Ze.EventEmitter, En = {
            EVENTS: _n, Promise, on: (...e) => Sn.on(...e), off: (...e) => Sn.removeListener(...e), exec: (...e) => {
                const [t, ...n] = e;
                if (!t) throw Error("[flocktory.exec]: API method name not specified.");
                if (!Object.keys(bn).includes(t)) throw Error(`[flocktory.exec]: API method "${t}" does not exist.`);
                const i = (0, bn[t])(...n);
                return window.Promise && i instanceof Promise ? i.then(kn, kn) : kn(i)
            }
        };
        window.flocktory = Object.assign(window.flocktory || [], En);
        const In         = window.flocktory, An = (0, e.Z)("backend"), Tn = (0, e.Z)("performance"), Cn = navigator.userAgent.toLowerCase().indexOf("firefox") > -1 ? "firefox" : "chrome";

        function Pn(e, n) {
            const {siteId: i} = n, r = gn();

            function s(e, t, n = !0) {
                const r = function (e, t) {
                    try {
                        return JSON.stringify(t)
                    } catch (t) {
                        return Promise.reject(`Can't stringify data to ${e}`)
                    }
                }(e, t);
                return `https://${function (e) {
                    return 2642 === e ? "sephora." : 1632 === e ? "beeline." : 2084 === e ? "gpb." : 2813 === e ? "vtb." : 3382 === e ? "rosbank." : 1962 === e ? "tele2." : ""
                }(i)}api.flocktory.com${e}${n ? ".js" : ""}?body=${encodeURIComponent(r)}`
            }

            function o(n) {
                const i = e.isActionAvailable(Ve);
                return (0, t.isYaBrowser)() && i ? e.getGlobalSessionId().then((e => `${n}&global-session-id=${encodeURIComponent(e)}`), (e => (An.error(e), n))) : Promise.resolve(n)
            }

            function a(e, t) {
                return o(s(e, t)).then((e => yn(e, 1e4))).then((e => {
                    if (e.error) {
                        const {error: t} = e;
                        t.schema ? An.error(new Error(t.message || t), t.schema) : An.error(new Error(t.message || t))
                    }
                    return e
                }))
            }

            function c(e) {
                document.createElement("img").setAttribute("src", e)
            }

            function u(e, t) {
                o(`${s(e, t)}&callback=flock_jsonp_9999`).then(c)
            }

            let l, d;

            function h() {
                return a("/u_flockman/check-active-push-subscription", {"site-id": String(i)})
            }

            function p(e, t) {
                const {keys: n} = JSON.parse(JSON.stringify(e)), s = {};
                return n && ["auth", "p256dh"].forEach((e => {
                    n[e] && (s[e] = n[e])
                })), function () {
                    let e = Promise.resolve(null);
                    if (On) e = Promise.resolve(On); else if ("chrome" === Cn && "https:" === window.location.protocol) {
                        const t = document.querySelector('[rel="manifest"]');
                        if (t) {
                            const n = t.getAttribute("href");
                            null != n && (e = fetch(n).then((e => e.json())).then((e => (On = e.gcm_sender_id, On))))
                        }
                    }
                    return e
                }().then((n => {
                    t ? s["vapid-public-key"] = t : n && (s["gcm-sender-id"] = n);
                    const o = {platform: t ? "vapid" : Cn, "site-id": String(i), token: e.endpoint, url: window.location.href};
                    return 0 !== Object.keys(s).length && (o["provider-meta"] = s), r && (o["site-session-id"] = String(r)), o
                }))
            }

            return {
                attachToProfile               : function (e) {
                    const t = {"site-id": String(i), meta: Object.keys(e).reduce(((t, n) => (t[String(n)] = String(e[n]), t)), {})};
                    return r && (t["site-session-id"] = String(r)), a("/u_flockman/set-profile-custom-meta", t)
                }, setup                      : function (e, t) {
                    if (!t && function (e, t) {
                        if (!e || !t) return !1;
                        const n = e => Object.keys(e).sort().map((t => [t, e[t]])), i = JSON.stringify(n(e)), r = JSON.stringify(n(t));
                        return i === r
                    }(d, e)) return Promise.resolve(l);
                    const n = {siteId: String(i), utm: e.utm, profile: e.emailProfile};
                    return r && (n["site-session-id"] = String(r)), e.previewCampaignId && (n["preview-campaign-id"] = String(e.previewCampaignId)), Tn.info("setup-api request start", performance.now()), a("/u_shaman/setup-api", n).then((t => {
                        t.error && console.warn(t.error), Tn.info("setup-api request finished", performance.now());
                        const n = t.oldCampaigns?.filter((e => e.widgets.length)).map((e => (e.widgets = function (e) {
                            const t = e.slice(0), n = e => parseInt(e.meta.weight || 0, 10);
                            return t.sort(((e, t) => n(e) - n(t))), t
                        }(e.widgets), e)));
                        return t.campaigns = t.campaigns?.concat(n) || [], t.campaigns.forEach((e => {
                            if (e.trackRedefinitions = [], null != e.widget && e.widget.meta.trackRedefinitions) {
                                try {
                                    e.trackRedefinitions = JSON.parse(e.widget.meta.trackRedefinitions)
                                } catch (e) {
                                }
                                e.trackCategory = e.widget.meta.trackCategory, e.trackLabel = e.widget.meta.trackLabel
                            }
                            if (null != e.widgets) {
                                const t = e.widgets.find((e => e.meta && e.meta.noShowCategory));
                                if (null != t) {
                                    const {meta: n} = t;
                                    e.noShowLabel = n.noShowLabel, e.noShowCategory = n.noShowCategory, e.noShowAction = n.noShowAction
                                }
                            }
                        })), l = t, d = e, t
                    }))
                }, checkActivePushSubscription: function () {
                    return h().then((e => (0, t.get)(e, "subscribed", null)))
                }, getSubscriptionStatus      : h, attachPushToSession: function (e, t, n) {
                    return p(e, n).then((i => (i["campaign-id"] = t, a("/u_flockman/attach-push-to-session", i).then((i => {
                        var r, s;
                        return r = _n.PUSH_SUBSCRIBE, s = {subscription: e, cid: t, vapidPublicKey: n, pushProfile: i}, Sn.emit(r, kn(s)), i.id
                    })))))
                }, resubscribePush            : function (e, t, n) {
                    return p(e, n).then((e => (e["old-token"] = (t || {}).endpoint, a("/u_flockman/resubscribe-push", e).then((e => e.id)))))
                }, ultimate                   : function (e) {
                    const t = {data: e};
                    r && (t["site-session-id"] = String(r)), u("/underworld/tracks/ultimate", t)
                }, customActivity             : function (e, t) {
                    const n = {data: e, "site-id": String(i), "campaign-id": String(t), label: "precheckout-event"};
                    r && (n["site-session-id"] = String(r)), u("/u_shaman/custom-activity", n)
                }, assigns                    : function (e, t) {
                    return t.site_id = i, a("/u_widget/get-assigns", {assigns: e, params: Object.keys(t).map((e => ({key: e, value: String(t[e])})))}).then((e => e.assigns.reduce(((e, t) => (e[t.key] = t.value, e)), {})))
                }, userMeta                   : function () {
                    return a("/u_flockman/get-user-metainfo", {scope: `site-custom:${i}`}).then((e => (e.meta || []).reduce(((e, t) => (e[t.key] = t.value, e)), {})))
                }, customEvent                : function (e) {
                    const t = {event: e, "site-id": String(i)};
                    r && (t["site-session-id"] = String(r)), u("/u_shaman/custom-events", t)
                }, exchangeBanner             : function (e) {
                    const t = {"source-site-id": String(i)};
                    return null != e.spot && (t.spot = e.spot), null != e.name && (t.name = e.name), null != e.email && (t.email = e.email), r && (t["site-session-id"] = String(r)), a("/interchange/v1/banner", t).then((e => {
                        if (e.error) throw new Error(e.error);
                        if (e.errors && e.errors[0]) throw new Error(e.errors[0]);
                        if (e.errors) throw new Error(e.errors);
                        return {html: e.html, loginData: e["login-data"], selector: e.selector}
                    }))
                }, trackExchangeBanner        : function (e) {
                    o(`https://api.flocktory.com/interchange/v1/banner/track-display?data=${encodeURIComponent(e)}`).then(c)
                }, postcheckout               : function (e, n) {
                    const s    = (e.order && e.order.items || []).reduce(((e, t, n) => {
                        const i = {...t};
                        return ["id", "title", "image", "count", "price"].forEach((e => {
                            delete i[e]
                        })), e[String(n)] = {i: t.id, t: t.title, u: t.image, c: t.count, p: t.price, custom_data: i}, e
                    }), {}), o = ct(String.prototype.slice.call(document.cookie)), c = {
                        site_id      : i,
                        jsapi_version: "2.0",
                        i            : e.order.id,
                        e            : e.user && e.user.email,
                        n            : e.user && e.user.name,
                        p            : e.order && e.order.price,
                        c            : e.order && e.order.custom_field,
                        sp           : e.spot,
                        s            : e.user && e.user.sex ? e.user.sex.slice(0, 1) : void 0,
                        t            : s,
                        ga           : {utmcsr: o.utmz.utmcsr || n.source, utmccn: o.utmz.utmccn || n.campaign, utmcmd: o.utmz.utmcmd || n.medium, utmctr: o.utmz.utmctr, pageviews: o.utma.pageViews, previous_visit_ts: o.utma.previousVisitTs, current_visit_at: o.utma.currentVisitTs}
                    };
                    return r && (c["site-session-id"] = String(r)), a("/1/postcheckout/offer", c).then((e => {
                        if (e.error) throw new Error(e.error);
                        if (e.errors && e.errors[0]) throw new Error(e.errors[0]);
                        if (e.errors) throw new Error(e.errors);
                        return {html: e.html, cid: e.campaign_id, title: e.campaign_title, timeout: e.js_options.params.timeout, el: (0, t.get)(e, "js_options.params.widget.el", "popup"), background: (0, t.get)(e, "js_options.params.widget.background", null)}
                    }))
                }, widget                     : function ({cid: e, vid: t, motivationId: n}) {
                    const r = {"version-id": t, locale: "ru", "site-id": String(i), "campaign-id": String(e), flags: ["render"], params: [{key: "campaign_id", value: String(e)}, {key: "attach_key", value: "campaign"}, {key: "attach_value", value: String(e)}], "extra-params": void 0};
                    return null != n && r.params.push({key: "motivation_id", value: n}), Tn.info(`widget ${e} request started`, performance.now()), a("/u_widget/get-widget", r).then((n => (Tn.info(`widget ${e} request finished`, performance.now()), {cid: e, vid: t, html: n.response.content})))
                }, trackCustomerActions       : function (e, t, n, i, s) {
                    const o = {};
                    return o["campaign-id"] = String(e), null != t && (o.email = String(t)), null != n && (o.name = String(n)), null != i && (o.data = Object.keys(i).map((e => ({key: e, value: i[e]})))), null != s && (o["make-offer"] = s), r && (o["site-session-id"] = String(r)), a("/u_shaman/track-customer-actions", o).then((e => {
                        if (e.error) throw new Error(e.error);
                        return e
                    }))
                }, getMotivation              : function (e) {
                    const {motivationId: t, sid: n, cid: i, cacheTime: s} = e, o = {"motivation-id": String(t), options: [{key: "campaign", value: String(i)}, {key: "as-link", value: "true"}, {key: "page-type", value: "iframe"}, {key: "away-site", value: String(n)}]};
                    return s && o.options.push({key: "profile-cache", value: String(s)}), r && (o["site-session-id"] = String(r)), a("/u_shaman/make-reward", o).then((e => {
                        if (e) {
                            const t = e["link-to-exchange"] || e["link-to-coupon"];
                            return {link: t.url, code: t.code}
                        }
                        return {}
                    }))
                }, getUuid                    : function () {
                    return r
                }, sendCheckpointId           : function (e, t) {
                    c(s("/u_shaman/set-checkpoint", {"checkpoint-id": e, "site-session-id": String(r)}, !1))
                }, checkSkuInAudience         : function ({audienceIds: e, currentItemId: t}) {
                    return a("/u_audiencer_api/sku-exist", {"audience-ids": e.map(Number), "sku-id": t})
                }
            }
        }

        let On   = null;
        const Ln = (e, t) => {
            for (const n in t) {
                let i = String(t[n]);
                "zIndex" === n || isNaN(Number(i)) || "" === i || (i = `${i}px`), e.style[n] = i
            }
        }, xn    = e => e.split("|").map((e => `drop-shadow(${e.trim()})`)).join(" "), Nn = e => e.replace(/drop-shadow\((?:[^)(]+|\([^)(]*\))*\)/g, ""), Dn = (e, t) => {
            const n = e?.contentDocument, i = n?.body;
            if (!n || !i) return ["0", "0"];
            const r = t.style, s = i.style, {display: o, visibility: a} = r, {position: c, display: u} = s;
            t.dataset.showedUp || (r.visibility = "hidden"), r.display = "block", s.display = "block", s.position = "absolute";
            const {offsetWidth: l, offsetHeight: d} = i;
            return r.display = o, t.dataset.showedUp || (r.visibility = a), s.display = u, s.position = c, i.dataset.mutation = String((Number(i.dataset.mutation) || 1) + 1), [`${l}px`, `${d}px`]
        }, Vn    = (e, t, n) => {
            if ("auto" !== n) return String(n);
            const [i] = Dn(e, t);
            return i
        }, Rn    = (e, t, n) => {
            if ("auto" !== n) return String(n);
            const {height: i} = e.style;
            Ln(e, {height: "0"});
            const [, r] = Dn(e, t);
            return Ln(e, {height: i}), r
        };

        class Un {
            constructor(e, t) {
                this.siteId = e, this.campaignId = t, this.storageName = `flockapi:${e}:widgetStorage`, this.campaignId = t, this.clearOutdatedValues()
            }

            getSiteData() {
                const e = localStorage.getItem(this.storageName);
                try {
                    return e ? JSON.parse(e) : {}
                } catch (e) {
                    return {}
                }
            }

            setSiteData(e) {
                const t = JSON.stringify(e);
                localStorage.setItem(this.storageName, t)
            }

            setValueByName(e, t, n) {
                const i = this.getSiteData();
                i[`${this.campaignId}:${e}`] = {value: t, expired: n || Date.now() + 18e5}, this.setSiteData(i)
            }

            getValueByName(e) {
                const t = this.getSiteData(), n = `${this.campaignId}:${e}`;
                return t[n] ? t[n] : void 0
            }

            clearOutdatedValues() {
                const e = this.getSiteData();
                for (const t in e) {
                    (e[t] || {})?.expired <= Date.now() && delete e[t]
                }
                this.setSiteData(e)
            }
        }

        class Mn {
            constructor(e) {
                this.frame = e, this.frame = e, this.overlay = e.parentElement, this.set = this.set.bind(this), this.setPopupType = this.setPopupType.bind(this), this.setFixedType = this.setFixedType.bind(this), this.setEmbeddedType = this.setEmbeddedType.bind(this)
            }

            set(e) {
                const {type: t} = e;
                switch (t) {
                    case"popup":
                        this.setPopupType(e);
                        break;
                    case"fixed":
                        this.setFixedType(e);
                        break;
                    case"embedded":
                        this.setEmbeddedType(e)
                }
            }

            setPopupType(e) {
                const {width: t = "auto", height: n = "auto", overlayBackground: i = "rgba(0, 0, 0, 0.8)", dropShadow: r} = e, s = this.frame?.contentDocument, o = s?.body;
                o.dataset.mutation = o.dataset.mutation || "1", Ln(this.overlay, {position: "fixed", top: "0px", left: "0px", zIndex: "2147483647", justifyContent: "center", alignItems: "center", width: "100%", height: "100%", background: i, transform: "none"});
                const [a, c] = Dn(this.frame, this.overlay), {innerWidth: u, innerHeight: l} = window;
                if (Ln(this.frame, {width: String("auto" === t ? Math.min(parseInt(a, 10), u) : t), height: "auto" === n ? c : String(n)}), r) {
                    const {filter: e} = this.frame.style;
                    Ln(this.frame, {filter: `${Nn(e)} ${xn(r)}`})
                }
                parseInt(c, 10) > l && (Ln(this.overlay, {alignItems: "flex-start", overflowY: "scroll"}), Ln(this.frame, {position: "static", top: "auto", left: "auto", display: "block", margin: "0 auto", transform: "none"}))
            }

            setFixedType(e) {
                const {position: t, top: n, right: i, bottom: r, left: s, zIndex: o = "auto", width: a = "auto", height: c = "auto", overlayBackground: u = "none", dropShadow: l} = e;
                if (Ln(this.overlay, {position: "fixed", zIndex: String(o), justifyContent: "initial", alignItems: "initial", width: Vn(this.frame, this.overlay, a), height: Rn(this.frame, this.overlay, c), background: u, transform: "translateZ(0px) scale(1, 1)", backfaceVisibility: "hidden"}), Ln(this.frame, {width: "100%", height: "100%"}), l) {
                    const {filter: e} = this.frame.style;
                    Ln(this.frame, {filter: `${Nn(e)} ${xn(l)}`})
                }
                if (t) {
                    const [e, o] = (e => {
                        if ("center" === e) return ["center", "center"];
                        const [t, n] = e.split("-");
                        return [t, n]
                    })(t);
                    let a        = this.overlay.style.transform;
                    switch (e) {
                        case"top":
                            Ln(this.overlay, {top: n ? String(n) : "0", bottom: "auto"});
                            break;
                        case"bottom":
                            Ln(this.overlay, {top: "auto", bottom: r ? String(r) : "0"});
                            break;
                        case"center":
                            Ln(this.overlay, {top: "50%", transform: `${a} translateY(-50%)`})
                    }
                    switch (a = this.overlay.style.transform, o) {
                        case"right":
                            Ln(this.overlay, {right: i ? String(i) : "0", left: "auto"});
                            break;
                        case"left":
                            Ln(this.overlay, {right: "auto", left: s ? String(s) : "0"});
                            break;
                        case"center":
                            Ln(this.overlay, {left: "50%", transform: `${a} translateX(-50%)`})
                    }
                } else Ln(this.overlay, {top: n ? String(n) : "auto", right: i ? String(i) : "auto", bottom: r ? String(r) : "auto", left: s ? String(s) : "auto"})
            }

            setEmbeddedType(e) {
                const {zIndex: t = "auto", width: n = "auto", height: i = "auto", overlayBackground: r = "none", dropShadow: s} = e;
                if (Ln(this.overlay, {position: "relative", zIndex: String(t), justifyContent: "initial", alignItems: "initial", width: Vn(this.frame, this.overlay, n), height: Rn(this.frame, this.overlay, i), background: r}), Ln(this.frame, {width: "100%", height: "100%"}), s) {
                    const {filter: e} = this.frame.style;
                    Ln(this.frame, {filter: `${Nn(e)} ${xn(s)}`})
                }
            }
        }

        class jn {
            constructor(e, t, n, i, r, s, o, a, c, u, l, d, h, p) {
                this.frame = e, this.siteId = t, this.campaignId = n, this.tracker = i, this.pushService = r, this.pushOptinVersionId = s, this.logger = o, this.backend = a, this.motivationId = c, this.state = u, this.trigger = l, this.widgetState = d, this.readyQueue = h, this.configurations = p, this.frame = e, this.siteId = t, this.campaignId = n, this.tracker = i, this.pushService = r, this.pushOptinVersionId = s, this.logger = o, this.backend = a, this.motivationId = c, this.state = u, this.trigger = l, this.widgetState = d, this.readyQueue = h, this.configurations = p, this.overlay = e.parentElement, this.widgetStorage = new Un(this.siteId, this.campaignId), this.widgetConfig = new Mn(this.frame), this.setValue = this.setValue.bind(this), this.getValue = this.getValue.bind(this), this.getData = this.getData.bind(this), this.getMeta = this.getMeta.bind(this), this.track = this.track.bind(this), this.setScreen = this.setScreen.bind(this), this.pushStatus = this.pushStatus.bind(this), this.pushSubscribe = this.pushSubscribe.bind(this), this.getMotivation = this.getMotivation.bind(this), this.sendError = this.sendError.bind(this), this.collectEmail = this.collectEmail.bind(this), this.hide = this.hide.bind(this), this.show = this.show.bind(this), this.ready = this.ready.bind(this), this.configure = this.configure.bind(this)
            }

            setValue(e, t, n) {
                this.widgetStorage.setValueByName(e, t, n)
            }

            getValue(e) {
                return this.widgetStorage.getValueByName(e)
            }

            getData() {
                return {cid: this.campaignId, siteId: this.siteId}
            }

            getMeta() {
                const e = this.frame.contentDocument;
                return [].slice.call(e.querySelectorAll("meta[data-fl-param]")).reduce(((e, t) => {
                    const {name: n, content: i, dataset: {flParam: r}} = t;
                    let s;
                    switch (r) {
                        case"boolean":
                            s = "true" === i;
                            break;
                        case"number":
                            s = parseFloat(i);
                            break;
                        default:
                            s = i
                    }
                    return e[n] = s, e
                }), {})
            }

            track(e, t = !1) {
                this.tracker.track(e, t)
            }

            setScreen(e) {
                const t = this.frame.contentDocument, n = [].slice.call(t.querySelectorAll("[data-fl-screen]")), i = n.find((t => t?.dataset?.flScreen === e));
                if (!i) throw new Error(`No screen ${e}`);
                n.forEach((e => e.style.display = "none")), i.style.display = "block", this.track(`show-screen-${e}`)
            }

            pushStatus(e) {
                return this.pushService.status ? this.pushService.status({cid: this.campaignId, alwaysUseTwoStep: e?.alwaysUseTwoStep || !1}) : (this.tracker.track("push-unsupported", !0), Promise.resolve({permission: "unsupported", requireInteraction: !1}))
            }

            pushSubscribe(e) {
                return this.pushService.subscribe ? this.pushService.subscribe({cid: String(this.campaignId), optinVersionId: this.pushOptinVersionId, alwaysUseTwoStep: e?.alwaysUseTwoStep || !1, isUserInteraction: e?.isUserInteraction || !1}) : (this.tracker.track("push-unsupported", !0), Promise.resolve({permission: "unsupported", requireInteraction: !1}))
            }

            getMotivation(e) {
                if (!this.motivationId) return this.logger.error(new Error(`${this.siteId}:${this.campaignId} | Missing critical assigns: motivation`)), Promise.resolve({});
                const t = {motivationId: this.motivationId, sid: this.siteId, cid: this.campaignId, cacheTime: e || 0};
                return this.backend.getMotivation(t)
            }

            sendError(e = "") {
                this.logger.error(new Error(`${this.siteId}:${this.campaignId} | ${e}`))
            }

            collectEmail(e, t, n = {light: "true"}, i = !1) {
                for (const e in n) if ("string" != typeof n[e]) throw new Error(`Value of data[${e}] must be string type`);
                const r = this.state.getUtmTags(), s = {};
                for (const e in r) {
                    s[`utm_${e}`] = r[e]
                }
                return this.backend.trackCustomerActions(this.campaignId, e, t, {...n, ...s}, i).then((i => {
                    if (e && this.tracker.track("login", !1), window.dataLayer) {
                        const i = {...n};
                        delete i.light, window.dataLayer.push({event: "fl_collected_email", campaignLabel: this.tracker.campaign.trackLabel, email: e, name: t, additionalFields: i, ...s})
                    }
                    return i
                }))
            }

            hide(e) {
                if (this.overlay.style.display = "none", 0 !== e) {
                    const t = 1e3 * (e || 1800);
                    this.state.saveClosedState(this.campaignId, t)
                }
            }

            show() {
                !this.overlay.dataset.showedUp && this.trigger.state.expired || (this.overlay.style.display = "flex", this.overlay.dataset.showedUp = "true", this.tracker.track("show-widget", !0))
            }

            ready(e) {
                return void 0 !== e && (this.widgetState.ready ? e() : this.readyQueue.push(e)), this.readyQueue
            }

            configure(e) {
                const t = {...this.configurations.get(this.frame) || {}, ...e};
                this.configurations.set(this.frame, t), this.widgetConfig.set(t)
            }
        }

        class Fn {
            constructor(e, t, n, i, r, s, o, a, c, u) {
                this.siteId = e, this.pushService = t, this.logger = n, this.backend = i, this.configurations = r, this.state = s, this.zIndex = o, this.apis = a, this.overlays = c, this.topWindow = u, this.siteId = e, this.pushService = t, this.logger = n, this.backend = i, this.configurations = r, this.state = s, this.zIndex = o, this.apis = a, this.overlays = c, this.topWindow = u, this.create = this.create.bind(this), this.destroy = this.destroy.bind(this), this.setupFrame = this.setupFrame.bind(this), this.initApi = this.initApi.bind(this)
            }

            create(e, t) {
                const {cid: n, html: i} = e, {root: r, closeOutside: s, closeOutsideSeconds: o, gaTracker: a, optinVersionId: c, motivationId: u, trigger: l} = t, d = {ready: !1}, {overlayElement: h, frameElement: p, frameDocument: m} = this.setupFrame(n, r), g = this.initApi(p, this.siteId, n, a, this.pushService, c, this.logger, this.backend, u, this.state, l, d, [], this.configurations);
                this.apis.set(p, g), this.pushService && this.pushService.emitter && this.pushService.emitter.on("push-status", ((e, t, i = !1) => e === n && g.track(t, i))), p.addEventListener("load", (() => {
                    const e = m.querySelector('meta[name="widget-config"]'), t = [].slice.call(m.querySelectorAll("[data-fl-track], [data-fl-close]")), n = e => {
                        const t = this.configurations.get(p), n = (e || []).some((e => "data-mutation" === e?.attributeName));
                        t && !n && g.configure(t)
                    };
                    if (Fn.initScreens(m, g.track), e && Fn.applyInnerConfig(e, g.configure, g.show), t.length && Fn.setupTrackableElements(t, g.hide, g.track), s) {
                        const e = t => {
                            t.stopPropagation(), g.hide(o), g.track("click-outside"), h.removeEventListener("click", e)
                        };
                        h.addEventListener("click", e)
                    }
                    ((e, t) => {
                        const n = e?.contentDocument, i = n?.body;
                        if (!n || !i) return;
                        new MutationObserver(t).observe(i, {subtree: !0, attributes: !0, characterData: !1, childList: !1})
                    })(p, n), this.topWindow.addEventListener("resize", (() => n())), !l.state.expired && g.ready().forEach((e => e())), d.ready = !0
                })), Fn.fillFrame(m, i, g)
            }

            destroy() {
                this.overlays.forEach((e => e.remove()))
            }

            setupFrame(e, t) {
                const n = document.createElement("div"), i = document.createElement("iframe");
                n.classList.add("flocktory-widget-overlay"), n.style.display = "none", n.style.zIndex = String(this.zIndex++), i.id = `fl-${e}`, i.title = "Flocktory widget", i.frameBorder = "0", i.scrolling = "no", i.classList.add("flocktory-widget"), n.append(i), t ? t.append(n) : document.body ? document.body.append(n) : this.logger.error(new Error("document.body eq null"));
                const r = i?.contentDocument, s = r?.documentElement;
                return s && (s.style.transform = "translateZ(0) scale(1, 1)"), {overlayElement: n, frameElement: i, frameDocument: r}
            }

            initApi(e, t, n, i, r, s, o, a, c, u, l, d, h, p) {
                const {setValue: m, getValue: g, getData: f, getMeta: w, track: v, setScreen: y, pushStatus: b, pushSubscribe: _, getMotivation: k, sendError: S, collectEmail: E, hide: I, show: A, ready: T, configure: C} = new jn(e, t, n, i, r, s, o, a, c, u, l, d, h, p);
                return {setValue: m, getValue: g, getData: f, getMeta: w, track: v, setScreen: y, pushStatus: b, pushSubscribe: _, getMotivation: k, sendError: S, collectEmail: E, hide: I, show: A, ready: T, configure: C}
            }

            static fillFrame(e, t, n) {
                const i = `<script>window.widget = {};${Object.keys(n).map((e => `window.widget.${e} = function() {\n            return window.parent.flocktory.wapi(window.frameElement, '${e}', arguments);\n          };`)).join("\n")}Object.freeze(window.widget);<\/script>`;
                e.open(), e.write(i), e.write(t), e.close()
            }

            static initScreens(e, t) {
                const n = [].slice.call(e.querySelectorAll("[data-fl-screen]"));
                if (n.length < 2) return;
                const i = n[0], r = i.dataset.flScreen;
                n.forEach((e => e.style.display = "none")), i.style.display = "block", t(`show-screen-${r}`, !0)
            }

            static applyInnerConfig(e, t, n) {
                const i = JSON.parse(JSON.stringify(e.dataset));
                t(i), "true" === i.autoshow && n()
            }

            static setupTrackableElements(e, t, n) {
                e.forEach((e => {
                    e.addEventListener("click", (e => {
                        const i  = e.currentTarget, r = (e => {
                            for (; e;) {
                                const t = e.getAttribute("data-fl-close");
                                if (null !== t) {
                                    if ("" === t) return 1800;
                                    const e = parseInt(t, 10);
                                    return isNaN(e) ? 0 : e
                                }
                                e = e.parentElement
                            }
                            return null
                        })(i), s = (e => e.dataset.flTrack || e.dataset.flTrackGa || e.getAttribute("fl-track-ga") || null)(i);
                        (e => "A" === e.tagName && !!e.getAttribute("href") && "_top" === e.getAttribute("target"))(i) && e.defaultPrevented && (e.preventDefault(), setTimeout((() => {
                            window.location.href = i.getAttribute("href")
                        }), 300)), null !== r && (t(r), null === s && n("close")), null !== s && n(s)
                    }))
                }))
            }
        }

        const $n = (0, e.Z)("widgets"), Wn = (0, t.getTopWindow)();

        function qn(e, n, i, r, s) {
            (0, t.assert)(e && n && i, "Args");
            const o = new WeakMap, a = new WeakMap, {siteId: c} = e;
            n.wapi  = (e, t, n) => {
                const i = o.get(e);
                return null != i ? i[t].apply(null, n) : null
            };
            const u = new Fn(c, s, $n, r, a, i, 2e9, o, [], Wn);
            return {create: u.create, destroy: u.destroy}
        }

        function Bn(e, n, i, r) {
            (0, t.assert)(e && i, "setup args");
            const {siteId: s} = i;

            function o(t, i, r, s) {
                const o = {utm: i, emailProfile: void 0};
                t.email && (o.emailProfile = {email: t.email, name: t.name || void 0}), s && (o.previewCampaignId = s);
                const a = e.setup(o, r);
                return a.then((e => n.setSetupApiData(e))), a
            }

            let a;
            try {
                const e = localStorage.getItem((0, t.storageKeyComposer)(s)("utmTags"));
                null != e && (a = JSON.parse(e))
            } catch (e) {
            }
            const [c, u] = tn(document.cookie, (0, t.getLocationParams)(), a, document.referrer);
            let l, d;
            Array.from(document.querySelectorAll("[data-fl-user-name], [data-fl-user-email]")).forEach((e => {
                l = l || e.dataset.flUserName, d = d || e.dataset.flUserEmail
            })), r.forEach((e => {
                let t = {};
                Array.isArray(e) && e[1] ? t = e[1] : e && (t = e);
                const {user: n} = t;
                n && (n.name && (l = n.name), n.email && (d = n.email))
            }));
            return o({name: l, email: d}, c.source ? c : u, !1, (0, t.getParameterByName)("flocktory-preview-id", window.location.href)).then((e => ({requestData: o, getInitialConfig: () => e})))
        }

        const zn = (0, e.Z)("push service"), Kn = "https:" === window.location.protocol, Hn = new (Ge().EventEmitter);

        function Zn(e, t, n, i, r) {
            if (!(t.isProductEnabled("precheckout_optin") || t.isProductEnabled("workflow") || t.isProductEnabled("push_api"))) return Promise.resolve(null);
            if (!function () {
                const e = navigator.userAgent;
                return function () {
                    function e(e, t) {
                        const n = t.match(e);
                        return n && n.length > 0 && n[1] || ""
                    }

                    const t = [
                        {
                            name: "Opera", regExp: /opr\/|opios/i, checkVersion(t) {
                                const n = e(/(?:opr|opios)[\s/](\S+)/i, t) || e(/version\/(\d+(\.?_?\d+)+)/i, t);
                                return !!n && parseInt(n, 10) > 55
                            }
                        }, {
                            name: "Firefox", regExp: /firefox|iceweasel|fxios/i, checkVersion(t) {
                                const n = e(/(?:firefox|iceweasel|fxios)[\s/](\d+(\.?_?\d+)+)/i, t);
                                return !!n && parseInt(n, 10) > 62
                            }
                        }, {
                            name: "Chrome", regExp: /chrome|crios|crmo/i, checkVersion(t) {
                                const n = e(/(?:chrome|crios|crmo)\/(\d+(\.?_?\d+)+)/i, t);
                                return !!n && parseInt(n, 10) > 68
                            }
                        }
                    ];
                    return t.some((e => !!e.regExp.test(navigator.userAgent) && e.checkVersion(navigator.userAgent)))
                }() || "serviceWorker" in navigator && "showNotification" in ServiceWorkerRegistration.prototype && "PushManager" in window && -1 === e.indexOf("YaBrowser/15.12.1.6476") && !/\YaBrowser\/[0-9\.]+ \(beta\)/.test(e)
            }()) return Promise.resolve(null);
            const s           = t.getVapidPublicKey(), o = function (e) {
                if (!e) return null;
                const t = "=".repeat((4 - e.length % 4) % 4), n = (e + t).replace(/-/g, "+").replace(/_/g, "/"), i = window.atob(n), r = new Uint8Array(i.length);
                for (let e = 0; e < i.length; ++e) r[e] = i.charCodeAt(e);
                return r
            }(s), {siteId: a} = i;
            let c             = null;
            const u           = navigator.serviceWorker;
            var l;

            function d(e) {
                return (t, n = !1) => Hn.emit("push-status", e, t, n)
            }

            function h({resubscribe: i, cid: u, optinVersionId: l = null, alwaysUseTwoStep: h = !1, isUserInteraction: p = !1, oldSubscription: m = null}) {
                const g = d(u), f = e => i ? n.resubscribePush(e, m, s) : n.attachPushToSession(e, u, s);
                if (!Kn || h) {
                    const n = t.getSubdomain();
                    return null != n ? function (e, t, n) {
                        const {subdomain: i, siteId: r, optinVersionId: s, vapidPublicKey: o} = e, a = "menubar=no,location=no,resizable=no,scrollbars=no,status=no,width=640,height=580,left=300,top=0", c = "Push notification";
                        let u                                                                 = `https://${i}/p/push/subscribe/${r}/push-settings-popup?site_id=${r}`;
                        s && (u += `&optin_version_id=${s}`);
                        o && (u += `&vapid=${o}`);
                        const l = window.open(u, c, a);
                        return new Promise((e => {
                            window.addEventListener("message", s);
                            const i = setInterval((() => {
                                l.closed && (Hn.emit("push-status", t, "push-window-close"), window.removeEventListener("message", s), clearInterval(i))
                            }), 200);

                            function r() {
                                return clearInterval(i), l.close(), window.removeEventListener("message", s)
                            }

                            function s(t) {
                                if (!/^pusher /.test(t.data)) return;
                                let i;
                                try {
                                    i = JSON.parse(t.data.slice(7))
                                } catch (e) {
                                    return
                                }
                                if (!i || "show" !== i.state) return i && "close" === i.state ? (n("close-request-subdomain"), r(), void e({close: !0})) : void (i && ["subscribed", "denied", "error"].includes(i.state) && (r(), e({subscription: i.subscription || null}, i.popupMessage)));
                                n("show-request-subdomain")
                            }
                        }))
                    }({siteId: a, subdomain: n, optinVersionId: l, vapidPublicKey: s}, u, g).then((({subscription: t, close: n}) => n ? {permission: "default"} : null == t ? (e.set("pushDenied", !0), g("push-denied-subdomain"), {permission: "denied", requireInteraction: !1}) : (f(t).then(Jn), g("push-subscribed-subdomain"), {
                        permission        : "granted",
                        requireInteraction: !1
                    }))) : (zn.error(new Error("no subdomain on http push")), Hn.emit("push-status", u, "push-error"), Promise.resolve({permission: "denied", requireInteraction: !1}))
                }
                Gn();
                const w = window.Notification.permission;
                return "denied" === w ? (g(p ? "push-denied-domain" : "push-denied"), Promise.resolve({permission: w, requireInteraction: !1})) : ("granted" !== w && (p ? g("show-request-domain") : g("system-show", !0)), c ? c.then((t => {
                    const n = s ? {userVisibleOnly: !0, applicationServerKey: o} : {userVisibleOnly: !0};
                    return t.pushManager.subscribe(n).catch((e => {
                        let r;
                        return r = i && e.code === e.INVALID_STATE_ERR ? t.pushManager.getSubscription().then((e => e.unsubscribe())).then((() => t.pushManager.subscribe(n))) : Promise.reject(e), r
                    })).then((t => null == t ? (e.set("pushDenied", !0), g(p ? "push-denied-domain" : "system-push-denied"), {permission: "denied"}) : (f(t).then(Jn).then((() => r.push.saveLastSubscriptionTimestamp())), "granted" === w ? g("system-push-re-subscribed", !0) : g(p ? "push-subscribed-domain" : "system-push-subscribed"), {permission: "granted"}))).catch((t => {
                        if ("default" === window.Notification.permission) return g(p ? "close-request-domain" : "system-close"), {permission: "default"};
                        const n = t instanceof window.DOMException;
                        return t.code !== t.ABORT_ERR && 0 !== t.code || !n ? (zn.error(t, "ChromePushManager: requestPush error"), g("push-error")) : (e.set("pushDenied", !0), g(p ? "push-denied-domain" : "system-push-denied")), {permission: "denied"}
                    }))
                })) : Promise.resolve({permission: window.Notification.permission}))
            }

            return Kn && u && (c = u.register(t.getWorkerPath(), {scope: (l = t.getWorkerPath(), l.split("/").slice(0, -1).join("/") + "/flocktory-cloud-messaging-push-scope")}).then((e => e.active ? Promise.resolve(e) : new Promise((t => {
                let n           = null;
                const i         = () => {
                    n && "activated" === n.state && t(e)
                };
                e.onupdatefound = () => {
                    n = e.installing, n.onstatechange = i
                }
            })))).catch((e => zn.error(new Error("failed to start serviceWorker on https. " + e))))), Kn && t.isResubscribePushEnabled() && t.isProductEnabled("push_api") && r.push.getLastSubscriptionTimestamp().then((e => {
                let t   = !1;
                const n = "granted" === window.Notification.permission;
                e ? e + 26784e5 <= +new Date && n && (t = !0) : n && (t = !0), t && c.then((e => e.pushManager.getSubscription())).then((e => h({resubscribe: !0, cid: "api", optinVersionId: null, alwaysUseTwoStep: !1, isUserInteraction: !1, oldSubscription: e})))
            })), Promise.resolve({
                status      : function ({cid: t, alwaysUseTwoStep: i = !1}) {
                    const r = d(t);
                    if (!Kn || i) return e.get("pushDenied").then((e => e ? (r("push-already-denied", !0), {permission: e ? "denied" : "default", requireInteraction: !0}) : n.checkActivePushSubscription().then((e => {
                        const t = e ? "granted" : "default";
                        return "granted" === t && r("push-already-subscribed", !0), {permission: t, requireInteraction: !0}
                    }))));
                    if (Gn(), "default" !== window.Notification.permission) {
                        const e = "granted" === window.Notification.permission ? "push-already-subscribed" : "push-already-denied";
                        return r(e, !0), Promise.resolve({permission: window.Notification.permission, requireInteraction: !1})
                    }
                    return c ? c.then((e => e.pushManager.getSubscription())).then((e => (null != e && n.attachPushToSession(e, t), {permission: "default", requireInteraction: "https:" !== window.location.protocol}))) : Promise.resolve({permission: window.Notification.permission})
                }, subscribe: h, emitter: Hn
            })
        }

        function Gn() {
            try {
                if (!window.document.querySelector("link[rel=manifest]")) {
                    const e = document.createElement("link");
                    e.setAttribute("href", "/manifest.json"), e.setAttribute("rel", "manifest");
                    const t = document.querySelector("head");
                    if (null == t) throw new Error("No head");
                    t.appendChild(e)
                }
            } catch (e) {
                zn.error(e, "Inser manifest error")
            }
        }

        function Jn(e) {
            window.dataLayer && window.dataLayer.push({event: "fl_push_profile", profile_id: `p${e}`})
        }

        const Yn = (0, e.Z)("safari-push"), Qn = new (Ge().EventEmitter);

        function Xn(e, t, n, i) {
            const {siteId: r} = i, s = "web.com.flocktory." + r;
            return {
                status      : function ({cid: e}) {
                    if ("denied" === window.Notification.permission) return Qn.emit("push-status", e, "push-already-denied"), Promise.resolve({permission: "denied", requireInteraction: !1});
                    const {permission: t} = window.safari.pushNotification.permission(s);
                    return "granted" === t && Qn.emit("push-status", e, "push-already-subscribed"), Promise.resolve({permission: t, requireInteraction: !1})
                }, subscribe: function (e) {
                    const {cid: i, isUserInteraction: o} = e;
                    if ("denied" === window.Notification.permission) return Qn.emit("push-status", i, "push-already-denied"), Promise.resolve({permission: "denied", requireInteraction: !1});
                    const {permission: a} = window.safari.pushNotification.permission(s);
                    if ("denied" === a) return Qn.emit("push-status", i, "push-already-denied"), Promise.resolve({permission: "denied", requireInteraction: !1});
                    const c = t.getIp();
                    return o ? Qn.emit("push-status", i, "show-request-domain") : Qn.emit("push-status", i, "system-show", !0), function (e) {
                        const {siteId: t, uuid: n, cid: i, ip: r, isUserInteraction: s} = e;
                        return new Promise(((e, o) => {
                            setTimeout(o, 6e4), window.safari.pushNotification.requestPermission(`https://api.flocktory.com/p/push/sites/${t}`, `web.com.flocktory.${t}`, {"site-id": String(t), authenticationToken: `${t}|${n}|${i}|${r}`, platform: "safari", userAgent: window.navigator.userAgent, referrerURL: window.location.href}, (({permission: t}) => {
                                let n;
                                n = s ? "granted" === t ? "push-subscribed-domain" : "push-denied-domain" : "granted" === t ? "system-push-subscribed" : "system-push-denied", Qn.emit("push-status", i, n), e({permission: t, requireInteraction: !1})
                            }))
                        }))
                    }({siteId: r, cid: i, uuid: n.getUuid(), ip: null != c ? c : "", isUserInteraction: o}).catch((e => (Yn.error(e, "request failed"), Qn.emit("push-status", i, "push-error"), {permission: "denied", requireInteraction: !1})))
                }, emitter  : Qn
            }
        }

        class ei {
            constructor(e) {
                this._key = "audience_has_current_item", this._skuCheckRequestStatus = {}, this._skuCheckResult = {}, this._audiencesMap = {}, this._backend = e
            }

            getKey() {
                return this._key
            }

            set(e) {
                const n            = "$and", i = "$or", r = {[n]: i, [i]: n}, s = (e, n, i, o, a) => {
                    const c = r[a];
                    i[a].forEach((i => {
                        i?.[c] ? s(e, n, i, o, c) : i?.[this._key] && (i[this._key]?.$has && i[this._key].$has.forEach((e => o.push(e))), i[this._key]?.$hasNot && i[this._key].$hasNot.forEach((e => o.push(e))), n[e] = (0, t.uniq)(o))
                    }))
                };
                this._audiencesMap = e.reduce(((e, t) => {
                    const {id: r, triggers: o} = t, a = [];
                    return o?.$or ? s(r, e, o, a, i) : o?.$and && s(r, e, o, a, n), e
                }), {})
            }

            getCurrent(e) {
                return this._audiencesMap[e]
            }

            checkSku(e, t) {
                return Object.keys(this._skuCheckResult).length ? this._skuCheckResult : (this._skuCheckRequestStatus[t] || (this._backend.checkSkuInAudience({audienceIds: e, currentItemId: t}).then((e => {
                    this._skuCheckResult = e
                })), this._skuCheckRequestStatus[t] = !0), null)
            }
        }

        function ti(e) {
            return new ei(e)
        }

        const ni = (0, e.Z)("system"), ii = (0, e.Z)("performance"), ri = "flocktory-checkpoint-sent";

        function si(e, n) {
            let i, r = {};
            "string" == typeof e ? i = e : Array.isArray(e) ? (i = e[0], r = e[1]) : (i = e.action, delete e.action, r = e), n[i] && n[i]((0, t.deepMerge)({}, r))
        }

        function oi(e, n) {
            const i = (0, t.getParameterByName)("fl_checkpoint", window.location.href), r = "true" === sessionStorage.getItem(ri), s = () => {
                n.sendCheckpointId(i), sessionStorage.setItem(ri, !0)
            };
            if (!r && i) {
                e.isActionAvailable(Re) ? e.getCookieValue(fe.storageKeys.globalSessionId).then((e => {
                    e || s()
                })) : s()
            }
        }

        const ai = (0, e.Z)("loader"), ci = (0, e.Z)("performance");
        ci.info("api start", performance.now());
        const ui = function () {
            const e = window.navigator.userAgent, t = e.indexOf("Opera Mini") > -1, n = e.indexOf("Presto") > -1, i = e.indexOf("IEMobile/10.0") > -1, r = e.match(/MSIE\s(\d+)/), s = parseInt(r && r[1], 10), o = !Number.isNaN(s) && s < 11, a = e.indexOf("SlimerJS") > -1, c = "function" == typeof window.WeakMap, u = e.toLowerCase().indexOf("bot") > -1;
            return !t && !n && !i && !o && !(-1 !== [].indexOf(1)) && !function () {
                try {
                    const e = "flockCS";
                    localStorage.setItem(e, "i"), localStorage.removeItem(e)
                } catch (e) {
                    return !0
                }
                return !1
            }() && !a && c && !u
        }(), li  = In.siteId || function () {
            const e = Array.from(document.querySelectorAll("script[src]")).map((e => e.getAttribute("src") || "")), t = e.find((e => /\/\/[^/]*api.flocktory.com\/v2\/loader\.js/.test(e)));
            if (t) {
                const e = t.match("site_id=([0-9]+)");
                if (e && e[1]) return parseInt(e[1], 10)
            }
            return null
        }();
        In.loaded ? ai.warn("flocktory loader already executed") : li ? ui ? (In.loaded = !0, function (s, o) {
            var a;
            !function () {
                try {
                    const n = JSON.parse(window.localStorage.getItem("flocktoryDebug")).log || {};
                    (0, t.isNumber)(n.level) && e.Z.setLevel(n.level);
                    const i = n.levels || {};
                    (0, t.forOwn)(i, ((t, n) => {
                        (0, e.Z)(n).level(t)
                    }))
                } catch (e) {
                }
            }(), a = s, ["postcheckout", "precheckout", "exchange", "addData", "fireEvent", "trackItemView", "trackCategoryView", "getData", "updateCart", "removeFromCart", "addToCart"].forEach((e => {
                a[e] = t => a.push([e, t])
            }));
            const c = [];
            s.ready = e => c.push(e), s.Promise = Promise;
            const {siteId: u} = o;
            u || ni.warn("No site id");
            const l = document.createElement("style");
            l.id = "flocktoryStyleTag", l.type = "text/css", l.innerHTML = String('.flockapi-overlay_popup{background-color:#00000080;background-image:radial-gradient(ellipse closest-corner at 50% 50%,#0000004d 20%,#0009 100%);bottom:0;display:none;left:0;opacity:0;outline:0;overflow-x:auto;overflow-y:auto;position:fixed;right:0;top:0;z-index:100000}.flockapi-overlay_popup .flockapi-spinner{display:block}.flockapi-overlay_popup.flockapi-loaded .flockapi-spinner{display:none}.flockapi-wrapper{position:relative}.flockapi-wrapper_popup{display:none;margin:0 auto;opacity:0;position:relative;transform:scale(.8);transition:all .2s linear;z-index:1}.flockapi-wrapper_popup .flockapi-closebutton{right:20px;top:20px}.flockapi-wrapper_popup.flockapi-shown{transition-property:margin,left,top,transform,opacity}.flockapi-closebutton{background:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAASCAYAAAC5DOVpAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAArNJREFUeNp8lDtv1EAUhWfmztheZ0MIibajQCAolgYJJBoQDRKiCH+ZEikQaGgCAaHQJEQhT7L2vDjHuw6bEJiV7bHn3u++V18bDkdam8dKqSKrvGe0fq2UVjFF3KdLa61yzt2edzHS7VLOz7TSq3hpc05vZDAYPCmcW3bWZWP0akppBPUvVJ6HzS+jDR/PnXM3oZuMmBpGlmRxOLxVlWVTuOIEFht8XAHwDmBfgYhXwErA1pwrlgZluV8U0BPTQD7KsF5QZVFcF5EAC8EY8VBdSCnfg8BnKMc5WAmDryBvy6o6cM5OjDGJ9kIIW7JQ1z9h2gO2CiWGGsUYD4EKOSFwC99j55HIGkAakRxaKy3yheNsWu83Ec03whRARzHG0AO10akHQvguru84e9mDxNL7Kahp20+Q2wZM9TCG0AER6jIT3AE1gZo5uo9kh6ooj3pQwq9t/RZBVCbMqotrG5aOCusewECmYqXLA3hwzFBhKBIEo6oN/gP2hxeqrP5eh23bvqcCFVkYa23D5zkI55S7rGjhieKlZi3JpkTPQVccq0uA+nOqAbON9+KDn/Wh/q9naFr1gkx19XKz89HlA0F15t/HVuzTCo2IhJ/Neuh86akXGXeNthljhAK2P66Cja11j6qqPMA0nDJHDCvFdIZKbaAIK6hwQQO4AquNibuNM7bQj3nYGN38EPt99NIpujx2+Qlxgny+syINnrtokREgjkBhPrWmQQIDgYR1oLKYgqCQetCkbd4iNA+YQuJTiGFHeqAmUBhm7IGYzRoeVQ1BsNSDTiZNs4EUsUHVDNb1ZghxB9NxA8CS09IDAVvEuMmJs3bSg3yIe1Bax+X/UU1+X6cc5alHfXKkrgfHiJ+JazH5HPqPrFmgJ3pawTnPps1pLftxF3EPWF38kf5CCjZ/CzAAhbuFTZwwFTQAAAAASUVORK5CYII=") 50% 50% no-repeat #fff;background-size:10px 10px;border-radius:10px;box-shadow:0 0 0 1px #0003,0 0 1px 0 #0000001a;cursor:pointer;height:20px;position:absolute;width:20px;z-index:1}.flockapi-spinner{display:none;left:50%;margin:-10px 0 0 -10px;position:absolute;top:50%}.flockapi-spinner,.flockapi-spinner:after{box-sizing:border-box;position:relative}.flockapi-spinner{color:#fff;display:block;height:20px;width:20px}.flockapi-spinner:after{animation:flock-ball-clip-rotate .75s linear infinite;background:#0000;border:2px solid;border-bottom:2px solid #0000;border-radius:100%;content:"";display:inline-block;height:100%;width:100%}@keyframes flock-ball-clip-rotate{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}.flockapi-display_block{display:block;transition:.2s linear;transition-property:left,top,transform,opacity}.flockapi-show{display:block;opacity:1}.flockapi-show.flockapi-wrapper_popup{transform:scale(1)}.flockapi-wrapper iframe{left:0;position:absolute;top:0}.flockapi-insular-wrapper{display:none;overflow:hidden;visibility:hidden}.flockapi-insular-wrapper[data-widget-type=embedded]{position:static}.flockapi-insular-wrapper[data-widget-type=fixed]{position:fixed}.flockapi-insular-wrapper[data-widget-type=popup]{-webkit-overflow-scrolling:touch;background:#000c;bottom:0;height:auto;left:0;overflow-x:auto;overflow-y:auto;position:fixed;right:0;top:0;width:auto;z-index:1000}.flockapi-insular-wrapper[data-widget-type=popup] .flockapi-insular-widget{margin-left:auto;margin-right:auto}.flockapi-insular-wrapper.flockapi-show{display:block;visibility:visible}.flockapi-insular-widget{display:block}'), document.getElementsByTagName("head")[0].appendChild(l);
            const d = /^((?!chrome).)*safari/i.test(navigator.userAgent) ? Xn : Zn;
            return function (...e) {
                const s = e.map((e => i(...e))), o = e => s.find((t => t.factory === e));
                s.forEach((e => {
                    e.edges = (0, t.compact)(e.params.map(o)), e._edges = r(e.edges)
                }));
                const a = i((() => Promise.resolve("main node"))), c = e => s.every((t => -1 === t._edges.indexOf(e))), u = [], l = s.filter((e => c(e)));
                for (a.edges = r(l); l.length;) {
                    const e = l.pop();
                    u.push(e);
                    let t = e._edges.length;
                    for (; t--;) {
                        const n = e._edges[t];
                        e._edges.pop(), c(n) && l.push(n)
                    }
                }
                if (s.find((e => e._edges && e._edges.length > 0))) return Promise.reject(new Error("Cycles found"));
                const d = [], h = e => {
                    const {factory: t, params: i} = e;
                    let r, s                      = Promise.resolve(null);
                    return e.edges.forEach((e => {
                        s = s.then((() => h(e)))
                    })), s.then((() => {
                        if (null != e.instance) return e.instance;
                        const s = i.map((e => {
                            const t = o(e);
                            return null != t && null != t.instance ? t.instance : e
                        }));
                        return r = setTimeout((() => {
                            n.error(new Error("Node init timeout"), {factory: t.toString().substring(0, 100)})
                        }), 6e4), t(...s)
                    })).then((t => {
                        r && clearTimeout(r), e.instance = t, d.push(t)
                    }))
                };
                return h(a).then((() => {
                    const e = e => {
                        const t = o(e);
                        return null == t ? null : t.instance
                    };
                    return e.destroy = () => d.reduce(((e, t) => e.then((() => t.destroy ? t.destroy() : null))), Promise.resolve()), e
                }))
            }([Ht], [kt.factory], [Fe, {siteId: u}], [Pn, Fe, {siteId: u}], [Bn, Pn, kt.factory, {siteId: u}, s], [ze, Fe, {siteId: u}], [sn, ze, Fe, Bn, {siteId: u}], [lt, sn, {siteId: u}, Pn], [Gt, lt], [Dt, ze, lt, {siteId: u}, sn], [Ft, ze, sn], [gt.factory, ze, sn], [Bt, ze, Ft, Ht, Gt, Dt, sn], [at.Z, ot, Dt, window, s], [ot, lt, Dt, Gt, Xt, Pn, sn], [ti, Pn], [Tt, ze, Dt, Bt, Ft, gt.factory, kt.factory, Ht, Xt, lt, Gt, sn, {siteId: u}, Pn, qn, ti], [Xt, Ft, Bt, Ht, Dt, sn, ti], [qn, {siteId: u}, s, sn, Pn, d], [d, ze, sn, Pn, {siteId: u}, Dt]).then((t => {
                const n = t(ze), i = t(lt), r = t(Dt), o = t(ot), a = t(Tt), u = t(sn), l = t(Ht), d = t(Fe), h = t(Pn), p = t(Gt), m = t(kt.factory);
                if (null != n && null != i && null != r && null != o && null != a && null != u && null != l && null != h && null != p) {
                    for (oi(d, h), function (e, t, n) {
                        e && e.isActionAvailable(Ve) && (!n || !n.isExternalTrackingDisabled()) && e.getGlobalSessionId().then((e => !!e && new We(e, t)), (e => ($e.error(e), !1)))
                    }(d, n, u), Object.assign(s, o); s.length;) si(s.shift(), o);
                    c.forEach((e => {
                        try {
                            e()
                        } catch (e) {
                            ni.warn("Wrong ready callback")
                        }
                    })), s.ready = e => setTimeout(e, 1), s.push = e => si(e, o), i.trackPageView(), u.update(r.user), r.on("add-user", (e => {
                        Object.keys(e).length && a.update(e)
                    })), n.get("precheckoutClosed"), s.getSubscriptionStatus = h.getSubscriptionStatus, function (t, n, i) {
                        t.__dev__clear = () => n.clear(), t.__dev__setLogLevel = t => {
                            let n;
                            e.Z.setLevel(t || e.p.ALL), e.Z.enable();
                            try {
                                n = JSON.parse(window.localStorage.getItem("flocktoryDebug"))
                            } catch (e) {
                            }
                            n = n || {}, n.log = n.log || {}, n.log.level = t || e.p.ALL;
                            try {
                                localStorage.setItem("flocktoryDebug", JSON.stringify(n))
                            } catch (e) {
                            }
                        }, t.__dev__disableLog = () => {
                            e.Z.disable(), t.__dev__clear()
                        }, t.__version = "13770cf4d8c4d8161f541bb0a833df2c7500fdb2", t.__getState = i.dump
                    }(s, n, u), l.events.on("locationchange", (() => {
                        u.updateViewId()
                    })), s.reInit = () => {
                        const e = {precheckoutWrapper: ".flocktory-widget-overlay", postcheckoutWrapper: ".flockapi-overlay", exchangeWrapper: ".flockapi-overlay", spanWrapper: ".fl-embedded-wrapper", customWrapper: ".fl-custom-wrapper"}, t = e => {
                            const t = document.querySelectorAll(e);
                            [].forEach.call(t, (e => e.remove()))
                        };
                        u.updateViewId(), i.trackPageView(), t(e.spanWrapper), t(e.customWrapper), t([e.exchangeWrapper, e.postcheckoutWrapper, e.precheckoutWrapper].join(",")), u.resetCampaignsShownIds();
                        const n = {email: r.user.email, name: r.user.name};
                        p.emit("clean"), a.update(n, !0)
                    }, ii.info("emit loaderReady event", performance.now()), p.emit("loaderReady"), m.on(kt.EVENTS.EXPIRED, (() => {
                        u.update(r.user, !0)
                    }))
                }
            }))
        }(In, {siteId: li}).then((() => {
            ai.info("System ready. Version: 13770cf4d8c4d8161f541bb0a833df2c7500fdb2"), ci.info("System ready", performance.now())
        })).catch((e => {
            ai.error(e, "Loader error")
        }))) : ai.warn("Can't init flocktory in this browser") : ai.warn("No site id")
    })()
})();
