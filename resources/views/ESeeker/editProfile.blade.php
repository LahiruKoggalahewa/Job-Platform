<!-- Sets header files-->
@extends('layouts.main')

<!-- Sets title -->
@section('title')
    <title>Edit Profile</title>
@endsection

<!-- gets navbar -->
@extends('layouts.eSeeker')

<!-- Sets dashboard element active -->
@section('workspace')
    class="active"
@endsection

<!-- Sets dashboard element active -->
@section('profile')
    class="active"
@endsection

@section('content')

    <div class="container down-both-nav">
        <div class="col-lg-2">
        </div>

        <div class="col-lg-8">
            @foreach($eSeeker as $seeker)
                @foreach($users as $user)
            <form method="POST" action="{{'/ESId='.Auth::user()->id.'/editDetails'}}">
                {{ csrf_field() }}
                <div class="panel panel-default container-fluid">
                    <div class="panel-heading row">
                        <h3> Personal Information </h3>
                    </div>
                    <div class="panel-body" id="personal">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$user->first_name}} {{$user->last_name}}">
                        </div>
                        <div class="form-group">
                            <label for="datepicker">Birthdate:</label>
                            <input type="text" class="form-control" id="datepicker" name="birthdate"  required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <select class="form-control" id="gender" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nationality">Nationality:</label>
                            <input type="text" class="form-control" id="nationality"  name="nationality" value="{{$seeker->nationality}}">
                        </div>
                        <div class="form-group">
                            <label for="country">Resident country:</label>
                            <select class="form-control" id="country" name="country">
                                <option value="{{$seeker->country}}">{{$seeker->country}}</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antartica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo">Congo, the Democratic Republic of the</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                <option value="Croatia">Croatia (Hrvatska)</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="France Metropolitan">France, Metropolitan</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                <option value="Holy See">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran (Islamic Republic of)</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                <option value="Korea">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia, Federated States of</option>
                                <option value="Moldova">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint LUCIA">Saint LUCIA</option>
                                <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                <option value="Span">Spain</option>
                                <option value="SriLanka" selected="selected">Sri Lanka</option>
                                <option value="St. Helena">St. Helena</option>
                                <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syrian Arab Republic</option>
                                <option value="Taiwan">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Viet Nam</option>
                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Yugoslavia">Yugoslavia</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="marital">Marital Status:</label>
                            <select class="form-control" id="marital" name="marital">
                                <option value="{{$seeker->marital_status}}">{{$seeker->marital_status}}</option>
                                <option value="Married">Married</option>
                                <option value="Unmarried">Unmarried</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default container-fluid">
                    <div class="panel-heading row">
                        <h3> Contact Info </h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="usr">Email:</label>
                            <input type="email" class="form-control" value="{{$user->email}}" id="inputEmail" name="email" data-error="Please enter a valid Email">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="telephoner">Telephone:</label>
                            <input type="text" class="form-control" id="telephone" name="telephone" maxlength="10" value="{{$seeker->mobile_number}}">
                        </div>
                        <div class="form-group">
                            <label for="address1">Address Line 1:</label>
                            <input type="text" class="form-control" id="address1"  name="address1" value="{{$seeker->address_1}}">
                        </div>
                        <div class="form-group">
                            <label for="address2">Address Line 2:</label>
                            <input type="text" class="form-control" id="address2"  name="address2" value="{{$seeker->address_2}}">
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city"  name="city" value="{{$seeker->city}}">
                        </div>

                        <div class="form-group">
                            <label for="district">District/Province</label>
                            <input type="text" class="form-control" id="district"  name="district" value="{{$seeker->district}}">
                        </div>
                        <div class="form-group">
                            <label for="zip">ZIP code:</label>
                            <input type="text" class="form-control" id="zip"  name="zip" value="{{$seeker->zip}}">
                        </div>
                        <div class="form-group">
                            <label for="web">Website:</label>
                            <input type="text" class="form-control" id="web"  name="web" value="{{$seeker->web}}">
                        </div>
                    </div>
                </div>

                <div class="panel panel-default container-fluid">
                    <div class="panel-heading row">
                        <h3> Target Job </h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="target">Target job title:</label>
                            <input type="text" class="form-control" id="target"  name="target" value="{{$seeker->target}}">
                        </div>

                        <div class="form-group">
                            <label for="telephoner">Job Role:</label>
                            <select class="form-control" id="Role" name="Role">
                                <option value="{{$seeker->role}}">{{$seeker->role}}</option>
                                <option value="Administration">Administration</option>
                                <option value="Art/Design/Creative">Art/Design/Creative</option>
                                <option value="Customer Service">Customer Service</option>
                                <option value="Education/Training">Education/Training</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Accounting/Banking/Finance">Accounting/Banking/Finance</option>
                                <option value="Human Resources/Personnel">Human Resources/Personnel</option>
                                <option value="Law/Legal">Law/Legal</option>
                                <option value="Logistics">Logistics</option>
                                <option value="Management">Management</option>
                                <option value="Marketing/PR">Marketing/PR</option>
                                <option value="Healthcare/Medical">Healthcare/Medical</option>
                                <option value="Purchasing/Procurement">Purchasing/Procurement</option>
                                <option value="Quality Control">Quality Control</option>
                                <option value="Research">Research</option>
                                <option value="Safety">Safety</option>
                                <option value="Sales">Sales</option>
                                <option value="Secretarial">Secretarial</option>
                                <option value="Support Services">Support Services</option>
                                <option value="Technology/IT">Technology/IT</option>
                                <option value="Writing/Editing">Writing/Editing</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="level">Career Level:</label>
                            <input type="text" class="form-control" id="level"  name="level" value="{{$seeker->career_level}}">
                        </div>
                        <div class="form-group">
                            <label for="location">Target Job Location:</label>
                            <input type="text" class="form-control" id="location"  name="location" value="{{$seeker->target_location}}">
                        </div>
                        <div class="form-group">
                            <label for="objective">Career Objective:</label>
                            <input type="text" class="form-control" id="objective"  name="objective" value="{{$seeker->objective}}">
                        </div>
                        <div class="form-group">
                            <label for="web">Target Industry:</label>
                            <select class="form-control" id="Industry" name="Industry">
                                <option value="{{$seeker->industry}}">{{$seeker->industry}}</option>
                                <option value="Accounting/Auditing">Accounting/Auditing</option>
                                <option value="Administration">Administration</option>
                                <option value="Advertising">Advertising</option>
                                <option value="Aerospace and Defense">Aerospace and Defense</option>
                                <option value="Agriculture/Forestry/Fishing">Agriculture/Forestry/Fishing</option>
                                <option value="Airlines/Aviation">Airlines/Aviation</option>
                                <option value="Architecture">Architecture</option>
                                <option value="Arts/Entertainment/and Media">Arts/Entertainment/and Media</option>
                                <option value="Automotive">Automotive</option>
                                <option value="Aviation/Marine Refueling">Aviation/Marine Refueling</option>
                                <option value="Banking">Banking</option>
                                <option value="Biotechnology">Biotechnology</option>
                                <option value="Business Support">Business Support</option>
                                <option value="Catering/Food Services/Restaurants">Catering/Food Services/Restaurants</option>
                                <option value="Community/Social Services/and Nonprofit">Community/Social Services/and Nonprofit</option>
                                <option value="Computer/Hardware">Computer/Hardware</option>
                                <option value="Computer/Software">Computer/Software</option>
                                <option value="Construction">Construction</option>
                                <option value="Construction/Civil Engineering">Construction/Civil Engineering</option>
                                <option value="Consulting Services">Consulting Services</option>
                                <option value="Contracts/Purchasing">Contracts/Purchasing</option>
                                <option value="Customer Service">Customer Service</option>
                                <option value="Distributions and Logistics">Distributions and Logistics</option>
                                <option value="Education, Training, and Library">Education, Training, and Library</option>
                                <option value="Employment Placement Agencies/Recruiting">Employment Placement Agencies/Recruiting</option>
                                <option value="Energy">Energy</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="FMCG">FMCG</option>
                                <option value="Facilities Management">Facilities Management</option>
                                <option value="Fashion Design">Fashion Design</option>
                                <option value="Finance/Economics">Finance/Economics</option>
                                <option value="Financial Services">Financial Services</option>
                                <option value="Food Production">Food Production</option>
                                <option value="Government Sector">Government Sector</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Healthcare, Practitioner and Technician">Healthcare, Practitioner and Technician</option>
                                <option value="Healthcare, other">Healthcare, other</option>
                                <option value="Hospitality/Tourism/Travel">Hospitality/Tourism/Travel</option>
                                <option value="Human Resources">Human Resources</option>
                                <option value="Industrial">Industrial</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Installation, Maintenance, and Repair">Installation, Maintenance, and Repair</option>
                                <option value="Insurance">Insurance</option>
                                <option value="Interior design">Interior design</option>
                                <option value="Internet/E-commerce">Internet/E-commerce</option>
                                <option value="Islamic Banking">Islamic Banking</option>
                                <option value="Journalism">Journalism</option>
                                <option value="LPG Bottling">LPG Bottling</option>
                                <option value="Lboratory/QC">Lboratory/QC</option>
                                <option value="Law Enforcement/Security Services">Law Enforcement/Security Services</option>
                                <option value="Legal">Legal</option>
                                <option value="Lubricants/Greases Blending">Lubricants/Greases Blending</option>
                                <option value="Management">Management</option>
                                <option value="Manufacturing">Manufacturing</option>
                                <option value="Manufacturing and Production">Manufacturing and Production</option>
                                <option value="Marine Services">Marine Services</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Mechanical">Mechanical</option>
                                <option value="Medical/Hospital">Medical/Hospital</option>
                                <option value="Merchandising">Merchandising</option>
                                <option value="Military">Military</option>
                                <option value="Mining">Mining</option>
                                <option value="Modeling">Modeling</option>
                                <option value="Natural Gas Distribution">Natural Gas Distribution</option>
                                <option value="Nursing">Nursing</option>
                                <option value="Oil/Gas">Oil/Gas</option>
                                <option value="Other">Other</option>
                                <option value="Personal Care and Service">Personal Care and Service</option>
                                <option value="Petrochemicals">Petrochemicals</option>
                                <option value="Pharmaceutical">Pharmaceutical</option>
                                <option value="Photography">Photography</option>
                                <option value="Planning">Planning</option>
                                <option value="Public Relations">Public Relations</option>
                                <option value="Publishing">Publishing</option>
                                <option value="Quantity Survey">Quantity Survey</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Retail/Wholesale">Retail/Wholesale</option>
                                <option value="Safety/Environment">Safety/Environment</option>
                                <option value="Sales">Sales</option>
                                <option value="Science">Science</option>
                                <option value="Secretarial">Secretarial</option>
                                <option value="Security">Security</option>
                                <option value="Shipping">Shipping</option>
                                <option value="Sports and Recreation">Sports and Recreation</option>
                                <option value="Support Services">Support Services</option>
                                <option value="Technical/Maintenance">Technical/Maintenance</option>
                                <option value="Telecommunications">Telecommunications</option>
                                <option value="Telemarketing">Telemarketing</option>
                                <option value="Textiles">Textiles</option>
                                <option value="Translation">Translation</option>
                                <option value="Transportation">Transportation</option>
                                <option value="Utilities">Utilities</option>
                                <option value="Vehicle Inspection">Vehicle Inspection</option>
                                <option value="Warehousing">Warehousing</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="type">Employment Type: </label>
                            <input type="text" class="form-control" id="type"  name="type" value="{{$seeker->type}}">
                        </div>
                    </div>
                </div>

                <div class="panel panel-default container-fluid">
                    <div class="panel-heading row">
                        <h3> Preferences </h3>
                    </div>
                    <div class="panel-body">
                        @foreach($ESSkills as $skill)
                        <div class="form-group">
                            <label for="preference1">Preference No. 1:</label>
                            <input class="form-control" list="preferences" id="preference1" name="preference1" required>
                            <datalist id="preferences">
                                <option value="{{$skill->skill1}}" selected="selected">{{$skill->skill1}}</option>
                                <option value="Accounting/Auditing">Accounting/Auditing</option>
                                <option value="Administration">Administration</option>
                                <option value="Advertising">Advertising</option>
                                <option value="Aerospace and Defense">Aerospace and Defense</option>
                                <option value="Agriculture/Forestry/Fishing">Agriculture/Forestry/Fishing</option>
                                <option value="Airlines/Aviation">Airlines/Aviation</option>
                                <option value="Architecture">Architecture</option>
                                <option value="Arts/Entertainment/and Media">Arts/Entertainment/and Media</option>
                                <option value="Automotive">Automotive</option>
                                <option value="Aviation/Marine Refueling">Aviation/Marine Refueling</option>
                                <option value="Banking">Banking</option>
                                <option value="Biotechnology">Biotechnology</option>
                                <option value="Business Support">Business Support</option>
                                <option value="Catering/Food Services/Restaurants">Catering/Food Services/Restaurants</option>
                                <option value="Community/Social Services/and Nonprofit">Community/Social Services/and Nonprofit</option>
                                <option value="Computer/Hardware">Computer/Hardware</option>
                                <option value="Computer/Software">Computer/Software</option>
                                <option value="Construction">Construction</option>
                                <option value="Construction/Civil Engineering">Construction/Civil Engineering</option>
                                <option value="Consulting Services">Consulting Services</option>
                                <option value="Contracts/Purchasing">Contracts/Purchasing</option>
                                <option value="Customer Service">Customer Service</option>
                                <option value="Distributions and Logistics">Distributions and Logistics</option>
                                <option value="Education, Training, and Library">Education, Training, and Library</option>
                                <option value="Employment Placement Agencies/Recruiting">Employment Placement Agencies/Recruiting</option>
                                <option value="Energy">Energy</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="FMCG">FMCG</option>
                                <option value="Facilities Management">Facilities Management</option>
                                <option value="Fashion Design">Fashion Design</option>
                                <option value="Finance/Economics">Finance/Economics</option>
                                <option value="Financial Services">Financial Services</option>
                                <option value="Food Production">Food Production</option>
                                <option value="Government Sector">Government Sector</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Healthcare, Practitioner and Technician">Healthcare, Practitioner and Technician</option>
                                <option value="Healthcare, other">Healthcare, other</option>
                                <option value="Hospitality/Tourism/Travel">Hospitality/Tourism/Travel</option>
                                <option value="Human Resources">Human Resources</option>
                                <option value="Industrial">Industrial</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Installation, Maintenance, and Repair">Installation, Maintenance, and Repair</option>
                                <option value="Insurance">Insurance</option>
                                <option value="Interior design">Interior design</option>
                                <option value="Internet/E-commerce">Internet/E-commerce</option>
                                <option value="Journalism">Journalism</option>
                                <option value="LPG Bottling">LPG Bottling</option>
                                <option value="Laboratory/QC">Laboratory/QC</option>
                                <option value="Law Enforcement/Security Services">Law Enforcement/Security Services</option>
                                <option value="Legal">Legal</option>
                                <option value="Lubricants/Greases Blending">Lubricants/Greases Blending</option>
                                <option value="Management">Management</option>
                                <option value="Manufacturing">Manufacturing</option>
                                <option value="Manufacturing and Production">Manufacturing and Production</option>
                                <option value="Marine Services">Marine Services</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Mechanical">Mechanical</option>
                                <option value="Medical/Hospital">Medical/Hospital</option>
                                <option value="Merchandising">Merchandising</option>
                                <option value="Military">Military</option>
                                <option value="Mining">Mining</option>
                                <option value="Modeling">Modeling</option>
                                <option value="Oil/Gas">Oil/Gas</option>
                                <option value="Personal Care and Service">Personal Care and Service</option>
                                <option value="Petrochemicals">Petrochemicals</option>
                                <option value="Pharmaceutical">Pharmaceutical</option>
                                <option value="Photography">Photography</option>
                                <option value="Planning">Planning</option>
                                <option value="Public Relations">Public Relations</option>
                                <option value="Publishing">Publishing</option>
                                <option value="Quantity Survey">Quantity Survey</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Retail/Wholesale">Retail/Wholesale</option>
                                <option value="Safety/Environment">Safety/Environment</option>
                                <option value="Sales">Sales</option>
                                <option value="Science">Science</option>
                                <option value="Secretarial">Secretarial</option>
                                <option value="Security">Security</option>
                                <option value="Shipping">Shipping</option>
                                <option value="Sports and Recreation">Sports and Recreation</option>
                                <option value="Support Services">Support Services</option>
                                <option value="Technical/Maintenance">Technical/Maintenance</option>
                                <option value="Telecommunications">Telecommunications</option>
                                <option value="Telemarketing">Telemarketing</option>
                                <option value="Textiles">Textiles</option>
                                <option value="Translation">Translation</option>
                                <option value="Transportation">Transportation</option>
                                <option value="Utilities">Utilities</option>
                                <option value="Vehicle Inspection">Vehicle Inspection</option>
                                <option value="Warehousing">Warehousing</option>
                            </datalist>
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="preference2">Preference No. 2:</label>
                            <input class="form-control" list="preferences" id="preference2" name="preference2" required>
                            <datalist id="preferences">
                                <option value="{{$skill->skill2}}" selected="selected">{{$skill->skill2}}</option>
                                <option value="Accounting/Auditing">Accounting/Auditing</option>
                                <option value="Administration">Administration</option>
                                <option value="Advertising">Advertising</option>
                                <option value="Aerospace and Defense">Aerospace and Defense</option>
                                <option value="Agriculture/Forestry/Fishing">Agriculture/Forestry/Fishing</option>
                                <option value="Airlines/Aviation">Airlines/Aviation</option>
                                <option value="Architecture">Architecture</option>
                                <option value="Arts/Entertainment/and Media">Arts/Entertainment/and Media</option>
                                <option value="Automotive">Automotive</option>
                                <option value="Aviation/Marine Refueling">Aviation/Marine Refueling</option>
                                <option value="Banking">Banking</option>
                                <option value="Biotechnology">Biotechnology</option>
                                <option value="Business Support">Business Support</option>
                                <option value="Catering/Food Services/Restaurants">Catering/Food Services/Restaurants</option>
                                <option value="Community/Social Services/and Nonprofit">Community/Social Services/and Nonprofit</option>
                                <option value="Computer/Hardware">Computer/Hardware</option>
                                <option value="Computer/Software">Computer/Software</option>
                                <option value="Construction">Construction</option>
                                <option value="Construction/Civil Engineering">Construction/Civil Engineering</option>
                                <option value="Consulting Services">Consulting Services</option>
                                <option value="Contracts/Purchasing">Contracts/Purchasing</option>
                                <option value="Customer Service">Customer Service</option>
                                <option value="Distributions and Logistics">Distributions and Logistics</option>
                                <option value="Education, Training, and Library">Education, Training, and Library</option>
                                <option value="Employment Placement Agencies/Recruiting">Employment Placement Agencies/Recruiting</option>
                                <option value="Energy">Energy</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="FMCG">FMCG</option>
                                <option value="Facilities Management">Facilities Management</option>
                                <option value="Fashion Design">Fashion Design</option>
                                <option value="Finance/Economics">Finance/Economics</option>
                                <option value="Financial Services">Financial Services</option>
                                <option value="Food Production">Food Production</option>
                                <option value="Government Sector">Government Sector</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Healthcare, Practitioner and Technician">Healthcare, Practitioner and Technician</option>
                                <option value="Healthcare, other">Healthcare, other</option>
                                <option value="Hospitality/Tourism/Travel">Hospitality/Tourism/Travel</option>
                                <option value="Human Resources">Human Resources</option>
                                <option value="Industrial">Industrial</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Installation, Maintenance, and Repair">Installation, Maintenance, and Repair</option>
                                <option value="Insurance">Insurance</option>
                                <option value="Interior design">Interior design</option>
                                <option value="Internet/E-commerce">Internet/E-commerce</option>
                                <option value="Journalism">Journalism</option>
                                <option value="LPG Bottling">LPG Bottling</option>
                                <option value="Laboratory/QC">Laboratory/QC</option>
                                <option value="Law Enforcement/Security Services">Law Enforcement/Security Services</option>
                                <option value="Legal">Legal</option>
                                <option value="Lubricants/Greases Blending">Lubricants/Greases Blending</option>
                                <option value="Management">Management</option>
                                <option value="Manufacturing">Manufacturing</option>
                                <option value="Manufacturing and Production">Manufacturing and Production</option>
                                <option value="Marine Services">Marine Services</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Mechanical">Mechanical</option>
                                <option value="Medical/Hospital">Medical/Hospital</option>
                                <option value="Merchandising">Merchandising</option>
                                <option value="Military">Military</option>
                                <option value="Mining">Mining</option>
                                <option value="Modeling">Modeling</option>
                                <option value="Oil/Gas">Oil/Gas</option>
                                <option value="Personal Care and Service">Personal Care and Service</option>
                                <option value="Petrochemicals">Petrochemicals</option>
                                <option value="Pharmaceutical">Pharmaceutical</option>
                                <option value="Photography">Photography</option>
                                <option value="Planning">Planning</option>
                                <option value="Public Relations">Public Relations</option>
                                <option value="Publishing">Publishing</option>
                                <option value="Quantity Survey">Quantity Survey</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Retail/Wholesale">Retail/Wholesale</option>
                                <option value="Safety/Environment">Safety/Environment</option>
                                <option value="Sales">Sales</option>
                                <option value="Science">Science</option>
                                <option value="Secretarial">Secretarial</option>
                                <option value="Security">Security</option>
                                <option value="Shipping">Shipping</option>
                                <option value="Sports and Recreation">Sports and Recreation</option>
                                <option value="Support Services">Support Services</option>
                                <option value="Technical/Maintenance">Technical/Maintenance</option>
                                <option value="Telecommunications">Telecommunications</option>
                                <option value="Telemarketing">Telemarketing</option>
                                <option value="Textiles">Textiles</option>
                                <option value="Translation">Translation</option>
                                <option value="Transportation">Transportation</option>
                                <option value="Utilities">Utilities</option>
                                <option value="Vehicle Inspection">Vehicle Inspection</option>
                                <option value="Warehousing">Warehousing</option>
                            </datalist>
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="preference3">Preference No. 3:</label>
                            <input class="form-control" list="preferences" id="preference3" name="preference3" required>
                            <datalist id="preferences">
                                <option value="{{$skill->skill3}}" selected="selected">{{$skill->skill3}}</option>
                                <option value="Accounting/Auditing">Accounting/Auditing</option>
                                <option value="Administration">Administration</option>
                                <option value="Advertising">Advertising</option>
                                <option value="Aerospace and Defense">Aerospace and Defense</option>
                                <option value="Agriculture/Forestry/Fishing">Agriculture/Forestry/Fishing</option>
                                <option value="Airlines/Aviation">Airlines/Aviation</option>
                                <option value="Architecture">Architecture</option>
                                <option value="Arts/Entertainment/and Media">Arts/Entertainment/and Media</option>
                                <option value="Automotive">Automotive</option>
                                <option value="Aviation/Marine Refueling">Aviation/Marine Refueling</option>
                                <option value="Banking">Banking</option>
                                <option value="Biotechnology">Biotechnology</option>
                                <option value="Business Support">Business Support</option>
                                <option value="Catering/Food Services/Restaurants">Catering/Food Services/Restaurants</option>
                                <option value="Community/Social Services/and Nonprofit">Community/Social Services/and Nonprofit</option>
                                <option value="Computer/Hardware">Computer/Hardware</option>
                                <option value="Computer/Software">Computer/Software</option>
                                <option value="Construction">Construction</option>
                                <option value="Construction/Civil Engineering">Construction/Civil Engineering</option>
                                <option value="Consulting Services">Consulting Services</option>
                                <option value="Contracts/Purchasing">Contracts/Purchasing</option>
                                <option value="Customer Service">Customer Service</option>
                                <option value="Distributions and Logistics">Distributions and Logistics</option>
                                <option value="Education, Training, and Library">Education, Training, and Library</option>
                                <option value="Employment Placement Agencies/Recruiting">Employment Placement Agencies/Recruiting</option>
                                <option value="Energy">Energy</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="FMCG">FMCG</option>
                                <option value="Facilities Management">Facilities Management</option>
                                <option value="Fashion Design">Fashion Design</option>
                                <option value="Finance/Economics">Finance/Economics</option>
                                <option value="Financial Services">Financial Services</option>
                                <option value="Food Production">Food Production</option>
                                <option value="Government Sector">Government Sector</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Healthcare, Practitioner and Technician">Healthcare, Practitioner and Technician</option>
                                <option value="Healthcare, other">Healthcare, other</option>
                                <option value="Hospitality/Tourism/Travel">Hospitality/Tourism/Travel</option>
                                <option value="Human Resources">Human Resources</option>
                                <option value="Industrial">Industrial</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Installation, Maintenance, and Repair">Installation, Maintenance, and Repair</option>
                                <option value="Insurance">Insurance</option>
                                <option value="Interior design">Interior design</option>
                                <option value="Internet/E-commerce">Internet/E-commerce</option>
                                <option value="Journalism">Journalism</option>
                                <option value="LPG Bottling">LPG Bottling</option>
                                <option value="Laboratory/QC">Laboratory/QC</option>
                                <option value="Law Enforcement/Security Services">Law Enforcement/Security Services</option>
                                <option value="Legal">Legal</option>
                                <option value="Lubricants/Greases Blending">Lubricants/Greases Blending</option>
                                <option value="Management">Management</option>
                                <option value="Manufacturing">Manufacturing</option>
                                <option value="Manufacturing and Production">Manufacturing and Production</option>
                                <option value="Marine Services">Marine Services</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Mechanical">Mechanical</option>
                                <option value="Medical/Hospital">Medical/Hospital</option>
                                <option value="Merchandising">Merchandising</option>
                                <option value="Military">Military</option>
                                <option value="Mining">Mining</option>
                                <option value="Modeling">Modeling</option>
                                <option value="Oil/Gas">Oil/Gas</option>
                                <option value="Personal Care and Service">Personal Care and Service</option>
                                <option value="Petrochemicals">Petrochemicals</option>
                                <option value="Pharmaceutical">Pharmaceutical</option>
                                <option value="Photography">Photography</option>
                                <option value="Planning">Planning</option>
                                <option value="Public Relations">Public Relations</option>
                                <option value="Publishing">Publishing</option>
                                <option value="Quantity Survey">Quantity Survey</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Retail/Wholesale">Retail/Wholesale</option>
                                <option value="Safety/Environment">Safety/Environment</option>
                                <option value="Sales">Sales</option>
                                <option value="Science">Science</option>
                                <option value="Secretarial">Secretarial</option>
                                <option value="Security">Security</option>
                                <option value="Shipping">Shipping</option>
                                <option value="Sports and Recreation">Sports and Recreation</option>
                                <option value="Support Services">Support Services</option>
                                <option value="Technical/Maintenance">Technical/Maintenance</option>
                                <option value="Telecommunications">Telecommunications</option>
                                <option value="Telemarketing">Telemarketing</option>
                                <option value="Textiles">Textiles</option>
                                <option value="Translation">Translation</option>
                                <option value="Transportation">Transportation</option>
                                <option value="Utilities">Utilities</option>
                                <option value="Vehicle Inspection">Vehicle Inspection</option>
                                <option value="Warehousing">Warehousing</option>
                            </datalist>
                            </input>
                        </div>

                        <div class="form-group">
                            <label for="preference4">Preference No. 4:</label>
                            <input class="form-control" id="preference4" list="preferences" name="preference4" required>
                            <datalist id="preferences">
                                <option value="{{$skill->skill4}}" selected="selected">{{$skill->skill4}}</option>
                                <option value="Accounting/Auditing">Accounting/Auditing</option>
                                <option value="Administration">Administration</option>
                                <option value="Advertising">Advertising</option>
                                <option value="Aerospace and Defense">Aerospace and Defense</option>
                                <option value="Agriculture/Forestry/Fishing">Agriculture/Forestry/Fishing</option>
                                <option value="Airlines/Aviation">Airlines/Aviation</option>
                                <option value="Architecture">Architecture</option>
                                <option value="Arts/Entertainment/and Media">Arts/Entertainment/and Media</option>
                                <option value="Automotive">Automotive</option>
                                <option value="Aviation/Marine Refueling">Aviation/Marine Refueling</option>
                                <option value="Banking">Banking</option>
                                <option value="Biotechnology">Biotechnology</option>
                                <option value="Business Support">Business Support</option>
                                <option value="Catering/Food Services/Restaurants">Catering/Food Services/Restaurants</option>
                                <option value="Community/Social Services/and Nonprofit">Community/Social Services/and Nonprofit</option>
                                <option value="Computer/Hardware">Computer/Hardware</option>
                                <option value="Computer/Software">Computer/Software</option>
                                <option value="Construction">Construction</option>
                                <option value="Construction/Civil Engineering">Construction/Civil Engineering</option>
                                <option value="Consulting Services">Consulting Services</option>
                                <option value="Contracts/Purchasing">Contracts/Purchasing</option>
                                <option value="Customer Service">Customer Service</option>
                                <option value="Distributions and Logistics">Distributions and Logistics</option>
                                <option value="Education, Training, and Library">Education, Training, and Library</option>
                                <option value="Employment Placement Agencies/Recruiting">Employment Placement Agencies/Recruiting</option>
                                <option value="Energy">Energy</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="FMCG">FMCG</option>
                                <option value="Facilities Management">Facilities Management</option>
                                <option value="Fashion Design">Fashion Design</option>
                                <option value="Finance/Economics">Finance/Economics</option>
                                <option value="Financial Services">Financial Services</option>
                                <option value="Food Production">Food Production</option>
                                <option value="Government Sector">Government Sector</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Healthcare, Practitioner and Technician">Healthcare, Practitioner and Technician</option>
                                <option value="Healthcare, other">Healthcare, other</option>
                                <option value="Hospitality/Tourism/Travel">Hospitality/Tourism/Travel</option>
                                <option value="Human Resources">Human Resources</option>
                                <option value="Industrial">Industrial</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Installation, Maintenance, and Repair">Installation, Maintenance, and Repair</option>
                                <option value="Insurance">Insurance</option>
                                <option value="Interior design">Interior design</option>
                                <option value="Internet/E-commerce">Internet/E-commerce</option>
                                <option value="Journalism">Journalism</option>
                                <option value="LPG Bottling">LPG Bottling</option>
                                <option value="Laboratory/QC">Laboratory/QC</option>
                                <option value="Law Enforcement/Security Services">Law Enforcement/Security Services</option>
                                <option value="Legal">Legal</option>
                                <option value="Lubricants/Greases Blending">Lubricants/Greases Blending</option>
                                <option value="Management">Management</option>
                                <option value="Manufacturing">Manufacturing</option>
                                <option value="Manufacturing and Production">Manufacturing and Production</option>
                                <option value="Marine Services">Marine Services</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Mechanical">Mechanical</option>
                                <option value="Medical/Hospital">Medical/Hospital</option>
                                <option value="Merchandising">Merchandising</option>
                                <option value="Military">Military</option>
                                <option value="Mining">Mining</option>
                                <option value="Modeling">Modeling</option>
                                <option value="Oil/Gas">Oil/Gas</option>
                                <option value="Personal Care and Service">Personal Care and Service</option>
                                <option value="Petrochemicals">Petrochemicals</option>
                                <option value="Pharmaceutical">Pharmaceutical</option>
                                <option value="Photography">Photography</option>
                                <option value="Planning">Planning</option>
                                <option value="Public Relations">Public Relations</option>
                                <option value="Publishing">Publishing</option>
                                <option value="Quantity Survey">Quantity Survey</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Retail/Wholesale">Retail/Wholesale</option>
                                <option value="Safety/Environment">Safety/Environment</option>
                                <option value="Sales">Sales</option>
                                <option value="Science">Science</option>
                                <option value="Secretarial">Secretarial</option>
                                <option value="Security">Security</option>
                                <option value="Shipping">Shipping</option>
                                <option value="Sports and Recreation">Sports and Recreation</option>
                                <option value="Support Services">Support Services</option>
                                <option value="Technical/Maintenance">Technical/Maintenance</option>
                                <option value="Telecommunications">Telecommunications</option>
                                <option value="Telemarketing">Telemarketing</option>
                                <option value="Textiles">Textiles</option>
                                <option value="Translation">Translation</option>
                                <option value="Transportation">Transportation</option>
                                <option value="Utilities">Utilities</option>
                                <option value="Vehicle Inspection">Vehicle Inspection</option>
                                <option value="Warehousing">Warehousing</option>
                            </datalist>
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="preference5">Preference No. 5:</label>
                            <input class="form-control" id="preference5" list="preferences" name="preference5" required>
                            <datalist id="preferences">
                                <option value="{{$skill->skill5}}" selected="selected">{{$skill->skill5}}</option>
                                <option value="Accounting/Auditing">Accounting/Auditing</option>
                                <option value="Administration">Administration</option>
                                <option value="Advertising">Advertising</option>
                                <option value="Aerospace and Defense">Aerospace and Defense</option>
                                <option value="Agriculture/Forestry/Fishing">Agriculture/Forestry/Fishing</option>
                                <option value="Airlines/Aviation">Airlines/Aviation</option>
                                <option value="Architecture">Architecture</option>
                                <option value="Arts/Entertainment/and Media">Arts/Entertainment/and Media</option>
                                <option value="Automotive">Automotive</option>
                                <option value="Aviation/Marine Refueling">Aviation/Marine Refueling</option>
                                <option value="Banking">Banking</option>
                                <option value="Biotechnology">Biotechnology</option>
                                <option value="Business Support">Business Support</option>
                                <option value="Catering/Food Services/Restaurants">Catering/Food Services/Restaurants</option>
                                <option value="Community/Social Services/and Nonprofit">Community/Social Services/and Nonprofit</option>
                                <option value="Computer/Hardware">Computer/Hardware</option>
                                <option value="Computer/Software">Computer/Software</option>
                                <option value="Construction">Construction</option>
                                <option value="Construction/Civil Engineering">Construction/Civil Engineering</option>
                                <option value="Consulting Services">Consulting Services</option>
                                <option value="Contracts/Purchasing">Contracts/Purchasing</option>
                                <option value="Customer Service">Customer Service</option>
                                <option value="Distributions and Logistics">Distributions and Logistics</option>
                                <option value="Education, Training, and Library">Education, Training, and Library</option>
                                <option value="Employment Placement Agencies/Recruiting">Employment Placement Agencies/Recruiting</option>
                                <option value="Energy">Energy</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="FMCG">FMCG</option>
                                <option value="Facilities Management">Facilities Management</option>
                                <option value="Fashion Design">Fashion Design</option>
                                <option value="Finance/Economics">Finance/Economics</option>
                                <option value="Financial Services">Financial Services</option>
                                <option value="Food Production">Food Production</option>
                                <option value="Government Sector">Government Sector</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Healthcare, Practitioner and Technician">Healthcare, Practitioner and Technician</option>
                                <option value="Healthcare, other">Healthcare, other</option>
                                <option value="Hospitality/Tourism/Travel">Hospitality/Tourism/Travel</option>
                                <option value="Human Resources">Human Resources</option>
                                <option value="Industrial">Industrial</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Installation, Maintenance, and Repair">Installation, Maintenance, and Repair</option>
                                <option value="Insurance">Insurance</option>
                                <option value="Interior design">Interior design</option>
                                <option value="Internet/E-commerce">Internet/E-commerce</option>
                                <option value="Journalism">Journalism</option>
                                <option value="LPG Bottling">LPG Bottling</option>
                                <option value="Laboratory/QC">Laboratory/QC</option>
                                <option value="Law Enforcement/Security Services">Law Enforcement/Security Services</option>
                                <option value="Legal">Legal</option>
                                <option value="Lubricants/Greases Blending">Lubricants/Greases Blending</option>
                                <option value="Management">Management</option>
                                <option value="Manufacturing">Manufacturing</option>
                                <option value="Manufacturing and Production">Manufacturing and Production</option>
                                <option value="Marine Services">Marine Services</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Mechanical">Mechanical</option>
                                <option value="Medical/Hospital">Medical/Hospital</option>
                                <option value="Merchandising">Merchandising</option>
                                <option value="Military">Military</option>
                                <option value="Mining">Mining</option>
                                <option value="Modeling">Modeling</option>
                                <option value="Oil/Gas">Oil/Gas</option>
                                <option value="Personal Care and Service">Personal Care and Service</option>
                                <option value="Petrochemicals">Petrochemicals</option>
                                <option value="Pharmaceutical">Pharmaceutical</option>
                                <option value="Photography">Photography</option>
                                <option value="Planning">Planning</option>
                                <option value="Public Relations">Public Relations</option>
                                <option value="Publishing">Publishing</option>
                                <option value="Quantity Survey">Quantity Survey</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Retail/Wholesale">Retail/Wholesale</option>
                                <option value="Safety/Environment">Safety/Environment</option>
                                <option value="Sales">Sales</option>
                                <option value="Science">Science</option>
                                <option value="Secretarial">Secretarial</option>
                                <option value="Security">Security</option>
                                <option value="Shipping">Shipping</option>
                                <option value="Sports and Recreation">Sports and Recreation</option>
                                <option value="Support Services">Support Services</option>
                                <option value="Technical/Maintenance">Technical/Maintenance</option>
                                <option value="Telecommunications">Telecommunications</option>
                                <option value="Telemarketing">Telemarketing</option>
                                <option value="Textiles">Textiles</option>
                                <option value="Translation">Translation</option>
                                <option value="Transportation">Transportation</option>
                                <option value="Utilities">Utilities</option>
                                <option value="Vehicle Inspection">Vehicle Inspection</option>
                                <option value="Warehousing">Warehousing</option>
                            </datalist>
                            </input>
                        </div>
                            @endforeach
                    </div>
                </div>
                @endforeach
            @endforeach



                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Update</button>
                </div>
            </form>
        </div>


    </div>
    </div>

    <div class="col-lg-2">
    </div>
    </div>

    <script>
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });
    </script>
@endsection