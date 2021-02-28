<?php
include "config.php";

$_SESSION["StudentID"] = 437000; // delete it , should be their before from start
$StudentID = $_SESSION["StudentID"]; //Student_ID 

$return_arr = array();
$condition="مقبول";

// get lesson information 
// $query1 = "SELECT * FROM `Islamic Volunteer` WHERE `requestState`=`مقبول` ";
$query = "SELECT i.FacultyUniversityID,f.FacultyMemberName,IslamicVolunteerID,lessonName,lessonDate,Day,meetingsNumber,time,requestState FROM IslamicVolunteer i, facultymember f WHERE f.FacultyUniversityID =i.FacultyUniversityID ";
// $queryRegister="SELECT * FROM `RegisteredLesson` WHERE `Student_ID`= $StudentID";
$result = mysqli_query($connect, $query);
if (!$result) {
    printf("Error: %s\n", mysqli_error($connect));
    exit();
}
// $result1 = mysqli_query($mysqli, $queryRegister);
// if (!$result1) {
//     printf("Error: %s\n", mysqli_error($mysqli));
//     exit();
// }

while ($row = mysqli_fetch_array($result)) {
    if($row['requestState'] == $condition  ){
        $FacultyMemberName = $row['FacultyMemberName'];
        $IslamicVolunteerID=$row['IslamicVolunteerID'];
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
    }
   
}

// Encoding array in JSON format
echo json_encode($return_arr);
