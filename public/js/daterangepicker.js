/* daterangepicker.js */
! function (t) {
    var e = function (e, a, s) {
        var i, n = "object" == typeof a;
        this.startDate = moment().startOf("day"), this.endDate = moment().startOf("day"), this.minDate = !1, this.maxDate = !1, this.dateLimit = !1, this.showDropdowns = !1, this.showWeekNumbers = !1, this.timePicker = !1, this.timePickerIncrement = 30, this.timePicker12Hour = !0, this.ranges = {}, this.opens = "right", this.buttonClasses = ["btn", "btn-small"], this.applyClass = "btn-success", this.cancelClass = "btn-default", this.format = "YYYY-MM-DD", this.separator = " - ", this.locale = {
            applyLabel: "Terapkan",
            cancelLabel: "Batal",
            fromLabel: "Dari",
            toLabel: "Sampai",
            weekLabel: "W",
            customRangeLabel: "Custom Range",
            daysOfWeek: moment()._lang._weekdaysMin.slice(),
            monthNames: moment()._lang._monthsShort.slice(),
            firstDay: 0
        }, this.cb = function () { }, this.parentEl = "body", this.element = t(e), this.element.hasClass("pull-right") && (this.opens = "left"), this.element.is("input") ? this.element.on({
            click: t.proxy(this.show, this),
            focus: t.proxy(this.show, this)
        }) : this.element.on("click", t.proxy(this.show, this)), i = this.locale, n && ("object" == typeof a.locale && t.each(i, function (t, e) {
            i[t] = a.locale[t] || e
        }), a.applyClass && (this.applyClass = a.applyClass), a.cancelClass && (this.cancelClass = a.cancelClass));
        var r = '<div class="daterangepicker dropdown-menu"><div class="calendar left"></div><div class="calendar right"></div><div class="ranges"><div class="range_inputs"><div class="daterangepicker_start_input" style="float: left"><label for="daterangepicker_start">' + this.locale.fromLabel + '</label><input class="input-mini" type="text" name="daterangepicker_start" value="" disabled="disabled" /></div><div class="daterangepicker_end_input" style="float: left; padding-left: 11px"><label for="daterangepicker_end">' + this.locale.toLabel + '</label><input class="input-mini" type="text" name="daterangepicker_end" value="" disabled="disabled" /></div><button class="' + this.applyClass + ' applyBtn" disabled="disabled">' + this.locale.applyLabel + '</button>&nbsp;<button class="' + this.cancelClass + ' cancelBtn">' + this.locale.cancelLabel + "</button></div></div></div>";
        if (this.parentEl = n && a.parentEl && t(a.parentEl) || t(this.parentEl), this.container = t(r).appendTo(this.parentEl), n) {
            if ("string" == typeof a.format && (this.format = a.format), "string" == typeof a.separator && (this.separator = a.separator), "string" == typeof a.startDate && (this.startDate = moment(a.startDate, this.format)), "string" == typeof a.endDate && (this.endDate = moment(a.endDate, this.format)), "string" == typeof a.minDate && (this.minDate = moment(a.minDate, this.format)), "string" == typeof a.maxDate && (this.maxDate = moment(a.maxDate, this.format)), "object" == typeof a.startDate && (this.startDate = moment(a.startDate)), "object" == typeof a.endDate && (this.endDate = moment(a.endDate)), "object" == typeof a.minDate && (this.minDate = moment(a.minDate)), "object" == typeof a.maxDate && (this.maxDate = moment(a.maxDate)), "object" == typeof a.ranges) {
                for (var o in a.ranges) {
                    var h = moment(a.ranges[o][0]),
                        l = moment(a.ranges[o][1]);
                    this.minDate && h.isBefore(this.minDate) && (h = moment(this.minDate)), this.maxDate && l.isAfter(this.maxDate) && (l = moment(this.maxDate)), this.minDate && l.isBefore(this.minDate) || this.maxDate && h.isAfter(this.maxDate) || (this.ranges[o] = [h, l])
                }
                var d = "<ul>";
                for (var o in this.ranges) d += "<li>" + o + "</li>";
                d += "<li>" + this.locale.customRangeLabel + "</li>", d += "</ul>", this.container.find(".ranges").prepend(d)
            }
            if ("object" == typeof a.dateLimit && (this.dateLimit = a.dateLimit), "object" == typeof a.locale && ("object" == typeof a.locale.daysOfWeek && (this.locale.daysOfWeek = a.locale.daysOfWeek.slice()), "number" == typeof a.locale.firstDay)) {
                this.locale.firstDay = a.locale.firstDay;
                for (var c = a.locale.firstDay; c > 0;) this.locale.daysOfWeek.push(this.locale.daysOfWeek.shift()), c--
            }
            "string" == typeof a.opens && (this.opens = a.opens), "boolean" == typeof a.showWeekNumbers && (this.showWeekNumbers = a.showWeekNumbers), "string" == typeof a.buttonClasses && (this.buttonClasses = [a.buttonClasses]), "object" == typeof a.buttonClasses && (this.buttonClasses = a.buttonClasses), "boolean" == typeof a.showDropdowns && (this.showDropdowns = a.showDropdowns), "boolean" == typeof a.timePicker && (this.timePicker = a.timePicker), "number" == typeof a.timePickerIncrement && (this.timePickerIncrement = a.timePickerIncrement), "boolean" == typeof a.timePicker12Hour && (this.timePicker12Hour = a.timePicker12Hour)
        }
        this.timePicker || (this.startDate = this.startDate.startOf("day"), this.endDate = this.endDate.startOf("day"));
        var m = this.container;
        if (t.each(this.buttonClasses, function (t, e) {
            m.find("button").addClass(e)
        }), "right" == this.opens) {
            var f = this.container.find(".calendar.left"),
                p = this.container.find(".calendar.right");
            f.removeClass("left").addClass("right"), p.removeClass("right").addClass("left")
        }
        if (("undefined" == typeof a || "undefined" == typeof a.ranges) && (this.container.find(".calendar").show(), this.move()), "function" == typeof s && (this.cb = s), this.container.addClass("opens" + this.opens), (!n || "undefined" == typeof a.startDate && "undefined" == typeof a.endDate) && t(this.element).is("input[type=text]")) {
            var h, l, u = t(this.element).val(),
                D = u.split(this.separator);
            2 == D.length && (h = moment(D[0], this.format), l = moment(D[1], this.format)), null != h && null != l && (this.startDate = h, this.endDate = l)
        }
        this.oldStartDate = this.startDate.clone(), this.oldEndDate = this.endDate.clone(), this.leftCalendar = {
            month: moment([this.startDate.year(), this.startDate.month(), 1, this.startDate.hour(), this.startDate.minute()]),
            calendar: []
        }, this.rightCalendar = {
            month: moment([this.endDate.year(), this.endDate.month(), 1, this.endDate.hour(), this.endDate.minute()]),
            calendar: []
        }, this.container.on("mousedown", t.proxy(this.mousedown, this)), this.container.find(".calendar").on("click", ".prev", t.proxy(this.clickPrev, this)).on("click", ".next", t.proxy(this.clickNext, this)).on("click", "td.available", t.proxy(this.clickDate, this)).on("mouseenter", "td.available", t.proxy(this.enterDate, this)).on("mouseleave", "td.available", t.proxy(this.updateFormInputs, this)).on("change", "select.yearselect", t.proxy(this.updateMonthYear, this)).on("change", "select.monthselect", t.proxy(this.updateMonthYear, this)).on("change", "select.hourselect,select.minuteselect,select.ampmselect", t.proxy(this.updateTime, this)), this.container.find(".ranges").on("click", "button.applyBtn", t.proxy(this.clickApply, this)).on("click", "button.cancelBtn", t.proxy(this.clickCancel, this)).on("click", ".daterangepicker_start_input,.daterangepicker_end_input", t.proxy(this.showCalendars, this)).on("click", "li", t.proxy(this.clickRange, this)).on("mouseenter", "li", t.proxy(this.enterRange, this)).on("mouseleave", "li", t.proxy(this.updateFormInputs, this)), this.element.on("keyup", t.proxy(this.updateFromControl, this)), this.updateView(), this.updateCalendars()
    };
    e.prototype = {
        constructor: e,
        mousedown: function (t) {
            t.stopPropagation()
        },
        updateView: function () {
            this.leftCalendar.month.month(this.startDate.month()).year(this.startDate.year()), this.rightCalendar.month.month(this.endDate.month()).year(this.endDate.year()), this.updateFormInputs()
        },
        updateFormInputs: function () {
            this.container.find("input[name=daterangepicker_start]").val(this.startDate.format(this.format)), this.container.find("input[name=daterangepicker_end]").val(this.endDate.format(this.format)), this.startDate.isSame(this.endDate) || this.startDate.isBefore(this.endDate) ? this.container.find("button.applyBtn").removeAttr("disabled") : this.container.find("button.applyBtn").attr("disabled", "disabled")
        },
        updateFromControl: function () {
            if (this.element.is("input") && this.element.val().length) {
                var t = this.element.val().split(this.separator),
                    e = moment(t[0], this.format),
                    a = moment(t[1], this.format);
                null != e && null != a && (a.isBefore(e) || (this.oldStartDate = this.startDate.clone(), this.oldEndDate = this.endDate.clone(), this.startDate = e, this.endDate = a, this.startDate.isSame(this.oldStartDate) && this.endDate.isSame(this.oldEndDate) || this.notify(), this.updateCalendars()))
            }
        },
        notify: function () {
            this.updateView(), this.cb(this.startDate, this.endDate)
        },
        move: function () {
            var e = {
                top: this.parentEl.offset().top - (this.parentEl.is("body") ? 0 : this.parentEl.scrollTop()),
                left: this.parentEl.offset().left - (this.parentEl.is("body") ? 0 : this.parentEl.scrollLeft())
            };
            "left" == this.opens ? (this.container.css({
                top: this.element.offset().top + this.element.outerHeight() - e.top,
                right: t(window).width() - this.element.offset().left - this.element.outerWidth() - e.left,
                left: "auto"
            }), this.container.offset().left < 0 && this.container.css({
                right: "auto",
                left: 9
            })) : (this.container.css({
                top: this.element.offset().top + this.element.outerHeight() - e.top,
                left: this.element.offset().left - e.left,
                right: "auto"
            }), this.container.offset().left + this.container.outerWidth() > t(window).width() && this.container.css({
                left: "auto",
                right: 0
            }))
        },
        show: function (e) {
            this.container.show(), this.move(), e && (e.stopPropagation(), e.preventDefault()), t(document).on("mousedown", t.proxy(this.hide, this)), this.element.trigger("shown", {
                target: e.target,
                picker: this
            })
        },
        hide: function () {
            this.container.hide(), this.startDate.isSame(this.oldStartDate) && this.endDate.isSame(this.oldEndDate) || this.notify(), this.oldStartDate = this.startDate.clone(), this.oldEndDate = this.endDate.clone(), t(document).off("mousedown", this.hide), this.element.trigger("hidden", {
                picker: this
            })
        },
        enterRange: function (t) {
            var e = t.target.innerHTML;
            if (e == this.locale.customRangeLabel) this.updateView();
            else {
                var a = this.ranges[e];
                this.container.find("input[name=daterangepicker_start]").val(a[0].format(this.format)), this.container.find("input[name=daterangepicker_end]").val(a[1].format(this.format))
            }
        },
        showCalendars: function () {
            this.container.find(".calendar").show(), this.move()
        },
        updateInputText: function () {
            this.element.is("input") && this.element.val(this.startDate.format(this.format) + this.separator + this.endDate.format(this.format))
        },
        clickRange: function (t) {
            var e = t.target.innerHTML;
            if (e == this.locale.customRangeLabel) this.showCalendars();
            else {
                var a = this.ranges[e];
                this.startDate = a[0], this.endDate = a[1], this.timePicker || (this.startDate.startOf("day"), this.endDate.startOf("day")), this.leftCalendar.month.month(this.startDate.month()).year(this.startDate.year()).hour(this.startDate.hour()).minute(this.startDate.minute()), this.rightCalendar.month.month(this.endDate.month()).year(this.endDate.year()).hour(this.endDate.hour()).minute(this.endDate.minute()), this.updateCalendars(), this.updateInputText(), this.container.find(".calendar").hide(), this.hide()
            }
        },
        clickPrev: function (e) {
            var a = t(e.target).parents(".calendar");
            a.hasClass("left") ? this.leftCalendar.month.subtract("month", 1) : this.rightCalendar.month.subtract("month", 1), this.updateCalendars()
        },
        clickNext: function (e) {
            var a = t(e.target).parents(".calendar");
            a.hasClass("left") ? this.leftCalendar.month.add("month", 1) : this.rightCalendar.month.add("month", 1), this.updateCalendars()
        },
        enterDate: function (e) {
            var a = t(e.target).attr("data-title"),
                s = a.substr(1, 1),
                i = a.substr(3, 1),
                n = t(e.target).parents(".calendar");
            n.hasClass("left") ? this.container.find("input[name=daterangepicker_start]").val(this.leftCalendar.calendar[s][i].format(this.format)) : this.container.find("input[name=daterangepicker_end]").val(this.rightCalendar.calendar[s][i].format(this.format))
        },
        clickDate: function (e) {
            var a = t(e.target).attr("data-title"),
                s = a.substr(1, 1),
                i = a.substr(3, 1),
                n = t(e.target).parents(".calendar");
            if (n.hasClass("left")) {
                var r = this.leftCalendar.calendar[s][i],
                    o = this.endDate;
                if ("object" == typeof this.dateLimit) {
                    var h = moment(r).add(this.dateLimit).startOf("day");
                    o.isAfter(h) && (o = h)
                }
            } else {
                var r = this.startDate,
                    o = this.rightCalendar.calendar[s][i];
                if ("object" == typeof this.dateLimit) {
                    var l = moment(o).subtract(this.dateLimit).startOf("day");
                    r.isBefore(l) && (r = l)
                }
            }
            n.find("td").removeClass("active"), r.isSame(o) || r.isBefore(o) ? (t(e.target).addClass("active"), this.startDate = r, this.endDate = o) : r.isAfter(o) && (t(e.target).addClass("active"), this.startDate = r, this.endDate = moment(r).add("day", 1).startOf("day")), this.leftCalendar.month.month(this.startDate.month()).year(this.startDate.year()), this.rightCalendar.month.month(this.endDate.month()).year(this.endDate.year()), this.updateCalendars()
        },
        clickApply: function () {
            this.updateInputText(), this.hide()
        },
        clickCancel: function () {
            this.startDate = this.oldStartDate, this.endDate = this.oldEndDate, this.updateView(), this.updateCalendars(), this.hide()
        },
        updateMonthYear: function (e) {
            var a = t(e.target).closest(".calendar").hasClass("left"),
                s = this.container.find(".calendar.left");
            a || (s = this.container.find(".calendar.right"));
            var i = parseInt(s.find(".monthselect").val(), 10),
                n = s.find(".yearselect").val();
            a ? this.leftCalendar.month.month(i).year(n) : this.rightCalendar.month.month(i).year(n), this.updateCalendars()
        },
        updateTime: function (e) {
            var a = t(e.target).closest(".calendar").hasClass("left"),
                s = this.container.find(".calendar.left");
            a || (s = this.container.find(".calendar.right"));
            var i = parseInt(s.find(".hourselect").val()),
                n = parseInt(s.find(".minuteselect").val());
            if (this.timePicker12Hour) {
                var r = s.find(".ampmselect").val();
                "PM" == r && 12 > i && (i += 12), "AM" == r && 12 == i && (i = 0)
            }
            if (a) {
                var o = this.startDate.clone();
                o.hour(i), o.minute(n), this.startDate = o, this.leftCalendar.month.hour(i).minute(n)
            } else {
                var h = this.endDate.clone();
                h.hour(i), h.minute(n), this.endDate = h, this.rightCalendar.month.hour(i).minute(n)
            }
            this.updateCalendars()
        },
        updateCalendars: function () {
            this.leftCalendar.calendar = this.buildCalendar(this.leftCalendar.month.month(), this.leftCalendar.month.year(), this.leftCalendar.month.hour(), this.leftCalendar.month.minute(), "left"), this.rightCalendar.calendar = this.buildCalendar(this.rightCalendar.month.month(), this.rightCalendar.month.year(), this.rightCalendar.month.hour(), this.rightCalendar.month.minute(), "right"), this.container.find(".calendar.left").html(this.renderCalendar(this.leftCalendar.calendar, this.startDate, this.minDate, this.maxDate)), this.container.find(".calendar.right").html(this.renderCalendar(this.rightCalendar.calendar, this.endDate, this.startDate, this.maxDate)), this.container.find(".ranges li").removeClass("active");
            var t = !0,
                e = 0;
            for (var a in this.ranges) this.timePicker ? this.startDate.isSame(this.ranges[a][0]) && this.endDate.isSame(this.ranges[a][1]) && (t = !1, this.container.find(".ranges li:eq(" + e + ")").addClass("active")) : this.startDate.format("YYYY-MM-DD") == this.ranges[a][0].format("YYYY-MM-DD") && this.endDate.format("YYYY-MM-DD") == this.ranges[a][1].format("YYYY-MM-DD") && (t = !1, this.container.find(".ranges li:eq(" + e + ")").addClass("active")), e++;
            t && this.container.find(".ranges li:last").addClass("active")
        },
        buildCalendar: function (t, e, a, s) {
            for (var i = moment([e, t, 1]), n = moment(i).subtract("month", 1).month(), r = moment(i).subtract("month", 1).year(), o = moment([r, n]).daysInMonth(), h = i.day(), l = [], d = 0; 6 > d; d++) l[d] = [];
            var c = o - h + this.locale.firstDay + 1;
            c > o && (c -= 7), h == this.locale.firstDay && (c = o - 6);
            for (var m = moment([r, n, c, 12, s]), d = 0, f = 0, p = 0; 42 > d; d++, f++, m = moment(m).add("hour", 24)) d > 0 && f % 7 == 0 && (f = 0, p++), l[p][f] = m.clone().hour(a), m.hour(12);
            return l
        },
        renderDropdowns: function (t, e, a) {
            for (var s = t.month(), i = '<select class="monthselect">', n = !1, r = !1, o = 0; 12 > o; o++) (!n || o >= e.month()) && (!r || o <= a.month()) && (i += "<option value='" + o + "'" + (o === s ? " selected='selected'" : "") + ">" + this.locale.monthNames[o] + "</option>");
            i += "</select>";
            for (var h = t.year(), l = a && a.year() || h + 5, d = e && e.year() || h - 50, c = '<select class="yearselect">', m = d; l >= m; m++) c += '<option value="' + m + '"' + (m === h ? ' selected="selected"' : "") + ">" + m + "</option>";
            return c += "</select>", i + c
        },
        renderCalendar: function (e, a, s, i) {
            var n = '<div class="calendar-date">';
            n += '<table class="table-condensed">', n += "<thead>", n += "<tr>", this.showWeekNumbers && (n += "<th></th>"), n += !s || s.isBefore(e[1][1]) ? '<th class="prev available"><i class="icon-arrow-left glyphicon glyphicon-arrow-left"></i></th>' : "<th></th>";
            var r = this.locale.monthNames[e[1][1].month()] + e[1][1].format(" YYYY");
            this.showDropdowns && (r = this.renderDropdowns(e[1][1], s, i)), n += '<th colspan="5" style="width: auto">' + r + "</th>", n += !i || i.isAfter(e[1][1]) ? '<th class="next available"><i class="icon-arrow-right glyphicon glyphicon-arrow-right"></i></th>' : "<th></th>", n += "</tr>", n += "<tr>", this.showWeekNumbers && (n += '<th class="week">' + this.locale.weekLabel + "</th>"), t.each(this.locale.daysOfWeek, function (t, e) {
                n += "<th>" + e + "</th>"
            }), n += "</tr>", n += "</thead>", n += "<tbody>";
            for (var o = 0; 6 > o; o++) {
                n += "<tr>", this.showWeekNumbers && (n += '<td class="week">' + e[o][0].week() + "</td>");
                for (var h = 0; 7 > h; h++) {
                    var l = "available ";
                    l += e[o][h].month() == e[1][1].month() ? "" : "off", s && e[o][h].isBefore(s) || i && e[o][h].isAfter(i) ? l = " off disabled " : e[o][h].format("YYYY-MM-DD") == a.format("YYYY-MM-DD") ? (l += " active ", e[o][h].format("YYYY-MM-DD") == this.startDate.format("YYYY-MM-DD") && (l += " start-date "), e[o][h].format("YYYY-MM-DD") == this.endDate.format("YYYY-MM-DD") && (l += " end-date ")) : e[o][h] >= this.startDate && e[o][h] <= this.endDate && (l += " in-range ", e[o][h].isSame(this.startDate) && (l += " start-date "), e[o][h].isSame(this.endDate) && (l += " end-date "));
                    var d = "r" + o + "c" + h;
                    n += '<td class="' + l.replace(/\s+/g, " ").replace(/^\s?(.*?)\s?$/, "$1") + '" data-title="' + d + '">' + e[o][h].date() + "</td>"
                }
                n += "</tr>"
            }
            if (n += "</tbody>", n += "</table>", n += "</div>", this.timePicker) {
                n += '<div class="calendar-time">', n += '<select class="hourselect">';
                var c = 0,
                    m = 23,
                    f = a.hour();
                this.timePicker12Hour && (c = 1, m = 12, f >= 12 && (f -= 12), 0 == f && (f = 12));
                for (var p = c; m >= p; p++) n += p == f ? '<option value="' + p + '" selected="selected">' + p + "</option>" : '<option value="' + p + '">' + p + "</option>";
                n += "</select> : ", n += '<select class="minuteselect">';
                for (var p = 0; 60 > p; p += this.timePickerIncrement) {
                    var u = p;
                    10 > u && (u = "0" + u), n += p == a.minute() ? '<option value="' + p + '" selected="selected">' + u + "</option>" : '<option value="' + p + '">' + u + "</option>"
                }
                n += "</select> ", this.timePicker12Hour && (n += '<select class="ampmselect">', n += a.hour() >= 12 ? '<option value="AM">AM</option><option value="PM" selected="selected">PM</option>' : '<option value="AM" selected="selected">AM</option><option value="PM">PM</option>', n += "</select>"), n += "</div>"
            }
            return n
        }
    }, t.fn.daterangepicker = function (a, s) {
        return this.each(function () {
            var i = t(this);
            i.data("daterangepicker") || i.data("daterangepicker", new e(i, a, s))
        }), this
    }
}(window.jQuery);

