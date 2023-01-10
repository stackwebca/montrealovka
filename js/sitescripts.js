<!--                Filter for cms content-->
$(window).scroll(function() {
    var x = $(this).scrollTop();
    $('.navbar--color--secondary').css('background-position', '100% ' + parseInt(-x / 2.75) + 'px' + ', 0% ' +
        parseInt
        (-x /
            120) +
        'px, center top');
});


$(document).ready(function () {
    var $filterCheckboxes = $('input[type="checkbox"]');
    $(document).ready(function () {
        $filterCheckboxes.on('change', function () {
            var selectedFilters = {};
            $filterCheckboxes.filter(':checked').each(function () {
                if (!selectedFilters.hasOwnProperty(this.name)) {
                    selectedFilters[this.name] = [];
                }
                selectedFilters[this.name].push(this.value);
            });
            // create a collection containing all of the filterable elements
            var $filteredResults = $('.filtered');
            // loop over the selected filter name -> (array) values pairs
            $.each(selectedFilters, function (name, filterValues) {
                // filter each .filtered element
                $filteredResults = $filteredResults.filter(function () {
                    var matched = false,
                        currentFilterValues = $(this).data('category').split(' ');
                    // loop over each category value in the current .filtered's data-category
                    $.each(currentFilterValues, function (_, currentFilterValue) {
                        // if the current category exists in the selected filters array
                        // set matched to true, and stop looping. as we're ORing in each
                        // set of filters, we only need to match once
                        if ($.inArray(currentFilterValue, filterValues) != -1) {
                            matched = true;
                            return false;
                        }
                    });
                    // if matched is true the current .filtered element is returned
                    return matched;
                });
            });
            $('.filtered').hide().filter($filteredResults).show();
        });
    });


});

// Search Button and Bar
$(document).ready(function () {
    $(".searchbtn").click(function () {
        $(".input").focus().toggleClass("active-width").val('');
    });
});

// Navbar effect
// grabbing the class names from the data attributes
const navBar = $('.navbar'),
    data = navBar.data();

// booleans used to tame the scroll event listening a little..
let scrolling = false,
    scrolledPast = false;

// transition Into
function switchInto() {
    // update `scrolledPast` bool
    scrolledPast = true;
    // add/remove CSS classes
    navBar.removeClass(data.startcolor);
    navBar.removeClass(data.startsize);
    navBar.addClass(data.intocolor);
    navBar.addClass(data.intosize);
    console.log('into transition triggered!');
};

// transition Start
function switchStart() {
    // update `scrolledPast` bool
    scrolledPast = false;
    // add/remove CSS classes
    navBar.addClass(data.startcolor);
    navBar.addClass(data.startsize);
    navBar.removeClass(data.intocolor);
    navBar.removeClass(data.intosize);
    console.log('start transition triggered!');
}

// set `scrolling` to true when user scrolls
$(window).scroll(() => scrolling = true);

setInterval(() => {
    // when `scrolling` becomes true...
    if (scrolling) {
        // set it back to false
        scrolling = false;
        // check scroll position
        if ($(window).scrollTop() > 100) {
            // user has scrolled > 100px from top since last check
            if (!scrolledPast) {
                switchInto();
            }
        } else {
            // user has scrolled back <= 100px from top since last check
            if (scrolledPast) {
                switchStart();
            }
        }
    }
    // take a breath.. hold event listener from firing for 100ms
}, 100);

$(function () {
    "use strict";

    function toggle(e) {
        if (e) e.preventDefault();

        var $this = $(this),
            $navbar = $this.parents(".navbar"),
            $item = $this.parent();

        $(".nav-item.active", $navbar).removeClass("active");
        $item.addClass("active");

        if ($navbar.hasClass("main-nav")) {
            $(".active", $navbar.siblings(".sub-nav")).removeClass("active");
            $($item.data("target")).addClass("active");
        }
    }

    function leave(e) {
        var $this = $(this),
            $navbar = $this.siblings(".main-nav"),
            $subnav = $(".navbar-nav.active", $this);

        $('[data-target="#' + $subnav.attr("id") + '"]', $navbar).removeClass(
            "hover"
        );
        $subnav.removeClass("active");
    }

    function enter(e) {
        var $this = $(this),
            $navbar = $this.parents(".navbar");

        $(".nav-item.hover", $navbar).removeClass("hover");
        $this.addClass("hover");

        if ($navbar.hasClass("main-nav")) {
            $(".active", $navbar.siblings(".sub-nav")).removeClass("active");
            $($this.data("target")).addClass("active");
        }
    }

    $(".main-nav .nav-link, .sub-nav .nav-link").click(toggle);
    $(".main-nav .nav-item").mouseenter(enter);
    $(".sub-nav").mouseleave(leave);
});

$(document).ready(function () {
    $(".mainContent").hide();
    $("#jqSign").hide();
    $("#jqRegister").hide();

    $(".mainContent").fadeIn(2000);

    $("#jqSignin").click(function () {
        $("#jqSign").fadeIn(2000);
        $("#jqRegister").hide();
    })

    $("#jqRegisters").click(function () {
        $("#jqRegister").fadeIn(2000);
        $("#jqSign").hide();
    })

    $("#sign_in").click(function () {
        $("#jqSign").hide();
    })

    $("#sign_in").click(function () {
        $("#jqSign").hide();
    })

    $('[data-toggle="tooltip"]').tooltip();
});

$(document).ready(function () {
    $("#jqSign1").hide();
    $("#jqRegister1").hide();

    $("#jqSignin1").click(function () {
        $("#jqSign1").fadeIn(2000);
        $("#jqRegister1").hide();
    })

    $("#jqRegisters1").click(function () {
        $("#jqRegister1").fadeIn(2000);
        $("#jqSign1").hide();
    })

    $("#sign_in1").click(function () {
        $("#jqSign1").hide();
    })

    $("#sign_in1").click(function () {
        $("#jqSign1").hide();
    })
});

$(document).ready(function () {
    $('a[href*="#"]').on('click', function (e) {
        e.preventDefault()
        $('html, body').animate(
            {
                scrollTop: $($(this).attr('href')).offset().top,
            },
            700,
            'linear'
        )
    });
});

// Scroll to top - Blinker Icon - See CSS For Styling
var floatPanel = new McFloatPanel();

/* Float Panel v2016.10.28. Copyright www.menucool.com */
function McFloatPanel() {
    var i = [], s = [], h = "className", t = "getElementsByClassName", d = "length", l = "display", C = "transition",
        m = "style", B = "height", c = "scrollTop", k = "offsetHeight", a = "fixed", e = document,
        b = document.documentElement, j = function (a, c, b) {
            if (a.addEventListener) a.addEventListener(c, b, false); else a.attachEvent && a.attachEvent("on" + c, b)
        }, o = function (c, d) {
            if (typeof getComputedStyle != "undefined") var b = getComputedStyle(c, null); else b = c.currentStyle;
            return b ? b[d] : a
        }, L = function () {
            var a = e.body;
            return Math.max(a.scrollHeight, a[k], b.clientHeight, b.scrollHeight, b[k])
        }, O = function (a, c) {
            var b = a[d];
            while (b--) if (a[b] === c) return true;
            return false
        }, g = function (b, a) {
            return O(b[h].split(" "), a)
        }, q = function (a, b) {
            if (!g(a, b)) if (!a[h]) a[h] = b; else a[h] += " " + b
        }, p = function (a, f) {
            if (a[h] && g(a, f)) {
                for (var e = "", c = a[h].split(" "), b = 0, i = c[d]; b < i; b++) if (c[b] !== f) e += c[b] + " ";
                a[h] = e.replace(/^\s+|\s+$/g, "")
            }
        }, n = function () {
            return window.pageYOffset || b[c]
        }, z = function (a) {
            return a.getBoundingClientRect().top
        }, F = function (b) {
            var c = n();
            if (c > b.oS && !g(b, a)) q(b, a); else g(b, a) && c < b.oS && p(b, a)
        }, x = function () {
            for (var a = 0; a < s[d]; a++) J(s[a])
        }, J = function (a) {
            if (a.oS) {
                a.fT && clearTimeout(a.fT);
                a.fT = setTimeout(function () {
                    if (a.aF) F(a); else y(a)
                }, 50)
            } else y(a)
        }, w = function (d, c, b) {
            p(d, a);
            c[l] = "none";
            b.position = b.top = ""
        }, y = function (c) {
            var j = z(c), f = c[k], e = c[m], d = c.pH[m], h = n();
            if (j < c.oT && h > c.oS && !g(c, a) && (window.innerHeight || b.clientHeight) > f) {
                c.tP = h + j - c.oT;
                var p = L();
                if (f > p - c.tP - f) var i = f; else i = 0;
                d[l] = "block";
                d[C] = "none";
                d[B] = f + 1 + "px";
                c.pH[k];
                d[C] = "height .3s";
                d[B] = i + "px";
                q(c, a);
                e.position = a;
                e.top = c.oT + "px";
                if (o(c, "position") != a) d[l] = "none"
            } else if (g(c, a) && (h < c.tP || h < c.oS)) {
                var s = o(c, "animation");
                if (c.oS && c.classList && s.indexOf("slide-down") != -1) {
                    var r = o(c, "animationDuration");
                    c.classList.remove(a);
                    e.animationDirection = "reverse";
                    e.animationDuration = "1000ms";
                    void c[k];
                    c.classList.add(a);
                    setTimeout(function () {
                        w(c, d, e);
                        e.animationDirection = "normal";
                        e.animationDuration = r
                    }, 300)
                } else w(c, d, e)
            }
        }, I = function () {
            var f = [], c, b;
            if (e[t]) {
                f = e[t]("float-panel");
                i = e[t]("slideanim")
            } else {
                var k = e.getElementsByTagName("*");
                c = k[d];
                while (c--) g(k[c], "float-panel") && f.push(k[c])
            }
            c = f[d];
            for (var h = 0; h < c; h++) {
                b = s[h] = f[h];
                b.oT = parseInt(b.getAttribute("data-top") || 0);
                b.oS = parseInt(b.getAttribute("data-scroll") || 0);
                if (b.oS > 20 && o(b, "position") == a) b.aF = 1;
                b.pH = e.createElement("div");
                b.pH[m].width = b.offsetWidth + "px";
                b.pH[m][l] = "none";
                b.parentNode.insertBefore(b.pH, b.nextSibling)
            }
            if (s[d]) {
                setTimeout(x, 160);
                j(window, "scroll", x)
            }
        }, f, D = 200, E = 0, r, u, H = function () {
            return window.innerWidth || b.clientWidth || e.body.clientWidth
        };

    function K() {
        if (!r) r = setInterval(function () {
            var a = e.body;
            if (a[c] < 3) a[c] = 0; else a[c] = a[c] / 1.3;
            if (b[c] < 3) b[c] = 0; else b[c] = b[c] / 1.3;
            if (!n()) {
                clearInterval(r);
                r = null
            }
        }, 14)
    }

    function A() {
        clearTimeout(u);
        if (n() > D && H() > E) {
            u = setTimeout(function () {
                p(f, "mcOut")
            }, 60);
            f[m][l] = "block"
        } else {
            q(f, "mcOut");
            u = setTimeout(function () {
                f[m][l] = "none"
            }, 500)
        }
    }

    var N = function () {
        f = e.getElementById("backtop");
        if (f) {
            var a = f.getAttribute("data-v-w");
            if (a) {
                a = a.replace(/\s/g, "").split(",");
                D = parseInt(a[0]);
                if (a[d] > 1) E = parseInt(a[1])
            }
            j(f, "click", K);
            j(window, "scroll", A);
            A()
        }
    }, v = function () {
        for (var c = n(), e = c + window.innerHeight, g = i[d], b, f, a = 0; a < g; a++) {
            b = c + z(i[a]), f = b + i[a][k];
            if (b < e) q(i[a], "slide"); else p(i[a], "slide")
        }
    }, G = function () {
        if (i[d]) {
            j(window, "scroll", v);
            v()
        }
    }, M = function () {
        I();
        N();
        G()
    };
    j(window, "load", M);
    j(document, "touchstart", function () {
    })
}


