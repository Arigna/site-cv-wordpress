$(function(){
	
	var image = $('img');
	var btn = $('#btn');

	$(btn).on('click', function(){
		var img = image.attr('src');
		if (img === 'img/on.png') {
			image.attr('src','img/off.png');
			$('body').addClass('anim-bg');
			$('#btn').addClass('anim-btn');
			$('#interupt').addClass('anim-interupt');
		} else {
			image.attr('src','img/on.png');
			$('body').removeClass('anim-bg');
			$('#btn').removeClass('anim-btn');
			$('#interupt').removeClass('anim-interupt');
		};
	});

});
