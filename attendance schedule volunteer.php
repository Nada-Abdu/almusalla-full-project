<?php  
session_start();
?>

<!doctype html>
<?php
$connect = mysqli_connect('localhost','root','05371433','almusalla');
$IslamicVolunteerID =(int)$_GET["ISLAMIC_ID"];

  ?>
<html class="no-js" lang="ar">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>مصلى ام القرى </title>
  <link rel = "icon" type = "image/png" href ="image_HomePage/logoicon.png">

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/gijgo.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/slicknav.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css_nuha/list.css">
  <link rel="stylesheet" type="text/css" href="css_nuha/formQuranVolunteer.css"> 
   <style>
  #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #customers td, #customers th {
    border: 2px solid #ddd;
    padding: 8px;
      text-align:center;

  }

  #customers tr:nth-child(even){background-color: #f2f2f2;}

  #customers tr:hover {background-color: #ddd;}

  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #28d1cf;
    color: white;
  }
  </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <script>
 function alert() {
var a=document.getElementById("link").text;
console.log("kdkjsdkjwskdmlwmflwmfl   "+a);
var href="attendance schedule volunteer.php?ISLAMIC_ID="+a;

      Swal.fire({
        icon: 'success',
        title: 'تم الحفظ بنجاح',
        showConfirmButton: false,
        timer: 2000
      })
      window.setTimeout(function() {
        location.replace(href);
        }, 2020);
     
    }
 </script>

</head>

<body>
 

  <!-- header-start -->
  <header>
          <div class="header-area ">
            <div class="header-top_area">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xl-6 col-md-12 col-lg-8">
                    <div class="short_contact_list">
                      <ul>
                        <li> <img src="image_nuha/logo-1.png" alt="" style="width:150px;"></li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-xl-6 col-md-6 col-lg-4">


                    <div class="social_media_links d-none d-lg-block">
                      <a dir="rtl" href="HomePage.php?reason=signout" style="font-size:15px; "><i class="fa fa-sign-in" aria-hidden="true"></i> تسجيل الخروج</a>
                      <a dir="rtl" href="Personal Page for Faculty Member.php" style="font-size:15px; "><i class="fa fa-user-circle-o" aria-hidden="true"></i> الصفحة الشخصية</a>
                      <a dir="rtl" href="HomePage.php" style="font-size:15px; "><i class="fa fa-home"></i> الصفحة الرئيسية</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="sticky-header" class="main-header-area" style="margin-top: 15px;">
              <div class="container-fluid">
                <div class="row align-items-center">
                  <?php


                  $ID = $_SESSION['facultyid'];
                  $result = $connect->query("SELECT * FROM `quranvolunteer` WHERE FacultyUniversityID=$ID ");
                  $result2 = $connect->query("SELECT * FROM `islamicvolunteer` WHERE FacultyUniversityID=$ID ");
                  $row2 = $result2->fetch_array(MYSQLI_ASSOC);
                  $row = $result->fetch_array(MYSQLI_ASSOC);

                if( $row['requestState'] == "مقبول"|| $row2['requestState'] == "مقبول" ){
                echo  "<div class='col-xl-10 col-lg-10'>"; }
                else {
                    echo  "<div class='col-xl-9 col-lg-10'>";
                }
                                echo "<div class='main-menu'>";
                                   echo "<nav>";
                                    echo " <ul id='navigation'>";
                                    if( $row['requestState'] == "مقبول"|| $row2['requestState'] == "مقبول" ){

                                    echo "<div class='dropdown' >";
                                    echo "<li ><a href='' style='font-size:15px;'>  متابـــعة طالبـــات المصلـــى <i class='ti-angle-down'></i></a>";
                                    echo "<ul class='submenu' id='listShad1' style='text-align:center;'>";

                                    if( $row['requestState'] == "مقبول"){
                                    echo " <li style='padding-top:10px; padding-bottom:5px;' class='dropdown-content'> <a href='follow up Quran student.php' >طالبات حلقات التقويه</a></li>";}
                                    if($row2['requestState'] == "مقبول"){
                                    echo "  <li  style='padding-top:10px; padding-bottom:10px;'class='dropdown-content'><a href='follow up islamic  student.php'>طالبات الدروس الاسلامية </a></li>";}

                                    echo "</ul>";
                                   echo "</li>";
                                  echo "</div>";
                                  echo "<li><a style='font-size:15px;'>|</a></li>";
                                }
                                     ?>


                                        <div class="dropdown" >
                                       <li ><a href="" style="font-size:15px;"> طلـــــب تطـــوع <i class="ti-angle-down"></i></a>
                                         <ul class="submenu" id="listShad1" style="text-align:center;">
                                           <?php     $ID = $_SESSION['facultyid']; $result = $connect->query("SELECT * FROM `quranvolunteer` WHERE FacultyUniversityID=$ID "); if(mysqli_num_rows($result) < 1) {echo "<li style='padding-top:10px; padding-bottom:5px;'class='dropdown-content'> <a href='requesting form as Quran volunteer.php' >حلقـــات التقـــوية</a></li>"; }?>
                                           <li  style="padding-top:10px; padding-bottom:10px;"class="dropdown-content"><a href=" requesting form as Islamic volunteer.php">الــدروس الاســـلاميـة </a></li>
                                             </ul>
                                       </li>
                                     </div>

                                      <li><a style="font-size:15px;">|</a></li>

                                      <div class="dropdown" >
                                      <li ><a href=" FollowUpMain.php" style="font-size:15px;">متابـــعة طالبـــات النشـــاط</i></a>

                                      </li>
                                    </div>

                                                         <li><a style="font-size:15px;">|</a></li>

                                    <div class="dropdown" >
                                    <li ><a href="" style="font-size:15px;"> تحديـــد النشـــاط <i class="ti-angle-down"></i></a>
                                      <ul class="submenu" id="listShad1" style="text-align:center;">
                                      <li style="padding-top:10px; padding-bottom:5px;" class="dropdown-content"> <a href="DetermineIslamicActivity.php" >نشاط الدروس الاسلامية</a></li>
                        <li  style="padding-top:10px; padding-bottom:10px;"class="dropdown-content"><a href="DetermineQuranActivity.php">نشاط حلقات القران</a></li>
                                          </ul>
                                    </li>
                                    </div>






                                     </ul>
                                   </nav>
                                 </div>
                               </div>


                      <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </header>
  <!-- header-end -->

  <!-- slider_area_start -->
  <div class="slider_area" style= "padding-left:1%">
    <div class="single_slider  d-flex align-items-center   " style="  background-image:url( image_footer/2.png);   background-size:auto;   background-position:top ;">


    <div class="row text-right" style="margin-left:60%; margin-top:-23%;">
              <div class="col-12 text-right">
                <div class="section_title text-right mb-55">
                  <h3 dir="rtl" style="font-size:30px"><span> جدول متابعة الحضور للدروس الاسلامية </span></h3>
                </div>
              </div>
            </div>

      </div>
    </div>

  <!-- slider_area_end -->
<div style="margin-left:2%; margin-top:-29%;padding:5%">
<?php     $IslamicVolunteerID =(int)$_GET["ISLAMIC_ID"];?>

<form method="post" actin="<?php echo "attendance schedule volunteer.php?ISLAMIC_ID=$IslamicVolunteerID "; ?>">
  <table id="customers" dir="rtl">
    <tr >
    <th colspan="1"style=" background-color: #07b5b2"> --- </th>
    <th  colspan="8"style=" background-color: #07b5b2">الــلــقــــــــــــــاءات</th>
      <th colspan="1"style=" background-color: #07b5b2">---</th>
    </tr>

    <tr>
      <th>اسم الطالبة </th>
      <th>اللقاء الاول</th>
      <th>اللقاء الثاني </th>
      <th>اللقاء  الثالث </th>
      <th>اللقاء الرابع</th>
      <th>اللقاء الخامس</th>
      <th>اللقاء السادس</th>
      <th>اللقاء السابع</th>
      <th>اللقاء الثامن</th>
      <th>استحقاق الشهادة</th>
    </tr>
<?php   
    $IslamicVolunteerID =(int)$_GET["ISLAMIC_ID"];
     $meetingNumber =0;
    $meetingID=0;
    $sql =  "SELECT  Meeting_ID , MeetingNumber FROM meeting  where IslamicVolunteerID=$IslamicVolunteerID ";
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $meetingNumber = $row["MeetingNumber"] ;
      $meetingID =$row["Meeting_ID"] ;
    }

     $_SESSION["meeting"] = (int)$meetingNumber ;
    $_SESSION["meeting_ID"] = (int)$meetingID ;
    $_SESSION["islamic_ID"] = (int)$IslamicVolunteerID ;
/////////////////////////////////////////////////
$student=array();
$studentType =array();
$attendencid = array();
$s =0;
$sql2 =  "SELECT  student_ID , activityid	,Attendance_id  FROM attendance where IslamicVolunteerID=$IslamicVolunteerID GROUP BY student_ID  ";
$result2 = mysqli_query($connect,$sql2);
while ($row = mysqli_fetch_array($result2, MYSQLI_NUM)){
 $student[$s]=$row[0];
 $studentType[$row[0]]=$row[1];
 $attendencid[$row[0]]=$row[2];
  $s=1+$s;
}
$_SESSION["AttStudent"] = (array)$student;
$_SESSION["type"] = (array)$studentType;
$_SESSION["attendenc_id"] = (array)$attendencid;


for ( $x=0 ;$x < count($student) ; $x++){
  $name;
  $sql3 = "SELECT student.name FROM student WHERE university_ID=$student[$x] ";
  $result3 = mysqli_query($connect,$sql3);
  while ($row = mysqli_fetch_array($result3, MYSQLI_NUM)) {
       $name=$row[0];         
      }
 
      $worthing =0;
      $sql1 = "SELECT * FROM worthingcertificate WHERE Student_ID=$student[$x] AND   IslamicVolunteerID=$IslamicVolunteerID  ";
      if ($result1 = $connect-> query($sql1)) {
          if(mysqli_num_rows($result1)>0){
          $worthing =1;
      }}


      $meeting = array();
      $meeting_state = array();
      $i=0;
       $sql4 = "SELECT * FROM attendance WHERE student_ID =$student[$x] AND   IslamicVolunteerID=$IslamicVolunteerID   ";
       $result4 = mysqli_query($connect,$sql4);
        while ($row = mysqli_fetch_array($result4, MYSQLI_NUM)) {
         $meeting[$i]=$row[4];
           $meeting_state[$i]=$row[5];
         $i=$i+1;
         
        }  
       
     
?>
      
      <tr>
      <td> <?php echo $name; ?> </td>
      <?php
      for ( $t=0; $t<= $meetingNumber-1 ; $t++) { ?>
        <td> <?php if($meeting_state[$t]==1){ echo "&#10004";}  ?> </td>
     <?php }  ?>
     <?php
     for ( $t=$meetingNumber+1;$t <= 8 ; $t++) { ?>
       <td><input type='checkbox' name="att[]" value=<?php echo $student[$x];?> ></input> </td>
     <?php } ?> 
     <?php if($worthing==1){ ?>
     <td>  <?php echo "&#10004"; ?> </td> 
     
     <?php  } else { ?> <td> <input type='checkbox' name='worthing[]' value=<?php echo $student[$x];?> ></input> </td>
     </tr> <?php  }} ?> 
  </table> 
  <input  type="submit"  name ="ss" value='حفظ'   style=' margin:5% 45%;'>


  </div>
</div>


    </div>
  </div>
  </form>
  <?php
  
$s=0;
 if(isset($_POST['ss'])){
    $islamicID = $_SESSION["islamic_ID"];
    $Student = $_SESSION["AttStudent"];
    $Meeting_num = $_SESSION["meeting"] ;
    $meeting_id = $_SESSION["meeting_ID"];
    $attStudent = array();
    $student_type=$_SESSION["type"];
    $att_Id =$_SESSION["attendenc_id"];
  echo "<a id='link' style='display:none;'>$islamicID</a> ";
    $temp=$Meeting_num;
 
  if(isset($_POST['att'])){

    foreach ($_POST['att'] as $key => $value) {
      $attStudent[$key] = $value;}
    $absStudent= array_diff($Student,$attStudent);
  
    $sql = "UPDATE meeting SET MeetingNumber=$Meeting_num+1 WHERE Meeting_ID=$meeting_id";
    if ($connect->query($sql) === TRUE) {
         echo '<script type="text/javascript">
        alert();
        </script>';
    } else {
        echo "Error updating record: " . $connect->error;
    }  
   if ($Meeting_num < 1 ){
    foreach($att_Id as $x => $val) {
      $sql = "DELETE FROM  attendance where Attendance_id = $att_Id[$x]";
       if ($connect->query($sql) === TRUE) {
      } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
  }

  $sql = "INSERT INTO meeting  ( MeetingNumber,IslamicVolunteerID) VALUES ($Meeting_num+1 ,  $islamicID";
  if ($connect->query($sql) === TRUE) {
      echo "Record updated successfully";
      echo '<script type="text/javascript">
      alert();
      </script>';
  } else {
      echo "Error updating record: " . $connect->error;
  } 
   }
    foreach($absStudent as $x => $val) {
      $sql = "INSERT INTO attendance (student_ID, IslamicVolunteerID, meetingNum,meetingState	,activityid)
      VALUES ($absStudent[$x],  $islamicID , $Meeting_num+1 , 0 , $student_type[$val])";
       if ($connect->query($sql) === TRUE) {
     } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
  }

  foreach($attStudent as $x => $val) { 
    $sql = "INSERT INTO attendance (student_ID, IslamicVolunteerID, meetingNum,meetingState	,activityid	)
    VALUES ($attStudent[$x],  $islamicID , $Meeting_num+1 , 1 , $student_type[$val])";
     if ($connect->query($sql) === TRUE) {
   } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }}
 
}
if(isset($_POST['worthing'])){
  foreach ($_POST['worthing'] as $key => $value) {
    $sql = "INSERT INTO worthingcertificate (Student_ID, IslamicVolunteerID)
    VALUES ($value,  $islamicID  )";
     if ($connect->query($sql) === TRUE) {
      echo '<script type="text/javascript">
      alert();
      </script>';
   } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  }}




}
    ?>
  <!-- footer_start  -->
  <footer class="footer" style="  padding : 60px; background:#F3FCF8">

    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-md-6 col-lg-4 ">
          <div class="footer_widget">
            <div class="footer_logo">

              <img src="img/logo-footer.png" alt="" style="padding-top: 9px;">

            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-6 col-lg-2">
          <div class="footer_widget" style="padding-top:20px ;">
            <a href="#" style="color:#070808">
              <strong class="footer_title">
                مـــن نــحـــن
              </strong>
            </a>
          </div>
        </div>
        <div class="col-xl-2 col-md-6 col-lg-2">
          <div class="footer_widget" style="  padding-top: 20px">
            <a href="#" style="color:#070808">
              <strong class="footer_title">
                الـــدعـــم الـفــنـــي
              </strong>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 col-lg-3">
          <div class="footer_widget" style="  padding-top: 20px">
            <a href="#" style="color:#070808">
              <strong class="footer_title">
                طريقة استخدام الموقع
              </strong>
            </a>
          </div>
        </div>
      </div>
    </div>
    </div>

  </footer>
  <!-- footer_end  -->

  <!-- link that opens popup -->

  <!-- JS here -->
  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/ajax-form.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/scrollIt.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/nice-select.min.js"></script>
  <script src="js/jquery.slicknav.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/gijgo.min.js"></script>
  <!--contact js-->
  <script src="js/contact.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="sweetalert2.all.min.js"></script>

  <script src="js/main.js"></script>

</body>

</html>
