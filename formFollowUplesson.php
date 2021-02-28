<?php
//include "config.php";
include "follow up lesson volunteer.php";
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


$stu=$_SESSION['choosedlessonStudent'];
  $insert= mysqli_query($connect,"UPDATE  `followuplesson` SET `useALmushafALmualem`='$check' ,`surahName`='$surh',`ayahNumber`='$ayah',`memoriesMistakes`='$ms',`pronunciationMistakes`='$mm',`tajweedMistakes`='$mt',`grade`='$degree',`notes`='$note',`meetingNum`='$numMet'
   WHERE `studentId`='$stu' AND `surahName`='0' ");
if($insert) {echo "yeeeessss";}
else {echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);}
}

 ?>
