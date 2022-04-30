<?php
include'../model/dbconnect.php';
function login($userName,$password){
    $conn = connect();
    $sql = oci_parse($conn, "select USERNAME,PASSWORD from LOGIN where USERNAME='$userName' and PASSWORD='$password'");       
    $res= oci_execute($sql);
    $row = oci_fetch_all($sql, $res);
    return $row;
}

?>