<?php
//loginpage.php

session_start();

if(isset($_SESSION['user'])) {
    $loggedin=true;
} else { 
    $loggedin=false;
}
?>

<?php

if($loggedin) {
    //render login page
  header('location:/dashboard.php');
    exit;
}

?>


<html>

<head>
	<title>Expence Manager</title>
	<style>
			#mainDiv{
				margin:0;
				padding:0;
				width:100%;
				height:100%;
			}
			.hh1
				{
					font-size:20px;
					padding-top:3px;
					padding-bottom:2px;
				}
			.t1
				{
					margin-top:200px;
					margin-left:500px;
					margin-right:500px;
				}
			.t2
				{
				
					background:cyan;
					border:2px solid black;
					border-radius:10px;
					padding:20px;
				}
				
                            
				
	</style>
			
</head>

<body>
	<div id ="mainDiv">
	<div class="hh1">
		<marquee><font color="green">Welcome to Expence Manager</font></marquee>
	</div>

	<div class="t1">
	<div class="t2">
	<form method="post" action="loginaction.php">
		<table>
			<tr>
				<td><label><font color="orange">Username </font></label></td>
				<td></td>
				<td><input placeholder="Enter your Username here" type="text" name="uname"/></td>
			</tr>
			<tr>
				<td><label><font color="orange">Password </font></label></td>
				<td></td>
				<td><input type="password" placeholder="Enter your Password here" name="pass"/>
			</tr>
			<tr>
				<td></td>
				<td></td>
				
				<td><button type="submit">Submit</button>
                        </tr>
			</table>
			</div>
	</form>
	</div>
	
</body>
</html>

