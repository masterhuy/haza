! function(e) {
    function t(o) {
        if (i[o]) return i[o].exports;
        var n = i[o] = {
            i: o,
            l: !1,
            exports: {}
        };
        return e[o].call(n.exports, n, n.exports, t), n.l = !0, n.exports
    }
    var i = {};
    t.m = e, t.c = i, t.i = function(e) {
        return e
    }, t.d = function(e, i, o) {
        t.o(e, i) || Object.defineProperty(e, i, {
            configurable: !1,
            enumerable: !0,
            get: o
        })
    }, t.n = function(e) {
        var i = e && e.__esModule ? function() {
            return e.default
        } : function() {
            return e
        };
        return t.d(i, "a", i), i
    }, t.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, t.p = "", t(t.s = 30)
}([function(e, t) {
    e.exports = jQuery
}, function(e, t) {
    e.exports = prestashop
}, function(e, t, i) {
    "use strict";
    var o, n;
    ! function(e) {
        function t(e) {
            var t = e.length,
                o = i.type(e);
            return "function" !== o && !i.isWindow(e) && (!(1 !== e.nodeType || !t) || ("array" === o || 0 === t || "number" == typeof t && t > 0 && t - 1 in e))
        }
        if (!e.jQuery) {
            var i = function e(t, i) {
                return new e.fn.init(t, i)
            };
            i.isWindow = function(e) {
                return e && e === e.window
            }, i.type = function(e) {
                return e ? "object" == typeof e || "function" == typeof e ? n[r.call(e)] || "object" : typeof e : e + ""
            }, i.isArray = Array.isArray || function(e) {
                return "array" === i.type(e)
            }, i.isPlainObject = function(e) {
                var t;
                if (!e || "object" !== i.type(e) || e.nodeType || i.isWindow(e)) return !1;
                try {
                    if (e.constructor && !s.call(e, "constructor") && !s.call(e.constructor.prototype, "isPrototypeOf")) return !1
                } catch (e) {
                    return !1
                }
                for (t in e);
                return void 0 === t || s.call(e, t)
            }, i.each = function(e, i, o) {
                var n = 0,
                    s = e.length,
                    r = t(e);
                if (o) {
                    if (r)
                        for (; n < s && !1 !== i.apply(e[n], o); n++);
                    else
                        for (n in e)
                            if (e.hasOwnProperty(n) && !1 === i.apply(e[n], o)) break
                } else if (r)
                    for (; n < s && !1 !== i.call(e[n], n, e[n]); n++);
                else
                    for (n in e)
                        if (e.hasOwnProperty(n) && !1 === i.call(e[n], n, e[n])) break;
                return e
            }, i.data = function(e, t, n) {
                if (void 0 === n) {
                    var s = e[i.expando],
                        r = s && o[s];
                    if (void 0 === t) return r;
                    if (r && t in r) return r[t]
                } else if (void 0 !== t) {
                    var a = e[i.expando] || (e[i.expando] = ++i.uuid);
                    return o[a] = o[a] || {}, o[a][t] = n, n
                }
            }, i.removeData = function(e, t) {
                var n = e[i.expando],
                    s = n && o[n];
                s && (t ? i.each(t, function(e, t) {
                    delete s[t]
                }) : delete o[n])
            }, i.extend = function() {
                var e, t, o, n, s, r, a = arguments[0] || {},
                    l = 1,
                    c = arguments.length,
                    d = !1;
                for ("boolean" == typeof a && (d = a, a = arguments[l] || {}, l++), "object" != typeof a && "function" !== i.type(a) && (a = {}), l === c && (a = this, l--); l < c; l++)
                    if (s = arguments[l])
                        for (n in s) s.hasOwnProperty(n) && (e = a[n], o = s[n], a !== o && (d && o && (i.isPlainObject(o) || (t = i.isArray(o))) ? (t ? (t = !1, r = e && i.isArray(e) ? e : []) : r = e && i.isPlainObject(e) ? e : {}, a[n] = i.extend(d, r, o)) : void 0 !== o && (a[n] = o)));
                return a
            }, i.queue = function(e, o, n) {
                if (e) {
                    o = (o || "fx") + "queue";
                    var s = i.data(e, o);
                    return n ? (!s || i.isArray(n) ? s = i.data(e, o, function(e, i) {
                        var o = i || [];
                        return e && (t(Object(e)) ? function(e, t) {
                            for (var i = +t.length, o = 0, n = e.length; o < i;) e[n++] = t[o++];
                            if (i !== i)
                                for (; void 0 !== t[o];) e[n++] = t[o++];
                            e.length = n
                        }(o, "string" == typeof e ? [e] : e) : [].push.call(o, e)), o
                    }(n)) : s.push(n), s) : s || []
                }
            }, i.dequeue = function(e, t) {
                i.each(e.nodeType ? [e] : e, function(e, o) {
                    t = t || "fx";
                    var n = i.queue(o, t),
                        s = n.shift();
                    "inprogress" === s && (s = n.shift()), s && ("fx" === t && n.unshift("inprogress"), s.call(o, function() {
                        i.dequeue(o, t)
                    }))
                })
            }, i.fn = i.prototype = {
                init: function(e) {
                    if (e.nodeType) return this[0] = e, this;
                    throw new Error("Not a DOM node.")
                },
                offset: function() {
                    var t = this[0].getBoundingClientRect ? this[0].getBoundingClientRect() : {
                        top: 0,
                        left: 0
                    };
                    return {
                        top: t.top + (e.pageYOffset || document.scrollTop || 0) - (document.clientTop || 0),
                        left: t.left + (e.pageXOffset || document.scrollLeft || 0) - (document.clientLeft || 0)
                    }
                },
                position: function() {
                    var e = this[0],
                        t = function(e) {
                            for (var t = e.offsetParent; t && "html" !== t.nodeName.toLowerCase() && t.style && "static" === t.style.position.toLowerCase();) t = t.offsetParent;
                            return t || document
                        }(e),
                        o = this.offset(),
                        n = /^(?:body|html)$/i.test(t.nodeName) ? {
                            top: 0,
                            left: 0
                        } : i(t).offset();
                    return o.top -= parseFloat(e.style.marginTop) || 0, o.left -= parseFloat(e.style.marginLeft) || 0, t.style && (n.top += parseFloat(t.style.borderTopWidth) || 0, n.left += parseFloat(t.style.borderLeftWidth) || 0), {
                        top: o.top - n.top,
                        left: o.left - n.left
                    }
                }
            };
            var o = {};
            i.expando = "velocity" + (new Date).getTime(), i.uuid = 0;
            for (var n = {}, s = n.hasOwnProperty, r = n.toString, a = "Boolean Number String Function Array Date RegExp Object Error".split(" "), l = 0; l < a.length; l++) n["[object " + a[l] + "]"] = a[l].toLowerCase();
            i.fn.init.prototype = i.fn, e.Velocity = {
                Utilities: i
            }
        }
    }(window),
    function(s) {
        "object" == typeof e && "object" == typeof e.exports ? e.exports = s() : (o = s, void 0 !== (n = "function" == typeof o ? o.call(t, i, t, e) : o) && (e.exports = n))
    }(function() {
        return function(e, t, i, o) {
            function n(e) {
                for (var t = -1, i = e ? e.length : 0, o = []; ++t < i;) {
                    var n = e[t];
                    n && o.push(n)
                }
                return o
            }

            function s(e) {
                return b.isWrapped(e) ? e = y.call(e) : b.isNode(e) && (e = [e]), e
            }

            function r(e) {
                var t = f.data(e, "velocity");
                return null === t ? o : t
            }

            function a(e, t) {
                var i = r(e);
                i && i.delayTimer && !i.delayPaused && (i.delayRemaining = i.delay - t + i.delayBegin, i.delayPaused = !0, clearTimeout(i.delayTimer.setTimeout))
            }

            function l(e, t) {
                var i = r(e);
                i && i.delayTimer && i.delayPaused && (i.delayPaused = !1, i.delayTimer.setTimeout = setTimeout(i.delayTimer.next, i.delayRemaining))
            }

            function c(e) {
                return function(t) {
                    return Math.round(t * e) * (1 / e)
                }
            }

            function d(e, i, o, n) {
                function s(e, t) {
                    return 1 - 3 * t + 3 * e
                }

                function r(e, t) {
                    return 3 * t - 6 * e
                }

                function a(e) {
                    return 3 * e
                }

                function l(e, t, i) {
                    return ((s(t, i) * e + r(t, i)) * e + a(t)) * e
                }

                function c(e, t, i) {
                    return 3 * s(t, i) * e * e + 2 * r(t, i) * e + a(t)
                }

                function d(t, i) {
                    for (var n = 0; n < m; ++n) {
                        var s = c(i, e, o);
                        if (0 === s) return i;
                        i -= (l(i, e, o) - t) / s
                    }
                    return i
                }

                function u() {
                    for (var t = 0; t < w; ++t) S[t] = l(t * b, e, o)
                }

                function h(t, i, n) {
                    var s, r, a = 0;
                    do {
                        r = i + (n - i) / 2, s = l(r, e, o) - t, s > 0 ? n = r : i = r
                    } while (Math.abs(s) > v && ++a < y);
                    return r
                }

                function p(t) {
                    for (var i = 0, n = 1, s = w - 1; n !== s && S[n] <= t; ++n) i += b;
                    --n;
                    var r = (t - S[n]) / (S[n + 1] - S[n]),
                        a = i + r * b,
                        l = c(a, e, o);
                    return l >= g ? d(t, a) : 0 === l ? a : h(t, i, i + b)
                }

                function f() {
                    T = !0, e === i && o === n || u()
                }
                var m = 4,
                    g = .001,
                    v = 1e-7,
                    y = 10,
                    w = 11,
                    b = 1 / (w - 1),
                    _ = "Float32Array" in t;
                if (4 !== arguments.length) return !1;
                for (var x = 0; x < 4; ++x)
                    if ("number" != typeof arguments[x] || isNaN(arguments[x]) || !isFinite(arguments[x])) return !1;
                e = Math.min(e, 1), o = Math.min(o, 1), e = Math.max(e, 0), o = Math.max(o, 0);
                var S = _ ? new Float32Array(w) : new Array(w),
                    T = !1,
                    C = function(t) {
                        return T || f(), e === i && o === n ? t : 0 === t ? 0 : 1 === t ? 1 : l(p(t), i, n)
                    };
                C.getControlPoints = function() {
                    return [{
                        x: e,
                        y: i
                    }, {
                        x: o,
                        y: n
                    }]
                };
                var k = "generateBezier(" + [e, i, o, n] + ")";
                return C.toString = function() {
                    return k
                }, C
            }

            function u(e, t) {
                var i = e;
                return b.isString(e) ? T.Easings[e] || (i = !1) : i = b.isArray(e) && 1 === e.length ? c.apply(null, e) : b.isArray(e) && 2 === e.length ? C.apply(null, e.concat([t])) : !(!b.isArray(e) || 4 !== e.length) && d.apply(null, e), !1 === i && (i = T.Easings[T.defaults.easing] ? T.defaults.easing : S), i
            }

            function h(e) {
                if (e) {
                    var t = T.timestamp && !0 !== e ? e : v.now(),
                        i = T.State.calls.length;
                    i > 1e4 && (T.State.calls = n(T.State.calls), i = T.State.calls.length);
                    for (var s = 0; s < i; s++)
                        if (T.State.calls[s]) {
                            var a = T.State.calls[s],
                                l = a[0],
                                c = a[2],
                                d = a[3],
                                u = !d,
                                g = null,
                                y = a[5],
                                w = a[6];
                            if (d || (d = T.State.calls[s][3] = t - 16), y) {
                                if (!0 !== y.resume) continue;
                                d = a[3] = Math.round(t - w - 16), a[5] = null
                            }
                            w = a[6] = t - d;
                            for (var _ = Math.min(w / c.duration, 1), x = 0, S = l.length; x < S; x++) {
                                var C = l[x],
                                    z = C.element;
                                if (r(z)) {
                                    var A = !1;
                                    if (c.display !== o && null !== c.display && "none" !== c.display) {
                                        if ("flex" === c.display) {
                                            var O = ["-webkit-box", "-moz-box", "-ms-flexbox", "-webkit-flex"];
                                            f.each(O, function(e, t) {
                                                k.setPropertyValue(z, "display", t)
                                            })
                                        }
                                        k.setPropertyValue(z, "display", c.display)
                                    }
                                    c.visibility !== o && "hidden" !== c.visibility && k.setPropertyValue(z, "visibility", c.visibility);
                                    for (var $ in C)
                                        if (C.hasOwnProperty($) && "element" !== $) {
                                            var L, P = C[$],
                                                W = b.isString(P.easing) ? T.Easings[P.easing] : P.easing;
                                            if (b.isString(P.pattern)) {
                                                var I = 1 === _ ? function(e, t, i) {
                                                    var o = P.endValue[t];
                                                    return i ? Math.round(o) : o
                                                } : function(e, t, i) {
                                                    var o = P.startValue[t],
                                                        n = P.endValue[t] - o,
                                                        s = o + n * W(_, c, n);
                                                    return i ? Math.round(s) : s
                                                };
                                                L = P.pattern.replace(/{(\d+)(!)?}/g, I)
                                            } else if (1 === _) L = P.endValue;
                                            else {
                                                var D = P.endValue - P.startValue;
                                                L = P.startValue + D * W(_, c, D)
                                            }
                                            if (!u && L === P.currentValue) continue;
                                            if (P.currentValue = L, "tween" === $) g = L;
                                            else {
                                                var H;
                                                if (k.Hooks.registered[$]) {
                                                    H = k.Hooks.getRoot($);
                                                    var N = r(z).rootPropertyValueCache[H];
                                                    N && (P.rootPropertyValue = N)
                                                }
                                                var j = k.setPropertyValue(z, $, P.currentValue + (m < 9 && 0 === parseFloat(L) ? "" : P.unitType), P.rootPropertyValue, P.scrollData);
                                                k.Hooks.registered[$] && (k.Normalizations.registered[H] ? r(z).rootPropertyValueCache[H] = k.Normalizations.registered[H]("extract", null, j[1]) : r(z).rootPropertyValueCache[H] = j[1]), "transform" === j[0] && (A = !0)
                                            }
                                        } c.mobileHA && r(z).transformCache.translate3d === o && (r(z).transformCache.translate3d = "(0px, 0px, 0px)", A = !0), A && k.flushTransformCache(z)
                                }
                            }
                            c.display !== o && "none" !== c.display && (T.State.calls[s][2].display = !1), c.visibility !== o && "hidden" !== c.visibility && (T.State.calls[s][2].visibility = !1), c.progress && c.progress.call(a[1], a[1], _, Math.max(0, d + c.duration - t), d, g), 1 === _ && p(s)
                        }
                }
                T.State.isTicking && E(h)
            }

            function p(e, t) {
                if (!T.State.calls[e]) return !1;
                for (var i = T.State.calls[e][0], n = T.State.calls[e][1], s = T.State.calls[e][2], a = T.State.calls[e][4], l = !1, c = 0, d = i.length; c < d; c++) {
                    var u = i[c].element;
                    t || s.loop || ("none" === s.display && k.setPropertyValue(u, "display", s.display), "hidden" === s.visibility && k.setPropertyValue(u, "visibility", s.visibility));
                    var h = r(u);
                    if (!0 !== s.loop && (f.queue(u)[1] === o || !/\.velocityQueueEntryFlag/i.test(f.queue(u)[1])) && h) {
                        h.isAnimating = !1, h.rootPropertyValueCache = {};
                        var p = !1;
                        f.each(k.Lists.transforms3D, function(e, t) {
                            var i = /^scale/.test(t) ? 1 : 0,
                                n = h.transformCache[t];
                            h.transformCache[t] !== o && new RegExp("^\\(" + i + "[^.]").test(n) && (p = !0, delete h.transformCache[t])
                        }), s.mobileHA && (p = !0, delete h.transformCache.translate3d), p && k.flushTransformCache(u), k.Values.removeClass(u, "velocity-animating")
                    }
                    if (!t && s.complete && !s.loop && c === d - 1) try {
                        s.complete.call(n, n)
                    } catch (e) {
                        setTimeout(function() {
                            throw e
                        }, 1)
                    }
                    a && !0 !== s.loop && a(n), h && !0 === s.loop && !t && (f.each(h.tweensContainer, function(e, t) {
                        if (/^rotate/.test(e) && (parseFloat(t.startValue) - parseFloat(t.endValue)) % 360 == 0) {
                            var i = t.startValue;
                            t.startValue = t.endValue, t.endValue = i
                        }
                        /^backgroundPosition/.test(e) && 100 === parseFloat(t.endValue) && "%" === t.unitType && (t.endValue = 0, t.startValue = 100)
                    }), T(u, "reverse", {
                        loop: !0,
                        delay: s.delay
                    })), !1 !== s.queue && f.dequeue(u, s.queue)
                }
                T.State.calls[e] = !1;
                for (var m = 0, g = T.State.calls.length; m < g; m++)
                    if (!1 !== T.State.calls[m]) {
                        l = !0;
                        break
                    }! 1 === l && (T.State.isTicking = !1, delete T.State.calls, T.State.calls = [])
            }
            var f, m = function() {
                    if (i.documentMode) return i.documentMode;
                    for (var e = 7; e > 4; e--) {
                        var t = i.createElement("div");
                        if (t.innerHTML = "\x3c!--[if IE " + e + "]><span></span><![endif]--\x3e", t.getElementsByTagName("span").length) return t = null, e
                    }
                    return o
                }(),
                g = function() {
                    var e = 0;
                    return t.webkitRequestAnimationFrame || t.mozRequestAnimationFrame || function(t) {
                        var i, o = (new Date).getTime();
                        return i = Math.max(0, 16 - (o - e)), e = o + i, setTimeout(function() {
                            t(o + i)
                        }, i)
                    }
                }(),
                v = function() {
                    var e = t.performance || {};
                    if ("function" != typeof e.now) {
                        var i = e.timing && e.timing.navigationStart ? e.timing.navigationStart : (new Date).getTime();
                        e.now = function() {
                            return (new Date).getTime() - i
                        }
                    }
                    return e
                }(),
                y = function() {
                    var e = Array.prototype.slice;
                    try {
                        return e.call(i.documentElement), e
                    } catch (t) {
                        return function(t, i) {
                            var o = this.length;
                            if ("number" != typeof t && (t = 0), "number" != typeof i && (i = o), this.slice) return e.call(this, t, i);
                            var n, s = [],
                                r = t >= 0 ? t : Math.max(0, o + t),
                                a = i < 0 ? o + i : Math.min(i, o),
                                l = a - r;
                            if (l > 0)
                                if (s = new Array(l), this.charAt)
                                    for (n = 0; n < l; n++) s[n] = this.charAt(r + n);
                                else
                                    for (n = 0; n < l; n++) s[n] = this[r + n];
                            return s
                        }
                    }
                }(),
                w = function() {
                    return Array.prototype.includes ? function(e, t) {
                        return e.includes(t)
                    } : Array.prototype.indexOf ? function(e, t) {
                        return e.indexOf(t) >= 0
                    } : function(e, t) {
                        for (var i = 0; i < e.length; i++)
                            if (e[i] === t) return !0;
                        return !1
                    }
                },
                b = {
                    isNumber: function(e) {
                        return "number" == typeof e
                    },
                    isString: function(e) {
                        return "string" == typeof e
                    },
                    isArray: Array.isArray || function(e) {
                        return "[object Array]" === Object.prototype.toString.call(e)
                    },
                    isFunction: function(e) {
                        return "[object Function]" === Object.prototype.toString.call(e)
                    },
                    isNode: function(e) {
                        return e && e.nodeType
                    },
                    isWrapped: function(e) {
                        return e && e !== t && b.isNumber(e.length) && !b.isString(e) && !b.isFunction(e) && !b.isNode(e) && (0 === e.length || b.isNode(e[0]))
                    },
                    isSVG: function(e) {
                        return t.SVGElement && e instanceof t.SVGElement
                    },
                    isEmptyObject: function(e) {
                        for (var t in e)
                            if (e.hasOwnProperty(t)) return !1;
                        return !0
                    }
                },
                _ = !1;
            if (e.fn && e.fn.jquery ? (f = e, _ = !0) : f = t.Velocity.Utilities, m <= 8 && !_) throw new Error("Velocity: IE8 and below require jQuery to be loaded before Velocity.");
            if (m <= 7) return void(jQuery.fn.velocity = jQuery.fn.animate);
            var x = 400,
                S = "swing",
                T = {
                    State: {
                        isMobile: /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(t.navigator.userAgent),
                        isAndroid: /Android/i.test(t.navigator.userAgent),
                        isGingerbread: /Android 2\.3\.[3-7]/i.test(t.navigator.userAgent),
                        isChrome: t.chrome,
                        isFirefox: /Firefox/i.test(t.navigator.userAgent),
                        prefixElement: i.createElement("div"),
                        prefixMatches: {},
                        scrollAnchor: null,
                        scrollPropertyLeft: null,
                        scrollPropertyTop: null,
                        isTicking: !1,
                        calls: [],
                        delayedElements: {
                            count: 0
                        }
                    },
                    CSS: {},
                    Utilities: f,
                    Redirects: {},
                    Easings: {},
                    Promise: t.Promise,
                    defaults: {
                        queue: "",
                        duration: x,
                        easing: S,
                        begin: o,
                        complete: o,
                        progress: o,
                        display: o,
                        visibility: o,
                        loop: !1,
                        delay: !1,
                        mobileHA: !0,
                        _cacheValues: !0,
                        promiseRejectEmpty: !0
                    },
                    init: function(e) {
                        f.data(e, "velocity", {
                            isSVG: b.isSVG(e),
                            isAnimating: !1,
                            computedStyle: null,
                            tweensContainer: null,
                            rootPropertyValueCache: {},
                            transformCache: {}
                        })
                    },
                    hook: null,
                    mock: !1,
                    version: {
                        major: 1,
                        minor: 5,
                        patch: 2
                    },
                    debug: !1,
                    timestamp: !0,
                    pauseAll: function(e) {
                        var t = (new Date).getTime();
                        f.each(T.State.calls, function(t, i) {
                            if (i) {
                                if (e !== o && (i[2].queue !== e || !1 === i[2].queue)) return !0;
                                i[5] = {
                                    resume: !1
                                }
                            }
                        }), f.each(T.State.delayedElements, function(e, i) {
                            i && a(i, t)
                        })
                    },
                    resumeAll: function(e) {
                        var t = (new Date).getTime();
                        f.each(T.State.calls, function(t, i) {
                            if (i) {
                                if (e !== o && (i[2].queue !== e || !1 === i[2].queue)) return !0;
                                i[5] && (i[5].resume = !0)
                            }
                        }), f.each(T.State.delayedElements, function(e, i) {
                            i && l(i, t)
                        })
                    }
                };
            t.pageYOffset !== o ? (T.State.scrollAnchor = t, T.State.scrollPropertyLeft = "pageXOffset", T.State.scrollPropertyTop = "pageYOffset") : (T.State.scrollAnchor = i.documentElement || i.body.parentNode || i.body, T.State.scrollPropertyLeft = "scrollLeft", T.State.scrollPropertyTop = "scrollTop");
            var C = function() {
                function e(e) {
                    return -e.tension * e.x - e.friction * e.v
                }

                function t(t, i, o) {
                    var n = {
                        x: t.x + o.dx * i,
                        v: t.v + o.dv * i,
                        tension: t.tension,
                        friction: t.friction
                    };
                    return {
                        dx: n.v,
                        dv: e(n)
                    }
                }

                function i(i, o) {
                    var n = {
                            dx: i.v,
                            dv: e(i)
                        },
                        s = t(i, .5 * o, n),
                        r = t(i, .5 * o, s),
                        a = t(i, o, r),
                        l = 1 / 6 * (n.dx + 2 * (s.dx + r.dx) + a.dx),
                        c = 1 / 6 * (n.dv + 2 * (s.dv + r.dv) + a.dv);
                    return i.x = i.x + l * o, i.v = i.v + c * o, i
                }
                return function e(t, o, n) {
                    var s, r, a, l = {
                            x: -1,
                            v: 0,
                            tension: null,
                            friction: null
                        },
                        c = [0],
                        d = 0;
                    for (t = parseFloat(t) || 500, o = parseFloat(o) || 20, n = n || null, l.tension = t, l.friction = o, s = null !== n, s ? (d = e(t, o), r = d / n * .016) : r = .016;;)
                        if (a = i(a || l, r), c.push(1 + a.x), d += 16, !(Math.abs(a.x) > 1e-4 && Math.abs(a.v) > 1e-4)) break;
                    return s ? function(e) {
                        return c[e * (c.length - 1) | 0]
                    } : d
                }
            }();
            T.Easings = {
                linear: function(e) {
                    return e
                },
                swing: function(e) {
                    return .5 - Math.cos(e * Math.PI) / 2
                },
                spring: function(e) {
                    return 1 - Math.cos(4.5 * e * Math.PI) * Math.exp(6 * -e)
                }
            }, f.each([
                ["ease", [.25, .1, .25, 1]],
                ["ease-in", [.42, 0, 1, 1]],
                ["ease-out", [0, 0, .58, 1]],
                ["ease-in-out", [.42, 0, .58, 1]],
                ["easeInSine", [.47, 0, .745, .715]],
                ["easeOutSine", [.39, .575, .565, 1]],
                ["easeInOutSine", [.445, .05, .55, .95]],
                ["easeInQuad", [.55, .085, .68, .53]],
                ["easeOutQuad", [.25, .46, .45, .94]],
                ["easeInOutQuad", [.455, .03, .515, .955]],
                ["easeInCubic", [.55, .055, .675, .19]],
                ["easeOutCubic", [.215, .61, .355, 1]],
                ["easeInOutCubic", [.645, .045, .355, 1]],
                ["easeInQuart", [.895, .03, .685, .22]],
                ["easeOutQuart", [.165, .84, .44, 1]],
                ["easeInOutQuart", [.77, 0, .175, 1]],
                ["easeInQuint", [.755, .05, .855, .06]],
                ["easeOutQuint", [.23, 1, .32, 1]],
                ["easeInOutQuint", [.86, 0, .07, 1]],
                ["easeInExpo", [.95, .05, .795, .035]],
                ["easeOutExpo", [.19, 1, .22, 1]],
                ["easeInOutExpo", [1, 0, 0, 1]],
                ["easeInCirc", [.6, .04, .98, .335]],
                ["easeOutCirc", [.075, .82, .165, 1]],
                ["easeInOutCirc", [.785, .135, .15, .86]]
            ], function(e, t) {
                T.Easings[t[0]] = d.apply(null, t[1])
            });
            var k = T.CSS = {
                RegEx: {
                    isHex: /^#([A-f\d]{3}){1,2}$/i,
                    valueUnwrap: /^[A-z]+\((.*)\)$/i,
                    wrappedValueAlreadyExtracted: /[0-9.]+ [0-9.]+ [0-9.]+( [0-9.]+)?/,
                    valueSplit: /([A-z]+\(.+\))|(([A-z0-9#-.]+?)(?=\s|$))/gi
                },
                Lists: {
                    colors: ["fill", "stroke", "stopColor", "color", "backgroundColor", "borderColor", "borderTopColor", "borderRightColor", "borderBottomColor", "borderLeftColor", "outlineColor"],
                    transformsBase: ["translateX", "translateY", "scale", "scaleX", "scaleY", "skewX", "skewY", "rotateZ"],
                    transforms3D: ["transformPerspective", "translateZ", "scaleZ", "rotateX", "rotateY"],
                    units: ["%", "em", "ex", "ch", "rem", "vw", "vh", "vmin", "vmax", "cm", "mm", "Q", "in", "pc", "pt", "px", "deg", "grad", "rad", "turn", "s", "ms"],
                    colorNames: {
                        aliceblue: "240,248,255",
                        antiquewhite: "250,235,215",
                        aquamarine: "127,255,212",
                        aqua: "0,255,255",
                        azure: "240,255,255",
                        beige: "245,245,220",
                        bisque: "255,228,196",
                        black: "0,0,0",
                        blanchedalmond: "255,235,205",
                        blueviolet: "138,43,226",
                        blue: "0,0,255",
                        brown: "165,42,42",
                        burlywood: "222,184,135",
                        cadetblue: "95,158,160",
                        chartreuse: "127,255,0",
                        chocolate: "210,105,30",
                        coral: "255,127,80",
                        cornflowerblue: "100,149,237",
                        cornsilk: "255,248,220",
                        crimson: "220,20,60",
                        cyan: "0,255,255",
                        darkblue: "0,0,139",
                        darkcyan: "0,139,139",
                        darkgoldenrod: "184,134,11",
                        darkgray: "169,169,169",
                        darkgrey: "169,169,169",
                        darkgreen: "0,100,0",
                        darkkhaki: "189,183,107",
                        darkmagenta: "139,0,139",
                        darkolivegreen: "85,107,47",
                        darkorange: "255,140,0",
                        darkorchid: "153,50,204",
                        darkred: "139,0,0",
                        darksalmon: "233,150,122",
                        darkseagreen: "143,188,143",
                        darkslateblue: "72,61,139",
                        darkslategray: "47,79,79",
                        darkturquoise: "0,206,209",
                        darkviolet: "148,0,211",
                        deeppink: "255,20,147",
                        deepskyblue: "0,191,255",
                        dimgray: "105,105,105",
                        dimgrey: "105,105,105",
                        dodgerblue: "30,144,255",
                        firebrick: "178,34,34",
                        floralwhite: "255,250,240",
                        forestgreen: "34,139,34",
                        fuchsia: "255,0,255",
                        gainsboro: "220,220,220",
                        ghostwhite: "248,248,255",
                        gold: "255,215,0",
                        goldenrod: "218,165,32",
                        gray: "128,128,128",
                        grey: "128,128,128",
                        greenyellow: "173,255,47",
                        green: "0,128,0",
                        honeydew: "240,255,240",
                        hotpink: "255,105,180",
                        indianred: "205,92,92",
                        indigo: "75,0,130",
                        ivory: "255,255,240",
                        khaki: "240,230,140",
                        lavenderblush: "255,240,245",
                        lavender: "230,230,250",
                        lawngreen: "124,252,0",
                        lemonchiffon: "255,250,205",
                        lightblue: "173,216,230",
                        lightcoral: "240,128,128",
                        lightcyan: "224,255,255",
                        lightgoldenrodyellow: "250,250,210",
                        lightgray: "211,211,211",
                        lightgrey: "211,211,211",
                        lightgreen: "144,238,144",
                        lightpink: "255,182,193",
                        lightsalmon: "255,160,122",
                        lightseagreen: "32,178,170",
                        lightskyblue: "135,206,250",
                        lightslategray: "119,136,153",
                        lightsteelblue: "176,196,222",
                        lightyellow: "255,255,224",
                        limegreen: "50,205,50",
                        lime: "0,255,0",
                        linen: "250,240,230",
                        magenta: "255,0,255",
                        maroon: "128,0,0",
                        mediumaquamarine: "102,205,170",
                        mediumblue: "0,0,205",
                        mediumorchid: "186,85,211",
                        mediumpurple: "147,112,219",
                        mediumseagreen: "60,179,113",
                        mediumslateblue: "123,104,238",
                        mediumspringgreen: "0,250,154",
                        mediumturquoise: "72,209,204",
                        mediumvioletred: "199,21,133",
                        midnightblue: "25,25,112",
                        mintcream: "245,255,250",
                        mistyrose: "255,228,225",
                        moccasin: "255,228,181",
                        navajowhite: "255,222,173",
                        navy: "0,0,128",
                        oldlace: "253,245,230",
                        olivedrab: "107,142,35",
                        olive: "128,128,0",
                        orangered: "255,69,0",
                        orange: "255,165,0",
                        orchid: "218,112,214",
                        palegoldenrod: "238,232,170",
                        palegreen: "152,251,152",
                        paleturquoise: "175,238,238",
                        palevioletred: "219,112,147",
                        papayawhip: "255,239,213",
                        peachpuff: "255,218,185",
                        peru: "205,133,63",
                        pink: "255,192,203",
                        plum: "221,160,221",
                        powderblue: "176,224,230",
                        purple: "128,0,128",
                        red: "255,0,0",
                        rosybrown: "188,143,143",
                        royalblue: "65,105,225",
                        saddlebrown: "139,69,19",
                        salmon: "250,128,114",
                        sandybrown: "244,164,96",
                        seagreen: "46,139,87",
                        seashell: "255,245,238",
                        sienna: "160,82,45",
                        silver: "192,192,192",
                        skyblue: "135,206,235",
                        slateblue: "106,90,205",
                        slategray: "112,128,144",
                        snow: "255,250,250",
                        springgreen: "0,255,127",
                        steelblue: "70,130,180",
                        tan: "210,180,140",
                        teal: "0,128,128",
                        thistle: "216,191,216",
                        tomato: "255,99,71",
                        turquoise: "64,224,208",
                        violet: "238,130,238",
                        wheat: "245,222,179",
                        whitesmoke: "245,245,245",
                        white: "255,255,255",
                        yellowgreen: "154,205,50",
                        yellow: "255,255,0"
                    }
                },
                Hooks: {
                    templates: {
                        textShadow: ["Color X Y Blur", "black 0px 0px 0px"],
                        boxShadow: ["Color X Y Blur Spread", "black 0px 0px 0px 0px"],
                        clip: ["Top Right Bottom Left", "0px 0px 0px 0px"],
                        backgroundPosition: ["X Y", "0% 0%"],
                        transformOrigin: ["X Y Z", "50% 50% 0px"],
                        perspectiveOrigin: ["X Y", "50% 50%"]
                    },
                    registered: {},
                    register: function() {
                        for (var e = 0; e < k.Lists.colors.length; e++) {
                            var t = "color" === k.Lists.colors[e] ? "0 0 0 1" : "255 255 255 1";
                            k.Hooks.templates[k.Lists.colors[e]] = ["Red Green Blue Alpha", t]
                        }
                        var i, o, n;
                        if (m)
                            for (i in k.Hooks.templates)
                                if (k.Hooks.templates.hasOwnProperty(i)) {
                                    o = k.Hooks.templates[i], n = o[0].split(" ");
                                    var s = o[1].match(k.RegEx.valueSplit);
                                    "Color" === n[0] && (n.push(n.shift()), s.push(s.shift()), k.Hooks.templates[i] = [n.join(" "), s.join(" ")])
                                } for (i in k.Hooks.templates)
                            if (k.Hooks.templates.hasOwnProperty(i)) {
                                o = k.Hooks.templates[i], n = o[0].split(" ");
                                for (var r in n)
                                    if (n.hasOwnProperty(r)) {
                                        var a = i + n[r],
                                            l = r;
                                        k.Hooks.registered[a] = [i, l]
                                    }
                            }
                    },
                    getRoot: function(e) {
                        var t = k.Hooks.registered[e];
                        return t ? t[0] : e
                    },
                    getUnit: function(e, t) {
                        var i = (e.substr(t || 0, 5).match(/^[a-z%]+/) || [])[0] || "";
                        return i && w(k.Lists.units, i) ? i : ""
                    },
                    fixColors: function(e) {
                        return e.replace(/(rgba?\(\s*)?(\b[a-z]+\b)/g, function(e, t, i) {
                            return k.Lists.colorNames.hasOwnProperty(i) ? (t || "rgba(") + k.Lists.colorNames[i] + (t ? "" : ",1)") : t + i
                        })
                    },
                    cleanRootPropertyValue: function(e, t) {
                        return k.RegEx.valueUnwrap.test(t) && (t = t.match(k.RegEx.valueUnwrap)[1]), k.Values.isCSSNullValue(t) && (t = k.Hooks.templates[e][1]), t
                    },
                    extractValue: function(e, t) {
                        var i = k.Hooks.registered[e];
                        if (i) {
                            var o = i[0],
                                n = i[1];
                            return t = k.Hooks.cleanRootPropertyValue(o, t), t.toString().match(k.RegEx.valueSplit)[n]
                        }
                        return t
                    },
                    injectValue: function(e, t, i) {
                        var o = k.Hooks.registered[e];
                        if (o) {
                            var n, s = o[0],
                                r = o[1];
                            return i = k.Hooks.cleanRootPropertyValue(s, i), n = i.toString().match(k.RegEx.valueSplit), n[r] = t, n.join(" ")
                        }
                        return i
                    }
                },
                Normalizations: {
                    registered: {
                        clip: function(e, t, i) {
                            switch (e) {
                                case "name":
                                    return "clip";
                                case "extract":
                                    var o;
                                    return k.RegEx.wrappedValueAlreadyExtracted.test(i) ? o = i : (o = i.toString().match(k.RegEx.valueUnwrap), o = o ? o[1].replace(/,(\s+)?/g, " ") : i), o;
                                case "inject":
                                    return "rect(" + i + ")"
                            }
                        },
                        blur: function(e, t, i) {
                            switch (e) {
                                case "name":
                                    return T.State.isFirefox ? "filter" : "-webkit-filter";
                                case "extract":
                                    var o = parseFloat(i);
                                    if (!o && 0 !== o) {
                                        var n = i.toString().match(/blur\(([0-9]+[A-z]+)\)/i);
                                        o = n ? n[1] : 0
                                    }
                                    return o;
                                case "inject":
                                    return parseFloat(i) ? "blur(" + i + ")" : "none"
                            }
                        },
                        opacity: function(e, t, i) {
                            if (m <= 8) switch (e) {
                                case "name":
                                    return "filter";
                                case "extract":
                                    var o = i.toString().match(/alpha\(opacity=(.*)\)/i);
                                    return i = o ? o[1] / 100 : 1;
                                case "inject":
                                    return t.style.zoom = 1, parseFloat(i) >= 1 ? "" : "alpha(opacity=" + parseInt(100 * parseFloat(i), 10) + ")"
                            } else switch (e) {
                                case "name":
                                    return "opacity";
                                case "extract":
                                case "inject":
                                    return i
                            }
                        }
                    },
                    register: function() {
                        function e(e, t, i) {
                            if ("border-box" === k.getPropertyValue(t, "boxSizing").toString().toLowerCase() === (i || !1)) {
                                var o, n, s = 0,
                                    r = "width" === e ? ["Left", "Right"] : ["Top", "Bottom"],
                                    a = ["padding" + r[0], "padding" + r[1], "border" + r[0] + "Width", "border" + r[1] + "Width"];
                                for (o = 0; o < a.length; o++) n = parseFloat(k.getPropertyValue(t, a[o])), isNaN(n) || (s += n);
                                return i ? -s : s
                            }
                            return 0
                        }

                        function t(t, i) {
                            return function(o, n, s) {
                                switch (o) {
                                    case "name":
                                        return t;
                                    case "extract":
                                        return parseFloat(s) + e(t, n, i);
                                    case "inject":
                                        return parseFloat(s) - e(t, n, i) + "px"
                                }
                            }
                        }
                        m && !(m > 9) || T.State.isGingerbread || (k.Lists.transformsBase = k.Lists.transformsBase.concat(k.Lists.transforms3D));
                        for (var i = 0; i < k.Lists.transformsBase.length; i++) ! function() {
                            var e = k.Lists.transformsBase[i];
                            k.Normalizations.registered[e] = function(t, i, n) {
                                switch (t) {
                                    case "name":
                                        return "transform";
                                    case "extract":
                                        return r(i) === o || r(i).transformCache[e] === o ? /^scale/i.test(e) ? 1 : 0 : r(i).transformCache[e].replace(/[()]/g, "");
                                    case "inject":
                                        var s = !1;
                                        switch (e.substr(0, e.length - 1)) {
                                            case "translate":
                                                s = !/(%|px|em|rem|vw|vh|\d)$/i.test(n);
                                                break;
                                            case "scal":
                                            case "scale":
                                                T.State.isAndroid && r(i).transformCache[e] === o && n < 1 && (n = 1), s = !/(\d)$/i.test(n);
                                                break;
                                            case "skew":
                                            case "rotate":
                                                s = !/(deg|\d)$/i.test(n)
                                        }
                                        return s || (r(i).transformCache[e] = "(" + n + ")"), r(i).transformCache[e]
                                }
                            }
                        }();
                        for (var n = 0; n < k.Lists.colors.length; n++) ! function() {
                            var e = k.Lists.colors[n];
                            k.Normalizations.registered[e] = function(t, i, n) {
                                switch (t) {
                                    case "name":
                                        return e;
                                    case "extract":
                                        var s;
                                        if (k.RegEx.wrappedValueAlreadyExtracted.test(n)) s = n;
                                        else {
                                            var r, a = {
                                                black: "rgb(0, 0, 0)",
                                                blue: "rgb(0, 0, 255)",
                                                gray: "rgb(128, 128, 128)",
                                                green: "rgb(0, 128, 0)",
                                                red: "rgb(255, 0, 0)",
                                                white: "rgb(255, 255, 255)"
                                            };
                                            /^[A-z]+$/i.test(n) ? r = a[n] !== o ? a[n] : a.black : k.RegEx.isHex.test(n) ? r = "rgb(" + k.Values.hexToRgb(n).join(" ") + ")" : /^rgba?\(/i.test(n) || (r = a.black), s = (r || n).toString().match(k.RegEx.valueUnwrap)[1].replace(/,(\s+)?/g, " ")
                                        }
                                        return (!m || m > 8) && 3 === s.split(" ").length && (s += " 1"), s;
                                    case "inject":
                                        return /^rgb/.test(n) ? n : (m <= 8 ? 4 === n.split(" ").length && (n = n.split(/\s+/).slice(0, 3).join(" ")) : 3 === n.split(" ").length && (n += " 1"), (m <= 8 ? "rgb" : "rgba") + "(" + n.replace(/\s+/g, ",").replace(/\.(\d)+(?=,)/g, "") + ")")
                                }
                            }
                        }();
                        k.Normalizations.registered.innerWidth = t("width", !0), k.Normalizations.registered.innerHeight = t("height", !0), k.Normalizations.registered.outerWidth = t("width"), k.Normalizations.registered.outerHeight = t("height")
                    }
                },
                Names: {
                    camelCase: function(e) {
                        return e.replace(/-(\w)/g, function(e, t) {
                            return t.toUpperCase()
                        })
                    },
                    SVGAttribute: function(e) {
                        var t = "width|height|x|y|cx|cy|r|rx|ry|x1|x2|y1|y2";
                        return (m || T.State.isAndroid && !T.State.isChrome) && (t += "|transform"), new RegExp("^(" + t + ")$", "i").test(e)
                    },
                    prefixCheck: function(e) {
                        if (T.State.prefixMatches[e]) return [T.State.prefixMatches[e], !0];
                        for (var t = ["", "Webkit", "Moz", "ms", "O"], i = 0, o = t.length; i < o; i++) {
                            var n;
                            if (n = 0 === i ? e : t[i] + e.replace(/^\w/, function(e) {
                                    return e.toUpperCase()
                                }), b.isString(T.State.prefixElement.style[n])) return T.State.prefixMatches[e] = n, [n, !0]
                        }
                        return [e, !1]
                    }
                },
                Values: {
                    hexToRgb: function(e) {
                        var t, i = /^#?([a-f\d])([a-f\d])([a-f\d])$/i,
                            o = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i;
                        return e = e.replace(i, function(e, t, i, o) {
                            return t + t + i + i + o + o
                        }), t = o.exec(e), t ? [parseInt(t[1], 16), parseInt(t[2], 16), parseInt(t[3], 16)] : [0, 0, 0]
                    },
                    isCSSNullValue: function(e) {
                        return !e || /^(none|auto|transparent|(rgba\(0, ?0, ?0, ?0\)))$/i.test(e)
                    },
                    getUnitType: function(e) {
                        return /^(rotate|skew)/i.test(e) ? "deg" : /(^(scale|scaleX|scaleY|scaleZ|alpha|flexGrow|flexHeight|zIndex|fontWeight)$)|((opacity|red|green|blue|alpha)$)/i.test(e) ? "" : "px"
                    },
                    getDisplayType: function(e) {
                        var t = e && e.tagName.toString().toLowerCase();
                        return /^(b|big|i|small|tt|abbr|acronym|cite|code|dfn|em|kbd|strong|samp|var|a|bdo|br|img|map|object|q|script|span|sub|sup|button|input|label|select|textarea)$/i.test(t) ? "inline" : /^(li)$/i.test(t) ? "list-item" : /^(tr)$/i.test(t) ? "table-row" : /^(table)$/i.test(t) ? "table" : /^(tbody)$/i.test(t) ? "table-row-group" : "block"
                    },
                    addClass: function(e, t) {
                        if (e)
                            if (e.classList) e.classList.add(t);
                            else if (b.isString(e.className)) e.className += (e.className.length ? " " : "") + t;
                        else {
                            var i = e.getAttribute(m <= 7 ? "className" : "class") || "";
                            e.setAttribute("class", i + (i ? " " : "") + t)
                        }
                    },
                    removeClass: function(e, t) {
                        if (e)
                            if (e.classList) e.classList.remove(t);
                            else if (b.isString(e.className)) e.className = e.className.toString().replace(new RegExp("(^|\\s)" + t.split(" ").join("|") + "(\\s|$)", "gi"), " ");
                        else {
                            var i = e.getAttribute(m <= 7 ? "className" : "class") || "";
                            e.setAttribute("class", i.replace(new RegExp("(^|s)" + t.split(" ").join("|") + "(s|$)", "gi"), " "))
                        }
                    }
                },
                getPropertyValue: function(e, i, n, s) {
                    function a(e, i) {
                        var n = 0;
                        if (m <= 8) n = f.css(e, i);
                        else {
                            var l = !1;
                            /^(width|height)$/.test(i) && 0 === k.getPropertyValue(e, "display") && (l = !0, k.setPropertyValue(e, "display", k.Values.getDisplayType(e)));
                            var c = function() {
                                l && k.setPropertyValue(e, "display", "none")
                            };
                            if (!s) {
                                if ("height" === i && "border-box" !== k.getPropertyValue(e, "boxSizing").toString().toLowerCase()) {
                                    var d = e.offsetHeight - (parseFloat(k.getPropertyValue(e, "borderTopWidth")) || 0) - (parseFloat(k.getPropertyValue(e, "borderBottomWidth")) || 0) - (parseFloat(k.getPropertyValue(e, "paddingTop")) || 0) - (parseFloat(k.getPropertyValue(e, "paddingBottom")) || 0);
                                    return c(), d
                                }
                                if ("width" === i && "border-box" !== k.getPropertyValue(e, "boxSizing").toString().toLowerCase()) {
                                    var u = e.offsetWidth - (parseFloat(k.getPropertyValue(e, "borderLeftWidth")) || 0) - (parseFloat(k.getPropertyValue(e, "borderRightWidth")) || 0) - (parseFloat(k.getPropertyValue(e, "paddingLeft")) || 0) - (parseFloat(k.getPropertyValue(e, "paddingRight")) || 0);
                                    return c(), u
                                }
                            }
                            var h;
                            h = r(e) === o ? t.getComputedStyle(e, null) : r(e).computedStyle ? r(e).computedStyle : r(e).computedStyle = t.getComputedStyle(e, null), "borderColor" === i && (i = "borderTopColor"), n = 9 === m && "filter" === i ? h.getPropertyValue(i) : h[i], "" !== n && null !== n || (n = e.style[i]), c()
                        }
                        if ("auto" === n && /^(top|right|bottom|left)$/i.test(i)) {
                            var p = a(e, "position");
                            ("fixed" === p || "absolute" === p && /top|left/i.test(i)) && (n = f(e).position()[i] + "px")
                        }
                        return n
                    }
                    var l;
                    if (k.Hooks.registered[i]) {
                        var c = i,
                            d = k.Hooks.getRoot(c);
                        n === o && (n = k.getPropertyValue(e, k.Names.prefixCheck(d)[0])), k.Normalizations.registered[d] && (n = k.Normalizations.registered[d]("extract", e, n)), l = k.Hooks.extractValue(c, n)
                    } else if (k.Normalizations.registered[i]) {
                        var u, h;
                        u = k.Normalizations.registered[i]("name", e), "transform" !== u && (h = a(e, k.Names.prefixCheck(u)[0]), k.Values.isCSSNullValue(h) && k.Hooks.templates[i] && (h = k.Hooks.templates[i][1])), l = k.Normalizations.registered[i]("extract", e, h)
                    }
                    if (!/^[\d-]/.test(l)) {
                        var p = r(e);
                        if (p && p.isSVG && k.Names.SVGAttribute(i))
                            if (/^(height|width)$/i.test(i)) try {
                                l = e.getBBox()[i]
                            } catch (e) {
                                l = 0
                            } else l = e.getAttribute(i);
                            else l = a(e, k.Names.prefixCheck(i)[0])
                    }
                    return k.Values.isCSSNullValue(l) && (l = 0), T.debug, l
                },
                setPropertyValue: function(e, i, o, n, s) {
                    var a = i;
                    if ("scroll" === i) s.container ? s.container["scroll" + s.direction] = o : "Left" === s.direction ? t.scrollTo(o, s.alternateValue) : t.scrollTo(s.alternateValue, o);
                    else if (k.Normalizations.registered[i] && "transform" === k.Normalizations.registered[i]("name", e)) k.Normalizations.registered[i]("inject", e, o), a = "transform", o = r(e).transformCache[i];
                    else {
                        if (k.Hooks.registered[i]) {
                            var l = i,
                                c = k.Hooks.getRoot(i);
                            n = n || k.getPropertyValue(e, c), o = k.Hooks.injectValue(l, o, n), i = c
                        }
                        if (k.Normalizations.registered[i] && (o = k.Normalizations.registered[i]("inject", e, o), i = k.Normalizations.registered[i]("name", e)), a = k.Names.prefixCheck(i)[0], m <= 8) try {
                            e.style[a] = o
                        } catch (e) {
                            T.debug
                        } else {
                            var d = r(e);
                            d && d.isSVG && k.Names.SVGAttribute(i) ? e.setAttribute(i, o) : e.style[a] = o
                        }
                        T.debug
                    }
                    return [a, o]
                },
                flushTransformCache: function(e) {
                    var t = "",
                        i = r(e);
                    if ((m || T.State.isAndroid && !T.State.isChrome) && i && i.isSVG) {
                        var o = function(t) {
                                return parseFloat(k.getPropertyValue(e, t))
                            },
                            n = {
                                translate: [o("translateX"), o("translateY")],
                                skewX: [o("skewX")],
                                skewY: [o("skewY")],
                                scale: 1 !== o("scale") ? [o("scale"), o("scale")] : [o("scaleX"), o("scaleY")],
                                rotate: [o("rotateZ"), 0, 0]
                            };
                        f.each(r(e).transformCache, function(e) {
                            /^translate/i.test(e) ? e = "translate" : /^scale/i.test(e) ? e = "scale" : /^rotate/i.test(e) && (e = "rotate"), n[e] && (t += e + "(" + n[e].join(" ") + ") ", delete n[e])
                        })
                    } else {
                        var s, a;
                        f.each(r(e).transformCache, function(i) {
                            if (s = r(e).transformCache[i], "transformPerspective" === i) return a = s, !0;
                            9 === m && "rotateZ" === i && (i = "rotate"), t += i + s + " "
                        }), a && (t = "perspective" + a + " " + t)
                    }
                    k.setPropertyValue(e, "transform", t)
                }
            };
            k.Hooks.register(), k.Normalizations.register(), T.hook = function(e, t, i) {
                var n;
                return e = s(e), f.each(e, function(e, s) {
                    if (r(s) === o && T.init(s), i === o) n === o && (n = k.getPropertyValue(s, t));
                    else {
                        var a = k.setPropertyValue(s, t, i);
                        "transform" === a[0] && T.CSS.flushTransformCache(s), n = a
                    }
                }), n
            };
            var z = function e() {
                function n() {
                    return m ? z.promise || null : g
                }

                function c(e, n) {
                    function s(s) {
                        var d, p;
                        if (l.begin && 0 === A) try {
                            l.begin.call(y, y)
                        } catch (e) {
                            setTimeout(function() {
                                throw e
                            }, 1)
                        }
                        if ("scroll" === L) {
                            var m, g, v, x = /^x$/i.test(l.axis) ? "Left" : "Top",
                                C = parseFloat(l.offset) || 0;
                            l.container ? b.isWrapped(l.container) || b.isNode(l.container) ? (l.container = l.container[0] || l.container, m = l.container["scroll" + x], v = m + f(e).position()[x.toLowerCase()] + C) : l.container = null : (m = T.State.scrollAnchor[T.State["scrollProperty" + x]], g = T.State.scrollAnchor[T.State["scrollProperty" + ("Left" === x ? "Top" : "Left")]], v = f(e).offset()[x.toLowerCase()] + C), c = {
                                scroll: {
                                    rootPropertyValue: !1,
                                    startValue: m,
                                    currentValue: m,
                                    endValue: v,
                                    unitType: "",
                                    easing: l.easing,
                                    scrollData: {
                                        container: l.container,
                                        direction: x,
                                        alternateValue: g
                                    }
                                },
                                element: e
                            }, T.debug
                        } else if ("reverse" === L) {
                            if (!(d = r(e))) return;
                            if (!d.tweensContainer) return void f.dequeue(e, l.queue);
                            "none" === d.opts.display && (d.opts.display = "auto"), "hidden" === d.opts.visibility && (d.opts.visibility = "visible"), d.opts.loop = !1, d.opts.begin = null, d.opts.complete = null, S.easing || delete l.easing, S.duration || delete l.duration, l = f.extend({}, d.opts, l), p = f.extend(!0, {}, d ? d.tweensContainer : null);
                            for (var O in p)
                                if (p.hasOwnProperty(O) && "element" !== O) {
                                    var $ = p[O].startValue;
                                    p[O].startValue = p[O].currentValue = p[O].endValue, p[O].endValue = $, b.isEmptyObject(S) || (p[O].easing = l.easing), T.debug
                                } c = p
                        } else if ("start" === L) {
                            d = r(e), d && d.tweensContainer && !0 === d.isAnimating && (p = d.tweensContainer);
                            var P = function(n, s) {
                                var r, u = k.Hooks.getRoot(n),
                                    h = !1,
                                    m = s[0],
                                    g = s[1],
                                    v = s[2];
                                if (!(d && d.isSVG || "tween" === u || !1 !== k.Names.prefixCheck(u)[1] || k.Normalizations.registered[u] !== o)) return void T.debug;
                                (l.display !== o && null !== l.display && "none" !== l.display || l.visibility !== o && "hidden" !== l.visibility) && /opacity|filter/.test(n) && !v && 0 !== m && (v = 0), l._cacheValues && p && p[n] ? (v === o && (v = p[n].endValue + p[n].unitType), h = d.rootPropertyValueCache[u]) : k.Hooks.registered[n] ? v === o ? (h = k.getPropertyValue(e, u), v = k.getPropertyValue(e, n, h)) : h = k.Hooks.templates[u][1] : v === o && (v = k.getPropertyValue(e, n));
                                var y, w, _, x = !1,
                                    S = function(e, t) {
                                        var i, o;
                                        return o = (t || "0").toString().toLowerCase().replace(/[%A-z]+$/, function(e) {
                                            return i = e, ""
                                        }), i || (i = k.Values.getUnitType(e)), [o, i]
                                    };
                                if (v !== m && b.isString(v) && b.isString(m)) {
                                    r = "";
                                    var C = 0,
                                        z = 0,
                                        E = [],
                                        A = [],
                                        O = 0,
                                        $ = 0,
                                        L = 0;
                                    for (v = k.Hooks.fixColors(v), m = k.Hooks.fixColors(m); C < v.length && z < m.length;) {
                                        var P = v[C],
                                            W = m[z];
                                        if (/[\d\.-]/.test(P) && /[\d\.-]/.test(W)) {
                                            for (var I = P, D = W, H = ".", j = "."; ++C < v.length;) {
                                                if ((P = v[C]) === H) H = "..";
                                                else if (!/\d/.test(P)) break;
                                                I += P
                                            }
                                            for (; ++z < m.length;) {
                                                if ((W = m[z]) === j) j = "..";
                                                else if (!/\d/.test(W)) break;
                                                D += W
                                            }
                                            var F = k.Hooks.getUnit(v, C),
                                                M = k.Hooks.getUnit(m, z);
                                            if (C += F.length, z += M.length, F === M) I === D ? r += I + F : (r += "{" + E.length + ($ ? "!" : "") + "}" + F, E.push(parseFloat(I)), A.push(parseFloat(D)));
                                            else {
                                                var B = parseFloat(I),
                                                    R = parseFloat(D);
                                                r += (O < 5 ? "calc" : "") + "(" + (B ? "{" + E.length + ($ ? "!" : "") + "}" : "0") + F + " + " + (R ? "{" + (E.length + (B ? 1 : 0)) + ($ ? "!" : "") + "}" : "0") + M + ")", B && (E.push(B), A.push(0)), R && (E.push(0), A.push(R))
                                            }
                                        } else {
                                            if (P !== W) {
                                                O = 0;
                                                break
                                            }
                                            r += P, C++, z++, 0 === O && "c" === P || 1 === O && "a" === P || 2 === O && "l" === P || 3 === O && "c" === P || O >= 4 && "(" === P ? O++ : (O && O < 5 || O >= 4 && ")" === P && --O < 5) && (O = 0), 0 === $ && "r" === P || 1 === $ && "g" === P || 2 === $ && "b" === P || 3 === $ && "a" === P || $ >= 3 && "(" === P ? (3 === $ && "a" === P && (L = 1), $++) : L && "," === P ? ++L > 3 && ($ = L = 0) : (L && $ < (L ? 5 : 4) || $ >= (L ? 4 : 3) && ")" === P && --$ < (L ? 5 : 4)) && ($ = L = 0)
                                        }
                                    }
                                    C === v.length && z === m.length || (T.debug, r = o), r && (E.length ? (T.debug, v = E, m = A, w = _ = "") : r = o)
                                }
                                r || (y = S(n, v), v = y[0], _ = y[1], y = S(n, m), m = y[0].replace(/^([+-\/*])=/, function(e, t) {
                                    return x = t, ""
                                }), w = y[1], v = parseFloat(v) || 0, m = parseFloat(m) || 0, "%" === w && (/^(fontSize|lineHeight)$/.test(n) ? (m /= 100, w = "em") : /^scale/.test(n) ? (m /= 100, w = "") : /(Red|Green|Blue)$/i.test(n) && (m = m / 100 * 255, w = "")));
                                if (/[\/*]/.test(x)) w = _;
                                else if (_ !== w && 0 !== v)
                                    if (0 === m) w = _;
                                    else {
                                        a = a || function() {
                                            var o = {
                                                    myParent: e.parentNode || i.body,
                                                    position: k.getPropertyValue(e, "position"),
                                                    fontSize: k.getPropertyValue(e, "fontSize")
                                                },
                                                n = o.position === N.lastPosition && o.myParent === N.lastParent,
                                                s = o.fontSize === N.lastFontSize;
                                            N.lastParent = o.myParent, N.lastPosition = o.position, N.lastFontSize = o.fontSize;
                                            var r = {};
                                            if (s && n) r.emToPx = N.lastEmToPx, r.percentToPxWidth = N.lastPercentToPxWidth, r.percentToPxHeight = N.lastPercentToPxHeight;
                                            else {
                                                var a = d && d.isSVG ? i.createElementNS("http://www.w3.org/2000/svg", "rect") : i.createElement("div");
                                                T.init(a), o.myParent.appendChild(a), f.each(["overflow", "overflowX", "overflowY"], function(e, t) {
                                                    T.CSS.setPropertyValue(a, t, "hidden")
                                                }), T.CSS.setPropertyValue(a, "position", o.position), T.CSS.setPropertyValue(a, "fontSize", o.fontSize), T.CSS.setPropertyValue(a, "boxSizing", "content-box"), f.each(["minWidth", "maxWidth", "width", "minHeight", "maxHeight", "height"], function(e, t) {
                                                    T.CSS.setPropertyValue(a, t, "100%")
                                                }), T.CSS.setPropertyValue(a, "paddingLeft", "100em"), r.percentToPxWidth = N.lastPercentToPxWidth = (parseFloat(k.getPropertyValue(a, "width", null, !0)) || 1) / 100, r.percentToPxHeight = N.lastPercentToPxHeight = (parseFloat(k.getPropertyValue(a, "height", null, !0)) || 1) / 100, r.emToPx = N.lastEmToPx = (parseFloat(k.getPropertyValue(a, "paddingLeft")) || 1) / 100, o.myParent.removeChild(a)
                                            }
                                            return null === N.remToPx && (N.remToPx = parseFloat(k.getPropertyValue(i.body, "fontSize")) || 16), null === N.vwToPx && (N.vwToPx = parseFloat(t.innerWidth) / 100, N.vhToPx = parseFloat(t.innerHeight) / 100), r.remToPx = N.remToPx, r.vwToPx = N.vwToPx, r.vhToPx = N.vhToPx, T.debug, r
                                        }();
                                        var V = /margin|padding|left|right|width|text|word|letter/i.test(n) || /X$/.test(n) || "x" === n ? "x" : "y";
                                        switch (_) {
                                            case "%":
                                                v *= "x" === V ? a.percentToPxWidth : a.percentToPxHeight;
                                                break;
                                            case "px":
                                                break;
                                            default:
                                                v *= a[_ + "ToPx"]
                                        }
                                        switch (w) {
                                            case "%":
                                                v *= 1 / ("x" === V ? a.percentToPxWidth : a.percentToPxHeight);
                                                break;
                                            case "px":
                                                break;
                                            default:
                                                v *= 1 / a[w + "ToPx"]
                                        }
                                    } switch (x) {
                                    case "+":
                                        m = v + m;
                                        break;
                                    case "-":
                                        m = v - m;
                                        break;
                                    case "*":
                                        m *= v;
                                        break;
                                    case "/":
                                        m = v / m
                                }
                                c[n] = {
                                    rootPropertyValue: h,
                                    startValue: v,
                                    currentValue: v,
                                    endValue: m,
                                    unitType: w,
                                    easing: g
                                }, r && (c[n].pattern = r), T.debug
                            };
                            for (var W in _)
                                if (_.hasOwnProperty(W)) {
                                    var I = k.Names.camelCase(W),
                                        D = function(t, i) {
                                            var o, s, r;
                                            return b.isFunction(t) && (t = t.call(e, n, E)), b.isArray(t) ? (o = t[0], !b.isArray(t[1]) && /^[\d-]/.test(t[1]) || b.isFunction(t[1]) || k.RegEx.isHex.test(t[1]) ? r = t[1] : b.isString(t[1]) && !k.RegEx.isHex.test(t[1]) && T.Easings[t[1]] || b.isArray(t[1]) ? (s = i ? t[1] : u(t[1], l.duration), r = t[2]) : r = t[1] || t[2]) : o = t, i || (s = s || l.easing), b.isFunction(o) && (o = o.call(e, n, E)), b.isFunction(r) && (r = r.call(e, n, E)), [o || 0, s, r]
                                        }(_[W]);
                                    if (w(k.Lists.colors, I)) {
                                        var H = D[0],
                                            F = D[1],
                                            M = D[2];
                                        if (k.RegEx.isHex.test(H)) {
                                            for (var B = ["Red", "Green", "Blue"], R = k.Values.hexToRgb(H), V = M ? k.Values.hexToRgb(M) : o, q = 0; q < B.length; q++) {
                                                var U = [R[q]];
                                                F && U.push(F), V !== o && U.push(V[q]), P(I + B[q], U)
                                            }
                                            continue
                                        }
                                    }
                                    P(I, D)
                                } c.element = e
                        }
                        c.element && (k.Values.addClass(e, "velocity-animating"), j.push(c), d = r(e), d && ("" === l.queue && (d.tweensContainer = c, d.opts = l), d.isAnimating = !0), A === E - 1 ? (T.State.calls.push([j, y, l, null, z.resolver, null, 0]), !1 === T.State.isTicking && (T.State.isTicking = !0, h())) : A++)
                    }
                    var a, l = f.extend({}, T.defaults, S),
                        c = {};
                    switch (r(e) === o && T.init(e), parseFloat(l.delay) && !1 !== l.queue && f.queue(e, l.queue, function(t, i) {
                        if (!0 === i) return !0;
                        T.velocityQueueEntryFlag = !0;
                        var o = T.State.delayedElements.count++;
                        T.State.delayedElements[o] = e;
                        var n = function(e) {
                            return function() {
                                T.State.delayedElements[e] = !1, t()
                            }
                        }(o);
                        r(e).delayBegin = (new Date).getTime(), r(e).delay = parseFloat(l.delay), r(e).delayTimer = {
                            setTimeout: setTimeout(t, parseFloat(l.delay)),
                            next: n
                        }
                    }), l.duration.toString().toLowerCase()) {
                        case "fast":
                            l.duration = 200;
                            break;
                        case "normal":
                            l.duration = x;
                            break;
                        case "slow":
                            l.duration = 600;
                            break;
                        default:
                            l.duration = parseFloat(l.duration) || 1
                    }
                    if (!1 !== T.mock && (!0 === T.mock ? l.duration = l.delay = 1 : (l.duration *= parseFloat(T.mock) || 1, l.delay *= parseFloat(T.mock) || 1)), l.easing = u(l.easing, l.duration), l.begin && !b.isFunction(l.begin) && (l.begin = null), l.progress && !b.isFunction(l.progress) && (l.progress = null), l.complete && !b.isFunction(l.complete) && (l.complete = null), l.display !== o && null !== l.display && (l.display = l.display.toString().toLowerCase(), "auto" === l.display && (l.display = T.CSS.Values.getDisplayType(e))), l.visibility !== o && null !== l.visibility && (l.visibility = l.visibility.toString().toLowerCase()), l.mobileHA = l.mobileHA && T.State.isMobile && !T.State.isGingerbread, !1 === l.queue)
                        if (l.delay) {
                            var d = T.State.delayedElements.count++;
                            T.State.delayedElements[d] = e;
                            var p = function(e) {
                                return function() {
                                    T.State.delayedElements[e] = !1, s()
                                }
                            }(d);
                            r(e).delayBegin = (new Date).getTime(), r(e).delay = parseFloat(l.delay), r(e).delayTimer = {
                                setTimeout: setTimeout(s, parseFloat(l.delay)),
                                next: p
                            }
                        } else s();
                    else f.queue(e, l.queue, function(e, t) {
                        if (!0 === t) return z.promise && z.resolver(y), !0;
                        T.velocityQueueEntryFlag = !0, s(e)
                    });
                    "" !== l.queue && "fx" !== l.queue || "inprogress" === f.queue(e)[0] || f.dequeue(e)
                }
                var d, m, g, v, y, _, S, C = arguments[0] && (arguments[0].p || f.isPlainObject(arguments[0].properties) && !arguments[0].properties.names || b.isString(arguments[0].properties));
                b.isWrapped(this) ? (m = !1, v = 0, y = this, g = this) : (m = !0, v = 1, y = C ? arguments[0].elements || arguments[0].e : arguments[0]);
                var z = {
                    promise: null,
                    resolver: null,
                    rejecter: null
                };
                if (m && T.Promise && (z.promise = new T.Promise(function(e, t) {
                        z.resolver = e, z.rejecter = t
                    })), C ? (_ = arguments[0].properties || arguments[0].p, S = arguments[0].options || arguments[0].o) : (_ = arguments[v], S = arguments[v + 1]), !(y = s(y))) return void(z.promise && (_ && S && !1 === S.promiseRejectEmpty ? z.resolver() : z.rejecter()));
                var E = y.length,
                    A = 0;
                if (!/^(stop|finish|finishAll|pause|resume)$/i.test(_) && !f.isPlainObject(S)) {
                    var O = v + 1;
                    S = {};
                    for (var $ = O; $ < arguments.length; $++) b.isArray(arguments[$]) || !/^(fast|normal|slow)$/i.test(arguments[$]) && !/^\d/.test(arguments[$]) ? b.isString(arguments[$]) || b.isArray(arguments[$]) ? S.easing = arguments[$] : b.isFunction(arguments[$]) && (S.complete = arguments[$]) : S.duration = arguments[$]
                }
                var L;
                switch (_) {
                    case "scroll":
                        L = "scroll";
                        break;
                    case "reverse":
                        L = "reverse";
                        break;
                    case "pause":
                        var P = (new Date).getTime();
                        return f.each(y, function(e, t) {
                            a(t, P)
                        }), f.each(T.State.calls, function(e, t) {
                            var i = !1;
                            t && f.each(t[1], function(e, n) {
                                var s = S === o ? "" : S;
                                return !0 !== s && t[2].queue !== s && (S !== o || !1 !== t[2].queue) || (f.each(y, function(e, o) {
                                    if (o === n) return t[5] = {
                                        resume: !1
                                    }, i = !0, !1
                                }), !i && void 0)
                            })
                        }), n();
                    case "resume":
                        return f.each(y, function(e, t) {
                            l(t, P)
                        }), f.each(T.State.calls, function(e, t) {
                            var i = !1;
                            t && f.each(t[1], function(e, n) {
                                var s = S === o ? "" : S;
                                return !0 !== s && t[2].queue !== s && (S !== o || !1 !== t[2].queue) || (!t[5] || (f.each(y, function(e, o) {
                                    if (o === n) return t[5].resume = !0, i = !0, !1
                                }), !i && void 0))
                            })
                        }), n();
                    case "finish":
                    case "finishAll":
                    case "stop":
                        f.each(y, function(e, t) {
                            r(t) && r(t).delayTimer && (clearTimeout(r(t).delayTimer.setTimeout), r(t).delayTimer.next && r(t).delayTimer.next(), delete r(t).delayTimer), "finishAll" !== _ || !0 !== S && !b.isString(S) || (f.each(f.queue(t, b.isString(S) ? S : ""), function(e, t) {
                                b.isFunction(t) && t()
                            }), f.queue(t, b.isString(S) ? S : "", []))
                        });
                        var W = [];
                        return f.each(T.State.calls, function(e, t) {
                            t && f.each(t[1], function(i, n) {
                                var s = S === o ? "" : S;
                                if (!0 !== s && t[2].queue !== s && (S !== o || !1 !== t[2].queue)) return !0;
                                f.each(y, function(i, o) {
                                    if (o === n)
                                        if ((!0 === S || b.isString(S)) && (f.each(f.queue(o, b.isString(S) ? S : ""), function(e, t) {
                                                b.isFunction(t) && t(null, !0)
                                            }), f.queue(o, b.isString(S) ? S : "", [])), "stop" === _) {
                                            var a = r(o);
                                            a && a.tweensContainer && (!0 === s || "" === s) && f.each(a.tweensContainer, function(e, t) {
                                                t.endValue = t.currentValue
                                            }), W.push(e)
                                        } else "finish" !== _ && "finishAll" !== _ || (t[2].duration = 1)
                                })
                            })
                        }), "stop" === _ && (f.each(W, function(e, t) {
                            p(t, !0)
                        }), z.promise && z.resolver(y)), n();
                    default:
                        if (!f.isPlainObject(_) || b.isEmptyObject(_)) {
                            if (b.isString(_) && T.Redirects[_]) {
                                d = f.extend({}, S);
                                var I = d.duration,
                                    D = d.delay || 0;
                                return !0 === d.backwards && (y = f.extend(!0, [], y).reverse()), f.each(y, function(e, t) {
                                    parseFloat(d.stagger) ? d.delay = D + parseFloat(d.stagger) * e : b.isFunction(d.stagger) && (d.delay = D + d.stagger.call(t, e, E)), d.drag && (d.duration = parseFloat(I) || (/^(callout|transition)/.test(_) ? 1e3 : x), d.duration = Math.max(d.duration * (d.backwards ? 1 - e / E : (e + 1) / E), .75 * d.duration, 200)), T.Redirects[_].call(t, t, d || {}, e, E, y, z.promise ? z : o)
                                }), n()
                            }
                            var H = "Velocity: First argument (" + _ + ") was not a property map, a known action, or a registered redirect. Aborting.";
                            return z.promise ? z.rejecter(new Error(H)) : t.console, n()
                        }
                        L = "start"
                }
                var N = {
                        lastParent: null,
                        lastPosition: null,
                        lastFontSize: null,
                        lastPercentToPxWidth: null,
                        lastPercentToPxHeight: null,
                        lastEmToPx: null,
                        remToPx: null,
                        vwToPx: null,
                        vhToPx: null
                    },
                    j = [];
                f.each(y, function(e, t) {
                    b.isNode(t) && c(t, e)
                }), d = f.extend({}, T.defaults, S), d.loop = parseInt(d.loop, 10);
                var F = 2 * d.loop - 1;
                if (d.loop)
                    for (var M = 0; M < F; M++) {
                        var B = {
                            delay: d.delay,
                            progress: d.progress
                        };
                        M === F - 1 && (B.display = d.display, B.visibility = d.visibility, B.complete = d.complete), e(y, "reverse", B)
                    }
                return n()
            };
            T = f.extend(z, T), T.animate = z;
            var E = t.requestAnimationFrame || g;
            if (!T.State.isMobile && i.hidden !== o) {
                var A = function() {
                    i.hidden ? (E = function(e) {
                        return setTimeout(function() {
                            e(!0)
                        }, 16)
                    }, h()) : E = t.requestAnimationFrame || g
                };
                A(), i.addEventListener("visibilitychange", A)
            }
            return e.Velocity = T, e !== t && (e.fn.velocity = z, e.fn.velocity.defaults = T.defaults), f.each(["Down", "Up"], function(e, t) {
                T.Redirects["slide" + t] = function(e, i, n, s, r, a) {
                    var l = f.extend({}, i),
                        c = l.begin,
                        d = l.complete,
                        u = {},
                        h = {
                            height: "",
                            marginTop: "",
                            marginBottom: "",
                            paddingTop: "",
                            paddingBottom: ""
                        };
                    l.display === o && (l.display = "Down" === t ? "inline" === T.CSS.Values.getDisplayType(e) ? "inline-block" : "block" : "none"), l.begin = function() {
                        0 === n && c && c.call(r, r);
                        for (var i in h)
                            if (h.hasOwnProperty(i)) {
                                u[i] = e.style[i];
                                var o = k.getPropertyValue(e, i);
                                h[i] = "Down" === t ? [o, 0] : [0, o]
                            } u.overflow = e.style.overflow, e.style.overflow = "hidden"
                    }, l.complete = function() {
                        for (var t in u) u.hasOwnProperty(t) && (e.style[t] = u[t]);
                        n === s - 1 && (d && d.call(r, r), a && a.resolver(r))
                    }, T(e, h, l)
                }
            }), f.each(["In", "Out"], function(e, t) {
                T.Redirects["fade" + t] = function(e, i, n, s, r, a) {
                    var l = f.extend({}, i),
                        c = l.complete,
                        d = {
                            opacity: "In" === t ? 1 : 0
                        };
                    0 !== n && (l.begin = null), l.complete = n !== s - 1 ? null : function() {
                        c && c.call(r, r), a && a.resolver(r)
                    }, l.display === o && (l.display = "In" === t ? "auto" : "none"), T(this, d, l)
                }
            }), T
        }(window.jQuery || window.Zepto || window, window, window ? window.document : void 0)
    })
}, function(e, t, i) {
    "use strict";

    function o(e) {
        return e && e.__esModule ? e : {
            default: e
        }
    }
    i(23), i(25), i(22), i(21), i(6), i(12), i(18), i(20), i(5), i(19);
    var n = i(8),
        s = o(n),
        r = i(9),
        a = o(r),
        l = i(10),
        c = o(l),
        d = i(1),
        u = o(d),
        h = i(24),
        p = o(h);
    i(16), i(14), i(17), i(15), i(13), i(7), i(11);
    for (var f in p.default.prototype) u.default[f] = p.default.prototype[f];
    $(document).ready(function() {
        var e = new s.default,
            t = new a.default,
            i = new c.default;
        e.init(), t.init(), i.init(), $("#products").bind("DOMSubtreeModified", function() {
            t.init()
        })
    })
}, function(e, t) {}, function(e, t, i) {
    "use strict";

    function o(e) {
        return e && e.__esModule ? e : {
            default: e
        }
    }

    function n() {
        r.default.each((0, r.default)(u), function(e, t) {
            (0, r.default)(t).TouchSpin({
                verticalbuttons: !0,
                verticalupclass: "fal fa-angle-up touchspin-up",
                verticaldownclass: "fal fa-angle-down touchspin-down",
                buttondown_class: "btn btn-touchspin  js-touchspin js-increase-product-quantity",
                buttonup_class: "btn btn-touchspin js-decrease-product-quantity",
                min: parseInt((0, r.default)(t).attr("min"), 10),
                max: 1e6
            })
        }), m.switchErrorStat()
    }
    var s = i(0),
        r = o(s),
        a = i(1),
        l = o(a),
        c = i(27),
        d = o(c);
    l.default.cart = l.default.cart || {}, l.default.cart.active_inputs = null;
    var u = 'input[name="product-quantity-spin"]',
        h = !1,
        p = !1,
        f = "";
    (0, r.default)(document).ready(function() {
        function e(e) {
            return "on.startupspin" === e || "on.startdownspin" === e
        }

        function t(e) {
            return "on.startupspin" === e
        }

        function i(e) {
            var t = e.parents(".bootstrap-touchspin").find(f);
            return t.is(":focus") ? null : t
        }

        function o(e) {
            var t = e.split("-"),
                i = void 0,
                o = void 0,
                n = "";
            for (i = 0; i < t.length; i++) o = t[i], 0 !== i && (o = o.substring(0, 1).toUpperCase() + o.substring(1)), n += o;
            return n
        }

        function s(n, s) {
            if (!e(s)) return {
                url: n.attr("href"),
                type: o(n.data("link-action"))
            };
            var r = i(n);
            if (r) {
                return t(s) ? {
                    url: r.data("up-url"),
                    type: "increaseProductQuantity"
                } : {
                    url: r.data("down-url"),
                    type: "decreaseProductQuantity"
                }
            }
        }

        function a(e, t, i, o) {
            return y(), r.default.ajax({
                url: e,
                method: "POST",
                data: t,
                dataType: "json",
                beforeSend: function(e) {
                    g.push(e)
                }
            }).then(function(e) {
                m.checkUpdateOpertation(e), i.val(e.quantity);
                var t;
                t = i && i.dataset ? i.dataset : e, l.default.emit("updateCart", {
                    reason: t
                })
            }).fail(function(e) {
                l.default.emit("handleError", {
                    eventType: "updateProductQuantityInCart",
                    resp: e
                })
            })
        }

        function c(e) {
            return {
                ajax: "1",
                qty: Math.abs(e),
                action: "update",
                op: h(e)
            }
        }

        function h(e) {
            return e > 0 ? "up" : "down"
        }

        function p(e) {
            var t = (0, r.default)(e.currentTarget),
                i = t.data("update-url"),
                o = t.attr("value"),
                n = t.val();
            if (n != parseInt(n) || n < 0 || isNaN(n)) return void t.val(o);
            var s = n - o;
            0 !== s && (t.attr("value", n), a(i, c(s), t))
        }
        var f = ".js-cart-line-product-quantity",
            g = [];
        l.default.on("updateCart", function() {
            (0, r.default)(".quickview").modal("hide")
        }), l.default.on("updatedCart", function() {
            n()
        }), n();
        var v = (0, r.default)("body"),
            y = function() {
                for (var e; g.length > 0;) e = g.pop(), e.abort()
            },
            w = function(e) {
                return (0, r.default)(e.parents(".bootstrap-touchspin").find("input"))
            },
            b = function(e) {
                e.preventDefault();
                var t = (0, r.default)(e.currentTarget),
                    i = e.currentTarget.dataset,
                    o = s(t, e.namespace),
                    n = {
                        ajax: "1",
                        action: "update"
                    };
                void 0 !== o && (y(), r.default.ajax({
                    url: o.url,
                    method: "POST",
                    data: n,
                    dataType: "json",
                    beforeSend: function(e) {
                        g.push(e)
                    }
                }).then(function(e) {
                    m.checkUpdateOpertation(e), w(t).val(e.quantity), l.default.emit("updateCart", {
                        reason: i
                    })
                }).fail(function(e) {
                    l.default.emit("handleError", {
                        eventType: "updateProductInCart",
                        resp: e,
                        cartAction: o.type
                    })
                }))
            };
        v.on("click", '[data-link-action="delete-from-cart"], [data-link-action="remove-voucher"]', b), v.on("touchspin.on.startdownspin", u, b), v.on("touchspin.on.startupspin", u, b), v.on("keyup", f, (0, d.default)(400, function(e) {
            p(e)
        })), v.on("click", ".js-discount .code", function(e) {
            e.stopPropagation();
            var t = (0, r.default)(e.currentTarget);
            return (0, r.default)("[name=discount_name]").val(t.text()), !1
        })
    });
    var m = {
        switchErrorStat: function() {
            var e = (0, r.default)(".checkout a");
            if (((0, r.default)("#notifications article.alert-danger").length || "" !== f && !h) && e.addClass("disabled"), "" !== f) {
                var t = ' <article class="alert alert-danger" role="alert" data-alert="danger"><ul><li>' + f + "</li></ul></article>";
                (0, r.default)("#notifications").html(t), f = "", p = !1
            } else !h && p && (h = !1, p = !1, (0, r.default)("#notifications").html(""), e.removeClass("disabled"))
        },
        checkUpdateOpertation: function(e) {
            h = e.hasOwnProperty("hasError");
            var t = e.errors || "";
            f = t instanceof Array ? t.join(" ") : t, p = !0
        }
    }
}, function(e, t, i) {
    "use strict";

    function o(e) {
        return e && e.__esModule ? e : {
            default: e
        }
    }

    function n() {
        0 !== (0, r.default)(".js-cancel-address").length && (0, r.default)(".checkout-step:not(.js-current-step) .step-title").addClass("not-allowed"), (0, r.default)(".js-terms a").on("click", function(e) {
            e.preventDefault();
            var t = (0, r.default)(e.target).attr("href");
            t && (t += "?content_only=1", r.default.get(t, function(e) {
                (0, r.default)("#modal").find(".modal-content").html((0, r.default)(e).find(".page-cms").contents())
            }).fail(function(e) {
                l.default.emit("handleError", {
                    eventType: "clickTerms",
                    resp: e
                })
            })), (0, r.default)("#modal").modal("show")
        }), (0, r.default)(".js-gift-checkbox").on("click", function(e) {
            (0, r.default)("#gift").collapse("toggle")
        })
    }
    var s = i(0),
        r = o(s),
        a = i(1),
        l = o(a);
    (0, r.default)(document).ready(function() {
        1 === (0, r.default)("body#checkout").length && n(), l.default.on("updatedDeliveryForm", function(e) {
            (0, r.default)(".carrier-extra-content").hide(), e.deliveryOption.find(".carrier-extra-content").slideDown()
        })
    })
}, function(e, t, i) {
    "use strict";

    function o(e) {
        return e && e.__esModule ? e : {
            default: e
        }
    }
    var n = i(1),
        s = o(n),
        r = i(0),
        a = o(r);
    s.default.blockcart = s.default.blockcart || {}, s.default.blockcart.showModal = function(e) {
        function t() {
            return (0, a.default)("#blockcart-modal")
        }
        var i = t();
        i.length && i.remove(), (0, a.default)("body").append(e), i = t(), i.modal("show").on("hidden.bs.modal", function(e) {
            s.default.emit("updateProduct", {
                reason: e.currentTarget.dataset
            })
        })
    }
}, function(e, t, i) {
    "use strict";

    function o(e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }
    Object.defineProperty(t, "__esModule", {
        value: !0
    });
    var n = function() {
            function e(e, t) {
                for (var i = 0; i < t.length; i++) {
                    var o = t[i];
                    o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
                }
            }
            return function(t, i, o) {
                return i && e(t.prototype, i), o && e(t, o), t
            }
        }(),
        s = i(0),
        r = function(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }(s),
        a = function() {
            function e() {
                o(this, e)
            }
            return n(e, [{
                key: "init",
                value: function() {
                    this.parentFocus(), this.togglePasswordVisibility()
                }
            }, {
                key: "parentFocus",
                value: function() {
                    (0, r.default)(".js-child-focus").focus(function() {
                        (0, r.default)(this).closest(".js-parent-focus").addClass("focus")
                    }), (0, r.default)(".js-child-focus").focusout(function() {
                        (0, r.default)(this).closest(".js-parent-focus").removeClass("focus")
                    })
                }
            }, {
                key: "togglePasswordVisibility",
                value: function() {
                    (0, r.default)('button[data-action="show-password"]').on("click", function() {
                        var e = (0, r.default)(this).closest(".input-group").children("input.js-visible-password");
                        "password" === e.attr("type") ? (e.attr("type", "text"), (0, r.default)(this).text((0, r.default)(this).data("textHide"))) : (e.attr("type", "password"), (0, r.default)(this).text((0, r.default)(this).data("textShow")))
                    })
                }
            }]), e
        }();
    t.default = a, e.exports = t.default
}, function(e, t, i) {
    "use strict";

    function o(e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }
    Object.defineProperty(t, "__esModule", {
        value: !0
    });
    var n = function() {
            function e(e, t) {
                for (var i = 0; i < t.length; i++) {
                    var o = t[i];
                    o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
                }
            }
            return function(t, i, o) {
                return i && e(t.prototype, i), o && e(t, o), t
            }
        }(),
        s = i(0),
        r = function(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }(s),
        a = function() {
            function e() {
                o(this, e)
            }
            return n(e, [{
                key: "init",
                value: function() {
                    (0, r.default)(".js-product-miniature").each(function(e, t) {
                        var i = (0, r.default)(t).find(".discount-percentage"),
                            o = (0, r.default)(t).find(".on-sale"),
                            n = (0, r.default)(t).find(".new");
                        i.length && (n.css("top", 2 * i.height() + 10), i.css("top", -(0, r.default)(t).find(".thumbnail-container").height() + (0, r.default)(t).find(".product-description").height() + 10)), o.length && (i.css("top", parseFloat(i.css("top")) + o.height() + 10), n.css("top", 2 * i.height() + o.height() + 20)), (0, r.default)(t).find(".color").length > 5 && function() {
                            var e = 0;
                            (0, r.default)(t).find(".color").each(function(t, i) {
                                t > 4 && ((0, r.default)(i).hide(), e++)
                            }), (0, r.default)(t).find(".js-count").append("+" + e)
                        }()
                    })
                }
            }]), e
        }();
    t.default = a, e.exports = t.default
}, function(e, t, i) {
    "use strict";

    function o(e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }
    Object.defineProperty(t, "__esModule", {
        value: !0
    });
    var n = function() {
            function e(e, t) {
                for (var i = 0; i < t.length; i++) {
                    var o = t[i];
                    o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
                }
            }
            return function(t, i, o) {
                return i && e(t.prototype, i), o && e(t, o), t
            }
        }(),
        s = i(0),
        r = function(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }(s);
    i(2);
    var a = function() {
        function e() {
            o(this, e)
        }
        return n(e, [{
            key: "init",
            value: function() {
                var e = this,
                    t = (0, r.default)(".js-modal-arrows"),
                    i = (0, r.default)(".js-modal-product-images"),
                    o = (0, r.default)(".on-sale");
                (0, r.default)(".js-modal-thumb").on("click", function(e) {
                    (0, r.default)(".js-modal-thumb").hasClass("selected") && (0, r.default)(".js-modal-thumb").removeClass("selected"), (0, r.default)(e.currentTarget).addClass("selected"), (0, r.default)(".js-modal-product-cover").attr("src", (0, r.default)(e.target).data("image-large-src")), (0, r.default)(".js-modal-product-cover").attr("title", (0, r.default)(e.target).attr("title")), (0, r.default)(".js-modal-product-cover").attr("alt", (0, r.default)(e.target).attr("alt"))
                }), o.length && (0, r.default)("#product").length && (0, r.default)(".new").css("top", o.height() + 10), (0, r.default)(".js-modal-product-images li").length <= 5 ? t.css("opacity", ".2") : t.on("click", function(t) {
                    (0, r.default)(t.target).hasClass("arrow-up") && i.position().top < 0 ? (e.move("up"), (0, r.default)(".js-modal-arrow-down").css("opacity", "1")) : (0, r.default)(t.target).hasClass("arrow-down") && i.position().top + i.height() > (0, r.default)(".js-modal-mask").height() && (e.move("down"), (0, r.default)(".js-modal-arrow-up").css("opacity", "1"))
                })
            }
        }, {
            key: "move",
            value: function(e) {
                var t = (0, r.default)(".js-modal-product-images"),
                    i = (0, r.default)(".js-modal-product-images li img").height() + 10,
                    o = t.position().top;
                t.velocity({
                    translateY: "up" === e ? o + i : o - i
                }, function() {
                    t.position().top >= 0 ? (0, r.default)(".js-modal-arrow-up").css("opacity", ".2") : t.position().top + t.height() <= (0, r.default)(".js-modal-mask").height() && (0, r.default)(".js-modal-arrow-down").css("opacity", ".2")
                })
            }
        }]), e
    }();
    t.default = a, e.exports = t.default
}, function(e, t, i) {
    "use strict";

    function o() {
        jQuery(window).width() < 576 ? ($(".products-grid").removeClass("grid-1 grid-2 grid-3 grid-4"), $(".products-grid").addClass("grid-1")) : jQuery(window).width() < 768 ? ($(".products-grid").removeClass("grid-1 grid-2 grid-3 grid-4"), $(".products-grid").addClass("grid-2")) : jQuery(window).width() < 992 ? ($(".products-grid").removeClass("grid-1 grid-2 grid-3 grid-4"), $(".products-grid").addClass("grid-3")) : ($(".products-grid").removeClass("grid-1 grid-2 grid-3 grid-4"), $(".products-grid").addClass("grid-" + jmsSetting.shop_grid_column))
    }

    function u() {
        if (jQuery(window).width() < 992) {
            $('.products-grid.grid-1-2-1-2').removeClass('grid-1 grid-2 grid-3 grid-4');
            $('.products-grid.grid-2-1-2-1').removeClass('grid-1 grid-2 grid-3 grid-4');
            $('.products-grid.grid-1-3-1-3').removeClass('grid-1 grid-2 grid-3 grid-4');
            $('.products-grid.grid-3-1-3-1').removeClass('grid-1 grid-2 grid-3 grid-4');
        } 
    }

    function n() {
        jQuery(window).width() < 480 && jmsSetting.footer_block_collapse ? $("#footer-main .block .block-content").addClass("collapse") : $("#footer-main .block .block-content").removeClass("collapse")
    }
    jQuery(function(e) {
        var t = e(window),
            i = e(".header-sticky");
        if (0 != i.length) {
            var o = i.offset().top;
            t.scroll(function() {
                o < t.scrollTop() ? (i.hasClass("sticky-slide") && i.slideDown(), i.addClass("sticky")) : (i.hasClass("sticky-slide") && i.slideUp(), i.removeClass("sticky"))
            }), e(".btn-search-full").click(function() {
                e("#search-form-full").toggleClass("open")
            }), e(".search-box-close").click(function() {
                e("#search-form-full").removeClass("open")
            }), e("#sidebar-btn").click(function() {
                e("#header-sidebar").hasClass("right-sidebar") ? e("body").toggleClass("sidebar-right-open") : e("body").toggleClass("sidebar-left-open")
            }), e(document).on("click", function() {
                e("body").hasClass("sidebar-right-open") && e("body").removeClass("sidebar-right-open"), e("body").hasClass("sidebar-left-open") && e("body").removeClass("sidebar-left-open")
            }), e("#header-sidebar, #sidebar-btn").on("click", function(e) {
                e.stopPropagation();
            });
            var n = !1;
            var rtl = false;
		    if ($("body").hasClass("rtl")) rtl = true;
            if (jmsSetting.carousel_lazyload) var n = !0;
            e.each(e(".owl-carousel.content"), function(t, i) {
                e(this).owlCarousel({
                    rtl: rtl,
                    loop: !0,
                    margin: 10,
                    nav: false,
                    dots: false,
                    autoplay: e(this).data("auto"),
                    rewind: e(this).data("rewind"),
                    slideBy: e(this).data("slidebypage"),
                    lazyLoad: n,
                    responsive: {
                        0: {
                            items: 2
                        },
                        576: {
                            items: 2
                        },
                        768: {
                            items: 3
                        },
                        992: {
                            items: 4
                        },
                        1200: {
                            items: 5
                        }
                    }
                })
            }),
            e.each(e(".owl-carousel.customs-carousel-product"), function(t, i) {
                e(this).owlCarousel({
                    rtl: rtl,
                    loop: !0,
                    margin: 28,
                    nav: false,
                    dots: false,
                    autoplay: e(this).data("auto"),
                    rewind: e(this).data("rewind"),
                    slideBy: e(this).data("slidebypage"),
                    lazyLoad: n,
                    responsive: {
                        0: {
                            items: 1
                        },
                        576: {
                            items: 2
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: 4
                        }
                    }
                })
            }),
            e.each(e(".owl-carousel"), function(t, i) {
                e(this).owlCarousel({
                    rtl: rtl,
                    loop: !0,
                    margin: 28,
                    nav: e(this).data("nav"),
                    dots: e(this).data("dots"),
                    autoplay: e(this).data("auto"),
                    rewind: e(this).data("rewind"),
                    slideBy: e(this).data("slidebypage"),
                    lazyLoad: n,
                    responsive: {
                        0: {
                            items: e(this).data("xs")
                        },
                        576: {
                            items: e(this).data("sm")
                        },
                        768: {
                            items: e(this).data("md")
                        },
                        992: {
                            items: e(this).data("lg")
                        },
                        1200: {
                            items: e(this).data("items")
                        }
                    }
                })
            }), e(".product-image-zoom").elevateZoom({
                zoomType: "inner",
                cursor: "crosshair",
                zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 750,
            }), e.each(e(".countdown"), function(t, i) {
                var o = e(this).html(),
                    n = o.split(" "),
                    s = n[0],
                    r = n[1],
                    a = s.split("-"),
                    l = r.split(":"),
                    c = new Date(a[0], a[1] - 1, a[2], l[0], l[1], l[2], 0);
                e(this).countdown({
                    until: c
                })
            })
        }
    }), $(document).mouseup(function(e) {
        var t = $(".search-box");
        t.is(e.target) || 0 !== t.has(e.target).length || t.closest(".search-overlay").removeClass("open")
    }), $(document).on("click", ".switch-view", function(e) {
        $(".switch-view").removeClass("active"), $(this).addClass("active"), $(this).hasClass("view-grid") ? ($("#product_list").removeClass("products-list"), $("#product_list").addClass("products-grid")) : ($("#product_list").removeClass("products-grid"), $("#product_list").addClass("products-list"))
    }), $(document).on("click", ".dropdown-menu", function(e) {
        e.stopPropagation()
    }), jQuery(document).ready(function() {
        $(".jms-megamenu").jmsMegaMenu({
            event: "hover",
            duration: 100
        }), o(), n(), u()
    }), jQuery(window).resize(function() {
        o(), n(), u()
    }), $(document).on("click", "#footer-main .block-title i", function(e) {
        $(this).parent().parent().find(".block-content").toggleClass("collapse"), $(this).parent().parent().find(".block-content").hasClass("collapse") ? ($(this).removeClass("fa-minus"), $(this).addClass("fa-plus")) : ($(this).removeClass("fa-plus"), $(this).addClass("fa-minus"))
    })
}, function(e, t, i) {
    "use strict";

    function o() {
        (0, r.default)("#order-return-form table thead input[type=checkbox]").on("click", function() {
            var e = (0, r.default)(this).prop("checked");
            (0, r.default)("#order-return-form table tbody input[type=checkbox]").each(function(t, i) {
                (0, r.default)(i).prop("checked", e)
            })
        })
    }

    function n() {
        (0, r.default)("body#order-detail") && o()
    }
    var s = i(0),
        r = function(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }(s);
    (0, r.default)(document).ready(n)
}, function(e, t, i) {
    "use strict";
    ! function(e) {
        var t = 0,
            i = function(t, i) {
                this.options = i, this.$elementFilestyle = [], this.$element = e(t)
            };
        i.prototype = {
            clear: function() {
                this.$element.val(""), this.$elementFilestyle.find(":text").val(""), this.$elementFilestyle.find(".badge").remove()
            },
            destroy: function() {
                this.$element.removeAttr("style").removeData("filestyle"), this.$elementFilestyle.remove()
            },
            disabled: function(e) {
                if (!0 === e) this.options.disabled || (this.$element.attr("disabled", "true"), this.$elementFilestyle.find("label").attr("disabled", "true"), this.options.disabled = !0);
                else {
                    if (!1 !== e) return this.options.disabled;
                    this.options.disabled && (this.$element.removeAttr("disabled"), this.$elementFilestyle.find("label").removeAttr("disabled"), this.options.disabled = !1)
                }
            },
            buttonBefore: function(e) {
                if (!0 === e) this.options.buttonBefore || (this.options.buttonBefore = !0, this.options.input && (this.$elementFilestyle.remove(), this.constructor(), this.pushNameFiles()));
                else {
                    if (!1 !== e) return this.options.buttonBefore;
                    this.options.buttonBefore && (this.options.buttonBefore = !1, this.options.input && (this.$elementFilestyle.remove(), this.constructor(), this.pushNameFiles()))
                }
            },
            icon: function(e) {
                if (!0 === e) this.options.icon || (this.options.icon = !0, this.$elementFilestyle.find("label").prepend(this.htmlIcon()));
                else {
                    if (!1 !== e) return this.options.icon;
                    this.options.icon && (this.options.icon = !1, this.$elementFilestyle.find(".icon-span-filestyle").remove())
                }
            },
            input: function(e) {
                if (!0 === e) this.options.input || (this.options.input = !0, this.options.buttonBefore ? this.$elementFilestyle.append(this.htmlInput()) : this.$elementFilestyle.prepend(this.htmlInput()), this.$elementFilestyle.find(".badge").remove(), this.pushNameFiles(), this.$elementFilestyle.find(".group-span-filestyle").addClass("input-group-btn"));
                else {
                    if (!1 !== e) return this.options.input;
                    if (this.options.input) {
                        this.options.input = !1, this.$elementFilestyle.find(":text").remove();
                        var t = this.pushNameFiles();
                        t.length > 0 && this.options.badge && this.$elementFilestyle.find("label").append(' <span class="badge">' + t.length + "</span>"), this.$elementFilestyle.find(".group-span-filestyle").removeClass("input-group-btn")
                    }
                }
            },
            size: function(e) {
                if (void 0 === e) return this.options.size;
                var t = this.$elementFilestyle.find("label"),
                    i = this.$elementFilestyle.find("input");
                t.removeClass("btn-lg btn-sm"), i.removeClass("input-lg input-sm"), "nr" != e && (t.addClass("btn-" + e), i.addClass("input-" + e))
            },
            placeholder: function(e) {
                if (void 0 === e) return this.options.placeholder;
                this.options.placeholder = e, this.$elementFilestyle.find("input").attr("placeholder", e)
            },
            buttonText: function(e) {
                if (void 0 === e) return this.options.buttonText;
                this.options.buttonText = e, this.$elementFilestyle.find("label .buttonText").html(this.options.buttonText)
            },
            buttonName: function(e) {
                if (void 0 === e) return this.options.buttonName;
                this.options.buttonName = e, this.$elementFilestyle.find("label").attr({
                    class: "btn " + this.options.buttonName
                })
            },
            iconName: function(e) {
                if (void 0 === e) return this.options.iconName;
                this.$elementFilestyle.find(".icon-span-filestyle").attr({
                    class: "icon-span-filestyle " + this.options.iconName
                })
            },
            htmlIcon: function() {
                return this.options.icon ? '<span class="icon-span-filestyle ' + this.options.iconName + '"></span> ' : ""
            },
            htmlInput: function() {
                return this.options.input ? '<input type="text" class="form-control ' + ("nr" == this.options.size ? "" : "input-" + this.options.size) + '" placeholder="' + this.options.placeholder + '" disabled> ' : ""
            },
            pushNameFiles: function() {
                var e = "",
                    t = [];
                void 0 === this.$element[0].files ? t[0] = {
                    name: this.$element[0] && this.$element[0].value
                } : t = this.$element[0].files;
                for (var i = 0; i < t.length; i++) e += t[i].name.split("\\").pop() + ", ";
                return "" !== e ? this.$elementFilestyle.find(":text").val(e.replace(/\, $/g, "")) : this.$elementFilestyle.find(":text").val(""), t
            },
            constructor: function() {
                var i = this,
                    o = "",
                    n = i.$element.attr("id"),
                    s = "";
                "" !== n && n || (n = "filestyle-" + t, i.$element.attr({
                    id: n
                }), t++), s = '<span class="group-span-filestyle ' + (i.options.input ? "input-group-btn" : "") + '"><label for="' + n + '" class="btn ' + i.options.buttonName + " " + ("nr" == i.options.size ? "" : "btn-" + i.options.size) + '" ' + (i.options.disabled ? 'disabled="true"' : "") + ">" + i.htmlIcon() + '<span class="buttonText">' + i.options.buttonText + "</span></label></span>", o = i.options.buttonBefore ? s + i.htmlInput() : i.htmlInput() + s, i.$elementFilestyle = e('<div class="bootstrap-filestyle input-group">' + o + "</div>"), i.$elementFilestyle.find(".group-span-filestyle").attr("tabindex", "0").keypress(function(e) {
                    if (13 === e.keyCode || 32 === e.charCode) return i.$elementFilestyle.find("label").click(), !1
                }), i.$element.css({
                    position: "absolute",
                    clip: "rect(0px 0px 0px 0px)"
                }).attr("tabindex", "-1").after(i.$elementFilestyle), i.options.disabled && i.$element.attr("disabled", "true"), i.$element.change(function() {
                    var e = i.pushNameFiles();
                    0 == i.options.input && i.options.badge ? 0 == i.$elementFilestyle.find(".badge").length ? i.$elementFilestyle.find("label").append(' <span class="badge">' + e.length + "</span>") : 0 == e.length ? i.$elementFilestyle.find(".badge").remove() : i.$elementFilestyle.find(".badge").html(e.length) : i.$elementFilestyle.find(".badge").remove()
                }), window.navigator.userAgent.search(/firefox/i) > -1 && i.$elementFilestyle.find("label").click(function() {
                    return i.$element.click(), !1
                })
            }
        };
        var o = e.fn.filestyle;
        e.fn.filestyle = function(t, o) {
            var n = "",
                s = this.each(function() {
                    if ("file" === e(this).attr("type")) {
                        var s = e(this),
                            r = s.data("filestyle"),
                            a = e.extend({}, e.fn.filestyle.defaults, t, "object" == typeof t && t);
                        r || (s.data("filestyle", r = new i(this, a)), r.constructor()), "string" == typeof t && (n = r[t](o))
                    }
                });
            return void 0 !== typeof n ? n : s
        }, e.fn.filestyle.defaults = {
            buttonText: "Choose file",
            iconName: "glyphicon glyphicon-folder-open",
            buttonName: "btn-default",
            size: "nr",
            input: !0,
            badge: !0,
            icon: !0,
            buttonBefore: !1,
            disabled: !1,
            placeholder: ""
        }, e.fn.filestyle.noConflict = function() {
            return e.fn.filestyle = o, this
        }, e(function() {
            e(".filestyle").each(function() {
                var t = e(this),
                    i = {
                        input: "false" !== t.attr("data-input"),
                        icon: "false" !== t.attr("data-icon"),
                        buttonBefore: "true" === t.attr("data-buttonBefore"),
                        disabled: "true" === t.attr("data-disabled"),
                        size: t.attr("data-size"),
                        buttonText: t.attr("data-buttonText"),
                        buttonName: t.attr("data-buttonName"),
                        iconName: t.attr("data-iconName"),
                        badge: "false" !== t.attr("data-badge"),
                        placeholder: t.attr("data-placeholder")
                    };
                t.filestyle(i)
            })
        })
    }(window.jQuery)
}, function(e, t, i) {
    "use strict";
    var o, n, s;
    ! function(r) {
        n = [i(0)], o = r, void 0 !== (s = "function" == typeof o ? o.apply(t, n) : o) && (e.exports = s)
    }(function(e) {
        function t(e) {
            if (e instanceof Date) return e;
            if (String(e).match(r)) return String(e).match(/^[0-9]*$/) && (e = Number(e)), String(e).match(/\-/) && (e = String(e).replace(/\-/g, "/")), new Date(e);
            throw new Error("Couldn't cast `" + e + "` to a date object.")
        }

        function i(e) {
            var t = e.toString().replace(/([.?*+^$[\]\\(){}|-])/g, "\\$1");
            return new RegExp(t)
        }

        function o(e) {
            return function(t) {
                var o = t.match(/%(-|!)?[A-Z]{1}(:[^;]+;)?/gi);
                if (o)
                    for (var s = 0, r = o.length; s < r; ++s) {
                        var a = o[s].match(/%(-|!)?([a-zA-Z]{1})(:[^;]+;)?/),
                            c = i(a[0]),
                            d = a[1] || "",
                            u = a[3] || "",
                            h = null;
                        a = a[2], l.hasOwnProperty(a) && (h = l[a], h = Number(e[h])), null !== h && ("!" === d && (h = n(u, h)), "" === d && h < 10 && (h = "0" + h.toString()), t = t.replace(c, h.toString()))
                    }
                return t = t.replace(/%%/, "%")
            }
        }

        function n(e, t) {
            var i = "s",
                o = "";
            return e && (e = e.replace(/(:|;|\s)/gi, "").split(/\,/), 1 === e.length ? i = e[0] : (o = e[0], i = e[1])), Math.abs(t) > 1 ? i : o
        }
        var s = [],
            r = [],
            a = {
                precision: 100,
                elapse: !1,
                defer: !1
            };
        r.push(/^[0-9]*$/.source), r.push(/([0-9]{1,2}\/){2}[0-9]{4}( [0-9]{1,2}(:[0-9]{2}){2})?/.source), r.push(/[0-9]{4}([\/\-][0-9]{1,2}){2}( [0-9]{1,2}(:[0-9]{2}){2})?/.source), r = new RegExp(r.join("|"));
        var l = {
                Y: "years",
                m: "months",
                n: "daysToMonth",
                d: "daysToWeek",
                w: "weeks",
                W: "weeksToMonth",
                H: "hours",
                M: "minutes",
                S: "seconds",
                D: "totalDays",
                I: "totalHours",
                N: "totalMinutes",
                T: "totalSeconds"
            },
            c = function(t, i, o) {
                this.el = t, this.$el = e(t), this.interval = null, this.offset = {}, this.options = e.extend({}, a), this.instanceNumber = s.length, s.push(this), this.$el.data("countdown-instance", this.instanceNumber), o && ("function" == typeof o ? (this.$el.on("update.countdown", o), this.$el.on("stoped.countdown", o), this.$el.on("finish.countdown", o)) : this.options = e.extend({}, a, o)), this.setFinalDate(i), !1 === this.options.defer && this.start()
            };
        e.extend(c.prototype, {
            start: function() {
                null !== this.interval && clearInterval(this.interval);
                var e = this;
                this.update(), this.interval = setInterval(function() {
                    e.update.call(e)
                }, this.options.precision)
            },
            stop: function() {
                clearInterval(this.interval), this.interval = null, this.dispatchEvent("stoped")
            },
            toggle: function() {
                this.interval ? this.stop() : this.start()
            },
            pause: function() {
                this.stop()
            },
            resume: function() {
                this.start()
            },
            remove: function() {
                this.stop.call(this), s[this.instanceNumber] = null, delete this.$el.data().countdownInstance
            },
            setFinalDate: function(e) {
                this.finalDate = t(e)
            },
            update: function() {
                if (0 === this.$el.closest("html").length) return void this.remove();
                var t, i = void 0 !== e._data(this.el, "events"),
                    o = new Date;
                t = this.finalDate.getTime() - o.getTime(), t = Math.ceil(t / 1e3), t = !this.options.elapse && t < 0 ? 0 : Math.abs(t), this.totalSecsLeft !== t && i && (this.totalSecsLeft = t, this.elapsed = o >= this.finalDate, this.offset = {
                    seconds: this.totalSecsLeft % 60,
                    minutes: Math.floor(this.totalSecsLeft / 60) % 60,
                    hours: Math.floor(this.totalSecsLeft / 60 / 60) % 24,
                    days: Math.floor(this.totalSecsLeft / 60 / 60 / 24) % 7,
                    daysToWeek: Math.floor(this.totalSecsLeft / 60 / 60 / 24) % 7,
                    daysToMonth: Math.floor(this.totalSecsLeft / 60 / 60 / 24 % 30.4368),
                    weeks: Math.floor(this.totalSecsLeft / 60 / 60 / 24 / 7),
                    weeksToMonth: Math.floor(this.totalSecsLeft / 60 / 60 / 24 / 7) % 4,
                    months: Math.floor(this.totalSecsLeft / 60 / 60 / 24 / 30.4368),
                    years: Math.abs(this.finalDate.getFullYear() - o.getFullYear()),
                    totalDays: Math.floor(this.totalSecsLeft / 60 / 60 / 24),
                    totalHours: Math.floor(this.totalSecsLeft / 60 / 60),
                    totalMinutes: Math.floor(this.totalSecsLeft / 60),
                    totalSeconds: this.totalSecsLeft
                }, this.options.elapse || 0 !== this.totalSecsLeft ? this.dispatchEvent("update") : (this.stop(), this.dispatchEvent("finish")))
            },
            dispatchEvent: function(t) {
                var i = e.Event(t + ".countdown");
                i.finalDate = this.finalDate, i.elapsed = this.elapsed, i.offset = e.extend({}, this.offset), i.strftime = o(this.offset), this.$el.trigger(i)
            }
        }), e.fn.countdown = function() {
            var t = Array.prototype.slice.call(arguments, 0);
            return this.each(function() {
                var i = e(this).data("countdown-instance");
                if (void 0 !== i) {
                    var o = s[i],
                        n = t[0];
                    c.prototype.hasOwnProperty(n) ? o[n].apply(o, t.slice(1)) : null === String(n).match(/^[$A-Z_][0-9A-Z_$]*$/i) ? (o.setFinalDate.call(o, n), o.start()) : e.error("Method %s does not exist on jQuery.countdown".replace(/\%s/gi, n))
                } else new c(this, t[0], t[1])
            })
        }
    })
}, function(e, t, i) {
    "use strict";
    "function" != typeof Object.create && (Object.create = function(e) {
            function t() {}
            return t.prototype = e, new t
        }),
        function(e, t, i, o) {
            var n = {
                init: function(t, i) {
                    var o = this;
                    o.elem = i, o.$elem = e(i), o.imageSrc = o.$elem.data("zoom-image") ? o.$elem.data("zoom-image") : o.$elem.attr("src"), o.options = e.extend({}, e.fn.elevateZoom.options, t), o.options.tint && (o.options.lensColour = "none", o.options.lensOpacity = "1"), "inner" == o.options.zoomType && (o.options.showLens = !1), o.$elem.parent().removeAttr("title").removeAttr("alt"), o.zoomImage = o.imageSrc, o.refresh(1), e("#" + o.options.gallery + " a").click(function(t) {
                        return o.options.galleryActiveClass && (e("#" + o.options.gallery + " a").removeClass(o.options.galleryActiveClass), e(this).addClass(o.options.galleryActiveClass)), t.preventDefault(), e(this).data("zoom-image") ? o.zoomImagePre = e(this).data("zoom-image") : o.zoomImagePre = e(this).data("image"), o.swaptheimage(e(this).data("image"), o.zoomImagePre), !1
                    })
                },
                refresh: function(e) {
                    var t = this;
                    setTimeout(function() {
                        t.fetch(t.imageSrc)
                    }, e || t.options.refresh)
                },
                fetch: function(e) {
                    var t = this,
                        i = new Image;
                    i.onload = function() {
                        t.largeWidth = i.width, t.largeHeight = i.height, t.startZoom(), t.currentImage = t.imageSrc, t.options.onZoomedImageLoaded(t.$elem)
                    }, i.src = e
                },
                startZoom: function() {
                    var t = this;
                    if (t.nzWidth = t.$elem.width(), t.nzHeight = t.$elem.height(), t.isWindowActive = !1, t.isLensActive = !1, t.isTintActive = !1, t.overWindow = !1, t.options.imageCrossfade && (t.zoomWrap = t.$elem.wrap('<div style="height:' + t.nzHeight + "px;width:" + t.nzWidth + 'px;" class="zoomWrapper" />'), t.$elem.css("position", "absolute")), t.zoomLock = 1, t.scrollingLock = !1, t.changeBgSize = !1, t.currentZoomLevel = t.options.zoomLevel, t.nzOffset = t.$elem.offset(), t.widthRatio = t.largeWidth / t.currentZoomLevel / t.nzWidth, t.heightRatio = t.largeHeight / t.currentZoomLevel / t.nzHeight, "window" == t.options.zoomType && (t.zoomWindowStyle = "overflow: hidden;background-position: 0px 0px;text-align:center;background-color: " + String(t.options.zoomWindowBgColour) + ";width: " + String(t.options.zoomWindowWidth) + "px;height: " + String(t.options.zoomWindowHeight) + "px;float: left;background-size: " + t.largeWidth / t.currentZoomLevel + "px " + t.largeHeight / t.currentZoomLevel + "px;display: none;z-index:100;border: " + String(t.options.borderSize) + "px solid " + t.options.borderColour + ";background-repeat: no-repeat;position: absolute;"), "inner" == t.options.zoomType) {
                        var i = t.$elem.css("border-left-width");
                        t.zoomWindowStyle = "overflow: hidden;margin-left: " + String(i) + ";margin-top: " + String(i) + ";background-position: 0px 0px;width: " + String(t.nzWidth) + "px;height: " + String(t.nzHeight) + "px;px;float: left;display: none;cursor:" + t.options.cursor + ";px solid " + t.options.borderColour + ";background-repeat: no-repeat;position: absolute;"
                    }
                    "window" == t.options.zoomType && (t.nzHeight < t.options.zoomWindowWidth / t.widthRatio ? lensHeight = t.nzHeight : lensHeight = String(t.options.zoomWindowHeight / t.heightRatio), t.largeWidth < t.options.zoomWindowWidth ? lensWidth = t.nzWidth : lensWidth = t.options.zoomWindowWidth / t.widthRatio, t.lensStyle = "background-position: 0px 0px;width: " + String(t.options.zoomWindowWidth / t.widthRatio) + "px;height: " + String(t.options.zoomWindowHeight / t.heightRatio) + "px;float: right;display: none;overflow: hidden;z-index: 999;-webkit-transform: translateZ(0);opacity:" + t.options.lensOpacity + ";filter: alpha(opacity = " + 100 * t.options.lensOpacity + "); zoom:1;width:" + lensWidth + "px;height:" + lensHeight + "px;background-color:" + t.options.lensColour + ";cursor:" + t.options.cursor + ";border: " + t.options.lensBorderSize + "px solid " + t.options.lensBorderColour + ";background-repeat: no-repeat;position: absolute;"), t.tintStyle = "display: block;position: absolute;background-color: " + t.options.tintColour + ";filter:alpha(opacity=0);opacity: 0;width: " + t.nzWidth + "px;height: " + t.nzHeight + "px;", t.lensRound = "", "lens" == t.options.zoomType && (t.lensStyle = "background-position: 0px 0px;float: left;display: none;border: " + String(t.options.borderSize) + "px solid " + t.options.borderColour + ";width:" + String(t.options.lensSize) + "px;height:" + String(t.options.lensSize) + "px;background-repeat: no-repeat;position: absolute;"), "round" == t.options.lensShape && (t.lensRound = "border-top-left-radius: " + String(t.options.lensSize / 2 + t.options.borderSize) + "px;border-top-right-radius: " + String(t.options.lensSize / 2 + t.options.borderSize) + "px;border-bottom-left-radius: " + String(t.options.lensSize / 2 + t.options.borderSize) + "px;border-bottom-right-radius: " + String(t.options.lensSize / 2 + t.options.borderSize) + "px;"), t.zoomContainer = e('<div class="zoomContainer" style="-webkit-transform: translateZ(0);position:absolute;left:' + t.nzOffset.left + "px;top:" + t.nzOffset.top + "px;height:" + t.nzHeight + "px;width:" + t.nzWidth + 'px;"></div>'), e("body").append(t.zoomContainer), t.options.containLensZoom && "lens" == t.options.zoomType && t.zoomContainer.css("overflow", "hidden"), "inner" != t.options.zoomType && (t.zoomLens = e("<div class='zoomLens' style='" + t.lensStyle + t.lensRound + "'>&nbsp;</div>").appendTo(t.zoomContainer).click(function() {
                        t.$elem.trigger("click")
                    }), t.options.tint && (t.tintContainer = e("<div/>").addClass("tintContainer"), t.zoomTint = e("<div class='zoomTint' style='" + t.tintStyle + "'></div>"), t.zoomLens.wrap(t.tintContainer), t.zoomTintcss = t.zoomLens.after(t.zoomTint), t.zoomTintImage = e('<img style="position: absolute; left: 0px; top: 0px; max-width: none; width: ' + t.nzWidth + "px; height: " + t.nzHeight + 'px;" src="' + t.imageSrc + '">').appendTo(t.zoomLens).click(function() {
                        t.$elem.trigger("click")
                    }))), isNaN(t.options.zoomWindowPosition) ? t.zoomWindow = e("<div style='z-index:999;left:" + t.windowOffsetLeft + "px;top:" + t.windowOffsetTop + "px;" + t.zoomWindowStyle + "' class='zoomWindow'>&nbsp;</div>").appendTo("body").click(function() {
                        t.$elem.trigger("click")
                    }) : t.zoomWindow = e("<div style='z-index:999;left:" + t.windowOffsetLeft + "px;top:" + t.windowOffsetTop + "px;" + t.zoomWindowStyle + "' class='zoomWindow'>&nbsp;</div>").appendTo(t.zoomContainer).click(function() {
                        t.$elem.trigger("click")
                    }), t.zoomWindowContainer = e("<div/>").addClass("zoomWindowContainer").css("width", t.options.zoomWindowWidth), t.zoomWindow.wrap(t.zoomWindowContainer), "lens" == t.options.zoomType && t.zoomLens.css({
                        backgroundImage: "url('" + t.imageSrc + "')"
                    }), "window" == t.options.zoomType && t.zoomWindow.css({
                        backgroundImage: "url('" + t.imageSrc + "')"
                    }), "inner" == t.options.zoomType && t.zoomWindow.css({
                        backgroundImage: "url('" + t.imageSrc + "')"
                    }), t.$elem.bind("touchmove", function(e) {
                        e.preventDefault();
                        var i = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
                        t.setPosition(i)
                    }), t.zoomContainer.bind("touchmove", function(e) {
                        "inner" == t.options.zoomType && t.showHideWindow("show"), e.preventDefault();
                        var i = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
                        t.setPosition(i)
                    }), t.zoomContainer.bind("touchend", function(e) {
                        t.showHideWindow("hide"), t.options.showLens && t.showHideLens("hide"), t.options.tint && "inner" != t.options.zoomType && t.showHideTint("hide")
                    }), t.$elem.bind("touchend", function(e) {
                        t.showHideWindow("hide"), t.options.showLens && t.showHideLens("hide"), t.options.tint && "inner" != t.options.zoomType && t.showHideTint("hide")
                    }), t.options.showLens && (t.zoomLens.bind("touchmove", function(e) {
                        e.preventDefault();
                        var i = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
                        t.setPosition(i)
                    }), t.zoomLens.bind("touchend", function(e) {
                        t.showHideWindow("hide"), t.options.showLens && t.showHideLens("hide"), t.options.tint && "inner" != t.options.zoomType && t.showHideTint("hide")
                    })), t.$elem.bind("mousemove", function(e) {
                        0 == t.overWindow && t.setElements("show"), t.lastX === e.clientX && t.lastY === e.clientY || (t.setPosition(e), t.currentLoc = e), t.lastX = e.clientX, t.lastY = e.clientY
                    }), t.zoomContainer.bind("mousemove", function(e) {
                        0 == t.overWindow && t.setElements("show"), t.lastX === e.clientX && t.lastY === e.clientY || (t.setPosition(e), t.currentLoc = e), t.lastX = e.clientX, t.lastY = e.clientY
                    }), "inner" != t.options.zoomType && t.zoomLens.bind("mousemove", function(e) {
                        t.lastX === e.clientX && t.lastY === e.clientY || (t.setPosition(e), t.currentLoc = e), t.lastX = e.clientX, t.lastY = e.clientY
                    }), t.options.tint && "inner" != t.options.zoomType && t.zoomTint.bind("mousemove", function(e) {
                        t.lastX === e.clientX && t.lastY === e.clientY || (t.setPosition(e), t.currentLoc = e), t.lastX = e.clientX, t.lastY = e.clientY
                    }), "inner" == t.options.zoomType && t.zoomWindow.bind("mousemove", function(e) {
                        t.lastX === e.clientX && t.lastY === e.clientY || (t.setPosition(e), t.currentLoc = e), t.lastX = e.clientX, t.lastY = e.clientY
                    }), t.zoomContainer.add(t.$elem).mouseenter(function() {
                        0 == t.overWindow && t.setElements("show")
                    }).mouseleave(function() {
                        t.scrollLock || (t.setElements("hide"), t.options.onDestroy(t.$elem))
                    }), "inner" != t.options.zoomType && t.zoomWindow.mouseenter(function() {
                        t.overWindow = !0, t.setElements("hide")
                    }).mouseleave(function() {
                        t.overWindow = !1
                    }), t.options.zoomLevel, t.options.minZoomLevel ? t.minZoomLevel = t.options.minZoomLevel : t.minZoomLevel = 2 * t.options.scrollZoomIncrement, t.options.scrollZoom && t.zoomContainer.add(t.$elem).bind("mousewheel DOMMouseScroll MozMousePixelScroll", function(i) {
                        t.scrollLock = !0, clearTimeout(e.data(this, "timer")), e.data(this, "timer", setTimeout(function() {
                            t.scrollLock = !1
                        }, 250));
                        var o = i.originalEvent.wheelDelta || -1 * i.originalEvent.detail;
                        return i.stopImmediatePropagation(), i.stopPropagation(), i.preventDefault(), o / 120 > 0 ? t.currentZoomLevel >= t.minZoomLevel && t.changeZoomLevel(t.currentZoomLevel - t.options.scrollZoomIncrement) : t.options.maxZoomLevel ? t.currentZoomLevel <= t.options.maxZoomLevel && t.changeZoomLevel(parseFloat(t.currentZoomLevel) + t.options.scrollZoomIncrement) : t.changeZoomLevel(parseFloat(t.currentZoomLevel) + t.options.scrollZoomIncrement), !1
                    })
                },
                setElements: function(e) {
                    var t = this;
                    if (!t.options.zoomEnabled) return !1;
                    "show" == e && t.isWindowSet && ("inner" == t.options.zoomType && t.showHideWindow("show"), "window" == t.options.zoomType && t.showHideWindow("show"), t.options.showLens && t.showHideLens("show"), t.options.tint && "inner" != t.options.zoomType && t.showHideTint("show")), "hide" == e && ("window" == t.options.zoomType && t.showHideWindow("hide"), t.options.tint || t.showHideWindow("hide"), t.options.showLens && t.showHideLens("hide"), t.options.tint && t.showHideTint("hide"))
                },
                setPosition: function(e) {
                    var t = this;
                    return !!t.options.zoomEnabled && (t.nzHeight = t.$elem.height(), t.nzWidth = t.$elem.width(), t.nzOffset = t.$elem.offset(), t.options.tint && "inner" != t.options.zoomType && (t.zoomTint.css({
                        top: 0
                    }), t.zoomTint.css({
                        left: 0
                    })), t.options.responsive && !t.options.scrollZoom && t.options.showLens && (t.nzHeight < t.options.zoomWindowWidth / t.widthRatio ? lensHeight = t.nzHeight : lensHeight = String(t.options.zoomWindowHeight / t.heightRatio), t.largeWidth < t.options.zoomWindowWidth ? lensWidth = t.nzWidth : lensWidth = t.options.zoomWindowWidth / t.widthRatio, t.widthRatio = t.largeWidth / t.nzWidth, t.heightRatio = t.largeHeight / t.nzHeight, "lens" != t.options.zoomType && (t.nzHeight < t.options.zoomWindowWidth / t.widthRatio ? lensHeight = t.nzHeight : lensHeight = String(t.options.zoomWindowHeight / t.heightRatio), t.nzWidth < t.options.zoomWindowHeight / t.heightRatio ? lensWidth = t.nzWidth : lensWidth = String(t.options.zoomWindowWidth / t.widthRatio), t.zoomLens.css("width", lensWidth), t.zoomLens.css("height", lensHeight), t.options.tint && (t.zoomTintImage.css("width", t.nzWidth), t.zoomTintImage.css("height", t.nzHeight))), "lens" == t.options.zoomType && t.zoomLens.css({
                        width: String(t.options.lensSize) + "px",
                        height: String(t.options.lensSize) + "px"
                    })), t.zoomContainer.css({
                        top: t.nzOffset.top
                    }), t.zoomContainer.css({
                        left: t.nzOffset.left
                    }), t.mouseLeft = parseInt(e.pageX - t.nzOffset.left), t.mouseTop = parseInt(e.pageY - t.nzOffset.top), "window" == t.options.zoomType && (t.Etoppos = t.mouseTop < t.zoomLens.height() / 2, t.Eboppos = t.mouseTop > t.nzHeight - t.zoomLens.height() / 2 - 2 * t.options.lensBorderSize, t.Eloppos = t.mouseLeft < 0 + t.zoomLens.width() / 2, t.Eroppos = t.mouseLeft > t.nzWidth - t.zoomLens.width() / 2 - 2 * t.options.lensBorderSize), "inner" == t.options.zoomType && (t.Etoppos = t.mouseTop < t.nzHeight / 2 / t.heightRatio, t.Eboppos = t.mouseTop > t.nzHeight - t.nzHeight / 2 / t.heightRatio, t.Eloppos = t.mouseLeft < 0 + t.nzWidth / 2 / t.widthRatio, t.Eroppos = t.mouseLeft > t.nzWidth - t.nzWidth / 2 / t.widthRatio - 2 * t.options.lensBorderSize), t.mouseLeft < 0 || t.mouseTop < 0 || t.mouseLeft > t.nzWidth || t.mouseTop > t.nzHeight ? void t.setElements("hide") : (t.options.showLens && (t.lensLeftPos = String(Math.floor(t.mouseLeft - t.zoomLens.width() / 2)), t.lensTopPos = String(Math.floor(t.mouseTop - t.zoomLens.height() / 2))), t.Etoppos && (t.lensTopPos = 0), t.Eloppos && (t.windowLeftPos = 0, t.lensLeftPos = 0, t.tintpos = 0), "window" == t.options.zoomType && (t.Eboppos && (t.lensTopPos = Math.max(t.nzHeight - t.zoomLens.height() - 2 * t.options.lensBorderSize, 0)), t.Eroppos && (t.lensLeftPos = t.nzWidth - t.zoomLens.width() - 2 * t.options.lensBorderSize)), "inner" == t.options.zoomType && (t.Eboppos && (t.lensTopPos = Math.max(t.nzHeight - 2 * t.options.lensBorderSize, 0)), t.Eroppos && (t.lensLeftPos = t.nzWidth - t.nzWidth - 2 * t.options.lensBorderSize)), "lens" == t.options.zoomType && (t.windowLeftPos = String(-1 * ((e.pageX - t.nzOffset.left) * t.widthRatio - t.zoomLens.width() / 2)), t.windowTopPos = String(-1 * ((e.pageY - t.nzOffset.top) * t.heightRatio - t.zoomLens.height() / 2)), t.zoomLens.css({
                        backgroundPosition: t.windowLeftPos + "px " + t.windowTopPos + "px"
                    }), t.changeBgSize && (t.nzHeight > t.nzWidth ? ("lens" == t.options.zoomType && t.zoomLens.css({
                        "background-size": t.largeWidth / t.newvalueheight + "px " + t.largeHeight / t.newvalueheight + "px"
                    }), t.zoomWindow.css({
                        "background-size": t.largeWidth / t.newvalueheight + "px " + t.largeHeight / t.newvalueheight + "px"
                    })) : ("lens" == t.options.zoomType && t.zoomLens.css({
                        "background-size": t.largeWidth / t.newvaluewidth + "px " + t.largeHeight / t.newvaluewidth + "px"
                    }), t.zoomWindow.css({
                        "background-size": t.largeWidth / t.newvaluewidth + "px " + t.largeHeight / t.newvaluewidth + "px"
                    })), t.changeBgSize = !1), t.setWindowPostition(e)), t.options.tint && "inner" != t.options.zoomType && t.setTintPosition(e), "window" == t.options.zoomType && t.setWindowPostition(e), "inner" == t.options.zoomType && t.setWindowPostition(e), t.options.showLens && (t.fullwidth && "lens" != t.options.zoomType && (t.lensLeftPos = 0), t.zoomLens.css({
                        left: t.lensLeftPos + "px",
                        top: t.lensTopPos + "px"
                    })), void 0))
                },
                showHideWindow: function(e) {
                    var t = this;
                    "show" == e && (t.isWindowActive || (t.options.zoomWindowFadeIn ? t.zoomWindow.stop(!0, !0, !1).fadeIn(t.options.zoomWindowFadeIn) : t.zoomWindow.show(), t.isWindowActive = !0)), "hide" == e && t.isWindowActive && (t.options.zoomWindowFadeOut ? t.zoomWindow.stop(!0, !0).fadeOut(t.options.zoomWindowFadeOut, function() {
                        t.loop && (clearInterval(t.loop), t.loop = !1)
                    }) : t.zoomWindow.hide(), t.isWindowActive = !1)
                },
                showHideLens: function(e) {
                    var t = this;
                    "show" == e && (t.isLensActive || (t.options.lensFadeIn ? t.zoomLens.stop(!0, !0, !1).fadeIn(t.options.lensFadeIn) : t.zoomLens.show(), t.isLensActive = !0)), "hide" == e && t.isLensActive && (t.options.lensFadeOut ? t.zoomLens.stop(!0, !0).fadeOut(t.options.lensFadeOut) : t.zoomLens.hide(), t.isLensActive = !1)
                },
                showHideTint: function(e) {
                    var t = this;
                    "show" == e && (t.isTintActive || (t.options.zoomTintFadeIn ? t.zoomTint.css({
                        opacity: t.options.tintOpacity
                    }).animate().stop(!0, !0).fadeIn("slow") : (t.zoomTint.css({
                        opacity: t.options.tintOpacity
                    }).animate(), t.zoomTint.show()), t.isTintActive = !0)), "hide" == e && t.isTintActive && (t.options.zoomTintFadeOut ? t.zoomTint.stop(!0, !0).fadeOut(t.options.zoomTintFadeOut) : t.zoomTint.hide(), t.isTintActive = !1)
                },
                setLensPostition: function(e) {},
                setWindowPostition: function(t) {
                    var i = this;
                    if (isNaN(i.options.zoomWindowPosition)) i.externalContainer = e("#" + i.options.zoomWindowPosition), i.externalContainerWidth = i.externalContainer.width(), i.externalContainerHeight = i.externalContainer.height(), i.externalContainerOffset = i.externalContainer.offset(), i.windowOffsetTop = i.externalContainerOffset.top, i.windowOffsetLeft = i.externalContainerOffset.left;
                    else switch (i.options.zoomWindowPosition) {
                        case 1:
                            i.windowOffsetTop = i.options.zoomWindowOffety, i.windowOffsetLeft = +i.nzWidth;
                            break;
                        case 2:
                            i.options.zoomWindowHeight > i.nzHeight && (i.windowOffsetTop = -1 * (i.options.zoomWindowHeight / 2 - i.nzHeight / 2), i.windowOffsetLeft = i.nzWidth);
                            break;
                        case 3:
                            i.windowOffsetTop = i.nzHeight - i.zoomWindow.height() - 2 * i.options.borderSize, i.windowOffsetLeft = i.nzWidth;
                            break;
                        case 4:
                            i.windowOffsetTop = i.nzHeight, i.windowOffsetLeft = i.nzWidth;
                            break;
                        case 5:
                            i.windowOffsetTop = i.nzHeight, i.windowOffsetLeft = i.nzWidth - i.zoomWindow.width() - 2 * i.options.borderSize;
                            break;
                        case 6:
                            i.options.zoomWindowHeight > i.nzHeight && (i.windowOffsetTop = i.nzHeight, i.windowOffsetLeft = -1 * (i.options.zoomWindowWidth / 2 - i.nzWidth / 2 + 2 * i.options.borderSize));
                            break;
                        case 7:
                            i.windowOffsetTop = i.nzHeight, i.windowOffsetLeft = 0;
                            break;
                        case 8:
                            i.windowOffsetTop = i.nzHeight, i.windowOffsetLeft = -1 * (i.zoomWindow.width() + 2 * i.options.borderSize);
                            break;
                        case 9:
                            i.windowOffsetTop = i.nzHeight - i.zoomWindow.height() - 2 * i.options.borderSize, i.windowOffsetLeft = -1 * (i.zoomWindow.width() + 2 * i.options.borderSize);
                            break;
                        case 10:
                            i.options.zoomWindowHeight > i.nzHeight && (i.windowOffsetTop = -1 * (i.options.zoomWindowHeight / 2 - i.nzHeight / 2), i.windowOffsetLeft = -1 * (i.zoomWindow.width() + 2 * i.options.borderSize));
                            break;
                        case 11:
                            i.windowOffsetTop = i.options.zoomWindowOffety, i.windowOffsetLeft = -1 * (i.zoomWindow.width() + 2 * i.options.borderSize);
                            break;
                        case 12:
                            i.windowOffsetTop = -1 * (i.zoomWindow.height() + 2 * i.options.borderSize), i.windowOffsetLeft = -1 * (i.zoomWindow.width() + 2 * i.options.borderSize);
                            break;
                        case 13:
                            i.windowOffsetTop = -1 * (i.zoomWindow.height() + 2 * i.options.borderSize), i.windowOffsetLeft = 0;
                            break;
                        case 14:
                            i.options.zoomWindowHeight > i.nzHeight && (i.windowOffsetTop = -1 * (i.zoomWindow.height() + 2 * i.options.borderSize), i.windowOffsetLeft = -1 * (i.options.zoomWindowWidth / 2 - i.nzWidth / 2 + 2 * i.options.borderSize));
                            break;
                        case 15:
                            i.windowOffsetTop = -1 * (i.zoomWindow.height() + 2 * i.options.borderSize), i.windowOffsetLeft = i.nzWidth - i.zoomWindow.width() - 2 * i.options.borderSize;
                            break;
                        case 16:
                            i.windowOffsetTop = -1 * (i.zoomWindow.height() + 2 * i.options.borderSize), i.windowOffsetLeft = i.nzWidth;
                            break;
                        default:
                            i.windowOffsetTop = i.options.zoomWindowOffety, i.windowOffsetLeft = i.nzWidth
                    }
                    i.isWindowSet = !0, i.windowOffsetTop = i.windowOffsetTop + i.options.zoomWindowOffety, i.windowOffsetLeft = i.windowOffsetLeft + i.options.zoomWindowOffetx, i.zoomWindow.css({
                        top: i.windowOffsetTop
                    }), i.zoomWindow.css({
                        left: i.windowOffsetLeft
                    }), "inner" == i.options.zoomType && (i.zoomWindow.css({
                        top: 0
                    }), i.zoomWindow.css({
                        left: 0
                    })), i.windowLeftPos = String(-1 * ((t.pageX - i.nzOffset.left) * i.widthRatio - i.zoomWindow.width() / 2)), i.windowTopPos = String(-1 * ((t.pageY - i.nzOffset.top) * i.heightRatio - i.zoomWindow.height() / 2)), i.Etoppos && (i.windowTopPos = 0), i.Eloppos && (i.windowLeftPos = 0), i.Eboppos && (i.windowTopPos = -1 * (i.largeHeight / i.currentZoomLevel - i.zoomWindow.height())), i.Eroppos && (i.windowLeftPos = -1 * (i.largeWidth / i.currentZoomLevel - i.zoomWindow.width())), i.fullheight && (i.windowTopPos = 0), i.fullwidth && (i.windowLeftPos = 0), "window" != i.options.zoomType && "inner" != i.options.zoomType || (1 == i.zoomLock && (i.widthRatio <= 1 && (i.windowLeftPos = 0), i.heightRatio <= 1 && (i.windowTopPos = 0)), "window" == i.options.zoomType && (i.largeHeight < i.options.zoomWindowHeight && (i.windowTopPos = 0), i.largeWidth < i.options.zoomWindowWidth && (i.windowLeftPos = 0)), i.options.easing ? (i.xp || (i.xp = 0), i.yp || (i.yp = 0), i.loop || (i.loop = setInterval(function() {
                        i.xp += (i.windowLeftPos - i.xp) / i.options.easingAmount, i.yp += (i.windowTopPos - i.yp) / i.options.easingAmount, i.scrollingLock ? (clearInterval(i.loop), i.xp = i.windowLeftPos, i.yp = i.windowTopPos, i.xp = -1 * ((t.pageX - i.nzOffset.left) * i.widthRatio - i.zoomWindow.width() / 2), i.yp = -1 * ((t.pageY - i.nzOffset.top) * i.heightRatio - i.zoomWindow.height() / 2), i.changeBgSize && (i.nzHeight > i.nzWidth ? ("lens" == i.options.zoomType && i.zoomLens.css({
                            "background-size": i.largeWidth / i.newvalueheight + "px " + i.largeHeight / i.newvalueheight + "px"
                        }), i.zoomWindow.css({
                            "background-size": i.largeWidth / i.newvalueheight + "px " + i.largeHeight / i.newvalueheight + "px"
                        })) : ("lens" != i.options.zoomType && i.zoomLens.css({
                            "background-size": i.largeWidth / i.newvaluewidth + "px " + i.largeHeight / i.newvalueheight + "px"
                        }), i.zoomWindow.css({
                            "background-size": i.largeWidth / i.newvaluewidth + "px " + i.largeHeight / i.newvaluewidth + "px"
                        })), i.changeBgSize = !1), i.zoomWindow.css({
                            backgroundPosition: i.windowLeftPos + "px " + i.windowTopPos + "px"
                        }), i.scrollingLock = !1, i.loop = !1) : Math.round(Math.abs(i.xp - i.windowLeftPos) + Math.abs(i.yp - i.windowTopPos)) < 1 ? (clearInterval(i.loop), i.zoomWindow.css({
                            backgroundPosition: i.windowLeftPos + "px " + i.windowTopPos + "px"
                        }), i.loop = !1) : (i.changeBgSize && (i.nzHeight > i.nzWidth ? ("lens" == i.options.zoomType && i.zoomLens.css({
                            "background-size": i.largeWidth / i.newvalueheight + "px " + i.largeHeight / i.newvalueheight + "px"
                        }), i.zoomWindow.css({
                            "background-size": i.largeWidth / i.newvalueheight + "px " + i.largeHeight / i.newvalueheight + "px"
                        })) : ("lens" != i.options.zoomType && i.zoomLens.css({
                            "background-size": i.largeWidth / i.newvaluewidth + "px " + i.largeHeight / i.newvaluewidth + "px"
                        }), i.zoomWindow.css({
                            "background-size": i.largeWidth / i.newvaluewidth + "px " + i.largeHeight / i.newvaluewidth + "px"
                        })), i.changeBgSize = !1), i.zoomWindow.css({
                            backgroundPosition: i.xp + "px " + i.yp + "px"
                        }))
                    }, 16))) : (i.changeBgSize && (i.nzHeight > i.nzWidth ? ("lens" == i.options.zoomType && i.zoomLens.css({
                        "background-size": i.largeWidth / i.newvalueheight + "px " + i.largeHeight / i.newvalueheight + "px"
                    }), i.zoomWindow.css({
                        "background-size": i.largeWidth / i.newvalueheight + "px " + i.largeHeight / i.newvalueheight + "px"
                    })) : ("lens" == i.options.zoomType && i.zoomLens.css({
                        "background-size": i.largeWidth / i.newvaluewidth + "px " + i.largeHeight / i.newvaluewidth + "px"
                    }), i.largeHeight / i.newvaluewidth < i.options.zoomWindowHeight ? i.zoomWindow.css({
                        "background-size": i.largeWidth / i.newvaluewidth + "px " + i.largeHeight / i.newvaluewidth + "px"
                    }) : i.zoomWindow.css({
                        "background-size": i.largeWidth / i.newvalueheight + "px " + i.largeHeight / i.newvalueheight + "px"
                    })), i.changeBgSize = !1), i.zoomWindow.css({
                        backgroundPosition: i.windowLeftPos + "px " + i.windowTopPos + "px"
                    })))
                },
                setTintPosition: function(e) {
                    var t = this;
                    t.nzOffset = t.$elem.offset(), t.tintpos = String(-1 * (e.pageX - t.nzOffset.left - t.zoomLens.width() / 2)), t.tintposy = String(-1 * (e.pageY - t.nzOffset.top - t.zoomLens.height() / 2)), t.Etoppos && (t.tintposy = 0), t.Eloppos && (t.tintpos = 0), t.Eboppos && (t.tintposy = -1 * (t.nzHeight - t.zoomLens.height() - 2 * t.options.lensBorderSize)), t.Eroppos && (t.tintpos = -1 * (t.nzWidth - t.zoomLens.width() - 2 * t.options.lensBorderSize)), t.options.tint && (t.fullheight && (t.tintposy = 0), t.fullwidth && (t.tintpos = 0), t.zoomTintImage.css({
                        left: t.tintpos + "px"
                    }), t.zoomTintImage.css({
                        top: t.tintposy + "px"
                    }))
                },
                swaptheimage: function(t, i) {
                    var o = this,
                        n = new Image;
                    o.options.loadingIcon && (o.spinner = e("<div style=\"background: url('" + o.options.loadingIcon + "') no-repeat center;height:" + o.nzHeight + "px;width:" + o.nzWidth + 'px;z-index: 2000;position: absolute; background-position: center center;"></div>'), o.$elem.after(o.spinner)), o.options.onImageSwap(o.$elem), n.onload = function() {
                        o.largeWidth = n.width, o.largeHeight = n.height, o.zoomImage = i, o.zoomWindow.css({
                            "background-size": o.largeWidth + "px " + o.largeHeight + "px"
                        }), o.swapAction(t, i)
                    }, n.src = i
                },
                swapAction: function(t, i) {
                    var o = this,
                        n = new Image;
                    if (n.onload = function() {
                            o.nzHeight = n.height, o.nzWidth = n.width, o.options.onImageSwapComplete(o.$elem), o.doneCallback()
                        }, n.src = t, o.currentZoomLevel = o.options.zoomLevel, o.options.maxZoomLevel = !1, "lens" == o.options.zoomType && o.zoomLens.css({
                            backgroundImage: "url('" + i + "')"
                        }), "window" == o.options.zoomType && o.zoomWindow.css({
                            backgroundImage: "url('" + i + "')"
                        }), "inner" == o.options.zoomType && o.zoomWindow.css({
                            backgroundImage: "url('" + i + "')"
                        }), o.currentImage = i, o.options.imageCrossfade) {
                        var s = o.$elem,
                            r = s.clone();
                        if (o.$elem.attr("src", t), o.$elem.after(r), r.stop(!0).fadeOut(o.options.imageCrossfade, function() {
                                e(this).remove()
                            }), o.$elem.width("auto").removeAttr("width"), o.$elem.height("auto").removeAttr("height"), s.fadeIn(o.options.imageCrossfade), o.options.tint && "inner" != o.options.zoomType) {
                            var a = o.zoomTintImage,
                                l = a.clone();
                            o.zoomTintImage.attr("src", i), o.zoomTintImage.after(l), l.stop(!0).fadeOut(o.options.imageCrossfade, function() {
                                e(this).remove()
                            }), a.fadeIn(o.options.imageCrossfade), o.zoomTint.css({
                                height: o.$elem.height()
                            }), o.zoomTint.css({
                                width: o.$elem.width()
                            })
                        }
                        o.zoomContainer.css("height", o.$elem.height()), o.zoomContainer.css("width", o.$elem.width()), "inner" == o.options.zoomType && (o.options.constrainType || (o.zoomWrap.parent().css("height", o.$elem.height()), o.zoomWrap.parent().css("width", o.$elem.width()), o.zoomWindow.css("height", o.$elem.height()), o.zoomWindow.css("width", o.$elem.width()))), o.options.imageCrossfade && (o.zoomWrap.css("height", o.$elem.height()), o.zoomWrap.css("width", o.$elem.width()))
                    } else o.$elem.attr("src", t), o.options.tint && (o.zoomTintImage.attr("src", i), o.zoomTintImage.attr("height", o.$elem.height()), o.zoomTintImage.css({
                        height: o.$elem.height()
                    }), o.zoomTint.css({
                        height: o.$elem.height()
                    })), o.zoomContainer.css("height", o.$elem.height()), o.zoomContainer.css("width", o.$elem.width()), o.options.imageCrossfade && (o.zoomWrap.css("height", o.$elem.height()), o.zoomWrap.css("width", o.$elem.width()));
                    o.options.constrainType && ("height" == o.options.constrainType && (o.zoomContainer.css("height", o.options.constrainSize), o.zoomContainer.css("width", "auto"), o.options.imageCrossfade ? (o.zoomWrap.css("height", o.options.constrainSize), o.zoomWrap.css("width", "auto"), o.constwidth = o.zoomWrap.width()) : (o.$elem.css("height", o.options.constrainSize), o.$elem.css("width", "auto"), o.constwidth = o.$elem.width()), "inner" == o.options.zoomType && (o.zoomWrap.parent().css("height", o.options.constrainSize), o.zoomWrap.parent().css("width", o.constwidth), o.zoomWindow.css("height", o.options.constrainSize), o.zoomWindow.css("width", o.constwidth)), o.options.tint && (o.tintContainer.css("height", o.options.constrainSize), o.tintContainer.css("width", o.constwidth), o.zoomTint.css("height", o.options.constrainSize), o.zoomTint.css("width", o.constwidth), o.zoomTintImage.css("height", o.options.constrainSize), o.zoomTintImage.css("width", o.constwidth))), "width" == o.options.constrainType && (o.zoomContainer.css("height", "auto"), o.zoomContainer.css("width", o.options.constrainSize), o.options.imageCrossfade ? (o.zoomWrap.css("height", "auto"), o.zoomWrap.css("width", o.options.constrainSize), o.constheight = o.zoomWrap.height()) : (o.$elem.css("height", "auto"), o.$elem.css("width", o.options.constrainSize), o.constheight = o.$elem.height()), "inner" == o.options.zoomType && (o.zoomWrap.parent().css("height", o.constheight), o.zoomWrap.parent().css("width", o.options.constrainSize), o.zoomWindow.css("height", o.constheight), o.zoomWindow.css("width", o.options.constrainSize)), o.options.tint && (o.tintContainer.css("height", o.constheight), o.tintContainer.css("width", o.options.constrainSize), o.zoomTint.css("height", o.constheight), o.zoomTint.css("width", o.options.constrainSize), o.zoomTintImage.css("height", o.constheight), o.zoomTintImage.css("width", o.options.constrainSize))))
                },
                doneCallback: function() {
                    var e = this;
                    e.options.loadingIcon && e.spinner.hide(), e.nzOffset = e.$elem.offset(), e.nzWidth = e.$elem.width(), e.nzHeight = e.$elem.height(), e.currentZoomLevel = e.options.zoomLevel, e.widthRatio = e.largeWidth / e.nzWidth, e.heightRatio = e.largeHeight / e.nzHeight, "window" == e.options.zoomType && (e.nzHeight < e.options.zoomWindowWidth / e.widthRatio ? lensHeight = e.nzHeight : lensHeight = String(e.options.zoomWindowHeight / e.heightRatio), e.options.zoomWindowWidth < e.options.zoomWindowWidth ? lensWidth = e.nzWidth : lensWidth = e.options.zoomWindowWidth / e.widthRatio, e.zoomLens && (e.zoomLens.css("width", lensWidth), e.zoomLens.css("height", lensHeight)))
                },
                getCurrentImage: function() {
                    return this.zoomImage
                },
                getGalleryList: function() {
                    var t = this;
                    return t.gallerylist = [], t.options.gallery ? e("#" + t.options.gallery + " a").each(function() {
                        var i = "";
                        e(this).data("zoom-image") ? i = e(this).data("zoom-image") : e(this).data("image") && (i = e(this).data("image")), i == t.zoomImage ? t.gallerylist.unshift({
                            href: "" + i,
                            title: e(this).find("img").attr("title")
                        }) : t.gallerylist.push({
                            href: "" + i,
                            title: e(this).find("img").attr("title")
                        })
                    }) : t.gallerylist.push({
                        href: "" + t.zoomImage,
                        title: e(this).find("img").attr("title")
                    }), t.gallerylist
                },
                changeZoomLevel: function(e) {
                    var t = this;
                    t.scrollingLock = !0, t.newvalue = parseFloat(e).toFixed(2), newvalue = parseFloat(e).toFixed(2), maxheightnewvalue = t.largeHeight / (t.options.zoomWindowHeight / t.nzHeight * t.nzHeight), maxwidthtnewvalue = t.largeWidth / (t.options.zoomWindowWidth / t.nzWidth * t.nzWidth), "inner" != t.options.zoomType && (maxheightnewvalue <= newvalue ? (t.heightRatio = t.largeHeight / maxheightnewvalue / t.nzHeight, t.newvalueheight = maxheightnewvalue, t.fullheight = !0) : (t.heightRatio = t.largeHeight / newvalue / t.nzHeight, t.newvalueheight = newvalue, t.fullheight = !1), maxwidthtnewvalue <= newvalue ? (t.widthRatio = t.largeWidth / maxwidthtnewvalue / t.nzWidth, t.newvaluewidth = maxwidthtnewvalue, t.fullwidth = !0) : (t.widthRatio = t.largeWidth / newvalue / t.nzWidth, t.newvaluewidth = newvalue, t.fullwidth = !1), "lens" == t.options.zoomType && (maxheightnewvalue <= newvalue ? (t.fullwidth = !0, t.newvaluewidth = maxheightnewvalue) : (t.widthRatio = t.largeWidth / newvalue / t.nzWidth, t.newvaluewidth = newvalue, t.fullwidth = !1))), "inner" == t.options.zoomType && (maxheightnewvalue = parseFloat(t.largeHeight / t.nzHeight).toFixed(2), maxwidthtnewvalue = parseFloat(t.largeWidth / t.nzWidth).toFixed(2), newvalue > maxheightnewvalue && (newvalue = maxheightnewvalue), newvalue > maxwidthtnewvalue && (newvalue = maxwidthtnewvalue), maxheightnewvalue <= newvalue ? (t.heightRatio = t.largeHeight / newvalue / t.nzHeight, newvalue > maxheightnewvalue ? t.newvalueheight = maxheightnewvalue : t.newvalueheight = newvalue, t.fullheight = !0) : (t.heightRatio = t.largeHeight / newvalue / t.nzHeight, newvalue > maxheightnewvalue ? t.newvalueheight = maxheightnewvalue : t.newvalueheight = newvalue, t.fullheight = !1), maxwidthtnewvalue <= newvalue ? (t.widthRatio = t.largeWidth / newvalue / t.nzWidth, newvalue > maxwidthtnewvalue ? t.newvaluewidth = maxwidthtnewvalue : t.newvaluewidth = newvalue, t.fullwidth = !0) : (t.widthRatio = t.largeWidth / newvalue / t.nzWidth, t.newvaluewidth = newvalue, t.fullwidth = !1)), scrcontinue = !1, "inner" == t.options.zoomType && (t.nzWidth >= t.nzHeight && (t.newvaluewidth <= maxwidthtnewvalue ? scrcontinue = !0 : (scrcontinue = !1, t.fullheight = !0, t.fullwidth = !0)), t.nzHeight > t.nzWidth && (t.newvaluewidth <= maxwidthtnewvalue ? scrcontinue = !0 : (scrcontinue = !1, t.fullheight = !0, t.fullwidth = !0))), "inner" != t.options.zoomType && (scrcontinue = !0), scrcontinue && (t.zoomLock = 0, t.changeZoom = !0, t.options.zoomWindowHeight / t.heightRatio <= t.nzHeight && (t.currentZoomLevel = t.newvalueheight, "lens" != t.options.zoomType && "inner" != t.options.zoomType && (t.changeBgSize = !0, t.zoomLens.css({
                        height: String(t.options.zoomWindowHeight / t.heightRatio) + "px"
                    })), "lens" != t.options.zoomType && "inner" != t.options.zoomType || (t.changeBgSize = !0)), t.options.zoomWindowWidth / t.widthRatio <= t.nzWidth && ("inner" != t.options.zoomType && t.newvaluewidth > t.newvalueheight && (t.currentZoomLevel = t.newvaluewidth), "lens" != t.options.zoomType && "inner" != t.options.zoomType && (t.changeBgSize = !0, t.zoomLens.css({
                        width: String(t.options.zoomWindowWidth / t.widthRatio) + "px"
                    })), "lens" != t.options.zoomType && "inner" != t.options.zoomType || (t.changeBgSize = !0)), "inner" == t.options.zoomType && (t.changeBgSize = !0, t.nzWidth > t.nzHeight && (t.currentZoomLevel = t.newvaluewidth), t.nzHeight > t.nzWidth && (t.currentZoomLevel = t.newvaluewidth))), t.setPosition(t.currentLoc)
                },
                closeAll: function() {
                    self.zoomWindow && self.zoomWindow.hide(), self.zoomLens && self.zoomLens.hide(), self.zoomTint && self.zoomTint.hide()
                },
                changeState: function(e) {
                    var t = this;
                    "enable" == e && (t.options.zoomEnabled = !0), "disable" == e && (t.options.zoomEnabled = !1)
                }
            };
            e.fn.elevateZoom = function(t) {
                return this.each(function() {
                    var i = Object.create(n);
                    i.init(t, this), e.data(this, "elevateZoom", i)
                })
            }, e.fn.elevateZoom.options = {
                zoomActivation: "hover",
                zoomEnabled: !0,
                preloading: 1,
                zoomLevel: 1,
                scrollZoom: !1,
                scrollZoomIncrement: .1,
                minZoomLevel: !1,
                maxZoomLevel: !1,
                easing: !1,
                easingAmount: 12,
                lensSize: 200,
                zoomWindowWidth: 400,
                zoomWindowHeight: 400,
                zoomWindowOffetx: 0,
                zoomWindowOffety: 0,
                zoomWindowPosition: 1,
                zoomWindowBgColour: "#fff",
                lensFadeIn: !1,
                lensFadeOut: !1,
                debug: !1,
                zoomWindowFadeIn: !1,
                zoomWindowFadeOut: !1,
                zoomWindowAlwaysShow: !1,
                zoomTintFadeIn: !1,
                zoomTintFadeOut: !1,
                borderSize: 4,
                showLens: !0,
                borderColour: "#888",
                lensBorderSize: 1,
                lensBorderColour: "#000",
                lensShape: "square",
                zoomType: "window",
                containLensZoom: !1,
                lensColour: "white",
                lensOpacity: .4,
                lenszoom: !1,
                tint: !1,
                tintColour: "#333",
                tintOpacity: .4,
                gallery: !1,
                galleryActiveClass: "zoomGalleryActive",
                imageCrossfade: !1,
                constrainType: !1,
                constrainSize: !1,
                loadingIcon: !1,
                cursor: "default",
                responsive: !0,
                onComplete: e.noop,
                onDestroy: function() {},
                onZoomedImageLoaded: function() {},
                onImageSwap: e.noop,
                onImageSwapComplete: e.noop
            }
        }(jQuery, window, document)
}, function(e, t, i) {
    "use strict";
    ! function(e, t, i, o) {
        function n(t, i) {
            this.settings = null, this.options = e.extend({}, n.Defaults, i), this.$element = e(t), this._handlers = {}, this._plugins = {}, this._supress = {}, this._current = null, this._speed = null, this._coordinates = [], this._breakpoint = null, this._width = null, this._items = [], this._clones = [], this._mergers = [], this._widths = [], this._invalidated = {}, this._pipe = [], this._drag = {
                time: null,
                target: null,
                pointer: null,
                stage: {
                    start: null,
                    current: null
                },
                direction: null
            }, this._states = {
                current: {},
                tags: {
                    initializing: ["busy"],
                    animating: ["busy"],
                    dragging: ["interacting"]
                }
            }, e.each(["onResize", "onThrottledResize"], e.proxy(function(t, i) {
                this._handlers[i] = e.proxy(this[i], this)
            }, this)), e.each(n.Plugins, e.proxy(function(e, t) {
                this._plugins[e.charAt(0).toLowerCase() + e.slice(1)] = new t(this)
            }, this)), e.each(n.Workers, e.proxy(function(t, i) {
                this._pipe.push({
                    filter: i.filter,
                    run: e.proxy(i.run, this)
                })
            }, this)), this.setup(), this.initialize()
        }
        n.Defaults = {
            items: 3,
            loop: !1,
            center: !1,
            rewind: !1,
            checkVisibility: !0,
            mouseDrag: !0,
            touchDrag: !0,
            pullDrag: !0,
            freeDrag: !1,
            margin: 0,
            stagePadding: 0,
            merge: !1,
            mergeFit: !0,
            autoWidth: !1,
            startPosition: 0,
            rtl: !1,
            smartSpeed: 250,
            fluidSpeed: !1,
            dragEndSpeed: !1,
            responsive: {},
            responsiveRefreshRate: 200,
            responsiveBaseElement: t,
            fallbackEasing: "swing",
            slideTransition: "",
            info: !1,
            nestedItemSelector: !1,
            itemElement: "div",
            stageElement: "div",
            refreshClass: "owl-refresh",
            loadedClass: "owl-loaded",
            loadingClass: "owl-loading",
            rtlClass: "owl-rtl",
            responsiveClass: "owl-responsive",
            dragClass: "owl-drag",
            itemClass: "owl-item",
            stageClass: "owl-stage",
            stageOuterClass: "owl-stage-outer",
            grabClass: "owl-grab"
        }, n.Width = {
            Default: "default",
            Inner: "inner",
            Outer: "outer"
        }, n.Type = {
            Event: "event",
            State: "state"
        }, n.Plugins = {}, n.Workers = [{
            filter: ["width", "settings"],
            run: function() {
                this._width = this.$element.width()
            }
        }, {
            filter: ["width", "items", "settings"],
            run: function(e) {
                e.current = this._items && this._items[this.relative(this._current)]
            }
        }, {
            filter: ["items", "settings"],
            run: function() {
                this.$stage.children(".cloned").remove()
            }
        }, {
            filter: ["width", "items", "settings"],
            run: function(e) {
                var t = this.settings.margin || "",
                    i = !this.settings.autoWidth,
                    o = this.settings.rtl,
                    n = {
                        width: "auto",
                        "margin-left": o ? t : "",
                        "margin-right": o ? "" : t
                    };
                !i && this.$stage.children().css(n), e.css = n
            }
        }, {
            filter: ["width", "items", "settings"],
            run: function(e) {
                var t = (this.width() / this.settings.items).toFixed(3) - this.settings.margin,
                    i = null,
                    o = this._items.length,
                    n = !this.settings.autoWidth,
                    s = [];
                for (e.items = {
                        merge: !1,
                        width: t
                    }; o--;) i = this._mergers[o], i = this.settings.mergeFit && Math.min(i, this.settings.items) || i, e.items.merge = i > 1 || e.items.merge, s[o] = n ? t * i : this._items[o].width();
                this._widths = s
            }
        }, {
            filter: ["items", "settings"],
            run: function() {
                var t = [],
                    i = this._items,
                    o = this.settings,
                    n = Math.max(2 * o.items, 4),
                    s = 2 * Math.ceil(i.length / 2),
                    r = o.loop && i.length ? o.rewind ? n : Math.max(n, s) : 0,
                    a = "",
                    l = "";
                for (r /= 2; r > 0;) t.push(this.normalize(t.length / 2, !0)), a += i[t[t.length - 1]][0].outerHTML, t.push(this.normalize(i.length - 1 - (t.length - 1) / 2, !0)), l = i[t[t.length - 1]][0].outerHTML + l, r -= 1;
                this._clones = t, e(a).addClass("cloned").appendTo(this.$stage), e(l).addClass("cloned").prependTo(this.$stage)
            }
        }, {
            filter: ["width", "items", "settings"],
            run: function() {
                for (var e = this.settings.rtl ? 1 : -1, t = this._clones.length + this._items.length, i = -1, o = 0, n = 0, s = []; ++i < t;) o = s[i - 1] || 0, n = this._widths[this.relative(i)] + this.settings.margin, s.push(o + n * e);
                this._coordinates = s
            }
        }, {
            filter: ["width", "items", "settings"],
            run: function() {
                var e = this.settings.stagePadding,
                    t = this._coordinates,
                    i = {
                        width: Math.ceil(Math.abs(t[t.length - 1])) + 2 * e,
                        "padding-left": e || "",
                        "padding-right": e || ""
                    };
                this.$stage.css(i)
            }
        }, {
            filter: ["width", "items", "settings"],
            run: function(e) {
                var t = this._coordinates.length,
                    i = !this.settings.autoWidth,
                    o = this.$stage.children();
                if (i && e.items.merge)
                    for (; t--;) e.css.width = this._widths[this.relative(t)], o.eq(t).css(e.css);
                else i && (e.css.width = e.items.width, o.css(e.css))
            }
        }, {
            filter: ["items"],
            run: function() {
                this._coordinates.length < 1 && this.$stage.removeAttr("style")
            }
        }, {
            filter: ["width", "items", "settings"],
            run: function(e) {
                e.current = e.current ? this.$stage.children().index(e.current) : 0, e.current = Math.max(this.minimum(), Math.min(this.maximum(), e.current)), this.reset(e.current)
            }
        }, {
            filter: ["position"],
            run: function() {
                this.animate(this.coordinates(this._current))
            }
        }, {
            filter: ["width", "position", "items", "settings"],
            run: function() {
                var e, t, i, o, n = this.settings.rtl ? 1 : -1,
                    s = 2 * this.settings.stagePadding,
                    r = this.coordinates(this.current()) + s,
                    a = r + this.width() * n,
                    l = [];
                for (i = 0, o = this._coordinates.length; i < o; i++) e = this._coordinates[i - 1] || 0, t = Math.abs(this._coordinates[i]) + s * n, (this.op(e, "<=", r) && this.op(e, ">", a) || this.op(t, "<", r) && this.op(t, ">", a)) && l.push(i);
                this.$stage.children(".active").removeClass("active"), this.$stage.children(":eq(" + l.join("), :eq(") + ")").addClass("active"), this.$stage.children(".center").removeClass("center"), this.settings.center && this.$stage.children().eq(this.current()).addClass("center")
            }
        }], n.prototype.initializeStage = function() {
            this.$stage = this.$element.find("." + this.settings.stageClass), this.$stage.length || (this.$element.addClass(this.options.loadingClass), this.$stage = e("<" + this.settings.stageElement + ">", {
                class: this.settings.stageClass
            }).wrap(e("<div/>", {
                class: this.settings.stageOuterClass
            })), this.$element.append(this.$stage.parent()))
        }, n.prototype.initializeItems = function() {
            var t = this.$element.find(".owl-item");
            if (t.length) return this._items = t.get().map(function(t) {
                return e(t)
            }), this._mergers = this._items.map(function() {
                return 1
            }), void this.refresh();
            this.replace(this.$element.children().not(this.$stage.parent())), this.isVisible() ? this.refresh() : this.invalidate("width"), this.$element.removeClass(this.options.loadingClass).addClass(this.options.loadedClass)
        }, n.prototype.initialize = function() {
            if (this.enter("initializing"), this.trigger("initialize"), this.$element.toggleClass(this.settings.rtlClass, this.settings.rtl), this.settings.autoWidth && !this.is("pre-loading")) {
                var e, t, i;
                e = this.$element.find("img"), t = this.settings.nestedItemSelector ? "." + this.settings.nestedItemSelector : o, i = this.$element.children(t).width(), e.length && i <= 0 && this.preloadAutoWidthImages(e)
            }
            this.initializeStage(), this.initializeItems(), this.registerEventHandlers(), this.leave("initializing"), this.trigger("initialized")
        }, n.prototype.isVisible = function() {
            return !this.settings.checkVisibility || this.$element.is(":visible")
        }, n.prototype.setup = function() {
            var t = this.viewport(),
                i = this.options.responsive,
                o = -1,
                n = null;
            i ? (e.each(i, function(e) {
                e <= t && e > o && (o = Number(e))
            }), n = e.extend({}, this.options, i[o]), "function" == typeof n.stagePadding && (n.stagePadding = n.stagePadding()), delete n.responsive, n.responsiveClass && this.$element.attr("class", this.$element.attr("class").replace(new RegExp("(" + this.options.responsiveClass + "-)\\S+\\s", "g"), "$1" + o))) : n = e.extend({}, this.options), this.trigger("change", {
                property: {
                    name: "settings",
                    value: n
                }
            }), this._breakpoint = o, this.settings = n, this.invalidate("settings"), this.trigger("changed", {
                property: {
                    name: "settings",
                    value: this.settings
                }
            })
        }, n.prototype.optionsLogic = function() {
            this.settings.autoWidth && (this.settings.stagePadding = !1, this.settings.merge = !1)
        }, n.prototype.prepare = function(t) {
            var i = this.trigger("prepare", {
                content: t
            });
            return i.data || (i.data = e("<" + this.settings.itemElement + "/>").addClass(this.options.itemClass).append(t)), this.trigger("prepared", {
                content: i.data
            }), i.data
        }, n.prototype.update = function() {
            for (var t = 0, i = this._pipe.length, o = e.proxy(function(e) {
                    return this[e]
                }, this._invalidated), n = {}; t < i;)(this._invalidated.all || e.grep(this._pipe[t].filter, o).length > 0) && this._pipe[t].run(n), t++;
            this._invalidated = {}, !this.is("valid") && this.enter("valid")
        }, n.prototype.width = function(e) {
            switch (e = e || n.Width.Default) {
                case n.Width.Inner:
                case n.Width.Outer:
                    return this._width;
                default:
                    return this._width - 2 * this.settings.stagePadding + this.settings.margin
            }
        }, n.prototype.refresh = function() {
            this.enter("refreshing"), this.trigger("refresh"), this.setup(), this.optionsLogic(), this.$element.addClass(this.options.refreshClass), this.update(), this.$element.removeClass(this.options.refreshClass), this.leave("refreshing"), this.trigger("refreshed")
        }, n.prototype.onThrottledResize = function() {
            t.clearTimeout(this.resizeTimer), this.resizeTimer = t.setTimeout(this._handlers.onResize, this.settings.responsiveRefreshRate)
        }, n.prototype.onResize = function() {
            return !!this._items.length && this._width !== this.$element.width() && !!this.isVisible() && (this.enter("resizing"), this.trigger("resize").isDefaultPrevented() ? (this.leave("resizing"), !1) : (this.invalidate("width"), this.refresh(), this.leave("resizing"), void this.trigger("resized")))
        }, n.prototype.registerEventHandlers = function() {
            e.support.transition && this.$stage.on(e.support.transition.end + ".owl.core", e.proxy(this.onTransitionEnd, this)), !1 !== this.settings.responsive && this.on(t, "resize", this._handlers.onThrottledResize), this.settings.mouseDrag && (this.$element.addClass(this.options.dragClass), this.$stage.on("mousedown.owl.core", e.proxy(this.onDragStart, this)), this.$stage.on("dragstart.owl.core selectstart.owl.core", function() {
                return !1
            })), this.settings.touchDrag && (this.$stage.on("touchstart.owl.core", e.proxy(this.onDragStart, this)), this.$stage.on("touchcancel.owl.core", e.proxy(this.onDragEnd, this)))
        }, n.prototype.onDragStart = function(t) {
            var o = null;
            3 !== t.which && (e.support.transform ? (o = this.$stage.css("transform").replace(/.*\(|\)| /g, "").split(","), o = {
                x: o[16 === o.length ? 12 : 4],
                y: o[16 === o.length ? 13 : 5]
            }) : (o = this.$stage.position(), o = {
                x: this.settings.rtl ? o.left + this.$stage.width() - this.width() + this.settings.margin : o.left,
                y: o.top
            }), this.is("animating") && (e.support.transform ? this.animate(o.x) : this.$stage.stop(), this.invalidate("position")), this.$element.toggleClass(this.options.grabClass, "mousedown" === t.type), this.speed(0), this._drag.time = (new Date).getTime(), this._drag.target = e(t.target), this._drag.stage.start = o, this._drag.stage.current = o, this._drag.pointer = this.pointer(t), e(i).on("mouseup.owl.core touchend.owl.core", e.proxy(this.onDragEnd, this)), e(i).one("mousemove.owl.core touchmove.owl.core", e.proxy(function(t) {
                var o = this.difference(this._drag.pointer, this.pointer(t));
                e(i).on("mousemove.owl.core touchmove.owl.core", e.proxy(this.onDragMove, this)), Math.abs(o.x) < Math.abs(o.y) && this.is("valid") || (t.preventDefault(), this.enter("dragging"), this.trigger("drag"))
            }, this)))
        }, n.prototype.onDragMove = function(e) {
            var t = null,
                i = null,
                o = null,
                n = this.difference(this._drag.pointer, this.pointer(e)),
                s = this.difference(this._drag.stage.start, n);
            this.is("dragging") && (e.preventDefault(), this.settings.loop ? (t = this.coordinates(this.minimum()), i = this.coordinates(this.maximum() + 1) - t, s.x = ((s.x - t) % i + i) % i + t) : (t = this.settings.rtl ? this.coordinates(this.maximum()) : this.coordinates(this.minimum()), i = this.settings.rtl ? this.coordinates(this.minimum()) : this.coordinates(this.maximum()), o = this.settings.pullDrag ? -1 * n.x / 5 : 0, s.x = Math.max(Math.min(s.x, t + o), i + o)), this._drag.stage.current = s, this.animate(s.x))
        }, n.prototype.onDragEnd = function(t) {
            var o = this.difference(this._drag.pointer, this.pointer(t)),
                n = this._drag.stage.current,
                s = o.x > 0 ^ this.settings.rtl ? "left" : "right";
            e(i).off(".owl.core"), this.$element.removeClass(this.options.grabClass), (0 !== o.x && this.is("dragging") || !this.is("valid")) && (this.speed(this.settings.dragEndSpeed || this.settings.smartSpeed), this.current(this.closest(n.x, 0 !== o.x ? s : this._drag.direction)), this.invalidate("position"), this.update(), this._drag.direction = s, (Math.abs(o.x) > 3 || (new Date).getTime() - this._drag.time > 300) && this._drag.target.one("click.owl.core", function() {
                return !1
            })), this.is("dragging") && (this.leave("dragging"), this.trigger("dragged"))
        }, n.prototype.closest = function(t, i) {
            var n = -1,
                s = this.width(),
                r = this.coordinates();
            return this.settings.freeDrag || e.each(r, e.proxy(function(e, a) {
                return "left" === i && t > a - 30 && t < a + 30 ? n = e : "right" === i && t > a - s - 30 && t < a - s + 30 ? n = e + 1 : this.op(t, "<", a) && this.op(t, ">", r[e + 1] !== o ? r[e + 1] : a - s) && (n = "left" === i ? e + 1 : e), -1 === n
            }, this)), this.settings.loop || (this.op(t, ">", r[this.minimum()]) ? n = t = this.minimum() : this.op(t, "<", r[this.maximum()]) && (n = t = this.maximum())), n
        }, n.prototype.animate = function(t) {
            var i = this.speed() > 0;
            this.is("animating") && this.onTransitionEnd(), i && (this.enter("animating"), this.trigger("translate")), e.support.transform3d && e.support.transition ? this.$stage.css({
                transform: "translate3d(" + t + "px,0px,0px)",
                transition: this.speed() / 1e3 + "s" + (this.settings.slideTransition ? " " + this.settings.slideTransition : "")
            }) : i ? this.$stage.animate({
                left: t + "px"
            }, this.speed(), this.settings.fallbackEasing, e.proxy(this.onTransitionEnd, this)) : this.$stage.css({
                left: t + "px"
            })
        }, n.prototype.is = function(e) {
            return this._states.current[e] && this._states.current[e] > 0
        }, n.prototype.current = function(e) {
            if (e === o) return this._current;
            if (0 === this._items.length) return o;
            if (e = this.normalize(e), this._current !== e) {
                var t = this.trigger("change", {
                    property: {
                        name: "position",
                        value: e
                    }
                });
                t.data !== o && (e = this.normalize(t.data)), this._current = e, this.invalidate("position"), this.trigger("changed", {
                    property: {
                        name: "position",
                        value: this._current
                    }
                })
            }
            return this._current
        }, n.prototype.invalidate = function(t) {
            return "string" === e.type(t) && (this._invalidated[t] = !0, this.is("valid") && this.leave("valid")), e.map(this._invalidated, function(e, t) {
                return t
            })
        }, n.prototype.reset = function(e) {
            (e = this.normalize(e)) !== o && (this._speed = 0, this._current = e, this.suppress(["translate", "translated"]), this.animate(this.coordinates(e)), this.release(["translate", "translated"]))
        }, n.prototype.normalize = function(e, t) {
            var i = this._items.length,
                n = t ? 0 : this._clones.length;
            return !this.isNumeric(e) || i < 1 ? e = o : (e < 0 || e >= i + n) && (e = ((e - n / 2) % i + i) % i + n / 2), e
        }, n.prototype.relative = function(e) {
            return e -= this._clones.length / 2, this.normalize(e, !0)
        }, n.prototype.maximum = function(e) {
            var t, i, o, n = this.settings,
                s = this._coordinates.length;
            if (n.loop) s = this._clones.length / 2 + this._items.length - 1;
            else if (n.autoWidth || n.merge) {
                if (t = this._items.length)
                    for (i = this._items[--t].width(), o = this.$element.width(); t-- && !((i += this._items[t].width() + this.settings.margin) > o););
                s = t + 1
            } else s = n.center ? this._items.length - 1 : this._items.length - n.items;
            return e && (s -= this._clones.length / 2), Math.max(s, 0)
        }, n.prototype.minimum = function(e) {
            return e ? 0 : this._clones.length / 2
        }, n.prototype.items = function(e) {
            return e === o ? this._items.slice() : (e = this.normalize(e, !0), this._items[e])
        }, n.prototype.mergers = function(e) {
            return e === o ? this._mergers.slice() : (e = this.normalize(e, !0), this._mergers[e])
        }, n.prototype.clones = function(t) {
            var i = this._clones.length / 2,
                n = i + this._items.length,
                s = function(e) {
                    return e % 2 == 0 ? n + e / 2 : i - (e + 1) / 2
                };
            return t === o ? e.map(this._clones, function(e, t) {
                return s(t)
            }) : e.map(this._clones, function(e, i) {
                return e === t ? s(i) : null
            })
        }, n.prototype.speed = function(e) {
            return e !== o && (this._speed = e), this._speed
        }, n.prototype.coordinates = function(t) {
            var i, n = 1,
                s = t - 1;
            return t === o ? e.map(this._coordinates, e.proxy(function(e, t) {
                return this.coordinates(t)
            }, this)) : (this.settings.center ? (this.settings.rtl && (n = -1, s = t + 1), i = this._coordinates[t], i += (this.width() - i + (this._coordinates[s] || 0)) / 2 * n) : i = this._coordinates[s] || 0, i = Math.ceil(i))
        }, n.prototype.duration = function(e, t, i) {
            return 0 === i ? 0 : Math.min(Math.max(Math.abs(t - e), 1), 6) * Math.abs(i || this.settings.smartSpeed)
        }, n.prototype.to = function(e, t) {
            var i = this.current(),
                o = null,
                n = e - this.relative(i),
                s = (n > 0) - (n < 0),
                r = this._items.length,
                a = this.minimum(),
                l = this.maximum();
            this.settings.loop ? (!this.settings.rewind && Math.abs(n) > r / 2 && (n += -1 * s * r), e = i + n, (o = ((e - a) % r + r) % r + a) !== e && o - n <= l && o - n > 0 && (i = o - n, e = o, this.reset(i))) : this.settings.rewind ? (l += 1, e = (e % l + l) % l) : e = Math.max(a, Math.min(l, e)), this.speed(this.duration(i, e, t)), this.current(e), this.isVisible() && this.update()
        }, n.prototype.next = function(e) {
            e = e || !1, this.to(this.relative(this.current()) + 1, e)
        }, n.prototype.prev = function(e) {
            e = e || !1, this.to(this.relative(this.current()) - 1, e)
        }, n.prototype.onTransitionEnd = function(e) {
            if (e !== o && (e.stopPropagation(), (e.target || e.srcElement || e.originalTarget) !== this.$stage.get(0))) return !1;
            this.leave("animating"), this.trigger("translated")
        }, n.prototype.viewport = function() {
            var o;
            return this.options.responsiveBaseElement !== t ? o = e(this.options.responsiveBaseElement).width() : t.innerWidth ? o = t.innerWidth : i.documentElement && i.documentElement.clientWidth && (o = i.documentElement.clientWidth), o
        }, n.prototype.replace = function(t) {
            this.$stage.empty(), this._items = [], t && (t = t instanceof jQuery ? t : e(t)), this.settings.nestedItemSelector && (t = t.find("." + this.settings.nestedItemSelector)), t.filter(function() {
                return 1 === this.nodeType
            }).each(e.proxy(function(e, t) {
                t = this.prepare(t), this.$stage.append(t), this._items.push(t), this._mergers.push(1 * t.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)
            }, this)), this.reset(this.isNumeric(this.settings.startPosition) ? this.settings.startPosition : 0), this.invalidate("items")
        }, n.prototype.add = function(t, i) {
            var n = this.relative(this._current);
            i = i === o ? this._items.length : this.normalize(i, !0), t = t instanceof jQuery ? t : e(t), this.trigger("add", {
                content: t,
                position: i
            }), t = this.prepare(t), 0 === this._items.length || i === this._items.length ? (0 === this._items.length && this.$stage.append(t), 0 !== this._items.length && this._items[i - 1].after(t), this._items.push(t), this._mergers.push(1 * t.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)) : (this._items[i].before(t), this._items.splice(i, 0, t), this._mergers.splice(i, 0, 1 * t.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)), this._items[n] && this.reset(this._items[n].index()), this.invalidate("items"), this.trigger("added", {
                content: t,
                position: i
            })
        }, n.prototype.remove = function(e) {
            (e = this.normalize(e, !0)) !== o && (this.trigger("remove", {
                content: this._items[e],
                position: e
            }), this._items[e].remove(), this._items.splice(e, 1), this._mergers.splice(e, 1), this.invalidate("items"), this.trigger("removed", {
                content: null,
                position: e
            }))
        }, n.prototype.preloadAutoWidthImages = function(t) {
            t.each(e.proxy(function(t, i) {
                this.enter("pre-loading"), i = e(i), e(new Image).one("load", e.proxy(function(e) {
                    i.attr("src", e.target.src), i.css("opacity", 1), this.leave("pre-loading"), !this.is("pre-loading") && !this.is("initializing") && this.refresh()
                }, this)).attr("src", i.attr("src") || i.attr("data-src") || i.attr("data-src-retina"))
            }, this))
        }, n.prototype.destroy = function() {
            this.$element.off(".owl.core"), this.$stage.off(".owl.core"), e(i).off(".owl.core"), !1 !== this.settings.responsive && (t.clearTimeout(this.resizeTimer), this.off(t, "resize", this._handlers.onThrottledResize));
            for (var o in this._plugins) this._plugins[o].destroy();
            this.$stage.children(".cloned").remove(), this.$stage.unwrap(), this.$stage.children().contents().unwrap(), this.$stage.children().unwrap(), this.$stage.remove(), this.$element.removeClass(this.options.refreshClass).removeClass(this.options.loadingClass).removeClass(this.options.loadedClass).removeClass(this.options.rtlClass).removeClass(this.options.dragClass).removeClass(this.options.grabClass).attr("class", this.$element.attr("class").replace(new RegExp(this.options.responsiveClass + "-\\S+\\s", "g"), "")).removeData("owl.carousel")
        }, n.prototype.op = function(e, t, i) {
            var o = this.settings.rtl;
            switch (t) {
                case "<":
                    return o ? e > i : e < i;
                case ">":
                    return o ? e < i : e > i;
                case ">=":
                    return o ? e <= i : e >= i;
                case "<=":
                    return o ? e >= i : e <= i
            }
        }, n.prototype.on = function(e, t, i, o) {
            e.addEventListener ? e.addEventListener(t, i, o) : e.attachEvent && e.attachEvent("on" + t, i)
        }, n.prototype.off = function(e, t, i, o) {
            e.removeEventListener ? e.removeEventListener(t, i, o) : e.detachEvent && e.detachEvent("on" + t, i)
        }, n.prototype.trigger = function(t, i, o, s, r) {
            var a = {
                    item: {
                        count: this._items.length,
                        index: this.current()
                    }
                },
                l = e.camelCase(e.grep(["on", t, o], function(e) {
                    return e
                }).join("-").toLowerCase()),
                c = e.Event([t, "owl", o || "carousel"].join(".").toLowerCase(), e.extend({
                    relatedTarget: this
                }, a, i));
            return this._supress[t] || (e.each(this._plugins, function(e, t) {
                t.onTrigger && t.onTrigger(c)
            }), this.register({
                type: n.Type.Event,
                name: t
            }), this.$element.trigger(c), this.settings && "function" == typeof this.settings[l] && this.settings[l].call(this, c)), c
        }, n.prototype.enter = function(t) {
            e.each([t].concat(this._states.tags[t] || []), e.proxy(function(e, t) {
                this._states.current[t] === o && (this._states.current[t] = 0), this._states.current[t]++
            }, this))
        }, n.prototype.leave = function(t) {
            e.each([t].concat(this._states.tags[t] || []), e.proxy(function(e, t) {
                this._states.current[t]--
            }, this))
        }, n.prototype.register = function(t) {
            if (t.type === n.Type.Event) {
                if (e.event.special[t.name] || (e.event.special[t.name] = {}), !e.event.special[t.name].owl) {
                    var i = e.event.special[t.name]._default;
                    e.event.special[t.name]._default = function(e) {
                        return !i || !i.apply || e.namespace && -1 !== e.namespace.indexOf("owl") ? e.namespace && e.namespace.indexOf("owl") > -1 : i.apply(this, arguments)
                    }, e.event.special[t.name].owl = !0
                }
            } else t.type === n.Type.State && (this._states.tags[t.name] ? this._states.tags[t.name] = this._states.tags[t.name].concat(t.tags) : this._states.tags[t.name] = t.tags, this._states.tags[t.name] = e.grep(this._states.tags[t.name], e.proxy(function(i, o) {
                return e.inArray(i, this._states.tags[t.name]) === o
            }, this)))
        }, n.prototype.suppress = function(t) {
            e.each(t, e.proxy(function(e, t) {
                this._supress[t] = !0
            }, this))
        }, n.prototype.release = function(t) {
            e.each(t, e.proxy(function(e, t) {
                delete this._supress[t]
            }, this))
        }, n.prototype.pointer = function(e) {
            var i = {
                x: null,
                y: null
            };
            return e = e.originalEvent || e || t.event, e = e.touches && e.touches.length ? e.touches[0] : e.changedTouches && e.changedTouches.length ? e.changedTouches[0] : e, e.pageX ? (i.x = e.pageX, i.y = e.pageY) : (i.x = e.clientX, i.y = e.clientY), i
        }, n.prototype.isNumeric = function(e) {
            return !isNaN(parseFloat(e))
        }, n.prototype.difference = function(e, t) {
            return {
                x: e.x - t.x,
                y: e.y - t.y
            }
        }, e.fn.owlCarousel = function(t) {
            var i = Array.prototype.slice.call(arguments, 1);
            return this.each(function() {
                var o = e(this),
                    s = o.data("owl.carousel");
                s || (s = new n(this, "object" == typeof t && t), o.data("owl.carousel", s), e.each(["next", "prev", "to", "destroy", "refresh", "replace", "add", "remove"], function(t, i) {
                    s.register({
                        type: n.Type.Event,
                        name: i
                    }), s.$element.on(i + ".owl.carousel.core", e.proxy(function(e) {
                        e.namespace && e.relatedTarget !== this && (this.suppress([i]), s[i].apply(this, [].slice.call(arguments, 1)), this.release([i]))
                    }, s))
                })), "string" == typeof t && "_" !== t.charAt(0) && s[t].apply(s, i)
            })
        }, e.fn.owlCarousel.Constructor = n
    }(window.Zepto || window.jQuery, window, document),
    function(e, t, i, o) {
        var n = function t(i) {
            this._core = i, this._interval = null, this._visible = null, this._handlers = {
                "initialized.owl.carousel": e.proxy(function(e) {
                    e.namespace && this._core.settings.autoRefresh && this.watch()
                }, this)
            }, this._core.options = e.extend({}, t.Defaults, this._core.options), this._core.$element.on(this._handlers)
        };
        n.Defaults = {
            autoRefresh: !0,
            autoRefreshInterval: 500
        }, n.prototype.watch = function() {
            this._interval || (this._visible = this._core.isVisible(), this._interval = t.setInterval(e.proxy(this.refresh, this), this._core.settings.autoRefreshInterval))
        }, n.prototype.refresh = function() {
            this._core.isVisible() !== this._visible && (this._visible = !this._visible, this._core.$element.toggleClass("owl-hidden", !this._visible), this._visible && this._core.invalidate("width") && this._core.refresh())
        }, n.prototype.destroy = function() {
            var e, i;
            t.clearInterval(this._interval);
            for (e in this._handlers) this._core.$element.off(e, this._handlers[e]);
            for (i in Object.getOwnPropertyNames(this)) "function" != typeof this[i] && (this[i] = null)
        }, e.fn.owlCarousel.Constructor.Plugins.AutoRefresh = n
    }(window.Zepto || window.jQuery, window, document),
    function(e, t, i, o) {
        var n = function t(i) {
            this._core = i, this._loaded = [], this._handlers = {
                "initialized.owl.carousel change.owl.carousel resized.owl.carousel": e.proxy(function(t) {
                    if (t.namespace && this._core.settings && this._core.settings.lazyLoad && (t.property && "position" == t.property.name || "initialized" == t.type)) {
                        var i = this._core.settings,
                            o = i.center && Math.ceil(i.items / 2) || i.items,
                            n = i.center && -1 * o || 0,
                            s = (t.property && void 0 !== t.property.value ? t.property.value : this._core.current()) + n,
                            r = this._core.clones().length,
                            a = e.proxy(function(e, t) {
                                this.load(t)
                            }, this);
                        for (i.lazyLoadEager > 0 && (o += i.lazyLoadEager, i.loop && (s -= i.lazyLoadEager, o++)); n++ < o;) this.load(r / 2 + this._core.relative(s)), r && e.each(this._core.clones(this._core.relative(s)), a), s++
                    }
                }, this)
            }, this._core.options = e.extend({}, t.Defaults, this._core.options), this._core.$element.on(this._handlers)
        };
        n.Defaults = {
            lazyLoad: !1,
            lazyLoadEager: 0
        }, n.prototype.load = function(i) {
            var o = this._core.$stage.children().eq(i),
                n = o && o.find(".owl-lazy");
            !n || e.inArray(o.get(0), this._loaded) > -1 || (n.each(e.proxy(function(i, o) {
                var n, s = e(o),
                    r = t.devicePixelRatio > 1 && s.attr("data-src-retina") || s.attr("data-src") || s.attr("data-srcset");
                this._core.trigger("load", {
                    element: s,
                    url: r
                }, "lazy"), s.is("img") ? s.one("load.owl.lazy", e.proxy(function() {
                    s.css("opacity", 1), this._core.trigger("loaded", {
                        element: s,
                        url: r
                    }, "lazy")
                }, this)).attr("src", r) : s.is("source") ? s.one("load.owl.lazy", e.proxy(function() {
                    this._core.trigger("loaded", {
                        element: s,
                        url: r
                    }, "lazy")
                }, this)).attr("srcset", r) : (n = new Image, n.onload = e.proxy(function() {
                    s.css({
                        "background-image": 'url("' + r + '")',
                        opacity: "1"
                    }), this._core.trigger("loaded", {
                        element: s,
                        url: r
                    }, "lazy")
                }, this), n.src = r)
            }, this)), this._loaded.push(o.get(0)))
        }, n.prototype.destroy = function() {
            var e, t;
            for (e in this.handlers) this._core.$element.off(e, this.handlers[e]);
            for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null)
        }, e.fn.owlCarousel.Constructor.Plugins.Lazy = n
    }(window.Zepto || window.jQuery, window, document),
    function(e, t, i, o) {
        var n = function i(o) {
            this._core = o, this._previousHeight = null, this._handlers = {
                "initialized.owl.carousel refreshed.owl.carousel": e.proxy(function(e) {
                    e.namespace && this._core.settings.autoHeight && this.update()
                }, this),
                "changed.owl.carousel": e.proxy(function(e) {
                    e.namespace && this._core.settings.autoHeight && "position" === e.property.name && this.update()
                }, this),
                "loaded.owl.lazy": e.proxy(function(e) {
                    e.namespace && this._core.settings.autoHeight && e.element.closest("." + this._core.settings.itemClass).index() === this._core.current() && this.update()
                }, this)
            }, this._core.options = e.extend({}, i.Defaults, this._core.options), this._core.$element.on(this._handlers), this._intervalId = null;
            var n = this;
            e(t).on("load", function() {
                n._core.settings.autoHeight && n.update()
            }), e(t).resize(function() {
                n._core.settings.autoHeight && (null != n._intervalId && clearTimeout(n._intervalId), n._intervalId = setTimeout(function() {
                    n.update()
                }, 250))
            })
        };
        n.Defaults = {
            autoHeight: !1,
            autoHeightClass: "owl-height"
        }, n.prototype.update = function() {
            var t = this._core._current,
                i = t + this._core.settings.items,
                o = this._core.settings.lazyLoad,
                n = this._core.$stage.children().toArray().slice(t, i),
                s = [],
                r = 0;
            e.each(n, function(t, i) {
                s.push(e(i).height())
            }), r = Math.max.apply(null, s), r <= 1 && o && this._previousHeight && (r = this._previousHeight), this._previousHeight = r, this._core.$stage.parent().height(r).addClass(this._core.settings.autoHeightClass)
        }, n.prototype.destroy = function() {
            var e, t;
            for (e in this._handlers) this._core.$element.off(e, this._handlers[e]);
            for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null)
        }, e.fn.owlCarousel.Constructor.Plugins.AutoHeight = n
    }(window.Zepto || window.jQuery, window, document),
    function(e, t, i, o) {
        var n = function t(i) {
            this._core = i, this._videos = {}, this._playing = null, this._handlers = {
                "initialized.owl.carousel": e.proxy(function(e) {
                    e.namespace && this._core.register({
                        type: "state",
                        name: "playing",
                        tags: ["interacting"]
                    })
                }, this),
                "resize.owl.carousel": e.proxy(function(e) {
                    e.namespace && this._core.settings.video && this.isInFullScreen() && e.preventDefault()
                }, this),
                "refreshed.owl.carousel": e.proxy(function(e) {
                    e.namespace && this._core.is("resizing") && this._core.$stage.find(".cloned .owl-video-frame").remove()
                }, this),
                "changed.owl.carousel": e.proxy(function(e) {
                    e.namespace && "position" === e.property.name && this._playing && this.stop()
                }, this),
                "prepared.owl.carousel": e.proxy(function(t) {
                    if (t.namespace) {
                        var i = e(t.content).find(".owl-video");
                        i.length && (i.css("display", "none"), this.fetch(i, e(t.content)))
                    }
                }, this)
            }, this._core.options = e.extend({}, t.Defaults, this._core.options), this._core.$element.on(this._handlers), this._core.$element.on("click.owl.video", ".owl-video-play-icon", e.proxy(function(e) {
                this.play(e)
            }, this))
        };
        n.Defaults = {
            video: !1,
            videoHeight: !1,
            videoWidth: !1
        }, n.prototype.fetch = function(e, t) {
            var i = function() {
                    return e.attr("data-vimeo-id") ? "vimeo" : e.attr("data-vzaar-id") ? "vzaar" : "youtube"
                }(),
                o = e.attr("data-vimeo-id") || e.attr("data-youtube-id") || e.attr("data-vzaar-id"),
                n = e.attr("data-width") || this._core.settings.videoWidth,
                s = e.attr("data-height") || this._core.settings.videoHeight,
                r = e.attr("href");
            if (!r) throw new Error("Missing video URL.");
            if (o = r.match(/(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com|be\-nocookie\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/), o[3].indexOf("youtu") > -1) i = "youtube";
            else if (o[3].indexOf("vimeo") > -1) i = "vimeo";
            else {
                if (!(o[3].indexOf("vzaar") > -1)) throw new Error("Video URL not supported.");
                i = "vzaar"
            }
            o = o[6], this._videos[r] = {
                type: i,
                id: o,
                width: n,
                height: s
            }, t.attr("data-video", r), this.thumbnail(e, this._videos[r])
        }, n.prototype.thumbnail = function(t, i) {
            var o, n, s, r = i.width && i.height ? "width:" + i.width + "px;height:" + i.height + "px;" : "",
                a = t.find("img"),
                l = "src",
                c = "",
                d = this._core.settings,
                u = function(i) {
                    n = '<div class="owl-video-play-icon"></div>', o = d.lazyLoad ? e("<div/>", {
                        class: "owl-video-tn " + c,
                        srcType: i
                    }) : e("<div/>", {
                        class: "owl-video-tn",
                        style: "opacity:1;background-image:url(" + i + ")"
                    }), t.after(o), t.after(n)
                };
            if (t.wrap(e("<div/>", {
                    class: "owl-video-wrapper",
                    style: r
                })), this._core.settings.lazyLoad && (l = "data-src", c = "owl-lazy"), a.length) return u(a.attr(l)), a.remove(), !1;
            "youtube" === i.type ? (s = "//img.youtube.com/vi/" + i.id + "/hqdefault.jpg", u(s)) : "vimeo" === i.type ? e.ajax({
                type: "GET",
                url: "//vimeo.com/api/v2/video/" + i.id + ".json",
                jsonp: "callback",
                dataType: "jsonp",
                success: function(e) {
                    s = e[0].thumbnail_large, u(s)
                }
            }) : "vzaar" === i.type && e.ajax({
                type: "GET",
                url: "//vzaar.com/api/videos/" + i.id + ".json",
                jsonp: "callback",
                dataType: "jsonp",
                success: function(e) {
                    s = e.framegrab_url, u(s)
                }
            })
        }, n.prototype.stop = function() {
            this._core.trigger("stop", null, "video"), this._playing.find(".owl-video-frame").remove(), this._playing.removeClass("owl-video-playing"), this._playing = null, this._core.leave("playing"), this._core.trigger("stopped", null, "video")
        }, n.prototype.play = function(t) {
            var i, o = e(t.target),
                n = o.closest("." + this._core.settings.itemClass),
                s = this._videos[n.attr("data-video")],
                r = s.width || "100%",
                a = s.height || this._core.$stage.height();
            this._playing || (this._core.enter("playing"), this._core.trigger("play", null, "video"), n = this._core.items(this._core.relative(n.index())), this._core.reset(n.index()), i = e('<iframe frameborder="0" allowfullscreen mozallowfullscreen webkitAllowFullScreen ></iframe>'), i.attr("height", a), i.attr("width", r), "youtube" === s.type ? i.attr("src", "//www.youtube.com/embed/" + s.id + "?autoplay=1&rel=0&v=" + s.id) : "vimeo" === s.type ? i.attr("src", "//player.vimeo.com/video/" + s.id + "?autoplay=1") : "vzaar" === s.type && i.attr("src", "//view.vzaar.com/" + s.id + "/player?autoplay=true"), e(i).wrap('<div class="owl-video-frame" />').insertAfter(n.find(".owl-video")), this._playing = n.addClass("owl-video-playing"))
        }, n.prototype.isInFullScreen = function() {
            var t = i.fullscreenElement || i.mozFullScreenElement || i.webkitFullscreenElement;
            return t && e(t).parent().hasClass("owl-video-frame")
        }, n.prototype.destroy = function() {
            var e, t;
            this._core.$element.off("click.owl.video");
            for (e in this._handlers) this._core.$element.off(e, this._handlers[e]);
            for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null)
        }, e.fn.owlCarousel.Constructor.Plugins.Video = n
    }(window.Zepto || window.jQuery, window, document),
    function(e, t, i, o) {
        var n = function t(i) {
            this.core = i, this.core.options = e.extend({}, t.Defaults, this.core.options), this.swapping = !0, this.previous = o, this.next = o, this.handlers = {
                "change.owl.carousel": e.proxy(function(e) {
                    e.namespace && "position" == e.property.name && (this.previous = this.core.current(), this.next = e.property.value)
                }, this),
                "drag.owl.carousel dragged.owl.carousel translated.owl.carousel": e.proxy(function(e) {
                    e.namespace && (this.swapping = "translated" == e.type)
                }, this),
                "translate.owl.carousel": e.proxy(function(e) {
                    e.namespace && this.swapping && (this.core.options.animateOut || this.core.options.animateIn) && this.swap()
                }, this)
            }, this.core.$element.on(this.handlers)
        };
        n.Defaults = {
            animateOut: !1,
            animateIn: !1
        }, n.prototype.swap = function() {
            if (1 === this.core.settings.items && e.support.animation && e.support.transition) {
                this.core.speed(0);
                var t, i = e.proxy(this.clear, this),
                    o = this.core.$stage.children().eq(this.previous),
                    n = this.core.$stage.children().eq(this.next),
                    s = this.core.settings.animateIn,
                    r = this.core.settings.animateOut;
                this.core.current() !== this.previous && (r && (t = this.core.coordinates(this.previous) - this.core.coordinates(this.next), o.one(e.support.animation.end, i).css({
                    left: t + "px"
                }).addClass("animated owl-animated-out").addClass(r)), s && n.one(e.support.animation.end, i).addClass("animated owl-animated-in").addClass(s))
            }
        }, n.prototype.clear = function(t) {
            e(t.target).css({
                left: ""
            }).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut), this.core.onTransitionEnd()
        }, n.prototype.destroy = function() {
            var e, t;
            for (e in this.handlers) this.core.$element.off(e, this.handlers[e]);
            for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null)
        }, e.fn.owlCarousel.Constructor.Plugins.Animate = n
    }(window.Zepto || window.jQuery, window, document),
    function(e, t, i, o) {
        var n = function t(i) {
            this._core = i, this._call = null, this._time = 0, this._timeout = 0, this._paused = !0, this._handlers = {
                "changed.owl.carousel": e.proxy(function(e) {
                    e.namespace && "settings" === e.property.name ? this._core.settings.autoplay ? this.play() : this.stop() : e.namespace && "position" === e.property.name && this._paused && (this._time = 0)
                }, this),
                "initialized.owl.carousel": e.proxy(function(e) {
                    e.namespace && this._core.settings.autoplay && this.play()
                }, this),
                "play.owl.autoplay": e.proxy(function(e, t, i) {
                    e.namespace && this.play(t, i)
                }, this),
                "stop.owl.autoplay": e.proxy(function(e) {
                    e.namespace && this.stop()
                }, this),
                "mouseover.owl.autoplay": e.proxy(function() {
                    this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause()
                }, this),
                "mouseleave.owl.autoplay": e.proxy(function() {
                    this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.play()
                }, this),
                "touchstart.owl.core": e.proxy(function() {
                    this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause()
                }, this),
                "touchend.owl.core": e.proxy(function() {
                    this._core.settings.autoplayHoverPause && this.play()
                }, this)
            }, this._core.$element.on(this._handlers), this._core.options = e.extend({}, t.Defaults, this._core.options)
        };
        n.Defaults = {
            autoplay: !1,
            autoplayTimeout: 5e3,
            autoplayHoverPause: !1,
            autoplaySpeed: !1
        }, n.prototype._next = function(o) {
            this._call = t.setTimeout(e.proxy(this._next, this, o), this._timeout * (Math.round(this.read() / this._timeout) + 1) - this.read()), this._core.is("interacting") || i.hidden || this._core.next(o || this._core.settings.autoplaySpeed)
        }, n.prototype.read = function() {
            return (new Date).getTime() - this._time
        }, n.prototype.play = function(i, o) {
            var n;
            this._core.is("rotating") || this._core.enter("rotating"), i = i || this._core.settings.autoplayTimeout, n = Math.min(this._time % (this._timeout || i), i), this._paused ? (this._time = this.read(), this._paused = !1) : t.clearTimeout(this._call), this._time += this.read() % i - n, this._timeout = i, this._call = t.setTimeout(e.proxy(this._next, this, o), i - n)
        }, n.prototype.stop = function() {
            this._core.is("rotating") && (this._time = 0, this._paused = !0, t.clearTimeout(this._call), this._core.leave("rotating"))
        }, n.prototype.pause = function() {
            this._core.is("rotating") && !this._paused && (this._time = this.read(), this._paused = !0, t.clearTimeout(this._call))
        }, n.prototype.destroy = function() {
            var e, t;
            this.stop();
            for (e in this._handlers) this._core.$element.off(e, this._handlers[e]);
            for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null)
        }, e.fn.owlCarousel.Constructor.Plugins.autoplay = n
    }(window.Zepto || window.jQuery, window, document),
    function(e, t, i, o) {
        var n = function t(i) {
            this._core = i, this._initialized = !1, this._pages = [], this._controls = {}, this._templates = [], this.$element = this._core.$element, this._overrides = {
                next: this._core.next,
                prev: this._core.prev,
                to: this._core.to
            }, this._handlers = {
                "prepared.owl.carousel": e.proxy(function(t) {
                    t.namespace && this._core.settings.dotsData && this._templates.push('<div class="' + this._core.settings.dotClass + '">' + e(t.content).find("[data-dot]").addBack("[data-dot]").attr("data-dot") + "</div>")
                }, this),
                "added.owl.carousel": e.proxy(function(e) {
                    e.namespace && this._core.settings.dotsData && this._templates.splice(e.position, 0, this._templates.pop())
                }, this),
                "remove.owl.carousel": e.proxy(function(e) {
                    e.namespace && this._core.settings.dotsData && this._templates.splice(e.position, 1)
                }, this),
                "changed.owl.carousel": e.proxy(function(e) {
                    e.namespace && "position" == e.property.name && this.draw()
                }, this),
                "initialized.owl.carousel": e.proxy(function(e) {
                    e.namespace && !this._initialized && (this._core.trigger("initialize", null, "navigation"), this.initialize(), this.update(), this.draw(), this._initialized = !0, this._core.trigger("initialized", null, "navigation"))
                }, this),
                "refreshed.owl.carousel": e.proxy(function(e) {
                    e.namespace && this._initialized && (this._core.trigger("refresh", null, "navigation"), this.update(), this.draw(), this._core.trigger("refreshed", null, "navigation"))
                }, this)
            }, this._core.options = e.extend({}, t.Defaults, this._core.options), this.$element.on(this._handlers)
        };
        n.Defaults = {
            nav: !1,
            navText: ['<span aria-label="Previous">&#x2039;</span>', '<span aria-label="Next">&#x203a;</span>'],
            navSpeed: !1,
            navElement: 'button type="button" role="presentation"',
            navContainer: !1,
            navContainerClass: "owl-nav",
            navClass: ["owl-prev", "owl-next"],
            slideBy: 1,
            dotClass: "owl-dot",
            dotsClass: "owl-dots",
            dots: !0,
            dotsEach: !1,
            dotsData: !1,
            dotsSpeed: !1,
            dotsContainer: !1
        }, n.prototype.initialize = function() {
            var t, i = this._core.settings;
            this._controls.$relative = (i.navContainer ? e(i.navContainer) : e("<div>").addClass(i.navContainerClass).appendTo(this.$element)).addClass("disabled"), this._controls.$previous = e("<" + i.navElement + ">").addClass(i.navClass[0]).html(i.navText[0]).prependTo(this._controls.$relative).on("click", e.proxy(function(e) {
                this.prev(i.navSpeed)
            }, this)), this._controls.$next = e("<" + i.navElement + ">").addClass(i.navClass[1]).html(i.navText[1]).appendTo(this._controls.$relative).on("click", e.proxy(function(e) {
                this.next(i.navSpeed)
            }, this)), i.dotsData || (this._templates = [e('<button role="button">').addClass(i.dotClass).append(e("<span>")).prop("outerHTML")]), this._controls.$absolute = (i.dotsContainer ? e(i.dotsContainer) : e("<div>").addClass(i.dotsClass).appendTo(this.$element)).addClass("disabled"), this._controls.$absolute.on("click", "button", e.proxy(function(t) {
                var o = e(t.target).parent().is(this._controls.$absolute) ? e(t.target).index() : e(t.target).parent().index();
                t.preventDefault(), this.to(o, i.dotsSpeed)
            }, this));
            for (t in this._overrides) this._core[t] = e.proxy(this[t], this)
        }, n.prototype.destroy = function() {
            var e, t, i, o, n;
            n = this._core.settings;
            for (e in this._handlers) this.$element.off(e, this._handlers[e]);
            for (t in this._controls) "$relative" === t && n.navContainer ? this._controls[t].html("") : this._controls[t].remove();
            for (o in this.overides) this._core[o] = this._overrides[o];
            for (i in Object.getOwnPropertyNames(this)) "function" != typeof this[i] && (this[i] = null)
        }, n.prototype.update = function() {
            var e, t, i, o = this._core.clones().length / 2,
                n = o + this._core.items().length,
                s = this._core.maximum(!0),
                r = this._core.settings,
                a = r.center || r.autoWidth || r.dotsData ? 1 : r.dotsEach || r.items;
            if ("page" !== r.slideBy && (r.slideBy = Math.min(r.slideBy, r.items)), r.dots || "page" == r.slideBy)
                for (this._pages = [], e = o, t = 0, i = 0; e < n; e++) {
                    if (t >= a || 0 === t) {
                        if (this._pages.push({
                                start: Math.min(s, e - o),
                                end: e - o + a - 1
                            }), Math.min(s, e - o) === s) break;
                        t = 0, ++i
                    }
                    t += this._core.mergers(this._core.relative(e))
                }
        }, n.prototype.draw = function() {
            var t, i = this._core.settings,
                o = this._core.items().length <= i.items,
                n = this._core.relative(this._core.current()),
                s = i.loop || i.rewind;
            this._controls.$relative.toggleClass("disabled", !i.nav || o), i.nav && (this._controls.$previous.toggleClass("disabled", !s && n <= this._core.minimum(!0)), this._controls.$next.toggleClass("disabled", !s && n >= this._core.maximum(!0))), this._controls.$absolute.toggleClass("disabled", !i.dots || o), i.dots && (t = this._pages.length - this._controls.$absolute.children().length, i.dotsData && 0 !== t ? this._controls.$absolute.html(this._templates.join("")) : t > 0 ? this._controls.$absolute.append(new Array(t + 1).join(this._templates[0])) : t < 0 && this._controls.$absolute.children().slice(t).remove(), this._controls.$absolute.find(".active").removeClass("active"), this._controls.$absolute.children().eq(e.inArray(this.current(), this._pages)).addClass("active"))
        }, n.prototype.onTrigger = function(t) {
            var i = this._core.settings;
            t.page = {
                index: e.inArray(this.current(), this._pages),
                count: this._pages.length,
                size: i && (i.center || i.autoWidth || i.dotsData ? 1 : i.dotsEach || i.items)
            }
        }, n.prototype.current = function() {
            var t = this._core.relative(this._core.current());
            return e.grep(this._pages, e.proxy(function(e, i) {
                return e.start <= t && e.end >= t
            }, this)).pop()
        }, n.prototype.getPosition = function(t) {
            var i, o, n = this._core.settings;
            return "page" == n.slideBy ? (i = e.inArray(this.current(), this._pages), o = this._pages.length, t ? ++i : --i, i = this._pages[(i % o + o) % o].start) : (i = this._core.relative(this._core.current()), o = this._core.items().length, t ? i += n.slideBy : i -= n.slideBy), i
        }, n.prototype.next = function(t) {
            e.proxy(this._overrides.to, this._core)(this.getPosition(!0), t)
        }, n.prototype.prev = function(t) {
            e.proxy(this._overrides.to, this._core)(this.getPosition(!1), t)
        }, n.prototype.to = function(t, i, o) {
            var n;
            !o && this._pages.length ? (n = this._pages.length, e.proxy(this._overrides.to, this._core)(this._pages[(t % n + n) % n].start, i)) : e.proxy(this._overrides.to, this._core)(t, i)
        }, e.fn.owlCarousel.Constructor.Plugins.Navigation = n
    }(window.Zepto || window.jQuery, window, document),
    function(e, t, i, o) {
        var n = function i(o) {
            this._core = o, this._hashes = {}, this.$element = this._core.$element, this._handlers = {
                "initialized.owl.carousel": e.proxy(function(i) {
                    i.namespace && "URLHash" === this._core.settings.startPosition && e(t).trigger("hashchange.owl.navigation")
                }, this),
                "prepared.owl.carousel": e.proxy(function(t) {
                    if (t.namespace) {
                        var i = e(t.content).find("[data-hash]").addBack("[data-hash]").attr("data-hash");
                        if (!i) return;
                        this._hashes[i] = t.content
                    }
                }, this),
                "changed.owl.carousel": e.proxy(function(i) {
                    if (i.namespace && "position" === i.property.name) {
                        var o = this._core.items(this._core.relative(this._core.current())),
                            n = e.map(this._hashes, function(e, t) {
                                return e === o ? t : null
                            }).join();
                        if (!n || t.location.hash.slice(1) === n) return;
                        t.location.hash = n
                    }
                }, this)
            }, this._core.options = e.extend({}, i.Defaults, this._core.options), this.$element.on(this._handlers), e(t).on("hashchange.owl.navigation", e.proxy(function(e) {
                var i = t.location.hash.substring(1),
                    o = this._core.$stage.children(),
                    n = this._hashes[i] && o.index(this._hashes[i]);
                void 0 !== n && n !== this._core.current() && this._core.to(this._core.relative(n), !1, !0)
            }, this))
        };
        n.Defaults = {
            URLhashListener: !1
        }, n.prototype.destroy = function() {
            var i, o;
            e(t).off("hashchange.owl.navigation");
            for (i in this._handlers) this._core.$element.off(i, this._handlers[i]);
            for (o in Object.getOwnPropertyNames(this)) "function" != typeof this[o] && (this[o] = null)
        }, e.fn.owlCarousel.Constructor.Plugins.Hash = n
    }(window.Zepto || window.jQuery, window, document),
    function(e, t, i, o) {
        function n(t, i) {
            var n = !1,
                s = t.charAt(0).toUpperCase() + t.slice(1);
            return e.each((t + " " + a.join(s + " ") + s).split(" "), function(e, t) {
                if (r[t] !== o) return n = !i || t, !1
            }), n
        }

        function s(e) {
            return n(e, !0)
        }
        var r = e("<support>").get(0).style,
            a = "Webkit Moz O ms".split(" "),
            l = {
                transition: {
                    end: {
                        WebkitTransition: "webkitTransitionEnd",
                        MozTransition: "transitionend",
                        OTransition: "oTransitionEnd",
                        transition: "transitionend"
                    }
                },
                animation: {
                    end: {
                        WebkitAnimation: "webkitAnimationEnd",
                        MozAnimation: "animationend",
                        OAnimation: "oAnimationEnd",
                        animation: "animationend"
                    }
                }
            },
            c = {
                csstransforms: function() {
                    return !!n("transform")
                },
                csstransforms3d: function() {
                    return !!n("perspective")
                },
                csstransitions: function() {
                    return !!n("transition")
                },
                cssanimations: function() {
                    return !!n("animation")
                }
            };
        c.csstransitions() && (e.support.transition = new String(s("transition")), e.support.transition.end = l.transition.end[e.support.transition]), c.cssanimations() && (e.support.animation = new String(s("animation")), e.support.animation.end = l.animation.end[e.support.animation]), c.csstransforms() && (e.support.transform = new String(s("transform")), e.support.transform3d = c.csstransforms3d())
    }(window.Zepto || window.jQuery, window, document)
}, function(e, t, i) {
    "use strict";
    var o, n, s;
    ! function(r) {
        n = [i(0)], o = r, void 0 !== (s = "function" == typeof o ? o.apply(t, n) : o) && (e.exports = s)
    }(function(e) {
        var t = window.Slick || {};
        (t = function() {
            var t = 0;
            return function(i, o) {
                var n, s = this;
                s.defaults = {
                    accessibility: !0,
                    adaptiveHeight: !1,
                    appendArrows: e(i),
                    appendDots: e(i),
                    arrows: !0,
                    asNavFor: null,
                    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',
                    nextArrow: '<button class="slick-next" aria-label="Next" type="button">Next</button>',
                    autoplay: !1,
                    autoplaySpeed: 3e3,
                    centerMode: !1,
                    centerPadding: "50px",
                    cssEase: "ease",
                    customPaging: function(t, i) {
                        return e('<button type="button" />').text(i + 1)
                    },
                    dots: !1,
                    dotsClass: "slick-dots",
                    draggable: !0,
                    easing: "linear",
                    edgeFriction: .35,
                    fade: !1,
                    focusOnSelect: !1,
                    focusOnChange: !1,
                    infinite: !0,
                    initialSlide: 0,
                    lazyLoad: "ondemand",
                    mobileFirst: !1,
                    pauseOnHover: !0,
                    pauseOnFocus: !0,
                    pauseOnDotsHover: !1,
                    respondTo: "window",
                    responsive: null,
                    rows: 1,
                    rtl: !1,
                    slide: "",
                    slidesPerRow: 1,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    speed: 500,
                    swipe: !0,
                    swipeToSlide: !1,
                    touchMove: !0,
                    touchThreshold: 5,
                    useCSS: !0,
                    useTransform: !0,
                    variableWidth: !1,
                    vertical: !1,
                    verticalSwiping: !1,
                    waitForAnimate: !0,
                    zIndex: 1e3
                }, s.initials = {
                    animating: !1,
                    dragging: !1,
                    autoPlayTimer: null,
                    currentDirection: 0,
                    currentLeft: null,
                    currentSlide: 0,
                    direction: 1,
                    $dots: null,
                    listWidth: null,
                    listHeight: null,
                    loadIndex: 0,
                    $nextArrow: null,
                    $prevArrow: null,
                    scrolling: !1,
                    slideCount: null,
                    slideWidth: null,
                    $slideTrack: null,
                    $slides: null,
                    sliding: !1,
                    slideOffset: 0,
                    swipeLeft: null,
                    swiping: !1,
                    $list: null,
                    touchObject: {},
                    transformsEnabled: !1,
                    unslicked: !1
                }, e.extend(s, s.initials), s.activeBreakpoint = null, s.animType = null, s.animProp = null, s.breakpoints = [], s.breakpointSettings = [], s.cssTransitions = !1, s.focussed = !1, s.interrupted = !1, s.hidden = "hidden", s.paused = !0, s.positionProp = null, s.respondTo = null, s.rowCount = 1, s.shouldClick = !0, s.$slider = e(i), s.$slidesCache = null, s.transformType = null, s.transitionType = null, s.visibilityChange = "visibilitychange", s.windowWidth = 0, s.windowTimer = null, n = e(i).data("slick") || {}, s.options = e.extend({}, s.defaults, o, n), s.currentSlide = s.options.initialSlide, s.originalSettings = s.options, void 0 !== document.mozHidden ? (s.hidden = "mozHidden", s.visibilityChange = "mozvisibilitychange") : void 0 !== document.webkitHidden && (s.hidden = "webkitHidden", s.visibilityChange = "webkitvisibilitychange"), s.autoPlay = e.proxy(s.autoPlay, s), s.autoPlayClear = e.proxy(s.autoPlayClear, s), s.autoPlayIterator = e.proxy(s.autoPlayIterator, s), s.changeSlide = e.proxy(s.changeSlide, s), s.clickHandler = e.proxy(s.clickHandler, s), s.selectHandler = e.proxy(s.selectHandler, s), s.setPosition = e.proxy(s.setPosition, s), s.swipeHandler = e.proxy(s.swipeHandler, s), s.dragHandler = e.proxy(s.dragHandler, s), s.keyHandler = e.proxy(s.keyHandler, s), s.instanceUid = t++, s.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/, s.registerBreakpoints(), s.init(!0)
            }
        }()).prototype.activateADA = function() {
            this.$slideTrack.find(".slick-active").attr({
                "aria-hidden": "false"
            }).find("a, input, button, select").attr({
                tabindex: "0"
            })
        }, t.prototype.addSlide = t.prototype.slickAdd = function(t, i, o) {
            var n = this;
            if ("boolean" == typeof i) o = i, i = null;
            else if (i < 0 || i >= n.slideCount) return !1;
            n.unload(), "number" == typeof i ? 0 === i && 0 === n.$slides.length ? e(t).appendTo(n.$slideTrack) : o ? e(t).insertBefore(n.$slides.eq(i)) : e(t).insertAfter(n.$slides.eq(i)) : !0 === o ? e(t).prependTo(n.$slideTrack) : e(t).appendTo(n.$slideTrack), n.$slides = n.$slideTrack.children(this.options.slide), n.$slideTrack.children(this.options.slide).detach(), n.$slideTrack.append(n.$slides), n.$slides.each(function(t, i) {
                e(i).attr("data-slick-index", t)
            }), n.$slidesCache = n.$slides, n.reinit()
        }, t.prototype.animateHeight = function() {
            var e = this;
            if (1 === e.options.slidesToShow && !0 === e.options.adaptiveHeight && !1 === e.options.vertical) {
                var t = e.$slides.eq(e.currentSlide).outerHeight(!0);
                e.$list.animate({
                    height: t
                }, e.options.speed)
            }
        }, t.prototype.animateSlide = function(t, i) {
            var o = {},
                n = this;
            n.animateHeight(), !0 === n.options.rtl && !1 === n.options.vertical && (t = -t), !1 === n.transformsEnabled ? !1 === n.options.vertical ? n.$slideTrack.animate({
                left: t
            }, n.options.speed, n.options.easing, i) : n.$slideTrack.animate({
                top: t
            }, n.options.speed, n.options.easing, i) : !1 === n.cssTransitions ? (!0 === n.options.rtl && (n.currentLeft = -n.currentLeft), e({
                animStart: n.currentLeft
            }).animate({
                animStart: t
            }, {
                duration: n.options.speed,
                easing: n.options.easing,
                step: function(e) {
                    e = Math.ceil(e), !1 === n.options.vertical ? (o[n.animType] = "translate(" + e + "px, 0px)", n.$slideTrack.css(o)) : (o[n.animType] = "translate(0px," + e + "px)", n.$slideTrack.css(o))
                },
                complete: function() {
                    i && i.call()
                }
            })) : (n.applyTransition(), t = Math.ceil(t), !1 === n.options.vertical ? o[n.animType] = "translate3d(" + t + "px, 0px, 0px)" : o[n.animType] = "translate3d(0px," + t + "px, 0px)", n.$slideTrack.css(o), i && setTimeout(function() {
                n.disableTransition(), i.call()
            }, n.options.speed))
        }, t.prototype.getNavTarget = function() {
            var t = this,
                i = t.options.asNavFor;
            return i && null !== i && (i = e(i).not(t.$slider)), i
        }, t.prototype.asNavFor = function(t) {
            var i = this.getNavTarget();
            null !== i && "object" == typeof i && i.each(function() {
                var i = e(this).slick("getSlick");
                i.unslicked || i.slideHandler(t, !0)
            })
        }, t.prototype.applyTransition = function(e) {
            var t = this,
                i = {};
            !1 === t.options.fade ? i[t.transitionType] = t.transformType + " " + t.options.speed + "ms " + t.options.cssEase : i[t.transitionType] = "opacity " + t.options.speed + "ms " + t.options.cssEase, !1 === t.options.fade ? t.$slideTrack.css(i) : t.$slides.eq(e).css(i)
        }, t.prototype.autoPlay = function() {
            var e = this;
            e.autoPlayClear(), e.slideCount > e.options.slidesToShow && (e.autoPlayTimer = setInterval(e.autoPlayIterator, e.options.autoplaySpeed))
        }, t.prototype.autoPlayClear = function() {
            var e = this;
            e.autoPlayTimer && clearInterval(e.autoPlayTimer)
        }, t.prototype.autoPlayIterator = function() {
            var e = this,
                t = e.currentSlide + e.options.slidesToScroll;
            e.paused || e.interrupted || e.focussed || (!1 === e.options.infinite && (1 === e.direction && e.currentSlide + 1 === e.slideCount - 1 ? e.direction = 0 : 0 === e.direction && (t = e.currentSlide - e.options.slidesToScroll, e.currentSlide - 1 == 0 && (e.direction = 1))), e.slideHandler(t))
        }, t.prototype.buildArrows = function() {
            var t = this;
            !0 === t.options.arrows && (t.$prevArrow = e(t.options.prevArrow).addClass("slick-arrow"), t.$nextArrow = e(t.options.nextArrow).addClass("slick-arrow"), t.slideCount > t.options.slidesToShow ? (t.$prevArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"), t.$nextArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"), t.htmlExpr.test(t.options.prevArrow) && t.$prevArrow.prependTo(t.options.appendArrows), t.htmlExpr.test(t.options.nextArrow) && t.$nextArrow.appendTo(t.options.appendArrows), !0 !== t.options.infinite && t.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true")) : t.$prevArrow.add(t.$nextArrow).addClass("slick-hidden").attr({
                "aria-disabled": "true",
                tabindex: "-1"
            }))
        }, t.prototype.buildDots = function() {
            var t, i, o = this;
            if (!0 === o.options.dots) {
                for (o.$slider.addClass("slick-dotted"), i = e("<ul />").addClass(o.options.dotsClass), t = 0; t <= o.getDotCount(); t += 1) i.append(e("<li />").append(o.options.customPaging.call(this, o, t)));
                o.$dots = i.appendTo(o.options.appendDots), o.$dots.find("li").first().addClass("slick-active")
            }
        }, t.prototype.buildOut = function() {
            var t = this;
            t.$slides = t.$slider.children(t.options.slide + ":not(.slick-cloned)").addClass("slick-slide"), t.slideCount = t.$slides.length, t.$slides.each(function(t, i) {
                e(i).attr("data-slick-index", t).data("originalStyling", e(i).attr("style") || "")
            }), t.$slider.addClass("slick-slider"), t.$slideTrack = 0 === t.slideCount ? e('<div class="slick-track"/>').appendTo(t.$slider) : t.$slides.wrapAll('<div class="slick-track"/>').parent(), t.$list = t.$slideTrack.wrap('<div class="slick-list"/>').parent(), t.$slideTrack.css("opacity", 0), !0 !== t.options.centerMode && !0 !== t.options.swipeToSlide || (t.options.slidesToScroll = 1), e("img[data-lazy]", t.$slider).not("[src]").addClass("slick-loading"), t.setupInfinite(), t.buildArrows(), t.buildDots(), t.updateDots(), t.setSlideClasses("number" == typeof t.currentSlide ? t.currentSlide : 0), !0 === t.options.draggable && t.$list.addClass("draggable")
        }, t.prototype.buildRows = function() {
            var e, t, i, o, n, s, r, a = this;
            if (o = document.createDocumentFragment(), s = a.$slider.children(), a.options.rows > 1) {
                for (r = a.options.slidesPerRow * a.options.rows, n = Math.ceil(s.length / r), e = 0; e < n; e++) {
                    var l = document.createElement("div");
                    for (t = 0; t < a.options.rows; t++) {
                        var c = document.createElement("div");
                        for (i = 0; i < a.options.slidesPerRow; i++) {
                            var d = e * r + (t * a.options.slidesPerRow + i);
                            s.get(d) && c.appendChild(s.get(d))
                        }
                        l.appendChild(c)
                    }
                    o.appendChild(l)
                }
                a.$slider.empty().append(o), a.$slider.children().children().children().css({
                    width: 100 / a.options.slidesPerRow + "%",
                    display: "inline-block"
                })
            }
        }, t.prototype.checkResponsive = function(t, i) {
            var o, n, s, r = this,
                a = !1,
                l = r.$slider.width(),
                c = window.innerWidth || e(window).width();
            if ("window" === r.respondTo ? s = c : "slider" === r.respondTo ? s = l : "min" === r.respondTo && (s = Math.min(c, l)), r.options.responsive && r.options.responsive.length && null !== r.options.responsive) {
                n = null;
                for (o in r.breakpoints) r.breakpoints.hasOwnProperty(o) && (!1 === r.originalSettings.mobileFirst ? s < r.breakpoints[o] && (n = r.breakpoints[o]) : s > r.breakpoints[o] && (n = r.breakpoints[o]));
                null !== n ? null !== r.activeBreakpoint ? (n !== r.activeBreakpoint || i) && (r.activeBreakpoint = n, "unslick" === r.breakpointSettings[n] ? r.unslick(n) : (r.options = e.extend({}, r.originalSettings, r.breakpointSettings[n]), !0 === t && (r.currentSlide = r.options.initialSlide), r.refresh(t)), a = n) : (r.activeBreakpoint = n, "unslick" === r.breakpointSettings[n] ? r.unslick(n) : (r.options = e.extend({}, r.originalSettings, r.breakpointSettings[n]), !0 === t && (r.currentSlide = r.options.initialSlide), r.refresh(t)), a = n) : null !== r.activeBreakpoint && (r.activeBreakpoint = null, r.options = r.originalSettings, !0 === t && (r.currentSlide = r.options.initialSlide), r.refresh(t), a = n), t || !1 === a || r.$slider.trigger("breakpoint", [r, a])
            }
        }, t.prototype.changeSlide = function(t, i) {
            var o, n, s, r = this,
                a = e(t.currentTarget);
            switch (a.is("a") && t.preventDefault(), a.is("li") || (a = a.closest("li")), s = r.slideCount % r.options.slidesToScroll != 0, o = s ? 0 : (r.slideCount - r.currentSlide) % r.options.slidesToScroll, t.data.message) {
                case "previous":
                    n = 0 === o ? r.options.slidesToScroll : r.options.slidesToShow - o, r.slideCount > r.options.slidesToShow && r.slideHandler(r.currentSlide - n, !1, i);
                    break;
                case "next":
                    n = 0 === o ? r.options.slidesToScroll : o, r.slideCount > r.options.slidesToShow && r.slideHandler(r.currentSlide + n, !1, i);
                    break;
                case "index":
                    var l = 0 === t.data.index ? 0 : t.data.index || a.index() * r.options.slidesToScroll;
                    r.slideHandler(r.checkNavigable(l), !1, i), a.children().trigger("focus");
                    break;
                default:
                    return
            }
        }, t.prototype.checkNavigable = function(e) {
            var t, i;
            if (t = this.getNavigableIndexes(), i = 0, e > t[t.length - 1]) e = t[t.length - 1];
            else
                for (var o in t) {
                    if (e < t[o]) {
                        e = i;
                        break
                    }
                    i = t[o]
                }
            return e
        }, t.prototype.cleanUpEvents = function() {
            var t = this;
            t.options.dots && null !== t.$dots && (e("li", t.$dots).off("click.slick", t.changeSlide).off("mouseenter.slick", e.proxy(t.interrupt, t, !0)).off("mouseleave.slick", e.proxy(t.interrupt, t, !1)), !0 === t.options.accessibility && t.$dots.off("keydown.slick", t.keyHandler)), t.$slider.off("focus.slick blur.slick"), !0 === t.options.arrows && t.slideCount > t.options.slidesToShow && (t.$prevArrow && t.$prevArrow.off("click.slick", t.changeSlide), t.$nextArrow && t.$nextArrow.off("click.slick", t.changeSlide), !0 === t.options.accessibility && (t.$prevArrow && t.$prevArrow.off("keydown.slick", t.keyHandler), t.$nextArrow && t.$nextArrow.off("keydown.slick", t.keyHandler))), t.$list.off("touchstart.slick mousedown.slick", t.swipeHandler), t.$list.off("touchmove.slick mousemove.slick", t.swipeHandler), t.$list.off("touchend.slick mouseup.slick", t.swipeHandler), t.$list.off("touchcancel.slick mouseleave.slick", t.swipeHandler), t.$list.off("click.slick", t.clickHandler), e(document).off(t.visibilityChange, t.visibility), t.cleanUpSlideEvents(), !0 === t.options.accessibility && t.$list.off("keydown.slick", t.keyHandler), !0 === t.options.focusOnSelect && e(t.$slideTrack).children().off("click.slick", t.selectHandler), e(window).off("orientationchange.slick.slick-" + t.instanceUid, t.orientationChange), e(window).off("resize.slick.slick-" + t.instanceUid, t.resize), e("[draggable!=true]", t.$slideTrack).off("dragstart", t.preventDefault), e(window).off("load.slick.slick-" + t.instanceUid, t.setPosition)
        }, t.prototype.cleanUpSlideEvents = function() {
            var t = this;
            t.$list.off("mouseenter.slick", e.proxy(t.interrupt, t, !0)), t.$list.off("mouseleave.slick", e.proxy(t.interrupt, t, !1))
        }, t.prototype.cleanUpRows = function() {
            var e, t = this;
            t.options.rows > 1 && ((e = t.$slides.children().children()).removeAttr("style"), t.$slider.empty().append(e))
        }, t.prototype.clickHandler = function(e) {
            !1 === this.shouldClick && (e.stopImmediatePropagation(), e.stopPropagation(), e.preventDefault())
        }, t.prototype.destroy = function(t) {
            var i = this;
            i.autoPlayClear(), i.touchObject = {}, i.cleanUpEvents(), e(".slick-cloned", i.$slider).detach(), i.$dots && i.$dots.remove(), i.$prevArrow && i.$prevArrow.length && (i.$prevArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), i.htmlExpr.test(i.options.prevArrow) && i.$prevArrow.remove()), i.$nextArrow && i.$nextArrow.length && (i.$nextArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), i.htmlExpr.test(i.options.nextArrow) && i.$nextArrow.remove()), i.$slides && (i.$slides.removeClass("slick-slide slick-active slick-center slick-visible slick-current").removeAttr("aria-hidden").removeAttr("data-slick-index").each(function() {
                e(this).attr("style", e(this).data("originalStyling"))
            }), i.$slideTrack.children(this.options.slide).detach(), i.$slideTrack.detach(), i.$list.detach(), i.$slider.append(i.$slides)), i.cleanUpRows(), i.$slider.removeClass("slick-slider"), i.$slider.removeClass("slick-initialized"), i.$slider.removeClass("slick-dotted"), i.unslicked = !0, t || i.$slider.trigger("destroy", [i])
        }, t.prototype.disableTransition = function(e) {
            var t = this,
                i = {};
            i[t.transitionType] = "", !1 === t.options.fade ? t.$slideTrack.css(i) : t.$slides.eq(e).css(i)
        }, t.prototype.fadeSlide = function(e, t) {
            var i = this;
            !1 === i.cssTransitions ? (i.$slides.eq(e).css({
                zIndex: i.options.zIndex
            }), i.$slides.eq(e).animate({
                opacity: 1
            }, i.options.speed, i.options.easing, t)) : (i.applyTransition(e), i.$slides.eq(e).css({
                opacity: 1,
                zIndex: i.options.zIndex
            }), t && setTimeout(function() {
                i.disableTransition(e), t.call()
            }, i.options.speed))
        }, t.prototype.fadeSlideOut = function(e) {
            var t = this;
            !1 === t.cssTransitions ? t.$slides.eq(e).animate({
                opacity: 0,
                zIndex: t.options.zIndex - 2
            }, t.options.speed, t.options.easing) : (t.applyTransition(e), t.$slides.eq(e).css({
                opacity: 0,
                zIndex: t.options.zIndex - 2
            }))
        }, t.prototype.filterSlides = t.prototype.slickFilter = function(e) {
            var t = this;
            null !== e && (t.$slidesCache = t.$slides, t.unload(), t.$slideTrack.children(this.options.slide).detach(), t.$slidesCache.filter(e).appendTo(t.$slideTrack), t.reinit())
        }, t.prototype.focusHandler = function() {
            var t = this;
            t.$slider.off("focus.slick blur.slick").on("focus.slick blur.slick", "*", function(i) {
                i.stopImmediatePropagation();
                var o = e(this);
                setTimeout(function() {
                    t.options.pauseOnFocus && (t.focussed = o.is(":focus"), t.autoPlay())
                }, 0)
            })
        }, t.prototype.getCurrent = t.prototype.slickCurrentSlide = function() {
            return this.currentSlide
        }, t.prototype.getDotCount = function() {
            var e = this,
                t = 0,
                i = 0,
                o = 0;
            if (!0 === e.options.infinite)
                if (e.slideCount <= e.options.slidesToShow) ++o;
                else
                    for (; t < e.slideCount;) ++o, t = i + e.options.slidesToScroll, i += e.options.slidesToScroll <= e.options.slidesToShow ? e.options.slidesToScroll : e.options.slidesToShow;
            else if (!0 === e.options.centerMode) o = e.slideCount;
            else if (e.options.asNavFor)
                for (; t < e.slideCount;) ++o, t = i + e.options.slidesToScroll, i += e.options.slidesToScroll <= e.options.slidesToShow ? e.options.slidesToScroll : e.options.slidesToShow;
            else o = 1 + Math.ceil((e.slideCount - e.options.slidesToShow) / e.options.slidesToScroll);
            return o - 1
        }, t.prototype.getLeft = function(e) {
            var t, i, o, n, s = this,
                r = 0;
            return s.slideOffset = 0, i = s.$slides.first().outerHeight(!0), !0 === s.options.infinite ? (s.slideCount > s.options.slidesToShow && (s.slideOffset = s.slideWidth * s.options.slidesToShow * -1, n = -1, !0 === s.options.vertical && !0 === s.options.centerMode && (2 === s.options.slidesToShow ? n = -1.5 : 1 === s.options.slidesToShow && (n = -2)), r = i * s.options.slidesToShow * n), s.slideCount % s.options.slidesToScroll != 0 && e + s.options.slidesToScroll > s.slideCount && s.slideCount > s.options.slidesToShow && (e > s.slideCount ? (s.slideOffset = (s.options.slidesToShow - (e - s.slideCount)) * s.slideWidth * -1, r = (s.options.slidesToShow - (e - s.slideCount)) * i * -1) : (s.slideOffset = s.slideCount % s.options.slidesToScroll * s.slideWidth * -1, r = s.slideCount % s.options.slidesToScroll * i * -1))) : e + s.options.slidesToShow > s.slideCount && (s.slideOffset = (e + s.options.slidesToShow - s.slideCount) * s.slideWidth, r = (e + s.options.slidesToShow - s.slideCount) * i), s.slideCount <= s.options.slidesToShow && (s.slideOffset = 0, r = 0), !0 === s.options.centerMode && s.slideCount <= s.options.slidesToShow ? s.slideOffset = s.slideWidth * Math.floor(s.options.slidesToShow) / 2 - s.slideWidth * s.slideCount / 2 : !0 === s.options.centerMode && !0 === s.options.infinite ? s.slideOffset += s.slideWidth * Math.floor(s.options.slidesToShow / 2) - s.slideWidth : !0 === s.options.centerMode && (s.slideOffset = 0, s.slideOffset += s.slideWidth * Math.floor(s.options.slidesToShow / 2)), t = !1 === s.options.vertical ? e * s.slideWidth * -1 + s.slideOffset : e * i * -1 + r, !0 === s.options.variableWidth && (o = s.slideCount <= s.options.slidesToShow || !1 === s.options.infinite ? s.$slideTrack.children(".slick-slide").eq(e) : s.$slideTrack.children(".slick-slide").eq(e + s.options.slidesToShow), t = !0 === s.options.rtl ? o[0] ? -1 * (s.$slideTrack.width() - o[0].offsetLeft - o.width()) : 0 : o[0] ? -1 * o[0].offsetLeft : 0, !0 === s.options.centerMode && (o = s.slideCount <= s.options.slidesToShow || !1 === s.options.infinite ? s.$slideTrack.children(".slick-slide").eq(e) : s.$slideTrack.children(".slick-slide").eq(e + s.options.slidesToShow + 1), t = !0 === s.options.rtl ? o[0] ? -1 * (s.$slideTrack.width() - o[0].offsetLeft - o.width()) : 0 : o[0] ? -1 * o[0].offsetLeft : 0, t += (s.$list.width() - o.outerWidth()) / 2)), t
        }, t.prototype.getOption = t.prototype.slickGetOption = function(e) {
            return this.options[e]
        }, t.prototype.getNavigableIndexes = function() {
            var e, t = this,
                i = 0,
                o = 0,
                n = [];
            for (!1 === t.options.infinite ? e = t.slideCount : (i = -1 * t.options.slidesToScroll, o = -1 * t.options.slidesToScroll, e = 2 * t.slideCount); i < e;) n.push(i), i = o + t.options.slidesToScroll, o += t.options.slidesToScroll <= t.options.slidesToShow ? t.options.slidesToScroll : t.options.slidesToShow;
            return n
        }, t.prototype.getSlick = function() {
            return this
        }, t.prototype.getSlideCount = function() {
            var t, i, o = this;
            return i = !0 === o.options.centerMode ? o.slideWidth * Math.floor(o.options.slidesToShow / 2) : 0, !0 === o.options.swipeToSlide ? (o.$slideTrack.find(".slick-slide").each(function(n, s) {
                if (s.offsetLeft - i + e(s).outerWidth() / 2 > -1 * o.swipeLeft) return t = s, !1
            }), Math.abs(e(t).attr("data-slick-index") - o.currentSlide) || 1) : o.options.slidesToScroll
        }, t.prototype.goTo = t.prototype.slickGoTo = function(e, t) {
            this.changeSlide({
                data: {
                    message: "index",
                    index: parseInt(e)
                }
            }, t)
        }, t.prototype.init = function(t) {
            var i = this;
            e(i.$slider).hasClass("slick-initialized") || (e(i.$slider).addClass("slick-initialized"), i.buildRows(), i.buildOut(), i.setProps(), i.startLoad(), i.loadSlider(), i.initializeEvents(), i.updateArrows(), i.updateDots(), i.checkResponsive(!0), i.focusHandler()), t && i.$slider.trigger("init", [i]), !0 === i.options.accessibility && i.initADA(), i.options.autoplay && (i.paused = !1, i.autoPlay())
        }, t.prototype.initADA = function() {
            var t = this,
                i = Math.ceil(t.slideCount / t.options.slidesToShow),
                o = t.getNavigableIndexes().filter(function(e) {
                    return e >= 0 && e < t.slideCount
                });
            t.$slides.add(t.$slideTrack.find(".slick-cloned")).attr({
                "aria-hidden": "true",
                tabindex: "-1"
            }).find("a, input, button, select").attr({
                tabindex: "-1"
            }), null !== t.$dots && (t.$slides.not(t.$slideTrack.find(".slick-cloned")).each(function(i) {
                var n = o.indexOf(i);
                e(this).attr({
                    role: "tabpanel",
                    id: "slick-slide" + t.instanceUid + i,
                    tabindex: -1
                }), -1 !== n && e(this).attr({
                    "aria-describedby": "slick-slide-control" + t.instanceUid + n
                })
            }), t.$dots.attr("role", "tablist").find("li").each(function(n) {
                var s = o[n];
                e(this).attr({
                    role: "presentation"
                }), e(this).find("button").first().attr({
                    role: "tab",
                    id: "slick-slide-control" + t.instanceUid + n,
                    "aria-controls": "slick-slide" + t.instanceUid + s,
                    "aria-label": n + 1 + " of " + i,
                    "aria-selected": null,
                    tabindex: "-1"
                })
            }).eq(t.currentSlide).find("button").attr({
                "aria-selected": "true",
                tabindex: "0"
            }).end());
            for (var n = t.currentSlide, s = n + t.options.slidesToShow; n < s; n++) t.$slides.eq(n).attr("tabindex", 0);
            t.activateADA()
        }, t.prototype.initArrowEvents = function() {
            var e = this;
            !0 === e.options.arrows && e.slideCount > e.options.slidesToShow && (e.$prevArrow.off("click.slick").on("click.slick", {
                message: "previous"
            }, e.changeSlide), e.$nextArrow.off("click.slick").on("click.slick", {
                message: "next"
            }, e.changeSlide), !0 === e.options.accessibility && (e.$prevArrow.on("keydown.slick", e.keyHandler), e.$nextArrow.on("keydown.slick", e.keyHandler)))
        }, t.prototype.initDotEvents = function() {
            var t = this;
            !0 === t.options.dots && (e("li", t.$dots).on("click.slick", {
                message: "index"
            }, t.changeSlide), !0 === t.options.accessibility && t.$dots.on("keydown.slick", t.keyHandler)), !0 === t.options.dots && !0 === t.options.pauseOnDotsHover && e("li", t.$dots).on("mouseenter.slick", e.proxy(t.interrupt, t, !0)).on("mouseleave.slick", e.proxy(t.interrupt, t, !1))
        }, t.prototype.initSlideEvents = function() {
            var t = this;
            t.options.pauseOnHover && (t.$list.on("mouseenter.slick", e.proxy(t.interrupt, t, !0)), t.$list.on("mouseleave.slick", e.proxy(t.interrupt, t, !1)))
        }, t.prototype.initializeEvents = function() {
            var t = this;
            t.initArrowEvents(), t.initDotEvents(), t.initSlideEvents(), t.$list.on("touchstart.slick mousedown.slick", {
                action: "start"
            }, t.swipeHandler), t.$list.on("touchmove.slick mousemove.slick", {
                action: "move"
            }, t.swipeHandler), t.$list.on("touchend.slick mouseup.slick", {
                action: "end"
            }, t.swipeHandler), t.$list.on("touchcancel.slick mouseleave.slick", {
                action: "end"
            }, t.swipeHandler), t.$list.on("click.slick", t.clickHandler), e(document).on(t.visibilityChange, e.proxy(t.visibility, t)), !0 === t.options.accessibility && t.$list.on("keydown.slick", t.keyHandler), !0 === t.options.focusOnSelect && e(t.$slideTrack).children().on("click.slick", t.selectHandler), e(window).on("orientationchange.slick.slick-" + t.instanceUid, e.proxy(t.orientationChange, t)), e(window).on("resize.slick.slick-" + t.instanceUid, e.proxy(t.resize, t)), e("[draggable!=true]", t.$slideTrack).on("dragstart", t.preventDefault), e(window).on("load.slick.slick-" + t.instanceUid, t.setPosition), e(t.setPosition)
        }, t.prototype.initUI = function() {
            var e = this;
            !0 === e.options.arrows && e.slideCount > e.options.slidesToShow && (e.$prevArrow.show(), e.$nextArrow.show()), !0 === e.options.dots && e.slideCount > e.options.slidesToShow && e.$dots.show()
        }, t.prototype.keyHandler = function(e) {
            var t = this;
            e.target.tagName.match("TEXTAREA|INPUT|SELECT") || (37 === e.keyCode && !0 === t.options.accessibility ? t.changeSlide({
                data: {
                    message: !0 === t.options.rtl ? "next" : "previous"
                }
            }) : 39 === e.keyCode && !0 === t.options.accessibility && t.changeSlide({
                data: {
                    message: !0 === t.options.rtl ? "previous" : "next"
                }
            }))
        }, t.prototype.lazyLoad = function() {
            function t(t) {
                e("img[data-lazy]", t).each(function() {
                    var t = e(this),
                        i = e(this).attr("data-lazy"),
                        o = e(this).attr("data-srcset"),
                        n = e(this).attr("data-sizes") || s.$slider.attr("data-sizes"),
                        r = document.createElement("img");
                    r.onload = function() {
                        t.animate({
                            opacity: 0
                        }, 100, function() {
                            o && (t.attr("srcset", o), n && t.attr("sizes", n)), t.attr("src", i).animate({
                                opacity: 1
                            }, 200, function() {
                                t.removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading")
                            }), s.$slider.trigger("lazyLoaded", [s, t, i])
                        })
                    }, r.onerror = function() {
                        t.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), s.$slider.trigger("lazyLoadError", [s, t, i])
                    }, r.src = i
                })
            }
            var i, o, n, s = this;
            if (!0 === s.options.centerMode ? !0 === s.options.infinite ? n = (o = s.currentSlide + (s.options.slidesToShow / 2 + 1)) + s.options.slidesToShow + 2 : (o = Math.max(0, s.currentSlide - (s.options.slidesToShow / 2 + 1)), n = s.options.slidesToShow / 2 + 1 + 2 + s.currentSlide) : (o = s.options.infinite ? s.options.slidesToShow + s.currentSlide : s.currentSlide, n = Math.ceil(o + s.options.slidesToShow), !0 === s.options.fade && (o > 0 && o--, n <= s.slideCount && n++)), i = s.$slider.find(".slick-slide").slice(o, n), "anticipated" === s.options.lazyLoad)
                for (var r = o - 1, a = n, l = s.$slider.find(".slick-slide"), c = 0; c < s.options.slidesToScroll; c++) r < 0 && (r = s.slideCount - 1), i = (i = i.add(l.eq(r))).add(l.eq(a)), r--, a++;
            t(i), s.slideCount <= s.options.slidesToShow ? t(s.$slider.find(".slick-slide")) : s.currentSlide >= s.slideCount - s.options.slidesToShow ? t(s.$slider.find(".slick-cloned").slice(0, s.options.slidesToShow)) : 0 === s.currentSlide && t(s.$slider.find(".slick-cloned").slice(-1 * s.options.slidesToShow))
        }, t.prototype.loadSlider = function() {
            var e = this;
            e.setPosition(), e.$slideTrack.css({
                opacity: 1
            }), e.$slider.removeClass("slick-loading"), e.initUI(), "progressive" === e.options.lazyLoad && e.progressiveLazyLoad()
        }, t.prototype.next = t.prototype.slickNext = function() {
            this.changeSlide({
                data: {
                    message: "next"
                }
            })
        }, t.prototype.orientationChange = function() {
            var e = this;
            e.checkResponsive(), e.setPosition()
        }, t.prototype.pause = t.prototype.slickPause = function() {
            var e = this;
            e.autoPlayClear(), e.paused = !0
        }, t.prototype.play = t.prototype.slickPlay = function() {
            var e = this;
            e.autoPlay(), e.options.autoplay = !0, e.paused = !1, e.focussed = !1, e.interrupted = !1
        }, t.prototype.postSlide = function(t) {
            var i = this;
            i.unslicked || (i.$slider.trigger("afterChange", [i, t]), i.animating = !1, i.slideCount > i.options.slidesToShow && i.setPosition(), i.swipeLeft = null, i.options.autoplay && i.autoPlay(), !0 === i.options.accessibility && (i.initADA(), i.options.focusOnChange && e(i.$slides.get(i.currentSlide)).attr("tabindex", 0).focus()))
        }, t.prototype.prev = t.prototype.slickPrev = function() {
            this.changeSlide({
                data: {
                    message: "previous"
                }
            })
        }, t.prototype.preventDefault = function(e) {
            e.preventDefault()
        }, t.prototype.progressiveLazyLoad = function(t) {
            t = t || 1;
            var i, o, n, s, r, a = this,
                l = e("img[data-lazy]", a.$slider);
            l.length ? (i = l.first(), o = i.attr("data-lazy"), n = i.attr("data-srcset"), s = i.attr("data-sizes") || a.$slider.attr("data-sizes"), (r = document.createElement("img")).onload = function() {
                n && (i.attr("srcset", n), s && i.attr("sizes", s)), i.attr("src", o).removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading"), !0 === a.options.adaptiveHeight && a.setPosition(), a.$slider.trigger("lazyLoaded", [a, i, o]), a.progressiveLazyLoad()
            }, r.onerror = function() {
                t < 3 ? setTimeout(function() {
                    a.progressiveLazyLoad(t + 1)
                }, 500) : (i.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), a.$slider.trigger("lazyLoadError", [a, i, o]), a.progressiveLazyLoad())
            }, r.src = o) : a.$slider.trigger("allImagesLoaded", [a])
        }, t.prototype.refresh = function(t) {
            var i, o, n = this;
            o = n.slideCount - n.options.slidesToShow, !n.options.infinite && n.currentSlide > o && (n.currentSlide = o), n.slideCount <= n.options.slidesToShow && (n.currentSlide = 0), i = n.currentSlide, n.destroy(!0), e.extend(n, n.initials, {
                currentSlide: i
            }), n.init(), t || n.changeSlide({
                data: {
                    message: "index",
                    index: i
                }
            }, !1)
        }, t.prototype.registerBreakpoints = function() {
            var t, i, o, n = this,
                s = n.options.responsive || null;
            if ("array" === e.type(s) && s.length) {
                n.respondTo = n.options.respondTo || "window";
                for (t in s)
                    if (o = n.breakpoints.length - 1, s.hasOwnProperty(t)) {
                        for (i = s[t].breakpoint; o >= 0;) n.breakpoints[o] && n.breakpoints[o] === i && n.breakpoints.splice(o, 1), o--;
                        n.breakpoints.push(i), n.breakpointSettings[i] = s[t].settings
                    } n.breakpoints.sort(function(e, t) {
                    return n.options.mobileFirst ? e - t : t - e
                })
            }
        }, t.prototype.reinit = function() {
            var t = this;
            t.$slides = t.$slideTrack.children(t.options.slide).addClass("slick-slide"), t.slideCount = t.$slides.length, t.currentSlide >= t.slideCount && 0 !== t.currentSlide && (t.currentSlide = t.currentSlide - t.options.slidesToScroll), t.slideCount <= t.options.slidesToShow && (t.currentSlide = 0), t.registerBreakpoints(), t.setProps(), t.setupInfinite(), t.buildArrows(), t.updateArrows(), t.initArrowEvents(), t.buildDots(), t.updateDots(), t.initDotEvents(), t.cleanUpSlideEvents(), t.initSlideEvents(), t.checkResponsive(!1, !0), !0 === t.options.focusOnSelect && e(t.$slideTrack).children().on("click.slick", t.selectHandler), t.setSlideClasses("number" == typeof t.currentSlide ? t.currentSlide : 0), t.setPosition(), t.focusHandler(), t.paused = !t.options.autoplay, t.autoPlay(), t.$slider.trigger("reInit", [t])
        }, t.prototype.resize = function() {
            var t = this;
            e(window).width() !== t.windowWidth && (clearTimeout(t.windowDelay), t.windowDelay = window.setTimeout(function() {
                t.windowWidth = e(window).width(), t.checkResponsive(), t.unslicked || t.setPosition()
            }, 50))
        }, t.prototype.removeSlide = t.prototype.slickRemove = function(e, t, i) {
            var o = this;
            if (e = "boolean" == typeof e ? !0 === (t = e) ? 0 : o.slideCount - 1 : !0 === t ? --e : e, o.slideCount < 1 || e < 0 || e > o.slideCount - 1) return !1;
            o.unload(), !0 === i ? o.$slideTrack.children().remove() : o.$slideTrack.children(this.options.slide).eq(e).remove(), o.$slides = o.$slideTrack.children(this.options.slide), o.$slideTrack.children(this.options.slide).detach(), o.$slideTrack.append(o.$slides), o.$slidesCache = o.$slides, o.reinit()
        }, t.prototype.setCSS = function(e) {
            var t, i, o = this,
                n = {};
            !0 === o.options.rtl && (e = -e), t = "left" == o.positionProp ? Math.ceil(e) + "px" : "0px", i = "top" == o.positionProp ? Math.ceil(e) + "px" : "0px", n[o.positionProp] = e, !1 === o.transformsEnabled ? o.$slideTrack.css(n) : (n = {}, !1 === o.cssTransitions ? (n[o.animType] = "translate(" + t + ", " + i + ")", o.$slideTrack.css(n)) : (n[o.animType] = "translate3d(" + t + ", " + i + ", 0px)", o.$slideTrack.css(n)))
        }, t.prototype.setDimensions = function() {
            var e = this;
            !1 === e.options.vertical ? !0 === e.options.centerMode && e.$list.css({
                padding: "0px " + e.options.centerPadding
            }) : (e.$list.height(e.$slides.first().outerHeight(!0) * e.options.slidesToShow), !0 === e.options.centerMode && e.$list.css({
                padding: e.options.centerPadding + " 0px"
            })), e.listWidth = e.$list.width(), e.listHeight = e.$list.height(), !1 === e.options.vertical && !1 === e.options.variableWidth ? (e.slideWidth = Math.ceil(e.listWidth / e.options.slidesToShow), e.$slideTrack.width(Math.ceil(e.slideWidth * e.$slideTrack.children(".slick-slide").length))) : !0 === e.options.variableWidth ? e.$slideTrack.width(5e3 * e.slideCount) : (e.slideWidth = Math.ceil(e.listWidth), e.$slideTrack.height(Math.ceil(e.$slides.first().outerHeight(!0) * e.$slideTrack.children(".slick-slide").length)));
            var t = e.$slides.first().outerWidth(!0) - e.$slides.first().width();
            !1 === e.options.variableWidth && e.$slideTrack.children(".slick-slide").width(e.slideWidth - t)
        }, t.prototype.setFade = function() {
            var t, i = this;
            i.$slides.each(function(o, n) {
                t = i.slideWidth * o * -1, !0 === i.options.rtl ? e(n).css({
                    position: "relative",
                    right: t,
                    top: 0,
                    zIndex: i.options.zIndex - 2,
                    opacity: 0
                }) : e(n).css({
                    position: "relative",
                    left: t,
                    top: 0,
                    zIndex: i.options.zIndex - 2,
                    opacity: 0
                })
            }), i.$slides.eq(i.currentSlide).css({
                zIndex: i.options.zIndex - 1,
                opacity: 1
            })
        }, t.prototype.setHeight = function() {
            var e = this;
            if (1 === e.options.slidesToShow && !0 === e.options.adaptiveHeight && !1 === e.options.vertical) {
                var t = e.$slides.eq(e.currentSlide).outerHeight(!0);
                e.$list.css("height", t)
            }
        }, t.prototype.setOption = t.prototype.slickSetOption = function() {
            var t, i, o, n, s, r = this,
                a = !1;
            if ("object" === e.type(arguments[0]) ? (o = arguments[0], a = arguments[1], s = "multiple") : "string" === e.type(arguments[0]) && (o = arguments[0], n = arguments[1], a = arguments[2], "responsive" === arguments[0] && "array" === e.type(arguments[1]) ? s = "responsive" : void 0 !== arguments[1] && (s = "single")), "single" === s) r.options[o] = n;
            else if ("multiple" === s) e.each(o, function(e, t) {
                r.options[e] = t
            });
            else if ("responsive" === s)
                for (i in n)
                    if ("array" !== e.type(r.options.responsive)) r.options.responsive = [n[i]];
                    else {
                        for (t = r.options.responsive.length - 1; t >= 0;) r.options.responsive[t].breakpoint === n[i].breakpoint && r.options.responsive.splice(t, 1), t--;
                        r.options.responsive.push(n[i])
                    } a && (r.unload(), r.reinit())
        }, t.prototype.setPosition = function() {
            var e = this;
            e.setDimensions(), e.setHeight(), !1 === e.options.fade ? e.setCSS(e.getLeft(e.currentSlide)) : e.setFade(), e.$slider.trigger("setPosition", [e])
        }, t.prototype.setProps = function() {
            var e = this,
                t = document.body.style;
            e.positionProp = !0 === e.options.vertical ? "top" : "left", "top" === e.positionProp ? e.$slider.addClass("slick-vertical") : e.$slider.removeClass("slick-vertical"), void 0 === t.WebkitTransition && void 0 === t.MozTransition && void 0 === t.msTransition || !0 === e.options.useCSS && (e.cssTransitions = !0), e.options.fade && ("number" == typeof e.options.zIndex ? e.options.zIndex < 3 && (e.options.zIndex = 3) : e.options.zIndex = e.defaults.zIndex), void 0 !== t.OTransform && (e.animType = "OTransform", e.transformType = "-o-transform", e.transitionType = "OTransition", void 0 === t.perspectiveProperty && void 0 === t.webkitPerspective && (e.animType = !1)), void 0 !== t.MozTransform && (e.animType = "MozTransform", e.transformType = "-moz-transform", e.transitionType = "MozTransition", void 0 === t.perspectiveProperty && void 0 === t.MozPerspective && (e.animType = !1)), void 0 !== t.webkitTransform && (e.animType = "webkitTransform", e.transformType = "-webkit-transform", e.transitionType = "webkitTransition", void 0 === t.perspectiveProperty && void 0 === t.webkitPerspective && (e.animType = !1)), void 0 !== t.msTransform && (e.animType = "msTransform", e.transformType = "-ms-transform", e.transitionType = "msTransition", void 0 === t.msTransform && (e.animType = !1)), void 0 !== t.transform && !1 !== e.animType && (e.animType = "transform", e.transformType = "transform", e.transitionType = "transition"), e.transformsEnabled = e.options.useTransform && null !== e.animType && !1 !== e.animType
        }, t.prototype.setSlideClasses = function(e) {
            var t, i, o, n, s = this;
            if (i = s.$slider.find(".slick-slide").removeClass("slick-active slick-center slick-current").attr("aria-hidden", "true"), s.$slides.eq(e).addClass("slick-current"), !0 === s.options.centerMode) {
                var r = s.options.slidesToShow % 2 == 0 ? 1 : 0;
                t = Math.floor(s.options.slidesToShow / 2), !0 === s.options.infinite && (e >= t && e <= s.slideCount - 1 - t ? s.$slides.slice(e - t + r, e + t + 1).addClass("slick-active").attr("aria-hidden", "false") : (o = s.options.slidesToShow + e, i.slice(o - t + 1 + r, o + t + 2).addClass("slick-active").attr("aria-hidden", "false")), 0 === e ? i.eq(i.length - 1 - s.options.slidesToShow).addClass("slick-center") : e === s.slideCount - 1 && i.eq(s.options.slidesToShow).addClass("slick-center")), s.$slides.eq(e).addClass("slick-center")
            } else e >= 0 && e <= s.slideCount - s.options.slidesToShow ? s.$slides.slice(e, e + s.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false") : i.length <= s.options.slidesToShow ? i.addClass("slick-active").attr("aria-hidden", "false") : (n = s.slideCount % s.options.slidesToShow, o = !0 === s.options.infinite ? s.options.slidesToShow + e : e, s.options.slidesToShow == s.options.slidesToScroll && s.slideCount - e < s.options.slidesToShow ? i.slice(o - (s.options.slidesToShow - n), o + n).addClass("slick-active").attr("aria-hidden", "false") : i.slice(o, o + s.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false"));
            "ondemand" !== s.options.lazyLoad && "anticipated" !== s.options.lazyLoad || s.lazyLoad()
        }, t.prototype.setupInfinite = function() {
            var t, i, o, n = this;
            if (!0 === n.options.fade && (n.options.centerMode = !1), !0 === n.options.infinite && !1 === n.options.fade && (i = null, n.slideCount > n.options.slidesToShow)) {
                for (o = !0 === n.options.centerMode ? n.options.slidesToShow + 1 : n.options.slidesToShow, t = n.slideCount; t > n.slideCount - o; t -= 1) i = t - 1, e(n.$slides[i]).clone(!0).attr("id", "").attr("data-slick-index", i - n.slideCount).prependTo(n.$slideTrack).addClass("slick-cloned");
                for (t = 0; t < o + n.slideCount; t += 1) i = t, e(n.$slides[i]).clone(!0).attr("id", "").attr("data-slick-index", i + n.slideCount).appendTo(n.$slideTrack).addClass("slick-cloned");
                n.$slideTrack.find(".slick-cloned").find("[id]").each(function() {
                    e(this).attr("id", "")
                })
            }
        }, t.prototype.interrupt = function(e) {
            var t = this;
            e || t.autoPlay(), t.interrupted = e
        }, t.prototype.selectHandler = function(t) {
            var i = this,
                o = e(t.target).is(".slick-slide") ? e(t.target) : e(t.target).parents(".slick-slide"),
                n = parseInt(o.attr("data-slick-index"));
            n || (n = 0), i.slideCount <= i.options.slidesToShow ? i.slideHandler(n, !1, !0) : i.slideHandler(n)
        }, t.prototype.slideHandler = function(e, t, i) {
            var o, n, s, r, a, l = null,
                c = this;
            if (t = t || !1, !(!0 === c.animating && !0 === c.options.waitForAnimate || !0 === c.options.fade && c.currentSlide === e))
                if (!1 === t && c.asNavFor(e), o = e, l = c.getLeft(o), r = c.getLeft(c.currentSlide), c.currentLeft = null === c.swipeLeft ? r : c.swipeLeft, !1 === c.options.infinite && !1 === c.options.centerMode && (e < 0 || e > c.getDotCount() * c.options.slidesToScroll)) !1 === c.options.fade && (o = c.currentSlide, !0 !== i ? c.animateSlide(r, function() {
                    c.postSlide(o)
                }) : c.postSlide(o));
                else if (!1 === c.options.infinite && !0 === c.options.centerMode && (e < 0 || e > c.slideCount - c.options.slidesToScroll)) !1 === c.options.fade && (o = c.currentSlide, !0 !== i ? c.animateSlide(r, function() {
                c.postSlide(o)
            }) : c.postSlide(o));
            else {
                if (c.options.autoplay && clearInterval(c.autoPlayTimer), n = o < 0 ? c.slideCount % c.options.slidesToScroll != 0 ? c.slideCount - c.slideCount % c.options.slidesToScroll : c.slideCount + o : o >= c.slideCount ? c.slideCount % c.options.slidesToScroll != 0 ? 0 : o - c.slideCount : o, c.animating = !0, c.$slider.trigger("beforeChange", [c, c.currentSlide, n]), s = c.currentSlide, c.currentSlide = n, c.setSlideClasses(c.currentSlide), c.options.asNavFor && (a = (a = c.getNavTarget()).slick("getSlick")).slideCount <= a.options.slidesToShow && a.setSlideClasses(c.currentSlide), c.updateDots(), c.updateArrows(), !0 === c.options.fade) return !0 !== i ? (c.fadeSlideOut(s), c.fadeSlide(n, function() {
                    c.postSlide(n)
                })) : c.postSlide(n), void c.animateHeight();
                !0 !== i ? c.animateSlide(l, function() {
                    c.postSlide(n)
                }) : c.postSlide(n)
            }
        }, t.prototype.startLoad = function() {
            var e = this;
            !0 === e.options.arrows && e.slideCount > e.options.slidesToShow && (e.$prevArrow.hide(), e.$nextArrow.hide()), !0 === e.options.dots && e.slideCount > e.options.slidesToShow && e.$dots.hide(), e.$slider.addClass("slick-loading")
        }, t.prototype.swipeDirection = function() {
            var e, t, i, o, n = this;
            return e = n.touchObject.startX - n.touchObject.curX, t = n.touchObject.startY - n.touchObject.curY, i = Math.atan2(t, e), (o = Math.round(180 * i / Math.PI)) < 0 && (o = 360 - Math.abs(o)), o <= 45 && o >= 0 ? !1 === n.options.rtl ? "left" : "right" : o <= 360 && o >= 315 ? !1 === n.options.rtl ? "left" : "right" : o >= 135 && o <= 225 ? !1 === n.options.rtl ? "right" : "left" : !0 === n.options.verticalSwiping ? o >= 35 && o <= 135 ? "down" : "up" : "vertical"
        }, t.prototype.swipeEnd = function(e) {
            var t, i, o = this;
            if (o.dragging = !1, o.swiping = !1, o.scrolling) return o.scrolling = !1, !1;
            if (o.interrupted = !1, o.shouldClick = !(o.touchObject.swipeLength > 10), void 0 === o.touchObject.curX) return !1;
            if (!0 === o.touchObject.edgeHit && o.$slider.trigger("edge", [o, o.swipeDirection()]), o.touchObject.swipeLength >= o.touchObject.minSwipe) {
                switch (i = o.swipeDirection()) {
                    case "left":
                    case "down":
                        t = o.options.swipeToSlide ? o.checkNavigable(o.currentSlide + o.getSlideCount()) : o.currentSlide + o.getSlideCount(), o.currentDirection = 0;
                        break;
                    case "right":
                    case "up":
                        t = o.options.swipeToSlide ? o.checkNavigable(o.currentSlide - o.getSlideCount()) : o.currentSlide - o.getSlideCount(), o.currentDirection = 1
                }
                "vertical" != i && (o.slideHandler(t), o.touchObject = {}, o.$slider.trigger("swipe", [o, i]))
            } else o.touchObject.startX !== o.touchObject.curX && (o.slideHandler(o.currentSlide), o.touchObject = {})
        }, t.prototype.swipeHandler = function(e) {
            var t = this;
            if (!(!1 === t.options.swipe || "ontouchend" in document && !1 === t.options.swipe || !1 === t.options.draggable && -1 !== e.type.indexOf("mouse"))) switch (t.touchObject.fingerCount = e.originalEvent && void 0 !== e.originalEvent.touches ? e.originalEvent.touches.length : 1, t.touchObject.minSwipe = t.listWidth / t.options.touchThreshold, !0 === t.options.verticalSwiping && (t.touchObject.minSwipe = t.listHeight / t.options.touchThreshold), e.data.action) {
                case "start":
                    t.swipeStart(e);
                    break;
                case "move":
                    t.swipeMove(e);
                    break;
                case "end":
                    t.swipeEnd(e)
            }
        }, t.prototype.swipeMove = function(e) {
            var t, i, o, n, s, r, a = this;
            return s = void 0 !== e.originalEvent ? e.originalEvent.touches : null, !(!a.dragging || a.scrolling || s && 1 !== s.length) && (t = a.getLeft(a.currentSlide), a.touchObject.curX = void 0 !== s ? s[0].pageX : e.clientX, a.touchObject.curY = void 0 !== s ? s[0].pageY : e.clientY, a.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(a.touchObject.curX - a.touchObject.startX, 2))), r = Math.round(Math.sqrt(Math.pow(a.touchObject.curY - a.touchObject.startY, 2))), !a.options.verticalSwiping && !a.swiping && r > 4 ? (a.scrolling = !0, !1) : (!0 === a.options.verticalSwiping && (a.touchObject.swipeLength = r), i = a.swipeDirection(), void 0 !== e.originalEvent && a.touchObject.swipeLength > 4 && (a.swiping = !0, e.preventDefault()), n = (!1 === a.options.rtl ? 1 : -1) * (a.touchObject.curX > a.touchObject.startX ? 1 : -1), !0 === a.options.verticalSwiping && (n = a.touchObject.curY > a.touchObject.startY ? 1 : -1), o = a.touchObject.swipeLength, a.touchObject.edgeHit = !1, !1 === a.options.infinite && (0 === a.currentSlide && "right" === i || a.currentSlide >= a.getDotCount() && "left" === i) && (o = a.touchObject.swipeLength * a.options.edgeFriction, a.touchObject.edgeHit = !0), !1 === a.options.vertical ? a.swipeLeft = t + o * n : a.swipeLeft = t + o * (a.$list.height() / a.listWidth) * n, !0 === a.options.verticalSwiping && (a.swipeLeft = t + o * n), !0 !== a.options.fade && !1 !== a.options.touchMove && (!0 === a.animating ? (a.swipeLeft = null, !1) : void a.setCSS(a.swipeLeft))))
        }, t.prototype.swipeStart = function(e) {
            var t, i = this;
            if (i.interrupted = !0, 1 !== i.touchObject.fingerCount || i.slideCount <= i.options.slidesToShow) return i.touchObject = {}, !1;
            void 0 !== e.originalEvent && void 0 !== e.originalEvent.touches && (t = e.originalEvent.touches[0]), i.touchObject.startX = i.touchObject.curX = void 0 !== t ? t.pageX : e.clientX, i.touchObject.startY = i.touchObject.curY = void 0 !== t ? t.pageY : e.clientY, i.dragging = !0
        }, t.prototype.unfilterSlides = t.prototype.slickUnfilter = function() {
            var e = this;
            null !== e.$slidesCache && (e.unload(), e.$slideTrack.children(this.options.slide).detach(), e.$slidesCache.appendTo(e.$slideTrack), e.reinit())
        }, t.prototype.unload = function() {
            var t = this;
            e(".slick-cloned", t.$slider).remove(), t.$dots && t.$dots.remove(), t.$prevArrow && t.htmlExpr.test(t.options.prevArrow) && t.$prevArrow.remove(), t.$nextArrow && t.htmlExpr.test(t.options.nextArrow) && t.$nextArrow.remove(), t.$slides.removeClass("slick-slide slick-active slick-visible slick-current").attr("aria-hidden", "true").css("width", "")
        }, t.prototype.unslick = function(e) {
            var t = this;
            t.$slider.trigger("unslick", [t, e]), t.destroy()
        }, t.prototype.updateArrows = function() {
            var e = this;
            Math.floor(e.options.slidesToShow / 2), !0 === e.options.arrows && e.slideCount > e.options.slidesToShow && !e.options.infinite && (e.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false"), e.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false"), 0 === e.currentSlide ? (e.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true"), e.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) : e.currentSlide >= e.slideCount - e.options.slidesToShow && !1 === e.options.centerMode ? (e.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), e.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) : e.currentSlide >= e.slideCount - 1 && !0 === e.options.centerMode && (e.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), e.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")))
        }, t.prototype.updateDots = function() {
            var e = this;
            null !== e.$dots && (e.$dots.find("li").removeClass("slick-active").end(), e.$dots.find("li").eq(Math.floor(e.currentSlide / e.options.slidesToScroll)).addClass("slick-active"))
        }, t.prototype.visibility = function() {
            var e = this;
            e.options.autoplay && (document[e.hidden] ? e.interrupted = !0 : e.interrupted = !1)
        }, e.fn.slick = function() {
            var e, i, o = this,
                n = arguments[0],
                s = Array.prototype.slice.call(arguments, 1),
                r = o.length;
            for (e = 0; e < r; e++)
                if ("object" == typeof n || void 0 === n ? o[e].slick = new t(o[e], n) : i = o[e].slick[n].apply(o[e].slick, s), void 0 !== i) return i;
            return o
        }
    })
}, function(e, t, i) {
    "use strict";

    function o(e) {
        return e && e.__esModule ? e : {
            default: e
        }
    }

    function n(e) {
        (0, r.default)("#search_filters").replaceWith(e.rendered_facets), (0, r.default)("#js-active-search-filters").replaceWith(e.rendered_active_filters), (0, r.default)("#js-product-list-top").replaceWith(e.rendered_products_top), (0, r.default)("#js-product-list").replaceWith(e.rendered_products), (0, r.default)("#js-product-list-bottom").replaceWith(e.rendered_products_bottom)
    }
    var s = i(0),
        r = o(s),
        a = i(1),
        l = o(a);
    i(2), (0, r.default)(document).ready(function() {
        l.default.on("clickQuickView", function(t) {
            var i = {
                action: "quickview",
                id_product: t.dataset.idProduct,
                id_product_attribute: t.dataset.idProductAttribute
            };
            r.default.post(l.default.urls.pages.product, i, null, "json").then(function(t) {
                (0, r.default)("body").append(t.quickview_html);
                var i = (0, r.default)("#quickview-modal-" + t.product.id + "-" + t.product.id_product_attribute);
                i.modal("show"), i.on("shown.bs.modal", function() {
                    e(i)
                }), i.on("hidden.bs.modal", function() {
                    i.remove()
                })
            }).fail(function(e) {
                l.default.emit("handleError", {
                    eventType: "clickQuickView",
                    resp: e
                })
            })
        });
        var e = function(e) {
            var t = [];
            (0, r.default)(".js-qv-product-images").slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: !1,
                dots: !1,
                arrows: !0,
                vertical: !1,
                verticalSwiping: !1,
                focusOnSelect: !0,
                lazyLoad: "ondemand",
                responsive: t
            }), e.find(".js-thumb").on("click", function(e) {
                (0, r.default)(".js-modal-product-cover").attr("src", (0, r.default)(e.target).data("image-large-src")), (0, r.default)(".selected").removeClass("selected"), (0, r.default)(e.target).addClass("selected"), (0, r.default)(".js-qv-product-cover").prop("src", (0, r.default)(e.currentTarget).data("image-large-src")), (0, r.default)(".zoomContainer").remove(), (0, r.default)(".product-image-zoom").removeData("elevateZoom"), (0, r.default)(".product-image-zoom").data("zoom-image", (0, r.default)(e.currentTarget).data("image-large-src")), (0, r.default)(".product-image-zoom").elevateZoom({
                    zoomType: "inner",
                    cursor: "crosshair",
                    zoomWindowFadeIn: 500,
                    zoomWindowFadeOut: 750
                })
            }), e.find(".product-image-zoom").elevateZoom({
                zoomType: "inner",
                cursor: "crosshair",
                zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 750
            }), e.find("#quantity_wanted").TouchSpin({
                verticalbuttons: !0,
                verticalupclass: "fa fa-angle-up touchspin-up",
                verticaldownclass: "fa fa-angle-down touchspin-down",
                buttondown_class: "btn btn-touchspin js-touchspin",
                buttonup_class: "btn btn-touchspin js-touchspin",
                min: 1,
                max: 1e6
            })
        };
        (0, r.default)("body").on("click", "#search_filter_toggler", function() {
            (0, r.default)("#search_filters_wrapper").removeClass("hidden-md-down"), (0, r.default)("#content-wrapper").addClass("hidden-md-down"), (0, r.default)("#footer").addClass("hidden-md-down")
        }), (0, r.default)("#search_filter_controls .clear").on("click", function() {
            (0, r.default)("#search_filters_wrapper").addClass("hidden-md-down"), (0, r.default)("#content-wrapper").removeClass("hidden-md-down"), (0, r.default)("#footer").removeClass("hidden-md-down")
        }), (0, r.default)("#search_filter_controls .ok").on("click", function() {
            (0, r.default)("#search_filters_wrapper").addClass("hidden-md-down"), (0, r.default)("#content-wrapper").removeClass("hidden-md-down"), (0, r.default)("#footer").removeClass("hidden-md-down")
        }), (0, r.default)("body").on("change", "#search_filters input[data-search-url]", function(e) {
            l.default.emit("updateFacets", e.target.dataset.searchUrl)
        }), (0, r.default)("body").on("click", ".js-search-filters-clear-all", function(e) {
            l.default.emit("updateFacets", e.target.dataset.searchUrl)
        }), (0, r.default)("body").on("click", ".js-search-link", function(e) {
            e.preventDefault(), l.default.emit("updateFacets", (0, r.default)(e.target).closest("a").get(0).href)
        }), (0, r.default)("body").on("change", "#search_filters select", function(e) {
            var t = (0, r.default)(e.target).closest("form");
            l.default.emit("updateFacets", "?" + t.serialize())
        }), l.default.on("updateProductList", function(e) {
            n(e)
        })
    })
}, function(e, t, i) {
    "use strict";
    jQuery(function(e) {
        function t() {
            s.click(function(e) {
                i(), e.stopPropagation()
            }), r && r.click(function() {
                i()
            }), n.click(function(e) {
                var t = e.target;
                a && t !== s && i()
            })
        }

        function i() {
            a ? o.removeClass("show-menu") : o.addClass("show-menu"), a = !a
        }
        var o = e("body"),
            n = e(".bg-overlay"),
            s = e("#mobile-menu-toggle"),
            r = e("#mobile-menu-close"),
            a = !1;
        ! function() {
            t()
        }()
    }), jQuery(function(e) {
        e("#off-canvas-menu .mega .caret").click(function(t) {
            t.preventDefault();
            var i = e(this).parent(),
                o = i.next(".dropdown-menu"),
                n = i.parent();
            n.hasClass("open") ? (n.removeClass("open"), o.slideUp("normal"), e(this).removeClass("rotate")) : (n.addClass("open"), o.slideDown("normal"), e(this).addClass("rotate"))
        }), e(".mega .caret").mouseover(function(e) {
            return e.preventDefault(), !1
        }), e("#off-canvas-menu li a").mouseover(function(e) {
            return e.preventDefault(), !1
        })
    })
}, function(e, t, i) {
    "use strict";
    var o = i(0),
        n = function(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }(o);
    (0, n.default)(document).ready(function() {
        function e() {
            (0, n.default)(".js-thumb").on("click", function(e) {
                (0, n.default)(".js-modal-product-cover").attr("src", (0, n.default)(e.target).data("image-large-src")), (0, n.default)(".selected").removeClass("selected"), (0, n.default)(e.target).addClass("selected"), (0, n.default)(".js-qv-product-cover").prop("src", (0, n.default)(e.currentTarget).data("image-large-src")), (0, n.default)(".zoomContainer").remove(), (0, n.default)(".product-image-zoom").removeData("elevateZoom"), (0, n.default)(".product-image-zoom").data("zoom-image", (0, n.default)(e.currentTarget).data("image-large-src")), (0, n.default)(".product-image-zoom").elevateZoom({
                    zoomType: "inner",
                    cursor: "crosshair",
                    zoomWindowFadeIn: 500,
                    zoomWindowFadeOut: 750
                })
            }), (0, n.default)(".product-image-zoom").elevateZoom({
                zoomType: "inner",
                cursor: "crosshair",
                zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 750
            })
        }

        function t() {
            var e = !1,
                t = 5,
                i = "ondemand",
                o = [];
            "thumbs-left" != jmsSetting.product_content_layout && "thumbs-right" != jmsSetting.product_content_layout || (e = !0, t = 4, i = "progressive"), "thumbs-left" == jmsSetting.product_content_layout && (o = [{
                // breakpoint: 769,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    vertical: !1,
                    verticalSwiping: !1
                }
            }]), "thumbs-left" != jmsSetting.product_content_layout && "thumbs-right" != jmsSetting.product_content_layout && "thumbs-bottom" != jmsSetting.product_content_layout || (0, n.default)(".js-qv-product-images").slick({
                slidesToShow: t,
                slidesToScroll: t,
                infinite: !1,
                dots: !1,
                arrows: !0,
                vertical: e,
                verticalSwiping: e,
                focusOnSelect: !0,
                lazyLoad: i,
                responsive: o
            })
        }

        function i() {
            (0, n.default)(".js-file-input").on("change", function(e) {
                (0, n.default)(".js-file-name").text((0, n.default)(e.currentTarget).val())
            })
        }! function() {
            var e = (0, n.default)("#quantity_wanted");
            e.TouchSpin({
                verticalbuttons: !0,
                verticalupclass: "fa fa-angle-up touchspin-up",
                verticaldownclass: "fa fa-angle-down touchspin-down",
                buttondown_class: "btn btn-touchspin js-touchspin",
                buttonup_class: "btn btn-touchspin js-touchspin",
                min: parseInt(e.attr("min"), 10),
                max: 1e6
            }), e.on("change", function(e) {
                var t = (0, n.default)(".product-refresh");
                return (0, n.default)(e.currentTarget).trigger("touchspin.stopspin"), t.trigger("click", {
                    eventType: "updatedProductQuantity"
                }), e.preventDefault(), !1
            })
        }(), i(), e(), t(), prestashop.on("updatedProduct", function(o) {
            if (i(), e(), o && o.product_minimal_quantity) {
                var s = parseInt(o.product_minimal_quantity, 10);
                (0, n.default)("#quantity_wanted").trigger("touchspin.updatesettings", {
                    min: s
                })
            }
            t(), (0, n.default)((0, n.default)(".tabs .nav-link.active").attr("href")).addClass("active").removeClass("fade"), (0, n.default)(".js-product-images-modal").replaceWith(o.product_images_modal)
        })
    })
}, function(e, t, i) {
    "use strict";

    function o(e) {
        return e && e.__esModule ? e : {
            default: e
        }
    }

    function n(e, t) {
        var i = t.children().detach();
        t.empty().append(e.children().detach()), e.append(i)
    }

    function s() {
        c.default.responsive.mobile ? (0, a.default)("*[id^='_desktop_']").each(function(e, t) {
            var i = (0, a.default)("#" + t.id.replace("_desktop_", "_mobile_"));
            i && n((0, a.default)(t), i)
        }) : (0, a.default)("*[id^='_mobile_']").each(function(e, t) {
            var i = (0, a.default)("#" + t.id.replace("_mobile_", "_desktop_"));
            i && n((0, a.default)(t), i)
        }), c.default.emit("responsive update", {
            mobile: c.default.responsive.mobile
        })
    }
    var r = i(0),
        a = o(r),
        l = i(1),
        c = o(l);
    c.default.responsive = c.default.responsive || {}, c.default.responsive.current_width = (0, a.default)(window).width(), c.default.responsive.min_width = 768, c.default.responsive.mobile = c.default.responsive.current_width < c.default.responsive.min_width, (0, a.default)(window).on("resize", function() {
        var e = c.default.responsive.current_width,
            t = c.default.responsive.min_width,
            i = (0, a.default)(window).width(),
            o = e >= t && i < t || e < t && i >= t;
        c.default.responsive.mobile = e >= t, c.default.responsive.current_width = i, o && s()
    }), (0, a.default)(document).ready(function() {
        c.default.responsive.mobile && s()
    })
}, function(e, t, i) {
    "use strict";
    ! function(e) {
        function t(e, t) {
            return e + ".touchspin_" + t
        }

        function i(i, o) {
            return e.map(i, function(e) {
                return t(e, o)
            })
        }
        var o = 0;
        e.fn.TouchSpin = function(t) {
            if ("destroy" === t) return void this.each(function() {
                var t = e(this),
                    o = t.data();
                e(document).off(i(["mouseup", "touchend", "touchcancel", "mousemove", "touchmove", "scroll", "scrollstart"], o.spinnerid).join(" "))
            });
            var n = {
                    min: 0,
                    max: 100,
                    initval: "",
                    replacementval: "",
                    step: 1,
                    decimals: 0,
                    stepinterval: 100,
                    forcestepdivisibility: "round",
                    stepintervaldelay: 500,
                    verticalbuttons: !1,
                    verticalupclass: "glyphicon glyphicon-chevron-up",
                    verticaldownclass: "glyphicon glyphicon-chevron-down",
                    prefix: "",
                    postfix: "",
                    prefix_extraclass: "",
                    postfix_extraclass: "",
                    booster: !0,
                    boostat: 10,
                    maxboostedstep: !1,
                    mousewheel: !0,
                    buttondown_class: "btn btn-default",
                    buttonup_class: "btn btn-default",
                    buttondown_txt: "-",
                    buttonup_txt: "+"
                },
                s = {
                    min: "min",
                    max: "max",
                    initval: "init-val",
                    replacementval: "replacement-val",
                    step: "step",
                    decimals: "decimals",
                    stepinterval: "step-interval",
                    verticalbuttons: "vertical-buttons",
                    verticalupclass: "vertical-up-class",
                    verticaldownclass: "vertical-down-class",
                    forcestepdivisibility: "force-step-divisibility",
                    stepintervaldelay: "step-interval-delay",
                    prefix: "prefix",
                    postfix: "postfix",
                    prefix_extraclass: "prefix-extra-class",
                    postfix_extraclass: "postfix-extra-class",
                    booster: "booster",
                    boostat: "boostat",
                    maxboostedstep: "max-boosted-step",
                    mousewheel: "mouse-wheel",
                    buttondown_class: "button-down-class",
                    buttonup_class: "button-up-class",
                    buttondown_txt: "button-down-txt",
                    buttonup_txt: "button-up-txt"
                };
            return this.each(function() {
                function r() {
                    "" !== k.initval && "" === W.val() && W.val(k.initval)
                }

                function a(e) {
                    d(e), w();
                    var t = E.input.val();
                    "" !== t && (t = Number(E.input.val()), E.input.val(t.toFixed(k.decimals)))
                }

                function l() {
                    k = e.extend({}, n, I, c(), t)
                }

                function c() {
                    var t = {};
                    return e.each(s, function(e, i) {
                        var o = "bts-" + i;
                        W.is("[data-" + o + "]") && (t[e] = W.data(o))
                    }), t
                }

                function d(t) {
                    k = e.extend({}, k, t)
                }

                function u() {
                    var e = W.val(),
                        t = W.parent();
                    "" !== e && (e = Number(e).toFixed(k.decimals)), W.data("initvalue", e).val(e), W.addClass("form-control"), t.hasClass("input-group") ? h(t) : p()
                }

                function h(t) {
                    t.addClass("bootstrap-touchspin");
                    var i, o, n = W.prev(),
                        s = W.next(),
                        r = '<span class="input-group-addon bootstrap-touchspin-prefix">' + k.prefix + "</span>",
                        a = '<span class="input-group-addon bootstrap-touchspin-postfix">' + k.postfix + "</span>";
                    n.hasClass("input-group-btn") ? (i = '<button class="' + k.buttondown_class + ' bootstrap-touchspin-down" type="button">' + k.buttondown_txt + "</button>", n.append(i)) : (i = '<span class="input-group-btn"><button class="' + k.buttondown_class + ' bootstrap-touchspin-down" type="button">' + k.buttondown_txt + "</button></span>", e(i).insertBefore(W)), s.hasClass("input-group-btn") ? (o = '<button class="' + k.buttonup_class + ' bootstrap-touchspin-up" type="button">' + k.buttonup_txt + "</button>", s.prepend(o)) : (o = '<span class="input-group-btn"><button class="' + k.buttonup_class + ' bootstrap-touchspin-up" type="button">' + k.buttonup_txt + "</button></span>", e(o).insertAfter(W)), e(r).insertBefore(W), e(a).insertAfter(W), z = t
                }

                function p() {
                    var t;
                    t = k.verticalbuttons ? '<div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix">' + k.prefix + '</span><span class="input-group-addon bootstrap-touchspin-postfix">' + k.postfix + '</span><span class="input-group-btn-vertical"><button class="' + k.buttondown_class + ' bootstrap-touchspin-up" type="button"><i class="' + k.verticalupclass + '"></i></button><button class="' + k.buttonup_class + ' bootstrap-touchspin-down" type="button"><i class="' + k.verticaldownclass + '"></i></button></span></div>' : '<div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="' + k.buttondown_class + ' bootstrap-touchspin-down" type="button">' + k.buttondown_txt + '</button></span><span class="input-group-addon bootstrap-touchspin-prefix">' + k.prefix + '</span><span class="input-group-addon bootstrap-touchspin-postfix">' + k.postfix + '</span><span class="input-group-btn"><button class="' + k.buttonup_class + ' bootstrap-touchspin-up" type="button">' + k.buttonup_txt + "</button></span></div>", z = e(t).insertBefore(W), e(".bootstrap-touchspin-prefix", z).after(W), W.hasClass("input-sm") ? z.addClass("input-group-sm") : W.hasClass("input-lg") && z.addClass("input-group-lg")
                }

                function f() {
                    E = {
                        down: e(".bootstrap-touchspin-down", z),
                        up: e(".bootstrap-touchspin-up", z),
                        input: e("input", z),
                        prefix: e(".bootstrap-touchspin-prefix", z).addClass(k.prefix_extraclass),
                        postfix: e(".bootstrap-touchspin-postfix", z).addClass(k.postfix_extraclass)
                    }
                }

                function m() {
                    "" === k.prefix && E.prefix.hide(), "" === k.postfix && E.postfix.hide()
                }

                function g() {
                    W.on("keydown", function(e) {
                        var t = e.keyCode || e.which;
                        38 === t ? ("up" !== H && (_(), T()), e.preventDefault()) : 40 === t && ("down" !== H && (x(), S()), e.preventDefault())
                    }), W.on("keyup", function(e) {
                        var t = e.keyCode || e.which;
                        38 === t ? C() : 40 === t && C()
                    }), W.on("blur", function() {
                        w()
                    }), E.down.on("keydown", function(e) {
                        var t = e.keyCode || e.which;
                        32 !== t && 13 !== t || ("down" !== H && (x(), S()), e.preventDefault())
                    }), E.down.on("keyup", function(e) {
                        var t = e.keyCode || e.which;
                        32 !== t && 13 !== t || C()
                    }), E.up.on("keydown", function(e) {
                        var t = e.keyCode || e.which;
                        32 !== t && 13 !== t || ("up" !== H && (_(), T()), e.preventDefault())
                    }), E.up.on("keyup", function(e) {
                        var t = e.keyCode || e.which;
                        32 !== t && 13 !== t || C()
                    }), E.down.on("mousedown.touchspin", function(e) {
                        E.down.off("touchstart.touchspin"), W.is(":disabled") || (x(), S(), e.preventDefault(), e.stopPropagation())
                    }), E.down.on("touchstart.touchspin", function(e) {
                        E.down.off("mousedown.touchspin"), W.is(":disabled") || (x(), S(), e.preventDefault(), e.stopPropagation())
                    }), E.up.on("mousedown.touchspin", function(e) {
                        E.up.off("touchstart.touchspin"), W.is(":disabled") || (_(), T(), e.preventDefault(), e.stopPropagation())
                    }), E.up.on("touchstart.touchspin", function(e) {
                        E.up.off("mousedown.touchspin"), W.is(":disabled") || (_(), T(), e.preventDefault(), e.stopPropagation())
                    }), E.up.on("mouseout touchleave touchend touchcancel", function(e) {
                        H && (e.stopPropagation(), C())
                    }), E.down.on("mouseout touchleave touchend touchcancel", function(e) {
                        H && (e.stopPropagation(), C())
                    }), E.down.on("mousemove touchmove", function(e) {
                        H && (e.stopPropagation(), e.preventDefault())
                    }), E.up.on("mousemove touchmove", function(e) {
                        H && (e.stopPropagation(), e.preventDefault())
                    }), e(document).on(i(["mouseup", "touchend", "touchcancel"], o).join(" "), function(e) {
                        H && (e.preventDefault(), C())
                    }), e(document).on(i(["mousemove", "touchmove", "scroll", "scrollstart"], o).join(" "), function(e) {
                        H && (e.preventDefault(), C())
                    }), W.on("mousewheel DOMMouseScroll", function(e) {
                        if (k.mousewheel && W.is(":focus")) {
                            var t = e.originalEvent.wheelDelta || -e.originalEvent.deltaY || -e.originalEvent.detail;
                            e.stopPropagation(), e.preventDefault(), t < 0 ? x() : _()
                        }
                    })
                }

                function v() {
                    W.on("touchspin.uponce", function() {
                        C(), _()
                    }), W.on("touchspin.downonce", function() {
                        C(), x()
                    }), W.on("touchspin.startupspin", function() {
                        T()
                    }), W.on("touchspin.startdownspin", function() {
                        S()
                    }), W.on("touchspin.stopspin", function() {
                        C()
                    }), W.on("touchspin.updatesettings", function(e, t) {
                        a(t)
                    })
                }

                function y(e) {
                    switch (k.forcestepdivisibility) {
                        case "round":
                            return (Math.round(e / k.step) * k.step).toFixed(k.decimals);
                        case "floor":
                            return (Math.floor(e / k.step) * k.step).toFixed(k.decimals);
                        case "ceil":
                            return (Math.ceil(e / k.step) * k.step).toFixed(k.decimals);
                        default:
                            return e
                    }
                }

                function w() {
                    var e, t, i;
                    if ("" === (e = W.val())) return void("" !== k.replacementval && (W.val(k.replacementval), W.trigger("change")));
                    k.decimals > 0 && "." === e || (t = parseFloat(e), isNaN(t) && (t = "" !== k.replacementval ? k.replacementval : 0), i = t, t.toString() !== e && (i = t), t < k.min && (i = k.min), t > k.max && (i = k.max), i = y(i), Number(e).toString() !== i.toString() && (W.val(i), W.trigger("change")))
                }

                function b() {
                    if (k.booster) {
                        var e = Math.pow(2, Math.floor(D / k.boostat)) * k.step;
                        return k.maxboostedstep && e > k.maxboostedstep && (e = k.maxboostedstep, A = Math.round(A / e) * e), Math.max(k.step, e)
                    }
                    return k.step
                }

                function _() {
                    w(), A = parseFloat(E.input.val()), isNaN(A) && (A = 0);
                    var e = A,
                        t = b();
                    A += t, A > k.max && (A = k.max, W.trigger("touchspin.on.max"), C()), E.input.val(Number(A).toFixed(k.decimals)), e !== A && W.trigger("change")
                }

                function x() {
                    w(), A = parseFloat(E.input.val()), isNaN(A) && (A = 0);
                    var e = A,
                        t = b();
                    A -= t, A < k.min && (A = k.min, W.trigger("touchspin.on.min"), C()), E.input.val(A.toFixed(k.decimals)), e !== A && W.trigger("change")
                }

                function S() {
                    C(), D = 0, H = "down", W.trigger("touchspin.on.startspin"), W.trigger("touchspin.on.startdownspin"), L = setTimeout(function() {
                        O = setInterval(function() {
                            D++, x()
                        }, k.stepinterval)
                    }, k.stepintervaldelay)
                }

                function T() {
                    C(), D = 0, H = "up", W.trigger("touchspin.on.startspin"), W.trigger("touchspin.on.startupspin"), P = setTimeout(function() {
                        $ = setInterval(function() {
                            D++, _()
                        }, k.stepinterval)
                    }, k.stepintervaldelay)
                }

                function C() {
                    switch (clearTimeout(L), clearTimeout(P), clearInterval(O), clearInterval($), H) {
                        case "up":
                            W.trigger("touchspin.on.stopupspin"), W.trigger("touchspin.on.stopspin");
                            break;
                        case "down":
                            W.trigger("touchspin.on.stopdownspin"), W.trigger("touchspin.on.stopspin")
                    }
                    D = 0, H = !1
                }
                var k, z, E, A, O, $, L, P, W = e(this),
                    I = W.data(),
                    D = 0,
                    H = !1;
                ! function() {
                    W.data("alreadyinitialized") || (W.data("alreadyinitialized", !0), o += 1, W.data("spinnerid", o), W.is("input") && (l(), r(), w(), u(), f(), m(), g(), v(), E.input.css("display", "block")))
                }()
            })
        }
    }(jQuery)
}, function(e, t, i) {
    "use strict";
    ! function(e, o) {
        o(t, i(26), i(0))
    }(0, function(e, t, i) {
        function o(e, t) {
            for (var i = 0; i < t.length; i++) {
                var o = t[i];
                o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
            }
        }

        function n(e, t, i) {
            return t && o(e.prototype, t), i && o(e, i), e
        }

        function s(e) {
            for (var t = 1; t < arguments.length; t++) {
                var i = null != arguments[t] ? arguments[t] : {},
                    o = Object.keys(i);
                "function" == typeof Object.getOwnPropertySymbols && (o = o.concat(Object.getOwnPropertySymbols(i).filter(function(e) {
                    return Object.getOwnPropertyDescriptor(i, e).enumerable
                }))), o.forEach(function(t) {
                    var o, n, s;
                    o = e, s = i[n = t], n in o ? Object.defineProperty(o, n, {
                        value: s,
                        enumerable: !0,
                        configurable: !0,
                        writable: !0
                    }) : o[n] = s
                })
            }
            return e
        }

        function r(e) {
            var t = this,
                o = !1;
            return i(this).one(l.TRANSITION_END, function() {
                o = !0
            }), setTimeout(function() {
                o || l.triggerTransitionEnd(t)
            }, e), this
        }
        t = t && t.hasOwnProperty("default") ? t.default : t, i = i && i.hasOwnProperty("default") ? i.default : i;
        var a = "transitionend",
            l = {
                TRANSITION_END: "bsTransitionEnd",
                getUID: function(e) {
                    for (; e += ~~(1e6 * Math.random()), document.getElementById(e););
                    return e
                },
                getSelectorFromElement: function(e) {
                    var t = e.getAttribute("data-target");
                    if (!t || "#" === t) {
                        var i = e.getAttribute("href");
                        t = i && "#" !== i ? i.trim() : ""
                    }
                    return t && document.querySelector(t) ? t : null
                },
                getTransitionDurationFromElement: function(e) {
                    if (!e) return 0;
                    var t = i(e).css("transition-duration"),
                        o = i(e).css("transition-delay"),
                        n = parseFloat(t),
                        s = parseFloat(o);
                    return n || s ? (t = t.split(",")[0], o = o.split(",")[0], 1e3 * (parseFloat(t) + parseFloat(o))) : 0
                },
                reflow: function(e) {
                    return e.offsetHeight
                },
                triggerTransitionEnd: function(e) {
                    i(e).trigger(a)
                },
                supportsTransitionEnd: function() {
                    return Boolean(a)
                },
                isElement: function(e) {
                    return (e[0] || e).nodeType
                },
                typeCheckConfig: function(e, t, i) {
                    for (var o in i)
                        if (Object.prototype.hasOwnProperty.call(i, o)) {
                            var n = i[o],
                                s = t[o],
                                r = s && l.isElement(s) ? "element" : (a = s, {}.toString.call(a).match(/\s([a-z]+)/i)[1].toLowerCase());
                            if (!new RegExp(n).test(r)) throw new Error(e.toUpperCase() + ': Option "' + o + '" provided type "' + r + '" but expected type "' + n + '".')
                        } var a
                },
                findShadowRoot: function(e) {
                    if (!document.documentElement.attachShadow) return null;
                    if ("function" != typeof e.getRootNode) return e instanceof ShadowRoot ? e : e.parentNode ? l.findShadowRoot(e.parentNode) : null;
                    var t = e.getRootNode();
                    return t instanceof ShadowRoot ? t : null
                }
            };
        i.fn.emulateTransitionEnd = r, i.event.special[l.TRANSITION_END] = {
            bindType: a,
            delegateType: a,
            handle: function(e) {
                if (i(e.target).is(this)) return e.handleObj.handler.apply(this, arguments)
            }
        };
        var c = "alert",
            d = "bs.alert",
            u = "." + d,
            h = i.fn[c],
            p = {
                CLOSE: "close" + u,
                CLOSED: "closed" + u,
                CLICK_DATA_API: "click" + u + ".data-api"
            },
            f = function() {
                function e(e) {
                    this._element = e
                }
                var t = e.prototype;
                return t.close = function(e) {
                    var t = this._element;
                    e && (t = this._getRootElement(e)), this._triggerCloseEvent(t).isDefaultPrevented() || this._removeElement(t)
                }, t.dispose = function() {
                    i.removeData(this._element, d), this._element = null
                }, t._getRootElement = function(e) {
                    var t = l.getSelectorFromElement(e),
                        o = !1;
                    return t && (o = document.querySelector(t)), o || (o = i(e).closest(".alert")[0]), o
                }, t._triggerCloseEvent = function(e) {
                    var t = i.Event(p.CLOSE);
                    return i(e).trigger(t), t
                }, t._removeElement = function(e) {
                    var t = this;
                    if (i(e).removeClass("show"), i(e).hasClass("fade")) {
                        var o = l.getTransitionDurationFromElement(e);
                        i(e).one(l.TRANSITION_END, function(i) {
                            return t._destroyElement(e, i)
                        }).emulateTransitionEnd(o)
                    } else this._destroyElement(e)
                }, t._destroyElement = function(e) {
                    i(e).detach().trigger(p.CLOSED).remove()
                }, e._jQueryInterface = function(t) {
                    return this.each(function() {
                        var o = i(this),
                            n = o.data(d);
                        n || (n = new e(this), o.data(d, n)), "close" === t && n[t](this)
                    })
                }, e._handleDismiss = function(e) {
                    return function(t) {
                        t && t.preventDefault(), e.close(this)
                    }
                }, n(e, null, [{
                    key: "VERSION",
                    get: function() {
                        return "4.2.1"
                    }
                }]), e
            }();
        i(document).on(p.CLICK_DATA_API, '[data-dismiss="alert"]', f._handleDismiss(new f)), i.fn[c] = f._jQueryInterface, i.fn[c].Constructor = f, i.fn[c].noConflict = function() {
            return i.fn[c] = h, f._jQueryInterface
        };
        var m = "button",
            g = "bs.button",
            v = "." + g,
            y = ".data-api",
            w = i.fn[m],
            b = "active",
            _ = '[data-toggle^="button"]',
            x = ".btn",
            S = {
                CLICK_DATA_API: "click" + v + y,
                FOCUS_BLUR_DATA_API: "focus" + v + y + " blur" + v + y
            },
            T = function() {
                function e(e) {
                    this._element = e
                }
                var t = e.prototype;
                return t.toggle = function() {
                    var e = !0,
                        t = !0,
                        o = i(this._element).closest('[data-toggle="buttons"]')[0];
                    if (o) {
                        var n = this._element.querySelector('input:not([type="hidden"])');
                        if (n) {
                            if ("radio" === n.type)
                                if (n.checked && this._element.classList.contains(b)) e = !1;
                                else {
                                    var s = o.querySelector(".active");
                                    s && i(s).removeClass(b)
                                } if (e) {
                                if (n.hasAttribute("disabled") || o.hasAttribute("disabled") || n.classList.contains("disabled") || o.classList.contains("disabled")) return;
                                n.checked = !this._element.classList.contains(b), i(n).trigger("change")
                            }
                            n.focus(), t = !1
                        }
                    }
                    t && this._element.setAttribute("aria-pressed", !this._element.classList.contains(b)), e && i(this._element).toggleClass(b)
                }, t.dispose = function() {
                    i.removeData(this._element, g), this._element = null
                }, e._jQueryInterface = function(t) {
                    return this.each(function() {
                        var o = i(this).data(g);
                        o || (o = new e(this), i(this).data(g, o)), "toggle" === t && o[t]()
                    })
                }, n(e, null, [{
                    key: "VERSION",
                    get: function() {
                        return "4.2.1"
                    }
                }]), e
            }();
        i(document).on(S.CLICK_DATA_API, _, function(e) {
            e.preventDefault();
            var t = e.target;
            i(t).hasClass("btn") || (t = i(t).closest(x)), T._jQueryInterface.call(i(t), "toggle")
        }).on(S.FOCUS_BLUR_DATA_API, _, function(e) {
            var t = i(e.target).closest(x)[0];
            i(t).toggleClass("focus", /^focus(in)?$/.test(e.type))
        }), i.fn[m] = T._jQueryInterface, i.fn[m].Constructor = T, i.fn[m].noConflict = function() {
            return i.fn[m] = w, T._jQueryInterface
        };
        var C = "carousel",
            k = "bs.carousel",
            z = "." + k,
            E = ".data-api",
            A = i.fn[C],
            O = {
                interval: 5e3,
                keyboard: !0,
                slide: !1,
                pause: "hover",
                wrap: !0,
                touch: !0
            },
            $ = {
                interval: "(number|boolean)",
                keyboard: "boolean",
                slide: "(boolean|string)",
                pause: "(string|boolean)",
                wrap: "boolean",
                touch: "boolean"
            },
            L = "next",
            P = "prev",
            W = {
                SLIDE: "slide" + z,
                SLID: "slid" + z,
                KEYDOWN: "keydown" + z,
                MOUSEENTER: "mouseenter" + z,
                MOUSELEAVE: "mouseleave" + z,
                TOUCHSTART: "touchstart" + z,
                TOUCHMOVE: "touchmove" + z,
                TOUCHEND: "touchend" + z,
                POINTERDOWN: "pointerdown" + z,
                POINTERUP: "pointerup" + z,
                DRAG_START: "dragstart" + z,
                LOAD_DATA_API: "load" + z + E,
                CLICK_DATA_API: "click" + z + E
            },
            I = "active",
            D = ".active.carousel-item",
            H = ".carousel-indicators",
            N = {
                TOUCH: "touch",
                PEN: "pen"
            },
            j = function() {
                function e(e, t) {
                    this._items = null, this._interval = null, this._activeElement = null, this._isPaused = !1, this._isSliding = !1, this.touchTimeout = null, this.touchStartX = 0, this.touchDeltaX = 0, this._config = this._getConfig(t), this._element = e, this._indicatorsElement = this._element.querySelector(H), this._touchSupported = "ontouchstart" in document.documentElement || 0 < navigator.maxTouchPoints, this._pointerEvent = Boolean(window.PointerEvent || window.MSPointerEvent), this._addEventListeners()
                }
                var t = e.prototype;
                return t.next = function() {
                    this._isSliding || this._slide(L)
                }, t.nextWhenVisible = function() {
                    !document.hidden && i(this._element).is(":visible") && "hidden" !== i(this._element).css("visibility") && this.next()
                }, t.prev = function() {
                    this._isSliding || this._slide(P)
                }, t.pause = function(e) {
                    e || (this._isPaused = !0), this._element.querySelector(".carousel-item-next, .carousel-item-prev") && (l.triggerTransitionEnd(this._element), this.cycle(!0)), clearInterval(this._interval), this._interval = null
                }, t.cycle = function(e) {
                    e || (this._isPaused = !1), this._interval && (clearInterval(this._interval), this._interval = null), this._config.interval && !this._isPaused && (this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval))
                }, t.to = function(e) {
                    var t = this;
                    this._activeElement = this._element.querySelector(D);
                    var o = this._getItemIndex(this._activeElement);
                    if (!(e > this._items.length - 1 || e < 0))
                        if (this._isSliding) i(this._element).one(W.SLID, function() {
                            return t.to(e)
                        });
                        else {
                            if (o === e) return this.pause(), void this.cycle();
                            var n = o < e ? L : P;
                            this._slide(n, this._items[e])
                        }
                }, t.dispose = function() {
                    i(this._element).off(z), i.removeData(this._element, k), this._items = null, this._config = null, this._element = null, this._interval = null, this._isPaused = null, this._isSliding = null, this._activeElement = null, this._indicatorsElement = null
                }, t._getConfig = function(e) {
                    return e = s({}, O, e), l.typeCheckConfig(C, e, $), e
                }, t._handleSwipe = function() {
                    var e = Math.abs(this.touchDeltaX);
                    if (!(e <= 40)) {
                        var t = e / this.touchDeltaX;
                        0 < t && this.prev(), t < 0 && this.next()
                    }
                }, t._addEventListeners = function() {
                    var e = this;
                    this._config.keyboard && i(this._element).on(W.KEYDOWN, function(t) {
                        return e._keydown(t)
                    }), "hover" === this._config.pause && i(this._element).on(W.MOUSEENTER, function(t) {
                        return e.pause(t)
                    }).on(W.MOUSELEAVE, function(t) {
                        return e.cycle(t)
                    }), this._addTouchEventListeners()
                }, t._addTouchEventListeners = function() {
                    var e = this;
                    if (this._touchSupported) {
                        var t = function(t) {
                                e._pointerEvent && N[t.originalEvent.pointerType.toUpperCase()] ? e.touchStartX = t.originalEvent.clientX : e._pointerEvent || (e.touchStartX = t.originalEvent.touches[0].clientX)
                            },
                            o = function(t) {
                                e._pointerEvent && N[t.originalEvent.pointerType.toUpperCase()] && (e.touchDeltaX = t.originalEvent.clientX - e.touchStartX), e._handleSwipe(), "hover" === e._config.pause && (e.pause(), e.touchTimeout && clearTimeout(e.touchTimeout), e.touchTimeout = setTimeout(function(t) {
                                    return e.cycle(t)
                                }, 500 + e._config.interval))
                            };
                        i(this._element.querySelectorAll(".carousel-item img")).on(W.DRAG_START, function(e) {
                            return e.preventDefault()
                        }), this._pointerEvent ? (i(this._element).on(W.POINTERDOWN, function(e) {
                            return t(e)
                        }), i(this._element).on(W.POINTERUP, function(e) {
                            return o(e)
                        }), this._element.classList.add("pointer-event")) : (i(this._element).on(W.TOUCHSTART, function(e) {
                            return t(e)
                        }), i(this._element).on(W.TOUCHMOVE, function(t) {
                            var i;
                            (i = t).originalEvent.touches && 1 < i.originalEvent.touches.length ? e.touchDeltaX = 0 : e.touchDeltaX = i.originalEvent.touches[0].clientX - e.touchStartX
                        }), i(this._element).on(W.TOUCHEND, function(e) {
                            return o(e)
                        }))
                    }
                }, t._keydown = function(e) {
                    if (!/input|textarea/i.test(e.target.tagName)) switch (e.which) {
                        case 37:
                            e.preventDefault(), this.prev();
                            break;
                        case 39:
                            e.preventDefault(), this.next()
                    }
                }, t._getItemIndex = function(e) {
                    return this._items = e && e.parentNode ? [].slice.call(e.parentNode.querySelectorAll(".carousel-item")) : [], this._items.indexOf(e)
                }, t._getItemByDirection = function(e, t) {
                    var i = e === L,
                        o = e === P,
                        n = this._getItemIndex(t),
                        s = this._items.length - 1;
                    if ((o && 0 === n || i && n === s) && !this._config.wrap) return t;
                    var r = (n + (e === P ? -1 : 1)) % this._items.length;
                    return -1 === r ? this._items[this._items.length - 1] : this._items[r]
                }, t._triggerSlideEvent = function(e, t) {
                    var o = this._getItemIndex(e),
                        n = this._getItemIndex(this._element.querySelector(D)),
                        s = i.Event(W.SLIDE, {
                            relatedTarget: e,
                            direction: t,
                            from: n,
                            to: o
                        });
                    return i(this._element).trigger(s), s
                }, t._setActiveIndicatorElement = function(e) {
                    if (this._indicatorsElement) {
                        var t = [].slice.call(this._indicatorsElement.querySelectorAll(".active"));
                        i(t).removeClass(I);
                        var o = this._indicatorsElement.children[this._getItemIndex(e)];
                        o && i(o).addClass(I)
                    }
                }, t._slide = function(e, t) {
                    var o, n, s, r = this,
                        a = this._element.querySelector(D),
                        c = this._getItemIndex(a),
                        d = t || a && this._getItemByDirection(e, a),
                        u = this._getItemIndex(d),
                        h = Boolean(this._interval);
                    if (s = e === L ? (o = "carousel-item-left", n = "carousel-item-next", "left") : (o = "carousel-item-right", n = "carousel-item-prev", "right"), d && i(d).hasClass(I)) this._isSliding = !1;
                    else if (!this._triggerSlideEvent(d, s).isDefaultPrevented() && a && d) {
                        this._isSliding = !0, h && this.pause(), this._setActiveIndicatorElement(d);
                        var p = i.Event(W.SLID, {
                            relatedTarget: d,
                            direction: s,
                            from: c,
                            to: u
                        });
                        if (i(this._element).hasClass("slide")) {
                            i(d).addClass(n), l.reflow(d), i(a).addClass(o), i(d).addClass(o);
                            var f = parseInt(d.getAttribute("data-interval"), 10);
                            this._config.interval = f ? (this._config.defaultInterval = this._config.defaultInterval || this._config.interval, f) : this._config.defaultInterval || this._config.interval;
                            var m = l.getTransitionDurationFromElement(a);
                            i(a).one(l.TRANSITION_END, function() {
                                i(d).removeClass(o + " " + n).addClass(I), i(a).removeClass(I + " " + n + " " + o), r._isSliding = !1, setTimeout(function() {
                                    return i(r._element).trigger(p)
                                }, 0)
                            }).emulateTransitionEnd(m)
                        } else i(a).removeClass(I), i(d).addClass(I), this._isSliding = !1, i(this._element).trigger(p);
                        h && this.cycle()
                    }
                }, e._jQueryInterface = function(t) {
                    return this.each(function() {
                        var o = i(this).data(k),
                            n = s({}, O, i(this).data());
                        "object" == typeof t && (n = s({}, n, t));
                        var r = "string" == typeof t ? t : n.slide;
                        if (o || (o = new e(this, n), i(this).data(k, o)), "number" == typeof t) o.to(t);
                        else if ("string" == typeof r) {
                            if (void 0 === o[r]) throw new TypeError('No method named "' + r + '"');
                            o[r]()
                        } else n.interval && (o.pause(), o.cycle())
                    })
                }, e._dataApiClickHandler = function(t) {
                    var o = l.getSelectorFromElement(this);
                    if (o) {
                        var n = i(o)[0];
                        if (n && i(n).hasClass("carousel")) {
                            var r = s({}, i(n).data(), i(this).data()),
                                a = this.getAttribute("data-slide-to");
                            a && (r.interval = !1), e._jQueryInterface.call(i(n), r), a && i(n).data(k).to(a), t.preventDefault()
                        }
                    }
                }, n(e, null, [{
                    key: "VERSION",
                    get: function() {
                        return "4.2.1"
                    }
                }, {
                    key: "Default",
                    get: function() {
                        return O
                    }
                }]), e
            }();
        i(document).on(W.CLICK_DATA_API, "[data-slide], [data-slide-to]", j._dataApiClickHandler), i(window).on(W.LOAD_DATA_API, function() {
            for (var e = [].slice.call(document.querySelectorAll('[data-ride="carousel"]')), t = 0, o = e.length; t < o; t++) {
                var n = i(e[t]);
                j._jQueryInterface.call(n, n.data())
            }
        }), i.fn[C] = j._jQueryInterface, i.fn[C].Constructor = j, i.fn[C].noConflict = function() {
            return i.fn[C] = A, j._jQueryInterface
        };
        var F = "collapse",
            M = "bs.collapse",
            B = "." + M,
            R = i.fn[F],
            V = {
                toggle: !0,
                parent: ""
            },
            q = {
                toggle: "boolean",
                parent: "(string|element)"
            },
            U = {
                SHOW: "show" + B,
                SHOWN: "shown" + B,
                HIDE: "hide" + B,
                HIDDEN: "hidden" + B,
                CLICK_DATA_API: "click" + B + ".data-api"
            },
            Q = "show",
            Y = "collapse",
            Z = "collapsing",
            X = "collapsed",
            K = '[data-toggle="collapse"]',
            G = function() {
                function e(e, t) {
                    this._isTransitioning = !1, this._element = e, this._config = this._getConfig(t), this._triggerArray = [].slice.call(document.querySelectorAll('[data-toggle="collapse"][href="#' + e.id + '"],[data-toggle="collapse"][data-target="#' + e.id + '"]'));
                    for (var i = [].slice.call(document.querySelectorAll(K)), o = 0, n = i.length; o < n; o++) {
                        var s = i[o],
                            r = l.getSelectorFromElement(s),
                            a = [].slice.call(document.querySelectorAll(r)).filter(function(t) {
                                return t === e
                            });
                        null !== r && 0 < a.length && (this._selector = r, this._triggerArray.push(s))
                    }
                    this._parent = this._config.parent ? this._getParent() : null, this._config.parent || this._addAriaAndCollapsedClass(this._element, this._triggerArray), this._config.toggle && this.toggle()
                }
                var t = e.prototype;
                return t.toggle = function() {
                    i(this._element).hasClass(Q) ? this.hide() : this.show()
                }, t.show = function() {
                    var t, o, n = this;
                    if (!(this._isTransitioning || i(this._element).hasClass(Q) || (this._parent && 0 === (t = [].slice.call(this._parent.querySelectorAll(".show, .collapsing")).filter(function(e) {
                            return "string" == typeof n._config.parent ? e.getAttribute("data-parent") === n._config.parent : e.classList.contains(Y)
                        })).length && (t = null), t && (o = i(t).not(this._selector).data(M)) && o._isTransitioning))) {
                        var s = i.Event(U.SHOW);
                        if (i(this._element).trigger(s), !s.isDefaultPrevented()) {
                            t && (e._jQueryInterface.call(i(t).not(this._selector), "hide"), o || i(t).data(M, null));
                            var r = this._getDimension();
                            i(this._element).removeClass(Y).addClass(Z), this._element.style[r] = 0, this._triggerArray.length && i(this._triggerArray).removeClass(X).attr("aria-expanded", !0), this.setTransitioning(!0);
                            var a = "scroll" + (r[0].toUpperCase() + r.slice(1)),
                                c = l.getTransitionDurationFromElement(this._element);
                            i(this._element).one(l.TRANSITION_END, function() {
                                i(n._element).removeClass(Z).addClass(Y).addClass(Q), n._element.style[r] = "", n.setTransitioning(!1), i(n._element).trigger(U.SHOWN)
                            }).emulateTransitionEnd(c), this._element.style[r] = this._element[a] + "px"
                        }
                    }
                }, t.hide = function() {
                    var e = this;
                    if (!this._isTransitioning && i(this._element).hasClass(Q)) {
                        var t = i.Event(U.HIDE);
                        if (i(this._element).trigger(t), !t.isDefaultPrevented()) {
                            var o = this._getDimension();
                            this._element.style[o] = this._element.getBoundingClientRect()[o] + "px", l.reflow(this._element), i(this._element).addClass(Z).removeClass(Y).removeClass(Q);
                            var n = this._triggerArray.length;
                            if (0 < n)
                                for (var s = 0; s < n; s++) {
                                    var r = this._triggerArray[s],
                                        a = l.getSelectorFromElement(r);
                                    null !== a && (i([].slice.call(document.querySelectorAll(a))).hasClass(Q) || i(r).addClass(X).attr("aria-expanded", !1))
                                }
                            this.setTransitioning(!0), this._element.style[o] = "";
                            var c = l.getTransitionDurationFromElement(this._element);
                            i(this._element).one(l.TRANSITION_END, function() {
                                e.setTransitioning(!1), i(e._element).removeClass(Z).addClass(Y).trigger(U.HIDDEN)
                            }).emulateTransitionEnd(c)
                        }
                    }
                }, t.setTransitioning = function(e) {
                    this._isTransitioning = e
                }, t.dispose = function() {
                    i.removeData(this._element, M), this._config = null, this._parent = null, this._element = null, this._triggerArray = null, this._isTransitioning = null
                }, t._getConfig = function(e) {
                    return (e = s({}, V, e)).toggle = Boolean(e.toggle), l.typeCheckConfig(F, e, q), e
                }, t._getDimension = function() {
                    return i(this._element).hasClass("width") ? "width" : "height"
                }, t._getParent = function() {
                    var t, o = this;
                    l.isElement(this._config.parent) ? (t = this._config.parent, void 0 !== this._config.parent.jquery && (t = this._config.parent[0])) : t = document.querySelector(this._config.parent);
                    var n = '[data-toggle="collapse"][data-parent="' + this._config.parent + '"]',
                        s = [].slice.call(t.querySelectorAll(n));
                    return i(s).each(function(t, i) {
                        o._addAriaAndCollapsedClass(e._getTargetFromElement(i), [i])
                    }), t
                }, t._addAriaAndCollapsedClass = function(e, t) {
                    var o = i(e).hasClass(Q);
                    t.length && i(t).toggleClass(X, !o).attr("aria-expanded", o)
                }, e._getTargetFromElement = function(e) {
                    var t = l.getSelectorFromElement(e);
                    return t ? document.querySelector(t) : null
                }, e._jQueryInterface = function(t) {
                    return this.each(function() {
                        var o = i(this),
                            n = o.data(M),
                            r = s({}, V, o.data(), "object" == typeof t && t ? t : {});
                        if (!n && r.toggle && /show|hide/.test(t) && (r.toggle = !1), n || (n = new e(this, r), o.data(M, n)), "string" == typeof t) {
                            if (void 0 === n[t]) throw new TypeError('No method named "' + t + '"');
                            n[t]()
                        }
                    })
                }, n(e, null, [{
                    key: "VERSION",
                    get: function() {
                        return "4.2.1"
                    }
                }, {
                    key: "Default",
                    get: function() {
                        return V
                    }
                }]), e
            }();
        i(document).on(U.CLICK_DATA_API, K, function(e) {
            "A" === e.currentTarget.tagName && e.preventDefault();
            var t = i(this),
                o = l.getSelectorFromElement(this),
                n = [].slice.call(document.querySelectorAll(o));
            i(n).each(function() {
                var e = i(this),
                    o = e.data(M) ? "toggle" : t.data();
                G._jQueryInterface.call(e, o)
            })
        }), i.fn[F] = G._jQueryInterface, i.fn[F].Constructor = G, i.fn[F].noConflict = function() {
            return i.fn[F] = R, G._jQueryInterface
        };
        var J = "dropdown",
            ee = "bs.dropdown",
            te = "." + ee,
            ie = ".data-api",
            oe = i.fn[J],
            ne = new RegExp("38|40|27"),
            se = {
                HIDE: "hide" + te,
                HIDDEN: "hidden" + te,
                SHOW: "show" + te,
                SHOWN: "shown" + te,
                CLICK: "click" + te,
                CLICK_DATA_API: "click" + te + ie,
                KEYDOWN_DATA_API: "keydown" + te + ie,
                KEYUP_DATA_API: "keyup" + te + ie
            },
            re = "disabled",
            ae = "show",
            le = "dropdown-menu-right",
            ce = '[data-toggle="dropdown"]',
            de = ".dropdown-menu",
            ue = {
                offset: 0,
                flip: !0,
                boundary: "scrollParent",
                reference: "toggle",
                display: "dynamic"
            },
            he = {
                offset: "(number|string|function)",
                flip: "boolean",
                boundary: "(string|element)",
                reference: "(string|element)",
                display: "string"
            },
            pe = function() {
                function e(e, t) {
                    this._element = e, this._popper = null, this._config = this._getConfig(t), this._menu = this._getMenuElement(), this._inNavbar = this._detectNavbar(), this._addEventListeners()
                }
                var o = e.prototype;
                return o.toggle = function() {
                    if (!this._element.disabled && !i(this._element).hasClass(re)) {
                        var o = e._getParentFromElement(this._element),
                            n = i(this._menu).hasClass(ae);
                        if (e._clearMenus(), !n) {
                            var s = {
                                    relatedTarget: this._element
                                },
                                r = i.Event(se.SHOW, s);
                            if (i(o).trigger(r), !r.isDefaultPrevented()) {
                                if (!this._inNavbar) {
                                    if (void 0 === t) throw new TypeError("Bootstrap's dropdowns require Popper.js (https://popper.js.org/)");
                                    var a = this._element;
                                    "parent" === this._config.reference ? a = o : l.isElement(this._config.reference) && (a = this._config.reference, void 0 !== this._config.reference.jquery && (a = this._config.reference[0])), "scrollParent" !== this._config.boundary && i(o).addClass("position-static"), this._popper = new t(a, this._menu, this._getPopperConfig())
                                }
                                "ontouchstart" in document.documentElement && 0 === i(o).closest(".navbar-nav").length && i(document.body).children().on("mouseover", null, i.noop), this._element.focus(), this._element.setAttribute("aria-expanded", !0), i(this._menu).toggleClass(ae), i(o).toggleClass(ae).trigger(i.Event(se.SHOWN, s))
                            }
                        }
                    }
                }, o.show = function() {
                    if (!(this._element.disabled || i(this._element).hasClass(re) || i(this._menu).hasClass(ae))) {
                        var t = {
                                relatedTarget: this._element
                            },
                            o = i.Event(se.SHOW, t),
                            n = e._getParentFromElement(this._element);
                        i(n).trigger(o), o.isDefaultPrevented() || (i(this._menu).toggleClass(ae), i(n).toggleClass(ae).trigger(i.Event(se.SHOWN, t)))
                    }
                }, o.hide = function() {
                    if (!this._element.disabled && !i(this._element).hasClass(re) && i(this._menu).hasClass(ae)) {
                        var t = {
                                relatedTarget: this._element
                            },
                            o = i.Event(se.HIDE, t),
                            n = e._getParentFromElement(this._element);
                        i(n).trigger(o), o.isDefaultPrevented() || (i(this._menu).toggleClass(ae), i(n).toggleClass(ae).trigger(i.Event(se.HIDDEN, t)))
                    }
                }, o.dispose = function() {
                    i.removeData(this._element, ee), i(this._element).off(te), this._element = null, (this._menu = null) !== this._popper && (this._popper.destroy(), this._popper = null)
                }, o.update = function() {
                    this._inNavbar = this._detectNavbar(), null !== this._popper && this._popper.scheduleUpdate()
                }, o._addEventListeners = function() {
                    var e = this;
                    i(this._element).on(se.CLICK, function(t) {
                        t.preventDefault(), t.stopPropagation(), e.toggle()
                    })
                }, o._getConfig = function(e) {
                    return e = s({}, this.constructor.Default, i(this._element).data(), e), l.typeCheckConfig(J, e, this.constructor.DefaultType), e
                }, o._getMenuElement = function() {
                    if (!this._menu) {
                        var t = e._getParentFromElement(this._element);
                        t && (this._menu = t.querySelector(de))
                    }
                    return this._menu
                }, o._getPlacement = function() {
                    var e = i(this._element.parentNode),
                        t = "bottom-start";
                    return e.hasClass("dropup") ? (t = "top-start", i(this._menu).hasClass(le) && (t = "top-end")) : e.hasClass("dropright") ? t = "right-start" : e.hasClass("dropleft") ? t = "left-start" : i(this._menu).hasClass(le) && (t = "bottom-end"), t
                }, o._detectNavbar = function() {
                    return 0 < i(this._element).closest(".navbar").length
                }, o._getPopperConfig = function() {
                    var e = this,
                        t = {};
                    "function" == typeof this._config.offset ? t.fn = function(t) {
                        return t.offsets = s({}, t.offsets, e._config.offset(t.offsets) || {}), t
                    } : t.offset = this._config.offset;
                    var i = {
                        placement: this._getPlacement(),
                        modifiers: {
                            offset: t,
                            flip: {
                                enabled: this._config.flip
                            },
                            preventOverflow: {
                                boundariesElement: this._config.boundary
                            }
                        }
                    };
                    return "static" === this._config.display && (i.modifiers.applyStyle = {
                        enabled: !1
                    }), i
                }, e._jQueryInterface = function(t) {
                    return this.each(function() {
                        var o = i(this).data(ee);
                        if (o || (o = new e(this, "object" == typeof t ? t : null), i(this).data(ee, o)), "string" == typeof t) {
                            if (void 0 === o[t]) throw new TypeError('No method named "' + t + '"');
                            o[t]()
                        }
                    })
                }, e._clearMenus = function(t) {
                    if (!t || 3 !== t.which && ("keyup" !== t.type || 9 === t.which))
                        for (var o = [].slice.call(document.querySelectorAll(ce)), n = 0, s = o.length; n < s; n++) {
                            var r = e._getParentFromElement(o[n]),
                                a = i(o[n]).data(ee),
                                l = {
                                    relatedTarget: o[n]
                                };
                            if (t && "click" === t.type && (l.clickEvent = t), a) {
                                var c = a._menu;
                                if (i(r).hasClass(ae) && !(t && ("click" === t.type && /input|textarea/i.test(t.target.tagName) || "keyup" === t.type && 9 === t.which) && i.contains(r, t.target))) {
                                    var d = i.Event(se.HIDE, l);
                                    i(r).trigger(d), d.isDefaultPrevented() || ("ontouchstart" in document.documentElement && i(document.body).children().off("mouseover", null, i.noop), o[n].setAttribute("aria-expanded", "false"), i(c).removeClass(ae), i(r).removeClass(ae).trigger(i.Event(se.HIDDEN, l)))
                                }
                            }
                        }
                }, e._getParentFromElement = function(e) {
                    var t, i = l.getSelectorFromElement(e);
                    return i && (t = document.querySelector(i)), t || e.parentNode
                }, e._dataApiKeydownHandler = function(t) {
                    if ((/input|textarea/i.test(t.target.tagName) ? !(32 === t.which || 27 !== t.which && (40 !== t.which && 38 !== t.which || i(t.target).closest(de).length)) : ne.test(t.which)) && (t.preventDefault(), t.stopPropagation(), !this.disabled && !i(this).hasClass(re))) {
                        var o = e._getParentFromElement(this),
                            n = i(o).hasClass(ae);
                        if (n && (!n || 27 !== t.which && 32 !== t.which)) {
                            var s = [].slice.call(o.querySelectorAll(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)"));
                            if (0 !== s.length) {
                                var r = s.indexOf(t.target);
                                38 === t.which && 0 < r && r--, 40 === t.which && r < s.length - 1 && r++, r < 0 && (r = 0), s[r].focus()
                            }
                        } else {
                            if (27 === t.which) {
                                var a = o.querySelector(ce);
                                i(a).trigger("focus")
                            }
                            i(this).trigger("click")
                        }
                    }
                }, n(e, null, [{
                    key: "VERSION",
                    get: function() {
                        return "4.2.1"
                    }
                }, {
                    key: "Default",
                    get: function() {
                        return ue
                    }
                }, {
                    key: "DefaultType",
                    get: function() {
                        return he
                    }
                }]), e
            }();
        i(document).on(se.KEYDOWN_DATA_API, ce, pe._dataApiKeydownHandler).on(se.KEYDOWN_DATA_API, de, pe._dataApiKeydownHandler).on(se.CLICK_DATA_API + " " + se.KEYUP_DATA_API, pe._clearMenus).on(se.CLICK_DATA_API, ce, function(e) {
            e.preventDefault(), e.stopPropagation(), pe._jQueryInterface.call(i(this), "toggle")
        }).on(se.CLICK_DATA_API, ".dropdown form", function(e) {
            e.stopPropagation()
        }), i.fn[J] = pe._jQueryInterface, i.fn[J].Constructor = pe, i.fn[J].noConflict = function() {
            return i.fn[J] = oe, pe._jQueryInterface
        };
        var fe = "modal",
            me = "bs.modal",
            ge = "." + me,
            ve = i.fn[fe],
            ye = {
                backdrop: !0,
                keyboard: !0,
                focus: !0,
                show: !0
            },
            we = {
                backdrop: "(boolean|string)",
                keyboard: "boolean",
                focus: "boolean",
                show: "boolean"
            },
            be = {
                HIDE: "hide" + ge,
                HIDDEN: "hidden" + ge,
                SHOW: "show" + ge,
                SHOWN: "shown" + ge,
                FOCUSIN: "focusin" + ge,
                RESIZE: "resize" + ge,
                CLICK_DISMISS: "click.dismiss" + ge,
                KEYDOWN_DISMISS: "keydown.dismiss" + ge,
                MOUSEUP_DISMISS: "mouseup.dismiss" + ge,
                MOUSEDOWN_DISMISS: "mousedown.dismiss" + ge,
                CLICK_DATA_API: "click" + ge + ".data-api"
            },
            _e = "modal-open",
            xe = "fade",
            Se = "show",
            Te = ".modal-dialog",
            Ce = ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",
            ke = ".sticky-top",
            ze = function() {
                function e(e, t) {
                    this._config = this._getConfig(t), this._element = e, this._dialog = e.querySelector(Te), this._backdrop = null, this._isShown = !1, this._isBodyOverflowing = !1, this._ignoreBackdropClick = !1, this._isTransitioning = !1, this._scrollbarWidth = 0
                }
                var t = e.prototype;
                return t.toggle = function(e) {
                    return this._isShown ? this.hide() : this.show(e)
                }, t.show = function(e) {
                    var t = this;
                    if (!this._isShown && !this._isTransitioning) {
                        i(this._element).hasClass(xe) && (this._isTransitioning = !0);
                        var o = i.Event(be.SHOW, {
                            relatedTarget: e
                        });
                        i(this._element).trigger(o), this._isShown || o.isDefaultPrevented() || (this._isShown = !0, this._checkScrollbar(), this._setScrollbar(), this._adjustDialog(), this._setEscapeEvent(), this._setResizeEvent(), i(this._element).on(be.CLICK_DISMISS, '[data-dismiss="modal"]', function(e) {
                            return t.hide(e)
                        }), i(this._dialog).on(be.MOUSEDOWN_DISMISS, function() {
                            i(t._element).one(be.MOUSEUP_DISMISS, function(e) {
                                i(e.target).is(t._element) && (t._ignoreBackdropClick = !0)
                            })
                        }), this._showBackdrop(function() {
                            return t._showElement(e)
                        }))
                    }
                }, t.hide = function(e) {
                    var t = this;
                    if (e && e.preventDefault(), this._isShown && !this._isTransitioning) {
                        var o = i.Event(be.HIDE);
                        if (i(this._element).trigger(o), this._isShown && !o.isDefaultPrevented()) {
                            this._isShown = !1;
                            var n = i(this._element).hasClass(xe);
                            if (n && (this._isTransitioning = !0), this._setEscapeEvent(), this._setResizeEvent(), i(document).off(be.FOCUSIN), i(this._element).removeClass(Se), i(this._element).off(be.CLICK_DISMISS), i(this._dialog).off(be.MOUSEDOWN_DISMISS), n) {
                                var s = l.getTransitionDurationFromElement(this._element);
                                i(this._element).one(l.TRANSITION_END, function(e) {
                                    return t._hideModal(e)
                                }).emulateTransitionEnd(s)
                            } else this._hideModal()
                        }
                    }
                }, t.dispose = function() {
                    [window, this._element, this._dialog].forEach(function(e) {
                        return i(e).off(ge)
                    }), i(document).off(be.FOCUSIN), i.removeData(this._element, me), this._config = null, this._element = null, this._dialog = null, this._backdrop = null, this._isShown = null, this._isBodyOverflowing = null, this._ignoreBackdropClick = null, this._isTransitioning = null, this._scrollbarWidth = null
                }, t.handleUpdate = function() {
                    this._adjustDialog()
                }, t._getConfig = function(e) {
                    return e = s({}, ye, e), l.typeCheckConfig(fe, e, we), e
                }, t._showElement = function(e) {
                    var t = this,
                        o = i(this._element).hasClass(xe);
                    this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE || document.body.appendChild(this._element), this._element.style.display = "block", this._element.removeAttribute("aria-hidden"), this._element.setAttribute("aria-modal", !0), this._element.scrollTop = 0, o && l.reflow(this._element), i(this._element).addClass(Se), this._config.focus && this._enforceFocus();
                    var n = i.Event(be.SHOWN, {
                            relatedTarget: e
                        }),
                        s = function() {
                            t._config.focus && t._element.focus(), t._isTransitioning = !1, i(t._element).trigger(n)
                        };
                    if (o) {
                        var r = l.getTransitionDurationFromElement(this._dialog);
                        i(this._dialog).one(l.TRANSITION_END, s).emulateTransitionEnd(r)
                    } else s()
                }, t._enforceFocus = function() {
                    var e = this;
                    i(document).off(be.FOCUSIN).on(be.FOCUSIN, function(t) {
                        document !== t.target && e._element !== t.target && 0 === i(e._element).has(t.target).length && e._element.focus()
                    })
                }, t._setEscapeEvent = function() {
                    var e = this;
                    this._isShown && this._config.keyboard ? i(this._element).on(be.KEYDOWN_DISMISS, function(t) {
                        27 === t.which && (t.preventDefault(), e.hide())
                    }) : this._isShown || i(this._element).off(be.KEYDOWN_DISMISS)
                }, t._setResizeEvent = function() {
                    var e = this;
                    this._isShown ? i(window).on(be.RESIZE, function(t) {
                        return e.handleUpdate(t)
                    }) : i(window).off(be.RESIZE)
                }, t._hideModal = function() {
                    var e = this;
                    this._element.style.display = "none", this._element.setAttribute("aria-hidden", !0), this._element.removeAttribute("aria-modal"), this._isTransitioning = !1, this._showBackdrop(function() {
                        i(document.body).removeClass(_e), e._resetAdjustments(), e._resetScrollbar(), i(e._element).trigger(be.HIDDEN)
                    })
                }, t._removeBackdrop = function() {
                    this._backdrop && (i(this._backdrop).remove(), this._backdrop = null)
                }, t._showBackdrop = function(e) {
                    var t = this,
                        o = i(this._element).hasClass(xe) ? xe : "";
                    if (this._isShown && this._config.backdrop) {
                        if (this._backdrop = document.createElement("div"), this._backdrop.className = "modal-backdrop", o && this._backdrop.classList.add(o), i(this._backdrop).appendTo(document.body), i(this._element).on(be.CLICK_DISMISS, function(e) {
                                t._ignoreBackdropClick ? t._ignoreBackdropClick = !1 : e.target === e.currentTarget && ("static" === t._config.backdrop ? t._element.focus() : t.hide())
                            }), o && l.reflow(this._backdrop), i(this._backdrop).addClass(Se), !e) return;
                        if (!o) return void e();
                        var n = l.getTransitionDurationFromElement(this._backdrop);
                        i(this._backdrop).one(l.TRANSITION_END, e).emulateTransitionEnd(n)
                    } else if (!this._isShown && this._backdrop) {
                        i(this._backdrop).removeClass(Se);
                        var s = function() {
                            t._removeBackdrop(), e && e()
                        };
                        if (i(this._element).hasClass(xe)) {
                            var r = l.getTransitionDurationFromElement(this._backdrop);
                            i(this._backdrop).one(l.TRANSITION_END, s).emulateTransitionEnd(r)
                        } else s()
                    } else e && e()
                }, t._adjustDialog = function() {
                    var e = this._element.scrollHeight > document.documentElement.clientHeight;
                    !this._isBodyOverflowing && e && (this._element.style.paddingLeft = this._scrollbarWidth + "px"), this._isBodyOverflowing && !e && (this._element.style.paddingRight = this._scrollbarWidth + "px")
                }, t._resetAdjustments = function() {
                    this._element.style.paddingLeft = "", this._element.style.paddingRight = ""
                }, t._checkScrollbar = function() {
                    var e = document.body.getBoundingClientRect();
                    this._isBodyOverflowing = e.left + e.right < window.innerWidth, this._scrollbarWidth = this._getScrollbarWidth()
                }, t._setScrollbar = function() {
                    var e = this;
                    if (this._isBodyOverflowing) {
                        var t = [].slice.call(document.querySelectorAll(Ce)),
                            o = [].slice.call(document.querySelectorAll(ke));
                        i(t).each(function(t, o) {
                            var n = o.style.paddingRight,
                                s = i(o).css("padding-right");
                            i(o).data("padding-right", n).css("padding-right", parseFloat(s) + e._scrollbarWidth + "px")
                        }), i(o).each(function(t, o) {
                            var n = o.style.marginRight,
                                s = i(o).css("margin-right");
                            i(o).data("margin-right", n).css("margin-right", parseFloat(s) - e._scrollbarWidth + "px")
                        });
                        var n = document.body.style.paddingRight,
                            s = i(document.body).css("padding-right");
                        i(document.body).data("padding-right", n).css("padding-right", parseFloat(s) + this._scrollbarWidth + "px")
                    }
                    i(document.body).addClass(_e)
                }, t._resetScrollbar = function() {
                    var e = [].slice.call(document.querySelectorAll(Ce));
                    i(e).each(function(e, t) {
                        var o = i(t).data("padding-right");
                        i(t).removeData("padding-right"), t.style.paddingRight = o || ""
                    });
                    var t = [].slice.call(document.querySelectorAll("" + ke));
                    i(t).each(function(e, t) {
                        var o = i(t).data("margin-right");
                        void 0 !== o && i(t).css("margin-right", o).removeData("margin-right")
                    });
                    var o = i(document.body).data("padding-right");
                    i(document.body).removeData("padding-right"), document.body.style.paddingRight = o || ""
                }, t._getScrollbarWidth = function() {
                    var e = document.createElement("div");
                    e.className = "modal-scrollbar-measure", document.body.appendChild(e);
                    var t = e.getBoundingClientRect().width - e.clientWidth;
                    return document.body.removeChild(e), t
                }, e._jQueryInterface = function(t, o) {
                    return this.each(function() {
                        var n = i(this).data(me),
                            r = s({}, ye, i(this).data(), "object" == typeof t && t ? t : {});
                        if (n || (n = new e(this, r), i(this).data(me, n)), "string" == typeof t) {
                            if (void 0 === n[t]) throw new TypeError('No method named "' + t + '"');
                            n[t](o)
                        } else r.show && n.show(o)
                    })
                }, n(e, null, [{
                    key: "VERSION",
                    get: function() {
                        return "4.2.1"
                    }
                }, {
                    key: "Default",
                    get: function() {
                        return ye
                    }
                }]), e
            }();
        i(document).on(be.CLICK_DATA_API, '[data-toggle="modal"]', function(e) {
            var t, o = this,
                n = l.getSelectorFromElement(this);
            n && (t = document.querySelector(n));
            var r = i(t).data(me) ? "toggle" : s({}, i(t).data(), i(this).data());
            "A" !== this.tagName && "AREA" !== this.tagName || e.preventDefault();
            var a = i(t).one(be.SHOW, function(e) {
                e.isDefaultPrevented() || a.one(be.HIDDEN, function() {
                    i(o).is(":visible") && o.focus()
                })
            });
            ze._jQueryInterface.call(i(t), r, this)
        }), i.fn[fe] = ze._jQueryInterface, i.fn[fe].Constructor = ze, i.fn[fe].noConflict = function() {
            return i.fn[fe] = ve, ze._jQueryInterface
        };
        var Ee = "tooltip",
            Ae = "bs.tooltip",
            Oe = "." + Ae,
            $e = i.fn[Ee],
            Le = "bs-tooltip",
            Pe = new RegExp("(^|\\s)" + Le + "\\S+", "g"),
            We = {
                animation: "boolean",
                template: "string",
                title: "(string|element|function)",
                trigger: "string",
                delay: "(number|object)",
                html: "boolean",
                selector: "(string|boolean)",
                placement: "(string|function)",
                offset: "(number|string)",
                container: "(string|element|boolean)",
                fallbackPlacement: "(string|array)",
                boundary: "(string|element)"
            },
            Ie = {
                AUTO: "auto",
                TOP: "top",
                RIGHT: "right",
                BOTTOM: "bottom",
                LEFT: "left"
            },
            De = {
                animation: !0,
                template: '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
                trigger: "hover focus",
                title: "",
                delay: 0,
                html: !1,
                selector: !1,
                placement: "top",
                offset: 0,
                container: !1,
                fallbackPlacement: "flip",
                boundary: "scrollParent"
            },
            He = "show",
            Ne = {
                HIDE: "hide" + Oe,
                HIDDEN: "hidden" + Oe,
                SHOW: "show" + Oe,
                SHOWN: "shown" + Oe,
                INSERTED: "inserted" + Oe,
                CLICK: "click" + Oe,
                FOCUSIN: "focusin" + Oe,
                FOCUSOUT: "focusout" + Oe,
                MOUSEENTER: "mouseenter" + Oe,
                MOUSELEAVE: "mouseleave" + Oe
            },
            je = "fade",
            Fe = "show",
            Me = "hover",
            Be = "focus",
            Re = function() {
                function e(e, i) {
                    if (void 0 === t) throw new TypeError("Bootstrap's tooltips require Popper.js (https://popper.js.org/)");
                    this._isEnabled = !0, this._timeout = 0, this._hoverState = "", this._activeTrigger = {}, this._popper = null, this.element = e, this.config = this._getConfig(i), this.tip = null, this._setListeners()
                }
                var o = e.prototype;
                return o.enable = function() {
                    this._isEnabled = !0
                }, o.disable = function() {
                    this._isEnabled = !1
                }, o.toggleEnabled = function() {
                    this._isEnabled = !this._isEnabled
                }, o.toggle = function(e) {
                    if (this._isEnabled)
                        if (e) {
                            var t = this.constructor.DATA_KEY,
                                o = i(e.currentTarget).data(t);
                            o || (o = new this.constructor(e.currentTarget, this._getDelegateConfig()), i(e.currentTarget).data(t, o)), o._activeTrigger.click = !o._activeTrigger.click, o._isWithActiveTrigger() ? o._enter(null, o) : o._leave(null, o)
                        } else {
                            if (i(this.getTipElement()).hasClass(Fe)) return void this._leave(null, this);
                            this._enter(null, this)
                        }
                }, o.dispose = function() {
                    clearTimeout(this._timeout), i.removeData(this.element, this.constructor.DATA_KEY), i(this.element).off(this.constructor.EVENT_KEY), i(this.element).closest(".modal").off("hide.bs.modal"), this.tip && i(this.tip).remove(), this._isEnabled = null, this._timeout = null, this._hoverState = null, (this._activeTrigger = null) !== this._popper && this._popper.destroy(), this._popper = null, this.element = null, this.config = null, this.tip = null
                }, o.show = function() {
                    var e = this;
                    if ("none" === i(this.element).css("display")) throw new Error("Please use show on visible elements");
                    var o = i.Event(this.constructor.Event.SHOW);
                    if (this.isWithContent() && this._isEnabled) {
                        i(this.element).trigger(o);
                        var n = l.findShadowRoot(this.element),
                            s = i.contains(null !== n ? n : this.element.ownerDocument.documentElement, this.element);
                        if (o.isDefaultPrevented() || !s) return;
                        var r = this.getTipElement(),
                            a = l.getUID(this.constructor.NAME);
                        r.setAttribute("id", a), this.element.setAttribute("aria-describedby", a), this.setContent(), this.config.animation && i(r).addClass(je);
                        var c = "function" == typeof this.config.placement ? this.config.placement.call(this, r, this.element) : this.config.placement,
                            d = this._getAttachment(c);
                        this.addAttachmentClass(d);
                        var u = this._getContainer();
                        i(r).data(this.constructor.DATA_KEY, this), i.contains(this.element.ownerDocument.documentElement, this.tip) || i(r).appendTo(u), i(this.element).trigger(this.constructor.Event.INSERTED), this._popper = new t(this.element, r, {
                            placement: d,
                            modifiers: {
                                offset: {
                                    offset: this.config.offset
                                },
                                flip: {
                                    behavior: this.config.fallbackPlacement
                                },
                                arrow: {
                                    element: ".arrow"
                                },
                                preventOverflow: {
                                    boundariesElement: this.config.boundary
                                }
                            },
                            onCreate: function(t) {
                                t.originalPlacement !== t.placement && e._handlePopperPlacementChange(t)
                            },
                            onUpdate: function(t) {
                                return e._handlePopperPlacementChange(t)
                            }
                        }), i(r).addClass(Fe), "ontouchstart" in document.documentElement && i(document.body).children().on("mouseover", null, i.noop);
                        var h = function() {
                            e.config.animation && e._fixTransition();
                            var t = e._hoverState;
                            e._hoverState = null, i(e.element).trigger(e.constructor.Event.SHOWN), "out" === t && e._leave(null, e)
                        };
                        if (i(this.tip).hasClass(je)) {
                            var p = l.getTransitionDurationFromElement(this.tip);
                            i(this.tip).one(l.TRANSITION_END, h).emulateTransitionEnd(p)
                        } else h()
                    }
                }, o.hide = function(e) {
                    var t = this,
                        o = this.getTipElement(),
                        n = i.Event(this.constructor.Event.HIDE),
                        s = function() {
                            t._hoverState !== He && o.parentNode && o.parentNode.removeChild(o), t._cleanTipClass(), t.element.removeAttribute("aria-describedby"), i(t.element).trigger(t.constructor.Event.HIDDEN), null !== t._popper && t._popper.destroy(), e && e()
                        };
                    if (i(this.element).trigger(n), !n.isDefaultPrevented()) {
                        if (i(o).removeClass(Fe), "ontouchstart" in document.documentElement && i(document.body).children().off("mouseover", null, i.noop), this._activeTrigger.click = !1, this._activeTrigger[Be] = !1, this._activeTrigger[Me] = !1, i(this.tip).hasClass(je)) {
                            var r = l.getTransitionDurationFromElement(o);
                            i(o).one(l.TRANSITION_END, s).emulateTransitionEnd(r)
                        } else s();
                        this._hoverState = ""
                    }
                }, o.update = function() {
                    null !== this._popper && this._popper.scheduleUpdate()
                }, o.isWithContent = function() {
                    return Boolean(this.getTitle())
                }, o.addAttachmentClass = function(e) {
                    i(this.getTipElement()).addClass(Le + "-" + e)
                }, o.getTipElement = function() {
                    return this.tip = this.tip || i(this.config.template)[0], this.tip
                }, o.setContent = function() {
                    var e = this.getTipElement();
                    this.setElementContent(i(e.querySelectorAll(".tooltip-inner")), this.getTitle()), i(e).removeClass(je + " " + Fe)
                }, o.setElementContent = function(e, t) {
                    var o = this.config.html;
                    "object" == typeof t && (t.nodeType || t.jquery) ? o ? i(t).parent().is(e) || e.empty().append(t) : e.text(i(t).text()) : e[o ? "html" : "text"](t)
                }, o.getTitle = function() {
                    var e = this.element.getAttribute("data-original-title");
                    return e || (e = "function" == typeof this.config.title ? this.config.title.call(this.element) : this.config.title), e
                }, o._getContainer = function() {
                    return !1 === this.config.container ? document.body : l.isElement(this.config.container) ? i(this.config.container) : i(document).find(this.config.container)
                }, o._getAttachment = function(e) {
                    return Ie[e.toUpperCase()]
                }, o._setListeners = function() {
                    var e = this;
                    this.config.trigger.split(" ").forEach(function(t) {
                        if ("click" === t) i(e.element).on(e.constructor.Event.CLICK, e.config.selector, function(t) {
                            return e.toggle(t)
                        });
                        else if ("manual" !== t) {
                            var o = t === Me ? e.constructor.Event.MOUSEENTER : e.constructor.Event.FOCUSIN,
                                n = t === Me ? e.constructor.Event.MOUSELEAVE : e.constructor.Event.FOCUSOUT;
                            i(e.element).on(o, e.config.selector, function(t) {
                                return e._enter(t)
                            }).on(n, e.config.selector, function(t) {
                                return e._leave(t)
                            })
                        }
                    }), i(this.element).closest(".modal").on("hide.bs.modal", function() {
                        e.element && e.hide()
                    }), this.config.selector ? this.config = s({}, this.config, {
                        trigger: "manual",
                        selector: ""
                    }) : this._fixTitle()
                }, o._fixTitle = function() {
                    var e = typeof this.element.getAttribute("data-original-title");
                    (this.element.getAttribute("title") || "string" !== e) && (this.element.setAttribute("data-original-title", this.element.getAttribute("title") || ""), this.element.setAttribute("title", ""))
                }, o._enter = function(e, t) {
                    var o = this.constructor.DATA_KEY;
                    (t = t || i(e.currentTarget).data(o)) || (t = new this.constructor(e.currentTarget, this._getDelegateConfig()), i(e.currentTarget).data(o, t)), e && (t._activeTrigger["focusin" === e.type ? Be : Me] = !0), i(t.getTipElement()).hasClass(Fe) || t._hoverState === He ? t._hoverState = He : (clearTimeout(t._timeout), t._hoverState = He, t.config.delay && t.config.delay.show ? t._timeout = setTimeout(function() {
                        t._hoverState === He && t.show()
                    }, t.config.delay.show) : t.show())
                }, o._leave = function(e, t) {
                    var o = this.constructor.DATA_KEY;
                    (t = t || i(e.currentTarget).data(o)) || (t = new this.constructor(e.currentTarget, this._getDelegateConfig()), i(e.currentTarget).data(o, t)), e && (t._activeTrigger["focusout" === e.type ? Be : Me] = !1), t._isWithActiveTrigger() || (clearTimeout(t._timeout), t._hoverState = "out", t.config.delay && t.config.delay.hide ? t._timeout = setTimeout(function() {
                        "out" === t._hoverState && t.hide()
                    }, t.config.delay.hide) : t.hide())
                }, o._isWithActiveTrigger = function() {
                    for (var e in this._activeTrigger)
                        if (this._activeTrigger[e]) return !0;
                    return !1
                }, o._getConfig = function(e) {
                    return "number" == typeof(e = s({}, this.constructor.Default, i(this.element).data(), "object" == typeof e && e ? e : {})).delay && (e.delay = {
                        show: e.delay,
                        hide: e.delay
                    }), "number" == typeof e.title && (e.title = e.title.toString()), "number" == typeof e.content && (e.content = e.content.toString()), l.typeCheckConfig(Ee, e, this.constructor.DefaultType), e
                }, o._getDelegateConfig = function() {
                    var e = {};
                    if (this.config)
                        for (var t in this.config) this.constructor.Default[t] !== this.config[t] && (e[t] = this.config[t]);
                    return e
                }, o._cleanTipClass = function() {
                    var e = i(this.getTipElement()),
                        t = e.attr("class").match(Pe);
                    null !== t && t.length && e.removeClass(t.join(""))
                }, o._handlePopperPlacementChange = function(e) {
                    var t = e.instance;
                    this.tip = t.popper, this._cleanTipClass(), this.addAttachmentClass(this._getAttachment(e.placement))
                }, o._fixTransition = function() {
                    var e = this.getTipElement(),
                        t = this.config.animation;
                    null === e.getAttribute("x-placement") && (i(e).removeClass(je), this.config.animation = !1, this.hide(), this.show(), this.config.animation = t)
                }, e._jQueryInterface = function(t) {
                    return this.each(function() {
                        var o = i(this).data(Ae),
                            n = "object" == typeof t && t;
                        if ((o || !/dispose|hide/.test(t)) && (o || (o = new e(this, n), i(this).data(Ae, o)), "string" == typeof t)) {
                            if (void 0 === o[t]) throw new TypeError('No method named "' + t + '"');
                            o[t]()
                        }
                    })
                }, n(e, null, [{
                    key: "VERSION",
                    get: function() {
                        return "4.2.1"
                    }
                }, {
                    key: "Default",
                    get: function() {
                        return De
                    }
                }, {
                    key: "NAME",
                    get: function() {
                        return Ee
                    }
                }, {
                    key: "DATA_KEY",
                    get: function() {
                        return Ae
                    }
                }, {
                    key: "Event",
                    get: function() {
                        return Ne
                    }
                }, {
                    key: "EVENT_KEY",
                    get: function() {
                        return Oe
                    }
                }, {
                    key: "DefaultType",
                    get: function() {
                        return We
                    }
                }]), e
            }();
        i.fn[Ee] = Re._jQueryInterface, i.fn[Ee].Constructor = Re, i.fn[Ee].noConflict = function() {
            return i.fn[Ee] = $e, Re._jQueryInterface
        };
        var Ve = "popover",
            qe = "bs.popover",
            Ue = "." + qe,
            Qe = i.fn[Ve],
            Ye = "bs-popover",
            Ze = new RegExp("(^|\\s)" + Ye + "\\S+", "g"),
            Xe = s({}, Re.Default, {
                placement: "right",
                trigger: "click",
                content: "",
                template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
            }),
            Ke = s({}, Re.DefaultType, {
                content: "(string|element|function)"
            }),
            Ge = {
                HIDE: "hide" + Ue,
                HIDDEN: "hidden" + Ue,
                SHOW: "show" + Ue,
                SHOWN: "shown" + Ue,
                INSERTED: "inserted" + Ue,
                CLICK: "click" + Ue,
                FOCUSIN: "focusin" + Ue,
                FOCUSOUT: "focusout" + Ue,
                MOUSEENTER: "mouseenter" + Ue,
                MOUSELEAVE: "mouseleave" + Ue
            },
            Je = function(e) {
                function t() {
                    return e.apply(this, arguments) || this
                }
                var o, s;
                s = e, (o = t).prototype = Object.create(s.prototype), (o.prototype.constructor = o).__proto__ = s;
                var r = t.prototype;
                return r.isWithContent = function() {
                    return this.getTitle() || this._getContent()
                }, r.addAttachmentClass = function(e) {
                    i(this.getTipElement()).addClass(Ye + "-" + e)
                }, r.getTipElement = function() {
                    return this.tip = this.tip || i(this.config.template)[0], this.tip
                }, r.setContent = function() {
                    var e = i(this.getTipElement());
                    this.setElementContent(e.find(".popover-header"), this.getTitle());
                    var t = this._getContent();
                    "function" == typeof t && (t = t.call(this.element)), this.setElementContent(e.find(".popover-body"), t), e.removeClass("fade show")
                }, r._getContent = function() {
                    return this.element.getAttribute("data-content") || this.config.content
                }, r._cleanTipClass = function() {
                    var e = i(this.getTipElement()),
                        t = e.attr("class").match(Ze);
                    null !== t && 0 < t.length && e.removeClass(t.join(""))
                }, t._jQueryInterface = function(e) {
                    return this.each(function() {
                        var o = i(this).data(qe),
                            n = "object" == typeof e ? e : null;
                        if ((o || !/dispose|hide/.test(e)) && (o || (o = new t(this, n), i(this).data(qe, o)), "string" == typeof e)) {
                            if (void 0 === o[e]) throw new TypeError('No method named "' + e + '"');
                            o[e]()
                        }
                    })
                }, n(t, null, [{
                    key: "VERSION",
                    get: function() {
                        return "4.2.1"
                    }
                }, {
                    key: "Default",
                    get: function() {
                        return Xe
                    }
                }, {
                    key: "NAME",
                    get: function() {
                        return Ve
                    }
                }, {
                    key: "DATA_KEY",
                    get: function() {
                        return qe
                    }
                }, {
                    key: "Event",
                    get: function() {
                        return Ge
                    }
                }, {
                    key: "EVENT_KEY",
                    get: function() {
                        return Ue
                    }
                }, {
                    key: "DefaultType",
                    get: function() {
                        return Ke
                    }
                }]), t
            }(Re);
        i.fn[Ve] = Je._jQueryInterface, i.fn[Ve].Constructor = Je, i.fn[Ve].noConflict = function() {
            return i.fn[Ve] = Qe, Je._jQueryInterface
        };
        var et = "scrollspy",
            tt = "bs.scrollspy",
            it = "." + tt,
            ot = i.fn[et],
            nt = {
                offset: 10,
                method: "auto",
                target: ""
            },
            st = {
                offset: "number",
                method: "string",
                target: "(string|element)"
            },
            rt = {
                ACTIVATE: "activate" + it,
                SCROLL: "scroll" + it,
                LOAD_DATA_API: "load" + it + ".data-api"
            },
            at = "active",
            lt = ".nav, .list-group",
            ct = ".nav-link",
            dt = ".list-group-item",
            ut = ".dropdown-item",
            ht = "position",
            pt = function() {
                function e(e, t) {
                    var o = this;
                    this._element = e, this._scrollElement = "BODY" === e.tagName ? window : e, this._config = this._getConfig(t), this._selector = this._config.target + " " + ct + "," + this._config.target + " " + dt + "," + this._config.target + " " + ut, this._offsets = [], this._targets = [], this._activeTarget = null, this._scrollHeight = 0, i(this._scrollElement).on(rt.SCROLL, function(e) {
                        return o._process(e)
                    }), this.refresh(), this._process()
                }
                var t = e.prototype;
                return t.refresh = function() {
                    var e = this,
                        t = this._scrollElement === this._scrollElement.window ? "offset" : ht,
                        o = "auto" === this._config.method ? t : this._config.method,
                        n = o === ht ? this._getScrollTop() : 0;
                    this._offsets = [], this._targets = [], this._scrollHeight = this._getScrollHeight(), [].slice.call(document.querySelectorAll(this._selector)).map(function(e) {
                        var t, s = l.getSelectorFromElement(e);
                        if (s && (t = document.querySelector(s)), t) {
                            var r = t.getBoundingClientRect();
                            if (r.width || r.height) return [i(t)[o]().top + n, s]
                        }
                        return null
                    }).filter(function(e) {
                        return e
                    }).sort(function(e, t) {
                        return e[0] - t[0]
                    }).forEach(function(t) {
                        e._offsets.push(t[0]), e._targets.push(t[1])
                    })
                }, t.dispose = function() {
                    i.removeData(this._element, tt), i(this._scrollElement).off(it), this._element = null, this._scrollElement = null, this._config = null, this._selector = null, this._offsets = null, this._targets = null, this._activeTarget = null, this._scrollHeight = null
                }, t._getConfig = function(e) {
                    if ("string" != typeof(e = s({}, nt, "object" == typeof e && e ? e : {})).target) {
                        var t = i(e.target).attr("id");
                        t || (t = l.getUID(et), i(e.target).attr("id", t)), e.target = "#" + t
                    }
                    return l.typeCheckConfig(et, e, st), e
                }, t._getScrollTop = function() {
                    return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop
                }, t._getScrollHeight = function() {
                    return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight)
                }, t._getOffsetHeight = function() {
                    return this._scrollElement === window ? window.innerHeight : this._scrollElement.getBoundingClientRect().height
                }, t._process = function() {
                    var e = this._getScrollTop() + this._config.offset,
                        t = this._getScrollHeight(),
                        i = this._config.offset + t - this._getOffsetHeight();
                    if (this._scrollHeight !== t && this.refresh(), i <= e) {
                        var o = this._targets[this._targets.length - 1];
                        this._activeTarget !== o && this._activate(o)
                    } else {
                        if (this._activeTarget && e < this._offsets[0] && 0 < this._offsets[0]) return this._activeTarget = null, void this._clear();
                        for (var n = this._offsets.length; n--;) this._activeTarget !== this._targets[n] && e >= this._offsets[n] && (void 0 === this._offsets[n + 1] || e < this._offsets[n + 1]) && this._activate(this._targets[n])
                    }
                }, t._activate = function(e) {
                    this._activeTarget = e, this._clear();
                    var t = this._selector.split(",").map(function(t) {
                            return t + '[data-target="' + e + '"],' + t + '[href="' + e + '"]'
                        }),
                        o = i([].slice.call(document.querySelectorAll(t.join(","))));
                    o.hasClass("dropdown-item") ? (o.closest(".dropdown").find(".dropdown-toggle").addClass(at), o.addClass(at)) : (o.addClass(at), o.parents(lt).prev(ct + ", " + dt).addClass(at), o.parents(lt).prev(".nav-item").children(ct).addClass(at)), i(this._scrollElement).trigger(rt.ACTIVATE, {
                        relatedTarget: e
                    })
                }, t._clear = function() {
                    [].slice.call(document.querySelectorAll(this._selector)).filter(function(e) {
                        return e.classList.contains(at)
                    }).forEach(function(e) {
                        return e.classList.remove(at)
                    })
                }, e._jQueryInterface = function(t) {
                    return this.each(function() {
                        var o = i(this).data(tt);
                        if (o || (o = new e(this, "object" == typeof t && t), i(this).data(tt, o)), "string" == typeof t) {
                            if (void 0 === o[t]) throw new TypeError('No method named "' + t + '"');
                            o[t]()
                        }
                    })
                }, n(e, null, [{
                    key: "VERSION",
                    get: function() {
                        return "4.2.1"
                    }
                }, {
                    key: "Default",
                    get: function() {
                        return nt
                    }
                }]), e
            }();
        i(window).on(rt.LOAD_DATA_API, function() {
            for (var e = [].slice.call(document.querySelectorAll('[data-spy="scroll"]')), t = e.length; t--;) {
                var o = i(e[t]);
                pt._jQueryInterface.call(o, o.data())
            }
        }), i.fn[et] = pt._jQueryInterface, i.fn[et].Constructor = pt, i.fn[et].noConflict = function() {
            return i.fn[et] = ot, pt._jQueryInterface
        };
        var ft = "bs.tab",
            mt = "." + ft,
            gt = i.fn.tab,
            vt = {
                HIDE: "hide" + mt,
                HIDDEN: "hidden" + mt,
                SHOW: "show" + mt,
                SHOWN: "shown" + mt,
                CLICK_DATA_API: "click" + mt + ".data-api"
            },
            yt = "active",
            wt = ".active",
            bt = "> li > .active",
            _t = function() {
                function e(e) {
                    this._element = e
                }
                var t = e.prototype;
                return t.show = function() {
                    var e = this;
                    if (!(this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && i(this._element).hasClass(yt) || i(this._element).hasClass("disabled"))) {
                        var t, o, n = i(this._element).closest(".nav, .list-group")[0],
                            s = l.getSelectorFromElement(this._element);
                        if (n) {
                            var r = "UL" === n.nodeName || "OL" === n.nodeName ? bt : wt;
                            o = (o = i.makeArray(i(n).find(r)))[o.length - 1]
                        }
                        var a = i.Event(vt.HIDE, {
                                relatedTarget: this._element
                            }),
                            c = i.Event(vt.SHOW, {
                                relatedTarget: o
                            });
                        if (o && i(o).trigger(a), i(this._element).trigger(c), !c.isDefaultPrevented() && !a.isDefaultPrevented()) {
                            s && (t = document.querySelector(s)), this._activate(this._element, n);
                            var d = function() {
                                var t = i.Event(vt.HIDDEN, {
                                        relatedTarget: e._element
                                    }),
                                    n = i.Event(vt.SHOWN, {
                                        relatedTarget: o
                                    });
                                i(o).trigger(t), i(e._element).trigger(n)
                            };
                            t ? this._activate(t, t.parentNode, d) : d()
                        }
                    }
                }, t.dispose = function() {
                    i.removeData(this._element, ft), this._element = null
                }, t._activate = function(e, t, o) {
                    var n = this,
                        s = (!t || "UL" !== t.nodeName && "OL" !== t.nodeName ? i(t).children(wt) : i(t).find(bt))[0],
                        r = o && s && i(s).hasClass("fade"),
                        a = function() {
                            return n._transitionComplete(e, s, o)
                        };
                    if (s && r) {
                        var c = l.getTransitionDurationFromElement(s);
                        i(s).removeClass("show").one(l.TRANSITION_END, a).emulateTransitionEnd(c)
                    } else a()
                }, t._transitionComplete = function(e, t, o) {
                    if (t) {
                        i(t).removeClass(yt);
                        var n = i(t.parentNode).find("> .dropdown-menu .active")[0];
                        n && i(n).removeClass(yt), "tab" === t.getAttribute("role") && t.setAttribute("aria-selected", !1)
                    }
                    if (i(e).addClass(yt), "tab" === e.getAttribute("role") && e.setAttribute("aria-selected", !0), l.reflow(e), i(e).addClass("show"), e.parentNode && i(e.parentNode).hasClass("dropdown-menu")) {
                        var s = i(e).closest(".dropdown")[0];
                        if (s) {
                            var r = [].slice.call(s.querySelectorAll(".dropdown-toggle"));
                            i(r).addClass(yt)
                        }
                        e.setAttribute("aria-expanded", !0)
                    }
                    o && o()
                }, e._jQueryInterface = function(t) {
                    return this.each(function() {
                        var o = i(this),
                            n = o.data(ft);
                        if (n || (n = new e(this), o.data(ft, n)), "string" == typeof t) {
                            if (void 0 === n[t]) throw new TypeError('No method named "' + t + '"');
                            n[t]()
                        }
                    })
                }, n(e, null, [{
                    key: "VERSION",
                    get: function() {
                        return "4.2.1"
                    }
                }]), e
            }();
        i(document).on(vt.CLICK_DATA_API, '[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]', function(e) {
            e.preventDefault(), _t._jQueryInterface.call(i(this), "show")
        }), i.fn.tab = _t._jQueryInterface, i.fn.tab.Constructor = _t, i.fn.tab.noConflict = function() {
            return i.fn.tab = gt, _t._jQueryInterface
        };
        var xt = "toast",
            St = "bs.toast",
            Tt = "." + St,
            Ct = i.fn[xt],
            kt = {
                CLICK_DISMISS: "click.dismiss" + Tt,
                HIDE: "hide" + Tt,
                HIDDEN: "hidden" + Tt,
                SHOW: "show" + Tt,
                SHOWN: "shown" + Tt
            },
            zt = "show",
            Et = "showing",
            At = {
                animation: "boolean",
                autohide: "boolean",
                delay: "number"
            },
            Ot = {
                animation: !0,
                autohide: !0,
                delay: 500
            },
            $t = function() {
                function e(e, t) {
                    this._element = e, this._config = this._getConfig(t), this._timeout = null, this._setListeners()
                }
                var t = e.prototype;
                return t.show = function() {
                    var e = this;
                    i(this._element).trigger(kt.SHOW), this._config.animation && this._element.classList.add("fade");
                    var t = function() {
                        e._element.classList.remove(Et), e._element.classList.add(zt), i(e._element).trigger(kt.SHOWN), e._config.autohide && e.hide()
                    };
                    if (this._element.classList.remove("hide"), this._element.classList.add(Et), this._config.animation) {
                        var o = l.getTransitionDurationFromElement(this._element);
                        i(this._element).one(l.TRANSITION_END, t).emulateTransitionEnd(o)
                    } else t()
                }, t.hide = function(e) {
                    var t = this;
                    this._element.classList.contains(zt) && (i(this._element).trigger(kt.HIDE), e ? this._close() : this._timeout = setTimeout(function() {
                        t._close()
                    }, this._config.delay))
                }, t.dispose = function() {
                    clearTimeout(this._timeout), this._timeout = null, this._element.classList.contains(zt) && this._element.classList.remove(zt), i(this._element).off(kt.CLICK_DISMISS), i.removeData(this._element, St), this._element = null, this._config = null
                }, t._getConfig = function(e) {
                    return e = s({}, Ot, i(this._element).data(), "object" == typeof e && e ? e : {}), l.typeCheckConfig(xt, e, this.constructor.DefaultType), e
                }, t._setListeners = function() {
                    var e = this;
                    i(this._element).on(kt.CLICK_DISMISS, '[data-dismiss="toast"]', function() {
                        return e.hide(!0)
                    })
                }, t._close = function() {
                    var e = this,
                        t = function() {
                            e._element.classList.add("hide"), i(e._element).trigger(kt.HIDDEN)
                        };
                    if (this._element.classList.remove(zt), this._config.animation) {
                        var o = l.getTransitionDurationFromElement(this._element);
                        i(this._element).one(l.TRANSITION_END, t).emulateTransitionEnd(o)
                    } else t()
                }, e._jQueryInterface = function(t) {
                    return this.each(function() {
                        var o = i(this),
                            n = o.data(St);
                        if (n || (n = new e(this, "object" == typeof t && t), o.data(St, n)), "string" == typeof t) {
                            if (void 0 === n[t]) throw new TypeError('No method named "' + t + '"');
                            n[t](this)
                        }
                    })
                }, n(e, null, [{
                    key: "VERSION",
                    get: function() {
                        return "4.2.1"
                    }
                }, {
                    key: "DefaultType",
                    get: function() {
                        return At
                    }
                }]), e
            }();
        i.fn[xt] = $t._jQueryInterface, i.fn[xt].Constructor = $t, i.fn[xt].noConflict = function() {
                return i.fn[xt] = Ct, $t._jQueryInterface
            },
            function() {
                if (void 0 === i) throw new TypeError("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript.");
                var e = i.fn.jquery.split(" ")[0].split(".");
                if (e[0] < 2 && e[1] < 9 || 1 === e[0] && 9 === e[1] && e[2] < 1 || 4 <= e[0]) throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0")
            }(), e.Util = l, e.Alert = f, e.Button = T, e.Carousel = j, e.Collapse = G, e.Dropdown = pe, e.Modal = ze, e.Popover = Je, e.Scrollspy = pt, e.Tab = _t, e.Toast = $t, e.Tooltip = Re, Object.defineProperty(e, "__esModule", {
                value: !0
            })
    })
}, function(e, t, i) {
    "use strict";

    function o(e) {
        console && console.warn
    }

    function n() {
        n.init.call(this)
    }

    function s(e) {
        return void 0 === e._maxListeners ? n.defaultMaxListeners : e._maxListeners
    }

    function r(e, t, i, n) {
        var r, a, l;
        if ("function" != typeof i) throw new TypeError('The "listener" argument must be of type Function. Received type ' + typeof i);
        if (a = e._events, void 0 === a ? (a = e._events = Object.create(null), e._eventsCount = 0) : (void 0 !== a.newListener && (e.emit("newListener", t, i.listener ? i.listener : i), a = e._events), l = a[t]), void 0 === l) l = a[t] = i, ++e._eventsCount;
        else if ("function" == typeof l ? l = a[t] = n ? [i, l] : [l, i] : n ? l.unshift(i) : l.push(i), (r = s(e)) > 0 && l.length > r && !l.warned) {
            l.warned = !0;
            var c = new Error("Possible EventEmitter memory leak detected. " + l.length + " " + String(t) + " listeners added. Use emitter.setMaxListeners() to increase limit");
            c.name = "MaxListenersExceededWarning", c.emitter = e, c.type = t, c.count = l.length, o(c)
        }
        return e
    }

    function a() {
        for (var e = [], t = 0; t < arguments.length; t++) e.push(arguments[t]);
        this.fired || (this.target.removeListener(this.type, this.wrapFn), this.fired = !0, g(this.listener, this.target, e))
    }

    function l(e, t, i) {
        var o = {
                fired: !1,
                wrapFn: void 0,
                target: e,
                type: t,
                listener: i
            },
            n = a.bind(o);
        return n.listener = i, o.wrapFn = n, n
    }

    function c(e, t, i) {
        var o = e._events;
        if (void 0 === o) return [];
        var n = o[t];
        return void 0 === n ? [] : "function" == typeof n ? i ? [n.listener || n] : [n] : i ? p(n) : u(n, n.length)
    }

    function d(e) {
        var t = this._events;
        if (void 0 !== t) {
            var i = t[e];
            if ("function" == typeof i) return 1;
            if (void 0 !== i) return i.length
        }
        return 0
    }

    function u(e, t) {
        for (var i = new Array(t), o = 0; o < t; ++o) i[o] = e[o];
        return i
    }

    function h(e, t) {
        for (; t + 1 < e.length; t++) e[t] = e[t + 1];
        e.pop()
    }

    function p(e) {
        for (var t = new Array(e.length), i = 0; i < t.length; ++i) t[i] = e[i].listener || e[i];
        return t
    }
    var f, m = "object" == typeof Reflect ? Reflect : null,
        g = m && "function" == typeof m.apply ? m.apply : function(e, t, i) {
            return Function.prototype.apply.call(e, t, i)
        };
    f = m && "function" == typeof m.ownKeys ? m.ownKeys : Object.getOwnPropertySymbols ? function(e) {
        return Object.getOwnPropertyNames(e).concat(Object.getOwnPropertySymbols(e))
    } : function(e) {
        return Object.getOwnPropertyNames(e)
    };
    var v = Number.isNaN || function(e) {
        return e !== e
    };
    e.exports = n, n.EventEmitter = n, n.prototype._events = void 0, n.prototype._eventsCount = 0, n.prototype._maxListeners = void 0;
    var y = 10;
    Object.defineProperty(n, "defaultMaxListeners", {
        enumerable: !0,
        get: function() {
            return y
        },
        set: function(e) {
            if ("number" != typeof e || e < 0 || v(e)) throw new RangeError('The value of "defaultMaxListeners" is out of range. It must be a non-negative number. Received ' + e + ".");
            y = e
        }
    }), n.init = function() {
        void 0 !== this._events && this._events !== Object.getPrototypeOf(this)._events || (this._events = Object.create(null), this._eventsCount = 0), this._maxListeners = this._maxListeners || void 0
    }, n.prototype.setMaxListeners = function(e) {
        if ("number" != typeof e || e < 0 || v(e)) throw new RangeError('The value of "n" is out of range. It must be a non-negative number. Received ' + e + ".");
        return this._maxListeners = e, this
    }, n.prototype.getMaxListeners = function() {
        return s(this)
    }, n.prototype.emit = function(e) {
        for (var t = [], i = 1; i < arguments.length; i++) t.push(arguments[i]);
        var o = "error" === e,
            n = this._events;
        if (void 0 !== n) o = o && void 0 === n.error;
        else if (!o) return !1;
        if (o) {
            var s;
            if (t.length > 0 && (s = t[0]), s instanceof Error) throw s;
            var r = new Error("Unhandled error." + (s ? " (" + s.message + ")" : ""));
            throw r.context = s, r
        }
        var a = n[e];
        if (void 0 === a) return !1;
        if ("function" == typeof a) g(a, this, t);
        else
            for (var l = a.length, c = u(a, l), i = 0; i < l; ++i) g(c[i], this, t);
        return !0
    }, n.prototype.addListener = function(e, t) {
        return r(this, e, t, !1)
    }, n.prototype.on = n.prototype.addListener, n.prototype.prependListener = function(e, t) {
        return r(this, e, t, !0)
    }, n.prototype.once = function(e, t) {
        if ("function" != typeof t) throw new TypeError('The "listener" argument must be of type Function. Received type ' + typeof t);
        return this.on(e, l(this, e, t)), this
    }, n.prototype.prependOnceListener = function(e, t) {
        if ("function" != typeof t) throw new TypeError('The "listener" argument must be of type Function. Received type ' + typeof t);
        return this.prependListener(e, l(this, e, t)), this
    }, n.prototype.removeListener = function(e, t) {
        var i, o, n, s, r;
        if ("function" != typeof t) throw new TypeError('The "listener" argument must be of type Function. Received type ' + typeof t);
        if (void 0 === (o = this._events)) return this;
        if (void 0 === (i = o[e])) return this;
        if (i === t || i.listener === t) 0 == --this._eventsCount ? this._events = Object.create(null) : (delete o[e], o.removeListener && this.emit("removeListener", e, i.listener || t));
        else if ("function" != typeof i) {
            for (n = -1, s = i.length - 1; s >= 0; s--)
                if (i[s] === t || i[s].listener === t) {
                    r = i[s].listener, n = s;
                    break
                } if (n < 0) return this;
            0 === n ? i.shift() : h(i, n), 1 === i.length && (o[e] = i[0]), void 0 !== o.removeListener && this.emit("removeListener", e, r || t)
        }
        return this
    }, n.prototype.off = n.prototype.removeListener, n.prototype.removeAllListeners = function(e) {
        var t, i, o;
        if (void 0 === (i = this._events)) return this;
        if (void 0 === i.removeListener) return 0 === arguments.length ? (this._events = Object.create(null), this._eventsCount = 0) : void 0 !== i[e] && (0 == --this._eventsCount ? this._events = Object.create(null) : delete i[e]), this;
        if (0 === arguments.length) {
            var n, s = Object.keys(i);
            for (o = 0; o < s.length; ++o) "removeListener" !== (n = s[o]) && this.removeAllListeners(n);
            return this.removeAllListeners("removeListener"), this._events = Object.create(null), this._eventsCount = 0, this
        }
        if ("function" == typeof(t = i[e])) this.removeListener(e, t);
        else if (void 0 !== t)
            for (o = t.length - 1; o >= 0; o--) this.removeListener(e, t[o]);
        return this
    }, n.prototype.listeners = function(e) {
        return c(this, e, !0)
    }, n.prototype.rawListeners = function(e) {
        return c(this, e, !1)
    }, n.listenerCount = function(e, t) {
        return "function" == typeof e.listenerCount ? e.listenerCount(t) : d.call(e, t)
    }, n.prototype.listenerCount = d, n.prototype.eventNames = function() {
        return this._eventsCount > 0 ? f(this._events) : []
    }
}, function(e, t, i) {
    "use strict";
    var o, o;
    ! function(t) {
        e.exports = t()
    }(function() {
        return function e(t, i, n) {
            function s(a, l) {
                if (!i[a]) {
                    if (!t[a]) {
                        var c = "function" == typeof o && o;
                        if (!l && c) return o(a, !0);
                        if (r) return r(a, !0);
                        var d = new Error("Cannot find module '" + a + "'");
                        throw d.code = "MODULE_NOT_FOUND", d
                    }
                    var u = i[a] = {
                        exports: {}
                    };
                    t[a][0].call(u.exports, function(e) {
                        var i = t[a][1][e];
                        return s(i || e)
                    }, u, u.exports, e, t, i, n)
                }
                return i[a].exports
            }
            for (var r = "function" == typeof o && o, a = 0; a < n.length; a++) s(n[a]);
            return s
        }({
            1: [function(e, t, i) {
                t.exports = function(e) {
                    var t, i, o, n = -1;
                    if (e.lines.length > 1 && "flex-start" === e.style.alignContent)
                        for (t = 0; o = e.lines[++n];) o.crossStart = t, t += o.cross;
                    else if (e.lines.length > 1 && "flex-end" === e.style.alignContent)
                        for (t = e.flexStyle.crossSpace; o = e.lines[++n];) o.crossStart = t, t += o.cross;
                    else if (e.lines.length > 1 && "center" === e.style.alignContent)
                        for (t = e.flexStyle.crossSpace / 2; o = e.lines[++n];) o.crossStart = t, t += o.cross;
                    else if (e.lines.length > 1 && "space-between" === e.style.alignContent)
                        for (i = e.flexStyle.crossSpace / (e.lines.length - 1), t = 0; o = e.lines[++n];) o.crossStart = t, t += o.cross + i;
                    else if (e.lines.length > 1 && "space-around" === e.style.alignContent)
                        for (i = 2 * e.flexStyle.crossSpace / (2 * e.lines.length), t = i / 2; o = e.lines[++n];) o.crossStart = t, t += o.cross + i;
                    else
                        for (i = e.flexStyle.crossSpace / e.lines.length, t = e.flexStyle.crossInnerBefore; o = e.lines[++n];) o.crossStart = t, o.cross += i, t += o.cross
                }
            }, {}],
            2: [function(e, t, i) {
                t.exports = function(e) {
                    for (var t, i = -1; line = e.lines[++i];)
                        for (t = -1; child = line.children[++t];) {
                            var o = child.style.alignSelf;
                            "auto" === o && (o = e.style.alignItems), "flex-start" === o ? child.flexStyle.crossStart = line.crossStart : "flex-end" === o ? child.flexStyle.crossStart = line.crossStart + line.cross - child.flexStyle.crossOuter : "center" === o ? child.flexStyle.crossStart = line.crossStart + (line.cross - child.flexStyle.crossOuter) / 2 : (child.flexStyle.crossStart = line.crossStart, child.flexStyle.crossOuter = line.cross, child.flexStyle.cross = child.flexStyle.crossOuter - child.flexStyle.crossBefore - child.flexStyle.crossAfter)
                        }
                }
            }, {}],
            3: [function(e, t, i) {
                t.exports = function(e, t) {
                    var i = "row" === t || "row-reverse" === t,
                        o = e.mainAxis;
                    if (o) {
                        i && "inline" === o || !i && "block" === o || (e.flexStyle = {
                            main: e.flexStyle.cross,
                            cross: e.flexStyle.main,
                            mainOffset: e.flexStyle.crossOffset,
                            crossOffset: e.flexStyle.mainOffset,
                            mainBefore: e.flexStyle.crossBefore,
                            mainAfter: e.flexStyle.crossAfter,
                            crossBefore: e.flexStyle.mainBefore,
                            crossAfter: e.flexStyle.mainAfter,
                            mainInnerBefore: e.flexStyle.crossInnerBefore,
                            mainInnerAfter: e.flexStyle.crossInnerAfter,
                            crossInnerBefore: e.flexStyle.mainInnerBefore,
                            crossInnerAfter: e.flexStyle.mainInnerAfter,
                            mainBorderBefore: e.flexStyle.crossBorderBefore,
                            mainBorderAfter: e.flexStyle.crossBorderAfter,
                            crossBorderBefore: e.flexStyle.mainBorderBefore,
                            crossBorderAfter: e.flexStyle.mainBorderAfter
                        })
                    } else e.flexStyle = i ? {
                        main: e.style.width,
                        cross: e.style.height,
                        mainOffset: e.style.offsetWidth,
                        crossOffset: e.style.offsetHeight,
                        mainBefore: e.style.marginLeft,
                        mainAfter: e.style.marginRight,
                        crossBefore: e.style.marginTop,
                        crossAfter: e.style.marginBottom,
                        mainInnerBefore: e.style.paddingLeft,
                        mainInnerAfter: e.style.paddingRight,
                        crossInnerBefore: e.style.paddingTop,
                        crossInnerAfter: e.style.paddingBottom,
                        mainBorderBefore: e.style.borderLeftWidth,
                        mainBorderAfter: e.style.borderRightWidth,
                        crossBorderBefore: e.style.borderTopWidth,
                        crossBorderAfter: e.style.borderBottomWidth
                    } : {
                        main: e.style.height,
                        cross: e.style.width,
                        mainOffset: e.style.offsetHeight,
                        crossOffset: e.style.offsetWidth,
                        mainBefore: e.style.marginTop,
                        mainAfter: e.style.marginBottom,
                        crossBefore: e.style.marginLeft,
                        crossAfter: e.style.marginRight,
                        mainInnerBefore: e.style.paddingTop,
                        mainInnerAfter: e.style.paddingBottom,
                        crossInnerBefore: e.style.paddingLeft,
                        crossInnerAfter: e.style.paddingRight,
                        mainBorderBefore: e.style.borderTopWidth,
                        mainBorderAfter: e.style.borderBottomWidth,
                        crossBorderBefore: e.style.borderLeftWidth,
                        crossBorderAfter: e.style.borderRightWidth
                    }, "content-box" === e.style.boxSizing && ("number" == typeof e.flexStyle.main && (e.flexStyle.main += e.flexStyle.mainInnerBefore + e.flexStyle.mainInnerAfter + e.flexStyle.mainBorderBefore + e.flexStyle.mainBorderAfter), "number" == typeof e.flexStyle.cross && (e.flexStyle.cross += e.flexStyle.crossInnerBefore + e.flexStyle.crossInnerAfter + e.flexStyle.crossBorderBefore + e.flexStyle.crossBorderAfter));
                    e.mainAxis = i ? "inline" : "block", e.crossAxis = i ? "block" : "inline", "number" == typeof e.style.flexBasis && (e.flexStyle.main = e.style.flexBasis + e.flexStyle.mainInnerBefore + e.flexStyle.mainInnerAfter + e.flexStyle.mainBorderBefore + e.flexStyle.mainBorderAfter), e.flexStyle.mainOuter = e.flexStyle.main, e.flexStyle.crossOuter = e.flexStyle.cross, "auto" === e.flexStyle.mainOuter && (e.flexStyle.mainOuter = e.flexStyle.mainOffset), "auto" === e.flexStyle.crossOuter && (e.flexStyle.crossOuter = e.flexStyle.crossOffset), "number" == typeof e.flexStyle.mainBefore && (e.flexStyle.mainOuter += e.flexStyle.mainBefore), "number" == typeof e.flexStyle.mainAfter && (e.flexStyle.mainOuter += e.flexStyle.mainAfter), "number" == typeof e.flexStyle.crossBefore && (e.flexStyle.crossOuter += e.flexStyle.crossBefore), "number" == typeof e.flexStyle.crossAfter && (e.flexStyle.crossOuter += e.flexStyle.crossAfter)
                }
            }, {}],
            4: [function(e, t, i) {
                var o = e("../reduce");
                t.exports = function(e) {
                    if (e.mainSpace > 0) {
                        var t = o(e.children, function(e, t) {
                            return e + parseFloat(t.style.flexGrow)
                        }, 0);
                        t > 0 && (e.main = o(e.children, function(i, o) {
                            return "auto" === o.flexStyle.main ? o.flexStyle.main = o.flexStyle.mainOffset + parseFloat(o.style.flexGrow) / t * e.mainSpace : o.flexStyle.main += parseFloat(o.style.flexGrow) / t * e.mainSpace, o.flexStyle.mainOuter = o.flexStyle.main + o.flexStyle.mainBefore + o.flexStyle.mainAfter, i + o.flexStyle.mainOuter
                        }, 0), e.mainSpace = 0)
                    }
                }
            }, {
                "../reduce": 12
            }],
            5: [function(e, t, i) {
                var o = e("../reduce");
                t.exports = function(e) {
                    if (e.mainSpace < 0) {
                        var t = o(e.children, function(e, t) {
                            return e + parseFloat(t.style.flexShrink)
                        }, 0);
                        t > 0 && (e.main = o(e.children, function(i, o) {
                            return o.flexStyle.main += parseFloat(o.style.flexShrink) / t * e.mainSpace, o.flexStyle.mainOuter = o.flexStyle.main + o.flexStyle.mainBefore + o.flexStyle.mainAfter, i + o.flexStyle.mainOuter
                        }, 0), e.mainSpace = 0)
                    }
                }
            }, {
                "../reduce": 12
            }],
            6: [function(e, t, i) {
                var o = e("../reduce");
                t.exports = function(e) {
                    var t;
                    e.lines = [t = {
                        main: 0,
                        cross: 0,
                        children: []
                    }];
                    for (var i, n = -1; i = e.children[++n];) "nowrap" === e.style.flexWrap || 0 === t.children.length || "auto" === e.flexStyle.main || e.flexStyle.main - e.flexStyle.mainInnerBefore - e.flexStyle.mainInnerAfter - e.flexStyle.mainBorderBefore - e.flexStyle.mainBorderAfter >= t.main + i.flexStyle.mainOuter ? (t.main += i.flexStyle.mainOuter, t.cross = Math.max(t.cross, i.flexStyle.crossOuter)) : e.lines.push(t = {
                        main: i.flexStyle.mainOuter,
                        cross: i.flexStyle.crossOuter,
                        children: []
                    }), t.children.push(i);
                    e.flexStyle.mainLines = o(e.lines, function(e, t) {
                        return Math.max(e, t.main)
                    }, 0), e.flexStyle.crossLines = o(e.lines, function(e, t) {
                        return e + t.cross
                    }, 0), "auto" === e.flexStyle.main && (e.flexStyle.main = Math.max(e.flexStyle.mainOffset, e.flexStyle.mainLines + e.flexStyle.mainInnerBefore + e.flexStyle.mainInnerAfter + e.flexStyle.mainBorderBefore + e.flexStyle.mainBorderAfter)), "auto" === e.flexStyle.cross && (e.flexStyle.cross = Math.max(e.flexStyle.crossOffset, e.flexStyle.crossLines + e.flexStyle.crossInnerBefore + e.flexStyle.crossInnerAfter + e.flexStyle.crossBorderBefore + e.flexStyle.crossBorderAfter)), e.flexStyle.crossSpace = e.flexStyle.cross - e.flexStyle.crossInnerBefore - e.flexStyle.crossInnerAfter - e.flexStyle.crossBorderBefore - e.flexStyle.crossBorderAfter - e.flexStyle.crossLines, e.flexStyle.mainOuter = e.flexStyle.main + e.flexStyle.mainBefore + e.flexStyle.mainAfter, e.flexStyle.crossOuter = e.flexStyle.cross + e.flexStyle.crossBefore + e.flexStyle.crossAfter
                }
            }, {
                "../reduce": 12
            }],
            7: [function(e, t, i) {
                function o(t) {
                    for (var i, o = -1; i = t.children[++o];) e("./flex-direction")(i, t.style.flexDirection);
                    e("./flex-direction")(t, t.style.flexDirection), e("./order")(t), e("./flexbox-lines")(t), e("./align-content")(t), o = -1;
                    for (var n; n = t.lines[++o];) n.mainSpace = t.flexStyle.main - t.flexStyle.mainInnerBefore - t.flexStyle.mainInnerAfter - t.flexStyle.mainBorderBefore - t.flexStyle.mainBorderAfter - n.main, e("./flex-grow")(n), e("./flex-shrink")(n), e("./margin-main")(n), e("./margin-cross")(n), e("./justify-content")(n, t.style.justifyContent, t);
                    e("./align-items")(t)
                }
                t.exports = o
            }, {
                "./align-content": 1,
                "./align-items": 2,
                "./flex-direction": 3,
                "./flex-grow": 4,
                "./flex-shrink": 5,
                "./flexbox-lines": 6,
                "./justify-content": 8,
                "./margin-cross": 9,
                "./margin-main": 10,
                "./order": 11
            }],
            8: [function(e, t, i) {
                t.exports = function(e, t, i) {
                    var o, n, s, r = i.flexStyle.mainInnerBefore,
                        a = -1;
                    if ("flex-end" === t)
                        for (o = e.mainSpace, o += r; s = e.children[++a];) s.flexStyle.mainStart = o, o += s.flexStyle.mainOuter;
                    else if ("center" === t)
                        for (o = e.mainSpace / 2, o += r; s = e.children[++a];) s.flexStyle.mainStart = o, o += s.flexStyle.mainOuter;
                    else if ("space-between" === t)
                        for (n = e.mainSpace / (e.children.length - 1), o = 0, o += r; s = e.children[++a];) s.flexStyle.mainStart = o, o += s.flexStyle.mainOuter + n;
                    else if ("space-around" === t)
                        for (n = 2 * e.mainSpace / (2 * e.children.length), o = n / 2, o += r; s = e.children[++a];) s.flexStyle.mainStart = o, o += s.flexStyle.mainOuter + n;
                    else
                        for (o = 0, o += r; s = e.children[++a];) s.flexStyle.mainStart = o, o += s.flexStyle.mainOuter
                }
            }, {}],
            9: [function(e, t, i) {
                t.exports = function(e) {
                    for (var t, i = -1; t = e.children[++i];) {
                        var o = 0;
                        "auto" === t.flexStyle.crossBefore && ++o, "auto" === t.flexStyle.crossAfter && ++o;
                        var n = e.cross - t.flexStyle.crossOuter;
                        "auto" === t.flexStyle.crossBefore && (t.flexStyle.crossBefore = n / o), "auto" === t.flexStyle.crossAfter && (t.flexStyle.crossAfter = n / o), "auto" === t.flexStyle.cross ? t.flexStyle.crossOuter = t.flexStyle.crossOffset + t.flexStyle.crossBefore + t.flexStyle.crossAfter : t.flexStyle.crossOuter = t.flexStyle.cross + t.flexStyle.crossBefore + t.flexStyle.crossAfter
                    }
                }
            }, {}],
            10: [function(e, t, i) {
                t.exports = function(e) {
                    for (var t, i = 0, o = -1; t = e.children[++o];) "auto" === t.flexStyle.mainBefore && ++i, "auto" === t.flexStyle.mainAfter && ++i;
                    if (i > 0) {
                        for (o = -1; t = e.children[++o];) "auto" === t.flexStyle.mainBefore && (t.flexStyle.mainBefore = e.mainSpace / i), "auto" === t.flexStyle.mainAfter && (t.flexStyle.mainAfter = e.mainSpace / i), "auto" === t.flexStyle.main ? t.flexStyle.mainOuter = t.flexStyle.mainOffset + t.flexStyle.mainBefore + t.flexStyle.mainAfter : t.flexStyle.mainOuter = t.flexStyle.main + t.flexStyle.mainBefore + t.flexStyle.mainAfter;
                        e.mainSpace = 0
                    }
                }
            }, {}],
            11: [function(e, t, i) {
                var o = /^(column|row)-reverse$/;
                t.exports = function(e) {
                    e.children.sort(function(e, t) {
                        return e.style.order - t.style.order || e.index - t.index
                    }), o.test(e.style.flexDirection) && e.children.reverse()
                }
            }, {}],
            12: [function(e, t, i) {
                function o(e, t, i) {
                    for (var o = e.length, n = -1; ++n < o;) n in e && (i = t(i, e[n], n));
                    return i
                }
                t.exports = o
            }, {}],
            13: [function(e, t, i) {
                function o(e) {
                    a(r(e))
                }
                var n = e("./read"),
                    s = e("./write"),
                    r = e("./readAll"),
                    a = e("./writeAll");
                t.exports = o, t.exports.read = n, t.exports.write = s, t.exports.readAll = r, t.exports.writeAll = a
            }, {
                "./read": 15,
                "./readAll": 16,
                "./write": 17,
                "./writeAll": 18
            }],
            14: [function(e, t, i) {
                function o(e, t) {
                    var i = String(e).match(s);
                    if (!i) return e;
                    var o = i[1],
                        r = i[2];
                    return "px" === r ? 1 * o : "cm" === r ? .3937 * o * 96 : "in" === r ? 96 * o : "mm" === r ? .3937 * o * 96 / 10 : "pc" === r ? 12 * o * 96 / 72 : "pt" === r ? 96 * o / 72 : "rem" === r ? 16 * o : n(e, t)
                }

                function n(e, t) {
                    r.style.cssText = "border:none!important;clip:rect(0 0 0 0)!important;display:block!important;font-size:1em!important;height:0!important;margin:0!important;padding:0!important;position:relative!important;width:" + e + "!important", t.parentNode.insertBefore(r, t.nextSibling);
                    var i = r.offsetWidth;
                    return t.parentNode.removeChild(r), i
                }
                t.exports = o;
                var s = /^([-+]?\d*\.?\d+)(%|[a-z]+)$/,
                    r = document.createElement("div")
            }, {}],
            15: [function(e, t, i) {
                function o(e) {
                    var t = {
                        alignContent: "stretch",
                        alignItems: "stretch",
                        alignSelf: "auto",
                        borderBottomWidth: 0,
                        borderLeftWidth: 0,
                        borderRightWidth: 0,
                        borderTopWidth: 0,
                        boxSizing: "content-box",
                        display: "inline",
                        flexBasis: "auto",
                        flexDirection: "row",
                        flexGrow: 0,
                        flexShrink: 1,
                        flexWrap: "nowrap",
                        justifyContent: "flex-start",
                        height: "auto",
                        marginTop: 0,
                        marginRight: 0,
                        marginLeft: 0,
                        marginBottom: 0,
                        paddingTop: 0,
                        paddingRight: 0,
                        paddingLeft: 0,
                        paddingBottom: 0,
                        maxHeight: "none",
                        maxWidth: "none",
                        minHeight: 0,
                        minWidth: 0,
                        order: 0,
                        position: "static",
                        width: "auto"
                    };
                    if (e instanceof Element) {
                        var i = e.hasAttribute("data-style"),
                            o = i ? e.getAttribute("data-style") : e.getAttribute("style") || "";
                        i || e.setAttribute("data-style", o), r(t, window.getComputedStyle && getComputedStyle(e) || {}), n(t, e.currentStyle || {}), s(t, o);
                        for (var a in t) t[a] = l(t[a], e);
                        var c = e.getBoundingClientRect();
                        t.offsetHeight = c.height || e.offsetHeight, t.offsetWidth = c.width || e.offsetWidth
                    }
                    return {
                        element: e,
                        style: t
                    }
                }

                function n(e, t) {
                    for (var i in e) {
                        if (i in t) e[i] = t[i];
                        else {
                            var o = i.replace(/[A-Z]/g, "-$&").toLowerCase();
                            o in t && (e[i] = t[o])
                        }
                    }
                    "-js-display" in t && (e.display = t["-js-display"])
                }

                function s(e, t) {
                    for (var i; i = a.exec(t);) {
                        e[i[1].toLowerCase().replace(/-[a-z]/g, function(e) {
                            return e.slice(1).toUpperCase()
                        })] = i[2]
                    }
                }

                function r(e, t) {
                    for (var i in e) {
                        i in t && !/^(alignSelf|height|width)$/.test(i) && (e[i] = t[i])
                    }
                }
                t.exports = o;
                var a = /([^\s:;]+)\s*:\s*([^;]+?)\s*(;|$)/g,
                    l = e("./getComputedLength")
            }, {
                "./getComputedLength": 14
            }],
            16: [function(e, t, i) {
                function o(e) {
                    var t = [];
                    return n(e, t), t
                }

                function n(e, t) {
                    for (var i, o = s(e), a = [], l = -1; i = e.childNodes[++l];) {
                        var c = 3 === i.nodeType && !/^\s*$/.test(i.nodeValue);
                        if (o && c) {
                            var d = i;
                            i = e.insertBefore(document.createElement("flex-item"), d), i.appendChild(d)
                        }
                        if (i instanceof Element) {
                            var u = n(i, t);
                            if (o) {
                                var h = i.style;
                                h.display = "inline-block", h.position = "absolute", u.style = r(i).style, a.push(u)
                            }
                        }
                    }
                    var p = {
                        element: e,
                        children: a
                    };
                    return o && (p.style = r(e).style, t.push(p)), p
                }

                function s(e) {
                    var t = e instanceof Element,
                        i = t && e.getAttribute("data-style"),
                        o = t && e.currentStyle && e.currentStyle["-js-display"];
                    return a.test(i) || l.test(o)
                }
                t.exports = o;
                var r = e("../read"),
                    a = /(^|;)\s*display\s*:\s*(inline-)?flex\s*(;|$)/i,
                    l = /^(inline-)?flex$/i
            }, {
                "../read": 15
            }],
            17: [function(e, t, i) {
                function o(e) {
                    s(e);
                    var t = e.element.style,
                        i = "inline" === e.mainAxis ? ["main", "cross"] : ["cross", "main"];
                    t.boxSizing = "content-box", t.display = "block", t.position = "relative", t.width = n(e.flexStyle[i[0]] - e.flexStyle[i[0] + "InnerBefore"] - e.flexStyle[i[0] + "InnerAfter"] - e.flexStyle[i[0] + "BorderBefore"] - e.flexStyle[i[0] + "BorderAfter"]), t.height = n(e.flexStyle[i[1]] - e.flexStyle[i[1] + "InnerBefore"] - e.flexStyle[i[1] + "InnerAfter"] - e.flexStyle[i[1] + "BorderBefore"] - e.flexStyle[i[1] + "BorderAfter"]);
                    for (var o, r = -1; o = e.children[++r];) {
                        var a = o.element.style,
                            l = "inline" === o.mainAxis ? ["main", "cross"] : ["cross", "main"];
                        a.boxSizing = "content-box", a.display = "block", a.position = "absolute", "auto" !== o.flexStyle[l[0]] && (a.width = n(o.flexStyle[l[0]] - o.flexStyle[l[0] + "InnerBefore"] - o.flexStyle[l[0] + "InnerAfter"] - o.flexStyle[l[0] + "BorderBefore"] - o.flexStyle[l[0] + "BorderAfter"])), "auto" !== o.flexStyle[l[1]] && (a.height = n(o.flexStyle[l[1]] - o.flexStyle[l[1] + "InnerBefore"] - o.flexStyle[l[1] + "InnerAfter"] - o.flexStyle[l[1] + "BorderBefore"] - o.flexStyle[l[1] + "BorderAfter"])), a.top = n(o.flexStyle[l[1] + "Start"]), a.left = n(o.flexStyle[l[0] + "Start"]), a.marginTop = n(o.flexStyle[l[1] + "Before"]), a.marginRight = n(o.flexStyle[l[0] + "After"]), a.marginBottom = n(o.flexStyle[l[1] + "After"]), a.marginLeft = n(o.flexStyle[l[0] + "Before"])
                    }
                }

                function n(e) {
                    return "string" == typeof e ? e : Math.max(e, 0) + "px"
                }
                t.exports = o;
                var s = e("../flexbox")
            }, {
                "../flexbox": 7
            }],
            18: [function(e, t, i) {
                function o(e) {
                    for (var t, i = -1; t = e[++i];) n(t)
                }
                t.exports = o;
                var n = e("../write")
            }, {
                "../write": 17
            }]
        }, {}, [13])(13)
    })
}, function(e, t, i) {
    "use strict";
    (function(i) {
        function o(e) {
            var t = !1;
            return function() {
                t || (t = !0, window.Promise.resolve().then(function() {
                    t = !1, e()
                }))
            }
        }

        function n(e) {
            var t = !1;
            return function() {
                t || (t = !0, setTimeout(function() {
                    t = !1, e()
                }, pe))
            }
        }

        function s(e) {
            var t = {};
            return e && "[object Function]" === t.toString.call(e)
        }

        function r(e, t) {
            if (1 !== e.nodeType) return [];
            var i = e.ownerDocument.defaultView,
                o = i.getComputedStyle(e, null);
            return t ? o[t] : o
        }

        function a(e) {
            return "HTML" === e.nodeName ? e : e.parentNode || e.host
        }

        function l(e) {
            for (var t = !0; t;) {
                var i = e;
                if (t = !1, !i) return document.body;
                switch (i.nodeName) {
                    case "HTML":
                    case "BODY":
                        return i.ownerDocument.body;
                    case "#document":
                        return i.body
                }
                var o = r(i),
                    n = o.overflow,
                    s = o.overflowX,
                    l = o.overflowY;
                if (/(auto|scroll|overlay)/.test(n + l + s)) return i;
                e = a(i), t = !0, o = n = s = l = void 0
            }
        }

        function c(e) {
            return e && e.referenceNode ? e.referenceNode : e
        }

        function d(e) {
            return 11 === e ? ge : 10 === e ? ve : ge || ve
        }

        function u(e) {
            for (var t = !0; t;) {
                var i = e;
                if (t = !1, !i) return document.documentElement;
                for (var o = d(10) ? document.body : null, n = i.offsetParent || null; n === o && i.nextElementSibling;) n = (i = i.nextElementSibling).offsetParent;
                var s = n && n.nodeName;
                if (!s || "BODY" === s || "HTML" === s) return i ? i.ownerDocument.documentElement : document.documentElement;
                if (-1 === ["TH", "TD", "TABLE"].indexOf(n.nodeName) || "static" !== r(n, "position")) return n;
                e = n, t = !0, o = n = s = void 0
            }
        }

        function h(e) {
            var t = e.nodeName;
            return "BODY" !== t && ("HTML" === t || u(e.firstElementChild) === e)
        }

        function p(e) {
            for (var t = !0; t;) {
                var i = e;
                t = !1; {
                    if (null === i.parentNode) return i;
                    e = i.parentNode, t = !0
                }
            }
        }

        function f(e, t) {
            for (var i = !0; i;) {
                var o = e,
                    n = t;
                if (i = !1, !(o && o.nodeType && n && n.nodeType)) return document.documentElement;
                var s = o.compareDocumentPosition(n) & Node.DOCUMENT_POSITION_FOLLOWING,
                    r = s ? o : n,
                    a = s ? n : o,
                    l = document.createRange();
                l.setStart(r, 0), l.setEnd(a, 0);
                var c = l.commonAncestorContainer;
                if (o !== c && n !== c || r.contains(a)) return h(c) ? c : u(c);
                var d = p(o);
                d.host ? (e = d.host, t = n, i = !0, s = r = a = l = c = d = void 0) : (e = o, t = p(n).host, i = !0, s = r = a = l = c = d = void 0)
            }
        }

        function m(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "top",
                i = "top" === t ? "scrollTop" : "scrollLeft",
                o = e.nodeName;
            if ("BODY" === o || "HTML" === o) {
                var n = e.ownerDocument.documentElement;
                return (e.ownerDocument.scrollingElement || n)[i]
            }
            return e[i]
        }

        function g(e, t) {
            var i = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
                o = m(t, "top"),
                n = m(t, "left"),
                s = i ? -1 : 1;
            return e.top += o * s, e.bottom += o * s, e.left += n * s, e.right += n * s, e
        }

        function v(e, t) {
            var i = "x" === t ? "Left" : "Top",
                o = "Left" === i ? "Right" : "Bottom";
            return parseFloat(e["border" + i + "Width"], 10) + parseFloat(e["border" + o + "Width"], 10)
        }

        function y(e, t, i, o) {
            return Math.max(t["offset" + e], t["scroll" + e], i["client" + e], i["offset" + e], i["scroll" + e], d(10) ? parseInt(i["offset" + e]) + parseInt(o["margin" + ("Height" === e ? "Top" : "Left")]) + parseInt(o["margin" + ("Height" === e ? "Bottom" : "Right")]) : 0)
        }

        function w(e) {
            var t = e.body,
                i = e.documentElement,
                o = d(10) && getComputedStyle(i);
            return {
                height: y("Height", t, i, o),
                width: y("Width", t, i, o)
            }
        }

        function b(e) {
            return _e({}, e, {
                right: e.left + e.width,
                bottom: e.top + e.height
            })
        }

        function _(e) {
            var t = {};
            try {
                if (d(10)) {
                    t = e.getBoundingClientRect();
                    var i = m(e, "top"),
                        o = m(e, "left");
                    t.top += i, t.left += o, t.bottom += i, t.right += o
                } else t = e.getBoundingClientRect()
            } catch (e) {}
            var n = {
                    left: t.left,
                    top: t.top,
                    width: t.right - t.left,
                    height: t.bottom - t.top
                },
                s = "HTML" === e.nodeName ? w(e.ownerDocument) : {},
                a = s.width || e.clientWidth || n.width,
                l = s.height || e.clientHeight || n.height,
                c = e.offsetWidth - a,
                u = e.offsetHeight - l;
            if (c || u) {
                var h = r(e);
                c -= v(h, "x"), u -= v(h, "y"), n.width -= c, n.height -= u
            }
            return b(n)
        }

        function x(e, t) {
            var i = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
                o = d(10),
                n = "HTML" === t.nodeName,
                s = _(e),
                a = _(t),
                c = l(e),
                u = r(t),
                h = parseFloat(u.borderTopWidth, 10),
                p = parseFloat(u.borderLeftWidth, 10);
            i && n && (a.top = Math.max(a.top, 0), a.left = Math.max(a.left, 0));
            var f = b({
                top: s.top - a.top - h,
                left: s.left - a.left - p,
                width: s.width,
                height: s.height
            });
            if (f.marginTop = 0, f.marginLeft = 0, !o && n) {
                var m = parseFloat(u.marginTop, 10),
                    v = parseFloat(u.marginLeft, 10);
                f.top -= h - m, f.bottom -= h - m, f.left -= p - v, f.right -= p - v, f.marginTop = m, f.marginLeft = v
            }
            return (o && !i ? t.contains(c) : t === c && "BODY" !== c.nodeName) && (f = g(f, t)), f
        }

        function S(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
                i = e.ownerDocument.documentElement,
                o = x(e, i),
                n = Math.max(i.clientWidth, window.innerWidth || 0),
                s = Math.max(i.clientHeight, window.innerHeight || 0),
                r = t ? 0 : m(i),
                a = t ? 0 : m(i, "left");
            return b({
                top: r - o.top + o.marginTop,
                left: a - o.left + o.marginLeft,
                width: n,
                height: s
            })
        }

        function T(e) {
            for (var t = !0; t;) {
                var i = e;
                t = !1;
                var o = i.nodeName;
                if ("BODY" === o || "HTML" === o) return !1;
                if ("fixed" === r(i, "position")) return !0;
                var n = a(i);
                if (!n) return !1;
                e = n, t = !0, o = n = void 0
            }
        }

        function C(e) {
            if (!e || !e.parentElement || d()) return document.documentElement;
            for (var t = e.parentElement; t && "none" === r(t, "transform");) t = t.parentElement;
            return t || document.documentElement
        }

        function k(e, t, i, o) {
            var n = arguments.length > 4 && void 0 !== arguments[4] && arguments[4],
                s = {
                    top: 0,
                    left: 0
                },
                r = n ? C(e) : f(e, c(t));
            if ("viewport" === o) s = S(r, n);
            else {
                var d = void 0;
                "scrollParent" === o ? (d = l(a(t)), "BODY" === d.nodeName && (d = e.ownerDocument.documentElement)) : d = "window" === o ? e.ownerDocument.documentElement : o;
                var u = x(d, r, n);
                if ("HTML" !== d.nodeName || T(r)) s = u;
                else {
                    var h = w(e.ownerDocument),
                        p = h.height,
                        m = h.width;
                    s.top += u.top - u.marginTop, s.bottom = p + u.top, s.left += u.left - u.marginLeft, s.right = m + u.left
                }
            }
            i = i || 0;
            var g = "number" == typeof i;
            return s.left += g ? i : i.left || 0, s.top += g ? i : i.top || 0, s.right -= g ? i : i.right || 0, s.bottom -= g ? i : i.bottom || 0, s
        }

        function z(e) {
            return e.width * e.height
        }

        function E(e, t, i, o, n) {
            var s = arguments.length > 5 && void 0 !== arguments[5] ? arguments[5] : 0;
            if (-1 === e.indexOf("auto")) return e;
            var r = k(i, o, s, n),
                a = {
                    top: {
                        width: r.width,
                        height: t.top - r.top
                    },
                    right: {
                        width: r.right - t.right,
                        height: r.height
                    },
                    bottom: {
                        width: r.width,
                        height: r.bottom - t.bottom
                    },
                    left: {
                        width: t.left - r.left,
                        height: r.height
                    }
                },
                l = Object.keys(a).map(function(e) {
                    return _e({
                        key: e
                    }, a[e], {
                        area: z(a[e])
                    })
                }).sort(function(e, t) {
                    return t.area - e.area
                }),
                c = l.filter(function(e) {
                    var t = e.width,
                        o = e.height;
                    return t >= i.clientWidth && o >= i.clientHeight
                }),
                d = c.length > 0 ? c[0].key : l[0].key,
                u = e.split("-")[1];
            return d + (u ? "-" + u : "")
        }

        function A(e, t, i) {
            var o = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : null;
            return x(i, o ? C(t) : f(t, c(i)), o)
        }

        function O(e) {
            var t = e.ownerDocument.defaultView,
                i = t.getComputedStyle(e),
                o = parseFloat(i.marginTop || 0) + parseFloat(i.marginBottom || 0),
                n = parseFloat(i.marginLeft || 0) + parseFloat(i.marginRight || 0);
            return {
                width: e.offsetWidth + n,
                height: e.offsetHeight + o
            }
        }

        function $(e) {
            var t = {
                left: "right",
                right: "left",
                bottom: "top",
                top: "bottom"
            };
            return e.replace(/left|right|bottom|top/g, function(e) {
                return t[e]
            })
        }

        function L(e, t, i) {
            i = i.split("-")[0];
            var o = O(e),
                n = {
                    width: o.width,
                    height: o.height
                },
                s = -1 !== ["right", "left"].indexOf(i),
                r = s ? "top" : "left",
                a = s ? "left" : "top",
                l = s ? "height" : "width",
                c = s ? "width" : "height";
            return n[r] = t[r] + t[l] / 2 - o[l] / 2, n[a] = i === a ? t[a] - o[c] : t[$(a)], n
        }

        function P(e, t) {
            return Array.prototype.find ? e.find(t) : e.filter(t)[0]
        }

        function W(e, t, i) {
            if (Array.prototype.findIndex) return e.findIndex(function(e) {
                return e[t] === i
            });
            var o = P(e, function(e) {
                return e[t] === i
            });
            return e.indexOf(o)
        }

        function I(e, t, i) {
            return (void 0 === i ? e : e.slice(0, W(e, "name", i))).forEach(function(e) {
                e.function;
                var i = e.function || e.fn;
                e.enabled && s(i) && (t.offsets.popper = b(t.offsets.popper), t.offsets.reference = b(t.offsets.reference), t = i(t, e))
            }), t
        }

        function D() {
            if (!this.state.isDestroyed) {
                var e = {
                    instance: this,
                    styles: {},
                    arrowStyles: {},
                    attributes: {},
                    flipped: !1,
                    offsets: {}
                };
                e.offsets.reference = A(this.state, this.popper, this.reference, this.options.positionFixed), e.placement = E(this.options.placement, e.offsets.reference, this.popper, this.reference, this.options.modifiers.flip.boundariesElement, this.options.modifiers.flip.padding), e.originalPlacement = e.placement, e.positionFixed = this.options.positionFixed, e.offsets.popper = L(this.popper, e.offsets.reference, e.placement), e.offsets.popper.position = this.options.positionFixed ? "fixed" : "absolute", e = I(this.modifiers, e), this.state.isCreated ? this.options.onUpdate(e) : (this.state.isCreated = !0, this.options.onCreate(e))
            }
        }

        function H(e, t) {
            return e.some(function(e) {
                var i = e.name;
                return e.enabled && i === t
            })
        }

        function N(e) {
            for (var t = [!1, "ms", "Webkit", "Moz", "O"], i = e.charAt(0).toUpperCase() + e.slice(1), o = 0; o < t.length; o++) {
                var n = t[o],
                    s = n ? "" + n + i : e;
                if (void 0 !== document.body.style[s]) return s
            }
            return null
        }

        function j() {
            return this.state.isDestroyed = !0, H(this.modifiers, "applyStyle") && (this.popper.removeAttribute("x-placement"), this.popper.style.position = "", this.popper.style.top = "", this.popper.style.left = "", this.popper.style.right = "", this.popper.style.bottom = "", this.popper.style.willChange = "", this.popper.style[N("transform")] = ""), this.disableEventListeners(), this.options.removeOnDestroy && this.popper.parentNode.removeChild(this.popper), this
        }

        function F(e) {
            var t = e.ownerDocument;
            return t ? t.defaultView : window
        }

        function M(e, t, i, o) {
            var n = "BODY" === e.nodeName,
                s = n ? e.ownerDocument.defaultView : e;
            s.addEventListener(t, i, {
                passive: !0
            }), n || M(l(s.parentNode), t, i, o), o.push(s)
        }

        function B(e, t, i, o) {
            i.updateBound = o, F(e).addEventListener("resize", i.updateBound, {
                passive: !0
            });
            var n = l(e);
            return M(n, "scroll", i.updateBound, i.scrollParents), i.scrollElement = n, i.eventsEnabled = !0, i
        }

        function R() {
            this.state.eventsEnabled || (this.state = B(this.reference, this.options, this.state, this.scheduleUpdate))
        }

        function V(e, t) {
            return F(e).removeEventListener("resize", t.updateBound), t.scrollParents.forEach(function(e) {
                e.removeEventListener("scroll", t.updateBound)
            }), t.updateBound = null, t.scrollParents = [], t.scrollElement = null, t.eventsEnabled = !1, t
        }

        function q() {
            this.state.eventsEnabled && (cancelAnimationFrame(this.scheduleUpdate), this.state = V(this.reference, this.state))
        }

        function U(e) {
            return "" !== e && !isNaN(parseFloat(e)) && isFinite(e)
        }

        function Q(e, t) {
            Object.keys(t).forEach(function(i) {
                var o = ""; - 1 !== ["width", "height", "top", "right", "bottom", "left"].indexOf(i) && U(t[i]) && (o = "px"), e.style[i] = t[i] + o
            })
        }

        function Y(e, t) {
            Object.keys(t).forEach(function(i) {
                !1 !== t[i] ? e.setAttribute(i, t[i]) : e.removeAttribute(i)
            })
        }

        function Z(e) {
            return Q(e.instance.popper, e.styles), Y(e.instance.popper, e.attributes), e.arrowElement && Object.keys(e.arrowStyles).length && Q(e.arrowElement, e.arrowStyles), e
        }

        function X(e, t, i, o, n) {
            var s = A(n, t, e, i.positionFixed),
                r = E(i.placement, s, t, e, i.modifiers.flip.boundariesElement, i.modifiers.flip.padding);
            return t.setAttribute("x-placement", r), Q(t, {
                position: i.positionFixed ? "fixed" : "absolute"
            }), i
        }

        function K(e, t) {
            var i = e.offsets,
                o = i.popper,
                n = i.reference,
                s = Math.round,
                r = Math.floor,
                a = function(e) {
                    return e
                },
                l = s(n.width),
                c = s(o.width),
                d = -1 !== ["left", "right"].indexOf(e.placement),
                u = -1 !== e.placement.indexOf("-"),
                h = l % 2 == c % 2,
                p = l % 2 == 1 && c % 2 == 1,
                f = t ? d || u || h ? s : r : a,
                m = t ? s : a;
            return {
                left: f(p && !u && t ? o.left - 1 : o.left),
                top: m(o.top),
                bottom: m(o.bottom),
                right: f(o.right)
            }
        }

        function G(e, t) {
            var i = t.x,
                o = t.y,
                n = e.offsets.popper,
                s = P(e.instance.modifiers, function(e) {
                    return "applyStyle" === e.name
                }).gpuAcceleration,
                r = void 0 !== s ? s : t.gpuAcceleration,
                a = u(e.instance.popper),
                l = _(a),
                c = {
                    position: n.position
                },
                d = K(e, window.devicePixelRatio < 2 || !xe),
                h = "bottom" === i ? "top" : "bottom",
                p = "right" === o ? "left" : "right",
                f = N("transform"),
                m = void 0,
                g = void 0;
            if (g = "bottom" === h ? "HTML" === a.nodeName ? -a.clientHeight + d.bottom : -l.height + d.bottom : d.top, m = "right" === p ? "HTML" === a.nodeName ? -a.clientWidth + d.right : -l.width + d.right : d.left, r && f) c[f] = "translate3d(" + m + "px, " + g + "px, 0)", c[h] = 0, c[p] = 0, c.willChange = "transform";
            else {
                var v = "bottom" === h ? -1 : 1,
                    y = "right" === p ? -1 : 1;
                c[h] = g * v, c[p] = m * y, c.willChange = h + ", " + p
            }
            var w = {
                "x-placement": e.placement
            };
            return e.attributes = _e({}, w, e.attributes), e.styles = _e({}, c, e.styles), e.arrowStyles = _e({}, e.offsets.arrow, e.arrowStyles), e
        }

        function J(e, t, i) {
            var o = P(e, function(e) {
                    return e.name === t
                }),
                n = !!o && e.some(function(e) {
                    return e.name === i && e.enabled && e.order < o.order
                });
            if (!n);
            return n
        }

        function ee(e, t) {
            var i;
            if (!J(e.instance.modifiers, "arrow", "keepTogether")) return e;
            var o = t.element;
            if ("string" == typeof o) {
                if (!(o = e.instance.popper.querySelector(o))) return e
            } else if (!e.instance.popper.contains(o)) return e;
            var n = e.placement.split("-")[0],
                s = e.offsets,
                a = s.popper,
                l = s.reference,
                c = -1 !== ["left", "right"].indexOf(n),
                d = c ? "height" : "width",
                u = c ? "Top" : "Left",
                h = u.toLowerCase(),
                p = c ? "left" : "top",
                f = c ? "bottom" : "right",
                m = O(o)[d];
            l[f] - m < a[h] && (e.offsets.popper[h] -= a[h] - (l[f] - m)), l[h] + m > a[f] && (e.offsets.popper[h] += l[h] + m - a[f]), e.offsets.popper = b(e.offsets.popper);
            var g = l[h] + l[d] / 2 - m / 2,
                v = r(e.instance.popper),
                y = parseFloat(v["margin" + u], 10),
                w = parseFloat(v["border" + u + "Width"], 10),
                _ = g - e.offsets.popper[h] - y - w;
            return _ = Math.max(Math.min(a[d] - m, _), 0), e.arrowElement = o, e.offsets.arrow = (i = {}, be(i, h, Math.round(_)), be(i, p, ""), i), e
        }

        function te(e) {
            return "end" === e ? "start" : "start" === e ? "end" : e
        }

        function ie(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
                i = Te.indexOf(e),
                o = Te.slice(i + 1).concat(Te.slice(0, i));
            return t ? o.reverse() : o
        }

        function oe(e, t) {
            if (H(e.instance.modifiers, "inner")) return e;
            if (e.flipped && e.placement === e.originalPlacement) return e;
            var i = k(e.instance.popper, e.instance.reference, t.padding, t.boundariesElement, e.positionFixed),
                o = e.placement.split("-")[0],
                n = $(o),
                s = e.placement.split("-")[1] || "",
                r = [];
            switch (t.behavior) {
                case Ce.FLIP:
                    r = [o, n];
                    break;
                case Ce.CLOCKWISE:
                    r = ie(o);
                    break;
                case Ce.COUNTERCLOCKWISE:
                    r = ie(o, !0);
                    break;
                default:
                    r = t.behavior
            }
            return r.forEach(function(a, l) {
                if (o !== a || r.length === l + 1) return e;
                o = e.placement.split("-")[0], n = $(o);
                var c = e.offsets.popper,
                    d = e.offsets.reference,
                    u = Math.floor,
                    h = "left" === o && u(c.right) > u(d.left) || "right" === o && u(c.left) < u(d.right) || "top" === o && u(c.bottom) > u(d.top) || "bottom" === o && u(c.top) < u(d.bottom),
                    p = u(c.left) < u(i.left),
                    f = u(c.right) > u(i.right),
                    m = u(c.top) < u(i.top),
                    g = u(c.bottom) > u(i.bottom),
                    v = "left" === o && p || "right" === o && f || "top" === o && m || "bottom" === o && g,
                    y = -1 !== ["top", "bottom"].indexOf(o),
                    w = !!t.flipVariations && (y && "start" === s && p || y && "end" === s && f || !y && "start" === s && m || !y && "end" === s && g),
                    b = !!t.flipVariationsByContent && (y && "start" === s && f || y && "end" === s && p || !y && "start" === s && g || !y && "end" === s && m),
                    _ = w || b;
                (h || v || _) && (e.flipped = !0, (h || v) && (o = r[l + 1]), _ && (s = te(s)), e.placement = o + (s ? "-" + s : ""), e.offsets.popper = _e({}, e.offsets.popper, L(e.instance.popper, e.offsets.reference, e.placement)), e = I(e.instance.modifiers, e, "flip"))
            }), e
        }

        function ne(e) {
            var t = e.offsets,
                i = t.popper,
                o = t.reference,
                n = e.placement.split("-")[0],
                s = Math.floor,
                r = -1 !== ["top", "bottom"].indexOf(n),
                a = r ? "right" : "bottom",
                l = r ? "left" : "top",
                c = r ? "width" : "height";
            return i[a] < s(o[l]) && (e.offsets.popper[l] = s(o[l]) - i[c]), i[l] > s(o[a]) && (e.offsets.popper[l] = s(o[a])), e
        }

        function se(e, t, i, o) {
            var n = e.match(/((?:\-|\+)?\d*\.?\d*)(.*)/),
                s = +n[1],
                r = n[2];
            if (!s) return e;
            if (0 === r.indexOf("%")) {
                var a = void 0;
                switch (r) {
                    case "%p":
                        a = i;
                        break;
                    case "%":
                    case "%r":
                    default:
                        a = o
                }
                return b(a)[t] / 100 * s
            }
            if ("vh" === r || "vw" === r) {
                return ("vh" === r ? Math.max(document.documentElement.clientHeight, window.innerHeight || 0) : Math.max(document.documentElement.clientWidth, window.innerWidth || 0)) / 100 * s
            }
            return s
        }

        function re(e, t, i, o) {
            var n = [0, 0],
                s = -1 !== ["right", "left"].indexOf(o),
                r = e.split(/(\+|\-)/).map(function(e) {
                    return e.trim()
                }),
                a = r.indexOf(P(r, function(e) {
                    return -1 !== e.search(/,|\s/)
                }));
            r[a] && r[a].indexOf(",");
            var l = /\s*,\s*|\s+/,
                c = -1 !== a ? [r.slice(0, a).concat([r[a].split(l)[0]]), [r[a].split(l)[1]].concat(r.slice(a + 1))] : [r];
            return c = c.map(function(e, o) {
                var n = (1 === o ? !s : s) ? "height" : "width",
                    r = !1;
                return e.reduce(function(e, t) {
                    return "" === e[e.length - 1] && -1 !== ["+", "-"].indexOf(t) ? (e[e.length - 1] = t, r = !0, e) : r ? (e[e.length - 1] += t, r = !1, e) : e.concat(t)
                }, []).map(function(e) {
                    return se(e, n, t, i)
                })
            }), c.forEach(function(e, t) {
                e.forEach(function(i, o) {
                    U(i) && (n[t] += i * ("-" === e[o - 1] ? -1 : 1))
                })
            }), n
        }

        function ae(e, t) {
            var i = t.offset,
                o = e.placement,
                n = e.offsets,
                s = n.popper,
                r = n.reference,
                a = o.split("-")[0],
                l = void 0;
            return l = U(+i) ? [+i, 0] : re(i, s, r, a), "left" === a ? (s.top += l[0], s.left -= l[1]) : "right" === a ? (s.top += l[0], s.left += l[1]) : "top" === a ? (s.left += l[0], s.top -= l[1]) : "bottom" === a && (s.left += l[0], s.top += l[1]), e.popper = s, e
        }

        function le(e, t) {
            var i = t.boundariesElement || u(e.instance.popper);
            e.instance.reference === i && (i = u(i));
            var o = N("transform"),
                n = e.instance.popper.style,
                s = n.top,
                r = n.left,
                a = n[o];
            n.top = "", n.left = "", n[o] = "";
            var l = k(e.instance.popper, e.instance.reference, t.padding, i, e.positionFixed);
            n.top = s, n.left = r, n[o] = a, t.boundaries = l;
            var c = t.priority,
                d = e.offsets.popper,
                h = {
                    primary: function(e) {
                        var i = d[e];
                        return d[e] < l[e] && !t.escapeWithReference && (i = Math.max(d[e], l[e])), be({}, e, i)
                    },
                    secondary: function(e) {
                        var i = "right" === e ? "left" : "top",
                            o = d[i];
                        return d[e] > l[e] && !t.escapeWithReference && (o = Math.min(d[i], l[e] - ("right" === e ? d.width : d.height))), be({}, i, o)
                    }
                };
            return c.forEach(function(e) {
                var t = -1 !== ["left", "top"].indexOf(e) ? "primary" : "secondary";
                d = _e({}, d, h[t](e))
            }), e.offsets.popper = d, e
        }

        function ce(e) {
            var t = e.placement,
                i = t.split("-")[0],
                o = t.split("-")[1];
            if (o) {
                var n = e.offsets,
                    s = n.reference,
                    r = n.popper,
                    a = -1 !== ["bottom", "top"].indexOf(i),
                    l = a ? "left" : "top",
                    c = a ? "width" : "height",
                    d = {
                        start: be({}, l, s[l]),
                        end: be({}, l, s[l] + s[c] - r[c])
                    };
                e.offsets.popper = _e({}, r, d[o])
            }
            return e
        }

        function de(e) {
            if (!J(e.instance.modifiers, "hide", "preventOverflow")) return e;
            var t = e.offsets.reference,
                i = P(e.instance.modifiers, function(e) {
                    return "preventOverflow" === e.name
                }).boundaries;
            if (t.bottom < i.top || t.left > i.right || t.top > i.bottom || t.right < i.left) {
                if (!0 === e.hide) return e;
                e.hide = !0, e.attributes["x-out-of-boundaries"] = ""
            } else {
                if (!1 === e.hide) return e;
                e.hide = !1, e.attributes["x-out-of-boundaries"] = !1
            }
            return e
        }

        function ue(e) {
            var t = e.placement,
                i = t.split("-")[0],
                o = e.offsets,
                n = o.popper,
                s = o.reference,
                r = -1 !== ["left", "right"].indexOf(i),
                a = -1 === ["top", "left"].indexOf(i);
            return n[r ? "left" : "top"] = s[i] - (a ? n[r ? "width" : "height"] : 0), e.placement = $(t), e.offsets.popper = b(n), e
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var he = "undefined" != typeof window && "undefined" != typeof document && "undefined" != typeof navigator,
            pe = function() {
                for (var e = ["Edge", "Trident", "Firefox"], t = 0; t < e.length; t += 1)
                    if (he && navigator.userAgent.indexOf(e[t]) >= 0) return 1;
                return 0
            }(),
            fe = he && window.Promise,
            me = fe ? o : n,
            ge = he && !(!window.MSInputMethodContext || !document.documentMode),
            ve = he && /MSIE 10/.test(navigator.userAgent),
            ye = function(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            },
            we = function() {
                function e(e, t) {
                    for (var i = 0; i < t.length; i++) {
                        var o = t[i];
                        o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
                    }
                }
                return function(t, i, o) {
                    return i && e(t.prototype, i), o && e(t, o), t
                }
            }(),
            be = function(e, t, i) {
                return t in e ? Object.defineProperty(e, t, {
                    value: i,
                    enumerable: !0,
                    configurable: !0,
                    writable: !0
                }) : e[t] = i, e
            },
            _e = Object.assign || function(e) {
                for (var t = 1; t < arguments.length; t++) {
                    var i = arguments[t];
                    for (var o in i) Object.prototype.hasOwnProperty.call(i, o) && (e[o] = i[o])
                }
                return e
            },
            xe = he && /Firefox/i.test(navigator.userAgent),
            Se = ["auto-start", "auto", "auto-end", "top-start", "top", "top-end", "right-start", "right", "right-end", "bottom-end", "bottom", "bottom-start", "left-end", "left", "left-start"],
            Te = Se.slice(3),
            Ce = {
                FLIP: "flip",
                CLOCKWISE: "clockwise",
                COUNTERCLOCKWISE: "counterclockwise"
            },
            ke = {
                shift: {
                    order: 100,
                    enabled: !0,
                    fn: ce
                },
                offset: {
                    order: 200,
                    enabled: !0,
                    fn: ae,
                    offset: 0
                },
                preventOverflow: {
                    order: 300,
                    enabled: !0,
                    fn: le,
                    priority: ["left", "right", "top", "bottom"],
                    padding: 5,
                    boundariesElement: "scrollParent"
                },
                keepTogether: {
                    order: 400,
                    enabled: !0,
                    fn: ne
                },
                arrow: {
                    order: 500,
                    enabled: !0,
                    fn: ee,
                    element: "[x-arrow]"
                },
                flip: {
                    order: 600,
                    enabled: !0,
                    fn: oe,
                    behavior: "flip",
                    padding: 5,
                    boundariesElement: "viewport",
                    flipVariations: !1,
                    flipVariationsByContent: !1
                },
                inner: {
                    order: 700,
                    enabled: !1,
                    fn: ue
                },
                hide: {
                    order: 800,
                    enabled: !0,
                    fn: de
                },
                computeStyle: {
                    order: 850,
                    enabled: !0,
                    fn: G,
                    gpuAcceleration: !0,
                    x: "bottom",
                    y: "right"
                },
                applyStyle: {
                    order: 900,
                    enabled: !0,
                    fn: Z,
                    onLoad: X,
                    gpuAcceleration: void 0
                }
            },
            ze = {
                placement: "bottom",
                positionFixed: !1,
                eventsEnabled: !0,
                removeOnDestroy: !1,
                onCreate: function() {},
                onUpdate: function() {},
                modifiers: ke
            },
            Ee = function() {
                function e(t, i) {
                    var o = this,
                        n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
                    ye(this, e), this.scheduleUpdate = function() {
                        return requestAnimationFrame(o.update)
                    }, this.update = me(this.update.bind(this)), this.options = _e({}, e.Defaults, n), this.state = {
                        isDestroyed: !1,
                        isCreated: !1,
                        scrollParents: []
                    }, this.reference = t && t.jquery ? t[0] : t, this.popper = i && i.jquery ? i[0] : i, this.options.modifiers = {}, Object.keys(_e({}, e.Defaults.modifiers, n.modifiers)).forEach(function(t) {
                        o.options.modifiers[t] = _e({}, e.Defaults.modifiers[t] || {}, n.modifiers ? n.modifiers[t] : {})
                    }), this.modifiers = Object.keys(this.options.modifiers).map(function(e) {
                        return _e({
                            name: e
                        }, o.options.modifiers[e])
                    }).sort(function(e, t) {
                        return e.order - t.order
                    }), this.modifiers.forEach(function(e) {
                        e.enabled && s(e.onLoad) && e.onLoad(o.reference, o.popper, o.options, e, o.state)
                    }), this.update();
                    var r = this.options.eventsEnabled;
                    r && this.enableEventListeners(), this.state.eventsEnabled = r
                }
                return we(e, [{
                    key: "update",
                    value: function() {
                        return D.call(this)
                    }
                }, {
                    key: "destroy",
                    value: function() {
                        return j.call(this)
                    }
                }, {
                    key: "enableEventListeners",
                    value: function() {
                        return R.call(this)
                    }
                }, {
                    key: "disableEventListeners",
                    value: function() {
                        return q.call(this)
                    }
                }]), e
            }();
        Ee.Utils = ("undefined" != typeof window ? window : i).PopperUtils, Ee.placements = Se, Ee.Defaults = ze, t.default = Ee, e.exports = t.default
    }).call(t, i(29))
}, function(e, t, i) {
    "use strict";
    var o = i(28);
    e.exports = function(e, t, i) {
        return void 0 === i ? o(e, t, !1) : o(e, i, !1 !== t)
    }
}, function(e, t, i) {
    "use strict";
    e.exports = function(e, t, i, o) {
        function n() {
            function n() {
                r = Number(new Date), i.apply(l, d)
            }

            function a() {
                s = void 0
            }
            var l = this,
                c = Number(new Date) - r,
                d = arguments;
            o && !s && n(), s && clearTimeout(s), void 0 === o && c > e ? n() : !0 !== t && (s = setTimeout(o ? a : n, void 0 === o ? e - c : e))
        }
        var s, r = 0;
        return "boolean" != typeof t && (o = i, i = t, t = void 0), n
    }
}, function(e, t, i) {
    "use strict";
    var o;
    o = function() {
        return this
    }();
    try {
        o = o || Function("return this")() || (0, eval)("this")
    } catch (e) {
        "object" == typeof window && (o = window)
    }
    e.exports = o
}, function(e, t, i) {
    i(3), e.exports = i(4)
}]);