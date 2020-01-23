<?php

include "db.php";
$delete_id=$_GET['del'];
$delete_query="delete  from products WHERE id='$delete_id'";
$run=mysqli_query($conn,$delete_query);
if($run)
{

    echo "<script>window.open('control.php?deleted=user has been deleted','_self')</script>";
}

?>