<?php 

	//include header file
	include ('include/header.php');

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate the blood, save the life</h1>
						<p class="text-center">Donate the blood to help the others.</p>
						</div>


						<h1 class="text-center ">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="#" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
								 <option value="">-- Select --</option>
								 <optgroup title="Jammu and Kashmir" label="&raquo;  Jammu and Kashmir"></optgroup>
								 <option value="Bagh" >Baramulla</option>
								 <option value="Bhimber" >Shrinagar</option>
								 <option value="Kotli" >Jammu</option>
								 <option value="Mirpur" >UdhamPur</option>
								 <option value="Muzaffarabad" >Anantnag</option>
								 <option value="Neelum" >Pahalgam</option>
								 <option value="Poonch" >Rajouri</option>
								 <option value="Sudhnati" >Kathua</option>
								 <optgroup title="Madhya Pradesh" label="&raquo; Madhya Pradesh"></optgroup>
								 <option value="Awaran" >Bhopal</option>
								 <option value="Barkhan" >Indore</option>
								 <option value="Bolan" >Ujjain</option>
								 <option value="Chagai" >Gwalior</option>
								 <option value="Dera Bugti" >Sagar</option>
								 <option value="Gwadar" >Satna</option>
								 <option value="Jafarabad" >Dewas</option>
								 <option value="Jhal Magsi" >Ratlam</option>
								 <option value="Kalat" >Rewa</option>
								 <option value="Kech" >Vidisha</option>
								 <option value="Kharan" >Chhindwara</option>
								 <option value="Khuzdar" >Katni</option>
								 <option value="Kohlu" >Khandwa</option>
								 <option value="Lasbela" >Guna</option>
								 <option value="Loralai" >Khujrao</option>
								 <option value="Mastung" >Khargone</option>
								 <option value="Musakhel" >Bhind</option>
								 <option value="Naseerabad" >Shivpuri</option>
								 <option value="Nushki" >Mandsaur</option>
								 <option value="Panjgur" >Hoshangabad</option>
								 <option value="Pishin" >Sehore</option>
								 <option value="Qilla Abdullah" >Betul</option>
								 <option value="Qilla Saifullah" >Chhatarpur</option>
								 <option value="Quetta" >Neemach</option>
								 <option value="Sibi" >Moorena</option>
								 <option value="Zhob" >Damoh</option>
								 <option value="Ziarat" >Orcha</option>
								 <optgroup title="Maharastra"></optgroup>
								 <option value="Bajaur Agency" >Mumbai </option>
								 <option value="Khyber Agency" >Pune</option>
								 <option value="Kurram Agency" >Nagpur</option>
								 <option value="Mohmand Agency" >Nasik</option>
								 <option value="North Waziristan Agency" >Navi Mumbai</option>
								 <option value="Orakzai Agency" >Aurangabad</option>
								 <option value="South Waziristan Agency" >Amravati</option>
								 <optgroup title="Chattisgarh" label="&raquo; Chattisgarh"></optgroup>
								 <option value="Islamabad" >Raipur</option>
								 <optgroup title="Goa" label="&raquo; Goa"></optgroup>
								 <option value="Abbottabad" >Panaji</option>
								 <option value="Bannu" >Margao</option>
								 <option value="Batagram" >Vasco da Gama</option>
								 <option value="Buner" >Mapusa</option>
								 <option value="Charsadda" >Ponda</option>
								 <option value="Chitral" >Mormugao</option>
								 <option value="Dera Ismail Khan" >Goa Velha</option>
								 <option value="Dir Lower" >Anjuna</option>
								 <option value="Dir Upper" >Baga</option>
								 <option value="Hangu" >Benaulim</option>
								 <option value="Haripur" >Salcete</option>
								 <option value="Karak" >Bardez</option>
								 <option value="Kohat" >Bambolim</option>
								 <option value="Kohistan" >Arambol</option>
								 <option value="Lakki Marwat" >Sanguem</option>
								 <option value="Malakand" >Varca</option>
								 <option value="Mansehra" >Colva</option>
								 <option value="Mardan" >Valpoi</option>
								 <option value="Nowshera" >Cavelossim</option>
								 <option value="Peshawar" >Sanacoale</option>
								 <option value="Shangla" >Agonda</option>
								 <option value="Swabi" >Verna</option>
								 <option value="Swat" >Majorda</option>
								 <option value="Tank" >Morjim</option>
								 <optgroup title="Punjab" label="&raquo; Punjab"></optgroup>
								 <option value="Alipur" >Jalandar</option>
								 <option value="Attock" >Ludhiana</option>
								 <option value="Bahawalnagar" >Patiala</option>
								 <option value="Bahawalpur" >Amristar</option>
								 <option value="Bhakkar" >Bhatinda</option>
								 <option value="Chakwal" >Pathankot</option>
								 <option value="Chiniot" >Chandigarh</option>
								 <option value="Dera Ghazi Khan" >Hoshiarpur</option>
								 <option value="Faisalabad" >Firozpur</option>
								 <option value="Gujranwala" >Moga</option>
								 <option value="Gujrat" >Batla</option>
								 <option value="Hafizabad" >Kapurthala</option>
								 <option value="Jhang" >Aborbar</option>
								 <option value="Jhelum" >Khanna</option>
								 <option value="Kasur" >Jalandar</option>
								 <option value="Khanewal" >Barnala</option>
								 <option value="Khushab" >Khushab</option>
								 <option value="Lahore" >Lahore</option>
								 <option value="Layyah" >Layyah</option>
								 <option value="Lodhran" >Lodhran</option>
								 <option value="Mandi Bahauddin" >Mandi Bahauddin</option>
								 <option value="Mianwali" >Mianwali</option>
								 <option value="Multan" >Multan</option>
								 <option value="Muzaffargarh" >Muzaffargarh</option>
								 <option value="Nankana Sahib" >Nankana Sahib</option>
								 <option value="Narowal" >Narowal</option>
								 <option value="Okara" >Okara</option>
								 <option value="Pakpattan" >Pakpattan</option>
								 <option value="Rahim Yar Khan" >Rahim Yar Khan</option>
								 <option value="Rajanpur" >Rajanpur</option>
								 <option value="Rawalpindi" >Rawalpindi</option>
								 <option value="Sahiwal" >Sahiwal</option>
								 <option value="Sargodha" >Sargodha</option>
								 <option value="Sheikhupura" >Sheikhupura</option>
								 <option value="Shekhupura" >Shekhupura</option>
								 <option value="Sialkot" >Sialkot</option>
								 <option value="Toba Tek Singh" >Toba Tek Singh</option>
								 <option value="Vehari" >Vehari</option>
								 <optgroup title="Kerela" label="&raquo; Sindh"></optgroup>
								 <option value="Badin" >Badin</option>
								 <option value="Dadu" >Dadu</option>
								 <option value="Ghotki" >Ghotki</option>
								 <option value="Hyderabad" >Hyderabad</option>
								 <option value="Jacobabad" >Jacobabad</option>
								 <option value="Jamshoro" >Jamshoro</option>
								 <option value="Karachi" >Karachi</option>
								 <option value="Kashmore" >Kashmore</option>
								 <option value="Khairpur" >Khairpur</option>
								 <option value="Larkana" >Larkana</option>
								 <option value="Matiari" >Matiari</option>
								 <option value="Mirpur Khas" >Mirpur Khas</option>
								 <option value="Naushahro Feroze" >Naushahro Feroze</option>
								 <option value="Nawabshah" >Nawabshah</option>
								 <option value="Qambar Shahdadkot" >Qambar Shahdadkot</option>
								 <option value="Sanghar" >Sanghar</option>
								 <option value="Shikarpur" >Shikarpur</option>
								 <option value="Sukkur" >Sukkur</option>
								 <option value="Tando Allahyar" >Tando Allahyar</option>
								 <option value="Tando Muhammad Khan" >Tando Muhammad Khan</option>
								 <option value="Tharparkar" >Tharparkar</option>
								 <option value="Thatta" >Thatta</option>
								 <option value="Umerkot" >Umerkot</option>
								</select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
									
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">onlineBloodBankManagementCenter</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
							We Donate To save Lives. We Donate For a Change!! 

						</p>
						<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vission</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									Save every possible life which we can.No one should face problems when they are already in their tough times.

								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									To spread the awareness on the benifits of Blood Donation in our Life and encourage people for Blood Donation.

								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
                               To unify the blood bank and all types of donors operations not just limited to a city. It should be multi-way connected network chain of blood banks around the cities and states. 
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>