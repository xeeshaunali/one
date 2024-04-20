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

<?php
 include "dbconn.php";
// Initialize variables
$id = "";
$data = array();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    // Validate ID (you may need more thorough validation)
    if (is_numeric($id)) {
        // Prepare and execute the query
        $stmt = $con->prepare("SELECT * FROM ctccc WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        // Fetch data as an associative array
        $data = $result->fetch_assoc();

        // Close the statement
        $stmt->close();
    } else {
        echo "Invalid ID";
    }
}
// Close the connection
$con->close();
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center text-success">Print  Receipt</h2>
      <form action="" method="POST">
      <div class="col-md-12 text-center">
    <label for="inputCity" class="form-label text-dark fw-bold" >Receipt ID</label>
    <input type="number" class="form-control text-center shadow rounded" name="id" id="id">
  </div>
  
  <div class="col-12 text-center mt-5 mb-5">
    <button type="submit" class="btn btn-success btn-lg w-50 " name="submit">Submit</button>
  </div>
      </form>
    </div>
  </div>
</div>

<?php
// Display data in a table if it exists
if (!empty($data)) {
  ?>
  <div class="container-fluid text-center shadow rounded">
    <div class="row">
      <div class="col-md-12">
        <form action="" id="myForm" name="myForm" class="text-center w-100">
      <h1 style="color:green; font-size:2rem; text-align:center;" >DISTRICT & SESSIONS COURT JAMSHORO</h1>
    <h1 style="color:green; font-size:1rem; text-align:center;" >Certified True Copy Receipt</h1>
    
    <table class="table text-center w-100 table-hover center" id="myTable">
  <thead> 

    <tr>
      <th scope="col">CTC ID</th>
      <th scope="col">Applicant Name</th>
      <th scope="col">Court</th>
      <th scope="col">Case Type</th>
      <th scope="col">CaseNo</th>
      <th scope="col">Year</th>
      <th scope="col">PartyOne</th>
      <th scope="col">PartyTwo</th>
      <th scope="col">CTC Applied On</th>
      <th scope="col">CTC To Be Delivered</th>
      <th scope="col">Status</th>
      <th scope="col">Cost</th>      
    </tr> 

  </thead>
  
  <tbody>

    <tr>      
      <td><?php echo $data['id']; ?></td>
      <td><?php echo $data['nameappln']; ?></td>
      <td><?php echo $data['courtname']; ?></td>
      <td><?php echo $data['casecateg']; ?></td>
      <td><?php echo $data['caseno']; ?></td>
      <td><?php echo $data['year']; ?></td>
      <td><?php echo $data['partyone']; ?></td>
      <td><?php echo $data['partytwo']; ?></td>
      <td><?php echo $data['datehearing']; ?></td>
      <td><?php echo $data['datedelev']; ?></td>
      <td><?php echo $data['status']; ?></td>
      <td><?php echo $data['cost']; ?></td>
    </tr>   

  </tbody>

</table>
<h5 class="text-right text-black fw-bold">Bring this receipt at the of delivary of CTC</h5>
</form>

<div class="col-12 text-center mt-5 mb-5">
    <button type="" class="btn btn-success btn-lg w-50 " name="" onclick="printTableData()">Print</button>
  </div>
      </div>
    </div>
  </div>

  <?php  
    
    
} else {
    // echo "<p>No data found for the specified ID.</p>";
}
?>

<!-- Stops page data submission upon page refresh or submitting empty value START-->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<!-- Stops page data submission upon page refresh or submitting empty value END -->


<!-- Print Form Data with JS -->

<script>
    function printTableData() {
        // Get the table element by its ID
        var table = document.getElementById('myTable');

        // Create a new window for printing
        var printWindow = window.open('', '_blank');

        // Include Bootstrap CSS in the new window
        //var bootstrapLink = document.createElement('link');
        //bootstrapLink.href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css';
               
        //bootstrapLink.rel = 'stylesheet';
        //printWindow.document.head.appendChild(bootstrapLink);


        // Assuming Bootstrap CSS file is in the 'bootstrap' folder within your project
      var localBootstrapLink = document.createElement('link');
      localBootstrapLink.href = 'bootstrap.min.css';
      localBootstrapLink.rel = 'stylesheet';
      printWindow.document.head.appendChild(localBootstrapLink)

        // Create a string representation of the table data with Bootstrap styling and current date/time
        var currentDate = new Date();
        var formattedDate = currentDate.toLocaleString();

        var tableDataString = '<div class="container-fluid text-center shadow rounded">' +
                                '<div class="row">' +
                                    '<div class="col-md-12">' +
                                        '<h1 style="color:black; font-size:2rem; text-align:center;">DISTRICT & SESSIONS COURT JAMSHORO</h1>' +
                                        '<h1 style="color:black; font-size:2rem; text-align:center;">Certified True Copy Receipt</h1>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="row">' +
                                    '<div class="col-md-12">' +
                                        '<table class="table table-bordered text-center w-75 mx-auto table-hover fw-bolder bg-white rounded" style="border-radius:0.5rem !important; border:3px solid black !important; padding:2px 2px 2px 2px;">' +
                                            '<tbody>';

        for (var i = 0; i < table.rows.length; i++) {
            tableDataString += '<tr style="color:black; font-wight:bold;">';
            for (var j = 0; j < table.rows[i].cells.length; j++) {
                tableDataString += '<td style="color:black; font-wight:bold; border:1px solid black;">' + table.rows[i].cells[j].innerText + '</td>';
            }
            tableDataString += '</tr>';
        }

        tableDataString += '</tbody>' +
                                        '</table>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="row">' +
                                    '<div class="col-md-12 text-right mt-3">' +
                                        '<p style="border-top: 2px solid black; word-spacing:5px;">Bring this receipt at the time of delivery of CTC</p>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="row">' +
                                    '<div class="col-md-12 text-right mt-3">' +
                                        '<p style="font-size: 1rem; fw-bold; word-spacing:7px;">Printed on: ' + formattedDate + '</p>' +
                                    '</div>' +
                                '</div>' +
                            '</div>';

        // Set the content of the new window
        printWindow.document.body.innerHTML = tableDataString;

        // Use setTimeout to add a delay before triggering the print action
        setTimeout(function () {
            // Print the new window
            printWindow.print();
        }, 500); // Adjust the delay duration as needed
    }
</script>




</body>
</html>


