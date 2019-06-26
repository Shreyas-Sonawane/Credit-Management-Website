<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'test');
$q="select name from user";
$result=mysqli_query($con,$q);
//echo $_POST["transfer"];
$_SESSION['to']=$_POST["transfer"];
?>
<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="Assets/css/style.css">
   <style>
     
         input[type=text]
        { 
            margin-top: 5px;
            width:10em;
            height:2em;
            font-size:15px;
           
            font-weight: bold;
        }
         input[type=submit]
        { 
            margin-top: 10px;
            width:6em;
            height:2em;
            font-size:15px;
            background-color: brown;
            font-weight: bold;
        }
       
    </style>
    </head>
    <body>
     <form action="checkcredit.php" method="post"  style="position: relative; top:20%; ">
          <div class="view">
              <strong>Transfer Amount:</strong>
          <br>
            <br>
          <input type="text" name="transfer"><br>
          <br>
        
          <input type="submit">
        
        </div>
        </form>

        
    </body>
</html>
