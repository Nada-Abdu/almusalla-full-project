<?php
include "config.php";

$_SESSION["StudentID"] = 437000; // delete it , should be their before from start
$StudentID = $_SESSION["StudentID"]; //Student_ID 
// 
  if (isset($_POST['Lesson_ID'])) {
  $IslamicVolunteerID=$_POST['Lesson_ID'];
  //  insert lesson and student id to RegisteredLesson to link student with register lesson
  $query = "INSERT INTO `RegisteredLesson` (`Student_ID`, `Lesson_ID`) VALUES ($StudentID,$IslamicVolunteerID ) ";
  if ($connect->query($query) === TRUE) {
    echo "register Lesson record successfully";
  } else {
    echo "Error: " . $query . "<br>" . $connect->error;
  }

  }
//   
  if (isset($_POST['Activity_ID'])) {
      $Quran_volunteer_id=$_POST['Activity_ID'];
      $queryCheck="SELECT * FROM `RegisteredLesson` WHERE `Activity_ID`= $Quran_volunteer_id";
      $resultCheck = mysqli_query($connect, $queryCheck);
if (!$resultCheck) {
    printf("Error: %s\n", mysqli_error($connect));
    exit();
}
      $num_rows = mysqli_num_rows($resultCheck);
      if($num_rows>0){
        print "error";
      }
      else{
         //  insert lesson and student id to RegisteredLesson to link student with register lesson
      $query = "INSERT INTO `RegisteredLesson` (`Student_ID`, `Activity_ID`) VALUES ($StudentID,$Quran_volunteer_id ) ";
      if ($connect->query($query) === TRUE) {
        echo "register Lesson record successfully";
      } else {
        echo "Error: " . $query . "<br>" . $connect->error;
      }
      }
     
    
      }
