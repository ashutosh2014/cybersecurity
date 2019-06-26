function setColor(e) {
	if(e.target.id=="std000") {
		document.getElementById("std000").classList.add("active");
		document.getElementById("std000").value=1;
		document.getElementById("tch000").classList.remove("active");
		document.getElementById("std000").value=0;
	}
	else {
		document.getElementById("std000").classList.remove("active");
		document.getElementById("std000").value=0;
		document.getElementById("tch000").classList.add("active");	
		document.getElementById("std000").value=1;
	}
}

$(document).ready(function(){
  $("#gg001").click(function(){
 	var vvv=document.getElementById("ul001");
  	if(vvv.style.display == "block"){
  		vvv.style.display = "none";
  	}
  	else {
  		vvv.style.display = "block";	
  	}
  });
});