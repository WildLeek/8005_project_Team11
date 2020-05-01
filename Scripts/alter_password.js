document.getElementById("email").value = "<? php echo "
$ {
    _SESSION["email"]
}
";?>"

function alter() {

    var email = document.getElementById("email").value;
    var oldpassword = document.getElementById("oldpassword").value;
    var newpassword = document.getElementById("newpassword").value;
    var assertpassword = document.getElementById("assertpassword").value;
    var regex = /^[/s]+$/;
    if (regex.test(email) || email.length == 0) {
        alert("User name format is incorrect");
        return false;
    }
    if (regex.test(oldpassword) || oldpassword.length == 0) {
        alert("Wrong password format");
        return false;
    }
    if (regex.test(newpassword) || newpassword.length == 0) {
        alert("The new password is not in the right format");
        return false;
    }
    if (assertpassword != newpassword || assertpassword == 0) {
        alert("The passwords twice entered are inconsistent");
        return false;
    }
    return true;

}