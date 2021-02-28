<?php
//include "config.php";
include "follow up activty volunteer.php";
if(isset($_POST['data'])){
$note=$_POST['data']['jnotee'];
$mt=$_POST['data']['jmt'];
$mm=$_POST['data']['jmm'];
$ms=$_POST['data']['jms'];
$ayah=$_POST['data']['jayah'];
$surh=$_POST['data']['jsurh'];
$check=$_POST['data']['jcheck'];
$degree=$_POST['data']['jdegree'];
$numMet=$_POST['data']['jnumMet'];


$stu=$_SESSION['choosedactivtyStudent'];
  $insert= mysqli_query($connect,"UPDATE  `followupactivity` SET `use_Al-mushaf_Al-mualem`='$check' ,`Surah_name`='$surh',`Ayah_number`='$ayah',`memories_mistakes`='$ms',`pronunciation_mistakes`='$mm',`Tajweed_mistakes`='$mt',`grade`='$degree',`notes`='$note',`meeting_num`='$numMet'
   WHERE `student_id`='$stu' AND `Surah_name`='0' ");
if($insert) {echo "yeeeessss";}
else {echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);}
}

 ?>