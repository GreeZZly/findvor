$(document).ready(function(){
	$('#back_summ').text($('#minbeds').val());

	$(document).on('slidechange','#slider_beds', function(event, ui){
		if($('#mindays').val() > 7){
			var money = parseInt($('#minbeds').val());
			var daysback = parseInt($('#mindays').val());
			$('#back_summ').text(money+(money*daysback*0.015));
		}
		else{
			$('#back_summ').text($('#minbeds').val());
		}
		
	});


	// $('#contacts_cities li').on('click', function(e){
	// 	e.preventDefault();
	// 	$('.carousel').carousel(1);

	// });
	$('#contacts_cities li').on('click', function(){
		$('.carousel').carousel('pause');
		console.log($(this).attr('data-city'));
		$('#contacts_cities li').removeClass('active_link');
		$(this).addClass('active_link');
		switch(parseInt($(this).attr('data-city'))){
		case 0:
			$('.carousel').carousel(0)
			break
		case 1:
			$('.carousel').carousel(1)
			break
		case 2:
			$('.carousel').carousel(2)
			break
		case 3:
			$('.carousel').carousel(3)
			break
		case 4:
			$('.carousel').carousel(4)
			break

	}	
	});
	

	$('[class*="question"]').on('click', function(){
		var qid = $(this).attr('question-id');
		if($(this).hasClass('bold')) {
			$(this).removeClass('bold');
		}
		else{
			$(this).addClass('bold');
		}
		$('.answer[answer-id="'+qid+'"]').slideToggle();

	});
});