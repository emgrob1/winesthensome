
$(function() {
	
	$.get('grapes/getGrapes', function(o) {
		
		for (var i = 0; i < o.length; i++)
		{
			$('#listInserts').append('<div>Grape: ' + o[i].name + ' Color: ' + o[i].color + '<a class="del" rel="'+o[i].id+'" href="#">  X</a></div>');
		}
	
		$('.del').click (function () {
	  		delItem = $(this);
			var id = $(this).attr('rel');
			$.post('grapes/deleteGrapes', {'id': id}, function(o) {
				delItem.parent().remove();
			}, 'json');
			location.reload();
			return false;
			
		});
		
	}, 'json');
	