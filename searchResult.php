<?php
session_start();
if (isset($_SESSION['uid'])) {

} else {
    header('location:login.php');
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
    <style>
        body {
            margin: 0 auto;
            padding: 0px;
        }

        th {
            border: 1px solid black;
            padding-top:4px !important;
            padding-bottom:16px !important; 
        }

        td {
            border: 1px solid black;
            padding-bottom:2px !important;            
            
        }
    </style>

    <style>
        /* Add a CSS rule to hide the button when printing */
        @media print {
            .print-button {
                display: none !important;
            }
        }
    </style>

    <title>ONE WINDOW || CTC</title>
</head>

<body>

    <?php
    // Your database connection code here
    include "dbconn.php";

    $start_date = isset($_GET['start_date']) ? $_GET['start_date'] : '';
    $end_date = isset($_GET['end_date']) ? $_GET['end_date'] : '';
    $court_name = isset($_GET['courtname']) ? $_GET['courtname'] : 'all';
    $status = isset($_GET['status']) ? $_GET['status'] : 'all';
    $ready = isset($_GET['ready']) ? $_GET['ready'] : 'all';

    // Build the SQL query based on the selected filters
    $sql = "SELECT * FROM ctccc WHERE 1";

    // Add conditions based on the provided filters
    if (!empty($start_date) && !empty($end_date)) {
        $sql .= " AND datehearing BETWEEN '$start_date' AND '$end_date'";
    }

    // Filter by Court Name
    if ($court_name !== 'all') {
        $sql .= " AND courtname = '$court_name'";
    }

    // Filter by Status
    if ($status !== 'all') {
        $sql .= " AND status = '$status'";
    }

    // Filter by Prepared CTC Ready
    // if ($ready !== 'all') {
    //     $sql .= " AND ready = '$ready'";
    // }

    $result = $con->query($sql);
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbs5uoF0Zl3+kv4o5C/gSA4gEhqU7TWq18LDnZwiabtGUpJ3pi5P3BYWBn2bvy5+J" crossorigin="anonymous">
        <title>Search Results</title>
    </head>

    <body>

        <div class="container-fluid mt-5">
            <h2 class="mb-4 text-center text-success fw-bolder" style="word-spacing:10px; letter-spacing:5px; ">CTC RECORD</h2>
            <?php
            $totalCost = 0; // Initialize total cost variable
            if ($result && $result->num_rows > 0) {
            ?>
                <table class="table table-solid bordered text-center" style="border: 2px solid black; ">
                    <thead>
                        <tr>
                            <th>CTC ID</th>
                            <th>Applicant Name</th>
                            <th>Court Name</th>
                            <th>Category</th>
                            <th>Case No</th>
                            <th>Year</th>
                            <th>PartyOne</th>
                            <th>PartyTwo</th>
                            <!-- <th>CrimeNo</th>
                            <th>CrimeYear</th>
                            <th>P.S</th> -->
                            <!-- <th>DateOFDisposal</th> -->
                            <th>CTC Applied On</th>
                            <th>CTC To be Delivary On</th>
                            <th>Cost</th>
                            <!-- <th>Prepared</th> -->
                            <th>CTC Status</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["nameappln"]; ?></td>
                                <td><?php echo $row["courtname"]; ?></td>
                                <td><?php echo $row["casecateg"]; ?></td>
                                <td><?php echo $row["caseno"]; ?></td>
                                <td><?php echo $row["year"]; ?></td>
                                <td><?php echo $row["partyone"]; ?></td>
                                <td><?php echo $row["partytwo"]; ?></td>
                                
                               
                                <td><?php echo $row["datehearing"]; ?></td>
                                <td><?php echo $row["datedelev"]; ?></td>
                                <td><?php echo $row["cost"]; ?></td>
                                
                                <td><?php echo $row["status"]; ?></td>
                                
                            </tr>
                        <?php
                            // Calculate and accumulate the total cost
                            $totalCost += floatval($row["cost"]);
                        }
                        mysqli_free_result($result);
                        ?>
                    </tbody>
                </table>

            <?php
            } else {
                echo "No records found.";
            }

            $con->close();
            ?>
        </div>

        <!-- Display the total cost at the bottom of the table -->
        <div class="text-end mt-3">
            <strong>Total Cost:</strong> <?php echo number_format($totalCost, 2); ?>
        </div>

        <div class="text-center mt-5">
    <!-- <button class="btn btn-success btn-lg shadow rounded print-button" onclick="printPage()">Print</button> -->
    
            <?php
            // Set the timezone to Pakistan's timezone
            date_default_timezone_set('Asia/Karachi');
            ?>
                <div class="local-date">Date & Time: <?php echo date('Y-m-d H:i:s');
                ?>
                </div>
        </div>

        <div class="text-center mt-5">
            <button class="btn btn-success btn-lg shadow rounded print-button" onclick="printPage()">Print</button>
            <!-- <div class="print-date">Printed on: 
                <?php // echo date('Y-m-d H:i:s'); ?>
            </div>-->
        </div> 

        <script>
            // Function to print the page
            function printPage() {
                window.print();
            }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-eUHJ3A5Cf7pyRffLZ/Dagx3lfUq76EdW8eN7eUtjhKp5AR6Vr+Qe4izfcSeJfBA" crossorigin="anonymous"></script>
    </body>

    </html>
</body>

</html>
