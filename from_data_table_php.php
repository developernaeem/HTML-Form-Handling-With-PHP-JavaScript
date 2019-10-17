<?php include 'styles/header.php' ?>
<!-- Header Area -->
<section class="header_area">
	<h2><?php echo "HTML Form Handling With PHP & JavaScript"; ?></h2>
</section>
<!-- Main Content Area -->
<section class="main_content">
	<hr>
		Get Value From a Data Table in PHP
		<span style="float: right;">
			<?php 
			date_default_timezone_set('Asia/Dhaka');
			echo "Time ".date("h:i:s a");
			?>
		</span>
	<hr>

<?php 
	if (isset($_POST['submit'])) {
		$name 		= $_POST['name'];
		$gender 	= $_POST['gender'];
		$dept 		= $_POST['dept'];
		$language 	= $_POST['language'];
		

	
 ?>

<table class="table_design">
	<tr>
		<td colspan="2" align="center">Output</td>
	</tr>
	<tr>
		<td>Name</td>
		<td><?php echo $name ?></td>
	</tr>
	<tr>
		<td>Gender</td>
		
		<?php 
			if ($gender == 'Male') { ?>
				<td><?php echo "Male" ?></td>
			<?php }elseif ($gender == 'Female') { ?>
				<td><?php echo "Female" ?></td>
			<?php }else{ ?>
				<td><?php echo "Others" ?></td>
		<?php } ?>
		
	</tr>
	<tr>
		<td>Department</td>
		
		<?php 
			if ($dept == 'CSE') { ?>
				<td><?php echo "CSE" ?></td>
			<?php }elseif ($dept == 'EEE') { ?>
				<td><?php echo "EEE" ?></td>
			<?php }else{ ?>
				<td><?php echo "Civil" ?></td>
		<?php } ?>
		
	</tr>
	<tr>
		<td>Language</td>
		<td><?php echo $language ?></td>
	</tr>
</table>

<?php } ?>



<form action="" method="post" name="myform" id="myform">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" required="1"></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" name="gender" value="Male">Male
				<input type="radio" name="gender" value="Female">Female
				<input type="radio" name="gender" value="Others">Others
			</td>
		</tr>
		<tr>
			<td>Department</td>
			<td>
				<input type="checkbox" name="dept" value="CSE">CSE
				<input type="checkbox" name="dept" value="EEE">EEE
				<input type="checkbox" name="dept" value="Civil">Civil
			</td>
		</tr>
		<tr>
			<td>Language : </td>
			<td>
				<select name="language" required="1">
					<option>Select One</option>
					<option value="JavaScript">JavaScript</option>
					<option value="jQuery">jQuery</option>
					<option value="React">React</option>
					<option value="HTML">HTML</option>
					<option value="CSS">CSS</option>
					<option value="Bootstrap">Bootstrap</option>
				</select>
			</td>
		</tr>


		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="Submit">
				<input type="reset" value="Clear">
			</td>
		</tr>
	</table>
</form>

<?php include 'styles/footer.php' ?>