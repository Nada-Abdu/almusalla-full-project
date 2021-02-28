<!doctype html>
<?php
$connect = mysqli_connect('localhost','root','05371433','almusalla');
  ?>
<html class="no-js" lang="zxx">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> مصلى أم القرى</title>
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

      <!-- MY CSS -->
    <link rel="stylesheet" href="css_nuha/Signin.css">
<style>
    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      border: 1px solid #888;
      width: 80%;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
      -webkit-animation-name: animatetop;
      -webkit-animation-duration: 0.4s;
      animation-name: animatetop;
      animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
      from {top:-300px; opacity:0}
      to {top:0; opacity:1}
    }

    @keyframes animatetop {
      from {top:-300px; opacity:0}
      to {top:0; opacity:1}
    }

    /* The Close Button */
    .close {
      color: white;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    .modal-header {
      padding: 2px 16px;
      background-color: #07B5B2;
      color: white;
      text-align: center;

    }

    .modal-body {
      padding: 2px 16px;



    }

    .modal-footer {
      padding: 2px 16px;
      background-color: white;
      color: white;
    }
    </style>





    <script>
    function checkemail(){
   var email = document.getElementById("email");
   var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


   if(email.value.match(mailformat))
   {
   if(email.value.includes("@st.uqu.edu.sa")||email.value.includes("@uqu.edu.sa")){
     return true;
   }else{

     Swal.fire({
  icon: 'error',
  text: 'الرجاء كتابة الايميل الجامعي بشكل صحيح',
  ConfirmButtonColor: '#28d1cf',
  ConfirmButtonText: 'اغلاق'

})
     return false;
   }
 }else{
   Swal.fire({
icon: 'error',
text: 'الرجاء كتابة الايميل الجامعي بشكل صحيح',
ConfirmButtonColor: '#28d1cf',
ConfirmButtonText: 'اغلاق'
})
   return false;
 }


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
                      <a dir="rtl" href="Sign up.php" style="font-size:15px; "><i class="fa fa-pencil-square-o" aria-hidden="true"></i> التسجيل</a>
                      <a dir="rtl" href="Sign in.php" style="font-size:15px; "><i class="fa fa-sign-in" aria-hidden="true"></i> تسجيل الدخول</a>
                      <a dir="rtl" href="HomePage.php" style="font-size:15px; "><i class="fa fa-home"></i> الصفحة الرئيسية</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </header>
        <!-- header-end -->





        <!-- The Modal -->
        <div id="myModal" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
            <div class="modal-header">
              <span class="close">&times;</span>

            </div>
            <div class="modal-body" >
              <p style="text-align:center;color:#07B5B2"> سوف يتم إرسال كلمة المرور الجديدة إلى البريد الالكتروني </p>
              <p style="text-align:center;color:#07B5B2"> :رجاءاً ادخلِ البريد الالكتروني</p>
              <form action="Sign in.php?reason=sentpass" method="post" style="text-align:center"  >
                <input type="text" id="emailsent" name="emailsent" placeholder="الإيميل الجامعي" required onfocusout="checkemail()">
               <input type="submit" value="إرسال" >
              </form>
            </div>
            <div class="modal-footer">

            </div>
          </div>

        </div>





<!-- start of square of log in -->
    <div class="wrapper fadeInDown" style="padding-bottom:10%">
      <div class="col-lg-6">
        <div class="section_title text-center mb-55">
          <h3><span>تسجيل الدخول</span></h3>
        </div>
      </div>
      <div id="formContent">

        <!-- Icon -->
        <div class="fadeIn first" >
          <img src="image_nuha/woman.png" id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form action="php_nuha/Signin.php" method="POST">
          <input type="text" id="email" class="fadeIn second" name="email" placeholder="الإيميل الجامعي" required onfocusout="checkemail()">
          <input type="password" id="password" class="fadeIn third" name="password" placeholder="كلمة المرور" required>
          <input type="submit" class="fadeIn fourth" value="دخول" >
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" id="myBtn" >هل نسيت كلمة المرور؟</a>
        </div>

      </div>
    </div>
<!-- end of square of log in -->


    <!-- footer_start  -->
    <footer class="footer" style="  padding : 60px; background:#F3FCF8">

      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-md-6 col-lg-4 ">
            <div class="footer_widget">
              <div class="footer_logo">

                <img src="image_nuha/logo-footer.png" alt="" style="padding-top: 9px;">

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

<script>


 // Get the modal
 var modal = document.getElementById("myModal");

 // Get the button that opens the modal
 var btn = document.getElementById("myBtn");

 // Get the <span> element that closes the modal
 var span = document.getElementsByClassName("close")[0];

 // When the user clicks the button, open the modal
 btn.onclick = function() {
   modal.style.display = "block";
 }

 // When the user clicks on <span> (x), close the modal
 span.onclick = function() {
   modal.style.display = "none";
 }

 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function(event) {
   if (event.target == modal) {
     modal.style.display = "none";
   }
 }









</script>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script>
   function alert() {
        Swal.fire({
          icon: 'success',
          title: 'لقد تم إرسال كلمة مرور جديدة الى الايميل الخاص بك',
          showConfirmButton: false,
          timer: 2000
        })
      }
      function alert_error() {
        Swal.fire({
     icon: 'warning',
     text:  'عذراً حاول تسجيل الدخول مره أخر',
     confirmButtonColor: '#28d1cf',
     confirmButtonText: 'اغلاق'
     })
         }

   </script>
</body>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$MSS=$_GET['reason'];
if($MSS == "badchoice"){
  echo "<script type=text/javascript >
   alert_error();
  </script>";

}else if($MSS == "sentpass"){

$sentemail = $_POST["emailsent"];
$newpass = rand(10000000,99999999);
  $checkFm ='@uqu.edu.sa';
  $checkSm ='@st.uqu.edu.sa';

if(preg_match("/{$checkFm}/i",$sentemail)){
$connect->query("UPDATE `facultymember` SET Password = $newpass WHERE UniversityEmail='$sentemail'");

}else if(preg_match("/{$checkSm}/i",$sentemail)){
$connect->query("UPDATE `student` SET password = $newpass WHERE university_email='$sentemail'");

}

$emailTemplate = '<html>

<body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #FFFFFF;">
<table cellpadding="0" cellspacing="0" class="nl-container" role="presentation"
    style="table-layout: fixed; vertical-align: top; min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF; width: 100%;"
    valign="top" width="100%">
    <tbody>
        <tr style="vertical-align: top;" valign="top">
            <td style="word-break: break-word; vertical-align: top;" valign="top">
                <div style="background-color:transparent;">
                    <div class="block-grid"
                        style="Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                        <div
                            style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
                            <div class="col num12"
                                style="min-width: 320px; max-width: 500px; display: table-cell; vertical-align: top; width: 500px;">
                                <div style="width:100% !important;">
                                    <div
                                        style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="background-color:transparent;">
                    <div class="block-grid"
                        style="Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                        <div
                            style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
                            <div class="col num12"
                                style="min-width: 320px; max-width: 500px; display: table-cell; vertical-align: top; width: 500px;">
                                <div style="width:100% !important;">
                                    <div
                                        style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                                        <div class="img-container center autowidth"
                                            style="padding-right: 0px;padding-left: 0px;"></div>
                                        <table cellpadding="0" cellspacing="0" class="divider" role="presentation"
                                            style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                            valign="top" width="100%">
                                            <tbody>
                                                <tr style="vertical-align: top;" valign="top">
                                                    <td class="divider_inner"
                                                        style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px; align-content: center;"
                                                        valign="top">
                                                        <img src="https://imagehost.imageupload.net/2020/03/26/logo314e9e115692d569.png"
                                                            />
                                                    </td>
                                                </tr>
                                                <tr style="vertical-align: top;" valign="top">
                                                    <td class="divider_inner"
                                                        style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;"
                                                        valign="top">
                                                        <table cellpadding="0" cellspacing="0"
                                                            class="divider_content" role="presentation"
                                                            style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #BBBBBB; width: 100%;"
                                                            valign="top" width="100%">
                                                            <tbody>
                                                                <tr style="vertical-align: top;" valign="top">
                                                                    <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                                                        valign="top">
                                                                        <span></span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="background-color:transparent;">
                    <div class="block-grid"
                        style="Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                        <div
                            style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
                            <div class="col num12"
                                style="min-width: 320px; max-width: 500px; display: table-cell; vertical-align: top; width: 500px;">
                                <div style="width:100% !important;">
                                    <div
                                        style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                                        <div
                                            style="color:#555555;font-family: Helvetica, Arial, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                                            <div
                                                style="font-size: 14px; line-height: 1.2; font-family:  Helvetica, Arial, sans-serif; color: #555555; mso-line-height-alt: 17px;">
                                                <p
                                                    style="line-height: 1.2; word-break: break-word; text-align: center; font-family: Helvetica, Arial, sans-serif; mso-line-height-alt: NaNpx; margin: 0;">
                                                    <strong><span style="font-size: 18px; color: #07b5b2;">السلام
                                                            عليكم ورحمة الله وبركاته&nbsp;</span></strong>
                                                </p>
                                                <p
                                                    style="line-height: 1.2; word-break: break-word; text-align: center; font-family:  Helvetica, Arial, sans-serif; mso-line-height-alt: NaNpx; margin: 0;">
                                                    <strong><span style="font-size: 18px; color: #07b5b2;">تم تعيين كلمة مرور جديدة لحسابك</span></strong>
                                                </p>
                                                <p
                                                    style="line-height: 1.2; word-break: break-word; text-align: center; font-family:  Helvetica, Arial, sans-serif; mso-line-height-alt: NaNpx; margin: 0;">
                                                    <strong><span
                                                            style="font-size: 18px; color: #07b5b2;">&nbsp;:بامكانك استخدام كلمة المرور التالية لتسجيل الدخول</span></strong>
                                                </p>
                                                <p
                                                    style="line-height: 1.2; word-break: break-word; text-align: center; font-family:  Helvetica, Arial, sans-serif; mso-line-height-alt: NaNpx; margin: 0;">
                                                    <strong><span
                                                            style="font-size: 23px; color: black;">&nbsp;'.$newpass.'</span></strong>
                                                </p>
                                                <p
                                                    style="line-height: 1.2; word-break: break-word; text-align: center; font-family:  Helvetica, Arial, sans-serif; mso-line-height-alt: NaNpx; margin: 0;">
                                                    <strong><span
                                                            style="font-size: 15px; color: #07b5b2;">&nbsp;يمكنك تغيير كلمة المرور لاحقا من اعدادات الصفحة الشخصية</span></strong>
                                                </p>

                                            </div>
                                        </div>
                                        <table cellpadding="0" cellspacing="0" class="divider" role="presentation"
                                            style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                            valign="top" width="100%">
                                            <tbody>
                                                <tr style="vertical-align: top;" valign="top">
                                                    <td class="divider_inner"
                                                        style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;"
                                                        valign="top">
                                                        <table cellpadding="0" cellspacing="0"
                                                            class="divider_content" role="presentation"
                                                            style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #BBBBBB; width: 100%;"
                                                            valign="top" width="100%">
                                                            <tbody>
                                                                <tr style="vertical-align: top;" valign="top">
                                                                    <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                                                        valign="top">
                                                                        <span></span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="background-color:transparent;">
                    <div class="block-grid"
                        style="Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                        <div
                            style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
                            <div class="col num12"
                                style="min-width: 320px; max-width: 500px; display: table-cell; vertical-align: top; width: 500px;">
                                <div style="width:100% !important;">
                                    <div
                                        style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
</body>

</html>';

// setup send emails
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->CharSet = 'UTF-8';
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "ALMousallauqu@gmail.com";
$mail->Password = "14191237soso";

// receive Certificate of student
if (isset($_POST['data'])) {

    $mail->SetFrom("ALMousallauqu@gmail.com");
    $mail->Subject = 'كلمة المرور | المصلـــى';
    $mail->msgHTML($emailTemplate);
    $mail->AddAddress($sentemail);

  }

  echo "<script type=text/javascript >
   alert();
  </script>";

}

?>

</html>
