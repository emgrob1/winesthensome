$(function() {
	
	$.get('pairings/getPairings', function(o) {
		
		for (var i = 0; i < o.length; i++)
		{
			$('#listPairings').append('<div>Grape: ' + o[i].grape + ' Pairs with: ' + o[i].pairs_with + '<a class="del" rel="'+o[i].id+'" href="#">  X</a></div>');
		}
	
		$('.del').click (function () {
	  		delItem = $(this);
			var id = $(this).attr('rel');
			$.post('pairings/deletePairings', {'id': id}, function(o) {
				delItem.parent().remove();
			}, 'json');
			location.reload();
			return false;
			
		});
		
	}, 'json');
	
	$('#insertPairings').submit(function() {
		var url = $(this).attr('action');
		var data = $(this).serialize();
		
		$.post(url, data, function(o) {
			console.log(o);
			$('#listPairings').append('<div>Grape:' + o.grapes + ' Pairs With: '+ o.pairs_with + '<a class="del" rel="'+ o.id +'" href="#">  X</a></div>');			
		}, 'json');
		$('#insertPairings').trigger("reset");
		
		return false;
	});


});