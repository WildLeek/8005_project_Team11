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

    $(".long-text .button").click(function () {
        var totalHeight = 0;
        var $el = $(this);
        var $readMore = $el.parent();
        var $longText = $readMore.parent();
        var $fullTextPs = $longText.find("p:not('.read-more')");

        $fullTextPs.each(function () {
            totalHeight += $(this).outerHeight();
        });
        $longText
            .css({
                "height": $longText.height(),
                "max-height": 500
            })
            .animate({
                "height": totalHeight
            })
        $readMore.fadeOut();
        return false;
    })

})

//new feedback popup
function popUp() {
    window.open("AddFeedback.php", "_blank", "toolbar=no, scrollbars=yes, top=200, left= 100, width=1000, height=500");
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