$(function() {
	$('#grapes').change(function(){
		var element = $("option:selected", this);
        var grape_id = element.attr('value');
		
		$.post('pairing/getFood', {'grape_id': grape_id}, function(o){

	console.log(o);
	
	$('#pairs_with').val(o);	
		},'json');
			
		return false;
		
	});
});	