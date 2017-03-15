$(function() {

	$.get('grapes/getGrapes', function(o) {
			
			$('#listInserts').append('<div class="row"><div class="col-xs-6 col-sm-3">Grapes</div><div class="col-xs-6 col-sm-3">Color</div><div class="col-xs-6 col-sm-3">Actions</div></div>');
			$('#listInserts').append('<hr>');
		for (var i = 0; i < o.length; i++)
		{
			
			$('#listInserts').append('<div class="row"><div class="col-xs-6 col-sm-3">' + o[i].name + ' </div><div class="col-xs-6 col-sm-3">' + o[i].color + '</div><div class="col-xs-6 col-sm-3"><a class="del" rel="'+o[i].id+'" href="#"><button>Delete</button></a></div></div>');
		
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
});