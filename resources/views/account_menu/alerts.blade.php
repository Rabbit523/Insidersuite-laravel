@extends('layout')

@section('title','Insider Suite |  Alert')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/alerts.css') }}">
@endsection
@section('content')

<div id="site-content">	
	<div class="container">
		<div class="row">		
			<div class="col-md-12 col-sm-12">
				<h3 class="page-main-title">Alerts</h3><br>
				<div class="passenger-form">
					<form id="profile_details_form" method="post" action="{{ url('book_alert') }}">
						{{ csrf_field() }}
						<div class="profile-section">
							<div class="row">
								<div class="col-md-8">
									<h4>My custom alerts</h4>
									<br>
									<p class="para-font-style">Whether you are looking for a weekend getaway in Rome or a dream holiday in the Maldives, you can create an alert to be the first to know about a new fantastic offer.</p>
								</div>
							</div>
							<div class="row" style="padding: 15px;">
								<div class="col-md-5 col-sm-6 col-xs-12 alert-section">
									<h4>Create an alert</h4>
									<p class="para-font-style">You must fill in at least one search criteria to create an alert.</p>
									<label>Departure</label>
									<select class="form-control" required="" name="destination">
											<option value="0" disabled="" @if(Auth::User()->nationality == '') {{ 'selected' }} @endif>Select</option>
											<option value="Andorra" @if(Auth::User()->nationality == "Andorra"){{ 'selected' }} @endif>Andorra</option>
											<option value="United Arab Emirates" @if(Auth::User()->nationality == "United Arab Emirates"){{ 'selected' }} @endif>United Arab Emirates</option>
											<option value="Afghanistan" @if(Auth::User()->nationality == "Afghanistan"){{ 'selected' }} @endif>Afghanistan</option>
											<option value="Antigua and Barbuda" @if(Auth::User()->nationality == "Antigua and Barbuda"){{ 'selected' }} @endif>Antigua and Barbuda</option>
											<option value="Anguilla" @if(Auth::User()->nationality == "Anguilla"){{ 'selected' }} @endif>Anguilla</option>
											<option value="Albania" @if(Auth::User()->nationality == "Albania"){{ 'selected' }} @endif>Albania</option>
											<option value="Armenia" @if(Auth::User()->nationality == "Armenia"){{ 'selected' }} @endif>Armenia</option>
											<option value="Netherlands Antilles" @if(Auth::User()->nationality == "Netherlands Antilles"){{ 'selected' }} @endif>Netherlands Antilles</option>
											<option value="Angola" @if(Auth::User()->nationality == "Angola"){{ 'selected' }} @endif>Angola</option>
											<option value="Antarctica" @if(Auth::User()->nationality == "Antarctica"){{ 'selected' }} @endif>Antarctica</option>
											<option value="Argentina" @if(Auth::User()->nationality == "Argentina"){{ 'selected' }} @endif>Argentina</option>
											<option value="Austria" @if(Auth::User()->nationality == "Austria"){{ 'selected' }} @endif>Austria</option>
											<option value="Australia" @if(Auth::User()->nationality == "Australia"){{ 'selected' }} @endif>Australia</option>
											<option value="Aruba" @if(Auth::User()->nationality == "Aruba"){{ 'selected' }} @endif>Aruba</option>
											<option value="Azerbaijan" @if(Auth::User()->nationality == "Azerbaijan"){{ 'selected' }} @endif>Azerbaijan</option>
											<option value="Bosnia and Herzegovina" @if(Auth::User()->nationality == "Bosnia and Herzegovina"){{ 'selected' }} @endif>Bosnia and Herzegovina</option>
											<option value="Barbados" @if(Auth::User()->nationality == "Barbados"){{ 'selected' }} @endif>Barbados</option>
											<option value="Bangladesh" @if(Auth::User()->nationality == "Bangladesh"){{ 'selected' }} @endif>Bangladesh</option>
											<option value="Belgium" @if(Auth::User()->nationality == "Belgium"){{ 'selected' }} @endif>Belgium</option>
											<option value="Burkina Faso" @if(Auth::User()->nationality == "Burkina Faso"){{ 'selected' }} @endif>Burkina Faso</option>
											<option value="Bulgaria" @if(Auth::User()->nationality == "Bulgaria"){{ 'selected' }} @endif>Bulgaria</option>
											<option value="Bahrain" @if(Auth::User()->nationality == "Bahrain"){{ 'selected' }} @endif>Bahrain</option>
											<option value="Burundi" @if(Auth::User()->nationality == "Burundi"){{ 'selected' }} @endif>Burundi</option>
											<option value="Benin" @if(Auth::User()->nationality == "Benin"){{ 'selected' }} @endif>Benin</option>
											<option value="Bermuda" @if(Auth::User()->nationality == "Bermuda"){{ 'selected' }} @endif>Bermuda</option>
											<option value="Brunei" @if(Auth::User()->nationality == "Brunei"){{ 'selected' }} @endif>Brunei</option>
											<option value="Bolivia" @if(Auth::User()->nationality == "Bolivia"){{ 'selected' }} @endif>Bolivia</option>
											<option value="Brazil" @if(Auth::User()->nationality == "Brazil"){{ 'selected' }} @endif>Brazil</option>
											<option value="Bahamas" @if(Auth::User()->nationality == "Bahamas"){{ 'selected' }} @endif>Bahamas</option>
											<option value="Bhutan" @if(Auth::User()->nationality == "Bhutan"){{ 'selected' }} @endif>Bhutan</option>
											<option value="Botswana" @if(Auth::User()->nationality == "Botswana"){{ 'selected' }} @endif>Botswana</option>
											<option value="Belarus" @if(Auth::User()->nationality == "Belarus"){{ 'selected' }} @endif>Belarus</option>
											<option value="Belize" @if(Auth::User()->nationality == "Belize"){{ 'selected' }} @endif>Belize</option>
											<option value="Canada" @if(Auth::User()->nationality == "Canada"){{ 'selected' }} @endif>Canada</option>
											<option value="Democratic Republic of the Congo" @if(Auth::User()->nationality == "Democratic Republic of the Congo"){{ 'selected' }} @endif>Democratic Republic of the Congo</option>
											<option value="Central African Republic" @if(Auth::User()->nationality == "Central African Republic"){{ 'selected' }} @endif>Central African Republic</option>
											<option value="Congo" @if(Auth::User()->nationality == "Congo"){{ 'selected' }} @endif>Congo</option>
											<option value="Switzerland" @if(Auth::User()->nationality == "Switzerland"){{ 'selected' }} @endif>Switzerland</option>
											<option value="Ivory Coast" @if(Auth::User()->nationality == "Ivory Coast"){{ 'selected' }} @endif>Ivory Coast</option>
											<option value="Cook Islands" @if(Auth::User()->nationality == "Cook Islands"){{ 'selected' }} @endif>Cook Islands</option>
											<option value="Chile" @if(Auth::User()->nationality == "Chile"){{ 'selected' }} @endif>Chile</option>
											<option value="Cameroon" @if(Auth::User()->nationality == "Cameroon"){{ 'selected' }} @endif>Cameroon</option>
											<option value="China" @if(Auth::User()->nationality == "China"){{ 'selected' }} @endif>China</option>
											<option value="Colombia" @if(Auth::User()->nationality == "Colombia"){{ 'selected' }} @endif>Colombia</option>
											<option value="Costa Rica" @if(Auth::User()->nationality == "Costa Rica"){{ 'selected' }} @endif>Costa Rica</option>
											<option value="Cuba" @if(Auth::User()->nationality == "Cuba"){{ 'selected' }} @endif>Cuba</option>
											<option value="Cap-Vert" @if(Auth::User()->nationality == "Cap-Vert"){{ 'selected' }} @endif>Cap-Vert</option>
											<option value="Cyprus" @if(Auth::User()->nationality == "Cyprus"){{ 'selected' }} @endif>Cyprus</option>
											<option value="Czech Republic" @if(Auth::User()->nationality == "Czech Republic"){{ 'selected' }} @endif>Czech Republic</option>
											<option value="Dutch Antilles" @if(Auth::User()->nationality == "Dutch Antilles"){{ 'selected' }} @endif>Dutch Antilles</option>
											<option value="Germany" @if(Auth::User()->nationality == "Germany"){{ 'selected' }} @endif>Germany</option>
											<option value="Djibouti" @if(Auth::User()->nationality == "Djibouti"){{ 'selected' }} @endif>Djibouti</option>
											<option value="Denmark" @if(Auth::User()->nationality == "Denmark"){{ 'selected' }} @endif>Denmark</option>
											<option value="Dominica" @if(Auth::User()->nationality == "Dominica"){{ 'selected' }} @endif>Dominica</option>
											<option value="Dominican Republic" @if(Auth::User()->nationality == "Dominican Republic"){{ 'selected' }} @endif>Dominican Republic</option>
											<option value="Algeria" @if(Auth::User()->nationality == "Algeria"){{ 'selected' }} @endif>Algeria</option>
											<option value="Ecuador" @if(Auth::User()->nationality == "Ecuador"){{ 'selected' }} @endif>Ecuador</option>
											<option value="Estonia" @if(Auth::User()->nationality == "Estonia"){{ 'selected' }} @endif>Estonia</option>
											<option value="Egypt" @if(Auth::User()->nationality == "Egypt"){{ 'selected' }} @endif>Egypt</option>
											<option value="Eritrea" @if(Auth::User()->nationality == "Eritrea"){{ 'selected' }} @endif>Eritrea</option>
											<option value="Spain" @if(Auth::User()->nationality == "Spain"){{ 'selected' }} @endif>Spain</option>
											<option value="Ethiopia" @if(Auth::User()->nationality == "Ethiopia"){{ 'selected' }} @endif>Ethiopia</option>
											<option value="Finland" @if(Auth::User()->nationality == "Finland"){{ 'selected' }} @endif>Finland</option>
											<option value="Fiji" @if(Auth::User()->nationality == "Fiji"){{ 'selected' }} @endif>Fiji</option>
											<option value="Micronesia" @if(Auth::User()->nationality == "Micronesia"){{ 'selected' }} @endif>Micronesia</option>
											<option value="Faroe Islands" @if(Auth::User()->nationality == "Faroe Islands"){{ 'selected' }} @endif>Faroe Islands</option>
											<option value="France" @if(Auth::User()->nationality == "France"){{ 'selected' }} @endif>France</option>
											<option value="Gabon" @if(Auth::User()->nationality == "Gabon"){{ 'selected' }} @endif>Gabon</option>
											<option value="United Kingdom" @if(Auth::User()->nationality == "United Kingdom"){{ 'selected' }} @endif>United Kingdom</option>
											<option value="Grenada" @if(Auth::User()->nationality == "Grenada"){{ 'selected' }} @endif>Grenada</option>
											<option value="Georgia" @if(Auth::User()->nationality == "Georgia"){{ 'selected' }} @endif>Georgia</option>
											<option value="Ghana" @if(Auth::User()->nationality == "Ghana"){{ 'selected' }} @endif>Ghana</option>
											<option value="Gibraltar" @if(Auth::User()->nationality == "Gibraltar"){{ 'selected' }} @endif>Gibraltar</option>
											<option value="Greenland" @if(Auth::User()->nationality == "Greenland"){{ 'selected' }} @endif>Greenland</option>
											<option value="Gambia" @if(Auth::User()->nationality == "Gambia"){{ 'selected' }} @endif>Gambia</option>
											<option value="Guinea" @if(Auth::User()->nationality == "Guinea"){{ 'selected' }} @endif>Guinea</option>
											<option value="Equatorial Guinea" @if(Auth::User()->nationality == "Equatorial Guinea"){{ 'selected' }} @endif>Equatorial Guinea</option>
											<option value="Greece" @if(Auth::User()->nationality == "Greece"){{ 'selected' }} @endif>Greece</option>
											<option value="Guatemala" @if(Auth::User()->nationality == "Guatemala"){{ 'selected' }} @endif>Guatemala</option>
											<option value="Guinea-Bissau" @if(Auth::User()->nationality == "Guinea-Bissau"){{ 'selected' }} @endif>Guinea-Bissau</option>
											<option value="Guyana" @if(Auth::User()->nationality == "Guyana"){{ 'selected' }} @endif>Guyana</option>
											<option value="Honduras" @if(Auth::User()->nationality == "Honduras"){{ 'selected' }} @endif>Honduras</option>
											<option value="Croatia" @if(Auth::User()->nationality == "Croatia"){{ 'selected' }} @endif>Croatia</option>
											<option value="Haiti" @if(Auth::User()->nationality == "Haiti"){{ 'selected' }} @endif>Haiti</option>
											<option value="Hungary" @if(Auth::User()->nationality == "Hungary"){{ 'selected' }} @endif>Hungary</option>
											<option value="Indonesia" @if(Auth::User()->nationality == "Indonesia"){{ 'selected' }} @endif>Indonesia</option>
											<option value="Ireland" @if(Auth::User()->nationality == "Ireland"){{ 'selected' }} @endif>Ireland</option>
											<option value="Israel" @if(Auth::User()->nationality == "Israel"){{ 'selected' }} @endif>Israel</option>
											<option value="India" @if(Auth::User()->nationality == "India"){{ 'selected' }} @endif>India</option>
											<option value="Iraq" @if(Auth::User()->nationality == "Iraq"){{ 'selected' }} @endif>Iraq</option>
											<option value="Iran" @if(Auth::User()->nationality == "Iran"){{ 'selected' }} @endif>Iran</option>
											<option value="Iceland" @if(Auth::User()->nationality == "Iceland"){{ 'selected' }} @endif>Iceland</option>
											<option value="Italy" @if(Auth::User()->nationality == "Italy"){{ 'selected' }} @endif>Italy</option>
											<option value="Jersey" @if(Auth::User()->nationality == "Jersey"){{ 'selected' }} @endif>Jersey</option>
											<option value="Jamaica" @if(Auth::User()->nationality == "Jamaica"){{ 'selected' }} @endif>Jamaica</option>
											<option value="Jordan" @if(Auth::User()->nationality == "Jordan"){{ 'selected' }} @endif>Jordan</option>
											<option value="Japan" @if(Auth::User()->nationality == "Japan"){{ 'selected' }} @endif>Japan</option>
											<option value="Kenya" @if(Auth::User()->nationality == "Kenya"){{ 'selected' }} @endif>Kenya</option>
											<option value="Kyrgyzstan" @if(Auth::User()->nationality == "Kyrgyzstan"){{ 'selected' }} @endif>Kyrgyzstan</option>
											<option value="Cambodia" @if(Auth::User()->nationality == "Cambodia"){{ 'selected' }} @endif>Cambodia</option>
											<option value="Kiribati" @if(Auth::User()->nationality == "Kiribati"){{ 'selected' }} @endif>Kiribati</option>
											<option value="Comoros" @if(Auth::User()->nationality == "Comoros"){{ 'selected' }} @endif>Comoros</option>
											<option value="St Kitts &amp; Nevis" @if(Auth::User()->nationality == "St Kitts &amp; Nevis"){{ 'selected' }} @endif>St Kitts &amp; Nevis</option>
											<option value="North Korea" @if(Auth::User()->nationality == "North Korea"){{ 'selected' }} @endif>North Korea</option>
											<option value="South Korea" @if(Auth::User()->nationality == "South Korea"){{ 'selected' }} @endif>South Korea</option>
											<option value="Kuwait" @if(Auth::User()->nationality == "Kuwait"){{ 'selected' }} @endif>Kuwait</option>
											<option value="Cayman Island" @if(Auth::User()->nationality == "Cayman Island"){{ 'selected' }} @endif>Cayman Island</option>
											<option value="Kazakhstan" @if(Auth::User()->nationality == "Kazakhstan"){{ 'selected' }} @endif>Kazakhstan</option>
											<option value="Laos" @if(Auth::User()->nationality == "Laos"){{ 'selected' }} @endif>Laos</option>
											<option value="Lebanon" @if(Auth::User()->nationality == "Lebanon"){{ 'selected' }} @endif>Lebanon</option>
											<option value="St Lucia" @if(Auth::User()->nationality == "St Lucia"){{ 'selected' }} @endif>St Lucia</option>
											<option value="Liechtenstein" @if(Auth::User()->nationality == "Liechtenstein"){{ 'selected' }} @endif>Liechtenstein</option>
											<option value="Sri Lanka" @if(Auth::User()->nationality == "Sri Lanka"){{ 'selected' }} @endif>Sri Lanka</option>
											<option value="Liberia" @if(Auth::User()->nationality == "Liberia"){{ 'selected' }} @endif>Liberia</option>
											<option value="Lesotho" @if(Auth::User()->nationality == "Lesotho"){{ 'selected' }} @endif>Lesotho</option>
											<option value="Lithuania" @if(Auth::User()->nationality == "Lithuania"){{ 'selected' }} @endif>Lithuania</option>
											<option value="Luxembourg" @if(Auth::User()->nationality == "Luxembourg"){{ 'selected' }} @endif>Luxembourg</option>
											<option value="Latvia" @if(Auth::User()->nationality == "Latvia"){{ 'selected' }} @endif>Latvia</option>
											<option value="Libya" @if(Auth::User()->nationality == "Libya"){{ 'selected' }} @endif>Libya</option>
											<option value="Morocco" @if(Auth::User()->nationality == "Morocco"){{ 'selected' }} @endif>Morocco</option>
											<option value="Monaco" @if(Auth::User()->nationality == "Monaco"){{ 'selected' }} @endif>Monaco</option>
											<option value="Moldova" @if(Auth::User()->nationality == "Moldova"){{ 'selected' }} @endif>Moldova</option>
											<option value="Montenegro" @if(Auth::User()->nationality == "Montenegro"){{ 'selected' }} @endif>Montenegro</option>
											<option value="Saint Martin" @if(Auth::User()->nationality == "Saint Martin"){{ 'selected' }} @endif>Saint Martin</option>
											<option value="Madagascar" @if(Auth::User()->nationality == "Madagascar"){{ 'selected' }} @endif>Madagascar</option>
											<option value="Marshall Islands" @if(Auth::User()->nationality == "Marshall Islands"){{ 'selected' }} @endif>Marshall Islands</option>
											<option value="Macedonia" @if(Auth::User()->nationality == "Macedonia"){{ 'selected' }} @endif>Macedonia</option>
											<option value="Mali" @if(Auth::User()->nationality == "Mali"){{ 'selected' }} @endif>Mali</option>
											<option value="Mongolia" @if(Auth::User()->nationality == "Mongolia"){{ 'selected' }} @endif>Mongolia</option>
											<option value="Macau" @if(Auth::User()->nationality == "Macau"){{ 'selected' }} @endif>Macau</option>
											<option value="Mauritania" @if(Auth::User()->nationality == "Mauritania"){{ 'selected' }} @endif>Mauritania</option>
											<option value="Montserrat" @if(Auth::User()->nationality == "Montserrat"){{ 'selected' }} @endif>Montserrat</option>
											<option value="Malta" @if(Auth::User()->nationality == "Malta"){{ 'selected' }} @endif>Malta</option>
											<option value="Mauritius" @if(Auth::User()->nationality == "Mauritius"){{ 'selected' }} @endif>Mauritius</option>
											<option value="Maldives" @if(Auth::User()->nationality == "Maldives"){{ 'selected' }} @endif>Maldives</option>
											<option value="Malawi" @if(Auth::User()->nationality == "Malawi"){{ 'selected' }} @endif>Malawi</option>
											<option value="Mexico" @if(Auth::User()->nationality == "Mexico"){{ 'selected' }} @endif>Mexico</option>
											<option value="Malaysia" @if(Auth::User()->nationality == "Malaysia"){{ 'selected' }} @endif>Malaysia</option>
											<option value="Myanmar" @if(Auth::User()->nationality == "Myanmar"){{ 'selected' }} @endif>Myanmar</option>
											<option value="Mozambique" @if(Auth::User()->nationality == "Mozambique"){{ 'selected' }} @endif>Mozambique</option>
											<option value="Namibia" @if(Auth::User()->nationality == "Namibia"){{ 'selected' }} @endif>Namibia</option>
											<option value="Niger" @if(Auth::User()->nationality == "Niger"){{ 'selected' }} @endif>Niger</option>
											<option value="Nigeria" @if(Auth::User()->nationality == "Nigeria"){{ 'selected' }} @endif>Nigeria</option>
											<option value="Nicaragua" @if(Auth::User()->nationality == "Nicaragua"){{ 'selected' }} @endif>Nicaragua</option>
											<option value="Netherlands" @if(Auth::User()->nationality == "Netherlands"){{ 'selected' }} @endif>Netherlands</option>
											<option value="Norway" @if(Auth::User()->nationality == "Norway"){{ 'selected' }} @endif>Norway</option>
											<option value="Nepal" @if(Auth::User()->nationality == "Nepal"){{ 'selected' }} @endif>Nepal</option>
											<option value="Nauru" @if(Auth::User()->nationality == "Nauru"){{ 'selected' }} @endif>Nauru</option>
											<option value="Niue" @if(Auth::User()->nationality == "Niue"){{ 'selected' }} @endif>Niue</option>
											<option value="New Zealand" @if(Auth::User()->nationality == "New Zealand"){{ 'selected' }} @endif>New Zealand</option>
											<option value="Oman" @if(Auth::User()->nationality == "Oman"){{ 'selected' }} @endif>Oman</option>
											<option value="Panama" @if(Auth::User()->nationality == "Panama"){{ 'selected' }} @endif>Panama</option>
											<option value="Peru" @if(Auth::User()->nationality == "Peru"){{ 'selected' }} @endif>Peru</option>
											<option value="Polinesia Francese" @if(Auth::User()->nationality == "Polinesia Francese"){{ 'selected' }} @endif>Polinesia Francese</option>
											<option value="Papua New Guinea" @if(Auth::User()->nationality == "Papua New Guinea"){{ 'selected' }} @endif>Papua New Guinea</option>
											<option value="Philippines" @if(Auth::User()->nationality == "Philippines"){{ 'selected' }} @endif>Philippines</option>
											<option value="Pakistan" @if(Auth::User()->nationality == "Pakistan"){{ 'selected' }} @endif>Pakistan</option>
											<option value="Poland" @if(Auth::User()->nationality == "Poland"){{ 'selected' }} @endif>Poland</option>
											<option value="Puerto Rico" @if(Auth::User()->nationality == "Puerto Rico"){{ 'selected' }} @endif>Puerto Rico</option>
											<option value="Territoires Palestiniens" @if(Auth::User()->nationality == "Territoires Palestiniens"){{ 'selected' }} @endif>Territoires Palestiniens</option>
											<option value="Portugal" @if(Auth::User()->nationality == "Portugal"){{ 'selected' }} @endif>Portugal</option>
											<option value="Palau" @if(Auth::User()->nationality == "Palau"){{ 'selected' }} @endif>Palau</option>
											<option value="Paraguay" @if(Auth::User()->nationality == "Paraguay"){{ 'selected' }} @endif>Paraguay</option>
											<option value="Qatar" @if(Auth::User()->nationality == "Qatar"){{ 'selected' }} @endif>Qatar</option>
											<option value="Romania" @if(Auth::User()->nationality == "Romania"){{ 'selected' }} @endif>Romania</option>
											<option value="Serbia" @if(Auth::User()->nationality == "Serbia"){{ 'selected' }} @endif>Serbia</option>
											<option value="Russia" @if(Auth::User()->nationality == "Russia"){{ 'selected' }} @endif>Russia</option>
											<option value="Rwanda" @if(Auth::User()->nationality == "Rwanda"){{ 'selected' }} @endif>Rwanda</option>
											<option value="Saudi Arabia" @if(Auth::User()->nationality == "Saudi Arabia"){{ 'selected' }} @endif>Saudi Arabia</option>
											<option value="Solomon Islands" @if(Auth::User()->nationality == "Solomon Islands"){{ 'selected' }} @endif>Solomon Islands</option>
											<option value="Seychelles" @if(Auth::User()->nationality == "Seychelles"){{ 'selected' }} @endif>Seychelles</option>
											<option value="Sudan" @if(Auth::User()->nationality == "Sudan"){{ 'selected' }} @endif>Sudan</option>
											<option value="Sweden" @if(Auth::User()->nationality == "Sweden"){{ 'selected' }} @endif>Sweden</option>
											<option value="Singapore" @if(Auth::User()->nationality == "Singapore"){{ 'selected' }} @endif>Singapore</option>
											<option value="Slovenia" @if(Auth::User()->nationality == "Slovenia"){{ 'selected' }} @endif>Slovenia</option>
											<option value="Slovakia" @if(Auth::User()->nationality == "Slovakia"){{ 'selected' }} @endif>Slovakia</option>
											<option value="Sierra Leone" @if(Auth::User()->nationality == "Sierra Leone"){{ 'selected' }} @endif>Sierra Leone</option>
											<option value="Senegal" @if(Auth::User()->nationality == "Senegal"){{ 'selected' }} @endif>Senegal</option>
											<option value="Somalia" @if(Auth::User()->nationality == "Somalia"){{ 'selected' }} @endif>Somalia</option>
											<option value="Suriname" @if(Auth::User()->nationality == "Suriname"){{ 'selected' }} @endif>Suriname</option>
											<option value="Sao Tome &amp; Principe" @if(Auth::User()->nationality == "Sao Tome &amp; Principe"){{ 'selected' }} @endif>Sao Tome &amp; Principe</option>
											<option value="Salvador" @if(Auth::User()->nationality == "Salvador"){{ 'selected' }} @endif>Salvador</option>
											<option value="Syria" @if(Auth::User()->nationality == "Syria"){{ 'selected' }} @endif>Syria</option>
											<option value="Swaziland" @if(Auth::User()->nationality == "Swaziland"){{ 'selected' }} @endif>Swaziland</option>
											<option value="Chad" @if(Auth::User()->nationality == "Chad"){{ 'selected' }} @endif>Chad</option>
											<option value="Togo" @if(Auth::User()->nationality == "Togo"){{ 'selected' }} @endif>Togo</option>
											<option value="Thailand" @if(Auth::User()->nationality == "Thailand"){{ 'selected' }} @endif>Thailand</option>
											<option value="Tajikistan" @if(Auth::User()->nationality == "Tajikistan"){{ 'selected' }} @endif>Tajikistan</option>
											<option value="East Timor" @if(Auth::User()->nationality == "East Timor"){{ 'selected' }} @endif>East Timor</option>
											<option value="Turkmenistan" @if(Auth::User()->nationality == "Turkmenistan"){{ 'selected' }} @endif>Turkmenistan</option>
											<option value="Tunisia" @if(Auth::User()->nationality == "Tunisia"){{ 'selected' }} @endif>Tunisia</option>
											<option value="Tonga" @if(Auth::User()->nationality == "Tonga"){{ 'selected' }} @endif>Tonga</option>
											<option value="Turkey" @if(Auth::User()->nationality == "Turkey"){{ 'selected' }} @endif>Turkey</option>
											<option value="Trinidad &amp; Tobago" @if(Auth::User()->nationality == "Trinidad &amp; Tobago"){{ 'selected' }} @endif>Trinidad &amp; Tobago</option>
											<option value="Tuvalu" @if(Auth::User()->nationality == "Tuvalu"){{ 'selected' }} @endif>Tuvalu</option>
											<option value="Taïwan" @if(Auth::User()->nationality == "Taïwan"){{ 'selected' }} @endif>Taïwan</option>
											<option value="Tanzania" @if(Auth::User()->nationality == "Tanzania"){{ 'selected' }} @endif>Tanzania</option>
											<option value="Ukraine" @if(Auth::User()->nationality == "Ukraine"){{ 'selected' }} @endif>Ukraine</option>
											<option value="Uganda" @if(Auth::User()->nationality == "Uganda"){{ 'selected' }} @endif>Uganda</option>
											<option value="United States" @if(Auth::User()->nationality == "United States"){{ 'selected' }} @endif>United States</option>
											<option value="Uruguay" @if(Auth::User()->nationality == "Uruguay"){{ 'selected' }} @endif>Uruguay</option>
											<option value="Uzbekistan" @if(Auth::User()->nationality == "Uzbekistan"){{ 'selected' }} @endif>Uzbekistan</option>
											<option value="Vatican City" @if(Auth::User()->nationality == "Vatican City"){{ 'selected' }} @endif>Vatican City</option>
											<option value="St Vincent &amp; the Grenadines" @if(Auth::User()->nationality == "St Vincent &amp; the Grenadines"){{ 'selected' }} @endif>St Vincent &amp; the Grenadines</option>
											<option value="Venezuela" @if(Auth::User()->nationality == "Venezuela"){{ 'selected' }} @endif>Venezuela</option>
											<option value="British Virgin Islands" @if(Auth::User()->nationality == "British Virgin Islands"){{ 'selected' }} @endif>British Virgin Islands</option>
											<option value="Vietnam" @if(Auth::User()->nationality == "Vietnam"){{ 'selected' }} @endif>Vietnam</option>
											<option value="Vanuatu" @if(Auth::User()->nationality == "Vanuatu"){{ 'selected' }} @endif>Vanuatu</option>
											<option value="Samoa" @if(Auth::User()->nationality == "Samoa"){{ 'selected' }} @endif>Samoa</option>
											<option value="Kosovo" @if(Auth::User()->nationality == "Kosovo"){{ 'selected' }} @endif>Kosovo</option>
											<option value="Yemen" @if(Auth::User()->nationality == "Yemen"){{ 'selected' }} @endif>Yemen</option>
											<option value="South Africa" @if(Auth::User()->nationality == "South Africa"){{ 'selected' }} @endif>South Africa</option>
											<option value="Zambia" @if(Auth::User()->nationality == "Zambia"){{ 'selected' }} @endif>Zambia</option>
											<option value="Zimbabwe" @if(Auth::User()->nationality == "Zimbabwe"){{ 'selected' }} @endif>Zimbabwe</option>
									</select>
									<label>Departure Date</label>
									<input type="text" name="date" id="datepicker" class="form-control">										
									<br>
									<input type="submit" id="create" class="form-control btn btn-default btn-lg" value="Create an alert">
								</div>
							</div>
						</div>
					</form>
				</div>				
			</div>
		</div>
	</div>
</div>
@endsection

@section('foot')
	@parent
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var nowDate = new Date();
			var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
			$('#datepicker').datepicker({
				autoclose: true,
				startDate: today,
				format: 'yyyy-mm-dd'
			});
		});		
	</script>
@endsection