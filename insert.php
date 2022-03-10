<?php
// session_start();
include('db.php');

   
// general information

  //  $selected=$_POST['select']; 
  //     var_dump($selected);
// $id=$_POST['id'];
$form_type = $_POST['form_type'];
 $fullname = $_POST['fullname'];
//  echo"$fullname";
$dob = $_POST['dob'];
// echo $dob;
$gender = $_POST['gender'];
// echo $gender;
 $fathername = $_POST['fathername'];
 $mothername= $_POST['mothername'];
 $contactnumber= $_POST['contactnumber'];
 $address= $_POST['address'];
 $email= $_POST['email'];
 $city= $_POST['city'];
 $district= $_POST['district'];
 $state=$_POST['state'];

// student information 

// $image=$_FILES['user_imag']['tmp_name'];
$school_name=$_POST['school_name'];
$reg_no=$_POST['reg_no'];
$department=$_POST['department'];
$school_address=$_POST['school_address'];
$mark_percentage=$_POST['mark_percentage'];

$previous_marksheet = $_FILES["previous_marksheet"]["name"];
$pm_tempname = $_FILES["previous_marksheet"]["tmp_name"];	
$pm_folder = "previous_marksheet/".$previous_marksheet;

$term_semester=$_POST['term_semester'];
$academic_year=$_POST['academic_year'];
$scholarship_select=$_POST['scholarship_select'];
$phone_no=$_POST['phone_no'];
$student_email=$_POST['student_email'];


if($form_type == '1'){
  $account_no=$_POST['account_no1'];
  $bank_name=$_POST['bank_name1'];
  $ifsc_code=$_POST['ifsc_code1'];
  $aadhar_number=$_POST['aadhar_number1'];

  $bank_attachment = $_FILES["bank_attachment1"]["name"];
  $tempname = $_FILES["bank_attachment1"]["tmp_name"];	
  $folder = "bank_attachment/".$bank_attachment;
  echo $bank_attachment;



}else{
  $account_no=$_POST['account_no'];
  $bank_name=$_POST['bank_name'];
  $ifsc_code=$_POST['ifsc_code'];
  $aadhar_number=$_POST['aadhar_number'];

  $bank_attachment = $_FILES["bank_attachment"]["name"];
  $tempname = $_FILES["bank_attachment"]["tmp_name"];	
  $folder = "bank_attachment/".$bank_attachment;
  echo $bank_attachment;
}




// Medical form  

$hospital_name=$_POST['hospital_name'];
$disease_select=$_POST['disease_select'];
$disease_name=$_POST['disease_name'];
$severity_disease=$_POST['severity_disease'];
$admission_date=$_POST['admission_date'];
$approximate_expense=$_POST['approximate_expense'];
$request_amount=$_POST['request_amount'];
$hospital_report=$_FILES['hospital_report']['name'];

$previous_medical_report=$_FILES['previous_medical_report']['name'];
// echo $previous_medical_report;

$insurance_scheme=$_POST['insurance_scheme'];
// echo $insurance_scheme;
$government=$_POST['government'];
$private=$_POST['private'];
$guardian_name=$_POST['guardian_name'];
$created_at   = date('Y-m-d H:i:s');
$updated_at=  $created_on   = date('Y-m-d H:i:s');
// $created_by = $_SESSION["logged_user"];

echo $query = "INSERT into `scholarship_table`(`form_type`,`fullname`,`dob`,`gender`,`fathername`,`mothername`,`contactnumber`,`address`,`email`,`city`,`district`,`state`,`school_name`,`reg_no`,`department`,`school_address`,`mark_percentage`,`previous_marksheet`,`term_semester`,`academic_year`,`scholarship_select`,`phone_no`,`student_email`,`account_no`,`bank_name`,`ifsc_code`,`aadhar_number`,`bank_attachment`,`guardian_name`,`created_at`,`updated_at`) VALUES ('$form_type','$fullname','$dob','$gender','$fathername','$mothername','$contactnumber','$address','$email','$city','$district','$state','$school_name','$reg_no','$department','$school_address','$mark_percentage','$previous_marksheet','$term_semester','$academic_year','$scholarship_select','$phone_no','$student_email','$account_no','$bank_name','$ifsc_code','$aadhar_number','$bank_attachment','$guardian_name','$created_at','$updated_at')";
$result = mysqli_query($conn,$query);
var_dump($result);
 echo 'Files has uploaded'; 
 if (move_uploaded_file($tempname, $folder)) {
  $msg = "Image uploaded successfully";
}else{
  $msg = "Failed to upload image";
}
if (move_uploaded_file($pm_tempname, $pm_folder)) {
  $msg = "Image uploaded successfully";
}else{
  $msg = "Failed to upload image";
}








?>