$(document).ready(function() {
    "use strict";

    function v(n) {
        var i, r, t, u;
        for (n = n.replace(/^\s+|\s+$/g, ""), n = n.toLowerCase(), i = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;", r = "aaaaaeeeeeiiiiooooouuuunc------", t = 0, u = i.length; t < u; t++) n = n.replace(new RegExp(i.charAt(t), "g"), r.charAt(t));
        n = n.replace(/[^a-z0-9 -]/g, "").replace(/\s+/g, "-").replace(/-+/g, "-");
        $(".set-slug").val(n)
    }
    var f, a, n, i, u, e, r, o, t, s, h, c, l, y, p;
    if (document.onkeydown = function() {
            //return !1
        }, document.oncontextmenu = document.body.oncontextmenu = function() {
            //return !1
        }, f = $(".sidebar-scrollbar"), f.length != 0 && f.slimScroll({
            opacity: 0,
            height: "100%",
            color: "#808080",
            size: "5px",
            touchScrollStep: 50
        }).mouseover(function() {
            $(this).next(".slimScrollBar").css("opacity", .5)
        }), $(window).width() < 768) {
        $(".sidebar-toggle").on("click", function() {
            $("body").css("overflow", "hidden");
            $(".ec-tools-sidebar-overlay").fadeIn()
        });
        $(document).on("click", ".ec-tools-sidebar-overlay", function() {
            $(this).fadeOut();
            $("#body").removeClass("sidebar-mobile-in").addClass("sidebar-mobile-out");
            $("body").css("overflow", "auto")
        })
    }
    if (a = $(".sidebar"), a.length != 0 && ($(".sidebar .nav > .has-sub > a").click(function() {
            $(this).parent().siblings().removeClass("expand");
            $(this).parent().siblings().children(".collapse").slideUp("show");
            $(this).parent().toggleClass("expand");
            $(this).parent().children(".collapse").slideToggle("show")
        }), $(".sidebar .nav > .has-sub .has-sub > a").click(function() {
            $(this).parent().toggleClass("expand")
        })), $(window).width() < 768) $(document).on("click", ".sidebar-toggle", function(n) {
        n.preventDefault();
        var t = "sidebar-mobile-in",
            r = "sidebar-mobile-out",
            i = "#body";
        $(i).hasClass(t) ? $(i).removeClass(t).addClass(r) : $(i).addClass(t).removeClass(r)
    });
    if (n = $("#body"), $(window).width() >= 768) {
        typeof isMinified == "undefined" && (window.isMinified = !1);
        typeof isCollapsed == "undefined" && (window.isCollapsed = !1);
        $("#sidebar-toggler").on("click", function() {
            (n.hasClass("ec-sidebar-fixed-offcanvas") || n.hasClass("ec-sidebar-static-offcanvas")) && ($(this).addClass("sidebar-offcanvas-toggle").removeClass("sidebar-toggle"), window.isCollapsed === !1 ? (n.addClass("sidebar-collapse"), window.isCollapsed = !0, window.isMinified = !1) : (n.removeClass("sidebar-collapse"), n.addClass("sidebar-collapse-out"), setTimeout(function() {
                n.removeClass("sidebar-collapse-out")
            }, 300), window.isCollapsed = !1));
            (n.hasClass("ec-sidebar-fixed") || n.hasClass("ec-sidebar-static")) && ($(this).addClass("sidebar-toggle").removeClass("sidebar-offcanvas-toggle"), window.isMinified === !1 ? (n.removeClass("sidebar-collapse sidebar-minified-out").addClass("sidebar-minified"), window.isMinified = !0, window.isCollapsed = !1) : (n.removeClass("sidebar-minified"), n.addClass("sidebar-minified-out"), window.isMinified = !1))
        })
    }
    $(window).width() >= 768 && $(window).width() < 992 && (n.hasClass("ec-sidebar-fixed") || n.hasClass("ec-sidebar-static")) && (n.removeClass("sidebar-collapse sidebar-minified-out").addClass("sidebar-minified"), window.isMinified = !0);
    i = "right-sidebar-in";
    u = "right-sidebar-out";
    $(".nav-right-sidebar .nav-link").on("click", function() {
        n.hasClass(i) ? $(this).hasClass("show") && n.addClass(u).removeClass(i) : n.addClass(i).removeClass(u)
    });
    $(".card-right-sidebar .close").on("click", function() {
        n.removeClass(i).addClass(u)
    });
    if ($(window).width() <= 1024) {
        e = "right-sidebar-toggoler-in";
        r = "right-sidebar-toggoler-out";
        n.addClass(r);
        $(".btn-right-sidebar-toggler").on("click", function() {
            n.hasClass(r) ? n.addClass(e).removeClass(r) : n.addClass(r).removeClass(e)
        })
    }
    if (o = $(".notify-toggler"), t = $(".dropdown-notify"), o.length !== 0) {
        o.on("click", function() {
            t.is(":visible") ? t.fadeOut(5) : t.fadeIn(5)
        });
        $(document).mouseup(function(n) {
            t.is(n.target) || t.has(n.target).length !== 0 || t.fadeOut(5)
        })
    }
    s = $('[data-toggle="tooltip"]');
    s.length != 0 && s.tooltip({
        container: "body",
        template: '<div class="tooltip" role="tooltip"><div class="arrow"><\/div><div class="tooltip-inner"><\/div><\/div>'
    });
    h = $('[data-toggle="popover"]');
    h.length != 0 && h.popover();
    c = $("#basic-data-table");
    c.length !== 0 && c.DataTable({
        dom: '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
    });
    l = $("#responsive-data-table");
    l.length !== 0 && l.DataTable({
        aLengthMenu: [
            [20, 30, 50, 75, -1],
            [20, 30, 50, 75, "All"]
        ],
        pageLength: 20,
        dom: '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
    });
    $("body").on("change", ".ec-image-upload", function() {
        var t = $(this),
            n;
        this.files && this.files[0] && (n = new FileReader, n.onload = function(n) {
            var i = t.parent().parent().children(".ec-preview").find(".ec-image-preview").attr("src", n.target.result);
            i.hide();
            i.fadeIn(650)
        }, n.readAsDataURL(this.files[0]))
    });
    $(".fa-span").click(function() {
        var i = $(this).text(),
            t = document.createElement("input"),
            n;
        t.setAttribute("value", i);
        document.body.appendChild(t);
        t.select();
        document.execCommand("copy");
        document.body.removeChild(t);
        $("#fa-preview").html("<code>&lt;i class=&quot;" + i + "&quot;&gt;&lt;/i&gt;<\/code>");
        n = document.createElement("div");
        n.setAttribute("class", "copied");
        n.appendChild(document.createTextNode("Copied to Clipboard"));
        document.body.appendChild(n);
        setTimeout(function() {
            document.body.removeChild(n)
        }, 1500)
    });
	
    /*
	$(".zoom-image-hover").zoom();
    $(".single-product-cover").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: !1,
        fade: !1,
        asNavFor: ".single-nav-thumb"
    });
    $(".single-nav-thumb").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: ".single-product-cover",
        dots: !1,
        arrows: !0,
        focusOnSelect: !0
    });
    $(".slug-title").bind("paste", function(n) {
        var t = n.originalEvent.clipboardData.getData("text");
        v(t)
    });
    $(".slug-title").keypress(function() {
        var n = $(this).val();
        v(n)
    });*/
    y = new Date;
    p = y.getFullYear();
    document.getElementById("ec-year").innerHTML = p;
    var w = document.URL,
        b = $("<a>").prop("href", w).prop("hostname");
		
	$('.decimal2number').keypress(function(event) {
		var $this = $(this);
		if ((event.which != 46 || $this.val().indexOf('.') != -1) &&
		   ((event.which < 48 || event.which > 57) &&
		   (event.which != 0 && event.which != 8))) {
			   event.preventDefault();
		}

		var text = $(this).val();
		if ((event.which == 46) && (text.indexOf('.') == -1)) {
			setTimeout(function() {
				if ($this.val().substring($this.val().indexOf('.')).length > 3) {
					$this.val($this.val().substring(0, $this.val().indexOf('.') + 3));
				}
			}, 1);
		}

		if ((text.indexOf('.') != -1) &&
			(text.substring(text.indexOf('.')).length > 2) &&
			(event.which != 0 && event.which != 8) &&
			($(this)[0].selectionStart >= text.length - 2)) {
				event.preventDefault();
		}      
	});

	$('.decimal2number').bind("paste", function(e) {
		var text = e.originalEvent.clipboardData.getData('Text');
		if ($.isNumeric(text)) {
			if ((text.substring(text.indexOf('.')).length > 3) && (text.indexOf('.') > -1)) {
				e.preventDefault();
				$(this).val(text.substring(0, text.indexOf('.') + 3));
		   }
		}else {
			e.preventDefault();
		}
	});

    //=========ProgressBar JS==========//
    var inputs = document.querySelectorAll('.file-input')
    for (var i = 0, len = inputs.length; i < len; i++) {
        customInput(inputs[i])
    }
    function customInput (el) {
        const fileInput = el.querySelector('[type="file"]')
        const label = el.querySelector('[data-js-label]')
        
        fileInput.onchange = fileInput.onmouseout = function () {
            if (!fileInput.value) return
            
            var value = fileInput.value.replace(/^.*[\\\/]/, '')
            el.className += ' -chosen'
            label.innerText = value
        }
    }
    //=========ProgressBar JS End==========//
});

	
function requestGet(e, t) {
	t = void 0 === t ? {} : t;
	var a = {
		type: "GET",
		url: -1 < e.indexOf(window.app_config.url) ? e : window.app_config.url + e
	};
	return $.ajax($.extend({}, a, t))
}

function requestGetJSON(e, t) {
	return (t = void 0 === t ? {} : t).dataType = "json", requestGet(e, t)
}

function loadDetailModal(e,t){
	var m = $('#sidebar-detail-modal');
		if($(e).data('modal-title')){
			m.find('.modal-title').html($(e).data('modal-title'));
		}
		m.find('.modal-body').html('<div class="loading"><p>Please wait</p><span><i></i><i></i></span></div>');
		requestGet(t).done(function(res) { m.find('.modal-body').html(res); m.modal('show'); });
}
   