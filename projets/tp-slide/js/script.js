$(function(){

	var i = 0;
	diaporama();

	function diaporama(){
		var prev = String('');
		i++;
		if (i == 1) {
			prev='#img2';
		} else {
			prev='#img'+(i-1);
		};
		var actuel = '#img'+i;
		$(prev).fadeOut(3000);
		$(actuel).fadeIn(3000);
		if (i == 2) {
			i=0;
		};
	};
	setInterval(diaporama,3000);

	$('button').on('click', function(){
		$('img[src="img/00.jpg"]').toggleClass('img01');
		$('img[src="img/01.jpg"]').toggleClass('img02');
		$('img[src="img/03.jpg"]').toggleClass('img03');
		$('button').toggleClass('btn');

	});

});