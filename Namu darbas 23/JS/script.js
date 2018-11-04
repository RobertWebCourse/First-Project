function checkAge() {
	var age = prompt("Įveskite savo amžių", 0);
	if(age >= 18) {
		alert("Jūs galite užeiti į svetainę");
	}else {
		alert("Į svetainę užeiti negalite");
	}
}
checkAge();