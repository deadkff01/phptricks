/**
 * Ajax handler with reset function..
 *
 * @author Dennis Kaffer
 */

$(document).ready(function() {

 var frm = $('#myform');
    frm.bind("submit", function (ev) {
	
	var name = $('#name').val();
	var string = $('#string').val();
	var dataString = 'name='+ name + '&string=' + string;

        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: dataString,
            success: function (data) {
                $('#feedback').html(data);
			
             },
			//only way to clear all inputs of form..
			complete: function(){
			  frm.each(function(){
              this.reset();  
            });
			     
			  }, 
			error: function(){
			  $('#feedback').text('An error occured..');
			}
        });

        ev.preventDefault();
     }
	);

});