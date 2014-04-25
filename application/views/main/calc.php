<div class="row-fluid" id="calculator">
	<div class="span8">
		<div class="row-fluid" id="calculator_title">
			<h2>Выдаем деньги за 15 минут!!!</h2>
			<div>Для оформления не нужно никаких справок, залогов и поручителей. Вашего паспорта достаточно.</div>
		</div>
		<div class="row-fluid" id="calc_wrap">
			<form>
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
						    <option>1000</option>
						    <option>2000</option>
						    <option>3000</option>
						    <option>4000</option>
						    <option>5000</option>
						    <option>6000</option>
						    <option>7000</option>
						    <option>8000</option>
						    <option>9000</option>
						    <option>10000</option>
						    <option>11000</option>
						    <option>12000</option>
						    <option>13000</option>
						    <option>14000</option>
						    <option>15000</option>
						    <option>16000</option>
						    <option>17000</option>
						    <option>18000</option>
						    <option>19000</option>
						    <option>20000</option>
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
						    <option>5</option>
						    <option>6</option>
						    <option>7</option>
						    <option>8</option>
						    <option>9</option>
						    <option>10</option>
						    <option>11</option>
						    <option>12</option>
						    <option>13</option>
						    <option>14</option>
						    <option>15</option>
						    <option>16</option>
						    <option>17</option>
						    <option>18</option>
						    <option>19</option>
						    <option>20</option>
						    <option>21</option>
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
						</div>
						<div class="span6" id="back_summ_wrap">
							<span id="back_summ"></span>
							<span> руб.</span>

						</div>
					</div>
					<div class="row-fluid"></div>
					<div class="row-fluid"></div>

				</div>
				<div id="border_right" class="span1"></div>

				<div class="span3" id="calc_right_wrap">
					<div class="row-fluid"><b>ЗАРЕГИСТРИРУЙТЕСЬ</b></div>
					<div class="row-fluid"><p>и заберите деньги на 7 дней под 0%!*</p></div>
					<div class="row-fluid">
					
						<input type="text" placeholder="Имя" class="calc_right_input">
						<input type="text" placeholder="Телефон" class="form-control bfh-phone calc_right_input" data-format="+7 (ddd) ddd-dddd" >
						<input type="email" class="form-control calc_right_input" id="input_email" placeholder="Email">
					
					</div>
					<div class="row-fluid font14">
						<div class="span12"><p>Мы гарантируем конфиденциальность ваших данных</p></div>
					</div>
					<div class="row-fluid font12"><p>*Только для тарифного плана "Деньги надом"</p></div>
				</div>
			</div>
			<div class="row-fluid submit_wrap">
				<button class="btn btn-large btn-danger">Получить деньги</button>
			</div>
		</form>
		</div>
	</div>
	<div class="span4" id="calc_img"><img src="/include/images/april.png"></div>
</div>