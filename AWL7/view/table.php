<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../view/css/table.css"> -->
    <title>Table View</title>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['uname']))
{
    header('Location: login.html');
}
// include '../view/header.php';
include '../model/tabledb.php';
?>
<div class="title">
    <h1>Table View From Oracle</h1>
</div>
<div class="heading-table">
    <h1>View User</h1>
</div>
<table border="2">
    <tr>
    <th>Name</th>
    <th>Username</th>
    <th>Password</th>
    <!-- <th>Address</th>
    <th>Zipcode</th> -->
    </tr>
    <?php
    $res = showUser();
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>



</body>
</html>