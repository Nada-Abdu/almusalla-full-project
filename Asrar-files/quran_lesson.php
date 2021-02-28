<?php
include "config.php";
$return_arr = array();
$condition = "مقبول";

$query="SELECT 
 QuranVolunteer.requestState, facultymember.FacultyUniversityID, facultymember.FacultyMemberName, QuranVolunteer.Quran_volunteer_id,QuranVolunteer.Surah_name 
FROM QuranVolunteer
join facultymember on QuranVolunteer.FacultyUniversityID=facultymember.FacultyUniversityID

where QuranVolunteer.requestState = 'مقبول' ";

$result = mysqli_query($connect, $query);
if (!$result) {
    printf("Error: %s\n", mysqli_error($connect));
    exit();
}

while ($row = mysqli_fetch_array($result)) {
$FacultyMemberName = $row['FacultyMemberName'];
                $Quran_volunteer_id = $row['Quran_volunteer_id'];
                $Surah_name = $row['Surah_name'];
               
                $return_arr[] = array(
                    "FacultyMemberName" => $FacultyMemberName,
                    "Quran_volunteer_id" => $Quran_volunteer_id,
                    "Surah_name" => $Surah_name,
                   
                );
            }

// Encoding array in JSON format
echo json_encode($return_arr);
