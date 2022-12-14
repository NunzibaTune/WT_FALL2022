<?php
include '../control/registrationFormControl.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title> Library Management System </title>
  <link rel="stylesheet" type="text/css" href="../css/registrationForm.css"/>
  <script src="../js/registrationForm.js" type="text/javascript"></script>
</head>

<body>     
<div class="top-container">
    <h1>Library Management System</h1>
    <h3>Library is now on hands</h3>
</div>

<div class="reg-nav-container">
    <nav class="reg-nav-bar">
        <ul class="reg-nav-items">
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Help</a></li>

        </ul>

    </nav>

</div>

<div class="heading-container">
    <h3>Personal Information:</h3>
</div>

<div class="">
    <form action="" method="POST" onsubmit="return validInfo();">

        <table class="reg-table">

        <tr>
            <td>
                <label for="text">Username</label>
            </td>
            <td>
                <input type="text" name="uname" id="uname" placeholder="Username">

            </td>
        </tr>

        <tr>
            <td>
                <label for="password">Password</label>
            </td>
            <td>
                <input type="password" name="password" id="password" placeholder="Password">
                
            </td>
        </tr>

        <tr>
            <td>
                <label for="number">Student ID</label>
            </td>
            <td>
                <input type="number" name="studentId" id="studentId" placeholder="Student ID">
                
            </td>
        </tr>

        <tr>
            <td>
                <label for="number">Contact Number</label>
            </td>
            <td>
                <input type="number" name="contactNumber" id="contactNumber" placeholder="Contact Number">
                
            </td>
        </tr>

        <tr>
            <td>
                <label for="text">Email</label>
            </td>
            <td>
                <input type="text" name="email" id="email" placeholder="Email">
                
            </td>
        </tr>

        <tr>
            <td>
                <label for="text">Home Address</label>
            </td>
            <td>
                <input type="text" name="homeAddress" id="homeAddress" placeholder="Home Address">
                
            </td>
        </tr>

        <tr>
            <td>
                <label for="file">Attach ID</label>
            </td>
            <td>
                <input type="file" name="attachId" id="attachId">
                
            </td>
        </tr>

        <tr>
            <td>
            <input type="submit" name="submit_page1" id="submit_page1">
            </td>
        </tr>



        </table>
</form>
</div>




</body>


</html>
