<?php session_start();
$connect = mysqli_connect('localhost','root','05371433','almusalla');

?>

<!doctype html>
<html class="no-js" lang="ar">


<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>مصلى ام القرى</title>
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
    #customers {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td,
    #customers th {
      border: 2px solid #ddd;
      padding: 8px;
      text-align: center;

    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: center;
      background-color: #28d1cf;
      color: white;
    }
  </style>
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
        <!-- slider_area_start -->
        <div class="slider_area" style= "padding-left:1%">
          <div class="single_slider  d-flex align-items-center" style="background-image: url(image_nuha/1.png);   background-size:auto;   background-position:top ;">


            <div class="row text-right" style="margin-left:67%; margin-top:-23%;">
              <div class="col-12 text-right">
                <div class="section_title text-right mb-55">
                  <h3 dir="rtl" style="font-size:30px"><span>  طلب تطوع - حلقات التقوية  </span></h3>
                </div>
              </div>
            </div>

            </div>
          </div>
        </div>
        <!-- slider_area_end -->

        <div class="wrapper" style="margin-top:-25%">

          <div id="formContent">

            <!-- head-->
            <div id="formFooter" style="text-align:right;padding-right:5%;font-size:20px">

              <label id="name"><?php echo $_SESSION['facultyname'];?></label><label style="color:#07B5B2;padding-right:20%" >  :الاسم </label>
              <label id="ID"><?php echo $_SESSION['facultyid'];?></label><label style="color:#07B5B2" > :رقم المنسوب </label>

              <BR />
                <label id="email"><?php echo $_SESSION['facultyemail'];?></label><label style="color:#07B5B2;padding-right:20%" > :الايميل الجامعي </label>
              <label id="phoneNumber"><?php echo   $_SESSION['facultypn'];?></label><label style="color:#07B5B2" >  :رقم الجوال </label>
              <br />
              <label id="fd"><?php echo $_SESSION['facultydep'];?></label><label style="color:#07B5B2" >  :الكلية - القسم </label>


            </div>



            <!-- Login Form -->
            <form action="php_nuha/quranformcollect.php" method="post" style="padding-top:5%">

                <label style="color:#07B5B2;margin-right:-60%"><input value="<?php if($edit==1){echo $surahname;}?>" type="text" id="nameOfSurah" class="fadeIn second" name="nameOfSurah" style="text-align: right; width:90%;height:10%;margin-left:-140%;">:اسم السورة </label>

              <div style="margin-left:2%;padding:5%" >



                <label style="color:#07B5B2;text-align:center;font-size:15px" >
                :  فضلاً إختاري الايام والاوقات التي تفضلين التطوع بها في المصلى
                </label>

                <table id="customers" >

                  <tr>
                    <th colspan="2">الـــوقــت</th>
                      <th rowspan="2">اليوم </th>
                  </tr>

                  <tr>
                    <th>إلى</th>
                    <th>من</th>
                  </tr>

                  <tr>

                     <td>
                       <select id="Sunminuteto" name="Sunminuteto" size="1">
                          <option value="00" <?php if( $SUNminTO == "00") echo "selected";?>>
                            00
                          </option>
                          <option value="15" <?php if( $SUNminTO == "15") echo "selected";?> >
                            15
                          </option>
                          <option value="30" <?php if( $SUNminTO == "30") echo "selected";?> >
                            30
                          </option>
                          <option value="45" <?php if( $SUNminTO == "45") echo "selected";?>>
                            45
                          </option>
                        </select> : الساعة
                        :
                       <select id="Sunhourto" name="Sunhourto" size="1">
                         <option value="07" <?php if($SUNhoursTO == "07") echo "selected";?>>
                           07
                         </option>
                         <option value="08" <?php if($SUNhoursTO == "08") echo "selected";?> >
                           08
                         </option>
                         <option value="09" <?php if($SUNhoursTO == "09") echo "selected";?> >
                           09
                         </option>
                         <option value="10" <?php if($SUNhoursTO == "10") echo "selected";?> >
                           10
                         </option>
                         <option value="11" <?php if($SUNhoursTO == "11") echo "selected";?> >
                           11
                         </option>
                         <option value="12" <?php if($SUNhoursTO == "12") echo "selected";?>>
                           12
                         </option>
                         <option value="01" <?php if($SUNhoursTO == "01") echo "selected";?> >
                           01
                         </option>
                       </select> الدقيقة
                      </td>

                      <td>
                        <select id="SunminuteFrom" name="SunminuteFrom" size="1">
                           <option value="00" <?php if($SUNminFROM == "00") echo "selected";?>>
                             00
                           </option>
                           <option value="15" <?php if($SUNminFROM == "15") echo "selected";?>>
                             15
                           </option>

                           <option value="30" <?php if($SUNminFROM == "30") echo "selected";?>>
                             30
                           </option>

                           <option value="45"<?php if($SUNminFROM == "45") echo "selected";?>>
                             45
                           </option>

                         </select> : الساعة
                        :
                        <select id="SunhourFrom" name="SunhourFrom" size="1">
                          <option value="07" <?php if($SUNhoursFROM == "07") echo "selected";?>>
                            07

                          </option>
                          <option value="08" <?php if($SUNhoursFROM == "08") echo "selected";?>>
                            08
                          </option>
                          <option value="09" <?php if($SUNhoursFROM == "09") echo "selected";?>>
                            09
                          </option>
                          <option value="10" <?php if($SUNhoursFROM == "10") echo "selected";?>>
                            10
                          </option>
                          <option value="11" <?php if($SUNhoursFROM == "11") echo "selected";?>>
                            11
                          </option>
                          <option value="12" <?php if($SUNhoursFROM == "12") echo "selected";?>>
                            12
                          </option>
                          <option value="01" <?php if($SUNhoursFROM == "01") echo "selected";?> >
                            01
                          </option>
                        </select> الدقيقة
                       </td>

                        <td><label style="padding-right:10%">الاحد</label><input type="checkbox" name="check_list[]" id="Sunday" value="الأحد" <?php if(!empty($sunday)) echo "checked='checked'";?>/> </td>

                  </tr>

                  <tr>

                  <td>
                    <select id="Monminuteto" name="Monminuteto" size="1">
                      <option value="00" <?php if( $MONminTO == "00") echo "selected";?>>
                        00
                      </option>
                      <option value="15" <?php if( $MONminTO == "15") echo "selected";?> >
                        15
                      </option>
                      <option value="30" <?php if( $MONminTO == "30") echo "selected";?> >
                        30
                      </option>
                      <option value="45" <?php if( $MONminTO == "45") echo "selected";?>>
                        45
                      </option>
                     </select> : الساعة
                     :
                    <select id="Monhourto" name="Monhourto" size="1">
                      <option value="07" <?php if($MONhoursTO == "07") echo "selected";?>>
                        07
                      </option>
                      <option value="08" <?php if($MONhoursTO == "08") echo "selected";?> >
                        08
                      </option>
                      <option value="09" <?php if($MONhoursTO == "09") echo "selected";?> >
                        09
                      </option>
                      <option value="10" <?php if($MONhoursTO == "10") echo "selected";?> >
                        10
                      </option>
                      <option value="11" <?php if($MONhoursTO == "11") echo "selected";?> >
                        11
                      </option>
                      <option value="12" <?php if($MONhoursTO == "12") echo "selected";?>>
                        12
                      </option>
                      <option value="01" <?php if($MONhoursTO == "01") echo "selected";?> >
                        01
                      </option>
                    </select> الدقيقة
                   </td>

                   <td>
                     <select id="MonminuteFrom" name="MonminuteFrom" size="1">
                       <option value="00" <?php if($MONminFROM == "00") echo "selected";?>>
                         00
                       </option>
                       <option value="15" <?php if($MONminFROM == "15") echo "selected";?>>
                         15
                       </option>

                       <option value="30" <?php if($MONminFROM == "30") echo "selected";?>>
                         30
                       </option>

                       <option value="45"<?php if($MONminFROM == "45") echo "selected";?>>
                         45
                       </option>
                      </select> : الساعة
                     :
                     <select id="MonhourFrom" name="MonhourFrom" size="1">
                       <option value="07" <?php if($MONhoursFROM == "07") echo "selected";?>>
                         07
                       </option>
                       <option value="08" <?php if($MONhoursFROM == "08") echo "selected";?>>
                         08
                       </option>
                       <option value="09" <?php if($MONhoursFROM == "09") echo "selected";?>>
                         09
                       </option>
                       <option value="10" <?php if($MONhoursFROM == "10") echo "selected";?>>
                         10
                       </option>
                       <option value="11" <?php if($MONhoursFROM == "11") echo "selected";?>>
                         11
                       </option>
                       <option value="12" <?php if($MONhoursFROM == "12") echo "selected";?>>
                         12
                       </option>
                       <option value="01" <?php if($MONhoursFROM == "01") echo "selected";?> >
                         01
                       </option>
                     </select> الدقيقة
                    </td>

                     <td><label style="padding-right:10%">الاثنين</label><input type="checkbox" name="check_list[]" id="Monday" value="الأثنين" <?php if(!empty($monday)) echo "checked='checked'";?>/> </td>

                  </tr>

                  <tr>

                  <td>
                    <select id="Tueminuteto" name="Tueminuteto" size="1">
                      <option value="00" <?php if( $TUEminTO == "00") echo "selected";?>>
                        00
                      </option>
                      <option value="15" <?php if( $TUEminTO == "15") echo "selected";?> >
                        15
                      </option>
                      <option value="30" <?php if( $TUEminTO == "30") echo "selected";?> >
                        30
                      </option>
                      <option value="45" <?php if( $TUEminTO == "45") echo "selected";?>>
                        45
                      </option>
                     </select> : الساعة
                     :
                    <select id="Tuehourto" name="Tuehourto" size="1">
                      <option value="07" <?php if($TUEhoursTO == "07") echo "selected";?>>
                        07
                      </option>
                      <option value="08" <?php if($TUEhoursTO == "08") echo "selected";?> >
                        08
                      </option>
                      <option value="09" <?php if($TUEhoursTO == "09") echo "selected";?> >
                        09
                      </option>
                      <option value="10" <?php if($TUEhoursTO == "10") echo "selected";?> >
                        10
                      </option>
                      <option value="11" <?php if($TUEhoursTO == "11") echo "selected";?> >
                        11
                      </option>
                      <option value="12" <?php if($TUEhoursTO == "12") echo "selected";?>>
                        12
                      </option>
                      <option value="01" <?php if($TUEhoursTO == "01") echo "selected";?> >
                        01
                      </option>
                    </select> الدقيقة
                   </td>

                   <td>
                     <select id="TueminuteFrom" name="TueminuteFrom" size="1">
                       <option value="00" <?php if($TUEminFROM == "00") echo "selected";?>>
                         00
                       </option>
                       <option value="15" <?php if($TUEminFROM == "15") echo "selected";?>>
                         15
                       </option>

                       <option value="30" <?php if($TUEminFROM == "30") echo "selected";?>>
                         30
                       </option>

                       <option value="45"<?php if($TUEminFROM == "45") echo "selected";?>>
                         45
                       </option>
                      </select> : الساعة
                     :
                     <select id="TuehourFrom" name="TuehourFrom" size="1">
                       <option value="07" <?php if($TUEhoursFROM == "07") echo "selected";?>>
                         07
                       </option>
                       <option value="08" <?php if($TUEhoursFROM == "08") echo "selected";?>>
                         08
                       </option>
                       <option value="09" <?php if($TUEhoursFROM == "09") echo "selected";?>>
                         09
                       </option>
                       <option value="10" <?php if($TUEhoursFROM == "10") echo "selected";?>>
                         10
                       </option>
                       <option value="11" <?php if($TUEhoursFROM == "11") echo "selected";?>>
                         11
                       </option>
                       <option value="12" <?php if($TUEhoursFROM == "12") echo "selected";?>>
                         12
                       </option>
                       <option value="01" <?php if($TUEhoursFROM == "01") echo "selected";?> >
                         01
                       </option>
                     </select> الدقيقة
                    </td>

                     <td><label style="padding-right:10%">الثلاثاء</label><input type="checkbox" name="check_list[]" id="Tuesday" value="الثلاثاء" <?php if(!empty($tuesday)) echo "checked='checked'";?>/> </td>

                  </tr>

                  <tr>

                  <td>
                    <select id="Wedminuteto" name="Wedminuteto" size="1">
                      <option value="00" <?php if( $WDNminTO == "00") echo "selected";?>>
                        00
                      </option>
                      <option value="15" <?php if( $WDNminTO == "15") echo "selected";?> >
                        15
                      </option>
                      <option value="30" <?php if( $WDNminTO == "30") echo "selected";?> >
                        30
                      </option>
                      <option value="45" <?php if( $WDNminTO == "45") echo "selected";?>>
                        45
                      </option>
                     </select> : الساعة
                     :
                    <select id="Wedhourto" name="Wedhourto" size="1">
                      <option value="07" <?php if($WDNhoursTO == "07") echo "selected";?>>
                        07
                      </option>
                      <option value="08" <?php if($WDNhoursTO == "08") echo "selected";?> >
                        08
                      </option>
                      <option value="09" <?php if($WDNhoursTO == "09") echo "selected";?> >
                        09
                      </option>
                      <option value="10" <?php if($WDNhoursTO == "10") echo "selected";?> >
                        10
                      </option>
                      <option value="11" <?php if($WDNhoursTO == "11") echo "selected";?> >
                        11
                      </option>
                      <option value="12" <?php if($WDNhoursTO == "12") echo "selected";?>>
                        12
                      </option>
                      <option value="01" <?php if($WDNhoursTO == "01") echo "selected";?> >
                        01
                      </option>
                    </select> الدقيقة
                   </td>

                   <td>
                     <select id="WedminuteFrom" name="WedminuteFrom" size="1">
                       <option value="00" <?php if($WDNminFROM == "00") echo "selected";?>>
                         00
                       </option>
                       <option value="15" <?php if($WDNminFROM == "15") echo "selected";?>>
                         15
                       </option>

                       <option value="30" <?php if($WDNminFROM == "30") echo "selected";?>>
                         30
                       </option>

                       <option value="45"<?php if($WDNminFROM == "45") echo "selected";?>>
                         45
                       </option>
                      </select> : الساعة
                     :
                     <select id="WedhourFrom" name="WedhourFrom" size="1">
                       <option value="07" <?php if($WDNhoursFROM == "07") echo "selected";?>>
                         07
                       </option>
                       <option value="08" <?php if($WDNhoursFROM == "08") echo "selected";?>>
                         08
                       </option>
                       <option value="09" <?php if($WDNhoursFROM == "09") echo "selected";?>>
                         09
                       </option>
                       <option value="10" <?php if($WDNhoursFROM == "10") echo "selected";?>>
                         10
                       </option>
                       <option value="11" <?php if($WDNhoursFROM == "11") echo "selected";?>>
                         11
                       </option>
                       <option value="12" <?php if($WDNhoursFROM == "12") echo "selected";?>>
                         12
                       </option>
                       <option value="01" <?php if($WDNhoursFROM == "01") echo "selected";?> >
                         01
                       </option>
                     </select> الدقيقة
                    </td>

                     <td><label style="padding-right:10%">الاربعاء</label><input type="checkbox" name="check_list[]" id="الاربعاء" value="الاربعاء" <?php if(!empty($wednsaday)) echo "checked='checked'";?>/> </td>

                  </tr>

                  <tr>

                  <td>
                    <select id="Thuminuteto" name="Thuminuteto" size="1">
                      <option value="00" <?php if( $THUminTO == "00") echo "selected";?>>
                        00
                      </option>
                      <option value="15" <?php if( $THUminTO == "15") echo "selected";?> >
                        15
                      </option>
                      <option value="30" <?php if( $THUminTO == "30") echo "selected";?> >
                        30
                      </option>
                      <option value="45" <?php if( $THUminTO == "45") echo "selected";?>>
                        45
                      </option>
                     </select> : الساعة
                     :
                    <select id="Thuhourto" name="Thuhourto" size="1">
                      <option value="07" <?php if($THUhoursTO == "07") echo "selected";?>>
                        07
                      </option>
                      <option value="08" <?php if($THUhoursTO == "08") echo "selected";?> >
                        08
                      </option>
                      <option value="09" <?php if($THUhoursTO == "09") echo "selected";?> >
                        09
                      </option>
                      <option value="10" <?php if($THUhoursTO == "10") echo "selected";?> >
                        10
                      </option>
                      <option value="11" <?php if($THUhoursTO == "11") echo "selected";?> >
                        11
                      </option>
                      <option value="12" <?php if($THUhoursTO == "12") echo "selected";?>>
                        12
                      </option>
                      <option value="01" <?php if($THUhoursTO == "01") echo "selected";?> >
                        01
                      </option>
                    </select> الدقيقة
                   </td>

                   <td>
                     <select id="ThuminuteFrom" name="ThuminuteFrom" size="1">
                       <option value="00" <?php if($THUminFROM == "00") echo "selected";?>>
                         00
                       </option>
                       <option value="15" <?php if($THUminFROM == "15") echo "selected";?>>
                         15
                       </option>

                       <option value="30" <?php if($THUminFROM == "30") echo "selected";?>>
                         30
                       </option>

                       <option value="45"<?php if($THUminFROM == "45") echo "selected";?>>
                         45
                       </option>

                      </select> : الساعة
                     :
                     <select id="ThuhourFrom" name="ThuhourFrom" size="1">
                       <option value="07" <?php if($THUhoursFROM == "07") echo "selected";?>>
                         07
                       </option>
                       <option value="08" <?php if($THUhoursFROM == "08") echo "selected";?>>
                         08
                       </option>
                       <option value="09" <?php if($THUhoursFROM == "09") echo "selected";?>>
                         09
                       </option>
                       <option value="10" <?php if($THUhoursFROM == "10") echo "selected";?>>
                         10
                       </option>
                       <option value="11" <?php if($THUhoursFROM == "11") echo "selected";?>>
                         11
                       </option>
                       <option value="12" <?php if($THUhoursFROM == "12") echo "selected";?>>
                         12
                       </option>
                       <option value="01" <?php if($THUhoursFROM == "01") echo "selected";?> >
                         01
                       </option>
                     </select> الدقيقة
                    </td>

                     <td><label style="padding-right:10%">الخميس</label><input type="checkbox" name="check_list[]" id="الخميس" value="الخميس" <?php if(!empty($thursady)) echo "checked='checked'";?>/> </td>

                  </tr>





                </table>

                 <input type="submit" class="fadeIn fourth" value="إرسال" style="margin-top:5%" >
                </div>
              </div>


                  </div>
                </div>







            </form>



          </div>
        </div>





    <!-- footer_start  -->
    <footer class="footer" style="  padding : 60px; background:#F3FCF8;margin-top:10%">

      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-md-6 col-lg-4 ">
            <div class="footer_widget">
              <div class="footer_logo">

                <img src="nuha/logo-footer.png" alt="" style="padding-top: 9px;">

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
        <script>
            $('#datepicker').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
            });
            $('#datepicker2').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }

            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
      <script>
       function alert() {
            Swal.fire({
              icon: 'success',
              title: 'تم ارسال الطلب بنجاح',
              showConfirmButton: false,
              timer: 2000
            })
            window.setTimeout(function() {
              location.replace("Personal Page for Faculty Member.php");
              }, 2020);

          }
          function alert_error_DAY() {
            Swal.fire({
         icon: 'warning',
         text: 'الرجاء اختيار اليوم المناسب لك' ,
         confirmButtonColor: '#28d1cf',
         confirmButtonText: 'اغلاق'
         })
             }
       </script>


    </body>
    <?php
    $edit = 0 ;
    error_reporting(E_ALL ^ E_NOTICE);

    $MSS=$_GET['reason'];
    if($MSS == "dayempty"){
      echo "<script type=text/javascript >
       alert_error_DAY();
      </script>";
    }else if($MSS == "success") {

      echo "<script type=text/javascript >
       alert();
      </script>";

    }else if($MSS == "editform"){
    $edit = 1 ;
    $ID = $_SESSION['facultyid'];


      $result2 = $connect->query("SELECT * FROM `quranvolunteer` WHERE FacultyUniversityID = $ID ");

      $row2 = $result2->fetch_array(MYSQLI_ASSOC);

      $quranvolID=$row2['Quran_volunteer_id'];
      $result = $connect->query("SELECT * FROM `timetable` WHERE Quran_volunteer_id = $quranvolID");

    $arrayofdays = array();
    $arrayofTIMEFROM = array();
    $arrayofTIMETO = array();
    $surahname= $row2['Surah_name'];

    $SUNhoursFROM = "";
    $SUNminFROM = "";
    $SUNhoursTO = "";
    $SUNminTO = "";

    $MONhoursFROM = "";
    $MONminFROM = "";
    $MONhoursTO = "";
    $MONminTO = "";

    $TUEhoursFROM = "";
    $TUEminFROM = "";
    $TUEhoursTO ="";
    $TUEminTO = "";

    $WDNhoursFROM = "";
    $WDNminFROM = "";
    $WDNhoursTO = "";
    $WDNminTO = "";

    $THUhoursFROM = "";
    $THUminFROM = "";
    $THUhoursTO = "";
    $THUminTO = "";

    $sunday="";
    $monday="";
    $tuesday="";
    $wednsaday="";
    $thursady="";

    while($row = mysqli_fetch_array($result)){

    if($row['Day']=="الأحد"){
    $sunday=$row['Day'];
    $SUNhoursFROM = substr($row['timeStart'],0,2);
    $SUNminFROM = substr($row['timeStart'],3,2);
    $SUNhoursTO = substr($row['timeEnd'],0,2);
    $SUNminTO = substr($row['timeEnd'],3,2);
    }else if($row['Day']=="الأثنين"){
    $monday=$row['Day'];
    $MONhoursFROM = substr($row['timeStart'],0,2);
    $MONminFROM = substr($row['timeStart'],3,2);
    $MONhoursTO = substr($row['timeEnd'],0,2);
    $MONminTO = substr($row['timeEnd'],3,2);
    }else if($row['Day']=="الثلاثاء"){
    $tuesday=$row['Day'];
    $TUEhoursFROM = substr($row['timeStart'],0,2);
    $TUEminFROM = substr($row['timeStart'],3,2);
    $TUEhoursTO = substr($row['timeEnd'],0,2);
    $TUEminTO = substr($row['timeEnd'],3,2);
    }else if($row['Day']=="الاربعاء"){
    $wednsaday=$row['Day'];
    $WDNhoursFROM = substr($row['timeStart'],0,2);
    $WDNminFROM = substr($row['timeStart'],3,2);
    $WDNhoursTO = substr($row['timeEnd'],0,2);
    $WDNminTO = substr($row['timeEnd'],3,2);
    }else if($row['Day']=="الخميس"){
    $thursady=$row['Day'];
    $THUhoursFROM = substr($row['timeStart'],0,2);
    $THUminFROM = substr($row['timeStart'],3,2);
    $THUhoursTO = substr($row['timeEnd'],0,2);
    $THUminTO = substr($row['timeEnd'],3,2);
    }

    }

    $connect->query("DELETE FROM `quranvolunteer` WHERE Quran_volunteer_id = $quranvolID ");


    }

    ?>
    </html>
