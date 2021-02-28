<?php
include "config.php";
$return_arr = array();

$_SESSION['IslamicVolunteerID']=$_GET['IslamicVolunteerID'];
$IslamicVolunteerID=$_SESSION['IslamicVolunteerID'];
// get  certificates of lessons
$query="SELECT  worthingCertificate.Student_ID, worthingCertificate.IslamicVolunteerID, Student.name,Student.university_email FROM worthingCertificate 
INNER JOIN Student ON worthingCertificate.Student_ID=Student.university_ID
WHERE worthingCertificate.IslamicVolunteerID= $IslamicVolunteerID " ;


    $result = mysqli_query($connect, $query);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($connect));
        exit();
    }


    while($row = mysqli_fetch_array($result)){
       

    $Student_ID=$row['Student_ID'];
    $name=$row['name'];
    $university_email=$row['university_email'];

    // $row['FacultyUniversityID'];

        $return_arr[] = array(
                        
                        "Student_ID" => $Student_ID,
                        "name" => $name,
                        "university_email"=> $university_email
                    );
    }
    

    echo json_encode($return_arr);

?>