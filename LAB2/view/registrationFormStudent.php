<?php
include '../control/registrationStudentControl.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title> Library Management System </title>
<meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
<body>     

<form action="" method="POST" enctype="multipart/form-data">

<table>

<tr>
    
    <td> <h1><b>Student Registration</b></h1> </td>
</tr>
<tr>
    <td> Name </td>
    <td> <input type="text" name="name"> </td>
</tr>

<tr>
    <td> Age </td>
    <td> <input type="number" name="age"> </td>
</tr>
<tr>
    <td>Gender</td>
    <td> <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female</td>
</tr>
<tr>
<tr>
    <td> Student ID </td>
    <td> <input type="text" name="idNumber"> </td>
</tr>
<tr>
    <td> Attach ID Card  </td>
    <td> <input type="file" name="filetoupload"> </td>
</tr>
<tr>
    <td> Contact Number </td>
    <td> <input type="text" name="contactNumber"> </td>
</tr>
<tr>
    <td> Email </td>
    <td> <input type="text" name="email"> </td>
</tr>
<tr>
    <td> Password </td>
    <td> <input type="password" name="password"> </td>
</tr>
<tr>
    <td> <input type="reset" name="reset"> </td>
</tr>
<tr>
    <td> <input type="submit" name="Submit"> </td>
</tr>

</table>
</body>
</html>
