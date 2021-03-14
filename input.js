
function patientsRecord(){
	var priority_number = document.getElementById("priority_number").value;
	var  fullname = document.getElementById("fullname").value;
	var  age= document.getElementById("age").value;
	var male = document.getElementById("male").value;
	var  female = document.getElementById("female").value;
	var  status = document.getElementById("status").value;
	var contact = document.getElementById("contact").value;

	submitOk ="true";

	var formdata='priority_number='+priority_number+'&fname=' + fullname +'&age='+ age +'&male='+ male +'&female='+female +'&status='+ status +'&contact='+contact;
return false;
}


 


