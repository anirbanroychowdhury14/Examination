<!DOCTYPE html>
<html>
<head>
	<title>Exam</title>
	<link href="Design.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body style="background-image: url('Image/bg3.jpeg'); background-repeat: no-repeat;background-size: cover;-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;">
	<div class="header">
		<div class="header-content">
			<table class="header-table">
				<tr>
					<td class="logo-img">
						<div class="trigger"><img src="Image/logo1.png?v=<?php echo time(); ?>"></div>
					</td>
					<td class="logo-text">
						<table style="position: relative;">
							<tr>
								<td>
									<div class="logo-txt-acr">
										<b>EXAMINATION MANAGEMENT SYSTEM</b>
									</div>
								</td>
							</tr>
							
						</table>
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td>
						<div class="menu-bar">
							<ul>
								<li id="m1"><a href="studenthome.php" id="home-button"><i class="fas fa-home"></i></a></li>
								<li><a href="#">&nbsp;UPDATE PROFILE&nbsp;</a>
									<ul>
										<li id="m11"><a href="updateyear.php">YEAR</a></li>
										<li id="m12"><a href="updatepassword.php">PASSWORD</a></li>
										<li id="m13"><a href="updateroll.php">ROLL NO</a></li>
										<li id="m14"><a href="updatephone.php">PHONE NO</a></li>
										<li id="m15"><a href="updatesem.php">SEMESTER</a></li>
									</ul>
								</li>
								<li><a href="#">VIEW</a>
									<ul>
										<li id="m21"><a href="Snotice.php">NOTICE</a></li>
										<li id="m22"><a href="viewresult.php">RESULT</a></li>
										<li id="m23"><a href="Queryview.php">Q&A</a></li>
									</ul>
								</li>
								<li id="m3"><a href="Query.php">QUERY</a></li>
									<li id="m4"><a href="Electivechoice.php">ELECTIVE CHOICE</a></li>
									<li id="m5"><a href="slogout.php">LOGOUT</a></li>
										
							</ul>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="login1">
				<h2 id="h2" align="center">UPDATE YEAR</h2>
				<hr>
				<form action="updateyear.php" method="post">
					YEAR <select name="year" required="yes">
									<option value="" selected disabled hidden> YEAR</option>
									<option value="1st">1st</option>
									<option value="2nd">2nd</option>
									<option value="3rd">3rd</option>
									<option value="4th">4th</option>
						</select>
						<button type="submit" name="update">UPDATE</button>
				</form>
	</div>
</body>
<?php
	require('db.php');
	session_start();
	if(!isset($_SESSION['username']))
    header("Location: Studentlogin.php"); 
	$username=$_SESSION['username'];
	if (isset($_POST['update'])) {
		$q="Select * from student where username='$username'";
		$result=mysqli_query($connection,$q);
		while ($row=mysqli_fetch_assoc($result)) {
			$year=$row['year'];
			$dept=$row['dept'];
			$roll=$row['rollno'];
		}
		if($year=="1st" AND $dept=="CSE")
		{
			$roll=$roll-1100;
		}
		elseif ($year=="2nd" AND $dept=="CSE") {
			$roll=$roll-1200;
		}
		elseif ($year=="3rd" AND $dept=="CSE") {
			$roll=$roll-1300;
		}
		elseif ($year=="4th" AND $dept=="CSE") {
			$roll=$roll-1400;
		}
		elseif ($year=="1st" AND $dept=="EC") {
			$roll=$roll-2100;
		}
		elseif ($year=="2nd" AND $dept=="EC") {
			$roll=$roll-2200;
		}elseif ($year=="3rd" AND $dept=="EC") {
			$roll=$roll-2300;
		}
		elseif ($year=="4th" AND $dept=="EC") {
			$roll=$roll-2400;
		}
		elseif ($year=="1st" AND $dept=="EE") {
			$roll=$roll-3100;
		}
		elseif ($year=="2nd" AND $dept=="EE") {
			$roll=$roll-3200;
		}
		elseif ($year=="3rd" AND $dept=="EE") {
			$roll=$roll-3300;
		}
		elseif ($year=="4th" AND $dept=="EE") {
			$roll=$roll-3400;
		}
		elseif ($year=="1st" AND $dept=="IT") {
			$roll=$roll-4100;
		}
		elseif ($year=="2nd" AND $dept=="IT") {
			$roll=$roll-4200;
		}
		elseif ($year=="3rd" AND $dept=="IT") {
			$roll=$roll-4300;
		}
		elseif ($year=="4th" AND $dept=="IT") {
			$roll=$roll-4400;
		}
		$y=$_POST['year'];
		if($y=="1st" AND $dept=="CSE")
		{
			$roll=$roll+1100;
		}
		elseif ($y=="2nd" AND $dept=="CSE") {
			$roll=$roll+1200;
		}
		elseif ($y=="3rd" AND $dept=="CSE") {
			$roll=$roll+1300;
		}
		elseif ($y=="4th" AND $dept=="CSE") {
			$roll=$roll+1400;
		}
		elseif ($y=="1st" AND $dept=="EC") {
			$roll=$roll+2100;
		}
		elseif ($y=="2nd" AND $dept=="EC") {
			$roll=$roll+2200;
		}elseif ($y=="3rd" AND $dept=="EC") {
			$roll=$roll+2300;
		}
		elseif ($y=="4th" AND $dept=="EC") {
			$roll=$roll+2400;
		}
		elseif ($y=="1st" AND $dept=="EE") {
			$roll=$roll+3100;
		}
		elseif ($y=="2nd" AND $dept=="EE") {
			$roll=$roll+3200;
		}
		elseif ($y=="3rd" AND $dept=="EE") {
			$roll=$roll+3300;
		}
		elseif ($y=="4th" AND $dept=="EE") {
			$roll=$roll+3400;
		}
		elseif ($y=="1st" AND $dept=="IT") {
			$roll=$roll+4100;
		}
		elseif ($y=="2nd" AND $dept=="IT") {
			$roll=$roll+4200;
		}
		elseif ($y=="3rd" AND $dept=="IT") {
			$roll=$roll+4300;
		}
		elseif ($y=="4th" AND $dept=="IT") {
			$roll=$roll+4400;
		}
		$q="Update student set year='$y',rollno=$roll where username='$username'";
		mysqli_query($connection,$q);
		echo"<script>alert('Updated successfully')</script>";
	}
?>