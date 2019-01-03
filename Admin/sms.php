<?php
include_once 'DbConnection.php';

$number = "";
   $from   = "";
    $messo ="";
    $message="";
     $recipients="";
    
if (isset($_POST['submit'])) {
   $number = $_POST['number'];
   $from   = $_POST['from'];
    $messo = $_POST['message'];
   
   $conn=DatabaseConnection::connect();
   
   $sql="insert into sent_sms(number, sender, message)values('$number', '$from', '$messo')";
   
   if($conn->query($sql)){
       echo ' message successfully stored in database';
   }else {
       echo 'Failure';
   }
   
   DatabaseConnection::disconnect();
 }
// Be sure to include the file you've just downloaded
require_once('AfricasTalkingGateway.php');
// Specify your login credentials
 $username = "benn";
    $apikey = "85440833eaf48f96c44b59d63f2a8e8160ae79374986ea9f37917c6cc69dd9b0";
// Specify the numbers that you want to send to in a comma-separated list
// Please ensure you include the country code (+254 for Kenya in this case)
 $recipients = $number;
// And of course we want our recipients to know what we really do
 $message    = $messo;
// Create a new instance of our awesome gateway class
$gateway    = new AfricasTalkingGateway($username, $apikey);
// Any gateway error will be captured by our custom Exception class below, 
// so wrap the call in a try-catch block
try 
{ 
  // Thats it, hit send and we'll take care of the rest. 
  $results = $gateway->sendMessage($recipients, $message);
            
  foreach($results as $result) {
    // status is either "Success" or "error message"
     $num = " Number: " .$result->number;
     $status = " Status: " .$result->status;
     $messoid = " MessageId: " .$result->messageId;
     $costt = " Cost: "   .$result->cost."\n";
  }
}
catch ( AfricasTalkingGatewayException $e )
{
  echo $e->getMessage();
}
// DONE!!! 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
  
</head>
<body>
   <div class="container">
        <section>
          <div class="page-header" id="main">

        
            
             
          </div>
        </section>
        <br/>

        <br/>
        


         <form id="contact-form" action="sms.php" method="post" role="form" data-toggle="validator" >
         <div class="form-group">
        <div class="input-group input-group-lg">
        <span class="input-group-addon">Number:</span>
         <input type="text" class="form-control" name="number" placeholder="0711 000xxx" required/> 

         
        </div>
            
        </br>

        <div class="input-group input-group-lg">
        <span class="input-group-addon">Sender:</span>
        <input type="text" class="form-control" placeholder="from" name="from" id="from"required/> 
        
        </div>
      
        </br>

        <div class="input-group input-group-lg">
        <span class="input-group-addon">Message:</span>
        <input type="text" class="form-control" placeholder="Message" name="message" id="message"required/> 
        
        </div>
        
         </br>
        <div class="input-group input-group-lg">
          <button class="btn btn-default" name="submit" id="submit"> Submit</button>
     
        </div>
        </div>
          <div class="form-group">
<div class="col-sm-10 col-sm-offset-2">

</div>
</div>
        </form>
   

    
           
        
        
 