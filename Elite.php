<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="student.css">
<link rel="stylesheet" type="text/css" href="dummymedical.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-------------------------------THIS FOR FONT FAMILY------------------------------------->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Pushster&display=swap" rel="stylesheet">
<!----------------------------------------------------------------------------------->

<!------------------------ THIS FOR FONT ICONS-------------------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
<!------------------------------------------------------------------------------>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<link href= "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<script>
// $(document).ready(function(){
//     $('input').click(function(){
// // alert('kz');
//         if(!$(this).val() !== ''){
//             $(this).addClass("errr");
//         } else{
//             $(this).removeClass("errr");
//         }
//     });
// });

// $('#stu_toggle2').prop('disabled',true);
</script>
<style>
    .errr{
        border-bottom:2px solid rgb(83, 135, 186)!important;
        width: 100%;
    	transition: 10.9s
    }

    body{
        font-family: sofia-pro,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    }
    .custom-select {
    
    background:#fff url(image/drop-down.png)right .75rem center/8px 10px no-repeat;
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.5;
    color: #010204;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #77aeb7!important;
    /* box-shadow: -3px 7px 10px -5px rgb(0 0 0 / 50%); */
    border-radius: 3px;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    box-shadow: -4px 3px 10px -5px rgb(0 0 0 / 50%);
  
}
    .form-control{
    /* font-family: inherit;
    border: 1px solid transparent;
    border-bottom: 2px solid #d5d0d0;
    padding: 8px 6px;
    margin: 0;
    width: 100%;
    border-radius: none;
    background: #ececec;
    border-radius: 0;
    box-sizing: border-box;
    -webkit-appearance: none;
    box-shadow: 0 1px 2px rgb(0 0 0 / 8%) inset;
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.08) inset;
    -webkit-box-shadow: 0 1px 2px rgb(0 0 0 / 8%) inset;
    transition: 0.3s all;
    font-size: 1em;
    font-weight: 600;
    text-indent: 8px; */

    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.5;
    color: #010204;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #77aeb7!important;
    /* box-shadow: -3px 7px 10px -5px rgb(0 0 0 / 50%); */
    border-radius: 3px;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    box-shadow: -4px 3px 10px -5px rgb(0 0 0 / 50%);

    }
    .form-control:disabled, .form-control[readonly] {
    background-color:  #fff;
    opacity: 1;
}
    input[type=text]:focus, .form-control:focus, .custom-select:focus {
    outline: none;
    /* background-color: rgb(255 255 255 / 11%); */
    border-color: transparent;
    /* box-shadow: 0 3px 6px rgb(0 0 0 / 8%) inset; */
    -moz-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.08) inset;
    /* -webkit-box-shadow: 0 3px 6px rgb(0 0 0 / 8%) inset; */
}
    .form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #80bdff;
    outline: 0;
    box-shadow: 0 0 0 1PX #77aeb7;
}
    .heading2_1{
    font-size: 16px;
    line-height: 1.42857143;
    color: #333;
    font-weight: 600;
    }
    .form-control-file {
  display: none;
}
.wrapper {
    padding: 3rem;
    background-color: #f5f7fa;
}

.file-name {
  /* position: relative; */
  overflow: hidden;
  /* line-height: 30px; */
  /* padding: 5px; */
  box-sizing: border-box;
  font-size: 15px;
  vertical-align: middle;
  width: 300px;
  /* border: 2px solid #dbdbdb; */
  border-radius: 0;
  /* height: calc(2em + 0.75rem + 2px); */
}
.f_btn ,.f_btn1 {
  background: #3479ce;
  border: none;
  border-radius: 0;
  width: 100px;
  box-sizing: border-box;
  padding: 2px 10px;
  background-color: #4493c7;
  transition: all 0.6s;
  color: #FFF;
  font-size: 11px;
  vertical-align: middle;
  text-transform: uppercase;
  /* margin-left: 1rem; */
  &:hover {
    background: #2a64ad;
    box-shadow: 0 0 5px #33006e;
  }
}
.lab{
    margin-top: 4px!important;
}
.wrapper label {
    display: inline-block;
    margin-top: 1rem;
    font-family: verdana,"Helvetica Neue",Helvetica,Arial,sans-serif;
    color: #212121;
    font-size: 12.2px;
    line-height: 20px;
    font-weight: 600;
    text-align: left;
}
.custom-control {
 margin-right: 12px;
}
label.orphan1 {
    margin-right: 18px;
}
.choose_form {
    font-size: 16px!important;
    text-align: left;
    /* margin-left: 14px; */
    padding-left: 27px!important;
    /* padding-bottom: 6px; */
    /* margin-bottom: 0px; */
    margin-top: 0px!important;
    display: inline-block;
    margin-top: 1rem;
    font-family: verdana,"Helvetica Neue",Helvetica,Arial,sans-serif;
    color: #212121;
    font-size: 12.2px;
    line-height: 20px;
    font-weight: 600;
    text-align: left;
    text-shadow: 2px 7px 5px rgba(0,0,0,0.3), 
    0px -4px 10px rgba(255,255,255,0.3);
    box-shadow: -4px 3px 10px -5px rgb(0 0 0 / 50%);
    background:white;
}

.choose-frm{
    padding: 3rem 3rem 0rem 3rem;
   
}
h1.text-center.sc-heading {
    text-transform: uppercase;
    font-size: 29px;
    text-shadow: 2px 7px 5px rgb(0 0 0 / 30%), 0px -4px 10px rgb(255 255 255 / 30%);
    font-family: verdana,"Helvetica Neue",Helvetica,Arial,sans-serif;
    color: rgb(0 123 255 / 50%);
}
.wrapperhide {
  pointer-events: none;
  opacity: 0.4;
}
label.f_btn {
    margin-top: 0px;
    padding: 7px 12px;
    margin-bottom: 0px;
    color: white;
    border-radius: 0;
}
#formFile::before {
  content: "Pick file";
  position: absolute;
  z-index: 2;
  display: block;
  background-color: #eee;
  width: 80px;
}
/* input#file-upload:after{
    content: "Pick file";
  position: absolute;
  z-index: 2;
  display: block;
  background-color: #eee;
  width: 80px;
} */
input.file-up:after {
    top: 44px;
    content: "Choose";
    position: absolute;
    z-index: 2;
    color: white;
    padding: 8px 10px 7px 8px;
    display: block;
    background-color: #5387ba;
    width: 82px;
}
.choose-txt {
    width: 130px;
}
</style>
</head>
<body>
    <?php
    include("db.php");
    ?>
  <div class="container">

<div class="main">
    <h1 class="text-center sc-heading">Scholarship Form</h1>
<form class="form" action="" name="myform" method="post" id="myform" onsubmit="return medical()" enctype="multipart/form-data">

<div class="form-group row choose-frm">
                        <label for="inputEmail3" class=" choose_form  col-sm-4 col-form-label">Choose form Type</label>
                        <div class="col-sm-8">
                        <select id="flip" name="form_type" class="form-control">
                             <option value="">Select</option>  
                            <option value="1">Student Form</option>
                            <option value="2">Medical Form</option>
                            <option value="3">Third Form</option>
                            <option value="4">D</option>
                            </select>
                        </div>
                    </div>
                    <div class="wrapper wrapperhide " id="wrapper" >
                  
                
                    <div class="heading1" id="t1">
                        <div class="heading1_1 text-light">A.General Information</div>
                        <div class="heading1_2"><i class="fa-solid fa-chevron-down first text-light"></i></div>
                    </div>
                    <div id="toggle1">
                        <div class="row">
                            
                            <div class="fullname col-lg-4">
                            <input id="id" type="hidden" class="form-control" name="">
                                <label for="fullname" class="text-dark">Full Name</label>
                                <input id="fullname" type="text" class="form-control" name="fullname">
                            </div>  
                            <div class="dob col-md-12 col-lg-4 col-xl-4">
                                <label for="d_o_admission">Date Of Birth</label>
                                <input id="d_o_admission" type="date" class="form-control date" name="dob"  placeholder="Select date...">
                                 
                             </div>
                            <div class="gender col-lg-4">
                                <label for="gender">Gender</label>
                                <div class="row">
                                <div class="custom-control custom-radio" id="gender">
                                    <input type="radio" class="custom-control-input" id="stu_customRadio1" name="gender" value="Male">
                                    <label class="custom-control-label lab" for="stu_customRadio1">Male</label>
                                </div>
                    
                                <div class="custom-control custom-radio female" id="gender">
                                    <input type="radio" class="custom-control-input" id="stu_customRadio2" name="gender" value="Female">
                                    <label class="custom-control-label lab" for="stu_customRadio2">Female</label>
                                </div>
                                </div>
                            </div>  
                        </div>

                        <div class="row">
                            <div class="fathername col-lg-4">
                                <label for="fathername">Father Name</label>
                                <input id="fathername" type="text" class="form-control input-sm" name="fathername">
                            </div>  
                            <div class="mothername col-lg-4">
                                <label for="mothername">Mother Name</label>
                                <input id="mothername" type="text" class="form-control input-sm" name="mothername">
                            </div>  
                        
                            <div class="contact col-lg-4">
                                <label for="contact">Contact Number</label>
                                <input id="contact" type="number" class="form-control input-sm" name="contactnumber">
                            </div>  
                        </div>
                        <div class="row">

                        <div class="col-lg-4">
                            <div class="address">
                                <label for="address">Address/Correspondance</label>
                                <textarea class="form-control input-sm" id="address" name="address" rows="5"></textarea>
                            </div>  
                        </div>                         
                         <div class="col-lg-8">
                            <div class="row">
                                <div class="email col-lg-6">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="form-control input-sm" name="email">
                                </div> 
                                <div class="City col-lg-6">
                                    <label for="City">City</label>
                                    <input id="City" type="text" class="form-control input-sm" name="city">
                                </div>
                                <div class="district col-lg-6">
                                    <label for="district">District</label>
                                    <input id="district" type="text" class="form-control input-sm" name="district">
                                </div>  
                                
                               
                                
                                <div class="state col-lg-6">
                                    <label for="state">State</label>
                                    <input id="state" type="text" class="form-control input-sm" name="state">
                                </div>  
                                
     
   
                            </div>
                       </div>
                        </div>
                    </div>

            
        
            
                <div class="stu_toggle2" id="stu_toggle2">
                    <div class="heading2" id="t2">
                        <div class="heading2_2 text-light">B.Student Details</div>
                        <div class="heading2_3"><i class="fa-solid fa-chevron-down second text-light"></i></div>
                    </div>
                    <div id="toggle2">
                       

                        <div class="row">
                          
                                    <div class="h_admitted col-lg-4">
                                        <label for="h_admitted">Name of School/ College</label>
                                        <input id="h_admitted" type="text" class="form-control input-sm" name="school_name">
                                    </div> 
                                    <div class="h_admitted col-lg-4">
                                        <label for="h_admitted">Enrollment/Register Number</label>
                                        <input id="h_admitted" type="text" class="form-control input-sm" name="reg_no">
                                    </div>  
                             
                                    <div class="h_admitted col-lg-4">
                                        <label for="h_admitted">Class/Department</label>
                                        <input id="h_admitted" type="text" class="form-control input-sm" name="department">
                                    </div>  
                                    <div class="h_admitted col-lg-4">
                                        <label for="h_admitted">School/College Address</label>
                                        <textarea class="form-control input-sm" id="s_c_address" name="school_address"rows="5"></textarea>
                                    </div> 
                                  
                             <div class="col-lg-8">
                                 <div class="row">
                                    <div class="h_admitted col-lg-6">
                                        <label for="h_admitted">Marks/Percentage</label>
                                        <input id="h_admitted" type="text" class="form-control input-sm" name="mark_percentage">
                                    </div> 
                                    <div class="form-group col-lg-6">
                                        <label for="exampleFormControlFile1">Pervious Marksheet</label>
                                        <div class="d-flex">
                                        <!-- <input type="file" class="form-control-file" name="previous_marksheet" id="previous_marksheet btfile">
                                        <input type="text" name="file-name" id="file-name" class="file-name form-control" >
                                        <input type="button" class="f_btn" value="choose"> -->

 
                                       
                                    
                                        <input type="text" id="file-name" name="previous_marksheet" class="choose-txt form-control" >
                                        <input id="file-upload" class="file-up"  name="previous_marksheet"  type="file"  >
                                      

                                    </div>
                                    </div>
                                    <div class="h_admitted col-lg-6">
                                        <label for="h_admitted" class="lab">Term/Semester</label>
                                        <input id="h_admitted" type="text" class="form-control input-sm" name="term_semester">
                                    </div> 
                                    <div class="h_admitted col-lg-6">
                                        <label for="h_admitted"  class="lab">Acadamic Year</label>
                                        <input id="h_admitted" type="text" class="form-control input-sm" name="academic_year">
                                    </div> 
                                  
                                
                                 
                               
                                 </div>
                         
                             </div>
                             <div class="t_o_disease col-lg-4">
                                <label for="t_o_disease">Scholarship category</label>
                                <select class="custom-select" id="t_o_disease" name="scholarship_select"> 
                                    <option value="expert">Scholarship...</option>
                                    <option value="1">Premetric</option>
                                    <option value="2">Post metric</option>
                                </select>
                            </div> 
                             <div class="h_admitted col-lg-4">
                                <label for="h_admitted"> Phone Number</label>
                                <input id="h_admitted" type="text" class="form-control input-sm" name="phone_no">
                            </div>
                        
                         
                            <div class="h_admitted col-lg-4">
                                <label for="h_admitted"> Email</label>
                                <input id="h_admitted" type="text" class="form-control input-sm" name="student_email">
                             </div>
                        </div>

                      
                       
                        <div class="heading2_1 mt-5">Bank AccountDetails:-</div>

                        <div class="account_details"  id="student_bank">
                            <div class="row">
                             
                                <div class="a_number col-lg-4">
                                    <label for="a_number">Account Number</label>
                                    <input id="a_number" type="number" class="form-control" name="account_no1">
                                </div>
                                <div class="n_o_bank col-lg-4">
                                    <label for="n_o_bank">Name Of Bank</label>
                                    <input id="n_o_bank" type="text" class="form-control" name="bank_name1">
                                </div>   
                                <div class="ifsc_code col-lg-4">
                                    <label for="ifsc_code">IFSC Code</label>
                                    <input id="ifsc_code" type="text" class="form-control" name="ifsc_code1">
                                </div>  
                            </div>

                            <div class="row">
                                <div class="aa_number col-lg-4">
                                    <label for="aa_number">Aadhar Number</label>
                                    <input id="aa_number" type="number" class="form-control" name="aadhar_number1">
                                </div>  
                                 <div class="form-group col-lg-4">
                                    <label for="exampleFormControlFile1">Attachement</label>
                                    <div class="d-flex">
                                    <!-- <input type="file" class="form-control-file" name="attachement" id="exampleFormControlFile1">
                                    <input type="text" name="file-name" id="file-name" class="file-name form-control" >
                                    <input type="button" class="f_btn" value="choose"> -->

                                    <input type="text" name="bank_attachment" id="file-name1" class=" choose-txt form-control" >
                                    <input id="file-upload1" class="file-up" name="bank_attachment1" type="file">
                                    </div>
                                  </div>
                            
                            </div>

                        </div>

                       
                    </div>
                </div>
             
                     
                <div id="md_toggle5">
                    <div class="heading2 mt-4" id="t5">
                        <div class="heading2_2">B.Medical Details</div>
                        <div class="heading2_3"><i class="fa-solid fa-chevron-down fith"></i></div>
                    </div>
                    <div id="toggle5">

                        <div class="row">
                            <div class="h_admitted col-lg-4">
                                <label for="h_admitted">Name Of Hospital Admitted</label>
                                <input id="h_admitted" type="text" class="form-control input-sm" name="hospital_name">
                            </div>  
                            <div class="t_o_disease col-lg-4">
                                <label for="t_o_disease">Type Of Disease</label>
                                <select class="custom-select" id="t_o_disease" name="disease_select">
                                    <option value="expert">Affected by...</option>
                                    <option value="1">Injury</option>
                                    <option value="2">Maternity</option>
                                    <option value="3">Illness</option>
                                </select>
                            </div> 
                            <div class="n_o_disease col-lg-4">
                                <label for="n_o_disease">Name Of Disease</label>
                                <input id="n_o_disease" type="text" class="form-control input-sm" name="disease_name">
                            </div>  
                          <div class="t_o_disease col-lg-4">
                                <label for="t_o_disease">Severity Of Disease</label>
                                <select class="custom-select form-control" id="t_o_disease" name="severity_disease">
                                    <option value="expert">Please select ...</option>
                                    <option value="1">Minor</option>
                                    <option value="2">Moderate</option>
                                    <option value="3">Major</option>
                                    <option value="3">Extreme</option>
                                </select>
                            </div> 
                 
                            <div class="d_o_admission col-lg-4">
                                <label for="d_o_admission">Date Of Admission</label>
                                <input id="d_o_admission" class="form-control date" name="admission_date" placeholder="Click me...">
                            </div>  
                            <div class="a_expense col-lg-4">
                                <label for="a_expense">Approximate Expenses</label>
                                <input id="a_expense" type="text" class="form-control" name="approximate_expense">
                            </div>  
                            <div class="r_amount col-lg-4">
                                <label for="r_amount">Requested Amount</label>
                                <input id="r_amount" type="text" class="form-control" name="request_amount">
                            </div> 
                            <div class="form-group col-lg-4">
                                <label for="exampleFormControlFile1"> Hospital Report/LOR </label>
                                <div class="d-flex">
                                <!-- <input type="file" class="form-control-file" name="hospital_report" id="exampleFormControlFile1">
                                <input type="text" name="file-name" id="file-name" class="file-name form-control" >
                                <input type="button" class="f_btn" value="choose"> -->
                                <input type="text" name="hospital_report" id="file-name3" class=" choose-txt form-control" >
                                <input id="file-upload3" class="file-up" name="hospital_report" type="file">
                                </div>
                               </div> 
                            <div class="form-group col-lg-4">
                                <label for="exampleFormControlFile1">Pervious Medical Report</label>
                                <div class="d-flex">
                                <!-- <input type="file" class="form-control-file" name="previous_medical_report" id="exampleFormControlFile1">
                                <input type="text" name="file-name" id="file-name" class="file-name form-control" >
                                <input type="button" class="f_btn" value="choose"> -->
                                <input type="text" name="previous_medical_report" id="file-name4" class=" choose-txt form-control" >
                                <input id="file-upload4" class="file-up" name="previous_medical_report" type="file">
                                </div>
                             </div> 
                        </div>
                         <div class="orphan col-lg-12">
                            
                            <div class="row orphan_1">
                                <label for="orphan" class="orphan1">Do you have Insurance scheme?</label>
                            <div class="custom-control custom-radio" id="in_orphan">
                                <input type="radio" class="custom-control-input" id="customRadio5" name="insurance_scheme" value="yes">
                                <label class="custom-control-label" for="customRadio5">Yes</label>
                            </div>
                
                            <div class="custom-control custom-radio" id="in_orphan">
                                <input type="radio" class="custom-control-input" id="customRadio6" name="insurance_scheme" value="no">
                                <label class="custom-control-label" for="customRadio6">No</label>
                            </div> 
                            </div>
                            <div class="gov" id="in_yes">
                                <div class="row orphan_1">
                                    <div class="a_expense col-lg-4">
                                        <label for="a_expense">Goverment</label>
                                        <input id="a_expense" type="text" class="form-control" name="government" placeholder=" Enter Insurance Id">
                                    </div> 
                    
                                    <div class="a_expense col-lg-4">
                                        <label for="a_expense">Private</label>
                                        <input id="a_expense" type="text" class="form-control" name="private" placeholder=" Enter Insurance Id">
                                    </div> 
                            </div>

                        </div> 
                      
                     
                        
                     </div> 


                        <div class="heading2_1">Bank AccountDetails:-</div>

                        <div class="account_details" id="medical_bank">
                            <div class="row">
                                <div class="a_number col-lg-4">
                                    <label for="a_number">Account Number</label>
                                    <input id="a_number" type="text" class="form-control" name="account_no">
                                </div> 
                           
                                <div class="n_o_bank col-lg-4">
                                    <label for="n_o_bank">Name Of Bank</label>
                                    <input id="n_o_bank" type="text" class="form-control" name="bank_name">
                                </div>  
                                <div class="ifsc_code col-lg-4">
                                    <label for="ifsc_code">IFSC Code</label>
                                    <input id="ifsc_code" type="text" class="form-control" name="ifsc_code">
                                </div> 
                            </div>

                            <div class="row">
                                <div class="aa_number col-lg-4">
                                    <label for="aa_number">Aadhar Number</label>
                                    <input id="aa_number" type="text" class="form-control" name="aadhar_number">
                                </div>  
                                <div class="form-group col-lg-4">
                                    <label for="exampleFormControlFile1">Attachement</label>
                                    <div class="d-flex">
                                        <!-- <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        <input type="text" name="file-name" id="file-name" class="file-name form-control" >
                                        <input type="button" class="f_btn" value="choose"> -->
                                        <input type="text" name="bank_attachment" id="file-name2" class="choose-txt form-control" >
                                        <input id="file-upload2" class="file-up" name='bank_attachment' type="file"  >
                                    </div>
                                   </div>
                            
                            </div>

                        </div>

                    
                    </div>
               </div>
              


                    <div class="heading3" id="t3">
                        <div class="heading3_1 text-light">C.Family Information</div>
                        <div class="heading3_2"><i class="fa-solid fa-chevron-down third text-light"></i></div>
                    </div>
                    <div id="toggle3">
                        <div class="orphan col-lg-12">
                            
                            <div class="row orphan_1">
                                <label for="orphan" class="orphan">Orphan</label>
                            <div class="custom-control custom-radio" id="orphan">
                                <input type="radio" class="custom-control-input" id="stu_customRadio3" name="orphan" value="yes">
                                <label class="custom-control-label" for="stu_customRadio3">Yes</label>
                            </div>
                
                            <div class="custom-control custom-radio" id="orphan">
                                <input type="radio" class="custom-control-input" id="stu_customRadio4" name="orphan" value="no">
                                <label class="custom-control-label" for="stu_customRadio4">No</label>
                            </div>
                            </div>
                        </div> 
                        <div class="orpahan_yes col-lg-4" id="o_yes">
                            <label for="aa_number">Guardian Name</label>
                            <input id="" type="text" class="form-control input-sm" name="guardian_nae">
                        </div>
                        <div class="row10">
                            <div class="f_members" id="o_no">
                                <label for="f_members">Number Of Family Members:-</label>
                                <div class="f_members2">
                                    <table id="myTable" class="table table-bordered">
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Relation</th>
                                        <th>Marital Status</th>
                                        <th>Occupation</th>
                                        <th>Annual Income</th>
                                        <th>Add</th> 
                                        <tr id='row_0'>
                                            <td><input type="text" id="txtfirst" name="name[]" class="form-control input-sm " /></td>
                                            <td><input type="text" id="txtsecond" name="age[]" class="form-control input-sm " /></td>
                                            <td><input type="text" id="txtthird" name="genders[]"  class="form-control input-sm " /></td>
                                            <td><input type="text" id="txtfourth" name="relation[]" class="form-control input-sm " /></td>
                                            <td><select   name="martial_status[]" class="form-control input-sm m" >
                                                <option value="0">Married</option>
                                                <option value="1">Unmarried</option>
                                                <option value="2">Widow/Widowar</option>
                                                <option value="3">Single Parent</option>
                                            </select></td>
                                            <td><input type="text" id="txtfifth" class="form-control "  name="occupation[]" oninput="calculate('row_0')"/></td>
                                            <td><input type="text" id="txtsix" class="form-control t" name="annual_income[]" /></td>
                                            <td><i class="fa fa-plus" onClick="insertRow()"></i></td>
                                        </tr>
                                    
                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                        <label class="form-check-label" for="gridCheck1">
                            Declaration:
                          </label>
                        <div class="col-lg-12" id="gridcheck1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                I hereby declare that the above information is true.
                            </label>
                          </div>
                        </div>
                        </div>
                        <div class="submit">
            
                       
              
 <button type="submit" name="submit"  class="btn btn-primary" id="submit">Submit</button>
            
                        </div>
                    </div>
                </div>
            </form>
      </div>
  </div>

<!--           
<div class="formdata" id="formdata">

</div> -->




<style>
/* .custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer; 
} */
</style>
      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       
        <!-- <script src="dummymedical.js"></script> -->
        <script src="student application.js"></script>
        <script>

    //   $(document).ready(function (){
  
      $('#submit').click(function(e){
   e.preventDefault();
      alert('ok');
    //   var file_image = $('#previous_marksheet').prop('files')[0];
    //   alert(file_image);
      var formdata =new FormData(document.getElementById('myform'));
    //   formdata.append('file',file_image);
      alert(formdata);
     $.ajax({
          url: 'insert.php',
          data: formdata,
          processData: false,
          contentType: false,
          type: 'POST',
          success: function(data){
              alert(data);
        
            //   $('#formdata').html(data);
          }
          });
   
  
    
  });
//   });

// script for choose file
// $(document).ready(function() {
//   $('.f_btn').on('click', function() {
//     $('.form-control-file').trigger('click');
//   });

//   $('.form-control-file').on('change', function() {
//     var fileName = $(this).files[0].name;    
//     $('#file-name').val(fileName);
//   });
// })


// $('.f_btn').click(function() {
//   var i = $(this).prev('#file-name').clone();
//   var file = $('.form-control-file')[0].files[0].name;
//   $(this).prev('#file-name').text(file);
// });

// $(".f_btn").change(function(){
//       // var fileName = $(this.files[0].name);
//       // $('#file-name').val(fileName);

//       var fname=$(".form-control-file").val().split('\\').pop().split('/').pop();
//       $('#file-name').val(fname);
//     });
//     $(".f_btn1").change(function(){
//       // var fileName = $(this.files[0].name);
//       // $('#file-name').val(fileName);

//       var fname=$(".form-control-file").val().split('\\').pop().split('/').pop();
//       $('#file-name1').val(fname);
//     });
</script>
</html>