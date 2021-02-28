<?php
include "config.php";
$return_arr = array();
$condition = "مقبول";
// get lesson information 
// $query1 = "SELECT * FROM `Islamic Volunteer` WHERE `requestState`=`مقبول` ";
// $query = "SELECT q.FacultyUniversityID,f.FacultyMemberName,Quran_volunteer_id,Surah_name,requestState FROM QuranVolunteer q, facultymember f WHERE f.FacultyUniversityID =q.FacultyUniversityID ";


$query="SELECT 
TimeTable.timeStart, TimeTable.timeEnd, TimeTable.Day, QuranVolunteer.requestState, TimeTable.Quran_volunteer_id,facultymember.FacultyUniversityID, facultymember.FacultyMemberName, QuranVolunteer.Quran_volunteer_id,QuranVolunteer.Surah_name 
FROM TimeTable
join QuranVolunteer on TimeTable.Quran_volunteer_id=QuranVolunteer.Quran_volunteer_id
join facultymember on QuranVolunteer.FacultyUniversityID=facultymember.FacultyUniversityID
where QuranVolunteer.requestState = 'مقبول' ";
// $queryTimeTable = "SELECT * FROM `TimeTable` ";

// $resultTimeTable = mysqli_query($mysqli, $queryTimeTable);
// if (!$resultTimeTable) {
//     printf("Error: %s\n", mysqli_error($mysqli));
//     exit();
// }


$result = mysqli_query($connect, $query);
if (!$result) {
    printf("Error: %s\n", mysqli_error($connect));
    exit();
}

while ($row = mysqli_fetch_array($result)) {
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

// while ($row = mysqli_fetch_array($result)) {
//     if ($row['requestState'] == $condition) {
//         while ($rowTimeTable = mysqli_fetch_array($resultTimeTable)) {

//             if ($row['Quran_volunteer_id'] == $rowTimeTable['Quran_volunteer_id']) {
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

// Encoding array in JSON format
echo json_encode($return_arr);
