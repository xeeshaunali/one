<?php
    include 'header.php';    
?>

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

<?php
include "dbconn.php";

// Your SQL query to get row count
$sql = "SELECT COUNT(*) as count FROM ctccc";

// Your SQL query to get row count Pending
$sqlPending = "SELECT COUNT(*) as count FROM ctccc WHERE `status` = 'Pending'";

// Your SQL query to get row count Deleivered
$sqlDel = "SELECT COUNT(*) as count FROM ctccc WHERE `status` = 'Delivered'";

// Your SQL query to get row count Deleivered
$sqlReady = "SELECT COUNT(*) as count FROM ctccc WHERE `status` = 'Ready'";

$result = $con->query($sql);
$resultPending = $con->query($sqlPending);
$resultDel = $con->query($sqlDel);
$resultReady = $con->query($sqlReady);

$rowCount = 0;
$rowCountPending = 0;
$rowCountDel= 0;
$rowCountReady= 0;

if ($result->num_rows > 0) {
    // Fetch the result as an associative array
    $row = $result->fetch_assoc();   
    $rowCount = $row['count'];    
}

if ($resultPending->num_rows > 0) {
    // Fetch the result as an associative array
    $rowPending = $resultPending->fetch_assoc();   
    $rowCountPending = $rowPending['count'];    
}


if ($resultDel->num_rows > 0) {
    // Fetch the result as an associative array
    $rowDel = $resultDel->fetch_assoc();   
    $rowCountDel = $rowDel['count'];    
}


if ($resultReady->num_rows > 0) {
    // Fetch the result as an associative array
    $rowReady = $resultReady->fetch_assoc();   
    $rowCountReady = $rowReady['count'];    
}

// Close the connection
$con->close();
?>


<div class="container-fluid">    
    <div class="row mx-auto">
                        <!-- ADD CTC RECORD BUTTON -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body text-center">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="addCTC.php" style="text-decoration:none; color:white;font-weight:bold;" class="btn btn-success shadow rounded" data-aos="fade-left" >Add CTC Record</a>  
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- EDIT CTC RECORD BUTTON -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body text-center">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="editCTC.php" style="text-decoration:none; color:white;font-weight:bold;" class="btn btn-success shadow rounded" data-aos="fade-up">Edit CTC Record</a>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- GENERATE REPORT BUTTON -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body text-center">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="search.php" style="text-decoration:none; color:white;font-weight:bold;" class="btn btn-success shadow rounded" data-aos="fade-down">Generate Report</a>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PRINT RECEIPP BUTTON -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body text-center">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="receiptPrint.php" style="text-decoration:none; color:white;font-weight:bold;" class="btn btn-success shadow rounded" data-aos="fade-right" >Print Receipt</a>  
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- TOTAL CTC APPLICATION DISPLAY NUMBER CARD -->
                    <div class="row mx-auto text-center">                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary fw-bold text-uppercase mb-1">
                                                Total CTC applications</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowCount; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       <!-- TOTAL CTC DELIVERED DISPLAY NUMBER CARD -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success fw-bold text-uppercase mb-1">
                                                CTCs Deleivered</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowCountDel; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TOTAL CTC PENDING DISPLAY NUMBER CARD -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger fw-bold text-uppercase mb-1">
                                                CTCs Pending</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowCountPending; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                     <!-- TOTAL CTC PENDING DISPLAY NUMBER CARD -->
                     <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger fw-bold text-uppercase mb-1">
                                                CTCs Ready to be Delivered </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowCountReady; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
<!-- END ROW -->

    
</div>
</body>
</html>

