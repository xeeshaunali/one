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


<div class="container mt-5">
    <h2 class="mb-4">Generate Report</h2>
    <form action="searchResult.php" method="GET" id="myForm">
        <div class="row mb-3">
            <div class="col-md-3">
                <label for="start_date" class="form-label">From Date:</label>
                <input type="date" name="start_date" id="start_date" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="end_date" class="form-label">To Date:</label>
                <input type="date" name="end_date" id="end_date" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="courtname" class="form-label">Court Name:</label>
                <select name="courtname" id="courtname" class="form-select">
                <option selected value="all">ALL</option>
                <option value="DJ">District & Sessions Court JSO</option>
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
                </select>
            </div>
            <div class="col-md-3">
                <label for="status" class="form-label">Status:</label>
                <select name="status" id="status" class="form-select">
                    <option value="all">All</option>
                    <option value="Pending">Pending</option>
                    <option value="Ready">Ready</option>
                    <option value="Delivered">Delivered</option>
                </select>
            </div>
            

            
            <!-- <div class="col-md-4">
                <label for="court_name" class="form-label">Court Name:</label>
                <input type="text" name="court_name" id="court_name" class="form-control">
            </div> -->
        </div>
        <div class="row mb-3 text-center">            
            <div class="col-md-12">
                <button type="submit" class="btn btn-success btn-lg mt-2">Search</button>
            </div>
        </div>
    </form>
</div>
<script>
    // Set the content of the new window
    printWindow.document.body.innerHTML = tableDataString;
</script>

<!-- Stops page data submission upon page refresh or submitting empty value START-->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

</script>
<!-- Stops page data submission upon page refresh or submitting empty value END -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-eUHJ3A5Cf7pyRffLZ/Dagx3lfUq76EdW8eN7eUtjhKp5AR6Vr+Qe4izfcSeJfBA" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-eUHJ3A5Cf7pyRffLZ/Dagx3lfUq76EdW8eN7eUtjhKp5AR6Vr+Qe4izfcSeJfBA" crossorigin="anonymous"></script>
</body>
</html>
