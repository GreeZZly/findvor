<div class="row-fluid" id="calculator">
	<div class="span8">
		<a name="calculator"></a>
		<div class="row-fluid" id="calculator_title">
			<h2>Выдаем деньги за 15 минут!!!</h2>
			<div>Для оформления не нужно никаких справок, залогов и поручителей. Вашего паспорта достаточно.</div>
		</div>
		<div class="row-fluid" id="calc_wrap">
			<form action="/index.php/main/order" method="POST" id="calc_form">
			<div class="row-fluid">
				<div class="span8">
					<div class="row-fluid form-inline">
						<script>
						  $(function() {
						    var select = $( "#minbeds" );
						    var slider = $( "<div id='slider_beds'></div>" ).insertAfter( select ).slider({
						      min: 1,
						      max: 20,
						      range: "min",
						      value: select[ 0 ].selectedIndex + 1,
						      slide: function( event, ui ) {
						        select[ 0 ].selectedIndex = ui.value - 1;
						      }
						    });
						    $( "#minbeds" ).change(function() {
						      slider.slider( "value", this.selectedIndex + 1 );
						    });
						  });
						  </script>
						 
						<!-- <form id="reservation" class="form-inline"> -->
						  <label for="minbeds">Сумма займа в рублях:</label>
						  <select name="minbeds" id="minbeds">
						    <option value="1000">1000</option>
						    <option value="2000">2000</option>
						    <option value="3000">3000</option>
						    <option value="4000">4000</option>
						    <option value="5000">5000</option>
						    <option value="6000">6000</option>
						    <option value="7000">7000</option>
						    <option value="8000">8000</option>
						    <option value="9000">9000</option>
						    <option value="10000">10000</option>
						    <option value="11000">11000</option>
						    <option value="12000">12000</option>
						    <option value="13000">13000</option>
						    <option value="140000">14000</option>
						    <option value="15000">15000</option>
						    <option value="16000">16000</option>
						    <option value="17000">17000</option>
						    <option value="18000">18000</option>
						    <option value="19000">19000</option>
						    <option value="20000">20000</option>
						  </select>
						<!-- </form> -->
					</div>
					<div class="row-fluid form-inline">
						 <script>
						  $(function() {
						    var select = $( "#mindays" );
						    var slider = $( "<div id='slider_days'></div>" ).insertAfter( select ).slider({
						      min: 1,
						      max: 17,
						      range: "min",
						      value: select[ 0 ].selectedIndex + 1,
						      slide: function( event, ui ) {
						        select[ 0 ].selectedIndex = ui.value - 1;
						      }
						    });
						    $( "#mindays" ).change(function() {
						      slider.slider( "value", this.selectedIndex + 1 );
						    });
						  });
						  </script>
						 
						<!-- <form id="day_count" class="form-inline"> -->
						  <label for="mindays">Срок займа (включительно):</label>
						  <select name="mindays" id="mindays">
						    <option value="5">5</option>
						    <option value="6">6</option>
						    <option value="7">7</option>
						    <option value="8">8</option>
						    <option value="9">9</option>
						    <option value="10">10</option>
						    <option value="11">11</option>
						    <option value="12">12</option>
						    <option value="13">13</option>
						    <option value="14">14</option>
						    <option value="15">15</option>
						    <option value="16">16</option>
						    <option value="17">17</option>
						    <option value="18">18</option>
						    <option value="19">19</option>
						    <option value="20">20</option>
						    <option value="21">21</option>
						  </select>
						<!-- </form> -->
					</div>
					<div class="row-fluid">
						<div class="span6 calc_span6">
							<div class="row-fluid">
								<div class="span3" id="calc_icon_time"></div>
								<div class="span9">До(включительно)</div>
							</div>
						</div>
						<div class="span6 calc_span6">
							<div class="span3" id="calc_icon_return"></div>
							<div class="span9">Возвращаете</div>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span6">
							<div class="row-fluid">
								<div class="span3" id="date_daynum"></div>
								<div class="span9">
									<div class="row-fluid" id="date_mon"></div>
									<div class="row-fluid" id="date_day"></div>
								</div>
							</div>
							<input type="hidden" name="backdate" id="backdate_input">
						</div>
						<div class="span6" id="back_summ_wrap">
							<span id="back_summ"></span>
							<input type="hidden" id="back_summ_input" name="backsumm">
							<span> руб.</span>

						</div>
					</div>
					<div class="row-fluid"></div>
					<div class="row-fluid"></div>

				</div>
				<div id="border_right" class="span1"></div>

				<div class="span3" id="calc_right_wrap">
					<div class="row-fluid"><b>ЗАРЕГИСТРИРУЙТЕСЬ</b></div>
					<div class="row-fluid"><p id="calc_right_second">и заберите деньги на 7 дней под 0%!*</p></div>
					<div class="row-fluid">
					
						<input type="text" placeholder="Имя" class="calc_right_input" name="name" id="calc_name" rel="popover" data-content="">
						<input type="text" placeholder="Телефон" class="form-control bfh-phone calc_right_input" data-format="+7 (ddd) ddd-dddd" name="phone" id="calc_phone">
						<input type="email" class="form-control calc_right_input" id="input_email" placeholder="Email" name="email" id="calc_email" rel="popover">
					
					</div>
					<div class="row-fluid font14">
						<div class="span12"><p>Мы гарантируем конфиденциальность ваших данных</p></div>
					</div>
					<div class="row-fluid font12"><p>*Только для тарифного плана "Деньги надом"</p></div>
				</div>
			</div>
			<div class="row-fluid submit_wrap">
				<button class="btn btn-large btn-danger" id="order_submit">Получить деньги</button>
			</div>
		</form>
		</div>
	</div>
	<div class="span4" id="calc_img"><img src="/include/images/april.png"></div>
</div>