<?php
require('db.php')

$query=mysqli_query($conn,"update tbl-user set status= '" . $_POST['val']."'where user_id='".$_POST['user_id']."' ");
if($query)
{
    $q==mysqli_query($conn,"select * from tbl-user where user_id = '" . $_POST['user_id']."'");
    $data=mysqli_ftch_assoc($query);
    echo $data['$status'];
}
?>