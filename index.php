<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>

	<div>
		<h1>เลือกโปรแกรมการคำนวณ</h1>
		<form>
			<!-- <select id="selectCalcu" name="selectCalcu" onChange="changeCal(this.value)"> -->

				<select id="selectCalcu" name="selectCalcu" onChange="changeCal(this.value)">
				<option selected value="bmi">คำนวณดัชนีมวลกาย Body Mass Index (BMI)</option>
				<option value="bmr">คำนวณการเผาผลาญพลังงาน Basal Metabolic Rate (BMR)</option>
				<option value="calCholes">คำนวณค่าคอลเลสเตอรอล</option>
			</select>
		</form>
	</div>

	<div id="calBMI">
		<p>คำนวณดัชนีมวลกาย Body Mass Index (BMI)</p>
		<form method="post" action="calBMI.php">
			ส่วนสูง/เซนติเมตร:
			<input type="text" name="height" value="<?php $height;?>">
			<br><br>
			น้ำหนัก/กิโลกรัม:
			<input type="text" name="weight" value="<?php $weight;?>">
			<br><br>
			<input type="submit" name="submit" value="Submit">
		</form>
	</div>

	<div id="calBMR">
		<p>คำนวณการเผาผลาญพลังงาน Basal Metabolic Rate (BMR)</p>
		<form method="post" action="calBMR.php">
			เพศ:
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">ชาย
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">หญิง
			<br><br>
			ส่วนสูง/เซนติเมตร:
			<input type="text" name="heightBMR" value="<?php $heightBMR;?>">
			<br><br>
			น้ำหนัก/กิโลกรัม:
			<input type="text" name="weightBMR" value="<?php $weightBMR;?>">
			<br><br>
			อายุ/ปี:
			<input type="text" name="ageBMR" value="<?php $ageBMR;?>">
			<br><br>
			<select id="selectActi" name="selectActi">
				<option selected="selected" value="0">ไม่ออกกำลังกายหรือออกกำลังกายน้อยมาก</option>
				<option value="1">ออกกำลังกายน้อยเล่นกีฬา 1-3 วัน/สัปดาห์</option>
				<option value="2">ออกกำลังกายปานกลางเล่นกีฬา 3-5 วัน/สัปดาห์</option>
				<option value="3">ออกกำลังกายหนักเล่นกีฬา 6-7 วัน/สัปดาห์</option>
				<option value="4">ออกกำลังกายหนักมากเป็นนักกีฬา</option>
			</select>
			<input type="submit" name="submit" value="Submit">
		</form>
	</div>

	<div id="calCholes">
		<p>คำนวณค่าคอเลสเตอรอลรวม</p>
		<form method="post" action="calCholes.php">
			ไขมันแอลดีแอล (LDL):
			<input type="text" name="ldl" value="<?php $ldl;?>">
			<br><br>
			ไขมันเอชดีแอล (HDL):
			<input type="text" name="hdl" value="<?php $hdl;?>">
			<br><br>
			ไตรกลีเซอไรด์:
			<input type="text" name="trigly" value="<?php $trigly;?>">
			<br><br>

			<input type="submit" name="submit" value="Submit">
		</form>
	</div>

	<script>
		//
		document.getElementById("calBMR").style.display = "none";
		document.getElementById("calCholes").style.display = "none";

		function changeCal(value){
			// console.log(document.getElementById("selectCalcu").selected);

			if(value == "bmi"){
				document.getElementById("calBMI").style.display = "block";
				document.getElementById("calBMR").style.display = "none";
				document.getElementById("calCholes").style.display = "none";
			}
			else if(value == "bmr"){
				document.getElementById("calBMR").style.display = "block";
				document.getElementById("calBMI").style.display = "none";
				document.getElementById("calCholes").style.display = "none";
			}
			else if(value == "calCholes"){
				document.getElementById("calCholes").style.display = "block";
				document.getElementById("calBMR").style.display = "none";
				document.getElementById("calBMI").style.display = "none";
			}
		}

	</script>
</body>
</html>
