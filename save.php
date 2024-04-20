<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $con = mysqli_connect('localhost','root','toor','ctc' );
if($con == false){
    // echo "Connection failed";
    ?>
    <script>
        alert('Not Done');
    </script>
    <?php
} else {
    // echo "Success";
    ?>
    <!-- <script>
        alert('Conneted to Database');
    </script> -->
    <?php
}
    // Update the record in the database
    $id = $_POST['id'];
    $nameappln     = $_POST['nameappln'];
    $courtname     = $_POST['courtname'];
    //$ready         = $_POST['ready'];
    // $ready         = $_POST['ready'];
    // $casecateg     = $_POST['casecateg'];
    // $caseno        = $_POST['caseno'];
    // $year          = $_POST['year'];
    // $partyone      = $_POST['partyone'];
    // $partytwo      = $_POST['partytwo'];
    // $crimeno       = $_POST['crimeno'];
    // $crimeyear     = $_POST['crimeyear'];
    // $cell          = $_POST['cell'];
    // $datedisposal  = $_POST['datedisposal'];
    // $datehearing   = $_POST['datehearing'];
    // $datedelev     = $_POST['datedelev'];
       $status        = $_POST['status'];
    // $cost          = $_POST['cost'];
    // $ps            = $_POST['ps'];


    $query = "UPDATE ctccc SET nameappln='$nameappln', courtname='$courtname',  status='$status' WHERE id=$id";
    $result = $con->query($query);


    // $query = "UPDATE ctccc SET nameappln='$nameappln', courtname='$courtname', casecateg='$casecateg', caseno='$caseno', year='$year', partyone='$partyone', partytwo='$partytwo', crimeno='$crimeno', crimeyear='$crimeyear', ps='$ps', status='$status' cost='$cost' WHERE id=$id";
    // $result = $con->query($query);

    if ($result) {
        echo "Record updated successfully!";
    } else {
        echo "Error updating record: " . $con->error;
    }

    $con->close();
}
?>