<?php include 'styles/header.php' ?>
<!-- Header Area -->
<section class="header_area">
	<h2><?php echo "HTML Form Handling With PHP & JavaScript"; ?></h2>
</section>
<!-- Main Content Area -->
<section class="main_content">
	<hr>
		Get Value From a Text Box in PHP
		<span style="float: right;">
			<?php 
			date_default_timezone_set('Asia/Dhaka');
			echo "Time ".date("h:i:s a");
			?>
		</span>
	<hr>


<?php 
	if (isset($_POST["username"])) {
		echo "Username is : ".$_POST["username"];
	}
 ?>



<form action="" method="post" name="myform" id="myform">
	<table>
		<tr>
			<td>Username : </td>
			<td><input type="text" name="username" required></td>
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