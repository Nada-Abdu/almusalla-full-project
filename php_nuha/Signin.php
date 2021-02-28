<!doctype html>
<?php
$connect = mysqli_connect('localhost','root','05371433','almusalla');
  ?>
<html class="no-js" lang="zxx">

  <?php

  $EMAIL = $_POST["email"];
  $PASSWORD =$_POST["password"];
  $checkFm ='@uqu.edu.sa';
  $checkSm ='@st.uqu.edu.sa';

  if($EMAIL=='admin@uqu.edu.sa'){

      $result = $connect->query("SELECT * FROM `adminstrator` WHERE Password=$PASSWORD AND Email='$EMAIL' ");
      if (!$result) {
      header("Location:../Sign in.php?reason=badchoice");

    }else {

      $row = $result->fetch_array(MYSQLI_ASSOC);

    if($row["Email"]==$EMAIL && $row["Password"] == $PASSWORD) {

  session_start();
  $_SESSION['adminname'] =$row["Facilty_Member_Name"];
  $_SESSION['adminemail']= $row["Email"];
  $_SESSION['adminpw'] =$row["Password"];

    header("Location:../Personal Page administrator.php");

    }else{
    header("Location:../Sign in.php?reason=badchoice");

    }


  }}else if(preg_match("/{$checkFm}/i", $EMAIL)){


    $result = $connect->query("SELECT * FROM `facultymember` WHERE Password=$PASSWORD AND UniversityEmail='$EMAIL' ");
    if (!$result) {
    header("Location:../Sign in.php?reason=badchoice");


  }else {

    $row = $result->fetch_array(MYSQLI_ASSOC);

  if($row["FacultyAutoCode"]== 0) {

session_start();
$_SESSION['facultyid'] = $row["FacultyUniversityID"];
$_SESSION['facultyname'] =$row["FacultyMemberName"];
$_SESSION['facultyemail']= $row["UniversityEmail"];
$_SESSION['facultypn'] =$row["PhoneNumber"];
$_SESSION['facultydep'] = $row["FacultyDepartment"];
$_SESSION['facultypw'] =$row["Password"];

  header("Location:../Personal Page for Faculty Member.php");

  }else{
    $ID = $row["FacultyUniversityID"];
$connect->query("DELETE FROM `facultymember` WHERE FacultyUniversityID=$ID");
  header("Location:../Sign up.php?reason1=inVALDCODE");

  }


}}else if(preg_match("/{$checkSm}/i", $EMAIL)){
  $result = $connect->query("SELECT * FROM `student` WHERE password=$PASSWORD AND university_email='$EMAIL' ");
  if (!$result) {
  header("Location:../Sign in.php?reason=badchoice");


}else {

  $row = $result->fetch_array(MYSQLI_ASSOC);

if($row["authorization_code"]==0) {

session_start();
$_SESSION['studentid'] = $row["university_ID"];
$_SESSION['studentname'] =$row["name"];
$_SESSION['studentemail']= $row["university_email"];
$_SESSION['studentpw'] =$row["password"];

header("Location:../Personal Page for Student.php");


}else{
$ID = $row["university_ID"];
$connect->query("DELETE FROM `student` WHERE university_ID=$ID");
header("Location:../Sign up.php?reason1=inVALDCODE");

}


}
}

  ?>
</html>
