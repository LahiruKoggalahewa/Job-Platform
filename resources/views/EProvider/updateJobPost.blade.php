<!-- Sets header files-->
@extends('layouts.main')

<!-- Sets title -->
@section('title')
    <title>Update job entry</title>
@endsection

<!-- gets navbar -->
@extends('layouts.eProvider')

<!-- Sets dashboard element active -->
@section('jobPostings')
    class="active"
@endsection

<!-- Sets dashboard element active -->
@section('list-item-1')
    <li><a href="postjob/EPId={{Auth::user()->id}}">Post a Job</a></li>
@endsection

@section('list-item-2')
    <li><a href="/jobPostings/EPId={{Auth::user()->id}}">Job Postings</a></li>
@endsection
@section('list-item-3')
    <li class="active"><a>Update Job Post</a></li>
@endsection


@section('content')

    <div class="container down-both-nav">

        <div class="col-md-2">
        </div>
        @foreach($jobs as $job)
        <form class="form-horizontal" method="post" action="/editJob/EPId={{Auth::user()->id}}/jobId={{$job->job_id}}">
            {{ csrf_field() }}
            <div class="col-md-8">
                <div class=" panel panel-default container-fluid">
                    <div class="panel-heading row">
                        Job Information
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Job Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" id="title" placeholder="Job Title" value="{{$job->job_title}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="loaction" class="col-sm-2 control-label">Job Location</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="loaction" name="location" placeholder="Job Location" value="{{$job->location}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-sm-2 control-label">City</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="city" name="city" placeholder="City" value="{{$job->city}}" required>
                                    <option value="Ampara">Ampara</option>
                                    <option value="Anuradhapura">Anuradhapura</option>
                                    <option value="Badulla">Badulla</option>
                                    <option value="Batticaloa">Batticaloa</option>
                                    <option value="Colombo" selected="selected">Colombo</option>
                                    <option value="Galle">Galle</option>
                                    <option value="Gampaha">Gampaha</option>
                                    <option value="Hambantota">Hambantota</option>
                                    <option value="Jaffna">Jaffna</option>
                                    <option value="Kalutara">Kalutara</option>
                                    <option value="Kandy">Kandy</option>
                                    <option value="Kegalle">Kegalle</option>
                                    <option value="Kilinochchi">Kilinochchi</option>
                                    <option value="Kurunegala">Kurunegala</option>
                                    <option value="Mannar">Mannar</option>
                                    <option value="Matale">Matale</option>
                                    <option value="Matara">Matara</option>
                                    <option value="Monaragala">Monaragala</option>
                                    <option value="Mullaitivu">Mullaitivu</option>
                                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                                    <option value="Polonnaruwa">Polonnaruwa</option>
                                    <option value="Puttalam">Puttalam</option>
                                    <option value="Ratnapura">Ratnapura</option>
                                    <option value="Trincomalee">Trincomalee</option>
                                    <option value="Vavuniya">Vavuniya</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="role" class="col-sm-2 control-label">Job Role</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="role" name="role" placeholder="Short Description about job" value="{{$job->job_role}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="industry" class="col-sm-2 control-label">Company Industry</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="industry" name="industry" placeholder="Company Industry" value="{{$job->company_industry}}">
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
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">Job Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="description" name="description" placeholder="Job Description" required>{{$job->job_description}}</textarea>
                            </div>
                        </div>

                            <div class="form-group">
                            <label for="role" class="col-sm-2 control-label" style="color:darkred">Employment Status</label>
                            <div class="col-sm-10">
                                <label class="radio-inline">
                                    <input type="radio" name="stat" value="Part time" required>Part time
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="stat" value="Full time" required>Full time
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="skills" class="col-sm-2 control-label" style="color:darkred">Employment Type</label>
                            <div class="col-sm-10">
                                <label class="radio-inline">
                                    <input type="radio" name="type" value="Employee" required>Employee
                                </label>

                                <label class="radio-inline">
                                    <input type="radio" name="type" value="Internship" required>Internship
                                </label>

                                <label class="radio-inline">
                                    <input type="radio" name="type" value="Contractor" required>Contractor
                                </label>

                                <label class="radio-inline">
                                    <input type="radio" name="type" required>Temporary Employee
                                </label>
                            </div>
                        </div>
                        <hr>



                         <div class="form-group">
                            <label for="tag1" class="col-sm-2 control-label">Tag 1</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="tag1" name="tag1">
                                    <option value="{{$job->tag_1}}">{{$job->tag_1}}</option>
                                    <option value="Analytics">Analytics</option>
                                    <option value="Application Development">Application Development</option>
                                    <option value="Architecture">Architecture</option>
                                    <option value="Big Data">Big Data</option>
                                    <option value="Business Analytics">Business Analytics</option>
                                    <option value="Business Intelligence">Business Intelligence</option>
                                    <option value="Business Process Modeling">Business Process Modeling</option>
                                    <option value="Cloud Computing">Cloud Computing</option>
                                    <option value="Coding">Coding</option>
                                    <option value="Communication">Communication</option>
                                    <option value="Content Strategy">Content Strategy</option>
                                    <option value="Content Management">Content Management</option>
                                    <option value="Configuration">Configuration</option>
                                    <option value="Critical Thinking">Critical Thinking</option>
                                    <option value="Customer Support">Customer Support</option>
                                    <option value="Database">Database</option>
                                    <option value="Data Analytics">Data Analytics</option>
                                    <option value="Data Mining">Data Mining</option>
                                    <option value="Data Science">Data Science</option>
                                    <option value="Data Strategy">Data Strategy</option>
                                    <option value="Data Storage">Data Storage</option>
                                    <option value="Database Administration">Database Administration</option>
                                    <option value="Design">Design</option>
                                    <option value="Developer">Developer</option>
                                    <option value="Documentation">Documentation</option>
                                    <option value="Emerging Technologies">Emerging Technologies</option>
                                    <option value="Hardware">Hardware</option>
                                    <option value="Implementation">Implementation</option>
                                    <option value="Internet">Internet</option>
                                    <option value="Information Systems">Information Systems</option>
                                    <option value="Installation">Installation</option>
                                    <option value="Integrated Technologies">Integrated Technologies</option>
                                    <option value="Logical Thinking">Logical Thinking</option>
                                    <option value="Linux">Linux</option>
                                    <option value="Management">Management</option>
                                    <option value="Messaging">Messaging</option>
                                    <option value="Metrics">Metrics</option>
                                    <option value="Microsoft Office">Microsoft Office</option>
                                    <option value="Mobile Applications">Mobile Applications</option>
                                    <option value="Networks">Networks</option>
                                    <option value="Network Operations">Network Operations</option>
                                    <option value="Networking">Networking</option>
                                    <option value="Operating Systems">Operating Systems</option>
                                    <option value="Programming">Programming</option>
                                    <option value="Product Training">Product Training</option>
                                    <option value="Project Management">Project Management</option>
                                    <option value="Search Engine Optimization (SEO)">Search Engine Optimization (SEO)</option>
                                    <option value="Security">Security</option>
                                    <option value="Servers">Servers</option>
                                    <option value="Software Development">Software Development</option>
                                    <option value="Software Engineering">Software Engineering</option>
                                    <option value="Quality Assurance">Quality Assurance</option>
                                    <option value="Support">Support</option>
                                    <option value="Tech Support">Tech Support</option>
                                    <option value="Testing">Testing</option>
                                    <option value="UI / UX">UI / UX</option>
                                    <option value="Virtualization">Virtualization</option>
                                    <option value="Web Development">Web Development</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tag2" class="col-sm-2 control-label">Tag 2</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="tag2" name="tag2">
                                    <option value="{{$job->tag_2}}" selected="selected">{{$job->tag_2}}</option>
                                    <option value="Analytics">Analytics</option>
                                    <option value="Application Development">Application Development</option>
                                    <option value="Architecture">Architecture</option>
                                    <option value="Big Data">Big Data</option>
                                    <option value="Business Analytics">Business Analytics</option>
                                    <option value="Business Intelligence">Business Intelligence</option>
                                    <option value="Business Process Modeling">Business Process Modeling</option>
                                    <option value="Cloud Computing">Cloud Computing</option>
                                    <option value="Coding">Coding</option>
                                    <option value="Communication">Communication</option>
                                    <option value="Content Strategy">Content Strategy</option>
                                    <option value="Content Management">Content Management</option>
                                    <option value="Configuration">Configuration</option>
                                    <option value="Critical Thinking">Critical Thinking</option>
                                    <option value="Customer Support">Customer Support</option>
                                    <option value="Database">Database</option>
                                    <option value="Data Analytics">Data Analytics</option>
                                    <option value="Data Mining">Data Mining</option>
                                    <option value="Data Science">Data Science</option>
                                    <option value="Data Strategy">Data Strategy</option>
                                    <option value="Data Storage">Data Storage</option>
                                    <option value="Database Administration">Database Administration</option>
                                    <option value="Design">Design</option>
                                    <option value="Developer">Developer</option>
                                    <option value="Documentation">Documentation</option>
                                    <option value="Emerging Technologies">Emerging Technologies</option>
                                    <option value="Hardware">Hardware</option>
                                    <option value="Implementation">Implementation</option>
                                    <option value="Internet">Internet</option>
                                    <option value="Information Systems">Information Systems</option>
                                    <option value="Installation">Installation</option>
                                    <option value="Integrated Technologies">Integrated Technologies</option>
                                    <option value="Logical Thinking">Logical Thinking</option>
                                    <option value="Linux">Linux</option>
                                    <option value="Management">Management</option>
                                    <option value="Messaging">Messaging</option>
                                    <option value="Metrics">Metrics</option>
                                    <option value="Microsoft Office">Microsoft Office</option>
                                    <option value="Mobile Applications">Mobile Applications</option>
                                    <option value="Networks">Networks</option>
                                    <option value="Network Operations">Network Operations</option>
                                    <option value="Networking">Networking</option>
                                    <option value="Operating Systems">Operating Systems</option>
                                    <option value="Programming">Programming</option>
                                    <option value="Product Training">Product Training</option>
                                    <option value="Project Management">Project Management</option>
                                    <option value="Search Engine Optimization (SEO)">Search Engine Optimization (SEO)</option>
                                    <option value="Security">Security</option>
                                    <option value="Servers">Servers</option>
                                    <option value="Software Development">Software Development</option>
                                    <option value="Software Engineering">Software Engineering</option>
                                    <option value="Quality Assurance">Quality Assurance</option>
                                    <option value="Support">Support</option>
                                    <option value="Tech Support">Tech Support</option>
                                    <option value="Testing">Testing</option>
                                    <option value="UI / UX">UI / UX</option>
                                    <option value="Virtualization">Virtualization</option>
                                    <option value="Web Development">Web Development</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tag3" class="col-sm-2 control-label">Tag 3</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="tag3" name="tag3">
                                    <option value="{{$job->tag_3}}" selected="selected">{{$job->tag_3}}</option>
                                    <option value="Analytics">Analytics</option>
                                    <option value="Application Development">Application Development</option>
                                    <option value="Architecture">Architecture</option>
                                    <option value="Big Data">Big Data</option>
                                    <option value="Business Analytics">Business Analytics</option>
                                    <option value="Business Intelligence">Business Intelligence</option>
                                    <option value="Business Process Modeling">Business Process Modeling</option>
                                    <option value="Cloud Computing">Cloud Computing</option>
                                    <option value="Coding">Coding</option>
                                    <option value="Communication">Communication</option>
                                    <option value="Content Strategy">Content Strategy</option>
                                    <option value="Content Management">Content Management</option>
                                    <option value="Configuration">Configuration</option>
                                    <option value="Critical Thinking">Critical Thinking</option>
                                    <option value="Customer Support">Customer Support</option>
                                    <option value="Database">Database</option>
                                    <option value="Data Analytics">Data Analytics</option>
                                    <option value="Data Mining">Data Mining</option>
                                    <option value="Data Science">Data Science</option>
                                    <option value="Data Strategy">Data Strategy</option>
                                    <option value="Data Storage">Data Storage</option>
                                    <option value="Database Administration">Database Administration</option>
                                    <option value="Design">Design</option>
                                    <option value="Developer">Developer</option>
                                    <option value="Documentation">Documentation</option>
                                    <option value="Emerging Technologies">Emerging Technologies</option>
                                    <option value="Hardware">Hardware</option>
                                    <option value="Implementation">Implementation</option>
                                    <option value="Internet">Internet</option>
                                    <option value="Information Systems">Information Systems</option>
                                    <option value="Installation">Installation</option>
                                    <option value="Integrated Technologies">Integrated Technologies</option>
                                    <option value="Logical Thinking">Logical Thinking</option>
                                    <option value="Linux">Linux</option>
                                    <option value="Management">Management</option>
                                    <option value="Messaging">Messaging</option>
                                    <option value="Metrics">Metrics</option>
                                    <option value="Microsoft Office">Microsoft Office</option>
                                    <option value="Mobile Applications">Mobile Applications</option>
                                    <option value="Networks">Networks</option>
                                    <option value="Network Operations">Network Operations</option>
                                    <option value="Networking">Networking</option>
                                    <option value="Operating Systems">Operating Systems</option>
                                    <option value="Programming">Programming</option>
                                    <option value="Product Training">Product Training</option>
                                    <option value="Project Management">Project Management</option>
                                    <option value="Search Engine Optimization (SEO)">Search Engine Optimization (SEO)</option>
                                    <option value="Security">Security</option>
                                    <option value="Servers">Servers</option>
                                    <option value="Software Development">Software Development</option>
                                    <option value="Software Engineering">Software Engineering</option>
                                    <option value="Quality Assurance">Quality Assurance</option>
                                    <option value="Support">Support</option>
                                    <option value="Tech Support">Tech Support</option>
                                    <option value="Testing">Testing</option>
                                    <option value="UI / UX">UI / UX</option>
                                    <option value="Virtualization">Virtualization</option>
                                    <option value="Web Development">Web Development</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default container-fluid">
                    <div class="panel-heading row">
                        Candidate Requirements
                    </div>
                    <div class="panel-body">
                        <h4>Experiance</h4>
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Career Level</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="level" name="level" value="{{$job->career_level}}">
                                    <option value="{{$job->career_level}}" selected="selected">{{$job->career_level}}</option>
                                    <option value="">- Select one -</option>
                                    <option value="Internship">Student/Internship</option>
                                    <option value="Entry Level">Entry Level</option>
                                    <option value="Mid Caeer"r>Mid Caeer</option>
                                    <option value="Management">Management</option>
                                    <option value="Executive/Director">Executive/Director</option>
                                    <option value="Senior Executive">Senior Executive (President, CEO)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-sm-2 control-label">Years of min. Experiance</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="city" name="Years" placeholder="Years" value="{{$job->experiance}}" >
                                    <option value="{{$job->experiance}}" selected="selected">{{$job->experiance}}</option>
                                    <option value="">- Min -</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="5">5</option>
                                    <option value="7">7</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                </select>
                            </div>
                        </div>
                        <hr />
                        <h4>Education</h4>
                        <div class="form-group">
                            <label for="major" class="col-sm-2 control-label">Major</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="major" name="major" placeholder="Major" value="{{$job->major}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="industry" class="col-sm-2 control-label">Degree</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="Degree" name="Degree">
                                    <option value="">- No preference -</option>
                                    <option value="{{$job->degree}}" selected="selected">{{$job->degree}}</option>>
                                    <option value="High school or equivalent">High school or equivalent</option>
                                    <option value="Certification / diploma">Certification / diploma</option>
                                    <option value="Bachelor's degree / higher diploma">Bachelor's degree / higher diploma</option>
                                    <option value="Master's degree">Master's degree</option>
                                    <option value="Doctorate">Doctorate</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group pull-right">
                    <div class="col-sm-offset-2 col-sm-10 ">
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
                </div>

        </form>
        @endforeach
    </div>
    <div class="col-md-2">
    </div>
    </div>
@endsection