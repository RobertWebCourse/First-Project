function getData() {
	$.ajax({
		url: "http://localhost:8000",
		dataType: "json",
	}).done(function(data) {
		alert("Pavyko");
	}).fail(function (response, code, message) {
		alert("Nepavyko");
	})
}