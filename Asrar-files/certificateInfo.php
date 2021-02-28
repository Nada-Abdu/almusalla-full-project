<?php
include "config.php";
$return_arr = array();

// get  certificates of lessons
$query="SELECT `IslamicVolunteerID`, `CertificateName`, `lessonName`,  `FacultyUniversityID` FROM `IslamicVolunteer` WHERE `havingCertificate`=1 and `CertificateName` != '' " ;


    $result = mysqli_query($connect, $query);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($connect));
        exit();
    }


    while($row = mysqli_fetch_array($result)){
       
    $IslamicVolunteerID=$row['IslamicVolunteerID'];
    $CertificateName=$row['CertificateName'];
    $lessonName=$row['lessonName'];
    // $row['FacultyUniversityID'];

        $return_arr[] = array(
                        "IslamicVolunteerID" => $IslamicVolunteerID,
                        "CertificateName" => $CertificateName,
                        "lessonName" => $lessonName
                    );
    }
    

    echo json_encode($return_arr);

?>