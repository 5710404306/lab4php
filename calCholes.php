<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["ldl"]) or empty($_POST["hdl"]) or empty($_POST["trigly"])){
      $chores="";
    }
    else{
      $ldl = $_POST["ldl"];
      $hdl = $_POST["hdl"];
      $trigly = $_POST["trigly"];
      $chores = $ldl + $hdl + ($trigly/5);
      // $resultChores = "";
      if($chores < 200){
        $resultChores = "<b>ดีมาก</b>";
      }
      else if($chores >= 200 && $chores < 239){
        $resultChores = "<b>ค่อนข้างสูง</b>";
      }
      else if($chores >= 240){
        $resultChores = "<b>สูง</b>";
      }

      echo "<div style='text-align: center;  padding: 50px; font-size: 20px;'>";
      echo "<div style='border: solid 5px lightgreen; padding: 20px;'>";
      echo "ผลลัพธ์ การคำนวณค่าคอเลสเตอรอลรวม";
      echo "</div>";
      echo "<br>";
      echo "ค่าคอเลสเตอรอลรวม : ". $chores;
      echo "<br>";
      echo $resultChores;
      echo "</div>";
    }
  }
?>
