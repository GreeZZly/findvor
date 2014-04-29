$(document).ready(function() {
	 $('a[href^="#"]').click(function(){
	 	$('a[href^="#"]').parent().removeClass('active');
	 	$(this).parent().addClass('active');
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top-70}, 700);
        return false; 
   }); 
});