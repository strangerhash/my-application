<?php
include("dbconfig.php");
if(isset($_POST['submit']))
{
    $male= htmlentities(trim($_POST['male']),ENT_NOQUOTES);
	$fname= htmlentities(trim($_POST['fname']),ENT_NOQUOTES);
	$lname=" "; 
	//htmlentities(trim($_POST['lname']),ENT_NOQUOTES);
	$name=$fname."  ".$lname;
	$EMAIL= htmlentities(trim($_POST['EMAIL']),ENT_NOQUOTES);
	$MSISDN= htmlentities(trim($_POST['MSISDN']),ENT_NOQUOTES);
	$city= htmlentities(trim($_POST['city']),ENT_NOQUOTES);
	$state= htmlentities(trim($_POST['state']),ENT_NOQUOTES);
	$newnum=$_POST['num'];
//	$zipcode= htmlentities(trim($_POST['zipcode']),ENT_NOQUOTES);
//	$message= htmlentities(trim($_POST['message']),ENT_NOQUOTES); 
    $unique_id=$_POST['ORDER_ID'];
	
    $sql = "INSERT INTO nehaverm_paytm.payment (order_id,name,email,city,contact,ticket_count) VALUES ('$unique_id','$name','$EMAIL','$city','$MSISDN','$newnum')";
       // $sql="INSERT INTO allinonecyberteam.`enquiry` (`enquiry_id`, `enquiry_name`, `enquiry_mail`, `enquiry_contact`, `enquiry_message`) VALUES (NULL, 'sattu', 'pandeysatyendra870@gmail.com', '7376998083', 'hello')";
        if ($conn->query($sql) == TRUE) 
          {    
               echo "<script>alert('you have registered now proceed to checkout')</script>";
            // echo "got it";
               //header("Location:payment/PaytmKit/pgRedirect.php?ORDER_ID=$unique_id&CUST_ID=$x&INDUSTRY_TYPE_ID=$y &CHANNEL_ID=$z & TXN_AMOUNT=$w");
          } 
      else 
       {
          //echo "Error: " . $sql . "<br>" . $conn->error;
          echo "Error";
           
       }
      }
       
   

?>

<html>
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
    </head>
    <body>
        <!--?php echo $unique_id;?>-->
        
        
             <div class="jumbotron text-center">
         
                         <form  method="post" action="payment/PaytmKit/pgRedirect.php" name="myForm">
                           
                           <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"  name="ORDER_ID" autocomplete="off"	value="<?php echo $unique_id; ?>">
                             <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001">
                            <input type="hidden"  id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                            <input type="hidden"  id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                           <input  type="hidden" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT"	value="<?php echo (3000*$newnum);     ?>">
                            <input type="submit" name="submit" value="Proceed to checkout" class="btn btn-primary">
                                
                             </form>
            </div>
                <div class="container" style="position:fixed;top:150px;width:40%;margin:auto;">
                    <img src="images/ticket.jpeg" alt="not found">
                </div>                         
                             
   
   

        
                       
   </body>
    
    
    
    
</html>

