<?php include 'styles/header.php' ?>
<!-- Header Area -->
<section class="header_area">
	<h2><?php echo "HTML Form Handling With PHP & JavaScript"; ?></h2>
</section>
<!-- Main Content Area -->
<section class="main_content">
	<hr>
		Get Value From a Radio Button in PHP
		<span style="float: right;">
			<?php 
			date_default_timezone_set('Asia/Dhaka');
			echo "Time ".date("h:i:s a");
			?>
		</span>
	<hr>


<?php 

	if (isset($_POST['gender'])) {
		$genderType = $_POST['gender'];
		
		if ($genderType == 'Male') {
			echo "You ara a Male";
		}elseif ($genderType == 'Female') {
			echo "You ara a Female";
		}else{
			echo "Others";
		}
	}

 ?>



<form action="" method="post" name="myform" id="myform">
	<table>
		<tr>
			<td>Gender : </td>
			<td>
				<input type="radio" name="gender" value="Male">Male
				<input type="radio" name="gender" value="Female">Female
				<input type="radio" name="gender" value="Others">Others

			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Submit">
				<input type="reset" value="Clear">
			</td>
		</tr>
	</table>
</form>

<?php include 'styles/footer.php' ?>