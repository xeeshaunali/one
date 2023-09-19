<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="row top">
        <div class="col-12 shadow round">
            <h1 class="bg-primary text-white-50 text-center container shadow round">
                ONE WINDOW OPERATIONS
            </h1>
        </div>
    </div>

    <div class="row container-fluid mt-5 ">
        <div class="col-12 text-end">
            <a href="login.php"><h1 class="text-dark login" >ADMIN LOGIN</h1></a>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <form action="index.php" method="POST" class="form">
                <table class="table border">
                    <tr>
                        <td class="text-success">
                            STUDENT INFORMATION                           
                        </td>
                        <td>
                        <select name="std" id="" class="text-center shadow round" style="width:5rem;">
                                <option value="1">1st</option>
                                <option value="2">2nd</option>
                                <option value="3">3rd</option>
                                <option value="4">4th</option>
                                <option value="5">5th</option>
                                <option value="6">6th</option>
                            </select>
                        </td>                        
                    </tr>
                    <tr>
                        <td>
                            ENTER ROLL NUMBER                            
                        </td>
                        <td>
                        <input type="number" name="rollno" required>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td><input type="submit" name="submit" value="Show Info"></td>
                    </tr>
                </table>

            </form>
        </div>
    </div>
    


    <script src="/js/bootstrap.min.js"></script>
</body>
</html>