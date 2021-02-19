<?php
 include ("connection.php");
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<link rel="stylesheet" href="details.css">
<style>
      html{
       background-color:grey;
     }
    
      </style>
<head>
    <title >VIEW ALL CUSTOMERS</title>
</head>
<header>

<div class="container-fluid p-3 my-9 bg-dark text-white">
        <a class="button" href="index.html">BACK TO HOME</a>   
        <b><h5>DETAILS OF ALL CUSTOMERS</h5></b>
       
        </div>
</header>
<body> 
<div>

<?php

$query="SELECT * FROM customer_details ";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total != 0) 
{  
    ?> 
    <div class="table">
     <table>
          <tr>
              <th>CUSTOMER_ID</th>
              <th>NAME</th>
              <th>ACCOUNT_NO</th>
              <th>BALANCE</th>
              <th>EMAIL</th>
              <th>MOBILE_NO</th>
          </tr>
   <?php         
    while($result=mysqli_fetch_assoc($data))
    {
      echo"  <tr>
        <td>" .$result['MOBILE_NO']."</td>
        <td>" .$result['NAME']."</td>
        <td> ".$result['ACCOUNT_NO']."</td>
        <td>".$result['BALANCE']."</td>
        <td> ".$result['EMAIL']."</td>
        <td>".$result['MOBILE_NO']."</td>
    </tr>";
    }
}
    else
    {
       echo"no record found";
    }
 
?>
</table>
</div>
<div>
</body>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>