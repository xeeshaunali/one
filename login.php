<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container-fluid">

        <div class="row mx-auto">
            <div class="col-12 text-center shadow border">
                <h1 class=" bg-success text-white mt-3 shadow">ADMIN LOGIN</h1>
            </div>
        </div>

        <div class="row mx-auto mt-2 shadow text-center">
            <div class="col-12">
                <form action="login.php" method="POST" class="form">
                    <table class="table">
                        <tr>
                            <td>
                                Username
                            </td>
                            <td>
                                <input type="text" name="uname">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Password
                            </td>
                            <td>
                                <input type="password" name="pass">
                            </td>
                        </tr>                        
                    </table>

                    <input type="submit" name="login" class="center">

                </form>
            </div>
        </div>
    </div>
    
    

<script src="js/bootstrap.js"></script>
</body>
</html>

<?php
include "dbconn.php";

if(isset($_POST['login']))
{
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    $qry = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password';";
    $run = mysqli_query($con,$qry);
    $row = mysqli_num_rows($run);
    if($row < 1)
    {
        ?>
            <script>
                alert("Invalid Logi!n");\
                window.open('login.php',_self);
            </script>
        <?php
    }
    else
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];
        // echo $id;
        // session_start();
        $_SESSION['uid'] = $id;
        header('location:admin/admindash.php');
    }

}

?>