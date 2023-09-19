
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 shadow">
            <h1 class="bg-primary text-white text-center shadow">WELLCOME TO STUDENT MANAGEMENT SYSTEM</h1>
        </div>
    </div>
<form action="addstudent.php" class="form" method="POST">
    <div class="row">
        <div class="col-md-12">
            <div class="table">
                <table class="table text-center">
                    <tr>
                        <td>Roll Number</td>
                        <td><input type="number" name="rollno" placeholder="roll number"></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" placeholder="name"></td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td><input type="text" name="city" placeholder="city"></td>
                    </tr>
                    <tr>
                        <td>Parent Contactt</td>
                        <td><input type="text" name="pcont" placeholder="Parent Contact"></td>
                    </tr>
                    <tr>
                        <td>Standard</td>
                        <td><input type="text" name="standard" placeholder="Standard"></td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td><input type="file" name="image" placeholder="Standard" ></td>
                    </tr>
                    <tr>                        
                        <td><input type="submit" name="submit" class=" btn btn-success shadow"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</form>
</div>

</body>
</html>