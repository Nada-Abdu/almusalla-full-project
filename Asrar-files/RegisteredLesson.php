<?php
include "config.php";
session_start();
$_SESSION["StudentID"] =$_SESSION['studentid']; // delete it , should be their before from start
$StudentID = $_SESSION["StudentID"]; //Student_ID 
 
  if (isset($_POST['Lesson_ID'])) {
   $IslamicVolunteerID=$_POST['Lesson_ID'];
  //  insert lesson and student id to RegisteredLesson to link student with register lesson
  $query = "INSERT INTO `RegisteredLesson` (`Student_ID`, `Lesson_ID`) VALUES ($StudentID,$IslamicVolunteerID ) ";
  if ($connect->query($query) === TRUE) {
    echo "register Lesson record successfully";
  } else {
    echo "Error: " . $query . "<br>" . $connect->error;
  }
  $sql3 = "SELECT MeetingNumber FROM meeting WHERE IslamicVolunteerID = $IslamicVolunteerID";
  $result3 = mysqli_query($connect, $sql3);
  if (mysqli_num_rows($result3) > 0) {
      while($row3 = mysqli_fetch_assoc($result3)) {
        $meetingnumb = $row3["MeetingNumber"];

      }  }

      $meeting = (int)$meetingnumb;
      $n=1;
      if($meeting>0){
      for($i=0; $meeting>$i; $i++){
      $sql22 = "INSERT INTO attendance (student_ID  ,IslamicVolunteerID ,meetingNum ,meetingState , activityid )
      VALUES ($StudentID, $IslamicVolunteerID, $n, 0, 0)";
      $n++;
      if (mysqli_query($connect, $sql22)) {
      echo "";
      } else {
          echo "";
      } }

      }
      else {
        $sql22 = "INSERT INTO attendance (student_ID  ,IslamicVolunteerID ,meetingNum ,meetingState , activityid )
        VALUES ($StudentID, $IslamicVolunteerID, 0, 0, 0)";
        if (mysqli_query($connect, $sql22)) {
        echo "";
        } else {
            echo "";
        }
      }
  }
//   
  if (isset($_POST['Activity_ID'])) {
      $Quran_volunteer_id=$_POST['Activity_ID'];
      $queryCheck="SELECT * FROM `RegisteredLesson` WHERE `Activity_ID`= $Quran_volunteer_id and `Student_ID`=$StudentID
      ";
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
