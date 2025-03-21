document.addEventListener("DOMContentLoaded", function () {
  let k = isRtl ? "rtl" : "ltr";
  {
    var w = document.getElementById("calendar");
    let t = document.querySelector(".app-calendar-sidebar");
    var x = document.getElementById("addEventSidebar");
    let n = document.querySelector(".app-overlay");
    let a = document.querySelector(".offcanvas-title");
    var T = document.querySelector(".btn-toggle-sidebar");
    let l = document.getElementById("addEventBtn");
    let i = document.querySelector(".btn-delete-event");
    let r = document.querySelector(".btn-cancel");
    let d = document.getElementById("eventTitle");
    let o = document.getElementById("eventStartDate");
    let s = document.getElementById("eventEndDate");
    let c = document.getElementById("eventURL");
    let u = document.getElementById("eventLocation");
    let v = document.getElementById("eventDescription");
    let m = document.querySelector(".allDay-switch");
    let p = document.querySelector(".select-all");
    var D;
    var P;
    var M = Array.from(document.querySelectorAll(".input-filter"));
    var A = document.querySelector(".inline-calendar");
    let g = {Business: "primary", Holiday: "success", Personal: "danger", Family: "warning", ETC: "info"};
    let f = $("#eventLabel");
    let h = $("#eventGuests");
    let b = events;
    let y = false;
    let E = null;
    let e = null;
    let L = new bootstrap.Offcanvas(x);
    function q(e) {
      if (e.id) {
        return "<span class='badge badge-dot bg-" + $(e.element).data("label") + " me-2'> </span>" + e.text;
      } else {
        return e.text;
      }
    }
    function B(e) {
      if (e.id) {
        return `
    <div class='d-flex flex-wrap align-items-center'>
      <div class='avatar avatar-xs me-2'>
        <img src='${assetsPath}img/avatars/${$(e.element).data("avatar")}'
          alt='avatar' class='rounded-circle' />
      </div>
      ${e.text}
    </div>`;
      } else {
        return e.text;
      }
    }
    function I() {
      var e = document.querySelector(".fc-sidebarToggle-button");
      e.classList.remove("fc-button-primary");
      for (e.classList.add("d-lg-none", "d-inline-block", "ps-0"); e.firstChild;) {
        e.firstChild.remove();
      }
      e.setAttribute("data-bs-toggle", "sidebar");
      e.setAttribute("data-overlay", "");
      e.setAttribute("data-target", "#app-calendar-sidebar");
      e.insertAdjacentHTML("beforeend", '<i class="icon-base ti tabler-menu-2 icon-lg text-heading"></i>');
    }
    if (f.length) {
      f.wrap('<div class="position-relative"></div>').select2({placeholder: "Select value", dropdownParent: f.parent(), templateResult: q, templateSelection: q, minimumResultsForSearch: -1, escapeMarkup: function (e) {
        return e;
      }});
    }
    if (h.length) {
      h.wrap('<div class="position-relative"></div>').select2({placeholder: "Select value", dropdownParent: h.parent(), closeOnSelect: false, templateResult: B, templateSelection: B, escapeMarkup: function (e) {
        return e;
      }});
    }
    if (o) {
      D = o.flatpickr({monthSelectorType: "static", static: true, enableTime: true, altFormat: "Y-m-dTH:i:S", onReady: function (e, t, n) {
        if (n.isMobile) {
          n.mobileInput.setAttribute("step", null);
        }
      }});
    }
    if (s) {
      P = s.flatpickr({monthSelectorType: "static", static: true, enableTime: true, altFormat: "Y-m-dTH:i:S", onReady: function (e, t, n) {
        if (n.isMobile) {
          n.mobileInput.setAttribute("step", null);
        }
      }});
    }
    if (A) {
      e = A.flatpickr({monthSelectorType: "static", static: true, inline: true});
    }
    let S = new Calendar(w, {initialView: "dayGridMonth", events: function (e, t) {
      let n = (() => {
        let t = [];
        let e = [].slice.call(document.querySelectorAll(".input-filter:checked"));
        e.forEach(e => {
          t.push(e.getAttribute("data-value"));
        });
        return t;
      })();
      t(b.filter(function (e) {
        return n.includes(e.extendedProps.calendar.toLowerCase());
      }));
    }, plugins: [dayGridPlugin, interactionPlugin, listPlugin, timegridPlugin], editable: true, dragScroll: true, dayMaxEvents: 2, eventResizableFromStart: true, customButtons: {sidebarToggle: {text: "Sidebar"}}, headerToolbar: {start: "sidebarToggle, prev,next, title", end: "dayGridMonth,timeGridWeek,timeGridDay,listMonth"}, direction: k, initialDate: new Date, navLinks: true, eventClassNames: function ({event: e}) {
      return ["bg-label-" + g[e._def.extendedProps.calendar]];
    }, dateClick: function (e) {
      e = moment(e.date).format("YYYY-MM-DD");
      F();
      L.show();
      if (a) {
        a.innerHTML = "Create New Booking Event";
      }
      l.innerHTML = "Add";
      l.classList.remove("btn-update-event");
      l.classList.add("btn-add-event");
      i.classList.add("d-none");
      o.value = e;
      s.value = e;
    }, eventClick: function (e) {
      e = e;
      if ((E = e.event).url) {
        e.jsEvent.preventDefault();
        window.open(E.url, "_blank");
      }
      L.show();
      if (a) {
        a.innerHTML = "Update Booking";
      }
      l.innerHTML = "Update";
      l.classList.add("btn-update-event");
      l.classList.remove("btn-add-event");
      i.classList.remove("d-none");
      d.value = E.title;
      D.setDate(E.start, true, "Y-m-d");
      if (E.allDay === true) {
        m.checked = true;
      } else {
        m.checked = false;
      }
      if (E.end === null) {
        P.setDate(E.start, true, "Y-m-d");
      } else {
        P.setDate(E.end, true, "Y-m-d");
      }
      f.val(E.extendedProps.calendar).trigger("change");
      if (E.extendedProps.location !== void 0) {
        u.value = E.extendedProps.location;
      }
      if (E.extendedProps.guests !== void 0) {
        h.val(E.extendedProps.guests).trigger("change");
      }
      if (E.extendedProps.description !== void 0) {
        v.value = E.extendedProps.description;
      }
    }, datesSet: function () {
      I();
    }, viewDidMount: function () {
      I();
    }});
    function F() {
      s.value = "";
      c.value = "";
      o.value = "";
      d.value = "";
      u.value = "";
      m.checked = false;
      h.val("").trigger("change");
      v.value = "";
    }
    S.render();
    I();
    A = document.getElementById("eventForm");
    FormValidation.formValidation(A, {fields: {eventTitle: {validators: {notEmpty: {message: "Please enter event title "}}}, eventStartDate: {validators: {notEmpty: {message: "Please enter start date "}}}, eventEndDate: {validators: {notEmpty: {message: "Please enter end date "}}}}, plugins: {trigger: new FormValidation.plugins.Trigger, bootstrap5: new FormValidation.plugins.Bootstrap5({eleValidClass: "", rowSelector: function (e, t) {
      return ".form-control-validation";
    }}), submitButton: new FormValidation.plugins.SubmitButton, autoFocus: new FormValidation.plugins.AutoFocus}}).on("core.form.valid", function () {
      y = true;
    }).on("core.form.invalid", function () {
      y = false;
    });
    if (T) {
      T.addEventListener("click", e => {
        r.classList.remove("d-none");
      });
    }
    l.addEventListener("click", e => {
      var t;
      var n;
      if (l.classList.contains("btn-add-event")) {
        if (y) {
          n = {id: S.getEvents().length + 1, title: d.value, start: o.value, end: s.value, startStr: o.value, endStr: s.value, display: "block", extendedProps: {location: u.value, guests: h.val(), calendar: f.val(), description: v.value}};
          if (c.value) {
            n.url = c.value;
          }
          if (m.checked) {
            n.allDay = true;
          }
          n = n;
          b.push(n);
          S.refetchEvents();
          L.hide();
        }
      } else if (y) {
        n = {id: E.id, title: d.value, start: o.value, end: s.value, url: c.value, extendedProps: {location: u.value, guests: h.val(), calendar: f.val(), description: v.value}, display: "block", allDay: !!m.checked};
        (t = n).id = parseInt(t.id);
        b[b.findIndex(e => e.id === t.id)] = t;
        S.refetchEvents();
        L.hide();
      }
    });
    i.addEventListener("click", e => {
      var t = parseInt(E.id);
      b = b.filter(function (e) {
        return e.id != t;
      });
      S.refetchEvents();
      L.hide();
    });
    x.addEventListener("hidden.bs.offcanvas", function () {
      F();
    });
    T.addEventListener("click", e => {
      if (a) {
        a.innerHTML = "Create New Booking";
      }
      l.innerHTML = "Add";
      l.classList.remove("btn-update-event");
      l.classList.add("btn-add-event");
      i.classList.add("d-none");
      t.classList.remove("show");
      n.classList.remove("show");
    });
    if (p) {
      p.addEventListener("click", e => {
        if (e.currentTarget.checked) {
          document.querySelectorAll(".input-filter").forEach(e => e.checked = 1);
        } else {
          document.querySelectorAll(".input-filter").forEach(e => e.checked = 0);
        }
        S.refetchEvents();
      });
    }
    if (M) {
      M.forEach(e => {
        e.addEventListener("click", () => {
          if (document.querySelectorAll(".input-filter:checked").length < document.querySelectorAll(".input-filter").length) {
            p.checked = false;
          } else {
            p.checked = true;
          }
          S.refetchEvents();
        });
      });
    }
    e.config.onChange.push(function (e) {
      S.changeView(S.view.type, moment(e[0]).format("YYYY-MM-DD"));
      I();
      t.classList.remove("show");
      n.classList.remove("show");
    });
  }
});
