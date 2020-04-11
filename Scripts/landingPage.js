function showMenu() {
    document.getElementById("dropdownContent").classList.toggle("show");
}

window.onclick = function (e) {
    if (e.target.matches(".dropdown")) {
        var dropdownContent = document.getElementById("dropdownContent");
        if (dropdownContent.classList.contains("show")) {
            dropdownContent.classList.remove("show");
        }
    }
}

function openTab(event, item) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace( "active", "");
    }
    document.getElementById(item).style.display = "block";
    event.currentTarget.className += " active";
}

function addHighlight(item) {
    //item.style.textDecoration = "underline overline solid #009900";
    item.classList.remove("inactive");
    item.classList.add("highlight");
}
function removeHighlight(item) {
    //item.style.textDecoration = "underline overline solid #f2f5f6";
    item.classList.remove("highlight");
    item.classList.add("inactive");
}

window.onload = function () {
    document.getElementById("defaultOpen").click();

    listElementSBAcc = document.getElementsByClassName("list-link-SB-acc");
    for (i = 0; i < listElementSBAcc.length; i++) {
        listElementSBAcc[i].onmouseover = function () {
            addHighlight(document.getElementById("list-header-SB-acc"));
        }
        listElementSBAcc[i].onmouseout = function () {
            removeHighlight(document.getElementById("list-header-SB-acc"));
        }
    }

    listElementMBAcc = document.getElementsByClassName("list-link-MB-acc");
    for (i = 0; i < listElementMBAcc.length; i++) {
        listElementMBAcc[i].onmouseover = function () {
            addHighlight(document.getElementById("list-header-MB-acc"));
        }
        listElementMBAcc[i].onmouseout = function () {
            removeHighlight(document.getElementById("list-header-MB-acc"));
        }
    }
}