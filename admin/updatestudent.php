<?php
session_start();
if(isset($_SESSION['uid']))
{
    // header("location:updatestudent.php");
}
else
{
    header("location:../login.php");
}
?>

<?php

include 'header.php';
?>
<div class="container-fluid">
    <div class="row">
            <div class="col-md-10 shadow">
                <h1 class="bg-primary text-white text-center shadow">WELLCOME TO STUDENT MANAGEMENT SYSTEM</h1>
            </div>
            <div class="col-md-2 shadow">
                <h3 class="bg-primary "><a href="logout.php" class="text-white">LOGOUT</a></h3>
            </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="updatestudent.php" class="form" method="POST">
                <table>
                    <tr>
                        <th>Enter Student Standard</th>
                        <td><input type="text" name="standard" placeholder="Enter Standard" required="required"></td>
                    
                        <th>Enter Student Name</th>
                        <td><input type="text" name="name" placeholder="Enter Standard" required="required"></td>
                        <td colspan="2"><input type="submit" name="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

<?php
    
    if(isset($_POST['submit']))
    {
        include "../dbconn.php";    
        $name = $_POST['name'];
        $standard = $_POST['standard'];
        $qry = "SELECT * FROM `student` WHERE `name` = '$name' AND `standard` = '$standard';";
        $run = mysqli_query($con,$qry);
    }
?>
</body>
</html>