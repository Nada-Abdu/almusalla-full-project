<!doctype html>
<?php
$connect = mysqli_connect('localhost','root','05371433','almusalla');
session_start();
  ?>
<html class="no-js" lang="ar">

<head >
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title> مصلى ام القرى </title>
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


  <!-- <link rel="stylesheet" href="css/responsive.css"> -->
  <style>
  .customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  .customers td, .customers th {
    border: 2px solid #ddd;
    padding: 8px;
      text-align:center;

  }

  .customers tr:nth-child(even){background-color: #f2f2f2;}

  .customers tr:hover {background-color: #ddd;}

  .customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #28d1cf;
    color: white;
  }
  .open-button {
   background-color: #555;
   color: white;
   padding: 16px 20px;
   border: none;
   cursor: pointer;
   opacity: 0.8;
   position: fixed;
   bottom: 23px;
   right: 28px;
   width: 280px;
 }

 /* The popup form - hidden by default */
 .form-popup {
   display: none;
   position: fixed;
    border: 3px solid #fff;
   z-index: 30;
     border-radius: 5px;
     top:200px ;
     right:450px;
     background-color: #ffffff;
height: 400px;

 }

 /* Add styles to the form container */
 .form-container {
   max-width: 300px;
   max-height: 300px;
   padding: 30px;
   background-color: white;

 }


 /* Set a style for the submit/login button */


 /* Add some hover effects to buttons */
 .form-container .btn:hover, .open-button:hover {
   opacity: 1;
 }

  </style>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <script>
 function alert() {
      Swal.fire({
        icon: 'success',
        title: 'تم تسجيل الموعد بنجاح',
        showConfirmButton: false,
        timer: 2000
      })
      window.setTimeout(function() {
        location.replace("choose appointment of activity.php");
        }, 2000);
     
    }
 </script>
 <script>
 function alert_DEL(){
  Swal.fire({
icon: 'success',
title: 'تـم حذف الموعد بنجاح ',
text: 'يمكنك الان اضافة موعد جديد',
showConfirmButton: false,
timer: 2000
})  
    window.setTimeout(function() {
        location.replace("choose appointment of activity.php");
        }, 2000);
}
</script>
<script>
function alert_warning(){
Swal.fire({
  title: '!تنــبيـه',
   icon: 'warning',
   text: '  لا يمكنك اختيار اكثر من موعد اذا اردتي اختيار موعد اخر قومي بحذف الموعد المسجل مسبقا',
    confirmButtonColor: '#28d1cf',
   confirmButtonText: 'اغلاق'
}) }
</script>
<script>
function alert_warning_DEL(){
 Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'

    )
  }
})
}
</script>
</head>

<body  onload="alertq();">

  <!-- header-start -->
  <header>
    <div class="header-area ">
      <div class="header-top_area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-6 col-md-12 col-lg-8">
              <div class="short_contact_list">
                <ul>
                  <li> <img src="Asrar-files/logo-1.png" alt="" style="width:150px;"></li>
                </ul>
              </div>
            </div>

            <div class="col-xl-6 col-md-6 col-lg-4">

              <div class="social_media_links d-none d-lg-block">
                <a dir="rtl" href="HomePage.php?reason=signout" style="font-size:15px; "><i class="fa fa-sign-in" aria-hidden="true"></i> تسجيل الخروج</a>
                <a dir="rtl" href="Personal Page for Student.php" style="font-size:15px; "><i class="fa fa-user-circle-o" aria-hidden="true"></i> الصفحة الشخصية</a>
                <a dir="rtl" href="HomePage.php" style="font-size:15px; "><i class="fa fa-home"></i> الصفحة الرئيسية</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="sticky-header" class="main-header-area" style="margin-top: 15px;">
        <div class="container-fluid">
          <div class="row align-items-center">
            <!-- student -->
            <div class="col-xl-10 col-lg-10" style="padding-right:14%">
        <div class="main-menu">
          <nav>
            <ul id="navigation">


              <li ><a href="" class="dropdown" style="font-size:15px;"> الــدروس المسجــلة <i class="ti-angle-down"></i></a>
                <ul class="submenu" id="listShad1" style="text-align:center;">
                  <li style="padding-top:10px; padding-bottom:5px;" class="dropdown-content"> <a href="registered course activity.php" >أنشـــطة المــواد</a></li>
                  <li  style="padding-top:10px; padding-bottom:10px;"class="dropdown-content"><a href="registered lesson.php">دروس المصلــى </a></li>
                    </ul>
              </li>


<li><a style="font-size:15px;">|</a></li>


              <li><a href="course Activities.php" style="font-size:15px;">الأنشــطة</li></a>
              <li><a style="font-size:15px;">|</a></li>
              <li ><a href="" class="dropdown" style="font-size:15px;">دروس المصلى<i class="ti-angle-down"></i></a>
                <ul class="submenu" id="listShad1" style="text-align:center;">
                  <li style="padding-top:10px; padding-bottom:5px;" class="dropdown-content"> <a href="Quran_Lesson.php" >حلقات التقوية</a></li>
                  <li  style="padding-top:10px; padding-bottom:10px;"class="dropdown-content"><a href="almosalla Lessons .php">الدروس الإسلامية </a></li>
                    </ul>
              </li>

            </ul>
          </nav>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </header>
  <!-- header-end -->

  <!-- slider_area_start -->
  <div class="slider_area" style= "padding-left:1%">
    <div class="single_slider  d-flex align-items-center   " style="  background-image: url( image_footer/2.png);   background-size:auto;   background-position:top ;">


      <div class="row text-right" style="margin-left:75%; margin-top:-23%;">
              <div class="col-12 text-right">
                <div class="section_title text-right mb-55">
                  <h3 dir="rtl" style="font-size:30px"><span>  اختيار الموعد   </span></h3>
                </div>
              </div>
            </div>
      </div>
    </div>

  <!-- slider_area_end -->



  <div style="margin-left:6%; margin-top:-29%;padding:5%; padding-right:19% ; padding-left:15%">

          <div class="row text-right" style="margin-right:43%; margin-top:-4%; margin-bottom:-2%">
                  <div class="col-12 text-right">
                    <div class="section_title text-right mb-55">
                      <h3 style="font-size:25px;"><span><strong>  : الموعد المسجل   </strong></span></h3>
                    </div>
                  </div>
                </div>

<form method='post'   >
      <table class="customers"  id="table">

          <?php
         class Appointment{
         public $volunteer_name;
         public $timeStart;
         public $timeEnd;
         public  $Surah_name;
         public $DAY;
         function __construct($volunteer_name,$timeStart,$timeEnd,$Surah_name,$DAY) {
         $this->volunteer_name = $volunteer_name;
         $this->timeStart = $timeStart;
         $this->timeEnd = $timeEnd;

         $this->Surah_name = $Surah_name;
         $this->DAY = $DAY;}
        function get_volunteer_name() {
        return $this->volunteer_name; }
        function get_timeStart() {
        return $this->timeStart;}
        function get_timeEnd() {
        return $this->timeEnd;}
        function get_Surah_name() {
        return $this->Surah_name;}
        function get_DAY() {
        return $this->DAY;}

          }
  $Student_id=$_SESSION['studentid'];
  $appo;
        echo "
        <thead>
        <tr>
        <th rowspan='2'>حذف الموعد</th>
          <th colspan='2'>الـــوقــت</th>
          <th rowspan='2'>اليوم </th>
          <th rowspan='2'>اسم المتطوعة  </th>

        </tr>
        <tr>
          <th>الى</th>
          <th>من</th>

        </tr>
        </thead>


        <tbody id='bb'>

           <tr  id='ss'>";
           $sql1= "SELECT day ,timeStart, timeEnd,volunteer_name ,	followup_activityID  FROM followupactivity  where student_id	=  $Student_id And Surah_name='0' ";
           if ($result1 = $connect-> query($sql1)) {
             if(mysqli_num_rows($result1)>0){
              while ($obj = $result1 -> fetch_object()) {
            $appo =new Appointment($obj->volunteer_name,$obj->timeStart,$obj->timeEnd,"0",$obj->day);

            echo"  <td > <button type='button' name='aa' value=' '  style='background-image:url(image_footer/dd.png);background-repeat: no-repeat;  background-position: center; height:20px; margin-top:6%'  onclick='openForm()'> </button></td>";
            echo' <div class="form-popup col-4" id="myForm">
                        <form action="choose appointment of lesson.php"  method="post" class=" col-4" >
                        <img src="image_footer/exclamation-mark.png" style="margin:15% 41% 3% 41% " >
                        
                        <h3 style="margin:1% 0% 0% 30%"; >  هل انـت متـأكــدة ؟؟ </h3>
                        <h4 style="margin:4% 0% 0% 15%">!.. لن تكوني قادرة على استرجاع الموعد بعد الحذف   </h4>
                          <button type="submit"  name = "delete" class="btn boxed-btn4"    style="margin:15% 0% 0% 16%" > حــذف</button>
                          <button type="button" class="btn cancel boxed-btn4" onclick="closeForm()" style="margin:15% 0% 0% 5%; background-color:#ff3838">الغــاء</button>
                        </form>
                     ';


         echo"<td><output style=' padding-left:5px;padding-right:5px; border-bottom: 2px solid #07B5B2;  background-color:#f6f6f6 ;'> "; echo$appo->get_timeEnd();echo" </output> </td> ";
              echo"<td><output style=' padding-left:5px;padding-right:5px; border-bottom: 2px solid #07B5B2;  background-color:#f6f6f6 ;'>"; echo$appo->get_timeStart();echo"</output> </td> ";
                echo"<td>"; echo$appo->get_DAY();echo"</td> ";
               echo"<td>"; echo$appo->get_volunteer_name();echo"</td>   </tr> </tbody>";

                if(isset($_POST['delete'])){
                   $sql3 = "DELETE FROM followupactivity WHERE followup_activityID=$obj->followup_activityID ";
                   if ($connect->query($sql3) === TRUE) {
                      $appo =new Appointment("-","-","-","0","-");
echo "<script type=text/javascript >
alert_DEL();
 </script>";


                  } else {

                      echo "Error deleting record: " . $conn->error;
                  }


 }}} else {
  $appo =new Appointment("-","-","-","0","-");}

}
      echo "   </table>   </form>

       </div>";?>
<form method="post"  >
<div style='margin-left:2%;padding:5%  ; padding-bottom:16%'>
  <div class='row text-right' style='margin-right:46%; margin-top:-5%; margin-bottom:-2% '>
          <div class='col-12 text-right'>
            <div class='section_title text-right mb-55'>
            <h3 style=font-size:25px;><span><strong>  : اختيار موعد   </strong></span></h3>
            </div>
          </div>
        </div>
        <table class='customers' >
 <thead>
<tr>
<th rowspan='2'>اختيار موعد</th>
  <th colspan='2'>الـــوقــت</th>
  <th rowspan='2'>اليوم </th>
  <th rowspan='2'>  اسم السورة </th>

  <th rowspan='2'>اسم المتطوعة </th>

</tr>
<tr>
  <th>الى</th>
  <th>من</th>

</tr>
   </thead>
<?php
echo "<tbody>";

     $sql= "SELECT facultymember.FacultyMemberName, quranvolunteer.Quran_volunteer_id , quranvolunteer.Surah_name   FROM quranvolunteer INNER JOIN facultymember ON quranvolunteer.FacultyUniversityID = facultymember.FacultyUniversityID where quranvolunteer.requestState='مقبول'";
     if ($result = $connect-> query($sql)) {
       while ($obj = $result -> fetch_object()) {
         $sql2= "SELECT  *  FROM timetable where timetable.Quran_volunteer_id = $obj->Quran_volunteer_id";
         if ($result3 = $connect-> query($sql2)) {
           while ($obj1 = $result3 -> fetch_object()) {
          echo "<tr>";
          echo"<td> ";
          echo"<input type='checkbox' name='att[]' value='$obj1->Time_ID'  ></input>  ";
          echo" </td>";
          echo"<td><output style=' padding-left:5px;padding-right:5px; border-bottom: 2px solid #07B5B2;  background-color:#f6f6f6 ;'> $obj1->timeEnd </output></td> ";

           echo"<td><output style=' padding-left:5px;padding-right:5px; border-bottom: 2px solid #07B5B2;  background-color:#f6f6f6 ;'>$obj1->timeStart</output> </td> ";
          echo"<td>$obj1->Day</td> ";
          echo"<td>$obj->Surah_name</td> ";
          echo"<td>$obj->FacultyMemberName</td> ";
          echo "</tr>";
}}
       }
       $result -> free_result();
     }
         echo "</tbody>";
         echo "</table>";
         echo "<input  type='submit'  name ='submit' value='حفظ'  class='boxed-btn4' style=' margin:5% 45%;'>";
         echo "</form>";


         $studentID =$_SESSION['studentid'];
         $activityID = $_GET['activityID'];
         if(isset($_POST['att'])&&$appo->get_DAY()!=="-"){
           echo '<script type="text/javascript">
           alert_warning();
           </script>';
}
            if ($appo->get_DAY()=="-"){
               if(isset($_POST['att'])  ){

                        foreach ($_POST['att'] as $key => $value) {
                          echo $value;
                          $sql4= "SELECT  *  FROM timetable where timetable.Time_ID = $value";
             if ($result1 = $connect-> query($sql4)) {
               while ($obj = $result1 -> fetch_object()) {
                  $sql= "SELECT facultymember.FacultyMemberName, quranvolunteer.Quran_volunteer_id , quranvolunteer.Surah_name FROM quranvolunteer INNER JOIN facultymember ON quranvolunteer.FacultyUniversityID = facultymember.FacultyUniversityID where quranvolunteer.Quran_volunteer_id=$obj->Quran_volunteer_id";
                 if ($result2 = $connect-> query($sql)) {
                   while ($obj1 = $result2 -> fetch_object()) {
              
                  $sql2 = "INSERT INTO followupactivity(student_id	, activity_id	, day ,timeStart,timeEnd, volunteer_name )
                 VALUES ('$studentID', '$activityID', '$obj->Day','$obj->timeStart', '$obj->timeEnd', '$obj1->FacultyMemberName')";
                  if (mysqli_query($connect, $sql2)) {
                    echo '<script type="text/javascript">
                         alert();
                         </script>';
                  } else {
                     echo "Error: " . $sql2 . "<br>" . mysqli_error($connect);
                 }
            }       $result -> free_result();
          }}}}}
         }


  ?>


 


  </div>




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

  <script src="js/main.js"></script>
  <script src="sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script  type="text/javascript">
function alert3()
{ var temp = true;
  if (document.cookie.replace(/(?:(?:^|.*;\s*)doSomethingOnlyOnce\s*\=\s*([^;]*).*$)|^.*$/, "$1") === "true") {

   Swal.fire({
     title: '! فــضـلاً',
     icon: 'info',
     text: 'قومي باختيار موعد واحد قبل كل لقاء',
      confirmButtonColor: '#28d1cf',
     confirmButtonText: 'اغلاق'
 })
document.cookie = "doSomethingOnlyOnce=true; expires=Fri, 31 Dec 9999 23:59:59 GMT";
}
}
</script>
 <script type="text/javascript">

<script>

$('input[type="checkbox"]').on('change',function(){
  $('input[type="checkbox"]').each(function(){
    $(this).prop('checked', false);
  });
  $(this).prop('checked', true);
 });
</script>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>

</html>
