//defining the table for the jquery tablesorter script 
$(function () {
    //disabling sorting on the product, feedback and user columns
    $("table#all-feedback thead th:eq(0)").data("sorter", false);
    $("table#all-feedback thead th:eq(1)").data("sorter", false);
    $("table#all-feedback thead th:eq(2)").data("sorter", false);

    //turning off the sorting for the product, feedback and user columns
    $("table#all-feedback").tablesorter({

        //defining the date format
        dateFormat: "dd/mm/yyyy",

        //installs the filter on the table
        widgets: ["filter"],

        widgetOptions: {
            filter_functions: {
                //setting rating ranges for the filter
                3: {
                    "< 1": function (e, n, f, i, $r, c, data) { return n <= 1 },
                    "1-2": function (e, n, f, i, $r, c, data) { return n > 1 && n <= 2 },
                    "2-3": function (e, n, f, i, $r, c, data) { return n > 2 && n <= 3 },
                    "3-4": function (e, n, f, i, $r, c, data) { return n > 3 && n <= 4 },
                    "4-5": function (e, n, f, i, $r, c, data) { return n > 4 && n <= 5 }
                }

            }
        }
    });

});

//making the table "read more" function
//code taken from https://css-tricks.com/text-fade-read-more/
$(document).ready(function () {
    var $el, $ps, $up, totalHeight;

    $(".long-text .button").click(function () {
        totalHeight = 0;
        $el = $(this);
        $p = $el.parent();
        $up = $p.parent();
        $ps = $up.find("p:not('.read-more')");

        $ps.each(function () {
            totalHeight += $(this).outerHeight();
        });
        $up
            .css({
                "height": $up.height(),
                "max-height": 500
            })
            .animate({
                "height": totalHeight
            })
        $p.fadeOut();
        return false;
    })

})

//new feedback popup
function popUp() {
    window.open("replyfeedback.html", "_blank", "toolbar=no, scrollbars=yes, top=200, left= 100, width=1000, height=500");
}

//voting
function vote(choice, parent) {
    var rating = parseInt(parent.children[1].innerHTML);
    if (choice == "up") {
        rating++;
    }
    if (choice == "down") {
        rating--;
    }
    parent.children[1].innerHTML = rating;
    parent.children[0].classList.add("disable");
    parent.children[2].classList.add("disable");
    
}