<?php include 'styles/header.php' ?>
<!-- Header Area -->
<section class="header_area">
	<h2><?php echo "HTML Form Handling With PHP & JavaScript"; ?></h2>
</section>
<!-- Main Content Area -->
<section class="main_content">
	<hr>
		Get Value From a Option Value in JavaScript
		<span style="float: right;">
			<?php 
			date_default_timezone_set('Asia/Dhaka');
			echo "Time ".date("h:i:s a");
			?>
		</span>
	<hr>

<script>
	function getSelectOptionValue() {
		var index = document.myform.language.selectedIndex;
		var value = document.myform.language.options[index].value;
		var showData = "You ara : "+value+" Coder";

		document.getElementById('show').innerHTML = showData;
	}
</script>

<div id="show"></div>

<form action="" method="post" name="myform" id="myform" onsubmit="getSelectOptionValue(); return false;">
	<table>
		<tr>
			<td>Language : </td>
			<td>
				<select name="language">
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