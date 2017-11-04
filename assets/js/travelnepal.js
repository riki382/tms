function continue_reading() {
	var x = document.getElementById('hidden');
	var change = document.getElementById("cr");
	if (x.style.display === 'none' && change.innerHTML == "Continue Reading") {
	    x.style.display = 'block';
	    change.innerHTML = "Show Less";
	}
	else {
	    x.style.display = 'none';
	    change.innerHTML = "Continue Reading";
	}
}
function search_icon(){
	var s = document.getElementById('search');
	if (s.style.display === 'none'){
		s.style.display='inline';
	}
	else{
		s.style.display='none';	
	}
}	
