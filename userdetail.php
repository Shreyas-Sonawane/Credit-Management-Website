<?php 
session_start();
$con=mysqli_connect('localhost','root','','company');
$name=$_POST['name'];
$q="select * from user where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="Assets/css/style.css">

</head>
    <body>
    <div class="view">
        <h2>User Information</h2>
       <table class="flat-table flat-table-1">
          
           <th>Name</th>
           <th>Email</th>
           <th>Credit</th>
           <tr>
           <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

           </tr>


        </table>

        </div>
        <br>
        <div class="css-button" >
                 <p class="css-button-text">Transfer To</p>
                 <div class="css-button-inner">
                 <a href="viewuser.php" >
                 <div class="reset-skew">
                 <p class="css-button-inner-text">Transfer To</p>
               </div></a>
               </div>
               </div>


               <br> <br> <br> <br> <br>
               <div class="css-button" >
                 <p class="css-button-text">Back</p>
                 <div class="css-button-inner">
                 <a href="selectuser.php.php" >
                 <div class="reset-skew">
                 <p class="css-button-inner-text">Back</p>
               </div></a>
               </div>
               </div>
               


    </body>
</html>