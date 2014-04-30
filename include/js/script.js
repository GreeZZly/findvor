$(document).ready(function(){
	$('#back_summ').text($('#minbeds').val());
	$('#back_summ_input').val($('#minbeds').val());

	$(document).on('slidechange','#slider_beds', function(event, ui){
		if($('#mindays').val() > 7){
			var money = parseInt($('#minbeds').val());
			var daysback = parseInt($('#mindays').val());
			$('#back_summ').text(money+(money*daysback*0.015));
			$('#back_summ_input').val(money+(money*daysback*0.015));
		}
		else{
			$('#back_summ').text($('#minbeds').val());
			$('#back_summ_input').val($('#minbeds').val());
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


	$('#header_navbar').liFixar({
	  side: 'top',                 // "top" (по умолчанию), "bottom", "all"  -
	                               // сторона, к которой блок будет прилипать
	                  
	  position: 0,                // любое целое число - расстояние от элемента до края экрана,
	                               // при котором элемент остановится и зафиксируется
	                  
	  fix: function(el, side){
	  	$("#header_logo").stop();
	  	$("#header_navbar .brand").stop();
	  	$("#header_navbar a").stop();
	  	$("#header_navbar button").stop();
	  	$("#header_logo").animate({width:"0"}, 250);
	  	$("#header_navbar .brand").animate({width:"200"}, 250);
	  	$("#header_navbar a").delay(250).animate({"padding":"10px 12px 10px"}, 250);
	  	// $("#header_navbar button").animate({"width":"0px"}, 1000);
	  	$("#header_navbar button").delay(750).fadeIn(250);
	  	// el.clearQueue();

	  },   // Функция выполняется, когда элемент прилипает
	  unfix: function(el, side){  // Функция выполняется, когда элемент отлипает
	  	$("#header_logo").stop();
	  	$("#header_navbar .brand").stop();
	  	$("#header_navbar a").stop();
	  	$("#header_navbar button").stop();
	  	$("#header_logo").delay(250).animate({width:"300px"}, 250);
	  	$("#header_navbar .brand").delay(250).animate({width:"270"}, 250);
	  	$("#header_navbar a").delay(250).animate({"font-size":"20px",  "padding":"10px 20px 10px"}, 250);
	  	$("#header_navbar button").fadeOut(250);
	  	// el.clearQueue();
	  	// el.animate({"font-size":"22px"}, 1000);
	  }
	});

	// $('#fixed_navbar').liFixar('setPosition','200px 100px')
	


});