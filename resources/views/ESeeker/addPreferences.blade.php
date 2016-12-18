@extends('layouts.main')
@section('title')
    <title>Preferences</title>
@endsection
@section('content')

    <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="" class="navbar-brand">Company Logo</a>
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-main">

            </div>
        </div>
    </div>
    <!-- End of navbar-->

    <div class="container down-both-nav">
        <div class="col-md-2">
        </div>

        <div class="col-md-8">
            <div class="panel panel-default container-fluid">
                <div class="panel-heading row">
                    <h4>First things first...</h4>
                </div>
                <div class="panel-body">
                    <p>Select ypur area of industrial preference in order for the system to give you suggestions. Type in to get suggestions</p>

                    <form method="post" action="">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="city" class="col-sm-2 control-label">Preference No. 1:</label>
                            <div class="col-sm-10">
                                <input class="form-control" list="preferences" name="preference1" required>
                                    <datalist id="preferences">
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
                        </div>
                        <br />
                        <br />
                        <br />
                        <div class="form-group">
                            <label for="city" class="col-sm-2 control-label">Preference No. 2:</label>
                            <div class="col-sm-10">
                                <input class="form-control" list="preferences" name="preference2" required>
                                <datalist id="preferences">
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
                        </div>


                        <br />
                        <br />

                        <div class="form-group">
                            <label for="city" class="col-sm-2 control-label">Preference No. 3:</label>
                            <div class="col-sm-10">
                                <input class="form-control" list="preferences" name="preference3" required>
                                <datalist id="preferences">
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
                        </div>


                        <br />
                        <br />

                        <div class="form-group">
                            <label for="city" class="col-sm-2 control-label">Preference No. 4:</label>
                            <div class="col-sm-10">
                                <input class="form-control" list="preferences" name="preference4" required>
                                <datalist id="preferences">
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
                        </div>


                        <br />
                        <br />

                        <div class="form-group">
                            <label for="city" class="col-sm-2 control-label">Preference No. 5:</label>
                            <div class="col-sm-10">
                                <input class="form-control" list="preferences" name="preference5" required>
                                <datalist id="preferences">
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
                        </div>

                        <br />
                        <br />
                        <div class="form-group pull-right">
                            <div class="col-sm-offset-2 col-sm-10 ">
                                <button type="submit" class="btn btn-info">Add Preferences</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <div class="col-md-2">
        </div>

    </div>

    <!-- Isotope Initialization ad code -->
    <script>
        // init Isotope
        var $grid = $('.grid').isotope({
            itemSelector: '.element-item',
            layoutMode: 'fitRows',
            getSortData: {
                name: '.name',
                symbol: '.symbol',
                number: '.number parseInt',
                category: '[data-category]',
                weight: function( itemElem ) {
                    var weight = $( itemElem ).find('.weight').text();
                    return parseFloat( weight.replace( /[\(\)]/g, '') );
                }
            }
        });

        // filter functions
        var filterFns = {
            // show if number is greater than 50
            numberGreaterThan50: function() {
                var number = $(this).find('.number').text();
                return parseInt( number, 10 ) > 50;
            },
            // show if name ends with -ium
            ium: function() {
                var name = $(this).find('.name').text();
                return name.match( /ium$/ );
            }
        };

        // bind filter button click
        $('#filters').on( 'click', 'button', function() {
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            filterValue = filterFns[ filterValue ] || filterValue;
            $grid.isotope({ filter: filterValue });
        });

        // bind sort button click
        $('#sorts').on( 'click', 'button', function() {
            var sortByValue = $(this).attr('data-sort-by');
            $grid.isotope({ sortBy: sortByValue });
        });

        // change is-checked class on buttons
        $('.button-group').each( function( i, buttonGroup ) {
            var $buttonGroup = $( buttonGroup );
            $buttonGroup.on( 'click', 'button', function() {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $( this ).addClass('is-checked');
            });
        });
    </script>
    <!-- Isotope ENds here -->
    <script>
        $('input[type=checkbox]').change(function(e){
            if ($('input[type=checkbox]:checked').length > 10) {
                $(this).prop('checked', false);


                swal({
                    title: 'Oops!',
                    text: "Only 10 skills are allowed! Try removing some...",
                    type: 'warning',
                })
            }
        })
    </script>
@endsection
