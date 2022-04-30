<?php
//include'../model/dbconnect.php';
include'../model/studentdb.php';

$sid = $name = $email = $dept = $sec = "";

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

    
    if (empty($_POST['email'])) {
        echo "Email required";
        echo "<br>";
        $flag = true;
    }

    if (empty($_POST['dept'])) {
        echo "Dept required";
        echo "<br>";
        $flag = true;
    }


}
if (!$flag) {
    $sid = input_data($_POST['sid']);

    $name = input_data($_POST['name']);

    $email = input_data($_POST['email']);

    $dept = input_data($_POST['dept']);

    $sec = input_data($_POST['sec']);


        $result = student($sid,$name,$email,$dept,$sec);
        if ($result) {
            echo"Student Added Successfully";

        }
        else{
            echo "failed";
        }



}
?>