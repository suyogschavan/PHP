<?php

if(isset($_POST['btn'])) {


	$fullname=$_POST['fullname'];
	$profession=$_POST['profession'];
	$picture = $_FILES['picture']['name'];
	$tmp_name = $_FILES['picture']['tmp_name'];
	$folder="images/".$picture;
	move_uploaded_file($tmp_name, $folder);


	$objective=$_POST['objective'];
	$father=$_POST['father'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$nationality=$_POST['nationality'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$education=$_POST['education'];
	$experience=$_POST['experience'];
	$skills=$_POST['skills'];
	$certificate1=$_POST['certificate1'];
	$certificate2=$_POST['certificate2'];
	$certificate3=$_POST['certificate3'];
	$language1=$_POST['language1'];
	$language2=$_POST['language2'];
	$language3=$_POST['language3'];
	
$html = "
<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' type='text/css' href='style.css'>
	<title>CV</title>
</head>
<body>
<div id='container'>
		<div id='header'>
			<div id='left'>
				<div id='image'>
					<img src='images/{$picture}'>
				</div>
				<div>
					<h1>
						$fullname
					</h1>
					<h3>
						($profession)
					</h3>
				</div>
				<div>
					<h2>Contact</h2>
					<ul id='list'>
						<li>$address</li>
						<li>$mobile</li>
						<li>$email</li>
					</ul>
					<h2>Skills</h2>
					<ul id='list'>
						$skills
					</ul>
					<h2>Languages</h2>
					<ul id='list'>
						<li>$language1</li>
						<li>$language2</li>
						<li>$language3</li>
					</ul>
				</div>
			</div>
			<div id='right'>
				<div>
					<h2>Objective</h2>
					<p>
						$objective
					</p>
					<h2>Personal Information</h2>
					<table cellspacing='0' cellpadding='7'>
						<tr>
							<td><b>Father Name<b></td>
							<td>$father</td>
						</tr>
						<tr>
							<td><b>Gender<b></td>
							<td>$gender</td>
						</tr>
						<tr>
							<td><b>DOB<b></td>
							<td>$dob</td>
						</tr>
						<tr>
							<td><b>Nationality<b></td>
							<td>$nationality</td>
						</tr>
					</table>
					<h2>Education</h2>
					<p>
						$education
					</p>
					<h2>Experience</h2>
					<p>
						$experience
					</p>
					<h2>Certificates</h2>
					<ul>
						<li>$certificate1</li>
						<li>$certificate2</li>
						<li>$certificate3</li>
					</ul>
				</div>
			</div>
		</div>
</div>
	<div id='footer'>
		Mobile:$mobile / Email:$email
	</div>
</body>
</html>";


	include "vendor/autoload.php";

	$mpdf = new \Mpdf\Mpdf(['margin_top'=>1, 'margin_right'=>1, 'margin_bottom'=>1, 'margin_left'=>1]);
	$mpdf-> SetDisplayMode('fullpage');
	// load style.css file
	$style = file_get_contents('style.css');
	$mpdf->WriteHTML($style, 1);
	$mpdf->WriteHTML($html);

	$mpdf->Output();
	exit();

}

?>
