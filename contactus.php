<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-77006203-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-77006203-3');
</script>

	<title>Contact Us - CNS Web Services</title>
	<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/all.css" />
		<link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/fontawesome.css" />
		<link rel="stylesheet" href="fontawesome-free-5.6.3-web/webfonts" />
	<link rel="stylesheet" href="css/cns.css" />
	<script src="js/jquery-3.3.1.min.js"></script>
<link rel="shortcut icon" type="image/png" href="images/cele.png">
</head>
<body><div class="navbar">
		
<div class="logo">
			<a href="index.php"></a>
		</div>
		<a class="btn"><i class="fas fa-bars"></i>
		</a>
<div class="menu">
	
	<a href="index.php" class="home">Home</a>
	<a href="contactus.php" class="active">Contact Us</a>
<a href="aboutus.php">About</a>
</div>
<div class="social-media"> <ul>
	<li><a href="https://www.facebook.com/celebsnest" target="_blank"><i class="fab fa-facebook-f fa-border" aria-hidden="true"></i></a></li>
	<li><a href="https://www.twitter.com/celebsnest" target="_blank"><i class="fab fa-twitter fa-border" aria-hidden="true"></i></a></li>
	<li><a href="https://www.instagram.com/celebsnest" target="_blank"><i class="fab fa-instagram fa-border" aria-hidden="true"></i></a></li>
<li><a href="https://api.whatsapp.com/send?phone=2349074741077" target="_blank"><i class="fab fa-whatsapp fa-border" aria-hidden="true"></i></a></li>


</ul>

	</div>


	</div>
	<div class="cus">
		<p><i>We are young IT professionals.<br/>Get in touch with us.</i></p>


	</div>

<div class="hello">
	<h1><i>Well, hello there.</i></h1>
</div>

<div class="form">

	<h1>CONTACT US HERE 
</h1>
<div class="contactus">
<div class="p"><i class="far fa-envelope"></i>&nbsp <p-1>	<b>Email us</b></p-1><p><b>info@cnserv.com.ng</b></p></div>
<div class="p">	
	<i class="fas fa-mobile-alt"></i><p-1><b>&nbsp Call us</b></p-1><p><b>+234 (0) 9074741077</b></p>
</div></div>
<div class="border"></div>
<p><b>Start Your Project Today.</b></p>

<div class="alert">	</div>
<div id="nav">
<?php 

	if (isset($_SESSION['error'])) {
?>

<div class="errorclass"><p> Please Fill In All Fields</p>
</div>
<?php
}


?>

<?php 

	if (isset($_SESSION['success']) && $_SESSION['success']=='mailsent') {
?>

<div class="success" "><p>Thank You, Your Mail has Been Sent!</p>
</div>
<?php

unset($_SESSION['error']);
unset($_SESSION['name']);
unset($_SESSION['number']);
unset($_SESSION['budget']);
unset($_SESSION['email']);
unset($_SESSION['message']);

	}
?>

</div>



<form action="process/contactform.php" class="contactform" method="POST">
	
<label>
	<input type="text" name="name"  placeholder="Your Name" class="contacttext <?php
    if( !isset($_SESSION['name']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['name']))
			{
echo $_SESSION['name'];
			}

			?>"
			 value="<?php 

			if(isset($_SESSION['name']))
			{
echo $_SESSION['name'];
			}

			?>"></label>
<label>
	<input type="email" name="email"  placeholder="Your Email" class="contacttext <?php
    if( !isset($_SESSION['email']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['email']))
			{
echo $_SESSION['email'];
			}

			?>"
			 value="<?php 

			if(isset($_SESSION['email']))
			{
echo $_SESSION['email'];
			}

			?>"></label>
	<label>
	<input type="text" name="number" class="contacttext <?php
    if( !isset($_SESSION['number']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['number']))
			{
echo $_SESSION['number'];
			}

			?>"
			 value="<?php 

			if(isset($_SESSION['number']))
			{
echo $_SESSION['number'];
			}

			?>" placeholder="Your Phone No."></label>
	<label>
	<input type="text" name="budget" class="contacttext <?php
    if( !isset($_SESSION['budget']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['budget']))
			{
echo $_SESSION['budget'];
			}

			?>"
			 value="<?php 

			if(isset($_SESSION['budget']))
			{
echo $_SESSION['budget'];
			}

			?>" placeholder="Your Budget"></label>
	<textarea name="message"  cols="30" rows="10" class="contacttext <?php
    if( !isset($_SESSION['message']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['message']))
			{
echo $_SESSION['message'];
			}

			?>"
			 value="<?php 

			if(isset($_SESSION['message']))
			{
echo $_SESSION['message'];
			}

			?>" placeholder="Your Message"></textarea>
	<input type="submit" name="submit" class="contactbtn" value="Send">
</form>
</div>
<div class="mobile"> 
<ul>
	<li><a href="https://www.facebook.com/celebsnest" target="_blank"><i class="fab fa-facebook-f fa-border" aria-hidden="true"></i></a></li>
	<li><a href="https://www.twitter.com/celebsnest" target="_blank"><i class="fab fa-twitter fa-border" aria-hidden="true"></i></a></li>
	<li><a href="https://www.instagram.com/celebsnest" target="_blank"><i class="fab fa-instagram fa-border" aria-hidden="true"></i></a></li>
<li><a href="https://api.whatsapp.com/send?phone=2349074741077" target="_blank"><i class="fab fa-whatsapp fa-border" aria-hidden="true"></i></a></li>
<li><a href="tel:+2349074741077" target="_blank"><i class="fas fa-phone fa-border" aria-hidden="true"></i></a></li>
<li><a href="mailto:info@cnserv.com.ng" target="_blank"><i class="fas fa-envelope fa-border" aria-hidden="true"></i></a></li>

</ul>


	</div>

<div class="footer">

	<div class="social"><ul>
	<li><a href="https://www.facebook.com/celebsnest" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
	<li><a href="https://www.twitter.com/celebsnest" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
	<li><a href="https://www.instagram.com/celebsnest" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
<li><a href="https://api.whatsapp.com/send?phone=2349074741077" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>



</ul></div>

<div class="reach">QUESTIONS? CALL: 09074741077&nbsp<i class="fas fa-phone-square"></i></div>
</div>

<div class="cor"><a href="index.php">© 2019 Celebsnest All rights reserved</a></div>

<button class="arrow"><i class="fas fa-arrow-up"></i></button>
</body>
</html>

<script>
	
	$(document).ready(()=>{
$('.btn').click(()=>{
	$('.menu').toggleClass("show");
});

 $(window).scroll(()=>{

	if($(this).scrollTop() >40)
	{
		$('.arrow').fadeIn();
}

else{
$('.arrow').fadeOut(); 
}

});

$('.arrow').click(()=>{
	$('html ,body').animate({scrollTop: 0}, 800);
});

	});
</script>


<?php
unset($_SESSION['error']);
unset($_SESSION['name']);
unset($_SESSION['number']);
unset($_SESSION['budget']);
unset($_SESSION['email']);
unset($_SESSION['message']);
unset($_SESSION['success']);
?>
