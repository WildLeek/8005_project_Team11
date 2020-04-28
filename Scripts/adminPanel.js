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
        var myWindow = window.open("deleteUser.html", "_blank", "toolbar=no, scrollbars=yes, top=200, left= 100, width=500, height=500");
    } 
}