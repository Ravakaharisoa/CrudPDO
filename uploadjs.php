<script>
$(document).ready(function(){
$('#add_button').click(function(){
$('#user_form')[0].reset();
$('modal-title').text("Add User");
$('#action').val("Add");
$('#operation').val("Add");
$('#user_uploaded_image').html('');
});

var dataTable=$('#user_data').DataTable({
"processing":true,
"serverSide":true,
"order":[],
"ajax":{
	url:"fetch.php",method:"POST"
},
"columnDefs":[{
	"target":[0,3,4],
	"orderable":false
},],
});
});
</script>