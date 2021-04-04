function anoSeculo(){
    var a;
    var c;

	a = document.getElementById("seculoAno").value;

	var xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange = function() {

	    if (xhttp.readyState == 4 && xhttp.status == 200) {

            c = xhttp.responseText;
            alert(c);
	
        }
    };

	xhttp.open("POST", "seculo.php", true);

	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	xhttp.send("seculoAno=" + a);
}

function palindromo(){
    var a;
    var c;

	a = document.getElementById("palindromo").value;

	var xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange = function() {

	    if (xhttp.readyState == 4 && xhttp.status == 200) {

            c = xhttp.responseText;
            alert(c);
	
        }
    };

	xhttp.open("POST", "palindromo.php", true);

	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	xhttp.send("palindromo=" + a);
}

function quantQuad(){
    var a;
    var c;

	a = document.getElementById("quantQuad").value;

	var xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange = function() {

	    if (xhttp.readyState == 4 && xhttp.status == 200) {

            c = xhttp.responseText;
            alert(c);
	
        }
    };

	xhttp.open("POST", "area.php", true);

	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	xhttp.send("quantQuad=" + a);
}

function sequencia(){
    var a;
    var c;

	a = document.getElementById("sequencia").value;

	var xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange = function() {

	    if (xhttp.readyState == 4 && xhttp.status == 200) {

            c = xhttp.responseText;
            alert(c);
	
        }
    };

	xhttp.open("POST", "sequenciaCrescente.php", true);

	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	xhttp.send("sequencia=" + a);
}