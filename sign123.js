function validateForm() {
    var x = document.signin.firstname.value;
    if (x == null || x == "") {
        alert("Name must be filled out");
	return false;
	}
}
