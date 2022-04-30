<?php
//include'../model/dbconnect.php';
include'../model/teacherdb.php';

$tid = $name = $contact = $dept = $address = "";

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

    
    if (empty($_POST['contact'])) {
        echo "Contact required";
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
    $tid = input_data($_POST['tid']);

    $name = input_data($_POST['name']);

    $contact = input_data($_POST['contact']);

    $dept = input_data($_POST['dept']);

    $address = input_data($_POST['address']);


        $result = teacher($tid,$name,$contact,$dept,$address);
        if ($result) {
            echo"Teacher Added Successfully";

        }
        else{
            echo "failed";
        }



}
?>