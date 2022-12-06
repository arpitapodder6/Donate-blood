<?php 
  //include header file
  include ('include/header.php');


   if(isset($_POST['submit'])){

      if(isset($_POST['term']) === true){

		if(isset($_POST['name']) && !empty($_POST['name'])){
			if(preg_match('/^[A-Za-z\s]+$/', $_POST['name'])){
              $name = $_POST['name'];
			}else{
				$nameError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Only lower and upper space characters are allowed.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			  	</div>';
			}

		}else{
			$nameError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please fill the name field.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		  	</div>';
		}

		if(isset($_POST['gender']) && !empty($_POST['gender'])){
			
			$gender = $_POST['gender'];

		}else{
			$genderError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please select your gender.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		  	</div>';
		}

		if(isset($_POST['day']) && !empty($_POST['day'])){
			
			$day = $_POST['day'];

		}else{
			$dayError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please select day.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		  	</div>';
		}
		if(isset($_POST['month']) && !empty($_POST['month'])){
			
			$month = $_POST['month'];

		}else{
			$monthError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please select month.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		  	</div>';
		}

		if(isset($_POST['year']) && !empty($_POST['year'])){
			
			$year = $_POST['year'];

		}else{
			$yearError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please select year.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		   </div>';
		}

		if(isset($_POST['blood_group']) && !empty($_POST['blood_group'])){
			
			$blood_group = $_POST['blood_group'];

		}else{
			$blood_groupError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please select blood group.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		   </div>';
		}


		if(isset($_POST['city']) && !empty($_POST['city'])){
			if(preg_match('/^[A-Za-z\s]+$/', $_POST['city'])){
              $city = $_POST['city'];
			}else{
				$cityError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Only lower and upper space characters are allowed.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			    </div>';
			}

		}else{
			$cityError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please fill the city field.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		    </div>';
		}

		if(isset($_POST['contact_no']) && !empty($_POST['contact_no'])){
			if(preg_match('/\d{11}/', $_POST['contact_no'])){
              $contact_no = $_POST['contact_no'];
			}else{
				$contactError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Contact should consist of 11 characters.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			    </div>';
			}

		}else{
			$contactError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please fill the contact field.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		  	</div>';
		}

		if(isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['c_password']) && !empty($_POST['c_password'])){

			if(strlen($_POST['password'])>=6){
                if(isset($_POST['password']) == isset($_POST['c_password'])){
                  $password = $_POST['password'];
				}else{
					$passwordError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Passwords are not same.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				  	</div>';
				  
				}
			}else{

				$passwordError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>The password should consist of 6 characters.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			  	</div>';
			}
		}else{

			$passwordError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please fill password field.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		  	</div>';
		  
		  }

		  if(isset($_POST['email']) && !empty($_POST['email'])){

			$pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
			if(preg_match($pattern, $_POST['email'])){
				$check_email = $_POST['email'];
	
			 $sql = "SELECT email FROM donor WHERE email ='$check_email' ";
	
			 $result = mysqli_query($connection, $sql);
	
			 if(mysqli_num_rows($result)>0){
				$emailError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Sorry this email already exits.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			  	</div>';
			 }else{
				$email = $_POST['email'];
			 }
	
			  
			}else{
				$emailError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Please enter valid email address.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			  	</div>';
			}
	
		}else{
			$emailError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please fill email field.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		  	</div>';
		}

		if(isset($name) && isset($gender) && isset($blood_group) && isset($day) && isset($month) && isset($year) && isset($email) && isset($contact_no) && isset($city) && isset($password)){
            $DonorDOB = $year."-".$month."-".$day;
			// $password = md5($password);
            $sql = "INSERT INTO donor (name, gender, email, city, dob, contact_no, save_life_date, password, blood_group) VALUES( '$name', '$gender', '$email', '$city', '$DonorDOB', '$contact_no', '0', '$password', '$blood_group')";

			if(mysqli_query($connection, $sql)){
				
				header("Location: signin.php");
			}else{
				$submitError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data not inserted. Try again.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>';

			}

		}




	  }else{

		$termError = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Please agree with our terms and conditions.</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	  	</div>';
	  
	  }

	  

	  
   }


?>

<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.form-container{
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Donate</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
					<h3>Sign Up</h3>
                      
                    
					<hr class="red-bar">
					<?php  if(isset($termError)) echo $termError;
							 if(isset($submitSuccess)) echo $submitSuccess;
							 if(isset($submitError)) echo $submitError;

					
					?>
					
          <!-- Error Messages -->

				<form class="form-group" action="" method="post">
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control" value="<?php  if(isset($name)) echo $name; ?>">
						<?php  if(isset($nameError)) echo $nameError; ?>
					</div><!--full name-->
					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
				<?php if(isset($blood_group)) echo '<option selected="" value="'.$blood_group.'">'.$blood_group.'</option>'; ?>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
            </div><!--End form-group-->
			<?php  if(isset($blood_groupError)) echo $blood_groupError; ?>
					<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
				              		Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;" <?php if(isset($gender)) {if($gender=="Female") echo "checked";}?>
				    </div><!--gender-->
					<?php  if(isset($genderError)) echo $genderError; ?>
				    <div class="form-inline">
              <label for="name">Date of Birth</label><br>
              <select class="form-control demo-default" id="date" name="day" style="margin-bottom:10px;" required>
                <option value="">---Date---</option>
				<?php if(isset($day)) echo '<option selected="" value="'.$day.'">'.$day.'</option>'; ?>
                <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
              </select>
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                <option value="">---Month---</option>
				<?php if(isset($month)) echo '<option selected="" value="'.$month.'">'.$month.'</option>'; ?>
                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                <option value="">---Year---</option>
				<?php if(isset($year)) echo '<option selected="" value="'.$year.'">'.$year.'</option>'; ?>
                <option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option>
              </select>
            </div><!--End form-group-->
			<?php  if(isset($dayError)) echo $dayError; ?>
			<?php  if(isset($monthError)) echo $monthError; ?>
			<?php  if(isset($yearError)) echo $yearError; ?>
				    <div class="form-group">
						<label for="fullname">Email</label>
						<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control" value="<?php  if(isset($email)) echo $email; ?>">
					</div>
					<?php  if(isset($emailError)) echo $emailError; ?>
					<div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contact_no" placeholder="03********" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11" value="<?php  if(isset($contact_no)) echo $contact_no; ?>">
            </div><!--End form-group-->
			<?php  if(isset($contactError)) echo $contactError; ?>
					<div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" required>
<option value="">-- Select --</option>
	<?php if(isset($city)) echo '<option selected="" value="'.$city.'">'.$city.'</option>';?>
    <optgroup title="Alipurduar" label="&raquo;Alipurduar"></optgroup>
	<option value="Alipurduar">Alipurduar</option><option value="Alipurduar Railway Station" >Alipurduar Railway Station</option>
	<option value="Barobisha" >Barobisha</option><option value="Bholar Dabri" >Bholar Dabri</option><option value="Birpara" >Birpara</option><option value="Chechakhata" >Chechakhata</option><option value="Dakshin Rampur" >Dakshin Rampur</option><option value="Falakata" >Falakata</option><option value="Hasimara" >Hasimara</option><option value="Jagijhora Barabak" >Jagijhora Barabak</option><option value="Jaigaon" >Jaigaon</option><option value="Jateswar" >Jateswar</option><option value="Kalchini, Alipurduar" >Kalchini, Alipurduar</option><option value="Laskarpara" >Laskarpara</option><option value="Mechiabasti" >Mechiabasti</option><option value="Parangarpar" >Parangarpar</option><option value="Paschim Jitpur" >Paschim Jitpur</option><option value="Rajabhatkhawa" >Rajabhatkhawa</option><option value="Samuktala" >Samuktala</option><option value="Sisha Jumrha" >Sisha Jumrha</option><option value="Sobhaganj" >Sobhaganj</option><option value="Uttar Kamakhyaguri" >Uttar Kamakhyaguri</option><option value="Uttar Latabari" >Uttar Latabari</option><option value="Uttar Satali" >Uttar Satali</option>

	<optgroup title="BANKURA" label="&raquo;BANKURA"></optgroup><option value="Barjora" >Barjora</option><option value="Beliatore" >Beliatore</option><option value="Bishnupur" >Bishnupur</option><option value="Ghutgarya" >Ghutgarya</option><option value="Jhantipahari" >Jhantipahari</option><option value="Khatra" >Khatra</option><option value="Kotulpur" >Kotulpur</option><option value="Ledisol" >Ledisol</option><option value="Raipur" >Raipur<option value="Simlapal" >Simlapal</option><option value="Sonamukhi" >Sonamukhi</option>

	<optgroup title="BIRBHUM" label="&raquo; BIRBHUM"></optgroup><option value="Ahmedpur" >Ahmedpur</option><option value="Ambhua" >Ambhua</option><option value="Bakreswar Thermal Power Plant Township" >Bakreswar Thermal Power Plant Township</option><option value="Barua Gopalpur" >Barua Gopalpur</option><option value="Bishnupur" >Bishnupur</option><option value="Bolpur" >Bolpur</option><option value="Dubrajpur" >Dubrajpur</option><option value="Fatehpur" >Fatehpur</option><option value="Fullara" >Fullara</option><option value="Ilambazar" >Ilambazar</option><option value="Kalipur" >Kalipur</option><option value="Kankalitala" >Kankalitala</option><option value="Karidhya" >Karidhya</option><option value="Kashimnagar" >Kashimnagar</option><option value="Labhpur" >Labhpur</option><option value="Murarai" >Murarai</option><option value="Nalhati" >Nalhati</option><option value="Parota" >Parota</option><option value="Rajnagar" >Rajnagar</option><option value="Rampurhat" >Rampurhat</option><option value="Sainthia" >Sainthia</option><option value="Santiniketan" >Santiniketan</option><option value="Suri" >Suri</option><option value="Surul" >Surul</option><option value="Tarapith" >Tarapith</option>

	<optgroup title="COOCH BEHAR" label="&raquo; COOCH BEHAR"></optgroup><option value="Baisguri" >Baisguri</option><option value="Baneswar" >Baneswar</option><option value="Bhangri Pratham Khanda" >Bhangri Pratham Khanda</option><option value="Chakchaka" >Chakchaka</option><option value="Changrabandha" >Changrabandha</option><option value="Chhota Laukuthi" >Chhota Laukuthi</option><option value="Cooch Behar" >Cooch Behar</option><option value="Dewanhat" >Dewanhat</option><option value="Dhalibari" >Dhalibari</option><option value="Dinhata" >Dinhata</option><option value="Guriahati" >Guriahati</option><option value="Haldibari" >Haldibari</option><option value="Jorai" >Jorai</option><option value="Kamat Phulbari" >Kamat Phulbari</option><option value="Khagrabari" >Khagrabari</option><option value="Kharimala Khagrabari" >Kharimala Khagrabari</option><option value="Mathabhanga" >Mathabhanga</option><option value="Mekhliganj" >Mekhliganj</option><option value="Pundibari" >Pundibari</option><option value="Takagachh" >Takagachh</option><option value="Tufanganj" >Tuganganj</option>

	<optgroup title="Dakshin Dinajpur" label="&raquo; Dakshin Dinajpur"></optgroup><option value="Balurghat">Balurghat</option><option value="Buniadpur" >Buniadpur</option><option value="Chak Bhrigu" >Chak Bhrigu</option><option value="Dakra" >Dakra</option><option value="Gangarampur" >Gangarampur</option><option value="Gopalpur, Dakshin Dinajpur" >Gopalpur, Dakshin Dinajpur</option><option value="Harirampur" >Harirampur</option><option value="Joredighi" >Joredighi</option><option value="Kushkari" >Kushkari</option><option value="Par Patiram" >Par Patiram</option>

	<optgroup title="DARJEELING" label="&raquo; DARJEELING"></optgroup><option value="Badamtam Tea Garden" >Badamtam Tea Garden</option><option value="Bagdogra" >Bagdogra</option><option value="Bairatisal" >Bairatisal</option><option value="Bara Mohansingh" >Bara Mohansingh</option><option value="Bhimram" >Bhimram</option><option value="Cart Road" >Cart Road</option><option value="Chongtong Tea Garden" >Chongtong Tea Garden </option><option value="Dakshin Bagdogra" >Dakshin Bagdogra</option><option value="Darjeeling" >Darjeeling</option><option value="Dumriguri" >Dumriguri</option><option value="Geni, Siliguri" >Geni, Siliguri</option><option value="Ging Tea Garden" >Ging Tea Garden</option><option value="Jitu, Siliguri" >Jitu, Siliguri</option><option value="Kalkut, Siliguri" >Kalkut, Siliguri</option><option value="Kharibari" >Kharibari</option><option value="Kurseong" >Kurseong</option><option value="Lalman" >Lalman</option><option value="Manjarjung Tea Garden(Nagri)" >Manjarjung Tea Garden(Nagri)</option><option value="Mathapari" >Mathapari</option><option value="Mirik" >Mirik</option><option value="Rongmook Ceder Tea Garden" >Rongmook Ceder Tea Garden</option><option value="Sevoke" >Sevoke</option><option value="Shyamdhan" >Shyamdhan</option><option value="Siliguri" >Siliguri</option><option value="Singtam Tea Garden" >Singtam Tea Garden</option><option value="Sonada" >Sonada</option><option value="Sukhia Pokhri" >Sukhia Pokhri</option><option value="Tari, Siliguri" >Tari, Siliguri</option><option value="Tari, Siliguri" >Tari, Siliguri</option><option value="Tindharia" >Tindharia</option><option value="Uttar Bagdogra" >Uttar Bagdogra</option>

	<optgroup title="HOOGHLY" label="&raquo; HOOGHLY"></optgroup><option value="Alilhoja" >Alikhoja</option><option value="Amodghata" >Amodghata</option><option value="Arambagh" >Arambagh</option><option value="Arambagh Vivekanda Pally" >Arambagh Vivekanda Pally</option><option value="Badhagachhi" >Badhagachhi</option><option value="Baidyabati" >Baidyabati</option><option value="Balarambati" >Balarambati</option><option value="Bamunari" >Bammunari</option><option value="Bandel" >Bandel</option><option value="Bansberia" >Bansberia</option><option value="Bargachhia" >Bargachhia</option><option value="Baruipara" >Baruipara</option><option value="Basai, Hooghly" >Basai, Hooghly</option><option value="Batika" >Batika</option><option value="Belumilki" >Belumilki</option><option value="Bhadrakali, Hooghly" >Bhadrakali, Hooghly</option><option value="Bhareswar, Hooghly" >Bhareswar, Hooghly</option><option value="Boinchi" >Boinchi</option><option value="Borai, Hooghly" >Borai, Hooghly</option><option value="Chak Bansberia" >Chak Bansberia</option><option value="Champdani" >Champdani</option><option value="Chandannagar" >Chandannagar</option><option value="Chinsurah" >Chinsurah</option><option value="Dakshin Rajyadharpur" >Dakshin Rajyadharpur</option><option value="Dankuni" >Dankuni</option><option value="Dharmapur, Hooghly" >Dharmapur, Hooghly</option><option value="Gondalpara" >Gondalpara</option><option value="Hansghara" >Hansghara</option><option value="Hind Motor" >Hind Motor</option><option value="Hugli-Chuchura" >Hugli-Chuchura</option><option value="Jagatnagar" >Jagatnagar</option><option value="Jirat" >Jirat</option><option value="Kanaipur" >Kanaipur</option><option value="Keota, Hooghly" >Keota, Hooghly</option><option value="Kodalia" >Kodalia</option><option value="Kola, Hooghly" >Kola, Hooghly</option><option value="Kola, Hooghly" >Konnagar</option><option value="Kulihanda" >Kulihanda</option><option value="Madhusudanpur">Madhusudanpur</option><option value="Mankundu">Mankundu</option><option value="Mirdhanga" >Mirdhanga</option><option value="Nabagram, Hooghly" >Nabagram, Hooghly</option><option value="Naldanga, Hooghly" >Naldanga, Hooghly</option><option value="Namajgram" >Namajgram</option><option value="Nasibpur" >Nasibpur</option><option value="Nawapara" >Nawapara</option><option value="Pandua, Hooghly" >Pandua, Hooghly</option><option value="Purusattampur" >Purusattampur</option><option value="Raghunathpur(PS-Dankuni)" >Raghunathpur(PS-Dankuni)</option><option value="Raghunathpur(PS-Margu)" >Raghunathpur(PS-Magra)</option><option value="Rajbalhat" >Rajbalhat</option><option value="Rishra" >Rishra</option><option value="Rishra, Sreerampur Uttarpara" >Rishra, Sreerampur Uttarpara</option><option value="Sahaganj" >Sahaganj</option><option value="Saptagram" >Saptagram</option><option value="Serampore" >Serampore</option><option value="Shankhanagar" >Shankhanagar</option><option value="Sheoraphuli" >Sheoraphuli</option><option value="Simla, West Bengal">Simla, West Bengal</option><option value="Singur">Singur</option><option value="Sripur, Hooghly">Sripur, Hooghly</option><option value="Tarakeswar">Tarakeswar</option><option value="Tribeni, Hooghly" >Tribeni, Hooghly</option><option value="Uttarpara" >Uttarpara</option>

	<optgroup title="HOWRAH" label="&raquo; HOWRAH"></optgroup><option value="Amta" >Amta</option><option value="Andul" >Andul</option><option value="Ankurhati" >Ankurhati</option><option value="Argari" >Argari</option><option value="Bagnan" >Bagnan</option><option value="Balaram Pota" >Balaram Pota</option><option value="Bally, Bally-Jagachha" >Bally, Bally-Jagachha</option><option value="Bally, Howrah" >Ballu, Howrah</option><option value="Bankra" >Bankra</option><option value="Banupur" >Banupur</option><option value="Bargachia" >Bargachia</option><option value="Barunda" >Barunda</option><option value="Beldubi" >Beldubi</option><option value="Belepole" >Belepole</option><option value="Belur, West Bengal" >Belur, West Bengal</option><option value="Bhandardaha" >Bhandardaha</option><option value="Bhattanagar" >Bhattanagar</option><option value="Bikihakola" >Bikihakola</option><option value="Bipra Noapara" >Bipra Noapara</option><option value="Chakapara" >Chakapara</option><option value="Chamrail" >Chamrail</option><option value="Chandrapur, Bagnan I" >Chandrapur, Bagnan I</option><option value="Dakshin Jhapardaha" >Dakshin Jhapardaha</option><option value="Dhuilya" >Dhuilya</option><option value="Domjur" >Domjur</option><option value="Eksara" >Eksara</option><option value="Gabberia">Gabberia</option><option value="Gangadharpur, Howrah" >Gangadharpur, Howrah</option><option value="Ghoraghata Railway Station" >Ghoraghata Railway Station</option><option value="Ghusuri" >Ghusuri</option><option value="Hatgachha" >Hatgachha</option><option value="Howrah" >Howrah</option><option value="Jagacha" >Jagacha</option><option value="Jagadishpur" >Jagadishpur</option><option value="Jagatballavpur" >Jagatballavpur</option><option value="Jala Kendua" >Jala Kendua</option><option value="Jhorjat" >Jhorhat</option><option value="Kadamtala" >Kadamtala</option><option value="Kalara" >Kalara</option><option value="Kantila" >Kantila</option><option value="Karia, West Bengal" >Karia, West Bengal</option><option value="Kesabpur, India" >Kesabpur, India</option><option value="Keshabpur" >Keshabpur</option><option value="Khadinan" >Khadinan</option><option value="Khajutti" >Khajutti</option><option value="Khalia" >Khalia</option><option value="Khalor" >Khalor</option><option value="Khantora" >Khantora</option><option value="Liluah" >Liluah</option><option value="Mahiari" >Mahiari</option><option value="Makardaha" >Makardaha</option><option value="Manikpur, West Bengal" >Manikpur, West Bengal</option><option value="Mansinhapur" >Mansinhapur</option><option value="Mourigram" >Mourigram</option><option value="Munsirhat" >Munsirhat</option><option value="Nalpur" >Nalpur</option><option value="Natibpur" >Natibpur</option><option value="Naupala" >Naupala</option><option value="Nibra" >Nibra</option><option value="Panchla" >Panchla</option><option value="Panchpara" >Panchpara</option><option value="Paniara" >Paniara</option><option value="Paschim Bainan" >Paschim Bainan</option><option value="Pilkhana, West Bengal" >Pilkhana, West Bengal</option><option value="Podrah" >Podrah</option><option value="Raghudebbati" >Raghudebbati</option><option value="Ramchandrapur, West Bengal" >Ramchandrapur, West Bengal</option><option value="Ramrajatala" >Ramrajatala</option><option value="Sahapur" >Sahapur</option><option value="Salap" >Salap</option><option value="Salkia" >Salkia</option><option value="Sankrail" >Sankrail</option><option value="Santoshpur, Uluberia" >Santoshpur, Uluberia</option><option value="Santragachi" >Santragachi</option><option value="Sarenga" >Sarenga</option><option value="Shibpur">Shibpur</option><option value="Tentulkuli" >Tentulkuli</option><option value="Tikiapara" >Tikiapara</option><option value="Uluberia" >Uluberia</option><option value="Uttar Pirpur" >Uttar Pirpur</option>

	<optgroup title="JALPAIGURI" label="&raquo; JALPAIGURI"></optgroup><option value="Banarhat" >Banarhat</option><option value="Baroghoria" >Baroghoria</option><option value="Belakoba" >Belakoba</option><option value="Binnaguri" >Binnaguri</option><option value="Binnaguri, Ranjganj" >Binnaguri, Ranjganj</option><option value="Chakiabhita" >Chakiabhita</option><option value="Chalsa, India" >Chalsa, India</option><option value="Dabgram" >Dabgram</option><option value="Dakshin Khagrabari" >Dakshin Khagrabari</option><option value="Dakshin Odalbari" >Dakshin Odalbari</option><option value="Danguajhar" >Danguajhor</option><option value="Dhupguri" >Dhupguri</option><option value="Gairkata" >Gairkata</option><option value="Jalpaiguri" >Jalpaiguri</option><option value="Kharia, Jalpaiguri" >Kharia, Jalpaiguri</option><option value="Lataguri" >Lataguri</option><option value="Mainaguri" >Mainaguri</option><option value="Malbazar" >Malbazar</option><option value="Mangalbari" >Mangalbari</option><option value="Matialihat" >Matialihat</option><option value="Nathuahat" >Nathuahat</option><option value="Odlabari" >Odlabari</option><option value="Phulbari, Jalpaiguri" >Phulbari, Jalpaiguri</option><option value="Siliguri" >Siliguri</option><option value="Telipara Tea Garden" >Telipara Tea Garden</option>

	<optgroup title="JHARGRAM" label="&raquo; JHARGRAM"></optgroup><option value="Jhargram" >Jhargram</option><option value="Silda, West Bengal" >Silda, West Bengal</option>
	<optgroup title="KOLKATA" label="&raquo; KOLKATA"></optgroup><option value="Kolkata" >Kolkata</option>
	<optgroup title="KALIMPONG" label="&raquo; KALIMPONG"></optgroup><option value="Dungra, Kalimpong" >Dungra, Kalimpong</option><option value="Kalimpong" >Kalimpong</option><option value="Kumai Tea Garden">Kumai Tea Garden</option><option value="Samabiyong Tea Garden">Samabiyong Tea Garden</option>

	<optgroup title="MALDA" label="&raquo; MALDA"></optionx><option value="Aiho" >Aiho</option><option value="Alipur, Malda" >Alipur, Malda</option><option value="Bagbari" >Bagbari</option><option value="Baksinagar">Baksinagar</option><option value="Baliadanga" >Baliadanga</option><option value="Bamangram" >Bamangram</option><option value="Bandhail" >Bandhail</option><option value="Bara Suzapur" >Bara Suzapur</option><option value="Birodhi" >Birodhi</option><option value="Chanchal" >Chanchal</option><option value="Chaspara" >Chaspara</option><option value="Chhatinamor" >Chhatinamor</option><option value="Chhota Suzapur" >Chhota Suzapur</option><option value="Gauda(City)" >Gauda(City)</option><option value="Gazole Town" >Gazole Town</option><option value="Jadupur" >Jadupur</option><option value="Jagannathpur, Malda" >Jagannathpur, Malda</option><option value="Jalalpur, Malda" >Jalalpur, Malda</option><option value="Jhangra, Malda" >Jhangra, Malda</option><option value="Kachu Pukur" >Kachu Pukur</option><option value="Kaliachak" >Kaliachak</option><option value="Karari Chandpur" >Karari Chandpur</option><option value="Kendua, West Bengal" >Kendua, West Bengal</option><option value="Krishnapur, Malda" >Krishnapur, Malda</option><option value="Malda, West Bengal" >Malda, West Bengal </option><option value="Mangal Bari" >Mangal Bari</option><option value="Milki, West Bengal" >Milki, West Bengal</option><option value="Nazipur, Malda" >Nazipur, Malda</option><option value="Old Malda" >Old Malda</option><option value="Rangabhita" >Rangabhita</option><option value="Sahapur, Malda" >Sahapur, Malda</option><option value="Silampur" >Silampur</option><option value="Sonatala, Malda">Sonatala, Malda</option><option value="Sujapur, Malda">Sujapur, Malda</option>
	<optgroup title="PASCHIM MEDINIPUR" label="&raquo; PASCHIM MEDINIPUR"></optgroup></option><option value="Amlagora" >Amlagora</option><option value="Balichak" >Balichak</option><option value="Chandrakona" >Chandrakona</option><option value="Chaulia" >Chaulia</option><option value="Deuli, India" >Deuli, India</option><option value="Dwarigeria" >Dwarigeria</option><option value="Garbeta" >Garbeta</option><option value="Ghatal" >Ghatal</option><option value="Hijli" >Hijli</option><option value="Kalaikunda" >Kalaikunda</option><option value="Kharagpur" >Kharagpur</option><option value="Kharar" >Kharar</option><option value="Khirpai" >Khirpai</option><option value="Midnapore" >Midnapore</option><option value="Nabakola" >Nabakola</option><option value="Nekurseni" >Nekurseni</option><option value="Ramjibanpur" >Ramjibanpur</option>
	<optgroup title="NORTH 24 PARGANAS" label="&raquo; NORTH 24 PARGANAS"></optgroup>
	<option value="Agarpara" >Agarpara</option><option value="Anarbaria" >Anarbaria</option><option value="Ariadaha" >Ariadaha</option><option value="Babanpur" >Babanpur</option><option value="Baduria" >Baduria</option><option value="Baguiati" >Baguiati</option><option value="Balibhara" >Balibhara</option><option value="Balihati" >Balihati</option><option value="Bongaon" >Bongaon</option><option value="Baranagar" >Baranagar</option><option value="Barasat" >Barasat</option><option value="Barrackpore" >Barrackpore</option><option value="Basirhat" >Basirhat</option><option value="Belghoria" >Belghoria</option><option value="Bhatpara" >Bhatpara</option><option value="Bidhannagar" >Bidhannagar</option><option value="Bijpur, North 24 Parganas " >Bijpur, NOrth 24 Parganas</option><option value="Birati" >Birati</option><option value="Bishnupur, North 24 Parganas" >Bishnupur, North 24 Parganas</option><option value="Chak Barbaria" >Chak Barbaria</option><option value="Chandpara" >Chandpara</option><option value="Chandpur, Ghola" >Chnadpur, Ghola</option><option value="Chhekati" >Chhekati</option>
	<option value="Dakshineswar" >Dakshineswar</option><option value="Dandirhat" >Dandirhat</option><option value="Deara" >Deara</option><option value="Deora, North 24 Parganas" >Deora, North 24 Parganas</option><option value="Deulia" >Deulia</option><option value="Dhakuria, North 24 Parganas" >Dhakuria, North 24 Parganas</option><option value="Digha, NOrth 24 Parganas" >Digha, North 24 Parganas</option><option value="Dum Dum" >Dum Dum</option><option value="Dum Dum Park" >Dum Dum Park</option><option value="Dunlop, Kolkata" >Dunlop, Kolkata</option><option value="Durganar, Kolkata" >Durganar, Kolkata</option><option value="Duttapukur" >Duttapukur</option><option value="Gangapur, North 24 Parganas" >Gangapur, North 24 Parganas</option><option value="Gobardanga">Gobardanga</option><option value="Guma">Guma</option><option value="Habra" >Habra</option><option value="Halisahar" >Halisahar</option><option value="Ichapore" >Ichapore</option><option value="Jagatdal" >Jagatdal</option><option value="Kanchrapara" >Kanchrapara</option><option value="Kestopur" >Kestopur</option><option value="Lake Town, Kolkata" >Lake Town, Kolkata</option><option value="Madhyamgram" >Madhyamgram</option><option value="Maslandapur" >Maslandapuro</option><option value="Nagerbazar" >Nagarbazar</option><option value="Naihati" >Naihati</option><option value="New Town" >New Town</option><option value="Palta" >Palta</option>
	<optgroup title="SOUTH 24 PARGANAS" label="&raquo; SOUTH 24 PARGANAS"></optgroup><option value="Bantala" >Bantala</option><option value="Baruipur" >Baruipur</option><option value="Canning" >Canning</option><option value="Diamond Harbour" >Diamond Harbour</option><option value="Park Circus" >Park Circus</option><option value="Park Street" >Park Street</option><option value="Sonarpur" >Sonarpur</option></select>
            </div><!--city end-->
			<?php  if(isset($cityError)) echo $cityError; ?>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" value="" placeholder="Password" class="form-control" required pattern=".{6,}">
            </div><!--End form-group-->
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern=".{6,}">
            </div><!--End form-group-->
			<?php  if(isset($passwordError)) echo $passwordError; ?>
            <div class="form-inline">
              <input type="checkbox" checked="" name="term" value="true" required style="margin-left:10px;">
              <span style="margin-left:10px;"><b>I agree to donate my blood and show my Name, Contact Nos. and E-Mail in Blood donors List</b></span>
            </div><!--End form-group-->
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">Sign Up</button>
					</div>
				</form>
		</div>
	</div>
</div>

<?php 
  //include footer file
  include ('include/footer.php');
?>





