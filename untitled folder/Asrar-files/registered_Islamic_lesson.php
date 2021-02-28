<?php
include "config.php";
$return_arr = array();


$_SESSION["StudentID"] = 437000; // delete it , should be their before from start
$StudentID = $_SESSION["StudentID"]; //Student_ID 


// get lesson information 
// $query1 = "SELECT * FROM `Islamic Volunteer` WHERE `requestState`=`مقبول` ";
// $query = "SELECT i.FacultyUniversityID,f.FacultyMemberName,IslamicVolunteerID,lessonName,lessonDate,Day,meetingsNumber,time,requestState FROM IslamicVolunteer i, facultymember f WHERE f.FacultyUniversityID =i.FacultyUniversityID ";
// $query1 = "SELECT * FROM `RegisteredLesson` WHERE `Student_ID`=$StudentID ";


// $query=" SELECT r.Student_ID , r.Lesson_ID, i.IslamicVolunteerID, i.lessonDate, i.FacultyUniversityID, i.requestState, i.lessonName,i.Day,i.meetingsNumber,i.time  FROM IslamicVolunteer i, RegisteredLesson r WHERE r.Lesson_ID =i.IslamicVolunteerID and r.Student_ID= $StudentID ";
// $query1= "SELECT i.FacultyUniversityID,i.IslamicVolunteerID, f.FacultyUniversityID, f.FacultyMemberName FROM IslamicVolunteer i, facultymember f WHERE f.FacultyUniversityID =i.FacultyUniversityID ";

$query="SELECT IslamicVolunteer.FacultyUniversityID, IslamicVolunteer.IslamicVolunteerID, facultymember.FacultyMemberName , IslamicVolunteer.lessonName, IslamicVolunteer.Day, IslamicVolunteer.meetingsNumber,IslamicVolunteer.time, RegisteredLesson.Student_ID , RegisteredLesson.Lesson_ID, IslamicVolunteer.lessonDate 
from facultymember
join IslamicVolunteer ON facultymember.FacultyUniversityID = IslamicVolunteer.FacultyUniversityID
join RegisteredLesson ON IslamicVolunteer.IslamicVolunteerID = RegisteredLesson.Lesson_ID 
where RegisteredLesson.Student_ID=$StudentID ";

$result = mysqli_query($connect, $query);
if (!$result) {
    printf("Error: %s\n", mysqli_error($connect));
    exit();
}
// $result1 = mysqli_query($mysqli, $query1);
// if (!$result1) {
//     printf("Error: %s\n", mysqli_error($mysqli));
//     exit();
// }


// $num_rows = mysqli_num_rows($result);
// $faculty = mysqli_fetch_array($result1);



while ($row = mysqli_fetch_array($result)) {
    // echo $row['autoincrement'];
    // echo "-".$row['Lesson_ID'];
    // echo "-".$row['IslamicVolunteerID'];
    // echo "\n";
    // $FacultyMemberName="";
// while ($row1 = mysqli_fetch_assoc($result1)) {
//     echo $row1['FacultyUniversityID'];
//     echo "-".$row['FacultyUniversityID'];
//     echo "\n";
//     if($row1['FacultyUniversityID']==$row['FacultyUniversityID']){
//         $FacultyMemberName = $row1['FacultyMemberName'];
//     }
// }
$FacultyMemberName = $row['FacultyMemberName'];
        $IslamicVolunteerID = $row['IslamicVolunteerID'];
        $lessonName = $row['lessonName'];
        $lessonDate = $row['lessonDate'];
        $Day = $row['Day'];
        $meetingsNumber = $row['meetingsNumber'];
        $time = $row['time'];
        $return_arr[] = array(
            "FacultyMemberName" => $FacultyMemberName,
            "IslamicVolunteerID" => $IslamicVolunteerID,
            "lessonName" => $lessonName,
            "lessonDate" => $lessonDate,
            "Day" => $Day,
            "meetingsNumber" => $meetingsNumber,
            "time" => $time
        );
        // $FacultyMemberName="";
    }

      
        // if ($row1['Lesson_ID'] == $row['IslamicVolunteerID']) {
            // echo $row1['Lesson_ID'];
           
            // continue;
        // }
        
    // }
// }



// Encoding array in JSON format
echo json_encode($return_arr);
