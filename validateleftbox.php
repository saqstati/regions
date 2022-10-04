<?php
	include 'connection.php';	
	$gotid = $_POST['postvariable'];
	$gotlangcheck = $_POST['postvariablelang'];
	if (strlen($gotid) > 6) {
		$clickedid = substr($gotid, -2);
	} else {
		$clickedid = substr($gotid, -1);
	}
	$sql = "SELECT * FROM regions WHERE ID = '$clickedid' ";
	if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) > 0){
			echo "<style>.side-box1 {width: 18.2vw;float: left;z-index: 5;}</style>";
			echo "<table class='table table-hover' style='border-collapse:collapse;'>";
			while($row = mysqli_fetch_array($result)){
					echo "
						<thead>
						<tr>
							<th colspan='2' Key='LEFTBOX_TITLE'>რეგიონული სტატისტიკა</th>
						</tr>
						</thead>
						<tbody>
						<tr data-toggle='collapse' data-target='.demo1' class='accordion-toggle pointer collapsedpresent'>
							<th Key='LEFTBOX_MAIN'>ძირითადი ინფორმაცია</th>
							<th>
								<img />
							</th>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo1' Key='LEFTBOX_REGIONAREA'>რეგიონის ფართობი</div>								
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo1'>
									"; 
									if ($gotlangcheck == 'geo'){
										echo "
										<a href='regions/" . $clickedid . "/dziritadi informacia/regionis fartobi.xlsx' class='langcheckhref1'>
											<img />
										</a>";
									} else if ($gotlangcheck == 'eng') {
										echo "
										<a href='regionseng/" . $clickedid . "/main information/area.xlsx' class='langcheckhref1'>
											<img />
										</a>";
									}
									echo "
								</div>
							</td>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo1' Key='LEFTBOX_NUMBEROF'>მუნიციპალიტეტების, ქალაქების და სოფლების რაოდენობა</div>
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo1' >
									"; 
									if ($gotlangcheck == 'geo'){
										echo "
									<a href='regions/" . $clickedid . "/dziritadi informacia/municipalitetebis, qalaqebis da soflebis raodenoba.xlsx' class='langcheckhref2'>
										<img />
									</a>";
									} else if ($gotlangcheck == 'eng') {
										echo "
										<a href='regionseng/" . $clickedid . "/main information/number of settlements.xlsx' class='langcheckhref2'>
											<img />
										</a>";
									}
									echo "									
								</div>
							</td>
						</tr>
						<tr>
							<th Key='LEFTBOX_POPULATION'>მოსახლეობა</th>							
							<th>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
								<a href='regions/" . $clickedid . "/mosakhleoba/mosakhleoba.xlsx' class='langcheckhref3'>							
									<img />
								</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/population/population.xlsx' class='langcheckhref3'>
										<img />
									</a>";
								}
								echo "	
							</th>
						</tr>
						<tr data-toggle='collapse' data-target='.demo2' class='accordion-toggle pointer collapsedpresent'>
							<th Key='LEFTBOX_DEMOGRAPHICS'>დემოგრაფია</th>
							<th><img /></th>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo2' Key='LEFTBOX_DEMOG_AGE'>მოკვდაობა</div>								
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo2'>
									"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/demografia/mokvdaoba_asaki_sqesi.xlsx' class='langcheckhref4'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/demography/death by age and sex.xlsx' class='langcheckhref4'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo2' Key='LEFTBOX_DEMOG_REASON'>გარდაცვალების მიზეზები</div>
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo2'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/demografia/gardacvalebis mizezebi.xlsx' class='langcheckhref5'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/demography/death causes.xlsx' class='langcheckhref5'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo2' Key='LEFTBOX_DEMOG_MAIN'>ძირითადი დემოგრაფიული მაჩვენებლები</div>
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo2'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/demografia/dziritadi demografiuli machveneblebi.xlsx' class='langcheckhref6'>
										<img />
									</a>
									";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/demography/summary vital statistics.xlsx' class='langcheckhref6'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<th Key='LEFTBOX_GDPNTAX'>მშპ და დამატებული ღირებულება</th>
							<th>
							"; 
								if ($gotlangcheck == 'geo'){
									echo "
							<a href='regions/" . $clickedid . "/mshp da damatebuli girebuleba/mshp da damatebuli girebuleba.xls' class='langcheckhref7'><img />
							</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/gdp and va/gdp and va.xls' class='langcheckhref7'>
										<img />
									</a>";
								}
								echo "							
							</th>							
						</tr>
						<tr>
							<th Key='LEFTBOX_INVESTMENTS'>პირდაპირი უცხოური ინვესტიციები</th>
							<th>
							"; 
								if ($gotlangcheck == 'geo'){
									echo "
							<a href='regions/" . $clickedid . "/pirdapiri uckhouri investiciebi/pirdapiri uckhouri investiciebi.xlsx' class='langcheckhref8'><img />
							</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/ext.trade and foreign direct invset/ext.trade and foreign direct invset.xlsx' class='langcheckhref8'>
										<img />
									</a>";
								}
								echo "
							</th>							
						</tr>
						<tr data-toggle='collapse' data-target='.demo12' class='accordion-toggle pointer collapsedpresent'>
							<th Key='LEFTBOX_EMP_AND_WAGES'>დასაქმება და ხელფასები</th>
							<th><img /></th>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo12' Key='LEFTBOX_EMPUNEMP'>დასაქმება, უმუშევრობა</div>								
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo12'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/dasaqmeba_umushevroba/dasaqmeba_umushevroba.xlsx' class='langcheckhref9'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/employment and unemployment/employment and unemployment.xlsx' class='langcheckhref9'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo12' Key='LEFTBOX_EMP_WAGES'>ხელფასები</div>
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo12' >
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/dasaqmeba_umushevroba/khelfasi.xlsx' class='langcheckhref44'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/employment and unemployment/wages.xlsx' class='langcheckhref44'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr"; 
						if ($clickedid == '10' || $clickedid == '4' || $clickedid == '12' || $clickedid == '9' || $clickedid == '6' || $clickedid == '2') { 
						echo " data-toggle='collapse' data-target='.demo3' class='accordion-toggle pointer collapsedpresent' id='popover10' rel='popover' data-trigger='hover'";
						} 
						echo ">
							<th Key='LEFTBOX_PRICE'>
								ფასები და ინფლაცია
							</th>";
							if ($gotlangcheck == 'geo'){
								if ($clickedid == '10') {
									$hovercity = 'ქ.თბილისის მიხედვით';
								} else if ($clickedid == '4') {
									$hovercity = 'ქ.ბათუმის მიხედვით';
								} else if ($clickedid == '12') {
									$hovercity = 'ქ.გორის მიხედვით';
								} else if ($clickedid == '9') {
									$hovercity = 'ქ.თელავის მიხედვით';
								} else if ($clickedid == '6') {
									$hovercity = 'ქ.ქუთაისის მიხედვით';
								} else if ($clickedid == '2') {
									$hovercity = 'ქ.ზუგდიდის მიხედვით';
								} 
								else {
									$hovercity = NULL;
								}
							} else if ($gotlangcheck == 'eng') {
								if ($clickedid == '10') {
									$hovercity = 'By Tbilisi';
								} else if ($clickedid == '4') {
									$hovercity = 'By Batumi';
								} else if ($clickedid == '12') {
									$hovercity = 'By Gori';
								} else if ($clickedid == '9') {
									$hovercity = 'By Telavi';
								} else if ($clickedid == '6') {
									$hovercity = 'By kutaisi';
								} else if ($clickedid == '2') {
									$hovercity = 'By Zugdidi';
								} 
								else {
									$hovercity = NULL;
								}
							}
							if ($clickedid == '10') {
								$hovercitygeo = 'ქ.თბილისის მიხედვით';
							} else if ($clickedid == '4') {
								$hovercitygeo = 'ქ.ბათუმის მიხედვით';
							} else if ($clickedid == '12') {
								$hovercitygeo = 'ქ.გორის მიხედვით';
							} else if ($clickedid == '9') {
								$hovercitygeo = 'ქ.თელავის მიხედვით';
							} else if ($clickedid == '6') {
								$hovercitygeo = 'ქ.ქუთაისის მიხედვით';
							} else if ($clickedid == '2') {
								$hovercitygeo = 'ქ.ზუგდიდის მიხედვით';
							} 
							else {
								$hovercitygeo = NULL;
							}
							if ($clickedid == '10') {
								$hovercityeng = 'By Tbilisi';
							} else if ($clickedid == '4') {
								$hovercityeng = 'By Batumi';
							} else if ($clickedid == '12') {
								$hovercityeng = 'By Gori';
							} else if ($clickedid == '9') {
								$hovercityeng = 'By Telavi';
							} else if ($clickedid == '6') {
								$hovercityeng = 'By kutaisi';
							} else if ($clickedid == '2') {
								$hovercityeng = 'By Zugdidi';
							} 
							else {
								$hovercityeng = NULL;
							}
							echo "<script>
								$(document).ready(function() {
									$('#popover10').popover({
										html: true,
										animation: true,
										content: '" . $hovercity . "',
										placement: 'right'
									});
								});
							</script>	
							<th>";
						if ($clickedid == '10' || $clickedid == '4' || $clickedid == '12' || $clickedid == '9' || $clickedid == '6' || $clickedid == '2') { 
						echo "<img />"; 
						} 
						echo "</th>
						</tr>";
						if ($clickedid == '10' || $clickedid == '4' || $clickedid == '12' || $clickedid == '9' || $clickedid == '6') {
						echo "<tr>
							
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo3' Key='LEFTBOX_PRICE_12MONTHES'>სამომხმარებლო ფასების ინდექსი 12 თვის საშუალო წინა 12 თვის საშუალოსთან</div>								
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo3'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/fasebi/samomxmareblo fasebis indeqsebi 12 tvis sashualo wina 12 Tvis saSualosTan"; if ($clickedid == '10') { echo " - tbilisi";} else if ($clickedid == '4') {echo " - batumi";} else if ($clickedid == '12') {echo " - gori";} else if ($clickedid == '9') {echo " - telavi";} else if ($clickedid == '6') {echo " - kutaisi";} echo ".xlsx' class='langcheckhref10'>
										<img />
									</a>
									";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/prices/consumer price index 12 month avarage over the previous 12 month avarage"; if ($clickedid == '10') { echo " - tbilisi";} else if ($clickedid == '4') {echo " - batumi";} else if ($clickedid == '12') {echo " - gori";} else if ($clickedid == '9') {echo " - telavi";} else if ($clickedid == '6') {echo " - kutaisi";} echo ".xlsx' class='langcheckhref10'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo3' Key='LEFTBOX_PRICE_LASTYEARS'>სამომხმარებლო ფასების ინდექსი 2010 წლის საშუალო=100</div>								
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo3'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/fasebi/samomxmareblo fasebis indeqsebi 2010 wlis sashualo=100"; if ($clickedid == '10') { echo " - tbilisi";} else if ($clickedid == '4') {echo " - batumi";} else if ($clickedid == '12') {echo " - gori";} else if ($clickedid == '9') {echo " - telavi";} else if ($clickedid == '6') {echo " - kutaisi";} echo ".xlsx' class='langcheckhref11'>
										<img />
									</a>
									";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/prices/consumer price index 2010 = 100"; if ($clickedid == '10') { echo " - tbilisi";} else if ($clickedid == '4') {echo " - batumi";} else if ($clickedid == '12') {echo " - gori";} else if ($clickedid == '9') {echo " - telavi";} else if ($clickedid == '6') {echo " - kutaisi";} echo ".xlsx' class='langcheckhref11'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo3' Key='LEFTBOX_PRICE_PREVMONTH'>სამომხმარებლო ფასების ინდექსი წინა თვესთან</div>								
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo3'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/fasebi/samomxmareblo fasebis indeqsebi wina TvesTan"; if ($clickedid == '10') { echo " - tbilisi";} else if ($clickedid == '4') {echo " - batumi";} else if ($clickedid == '12') {echo " - gori";} else if ($clickedid == '9') {echo " - telavi";} else if ($clickedid == '6') {echo " - kutaisi";} echo ".xlsx' class='langcheckhref12'>
										<img />
									</a>
									";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/prices/consumer price index to the previous month"; if ($clickedid == '10') { echo " - tbilisi";} else if ($clickedid == '4') {echo " - batumi";} else if ($clickedid == '12') {echo " - gori";} else if ($clickedid == '9') {echo " - telavi";} else if ($clickedid == '6') {echo " - kutaisi";} echo ".xlsx' class='langcheckhref12'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo3' Key='LEFTBOX_PRICE_PREVYEARS'>სამომხმარებლო ფასების ინდექსი წინა წლის შესაბამის თვესთან</div>								
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo3'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/fasebi/samomxmareblo fasebis indeqsebi wina wlis shesabamis TvesTan"; if ($clickedid == '10') { echo " - tbilisi";} else if ($clickedid == '4') {echo " - batumi";} else if ($clickedid == '12') {echo " - gori";} else if ($clickedid == '9') {echo " - telavi";} else if ($clickedid == '6') {echo " - kutaisi";} echo ".xlsx' class='langcheckhref13'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/prices/consumer price index to the same month of previous year"; if ($clickedid == '10') { echo " - tbilisi";} else if ($clickedid == '4') {echo " - batumi";} else if ($clickedid == '12') {echo " - gori";} else if ($clickedid == '9') {echo " - telavi";} else if ($clickedid == '6') {echo " - kutaisi";} echo ".xlsx' class='langcheckhref13'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						";
						} else if ($clickedid == '2') {
						echo "
						<tr>
							
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo3' Key='LEFTBOX_PRICE_12MONTHES'>სამომხმარებლო ფასების ინდექსი 12 თვის საშუალო წინა 12 თვის საშუალოსთან</div>								
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo3'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/fasebi/samomxmareblo fasebis indeqsebi 12 tvis sashualo wina 12 Tvis saSualosTan - zugdidi.xlsx' class='langcheckhref39'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/prices/consumer price index 12 month avarage over the previous 12 month avarage - zugdidi.xlsx' class='langcheckhref39'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						
						<tr>
							
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo3' Key='LEFTBOX_PRICE_PREVMONTH'>სამომხმარებლო ფასების ინდექსი წინა თვესთან</div>								
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo3'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/fasebi/samomxmareblo fasebis indeqsebi wina tvestan - zugdidi.xlsx' class='langcheckhref14'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/prices/consumer price index to the previous month - zugdidi.xlsx' class='langcheckhref14'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo3' Key='LEFTBOX_PRICE_PREVYEARS'>სამომხმარებლო ფასების ინდექსი წინა წლის შესაბამის თვესთან</div>								
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo3'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/fasebi/samomxmareblo fasebis indeqsebi wina wlis shesabamis TvesTan - zugdidi.xlsx' class='langcheckhref38'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/prices/consumer price index to the same month of previous year - zugdidi.xlsx' class='langcheckhref38'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						
						";	
						}
						
						echo "<tr data-toggle='collapse' data-target='.demo4' class='accordion-toggle pointer collapsedpresent'>
							<th Key='LEFTBOX_LIVING'>ცხოვრების დონე</th>
							<th><img /></th>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo4' Key='LEFTBOX_LIVING_INCOME'>შემოსავლები</div>								
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo4'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/ckhovrebis done/shemosavlebi.xlsx' class='langcheckhref15'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/standard of living/incomes.xlsx' class='langcheckhref15'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo4' Key='LEFTBOX_LIVING_COSTS'>ხარჯები</div>
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo4' >
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/ckhovrebis done/kharjebi.xlsx' class='langcheckhref16'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/standard of living/expenditures.xlsx' class='langcheckhref16'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr data-toggle='collapse' data-target='.demo5' class='accordion-toggle pointer collapsedpresent'>
							<th Key='LEFTBOX_BUSINESS'>ბიზნეს სექტორი</th>
							<th><img /></th>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo5' Key='LEFTBOX_BUSINESS_ACTIVITY_2'>საქმიანობის მიხედვით (NACE rev.2)</div>
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo5'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/biznes seqtori/saqmianobis mikhedvit_nace rev.2.xlsx' class='langcheckhref19_2'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/business sector/by kind of activity_nace rev.2.xlsx' class='langcheckhref19_2'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo5' Key='LEFTBOX_BUSINESS_PROPERTY'>საკუთრების ფორმის მიხედვით</div>
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo5'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/biznes seqtori/sakutrebis formis mikhedvit.xlsx' class='langcheckhref18'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/business sector/by ownership.xlsx' class='langcheckhref18'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo5' Key='LEFTBOX_BUSINESS_SIZE_NEW'>ზომის მიხედვით</div>								
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo5'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/biznes seqtori/zomis mikhedvit.xlsx' class='langcheckhref17'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/business sector/by size.xlsx' class='langcheckhref17'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<th colspan='2'><a href='http://br.geostat.ge/register_geo/' target='_blank' Key='LEFTBOX_BUSINESSREGISTER' class='tr'>ბიზნეს რეგისტრი</a></th>
						</tr>
						<tr data-toggle='collapse' data-target='.demo6' class='accordion-toggle pointer collapsedpresent'>
							<th Key='LEFTBOX_AGRICULTURE'>სოფლის მეურნეობა</th>
							<th><img /></th>
						</tr>
						
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo6' Key='LEFTBOX_AGRICULTURE_SEPARATE'>ერთწლიანი კულტურები</div>
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo6'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/soflis meurneoba/1. erttsliani kulturebi.xlsx' class='langcheckhref22'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/agriculture/1. Annual crops.xlsx' class='langcheckhref22'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo6' Key='LEFTBOX_AGRICULTURE_FRUIT'>მრავალწლოვანი კულტურების წარმოება</div>
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo6'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/soflis meurneoba/2. mravaltslovani kulturebis tsarmoeba.xlsx' class='langcheckhref23'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/agriculture/2. Production of permanent crops.xlsx' class='langcheckhref23'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo6' Key='LEFTBOX_AGRICULTURE_LIVESTOCK'>პირუტყვის სულადობა</div>								
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo6'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/soflis meurneoba/3. pirutkvis suladoba.xlsx' class='langcheckhref20'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/agriculture/4. Production of animal housbandry.xlsx' class='langcheckhref20'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo6' Key='LEFTBOX_AGRICULTURE_CATTLE'>მეცხოველეობის პროდუქციის წარმოება</div>
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo6'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/soflis meurneoba/4. metskhoveleobis produktsiis tsarmoeba.xlsx' class='langcheckhref21'>
										<img />";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/agriculture/3. Number of livestock.xlsx' class='langcheckhref21'>
										<img />
									</a>";
								}
								echo "
									</a>
								</div>
							</td>
						</tr>
						<tr>
							<th Key='LEFTBOX_INDUSTRY'>მრეწველობა</th>
							<th>"; 
								if ($gotlangcheck == 'geo'){
									echo "
							<a href='regions/" . $clickedid . "/mretsveloba/mretsveloba.xlsx' class='langcheckhref24'><img />
							</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/industry/industry.xlsx' class='langcheckhref24'>
										<img />
									</a>";
								}
								echo "
							</th>							
						</tr>
						<tr data-toggle='collapse' data-target='.demo7' class='accordion-toggle pointer collapsedpresent'>
							<th Key='LEFTBOX_CONSTRUCTION'>მშენებლობა</th>
							<th><img /></th>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo7' Key='LEFTBOX_CONSTRUCTION_FINISHED'>დასრულებული მშენებლობები</div>								
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo7'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/mshenebloba/dasrulebuli msheneblobebi.xlsx' class='langcheckhref25'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/construction/completed objects.xlsx' class='langcheckhref25'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo7' Key='LEFTBOX_CONSTRUCTION_PERMIT'>ნებართვები</div>
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo7'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/mshenebloba/mshenebloba_nebartvebi.xlsx' class='langcheckhref26'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/construction/constraction_permition.xlsx' class='langcheckhref26'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo7' Key='LEFTBOX_CONSTRUCTION_MAIN'>ძირითადი მაჩვენებლები</div>
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo7'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/mshenebloba/mshenebloba_dziritadi machveneblebi.xlsx' class='langcheckhref27'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/construction/construction_main indicators.xlsx' class='langcheckhref27'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<th Key='LEFTBOX_ENERGY'>ენერგეტიკა</th>
							<th></th>
						</tr>
						<tr>
							<th Key='LEFTBOX_TRADE'>ვაჭრობა</th>
							<th>
							"; 
								if ($gotlangcheck == 'geo'){
									echo "
							<a href='regions/" . $clickedid . "/vachroba/vachroba.xlsx' class='langcheckhref28'><img />
							</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/trade/trade.xlsx' class='langcheckhref28'>
										<img />
									</a>";
								}
								echo "
							</th>							
						</tr>
						<tr data-toggle='collapse' data-target='.demo11' class='accordion-toggle pointer collapsedpresent'>
							<th Key='LEFTBOX_HOTELS'>სასტუმროები და რესტორნები</th>
							<th><img /></th>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo11' Key='LEFTBOX_HOTELS'>სასტუმროები და რესტორნები</div>								
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo11'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/sastumroebi da restornebi/sastumroebi da restornebi.xlsx' class='langcheckhref29'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/hotels and restaurants/hotels and restaurants.xlsx' class='langcheckhref29'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo11' Key='LEFTBOX_HOTELS_2'>სტუმართა რაოდენობა</div>								
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo11'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/sastumroebi da restornebi/stumarta raodenoba.xlsx' class='langcheckhref43'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/hotels and restaurants/number of visitors.xlsx' class='langcheckhref43'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr data-toggle='collapse' data-target='.demo10' class='accordion-toggle pointer collapsedpresent'>
							<th Key='LEFTBOX_TRANSPORT'>ტრანსპორტი და დასაწყობება</th>
							<th><img /></th>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo10' Key='LEFTBOX_TRANSPORT'>ტრანსპორტი და დასაწყობება</div>								
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo10'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/transporti da kavshirgabmuloba/transporti da dasawyobeba.xlsx' class='langcheckhref30'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/transport and communication/transport and storage.xlsx' class='langcheckhref30'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo10' Key='LEFTBOX_TRANSPORT_2'>რეგისტრირებული ავტომობილების რაოდენობა</div>								
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo10'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/transporti da kavshirgabmuloba/registrirebuli avtomobilebis raodenoba.xlsx' class='langcheckhref40'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/transport and communication/number of motor vehicles.xlsx' class='langcheckhref40'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo10' Key='LEFTBOX_TRANSPORT_3'>საერთო სარგებლობის საავტომობილო გზების სიგრძე</div>								
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo10'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/transporti da kavshirgabmuloba/gzebis sigrdze.xlsx' class='langcheckhref45'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/transport and communication/the length of the roads.xlsx' class='langcheckhref45'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<!--<tr>
							<th Key='LEFTBOX_TRANSPORT'>ტრანსპორტი და კავშირგაბმულობა</th>
							<th>"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/transporti da kavshirgabmuloba/transporti da kavshirgabmuloba.xlsx' class='langcheckhref30'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/transport and communication/transport and communication.xlsx' class='langcheckhref30'>
										<img />
									</a>";
								}
								echo "
							</th>							
						</tr>-->
						<tr data-toggle='collapse' data-target='.demo8' class='accordion-toggle pointer collapsedpresent'>
							<th Key='LEFTBOX_TOURISM'>ტურიზმი</th>
							<th><img /></th>
						</tr>
						<tr data-toggle='collapse' data-target='.demo9' class='accordion-toggle pointer collapsedpresent'>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo8' Key='LEFTBOX_TOURISM_SHIDA'>შიდა ტურიზმი</div>
							</td>
							<th class='hiddenRow'>								
								<div class='accordian-body collapse demo8'>
									<img />
								</div>
							</th>
						</tr>						
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo9' Key='LEFTBOX_TOURISM_SHIDA_PLACE'>საცხოვრებელი ადგილის მიხედვით</div>
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo9'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/turizmi/ganawileba sacxovrebeli adgilis mixedvit.xls' class='langcheckhref36'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/tourism/place of residence.xls' class='langcheckhref36'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo9' Key='LEFTBOX_TOURISM_SHIDA_VISIT'>მონახულებული რეგიონებით</div>
							</td>
							<td class='hiddenRow'>
								<div class='accordian-body collapse demo9'>
								"; 
								if ($gotlangcheck == 'geo'){
									echo "
									<a href='regions/" . $clickedid . "/turizmi/ganawileba monaxulebuli regionebit.xls' class='langcheckhref37'>
										<img />
									</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/tourism/visited regions.xls' class='langcheckhref37'>
										<img />
									</a>";
								}
								echo "
								</div>
							</td>
						</tr>
						<tr>
							<th Key='LEFTBOX_JUSTICE'>სამართლებრივი სტატისტიკა</th>
							<th>"; 
								if ($gotlangcheck == 'geo'){
									echo "
							<a href='regions/" . $clickedid . "/samartlebrivi statistika/samartlebrivi statistika.xlsx' class='langcheckhref41'><img />
							</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/justice statistics/justice statistics.xlsx' class='langcheckhref41'>
										<img />
									</a>";
								}
								echo "
							</th>							
						</tr>
						<tr>
							<th Key='LEFTBOX_HEALTH'>ჯანდაცვა და სოციალური უზრუნველყოფა</th>
							<th>"; 
								if ($gotlangcheck == 'geo'){
									echo "
							<a href='regions/" . $clickedid . "/jandacva da socialuri uzrunvelkofa/jandacva da socialuri uzrunvelkofa.xlsx' class='langcheckhref31'><img />
							</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/health care and social protection/health care and social protection.xlsx' class='langcheckhref31'>
										<img />
									</a>";
								}
								echo "
							</th>							
						</tr>
						<tr>
							<th Key='LEFTBOX_EDUCATION'>განათლება</th>
							<th>"; 
								if ($gotlangcheck == 'geo'){
									echo "
							<a href='regions/" . $clickedid . "/ganatleba/ganatleba.xlsx' class='langcheckhref32'><img />
							</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/education/education.xlsx' class='langcheckhref32'>
										<img />
									</a>";
								}
								echo "
							</th>							
						</tr>
						<tr>
							<th Key='LEFTBOX_CULTURE'>კულტურა</th>
							<th>"; 
								if ($gotlangcheck == 'geo'){
									echo "
							<a href='regions/" . $clickedid . "/kultura/kultura.xlsx' class='langcheckhref33'><img />
							</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/culture/culture.xlsx' class='langcheckhref33'>
										<img />
									</a>";
								}
								echo "
							</th>							
						</tr>
						<tr>
							<th Key='LEFTBOX_ENVIRONMENT'>გარემოს დაცვა</th>
							<th>"; 
								if ($gotlangcheck == 'geo'){
									echo "
							<a href='regions/" . $clickedid . "/garemos dacva/garemos dacva.xlsx' class='langcheckhref34'><img />
							</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/environmental protection/environmental protection.xlsx' class='langcheckhref34'>
										<img />
									</a>";
								}
								echo "
							</th>							
						</tr>
						<tr>
							<th Key='LEFTBOX_INFRASTRUCTURE'>ინფრასტრუქტურა</th>
							<th>"; 
								if ($gotlangcheck == 'geo'){
									echo "
							<a href='regions/" . $clickedid . "/infrastruqtura/infrastruqtura.xlsx' class='langcheckhref35'><img />
							</a>";
								} else if ($gotlangcheck == 'eng') {
									echo "
									<a href='regionseng/" . $clickedid . "/infrastructure/infrastructure.xlsx' class='langcheckhref35'>
										<img />
									</a>";
								}
								echo "
							</th>							
						</tr>
					</tbody>";
			}
			echo "</table>";
			echo "<script> 
			$(document).ready(function() {
				$('.collapsedpresent').click(function() {
					$(this).toggleClass('collapsedpresent')
					$(this).toggleClass('collapsednew');					   
				});
				if ($('td').children('div').attr('aria-expanded', 'false')) {
					$('div').parent('td').css('border', '0px solid blue');
				}
				
				$('tr th:first-child').addClass('tr');
				$('td').children('div').addClass('tr');
				$('#ka').click(function () {
					$('.langcheckhref1').attr('href', 'regions/" . $clickedid . "/dziritadi informacia/regionis fartobi.xlsx');
					$('.langcheckhref2').attr('href', 'regions/" . $clickedid . "/dziritadi informacia/municipalitetebis, qalaqebis da soflebis raodenoba.xlsx');
					$('.langcheckhref3').attr('href', 'regions/" . $clickedid . "/mosakhleoba/mosakhleoba.xlsx');
					$('.langcheckhref4').attr('href', 'regions/" . $clickedid . "/demografia/mokvdaoba_asaki_sqesi.xlsx');
					$('.langcheckhref5').attr('href', 'regions/" . $clickedid . "/demografia/gardacvalebis mizezebi.xlsx');
					$('.langcheckhref6').attr('href', 'regions/" . $clickedid . "/demografia/dziritadi demografiuli machveneblebi.xlsx');
					$('.langcheckhref7').attr('href', 'regions/" . $clickedid . "/mshp da damatebuli girebuleba/mshp da damatebuli girebuleba.xls');
					$('.langcheckhref8').attr('href', 'regions/" . $clickedid . "/pirdapiri uckhouri investiciebi/pirdapiri uckhouri investiciebi.xlsx');
					$('.langcheckhref9').attr('href', 'regions/" . $clickedid . "/dasaqmeba_umushevroba/dasaqmeba_umushevroba.xlsx');
					$('.langcheckhref44').attr('href', 'regions/" . $clickedid . "/dasaqmeba_umushevroba/khelfasi.xlsx');
					$('.langcheckhref10').attr('href', 'regions/" . $clickedid . "/fasebi/samomxmareblo fasebis indeqsebi 12 tvis sashualo wina 12 Tvis saSualosTan"; if ($clickedid == '10') { echo " - tbilisi";} else if ($clickedid == '4') {echo " - batumi";} else if ($clickedid == '12') {echo " - gori";} else if ($clickedid == '9') {echo " - telavi";} else if ($clickedid == '6') {echo " - kutaisi";} echo ".xlsx');
					$('.langcheckhref11').attr('href', 'regions/" . $clickedid . "/fasebi/samomxmareblo fasebis indeqsebi 2010 wlis sashualo=100"; if ($clickedid == '10') { echo " - tbilisi";} else if ($clickedid == '4') {echo " - batumi";} else if ($clickedid == '12') {echo " - gori";} else if ($clickedid == '9') {echo " - telavi";} else if ($clickedid == '6') {echo " - kutaisi";} echo ".xlsx');
					$('.langcheckhref12').attr('href', 'regions/" . $clickedid . "/fasebi/samomxmareblo fasebis indeqsebi wina TvesTan"; if ($clickedid == '10') { echo " - tbilisi";} else if ($clickedid == '4') {echo " - batumi";} else if ($clickedid == '12') {echo " - gori";} else if ($clickedid == '9') {echo " - telavi";} else if ($clickedid == '6') {echo " - kutaisi";} echo ".xlsx');
					$('.langcheckhref13').attr('href', 'regions/" . $clickedid . "/fasebi/samomxmareblo fasebis indeqsebi wina wlis shesabamis TvesTan"; if ($clickedid == '10') { echo " - tbilisi";} else if ($clickedid == '4') {echo " - batumi";} else if ($clickedid == '12') {echo " - gori";} else if ($clickedid == '9') {echo " - telavi";} else if ($clickedid == '6') {echo " - kutaisi";} else if ($clickedid == '2') {echo " - zugdidi";} echo ".xlsx');
					$('.langcheckhref14').attr('href', 'regions/" . $clickedid . "/fasebi/samomxmareblo fasebis indeqsebi wina tvestan - zugdidi.xlsx');
					$('.langcheckhref15').attr('href', 'regions/" . $clickedid . "/ckhovrebis done/shemosavlebi.xlsx');
					$('.langcheckhref16').attr('href', 'regions/" . $clickedid . "/ckhovrebis done/kharjebi.xlsx');					
					$('.langcheckhref18').attr('href', 'regions/" . $clickedid . "/biznes seqtori/sakutrebis formis mikhedvit.xlsx');
					$('.langcheckhref19_1').attr('href', 'regions/" . $clickedid . "/biznes seqtori/saqmianobis mikhedvit_NACE rev.1.1.xlsx');
					$('.langcheckhref19_2').attr('href', 'regions/" . $clickedid . "/biznes seqtori/saqmianobis mikhedvit_NACE rev.2.xlsx');
					$('.langcheckhref17').attr('href', 'regions/" . $clickedid . "/biznes seqtori/zomis mikhedvit.xlsx');
					$('.langcheckhref42').attr('href', 'regions/" . $clickedid . "/biznes seqtori/zomis mikhedvit_dzveli metodologiit.xlsx');
					$('.langcheckhref20').attr('href', 'regions/" . $clickedid . "/soflis meurneoba/3. pirutkvis suladoba.xlsx');
					$('.langcheckhref21').attr('href', 'regions/" . $clickedid . "/soflis meurneoba/4. metskhoveleobis produktsiis tsarmoeba.xlsx');
					$('.langcheckhref22').attr('href', 'regions/" . $clickedid . "/soflis meurneoba/1. erttsliani kulturebi.xlsx');
					$('.langcheckhref23').attr('href', 'regions/" . $clickedid . "/soflis meurneoba/2. mravaltslovani kulturebis tsarmoeba.xlsx');
					$('.langcheckhref24').attr('href', 'regions/" . $clickedid . "/mretsveloba/mretsveloba.xlsx');
					$('.langcheckhref25').attr('href', 'regions/" . $clickedid . "/mshenebloba/dasrulebuli msheneblobebi.xlsx');
					$('.langcheckhref26').attr('href', 'regions/" . $clickedid . "/mshenebloba/mshenebloba_nebartvebi.xlsx');
					$('.langcheckhref27').attr('href', 'regions/" . $clickedid . "/mshenebloba/mshenebloba_dziritadi machveneblebi.xlsx');
					$('.langcheckhref28').attr('href', 'regions/" . $clickedid . "/vachroba/vachroba.xlsx');
					$('.langcheckhref29').attr('href', 'regions/" . $clickedid . "/sastumroebi da restornebi/sastumroebi da restornebi.xlsx');
					$('.langcheckhref43').attr('href', 'regions/" . $clickedid . "/sastumroebi da restornebi/stumarta raodenoba.xlsx');
					$('.langcheckhref30').attr('href', 'regions/" . $clickedid . "/transporti da kavshirgabmuloba/transporti da dasawyobeba.xlsx');
					$('.langcheckhref45').attr('href', 'regions/" . $clickedid . "/transporti da kavshirgabmuloba/gzebis sigrdze.xlsx');
					$('.langcheckhref31').attr('href', 'regions/" . $clickedid . "/jandacva da socialuri uzrunvelkofa/jandacva da socialuri uzrunvelkofa.xlsx');
					$('.langcheckhref32').attr('href', 'regions/" . $clickedid . "/ganatleba/ganatleba.xlsx');
					$('.langcheckhref33').attr('href', 'regions/" . $clickedid . "/kultura/kultura.xlsx');
					$('.langcheckhref34').attr('href', 'regions/" . $clickedid . "/garemos dacva/garemos dacva.xlsx');
					$('.langcheckhref35').attr('href', 'regions/" . $clickedid . "/infrastruqtura/infrastruqtura.xlsx');
					$('.langcheckhref36').attr('href', 'regions/" . $clickedid . "/turizmi/ganawileba sacxovrebeli adgilis mixedvit.xls');
					$('.langcheckhref37').attr('href', 'regions/" . $clickedid . "/turizmi/ganawileba monaxulebuli regionebit.xls');
					$('.langcheckhref38').attr('href', 'regions/" . $clickedid . "/fasebi/samomxmareblo fasebis indeqsebi wina wlis shesabamis TvesTan - zugdidi.xlsx');
					$('.langcheckhref39').attr('href', 'regions/" . $clickedid . "/fasebi/samomxmareblo fasebis indeqsebi 12 tvis sashualo wina 12 Tvis saSualosTan - zugdidi.xlsx');
					$('.langcheckhref40').attr('href', 'regions/" . $clickedid . "/transporti da kavshirgabmuloba/registrirebuli avtomobilebis raodenoba.xlsx');
					$('.langcheckhref41').attr('href', 'regions/" . $clickedid . "/samartlebrivi statistika/samartlebrivi statistika.xlsx');
					$('#popover10').attr('data-content', '" . $hovercitygeo . "');
				});	
				$('#en').click(function () {
					$('.langcheckhref1').attr('href', 'regionseng/" . $clickedid . "/main information/area.xlsx');
					$('.langcheckhref2').attr('href', 'regionseng/" . $clickedid . "/main information/number of settlements.xlsx');
					$('.langcheckhref3').attr('href', 'regionseng/" . $clickedid . "/population/population.xlsx');
					$('.langcheckhref4').attr('href', 'regionseng/" . $clickedid . "/demography/death by age and sex.xlsx');
					$('.langcheckhref5').attr('href', 'regionseng/" . $clickedid . "/demography/death causes.xlsx');
					$('.langcheckhref6').attr('href', 'regionseng/" . $clickedid . "/demography/summary vital statistics.xlsx');
					$('.langcheckhref7').attr('href', 'regionseng/" . $clickedid . "/gdp and va/gdp and va.xls');
					$('.langcheckhref8').attr('href', 'regionseng/" . $clickedid . "/ext.trade and foreign direct invset/ext.trade and foreign direct invset.xlsx');
					$('.langcheckhref9').attr('href', 'regionseng/" . $clickedid . "/employment and unemployment/employment and unemployment.xlsx');
					$('.langcheckhref44').attr('href', 'regionseng/" . $clickedid . "/employment and unemployment/wages.xlsx');
					$('.langcheckhref10').attr('href', 'regionseng/" . $clickedid . "/prices/consumer price index 12 month avarage over the previous 12 month avarage"; if ($clickedid == '10') { echo " - tbilisi";} else if ($clickedid == '4') {echo " - batumi";} else if ($clickedid == '12') {echo " - gori";} else if ($clickedid == '9') {echo " - telavi";} else if ($clickedid == '6') {echo " - kutaisi";} echo ".xlsx');
					$('.langcheckhref11').attr('href', 'regionseng/" . $clickedid . "/prices/consumer price index 2010 = 100"; if ($clickedid == '10') { echo " - tbilisi";} else if ($clickedid == '4') {echo " - batumi";} else if ($clickedid == '12') {echo " - gori";} else if ($clickedid == '9') {echo " - telavi";} else if ($clickedid == '6') {echo " - kutaisi";} echo ".xlsx');
					$('.langcheckhref12').attr('href', 'regionseng/" . $clickedid . "/prices/consumer price index to the previous month"; if ($clickedid == '10') { echo " - tbilisi";} else if ($clickedid == '4') {echo " - batumi";} else if ($clickedid == '12') {echo " - gori";} else if ($clickedid == '9') {echo " - telavi";} else if ($clickedid == '6') {echo " - kutaisi";} echo ".xlsx');
					$('.langcheckhref13').attr('href', 'regionseng/" . $clickedid . "/prices/consumer price index to the same month of previous year"; if ($clickedid == '10') { echo " - tbilisi";} else if ($clickedid == '4') {echo " - batumi";} else if ($clickedid == '12') {echo " - gori";} else if ($clickedid == '9') {echo " - telavi";} else if ($clickedid == '6') {echo " - kutaisi";} else if ($clickedid == '2') {echo " - zugdidi";} echo ".xlsx');
					$('.langcheckhref14').attr('href', 'regionseng/" . $clickedid . "/prices/consumer price index to the previous month - zugdidi.xlsx');
					$('.langcheckhref15').attr('href', 'regionseng/" . $clickedid . "/standard of living/incomes.xlsx');
					$('.langcheckhref16').attr('href', 'regionseng/" . $clickedid . "/standard of living/expenditures.xlsx');					
					$('.langcheckhref18').attr('href', 'regionseng/" . $clickedid . "/business sector/by ownership.xlsx');
					$('.langcheckhref19_1').attr('href', 'regionseng/" . $clickedid . "/business sector/by kind of activity_nace rev.1.1.xlsx');
					$('.langcheckhref19_2').attr('href', 'regionseng/" . $clickedid . "/business sector/by kind of activity_nace rev.2.xlsx');
					$('.langcheckhref17').attr('href', 'regionseng/" . $clickedid . "/business sector/by size.xlsx');
					$('.langcheckhref42').attr('href', 'regionseng/" . $clickedid . "/business sector/by size_old methodology.xlsx');
					$('.langcheckhref20').attr('href', 'regionseng/" . $clickedid . "/agriculture/4. Production of animal housbandry.xlsx');
					$('.langcheckhref21').attr('href', 'regionseng/" . $clickedid . "/agriculture/3. Number of livestock.xlsx');
					$('.langcheckhref22').attr('href', 'regionseng/" . $clickedid . "/agriculture/1. Annual crops.xlsx');
					$('.langcheckhref23').attr('href', 'regionseng/" . $clickedid . "/agriculture/2. Production of permanent crops.xlsx');
					$('.langcheckhref24').attr('href', 'regionseng/" . $clickedid . "/industry/industry.xlsx');
					$('.langcheckhref25').attr('href', 'regionseng/" . $clickedid . "/construction/completed objects.xlsx');
					$('.langcheckhref26').attr('href', 'regionseng/" . $clickedid . "/construction/constraction_permition.xlsx');
					$('.langcheckhref27').attr('href', 'regionseng/" . $clickedid . "/construction/construction_main indicators.xlsx');
					$('.langcheckhref28').attr('href', 'regionseng/" . $clickedid . "/trade/trade.xlsx');
					$('.langcheckhref29').attr('href', 'regionseng/" . $clickedid . "/hotels and restaurants/hotels and restaurants.xlsx');
					$('.langcheckhref43').attr('href', 'regionseng/" . $clickedid . "/hotels and restaurants/number of visitors.xlsx');
					$('.langcheckhref30').attr('href', 'regionseng/" . $clickedid . "/transport and communication/transport and storage.xlsx');
					$('.langcheckhref45').attr('href', 'regionseng/" . $clickedid . "/transport and communication/the length of the roads.xlsx');
					$('.langcheckhref31').attr('href', 'regionseng/" . $clickedid . "/health care and social protection/health care and social protection.xlsx');
					$('.langcheckhref32').attr('href', 'regionseng/" . $clickedid . "/education/education.xlsx');
					$('.langcheckhref33').attr('href', 'regionseng/" . $clickedid . "/culture/culture.xlsx');
					$('.langcheckhref34').attr('href', 'regionseng/" . $clickedid . "/environmental protection/environmental protection.xlsx');
					$('.langcheckhref35').attr('href', 'regionseng/" . $clickedid . "/infrastructure/infrastructure.xlsx');
					$('.langcheckhref36').attr('href', 'regionseng/" . $clickedid . "/tourism/place of residence.xls');
					$('.langcheckhref37').attr('href', 'regionseng/" . $clickedid . "/tourism/visited regions.xls');
					$('.langcheckhref38').attr('href', 'regionseng/" . $clickedid . "/prices/consumer price index to the same month of previous year - zugdidi.xlsx');
					$('.langcheckhref39').attr('href', 'regionseng/" . $clickedid . "/prices/consumer price index 12 month avarage over the previous 12 month avarage - zugdidi.xlsx');
					$('.langcheckhref40').attr('href', 'regionseng/" . $clickedid . "/transport and communication/number of motor vehicles.xlsx');
					$('.langcheckhref41').attr('href', 'regionseng/" . $clickedid . "/justice statistics/justice statistics.xlsx');
					$('#popover10').attr('data-content', '" . $hovercityeng . "');
				});	
			});
			</script>
			";			
			mysqli_free_result($result);
		} else{
			echo "No records matching your query were found.";
		}
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}	
	mysqli_close($link);
