
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

function addForm(data){
	d=data.split('||');

	$('#idAlbum').val(d[0]);
	$('#update_name').val(d[1]);
	$('#update_description').val(d[2]);
}

function updateData(){
	id=$('#idAlbum').val();
	name=$('#update_name').val();
	description=$('#update_description').val();

	cadena= "id=" + id +
		"&name=" + name + 
		"&description=" + description;

		$.ajax({
		type:"POST",
		url:"php/updateData.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#table').load('componentes/table.php');
				alertify.success("Album edited successfully");
			}else{
				alertify.error("Server error");
			}
		}
	});
}

function confirmDelete(id){
	alertify.confirm('Delete album', 'Are you sure you want to delete the photos album?', 
					function(){ deleteData(id) }
                , function(){ alertify.error('Cancelled')});
}

function deleteData(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/deleteData.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#table').load('componentes/table.php');
					alertify.success("Data successfully deleted!");
				}else{
					alertify.error("Server error :(");
				}
			}
		});
}