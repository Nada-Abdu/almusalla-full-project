<!doctype html>
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
    <link rel="stylesheet" type="text/css" href="css_nuha/formQuranVolunteer.css">  <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <link rel="stylesheet" type="text/css" href="css_nuha/list.css">

      <!-- MY CSS -->
    <link rel="stylesheet" type="text/css" href="css_nuha/Signup.css">

<script>

 function change_tab(id)
 {
   document.getElementById("page_content").innerHTML=document.getElementById(id+"_SIGNUP").innerHTML;
   document.getElementById("FacultyMember").className="notselected";
   document.getElementById("Student").className="notselected";
   document.getElementById(id).className="selected";
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


<div id="main_content">

 <li class="selected" id="FacultyMember" onclick="change_tab(this.id);">تسجيل عضوةهيئة التدريس</li>
 <li class="notselected" id="Student" onclick="change_tab(this.id);">تسجيل الطالبة</li>

 <div class='hidden_desc' id="FacultyMember_SIGNUP">
   <!-- start of square of log in -->
       <div class="wrapper fadeInDown" style="padding-bottom:10%">
         <div class="col-lg-6">
           <div class="section_title text-center mb-55">
             <h3><span>تسجيل عضوة هيئة التدريس</span></h3>
           </div>
         </div>
         <div id="formContent">

           <!-- Icon -->
           <div class="fadeIn first" >
             <img src="image_nuha/woman.png" id="icon" alt="User Icon" />
           </div>

           <!-- signup Form -->
           <form action="php_nuha/checkSignupFaculty.php" method="post">
             <input type="text" id="facultyname" name="facultyname" placeholder="الأسم الثلاثي" required >
             <input type="text" id="facultyID"  name="facultyID" maxlength="10" placeholder="رقم المنسوب" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
             <input type="text" id="facultyemail"  name="facultyemail" placeholder="الايميل الجامعي"
               required >

             <input type="text" id="facultyPhoneNum" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
              name="facultyPhoneNum" placeholder="رقم الجوال" required maxlength="10">
             <input type="text" id="facultyDep" name="facultyDep" placeholder="الكلية - القسم" required>
             <input type="password" id="facultypass" name="facultypass" placeholder="كلمة المرور" required >
             <button required type = 'submit' name = 'data' >التسجيل</button>
           </form>



         </div>
       </div>
   <!-- end of square of log in -->
 </div>

 <div class='hidden_desc' id="Student_SIGNUP">
   <!-- start of square of log in -->
       <div class="wrapper fadeInDown" style="padding-bottom:10%">
         <div class="col-lg-6">
           <div class="section_title text-center mb-55">
             <h3><span>تسجيل الطالبة</span></h3>
           </div>
         </div>
         <div id="formContent">

           <!-- Icon -->
           <div class="fadeIn first" >
             <img src="image_nuha/woman.png" id="icon" alt="User Icon" />
           </div>

           <!-- Login Form -->
           <form action="php_nuha/checkSignupStudent.php" method="post"  >
             <input type="text" id="studentname" name="studentname" placeholder="الأسم الثلاثي" required >
             <input type="text" id="studentID"  name="studentID" maxlength="9" placeholder="الرقم الجامعي" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
             <input type="text" id="studentemail" name="studentemail" placeholder="الايميل الجامعي"
               required >
             <input type="password" id="studentpass" name="studentpass" placeholder="كلمة المرور" required>
             <button required type = 'submit' name = 'data' >التسجيل</button>
           </form>

         </div>
       </div>
   <!-- end of square of log in -->
 </div>

 <div id="page_content">
   <!-- start of square of log in -->
       <div class="wrapper fadeInDown" style="padding-bottom:10%">
         <div class="col-lg-6">
           <div class="section_title text-center mb-55">
             <h3><span>تسجيل عضوة هيئة التدريس</span></h3>
           </div>
         </div>
         <div id="formContent">

           <!-- Icon -->
           <div class="fadeIn first" >
             <img src="image_nuha/woman.png" id="icon" alt="User Icon" />
           </div>

           <!-- Login Form -->
           <form action="php_nuha/checkSignupFaculty.php" method="post">
             <input type="text" id="facultyname" name="facultyname" placeholder="الأسم الثلاثي" required >
             <input type="text" id="facultyID"  name="facultyID" maxlength="9" placeholder="رقم المنسوب" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
             <input type="text" id="facultyemail"  name="facultyemail" placeholder="الايميل الجامعي"
               required>

             <input type="text" id="facultyPhoneNum" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
              name="facultyPhoneNum" placeholder="رقم الجوال" required maxlength="10">
             <input type="text" id="facultyDep" name="facultyDep"   placeholder="الكلية - القسم" required>
             <input type="password" id="facultypass" name="facultypass" placeholder="كلمة المرور" required>
             <button type = 'submit' name = 'data' required>التسجيل</button>
           </form>


         </div>
       </div>
   <!-- end of square of log in -->
 </div>

</div>





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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script>

      function alert_error_existAcc() {
        Swal.fire({
     icon: 'warning',
     text:'يبدو انكِ تملكين حساباً لدينا بالفعل! \n الرجاء محاولة تسجيل الدخول  ',
     confirmButtonColor: '#28d1cf',
     confirmButtonText: 'اغلاق',
     })
         }

         function alert_error_emailS() {
           Swal.fire({
        icon: 'warning',
        text: 'الرجاء كتابة الايميل الجامعي بهذا النمط:\n example@st.uqu.edu.sa',
        confirmButtonColor: '#28d1cf',
        confirmButtonText: 'اغلاق',
        })
            }

            function alert_error_emailF() {
              Swal.fire({
           icon: 'warning',
           text:'الرجاء كتابة الايميل الجامعي بهذا النمط:\n example@uqu.edu.sa' ,
           confirmButtonColor: '#28d1cf',
           confirmButtonText: 'اغلاق',
           })
               }

               function alert_error_Acc() {
                 Swal.fire({
              icon: 'warning',
              text:'يبدو ان هناك مشكلة في الحساب حاولي إنشاء حسابك من جديد',
              confirmButtonColor: '#28d1cf',
              confirmButtonText: 'اغلاق',
              })
                  }

                  function alert_error_password() {
                    Swal.fire({
                 icon: 'warning',
                 text: 'يجب ان تكون كلمة المرور اكثر من 8 احرف وارقام' ,
                 confirmButtonColor: '#28d1cf',
                 confirmButtonText: 'اغلاق',
                 })
                     }

                     function alert_error_id() {
                       Swal.fire({
                    icon: 'warning',
                    text:'يجب ان يكون الرقم الجامعي من 9 ارقام' ,
                    confirmButtonColor: '#28d1cf',
                    confirmButtonText: 'اغلاق',
                    })
                        }



   </script>
</body>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$MSS=$_GET['reason1'];
if($MSS == "badchoice"){
  echo "<script type=text/javascript >
   alert_error_existAcc();
  </script>";
}else if ($MSS == "Swrongemail"){
  echo "<script type=text/javascript >
   alert_error_emailS();
  </script>";
}else if($MSS == "Fwrongemail"){
  echo "<script type=text/javascript >
   alert_error_emailF();
  </script>";
}else if($MSS=="inVALDCODE"){
  echo "<script type=text/javascript >
   alert_error_Acc();
  </script>";
}else if($MSS=="wrongpass"){
  echo "<script type=text/javascript >
   alert_error_password();
  </script>";
}else if($MSS=="wrongid"){
  echo "<script type=text/javascript >
   alert_error_id();
  </script>";
}

?>
</html>
