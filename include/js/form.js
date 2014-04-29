$(document).ready(function(){
	$('#calc_form').validate({
		rules:{
			name:{
				required: true,
                minlength: 2,
                maxlength: 16
			},

            email:{
                required: true,
                email: true
            },
            phone:{
                required: true,
                minlength: 15
                // maxlength: 11,
                // digits: true

            }
		},
		messages: {
			name:{
				required: "Это поле обязательно для заполнения",
                minlength: "Имя должно быть минимум 2 символа",
                maxlength: "Максимальное число символов - 16"
			},

            email:{
                required: "Это поле обязательно для заполнения",
                email: "Неверно заполнено поле электронной почты"
            },
            phone:{
                required: "Это поле обязательно для заполнения",
                minlength: "Телефон введен не полностью",
                // maxlength: 11,
                // digits: "Только цифры"
            }
		},
		showErrors: function(errorMap, errorList) {
	    $.each(this.successList, function(index, value) {
	      return $(value).popover("hide");
	    });
	    return $.each(errorList, function(index, value) {
	      var _popover;
	      console.log(value.message);
	      _popover = $(value.element).popover({
	        trigger: "manual",
	         
	        placement: "right",
	        content: value.message,
	        template: "<div class=\"popover\"><div class=\"arrow\"></div><div class=\"popover-inner\"><div class=\"popover-content\"><p></p></div></div></div>"
	      });
	      _popover.data("popover").options.content = value.message;
	      return $(value.element).popover("show");
	    });
	  }
		
	});
	$('#simple_order').validate({
		rules:{
			name_simple:{
				required: true,
                minlength: 2,
                maxlength: 16
			},

            email_simple:{
                required: true,
                email: true
            },
            phone_simple:{
                required: true,
                minlength: 15
                // maxlength: 11,
                // digits: true

            }
		},
		messages: {
			name_simple:{
				required: "Это поле обязательно для заполнения",
                minlength: "Имя должно быть минимум 2 символа",
                maxlength: "Максимальное число символов - 16"
			},

            email_simple:{
                required: "Это поле обязательно для заполнения",
                email: "Неверно заполнено поле электронной почты"
            },
            phone_simple:{
                required: "Это поле обязательно для заполнения",
                minlength: "Телефон введен не полностью",
                // maxlength: 11,
                // digits: "Только цифры"
            }
		},
		showErrors: function(errorMap, errorList) {
	    $.each(this.successList, function(index, value) {
	      return $(value).popover("hide");
	    });
	    return $.each(errorList, function(index, value) {
	      var _popover;
	      console.log(value.message);
	      _popover = $(value.element).popover({
	        trigger: "manual",
	         
	        placement: "right",
	        content: value.message,
	        template: "<div class=\"popover\"><div class=\"arrow\"></div><div class=\"popover-inner\"><div class=\"popover-content\"><p></p></div></div></div>"
	      });
	      _popover.data("popover").options.content = value.message;
	      return $(value.element).popover("show");
	    });
	  }
		
	});


	function orderSuccess(data){
		// console.log(data);
		var data_success = JSON.parse(data);
		if(data_success.success){
			$('#myModal').modal();
		}
	}

	$('#calc_form').on('submit', function(e){
		e.preventDefault();
		if($('#calc_form').valid()){
			$.post(
				"/main/order",
				{
					name: $('#calc_name') .val(),
					phone:  $('#calc_phone').val(),
					email:  $('#input_email').val(),
					summ:  $('#minbeds').val(),
					days:  $('#mindays').val(),
					backsumm:  $('#back_summ_input').val(),
					backdate:  $('#backdate_input').val()
				},
				orderSuccess
			);
		}
	});

	$('#simple_order').on('submit', function(e){
		e.preventDefault();
		if($('#simple_order').valid()){
			$.post(
				"/main/simple_order",
				{
					name_s: $('#name_simple').val(),
					phone_s:  $('#phone_simple').val(),
					email_s:  $('#email_simple').val()
				},
				orderSuccess
			);
		}
	});
});