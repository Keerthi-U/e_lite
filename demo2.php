<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
// $ar = ['Rudi', 'Morie', 'Halo', 'Miki'];

// for ($i=0, $len=count($ar); $i<$len; $i++) {
//     echo "$ar[$i] \n";
// }
?>
<body>


<form class="form" action="" name="myform" method="post" id="myform"  enctype="multipart/form-data">
   name: <input type="text" name="name[]">
   <br>
  age:  <input type="text" name="age[]">
  <br>
  name:  <input type="text"  name="name[]">
  <br>
  age:  <input type="text" name="age[]">
  <br>
  <input type="submit" name="submit">
</form>
</body>
</html>