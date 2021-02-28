<!doctype html>
<html class="no-js" lang="ar">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>مصلى أم القرى</title>
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

  <link rel="stylesheet" href="css_personal page/list.css">


   <?php
  session_start();
   ?>


<?php
$nameVulnteer=$_SESSION['facultyname']; //FORM Yaf_Session
$startTime=$_GET['time'];//FORM Yaf_Session
$connect = mysqli_connect('localhost','root','05371433','almusalla');
$typeTble="n";
$choosedactivtyStudent = $_POST['activty'] ?? '';
$infoStudents= mysqli_query($connect,"SELECT * FROM `followupactivity`  WHERE `student_id`='$choosedactivtyStudent' AND `Surah_name`='0' ");
if(mysqli_num_rows($infoStudents)== 0  ){  }

    else{
$infoStudent= mysqli_fetch_array($infoStudents);
$activtyId=$infoStudent['activity_id'];
$jvolunteername=$infoStudent['volunteer_name'];
 $day=$infoStudent['day'];
$numrows=0;
$allrows= mysqli_query($connect,"SELECT * FROM `followupactivity`  WHERE `student_id`='$choosedactivtyStudent' AND `activity_id`='$activtyId' ");
while ($allrow= mysqli_fetch_assoc($allrows)) {$numrows++; }
if($numrows==1){
  $infoActvties= mysqli_query($connect,"SELECT * FROM `activities` WHERE `activityid`='$activtyId'"); // activityid from session or from click
  $infoActvty= mysqli_fetch_array($infoActvties);
  $bonus=$infoActvty['bonus'];
}
  else{
$n=$numrows-1;
$lastrow= mysqli_query($connect,"SELECT * FROM `followupactivity`  WHERE `meeting_num`='$n' AND `activity_id`='$activtyId' AND  `student_id`='$choosedactivtyStudent'");
$lr= mysqli_fetch_array($lastrow);
$bonus=$lr['grade'];

}
}

 ?>



  <!-- <link rel="stylesheet" href="css/responsive.css"> -->
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

label , input[type=text] {
    width:30%;


    border: none;
    border-bottom: 2px solid #07b5b2;
  }


  .box select {
    background-color:#07b5b2;
    color:#ffffff;
    padding-left:12%;
    box-shadow:#f3f3f3;
  }

  .box option {
    color:inherit;
  background-color:#f3f3f3;
    color:#07b5b2;
  }

  .subadd {
    background:#07b5b2;
  	color:#fff;
  	display: inline-block;
  	padding: 20px 15px 20px 40px;
  	font-size: 16px;
      font-weight: 400;
      border: none;
      text-transform: capitalize;
      cursor: pointer;
      border-radius:3px;
      background-image:url('image_students follow-up/save.png');
    background-repeat:no-repeat;
    background-size: 15px;
 background-position:65px ;
  }

  .subsave {
    background:#07b5b2;
    color:#fff;
    display: inline-block;
    padding: 20px 20px 20px 40px;
    font-size: 16px;
      font-weight: 400;
      border: none;
      text-transform: capitalize;
      cursor: pointer;
      border-radius:3px;
      background-image:url('image_students follow-up/more.png');
    background-repeat:no-repeat;
    background-size: 15px;
  background-position:57px ;
  }


    .subm {
    background-color: #07B5B2;
    border: none;
    color: white;
    padding: 15px 80px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    font-size: 13px;
    -webkit-box-shadow: 0 10px 10px 0 rgba(95,186,233,0.4);
    box-shadow: 0 10px 10px 0 rgba(95,186,233,0.4);
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
    margin: 5px 20px 40px 20px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }

   .subm:hover {
    background-color:#7CE2F6;
  }

   .subm:active {
    -moz-transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -o-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
  }

  input[type=text] {
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    width:100%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
  }






  </style>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
function alert() {
    Swal.fire({
      icon: 'success',
      title: 'تم الحفظ  بنجاح',
      showConfirmButton: false,
      timer: 2000
    })
    window.setTimeout(function() {
      location.replace("follow up activty volunteer.php");
      }, 2020);
   
  }
</script>
  <script>
  var grade=0;

  function inf(){

  var volunteer=<?php echo json_encode($jvolunteername); ?>;
  grade= <?php echo json_encode($bonus); ?>;
  var day= <?php echo json_encode($day); ?>;
  var nummeeting= <?php echo json_encode($numrows); ?>;


  document.getElementById('v').innerHTML=volunteer;
  document.getElementById('deg').innerHTML=grade;
  document.getElementById('day').innerHTML= day;

  document.getElementById('nummeeting').innerHTML=nummeeting;

}




            function addMT(){
            var degtemp=parseInt(document.getElementById('deg').innerHTML);
            var add=parseInt(document.getElementById("MT").value);

         var cal=0;
         if(degtemp < grade){
           ++add;

          cal=degtemp+1;
        }
            else cal=grade;
           document.getElementById('deg').innerHTML=cal;

          document.getElementById("MT").value=add;


            }

            function subMT(){
                var cal=0;
         var degtemp=parseInt(document.getElementById('deg').innerHTML);
           var dec=parseInt(document.getElementById("MT").value);

         if(degtemp >= 1){
              --dec;
             cal=degtemp-1;

}
                 document.getElementById('deg').innerHTML=cal;
              document.getElementById("MT").value=dec;


            }

///
function addMM(){
  var degtemp=parseInt(document.getElementById('deg').innerHTML);
var add=parseInt(document.getElementById("MM").value);


var cal=0;
if(degtemp < grade){
cal=degtemp+1;
++add;
}
else cal=grade;
document.getElementById('deg').innerHTML=cal;
document.getElementById("MM").value=add;

}

function subMM(){
    var cal=0;
var deg= parseInt(document.getElementById('deg').innerHTML);
var dec=parseInt(document.getElementById("MM").value);
if(deg >= 1){
  --dec;
 cal=deg-1;
}
document.getElementById('deg').innerHTML=cal;
  document.getElementById("MM").value=dec;
}

/////

function addMS(){
var degtemp=parseInt(document.getElementById('deg').innerHTML);
var add=parseInt(document.getElementById("MS").value);
var deg; //من الداتا بيز حسب اللي تحدده الفاكلتي

var cal=0;
if(degtemp < grade ){
cal=degtemp+1;
++add;
}
else cal=grade;
document.getElementById('deg').innerHTML=cal;
document.getElementById("MS").value=add;

}

function subMS(){
    var cal=0;
var deg= parseInt(document.getElementById('deg').innerHTML);
var dec=parseInt(document.getElementById("MS").value);
if(deg >= 1){
  --dec;
cal=deg-1;
}
document.getElementById('deg').innerHTML=cal;
  document.getElementById("MS").value=dec;
}

var r=1;
function delateRow(currElement){
  var parentRowIndex = currElement.parentNode.parentNode.rowIndex;
  document.getElementById("customers").deleteRow(parentRowIndex);
r--;
}

 function addrow(){
   if(r==1){
  r++;
var table=document.getElementById("customers");
var row='<tr><td><button type="button" style=" background-color:inherit;  border:none; font-size:14px;" onclick="delateRow(this)";"><img src="image_students follow-up/cross.png" width=20 height=20 /></button></td>'+'<td><input  id="notee"size="10" type="text" name="name1" style=" border: 1px solid #07b5b2; width:90px;text-align:center; "/></td>'+
'<td id="v"></td>'+'<td id="deg"></td>'+
'<td > <button type="button" style=" background-color:#07b5b2; font-size:14px; height:25px; width:25px;" onclick="addMT();">+</button><input  value="0" id="MT" size="0.5" type="text" name="addtj" style=" border: 1.5px solid #07b5b2; height:25px; width:25px; text-align:center" readonly/><button  type="button" style=" background-color:#07b5b2; font-size:14px; height:25px; width:25px;"onclick="subMT(); ">ــ</button></td>'+
'<td ><button type="button" style=" background-color:#07b5b2; font-size:14px; height:25px; width:25px;"onclick="addMM()">+</button><input  value="0" id="MM" size="0.5" type="text" name="name1" style=" border: 1.5px solid #07b5b2; height:25px; width:25px; text-align:center" readonly/><button type="button" style=" background-color:#07b5b2; font-size:14px; height:25px; width:25px;" onclick="subMM()">ــ</button></td>'+
'<td ><button type="button"  style=" background-color:#07b5b2; font-size:14px; height:25px; width:25px;" onclick="addMS()">+</button><input  value="0" id="MS" size="0.5" type="text" name="name1" style=" border: 1.5px solid #07b5b2; height:25px; width:25px; text-align:center" readonly/><button  type="button" style=" background-color:#07b5b2; font-size:14px; height:25px; width:25px;" onclick="subMS()">ــ</button></td>'+
'<td><input id="ayah" size="10" type="text" name="name1" style=" border: 1px solid #07b5b2; width:40px;  text-align:center;"/></td>'+
'<td><div class="box"><select id="surh" ><option value="الفاتحة"  >الفاتحة</option><option value="البقرة">البقرة</option><option value="آل عمران">آل عمران</option><option value="النساء">النساء</option><option value="المائدة">المائدة</option><option value="الأنعام">الأنعام</option><option value="الأعراف">الأعراف</option><option value="الأنفال">الأنفال</option><option value="التوبة">التوبة</option><option value="يونس">يونس</option>'+
'<option value="هود">هود</option><option value="يوسف">يوسف</option><option value="الرعد">الرعد</option><option value="ابراهيم">ابراهيم</option><option value="الحجر">الحجر</option><option value="النحل">النحل</option><option value="الاسراء">الاسراء</option><option value="الكهف">الكهف</option><option value="مريم">مريم</option><option value="طه">طه</option><option value="الأنبياء">الأنبياء</option><option value="الحج">الحج</option>'+
'<option value="المؤمنون">المؤمنون</option><option value="النور">النور</option><option value="الفرقان">الفرقان</option><option value="الشعراء">الشعراء</option><option value="النمل">النمل</option><option value="القصص">القصص</option><option value="العنكبوت">العنكبوت</option><option value="الروم">الروم</option><option value="لقمان">لقمان</option><option value="السجدة">السجدة</option><option value="الاحزاب">الاحزاب</option>'+
'<option value="سبأ">سبأ</option><option value="فاطر">فاطر</option><option value="يس">يس</option><option value="الصافات">الصافات</option><option value="ص">ص</option><option value="الزمر">الزمر</option><option value="غافر">غافر</option><option value="فصلت">فصلت</option><option value="الشورى">الشورى</option><option value="الزخرف">الزخرف</option><option value="الدخان">الدخان</option><option value="الجاثية">الجاثية</option>'+
'<option value="الاحقاف">الاحقاف</option><option value="محمد">محمد</option><option value="الفتح">الفتح</option><option value="الحجرات">الحجرات</option><option value="ق">ق</option><option value="الذاريات">الذاريات</option><option value="الطور">الطور</option><option value="النجم">النجم</option><option value="القمر">القمر</option><option value="الرحمن">الرحمن</option><option value="الواقعة">الواقعة</option>'+
'<option value="الحديد">الحديد</option><option value="المجادلة">المجادلة</option><option value="الحشر">الحشر</option><option value="الممتحنه">الممتحنه</option><option value="الصف">الصف</option><option value="الجمعة">الجمعة</option><option value="المنافقون">المنافقون</option><option value="التغابن">التغابن</option><option value="">الطلاق</option><option value="التحريم">التحريم</option><option value="الملك">الملك</option>'+
'<option value="القلم">القلم</option><option value="الحاقة">الحاقة</option><option value="المعارج">المعارج</option><option value="نوح">نوح</option><option value="الجن">الجن</option><option value="المزمل">المزمل</option><option value="المدثر">المدثر</option><option value="القيامة">القيامة</option><option value="الانسان">الانسان</option><option value="المرسلات">المرسلات</option><option value="النبأ">النبأ</option>'+
'<option value="النازعات">النازعات</option><option value="عبس">عبس</option><option value="التكوير">التكوير</option><option value="الانفطار">الانفطار</option><option value="المطففين">المطففين</option><option value="الانشقاق">الانشقاق</option><option value="البروج">البروج</option><option value="الطارق">الطارق</option><option value="الأعلى">الأعلى</option><option value="الغاشية">الغاشية</option><option value="الفجر">الفجر</option>'+
'<option value="البلد">البلد</option><option value="الشمس">الشمس</option><option value="الليل">الليل</option><option value="الضحى">الضحى</option><option value="الشرح">الشرح</option><option value="التين">التين</option><option value="العلق">العلق</option><option value="القدر">القدر</option><option value="البينة">البينة</option><option value="االزلزلة">االزلزلة</option><option value="العاديات">العاديات</option><option value="القارعة">القارعة</option>'+
'<option value="التكاثر">التكاثر</option><option value="العصر">العصر</option><option value="الهمزة">الهمزة</option><option value="الفيل>الفيل</option><option value="قريش">قريش</option><option value="الماعون">الماعون</option><option value="الكوثر">الكوثر</option><option value="الكافرون">الكافرون</option><option value="النصر">النصر</option><option value="المسد">المسد</option><option value="الاخلاص">الاخلاص</option><option value="العلق">الفلق</option><option value="الناس">الناس</option></select></td></div>'+
'<td> <input type="checkbox" id="check" value="1" /></td> <td id="day"></td><td id="nummeeting"></td></tr>'

table.innerHTML+=row;


inf();


}
}

function save(){

    var check=document.getElementById("check");
    var ch;
    if(check.checked){
    ch = check.value;}
       else {ch=0;}

       var notee=document.getElementById("notee").value;
       var mt=document.getElementById("MT").value;
       var ms=document.getElementById("MS").value;
       var mm=document.getElementById("MM").value;
       var ayah=document.getElementById("ayah").value;
       var surh=document.getElementById("surh").value;
       var degree=parseInt(document.getElementById('deg').innerHTML);
       var numMet=parseInt(document.getElementById('nummeeting').innerHTML);

data={
'data':{

jnotee: notee,
jmt: mt,
jmm: mm,
jms: ms,
jayah: ayah,
jsurh: surh,
jcheck: ch,
jdegree: degree,
jnumMet:numMet
}
}

$.ajax({
url: 'formFollowUpActivty.php',
type: 'POST',
data: data
});

}

function myFunction() {
  alert("Hello! I am an alert box!");
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
    <div class="single_slider  d-flex align-items-center   " style="  background-image: url(image_personal_page/1.png);   background-size:auto;   background-position:top ;">


      <div class="row text-right" style="margin-left:71%; margin-top:-26%;">
              <div class="col-12 text-right">
                <div class="section_title text-right mb-55">
                <h3 style="font-size:25px;"><span><strong>متابعة طالبات النـشاط </strong></span></h3>
                </div>
              </div>
            </div>

      </div>
    </div>

  <!-- slider_area_end -->

<div style=" margin-top:-23%;padding:5%" >

<div id="requestForm" style=" width:1100px; height: 300px; overflow-x: hidden; overflow-y: auto; margin-left:9% ;margin-top:-5%">
  <?php
  $StudentsA= mysqli_query($connect,"SELECT * FROM `followupactivity` WHERE `volunteer_name`='$nameVulnteer' AND 	`Surah_name`='0' AND `timeStart`='$startTime' GROUP BY `student_id` ");
if(mysqli_num_rows($StudentsA)==0){ ?>

  <label style="color:#07B5B2;width:1010px; border-bottom:none; padding-left:6%;">
    <input readonly type="text"  value="عــــــــــــــذرًا لا يـــــوجـــــد طـــــالبــــات اليــــــوم" style="text-align:center; font-size:15px; height:10%;   padding: 15px 25px;"/>
  </label>

<?php } else { while($StudentA= mysqli_fetch_assoc($StudentsA)) {
    $idA=$StudentA['student_id'];
  $StsA= mysqli_query($connect,"SELECT * FROM `student` WHERE `university_ID`='$idA' ");
  while($StA= mysqli_fetch_assoc($StsA)) {
    $nameA=$StA['name'];
    $typeA=$StA['type'];

  ?>
<div id="<?php echo $idA ?>">
          <form form id="s"  METHOD="Post">
            <div >
            <div class="row" >
            <div class="col-1">
             <label style="color:#07B5B2;width:1010px; border-bottom:none;">
               <input readonly type="text" id="namestu"  name="" value="<?php echo   $nameA ?>" style="text-align: right; height:10%;     padding: 15px 32px;"/>
             </label>
           </div>
           <div class="col-1">
             <label style="color:#07B5B2;width:400px; padding-top:4%; margin-left:350px; border-bottom:none;">
                <input readonly type="text" id="idstu"   style=" height:45px; border:none;" name="activty" value="<?php echo  $idA ?>">  </label>
            </div>



           <div class="col-2">
              <input class="subm" name="botRequest" type="submit"  value="عرض جدول المتابعة" style="margin-left:-187px; margin-top:-0.5px; padding:15px; width:150%; text-align:center;">
            </div>


           </div>
         </div>

          </form>
          </div>
<?php
}
}}
  ?>

  </div>



</br></br></br>



<!-- activty AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA  -->
<?php

$choosedactivtyStudent = $_POST['activty'] ?? '';
 $ActivtyStudent= mysqli_query($connect,"SELECT * FROM `followupactivity` WHERE `student_id`='$choosedactivtyStudent' AND `Surah_name`='0'");


while ($AS= mysqli_fetch_assoc($ActivtyStudent)) {
$_SESSION['choosedactivtyStudent']=$choosedactivtyStudent;

$Activty=$AS['activity_id'];
?>
<div class="section_title text-right mb-55" style="padding-bottom:1%;padding-right:38%;">
  <h3 dir="rtl" style="font-size:25px"><span>جـــــــــــدول المتــــــــــابـــعـــــة</span></h3>
</div>
  <div data-scroll-index='1' class="make_donation_area section_padding">


      <div class="container">

          <div class="row justify-content-center">
              <div class="col-lg-12">
                  <form action="#" class="donation_form">

                          <div style="  text-align: right;  margin-top:-15% ; padding-right:-33.9%" >
                              <div class="single_amount">
                                 <div class="fixed_donat">
                                     <div class="select_prise"  style="padding:1%; padding-right:4% "  >
                                       <div class="row">

                                         <?php
                                         $infoActvties= mysqli_query($connect,"SELECT * FROM `activities` WHERE `activityid`='$Activty'"); // activityid from session or from click
                                             $infoActvty= mysqli_fetch_assoc($infoActvties);
                                             $fucltymem=$infoActvty['facumemname'];
                                             $activityname=$infoActvty['activityname'];
                                             $attendancenum=$infoActvty['attendancenum'];
                                             $bon=$infoActvty['bonus'];
                                             $groupnum=$infoActvty['groupnum'];
                                             $courseid=$infoActvty['courseid'];

                                            ?>

                                       <?php
                                       $studentname= mysqli_query($connect,"SELECT * FROM `student` WHERE `university_ID`='$choosedactivtyStudent'");
                                       $row= mysqli_fetch_assoc($studentname);
                                       $name=$row['name'];


                                       ?>


                                               <div class="col-3">
                                              <h4 dir="rtl" >رقم المقــــــرر :<label dir="rtl" style="width:40%; padding-right:1.2% "  > <?php echo $courseid ?> </label></h4>
                                                  </div>
                                                  <div class="col-3">
                                                  <h4 dir="rtl" > رقم الشعبـــــة :   <label dir="rtl"  style="width:40%;padding-right:1.2% "  > <?php echo $groupnum ?>  </label></h4>
                                                   </div>
                                                     <div class="col-3">
                                                    <h4 dir="rtl"  >   الرقم الجامعي :   <label dir="rtl" style="width:40%; padding-right:1.2%" >  <?php echo $choosedactivtyStudent?>    </label></h4> <!-- from session-->
                                                        </div>
                                                  <div class="col-3">
                                                   <h4 dir="rtl">  اسم الطالبـــــة :   <label dir="rtl" style="width:40%;padding-right:1.2%" ><?php echo $name; ?> </label></h4>
                                                         </div>
                                                     </div>

                                                     <div class="row"style="padding-top:2%;">



                                                          <div class="col-3">
                                                         <h4 dir="rtl" > درجة التحسين : <label dir="rtl" style="width:40%; padding-right:1.2% "  > <?php echo $bon  ?></label></h4>
                                                             </div>
                                                             <div class="col-3">
                                                             <h4 dir="rtl" >  عـدد اللقــاءات :   <label dir="rtl"  style="width:40%;padding-right:1.2% "  ><?php echo   $attendancenum  ?> </label></h4>
                                                              </div>
                                                             <div class="col-3">
                                                             <h4 dir="rtl" >الســـــــــــورة :  <label dir="rtl" style="width:40%; padding-right:1.2%" > <?php echo   $activityname; ?>    </label></h4>
                                                                </div>
                                                             <div class="col-3">
                                                              <h4 dir="rtl">استـاذة المقــرر:   <label dir="rtl" style="width:40%;padding-right:1.2%" ><?php echo $fucltymem ?></label></h4>
                                                                    </div>
                                                                </div>




                                       </div>
                                       </div>
                                       </div>
                                       </div>
                                       </form>
              </div>
          </div>

      </div>
  </div>
<!----------------------------------------------------------------------------------------------------------->

<!--000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000-->
 <div  style="padding-left:5% ; padding-right:5% ; margin-top:-7% ; padding-bottom:15%">



      <table id="customers">
      <div id="row1">
    <tr>
    <th style=" background-color: #07b5b2" >حذف الصف</th>
  <th style=" background-color: #07b5b2">ملاحظات</th>
    <th style=" background-color: #07b5b2">الاستاذه المسمعه</th>
      <th style=" background-color: #07b5b2">الدرجه</th>
        <th style=" background-color: #07b5b2">خطأ التجويد</th>
          <th style=" background-color: #07b5b2">خطأ الحركة</th>
            <th style=" background-color: #07b5b2">خطأ الحفظ</th>
              <th style=" background-color: #07b5b2">الايه</th>
                <th style=" background-color: #07b5b2">السورة</th>
                <th style=" background-color: #07b5b2">التحضير من </br> المصحف المعلم</th>

                <th  style=" background-color: #07b5b2">اليوم </th>
                  <th style=" background-color: #07b5b2"> اللقاء </th>

    </tr>
</div>

<?php

  $infoStudents= mysqli_query($connect,"SELECT * FROM `followupactivity` WHERE `student_id`='$choosedactivtyStudent' AND `activity_id`='$Activty' order by `meeting_num` ");
  $numrow= mysqli_num_rows($infoStudents);


  $numberOfAttendnece=0;
  while ($infoStudent= mysqli_fetch_assoc($infoStudents)) {
    if(!($infoStudent['Surah_name'] == '0')){
    $numberOfAttendnece++;
   ?>
   <tr>
     <td>-</td>
     <td> <?php echo $infoStudent['notes']; ?> </td>
     <td> <?php echo $infoStudent['volunteer_name']; ?></td>
     <td> <?php echo $infoStudent['grade']; ?></td>
     <td ><?php echo $infoStudent['Tajweed_mistakes']; ?></td>
     <td ><?php echo $infoStudent['pronunciation_mistakes']; ?></td>
     <td ><?php echo $infoStudent['memories_mistakes']; ?></td>
     <td><?php echo $infoStudent['Ayah_number']; ?></td>
     <td><?php echo $infoStudent['Surah_name']; ?></td>
       <td>
<?php
if($infoStudent['use_Al_mushaf_Al_mualem'] == 1) {

?>
     <span>&#10003;</span> <?php  ?>

<?php  } else { ?>
 <span>ـــــــ</span>

<?php } ?>
       </td>
    
     <td><?php echo $infoStudent['day']; ?></td>
 <td>

<?php echo  $numberOfAttendnece ?>

 </td>
   </tr>
<?php } } ?>


  </table>




</br> </br>
</br> </br>
</br> </br>
<hr>

  <div class="row" style="padding-right:5%;">


  <div class="col-3"></div>

    <div class="col-3"  >

    <input type="submit" value="حفظ التعديل" onclick="save(); alert();" class="button button-contactForm btn_1 subadd subm" style="border-width:2px; color:#ffffff; width:220px; height:60px; padding-left:90px;"/>
</div>
<div class="col-3">
  <input type="submit" value="اضافة صف للأسفل" onclick="addrow()" class="button button-contactForm btn_1 subsave subm" style="border-width:2px; color:#ffffff; width:220px; height:60px;"/>
</div>

</div>



</div>

<?php }?>


</div>


    </div>
  </div>



  <!-- footer_start  -->
  <footer class="footer" style="  padding : 60px; background:#F3FCF8; margin-top:10%">

    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-md-6 col-lg-4 ">
          <div class="footer_widget">
            <div class="footer_logo">

              <img src="img/logo-footer.png" alt="" style="padding-top:9px;">

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
</body>

</html>
