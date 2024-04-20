<?php
session_start();
if(isset($_SESSION['uid']))
{
    header('location:admindash.php');
}
?>

<?php
include "dbconn.php";

if(isset($_POST['login']))
{
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $qry = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password';";
    $run = mysqli_query($con,$qry);
    $row = mysqli_num_rows($run);
    if($row < 1){
        ?>
            <script>
                alert("INVALID LOGIN!!");
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
        header('location:admindash.php');
    }
}
?>


   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./css/bootstrap.css">   
    <script src="datatable/jquery-3.7.0.js"></script>    
    <title>ONE WINDOW || CTC</title>

    <!--/* Small screens (phones) */
@media screen and (max-width: 576px) {
    body {
        font-size: 14px;
    }
    /* Additional styles for small screens */
}

/* Medium screens (tablets) */
@media screen and (min-width: 577px) and (max-width: 768px) {
    body {
        font-size: 15px;
    }
    /* Additional styles for medium screens */
}

/* Large screens (desktops) */
@media screen and (min-width: 769px) and (max-width: 992px) {
    body {
        font-size: 16px;
    }
    /* Additional styles for large screens */
}

/* Extra-large screens (large desktops) */
@media screen and (min-width: 993px) {
    body {
        font-size: 18px;
    }
    /* Additional styles for extra-large screens */
}

/* Adjustments for landscape orientation */
@media screen and (orientation: landscape) {
    /* Additional styles for landscape orientation */
}

/* High-resolution displays (Retina, etc.) */
@media only screen and (min-resolution: 192dpi),
       only screen and (min-resolution: 2dppx) {
    /* Additional styles for high-resolution displays */
}

/* Example of adjusting layout based on screen width */
.container {
    width: 100%; /* Full width for small screens */
    max-width: 1200px; /* Limit width on larger screens */
    margin: 0 auto; /* Center the container */
}

/* Additional styles for other elements as needed */ -->


    <!-- CSS for Login Form-->
    <style>
         @media screen and (max-width: 768px)
{
    body {
        font-size: 14px; /* Adjust font size for smaller screens */
    }
    
    input {
        width: 75%;
    }
    .login-button {        
        width: 50%;
        font-size:0.6rem;
        color: red;
    }
}

body {
    background-color: #0E121A;
}

        .form-container {
            margin: 0 auto;
            margin-top: 3rem !important;
            width: 50%;
            margin-top: 3rem;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;            
            text-align: center;
            background-color: whitesmoke;
            border-radius: 1rem;
        }

        
        input {
            display:block;
            margin: 0 auto;
            text-align:center;
            margin-bottom:1rem;
            border-radius: 0.5rem;            
            box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
            font-size: 2rem;    
            border: none;        
        }
       
        input:hover{
            font-weight: bolder;            
        }

        .login-input{
            background-image: url(image/user.png);
            background-size: 1.5rem;
            background-repeat: no-repeat;
            background-position: left;
            box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
            height: 3rem;            
        }

        .password-input {
            background-image: url(image/password.png);
            background-size: 1.5rem;
            background-repeat: no-repeat;
            background-position: left;
            height: 3rem;
        }

        .login-button {            
            text-align: center;                                                
            font-size: 1rem;
            color: black;            
            margin-top: 5px;
            margin-bottom: 1rem;
            width: 10rem;
            height: 3rem;
            background-color: white;            
            border-radius: 1rem;         
            margin-top: 1rem;
            font-weight: bolder;
            letter-spacing: 6px;
            font-size: 1.3rem;  
            border: none;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;          
        }

        .login-button:hover {
            color: white;
            background-color: #157347;
        }
        
    </style>
</head>
<body>

    <div class="container-fluid">        
        <div class="row">
            <div class="col-md-12 text-center text-primary shadow rounded mt-1">
                <h1 class="fw-bold text-white">District & Sessions Court Jamshoro</h1>
                <h2 class="text-white">One Window Operations || CTC</h2>               
            </div>
        </div>
    </div>    

    <!-- <div class="container-fluid text-center">
        <div class="row mx-auto mt-4 w-50 rounded shadow text-center">
            <div class="col-12">
                <form action="login.php" method="POST" class="form">
                    <table class="table mt-5">
                        <tr>
                            <td class="text-success">
                                User Name
                            </td>
                            <td>
                                <input type="text" name="uname" style="border:1px solid green;" class="rounded shadow" placeholder="Enter User Name">
                            </td>
                        </tr>
                        <tr>
                            <td class="text-success">
                                Password
                            </td>
                            <td>
                                <input type="password" name="pass" style="border:1px solid green" class="rounded shadow" placeholder="Enter Password">
                            </td>
                        </tr>                        
                    </table>
                    
                    <button class="btn btn-success btn-lg rounded shadow mt-4" name="login" type="login" style="margin-bottom:3rem !important;">LOGIN</button>                                        
                </form>
            <div>
        </div>               
    </div> -->


    <div class="form-container" style="margin:0 auto;">
                <form action="login.php" method="POST" class="form">
                    <fieldset style="width:auto;">
                        <legend  id="" runat="" visible="true" style="width:auto; margin-bottom: 3px; margin-top:3px; font-size: 1rem; font-weight: bold; color: #157347; text-align:center;"></legend>
                        <input class="login-input" type="text" name="uname" placeholder="" >
                        <input class="password-input" type="password" name="pass" placeholder="">                        
                        <button name="login" class="login-button" >LOGIN</button>
                        
                    </fieldset>
                </form>
    </div>     

<script src="js/bootstrap.js"></script>
</body>
</html>

