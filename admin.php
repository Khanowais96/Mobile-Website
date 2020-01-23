
<html>
<head lang="en">
    <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Admin Login</title>
</head>
<style>
    .card{
        margin-top: 100px;}

        .p{
            background: url(img/photo.jpeg);
            background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding-top: 100px;
    padding-bottom: 180px;
        }

</style>

<body>

<div class="container-fluid p">
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="card">
                <div class="card-header bg-info ">
                    <h3 style="color: white">Sign In</h3>
                </div>
                <div class="card-body">
                    <form role="form" method="post" action="admin.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Name" name="admin_name" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="admin_pass" type="password" value="">
                            </div>


                            <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="admin_login" >


                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>

<?php

include "db.php";

if(isset($_POST['admin_login']))
{
    $admin_name=$_POST['admin_name'];
    $admin_pass=$_POST['admin_pass'];

    $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";

    $run_query=mysqli_query($conn,$admin_query);

    if(mysqli_num_rows($run_query)>0)
    {

        echo "<script>window.open('control.php','_self')</script>";
    }
    else {echo"<script>alert('Admin Details are incorrect..!')</script>";}

}

?>