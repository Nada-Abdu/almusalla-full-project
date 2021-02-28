<?php $connect = mysqli_connect('localhost','root','05371433','almusalla'); 
 session_start();
 ?>

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
  <link rel="stylesheet" href="‏‏css_HomePage\list.css">

  <link rel="stylesheet" type="text/css" href="css_nuha/formQuranVolunteer.css">
  <!-- <link rel="stylesheet" href="css/responsive.css"> -->



</head>

<body>

  <header>
    <div class="header-area ">
      <div class="header-top_area"  >
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-6 col-md-12 col-lg-8">
              <div class="short_contact_list">
                <ul>
                  <li> <img src="image_HomePage/logo-1.png" alt="" style="width:150px;"></li>
                </ul>
              </div>
            </div>

            <div class="col-xl-6 col-md-6 col-lg-4" >
            <div class="social_media_links d-none d-lg-block">
                      <a dir="rtl" href="HomePage.php?reason=signout" style="font-size:15px; "><i class="fa fa-sign-in" aria-hidden="true"></i> تسجيل الخروج</a>
                      <a dir="rtl" href="Personal Page administrator.php" style="font-size:15px; "><i class="fa fa-user-circle-o" aria-hidden="true"></i> الصفحة الشخصية</a>
                      <a dir="rtl" href="HomePage.php" style="font-size:15px; "><i class="fa fa-home"></i> الصفحة الرئيسية</a>
                    </div>
            </div>
          </div>
        </div>
      </div>
      <div id="sticky-header" class="main-header-area" style="margin-top: 15px; margin-left:1%" >
        <div class="container-fluid">
          <div class="row align-items-center">


            <!-- administrator -->
            <div class="col-xl-10 col-lg-10" style="padding-right:16%">
                  <div class="main-menu" >
                    <nav>
                      <ul id="navigation" >
                        <li><a href="Volunteers.php" style="font-size:15px;"> المتطوعـــات</li></a>
                       <li><a style="font-size:15px;">|</a></li>
                       <li><a href="Volunteer requests.php" style="font-size:15px;"> طلبــات التطــوع</li></a>
                       <li><a style="font-size:15px;">|</a></li>
                       <li><a href="Create a certificate.php" style="font-size:15px;"> إصـدار شهـــادة</li></a>
                     </ul>
                    </nav>
                  </div>
                </div>
            </div>
          </div>
        </div>
  </header>
  <!-- header-end -->

  <!-- slider_area_start -->
  <div class="slider_area" style= "padding-left:1%">
    <div class="single_slider  d-flex align-items-center" style="  background-image: url(image_HomePage/pack1.png);   background-size:auto;   background-position:top ;">
      <div class="row text-right" style="margin-left:70%; margin-top:-23%;">
              <div class="col-12 text-right">
                <div class="section_title text-right mb-55">
                  <h3 dir="rtl" style="font-size:30px"><span>طلبات التطوع</span></h3>
                </div>
              </div>
            </div>
      </div>
    </div>
  
  <!-- slider_area_end -->



  <div style="margin-top:-30%">

  <div style="margin-left:2%; margin-top:-29%;padding:5%" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb-55">
                    <h3 style="font-size:25px;"><span><strong>طلبات التطوع في حلقات القرآن</strong></span></h3>
                </div>
            </div>
        </div>
      </div>
    </div>

<div  id="requestForm" style=" width: 900px; height: 160px; overflow-x: hidden; overflow-y: auto; margin-left:18% ;margin-top:-5%"">
<?php

$Q_volunteers = $connect->query("SELECT q.FacultyUniversityID,FacultyMemberName,requestState
  FROM quranvolunteer q, facultymember f
  WHERE f.FacultyUniversityID =q.FacultyUniversityID AND requestState = 'انتظار' ");

  if(!empty($Q_volunteers) && $Q_volunteers-> num_rows > 0)  {
    while ($row =$Q_volunteers->fetch_assoc()){


?>
<div id= <?php echo $row['FacultyMemberName']; ?>>
          <form form id="ss"ACTION="<?php echo $_SERVER['PHP_SELF']; ?>" METHOD="Post">
            <div  >
            <div class="row">
            <div class="col-1">
             <label style="color:#07B5B2;width:1010px "><input readonly type="text" id="nameOfSurah"  name="inputRequest" value="<?php echo $row['FacultyMemberName']; ?>" style="text-align: right; height:10%;"> </label>
           </div>
           <div class="col-2">
             <input name="botRequest" id="buttonsub"type="submit"  value="عرض الطلب" style="margin-left:-68px; ">
           </div>
           </div>
         </div>
          </form>
          </div>
<?php
}
} else{  
  ?>
  <label style="margin-top:-10%;color:#07B5B2;width:1010px "><input readonly type="text"  name="inputRequest" value=" &quot;&nbsp;  لا يوجد طلبات تطوع لحلقات القرآن حتى الآن&nbsp; &quot;" style=" padding-top:10% ;text-align: center; height:20%;"> </label>
 <?php } ?>
  </div>

<?php
$choosedVolunteer = $_POST['inputRequest'] ?? '';

$Q_volunteers = $connect->query("SELECT q.FacultyUniversityID,FacultyMemberName,UniversityEmail,PhoneNumber,FacultyDepartment,requestState,Surah_name,Quran_volunteer_id
  FROM quranvolunteer q, facultymember f
  WHERE f.FacultyUniversityID =q.FacultyUniversityID AND requestState = 'انتظار' And FacultyMemberName= '$choosedVolunteer'");

  if(!empty($Q_volunteers) && $Q_volunteers-> num_rows  > 0)  {
 $row = $Q_volunteers->fetch_array(MYSQLI_ASSOC);
 $faculty_id1= $row["FacultyUniversityID"];
 $volunteer_id1= $row["Quran_volunteer_id"];

$_SESSION["faculty_id"]=(int)$faculty_id1 ;
$_SESSION["volunteer_id"]=(int)$volunteer_id1 ;
        ?>
        <div class="wrapper fadeInDown" style="padding-bottom:10% ">
          <div id="formContent">

            <!-- head-->


            <div id="formFooter" name="" style="text-align:right;padding-right:5%;font-size:20px">
  <form id="formRequest" ACTION="<?php echo $_SERVER['PHP_SELF']; ?>" METHOD="Post">
              <label id="name"><?php echo $row['FacultyMemberName'] ; ?></label><label style="color:#07B5B2;padding-right:20%" >  :الاسم </label>
              <label name="f_ID" value="<?php echo $row['FacultyUniversityID'] ; ?>" id="ID"><?php echo $row['FacultyUniversityID'] ; ?></label><label style="color:#07B5B2" > :رقم المنسوب </label>
              <BR />
                <label id="email"> <?php echo $row['UniversityEmail'] ; ?></label><label style="color:#07B5B2;padding-right:23%" > :الايميل الجامعي </label>
              <label id="phoneNumber"><?php echo $row['PhoneNumber'] ; ?> </label><label style="color:#07B5B2" >  :رقم الجوال </label>
              <br />
              <label id="fd"><?php echo $row['FacultyDepartment'] ; ?></label><label style="color:#07B5B2" >  :القسم - الكلية </label>
            </div><br/>
                <label style="color:#07B5B2;margin-right:-60%">
                  <input readonly type="text" id="nameOfSurah" class="fadeIn second" name="" value="<?php echo $row['Surah_name'] ; ?> " style="text-align: right; font-size:33px width:90%;height:10%;margin-left:-140%;">  :اسم السورة </label>
                <div style="margin-left:2%;padding:5%" >

                <table id="customers" >
                  <tr>
                    <th colspan="2">الـــوقــت</th>
                    <th rowspan="2">اليوم </th>
                  </tr>
                  <tr>
                    <th>إلى</th>
                    <th>من</th>
                  </tr>


<?php
$v_id=$_SESSION["volunteer_id"] ;
 $result = $connect->query("SELECT Day,timeStart,timeEnd,Quran_volunteer_id
  FROM timetable t
  WHERE t.Quran_volunteer_id = $v_id" );

  if(!empty($result) && $result -> num_rows  > 0)  {
    while ($row_t =$result->fetch_assoc()){

  ?>
                  <tr >
                    <td><output style=" padding-left:5px;padding-right:5px; border-bottom: 2px solid #07B5B2;  background-color:#f6f6f6 ;"> <?php echo $row_t['timeEnd'] ; ?> </output> </td>
                    <td><output style=" padding-left:5px;padding-right:5px; border-bottom: 2px solid #07B5B2;  background-color:#f6f6f6 ;"> <?php echo $row_t['timeStart'] ; ?> </output> </td>
                    <td><label style="font-size:27;"><strong>  <?php echo $row_t['Day'] ; ?> </strong> </label></td>
                  </tr>
  <?php } } ?>
                </table></br>
                <label style="color:#07B5B2;width:320px ;margin-left:66%"><input type="text" id="nameOfSurah" class="fadeIn second" name="reason" value="" style="text-align: right; width:90%;height:10%;margin-left:-140%;">: *عند رفض الطلب أذكر السبب </label>
              </br>
              <input type="submit" class="fadeIn fourth"name="reject" id="reject_id" value="رفض" style="margin-top:5%" >
              <input type="submit"  class="fadeIn fourth" name="accept"id="accept_id" value="قبول" style="margin-top:5%" >
                </div> </div>
            </form>
  </div>

<?php
}
 /////////////////////////////////////////////
?>

<?php
$i_wanna_reload_the_full_page_on_top = "";
$f_id = $_SESSION["faculty_id"];
$reject_reson= $_POST['reason'] ?? '';
$reject_state =  "  مرفوض  ".$reject_reson;


if (isset($_POST['reject'])) {

  $Q_volunteers = $connect->query("UPDATE quranvolunteer
    SET requestState = '$reject_state'
    WHERE requestState = 'انتظار' And  FacultyUniversityID= $f_id ");


$i_wanna_reload_the_full_page_on_top = "yes";

} 

else if (isset($_POST['accept'])) {
  $Q_volunteers = $connect->query("UPDATE quranvolunteer
  SET requestState = 'مقبول'
  WHERE requestState = 'انتظار' And  FacultyUniversityID= $f_id ");

$i_wanna_reload_the_full_page_on_top = "yes";   
}

//
 ?>
 <?php
if($i_wanna_reload_the_full_page_on_top == "yes")
{
$reloadneeded = "1";
}
else
{
$reloadneeded = "0";
}

if($reloadneeded > 0)
{
?>
<script type="text/javascript">
top.window.location='Volunteer requests.php';
</script>
<?php
}else{}

?>
</div>
</div>


<!------------------------------------------------------الدروووس الاسلامية----------------------------------------------------->


</BR>
<div style="margin-top:29%">
<div style="margin-left:2%; margin-top:-29%;padding:5%" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb-55">
                    <h3 style="font-size:25px;"><span><strong>طلبات التطوع في دروس المصلى</strong></span></h3>
                </div>
            </div>
        </div>
      </div>
    </div>

<div  id="requestForm" style=" width: 900px; height: 160px; overflow-x: hidden; overflow-y: auto; margin-left:18% ;margin-top:-5%"">
<?php

$IS_volunteers = $connect->query("SELECT i.FacultyUniversityID,FacultyMemberName,requestState
  FROM islamicvolunteer i, facultymember f
  WHERE f.FacultyUniversityID =i.FacultyUniversityID AND requestState = 'انتظار' ");

  if(!empty($IS_volunteers) && $IS_volunteers-> num_rows > 0)  {
    while ($row =$IS_volunteers->fetch_assoc()){
?>

<div id= <?php echo $row['FacultyMemberName']; ?>>
          <form form id="ss"ACTION="<?php echo $_SERVER['PHP_SELF']; ?>" METHOD="Post">
            <div  >
            <div class="row">
            <div class="col-1">
             <label style="color:#07B5B2;width:1010px "><input readonly type="text" id="nameOfSurah"  name="inputRequest2" value="<?php echo $row['FacultyMemberName']; ?>" style="text-align: right; height:10%;"> </label>
           </div>
           <div class="col-2">
             <input name="botRequest" id="buttonsub"type="submit"  value="عرض الطلب" style="margin-left:-68px; ">
           </div>
           </div>
         </div>
          </form>
          </div>
<?php
}
} else{  
  ?>
  <label style="margin-top:-10%;color:#07B5B2;width:1010px "><input readonly type="text" value=" &quot;&nbsp;  لا يوجد طلبات تطوع لتقديم دروس المصلى حتى الآن&nbsp; &quot;" style=" padding-top:10% ;text-align: center; height:20%;"> </label>
 <?php } ?>

  </div>
  </br></br></br></br>
<?php
$is_choosedVolunteer = $_POST['inputRequest2'] ?? '';

$IS_volunteers = $connect->query("SELECT i.FacultyUniversityID,FacultyMemberName,UniversityEmail,PhoneNumber,FacultyDepartment,requestState,IslamicVolunteerID,havingCertificate,meetingsNumber,time,Day,lessonDate,bookName,lessonName
  FROM islamicvolunteer i, facultymember f
  WHERE f.FacultyUniversityID = i.FacultyUniversityID AND requestState = 'انتظار' And FacultyMemberName= '$is_choosedVolunteer'");

  if(!empty($IS_volunteers) && $IS_volunteers-> num_rows  > 0)  {
 $row2 = $IS_volunteers->fetch_array(MYSQLI_ASSOC);
 $faculty_id2= $row2["FacultyUniversityID"];
$_SESSION["faculty_id0"]=(int)$faculty_id2 ;
$hav_Certificate1= $row2["havingCertificate"];
$_SESSION["hav_Certificate"]=(int)$hav_Certificate1 ;

        ?>
        <div class="wrapper fadeInDown" style="padding-bottom:10% ">
          <div id="formContent">

            <!-- head-->


            <div id="formFooter" name="" style="text-align:right;padding-right:5%;font-size:20px">
  <form id="formislamic" ACTION="<?php echo $_SERVER['PHP_SELF']; ?>" METHOD="Post">
              <label id="name"><?php echo $row2['FacultyMemberName'] ; ?></label><label style="color:#07B5B2;padding-right:20%" >  :الاسم </label>
              <label name="f_ID" value="<?php echo $row2['FacultyUniversityID'] ; ?>" id="ID"><?php echo $row2['FacultyUniversityID'] ; ?></label><label style="color:#07B5B2" > :رقم المنسوب </label>
              <BR />
                <label id="email"> <?php echo $row2['UniversityEmail'] ; ?></label><label style="color:#07B5B2;padding-right:23%" > :الايميل الجامعي </label>
              <label id="phoneNumber"><?php echo $row2['PhoneNumber'] ; ?> </label><label style="color:#07B5B2" >  :رقم الجوال </label>
              <br />
              <label id="fd"><?php echo $row2['FacultyDepartment'] ; ?></label><label style="color:#07B5B2" >  :القسم - الكلية </label>
            </div><br/>
                
            <!-------------المعلومات في المربعات-------------->
                <label style="color:#07B5B2;margin-right:-60%"><input readonly type="text" id="nameOfDurah" class="fadeIn second" value="<?php echo $row2['lessonName'] ; ?>" style="text-align: right; width:70%;margin-left:-50%;" required>:عنوان الدرس </label>
                <label style="color:#07B5B2;margin-left:-50%"><input readonly  type="text" id="date" class="fadeIn second" value="<?php echo $row2['lessonDate'] ; ?>" style="text-align: right; width:77%;margin-left:30%;">:التاريخ </label>
                <br />

                <label style="color:#07B5B2;margin-right:-60%"><input readonly type="text" id="nameOfBook" class="fadeIn second"   value="<?php echo $row2['bookName'] ; ?>" style="text-align: right; width:70%;margin-left:-68%;" required>:عنوان الكتاب</label>
                <label style="color:#07B5B2;margin-right:-60%"><input readonly type="text" id="nameOfMeting" class="fadeIn second" value="<?php echo $row2['meetingsNumber'] ; ?>"  style="text-align: right; width:72.2%;margin-left:-218%;" required>:عدد القاءات</label>

                <br />
             <div style="margin-right:-75%">
                <?php $hav_Certific = $_SESSION["hav_Certificate"];
                 if($hav_Certific==1){ ?>
                 <label style="padding-left:1%">نعم </label>
                <?php }else if($hav_Certific==0){ ?>
                 <label style="padding-left:1%">لا </label>
                <?php } ?>
                 <label style="color:#07B5B2;padding-left:1%">:هل توجد شهادة</label>
                
              </div>
 <!---------------------------------------------جدول الوقت ----------------------->

                  <div style="margin-left:2%;padding:5%" >

                <table id="customers" >
                  <tr>
                    <th>الـــوقــت</th>
                    <th>اليوم </th>
                  </tr>

                  <tr >
                    <td><output style=" padding-left:5px;padding-right:5px; border-bottom: 2px solid #07B5B2;  background-color:#f6f6f6 ;"> <?php echo $row2['time'] ; ?> </output> </td>
                    <td><label style="font-size:27;"><strong>  <?php echo $row2['Day'] ; ?> </strong> </label></td>
                  </tr>

                </table></br>


                <label style="color:#07B5B2;width:320px ;margin-left:66%"><input type="text" id="nameOfSurah" class="fadeIn second" name="is_reason" value="" style="text-align: right; width:90%;height:10%;margin-left:-140%;">: *عند رفض الطلب أذكر السبب </label>
              </br>
              <input type="submit" class="fadeIn fourth"name="is_reject" id="reject_id" value="رفض" style="margin-top:5%" >
              <input type="submit" class="fadeIn fourth" name="is_accept"id="accept_id" value="قبول" style="margin-top:5%" >
                </div> </div>
            </form>
            </div>
  </div>

<?php
}
 /////////////////////////////////////////////
?>

<?php
$is_wanna_reload_the_full_page_on_top = "";
$is_id = $_SESSION["faculty_id0"];
$is_reject_reson= $_POST['is_reason'] ?? '';
$is_reject_state =  "  مرفوض  ".$is_reject_reson;


if (isset($_POST['is_reject'])) {

  $IS_volunteers = $connect->query("UPDATE islamicvolunteer
    SET requestState = '$is_reject_state'
    WHERE requestState = 'انتظار' And  FacultyUniversityID= $is_id ");

$is_wanna_reload_the_full_page_on_top = "yes";

} 

else if (isset($_POST['is_accept'])) {
  $IS_volunteers = $connect->query("UPDATE islamicvolunteer
  SET requestState = 'مقبول'
  WHERE requestState = 'انتظار' And  FacultyUniversityID= $is_id ");

$is_wanna_reload_the_full_page_on_top = "yes";   
}

//
 ?>


<?php
if($is_wanna_reload_the_full_page_on_top == "yes")
{
$is_reloadneeded = "1";
}
else
{
$is_reloadneeded = "0";
}

if($is_reloadneeded > 0)
{
?>
<script type="text/javascript">
top.window.location='Volunteer requests.php';
</script>
<?php
}else{}

?>
</div>


  <!-- footer_start  -->
  <footer class="footer" style="  padding : 60px; background:#F3FCF8">

    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-md-6 col-lg-4 ">
          <div class="footer_widget">
            <div class="footer_logo">

              <img src="image_HomePage/logo.png" alt="" style="padding-top: 9px;">

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
