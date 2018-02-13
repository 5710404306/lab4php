<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["gender"]) or empty($_POST["heightBMR"]) or empty($_POST["weightBMR"]) or empty($_POST["ageBMR"])){
      $bmr = "";
    }
    else{
      $gender = $_POST["gender"];
      $weightBMR = $_POST["weightBMR"];
      $heightBMR = $_POST["heightBMR"];
      $ageBMR = $_POST["ageBMR"];
      $selectActi = $_POST["selectActi"];
      if($gender == "male"){
        $cal1 = 13.7*$weightBMR;
        $cal2 = 5*$heightBMR;
        $cal3 = $cal1+$cal2+66;
        $cal4 = 6.8*$ageBMR;
        $bmr = $cal3-$cal4;
      }
      else{
        $cal1 = 9.6*$weightBMR;
        $cal2 = 1.8*$heightBMR;
        $cal3 = $cal1+$cal2+665;
        $cal4 = 4.7*$ageBMR;
        $bmr = $cal3-$cal4;
      }

      if($selectActi == 0){
        $tdee = $bmr * 1.2;
      }
      else if($selectActi == 1){
        $tdee = $bmr * 1.375;
      }
      else if($selectActi == 2){
        $tdee = $bmr * 1.55;
      }
      else if($selectActi == 3){
        $tdee = $bmr * 1.725;
      }
      else if($selectActi == 4){
        $tdee = $bmr * 1.9;
      }
    }

    echo "<div style='text-align: center;  padding: 50px; font-size: 20px;'>";
    echo "<div style='border: solid 5px pink; padding: 20px;'>";
    echo "<b>ผลลัพธ์ คำนวณการเผาผลาญพลังงาน Basal Metabolic Rate (BMR)</b>";
    echo "</div>";
    echo "<br><br>";
    echo "BMR (Basal Metabolic Rate) พลังงานที่จำเป็นพื้นฐานในการมีชีวิต ";
    echo $bmr;
    echo " กิโลแคลอรี่";
    echo "<br><br>";
    echo "TDEE (Total Daily Energy Expenditure) พลังงานที่คุณใช้ในแต่ละวัน ";
    echo $tdee;
    echo " กิโลแคลอรี่";
    echo "</div>";

  }
?>
