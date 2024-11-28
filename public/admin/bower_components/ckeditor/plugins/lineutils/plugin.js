/*
 Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or http://ckeditor.com/license
*/
(function() {
    function m(a, d) {
        CKEDITOR.tools.extend(this, {
            editor: a,
            editable: a.editable(),
            doc: a.document,
            win: a.window
        }, d, !0);
        this.inline = this.editable.isInline();
        this.inline || (this.frame = this.win.getFrame());
        this.target = this[this.inline ? "editable" : "doc"]
    }

    function n(a, d) {
        CKEDITOR.tools.extend(this, d, {
            editor: a
        }, !0)
    }

    function p(a, d) {
        var b = a.editable();
        CKEDITOR.tools.extend(this, {
                editor: a,
                editable: b,
                inline: b.isInline(),
                doc: a.document,
                win: a.window,
                container: CKEDITOR.document.getBody(),
                winTop: CKEDITOR.document.getWindow()
            },
            d, !0);
        this.hidden = {};
        this.visible = {};
        this.inline || (this.frame = this.win.getFrame());
        this.queryViewport();
        var c = CKEDITOR.tools.bind(this.queryViewport, this),
            e = CKEDITOR.tools.bind(this.hideVisible, this),
            g = CKEDITOR.tools.bind(this.removeAll, this);
        b.attachListener(this.winTop, "resize", c);
        b.attachListener(this.winTop, "scroll", c);
        b.attachListener(this.winTop, "resize", e);
        b.attachListener(this.win, "scroll", e);
        b.attachListener(this.inline ? b : this.frame, "mouseout", function(a) {
            var b = a.data.$.clientX;
            a = a.data.$.clientY;
            this.queryViewport();
            (b <= this.rect.left || b >= this.rect.right || a <= this.rect.top || a >= this.rect.bottom) && this.hideVisible();
            (0 >= b || b >= this.winTopPane.width || 0 >= a || a >= this.winTopPane.height) && this.hideVisible()
        }, this);
        b.attachListener(a, "resize", c);
        b.attachListener(a, "mode", g);
        a.on("destroy", g);
        this.lineTpl = (new CKEDITOR.template('\x3cdiv data-cke-lineutils-line\x3d"1" class\x3d"cke_reset_all" style\x3d"{lineStyle}"\x3e\x3cspan style\x3d"{tipLeftStyle}"\x3e\x26nbsp;\x3c/span\x3e\x3cspan style\x3d"{tipRightStyle}"\x3e\x26nbsp;\x3c/span\x3e\x3c/div\x3e')).output({
            lineStyle: CKEDITOR.tools.writeCssText(CKEDITOR.tools.extend({},
                t, this.lineStyle, !0)),
            tipLeftStyle: CKEDITOR.tools.writeCssText(CKEDITOR.tools.extend({}, q, {
                left: "0px",
                "border-left-color": "red",
                "border-width": "6px 0 6px 6px"
            }, this.tipCss, this.tipLeftStyle, !0)),
            tipRightStyle: CKEDITOR.tools.writeCssText(CKEDITOR.tools.extend({}, q, {
                right: "0px",
                "border-right-color": "red",
                "border-width": "6px 6px 6px 0"
            }, this.tipCss, this.tipRightStyle, !0))
        })
    }

    function l(a) {
        var d;
        if (d = a && a.type == CKEDITOR.NODE_ELEMENT) d = !(r[a.getComputedStyle("float")] || r[a.getAttribute("align")]);
        return d &&
            !u[a.getComputedStyle("position")]
    }
    CKEDITOR.plugins.add("lineutils");
    CKEDITOR.LINEUTILS_BEFORE = 1;
    CKEDITOR.LINEUTILS_AFTER = 2;
    CKEDITOR.LINEUTILS_INSIDE = 4;
    m.prototype = {
        start: function(a) {
            var d = this,
                b = this.editor,
                c = this.doc,
                e, g, f, h, k = CKEDITOR.tools.eventsBuffer(50, function() {
                    b.readOnly || "wysiwyg" != b.mode || (d.relations = {}, (g = c.$.elementFromPoint(f, h)) && g.nodeType && (e = new CKEDITOR.dom.element(g), d.traverseSearch(e), isNaN(f + h) || d.pixelSearch(e, f, h), a && a(d.relations, f, h)))
                });
            this.listener = this.editable.attachListener(this.target,
                "mousemove",
                function(a) {
                    f = a.data.$.clientX;
                    h = a.data.$.clientY;
                    k.input()
                });
            this.editable.attachListener(this.inline ? this.editable : this.frame, "mouseout", function() {
                k.reset()
            })
        },
        stop: function() {
            this.listener && this.listener.removeListener()
        },
        getRange: function() {
            var a = {};
            a[CKEDITOR.LINEUTILS_BEFORE] = CKEDITOR.POSITION_BEFORE_START;
            a[CKEDITOR.LINEUTILS_AFTER] = CKEDITOR.POSITION_AFTER_END;
            a[CKEDITOR.LINEUTILS_INSIDE] = CKEDITOR.POSITION_AFTER_START;
            return function(d) {
                var b = this.editor.createRange();
                b.moveToPosition(this.relations[d.uid].element,
                    a[d.type]);
                return b
            }
        }(),
        store: function() {
            function a(a, b, c) {
                var e = a.getUniqueId();
                e in c ? c[e].type |= b : c[e] = {
                    element: a,
                    type: b
                }
            }
            return function(d, b) {
                var c;
                b & CKEDITOR.LINEUTILS_AFTER && l(c = d.getNext()) && c.isVisible() && (a(c, CKEDITOR.LINEUTILS_BEFORE, this.relations), b ^= CKEDITOR.LINEUTILS_AFTER);
                b & CKEDITOR.LINEUTILS_INSIDE && l(c = d.getFirst()) && c.isVisible() && (a(c, CKEDITOR.LINEUTILS_BEFORE, this.relations), b ^= CKEDITOR.LINEUTILS_INSIDE);
                a(d, b, this.relations)
            }
        }(),
        traverseSearch: function(a) {
            var d, b, c;
            do
                if (c = a.$["data-cke-expando"], !(c && c in this.relations)) {
                    if (a.equals(this.editable)) break;
                    if (l(a))
                        for (d in this.lookups)(b = this.lookups[d](a)) && this.store(a, b)
                }
            while ((!a || a.type != CKEDITOR.NODE_ELEMENT || "true" != a.getAttribute("contenteditable")) && (a = a.getParent()))
        },
        pixelSearch: function() {
            function a(a, c, e, g, f) {
                for (var h = 0, k; f(e);) {
                    e += g;
                    if (25 == ++h) break;
                    if (k = this.doc.$.elementFromPoint(c, e))
                        if (k == a) h = 0;
                        else if (d(a, k) && (h = 0, l(k = new CKEDITOR.dom.element(k)))) return k
                }
            }
            var d = CKEDITOR.env.ie || CKEDITOR.env.webkit ? function(a, c) {
                    return a.contains(c)
                } :
                function(a, c) {
                    return !!(a.compareDocumentPosition(c) & 16)
                };
            return function(b, c, d) {
                var g = this.win.getViewPaneSize().height,
                    f = a.call(this, b.$, c, d, -1, function(a) {
                        return 0 < a
                    });
                c = a.call(this, b.$, c, d, 1, function(a) {
                    return a < g
                });
                if (f)
                    for (this.traverseSearch(f); !f.getParent().equals(b);) f = f.getParent();
                if (c)
                    for (this.traverseSearch(c); !c.getParent().equals(b);) c = c.getParent();
                for (; f || c;) {
                    f && (f = f.getNext(l));
                    if (!f || f.equals(c)) break;
                    this.traverseSearch(f);
                    c && (c = c.getPrevious(l));
                    if (!c || c.equals(f)) break;
                    this.traverseSearch(c)
                }
            }
        }(),
        greedySearch: function() {
            this.relations = {};
            for (var a = this.editable.getElementsByTag("*"), d = 0, b, c, e; b = a.getItem(d++);)
                if (!b.equals(this.editable) && b.type == CKEDITOR.NODE_ELEMENT && (b.hasAttribute("contenteditable") || !b.isReadOnly()) && l(b) && b.isVisible())
                    for (e in this.lookups)(c = this.lookups[e](b)) && this.store(b, c);
            return this.relations
        }
    };
    n.prototype = {
        locate: function() {
            function a(a, b) {
                var c = a.element[b === CKEDITOR.LINEUTILS_BEFORE ? "getPrevious" : "getNext"]();
                return c && l(c) ? (a.siblingRect = c.getClientRect(),
                    b == CKEDITOR.LINEUTILS_BEFORE ? (a.siblingRect.bottom + a.elementRect.top) / 2 : (a.elementRect.bottom + a.siblingRect.top) / 2) : b == CKEDITOR.LINEUTILS_BEFORE ? a.elementRect.top : a.elementRect.bottom
            }
            return function(d) {
                var b;
                this.locations = {};
                for (var c in d) b = d[c], b.elementRect = b.element.getClientRect(), b.type & CKEDITOR.LINEUTILS_BEFORE && this.store(c, CKEDITOR.LINEUTILS_BEFORE, a(b, CKEDITOR.LINEUTILS_BEFORE)), b.type & CKEDITOR.LINEUTILS_AFTER && this.store(c, CKEDITOR.LINEUTILS_AFTER, a(b, CKEDITOR.LINEUTILS_AFTER)), b.type &
                    CKEDITOR.LINEUTILS_INSIDE && this.store(c, CKEDITOR.LINEUTILS_INSIDE, (b.elementRect.top + b.elementRect.bottom) / 2);
                return this.locations
            }
        }(),
        sort: function() {
            var a, d, b, c;
            return function(e, g) {
                a = this.locations;
                d = [];
                for (var f in a)
                    for (var h in a[f])
                        if (b = Math.abs(e - a[f][h]), d.length) {
                            for (c = 0; c < d.length; c++)
                                if (b < d[c].dist) {
                                    d.splice(c, 0, {
                                        uid: +f,
                                        type: h,
                                        dist: b
                                    });
                                    break
                                }
                            c == d.length && d.push({
                                uid: +f,
                                type: h,
                                dist: b
                            })
                        } else d.push({
                            uid: +f,
                            type: h,
                            dist: b
                        });
                return "undefined" != typeof g ? d.slice(0, g) : d
            }
        }(),
        store: function(a,
            d, b) {
            this.locations[a] || (this.locations[a] = {});
            this.locations[a][d] = b
        }
    };
    var q = {
            display: "block",
            width: "0px",
            height: "0px",
            "border-color": "transparent",
            "border-style": "solid",
            position: "absolute",
            top: "-6px"
        },
        t = {
            height: "0px",
            "border-top": "1px dashed red",
            position: "absolute",
            "z-index": 9999
        };
    p.prototype = {
        removeAll: function() {
            for (var a in this.hidden) this.hidden[a].remove(), delete this.hidden[a];
            for (a in this.visible) this.visible[a].remove(), delete this.visible[a]
        },
        hideLine: function(a) {
            var d = a.getUniqueId();
            a.hide();
            this.hidden[d] = a;
            delete this.visible[d]
        },
        showLine: function(a) {
            var d = a.getUniqueId();
            a.show();
            this.visible[d] = a;
            delete this.hidden[d]
        },
        hideVisible: function() {
            for (var a in this.visible) this.hideLine(this.visible[a])
        },
        placeLine: function(a, d) {
            var b, c, e;
            if (b = this.getStyle(a.uid, a.type)) {
                for (e in this.visible)
                    if (this.visible[e].getCustomData("hash") !== this.hash) {
                        c = this.visible[e];
                        break
                    }
                if (!c)
                    for (e in this.hidden)
                        if (this.hidden[e].getCustomData("hash") !== this.hash) {
                            this.showLine(c = this.hidden[e]);
                            break
                        }
                c || this.showLine(c = this.addLine());
                c.setCustomData("hash", this.hash);
                this.visible[c.getUniqueId()] = c;
                c.setStyles(b);
                d && d(c)
            }
        },
        getStyle: function(a, d) {
            var b = this.relations[a],
                c = this.locations[a][d],
                e = {};
            e.width = b.siblingRect ? Math.max(b.siblingRect.width, b.elementRect.width) : b.elementRect.width;
            e.top = this.inline ? c + this.winTopScroll.y - this.rect.relativeY : this.rect.top + this.winTopScroll.y + c;
            if (e.top - this.winTopScroll.y < this.rect.top || e.top - this.winTopScroll.y > this.rect.bottom) return !1;
            this.inline ?
                e.left = b.elementRect.left - this.rect.relativeX : (0 < b.elementRect.left ? e.left = this.rect.left + b.elementRect.left : (e.width += b.elementRect.left, e.left = this.rect.left), 0 < (b = e.left + e.width - (this.rect.left + this.winPane.width)) && (e.width -= b));
            e.left += this.winTopScroll.x;
            for (var g in e) e[g] = CKEDITOR.tools.cssLength(e[g]);
            return e
        },
        addLine: function() {
            var a = CKEDITOR.dom.element.createFromHtml(this.lineTpl);
            a.appendTo(this.container);
            return a
        },
        prepare: function(a, d) {
            this.relations = a;
            this.locations = d;
            this.hash = Math.random()
        },
        cleanup: function() {
            var a, d;
            for (d in this.visible) a = this.visible[d], a.getCustomData("hash") !== this.hash && this.hideLine(a)
        },
        queryViewport: function() {
            this.winPane = this.win.getViewPaneSize();
            this.winTopScroll = this.winTop.getScrollPosition();
            this.winTopPane = this.winTop.getViewPaneSize();
            this.rect = this.getClientRect(this.inline ? this.editable : this.frame)
        },
        getClientRect: function(a) {
            a = a.getClientRect();
            var d = this.container.getDocumentPosition(),
                b = this.container.getComputedStyle("position");
            a.relativeX = a.relativeY =
                0;
            "static" != b && (a.relativeY = d.y, a.relativeX = d.x, a.top -= a.relativeY, a.bottom -= a.relativeY, a.left -= a.relativeX, a.right -= a.relativeX);
            return a
        }
    };
    var r = {
            left: 1,
            right: 1,
            center: 1
        },
        u = {
            absolute: 1,
            fixed: 1
        };
    CKEDITOR.plugins.lineutils = {
        finder: m,
        locator: n,
        liner: p
    }
})();