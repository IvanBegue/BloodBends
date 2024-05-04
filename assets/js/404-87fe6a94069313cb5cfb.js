/*! For license information please see 404-87fe6a94069313cb5cfb.js.LICENSE.txt */
"use strict";
(self.webpackChunk = self.webpackChunk || []).push([
    [404], {
        6497: (t, e, c) => {
            var i = c(9484);
            e.Z = t => {
                let {
                    cart: e = {},
                    rate: c = 1
                } = t;
                const n = {
                    amount: 0,
                    subTotal: 0
                };
                return e.items && e.items.length && e.items.forEach((t => {
                    var e;
                    "products" === t.namespace && (t.services && t.services.length && t.services.forEach((t => {
                        n.amount += i.priceConversion({
                            price: t.final_price,
                            rate: c
                        }), n.subTotal += i.priceConversion({
                            price: t.price,
                            rate: c
                        })
                    })), (null === (e = t.support) || void 0 === e ? void 0 : e.length) && t.support.forEach((t => {
                        n.amount += i.priceConversion({
                            price: t.final_price,
                            rate: c
                        }), n.subTotal += i.priceConversion({
                            price: t.price,
                            rate: c
                        })
                    })));
                    n.amount += i.priceConversion({
                        price: t.final_price,
                        rate: c
                    }), n.subTotal += i.priceConversion({
                        price: t.price,
                        rate: c
                    })
                })), n
            }
        },
        9012: (t, e, c) => {
            function i(t) {
                var e = t.src,
                    c = void 0 === e ? "" : e,
                    i = t.width,
                    n = void 0 === i ? "" : i,
                    r = t.height,
                    l = void 0 === r ? "" : r;
                if (!c.trim()) return "";
                var o = [];
                return n && o.push("width=".concat(Math.round(n))), l && o.push("height=".concat(Math.round(l))), "".concat(c, "?").concat(o.join("&"))
            }
            c.d(e, {
                C: () => i
            })
        },
        3975: (t, e, c) => {
            c.d(e, {
                Z: () => k
            });
            var i = c(4234),
                n = c(6943),
                r = c(3727),
                l = c(1078),
                o = c(9484),
                a = c(7044),
                s = c(6497),
                p = c(4522),
                u = c(5185);

            function d(t) {
                let e;
                const c = t[4].default,
                    n = (0, i.nuO)(c, t, t[3], null);
                return {
                    c() {
                        n && n.c()
                    },
                    m(t, c) {
                        n && n.m(t, c), e = !0
                    },
                    p(t, r) {
                        n && n.p && (!e || 8 & r) && (0, i.kmG)(n, c, t, t[3], e ? (0, i.u2N)(c, t[3], r, null) : (0, i.VOJ)(t[3]), null)
                    },
                    i(t) {
                        e || ((0, i.Ui)(n, t), e = !0)
                    },
                    o(t) {
                        (0, i.etI)(n, t), e = !1
                    },
                    d(t) {
                        n && n.d(t)
                    }
                }
            }

            function m(t) {
                let e, c;
                return e = new u.Z({
                    props: {
                        width: t[0],
                        height: t[1]
                    }
                }), {
                    c() {
                        (0, i.YCL)(e.$$.fragment)
                    },
                    m(t, n) {
                        (0, i.yef)(e, t, n), c = !0
                    },
                    p(t, c) {
                        const i = {};
                        1 & c && (i.width = t[0]), 2 & c && (i.height = t[1]), e.$set(i)
                    },
                    i(t) {
                        c || ((0, i.Ui)(e.$$.fragment, t), c = !0)
                    },
                    o(t) {
                        (0, i.etI)(e.$$.fragment, t), c = !1
                    },
                    d(t) {
                        (0, i.vpE)(e, t)
                    }
                }
            }

            function f(t) {
                let e, c, n, r;
                const l = [m, d],
                    o = [];

                function a(t, e) {
                    return t[2].isProductDataUpdating ? 0 : 1
                }
                return e = a(t), c = o[e] = l[e](t), {
                    c() {
                        c.c(), n = (0, i.cSb)()
                    },
                    m(t, c) {
                        o[e].m(t, c), (0, i.$Tr)(t, n, c), r = !0
                    },
                    p(t, [r]) {
                        let s = e;
                        e = a(t), e === s ? o[e].p(t, r) : ((0, i.dvw)(), (0, i.etI)(o[s], 1, 1, (() => {
                            o[s] = null
                        })), (0, i.gbL)(), c = o[e], c ? c.p(t, r) : (c = o[e] = l[e](t), c.c()), (0, i.Ui)(c, 1), c.m(n.parentNode, n))
                    },
                    i(t) {
                        r || ((0, i.Ui)(c), r = !0)
                    },
                    o(t) {
                        (0, i.etI)(c), r = !1
                    },
                    d(t) {
                        o[e].d(t), t && (0, i.ogt)(n)
                    }
                }
            }

            function h(t, e, c) {
                let r;
                (0, i.FIv)(t, n.Z, (t => c(2, r = t)));
                let {
                    $$slots: l = {},
                    $$scope: o
                } = e, {
                    width: a
                } = e, {
                    height: s
                } = e;
                return t.$$set = t => {
                    "width" in t && c(0, a = t.width), "height" in t && c(1, s = t.height), "$$scope" in t && c(3, o = t.$$scope)
                }, [a, s, r, o, l]
            }
            class $ extends i.f_C {
                constructor(t) {
                    super(), (0, i.S1n)(this, t, h, f, i.N8, {
                        width: 0,
                        height: 1
                    })
                }
            }
            const I = $;
            var g = c(4287),
                v = c(1208),
                L = c(9661),
                b = c(3081);

            function R(t) {
                let e, c, n, r, l, o, a, s, p, u, d, m, f, h = t[8] > 0 && _(t);
                return p = new I({
                    props: {
                        width: "fixed",
                        height: "medium",
                        $$slots: {
                            default: [j]
                        },
                        $$scope: {
                            ctx: t
                        }
                    }
                }), {
                    c() {
                        e = (0, i.bGB)("div"), h && h.c(), c = (0, i.DhX)(), n = (0, i.bGB)("div"), r = (0, i.bGB)("span"), l = (0, i.fLW)(t[0]), o = (0, i.fLW)(":"), a = (0, i.DhX)(), s = (0, i.bGB)("span"), (0, i.YCL)(p.$$.fragment), u = (0, i.DhX)(), d = (0, i.bGB)("a"), m = (0, i.fLW)(t[3]), (0, i.Ljt)(r, "class", "cart-modal-checkout-price-caption"), (0, i.Ljt)(s, "class", "cart-modal-checkout-price-total"), (0, i.Ljt)(n, "class", "cart-modal-checkout-price"), (0, i.Ljt)(d, "href", t[9]), (0, i.Ljt)(d, "class", "cart-modal-checkout-btn btn btn_1"), (0, i.Ljt)(e, "class", "cart-modal-checkout")
                    },
                    m(t, $) {
                        (0, i.$Tr)(t, e, $), h && h.m(e, null), (0, i.R3I)(e, c), (0, i.R3I)(e, n), (0, i.R3I)(n, r), (0, i.R3I)(r, l), (0, i.R3I)(r, o), (0, i.R3I)(n, a), (0, i.R3I)(n, s), (0, i.yef)(p, s, null), (0, i.R3I)(e, u), (0, i.R3I)(e, d), (0, i.R3I)(d, m), f = !0
                    },
                    p(t, n) {
                        t[8] > 0 ? h ? (h.p(t, n), 256 & n && (0, i.Ui)(h, 1)) : (h = _(t), h.c(), (0, i.Ui)(h, 1), h.m(e, c)) : h && ((0, i.dvw)(), (0, i.etI)(h, 1, 1, (() => {
                            h = null
                        })), (0, i.gbL)()), (!f || 1 & n) && (0, i.rTO)(l, t[0]);
                        const r = {};
                        131200 & n && (r.$$scope = {
                            dirty: n,
                            ctx: t
                        }), p.$set(r), (!f || 8 & n) && (0, i.rTO)(m, t[3]), (!f || 512 & n) && (0, i.Ljt)(d, "href", t[9])
                    },
                    i(t) {
                        f || ((0, i.Ui)(h), (0, i.Ui)(p.$$.fragment, t), f = !0)
                    },
                    o(t) {
                        (0, i.etI)(h), (0, i.etI)(p.$$.fragment, t), f = !1
                    },
                    d(t) {
                        t && (0, i.ogt)(e), h && h.d(), (0, i.vpE)(p)
                    }
                }
            }

            function B(t) {
                let e, c, n, r, l, o, a, s, p, u, d, m;
                s = new I({
                    props: {
                        width: "fixed",
                        height: "medium",
                        $$slots: {
                            default: [T]
                        },
                        $$scope: {
                            ctx: t
                        }
                    }
                });
                let f = t[4] && D(t);
                const h = t[16].default,
                    $ = (0, i.nuO)(h, t, t[17], null);
                return {
                    c() {
                        e = (0, i.bGB)("div"), c = (0, i.bGB)("div"), n = (0, i.bGB)("span"), r = (0, i.fLW)(t[2]), l = (0, i.fLW)(":"), o = (0, i.DhX)(), a = (0, i.bGB)("span"), (0, i.YCL)(s.$$.fragment), p = (0, i.DhX)(), u = (0, i.bGB)("div"), f && f.c(), d = (0, i.DhX)(), $ && $.c(), (0, i.Ljt)(n, "class", "cart-modal-checkout-price-caption"), (0, i.Ljt)(a, "class", "cart-modal-checkout-price-total"), (0, i.Ljt)(c, "class", "cart-modal-checkout-price"), (0, i.Ljt)(u, "class", "cart-modal-checkout-buttons"), (0, i.Ljt)(e, "class", "cart-modal-checkout")
                    },
                    m(t, h) {
                        (0, i.$Tr)(t, e, h), (0, i.R3I)(e, c), (0, i.R3I)(c, n), (0, i.R3I)(n, r), (0, i.R3I)(n, l), (0, i.R3I)(c, o), (0, i.R3I)(c, a), (0, i.yef)(s, a, null), (0, i.R3I)(e, p), (0, i.R3I)(e, u), f && f.m(u, null), (0, i.R3I)(e, d), $ && $.m(e, null), m = !0
                    },
                    p(t, e) {
                        (!m || 4 & e) && (0, i.rTO)(r, t[2]);
                        const c = {};
                        132096 & e && (c.$$scope = {
                            dirty: e,
                            ctx: t
                        }), s.$set(c), t[4] ? f ? f.p(t, e) : (f = D(t), f.c(), f.m(u, null)) : f && (f.d(1), f = null), $ && $.p && (!m || 131072 & e) && (0, i.kmG)($, h, t, t[17], m ? (0, i.u2N)(h, t[17], e, null) : (0, i.VOJ)(t[17]), null)
                    },
                    i(t) {
                        m || ((0, i.Ui)(s.$$.fragment, t), (0, i.Ui)($, t), m = !0)
                    },
                    o(t) {
                        (0, i.etI)(s.$$.fragment, t), (0, i.etI)($, t), m = !1
                    },
                    d(t) {
                        t && (0, i.ogt)(e), (0, i.vpE)(s), f && f.d(), $ && $.d(t)
                    }
                }
            }

            function _(t) {
                let e, c, n, r, o, a, s, p = (0, l._B)(t[6].fee) + "";
                return r = new g.Z({
                    props: {
                        content: t[6] ? .text,
                        className: "cart-modal-checkout-tooltip",
                        $$slots: {
                            default: [C]
                        },
                        $$scope: {
                            ctx: t
                        }
                    }
                }), {
                    c() {
                        e = (0, i.bGB)("div"), c = (0, i.fLW)(t[1]), n = (0, i.DhX)(), (0, i.YCL)(r.$$.fragment), o = (0, i.DhX)(), a = (0, i.fLW)(p), (0, i.Ljt)(e, "class", "cart-modal-checkout-fee")
                    },
                    m(t, l) {
                        (0, i.$Tr)(t, e, l), (0, i.R3I)(e, c), (0, i.R3I)(e, n), (0, i.yef)(r, e, null), (0, i.R3I)(e, o), (0, i.R3I)(e, a), s = !0
                    },
                    p(t, e) {
                        (!s || 2 & e) && (0, i.rTO)(c, t[1]);
                        const n = {};
                        64 & e && (n.content = t[6] ? .text), 131072 & e && (n.$$scope = {
                            dirty: e,
                            ctx: t
                        }), r.$set(n), (!s || 64 & e) && p !== (p = (0, l._B)(t[6].fee) + "") && (0, i.rTO)(a, p)
                    },
                    i(t) {
                        s || ((0, i.Ui)(r.$$.fragment, t), s = !0)
                    },
                    o(t) {
                        (0, i.etI)(r.$$.fragment, t), s = !1
                    },
                    d(t) {
                        t && (0, i.ogt)(e), (0, i.vpE)(r)
                    }
                }
            }

            function C(t) {
                let e, c;
                return e = new L.Z({
                    props: {
                        src: v,
                        className: "cart-modal-tooltip-icon"
                    }
                }), {
                    c() {
                        (0, i.YCL)(e.$$.fragment)
                    },
                    m(t, n) {
                        (0, i.yef)(e, t, n), c = !0
                    },
                    p: i.ZTd,
                    i(t) {
                        c || ((0, i.Ui)(e.$$.fragment, t), c = !0)
                    },
                    o(t) {
                        (0, i.etI)(e.$$.fragment, t), c = !1
                    },
                    d(t) {
                        (0, i.vpE)(e, t)
                    }
                }
            }

            function j(t) {
                let e, c;
                return {
                    c() {
                        e = (0, i.bGB)("span"), c = (0, i.fLW)(t[7])
                    },
                    m(t, n) {
                        (0, i.$Tr)(t, e, n), (0, i.R3I)(e, c)
                    },
                    p(t, e) {
                        128 & e && (0, i.rTO)(c, t[7])
                    },
                    d(t) {
                        t && (0, i.ogt)(e)
                    }
                }
            }

            function T(t) {
                let e, c;
                return {
                    c() {
                        e = (0, i.bGB)("span"), c = (0, i.fLW)(t[10])
                    },
                    m(t, n) {
                        (0, i.$Tr)(t, e, n), (0, i.R3I)(e, c)
                    },
                    p(t, e) {
                        1024 & e && (0, i.rTO)(c, t[10])
                    },
                    d(t) {
                        t && (0, i.ogt)(e)
                    }
                }
            }

            function D(t) {
                let e, c, n, r;
                return {
                    c() {
                        e = (0, i.bGB)("span"), c = (0, i.fLW)(t[4]), (0, i.Ljt)(e, "class", "cart-modal-checkout-btn cart-modal-checkout-btn_cart btn btn_1")
                    },
                    m(l, o) {
                        (0, i.$Tr)(l, e, o), (0, i.R3I)(e, c), n || (r = (0, i.oLt)(e, "click", t[11]), n = !0)
                    },
                    p(t, e) {
                        16 & e && (0, i.rTO)(c, t[4])
                    },
                    d(t) {
                        t && (0, i.ogt)(e), n = !1, r()
                    }
                }
            }

            function y(t) {
                let e, c, n, r;
                const l = [B, R],
                    o = [];

                function a(t, e) {
                    return t[5] ? 0 : 1
                }
                return e = a(t), c = o[e] = l[e](t), {
                    c() {
                        c.c(), n = (0, i.cSb)()
                    },
                    m(t, c) {
                        o[e].m(t, c), (0, i.$Tr)(t, n, c), r = !0
                    },
                    p(t, [r]) {
                        let s = e;
                        e = a(t), e === s ? o[e].p(t, r) : ((0, i.dvw)(), (0, i.etI)(o[s], 1, 1, (() => {
                            o[s] = null
                        })), (0, i.gbL)(), c = o[e], c ? c.p(t, r) : (c = o[e] = l[e](t), c.c()), (0, i.Ui)(c, 1), c.m(n.parentNode, n))
                    },
                    i(t) {
                        r || ((0, i.Ui)(c), r = !0)
                    },
                    o(t) {
                        (0, i.etI)(c), r = !1
                    },
                    d(t) {
                        o[e].d(t), t && (0, i.ogt)(n)
                    }
                }
            }

            function G(t, e, c) {
                let u, d, m, f, h, $, I;
                (0, i.FIv)(t, n.Z, (t => c(15, I = t)));
                let {
                    $$slots: g = {},
                    $$scope: v
                } = e, {
                    priceCaption: L
                } = e, {
                    feeCaption: R
                } = e, {
                    singlePriceCaption: B
                } = e, {
                    priceButtonLabel: _
                } = e, {
                    singleTotalPrice: C
                } = e, {
                    viewCartLabel: j
                } = e, {
                    isSingleProductCart: T = !1
                } = e, D = "";
                (0, b.UK)();
                let y = [],
                    G = !1,
                    P = {};

                function k(t) {
                    const e = (0, a.k$)(t, y);
                    c(6, P = {
                        text: e ? .tooltip[p.Z.locale] || e ? .tooltip.en || e ? .text || "",
                        fee: e ? .fee || 0
                    }), c(7, $ = (0, o.currencyFormatter)(d.amount + ((0, l.YQ)(e ? .fee) || 0), {
                        currency: I.cartModal ? .currency ? .code || "USD",
                        locale: p.Z.apiLocale || "en"
                    }))
                }
                return t.$$set = t => {
                    "priceCaption" in t && c(0, L = t.priceCaption), "feeCaption" in t && c(1, R = t.feeCaption), "singlePriceCaption" in t && c(2, B = t.singlePriceCaption), "priceButtonLabel" in t && c(3, _ = t.priceButtonLabel), "singleTotalPrice" in t && c(12, C = t.singleTotalPrice), "viewCartLabel" in t && c(4, j = t.viewCartLabel), "isSingleProductCart" in t && c(5, T = t.isSingleProductCart), "$$scope" in t && c(17, v = t.$$scope)
                }, t.$$.update = () => {
                    4096 & t.$$.dirty && c(10, u = (0, l._B)(C)), 32768 & t.$$.dirty && c(13, d = (0, s.Z)({
                        cart: I.cartModal,
                        rate: I.cartModal.currency ? .rate
                    })), 41024 & t.$$.dirty && c(7, $ = (0, o.currencyFormatter)(d.amount + ((0, l.YQ)(P ? .fee) || 0), {
                        currency: I.cartModal ? .currency ? .code || "USD",
                        locale: p.Z.apiLocale || "en"
                    })), 128 & t.$$.dirty && async function(t) {
                        c(9, D = await (0, r.VC)(I))
                    }(), 32768 & t.$$.dirty && c(14, m = I.cartModal.handlingFee), 16384 & t.$$.dirty && m.length && !G && (G = !0, y = m, k()), 32768 & t.$$.dirty && c(8, f = I.cartModal.total.amount), 256 & t.$$.dirty && k(f), 32768 & t.$$.dirty && (h = I.cartModal ? .currency ? .code ? .toLowerCase() || "usd")
                }, [L, R, B, _, j, T, P, $, f, D, u, function() {
                    (0, r.K4)(), n.Z.setIsSingleCartModalOpen(!1), n.Z.setIsCartModalOpen(!0)
                }, C, d, m, I, g, v]
            }
            class P extends i.f_C {
                constructor(t) {
                    super(), (0, i.S1n)(this, t, G, y, i.N8, {
                        priceCaption: 0,
                        feeCaption: 1,
                        singlePriceCaption: 2,
                        priceButtonLabel: 3,
                        singleTotalPrice: 12,
                        viewCartLabel: 4,
                        isSingleProductCart: 5
                    })
                }
            }
            const k = P
        },
        7260: (t, e, c) => {
            c.d(e, {
                Z: () => L
            });
            var i = c(4234),
                n = c(8568),
                r = c(4522),
                l = c(6943),
                o = c(1432),
                a = c(6573),
                s = c(1078);

            function p(t, e, c) {
                const i = t.slice();
                return i[22] = e[c], i[24] = c, i
            }

            function u(t) {
                let e, c, n, r, l, o, a, s, p, u, f, h, $, I, g, v, L, b, R = t[0] ? "" : ":",
                    B = t[6].name + "",
                    _ = (t[6].isDiscount ? t[6].finalPrice : t[6].price) + "",
                    C = t[6].isDiscount && d(t),
                    j = t[0] && m(t);
                return {
                    c() {
                        e = (0, i.bGB)("div"), c = (0, i.bGB)("span"), n = (0, i.fLW)(t[1]), r = (0, i.fLW)(R), l = (0, i.DhX)(), o = (0, i.bGB)("div"), a = (0, i.bGB)("div"), s = (0, i.fLW)(B), u = (0, i.DhX)(), f = (0, i.bGB)("span"), C && C.c(), h = (0, i.DhX)(), $ = (0, i.bGB)("strong"), I = (0, i.fLW)(_), v = (0, i.DhX)(), j && j.c(), (0, i.Ljt)(c, "class", "cart-modal-license-caption"), (0, i.Ljt)(a, "class", p = "cart-modal-license-name " + (t[2].length > 1 && t[0] ? "cart-modal-license-button" : "") + " " + (t[4] ? "cart-modal-license-button_active" : "")), (0, i.Ljt)($, "class", g = "cart-modal-price " + (t[10](t[5], t[3].price).isDiscount ? "cart-modal-price_discount" : "")), (0, i.Ljt)(f, "class", "cart-modal-prices"), (0, i.Ljt)(o, "class", "cart-modal-license-content"), (0, i.Ljt)(e, "class", "cart-modal-license")
                    },
                    m(p, d) {
                        (0, i.$Tr)(p, e, d), (0, i.R3I)(e, c), (0, i.R3I)(c, n), (0, i.R3I)(c, r), (0, i.R3I)(e, l), (0, i.R3I)(e, o), (0, i.R3I)(o, a), (0, i.R3I)(a, s), (0, i.R3I)(o, u), (0, i.R3I)(o, f), C && C.m(f, null), (0, i.R3I)(f, h), (0, i.R3I)(f, $), (0, i.R3I)($, I), (0, i.R3I)(o, v), j && j.m(o, null), L || (b = (0, i.oLt)(a, "click", t[8]), L = !0)
                    },
                    p(t, e) {
                        2 & e && (0, i.rTO)(n, t[1]), 1 & e && R !== (R = t[0] ? "" : ":") && (0, i.rTO)(r, R), 64 & e && B !== (B = t[6].name + "") && (0, i.rTO)(s, B), 21 & e && p !== (p = "cart-modal-license-name " + (t[2].length > 1 && t[0] ? "cart-modal-license-button" : "") + " " + (t[4] ? "cart-modal-license-button_active" : "")) && (0, i.Ljt)(a, "class", p), t[6].isDiscount ? C ? C.p(t, e) : (C = d(t), C.c(), C.m(f, h)) : C && (C.d(1), C = null), 64 & e && _ !== (_ = (t[6].isDiscount ? t[6].finalPrice : t[6].price) + "") && (0, i.rTO)(I, _), 40 & e && g !== (g = "cart-modal-price " + (t[10](t[5], t[3].price).isDiscount ? "cart-modal-price_discount" : "")) && (0, i.Ljt)($, "class", g), t[0] ? j ? j.p(t, e) : (j = m(t), j.c(), j.m(o, null)) : j && (j.d(1), j = null)
                    },
                    d(t) {
                        t && (0, i.ogt)(e), C && C.d(), j && j.d(), L = !1, b()
                    }
                }
            }

            function d(t) {
                let e, c, n = t[6].price + "";
                return {
                    c() {
                        e = (0, i.bGB)("strong"), c = (0, i.fLW)(n), (0, i.Ljt)(e, "class", "cart-modal-price cart-modal-price_regular")
                    },
                    m(t, n) {
                        (0, i.$Tr)(t, e, n), (0, i.R3I)(e, c)
                    },
                    p(t, e) {
                        64 & e && n !== (n = t[6].price + "") && (0, i.rTO)(c, n)
                    },
                    d(t) {
                        t && (0, i.ogt)(e)
                    }
                }
            }

            function m(t) {
                let e, c, n, r = t[7],
                    l = [];
                for (let e = 0; e < r.length; e += 1) l[e] = $(p(t, r, e));
                return {
                    c() {
                        e = (0, i.bGB)("div"), c = (0, i.bGB)("div");
                        for (let t = 0; t < l.length; t += 1) l[t].c();
                        (0, i.Ljt)(c, "class", n = "cart-modal-license-container " + (t[4] ? "cart-modal-license-container_active" : "")), (0, i.Ljt)(e, "class", "cart-modal-license-container-wrapper")
                    },
                    m(t, n) {
                        (0, i.$Tr)(t, e, n), (0, i.R3I)(e, c);
                        for (let t = 0; t < l.length; t += 1) l[t] && l[t].m(c, null)
                    },
                    p(t, e) {
                        if (672 & e) {
                            let i;
                            for (r = t[7], i = 0; i < r.length; i += 1) {
                                const n = p(t, r, i);
                                l[i] ? l[i].p(n, e) : (l[i] = $(n), l[i].c(), l[i].m(c, null))
                            }
                            for (; i < l.length; i += 1) l[i].d(1);
                            l.length = r.length
                        }
                        16 & e && n !== (n = "cart-modal-license-container " + (t[4] ? "cart-modal-license-container_active" : "")) && (0, i.Ljt)(c, "class", n)
                    },
                    d(t) {
                        t && (0, i.ogt)(e), (0, i.RMB)(l, t)
                    }
                }
            }

            function f(t) {
                let e, c, n = t[22].price + "";
                return {
                    c() {
                        e = (0, i.bGB)("strong"), c = (0, i.fLW)(n), (0, i.Ljt)(e, "class", "cart-modal-price cart-service-price_license cart-modal-price_regular")
                    },
                    m(t, n) {
                        (0, i.$Tr)(t, e, n), (0, i.R3I)(e, c)
                    },
                    p(t, e) {
                        128 & e && n !== (n = t[22].price + "") && (0, i.rTO)(c, n)
                    },
                    d(t) {
                        t && (0, i.ogt)(e)
                    }
                }
            }

            function h(t) {
                let e, c = t[22].description + "";
                return {
                    c() {
                        e = (0, i.bGB)("span"), (0, i.Ljt)(e, "class", "cart-modal-license-item-description")
                    },
                    m(t, n) {
                        (0, i.$Tr)(t, e, n), e.innerHTML = c
                    },
                    p(t, i) {
                        128 & i && c !== (c = t[22].description + "") && (e.innerHTML = c)
                    },
                    d(t) {
                        t && (0, i.ogt)(e)
                    }
                }
            }

            function $(t) {
                let e, c, n, r, l, o, a, s, p, u, d, m, $, I, g, v, L, b, R, B, _ = !1,
                    C = t[22].name + "",
                    j = (t[22].isDiscount ? t[22].finalPrice : t[22].price) + "",
                    T = t[22].isDiscount && f(t),
                    D = t[22].description && h(t);

                function y() {
                    return t[16](t[22])
                }
                return b = (0, i.ksi)(t[15][0]), {
                    c() {
                        e = (0, i.bGB)("div"), c = (0, i.bGB)("p"), n = (0, i.bGB)("input"), l = (0, i.DhX)(), o = (0, i.bGB)("i"), a = (0, i.DhX)(), s = (0, i.bGB)("span"), p = (0, i.fLW)(C), u = (0, i.DhX)(), d = (0, i.bGB)("span"), T && T.c(), m = (0, i.DhX)(), $ = (0, i.bGB)("strong"), I = (0, i.fLW)(j), v = (0, i.DhX)(), D && D.c(), L = (0, i.DhX)(), (0, i.Ljt)(n, "type", "radio"), (0, i.Ljt)(n, "class", "cart-license-radio radio-input"), n.__value = r = t[22].licenseId, n.value = n.__value, (0, i.Ljt)(o, "class", "cart-license-radio-icon radio-icon"), (0, i.Ljt)(s, "class", "cart-modal-license-item-title"), (0, i.Ljt)(c, "class", "cart-modal-license-item-title-wrap"), (0, i.Ljt)($, "class", g = "cart-modal-price cart-service-price_license " + (t[22].isDiscount ? "cart-modal-price_discount" : "")), (0, i.Ljt)(d, "class", "cart-modal-prices"), (0, i.Ljt)(e, "class", "cart-modal-license-item"), b.p(n)
                    },
                    m(r, f) {
                        (0, i.$Tr)(r, e, f), (0, i.R3I)(e, c), (0, i.R3I)(c, n), n.checked = n.__value === t[5].id, (0, i.R3I)(c, l), (0, i.R3I)(c, o), (0, i.R3I)(c, a), (0, i.R3I)(c, s), (0, i.R3I)(s, p), (0, i.R3I)(e, u), (0, i.R3I)(e, d), T && T.m(d, null), (0, i.R3I)(d, m), (0, i.R3I)(d, $), (0, i.R3I)($, I), (0, i.R3I)(e, v), D && D.m(e, null), (0, i.R3I)(e, L), R || (B = [(0, i.oLt)(n, "change", t[14]), (0, i.oLt)(e, "click", y)], R = !0)
                    },
                    p(c, l) {
                        t = c, 128 & l && r !== (r = t[22].licenseId) && (n.__value = r, n.value = n.__value, _ = !0), (_ || 160 & l) && (n.checked = n.__value === t[5].id), 128 & l && C !== (C = t[22].name + "") && (0, i.rTO)(p, C), t[22].isDiscount ? T ? T.p(t, l) : (T = f(t), T.c(), T.m(d, m)) : T && (T.d(1), T = null), 128 & l && j !== (j = (t[22].isDiscount ? t[22].finalPrice : t[22].price) + "") && (0, i.rTO)(I, j), 128 & l && g !== (g = "cart-modal-price cart-service-price_license " + (t[22].isDiscount ? "cart-modal-price_discount" : "")) && (0, i.Ljt)($, "class", g), t[22].description ? D ? D.p(t, l) : (D = h(t), D.c(), D.m(e, L)) : D && (D.d(1), D = null)
                    },
                    d(t) {
                        t && (0, i.ogt)(e), T && T.d(), D && D.d(), b.r(), R = !1, (0, i.j7q)(B)
                    }
                }
            }

            function I(t) {
                let e, c = t[5] && u(t);
                return {
                    c() {
                        c && c.c(), e = (0, i.cSb)()
                    },
                    m(t, n) {
                        c && c.m(t, n), (0, i.$Tr)(t, e, n)
                    },
                    p(t, [i]) {
                        t[5] ? c ? c.p(t, i) : (c = u(t), c.c(), c.m(e.parentNode, e)) : c && (c.d(1), c = null)
                    },
                    i: i.ZTd,
                    o: i.ZTd,
                    d(t) {
                        c && c.d(t), t && (0, i.ogt)(e)
                    }
                }
            }

            function g(t, e, c) {
                let p, u, d;
                (0, i.FIv)(t, l.Z, (t => c(13, d = t)));
                const m = (0, n.x)();
                let {
                    isSingleProductCartLicense: f = !1
                } = e, {
                    licenseCaption: h
                } = e, {
                    licensesProducts: $ = []
                } = e, {
                    licenseData: I = {}
                } = e, {
                    productInfo: g = {}
                } = e, {
                    cartItem: v = {}
                } = e, {
                    isLicenseListOpen: L = !1
                } = e, b = {};

                function R(t) {
                    if ($.length < 2 || !f) return;
                    let e = null,
                        c = null;
                    t && (c = t.target.parentElement.querySelector(".cart-modal-license-container "), e = t.target), m("toggleLicenses", {
                        productId: g.templateId,
                        activeButtonElement: e,
                        activeDropdownElement: c
                    })
                }

                function B(t) {
                    (0, a.dm)({
                        templateId: v.id,
                        type: "products",
                        data: {
                            license: t
                        }
                    }), R()
                }

                function _(t) {
                    const e = t ? .translations.find((t => t.locale === r.Z.apiLocale || "en" === t.locale));
                    return e ? .title || ""
                }

                function C(t) {
                    const e = t ? .translations.find((t => t.locale === r.Z.apiLocale || "en" === t.locale));
                    return e ? .preview_description || ""
                }

                function j(t, e) {
                    const c = (0, o.Np)({
                            license: t,
                            price: e
                        }),
                        i = (0, o.dk)({
                            product: g,
                            cartItem: v,
                            licensePrice: c.priceProduct
                        });
                    return m("updateLicensePrice", {
                        price: i + c.priceService
                    }), {
                        price: (0, s._B)(c.priceProduct + c.priceService),
                        finalPrice: (0, s._B)(i + c.priceService),
                        isDiscount: c.priceProduct !== i
                    }
                }
                return t.$$set = t => {
                    "isSingleProductCartLicense" in t && c(0, f = t.isSingleProductCartLicense), "licenseCaption" in t && c(1, h = t.licenseCaption), "licensesProducts" in t && c(2, $ = t.licensesProducts), "licenseData" in t && c(11, I = t.licenseData), "productInfo" in t && c(3, g = t.productInfo), "cartItem" in t && c(12, v = t.cartItem), "isLicenseListOpen" in t && c(4, L = t.isLicenseListOpen)
                }, t.$$.update = () => {
                    10240 & t.$$.dirty && c(5, p = d.infoCartModal.licenses.find((t => Number(t.id) === Number(I.id)))), 32 & t.$$.dirty && function(t) {
                        const e = j(t, g.price);
                        c(6, b = {
                            name: _(t),
                            isDiscount: e.isDiscount,
                            price: e.price,
                            finalPrice: e.finalPrice
                        })
                    }(p), 12 & t.$$.dirty && c(7, u = $.map((t => {
                        const e = (c = t.id, d.infoCartModal.licenses.find((t => Number(t.id) === Number(c))));
                        var c;
                        const i = j(e, g.price);
                        return {
                            licenseId: t.id,
                            name: _(e),
                            description: C(e),
                            isDiscount: i.isDiscount,
                            price: i.price,
                            finalPrice: i.finalPrice
                        }
                    })))
                }, [f, h, $, g, L, p, b, u, R, B, j, I, v, d, function() {
                        p.id = this.__value, c(5, p), c(13, d), c(11, I)
                    },
                    [
                        []
                    ], t => B(t.licenseId)
                ]
            }
            class v extends i.f_C {
                constructor(t) {
                    super(), (0, i.S1n)(this, t, g, I, i.N8, {
                        isSingleProductCartLicense: 0,
                        licenseCaption: 1,
                        licensesProducts: 2,
                        licenseData: 11,
                        productInfo: 3,
                        cartItem: 12,
                        isLicenseListOpen: 4
                    })
                }
            }
            const L = v
        },
        5069: (t, e, c) => {
            c.d(e, {
                Z: () => v
            });
            var i = c(4234),
                n = c(3992),
                r = (c(9484), c(6943), c(5980)),
                l = c(5191),
                o = c(4522),
                a = c(6573),
                s = c(5058),
                p = c(1078),
                u = c(9661);

            function d(t, e, c) {
                const i = t.slice();
                return i[6] = e[c], i
            }

            function m(t) {
                let e, c, n = (0, p._B)(t[6].price) + "";
                return {
                    c() {
                        e = (0, i.bGB)("strong"), c = (0, i.fLW)(n), (0, i.Ljt)(e, "class", "cart-modal-price cart-modal-price_regular")
                    },
                    m(t, n) {
                        (0, i.$Tr)(t, e, n), (0, i.R3I)(e, c)
                    },
                    p(t, e) {
                        1 & e && n !== (n = (0, p._B)(t[6].price) + "") && (0, i.rTO)(c, n)
                    },
                    d(t) {
                        t && (0, i.ogt)(e)
                    }
                }
            }

            function f(t) {
                let e, c, r, l, a, d, f, h, $, I, g, v, L, b, R, B, _, C, j = (0, s.Qz)({
                        servicePresentations: t[6].presentations,
                        locale: o.Z.apiLocale
                    }) ? .title + "",
                    T = (t[6].discount ? (0, p._B)(t[6].finalPrice) : (0, p._B)(t[6].price)) + "",
                    D = t[6].discount && m(t);

                function y() {
                    return t[4](t[6])
                }
                return b = new u.Z({
                    props: {
                        src: n,
                        className: "cart-modal-delete-icon"
                    }
                }), {
                    c() {
                        e = (0, i.bGB)("div"), c = (0, i.bGB)("i"), r = (0, i.DhX)(), l = (0, i.bGB)("span"), a = (0, i.fLW)(j), d = (0, i.DhX)(), f = (0, i.bGB)("span"), D && D.c(), h = (0, i.DhX)(), $ = (0, i.bGB)("strong"), I = (0, i.fLW)(T), v = (0, i.DhX)(), L = (0, i.bGB)("div"), (0, i.YCL)(b.$$.fragment), R = (0, i.DhX)(), (0, i.Ljt)(c, "class", "cart-modal-service-icon"), (0, i.Ljt)(l, "class", "cart-modal-service-name"), (0, i.Ljt)($, "class", g = "cart-modal-price " + (t[6].discount && "cart-modal-price_discount")), (0, i.Ljt)(f, "class", "cart-modal-prices"), (0, i.Ljt)(L, "class", "cart-modal-delete-icon-wrapper"), (0, i.Ljt)(e, "class", "cart-modal-service")
                    },
                    m(t, n) {
                        (0, i.$Tr)(t, e, n), (0, i.R3I)(e, c), (0, i.R3I)(e, r), (0, i.R3I)(e, l), (0, i.R3I)(l, a), (0, i.R3I)(e, d), (0, i.R3I)(e, f), D && D.m(f, null), (0, i.R3I)(f, h), (0, i.R3I)(f, $), (0, i.R3I)($, I), (0, i.R3I)(e, v), (0, i.R3I)(e, L), (0, i.yef)(b, L, null), (0, i.R3I)(e, R), B = !0, _ || (C = (0, i.oLt)(L, "click", y), _ = !0)
                    },
                    p(e, c) {
                        t = e, (!B || 1 & c) && j !== (j = (0, s.Qz)({
                            servicePresentations: t[6].presentations,
                            locale: o.Z.apiLocale
                        }) ? .title + "") && (0, i.rTO)(a, j), t[6].discount ? D ? D.p(t, c) : (D = m(t), D.c(), D.m(f, h)) : D && (D.d(1), D = null), (!B || 1 & c) && T !== (T = (t[6].discount ? (0, p._B)(t[6].finalPrice) : (0, p._B)(t[6].price)) + "") && (0, i.rTO)(I, T), (!B || 1 & c && g !== (g = "cart-modal-price " + (t[6].discount && "cart-modal-price_discount"))) && (0, i.Ljt)($, "class", g)
                    },
                    i(t) {
                        B || ((0, i.Ui)(b.$$.fragment, t), B = !0)
                    },
                    o(t) {
                        (0, i.etI)(b.$$.fragment, t), B = !1
                    },
                    d(t) {
                        t && (0, i.ogt)(e), D && D.d(), (0, i.vpE)(b), _ = !1, C()
                    }
                }
            }

            function h(t) {
                let e, c, n = t[0].filter($),
                    r = [];
                for (let e = 0; e < n.length; e += 1) r[e] = f(d(t, n, e));
                const l = t => (0, i.etI)(r[t], 1, 1, (() => {
                    r[t] = null
                }));
                return {
                    c() {
                        e = (0, i.bGB)("div");
                        for (let t = 0; t < r.length; t += 1) r[t].c();
                        (0, i.Ljt)(e, "class", "cart-modal-services-container")
                    },
                    m(t, n) {
                        (0, i.$Tr)(t, e, n);
                        for (let t = 0; t < r.length; t += 1) r[t] && r[t].m(e, null);
                        c = !0
                    },
                    p(t, [c]) {
                        if (3 & c) {
                            let o;
                            for (n = t[0].filter($), o = 0; o < n.length; o += 1) {
                                const l = d(t, n, o);
                                r[o] ? (r[o].p(l, c), (0, i.Ui)(r[o], 1)) : (r[o] = f(l), r[o].c(), (0, i.Ui)(r[o], 1), r[o].m(e, null))
                            }
                            for ((0, i.dvw)(), o = n.length; o < r.length; o += 1) l(o);
                            (0, i.gbL)()
                        }
                    },
                    i(t) {
                        if (!c) {
                            for (let t = 0; t < n.length; t += 1)(0, i.Ui)(r[t]);
                            c = !0
                        }
                    },
                    o(t) {
                        r = r.filter(Boolean);
                        for (let t = 0; t < r.length; t += 1)(0, i.etI)(r[t]);
                        c = !1
                    },
                    d(t) {
                        t && (0, i.ogt)(e), (0, i.RMB)(r, t)
                    }
                }
            }
            const $ = t => "extended-by-license" !== t.itemType;

            function I(t, e, c) {
                let {
                    services: i = []
                } = e, {
                    servicesCartInfo: n = []
                } = e, {
                    itemId: p = null
                } = e;

                function u(t) {
                    const e = n.find((e => Number(e.id) === Number(t.serviceId)));
                    (0, a.MM)({
                        link: e.link,
                        typeTarget: "products",
                        typeSource: "services",
                        itemId: p
                    });
                    const c = (0, s.Qz)({
                            servicePresentations: t ? .presentations,
                            locale: o.Z.locale
                        }),
                        i = {
                            item_id: t.serviceId,
                            item_name: "Offer",
                            affiliation: t.project,
                            discount: (t.price - t.finalPrice) / 100,
                            item_brand: c ? .title || "",
                            item_category: t.internalName || "",
                            item_category2: "channel - tm2-cart",
                            item_category3: "ontemplate",
                            price: t.finalPrice / 100,
                            quantity: 1
                        };
                    (0, r.y)((0, l.c)("clear")), (0, r.y)((0, l.c)("removeFromCart", [i]))
                }
                return t.$$set = t => {
                    "services" in t && c(0, i = t.services), "servicesCartInfo" in t && c(2, n = t.servicesCartInfo), "itemId" in t && c(3, p = t.itemId)
                }, [i, u, n, p, t => u(t)]
            }
            class g extends i.f_C {
                constructor(t) {
                    super(), (0, i.S1n)(this, t, I, h, i.N8, {
                        services: 0,
                        servicesCartInfo: 2,
                        itemId: 3
                    })
                }
            }
            const v = g
        },
        5550: (t, e, c) => {
            c.d(e, {
                Z: () => v
            });
            var i = c(4234),
                n = c(3992),
                r = c(4522),
                l = (c(6943), c(5980)),
                o = c(5191),
                a = c(6573),
                s = c(7856),
                p = c(1078),
                u = c(9661);

            function d(t, e, c) {
                const i = t.slice();
                return i[14] = e[c], i
            }

            function m(t) {
                let e, c, n = (0, p._B)(t[14].price) + "";
                return {
                    c() {
                        e = (0, i.bGB)("strong"), c = (0, i.fLW)(n), (0, i.Ljt)(e, "class", "cart-modal-price cart-modal-price_regular")
                    },
                    m(t, n) {
                        (0, i.$Tr)(t, e, n), (0, i.R3I)(e, c)
                    },
                    p(t, e) {
                        2 & e && n !== (n = (0, p._B)(t[14].price) + "") && (0, i.rTO)(c, n)
                    },
                    d(t) {
                        t && (0, i.ogt)(e)
                    }
                }
            }

            function f(t) {
                let e, c, r, l, o;

                function a() {
                    return t[9](t[14])
                }
                return c = new u.Z({
                    props: {
                        src: n,
                        className: "cart-modal-delete-icon"
                    }
                }), {
                    c() {
                        e = (0, i.bGB)("div"), (0, i.YCL)(c.$$.fragment), (0, i.Ljt)(e, "class", "cart-modal-delete-icon-wrapper")
                    },
                    m(t, n) {
                        (0, i.$Tr)(t, e, n), (0, i.yef)(c, e, null), r = !0, l || (o = (0, i.oLt)(e, "click", a), l = !0)
                    },
                    p(e, c) {
                        t = e
                    },
                    i(t) {
                        r || ((0, i.Ui)(c.$$.fragment, t), r = !0)
                    },
                    o(t) {
                        (0, i.etI)(c.$$.fragment, t), r = !1
                    },
                    d(t) {
                        t && (0, i.ogt)(e), (0, i.vpE)(c), l = !1, o()
                    }
                }
            }

            function h(t) {
                let e, c, n, r, l, o, a, s, u, d, h, $, I, g, v, L, b, R, B, _, C, j = t[14].title + "",
                    T = (t[14].isDiscount ? (0, p._B)(t[14].finalPrice) : (0, p._B)(t[14].price)) + "";

                function D() {
                    return t[8](t[14])
                }
                let y = t[14].isDiscount && m(t),
                    G = !t[0] && f(t);
                return {
                    c() {
                        e = (0, i.bGB)("label"), c = (0, i.bGB)("input"), r = (0, i.DhX)(), l = (0, i.bGB)("i"), a = (0, i.DhX)(), s = (0, i.bGB)("span"), u = (0, i.fLW)(j), d = (0, i.DhX)(), h = (0, i.bGB)("span"), y && y.c(), $ = (0, i.DhX)(), I = (0, i.bGB)("strong"), g = (0, i.fLW)(T), L = (0, i.DhX)(), G && G.c(), b = (0, i.DhX)(), (0, i.Ljt)(c, "type", "checkbox"), (0, i.Ljt)(c, "class", "cart-service-checkbox checkbox-input"), c.checked = n = t[14].isSupportAdded, (0, i.Ljt)(l, "class", o = t[0] ? "cart-service-checkbox-icon checkbox-icon" : "cart-modal-support-icon"), (0, i.Ljt)(s, "class", "cart-modal-support-name"), (0, i.Ljt)(I, "class", v = "cart-modal-price " + (t[14].isDiscount && "cart-modal-price_discount")), (0, i.Ljt)(h, "class", "cart-modal-prices"), (0, i.Ljt)(e, "class", R = t[0] ? "cart-service cart-service_support checkbox" : "cart-modal-support")
                    },
                    m(t, n) {
                        (0, i.$Tr)(t, e, n), (0, i.R3I)(e, c), (0, i.R3I)(e, r), (0, i.R3I)(e, l), (0, i.R3I)(e, a), (0, i.R3I)(e, s), (0, i.R3I)(s, u), (0, i.R3I)(e, d), (0, i.R3I)(e, h), y && y.m(h, null), (0, i.R3I)(h, $), (0, i.R3I)(h, I), (0, i.R3I)(I, g), (0, i.R3I)(e, L), G && G.m(e, null), (0, i.R3I)(e, b), B = !0, _ || (C = (0, i.oLt)(c, "click", D), _ = !0)
                    },
                    p(r, a) {
                        t = r, (!B || 2 & a && n !== (n = t[14].isSupportAdded)) && (c.checked = n), (!B || 1 & a && o !== (o = t[0] ? "cart-service-checkbox-icon checkbox-icon" : "cart-modal-support-icon")) && (0, i.Ljt)(l, "class", o), (!B || 2 & a) && j !== (j = t[14].title + "") && (0, i.rTO)(u, j), t[14].isDiscount ? y ? y.p(t, a) : (y = m(t), y.c(), y.m(h, $)) : y && (y.d(1), y = null), (!B || 2 & a) && T !== (T = (t[14].isDiscount ? (0, p._B)(t[14].finalPrice) : (0, p._B)(t[14].price)) + "") && (0, i.rTO)(g, T), (!B || 2 & a && v !== (v = "cart-modal-price " + (t[14].isDiscount && "cart-modal-price_discount"))) && (0, i.Ljt)(I, "class", v), t[0] ? G && ((0, i.dvw)(), (0, i.etI)(G, 1, 1, (() => {
                            G = null
                        })), (0, i.gbL)()) : G ? (G.p(t, a), 1 & a && (0, i.Ui)(G, 1)) : (G = f(t), G.c(), (0, i.Ui)(G, 1), G.m(e, b)), (!B || 1 & a && R !== (R = t[0] ? "cart-service cart-service_support checkbox" : "cart-modal-support")) && (0, i.Ljt)(e, "class", R)
                    },
                    i(t) {
                        B || ((0, i.Ui)(G), B = !0)
                    },
                    o(t) {
                        (0, i.etI)(G), B = !1
                    },
                    d(t) {
                        t && (0, i.ogt)(e), y && y.d(), G && G.d(), _ = !1, C()
                    }
                }
            }

            function $(t) {
                let e, c, n = t[1],
                    r = [];
                for (let e = 0; e < n.length; e += 1) r[e] = h(d(t, n, e));
                const l = t => (0, i.etI)(r[t], 1, 1, (() => {
                    r[t] = null
                }));
                return {
                    c() {
                        e = (0, i.bGB)("div");
                        for (let t = 0; t < r.length; t += 1) r[t].c();
                        (0, i.Ljt)(e, "class", "cart-modal-support-container")
                    },
                    m(t, n) {
                        (0, i.$Tr)(t, e, n);
                        for (let t = 0; t < r.length; t += 1) r[t] && r[t].m(e, null);
                        c = !0
                    },
                    p(t, [c]) {
                        if (15 & c) {
                            let o;
                            for (n = t[1], o = 0; o < n.length; o += 1) {
                                const l = d(t, n, o);
                                r[o] ? (r[o].p(l, c), (0, i.Ui)(r[o], 1)) : (r[o] = h(l), r[o].c(), (0, i.Ui)(r[o], 1), r[o].m(e, null))
                            }
                            for ((0, i.dvw)(), o = n.length; o < r.length; o += 1) l(o);
                            (0, i.gbL)()
                        }
                    },
                    i(t) {
                        if (!c) {
                            for (let t = 0; t < n.length; t += 1)(0, i.Ui)(r[t]);
                            c = !0
                        }
                    },
                    o(t) {
                        r = r.filter(Boolean);
                        for (let t = 0; t < r.length; t += 1)(0, i.etI)(r[t]);
                        c = !1
                    },
                    d(t) {
                        t && (0, i.ogt)(e), (0, i.RMB)(r, t)
                    }
                }
            }

            function I(t, e, c) {
                let i, {
                        supports: n = []
                    } = e,
                    {
                        supportsCartInfo: p = []
                    } = e,
                    {
                        itemId: u = null
                    } = e,
                    {
                        isOnCart: d = !1
                    } = e,
                    {
                        isSingleCart: m = !1
                    } = e;

                function f(t) {
                    d ? function(t) {
                        const e = p.find((e => Number(e.id) === Number(t)));
                        (0, a.kx)({
                            link: e.link,
                            type: "support"
                        }), $(e)
                    }(t) : h(t)
                }

                function h(t) {
                    const e = p.find((e => Number(e.id) === Number(t)));
                    (0, a.MM)({
                        link: e.link,
                        typeTarget: "products",
                        typeSource: "support",
                        itemId: u
                    }), $(e)
                }

                function $(t) {
                    const e = {
                        item_id: t.id,
                        item_name: "Paid support",
                        affiliation: "TM",
                        discount: (t.price - t.final_price) / 100,
                        item_variant: "premium",
                        price: t.final_price / 100,
                        quantity: 1
                    };
                    (0, l.y)((0, o.c)("clear")), (0, l.y)((0, o.c)("removeFromCart", [e]))
                }

                function I(t) {
                    m && (t.isSupportAdded ? h(t.id) : function(t) {
                        const e = `${r.Z.apiUrls.support}/v1/support/${t.id}`;
                        (0, a.$U)({
                            link: e,
                            typeTarget: "products",
                            typeSource: "support",
                            itemId: u
                        });
                        const c = {
                            item_id: t.id,
                            item_name: "Paid support",
                            affiliation: "TM",
                            discount: (Number(t.price) - t.finalPrice) / 100,
                            item_variant: Number(t.finalPrice) <= 0 ? "free" : "premium",
                            price: Number(t.finalPrice) / 100,
                            quantity: 1
                        };
                        (0, l.y)((0, o.c)("clear")), (0, l.y)((0, o.c)("selectItem", [c])), (0, l.y)((0, o.c)("clear")), (0, l.y)((0, o.c)("addToCart", [c]))
                    }(t))
                }
                return t.$$set = t => {
                    "supports" in t && c(4, n = t.supports), "supportsCartInfo" in t && c(5, p = t.supportsCartInfo), "itemId" in t && c(6, u = t.itemId), "isOnCart" in t && c(7, d = t.isOnCart), "isSingleCart" in t && c(0, m = t.isSingleCart)
                }, t.$$.update = () => {
                    176 & t.$$.dirty && c(1, i = n.map((t => {
                        const e = p.find((e => Number(e.id) === Number(t.id))),
                            c = e ? e.price : t.regularPrice,
                            i = e ? e.final_price : t.discountPrice,
                            n = { ...t,
                                regularPrice: c,
                                discountPrice: i
                            };
                        return {
                            id: t.id,
                            title: (0, s.E)({
                                support: n,
                                onCart: !!d
                            }),
                            isDiscount: c !== i,
                            price: c,
                            finalPrice: i,
                            isSupportAdded: !!e
                        }
                    })))
                }, [m, i, f, I, n, p, u, d, t => I(t), t => f(t.id)]
            }
            class g extends i.f_C {
                constructor(t) {
                    super(), (0, i.S1n)(this, t, I, $, i.N8, {
                        supports: 4,
                        supportsCartInfo: 5,
                        itemId: 6,
                        isOnCart: 7,
                        isSingleCart: 0
                    })
                }
            }
            const v = g
        },
        4287: (t, e, c) => {
            c.d(e, {
                Z: () => a
            });
            var i = c(4234),
                n = c(8568);

            function r(t) {
                let e, c, n, r, l, o, a, s;
                const p = t[4].default,
                    u = (0, i.nuO)(p, t, t[3], null);
                return {
                    c() {
                        e = (0, i.bGB)("span"), c = (0, i.bGB)("span"), u && u.c(), n = (0, i.DhX)(), r = (0, i.bGB)("span"), l = (0, i.DhX)(), o = (0, i.bGB)("span"), (0, i.Ljt)(c, "class", "custom-tooltip-button"), (0, i.Ljt)(r, "class", "custom-tooltip-content"), (0, i.Ljt)(o, "class", "custom-tooltip-arrow"), (0, i.Ljt)(e, "class", a = "custom-tooltip " + (t[1] ? t[1] : ""))
                    },
                    m(a, p) {
                        (0, i.$Tr)(a, e, p), (0, i.R3I)(e, c), u && u.m(c, null), t[5](c), (0, i.R3I)(e, n), (0, i.R3I)(e, r), r.innerHTML = t[0], (0, i.R3I)(e, l), (0, i.R3I)(e, o), s = !0
                    },
                    p(t, [c]) {
                        u && u.p && (!s || 8 & c) && (0, i.kmG)(u, p, t, t[3], s ? (0, i.u2N)(p, t[3], c, null) : (0, i.VOJ)(t[3]), null), (!s || 1 & c) && (r.innerHTML = t[0]), (!s || 2 & c && a !== (a = "custom-tooltip " + (t[1] ? t[1] : ""))) && (0, i.Ljt)(e, "class", a)
                    },
                    i(t) {
                        s || ((0, i.Ui)(u, t), s = !0)
                    },
                    o(t) {
                        (0, i.etI)(u, t), s = !1
                    },
                    d(c) {
                        c && (0, i.ogt)(e), u && u.d(c), t[5](null)
                    }
                }
            }

            function l(t, e, c) {
                let r, {
                        $$slots: l = {},
                        $$scope: o
                    } = e,
                    {
                        content: a
                    } = e,
                    {
                        className: s
                    } = e;
                return (0, n.H3)((() => {
                    r.addEventListener("click", (t => t.preventDefault()))
                })), t.$$set = t => {
                    "content" in t && c(0, a = t.content), "className" in t && c(1, s = t.className), "$$scope" in t && c(3, o = t.$$scope)
                }, [a, s, r, o, l, function(t) {
                    i.VnY[t ? "unshift" : "push"]((() => {
                        r = t, c(2, r)
                    }))
                }]
            }
            class o extends i.f_C {
                constructor(t) {
                    super(), (0, i.S1n)(this, t, l, r, i.N8, {
                        content: 0,
                        className: 1
                    })
                }
            }
            const a = o
        },
        1208: t => {
            t.exports = '<svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 0a8 8 0 000 16A8 8 0 008 0zm0 14.55a6.55 6.55 0 11.01-13.11A6.55 6.55 0 018 14.54z" fill="#90A4AE"/><path d="M8 3.4a.97.97 0 100 1.94.97.97 0 000-1.95zM8 6.79c-.4 0-.73.32-.73.73v4.36a.73.73 0 001.46 0V7.52c0-.4-.33-.73-.73-.73z" fill="#90A4AE"/></svg>'
        },
        5179: t => {
            t.exports = '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none"><path fill="#0D47A1" d="M12 4l24 4v28l-24-4V4z"/><path fill="#FF6F00" fill-rule="evenodd" d="M29 6.833v-.75a5 5 0 00-9.92-.903l-.986-.164c.565-3.163 3.595-5.401 6.892-4.852A6 6 0 0130 6.083V7l-1-.167z" clip-rule="evenodd"/><path fill="#42A5F5" d="M28 12l8-4v28l-8 4V12z"/><path fill="#1976D2" d="M28 12l4-2v28l-4 2V12zM4 8l8-4v28l-8 4V8z"/><path fill="#42A5F5" d="M4 8l24 4v28L4 36V8z"/><path fill="#2196F3" d="M32 32v6l-4 2 4-8z"/><path fill="#64B5F6" d="M32 32v6l4-2-4-4z"/><path fill="#FF8F00" fill-rule="evenodd" d="M21 12V9.083a5 5 0 00-10 0V10a1 1 0 11-1 1V9.083a6 6 0 1112 0V13a1 1 0 11-1-1z" clip-rule="evenodd"/><path fill="#fff" fill-rule="evenodd" d="M19.85 25.974l1.641 1.445a6.272 6.272 0 001.415-1.737 8.531 8.531 0 00-.351-1.128 8.984 8.984 0 00-.464-1.004 5.86 5.86 0 00.342-.925c.151-.545.232-1.13.232-1.749 0-.33-.023-.658-.068-.983l-2.348 1.26a9.288 9.288 0 00-.732-.62c-1.068-.813-2.308-1.388-3.633-1.615-1.324-.228-2.565-.08-3.632.367-.255.106-.499.23-.732.368l-2.348-2.067c-.045.31-.068.63-.068.96 0 .619.08 1.232.232 1.828.09.355.204.703.341 1.043-.175.265-.33.547-.463.844a6.31 6.31 0 00-.351 1.008c.37.796.849 1.546 1.414 2.223l1.643-.881-.13 2.355c1.193.942 2.595 1.608 4.094 1.866 1.5.258 2.902.073 4.096-.46l-.13-2.398zM23 23.647c.145.303.276.614.39.93.16.441.287.893.379 1.353a6.87 6.87 0 01-2.203 2.568l-.805-.709.063 1.163c-.255.134-.52.255-.793.358-1.233.468-2.645.61-4.146.353-1.501-.258-2.914-.887-4.146-1.777a11.062 11.062 0 01-.793-.631l.063-1.142-.806.432a11.388 11.388 0 01-1.54-2.022c-.25-.42-.471-.855-.663-1.302a6.824 6.824 0 01.77-2.019 8.502 8.502 0 01-.485-2.797c0-.505.049-.991.14-1.454l.004-.019c.057-.282.13-.556.218-.82l2.873 2.528c1.257-.608 2.756-.83 4.364-.553 1.61.276 3.108 1.013 4.366 2.053l2.872-1.542c.088.295.161.594.218.896l.004.02c.091.495.14.997.14 1.503 0 .955-.172 1.84-.485 2.63zm-9.627-1.635c.085 1.348 1.176 2.59 2.511 2.82 1.336.23 2.427-.638 2.512-1.957-.278.015-.559.019-.843.012-.056.29-.19.54-.378.732l-.855-.753.062 1.145a1.62 1.62 0 01-.498-.01c-.829-.143-1.519-.864-1.668-1.687a13.428 13.428 0 01-.843-.302zm5.847-.084v.925c0 1.868-1.494 3.126-3.335 2.81-1.843-.317-3.336-2.089-3.336-3.958v-.923l.115.057a12.444 12.444 0 001.598.65c.53.172 1.071.307 1.622.402a10.72 10.72 0 001.623.155 9.995 9.995 0 001.713-.118z" clip-rule="evenodd"/></svg>'
        },
        3992: t => {
            t.exports = '<svg viewBox="0 0 11 11"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.082 1.596L9.373.89 5.485 4.78 1.596.888l-.707.707 3.89 3.89-3.89 3.888.707.707 3.89-3.889 3.888 3.89.707-.708-3.889-3.889 3.89-3.889z"/></svg>'
        }
    }
]);