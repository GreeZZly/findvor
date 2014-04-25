function clock(){ 
    var currentTime = new Date(new Date().getTime()+$('#mindays option:selected').val()*24*60*60*1000); 
    var currentHours = currentTime.getHours(); 
    var currentMinutes = currentTime.getMinutes(); 
    var currentSeconds = currentTime.getSeconds(); 
    currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes; 
    currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds; 
    $('#hour_min').text(currentHours + ':' + currentMinutes); 
    $('#sec').css({"font-size":"9px", "vertical-align":"text-top"}).text(currentSeconds); 
} 
 
//создадим массив дней недели 
var days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота']; 
//и массив месяцев по-русски 
var months = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 
              'августа', 'сентября', 'октября', 'ноября', 'декабря']; 
 
$(document).ready(function() { 
  var currentTime = new Date(new Date().getTime()+$('#mindays option:selected').val()*24*60*60*1000);//Получаем текущую дату 
     var currentDay = days[currentTime.getDay()];//Вытаскваем из нашего массива текущий день недели 
     // console.log(new Date().getTime());        
     // console.log($('#mindays option:selected').val()*24*60*60*1000);
     var currentDate = currentTime.getDate();//День 
     var currentMonth = months[currentTime.getMonth()];//Месяц 
     var currentYear = currentTime.getFullYear();//Год 
  //В элемент с id=date выводим текущую дату в красивом формате 
     // $('#date').text(currentDay + ' ' + currentDate + ' ' + currentMonth + ' ' + currentYear + 'г'); 
     $('#date_daynum').text(currentDate);
     $('#date_mon').text(currentMonth + ', ' + currentYear + 'г.');
     $('#date_day').text(currentDay);
  $(document).on('slidechange','#slider_days', function(event, ui){
     var currentTime = new Date(new Date().getTime()+$('#mindays option:selected').val()*24*60*60*1000);//Получаем текущую дату 
     var currentDay = days[currentTime.getDay()];//Вытаскваем из нашего массива текущий день недели 
     // console.log(new Date().getTime());        
     // console.log($('#mindays option:selected').val()*24*60*60*1000);
     var currentDate = currentTime.getDate();//День 
     var currentMonth = months[currentTime.getMonth()];//Месяц 
     var currentYear = currentTime.getFullYear();//Год 
  //В элемент с id=date выводим текущую дату в красивом формате 
     // $('#date').text(currentDay + ' ' + currentDate + ' ' + currentMonth + ' ' + currentYear + 'г'); 
     $('#date_daynum').text(currentDate);
     $('#date_mon').text(currentMonth + ', ' + currentYear + 'г.');
     $('#date_day').text(currentDay);
     if($('#mindays').val() > 7){
      var money = parseInt($('#minbeds').val());
      var daysback = parseInt($('#mindays').val());
      $('#back_summ').text(money+(money*daysback*0.015));
    }
    else{
      $('#back_summ').text($('#minbeds').val());
    }
   });
   // clock(); //вызываем функцию времени 
   // window.setInterval(clock, 1000); //вызываем функцию clock() каждую секунду 
});