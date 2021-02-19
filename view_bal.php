<?php
include("connection.php");
  $accno=$_POST['accno'];
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="view_bal.css">
    <title>CHECK BALANCE</title>
    <style>
            table{
             border-collapse:collapse;
             width:100%;
             color:#588c7e;
             font-family:25px;
             width:700px;
             height:200px; 
         }
         th{
             background-color:#599c7e;
             color:white;
         }
         tr
         {
             background-color:#133332;
         }
         .table
         {
             position:absolute;
             margin-left:300px;
             margin-top:150px;
              
         }
         table, th, td {
            border: 4px solid black;
          }
         .button
        {
            color:white;
            padding:10px 30px;
            text-align:center;
            background-color:#131212;
            font-size:16px;
            cursor:pointer;
            outline:none;
           border-radius:15px;
           margin-top:10px;
         }
         .button:hover
         {
           color:rgb(17, 16, 16);
           background-color:rgb(240, 233, 233);
           text-decoration:none;
          }
          h5{
              
            text-align:center;
        }
    
    html{
	 background-color:grey;
     }
     </style>
</head>
<body>
<div class="container-fluid p-3 my-9 bg-dark text-white">
        <a class="button" href="index.html">BACK TO HOME</a>   
        <b><h5>CHECK YOUR BALANCE BELOW</h5></b>
       
        </div>
<?php
$query="SELECT * FROM customer_details WHERE account_no='$accno' ";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    if($total != 0) 
    {  
        ?> 
        <div class="table">
        <table >
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
            ?>
            <script>
              alert("INVALID ACCOUNT NUMBER");
            </script>
        <?php
        }
 ?>

</div>
</body>
</html>