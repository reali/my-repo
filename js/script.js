$(document).ready(function () {  
	$('.vote_down').click(function() {
		var span = $(this).children('span');
		var no = parseInt($(this).text(), 10);
		$(span).text(++no);
		var id = $(this).attr('id');
		$.ajax({
			type: 'post',
			url: 'vote_down.php',
			data: 'id=' + id
		});
	});
	$('.vote_up').click(function() {
		var span = $(this).children('span');
		var yes = parseInt($(this).text(), 10);
		$(span).text(++yes);
		var id = $(this).attr('id');
		$.ajax({
			type: 'post',
			url: 'vote_up.php',
			data: 'id=' + id
		});
	});
});