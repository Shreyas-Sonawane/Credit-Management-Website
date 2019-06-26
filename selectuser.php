<?php
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'id8930489_spark');
$q="select name from user";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
       <link rel="stylesheet" href="Assets/css/style.css">
</head>
<body>


<form  action="userdetail.php" method="post">
    <h1> Select User from list</h1>
    <table class="flat-table flat-table-1">


    <?php 
session_start();
$con=mysqli_connect('localhost','root','','company');

$q="select * from user ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>




	<thead>
		<th>Name</th>
		<th>Email</th>
		<th>Credit</th>
		
	</thead>
	<tbody>
		<tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

		</tr>
		<tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        
	</tbody>
</table>


    <div class="view">

<table cellspacing=50px style="position: relative; left: 40%;">
  <tr>
      <td> <h2>Select User</h2></td>
   
<td>

<?php
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'id8930489_spark');
$q="select name from user";
$result=mysqli_query($con,$q);
?>


  <select name="name" onchange="this.form.submit()">
      <option>--Select--</option>
   <?php  
     while($row = $result->fetch_assoc()) { ?>

      <option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>

<?php }
  ?>
  
        </select>
      </td>
    </tr>
       <tr>
           <td></td>
           <!--<td><input type="submit" value="submit"></td>-->
    </tr>
        </table>
</div>
    </form> 
</body>
</html>