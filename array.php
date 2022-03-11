<?php
if(isset($_POST['submit'])){

//   $total=$_POST['name'];
//   echo $total;
// for ($i=0; $i <= count($_POST['name'][$i]); $i++){
//  echo $name=$_POST['name'][$i];

//   echo  $age=$_POST['age'][$i];
// }
$count = count($_POST['member']);
for ($i = 0; $i < $count; $i++) {
  echo  $fname = $_POST['member'][$i]['fname'];
  echo  $lname = $_POST['member'][$i]['lname'];
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form class="form" action="" name="myform" method="post" id="myform"  enctype="multipart/form-data">
   name: <input type="text" name="member[0][fname]">
   <br>
  age:  <input type="text" name="age[]">
  <br>
  name:  <input type="text" name="member[0][lname]">
  <br>
  age:  <input type="text" name="age[]">
  <br>
  <input type="submit" name="submit">
</form>
</body>
</html>