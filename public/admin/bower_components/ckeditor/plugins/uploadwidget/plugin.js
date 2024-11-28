/*
 Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or http://ckeditor.com/license
*/
(function() {
    CKEDITOR.plugins.add("uploadwidget", {
        lang: "az,ca,cs,da,de,de-ch,el,en,eo,es,eu,fr,gl,hu,id,it,ja,km,ko,ku,nb,nl,no,oc,pl,pt,pt-br,ru,sv,tr,ug,uk,zh,zh-cn",
        requires: "widget,clipboard,filetools,notificationaggregator",
        init: function(a) {
            a.filter.allow("*[!data-widget,!data-cke-upload-id]")
        }
    });
    CKEDITOR.fileTools || (CKEDITOR.fileTools = {});
    CKEDITOR.tools.extend(CKEDITOR.fileTools, {
        addUploadWidget: function(a, e, c) {
            var g = CKEDITOR.fileTools,
                b = a.uploadRepository,
                p = c.supportedTypes ? 10 : 20;
            if (c.fileToElement) a.on("paste",
                function(f) {
                    f = f.data;
                    var n = f.dataTransfer,
                        k = n.getFilesCount(),
                        m = c.loadMethod || "loadAndUpload",
                        d, h;
                    if (!f.dataValue && k)
                        for (h = 0; h < k; h++)
                            if (d = n.getFile(h), !c.supportedTypes || g.isTypeSupported(d, c.supportedTypes)) {
                                var l = c.fileToElement(d);
                                d = b.create(d);
                                l && (d[m](c.uploadUrl, c.additionalRequestParameters), CKEDITOR.fileTools.markElement(l, e, d.id), "loadAndUpload" != m && "upload" != m || CKEDITOR.fileTools.bindNotifications(a, d), f.dataValue += l.getOuterHtml())
                            }
                }, null, null, p);
            CKEDITOR.tools.extend(c, {
                downcast: function() {
                    return new CKEDITOR.htmlParser.text("")
                },
                init: function() {
                    var f = this,
                        e = this.wrapper.findOne("[data-cke-upload-id]").data("cke-upload-id"),
                        k = b.loaders[e],
                        c = CKEDITOR.tools.capitalize,
                        d, h;
                    k.on("update", function(b) {
                        if (f.wrapper && f.wrapper.getParent()) {
                            a.fire("lockSnapshot");
                            b = "on" + c(k.status);
                            if ("function" !== typeof f[b] || !1 !== f[b](k)) h = "cke_upload_" + k.status, f.wrapper && h != d && (d && f.wrapper.removeClass(d), f.wrapper.addClass(h), d = h), "error" != k.status && "abort" != k.status || a.widgets.del(f);
                            a.fire("unlockSnapshot")
                        } else a.editable().find('[data-cke-upload-id\x3d"' +
                            e + '"]').count() || k.abort(), b.removeListener()
                    });
                    k.update()
                },
                replaceWith: function(b, e) {
                    if ("" === b.trim()) a.widgets.del(this);
                    else {
                        var c = this == a.widgets.focused,
                            g = a.editable(),
                            d = a.createRange(),
                            h, l;
                        c || (l = a.getSelection().createBookmarks());
                        d.setStartBefore(this.wrapper);
                        d.setEndAfter(this.wrapper);
                        c && (h = d.createBookmark());
                        g.insertHtmlIntoRange(b, d, e);
                        a.widgets.checkWidgets({
                            initOnlyNew: !0
                        });
                        a.widgets.destroy(this, !0);
                        c ? (d.moveToBookmark(h), d.select()) : a.getSelection().selectBookmarks(l)
                    }
                }
            });
            a.widgets.add(e,
                c)
        },
        markElement: function(a, e, c) {
            a.setAttributes({
                "data-cke-upload-id": c,
                "data-widget": e
            })
        },
        bindNotifications: function(a, e) {
            function c() {
                g = a._.uploadWidgetNotificaionAggregator;
                if (!g || g.isFinished()) g = a._.uploadWidgetNotificaionAggregator = new CKEDITOR.plugins.notificationAggregator(a, a.lang.uploadwidget.uploadMany, a.lang.uploadwidget.uploadOne), g.once("finished", function() {
                    var b = g.getTaskCount();
                    0 === b ? g.notification.hide() : g.notification.update({
                        message: 1 == b ? a.lang.uploadwidget.doneOne : a.lang.uploadwidget.doneMany.replace("%1",
                            b),
                        type: "success",
                        important: 1
                    })
                })
            }
            var g, b = null;
            e.on("update", function() {
                !b && e.uploadTotal && (c(), b = g.createTask({
                    weight: e.uploadTotal
                }));
                b && "uploading" == e.status && b.update(e.uploaded)
            });
            e.on("uploaded", function() {
                b && b.done()
            });
            e.on("error", function() {
                b && b.cancel();
                a.showNotification(e.message, "warning")
            });
            e.on("abort", function() {
                b && b.cancel();
                a.showNotification(a.lang.uploadwidget.abort, "info")
            })
        }
    })
})();