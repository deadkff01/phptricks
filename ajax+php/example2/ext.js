$(document).ready(function() {
	$('#mybtn').bind( 
	"click", function() {
	 var name = $('#name').val();
	
	/*//get values of an html page..
	 $.ajax({
	 url: 'page.html',
	 success: function(data){
		 $('#content').html(data);
	 }
	 });*/
		
		 $.ajax({
		 //type: POST,
	 url: 'php/page.php',
	 data:'name='+name,
	 success: function(data){
		 $('#content').html(data);
	 }
	 }).error(function(){
	 alert('An error occured..');
	 }).success(function(){
	 // alert
	 }).complete(function(){
	 // alert
	 });
		
		}
	);

});