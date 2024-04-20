<?php
session_start();
if(isset($_SESSION['uid']))
{

}
else
{
    header('location:login.php');
}
?><?php include 'header.php';?>   

<style>
  label{
    color:green;
    font-weight: bold;
    word-spacing: 0.5rem;
    letter-spacing: 0.1rem;
  }
</style>


<div class="container-fluid">
<!-- form control start -->
    <form class="row g-3 mx-auto" action="addCTC.php" method="POST">
  <div class="col-md-4" data-aos="fade-down">
    <label for="nameappln" class="form-label">Applicant Name</label>
    <input type="text" class="form-control text-center shadow rounded" id="text" name="nameappln">
  </div>

  <!-- test -->
  <div class="col-md-4" data-aos="fade-down">
    <label for="inputState" class="form-label">Court Name</label>
    <select id="courtname" class="form-select text-center shadow rounded" name="courtname" >      
      <option selected value="DJ">District & Sessions Court JSO</option>
      <option value="ADJ-I">Additional Court-I, Kotri</option>
      <option value="ADJ-II">Additional Court-II, Kotri</option>
      <option value="ADJ-S">Additional Court, Sehwan</option>
      <option value="SENIOR-I">Senior / Assistant Sessions Court-I, Kotri</option>
      <option value="SENIOR-II">Senior / Assistant Sessions Court-II, Kotri</option>
      <option value="SENIOR-S">Senior / Assistant Sessions Court, Sehwan</option>
      <option value="CJJM-I-K">Civil Court-I, Kotri</option>
      <option value="CJJM-II-K">Civil Court-II, Kotri</option>
      <option value="CJJM-CONSUMER">Consumer Protection Court</option>
      <option value="CJJM-FAMILY">Family Court JSO</option>
      <option value="CJJM-I-S">Civil Court-I, Sehwan</option>
      <option value="CJJM-II-S">Civil Court-II, Sehwan</option>
      <option value="CJJM-III-TBK">Civil Court-III, Sehwan at TBK</option>
      <option value="CJJM-MANJHAND">Civil Court Manjhand</option>
      <option value="all">ALL</option>      
    </select>
  </div>
  <div class="col-md-4" data-aos="fade-down">
    <label for="inputState" class="form-label">Category</label>
    <select id="inputState" class="form-select text-center shadow rounded" name="casecateg" >
      
      <option selected id="casecateg" value="criminal">Criminal</option>
      <option value="civil">Civil</option>
      <option value="family">Family</option>
      <option value="G&W">G&W</option>
      <option value="Misc">Misc</option>
      <option value="other">Other</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Case Number</label>
    <input type="number" class="form-control text-center shadow rounded" id="inputPassword4" name="caseno">
  </div>
  <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Case Year</label>
    <input type="number" class="form-control text-center shadow rounded" id="inputPassword4" name="year">
  </div>
  <div class="col-md-3">
    <label for="inputAddress" class="form-label">Party One</label>
    <input type="text" class="form-control text-center shadow rounded" id="inputAddress" name="partyone">
  </div>
  <div class="col-md-3">
    <label for="inputAddress2" class="form-label">Party Two</label>
    <input type="text" class="form-control text-center shadow rounded" id="inputAddress2" name="partytwo">
  </div>

  <!-- <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Crime Number</label>
    <input type="number" class="form-control text-center shadow rounded" name="crimeno" id="inputPassword4">
  </div> -->

  <!-- <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Crime Year</label>
    <input type="number" class="form-control text-center shadow rounded" name="crimeyear" id="inputPassword4">
  </div>
   -->

  <!-- <div class="col-md-3">
    <label for="inputSyaye" class="form-label">Police Station</label>
    <select id="inputState" class="form-select text-center shadow rounded" name="ps" >      
      <option selected value="Jamshoro">Jamshoro</option>
      <option value="Kotri">Kotri</option>      
      <option value="Railway">Railway</option>
      <option value="Excise & ANF">Excise & ANF</option>
      <option value="Sehwan">Sehwan</option>
      <option value="Looni Kot">Looni Kot</option>      
      <option value="Bhaan Saeedabad">Bhaan Saeedabad</option>
      <option value="Manjhand">Manjhand</option>
      <option value="Nooriabad">Nooriabad</option>
      <option value="Chachar">Chachar</option>
      <option value="Khanoth">Khanoth</option>
      <option value="Budhapur">Budhapur</option>
      <option value="	Thebat">Thebat</option>
      <option value="Rajri">Rajri</option>
      <option value="Naing Sharif">Naing Sharif</option>
      <option value="Amri">Amri</option>
      <option value="	Mahi Otho">Mahi Otho</option>
      <option value="Khero Dero">Khero Dero</option>
      <option value="Jhangara">Jhangara</option>
      <option value="other">Other PS</option>
      <option value="NILL">Nill</option>
    </select>
  </div> -->

  <div class="col-md-3">
    <label for="inputCity" class="form-label">Cell Number</label>
    <input type="text" class="form-control text-center shadow rounded" name="cell" id="cell">
  </div>

  <!-- <div class="col-md-3">
    <label for="date" class="form-label">Disposal Date</label>
    <input type="date" class="form-control text-center shadow rounded" name="datedisposal" id="date">
  </div> -->

  <div class="col-md-3">
    <label for="date" class="form-label">CTC Applied On</label>
    <input type="date" class="form-control text-center shadow rounded" name="datehearing" id="date">
  </div>

  <div class="col-md-3">
    <label for="date" class="form-label">CTC To Be Delivered On</label>
    <input type="date" class="form-control text-center shadow rounded" name="datedelev" id="date">
  </div>

  <div class="col-md-3">
    <label for="status" class="form-label">CTC Status</label>
    <select id="status" name="status" class="form-select text-center shadow rounded" >      
      <option selected id="pending" value="Pending">Pending</option>
      <option id="Ready" value="Ready">Ready</option>
      <option id="pending" value="Delivered">Deleivered</option>
    </select>
  </div> 


  <!-- <div class="col-md-3">
    <label for="ready" class="form-label">CTC Prepared</label>
    <select id="ready" name="ready" class="form-select text-center shadow rounded" >      
      <option selected id="Not Ready" value="Not Ready">Not Ready</option>
      <option id="Ready" value="Ready">Ready</option>
    </select>
  </div>  -->

  <div class="col-md-4">
    <label for="inputCity" class="form-label">Amount / Cost</label>
    <input type="number" class="form-control text-center shadow rounded" name="cost" id="cost">
  </div>
  
  <div class="col-12 text-center mt-5 mb-1">
    <button type="submit" class="btn btn-success btn-lg w-50 " name="submit">Submit</button>
  </div>
  <div class="col-12 text-center mt-5 mb-5">
    <a href="receiptPrint.php" style="text-decoration:none; font-weight:bold; font-size:1rem;" class="btn btn-success shadow round">Print Receipt</a>
  </div>
</form>
<!-- form control end -->

<!-- REPORT CARDS START -->


<!-- ID Generated   -->


<?php
if(isset($_POST['submit']))
{
    include "dbconn.php";
    $nameappln     = $_POST['nameappln'];
    $courtname     = $_POST['courtname'];
    $casecateg     = $_POST['casecateg'];
    $caseno        = $_POST['caseno'];
    $year          = $_POST['year'];
    $partyone      = $_POST['partyone'];
    $partytwo      = $_POST['partytwo'];
    //$crimeno       = $_POST['crimeno'];
    //$crimeyear     = $_POST['crimeyear'];
    $cell          = $_POST['cell'];
    //$datedisposal  = $_POST['datedisposal'];
    $datehearing   = $_POST['datehearing'];
    $datedelev     = $_POST['datedelev'];
    // $ready     = $_POST['ready'];
    $status        = $_POST['status'];
    $cost          = $_POST['cost'];
    //$ps            = $_POST['ps'];
    

    // $imagename = $_FILES['image']['name'];
    // $temp_name = $_FILES['image']['tmp_name'];
    // move_uploaded_file($temp_name,"../dataimg/$imagename");

    $qry ="INSERT INTO `ctccc`(`nameappln`, `courtname` , `casecateg` , `caseno`, `year` , `partyone`, `partytwo`, `cell`, `datehearing`, `datedelev`,`status`, `cost`) VALUES ('$nameappln','$courtname' , '$casecateg', '$caseno' , '$year', '$partyone', '$partytwo','$cell', '$datehearing', '$datedelev', '$status', '$cost')";

    $run = mysqli_query($con,$qry);
    
    $last_id = null;

    if($run == false)
    {
        $error = mysqli_error($con);
        // echo "Error: $error";
        ?>
          <script>
            alert("Fill all fields first");
          </script>
        <?php
    }
    else
    {
        ?>
            <script>
                alert("success");
            </script>
            
        <?php
        
        // Last Row Record Generated Start
        $last_id = $con->insert_id;
        // echo "New record created successfully. Last inserted ID is: " . $last_id;
       
        ?>
            <h1 class="id">
              <?php echo "CTC receipt id is:"."  " . $last_id; ?>
            </h1>
            
            <!-- // Last Row Record Generated Stop -->
        <?php
        ?>
            <script>
            if ( window.history.replaceState )
            {
              window.history.replaceState( null, null, window.location.href );
            }
            </script>
        <?php
    }   
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


