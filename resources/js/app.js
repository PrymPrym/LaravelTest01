require('./bootstrap');
$(function() {
	var reverseRow=false;
	$t=$('.film_row').toArray();	
	console.log($t);		
	$('#main_row').on('click',function() {
		$('.film_row').remove();
		if (reverseRow){
				$('#film_desk').append($t);
				reverseRow=false;	
			}
			else {
				$('#film_desk').append($t.reverse());
				reverseRow=true;	
			}					
		});
});
