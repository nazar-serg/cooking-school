//modal
$('.modal-toggle').on('click', function(e) {
    e.preventDefault();
    $('.modal').toggleClass('is-visible');
});

//menu responsive
$(document).ready(function() {
    $('.header__burger').click(function(event) {
        $('.header__burger, .header__menu').toggleClass('header__active');
        $('body').toggleClass('lock');
    });
});

//Increment on scroll into Viewport
$(function() {
    var fx = function fx() {
        $(".why-choose-us__column-right--numeric").each(function(i, el) {
            var data = parseInt(this.dataset.n, 10);
            var props = {
                "from": {
                    "count": 0
                },
                "to": {
                    "count": data
                }
            };
            $(props.from).animate(props.to, {
                duration: 4000 * 1,
                step: function(now, fx) {
                    $(el).text(Math.ceil(now));
                },
                complete: function() {
                    if (el.dataset.sym !== undefined) {
                        el.textContent = el.textContent.concat(el.dataset.sym)
                    }
                }
            });
        });
    };

    var reset = function reset() {
        //console.log($(this).scrollTop())
        if ($(this).scrollTop() > 90) {
            $(this).off("scroll");
            fx()
        }
    };

    $(window).on("scroll", reset);
});

//year footer
let date = new Date().getFullYear();

document.getElementById("year").innerHTML = date;