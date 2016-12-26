var temp = 0;
var temp1 = 0;
	function plus(){
		operation();
		temp = parseInt(document.getElementById('pole').value, 10);
		temp1 = 1;
		document.getElementById("pole").focus();
		document.getElementById("pole").select();
	}
	function minus(){
		operation();
		temp = parseInt(document.getElementById('pole').value, 10);
		temp1 = 2;
		document.getElementById("pole").focus();
		document.getElementById("pole").select();
	}
	function multiplay(){
		operation();
		temp = parseInt(document.getElementById('pole').value, 10);
		temp1 = 3;
		document.getElementById("pole").focus();
		document.getElementById("pole").select();
	}
	function divide(){
		operation();
		temp = parseInt(document.getElementById('pole').value, 10);
		temp1 = 4;
		document.getElementById("pole").focus();
		document.getElementById("pole").select();
	}
	function result(){
		operation();
		temp1 = 0;
	}
	function operation(){
		switch (temp1){
			case 1: temp += parseInt(document.getElementById('pole').value, 10);
					document.getElementById('pole').value = temp;
					break
			case 2: temp -= parseInt(document.getElementById('pole').value, 10);
					document.getElementById('pole').value = temp;
					break
			case 3: temp *= parseInt(document.getElementById('pole').value, 10);
					document.getElementById('pole').value = temp;
					break
			case 4: temp /= parseInt(document.getElementById('pole').value, 10);
					document.getElementById('pole').value = temp;
					break
					default: 
		}
	}
	function zero(){
		document.getElementById("pole").value = 0;
		temp1 = 0;
		document.getElementById("pole").focus();
		document.getElementById("pole").select();
	}