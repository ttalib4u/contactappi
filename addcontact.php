<?php
	
?>

<html> 
   <head>
      <title>Add Contact - CSA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script type="text/javascript" src="script.js"></script>
   </head> 
   <body> 
   
	<div style='width: 30%'>
		<a href='index.php'> < Back</a>
		<h2>Add New Contact<hr></h2>
		<?php
		
			
		?>
		<form action='' method='POST'>
			<label><font size=5>Phone Number <font color=red>*</font></font></label><br>
			<input type='text' name='phone' id='myInputx' placeholder='Phone Number: +234 800 000 0000' required>
			
			<br><label><font size=5>First Name <font color=red>*</font></font></label><br>
			<input type='text' name='firstname' id='myInputx' placeholder='First Name' required>
			
			<br><label><font size=5>Last Name <font color=red>*</font></font></label><br>
			<input type='text' name='lastname' id='myInputx' placeholder='Last Name' required>
			
			<br><label><font size=5>Email Address</font></label><br>
			<input type='text' name='email' id='myInputx' placeholder='Email Address: name@domain.com'>
		
			<hr><input type='submit' name='submit' value='SAVE CONTACT' id='mysubmit'>
		</form>
	</div>
   </body>
</html>