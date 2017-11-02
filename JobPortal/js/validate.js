
function validate(type, error, value){
	if(value == "" || value=="undefined"){
		document.getElementById(error).style.display = "block";
		document.getElementById(error).innerHTML = "Please fill out the field."
		return;
	}
	
	$.ajax({
	type: 'POST',
	url : 'validate.php',
	data : JSON.stringify({"query": value}),
	cache: 'false',
    dataType: 'json',
	
	
	}).done(function(response){
	
		//alert(response.status);
	
	});

}


	$(document).delegate('input[type="checkbox"]','click', function(e){
		debugger;
	window.location.href = encodeURI('job-list.php?searchID='+ this.id);
	
	
	});