<?php
include'../model/dbConnect.php';
  function teacher($tid,$name,$contact,$dept,$address){
     $conn = connect();
     $sql = oci_parse($conn,"INSERT INTO TEACHER (TID,NAME,CONTACT,DEPT,ADDRESS) values ('$tid','$name','$contact','$dept','$address')");
     $res = oci_execute($sql);
     return $res;
}



?>