<?php
session_start();
if(isset($_SESSION['uid']))
{

}
else
{
    header('location:login.php');
}
?>
<?php include 'header.php';?>   

<div class="container-fluid">

    <h2 class="text-center text-success">Edit CTC Status </h2>
    <!-- Search Edit Form Start -->
    <form action="editCTC.php" method="GET" class="text-center">
        <label for="search">Search by ID:</label>
        <input type="number" name="id" id="search" required class="shadow rounded form-select text-center">
        <button type="submit" class="btn btn-success btn-lg shadow rounded mt-5">Search</button>
    </form>
    <!-- Search Edit Form End -->

    <?php
    // Display the record for editing
    if (isset($_GET['id'])) {

        include "dbconn.php";
        $id = $_GET['id'];
        

        if ($con->connect_error) {
            die('Connection failed: ' . $con->connect_error);
        }

        // Fetch record based on ID
        $query = "SELECT * FROM ctccc WHERE id = $id";
        $result = $con->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
    ?>
            <!-- Edit Form -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <form action="save.php" method="POST">

            <div class="col-md-3">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label for="name">Name:</label>
            </div>

          <input type="hidden" name="nameappln" id="nameappln" value="<?php echo $row['nameappln']; ?>" class="shadow rounded form-select text-center" >
          <br>

          <div class="col-md-12" >
            <label for="status" class="form-label">Application Status</label>
            <select  id="status" name="status" class="form-select text-center shadow rounded" >   

                <option id="pending" value="pending" <?php echo ($row['status'] == 'pending') ? 'selected' : ''; ?>>Pending</option>

                <option id="Ready" value="Ready" <?php echo ($row['status'] == 'Ready') ? 'selected' : ''; ?>>Ready</option>

                <option id="Delivered" value="Delivered" <?php echo ($row['status'] == 'Delivered') ? 'selected' : ''; ?>>Deleivered</option>          
            </select>          
          </div> 

          
          <div class="col-md-12">
          <label for="courtname" value="courtname" class="form-label">Court Name</label>
          <select id="courtname" name="courtname" class="form-select text-center shadow rounded">   

          <option id="DJ" value="DJ" <?php echo ($row['courtname'] == 'DJ') ? 'selected' : ''; ?>>DJ</option>

          <option id="ADJ-I" value="ADJ-I" <?php echo ($row['courtname'] == 'ADJ-I') ? 'selected' : ''; ?>>ADJ-I</option>

          <option id="ADJ-S" value="ADJ-S" <?php echo ($row['courtname'] == 'ADJ-S') ? 'selected' : ''; ?>>ADJ-S</option>

          <option id="SENIOR-I" value="SENIOR-I" <?php echo ($row['courtname'] == 'SENIOR-I') ? 'selected' : ''; ?>>Senior / Assistant Sessions Court-I, Kotri</option>

          <option id="SENIOR-II" value="SENIOR-II" <?php echo ($row['courtname'] == 'SENIOR-II') ? 'selected' : ''; ?>>Senior / Assistant Sessions Court-II, Kotri</option>

          <option id="SENIOR-S" value="SENIOR-S" <?php echo ($row['courtname'] == 'SENIOR-S') ? 'selected' : ''; ?>>Senior / Assistant Sessions Court, Sehwan</option>


          <option id="CJJM-I-K" value="CJJM-I-K" <?php echo ($row['courtname'] == 'CJJM-I-K') ? 'selected' : ''; ?>>Civil Court-I, Kotri</option>

          <option id="CJJM-II-K" value="CJJM-II-K" <?php echo ($row['courtname'] == 'CJJM-II-K') ? 'selected' : ''; ?>>Civil Court-II, Kotri</option>

          <option id="CJJM-CONSUMER" value="CJJM-CONSUMER" <?php echo ($row['courtname'] == 'CJJM-CONSUMER') ? 'selected' : ''; ?>>Consumer Protection Court</option>

          <option id="CJJM-FAMILY" value="CJJM-FAMILY" <?php echo ($row['courtname'] == 'CJJM-FAMILY') ? 'selected' : ''; ?>>Family Court JSO</option>

          <option id="CJJM-I-S" value="CJJM-I-S" <?php echo ($row['courtname'] == 'CJJM-I-S') ? 'selected' : ''; ?>>Civil Court-I, Sehwan</option>

          <option id="CJJM-II-S" value="CJJM-II-S" <?php echo ($row['courtname'] == 'CJJM-II-S') ? 'selected' : ''; ?>>Civil Court-II, Sehwan</option>


          <option id="CJJM-III-TBK" value="CJJM-III-TBK" <?php echo ($row['courtname'] == 'CJJM-III-TBK') ? 'selected' : ''; ?>>Civil Court-III, Sehwan at TBK</option>

          <option id="CJJM-MANJHAND" value="CJJM-MANJHAND" <?php echo ($row['courtname'] == 'CJJM-MANJHAND') ? 'selected' : ''; ?>>Civil Court Manjhand</option>
          
          </select>
          </div> 

          
<!-- Add other fields as needed -->
<div class="row">
    <div class="col-md-12 text-center rounded shadow"><button type="submit" class="btn btn-danger btn-lg text-center mt-5 mb-3">Save Changes</button></div>
</div>
            
</form>
                </div>

              </div>
            </div>
            
    <?php
        } else {
            echo "Record not found.";
        }

        $con->close();
    }
    ?>

<!-- Stops page data submission upon page refresh or submitting empty value START-->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<!-- Stops page data submission upon page refresh or submitting empty value END -->

</body>
</html>


