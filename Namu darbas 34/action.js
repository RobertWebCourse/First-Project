var numbutton = document.querySelectorAll("input[type='button'");
var noviewelem = document.getElementsByClassName("noview");

for(var i = 0; i < numbutton.length; i++) {
	numbutton[i].onclick = function() {
		if(this.value != 'CE' && this.value !='C' && this.value !='='){
			nokeypress.value += this.value;
		}else if(this.value == '=') {
			var result = (eval(nokeypress.value));
			nokeypress.value = result;
			if(nokeypress.value == result && this.value != '=') {
				nokeypress.value = this.value;
			}
		}else if(this.value == 'C') {
			nokeypress.value = '';
		}
		else if (this.value == 'CE') {
			nokeypress.value = nokeypress.value.substr(0, nokeypress.value.length - 1);
		}
	}
}

var nokeypress = document.getElementById("nokey");
nokey.onkeypress = function() {
	return false;
}


