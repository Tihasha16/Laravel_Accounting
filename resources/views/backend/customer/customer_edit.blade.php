@extends('admin.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">

                    <div class="container-fluid">

                    <div class="row">

        <div class="col-md-12">



            <div class="panel">
                <div class="panel-hdr">
                    <h2><span></span>Add Contact</h2>
                    <div class="panel-toolbar">
                        <a href="https://portal.optimus.com.bd/?ng=contacts/import_csv/" class="btn btn-primary waves-effect waves-themed"><i class="fal fa-upload"></i> Import Contacts</a>
                    </div>

                </div>

                <div class="panel-container show" id="ibox_form">

                    <div class="panel-content">

                        <div class="px-2">
                            <div class="alert alert-danger" id="emsg" style="display: none;">
                                <span id="emsgbody"></span>
                            </div>

							<form method ="post" action= "{{ route('customer.update') }}" id="myForm" enctype="multipart/form-data">
                                            @csrf 
											<input type="hidden" name="id" value="{{ $customer->id }}" >
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3 row">
                                            <label for="account" class="col-sm-3"><span class="h6">Full Name</span><span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" id="account" name="name" value="{{ $customer->name }}" class="form-control" autofocus="">
                                            </div>
                                        </div> 
                                        <div class="mb-3 row">
                                            <label for="code" class="col-sm-3"><span class="h6">Code</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" id="code" name="code" value="{{ $customer->code }}" class="form-control" value="CUS-00004">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="display_name" class="col-sm-3"><span class="h6">Display Name</span> </label>
                                            <div class="col-sm-9">
                                                <input type="text" id="display_name" name="display_name" value="{{ $customer->display_name }}" class="form-control">
                                            </div>
                                        </div>


                                        <div class="mb-3 row">
                                            <label for="cid" class="col-sm-3"><span class="h6">Company</span> </label>
                                            <div class="col-sm-9">
                                                <select id="cid" name="company" value="{{ $customer->company }}" class="form-control select2-hidden-accessible" data-select2-id="cid" tabindex="-1" aria-hidden="true">
                                                    <option value="0" data-select2-id="2">None</option>
                                                                                                            <option value="8">
                                                            Kloud Technologies
                                                        </option>
                                                                                                            <option value="7">
                                                            AmarStationery
                                                        </option>
                                                                                                            <option value="6">
                                                            Hexagon Bdtech Limited
                                                        </option>
                                                                                                            <option value="5">
                                                            Health Point BD
                                                        </option>
                                                                                                            <option value="3">
                                                            Limda Host
                                                        </option>
                                                                                                            <option value="2">
                                                            SoftifyBD Ltd
                                                        </option>
                                                                                                            <option value="1">
                                                            Optimus Technologies
                                                        </option>
                                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 571.5px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-cid-container"><span class="select2-selection__rendered" id="select2-cid-container" role="textbox" aria-readonly="true" title="None">None</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                

                                                                                    <div class="mb-3 row">
                                                <label for="business_number" class="col-sm-3"><span class="h6">Business Number</span> </label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="business_number" name="business_number" value="{{ $customer->business_number }}" class="form-control">
                                                </div>
                                            </div>
                                            
                                        
                                        <div class="mb-3 row">
                                            <label for="type" class="col-sm-3"><span class="h6">Type</span> </label>
                                            <div class="col-sm-9">
                                                <div class="custom-control my-2 custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="defaultChecked" name="type" value="{{ $customer->type }}" value="Customer" checked="">
                                                    <label class="custom-control-label" for="defaultChecked"><span class="h6">Customer</span></label>
                                                </div>

                                                <div class="custom-control my-2 custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="input_supplier" name="type" value="{{ $customer->type }}"  value="Supplier">
                                                    <label class="custom-control-label" for="input_supplier"><span class="h6">Supplier</span></label>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="mb-3 row">
                                            <label for="address" class="col-sm-3"><span class="h6">Address</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="address" name="address" value="{{ $customer->address }}"  class="form-control">


                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="city" class="col-sm-3"><span class="h6">City</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="city" name="city" value="{{ $customer->city }}"  class="form-control">


                                            </div>
                                        </div>         
                                        
                                        
                                        <div class="mb-3 row">
                                            <label for="state" class="col-sm-3"><span class="h6">State/Region</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="state" name="state" value="{{ $customer->state }}" class="form-control">


                                            </div>
                                        </div>

                                        
                                        
                                        <div class="mb-3 row">
                                            <label for="zip" class="col-sm-3"><span class="h6">ZIP/Postal Code</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="zip" name="zip" value="{{ $customer->zip }}"  class="form-control">
                                            </div>
                                        </div>
  
                                          <div class="mb-3 row">
                                            <label for="country" class="col-sm-3"><span class="h6">Country</span> </label>
                                            <div class="col-sm-9">

                                                <select name="country" value="{{ $customer->country }}"  id="country" class="form-control select2-hidden-accessible" data-select2-id="country" tabindex="-1" aria-hidden="true">
                                                    <option value="">Select Country</option>
                                                    
	<option value="Afghanistan">Afghanistan</option>
	<option value="Aland Islands">Aland Islands</option>
	<option value="Albania">Albania</option>
	<option value="Algeria">Algeria</option>
	<option value="American Samoa">American Samoa</option>
	<option value="Andorra">Andorra</option>
	<option value="Angola">Angola</option>
	<option value="Anguilla">Anguilla</option>
	<option value="Antarctica">Antarctica</option>
	<option value="Antigua And Barbuda">Antigua And Barbuda</option>
	<option value="Argentina">Argentina</option>
	<option value="Armenia">Armenia</option>
	<option value="Aruba">Aruba</option>
	<option value="Australia">Australia</option>
	<option value="Austria">Austria</option>
	<option value="Azerbaijan">Azerbaijan</option>
	<option value="Bahamas">Bahamas</option>
	<option value="Bahrain">Bahrain</option>
	<option value="Bangladesh" selected="selected" data-select2-id="4">Bangladesh</option>
	<option value="Barbados">Barbados</option>
	<option value="Belarus">Belarus</option>
	<option value="Belgium">Belgium</option>
	<option value="Belize">Belize</option>
	<option value="Benin">Benin</option>
	<option value="Bermuda">Bermuda</option>
	<option value="Bhutan">Bhutan</option>
	<option value="Bolivia">Bolivia</option>
	<option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option>
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
	<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
	<option value="Colombia">Colombia</option>
	<option value="Comoros">Comoros</option>
	<option value="Congo">Congo</option>
	<option value="Congo, Democratic Republic">Congo, Democratic Republic</option>
	<option value="Cook Islands">Cook Islands</option>
	<option value="Costa Rica">Costa Rica</option>
	<option value="Cote D'Ivoire">Cote D'Ivoire</option>
	<option value="Croatia">Croatia</option>
	<option value="Cuba">Cuba</option>
	<option value="Cyprus">Cyprus</option>
	<option value="Czech Republic">Czech Republic</option>
	<option value="Denmark">Denmark</option>
	<option value="Djibouti">Djibouti</option>
	<option value="Dominica">Dominica</option>
	<option value="Dominican Republic">Dominican Republic</option>
	<option value="Ecuador">Ecuador</option>
	<option value="Egypt">Egypt</option>
	<option value="El Salvador">El Salvador</option>
	<option value="Equatorial Guinea">Equatorial Guinea</option>
	<option value="Eritrea">Eritrea</option>
	<option value="Estonia">Estonia</option>
	<option value="Ethiopia">Ethiopia</option>
	<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
	<option value="Faroe Islands">Faroe Islands</option>
	<option value="Fiji">Fiji</option>
	<option value="Finland">Finland</option>
	<option value="France">France</option>
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
	<option value="Guernsey">Guernsey</option>
	<option value="Guinea">Guinea</option>
	<option value="Guinea-Bissau">Guinea-Bissau</option>
	<option value="Guyana">Guyana</option>
	<option value="Haiti">Haiti</option>
	<option value="Heard Island &amp; Mcdonald Islands">Heard Island &amp; Mcdonald Islands</option>
	<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
	<option value="Honduras">Honduras</option>
	<option value="Hong Kong">Hong Kong</option>
	<option value="Hungary">Hungary</option>
	<option value="Iceland">Iceland</option>
	<option value="India">India</option>
	<option value="Indonesia">Indonesia</option>
	<option value="Iran, Islamic Republic Of">Iran, Islamic Republic Of</option>
	<option value="Iraq">Iraq</option>
	<option value="Ireland">Ireland</option>
	<option value="Isle Of Man">Isle Of Man</option>
	<option value="Israel">Israel</option>
	<option value="Italy">Italy</option>
	<option value="Jamaica">Jamaica</option>
	<option value="Japan">Japan</option>
	<option value="Jersey">Jersey</option>
	<option value="Jordan">Jordan</option>
	<option value="Kazakhstan">Kazakhstan</option>
	<option value="Kenya">Kenya</option>
	<option value="Kiribati">Kiribati</option>
	<option value="Korea">Korea</option>
	<option value="Kuwait">Kuwait</option>
	<option value="Kyrgyzstan">Kyrgyzstan</option>
	<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
	<option value="Latvia">Latvia</option>
	<option value="Lebanon">Lebanon</option>
	<option value="Lesotho">Lesotho</option>
	<option value="Liberia">Liberia</option>
	<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
	<option value="Liechtenstein">Liechtenstein</option>
	<option value="Lithuania">Lithuania</option>
	<option value="Luxembourg">Luxembourg</option>
	<option value="Macao">Macao</option>
	<option value="Macedonia">Macedonia</option>
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
	<option value="Micronesia, Federated States Of">Micronesia, Federated States Of</option>
	<option value="Moldova">Moldova</option>
	<option value="Monaco">Monaco</option>
	<option value="Mongolia">Mongolia</option>
	<option value="Montenegro">Montenegro</option>
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
	<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
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
	<option value="Russian Federation">Russian Federation</option>
	<option value="Rwanda">Rwanda</option>
	<option value="Saint Barthelemy">Saint Barthelemy</option>
	<option value="Saint Helena">Saint Helena</option>
	<option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
	<option value="Saint Lucia">Saint Lucia</option>
	<option value="Saint Martin">Saint Martin</option>
	<option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon</option>
	<option value="Saint Vincent And Grenadines">Saint Vincent And Grenadines</option>
	<option value="Samoa">Samoa</option>
	<option value="San Marino">San Marino</option>
	<option value="Sao Tome And Principe">Sao Tome And Principe</option>
	<option value="Saudi Arabia">Saudi Arabia</option>
	<option value="Senegal">Senegal</option>
	<option value="Serbia">Serbia</option>
	<option value="Seychelles">Seychelles</option>
	<option value="Sierra Leone">Sierra Leone</option>
	<option value="Singapore">Singapore</option>
	<option value="Slovakia">Slovakia</option>
	<option value="Slovenia">Slovenia</option>
	<option value="Solomon Islands">Solomon Islands</option>
	<option value="Somalia">Somalia</option>
	<option value="South Africa">South Africa</option>
	<option value="South Georgia And Sandwich Isl.">South Georgia And Sandwich Isl.</option>
	<option value="Spain">Spain</option>
	<option value="Sri Lanka">Sri Lanka</option>
	<option value="Sudan">Sudan</option>
	<option value="Suriname">Suriname</option>
	<option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option>
	<option value="Swaziland">Swaziland</option>
	<option value="Sweden">Sweden</option>
	<option value="Switzerland">Switzerland</option>
	<option value="Syrian Arab Republic">Syrian Arab Republic</option>
	<option value="Taiwan">Taiwan</option>
	<option value="Tajikistan">Tajikistan</option>
	<option value="Tanzania">Tanzania</option>
	<option value="Thailand">Thailand</option>
	<option value="Timor-Leste">Timor-Leste</option>
	<option value="Togo">Togo</option>
	<option value="Tokelau">Tokelau</option>
	<option value="Tonga">Tonga</option>
	<option value="Trinidad And Tobago">Trinidad And Tobago</option>
	<option value="Tunisia">Tunisia</option>
	<option value="Turkey">Turkey</option>
	<option value="Turkmenistan">Turkmenistan</option>
	<option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
	<option value="Tuvalu">Tuvalu</option>
	<option value="Uganda">Uganda</option>
	<option value="Ukraine">Ukraine</option>
	<option value="United Arab Emirates">United Arab Emirates</option>
	<option value="United Kingdom">United Kingdom</option>
	<option value="United States">United States</option>
	<option value="United States Outlying Islands">United States Outlying Islands</option>
	<option value="Uruguay">Uruguay</option>
	<option value="Uzbekistan">Uzbekistan</option>
	<option value="Vanuatu">Vanuatu</option>
	<option value="Venezuela">Venezuela</option>
	<option value="Viet Nam">Viet Nam</option>
	<option value="Virgin Islands, British">Virgin Islands, British</option>
	<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
	<option value="Wallis And Futuna">Wallis And Futuna</option>
	<option value="Western Sahara">Western Sahara</option>
	<option value="Yemen">Yemen</option>
	<option value="Zambia">Zambia</option>
	<option value="Zimbabwe">Zimbabwe</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 571.5px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country-container"><span class="select2-selection__rendered" id="select2-country-container" role="textbox" aria-readonly="true" title="Bangladesh">Bangladesh</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                                                                                                                                                                                                                                
                                                                                                                                                            </div>
                                    <div class="col-md-6 col-sm-12">

                                        <div class="mb-3 row">
                                            <label for="email" class="col-sm-3"><span class="h6">Email</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="email" value="{{ $customer->email }}"  name="email" class="form-control">


                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="secondary_email" class="col-sm-3"><span class="h6">Secondary Email</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="secondary_email" value="{{ $customer->secondary_email }}"  name="secondary_email" class="form-control">


                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="phone" class="col-sm-3"><span class="h6">Phone</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="phone" name="phone" value="{{ $customer->phone }}"  class="form-control">


                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="currency" class="col-sm-3"><span class="h6">Currency</span> </label>
                                            <div class="col-sm-9">

                                                <select id="currency" name="currency" value="{{ $customer->currency }}"  class="form-control">

                                                                                                            <option value="1" selected="selected">BDT</option>
                                                                                                                <option value="2">USD</option>
                                                        
                                                </select>
                                            </div>
                                        </div>


                                        <div class="mb-3 row">
                                            <label for="group" class="col-sm-3"><span class="h6">Group </span></label>
                                            <div class="col-sm-9">

                                                <select class="form-control" name="group" id="group">
                                                    <option value="0">None</option>
                                                                                                    </select>
                                                <span class="help-block "><a href="#" id="add_new_group" class="text-info"> <span class="h6 text-info"><i class="fal fa-plus"></i> Add New Group</span></a></span> 
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="owner_id" class="col-sm-3"><span class="h6">Owner</span> </label>
                                            <div class="col-sm-9">

                                                <select class="form-control" name="owner" value="{{ $customer->owner }}"  id="owner_id">
                                                                                                            <option value="1" selected="">Junaid Miaje</option>
                                                                                                            <option value="6">Tiasha Rafa</option>
                                                                                                    </select>
                                            </div>
                                        </div>

                                            <div class="mb-3 row">
                                                <label for="zip" class="col-sm-3"><span class="h6">Username </span></label>
                                                <div class="col-sm-9">

                                                    <input type="text" id="username" name="username" value="{{ $customer->username }}"  class="form-control">
                                                </div>
                                            </div>

                                            
                                            

                                                                                    
                                        <div class="mb-3 row">
                                            <label for="password" class="col-sm-3"><span class="h6">Password</span> </label>
                                            <div class="col-sm-9">

                                                <input type="password" id="password" name="password" value="{{ $customer->password }}"  class="form-control">
                                            </div>
                                        </div>

                                        
                                        

                                                                                <div class="mb-3 row">
                                            <label for="cpassword" class="col-sm-3"><span class="h6">Confirm Password</span></label>
                                            <div class="col-sm-9">
 
                                                <input type="password" id="cpassword" name="confirm_password" value="{{ $customer->confirm_password }}"  class="form-control">
                                            </div>
                                        </div>
                                        
                                            <div class="mb-3 row">
                                                <label for="cpassword" class="col-sm-3"></label>
                                                <div class="col-sm-9">

                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" name="send_client_signup_email" class="custom-control-input" id="send_client_signup_email">
                                                        <label class="custom-control-label" for="send_client_signup_email"><span class="h6">Welcome Email</span></label>
                                                    </div>
                                                </div>
                                            </div>


                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">


                                            <button class="btn btn-primary mt-3 mr-3 waves-effect waves-themed" type="submit" id="submit">Update Data</button>


                                        </div>
                                    </div>
                                </div>


                            </form>
                       </div>
                </div>
            </div>
        </div>
    </div>
                            

                            
                                        </form>
                                </div>
                            </div> <!-- end col -->
                        </div>

</div>
</div>

<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection


