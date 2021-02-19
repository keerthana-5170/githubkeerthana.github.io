<?php
  include ("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="transfer.css">
    <title>TRANSFER</title>
    <style>
      html{
       background-color:grey;
     }
      </style>
</head>
<body>
   <div class="container-fluid p-4 my-9 bg-dark text-white">
        <a class="button" href="index.html">BACK TO HOME</a>
        </div>
      <div class="details">
      <form method="POST" action="">
          <b>CREDIT ACCOUNT:</b>  <input type="number" name="credit"placeholder=" credit account number" required><br><br>
         <b> DEBIT ACCOUNT: </b> <input type="number" name="debit" placeholder=" debit account number" required><br><br>
         <b>AMOUNT:</b> <input type="number" placeholder=" amount to be transferred" name="amt" required><br><br>
          <input class="button1"type="submit" name="transfer" value="TRANSFER">
        </form>
        <?php
        if(isset($_POST['transfer']))
        {
            $credit=$_POST['credit'];
            $debit=$_POST['debit'];
            $amount=$_POST['amt'];
            $query1="SELECT * FROM customer_details WHERE account_no='$credit'";
            $query2="SELECT * FROM customer_details WHERE account_no='$debit'";
            $data1=mysqli_query($conn,$query1);	
            $total1=mysqli_num_rows($data1);
            $data2=mysqli_query($conn,$query2);	
            $result=mysqli_fetch_assoc($data1);
            $total2=mysqli_num_rows($data2);
            if($result['BALANCE']<$amount && $total1==1 )
            {
                ?>
                <script>
                  alert("INSUFFICIENT BALANCE");
                </script>
            <?php     
            }
            if($total1==0 && $result['BALANCE']==0)
             { ?>
                 <script>
			       alert("INVALID CREDIT ACCOUNT NUMBER");
                 </script>
             <?php    
             }
             else if($total2==0)
             {
                 ?>
                 <script>
			       alert("INVALID DEBIT ACCOUNT NUMBER");
                </script>
                <?php
             }
             else if($debit==$credit)
            {
                ?>
                <script>
                  alert("CANNOT TRANSFER MONEY TO THE SAME ACCOUNT");
               </script>
               <?php 
            }
            if($amount==0)
            {
              ?>
                <script>
                  alert("PLEASE ENTER AMOUNT GREATER THAN 0");
               </script>
               <?php 
            }
            else if($total1==1 && $total2==1 && $result['BALANCE']>$amount && $credit!=$debit)
            {
            $query3="UPDATE CUSTOMER_DETAILS SET BALANCE=BALANCE-'$amount' WHERE ACCOUNT_NO='$credit'";
            $query4="UPDATE CUSTOMER_DETAILS SET BALANCE=BALANCE+'$amount' WHERE ACCOUNT_NO='$debit'";
            mysqli_query($conn,$query3);
            mysqli_query($conn,$query4);
            ?>
               <script>
			       alert("TRANSACTION SUCCESSFUL :)");
                </script>
                <?php
            }
            
           
    }
          ?>
              
</div>
</body>
</html>