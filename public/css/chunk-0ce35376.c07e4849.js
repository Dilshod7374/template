(window["webpackJsonp"] = window["webpackJsonp"] || []).push([
    ["chunk-0ce35376"], {
        "40f8"   : function (t, e, n) {
            "use strict";
            n.r(e);
            n("b0c0");
            var o        = function () {
                var t = this, e = t._self._c;
                return e("transition", {attrs: {name: "fade"}}, [
                    e("div", {
                        staticClass: "popup-map", on: {
                            click     : function (e) {
                                return e.target !== e.currentTarget ? null : t.$emit("close")
                            }, keydown: function (e) {
                                return !e.type.indexOf("key") && t._k(e.keyCode, "esc", 27, e.key, ["Esc", "Escape"]) ? null : t.$emit("close")
                            }
                        }
                    }, [
                        e("div", {attrs: {id: "map"}}, [
                            e("div", {staticClass: "popup-map__form"}, [
                                e("div", {staticClass: "popup-map__form__title"}, [t._v(" " + t._s(t.$t("popupMap.label")) + " ")]), e("Field", {
                                    staticClass   : "popup-map__form__field", attrs: {value: t.point.name, placeholder: t.$t("popupMap.locationName")}, on: {
                                        "field-input": function (e) {
                                            return t.setPointName(e)
                                        }
                                    }, scopedSlots: t._u([
                                        {
                                            key     : "error-helper", fn: function () {
                                                return [t.$v.point.name.$error ? e("div", [t.$v.point.name.required ? t._e() : e("span", [t._v(t._s(t.$t("validation.required")))])]) : t._e()]
                                            }, proxy: !0
                                        }
                                    ])
                                }), e("Field", {
                                    staticClass: "popup-map__form__field", attrs: {value: t.getPointCoordinates, placeholder: t.$t("popupMap.coordinates"), isReadOnly: !0}, scopedSlots: t._u([
                                        {
                                            key     : "error-helper", fn: function () {
                                                return [t.$v.point.geometry.$error ? e("div", [t.$v.point.geometry.required ? t._e() : e("span", [t._v(t._s(t.$t("validation.required")))])]) : t._e()]
                                            }, proxy: !0
                                        }
                                    ])
                                }), e("div", {staticClass: "popup-map__form__buttons"}, [
                                    e("Btn", {
                                        staticClass: "popup-map__form__buttons__button", attrs: {tag: "button", "btn-type": "button", "bg-color": "bg-green-1", color: "color-neutral-100"}, on: {"btn-click": t.save}, scopedSlots: t._u([
                                            {
                                                key     : "content", fn: function () {
                                                    return [e("span", {staticClass: "popup-btn-text btn-text"}, [t._v(t._s(t.$t("popup.cancel.actions.save")))])]
                                                }, proxy: !0
                                            }
                                        ])
                                    }), e("Btn", {
                                        staticClass   : "popup-map__form__buttons__button", attrs: {tag: "button", "btn-type": "button", outline: "outline teal-300", color: "color-teal-300"}, on: {
                                            "btn-click": function (e) {
                                                return t.$emit("close")
                                            }
                                        }, scopedSlots: t._u([
                                            {
                                                key     : "content", fn: function () {
                                                    return [e("span", {staticClass: "popup-btn-text"}, [t._v(t._s(t.$t("popup.cancel.actions.cancel")))])]
                                                }, proxy: !0
                                            }
                                        ])
                                    })
                                ], 1)
                            ], 1)
                        ])
                    ])
                ])
            }, r         = [], i = n("5530"), a = (n("d81d"), n("8f04")), s = n("7f83"), u = n("e192"), c = n.n(u), l = n("cae8"), d = n.n(l), p = (n("ac6d"), n("bdd0"), n("b5ae")), f = n("2f62"), h = {
                components    : {Field: a["a"], Btn: s["a"]}, data: function () {
                    return {map: null, draw: null, point: {name: "", place_name: "", geometry: {}}, marker: null}
                }, validations: {point: {name: {required: p["required"]}, geometry: {required: p["required"]}}}, methods: Object(i["a"])(Object(i["a"])({}, Object(f["d"])({addPoint: "popupMap/addPoint"})), {}, {
                    setPointName   : function (t) {
                        this.point.name = t, this.point.place_name = t, this.$v.point.name.$reset()
                    }, save        : function () {
                        this.$v.$touch(), this.$v.$error || (this.$emit("save", this.point), this.addPoint(this.point))
                    }, updatePoint : function (t) {
                        if (t.features.length) {
                            var e = +new Date, n = +Math.floor(222 * Math.random()), o = "custom." + e + n;
                            this.point.id = o, this.point.geometry = t.features[0].geometry, this.draw.deleteAll(), this.marker && this.marker.remove(), this.marker = (new c.a.Marker).setLngLat(this.point.geometry.coordinates).addTo(this.map)
                        }
                    }, createMarker: function (t) {
                        if (t.lngLat) {
                            var e = t.lngLat, n = +new Date, o = +Math.floor(222 * Math.random()), r = "custom." + n + o;
                            this.point.id = r, this.point.geometry = {coordinates: [e.lng, e.lat], type: "Point"}, this.draw.deleteAll(), this.marker && this.marker.remove(), this.marker = (new c.a.Marker).setLngLat(this.point.geometry.coordinates).addTo(this.map)
                        }
                    }
                }), computed  : {
                    getPointCoordinates: function () {
                        return this.point.geometry.coordinates
                    }
                }, mounted    : function () {
                    var t = this;
                    if (c.a.accessToken = fakeWindow.mapBoxKey, this.map = new c.a.Map({container: "map", style: "mapbox://styles/mapbox/streets-v11", center: [-74.5, 40], zoom: 9}), this.draw = new d.a({displayControlsDefault: !1, controls: {point: !0}}), this.map.addControl(this.draw), this.map.on("draw.create", this.updatePoint), "ontouchend" in document.documentElement) {
                        var e = !1;
                        this.map.on("touchmove", (function () {
                            e = !0
                        })), this.map.on("touchend", (function (n) {
                            e || t.createMarker(n), e = !1
                        }))
                    } else this.map.on("click", this.createMarker)
                }
            }, g         = h, y = (n("bdad"), n("0c7c")), m = Object(y["a"])(g, o, r, !1, null, "2b7f9efc", null);
            e["default"] = m.exports
        }, "6c09": function (t, e, n) {
        }, ac6d  : function (t, e, n) {
        }, bdad  : function (t, e, n) {
            "use strict";
            n("6c09")
        }, bdd0  : function (t, e, n) {
        }, cae8  : function (t, e, n) {
            (function (e) {
                !function (e, n) {
                    t.exports = n()
                }(0, (function () {
                    "use strict";
                    var t = function (t, e) {
                        var n = {drag: [], click: [], mousemove: [], mousedown: [], mouseup: [], mouseout: [], keydown: [], keyup: [], touchstart: [], touchmove: [], touchend: [], tap: []}, o = {
                            on       : function (t, e, o) {
                                if (void 0 === n[t]) throw new Error("Invalid event type: " + t);
                                n[t].push({selector: e, fn: o})
                            }, render: function (t) {
                                e.store.featureChanged(t)
                            }
                        }, r  = function (t, r) {
                            for (var i = n[t], a = i.length; a--;) {
                                var s = i[a];
                                if (s.selector(r)) {
                                    s.fn.call(o, r) || e.store.render(), e.ui.updateMapClasses();
                                    break
                                }
                            }
                        };
                        return t.start.call(o), {
                            render              : t.render, stop: function () {
                                t.stop && t.stop()
                            }, trash            : function () {
                                t.trash && (t.trash(), e.store.render())
                            }, combineFeatures  : function () {
                                t.combineFeatures && t.combineFeatures()
                            }, uncombineFeatures: function () {
                                t.uncombineFeatures && t.uncombineFeatures()
                            }, drag             : function (t) {
                                r("drag", t)
                            }, click            : function (t) {
                                r("click", t)
                            }, mousemove        : function (t) {
                                r("mousemove", t)
                            }, mousedown        : function (t) {
                                r("mousedown", t)
                            }, mouseup          : function (t) {
                                r("mouseup", t)
                            }, mouseout         : function (t) {
                                r("mouseout", t)
                            }, keydown          : function (t) {
                                r("keydown", t)
                            }, keyup            : function (t) {
                                r("keyup", t)
                            }, touchstart       : function (t) {
                                r("touchstart", t)
                            }, touchmove        : function (t) {
                                r("touchmove", t)
                            }, touchend         : function (t) {
                                r("touchend", t)
                            }, tap              : function (t) {
                                r("tap", t)
                            }
                        }
                    }, n  = 6378137;

                    function o(t) {
                        var e = 0;
                        if (t && t.length > 0) {
                            e += Math.abs(r(t[0]));
                            for (var n = 1; n < t.length; n++) e -= Math.abs(r(t[n]))
                        }
                        return e
                    }

                    function r(t) {
                        var e, o, r, a, s, u, c = 0, l = t.length;
                        if (l > 2) {
                            for (u = 0; u < l; u++) u === l - 2 ? (r = l - 2, a = l - 1, s = 0) : u === l - 1 ? (r = l - 1, a = 0, s = 1) : (r = u, a = u + 1, s = u + 2), e = t[r], o = t[a], c += (i(t[s][0]) - i(e[0])) * Math.sin(i(o[1]));
                            c = c * n * n / 2
                        }
                        return c
                    }

                    function i(t) {
                        return t * Math.PI / 180
                    }

                    var a = {
                            geometry: function t(e) {
                                var n, r = 0;
                                switch (e.type) {
                                    case"Polygon":
                                        return o(e.coordinates);
                                    case"MultiPolygon":
                                        for (n = 0; n < e.coordinates.length; n++) r += o(e.coordinates[n]);
                                        return r;
                                    case"Point":
                                    case"MultiPoint":
                                    case"LineString":
                                    case"MultiLineString":
                                        return 0;
                                    case"GeometryCollection":
                                        for (n = 0; n < e.geometries.length; n++) r += t(e.geometries[n]);
                                        return r
                                }
                            }, ring: r
                        }, s = "mapboxgl-ctrl", u = "mapbox-gl-draw_ctrl-draw-btn", c = "mapbox-gl-draw_line", l = "mapbox-gl-draw_polygon", d = "mapbox-gl-draw_point", p = "mapbox-gl-draw_trash", f = "mapbox-gl-draw_combine", h = "mapbox-gl-draw_uncombine", g = "mapboxgl-ctrl-group", y = "active", m = "mapbox-gl-draw_boxselect", v = "mapbox-gl-draw-hot", b = "mapbox-gl-draw-cold", _ = "add", S = "move", x = "drag", C = "pointer", M = "none",
                        E = {POLYGON: "polygon", LINE: "line_string", POINT: "point"}, w = "Feature", I = "Polygon", L = "LineString", P = "Point", k = "FeatureCollection", F = "Multi", O = "MultiPoint", T = "MultiLineString", j = "MultiPolygon", A = {DRAW_LINE_STRING: "draw_line_string", DRAW_POLYGON: "draw_polygon", DRAW_POINT: "draw_point", SIMPLE_SELECT: "simple_select", DIRECT_SELECT: "direct_select", STATIC: "static"}, D = "draw.create", N = "draw.delete", U = "draw.update",
                        R = "draw.selectionchange", B = "draw.modechange", $ = "draw.actionable", V = "draw.render", J = "draw.combine", G = "draw.uncombine", z = "move", q = "change_coordinates", W = "feature", Y = "midpoint", Z = "vertex", K = "true", X = "false", H = ["scrollZoom", "boxZoom", "dragRotate", "dragPan", "keyboard", "doubleClickZoom", "touchZoomRotate"], Q = {Point: 0, LineString: 1, Polygon: 2};

                    function tt(t, e) {
                        var n = Q[t.geometry.type] - Q[e.geometry.type];
                        return 0 === n && t.geometry.type === I ? t.area - e.area : n
                    }

                    function et(t) {
                        if (this._items = {}, this._nums = {}, this._length = t ? t.length : 0, t) for (var e = 0, n = t.length; e < n; e++) this.add(t[e]), void 0 !== t[e] && ("string" == typeof t[e] ? this._items[t[e]] = e : this._nums[t[e]] = e)
                    }

                    et.prototype.add = function (t) {
                        return this.has(t) || (this._length++, "string" == typeof t ? this._items[t] = this._length : this._nums[t] = this._length), this
                    }, et.prototype.delete = function (t) {
                        return !1 === this.has(t) || (this._length--, delete this._items[t], delete this._nums[t]), this
                    }, et.prototype.has = function (t) {
                        return ("string" == typeof t || "number" == typeof t) && (void 0 !== this._items[t] || void 0 !== this._nums[t])
                    }, et.prototype.values = function () {
                        var t = this, e = [];
                        return Object.keys(this._items).forEach((function (n) {
                            e.push({k: n, v: t._items[n]})
                        })), Object.keys(this._nums).forEach((function (n) {
                            e.push({k: JSON.parse(n), v: t._nums[n]})
                        })), e.sort((function (t, e) {
                            return t.v - e.v
                        })).map((function (t) {
                            return t.k
                        }))
                    }, et.prototype.clear = function () {
                        return this._length = 0, this._items = {}, this._nums = {}, this
                    };
                    var nt = [W, Y, Z], ot = {
                        click   : function (t, e, n) {
                            return rt(t, e, n, n.options.clickBuffer)
                        }, touch: function (t, e, n) {
                            return rt(t, e, n, n.options.touchBuffer)
                        }
                    };

                    function rt(t, e, n, o) {
                        if (null === n.map) return [];
                        var r          = t ? function (t, e) {
                            return void 0 === e && (e = 0), [[t.point.x - e, t.point.y - e], [t.point.x + e, t.point.y + e]]
                        }(t, o) : e, i = {};
                        n.options.styles && (i.layers = n.options.styles.map((function (t) {
                            return t.id
                        })));
                        var s  = n.map.queryRenderedFeatures(r, i).filter((function (t) {
                            return -1 !== nt.indexOf(t.properties.meta)
                        })), u = new et, c = [];
                        return s.forEach((function (t) {
                            var e = t.properties.id;
                            u.has(e) || (u.add(e), c.push(t))
                        })), function (t) {
                            return t.map((function (t) {
                                return t.geometry.type === I && (t.area = a.geometry({type: w, property: {}, geometry: t.geometry})), t
                            })).sort(tt).map((function (t) {
                                return delete t.area, t
                            }))
                        }(c)
                    }

                    function it(t, e) {
                        var n = ot.click(t, null, e), o = {mouse: M};
                        return n[0] && (o.mouse = n[0].properties.active === K ? S : C, o.feature = n[0].properties.meta), -1 !== e.events.currentModeName().indexOf("draw") && (o.mouse = _), e.ui.queueMapClasses(o), e.ui.updateMapClasses(), n[0]
                    }

                    function at(t, e) {
                        var n = t.x - e.x, o = t.y - e.y;
                        return Math.sqrt(n * n + o * o)
                    }

                    function st(t, e, n) {
                        void 0 === n && (n = {});
                        var o = null != n.fineTolerance ? n.fineTolerance : 4, r = null != n.grossTolerance ? n.grossTolerance : 12, i = null != n.interval ? n.interval : 500;
                        t.point = t.point || e.point, t.time = t.time || e.time;
                        var a = at(t.point, e.point);
                        return a < o || a < r && e.time - t.time < i
                    }

                    function ut(t, e, n) {
                        void 0 === n && (n = {});
                        var o = null != n.tolerance ? n.tolerance : 25, r = null != n.interval ? n.interval : 250;
                        return t.point = t.point || e.point, t.time = t.time || e.time, at(t.point, e.point) < o && e.time - t.time < r
                    }

                    function ct(t, e) {
                        return t(e = {exports: {}}, e.exports), e.exports
                    }

                    var lt  = ct((function (t) {
                        var e  = t.exports = function (t, n) {
                            if (n || (n = 16), void 0 === t && (t = 128), t <= 0) return "0";
                            for (var o = Math.log(Math.pow(2, t)) / Math.log(n), r = 2; o === 1 / 0; r *= 2) o = Math.log(Math.pow(2, t / r)) / Math.log(n) * r;
                            var i = o - Math.floor(o), a = "";
                            for (r = 0; r < Math.floor(o); r++) a = Math.floor(Math.random() * n).toString(n) + a;
                            if (i) {
                                var s = Math.pow(n, i);
                                a     = Math.floor(Math.random() * s).toString(n) + a
                            }
                            var u = parseInt(a, n);
                            return u !== 1 / 0 && u >= Math.pow(2, t) ? e(t, n) : a
                        };
                        e.rack = function (t, n, o) {
                            var r = function (r) {
                                var a = 0;
                                do {
                                    if (a++ > 10) {
                                        if (!o) throw new Error("too many ID collisions, use more bits");
                                        t += o
                                    }
                                    var s = e(t, n)
                                } while (Object.hasOwnProperty.call(i, s));
                                return i[s] = r, s
                            }, i  = r.hats = {};
                            return r.get = function (t) {
                                return r.hats[t]
                            }, r.set = function (t, e) {
                                return r.hats[t] = e, r
                            }, r.bits = t || 128, r.base = n || 16, r
                        }
                    })), dt = function (t, e) {
                        this.ctx = t, this.properties = e.properties || {}, this.coordinates = e.geometry.coordinates, this.id = e.id || lt(), this.type = e.geometry.type
                    };
                    dt.prototype.changed = function () {
                        this.ctx.store.featureChanged(this.id)
                    }, dt.prototype.incomingCoords = function (t) {
                        this.setCoordinates(t)
                    }, dt.prototype.setCoordinates = function (t) {
                        this.coordinates = t, this.changed()
                    }, dt.prototype.getCoordinates = function () {
                        return JSON.parse(JSON.stringify(this.coordinates))
                    }, dt.prototype.setProperty = function (t, e) {
                        this.properties[t] = e
                    }, dt.prototype.toGeoJSON = function () {
                        return JSON.parse(JSON.stringify({id: this.id, type: w, properties: this.properties, geometry: {coordinates: this.getCoordinates(), type: this.type}}))
                    }, dt.prototype.internal = function (t) {
                        var e = {id: this.id, meta: W, "meta:type": this.type, active: X, mode: t};
                        if (this.ctx.options.userProperties) for (var n in this.properties) e["user_" + n] = this.properties[n];
                        return {type: w, properties: e, geometry: {coordinates: this.getCoordinates(), type: this.type}}
                    };
                    var pt = function (t, e) {
                        dt.call(this, t, e)
                    };
                    (pt.prototype = Object.create(dt.prototype)).isValid = function () {
                        return "number" == typeof this.coordinates[0] && "number" == typeof this.coordinates[1]
                    }, pt.prototype.updateCoordinate = function (t, e, n) {
                        this.coordinates = 3 === arguments.length ? [e, n] : [t, e], this.changed()
                    }, pt.prototype.getCoordinate = function () {
                        return this.getCoordinates()
                    };
                    var ft = function (t, e) {
                        dt.call(this, t, e)
                    };
                    (ft.prototype = Object.create(dt.prototype)).isValid = function () {
                        return this.coordinates.length > 1
                    }, ft.prototype.addCoordinate = function (t, e, n) {
                        this.changed();
                        var o = parseInt(t, 10);
                        this.coordinates.splice(o, 0, [e, n])
                    }, ft.prototype.getCoordinate = function (t) {
                        var e = parseInt(t, 10);
                        return JSON.parse(JSON.stringify(this.coordinates[e]))
                    }, ft.prototype.removeCoordinate = function (t) {
                        this.changed(), this.coordinates.splice(parseInt(t, 10), 1)
                    }, ft.prototype.updateCoordinate = function (t, e, n) {
                        var o = parseInt(t, 10);
                        this.coordinates[o] = [e, n], this.changed()
                    };
                    var ht = function (t, e) {
                        dt.call(this, t, e), this.coordinates = this.coordinates.map((function (t) {
                            return t.slice(0, -1)
                        }))
                    };
                    (ht.prototype = Object.create(dt.prototype)).isValid = function () {
                        return 0 !== this.coordinates.length && this.coordinates.every((function (t) {
                            return t.length > 2
                        }))
                    }, ht.prototype.incomingCoords = function (t) {
                        this.coordinates = t.map((function (t) {
                            return t.slice(0, -1)
                        })), this.changed()
                    }, ht.prototype.setCoordinates = function (t) {
                        this.coordinates = t, this.changed()
                    }, ht.prototype.addCoordinate = function (t, e, n) {
                        this.changed();
                        var o = t.split(".").map((function (t) {
                            return parseInt(t, 10)
                        }));
                        this.coordinates[o[0]].splice(o[1], 0, [e, n])
                    }, ht.prototype.removeCoordinate = function (t) {
                        this.changed();
                        var e  = t.split(".").map((function (t) {
                            return parseInt(t, 10)
                        })), n = this.coordinates[e[0]];
                        n && (n.splice(e[1], 1), n.length < 3 && this.coordinates.splice(e[0], 1))
                    }, ht.prototype.getCoordinate = function (t) {
                        var e  = t.split(".").map((function (t) {
                            return parseInt(t, 10)
                        })), n = this.coordinates[e[0]];
                        return JSON.parse(JSON.stringify(n[e[1]]))
                    }, ht.prototype.getCoordinates = function () {
                        return this.coordinates.map((function (t) {
                            return t.concat([t[0]])
                        }))
                    }, ht.prototype.updateCoordinate = function (t, e, n) {
                        this.changed();
                        var o = t.split("."), r = parseInt(o[0], 10), i = parseInt(o[1], 10);
                        void 0 === this.coordinates[r] && (this.coordinates[r] = []), this.coordinates[r][i] = [e, n]
                    };
                    var gt = {MultiPoint: pt, MultiLineString: ft, MultiPolygon: ht}, yt = function (t, e, n, o, r) {
                        var i = n.split("."), a = parseInt(i[0], 10), s = i[1] ? i.slice(1).join(".") : null;
                        return t[a][e](s, o, r)
                    }, mt  = function (t, e) {
                        if (dt.call(this, t, e), delete this.coordinates, this.model = gt[e.geometry.type], void 0 === this.model) throw new TypeError(e.geometry.type + " is not a valid type");
                        this.features = this._coordinatesToFeatures(e.geometry.coordinates)
                    };

                    function vt(t) {
                        this.map = t.map, this.drawConfig = JSON.parse(JSON.stringify(t.options || {})), this._ctx = t
                    }

                    (mt.prototype = Object.create(dt.prototype))._coordinatesToFeatures = function (t) {
                        var e = this, n = this.model.bind(this);
                        return t.map((function (t) {
                            return new n(e.ctx, {id: lt(), type: w, properties: {}, geometry: {coordinates: t, type: e.type.replace("Multi", "")}})
                        }))
                    }, mt.prototype.isValid = function () {
                        return this.features.every((function (t) {
                            return t.isValid()
                        }))
                    }, mt.prototype.setCoordinates = function (t) {
                        this.features = this._coordinatesToFeatures(t), this.changed()
                    }, mt.prototype.getCoordinate = function (t) {
                        return yt(this.features, "getCoordinate", t)
                    }, mt.prototype.getCoordinates = function () {
                        return JSON.parse(JSON.stringify(this.features.map((function (t) {
                            return t.type === I ? t.getCoordinates() : t.coordinates
                        }))))
                    }, mt.prototype.updateCoordinate = function (t, e, n) {
                        yt(this.features, "updateCoordinate", t, e, n), this.changed()
                    }, mt.prototype.addCoordinate = function (t, e, n) {
                        yt(this.features, "addCoordinate", t, e, n), this.changed()
                    }, mt.prototype.removeCoordinate = function (t) {
                        yt(this.features, "removeCoordinate", t), this.changed()
                    }, mt.prototype.getFeatures = function () {
                        return this.features
                    }, vt.prototype.setSelected = function (t) {
                        return this._ctx.store.setSelected(t)
                    }, vt.prototype.setSelectedCoordinates = function (t) {
                        var e = this;
                        this._ctx.store.setSelectedCoordinates(t), t.reduce((function (t, n) {
                            return void 0 === t[n.feature_id] && (t[n.feature_id] = !0, e._ctx.store.get(n.feature_id).changed()), t
                        }), {})
                    }, vt.prototype.getSelected = function () {
                        return this._ctx.store.getSelected()
                    }, vt.prototype.getSelectedIds = function () {
                        return this._ctx.store.getSelectedIds()
                    }, vt.prototype.isSelected = function (t) {
                        return this._ctx.store.isSelected(t)
                    }, vt.prototype.getFeature = function (t) {
                        return this._ctx.store.get(t)
                    }, vt.prototype.select = function (t) {
                        return this._ctx.store.select(t)
                    }, vt.prototype.deselect = function (t) {
                        return this._ctx.store.deselect(t)
                    }, vt.prototype.deleteFeature = function (t, e) {
                        return void 0 === e && (e = {}), this._ctx.store.delete(t, e)
                    }, vt.prototype.addFeature = function (t) {
                        return this._ctx.store.add(t)
                    }, vt.prototype.clearSelectedFeatures = function () {
                        return this._ctx.store.clearSelected()
                    }, vt.prototype.clearSelectedCoordinates = function () {
                        return this._ctx.store.clearSelectedCoordinates()
                    }, vt.prototype.setActionableState = function (t) {
                        void 0 === t && (t = {});
                        var e = {trash: t.trash || !1, combineFeatures: t.combineFeatures || !1, uncombineFeatures: t.uncombineFeatures || !1};
                        return this._ctx.events.actionable(e)
                    }, vt.prototype.changeMode = function (t, e, n) {
                        return void 0 === e && (e = {}), void 0 === n && (n = {}), this._ctx.events.changeMode(t, e, n)
                    }, vt.prototype.updateUIClasses = function (t) {
                        return this._ctx.ui.queueMapClasses(t)
                    }, vt.prototype.activateUIButton = function (t) {
                        return this._ctx.ui.setActiveButton(t)
                    }, vt.prototype.featuresAt = function (t, e, n) {
                        if (void 0 === n && (n = "click"), "click" !== n && "touch" !== n) throw new Error("invalid buffer type");
                        return ot[n](t, e, this._ctx)
                    }, vt.prototype.newFeature = function (t) {
                        var e = t.geometry.type;
                        return e === P ? new pt(this._ctx, t) : e === L ? new ft(this._ctx, t) : e === I ? new ht(this._ctx, t) : new mt(this._ctx, t)
                    }, vt.prototype.isInstanceOf = function (t, e) {
                        if (t === P) return e instanceof pt;
                        if (t === L) return e instanceof ft;
                        if (t === I) return e instanceof ht;
                        if ("MultiFeature" === t) return e instanceof mt;
                        throw new Error("Unknown feature class: " + t)
                    }, vt.prototype.doRender = function (t) {
                        return this._ctx.store.featureChanged(t)
                    }, vt.prototype.onSetup = function () {
                    }, vt.prototype.onDrag = function () {
                    }, vt.prototype.onClick = function () {
                    }, vt.prototype.onMouseMove = function () {
                    }, vt.prototype.onMouseDown = function () {
                    }, vt.prototype.onMouseUp = function () {
                    }, vt.prototype.onMouseOut = function () {
                    }, vt.prototype.onKeyUp = function () {
                    }, vt.prototype.onKeyDown = function () {
                    }, vt.prototype.onTouchStart = function () {
                    }, vt.prototype.onTouchMove = function () {
                    }, vt.prototype.onTouchEnd = function () {
                    }, vt.prototype.onTap = function () {
                    }, vt.prototype.onStop = function () {
                    }, vt.prototype.onTrash = function () {
                    }, vt.prototype.onCombineFeature = function () {
                    }, vt.prototype.onUncombineFeature = function () {
                    }, vt.prototype.toDisplayFeatures = function () {
                        throw new Error("You must overwrite toDisplayFeatures")
                    };
                    var bt = {drag: "onDrag", click: "onClick", mousemove: "onMouseMove", mousedown: "onMouseDown", mouseup: "onMouseUp", mouseout: "onMouseOut", keyup: "onKeyUp", keydown: "onKeyDown", touchstart: "onTouchStart", touchmove: "onTouchMove", touchend: "onTouchEnd", tap: "onTap"}, _t = Object.keys(bt);

                    function St(t) {
                        var e = Object.keys(t);
                        return function (n, o) {
                            void 0 === o && (o = {});
                            var r = {}, i = e.reduce((function (e, n) {
                                return e[n] = t[n], e
                            }), new vt(n));
                            return {
                                start               : function () {
                                    var e = this;
                                    r = i.onSetup(o), _t.forEach((function (n) {
                                        var o, a = bt[n], s = function () {
                                            return !1
                                        };
                                        t[a] && (s = function () {
                                            return !0
                                        }), e.on(n, s, (o = a, function (t) {
                                            return i[o](r, t)
                                        }))
                                    }))
                                }, stop             : function () {
                                    i.onStop(r)
                                }, trash            : function () {
                                    i.onTrash(r)
                                }, combineFeatures  : function () {
                                    i.onCombineFeatures(r)
                                }, uncombineFeatures: function () {
                                    i.onUncombineFeatures(r)
                                }, render           : function (t, e) {
                                    i.toDisplayFeatures(r, t, e)
                                }
                            }
                        }
                    }

                    function xt(t) {
                        return [].concat(t).filter((function (t) {
                            return void 0 !== t
                        }))
                    }

                    function Ct() {
                        var t = this;
                        if (!t.ctx.map || void 0 === t.ctx.map.getSource(v)) return u();
                        var e = t.ctx.events.currentModeName();
                        t.ctx.ui.queueMapClasses({mode: e});
                        var n = [], o = [];
                        t.isDirty ? o = t.getAllIds() : (n = t.getChangedIds().filter((function (e) {
                            return void 0 !== t.get(e)
                        })), o = t.sources.hot.filter((function (e) {
                            return e.properties.id && -1 === n.indexOf(e.properties.id) && void 0 !== t.get(e.properties.id)
                        })).map((function (t) {
                            return t.properties.id
                        }))), t.sources.hot = [];
                        var r          = t.sources.cold.length;
                        t.sources.cold = t.isDirty ? [] : t.sources.cold.filter((function (t) {
                            var e = t.properties.id || t.properties.parent;
                            return -1 === n.indexOf(e)
                        }));
                        var i          = r !== t.sources.cold.length || o.length > 0;

                        function a(n, o) {
                            var r = t.get(n).internal(e);
                            t.ctx.events.currentModeRender(r, (function (e) {
                                t.sources[o].push(e)
                            }))
                        }

                        if (n.forEach((function (t) {
                            return a(t, "hot")
                        })), o.forEach((function (t) {
                            return a(t, "cold")
                        })), i && t.ctx.map.getSource(b).setData({type: k, features: t.sources.cold}), t.ctx.map.getSource(v).setData({type: k, features: t.sources.hot}), t._emitSelectionChange && (t.ctx.map.fire(R, {
                            features   : t.getSelected().map((function (t) {
                                return t.toGeoJSON()
                            })), points: t.getSelectedCoordinates().map((function (t) {
                                return {type: w, properties: {}, geometry: {type: P, coordinates: t.coordinates}}
                            }))
                        }), t._emitSelectionChange = !1), t._deletedFeaturesToEmit.length) {
                            var s = t._deletedFeaturesToEmit.map((function (t) {
                                return t.toGeoJSON()
                            }));
                            t._deletedFeaturesToEmit = [], t.ctx.map.fire(N, {features: s})
                        }

                        function u() {
                            t.isDirty = !1, t.clearChangedIds()
                        }

                        u(), t.ctx.map.fire(V, {})
                    }

                    function Mt(t) {
                        var e, n = this;
                        this._features = {}, this._featureIds = new et, this._selectedFeatureIds = new et, this._selectedCoordinates = [], this._changedFeatureIds = new et, this._deletedFeaturesToEmit = [], this._emitSelectionChange = !1, this._mapInitialConfig = {}, this.ctx = t, this.sources = {hot: [], cold: []}, this.render = function () {
                            e || (e = requestAnimationFrame((function () {
                                e = null, Ct.call(n)
                            })))
                        }, this.isDirty = !1
                    }

                    function Et(t, e) {
                        var n = t._selectedCoordinates.filter((function (e) {
                            return t._selectedFeatureIds.has(e.feature_id)
                        }));
                        t._selectedCoordinates.length === n.length || e.silent || (t._emitSelectionChange = !0), t._selectedCoordinates = n
                    }

                    Mt.prototype.createRenderBatch = function () {
                        var t = this, e = this.render, n = 0;
                        return this.render = function () {
                            n++
                        }, function () {
                            t.render = e, n > 0 && t.render()
                        }
                    }, Mt.prototype.setDirty = function () {
                        return this.isDirty = !0, this
                    }, Mt.prototype.featureChanged = function (t) {
                        return this._changedFeatureIds.add(t), this
                    }, Mt.prototype.getChangedIds = function () {
                        return this._changedFeatureIds.values()
                    }, Mt.prototype.clearChangedIds = function () {
                        return this._changedFeatureIds.clear(), this
                    }, Mt.prototype.getAllIds = function () {
                        return this._featureIds.values()
                    }, Mt.prototype.add = function (t) {
                        return this.featureChanged(t.id), this._features[t.id] = t, this._featureIds.add(t.id), this
                    }, Mt.prototype.delete = function (t, e) {
                        var n = this;
                        return void 0 === e && (e = {}), xt(t).forEach((function (t) {
                            n._featureIds.has(t) && (n._featureIds.delete(t), n._selectedFeatureIds.delete(t), e.silent || -1 === n._deletedFeaturesToEmit.indexOf(n._features[t]) && n._deletedFeaturesToEmit.push(n._features[t]), delete n._features[t], n.isDirty = !0)
                        })), Et(this, e), this
                    }, Mt.prototype.get = function (t) {
                        return this._features[t]
                    }, Mt.prototype.getAll = function () {
                        var t = this;
                        return Object.keys(this._features).map((function (e) {
                            return t._features[e]
                        }))
                    }, Mt.prototype.select = function (t, e) {
                        var n = this;
                        return void 0 === e && (e = {}), xt(t).forEach((function (t) {
                            n._selectedFeatureIds.has(t) || (n._selectedFeatureIds.add(t), n._changedFeatureIds.add(t), e.silent || (n._emitSelectionChange = !0))
                        })), this
                    }, Mt.prototype.deselect = function (t, e) {
                        var n = this;
                        return void 0 === e && (e = {}), xt(t).forEach((function (t) {
                            n._selectedFeatureIds.has(t) && (n._selectedFeatureIds.delete(t), n._changedFeatureIds.add(t), e.silent || (n._emitSelectionChange = !0))
                        })), Et(this, e), this
                    }, Mt.prototype.clearSelected = function (t) {
                        return void 0 === t && (t = {}), this.deselect(this._selectedFeatureIds.values(), {silent: t.silent}), this
                    }, Mt.prototype.setSelected = function (t, e) {
                        var n = this;
                        return void 0 === e && (e = {}), t = xt(t), this.deselect(this._selectedFeatureIds.values().filter((function (e) {
                            return -1 === t.indexOf(e)
                        })), {silent: e.silent}), this.select(t.filter((function (t) {
                            return !n._selectedFeatureIds.has(t)
                        })), {silent: e.silent}), this
                    }, Mt.prototype.setSelectedCoordinates = function (t) {
                        return this._selectedCoordinates = t, this._emitSelectionChange = !0, this
                    }, Mt.prototype.clearSelectedCoordinates = function () {
                        return this._selectedCoordinates = [], this._emitSelectionChange = !0, this
                    }, Mt.prototype.getSelectedIds = function () {
                        return this._selectedFeatureIds.values()
                    }, Mt.prototype.getSelected = function () {
                        var t = this;
                        return this._selectedFeatureIds.values().map((function (e) {
                            return t.get(e)
                        }))
                    }, Mt.prototype.getSelectedCoordinates = function () {
                        var t = this;
                        return this._selectedCoordinates.map((function (e) {
                            return {coordinates: t.get(e.feature_id).getCoordinate(e.coord_path)}
                        }))
                    }, Mt.prototype.isSelected = function (t) {
                        return this._selectedFeatureIds.has(t)
                    }, Mt.prototype.setFeatureProperty = function (t, e, n) {
                        this.get(t).setProperty(e, n), this.featureChanged(t)
                    }, Mt.prototype.storeMapConfig = function () {
                        var t = this;
                        H.forEach((function (e) {
                            t.ctx.map[e] && (t._mapInitialConfig[e] = t.ctx.map[e].isEnabled())
                        }))
                    }, Mt.prototype.restoreMapConfig = function () {
                        var t = this;
                        Object.keys(this._mapInitialConfig).forEach((function (e) {
                            t._mapInitialConfig[e] ? t.ctx.map[e].enable() : t.ctx.map[e].disable()
                        }))
                    }, Mt.prototype.getInitialConfigValue = function (t) {
                        return void 0 === this._mapInitialConfig[t] || this._mapInitialConfig[t]
                    };
                    var wt = function () {
                        for (var t = arguments, e = {}, n = 0; n < arguments.length; n++) {
                            var o = t[n];
                            for (var r in o) It.call(o, r) && (e[r] = o[r])
                        }
                        return e
                    }, It  = Object.prototype.hasOwnProperty, Lt = ["mode", "feature", "mouse"];

                    function Pt(e) {
                        var n = null, o = null, r = {
                            onRemove       : function () {
                                return e.map.off("load", r.connect), clearInterval(o), r.removeLayers(), e.store.restoreMapConfig(), e.ui.removeButtons(), e.events.removeEventListeners(), e.ui.clearMapClasses(), e.map = null, e.container = null, e.store = null, n && n.parentNode && n.parentNode.removeChild(n), n = null, this
                            }, connect     : function () {
                                e.map.off("load", r.connect), clearInterval(o), r.addLayers(), e.store.storeMapConfig(), e.events.addEventListeners()
                            }, onAdd       : function (i) {
                                var a = i.fire;
                                return i.fire = function (t, e) {
                                    var n = arguments;
                                    return 1 === a.length && 1 !== arguments.length && (n = [wt({}, {type: t}, e)]), a.apply(i, n)
                                }, e.map = i, e.events = function (e) {
                                    var n      = Object.keys(e.options.modes).reduce((function (t, n) {
                                        return t[n] = St(e.options.modes[n]), t
                                    }), {}), o = {}, r = {}, i = {}, a = null, s = null;
                                    i.drag = function (t, n) {
                                        n({point: t.point, time: (new Date).getTime()}) ? (e.ui.queueMapClasses({mouse: x}), s.drag(t)) : t.originalEvent.stopPropagation()
                                    }, i.mousedrag = function (t) {
                                        i.drag(t, (function (t) {
                                            return !st(o, t)
                                        }))
                                    }, i.touchdrag = function (t) {
                                        i.drag(t, (function (t) {
                                            return !ut(r, t)
                                        }))
                                    }, i.mousemove = function (t) {
                                        if (1 === (void 0 !== t.originalEvent.buttons ? t.originalEvent.buttons : t.originalEvent.which)) return i.mousedrag(t);
                                        var n = it(t, e);
                                        t.featureTarget = n, s.mousemove(t)
                                    }, i.mousedown = function (t) {
                                        o     = {time: (new Date).getTime(), point: t.point};
                                        var n = it(t, e);
                                        t.featureTarget = n, s.mousedown(t)
                                    }, i.mouseup = function (t) {
                                        var n = it(t, e);
                                        t.featureTarget = n, st(o, {point: t.point, time: (new Date).getTime()}) ? s.click(t) : s.mouseup(t)
                                    }, i.mouseout = function (t) {
                                        s.mouseout(t)
                                    }, i.touchstart = function (t) {
                                        if (t.originalEvent.preventDefault(), e.options.touchEnabled) {
                                            r     = {time: (new Date).getTime(), point: t.point};
                                            var n = ot.touch(t, null, e)[0];
                                            t.featureTarget = n, s.touchstart(t)
                                        }
                                    }, i.touchmove = function (t) {
                                        if (t.originalEvent.preventDefault(), e.options.touchEnabled) return s.touchmove(t), i.touchdrag(t)
                                    }, i.touchend = function (t) {
                                        if (t.originalEvent.preventDefault(), e.options.touchEnabled) {
                                            var n = ot.touch(t, null, e)[0];
                                            t.featureTarget = n, ut(r, {time: (new Date).getTime(), point: t.point}) ? s.tap(t) : s.touchend(t)
                                        }
                                    };
                                    var u = function (t) {
                                        return !(8 === t || 46 === t || t >= 48 && t <= 57)
                                    };

                                    function c(o, r, i) {
                                        void 0 === i && (i = {}), s.stop();
                                        var u = n[o];
                                        if (void 0 === u) throw new Error(o + " is not valid");
                                        a     = o;
                                        var c = u(e, r);
                                        s = t(c, e), i.silent || e.map.fire(B, {mode: o}), e.store.setDirty(), e.store.render()
                                    }

                                    i.keydown = function (t) {
                                        "mapboxgl-canvas" === (t.srcElement || t.target).classList[0] && (8 !== t.keyCode && 46 !== t.keyCode || !e.options.controls.trash ? u(t.keyCode) ? s.keydown(t) : 49 === t.keyCode && e.options.controls.point ? c(A.DRAW_POINT) : 50 === t.keyCode && e.options.controls.line_string ? c(A.DRAW_LINE_STRING) : 51 === t.keyCode && e.options.controls.polygon && c(A.DRAW_POLYGON) : (t.preventDefault(), s.trash()))
                                    }, i.keyup = function (t) {
                                        u(t.keyCode) && s.keyup(t)
                                    }, i.zoomend = function () {
                                        e.store.changeZoom()
                                    }, i.data = function (t) {
                                        if ("style" === t.dataType) {
                                            var n = e.setup, o = e.map, r = e.options, i = e.store;
                                            r.styles.some((function (t) {
                                                return o.getLayer(t.id)
                                            })) || (n.addLayers(), i.setDirty(), i.render())
                                        }
                                    };
                                    var l = {trash: !1, combineFeatures: !1, uncombineFeatures: !1};
                                    return {
                                        start                  : function () {
                                            a = e.options.defaultMode, s = t(n[a](e), e)
                                        }, changeMode          : c, actionable: function (t) {
                                            var n = !1;
                                            Object.keys(t).forEach((function (e) {
                                                if (void 0 === l[e]) throw new Error("Invalid action type");
                                                l[e] !== t[e] && (n = !0), l[e] = t[e]
                                            })), n && e.map.fire($, {actions: l})
                                        }, currentModeName     : function () {
                                            return a
                                        }, currentModeRender   : function (t, e) {
                                            return s.render(t, e)
                                        }, fire                : function (t, e) {
                                            i[t] && i[t](e)
                                        }, addEventListeners   : function () {
                                            e.map.on("mousemove", i.mousemove), e.map.on("mousedown", i.mousedown), e.map.on("mouseup", i.mouseup), e.map.on("data", i.data), e.map.on("touchmove", i.touchmove), e.map.on("touchstart", i.touchstart), e.map.on("touchend", i.touchend), e.container.addEventListener("mouseout", i.mouseout), e.options.keybindings && (e.container.addEventListener("keydown", i.keydown), e.container.addEventListener("keyup", i.keyup))
                                        }, removeEventListeners: function () {
                                            e.map.off("mousemove", i.mousemove), e.map.off("mousedown", i.mousedown), e.map.off("mouseup", i.mouseup), e.map.off("data", i.data), e.map.off("touchmove", i.touchmove), e.map.off("touchstart", i.touchstart), e.map.off("touchend", i.touchend), e.container.removeEventListener("mouseout", i.mouseout), e.options.keybindings && (e.container.removeEventListener("keydown", i.keydown), e.container.removeEventListener("keyup", i.keyup))
                                        }, trash               : function (t) {
                                            s.trash(t)
                                        }, combineFeatures     : function () {
                                            s.combineFeatures()
                                        }, uncombineFeatures   : function () {
                                            s.uncombineFeatures()
                                        }, getMode             : function () {
                                            return a
                                        }
                                    }
                                }(e), e.ui = function (t) {
                                    var e = {}, n = null, o = {mode: null, feature: null, mouse: null}, r = {mode: null, feature: null, mouse: null};

                                    function i(t) {
                                        r = wt(r, t)
                                    }

                                    function a() {
                                        var e, n;
                                        if (t.container) {
                                            var i = [], a = [];
                                            Lt.forEach((function (t) {
                                                r[t] !== o[t] && (i.push(t + "-" + o[t]), null !== r[t] && a.push(t + "-" + r[t]))
                                            })), i.length > 0 && (e = t.container.classList).remove.apply(e, i), a.length > 0 && (n = t.container.classList).add.apply(n, a), o = wt(o, r)
                                        }
                                    }

                                    function m(t, e) {
                                        void 0 === e && (e = {});
                                        var o = document.createElement("button");
                                        return o.className = u + " " + e.className, o.setAttribute("title", e.title), e.container.appendChild(o), o.addEventListener("click", (function (o) {
                                            if (o.preventDefault(), o.stopPropagation(), o.target === n) return v(), void e.onDeactivate();
                                            b(t), e.onActivate()
                                        }), !0), o
                                    }

                                    function v() {
                                        n && (n.classList.remove(y), n = null)
                                    }

                                    function b(t) {
                                        v();
                                        var o = e[t];
                                        o && o && "trash" !== t && (o.classList.add(y), n = o)
                                    }

                                    return {
                                        setActiveButton : b, queueMapClasses: i, updateMapClasses: a, clearMapClasses: function () {
                                            i({mode: null, feature: null, mouse: null}), a()
                                        }, addButtons   : function () {
                                            var n = t.options.controls, o = document.createElement("div");
                                            return o.className = g + " " + s, n ? (n[E.LINE] && (e[E.LINE] = m(E.LINE, {
                                                container      : o, className: c, title: "LineString tool " + (t.options.keybindings ? "(l)" : ""), onActivate: function () {
                                                    return t.events.changeMode(A.DRAW_LINE_STRING)
                                                }, onDeactivate: function () {
                                                    return t.events.trash()
                                                }
                                            })), n[E.POLYGON] && (e[E.POLYGON] = m(E.POLYGON, {
                                                container      : o, className: l, title: "Polygon tool " + (t.options.keybindings ? "(p)" : ""), onActivate: function () {
                                                    return t.events.changeMode(A.DRAW_POLYGON)
                                                }, onDeactivate: function () {
                                                    return t.events.trash()
                                                }
                                            })), n[E.POINT] && (e[E.POINT] = m(E.POINT, {
                                                container      : o, className: d, title: "Marker tool " + (t.options.keybindings ? "(m)" : ""), onActivate: function () {
                                                    return t.events.changeMode(A.DRAW_POINT)
                                                }, onDeactivate: function () {
                                                    return t.events.trash()
                                                }
                                            })), n.trash && (e.trash = m("trash", {
                                                container: o, className: p, title: "Delete", onActivate: function () {
                                                    t.events.trash()
                                                }
                                            })), n.combine_features && (e.combine_features = m("combineFeatures", {
                                                container: o, className: f, title: "Combine", onActivate: function () {
                                                    t.events.combineFeatures()
                                                }
                                            })), n.uncombine_features && (e.uncombine_features = m("uncombineFeatures", {
                                                container: o, className: h, title: "Uncombine", onActivate: function () {
                                                    t.events.uncombineFeatures()
                                                }
                                            })), o) : o
                                        }, removeButtons: function () {
                                            Object.keys(e).forEach((function (t) {
                                                var n = e[t];
                                                n.parentNode && n.parentNode.removeChild(n), delete e[t]
                                            }))
                                        }
                                    }
                                }(e), e.container = i.getContainer(), e.store = new Mt(e), n = e.ui.addButtons(), e.options.boxSelect && (i.boxZoom.disable(), i.dragPan.disable(), i.dragPan.enable()), i.loaded() ? r.connect() : (i.on("load", r.connect), o = setInterval((function () {
                                    i.loaded() && r.connect()
                                }), 16)), e.events.start(), n
                            }, addLayers   : function () {
                                e.map.addSource(b, {data: {type: k, features: []}, type: "geojson"}), e.map.addSource(v, {data: {type: k, features: []}, type: "geojson"}), e.options.styles.forEach((function (t) {
                                    e.map.addLayer(t)
                                })), e.store.setDirty(!0), e.store.render()
                            }, removeLayers: function () {
                                e.options.styles.forEach((function (t) {
                                    e.map.getLayer(t.id) && e.map.removeLayer(t.id)
                                })), e.map.getSource(b) && e.map.removeSource(b), e.map.getSource(v) && e.map.removeSource(v)
                            }
                        };
                        return e.setup = r, r
                    }

                    function kt(t) {
                        return function (e) {
                            var n = e.featureTarget;
                            return !!n && !!n.properties && n.properties.meta === t
                        }
                    }

                    function Ft(t) {
                        return !!t.featureTarget && !!t.featureTarget.properties && t.featureTarget.properties.active === K && t.featureTarget.properties.meta === W
                    }

                    function Ot(t) {
                        return !!t.featureTarget && !!t.featureTarget.properties && t.featureTarget.properties.active === X && t.featureTarget.properties.meta === W
                    }

                    function Tt(t) {
                        return void 0 === t.featureTarget
                    }

                    function jt(t) {
                        var e = t.featureTarget;
                        return !!e && !!e.properties && e.properties.meta === Z
                    }

                    function At(t) {
                        return !!t.originalEvent && !0 === t.originalEvent.shiftKey
                    }

                    function Dt(t) {
                        return 27 === t.keyCode
                    }

                    function Nt(t) {
                        return 13 === t.keyCode
                    }

                    var Ut = Rt;

                    function Rt(t, e) {
                        this.x = t, this.y = e
                    }

                    function Bt(t, e) {
                        var n = e.getBoundingClientRect();
                        return new Ut(t.clientX - n.left - (e.clientLeft || 0), t.clientY - n.top - (e.clientTop || 0))
                    }

                    function $t(t, e, n, o) {
                        return {type: w, properties: {meta: Z, parent: t, coord_path: n, active: o ? K : X}, geometry: {type: P, coordinates: e}}
                    }

                    function Vt(t, e, n) {
                        void 0 === e && (e = {}), void 0 === n && (n = null);
                        var o, r = t.geometry, i = r.type, a = r.coordinates, s = t.properties && t.properties.id, u = [];

                        function c(t, n) {
                            var o = "", r = null;
                            t.forEach((function (t, i) {
                                var a = null != n ? n + "." + i : String(i), c = $t(s, t, a, l(a));
                                if (e.midpoints && r) {
                                    var d = function (t, e, n) {
                                        var o = e.geometry.coordinates, r = n.geometry.coordinates;
                                        if (o[1] > 85 || o[1] < -85 || r[1] > 85 || r[1] < -85) return null;
                                        var i = {lng: (o[0] + r[0]) / 2, lat: (o[1] + r[1]) / 2};
                                        return {type: w, properties: {meta: Y, parent: t, lng: i.lng, lat: i.lat, coord_path: n.properties.coord_path}, geometry: {type: P, coordinates: [i.lng, i.lat]}}
                                    }(s, r, c);
                                    d && u.push(d)
                                }
                                r     = c;
                                var p = JSON.stringify(t);
                                o !== p && u.push(c), 0 === i && (o = p)
                            }))
                        }

                        function l(t) {
                            return !!e.selectedPaths && -1 !== e.selectedPaths.indexOf(t)
                        }

                        return i === P ? u.push($t(s, a, n, l(n))) : i === I ? a.forEach((function (t, e) {
                            c(t, null !== n ? n + "." + e : String(e))
                        })) : i === L ? c(a, n) : 0 === i.indexOf(F) && (o = i.replace(F, ""), a.forEach((function (n, r) {
                            var i = {type: w, properties: t.properties, geometry: {type: o, coordinates: n}};
                            u     = u.concat(Vt(i, e, r))
                        }))), u
                    }

                    Rt.prototype = {
                        clone           : function () {
                            return new Rt(this.x, this.y)
                        }, add          : function (t) {
                            return this.clone()._add(t)
                        }, sub          : function (t) {
                            return this.clone()._sub(t)
                        }, multByPoint  : function (t) {
                            return this.clone()._multByPoint(t)
                        }, divByPoint   : function (t) {
                            return this.clone()._divByPoint(t)
                        }, mult         : function (t) {
                            return this.clone()._mult(t)
                        }, div          : function (t) {
                            return this.clone()._div(t)
                        }, rotate       : function (t) {
                            return this.clone()._rotate(t)
                        }, rotateAround : function (t, e) {
                            return this.clone()._rotateAround(t, e)
                        }, matMult      : function (t) {
                            return this.clone()._matMult(t)
                        }, unit         : function () {
                            return this.clone()._unit()
                        }, perp         : function () {
                            return this.clone()._perp()
                        }, round        : function () {
                            return this.clone()._round()
                        }, mag          : function () {
                            return Math.sqrt(this.x * this.x + this.y * this.y)
                        }, equals       : function (t) {
                            return this.x === t.x && this.y === t.y
                        }, dist         : function (t) {
                            return Math.sqrt(this.distSqr(t))
                        }, distSqr      : function (t) {
                            var e = t.x - this.x, n = t.y - this.y;
                            return e * e + n * n
                        }, angle        : function () {
                            return Math.atan2(this.y, this.x)
                        }, angleTo      : function (t) {
                            return Math.atan2(this.y - t.y, this.x - t.x)
                        }, angleWith    : function (t) {
                            return this.angleWithSep(t.x, t.y)
                        }, angleWithSep : function (t, e) {
                            return Math.atan2(this.x * e - this.y * t, this.x * t + this.y * e)
                        }, _matMult     : function (t) {
                            var e = t[0] * this.x + t[1] * this.y, n = t[2] * this.x + t[3] * this.y;
                            return this.x = e, this.y = n, this
                        }, _add         : function (t) {
                            return this.x += t.x, this.y += t.y, this
                        }, _sub         : function (t) {
                            return this.x -= t.x, this.y -= t.y, this
                        }, _mult        : function (t) {
                            return this.x *= t, this.y *= t, this
                        }, _div         : function (t) {
                            return this.x /= t, this.y /= t, this
                        }, _multByPoint : function (t) {
                            return this.x *= t.x, this.y *= t.y, this
                        }, _divByPoint  : function (t) {
                            return this.x /= t.x, this.y /= t.y, this
                        }, _unit        : function () {
                            return this._div(this.mag()), this
                        }, _perp        : function () {
                            var t = this.y;
                            return this.y = this.x, this.x = -t, this
                        }, _rotate      : function (t) {
                            var e = Math.cos(t), n = Math.sin(t), o = e * this.x - n * this.y, r = n * this.x + e * this.y;
                            return this.x = o, this.y = r, this
                        }, _rotateAround: function (t, e) {
                            var n = Math.cos(t), o = Math.sin(t), r = e.x + n * (this.x - e.x) - o * (this.y - e.y), i = e.y + o * (this.x - e.x) + n * (this.y - e.y);
                            return this.x = r, this.y = i, this
                        }, _round       : function () {
                            return this.x = Math.round(this.x), this.y = Math.round(this.y), this
                        }
                    }, Rt.convert = function (t) {
                        return t instanceof Rt ? t : Array.isArray(t) ? new Rt(t[0], t[1]) : t
                    };
                    var Jt = function (t) {
                        setTimeout((function () {
                            t.map && t.map.doubleClickZoom && t._ctx && t._ctx.store && t._ctx.store.getInitialConfigValue && t._ctx.store.getInitialConfigValue("doubleClickZoom") && t.map.doubleClickZoom.enable()
                        }), 0)
                    }, Gt  = function (t) {
                        setTimeout((function () {
                            t.map && t.map.doubleClickZoom && t.map.doubleClickZoom.disable()
                        }), 0)
                    }, zt  = function (t) {
                        if (!t || !t.type) return null;
                        var e = qt[t.type];
                        return e ? "geometry" === e ? {type: "FeatureCollection", features: [{type: "Feature", properties: {}, geometry: t}]} : "feature" === e ? {type: "FeatureCollection", features: [t]} : "featurecollection" === e ? t : void 0 : null
                    }, qt  = {Point: "geometry", MultiPoint: "geometry", LineString: "geometry", MultiLineString: "geometry", Polygon: "geometry", MultiPolygon: "geometry", GeometryCollection: "geometry", Feature: "feature", FeatureCollection: "featurecollection"};

                    function Wt(t) {
                        switch (t && t.type || null) {
                            case"FeatureCollection":
                                return t.features = t.features.reduce((function (t, e) {
                                    return t.concat(Wt(e))
                                }), []), t;
                            case"Feature":
                                return t.geometry ? Wt(t.geometry).map((function (e) {
                                    var n = {type: "Feature", properties: JSON.parse(JSON.stringify(t.properties)), geometry: e};
                                    return void 0 !== t.id && (n.id = t.id), n
                                })) : [t];
                            case"MultiPoint":
                                return t.coordinates.map((function (t) {
                                    return {type: "Point", coordinates: t}
                                }));
                            case"MultiPolygon":
                                return t.coordinates.map((function (t) {
                                    return {type: "Polygon", coordinates: t}
                                }));
                            case"MultiLineString":
                                return t.coordinates.map((function (t) {
                                    return {type: "LineString", coordinates: t}
                                }));
                            case"GeometryCollection":
                                return t.geometries.map(Wt).reduce((function (t, e) {
                                    return t.concat(e)
                                }), []);
                            case"Point":
                            case"Polygon":
                            case"LineString":
                                return [t]
                        }
                    }

                    var Yt  = function (t) {
                        if (!t) return [];
                        var e = Wt(zt(t)), n = [];
                        return e.features.forEach((function (t) {
                            t.geometry && (n = n.concat(function t(e) {
                                return Array.isArray(e) && e.length && "number" == typeof e[0] ? [e] : e.reduce((function (e, n) {
                                    return Array.isArray(n) && Array.isArray(n[0]) ? e.concat(t(n)) : (e.push(n), e)
                                }), [])
                            }(t.geometry.coordinates)))
                        })), n
                    }, Zt   = ct((function (t) {
                        var e = t.exports = function (t) {
                            return new n(t)
                        };

                        function n(t) {
                            this.value = t
                        }

                        function o(t, e, n) {
                            var o = [], a = [], l = !0;
                            return function t(d) {
                                var p = n ? r(d) : d, f = {}, h = !0, g = {
                                    node     : p, node_: d, path: [].concat(o), parent: a[a.length - 1], parents: a, key: o.slice(-1)[0], isRoot: 0 === o.length, level: o.length, circular: null, update: function (t, e) {
                                        g.isRoot || (g.parent.node[g.key] = t), g.node = t, e && (h = !1)
                                    }, delete: function (t) {
                                        delete g.parent.node[g.key], t && (h = !1)
                                    }, remove: function (t) {
                                        s(g.parent.node) ? g.parent.node.splice(g.key, 1) : delete g.parent.node[g.key], t && (h = !1)
                                    }, keys  : null, before: function (t) {
                                        f.before = t
                                    }, after : function (t) {
                                        f.after = t
                                    }, pre   : function (t) {
                                        f.pre = t
                                    }, post  : function (t) {
                                        f.post = t
                                    }, stop  : function () {
                                        l = !1
                                    }, block : function () {
                                        h = !1
                                    }
                                };
                                if (!l) return g;

                                function y() {
                                    if ("object" == typeof g.node && null !== g.node) {
                                        g.keys && g.node_ === g.node || (g.keys = i(g.node)), g.isLeaf = 0 == g.keys.length;
                                        for (var t = 0; t < a.length; t++) if (a[t].node_ === d) {
                                            g.circular = a[t];
                                            break
                                        }
                                    } else g.isLeaf = !0, g.keys = null;
                                    g.notLeaf = !g.isLeaf, g.notRoot = !g.isRoot
                                }

                                y();
                                var m = e.call(g, g.node);
                                return void 0 !== m && g.update && g.update(m), f.before && f.before.call(g, g.node), h ? ("object" != typeof g.node || null === g.node || g.circular || (a.push(g), y(), u(g.keys, (function (e, r) {
                                    o.push(e), f.pre && f.pre.call(g, g.node[e], e);
                                    var i = t(g.node[e]);
                                    n && c.call(g.node, e) && (g.node[e] = i.node), i.isLast = r == g.keys.length - 1, i.isFirst = 0 == r, f.post && f.post.call(g, i), o.pop()
                                })), a.pop()), f.after && f.after.call(g, g.node), g) : g
                            }(t).node
                        }

                        function r(t) {
                            if ("object" == typeof t && null !== t) {
                                var e;
                                if (s(t)) e = []; else if ("[object Date]" === a(t)) e = new Date(t.getTime ? t.getTime() : t); else if (function (t) {
                                    return "[object RegExp]" === a(t)
                                }(t)) e = new RegExp(t); else if (function (t) {
                                    return "[object Error]" === a(t)
                                }(t)) e = {message: t.message}; else if (function (t) {
                                    return "[object Boolean]" === a(t)
                                }(t)) e = new Boolean(t); else if (function (t) {
                                    return "[object Number]" === a(t)
                                }(t)) e = new Number(t); else if (function (t) {
                                    return "[object String]" === a(t)
                                }(t)) e = new String(t); else if (Object.create && Object.getPrototypeOf) e = Object.create(Object.getPrototypeOf(t)); else if (t.constructor === Object) e = {}; else {
                                    var n = t.constructor && t.constructor.prototype || t.__proto__ || {}, o = function () {
                                    };
                                    o.prototype = n, e = new o
                                }
                                return u(i(t), (function (n) {
                                    e[n] = t[n]
                                })), e
                            }
                            return t
                        }

                        n.prototype.get = function (t) {
                            for (var e = this.value, n = 0; n < t.length; n++) {
                                var o = t[n];
                                if (!e || !c.call(e, o)) {
                                    e = void 0;
                                    break
                                }
                                e = e[o]
                            }
                            return e
                        }, n.prototype.has = function (t) {
                            for (var e = this.value, n = 0; n < t.length; n++) {
                                var o = t[n];
                                if (!e || !c.call(e, o)) return !1;
                                e = e[o]
                            }
                            return !0
                        }, n.prototype.set = function (t, e) {
                            for (var n = this.value, o = 0; o < t.length - 1; o++) {
                                var r = t[o];
                                c.call(n, r) || (n[r] = {}), n = n[r]
                            }
                            return n[t[o]] = e, e
                        }, n.prototype.map = function (t) {
                            return o(this.value, t, !0)
                        }, n.prototype.forEach = function (t) {
                            return this.value = o(this.value, t, !1), this.value
                        }, n.prototype.reduce = function (t, e) {
                            var n = 1 === arguments.length, o = n ? this.value : e;
                            return this.forEach((function (e) {
                                this.isRoot && n || (o = t.call(this, o, e))
                            })), o
                        }, n.prototype.paths = function () {
                            var t = [];
                            return this.forEach((function (e) {
                                t.push(this.path)
                            })), t
                        }, n.prototype.nodes = function () {
                            var t = [];
                            return this.forEach((function (e) {
                                t.push(this.node)
                            })), t
                        }, n.prototype.clone = function () {
                            var t = [], e = [];
                            return function n(o) {
                                for (var a = 0; a < t.length; a++) if (t[a] === o) return e[a];
                                if ("object" == typeof o && null !== o) {
                                    var s = r(o);
                                    return t.push(o), e.push(s), u(i(o), (function (t) {
                                        s[t] = n(o[t])
                                    })), t.pop(), e.pop(), s
                                }
                                return o
                            }(this.value)
                        };
                        var i = Object.keys || function (t) {
                            var e = [];
                            for (var n in t) e.push(n);
                            return e
                        };

                        function a(t) {
                            return Object.prototype.toString.call(t)
                        }

                        var s = Array.isArray || function (t) {
                            return "[object Array]" === Object.prototype.toString.call(t)
                        }, u  = function (t, e) {
                            if (t.forEach) return t.forEach(e);
                            for (var n = 0; n < t.length; n++) e(t[n], n, t)
                        };
                        u(i(n.prototype), (function (t) {
                            e[t] = function (e) {
                                var o = [].slice.call(arguments, 1), r = new n(e);
                                return r[t].apply(r, o)
                            }
                        }));
                        var c = Object.hasOwnProperty || function (t, e) {
                            return e in t
                        }
                    })), Kt = Xt;

                    function Xt(t) {
                        if (!(this instanceof Xt)) return new Xt(t);
                        this._bbox = t || [1 / 0, 1 / 0, -1 / 0, -1 / 0], this._valid = !!t
                    }

                    Xt.prototype.include = function (t) {
                        return this._valid = !0, this._bbox[0] = Math.min(this._bbox[0], t[0]), this._bbox[1] = Math.min(this._bbox[1], t[1]), this._bbox[2] = Math.max(this._bbox[2], t[0]), this._bbox[3] = Math.max(this._bbox[3], t[1]), this
                    }, Xt.prototype.equals = function (t) {
                        var e;
                        return e = t instanceof Xt ? t.bbox() : t, this._bbox[0] == e[0] && this._bbox[1] == e[1] && this._bbox[2] == e[2] && this._bbox[3] == e[3]
                    }, Xt.prototype.center = function (t) {
                        return this._valid ? [(this._bbox[0] + this._bbox[2]) / 2, (this._bbox[1] + this._bbox[3]) / 2] : null
                    }, Xt.prototype.union = function (t) {
                        var e;
                        return this._valid = !0, e = t instanceof Xt ? t.bbox() : t, this._bbox[0] = Math.min(this._bbox[0], e[0]), this._bbox[1] = Math.min(this._bbox[1], e[1]), this._bbox[2] = Math.max(this._bbox[2], e[2]), this._bbox[3] = Math.max(this._bbox[3], e[3]), this
                    }, Xt.prototype.bbox = function () {
                        return this._valid ? this._bbox : null
                    }, Xt.prototype.contains = function (t) {
                        if (!t) return this._fastContains();
                        if (!this._valid) return null;
                        var e = t[0], n = t[1];
                        return this._bbox[0] <= e && this._bbox[1] <= n && this._bbox[2] >= e && this._bbox[3] >= n
                    }, Xt.prototype.intersect = function (t) {
                        return this._valid ? (e = t instanceof Xt ? t.bbox() : t, !(this._bbox[0] > e[2] || this._bbox[2] < e[0] || this._bbox[3] < e[1] || this._bbox[1] > e[3])) : null;
                        var e
                    }, Xt.prototype._fastContains = function () {
                        if (!this._valid) return new Function("return null;");
                        var t = "return " + this._bbox[0] + "<= ll[0] &&" + this._bbox[1] + "<= ll[1] &&" + this._bbox[2] + ">= ll[0] &&" + this._bbox[3] + ">= ll[1]";
                        return new Function("ll", t)
                    }, Xt.prototype.polygon = function () {
                        return this._valid ? {type: "Polygon", coordinates: [[[this._bbox[0], this._bbox[1]], [this._bbox[2], this._bbox[1]], [this._bbox[2], this._bbox[3]], [this._bbox[0], this._bbox[3]], [this._bbox[0], this._bbox[1]]]]} : null
                    };
                    var Ht = {features: ["FeatureCollection"], coordinates: ["Point", "MultiPoint", "LineString", "MultiLineString", "Polygon", "MultiPolygon"], geometry: ["Feature"], geometries: ["GeometryCollection"]}, Qt = Object.keys(Ht), te = function (t) {
                        return ee(t).bbox()
                    };

                    function ee(t) {
                        for (var e = Kt(), n = Yt(t), o = 0; o < n.length; o++) e.include(n[o]);
                        return e
                    }

                    function ne(t, e) {
                        var n = -90, o = 90, r = -90, i = 90, a = 270, s = -270;
                        t.forEach((function (t) {
                            var e = te(t), u = e[1], c = e[3], l = e[0], d = e[2];
                            u > n && (n = u), c < o && (o = c), c > r && (r = c), u < i && (i = u), l < a && (a = l), d > s && (s = d)
                        }));
                        var u = e;
                        return n + u.lat > 85 && (u.lat = 85 - n), r + u.lat > 90 && (u.lat = 90 - r), o + u.lat < -85 && (u.lat = -85 - o), i + u.lat < -90 && (u.lat = -90 - i), a + u.lng <= -270 && (u.lng += 360 * Math.ceil(Math.abs(u.lng) / 360)), s + u.lng >= 270 && (u.lng -= 360 * Math.ceil(Math.abs(u.lng) / 360)), u
                    }

                    function oe(t, e) {
                        var n = ne(t.map((function (t) {
                            return t.toGeoJSON()
                        })), e);
                        t.forEach((function (t) {
                            var e, o = t.getCoordinates(), r = function (t) {
                                var e = {lng: t[0] + n.lng, lat: t[1] + n.lat};
                                return [e.lng, e.lat]
                            }, i     = function (t) {
                                return t.map((function (t) {
                                    return r(t)
                                }))
                            };
                            t.type === P ? e = r(o) : t.type === L || t.type === O ? e = o.map(r) : t.type === I || t.type === T ? e = o.map(i) : t.type === j && (e = o.map((function (t) {
                                return t.map((function (t) {
                                    return i(t)
                                }))
                            }))), t.incomingCoords(e)
                        }))
                    }

                    te.polygon = function (t) {
                        return ee(t).polygon()
                    }, te.bboxify = function (t) {
                        return Zt(t).map((function (t) {
                            t && Qt.some((function (e) {
                                return !!t[e] && -1 !== Ht[e].indexOf(t.type)
                            })) && (t.bbox = ee(t).bbox(), this.update(t))
                        }))
                    };
                    var re = {
                        onSetup                    : function (t) {
                            var e = this, n = {dragMoveLocation: null, boxSelectStartLocation: null, boxSelectElement: void 0, boxSelecting: !1, canBoxSelect: !1, dragMoving: !1, canDragMove: !1, initiallySelectedFeatureIds: t.featureIds || []};
                            return this.setSelected(n.initiallySelectedFeatureIds.filter((function (t) {
                                return void 0 !== e.getFeature(t)
                            }))), this.fireActionable(), this.setActionableState({combineFeatures: !0, uncombineFeatures: !0, trash: !0}), n
                        }, fireUpdate              : function () {
                            this.map.fire(U, {
                                action: z, features: this.getSelected().map((function (t) {
                                    return t.toGeoJSON()
                                }))
                            })
                        }, fireActionable          : function () {
                            var t  = this, e = this.getSelected(), n = e.filter((function (e) {
                                return t.isInstanceOf("MultiFeature", e)
                            })), o = !1;
                            if (e.length > 1) {
                                o     = !0;
                                var r = e[0].type.replace("Multi", "");
                                e.forEach((function (t) {
                                    t.type.replace("Multi", "") !== r && (o = !1)
                                }))
                            }
                            var i = n.length > 0, a = e.length > 0;
                            this.setActionableState({combineFeatures: o, uncombineFeatures: i, trash: a})
                        }, getUniqueIds            : function (t) {
                            return t.length ? t.map((function (t) {
                                return t.properties.id
                            })).filter((function (t) {
                                return void 0 !== t
                            })).reduce((function (t, e) {
                                return t.add(e), t
                            }), new et).values() : []
                        }, stopExtendedInteractions: function (t) {
                            t.boxSelectElement && (t.boxSelectElement.parentNode && t.boxSelectElement.parentNode.removeChild(t.boxSelectElement), t.boxSelectElement = null), this.map.dragPan.enable(), t.boxSelecting = !1, t.canBoxSelect = !1, t.dragMoving = !1, t.canDragMove = !1
                        }, onStop                  : function () {
                            Jt(this)
                        }, onMouseMove             : function (t) {
                            return this.stopExtendedInteractions(t), !0
                        }, onMouseOut              : function (t) {
                            return !t.dragMoving || this.fireUpdate()
                        }
                    };
                    re.onTap = re.onClick = function (t, e) {
                        return Tt(e) ? this.clickAnywhere(t, e) : kt(Z)(e) ? this.clickOnVertex(t, e) : function (t) {
                            return !!t.featureTarget && !!t.featureTarget.properties && t.featureTarget.properties.meta === W
                        }(e) ? this.clickOnFeature(t, e) : void 0
                    }, re.clickAnywhere = function (t) {
                        var e = this, n = this.getSelectedIds();
                        n.length && (this.clearSelectedFeatures(), n.forEach((function (t) {
                            return e.doRender(t)
                        }))), Jt(this), this.stopExtendedInteractions(t)
                    }, re.clickOnVertex = function (t, e) {
                        this.changeMode(A.DIRECT_SELECT, {featureId: e.featureTarget.properties.parent, coordPath: e.featureTarget.properties.coord_path, startPos: e.lngLat}), this.updateUIClasses({mouse: S})
                    }, re.startOnActiveFeature = function (t, e) {
                        this.stopExtendedInteractions(t), this.map.dragPan.disable(), this.doRender(e.featureTarget.properties.id), t.canDragMove = !0, t.dragMoveLocation = e.lngLat
                    }, re.clickOnFeature = function (t, e) {
                        var n = this;
                        Gt(this), this.stopExtendedInteractions(t);
                        var o = At(e), r = this.getSelectedIds(), i = e.featureTarget.properties.id, a = this.isSelected(i);
                        if (!o && a && this.getFeature(i).type !== P) return this.changeMode(A.DIRECT_SELECT, {featureId: i});
                        a && o ? (this.deselect(i), this.updateUIClasses({mouse: C}), 1 === r.length && Jt(this)) : !a && o ? (this.select(i), this.updateUIClasses({mouse: S})) : a || o || (r.forEach((function (t) {
                            return n.doRender(t)
                        })), this.setSelected(i), this.updateUIClasses({mouse: S})), this.doRender(i)
                    }, re.onMouseDown = function (t, e) {
                        return Ft(e) ? this.startOnActiveFeature(t, e) : this.drawConfig.boxSelect && function (t) {
                            return !!t.originalEvent && !!t.originalEvent.shiftKey && 0 === t.originalEvent.button
                        }(e) ? this.startBoxSelect(t, e) : void 0
                    }, re.startBoxSelect = function (t, e) {
                        this.stopExtendedInteractions(t), this.map.dragPan.disable(), t.boxSelectStartLocation = Bt(e.originalEvent, this.map.getContainer()), t.canBoxSelect = !0
                    }, re.onTouchStart = function (t, e) {
                        if (Ft(e)) return this.startOnActiveFeature(t, e)
                    }, re.onDrag = function (t, e) {
                        return t.canDragMove ? this.dragMove(t, e) : this.drawConfig.boxSelect && t.canBoxSelect ? this.whileBoxSelect(t, e) : void 0
                    }, re.whileBoxSelect = function (t, e) {
                        t.boxSelecting = !0, this.updateUIClasses({mouse: _}), t.boxSelectElement || (t.boxSelectElement = document.createElement("div"), t.boxSelectElement.classList.add(m), this.map.getContainer().appendChild(t.boxSelectElement));
                        var n = Bt(e.originalEvent, this.map.getContainer()), o = Math.min(t.boxSelectStartLocation.x, n.x), r = Math.max(t.boxSelectStartLocation.x, n.x), i = Math.min(t.boxSelectStartLocation.y, n.y), a = Math.max(t.boxSelectStartLocation.y, n.y), s = "translate(" + o + "px, " + i + "px)";
                        t.boxSelectElement.style.transform = s, t.boxSelectElement.style.WebkitTransform = s, t.boxSelectElement.style.width = r - o + "px", t.boxSelectElement.style.height = a - i + "px"
                    }, re.dragMove = function (t, e) {
                        t.dragMoving = !0, e.originalEvent.stopPropagation();
                        var n = {lng: e.lngLat.lng - t.dragMoveLocation.lng, lat: e.lngLat.lat - t.dragMoveLocation.lat};
                        oe(this.getSelected(), n), t.dragMoveLocation = e.lngLat
                    }, re.onMouseUp = function (t, e) {
                        var n = this;
                        if (t.dragMoving) this.fireUpdate(); else if (t.boxSelecting) {
                            var o = [t.boxSelectStartLocation, Bt(e.originalEvent, this.map.getContainer())], r = this.featuresAt(null, o, "click"), i = this.getUniqueIds(r).filter((function (t) {
                                return !n.isSelected(t)
                            }));
                            i.length && (this.select(i), i.forEach((function (t) {
                                return n.doRender(t)
                            })), this.updateUIClasses({mouse: S}))
                        }
                        this.stopExtendedInteractions(t)
                    }, re.toDisplayFeatures = function (t, e, n) {
                        e.properties.active = this.isSelected(e.properties.id) ? K : X, n(e), this.fireActionable(), e.properties.active === K && e.geometry.type !== P && Vt(e).forEach(n)
                    }, re.onTrash = function () {
                        this.deleteFeature(this.getSelectedIds()), this.fireActionable()
                    }, re.onCombineFeatures = function () {
                        var t = this.getSelected();
                        if (!(0 === t.length || t.length < 2)) {
                            for (var e = [], n = [], o = t[0].type.replace("Multi", ""), r = 0; r < t.length; r++) {
                                var i = t[r];
                                if (i.type.replace("Multi", "") !== o) return;
                                i.type.includes("Multi") ? i.getCoordinates().forEach((function (t) {
                                    e.push(t)
                                })) : e.push(i.getCoordinates()), n.push(i.toGeoJSON())
                            }
                            if (n.length > 1) {
                                var a = this.newFeature({type: w, properties: n[0].properties, geometry: {type: "Multi" + o, coordinates: e}});
                                this.addFeature(a), this.deleteFeature(this.getSelectedIds(), {silent: !0}), this.setSelected([a.id]), this.map.fire(J, {createdFeatures: [a.toGeoJSON()], deletedFeatures: n})
                            }
                            this.fireActionable()
                        }
                    }, re.onUncombineFeatures = function () {
                        var t = this, e = this.getSelected();
                        if (0 !== e.length) {
                            for (var n = [], o = [], r = function (r) {
                                var i = e[r];
                                t.isInstanceOf("MultiFeature", i) && (i.getFeatures().forEach((function (e) {
                                    t.addFeature(e), e.properties = i.properties, n.push(e.toGeoJSON()), t.select([e.id])
                                })), t.deleteFeature(i.id, {silent: !0}), o.push(i.toGeoJSON()))
                            }, i       = 0; i < e.length; i++) r(i);
                            n.length > 1 && this.map.fire(G, {createdFeatures: n, deletedFeatures: o}), this.fireActionable()
                        }
                    };
                    var ie = kt(Z), ae = kt(Y), se = {
                        fireUpdate           : function () {
                            this.map.fire(U, {
                                action: q, features: this.getSelected().map((function (t) {
                                    return t.toGeoJSON()
                                }))
                            })
                        }, fireActionable    : function (t) {
                            this.setActionableState({combineFeatures: !1, uncombineFeatures: !1, trash: t.selectedCoordPaths.length > 0})
                        }, startDragging     : function (t, e) {
                            this.map.dragPan.disable(), t.canDragMove = !0, t.dragMoveLocation = e.lngLat
                        }, stopDragging      : function (t) {
                            this.map.dragPan.enable(), t.dragMoving = !1, t.canDragMove = !1, t.dragMoveLocation = null
                        }, onVertex          : function (t, e) {
                            this.startDragging(t, e);
                            var n = e.featureTarget.properties, o = t.selectedCoordPaths.indexOf(n.coord_path);
                            At(e) || -1 !== o ? At(e) && -1 === o && t.selectedCoordPaths.push(n.coord_path) : t.selectedCoordPaths = [n.coord_path];
                            var r = this.pathsToCoordinates(t.featureId, t.selectedCoordPaths);
                            this.setSelectedCoordinates(r)
                        }, onMidpoint        : function (t, e) {
                            this.startDragging(t, e);
                            var n = e.featureTarget.properties;
                            t.feature.addCoordinate(n.coord_path, n.lng, n.lat), this.fireUpdate(), t.selectedCoordPaths = [n.coord_path]
                        }, pathsToCoordinates: function (t, e) {
                            return e.map((function (e) {
                                return {feature_id: t, coord_path: e}
                            }))
                        }, onFeature         : function (t, e) {
                            0 === t.selectedCoordPaths.length ? this.startDragging(t, e) : this.stopDragging(t)
                        }, dragFeature       : function (t, e, n) {
                            oe(this.getSelected(), n), t.dragMoveLocation = e.lngLat
                        }, dragVertex        : function (t, e, n) {
                            for (var o = t.selectedCoordPaths.map((function (e) {
                                return t.feature.getCoordinate(e)
                            })), r     = ne(o.map((function (t) {
                                return {type: w, properties: {}, geometry: {type: P, coordinates: t}}
                            })), n), i = 0; i < o.length; i++) {
                                var a = o[i];
                                t.feature.updateCoordinate(t.selectedCoordPaths[i], a[0] + r.lng, a[1] + r.lat)
                            }
                        }, clickNoTarget     : function () {
                            this.changeMode(A.SIMPLE_SELECT)
                        }, clickInactive     : function () {
                            this.changeMode(A.SIMPLE_SELECT)
                        }, clickActiveFeature: function (t) {
                            t.selectedCoordPaths = [], this.clearSelectedCoordinates(), t.feature.changed()
                        }, onSetup           : function (t) {
                            var e = t.featureId, n = this.getFeature(e);
                            if (!n) throw new Error("You must provide a featureId to enter direct_select mode");
                            if (n.type === P) throw new TypeError("direct_select mode doesn't handle point features");
                            var o = {featureId: e, feature: n, dragMoveLocation: t.startPos || null, dragMoving: !1, canDragMove: !1, selectedCoordPaths: t.coordPath ? [t.coordPath] : []};
                            return this.setSelectedCoordinates(this.pathsToCoordinates(e, o.selectedCoordPaths)), this.setSelected(e), Gt(this), this.setActionableState({trash: !0}), o
                        }, onStop            : function () {
                            Jt(this), this.clearSelectedCoordinates()
                        }, toDisplayFeatures : function (t, e, n) {
                            t.featureId === e.properties.id ? (e.properties.active = K, n(e), Vt(e, {map: this.map, midpoints: !0, selectedPaths: t.selectedCoordPaths}).forEach(n)) : (e.properties.active = X, n(e)), this.fireActionable(t)
                        }, onTrash           : function (t) {
                            t.selectedCoordPaths.sort((function (t, e) {
                                return e.localeCompare(t, "en", {numeric: !0})
                            })).forEach((function (e) {
                                return t.feature.removeCoordinate(e)
                            })), this.fireUpdate(), t.selectedCoordPaths = [], this.clearSelectedCoordinates(), this.fireActionable(t), !1 === t.feature.isValid() && (this.deleteFeature([t.featureId]), this.changeMode(A.SIMPLE_SELECT, {}))
                        }, onMouseMove       : function (t, e) {
                            var n = Ft(e), o = ie(e), r = 0 === t.selectedCoordPaths.length;
                            return n && r || o && !r ? this.updateUIClasses({mouse: S}) : this.updateUIClasses({mouse: M}), this.stopDragging(t), !0
                        }, onMouseOut        : function (t) {
                            return t.dragMoving && this.fireUpdate(), !0
                        }
                    };
                    se.onTouchStart = se.onMouseDown = function (t, e) {
                        return ie(e) ? this.onVertex(t, e) : Ft(e) ? this.onFeature(t, e) : ae(e) ? this.onMidpoint(t, e) : void 0
                    }, se.onDrag = function (t, e) {
                        if (!0 === t.canDragMove) {
                            t.dragMoving = !0, e.originalEvent.stopPropagation();
                            var n = {lng: e.lngLat.lng - t.dragMoveLocation.lng, lat: e.lngLat.lat - t.dragMoveLocation.lat};
                            t.selectedCoordPaths.length > 0 ? this.dragVertex(t, e, n) : this.dragFeature(t, e, n), t.dragMoveLocation = e.lngLat
                        }
                    }, se.onClick = function (t, e) {
                        return Tt(e) ? this.clickNoTarget(t, e) : Ft(e) ? this.clickActiveFeature(t, e) : Ot(e) ? this.clickInactive(t, e) : void this.stopDragging(t)
                    }, se.onTap = function (t, e) {
                        return Tt(e) ? this.clickNoTarget(t, e) : Ft(e) ? this.clickActiveFeature(t, e) : Ot(e) ? this.clickInactive(t, e) : void 0
                    }, se.onTouchEnd = se.onMouseUp = function (t) {
                        t.dragMoving && this.fireUpdate(), this.stopDragging(t)
                    };
                    var ue = {};

                    function ce(t, e) {
                        return !!t.lngLat && t.lngLat.lng === e[0] && t.lngLat.lat === e[1]
                    }

                    ue.onSetup = function () {
                        var t = this.newFeature({type: w, properties: {}, geometry: {type: P, coordinates: []}});
                        return this.addFeature(t), this.clearSelectedFeatures(), this.updateUIClasses({mouse: _}), this.activateUIButton(E.POINT), this.setActionableState({trash: !0}), {point: t}
                    }, ue.stopDrawingAndRemove = function (t) {
                        this.deleteFeature([t.point.id], {silent: !0}), this.changeMode(A.SIMPLE_SELECT)
                    }, ue.onTap = ue.onClick = function (t, e) {
                        this.updateUIClasses({mouse: S}), t.point.updateCoordinate("", e.lngLat.lng, e.lngLat.lat), this.map.fire(D, {features: [t.point.toGeoJSON()]}), this.changeMode(A.SIMPLE_SELECT, {featureIds: [t.point.id]})
                    }, ue.onStop = function (t) {
                        this.activateUIButton(), t.point.getCoordinate().length || this.deleteFeature([t.point.id], {silent: !0})
                    }, ue.toDisplayFeatures = function (t, e, n) {
                        var o = e.properties.id === t.point.id;
                        if (e.properties.active = o ? K : X, !o) return n(e)
                    }, ue.onTrash = ue.stopDrawingAndRemove, ue.onKeyUp = function (t, e) {
                        if (Dt(e) || Nt(e)) return this.stopDrawingAndRemove(t, e)
                    };
                    var le = {
                        onSetup         : function () {
                            var t = this.newFeature({type: w, properties: {}, geometry: {type: I, coordinates: [[]]}});
                            return this.addFeature(t), this.clearSelectedFeatures(), Gt(this), this.updateUIClasses({mouse: _}), this.activateUIButton(E.POLYGON), this.setActionableState({trash: !0}), {polygon: t, currentVertexPosition: 0}
                        }, clickAnywhere: function (t, e) {
                            if (t.currentVertexPosition > 0 && ce(e, t.polygon.coordinates[0][t.currentVertexPosition - 1])) return this.changeMode(A.SIMPLE_SELECT, {featureIds: [t.polygon.id]});
                            this.updateUIClasses({mouse: _}), t.polygon.updateCoordinate("0." + t.currentVertexPosition, e.lngLat.lng, e.lngLat.lat), t.currentVertexPosition++, t.polygon.updateCoordinate("0." + t.currentVertexPosition, e.lngLat.lng, e.lngLat.lat)
                        }, clickOnVertex: function (t) {
                            return this.changeMode(A.SIMPLE_SELECT, {featureIds: [t.polygon.id]})
                        }, onMouseMove  : function (t, e) {
                            t.polygon.updateCoordinate("0." + t.currentVertexPosition, e.lngLat.lng, e.lngLat.lat), jt(e) && this.updateUIClasses({mouse: C})
                        }
                    };
                    le.onTap = le.onClick = function (t, e) {
                        return jt(e) ? this.clickOnVertex(t, e) : this.clickAnywhere(t, e)
                    }, le.onKeyUp = function (t, e) {
                        Dt(e) ? (this.deleteFeature([t.polygon.id], {silent: !0}), this.changeMode(A.SIMPLE_SELECT)) : Nt(e) && this.changeMode(A.SIMPLE_SELECT, {featureIds: [t.polygon.id]})
                    }, le.onStop = function (t) {
                        this.updateUIClasses({mouse: M}), Jt(this), this.activateUIButton(), void 0 !== this.getFeature(t.polygon.id) && (t.polygon.removeCoordinate("0." + t.currentVertexPosition), t.polygon.isValid() ? this.map.fire(D, {features: [t.polygon.toGeoJSON()]}) : (this.deleteFeature([t.polygon.id], {silent: !0}), this.changeMode(A.SIMPLE_SELECT, {}, {silent: !0})))
                    }, le.toDisplayFeatures = function (t, e, n) {
                        var o = e.properties.id === t.polygon.id;
                        if (e.properties.active = o ? K : X, !o) return n(e);
                        if (0 !== e.geometry.coordinates.length) {
                            var r = e.geometry.coordinates[0].length;
                            if (!(r < 3)) {
                                if (e.properties.meta = W, n($t(t.polygon.id, e.geometry.coordinates[0][0], "0.0", !1)), r > 3) {
                                    var i = e.geometry.coordinates[0].length - 3;
                                    n($t(t.polygon.id, e.geometry.coordinates[0][i], "0." + i, !1))
                                }
                                if (r <= 4) {
                                    var a = [[e.geometry.coordinates[0][0][0], e.geometry.coordinates[0][0][1]], [e.geometry.coordinates[0][1][0], e.geometry.coordinates[0][1][1]]];
                                    if (n({type: w, properties: e.properties, geometry: {coordinates: a, type: L}}), 3 === r) return
                                }
                                return n(e)
                            }
                        }
                    }, le.onTrash = function (t) {
                        this.deleteFeature([t.polygon.id], {silent: !0}), this.changeMode(A.SIMPLE_SELECT)
                    };
                    var de = {
                        onSetup         : function (t) {
                            var e, n, o = (t = t || {}).featureId, r = "forward";
                            if (o) {
                                if (!(e = this.getFeature(o))) throw new Error("Could not find a feature with the provided featureId");
                                var i = t.from;
                                if (i && "Feature" === i.type && i.geometry && "Point" === i.geometry.type && (i = i.geometry), i && "Point" === i.type && i.coordinates && 2 === i.coordinates.length && (i = i.coordinates), !i || !Array.isArray(i)) throw new Error("Please use the `from` property to indicate which point to continue the line from");
                                var a = e.coordinates.length - 1;
                                if (e.coordinates[a][0] === i[0] && e.coordinates[a][1] === i[1]) n = a + 1, e.addCoordinate.apply(e, [n].concat(e.coordinates[a])); else {
                                    if (e.coordinates[0][0] !== i[0] || e.coordinates[0][1] !== i[1]) throw new Error("`from` should match the point at either the start or the end of the provided LineString");
                                    r = "backwards", n = 0, e.addCoordinate.apply(e, [n].concat(e.coordinates[0]))
                                }
                            } else e = this.newFeature({type: w, properties: {}, geometry: {type: L, coordinates: []}}), n = 0, this.addFeature(e);
                            return this.clearSelectedFeatures(), Gt(this), this.updateUIClasses({mouse: _}), this.activateUIButton(E.LINE), this.setActionableState({trash: !0}), {line: e, currentVertexPosition: n, direction: r}
                        }, clickAnywhere: function (t, e) {
                            if (t.currentVertexPosition > 0 && ce(e, t.line.coordinates[t.currentVertexPosition - 1]) || "backwards" === t.direction && ce(e, t.line.coordinates[t.currentVertexPosition + 1])) return this.changeMode(A.SIMPLE_SELECT, {featureIds: [t.line.id]});
                            this.updateUIClasses({mouse: _}), t.line.updateCoordinate(t.currentVertexPosition, e.lngLat.lng, e.lngLat.lat), "forward" === t.direction ? (t.currentVertexPosition++, t.line.updateCoordinate(t.currentVertexPosition, e.lngLat.lng, e.lngLat.lat)) : t.line.addCoordinate(0, e.lngLat.lng, e.lngLat.lat)
                        }, clickOnVertex: function (t) {
                            return this.changeMode(A.SIMPLE_SELECT, {featureIds: [t.line.id]})
                        }, onMouseMove  : function (t, e) {
                            t.line.updateCoordinate(t.currentVertexPosition, e.lngLat.lng, e.lngLat.lat), jt(e) && this.updateUIClasses({mouse: C})
                        }
                    };
                    de.onTap = de.onClick = function (t, e) {
                        if (jt(e)) return this.clickOnVertex(t, e);
                        this.clickAnywhere(t, e)
                    }, de.onKeyUp = function (t, e) {
                        Nt(e) ? this.changeMode(A.SIMPLE_SELECT, {featureIds: [t.line.id]}) : Dt(e) && (this.deleteFeature([t.line.id], {silent: !0}), this.changeMode(A.SIMPLE_SELECT))
                    }, de.onStop = function (t) {
                        Jt(this), this.activateUIButton(), void 0 !== this.getFeature(t.line.id) && (t.line.removeCoordinate("" + t.currentVertexPosition), t.line.isValid() ? this.map.fire(D, {features: [t.line.toGeoJSON()]}) : (this.deleteFeature([t.line.id], {silent: !0}), this.changeMode(A.SIMPLE_SELECT, {}, {silent: !0})))
                    }, de.onTrash = function (t) {
                        this.deleteFeature([t.line.id], {silent: !0}), this.changeMode(A.SIMPLE_SELECT)
                    }, de.toDisplayFeatures = function (t, e, n) {
                        var o = e.properties.id === t.line.id;
                        if (e.properties.active = o ? K : X, !o) return n(e);
                        e.geometry.coordinates.length < 2 || (e.properties.meta = W, n($t(t.line.id, e.geometry.coordinates["forward" === t.direction ? e.geometry.coordinates.length - 2 : 1], "" + ("forward" === t.direction ? e.geometry.coordinates.length - 2 : 1), !1)), n(e))
                    };
                    var pe = {simple_select: re, direct_select: se, draw_point: ue, draw_polygon: le, draw_line_string: de}, fe = {
                        defaultMode: A.SIMPLE_SELECT, keybindings: !0, touchEnabled: !0, clickBuffer: 2, touchBuffer: 25, boxSelect: !0, displayControlsDefault: !0, styles: [
                            {id: "gl-draw-polygon-fill-inactive", type: "fill", filter: ["all", ["==", "active", "false"], ["==", "$type", "Polygon"], ["!=", "mode", "static"]], paint: {"fill-color": "#3bb2d0", "fill-outline-color": "#3bb2d0", "fill-opacity": .1}}, {
                                id    : "gl-draw-polygon-fill-active",
                                type  : "fill",
                                filter: ["all", ["==", "active", "true"], ["==", "$type", "Polygon"]],
                                paint : {"fill-color": "#fbb03b", "fill-outline-color": "#fbb03b", "fill-opacity": .1}
                            }, {id: "gl-draw-polygon-midpoint", type: "circle", filter: ["all", ["==", "$type", "Point"], ["==", "meta", "midpoint"]], paint: {"circle-radius": 3, "circle-color": "#fbb03b"}}, {
                                id    : "gl-draw-polygon-stroke-inactive",
                                type  : "line",
                                filter: ["all", ["==", "active", "false"], ["==", "$type", "Polygon"], ["!=", "mode", "static"]],
                                layout: {"line-cap": "round", "line-join": "round"},
                                paint : {"line-color": "#3bb2d0", "line-width": 2}
                            }, {id: "gl-draw-polygon-stroke-active", type: "line", filter: ["all", ["==", "active", "true"], ["==", "$type", "Polygon"]], layout: {"line-cap": "round", "line-join": "round"}, paint: {"line-color": "#fbb03b", "line-dasharray": [.2, 2], "line-width": 2}}, {
                                id    : "gl-draw-line-inactive",
                                type  : "line",
                                filter: ["all", ["==", "active", "false"], ["==", "$type", "LineString"], ["!=", "mode", "static"]],
                                layout: {"line-cap": "round", "line-join": "round"},
                                paint : {"line-color": "#3bb2d0", "line-width": 2}
                            }, {id: "gl-draw-line-active", type: "line", filter: ["all", ["==", "$type", "LineString"], ["==", "active", "true"]], layout: {"line-cap": "round", "line-join": "round"}, paint: {"line-color": "#fbb03b", "line-dasharray": [.2, 2], "line-width": 2}}, {
                                id    : "gl-draw-polygon-and-line-vertex-stroke-inactive",
                                type  : "circle",
                                filter: ["all", ["==", "meta", "vertex"], ["==", "$type", "Point"], ["!=", "mode", "static"]],
                                paint : {"circle-radius": 5, "circle-color": "#fff"}
                            }, {id: "gl-draw-polygon-and-line-vertex-inactive", type: "circle", filter: ["all", ["==", "meta", "vertex"], ["==", "$type", "Point"], ["!=", "mode", "static"]], paint: {"circle-radius": 3, "circle-color": "#fbb03b"}}, {
                                id    : "gl-draw-point-point-stroke-inactive",
                                type  : "circle",
                                filter: ["all", ["==", "active", "false"], ["==", "$type", "Point"], ["==", "meta", "feature"], ["!=", "mode", "static"]],
                                paint : {"circle-radius": 5, "circle-opacity": 1, "circle-color": "#fff"}
                            }, {id: "gl-draw-point-inactive", type: "circle", filter: ["all", ["==", "active", "false"], ["==", "$type", "Point"], ["==", "meta", "feature"], ["!=", "mode", "static"]], paint: {"circle-radius": 3, "circle-color": "#3bb2d0"}}, {id: "gl-draw-point-stroke-active", type: "circle", filter: ["all", ["==", "$type", "Point"], ["==", "active", "true"], ["!=", "meta", "midpoint"]], paint: {"circle-radius": 7, "circle-color": "#fff"}}, {
                                id    : "gl-draw-point-active",
                                type  : "circle",
                                filter: ["all", ["==", "$type", "Point"], ["!=", "meta", "midpoint"], ["==", "active", "true"]],
                                paint : {
                                    "circle-radius": 5,
                                    "circle-color" : "#fbb03b"
                                }
                            }, {id: "gl-draw-polygon-fill-static", type: "fill", filter: ["all", ["==", "mode", "static"], ["==", "$type", "Polygon"]], paint: {"fill-color": "#404040", "fill-outline-color": "#404040", "fill-opacity": .1}}, {id: "gl-draw-polygon-stroke-static", type: "line", filter: ["all", ["==", "mode", "static"], ["==", "$type", "Polygon"]], layout: {"line-cap": "round", "line-join": "round"}, paint: {"line-color": "#404040", "line-width": 2}}, {
                                id    : "gl-draw-line-static",
                                type  : "line",
                                filter: ["all", ["==", "mode", "static"], ["==", "$type", "LineString"]],
                                layout: {
                                    "line-cap" : "round",
                                    "line-join": "round"
                                },
                                paint : {
                                    "line-color": "#404040",
                                    "line-width": 2
                                }
                            }, {id: "gl-draw-point-static", type: "circle", filter: ["all", ["==", "mode", "static"], ["==", "$type", "Point"]], paint: {"circle-radius": 5, "circle-color": "#404040"}}
                        ], modes   : pe, controls: {}, userProperties: !1
                    }, he  = {point: !0, line_string: !0, polygon: !0, trash: !0, combine_features: !0, uncombine_features: !0}, ge = {point: !1, line_string: !1, polygon: !1, trash: !1, combine_features: !1, uncombine_features: !1};

                    function ye(t, e) {
                        return t.map((function (t) {
                            return t.source ? t : wt(t, {id: t.id + "." + e, source: "hot" === e ? v : b})
                        }))
                    }

                    var me  = ct((function (t, n) {
                        var o = "[object Arguments]", r = "[object Map]", i = "[object Object]", a = "[object Set]", s = /^\[object .+?Constructor\]$/, u = /^(?:0|[1-9]\d*)$/, c = {};
                        c["[object Float32Array]"] = c["[object Float64Array]"] = c["[object Int8Array]"] = c["[object Int16Array]"] = c["[object Int32Array]"] = c["[object Uint8Array]"] = c["[object Uint8ClampedArray]"] = c["[object Uint16Array]"] = c["[object Uint32Array]"] = !0, c[o] = c["[object Array]"] = c["[object ArrayBuffer]"] = c["[object Boolean]"] = c["[object DataView]"] = c["[object Date]"] = c["[object Error]"] = c["[object Function]"] = c[r] = c["[object Number]"] = c[i] = c["[object RegExp]"] = c[a] = c["[object String]"] = c["[object WeakMap]"] = !1;
                        var l  = "object" == typeof e && e && e.Object === Object && e, d = "object" == typeof self && self && self.Object === Object && self, p = l || d || Function("return this")(), f = n && !n.nodeType && n, h = f && t && !t.nodeType && t, g = h && h.exports === f, y = g && l.process, m = function () {
                            try {
                                return y && y.binding && y.binding("util")
                            } catch (t) {
                            }
                        }(), v = m && m.isTypedArray;

                        function b(t, e) {
                            for (var n = -1, o = null == t ? 0 : t.length; ++n < o;) if (e(t[n], n, t)) return !0;
                            return !1
                        }

                        function _(t) {
                            var e = -1, n = Array(t.size);
                            return t.forEach((function (t, o) {
                                n[++e] = [o, t]
                            })), n
                        }

                        function S(t) {
                            var e = -1, n = Array(t.size);
                            return t.forEach((function (t) {
                                n[++e] = t
                            })), n
                        }

                        var x, C, M, E = Array.prototype, w = Function.prototype, I = Object.prototype, L = p["__core-js_shared__"], P = w.toString, k = I.hasOwnProperty, F = (x = /[^.]+$/.exec(L && L.keys && L.keys.IE_PROTO || "")) ? "Symbol(src)_1." + x : "", O = I.toString, T = RegExp("^" + P.call(k).replace(/[\\^$.*+?()[\]{}|]/g, "\\$&").replace(/hasOwnProperty|(function).*?(?=\\\()| for .+?(?=\\\])/g, "$1.*?") + "$"), j = g ? p.Buffer : void 0, A = p.Symbol, D = p.Uint8Array,
                            N = I.propertyIsEnumerable, U = E.splice, R = A ? A.toStringTag : void 0, B = Object.getOwnPropertySymbols, $ = j ? j.isBuffer : void 0, V = (C = Object.keys, M = Object, function (t) {
                                return C(M(t))
                            }), J = mt(p, "DataView"), G = mt(p, "Map"), z = mt(p, "Promise"), q = mt(p, "Set"), W = mt(p, "WeakMap"), Y = mt(Object, "create"), Z = St(J), K = St(G), X = St(z), H = St(q), Q = St(W), tt = A ? A.prototype : void 0, et = tt ? tt.valueOf : void 0;

                        function nt(t) {
                            var e = -1, n = null == t ? 0 : t.length;
                            for (this.clear(); ++e < n;) {
                                var o = t[e];
                                this.set(o[0], o[1])
                            }
                        }

                        function ot(t) {
                            var e = -1, n = null == t ? 0 : t.length;
                            for (this.clear(); ++e < n;) {
                                var o = t[e];
                                this.set(o[0], o[1])
                            }
                        }

                        function rt(t) {
                            var e = -1, n = null == t ? 0 : t.length;
                            for (this.clear(); ++e < n;) {
                                var o = t[e];
                                this.set(o[0], o[1])
                            }
                        }

                        function it(t) {
                            var e = -1, n = null == t ? 0 : t.length;
                            for (this.__data__ = new rt; ++e < n;) this.add(t[e])
                        }

                        function at(t) {
                            var e     = this.__data__ = new ot(t);
                            this.size = e.size
                        }

                        function st(t, e) {
                            var n                       = Mt(t), o = !n && Ct(t), r = !n && !o && Et(t), i = !n && !o && !r && kt(t), a = n || o || r || i, s = a ? function (t, e) {
                                for (var n = -1, o = Array(t); ++n < t;) o[n] = e(n);
                                return o
                            }(t.length, String) : [], u = s.length;
                            for (var c in t) !e && !k.call(t, c) || a && ("length" == c || r && ("offset" == c || "parent" == c) || i && ("buffer" == c || "byteLength" == c || "byteOffset" == c) || _t(c, u)) || s.push(c);
                            return s
                        }

                        function ut(t, e) {
                            for (var n = t.length; n--;) if (xt(t[n][0], e)) return n;
                            return -1
                        }

                        function ct(t) {
                            return null == t ? void 0 === t ? "[object Undefined]" : "[object Null]" : R && R in Object(t) ? function (t) {
                                var e = k.call(t, R), n = t[R];
                                try {
                                    t[R]  = void 0;
                                    var o = !0
                                } catch (t) {
                                }
                                var r = O.call(t);
                                return o && (e ? t[R] = n : delete t[R]), r
                            }(t) : function (t) {
                                return O.call(t)
                            }(t)
                        }

                        function lt(t) {
                            return Pt(t) && ct(t) == o
                        }

                        function dt(t, e, n, s, u) {
                            return t === e || (null == t || null == e || !Pt(t) && !Pt(e) ? t != t && e != e : function (t, e, n, s, u, c) {
                                var l = Mt(t), d = Mt(e), p = l ? "[object Array]" : bt(t), f = d ? "[object Array]" : bt(e), h = (p = p == o ? i : p) == i, g = (f = f == o ? i : f) == i, y = p == f;
                                if (y && Et(t)) {
                                    if (!Et(e)) return !1;
                                    l = !0, h = !1
                                }
                                if (y && !h) return c || (c = new at), l || kt(t) ? ht(t, e, n, s, u, c) : function (t, e, n, o, i, s, u) {
                                    switch (n) {
                                        case"[object DataView]":
                                            if (t.byteLength != e.byteLength || t.byteOffset != e.byteOffset) return !1;
                                            t = t.buffer, e = e.buffer;
                                        case"[object ArrayBuffer]":
                                            return !(t.byteLength != e.byteLength || !s(new D(t), new D(e)));
                                        case"[object Boolean]":
                                        case"[object Date]":
                                        case"[object Number]":
                                            return xt(+t, +e);
                                        case"[object Error]":
                                            return t.name == e.name && t.message == e.message;
                                        case"[object RegExp]":
                                        case"[object String]":
                                            return t == e + "";
                                        case r:
                                            var c = _;
                                        case a:
                                            var l = 1 & o;
                                            if (c || (c = S), t.size != e.size && !l) return !1;
                                            var d = u.get(t);
                                            if (d) return d == e;
                                            o |= 2, u.set(t, e);
                                            var p = ht(c(t), c(e), o, i, s, u);
                                            return u.delete(t), p;
                                        case"[object Symbol]":
                                            if (et) return et.call(t) == et.call(e)
                                    }
                                    return !1
                                }(t, e, p, n, s, u, c);
                                if (!(1 & n)) {
                                    var m = h && k.call(t, "__wrapped__"), v = g && k.call(e, "__wrapped__");
                                    if (m || v) {
                                        var b = m ? t.value() : t, x = v ? e.value() : e;
                                        return c || (c = new at), u(b, x, n, s, c)
                                    }
                                }
                                return !!y && (c || (c = new at), function (t, e, n, o, r, i) {
                                    var a = 1 & n, s = gt(t), u = s.length, c = gt(e).length;
                                    if (u != c && !a) return !1;
                                    for (var l = u; l--;) {
                                        var d = s[l];
                                        if (!(a ? d in e : k.call(e, d))) return !1
                                    }
                                    var p = i.get(t);
                                    if (p && i.get(e)) return p == e;
                                    var f = !0;
                                    i.set(t, e), i.set(e, t);
                                    for (var h = a; ++l < u;) {
                                        d     = s[l];
                                        var g = t[d], y = e[d];
                                        if (o) var m = a ? o(y, g, d, e, t, i) : o(g, y, d, t, e, i);
                                        if (!(void 0 === m ? g === y || r(g, y, n, o, i) : m)) {
                                            f = !1;
                                            break
                                        }
                                        h || (h = "constructor" == d)
                                    }
                                    if (f && !h) {
                                        var v = t.constructor, b = e.constructor;
                                        v == b || !("constructor" in t) || !("constructor" in e) || "function" == typeof v && v instanceof v && "function" == typeof b && b instanceof b || (f = !1)
                                    }
                                    return i.delete(t), i.delete(e), f
                                }(t, e, n, s, u, c))
                            }(t, e, n, s, dt, u))
                        }

                        function pt(t) {
                            return !(!Lt(t) || function (t) {
                                return !!F && F in t
                            }(t)) && (wt(t) ? T : s).test(St(t))
                        }

                        function ft(t) {
                            if (n = (e = t) && e.constructor, o = "function" == typeof n && n.prototype || I, e !== o) return V(t);
                            var e, n, o, r = [];
                            for (var i in Object(t)) k.call(t, i) && "constructor" != i && r.push(i);
                            return r
                        }

                        function ht(t, e, n, o, r, i) {
                            var a = 1 & n, s = t.length, u = e.length;
                            if (s != u && !(a && u > s)) return !1;
                            var c = i.get(t);
                            if (c && i.get(e)) return c == e;
                            var l = -1, d = !0, p = 2 & n ? new it : void 0;
                            for (i.set(t, e), i.set(e, t); ++l < s;) {
                                var f = t[l], h = e[l];
                                if (o) var g = a ? o(h, f, l, e, t, i) : o(f, h, l, t, e, i);
                                if (void 0 !== g) {
                                    if (g) continue;
                                    d = !1;
                                    break
                                }
                                if (p) {
                                    if (!b(e, (function (t, e) {
                                        if (a = e, !p.has(a) && (f === t || r(f, t, n, o, i))) return p.push(e);
                                        var a
                                    }))) {
                                        d = !1;
                                        break
                                    }
                                } else if (f !== h && !r(f, h, n, o, i)) {
                                    d = !1;
                                    break
                                }
                            }
                            return i.delete(t), i.delete(e), d
                        }

                        function gt(t) {
                            return function (t, e, n) {
                                var o = e(t);
                                return Mt(t) ? o : function (t, e) {
                                    for (var n = -1, o = e.length, r = t.length; ++n < o;) t[r + n] = e[n];
                                    return t
                                }(o, n(t))
                            }(t, Ft, vt)
                        }

                        function yt(t, e) {
                            var n, o, r = t.__data__;
                            return ("string" == (o = typeof (n = e)) || "number" == o || "symbol" == o || "boolean" == o ? "__proto__" !== n : null === n) ? r["string" == typeof e ? "string" : "hash"] : r.map
                        }

                        function mt(t, e) {
                            var n = function (t, e) {
                                return null == t ? void 0 : t[e]
                            }(t, e);
                            return pt(n) ? n : void 0
                        }

                        nt.prototype.clear = function () {
                            this.__data__ = Y ? Y(null) : {}, this.size = 0
                        }, nt.prototype.delete = function (t) {
                            var e = this.has(t) && delete this.__data__[t];
                            return this.size -= e ? 1 : 0, e
                        }, nt.prototype.get = function (t) {
                            var e = this.__data__;
                            if (Y) {
                                var n = e[t];
                                return "__lodash_hash_undefined__" === n ? void 0 : n
                            }
                            return k.call(e, t) ? e[t] : void 0
                        }, nt.prototype.has = function (t) {
                            var e = this.__data__;
                            return Y ? void 0 !== e[t] : k.call(e, t)
                        }, nt.prototype.set = function (t, e) {
                            var n = this.__data__;
                            return this.size += this.has(t) ? 0 : 1, n[t] = Y && void 0 === e ? "__lodash_hash_undefined__" : e, this
                        }, ot.prototype.clear = function () {
                            this.__data__ = [], this.size = 0
                        }, ot.prototype.delete = function (t) {
                            var e = this.__data__, n = ut(e, t);
                            return !(n < 0) && (n == e.length - 1 ? e.pop() : U.call(e, n, 1), --this.size, !0)
                        }, ot.prototype.get = function (t) {
                            var e = this.__data__, n = ut(e, t);
                            return n < 0 ? void 0 : e[n][1]
                        }, ot.prototype.has = function (t) {
                            return ut(this.__data__, t) > -1
                        }, ot.prototype.set = function (t, e) {
                            var n = this.__data__, o = ut(n, t);
                            return o < 0 ? (++this.size, n.push([t, e])) : n[o][1] = e, this
                        }, rt.prototype.clear = function () {
                            this.size = 0, this.__data__ = {hash: new nt, map: new (G || ot), string: new nt}
                        }, rt.prototype.delete = function (t) {
                            var e = yt(this, t).delete(t);
                            return this.size -= e ? 1 : 0, e
                        }, rt.prototype.get = function (t) {
                            return yt(this, t).get(t)
                        }, rt.prototype.has = function (t) {
                            return yt(this, t).has(t)
                        }, rt.prototype.set = function (t, e) {
                            var n = yt(this, t), o = n.size;
                            return n.set(t, e), this.size += n.size == o ? 0 : 1, this
                        }, it.prototype.add = it.prototype.push = function (t) {
                            return this.__data__.set(t, "__lodash_hash_undefined__"), this
                        }, it.prototype.has = function (t) {
                            return this.__data__.has(t)
                        }, at.prototype.clear = function () {
                            this.__data__ = new ot, this.size = 0
                        }, at.prototype.delete = function (t) {
                            var e = this.__data__, n = e.delete(t);
                            return this.size = e.size, n
                        }, at.prototype.get = function (t) {
                            return this.__data__.get(t)
                        }, at.prototype.has = function (t) {
                            return this.__data__.has(t)
                        }, at.prototype.set = function (t, e) {
                            var n = this.__data__;
                            if (n instanceof ot) {
                                var o = n.__data__;
                                if (!G || o.length < 199) return o.push([t, e]), this.size = ++n.size, this;
                                n = this.__data__ = new rt(o)
                            }
                            return n.set(t, e), this.size = n.size, this
                        };
                        var vt = B ? function (t) {
                            return null == t ? [] : (t = Object(t), function (t, e) {
                                for (var n = -1, o = null == t ? 0 : t.length, r = 0, i = []; ++n < o;) {
                                    var a = t[n];
                                    e(a, n, t) && (i[r++] = a)
                                }
                                return i
                            }(B(t), (function (e) {
                                return N.call(t, e)
                            })))
                        } : function () {
                            return []
                        }, bt  = ct;

                        function _t(t, e) {
                            return !!(e = null == e ? 9007199254740991 : e) && ("number" == typeof t || u.test(t)) && t > -1 && t % 1 == 0 && t < e
                        }

                        function St(t) {
                            if (null != t) {
                                try {
                                    return P.call(t)
                                } catch (t) {
                                }
                                try {
                                    return t + ""
                                } catch (t) {
                                }
                            }
                            return ""
                        }

                        function xt(t, e) {
                            return t === e || t != t && e != e
                        }

                        (J && "[object DataView]" != bt(new J(new ArrayBuffer(1))) || G && bt(new G) != r || z && "[object Promise]" != bt(z.resolve()) || q && bt(new q) != a || W && "[object WeakMap]" != bt(new W)) && (bt = function (t) {
                            var e = ct(t), n = e == i ? t.constructor : void 0, o = n ? St(n) : "";
                            if (o) switch (o) {
                                case Z:
                                    return "[object DataView]";
                                case K:
                                    return r;
                                case X:
                                    return "[object Promise]";
                                case H:
                                    return a;
                                case Q:
                                    return "[object WeakMap]"
                            }
                            return e
                        });
                        var Ct = lt(function () {
                            return arguments
                        }()) ? lt : function (t) {
                            return Pt(t) && k.call(t, "callee") && !N.call(t, "callee")
                        }, Mt  = Array.isArray, Et = $ || function () {
                            return !1
                        };

                        function wt(t) {
                            if (!Lt(t)) return !1;
                            var e = ct(t);
                            return "[object Function]" == e || "[object GeneratorFunction]" == e || "[object AsyncFunction]" == e || "[object Proxy]" == e
                        }

                        function It(t) {
                            return "number" == typeof t && t > -1 && t % 1 == 0 && t <= 9007199254740991
                        }

                        function Lt(t) {
                            var e = typeof t;
                            return null != t && ("object" == e || "function" == e)
                        }

                        function Pt(t) {
                            return null != t && "object" == typeof t
                        }

                        var kt = v ? function (t) {
                            return function (e) {
                                return t(e)
                            }
                        }(v) : function (t) {
                            return Pt(t) && It(t.length) && !!c[ct(t)]
                        };

                        function Ft(t) {
                            return null != (e = t) && It(e.length) && !wt(e) ? st(t) : ft(t);
                            var e
                        }

                        t.exports = function (t, e) {
                            return dt(t, e)
                        }
                    })), ve = {Polygon: ht, LineString: ft, Point: pt, MultiPolygon: mt, MultiLineString: mt, MultiPoint: mt};

                    function be(t, e) {
                        return e.modes = A, e.getFeatureIdsAt = function (e) {
                            return ot.click({point: e}, null, t).map((function (t) {
                                return t.properties.id
                            }))
                        }, e.getSelectedIds = function () {
                            return t.store.getSelectedIds()
                        }, e.getSelected = function () {
                            return {
                                type: k, features: t.store.getSelectedIds().map((function (e) {
                                    return t.store.get(e)
                                })).map((function (t) {
                                    return t.toGeoJSON()
                                }))
                            }
                        }, e.getSelectedPoints = function () {
                            return {
                                type: k, features: t.store.getSelectedCoordinates().map((function (t) {
                                    return {type: w, properties: {}, geometry: {type: P, coordinates: t.coordinates}}
                                }))
                            }
                        }, e.set = function (n) {
                            if (void 0 === n.type || n.type !== k || !Array.isArray(n.features)) throw new Error("Invalid FeatureCollection");
                            var o = t.store.createRenderBatch(), r = t.store.getAllIds().slice(), i = e.add(n), a = new et(i);
                            return (r = r.filter((function (t) {
                                return !a.has(t)
                            }))).length && e.delete(r), o(), i
                        }, e.add = function (e) {
                            var n = JSON.parse(JSON.stringify(zt(e))).features.map((function (e) {
                                if (e.id = e.id || lt(), null === e.geometry) throw new Error("Invalid geometry: null");
                                if (void 0 === t.store.get(e.id) || t.store.get(e.id).type !== e.geometry.type) {
                                    var n = ve[e.geometry.type];
                                    if (void 0 === n) throw new Error("Invalid geometry type: " + e.geometry.type + ".");
                                    var o = new n(t, e);
                                    t.store.add(o)
                                } else {
                                    var r = t.store.get(e.id);
                                    r.properties = e.properties, me(r.getCoordinates(), e.geometry.coordinates) || r.incomingCoords(e.geometry.coordinates)
                                }
                                return e.id
                            }));
                            return t.store.render(), n
                        }, e.get = function (e) {
                            var n = t.store.get(e);
                            if (n) return n.toGeoJSON()
                        }, e.getAll = function () {
                            return {
                                type: k, features: t.store.getAll().map((function (t) {
                                    return t.toGeoJSON()
                                }))
                            }
                        }, e.delete = function (n) {
                            return t.store.delete(n, {silent: !0}), e.getMode() !== A.DIRECT_SELECT || t.store.getSelectedIds().length ? t.store.render() : t.events.changeMode(A.SIMPLE_SELECT, void 0, {silent: !0}), e
                        }, e.deleteAll = function () {
                            return t.store.delete(t.store.getAllIds(), {silent: !0}), e.getMode() === A.DIRECT_SELECT ? t.events.changeMode(A.SIMPLE_SELECT, void 0, {silent: !0}) : t.store.render(), e
                        }, e.changeMode = function (n, o) {
                            return void 0 === o && (o = {}), n === A.SIMPLE_SELECT && e.getMode() === A.SIMPLE_SELECT ? (r = o.featureIds || [], i = t.store.getSelectedIds(), r.length === i.length && JSON.stringify(r.map((function (t) {
                                return t
                            })).sort()) === JSON.stringify(i.map((function (t) {
                                return t
                            })).sort()) || (t.store.setSelected(o.featureIds, {silent: !0}), t.store.render()), e) : (n === A.DIRECT_SELECT && e.getMode() === A.DIRECT_SELECT && o.featureId === t.store.getSelectedIds()[0] || t.events.changeMode(n, o, {silent: !0}), e);
                            var r, i
                        }, e.getMode = function () {
                            return t.events.getMode()
                        }, e.trash = function () {
                            return t.events.trash({silent: !0}), e
                        }, e.combineFeatures = function () {
                            return t.events.combineFeatures({silent: !0}), e
                        }, e.uncombineFeatures = function () {
                            return t.events.uncombineFeatures({silent: !0}), e
                        }, e.setFeatureProperty = function (n, o, r) {
                            return t.store.setFeatureProperty(n, o, r), e
                        }, e
                    }

                    var _e = function (t, e) {
                        var n = {
                            options: t = function (t) {
                                void 0 === t && (t = {});
                                var e = wt(t);
                                return t.controls || (e.controls = {}), !1 === t.displayControlsDefault ? e.controls = wt(ge, t.controls) : e.controls = wt(he, t.controls), (e = wt(fe, e)).styles = ye(e.styles, "cold").concat(ye(e.styles, "hot")), e
                            }(t)
                        };
                        e = be(n, e), n.api = e;
                        var o = Pt(n);
                        return e.onAdd = o.onAdd, e.onRemove = o.onRemove, e.types = E, e.options = t, e
                    };

                    function Se(t) {
                        _e(t, this)
                    }

                    return Se.modes = pe, Se
                }))
            }).call(this, n("c8ba"))
        }
    }
]);
//# sourceMappingURL=chunk-0ce35376.c07e4849.js.map
