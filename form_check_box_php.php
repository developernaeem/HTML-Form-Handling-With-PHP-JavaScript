<?php include 'styles/header.php' ?>
<!-- Header Area -->
<section class="header_area">
	<h2><?php echo "HTML Form Handling With PHP & JavaScript"; ?></h2>
</section>
<!-- Main Content Area -->
<section class="main_content">
	<hr>
		Get Value From a Chack Box in PHP
		<span style="float: right;">
			<?php 
			date_default_timezone_set('Asia/Dhaka');
			echo "Time ".date("h:i:s a");
			?>
		</span>
	<hr>

<?php 
	if (isset($_POST['submit'])) {
		$language = $_POST['language'];
		echo "You have selected : ";
		foreach ($language as $lang => $chackBox) {
			echo $chackBox.", ";
		}
	}
 ?>




<form action="" method="post" name="myform" id="myform">
	<table>
		<tr>
			<td>Language : </td>
			<td>
				<input type="checkbox" name="language[]" value="JavaScript">JavaScript
				<input type="checkbox" name="language[]" value="jQuery">jQuery
				<input type="checkbox" name="language[]" value="React">React
				<input type="checkbox" name="language[]" value="PHP">PHP
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