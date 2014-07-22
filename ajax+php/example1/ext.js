$(document).ready(function() {
	$('#mybtn').bind( 
	"click", function() {
	 var name = $('#name').val();
	 var string = $('#string').val();
	 
		//alert(string);
		/* same example.. but is used .get function
		$.get('php/reverse.php', { input: string }, function(data){
		     $('#feedback').html(data);
		  });
		*/
		//commands success, error and complete
			$.post('php/reverse.php', { name: name, string: string }, function(data){
		     $('#feedback').html(data);
		  })
		  .error(function(){
		  //alert('An error occured');
		  $('#messages').text('An error occured');
		  })
		  .complete(function(){
		   $('#messages').append('Request completed!');
		  })
		  .success(function(){
		  	   $('#messages').append(' Request successful!');
		  });
		
		}
	);

});