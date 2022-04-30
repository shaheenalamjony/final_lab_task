<?php
//include'../model/dbconnect.php';
include'../model/registrationdb.php';

$name = $uname = $pass = "";

$flag = false;


function input_data($data) 
  {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

if ($_SERVER['REQUEST_METHOD']==='POST') {
    if (empty($_POST['name'])) {
        echo "Name Required";
        echo "<br>";
        $flag = true;
    }

    
    if (empty($_POST['uname'])) {
        echo "Username required";
        echo "<br>";
        $flag = true;
    }

    if (empty($_POST['pass'])) {
        echo "Password required";
        echo "<br>";
        $flag = true;
    }


}
if (!$flag) {
    $name = input_data($_POST['name']);

    $uname = input_data($_POST['uname']);

    $pass = input_data($_POST['pass']);


        $result = register($name,$uname,$pass);
        if ($result) {
            echo"Registration done successfully";

        }
        else{
            echo "Registration failed";
        }



}
?>