<?php
include "config.php";
$return_arr = array();


session_start();
$_SESSION["StudentID"] =$_SESSION['studentid']; // delete it , should be their before from start
$StudentID = $_SESSION["StudentID"]; //Student_ID 




$query=
"SELECT RegisteredActivity.Student_ID,  IslamicVolunteer.IslamicVolunteerID, RegisteredActivity.activityid,  activities.activityid,activities.activityname,activities.activitytype,activities.facumemname,activities.coursename,activities.attendancenum,activities.courseid,activities.groupnum,activities.bonus
FROM RegisteredActivity 
join activities on RegisteredActivity.activityid=activities.activityid 
join  IslamicVolunteer ON activities.activityname  = IslamicVolunteer.lessonName
where RegisteredActivity.Student_ID=$StudentID and activities.activitytype='نشاط الدروس الإسلامية' ";



$result = mysqli_query($connect, $query);
if (!$result) {
    printf("Error: %s\n", mysqli_error($connect));
    exit();
}

while($row = mysqli_fetch_array($result)){

                    $activityid=$row['activityid'];
                    $FacultyMemberName = $row['facumemname'];
                    $activityname = $row['activityname'];
                    $coursename = $row['coursename'];
                    $attendancenum = $row['attendancenum'];
                    $courseid = $row['courseid'];
                    $groupnum =$row['groupnum'];
                    $bonus =$row['bonus'];
                    $IslamicVolunteerID=$row['IslamicVolunteerID'];


                    $return_arr[] = array(
                        "FacultyMemberName" => $FacultyMemberName,
                        "activityname" => $activityname,
                        "coursename" => $coursename,
                        "attendancenum" => $attendancenum,
                        "courseid" => $courseid,
                        "groupnum" => $groupnum,
                        "bonus" => $bonus,
                        "IslamicVolunteerID" =>$IslamicVolunteerID,
                        "activityid"=> $activityid
                    ); 
               
               
            }
   


// Encoding array in JSON format
echo json_encode($return_arr);




