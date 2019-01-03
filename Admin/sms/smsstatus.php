<?php
include_once 'DbConnection.php';

 $from = $_POST['from'];
 $to = $_POST['to'];
 $text = $_POST['text'];
 $date = $_POST['date'];
 $id = $_POST['id'];
 $linkId = $_POST['linkId'];
 
  $conn=DatabaseConnection::connect();
   
   $sql="insert into sent_sms_status(sender,recepient, messageID, date, linkId)
   values('$from', '$to', '$text', '$date', '$linkId')";
   
   if($conn->query($sql)){
       echo 'success';
   }else {
       echo 'Failure';
   }
   
   DatabaseConnection::disconnect();
 }