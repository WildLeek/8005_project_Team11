function showMenu() {
    document.getElementById("menuDropdown").classList.toggle("show");
}
window.onclick = function (e) {
    if (e.target.matches(".dropdown")) {
        var dropdownContent = document.getElementById("menuDropdown");

        if (dropdownContent.classList.contains("show")) {
            dropdownContent.classList.remove("show");
        }
    }
}

function openTab(event, tabItem) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(tabItem).style.display = "block";
    event.currentTarget.className += " active";
}

window.onload = function () {
    document.getElementById("defaultOpen").click();
}

function popUp(input) {
    if (input === "delete") {
        window.open("deleteUser.html", "_blank", "toolbar=no, scrollbars=yes, top=200, left= 100, width=500, height=500");
    } 
    if (input == "newPassword") {
        window.open("alter_password.html", "_blank", "toolbar=no, scrollbars=yes, top=200, left= 100, width=800, height=1000");
    }
}

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

        //adding the arrows
        cssAsc: 'up',
        cssDesc: 'down',

        //installs the filter on the table
        widgets: ["filter"],

        
        widgetOptions: {
            filter_functions : {
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
