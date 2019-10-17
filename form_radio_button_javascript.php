<?php include 'styles/header.php' ?>
<!-- Header Area -->
<section class="header_area">
	<h2><?php echo "HTML Form Handling With PHP & JavaScript"; ?></h2>
</section>
<!-- Main Content Area -->
<section class="main_content">
	<hr>
		Get Value From a Radio Button in JavaScript
		<span style="float: right;">
			<?php 
			date_default_timezone_set('Asia/Dhaka');
			echo "Time ".date("h:i:s a");
			?>
		</span>
	<hr>

<script>
	function radioFunction() {
		var genderType = document.myform.gender.length;
		for (i = 0; i < genderType; i++) {
			var checkValue = document.myform.gender[i].checked;
			if (checkValue) {
				var checkRadio = document.myform.gender.value;
			}
		}

		var showGender = "Your Gender is : "+checkRadio;

		document.getElementById('show').innerHTML = showGender;
	}
</script>



<div id="show"></div>

<form action="" method="post" name="myform" id="myform" onsubmit="radioFunction(); return false;">
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