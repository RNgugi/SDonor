 
    

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
  <title>Moo Yoghurts.</title>
  <link rel="icon" type="image/gif/png" href="../wafula-logo.ico">
  <link rel="icon" type="image/gif/png" href="wafula-logo.ico">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=pacifico">
</head>
<body>
   <div class="container">
        <section>
          <div class="page-header" id="main">

         <h2>Moo Yoghurts.</h2><h4>Tasty and refreshing as always.</h4>
            
             
          </div>
        </section>
        <br/>

         <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header"> 
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                 <span class="sr-only"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
    
   </div>
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
       <li class="active"><a href="index.php" style="font-size:20px;">Home <span class="sr- only"></span></a></li>
       <li> <a href="sms.php" style="font-size:20px;">Bulk SMS</a></li>
       <li>
           <a href="ussd.php" style="font-size:20px;">USSD</a>
          </li>  
         
          
             

   </div> <!-- /.navbar-collapse -->
   </div>   <!-- /.container-fluid! -->
   </nav>


        <br/>
        <h2>Fill details to send SMS.</h2>


         <form id="contact-form" action="header.php" method="post" role="form" data-toggle="validator" >
         <div class="form-group">
        <div class="input-group input-group-lg">
        <span class="input-group-addon">Number:</span>
         <input type="text" class="form-control" name="number" required/> 

         
        </div>
             <?php echo "<p class='text-danger' style='font-size:15px;'>$errNumber</p>";?>
        </br></br></br>

        <div class="input-group input-group-lg">
        <span class="input-group-addon">Sender:</span>
        <input type="text" class="form-control" placeholder="from" name="from" id="from"required/> 
        
        </div>
        <?php echo "<p class='text-danger' style='font-size:14px;'>$errNumber</p>";?>
        </br></br></br>

        <div class="input-group input-group-lg">
        <span class="input-group-addon">Message:</span>
        <input type="text" class="form-control" placeholder="Message" name="message" id="message"required/> 
        
        </div>
        <?php echo "<p class='text-danger'style='font-size:14px;'>$errMessage</p>";?>
         </br></br></br>
        <div class="input-group input-group-lg">
          <button class="btn btn-default" name="submit" id="submit"> Submit</button>
     
        </div>
        </div>
          <div class="form-group">
<div class="col-sm-10 col-sm-offset-2">
<?php echo $result; ?>  
</div>
</div>
        </form>
   
 <?
      $num ="";
$stat ="";
$messoid="";
 $costt ="";
  $err="";
  $number="";
  $from="";
  $messo="";
  $var = "";
  $result="";
  $errNumber = "";
  $errFrom ="";
  $errMessage ="";
     
     //get form data
//get form data
 if (isset($_POST['submit'])) {
   $number = $_POST['number'];
   $from   = $_POST['from'];
    $messo = $_POST['message'];
   
 }
     ?>
    <?php
    // Be sure to include the file you've just downloaded
    require_once('AfricasTalkingGateway.php');
    // Specify your login credentials
    $username = "njoro_soo";
    $apikey = "598fb34f65fc49120059578505b2bacd0769517b42383b7f4797a7081a5afe69";
    // Specify the numbers that you want to send to in a comma-separated list
    // Please ensure you include the country code (+254 for Kenya in this case)
    $recipients = "$number";
    // And of course we want our recipients to know what we really do
    $message = "$messo";
    // Create a new instance of our awesome gateway class
    $gateway = new AfricasTalkingGateway($username, $apikey);
    // Any gateway error will be captured by our custom Exception class below,
    // so wrap the call in a try-catch block
    try
    {
    // Thats it, hit send and we'll take care of the rest.
    $results = $gateway->sendMessage($recipients, $message, $from);
                
    foreach($results as $result) {
    // status is either "Success" or "error message"
    echo " Number: " .$result->number;
    echo " Status: " .$result->status;
    echo " MessageId: " .$result->messageId;
    echo " Cost: " .$result->cost."\n";
    }
    }
    catch ( AfricasTalkingGatewayException $e )
    {
    echo "Encountered an error while sending: ".$e->getMessage();
    }
    // DONE!!! 
    ?>
    
           
        
        
 