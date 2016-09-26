<?php
		if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
    $qualifications = $_POST['qualifications'];
		$file = $_POST['file'];
		//$selectOption = $_POST['taskOption'];
		$subject = 'Indian College of Anaesthesiologists';
		//$human = intval($_POST['human']);
		//$message = $_POST['message'];


		//$body ="From: $name\n E-Mail: $email\n Message:\n $message Address: $address\n Mobile Number: $mobile\n";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		
		// Check if address has been entered
		if (!$_POST['address']) {
			$errAddress = 'Please enter your address';
		}

		// Check if Mobile Number has been entered
		if (!$_POST['mobile']) {
			$errMobile = 'Please enter your Mobile Number';
		}

   

		
		
		//Check if message has been entered
		//if (!$_POST['message']) {
			//$errMessage = 'Please enter your message';
		//}
		
		
		//Check if simple anti-bot test is correct
		//if ($human !== 5) {
			//$errHuman = 'Your anti-spam is incorrect';
		//}

		// If there are no errors, send the email
		if (!$errName && !$errEmail && !$errMessage && !$errHuman) {

	
		$to = 'info@anaesthesiacollege.com';
		
		
		
		//email template for admin
$message = "
<table width='600' border='0' align='center' cellpadding='0' cellspacing='0' style='border: 5px solid #f1f1f1; color:#666;'>
<tr>
</tr>
<tr>
<td align='left' valign='top' bgcolor='#FFFFFF' class='border'><table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#FFFFFF'>
<tr>
<td height='100' align='center'><table width='94%' border='0' cellspacing='0' cellpadding='0' style='border-bottom:1px solid #337ab7;'>

<tr height='110'>

<td width='15%' align='left' valign='middle'><a href='#'><img src='http://anaesthesiacollege.com/test/logo_left.png' alt='ICA' title='ICA' /></a></td>

<td width='75%' align='center' valign='middle'>
<h3 style='color:#337ab7; font-size:16px;'>Indian College of Anaesthesiologists</h3>
</td>

<td width='10%' align='right' valign='middle'><a href='#'><img src='http://anaesthesiacollege.com/test/logo_right.png' alt='ICA' title='ICA' /></a></td>

</tr>

</table></td>
</tr>
<tr>
<td align='left' valign='middle' style='font-size:20px; color:#93d83a; padding:20px 15px 0 18px;'>
User Contact info</td>
</tr>

<tr>
<td height='5' style='padding:0 15px;'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr>
<td height='1' bgcolor='#fff'></td>
</tr>
</table></td>
</tr>

<tr>
<td align='left' valign='top' style='padding:10px 20px;'>
<h3 style='margin-top:0;'>Dear $name,</h3>

<p>Thanks for registering on Anaesthesiacollege.com. Your registration has been successful!</p>
<p>Your registration details are following:</p>

<table width='100%' border='0' cellspacing='0' cellpadding='0'>
     <tbody>
        <tr>
          <th style='padding-bottom:5px; width:17%;' scope='row'>Name:</th>
          <td style='padding-bottom:5px;'>$name</td>
        </tr>

        <tr>
          <th style='padding-bottom:5px;' scope='row'>Email:</th>
          <td style='padding-bottom:5px;'>$email</td>
        </tr>

        <tr>
          <th style='padding-bottom:5px;' scope='row'>Mobile:</th>
          <td style='padding-bottom:5px;'>$mobile</td>
        </tr>

        <tr>
          <th style='padding-bottom:5px;' scope='row'>Address:</th>
          <td style='padding-bottom:5px;'>$address</td>
        </tr>

        <tr>
          <th style='padding-bottom:5px;' scope='row'>Qualifications:</th>
          <td style='padding-bottom:5px;'>$qualifications</td>
        </tr>

    

      </tbody>
    </table>


<p>&nbsp;</p>

<p>
Indian College of Anaesthesiologists
</p>


</td>
</tr>
</table></td>
</tr>
<tr>
<td height='40' valign='middle' align='center' bgcolor='#f1f1f1' style='font-size:12px;'>© Copyright 2015 ICA. All Rights Reserved.</td>
</tr>
</table>



</body>
</html>
";
		
		// Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	  $headers .= 'From:'.$email. "\r\n";	
		
		//mail ($to, $subject, $body, $from);
		mail($to,$subject,$message,$headers);
		//mail sent to admin




		$from = 'info@anaesthesiacollege.com'; 
		$to = $email; 
		//$body = "welcome message";

//email template for user
$body = "
<table width='600' border='0' align='center' cellpadding='0' cellspacing='0' style='border: 5px solid #f1f1f1; color:#666;'>
<tr>
</tr>
<tr>
<td align='left' valign='top' bgcolor='#FFFFFF' class='border'><table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#FFFFFF'>
<tr>
<td height='100' align='center'><table width='94%' border='0' cellspacing='0' cellpadding='0' style='border-bottom:1px solid #337ab7;'>

<tr height='110'>

<td width='15%' align='left' valign='middle'><a href='#'><img src='http://anaesthesiacollege.com/test/logo_left.png' alt='ICA' title='ICA' /></a></td>

<td width='75%' align='center' valign='middle'>
<h3 style='color:#337ab7; font-size:16px;'>Indian College of Anaesthesiologists</h3>
</td>

<td width='10%' align='right' valign='middle'><a href='#'><img src='http://anaesthesiacollege.com/test/logo_right.png' alt='ICA' title='ICA' /></a></td>

</tr>

</table></td>
</tr>
<tr>
<td align='left' valign='middle' style='font-size:20px; color:#93d83a; padding:20px 15px 0 18px;'>
Welcome to Indian College of Anaesthesiologists</td>
</tr>

<tr>
<td height='5' style='padding:0 15px;'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr>
<td height='1' bgcolor='#fff'></td>
</tr>
</table></td>
</tr>

<tr>
<td align='left' valign='top' style='padding:10px 20px;'>
<h3 style='margin-top:0;'>Dear $name,</h3>

<p>Thanks for registering on Anaesthesiacollege.com. Your registration has been successful!</p>
<p>Your registration details are following:</p>

<table width='100%' border='0' cellspacing='0' cellpadding='0'>
     <tbody>
        <tr>
          <th style='padding-bottom:5px; width:17%;' scope='row'>Name:</th>
          <td style='padding-bottom:5px;'>$name</td>
        </tr>

        <tr>
          <th style='padding-bottom:5px;' scope='row'>Email:</th>
          <td style='padding-bottom:5px;'>$email</td>
        </tr>

        <tr>
          <th style='padding-bottom:5px;' scope='row'>Mobile:</th>
          <td style='padding-bottom:5px;'>$mobile</td>
        </tr>

        <tr>
          <th style='padding-bottom:5px;' scope='row'>Address:</th>
          <td style='padding-bottom:5px;'>$address</td>
        </tr>

        <tr>
          <th style='padding-bottom:5px;' scope='row'>Qualifications:</th>
          <td style='padding-bottom:5px;'>$qualifications</td>
        </tr>

    

      </tbody>
    </table>


<p>&nbsp;</p>

<p>
If you have any questions, please reply to this email to contact us.<br/>
Have a nice day,<br/>
Indian College of Anaesthesiologists
</p>


</td>
</tr>
</table></td>
</tr>
<tr>
<td height='40' valign='middle' align='center' bgcolor='#f1f1f1' style='font-size:12px;'>© Copyright 2015 ICA. All Rights Reserved.</td>
</tr>
</table>



</body>
</html>
";


    
    $from = 'info@anaesthesiacollege.com'; 
    $to = $email; 
    //$body = "welcome message";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From:'.$from. "\r\n"; 

	if (mail ($to, $subject, $body, $headers)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ICA - Membership</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
	<!-- Slider animate css -->
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/carousel.css" rel="stylesheet">
    
    <!-- thems css -->
    <link href="css/style.css" rel="stylesheet">
    
    <!-- Font Awesome css -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    
    <!-- select2 css -->
    <link href="css/select2.css" rel="stylesheet" />



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<!--wrapper start here -->
<div class="wrapper">


<header class="main_header">
<div class="row_dv head_top">
<div class="container">
<div class="row">
<div class="col-xs-4 col-sm-2"><a href="home.html"><img src="images/logo_left.png" alt="Logo"></a></div>
<div class="col-xs-5 col-sm-8 text-center logo_text"><h1><a href="home.html">Indian College of Anaesthesiologists</a></h1></div>
<div class="col-xs-3 col-sm-2 text-right"><a href="home.html"><img src="images/logo_right.png" alt="Logo"></a></div>
</div>
</div>
</div>

<nav class="row_dv navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="home.html" title="Home">Home</a></li>
            <li class="dropdown">
              <a href="about-us.html" class="dropdown-toggle" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
              
              <ul class="dropdown-menu">
                <li><a href="our-aim-objective.html">Our Aim & Objective</a></li>
                <li><a href="ica-trustees.html">ICA Trustees</a></li>
              </ul>
            </li>
            <li><a href="activities.php" title="Activities">Activities</a></li>
            
            <li class="dropdown active"><a href="membership.php" class="dropdown-toggle" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Membership <span class="caret"></span></a>
            
              <ul class="dropdown-menu">
                <li><a href="download.html">Download</a></li>
              </ul>
            
            
            </li>
            <li><a href="guidelines.html" title="Guidelines">Guidelines</a></li>
            <li><a href="contact-us.html" title="Contact Us">Contact Us</a></li>
            
          </ul>
          
        </div>
      </div>
    </nav>
</header>





<header class="row_dv inner_banner_bg">
<div class="container">
<div class="row">
<div class="col-sm-6 inner_head_title">
<h2 class="max_txt">Join Our Membership to Get More Benefits</h2>
</div>
<div class="col-sm-6 text-right right_icon meber_fig">
  <img src="images/member_head_icon.png" alt="About Us">
  </div>
</div>
</div>
</header>

<!--mid_counter start here -->
<div class="mid_counter">
<div class="container">
<div class="row">

<section class="col-xs-12 col-sm-7">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title"><i class="fa fa-user-plus"></i> Join Now</h3>
</div>
<div class="panel-body">

<form class="join_now_form" role="form" method="post" action="membership.php">

<div class="form-group">
<?php echo $result; ?>	
</div>  

<p>To become a member, fill inthe below details</p>

<div class="form-group">
<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
<?php echo "<p class='text-danger'>$errName</p>";?>
</div>
  
  
  
  
<div class="form-group">
<input type="text" class="form-control" id="qualifications" name="qualifications" placeholder="Qualifications" value="<?php echo htmlspecialchars($_POST['qualifications']); ?>">
<?php echo "<p class='text-danger'>$errQualifications</p>";?>
</div>



<div class="form-group">
<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile No" value="<?php echo htmlspecialchars($_POST['mobile']); ?>">
<?php echo "<p class='text-danger'>$errMobile</p>";?>
</div>

<div class="form-group">
<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
<?php echo "<p class='text-danger'>$errEmail</p>";?>
</div> 


<div class="form-group">
<input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?php echo htmlspecialchars($_POST['address']); ?>">
<?php echo "<p class='text-danger'>$errAddress</p>";?>
</div> 


<div class="form-group">
<input id="submit" name="submit" type="submit" value="Submit" class="btn btn-success btn-lg text-uppercase">
</div>
    

  
</form>

<!-- <div class="row_dv or_dv">
<span>OR</span>
</div>



<div class="row_dv">
<a href="#" class="btn btn-danger btn-lg text-uppercase btn-block queries_btn" title="View all"><i class="fa fa-question-circle"></i> Click to know queries related to the card</a>
</div> -->


</div>
</div>
</section>


<aside class="col-xs-12 col-sm-5">
<div class="row_dv normal_text">
<h4>Fee Structure:</h4>
<p>Lifetime membership of ICA fee would be Rs.5,000.
 In case of fellowship, royalty payable to college is Rs.10,000. 
</p>
</div>
</aside>


</div> <!--row div end -->
</div> <!--container end-->
</div>
<!--mid_counter end here -->




  <footer class="footer">
      <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-9 ft_left">
        <nav class="row_dv footer_links">
        <ul>
        	<li><a href="home.html" title="Home">Home</a></li>
            <li><a href="about-us.html" title="About Us">About Us</a></li>
            <li><a href="activities.php" title="Activities">Activities</a></li>
            <li><a href="membership.html" title="Membership">Membership</a></li>
            <li><a href="guidelines.html" title="Guidelines">Guidelines</a></li>
            <li><a href="contact-us.html" title="Contact Us">Contact Us</a></li>
        </ul>
        </nav>
        <address class="row_dv copyr">© Copyright 2015 ICA. All Rights Reserved.</address>
        
        </div>
        
        <div class="col-xs-12 col-sm-3 email_link text-right"><a href="mailto:info@anaesthesiacollege.com">info@anaesthesiacollege.com</a></div>
        </div>
      </div>
    </footer>


</div>
<!--wrapper end here -->




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/bootstrap-hover-dropdown.min.js"></script>
    
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    
    
    
    
<!--select2 js  -->
<script src="js/select2.min.js"></script>

<script type="text/javascript">
  $('select').select2();
</script>
<!--select2 js  -->  
    
  </body>
</html>
