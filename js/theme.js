//主题开始
function changeNavState() {
    if (document.getElementById("top-main-nav").getAttribute("mobileState") == "on") {
        document.getElementById("top-main-nav").setAttribute("mobileState", "off");
        $(".top-main-nav-mobile-btn").removeClass("open");
        $("#main").removeClass("blur")
    } else {
        document.getElementById("top-main-nav").setAttribute("mobileState", "on");
        $(".top-main-nav-mobile-btn").addClass("open");
        $("#main").addClass("blur")
    }
}
function changeSidebarState() {
    if (document.getElementById("sideBar").getAttribute("mobileState") == "on") {
        document.getElementById("sideBar").setAttribute("mobileState", "off");
        $(".sidebar-mobile-btn").removeClass("open")
    } else {
        document.getElementById("sideBar").setAttribute("mobileState", "on");
        $(".sidebar-mobile-btn").addClass("open")
    }
}
function changeSidebarStateInSingle() {
    if (document.getElementById("sideBar").getAttribute("singleState") == "on") {
        document.getElementById("sideBar").setAttribute("singleState", "off");
        $("#sideBar").removeClass("show");
        $(".single-content").addClass("col-sm-12");
        $(".single-content").removeClass("col-sm-9 withSidebar")
    } else {
        document.getElementById("sideBar").setAttribute("singleState", "on");
        $("#sideBar").addClass("show");
        $(".single-content").removeClass("col-sm-12");
        $(".single-content").addClass("col-sm-9 withSidebar");
        slideBarNormalHeight = $("#sideBar").height() + $("#sideBar").offset().top;
        slideBarNormalWidth = $("#sideBar .sidebar-designer").width();
        slideBarNormalOffsetTop = $("#sideBar").offset().top
    }
    changeSidebarOnscroll();
    parseFaces()
}
$(function() {
    $(".sub-menu").prev().removeAttr("href")
});
$(function() {
    $(".sub-menu").prev().attr("ontouchstart", "hover(this)");
    $(".sub-menu").prev().attr("ontouchend", "mouseout(this)")
});
function mouseout(c) {
    var a = "hover";
    var b = c.className;
    if (b.length == 0) {
        return
    }
    if (b == a) {
        c.className = "";
        return
    }
    if (b.match(new RegExp("(^|\\s)" + a + "(\\s|$)"))) {
        c.className = b.replace((new RegExp("(^|\\s)" + a + "(\\s|$)")), " ")
    }
}
function hover(c) {
    if (!c) {
        return
    }
    var a = "hover";
    var b = c.className;
    if (b.length == 0) {
        c.className = a;
        return
    }
    if (b == a || b.match(new RegExp("(^|\\s)" + a + "(\\s|$)"))) {
        return
    }
    c.className = b + " " + a
}
$(function() {
    var b = $("#thumb-img").attr("src");
    if (b) {
        var a = RGBaster.colors(b, {
            paletteSize: 10,
            exclude: ["rgb(255,255,255)", "rgb(0,0,0)"],
            success: function(c) {
                var d = c.dominant;
                $("#mask").css("background", c.dominant)
            }
        })
    }
});
$(function() {
    $("#articleContent a").each(function(a, b) {
        var c = b.getAttribute("href");
        if ((c.indexOf(".svg") > 0 | c.indexOf(".SVG") > 0 | c.indexOf(".jpg") > 0 | c.indexOf(".JPG") > 0 | c.indexOf(".png") > 0 | c.indexOf(".PNG") > 0 | c.indexOf(".tif") > 0 | c.indexOf(".TIF") > 0 | c.indexOf(".jpeg") > 0 | c.indexOf(".JEPG") > 0 | c.indexOf(".tiff") > 0 | c.indexOf(".TIFF") > 0) & b.getAttribute("rel") != "no-shadowbox") {
            b.setAttribute("rel", "shadowbox")
        }
    })
});

$(window).resize(function(a) {
    changeSidebarOnscroll()
});
function changeSidebarOnscroll() {
    if ($(window).width() >= 768) {
        if ($(document).scrollTop() > slideBarNormalHeight) {
            $("#sideBar .sidebar-designer").css({
                "position": "fixed",
                "width": $("#sideBar").width(),
                "top": "15px"
            });
            $("#sideBar .categories,#sideBar .links").hide();
            if (slideBarAnimation) {
                slideBarAnimation = false;
                $("#sideBar .sidebar-designer").hide();
                $("#sideBar .sidebar-designer").slideDown()
            }
        }
        if (($(document).scrollTop() < slideBarNormalOffsetTop) & !slideBarAnimation) {
            $("#sideBar .sidebar-designer").removeAttr("style");
            $("#sideBar .categories,#sideBar .links").slideDown("slow");
            slideBarAnimation = true
        }
    }
}
$(".goToTop").click(function() {
    $("html,body").animate({
        scrollTop: "0px"
    },
    500)
});
function designerModeShowCats(a) {
    if (a == "show") {
        $(".sidebar-designer .box.search,.sidebar-designer .designerNav.content").slideDown();
        $(".showMoreCats").html("- 收起");
        designerModeCatsState = true;
        updateLocalData()
    } else {
        $(".sidebar-designer .box.search,.sidebar-designer .designerNav.content").slideUp();
        $(".showMoreCats").html("+ 展开");
        designerModeCatsState = false;
        updateLocalData()
    }
}
$(".showMoreCats").click(function() {
    if ($(".sidebar-designer .box.search").css("display") == "none") {
        designerModeShowCats("show")
    } else {
        designerModeShowCats()
    }
});
$(document).on("click", "#comment_faces > .faces > img",
function(b) {
    var a = " :" + $(this).attr("name") + ": ";
    $("textarea#comment").val($("#comment").val() + a)
});
function parseFaces() {
    $("#comment_faces > .faces").each(function(b, c) {
        var a = 0;
        $(this).children("img").each(function(d, e) {
            a = $(this).width() + a + 11
        });
        if ($(this).width() < a) {
            if ($(this).parent().children(".nav").length == 0) {
                lineHeight = $(this).children("img").height();
                $(this).parent().prepend('<div class="nav"><i class="fa fa-angle-left prev" aria-hidden="true" style="line-height:' + lineHeight + 'px"></i><i class="fa fa-angle-right next" aria-hidden="true" style="line-height:' + lineHeight + 'px"></i></div>');
                $(this).css({
                    marginLeft: "20px",
                    marginRight: "20px"
                })
            }
        } else {
            $(this).parent().children(".nav").remove();
            $(this).css({
                marginLeft: "",
                marginRight: ""
            })
        }
    })
}
$(function() {
    parseFaces()
});
$(window).resize(function(a) {
    parseFaces()
});
$(document).on("click", "#comment_faces .next",
function(b) {
    var a = $(this).parent().parent().children(".faces");
    a.animate({
        scrollLeft: a.scrollLeft() + a.parent().width() * 0.6
    },
    "slow")
});
$(document).on("click", "#comment_faces .prev",
function(b) {
    var a = $(this).parent().parent().children(".faces");
    a.animate({
        scrollLeft: a.scrollLeft() - a.parent().width() * 0.6
    },
    "slow")
});
$(document).on("click", "#commentform #submit",
function(c) {
    var d = $("textarea#comment").val();
    var a = ["face g=", "爱", "不说话", "不屑", "汗", "奸笑", "惊恐", "囧", "抠鼻", "酷", "萌", "亲", "微笑", "无语", "吓", "邪恶", "[", "]", "啊", "哈", "！"];
    for (var b = 0; b < a.length; b++) {
        d = d.split(a[b]).join("")
    }
    if (d.gblen() < 10) {
        $("#commentError").modal("show");
        return false
    }
});
String.prototype.gblen = function() {
    var a = 0;
    for (var b = 0; b < this.length; b++) {
        if (this.charCodeAt(b) > 127 || this.charCodeAt(b) == 94) {
            a += 2
        } else {}
    }
    return a
};
var single_float = true;

if (single_float == true) {
    $(document).on("click", ".fh5co-project > a",
    function(a) {
        if ($(window).width() > 991) {
            a.preventDefault();
            $("body").append("<div class='single_shadow' style='display:none'><div class='single container'><div class='closeBtn'></div><div class='fullBtn'></div><div class='row' style='display:none'></div></div></div>");
            single_url = $(this).attr("gotopage");
            $("body > .single_shadow").fadeIn();
            back_url = window.location.href;
            history.pushState({
                overflow: true
            },
            "", single_url);
            console.log(single_url);
            singleAjax = $.ajax({
                url: single_url,
                type: "GET",
            }).done(function(b) {
                $("body > .single_shadow > .container > .row").append($(b).find("#wrapper"));
				var i = 0, got = -1, len = document.getElementsByTagName('script').length;
				while ( i <= len-1 && got == -1){

					var js_url = document.getElementsByTagName('script')[i].src,
							got = js_url.indexOf('comments-ajax.js'); i++ ;
				}

				$.getScript(js_url);
                $("body > .single_shadow > .container > .row").find(".sidebar").remove();
                $("body > .single_shadow > .container > .row").find(".sidebar-mobile-btn").remove();
                $("body > .single_shadow > .container > .row").find(".sidebarController").remove();
                $("body > .single_shadow > .container > .row > .hfeed > .container").removeClass("container");
                $("body").css("overflow", "hidden");
                $("body > .single_shadow > .container > .row").fadeIn("fast");
                $("body > .single_shadow").addClass("hideLoad")
            })
        }
    });
    $(document).on("click", ".single_shadow > .single.container > .closeBtn",
    function(a) {
        singleAjax.abort();
        history.back()
    });
    $(document).on("click", ".single_shadow > .single.container > .fullBtn",
    function(a) {
        $("body").css("overflow", "");
        $("body > .single_shadow").remove();
        window.location.href = single_url
    });
    $(window).on("popstate",
    function(a) {
        if ($("body > .single_shadow").length != 0) {
            $("body").css("overflow", "");
            $("body > .single_shadow").remove()
        } else {
            window.location.href = window.location.href
        }
    })
};