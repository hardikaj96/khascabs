function validateForm() {

	window.alert("Hello");
    var x = document.signup.firstname.value;
    if (x == null || x == "") {
        alert("Name must be filled out");
	return false;
	}
}
