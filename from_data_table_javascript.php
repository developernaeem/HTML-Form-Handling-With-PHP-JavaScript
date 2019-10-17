<?php include 'styles/header.php' ?>
<!-- Header Area -->
<section class="header_area">
	<h2><?php echo "HTML Form Handling With PHP & JavaScript"; ?></h2>
</section>
<!-- Main Content Area -->
<section class="main_content">
	<hr>
		Get Value From a Data Table in JavaScript
		<span style="float: right;">
			<?php 
			date_default_timezone_set('Asia/Dhaka');
			echo "Time ".date("h:i:s a");
			?>
		</span>
	<hr>

<script>
	function dataTableFunction() {
		/* Display Name With JavaScript */
		var getname = document.myform.name.value;
		document.getElementById('showName').innerHTML = getname;
		
		/* Display Gender With JavaScript */
		var genderLength = document.myform.gender.length;
		for (i = 0; i < genderLength; i++) {
			var checkGender = document.myform.gender[i].checked;
			if (checkGender) {
				var gendValue = document.myform.gender[i].value;
			}
		}
		
		/* Display Department With JavaScript */
		document.getElementById('showGender').innerHTML = gendValue;

		var deptLength = document.myform.dept.length;
		for (i = 0; i < deptLength; i++) {
			var checkDept = document.myform.dept[i].checked;
			if (checkDept) {
				var deptValue = document.myform.dept[i].value;
			}
		}

		document.getElementById('showDept').innerHTML = deptValue;

		/* Display Select Option With JavaScript */
		var index = document.myform.language.selectedIndex;
		var languageValue = document.myform.language.options[index].value;

		document.getElementById('showLang').innerHTML = languageValue;

	}
</script>

<table class="table_design">
	<tr>
		<td colspan="2" align="center">Output</td>
	</tr>
	<tr>
		<td>Name</td>
		<td><span id="showName"></span></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td><span id="showGender"></span></td>
	</tr>
	<tr>
		<td>Department</td>
		<td><span id="showDept"></span></td>
	</tr>
	<tr>
		<td>Language</td>
		<td><span id="showLang"></span></td>
	</tr>
</table>>

<form action="" method="post" name="myform" id="myform" onsubmit="dataTableFunction(); return false;">
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