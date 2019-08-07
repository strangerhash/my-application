<?php 

session_start();
include("dbconfig.php");
$message="";

if($conn->connect_error)
{
  die("connection failed" . $conn->connect_error);
 }
 if (isset($_POST["submit"]))
 {
 $name =htmlspecialchars($_POST['value']);
 }
 //$name=htmlspecialchars($name);
// $name=mysql_real_escape_string($name);
 
 if($name==' ')
 {
     $message="<div><input type='button' class='btn btn-primary' value='USER HAS NOT REGISTERED YET'></div>";
 }
 $sql="SELECT * FROM database.table WHERE order_id='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  
    while($row = $result->fetch_assoc())
    {
	
       $x=$row['order_id'];
       //$_SESSION['user']=
       echo "<br>";
      // echo $x;
        $y=$row['name'];
         $_SESSION['user']=$x;
        echo "<br>";
         $z=$row['email'];
         echo "<br>";
         $w= $row['city'];
          echo "<br>";
          $a=$row['ticket_count'];
          $message="<div class'btn btn-success'>CONGRATS....USER IS VERIFIED</div>";
       
}
}
 else 
       {
          //echo "Error: " . $sql . "<br>" . $conn->error;
          echo "NOt found";
          $message="<div class'btn btn-primary'>USER HAS NOT REGISTERED YET</div>";
           
       }
          

     
  //    }
  session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>msmrsinternational event</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <?php 
     if(isset($_SESSION['user']))
     {
    
    ?>
     
<div class="jumbotron bg-dark text-white">
<div class="container">
<?php  echo $message;?>    
 <table class="table">
    <thead>
      <tr>
        <th>ORDER ID</th>
        <th>NAME</th>
        <th>Email</th>
        <th>CITY</th>
        <th>Ticket count</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $x;?></td>
        <td><?php echo $y;?></td>
        <td><?php echo $z;?></td>
        <td><?php echo $w;?></td>
        <td><?php echo $a;?></td>
      </tr>
      </tbody>
  </table>
</div>
</div>
<?php
}
else
{
    
    $message1="<div class='jumbotron text-center'>NOT VERIFIED</div>";
    echo $message1;
}


//$fname="sd";
//$lname="D";
//$name=$fname." ".$lname;
//echo $name;

?>
<a href="https://msmrsinternationalindia.com"><input type="button" class="btn btn-success" value="HOMEPAGE"></a>
</body>
</html>



