$( document ).ready(function() {
	
	$.get('getUsers.php',function(data) {  
		
	var users = data;
		
		 for (user in users) {
			 var u = users[user];
			 addRowTable(u[0],u[1],u[2]);
			}
	 }, 'json');
	
	
	function addRowTable(firstName,lastName,id){
		
		$table =$("#users> tbody");
		
		$("#users> tbody").append('<tr><td>'+firstName+'</td><td>'+lastName+'</td><td><button class="btn" type="button" id="'+id+'">Destroy</button></td></tr>');
		
	}
	
	
	$("#users").click(function( event ) {
		  var element = event.target;
		  
		  var elementId = element.className;
		  if(elementId == "btn"){
			  var id = element.id;
			  deleteUser(id);
			  $("#"+id).parent().parent().remove();
		  }
		});
	
	function deleteUser(id){
		
		$.post('deleteUser.php',{id},function(data) {  
			
			
			 }, 'json');
	}
});