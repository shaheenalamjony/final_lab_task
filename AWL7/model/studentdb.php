<?php
include'../model/dbConnect.php';
  function student($sid,$name,$email,$dept,$sec){
     $conn = connect();
     $sql = oci_parse($conn,"INSERT INTO STUDENT (SID,NAME,EMAIL,DEPT,SEC) values ('$sid','$name','$email','$dept','$sec')");
     $res = oci_execute($sql);
     return $res;
}



?>