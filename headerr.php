<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Window || CTC</title>
    <style>       

        @media screen and (max-width: 768px){
              body {
                font: 14px;                
              }  

              .main-container {
                width: 75%;  
                display: flex;
                justify-content: center;
                height: 100%;              
              }
              
               img {
                width: 25%;
               }

               .nav-container {
                display: none;                
               }

               a {
                font-size: 10px;
               }

               

        }

        * {
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;            
            font-family: montserrat;
        }


        .button-one {
            display: none;
        }

        img {
            width: 50%;
        }

        .main-container {
            display: flex;
            justify-content: space-around;
            justify-content: center;
            align-items: center;
            height: 100%;
            /* background-color: #212529; */
            background-color: #0178e4;

        }


        
        .nav-container ul {
            display: flex;
                                    
        }

        .nav-container ul li {            
            list-style: none;
            color: white;
            font-weight: bold;
            font-size: 1rem;
            margin-left: 3rem;
            justify-content: center; 
            letter-spacing: 1px;           
        }

        .home:hover{
            display: flex;
            justify-content: center;
            height: 100%;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;                        
            background-color: red;
            border-radius: 3px;            
            transition: 500ms;
        }

        a {
            text-decoration: none;            
            display: flex;
            justify-content: center;
            height: 100%;
            color: white;
            border: none;
            
            
        }
            
        
    </style>

</head>
<body>
    <!-- full nav container start -->
    <div class="main-container">
        <!-- logo -->
        <div class="logo">
            <img src="image/DC-LOGO.png" alt="logo">
        </div>        
        <!-- nav bar -->
        <div class="nav-container">
            <ul class="nav-ul">                
                <li class="home"><a href="index.php">Home</a></li>
                <li><a href="addCTC.php">Add CTC</a></li>
                <li><a href="editCTC.php">Edit CTC</a></li>
                <li><a href="search.php">Generate Report</a></li>
                <li><a href="receiptPrint.php">Print Receipt</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <button class="button-one">CLICK</button>
    </div>
    <!-- full nav container end -->


   
    
</body>
</html>