<?php 

	//include header file
	include ('include/header.php');

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate blood, Save life</h1>
						<p class="text-center">Donate blood to help others.</p>
						</div>


	    					<h1 class="text-center">Search Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
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
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
						The main aim of our project is to save lives of people by providing blood. A Blood donation search website  is developed so that users can view the information of nearby Donors. Our project is developed on two perspective i.e. patient and donor.
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
								<img src="img/vision.png" alt="Our Vision" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								The main motive of collecting blood is to supply patients who need blood for surgery or for treatment of any disease. Mobile blood bank is a mobile based project . Mobile is a portable device, so it can move easily from one place to another place easily. Hence it is the best choice for communication .
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/target.png" alt="Our Goal" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								To wipe off the scarcity of blood and ensure availability of safe and quality blood and other blood components, round the clock and throughout the year. This will lead to alleviation of human sufferings, even to the far-flung remote areas in the country.
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our mission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								In the event of an emergency, our application assists in keeping track of all recent information pertaining to the individuals who have donated blood. It will contain all of the donor's information, including name, address, phone number, blood type, and so on. The blood groups that are accessible at neighbouring blood banks may be accessed by individuals who require them.
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