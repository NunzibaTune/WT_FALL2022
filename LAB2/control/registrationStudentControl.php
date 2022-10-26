<?php
setcookie("name","visited",time()+14400*60);
if(isset($_COOKIE["name"]))
{
    echo "Welcome Back";
    echo "<br>";
}
else{
    echo "Welcome To My Site";
    echo "<br>";
}
$hasError=0;
if(isset($_REQUEST["Submit"]))
{
if(empty($_REQUEST["name"]))
{
    echo "Name is required";
    echo "<br>";
    $hasError=1;
}
else
{
    echo $_REQUEST["name"];
}
echo "<br>";


if(empty($_REQUEST["age"]))
{
    echo "Age is required";
    echo "<br>";
    $hasError=1;
}
else
{
    echo $_REQUEST["age"];
}
echo "<br>";

if(empty($_REQUEST["gender"]))
{
    echo "Name is required";
    echo "<br>";
    $hasError=1;
}
else
{
    echo $_REQUEST["gender"];
}
echo "<br>";

if(empty($_REQUEST["idNumber"]))
{
    echo "Student ID is required";
    echo "<br>";
    $hasError=1;
}
else
{
    echo $_REQUEST["idNumber"];
}
echo "<br>";


if(empty($_REQUEST["contactNumber"]))
{
    echo "Contact is required";
    echo "<br>";
    $hasError=1;
}
else
{
    echo $_REQUEST["contactNumber"];

}
echo "<br>";

if(empty($_REQUEST["email"]))
{
    echo "Email is required";
    echo "<br>";
    $hasError=1;
}
else
{
    echo $_REQUEST["email"];
}
echo "<br>";
if(empty($_REQUEST["password"]))
{
    echo "Password is required";
    echo "<br>";
    $hasError=1;
}
else
{
    echo $_REQUEST["password"];
}
echo "<br>";

if(empty($_FILES["filetoupload"]["name"]))
{
    echo "No file selected";
    echo "<br>";
}
else{
    if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"],"../uploads/".$_REQUEST["name"].".jpg"))
    {
        echo "file uploaded";
        echo "<br>";
        
    }
    else
    {
        echo "file not uploaded";
        echo "<br>";
    }
}

if($hasError==0)
{
    $phpArray= array(
        "Name"=>$_REQUEST["name"],
        "Age"=>$_REQUEST["age"],
        "Gender"=>$_REQUEST["gender"],
        "NidNumber"=>$_REQUEST["idNumber"],
        "ConatactNumber"=>$_REQUEST["contactNumber"],
        "Email"=>$_REQUEST["email"],
        "Password"=>$_REQUEST["password"],
        



    );

    $phpdata=json_decode(file_get_contents("../data/data.json"));
    $phpdata[]=$phpArray;

    $myJsonObj=json_encode($phpdata,JSON_PRETTY_PRINT);
    if(file_put_contents("../data/data.json",$myJsonObj))
    {
        echo "json data written";
        echo "<br>";
    }
    else
    {
        echo "error occured";
    }

}
}
?>
