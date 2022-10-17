<?php
	
?>

<html> 
   <head>
      <title>Edit Contact - <?php  ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script type="text/javascript" src="script.js"></script>
   </head> 
   <body> 
   
	<div style='width: 30%'>
		<a href='index.php'> < Back </a>
		<?php 
		
		?>
			<h2>Edit Contact <font color=blue><?php  ?></font><hr></h2>
			<?php
			
			?>
			<form action='?contact=<?php  ?>' method='POST'>
				<label><font size=5>Phone Number <font color=red>*</font></font></label><br>
				<input type='text' name='phone' id='myInputx' placeholder='Phone Number: +234 800 000 0000' required value='<?php  ?>'>
				
				<br><label><font size=5>First Name <font color=red>*</font></font></label><br>
				<input type='text' name='firstname' id='myInputx' placeholder='First Name' required value='<?php  ?>'>
				
				<br><label><font size=5>Last Name <font color=red>*</font></font></label><br>
				<input type='text' name='lastname' id='myInputx' placeholder='Last Name' required value='<?php  ?>'>
				
				<br><label><font size=5>Email Address</font></label><br>
				<input type='text' name='email' id='myInputx' placeholder='Email Address: name@domain.com' value='<?php  ?>'>
			
				<hr><input type='submit' name='submit' value='SAVE CONTACT' id='mysubmit'>
			</form>
		<?php 
		
		?>
	</div>
   </body>
</html>