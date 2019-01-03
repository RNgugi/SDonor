
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Smart Donor</title>
<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>
<body>
<html>
    <head>
        <link rel="shortcut icon" href="../Images/Capture.JPG" />
        
        <style type="text/css">
  ul {background: url('../Images/nav_bg.png') center 0 repeat-x #CF797E;
      height:58px;
      
            }
  ul li {display: block;position: relative;float: right;}
  li ul {display: none;}
  ul li a {float: left;
	font-family: 'Source Sans Pro', sans-serif;
	line-height:1.8em;
	display:block;
	text-decoration:none;
	font-weight:normal;
	color:#ffffff;
	padding:15px 20px;
	font-size: 1em;
	text-transform: capitalize;
	text-shadow: 0 1px 0 #5C2830;
	letter-spacing:0px;}
  ul li a:hover {text-shadow: 0 1px 0 #EBEBEB;
	-webkit-transition: .2s all linear;
	-moz-transition: .2s all linear;
	-o-transition: .2s all linear;
	transition: .2s all linear;
	color:#D13949;
	background: #E5E5E5;
	background: -moz-linear-gradient(top, #E5E5E5 0%, #C4C4C4 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#E5E5E5), color-stop(100%,#C4C4C4));
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#E5E5E5', endColorstr='#C4C4C4',GradientType=0 );
	-moz-border-radius:5px 5px 0 0;
	-webkit-border-radius:5px 5px 0 0;
	border-radius:5px 5px 0 0;
	box-shadow: inset 0px -2px 4px #9C9797;
	-webkit-box-shadow: inset 0px -2px 4px #9C9797;
	-moz-box-shadow: inset 0px -2px 4px #9C9797;
	-o-box-shadow: inset 0px -2px 4px #9C9797;}
  li:hover ul {display: block; position: absolute;}
  li:hover li {float: none;}
  li:hover a { background-image: url(../Images/nav_bg.png);}
  li:hover li a:hover {background: #E5E5E5;
	background: -moz-linear-gradient(top, #E5E5E5 0%, #C4C4C4 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#E5E5E5), color-stop(100%,#C4C4C4));
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#E5E5E5', endColorstr='#C4C4C4',GradientType=0 );
	-moz-border-radius:5px 5px 0 0;
	-webkit-border-radius:5px 5px 0 0;
	border-radius:5px 5px 0 0;
	box-shadow: inset 0px -2px 4px #9C9797;
	-webkit-box-shadow: inset 0px -2px 4px #9C9797;
	-moz-box-shadow: inset 0px -2px 4px #9C9797;
	-o-box-shadow: inset 0px -2px 4px #9C9797;}
  #drop-nav li ul li {border-top: 0px;}
</style>
    
    
    </head>
    <body>
    

<ul id="drop-nav"> <img src="../Images/Capture.JPG"/ width="200px" height="60px">
 
   <!------------------------------------------------------------------------------------------------------------------------------------>
    <li><a href="logout.php">LOGOUT</a></li>
     <li><a href="#">Sms ></a>
    <ul>
     <li><a href="sendsms.php">Send Sms</a></li>
      <li><a href="viewsent.php">View Sent</a></li>
      
    </ul>
  </li>
     <li><a href="#">Reports ></a>
    <ul>
        <li><a href="../pdf/reg.php">Donor Registration</a></li>
      <li><a href="../pdf/don.php">Remaining Blood</a></li>
      <li><a href="../pdf/camps.php">Camps report</a></li>
        <li><a href="../pdf/req.php">Requested blood</a></li>
        
         </ul></li>
      <li><a href="#">View ></a>
    <ul>
      <li><a href="viewdonor.php">View Donor</a></li>
        <li><a href="viewcity.php">View Town</a></li>
        <li><a href="viewstate.php">View County</a></li>
        <li><a href="viewadver.php">View Adevert</a></li>
        <li><a href="viewnews.php">View News</a></li>
        <li><a href="viewcamp.php">View Camp</a></li>
        <li><a href="viewbloodgroup.php">View Blood Group</a></li>
    </ul>
  </li>
    
      <li><a href="#">Gallery ></a>
    <ul>
      <li><a href="addgallery.php">Add Gallery</a></li>
     
      <li><a href="deletegallery.php">Delete Gallery</a></li>
    </ul>
  </li>
    <li><a href="#">Blood Group ></a>
    <ul>
      <li><a href="addbloodgroup.php">Add Blood Group</a></li>
      <li><a href="upbloodgroup.php">Update Blood Group</a></li>
      <li><a href="deletebloodgroup.php">Delete Blood Group</a></li>
    </ul>
  </li>
   
    <li><a href="#">Camp ></a>
    <ul>
      <li><a href="addcamp.php">Add Camp</a></li>
      <li><a href="updatecamp.php">Update Camp</a></li>
      <li><a href="deletecamp.php">Delete Camp</a></li>
    </ul>
  </li>
     <li><a href="#">County ></a>
    <ul>
      <li><a href="addstate.php">Add County</a></li>
     
      <li><a href="deletestate.php">Delete County</a></li>
    </ul>
  </li>
    <li><a href="#">Town ></a>
    <ul>
      <li><a href="addcity.php">Add Town</a></li>
     
      <li><a href="deletecity.php">Delete Town</a></li>     
    </ul>
    </li>
  <li><a href="#">User ></a>
    <ul>
      <li><a href="adduser.php">Add User</a></li>
      <li><a href="upuser.php">Update User</a></li>
      <li><a href="deluser.php">Delete User</a></li>
    </ul>
  </li>
    
   <li><a href="../index.php">Preview Website</a></li>
</ul>
        <pre>
        
        
        </pre>
    
    </body>


</html>    <center>
   <div style="width:1000px; height:700px; box-shadow:-10px 10px 5px #CCC">
       
       <div style="width:800px;float:left">
<br /><br />

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Smart Donor</title>
    <link rel="shortcut icon" href="../Images/Capture.JPG" />
</head>

<body>
</body>
</html>
       <form method="post">
       <table border="0" align="center" width="400" height="300px" class="shaddoww">
<tr><td colspan="2" align="center" class="toptd">Send SMS to clients</td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td>
<?php
           include "sms.php";
           
           ?></td></tr>
           </table>
</form>
   <br>
  <!---------------------------------------------------------------------------------------------------->
        <div style="height:auto; width:1000px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">
 <table cellpadding="20" cellspacing="30"  style="margin:auto" border="1">

   <tr><td colspan="7" align="center"><img src="../Images/sent.JPG" height="90px" /></td></tr>

   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:bisque" align="center" class="bold">            
             <td class="bold" style="color:red"  >Blood Group</td>
             <td align="center">Name</td>
             <td align="center">Gender</td>
             <td align="center">age</td>
              <td align="center">request message</td>
             <td align="center">date requested</td>
             <td align="center"> sent message</td>
             <td align="center">time sent</td>
        </tr>
                   



<?php

	
$cn=mysqli_connect("localhost","root","root","bloodbank");
$s="select * from sent_message";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr>
                <td  style=' padding-left:50px'>$data[0]</td>
                <td  style=' padding-left:10px'>$data[1]</td>
                <td  style=' padding-left:20px'>$data[2]</td>
                <td  style=' padding-left:50px'>$data[3]</td>
                <td  style=' padding-left:60px'>$data[8]</td>
                <td  style=' padding-left:60px'>$data[7]</td>
                <td  style=' padding-left:60px'>$data[12]</td>
                <td  style=' padding-left:60px'>$data[13]</td>
                </tr>";
			}
			mysqli_close($cn);
			?>


</table>
</form>
      <!--------------------------------------------------------------------------------------------------------->
       </div>

   </div>
    </center>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Smart Donor</title>
</head>

<body>
 <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		<ul>
			
	    </ul>
	</div>
		<div class="copy">
				<p class="title">© All Rights Reserved | Design by  Smart Donor</p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>
</body>
</html>   
</body>
</html>