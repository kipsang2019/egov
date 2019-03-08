function del() {
	var txt;
	var x = confirm("Are you sure you want to delete?");

	if (x == true) {
		txt = "You deleted this user";
	}else{
		txt = "You spared the user";
	}

	document.getElementById('delete').innerHTML= txt;
	
}

