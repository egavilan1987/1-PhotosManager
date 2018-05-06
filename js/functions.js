
function addData(name,description,actualDate){

	cadena="name=" + name + 
			"&description=" + description;
	$.ajax({
		type:"POST",
		url:"php/AddData.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#table').load('componentes/table.php');
				alertify.success("New album added successfully");
			}else{
				alertify.error("Server error");
			}
		}
	});

}