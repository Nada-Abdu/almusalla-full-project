<?php
include "config.php";
$return_arr = array();
$condition = "مقبول";

$_SESSION["StudentID"] = 437000; // delete it , should be their before from start
$StudentID = $_SESSION["StudentID"]; //Student_ID 

// $query = "SELECT q.FacultyUniversityID,f.FacultyMemberName,Quran_volunteer_id,Surah_name,requestState FROM QuranVolunteer q, facultymember f WHERE f.FacultyUniversityID =q.FacultyUniversityID ";

// $query2="SELECT Student_ID, Activity_ID, timeStart, timeEnd, Day, Quran_volunteer_id FROM TimeTable t, RegisteredLesson r WHERE t.Quran_volunteer_id =r.Activity_ID ";


$query="SELECT 
RegisteredLesson.Student_ID, RegisteredLesson.Activity_ID, TimeTable.timeStart, TimeTable.timeEnd, TimeTable.Day, TimeTable.Quran_volunteer_id,facultymember.FacultyUniversityID, facultymember.FacultyMemberName, QuranVolunteer.Quran_volunteer_id,QuranVolunteer.Surah_name 
FROM TimeTable
join RegisteredLesson on TimeTable.Quran_volunteer_id=RegisteredLesson.Activity_ID
join QuranVolunteer on RegisteredLesson.Activity_ID=QuranVolunteer.Quran_volunteer_id
join facultymember on QuranVolunteer.FacultyUniversityID=facultymember.FacultyUniversityID
where RegisteredLesson.Student_ID=$StudentID " ;

$result = mysqli_query($connect, $query);
if (!$result) {
    printf("Error: %s\n", mysqli_error($connect));
    exit();
}

while($row = mysqli_fetch_array($result)){

             
                    $FacultyMemberName = $row['FacultyMemberName'];
                    $Quran_volunteer_id = $row['Quran_volunteer_id'];
                    $Surah_name = $row['Surah_name'];
                    $timeStart = $row['timeStart'];
                    $timeEnd = $row['timeEnd'];
                    $Day = $row['Day'];
                    $return_arr[] = array(
                        "FacultyMemberName" => $FacultyMemberName,
                        "Quran_volunteer_id" => $Quran_volunteer_id,
                        "Surah_name" => $Surah_name,
                        "timeStart" => $timeStart,
                        "timeEnd" => $timeEnd,
                        "Day" => $Day
                    ); 
               
               
            }
    //     }
    // }






// $result2 = mysqli_query($mysqli, $query2);
// if (!$result2) {
//     printf("Error: %s\n", mysqli_error($mysqli));
//     exit();
// }

// while($row2 = mysqli_fetch_array($result2)){
//         while ($row = mysqli_fetch_array($result)) {
//             if($row['Quran_volunteer_id']==$row2['Activity_ID']&& $row2['Student_ID']== $StudentID){
//                 $FacultyMemberName = $row['FacultyMemberName'];
//                 $Quran_volunteer_id = $row['Quran_volunteer_id'];
//                 $Surah_name = $row['Surah_name'];
//                 $timeStart = $row2['timeStart'];
//                 $timeEnd = $row2['timeEnd'];
//                 $Day = $row2['Day'];
//                 $return_arr[] = array(
//                     "FacultyMemberName" => $FacultyMemberName,
//                     "Quran_volunteer_id" => $Quran_volunteer_id,
//                     "Surah_name" => $Surah_name,
//                     "timeStart" => $timeStart,
//                     "timeEnd" => $timeEnd,
//                     "Day" => $Day
//                 ); 
           
           
//         }
//     }
// }


// Encoding array in JSON format
echo json_encode($return_arr);


// $query1="SELECT * FROM `RegisteredLesson` WHERE `Student_ID`=$Student_ID ";
// get lesson information 
// $query1 = "SELECT * FROM `Islamic Volunteer` WHERE `requestState`=`مقبول` ";
// $result1 = mysqli_query($mysqli, $query1);
// if (!$result1) {
//     printf("Error: %s\n", mysqli_error($mysqli));
//     exit();
// }
// $queryTimeTable = "SELECT * FROM `TimeTable` ";

// $resultTimeTable = mysqli_query($mysqli, $queryTimeTable);
// if (!$resultTimeTable) {
//     printf("Error: %s\n", mysqli_error($mysqli));
//     exit();
// }


// while ($row1 = mysqli_fetch_array($result1)) {
   
// while ($row = mysqli_fetch_array($result)) {
//     if ($row['requestState'] == $condition) {
//         while ($rowTimeTable = mysqli_fetch_array($resultTimeTable)) {
//                 if($row1['Activity_ID']==$row['Quran_volunteer_id']){
//              if ($row['Quran_volunteer_id'] == $rowTimeTable['Quran_volunteer_id']) {
//                 $FacultyMemberName = $row['FacultyMemberName'];
//                 $Quran_volunteer_id = $row['Quran_volunteer_id'];
//                 $Surah_name = $row['Surah_name'];
//                 $timeStart = $rowTimeTable['timeStart'];
//                 $timeEnd = $rowTimeTable['timeEnd'];
//                 $Day = $rowTimeTable['Day'];
//                 $return_arr[] = array(
//                     "FacultyMemberName" => $FacultyMemberName,
//                     "Quran_volunteer_id" => $Quran_volunteer_id,
//                     "Surah_name" => $Surah_name,
//                     "timeStart" => $timeStart,
//                     "timeEnd" => $timeEnd,
//                     "Day" => $Day
//                 );
//             }
//         }
//     }
// }
// }
// }

