<?php
$connect = mysqli_connect('localhost','root','05371433','almusalla');
if ($connect)
  {
echo "succssfuly connected  ssss";}
$sql= "SELECT * FROM quranvolunteer";
if ($result = $connect-> query($sql)) {
  while ($obj = $result -> fetch_object()) {
    printf( $obj->Day );
  }
  $result -> free_result();
}else echo "string";
   ?>
   
  <?php

  $FACULTYEMAIL = $_POST["facultyemail"];
  $FACULTYPASSWORD =$_POST["facultypass"];
  $FACULTYPHONENUM = $_POST["facultyPhoneNum"];
  $FACULTYDEP =$_POST["facultyDep"];
  $FACULTYENAME = $_POST["facultyname"];
  $FACULTYID =$_POST["facultyID"];

  $checkFm ='@uqu.edu.sa';

  if (strlen($FACULTYPASSWORD)< 8 ){
    header("Location:../Sign up.php?reason1=wrongpass");

   }else if(!(empty($FACULTYEMAIL))&&(preg_match("/{$checkFm}/i",$FACULTYEMAIL))){


    $result = $connect->query("SELECT FacultyUniversityID FROM `facultymember` WHERE UniversityEmail='$FACULTYEMAIL'");
    $result2 = $connect->query("SELECT FacultyUniversityID FROM `facultymember` WHERE FacultyUniversityID=$FACULTYID");

    if ((mysqli_num_rows($result) < 1) && (mysqli_num_rows($result2) < 1) ) {

      $AUTHCODE = rand(1000,9999);

  $result = $connect->query("INSERT INTO `facultymember`(FacultyUniversityID,FacultyMemberName,UniversityEmail,PhoneNumber,FacultyDepartment,Password,FacultyAutoCode)
  VALUES ($FACULTYID,'$FACULTYENAME','$FACULTYEMAIL',$FACULTYPHONENUM,'$FACULTYDEP',$FACULTYPASSWORD,$AUTHCODE) ");



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
                                                    <strong><span style="font-size: 18px; color: #07b5b2;">شكراً لتسجيلك في موقع المصلى</span></strong>
                                                </p>
                                                <p
                                                    style="line-height: 1.2; word-break: break-word; text-align: center; font-family:  Helvetica, Arial, sans-serif; mso-line-height-alt: NaNpx; margin: 0;">
                                                    <strong><span
                                                            style="font-size: 18px; color: #07b5b2;">&nbsp;:رجاءاً قومي بنسخ رمز التحقق التالي</span></strong>
                                                </p>
                                                <p
                                                    style="line-height: 1.2; word-break: break-word; text-align: center; font-family:  Helvetica, Arial, sans-serif; mso-line-height-alt: NaNpx; margin: 0;">
                                                    <strong><span
                                                            style="font-size: 23px; color: black;">&nbsp;'.$AUTHCODE.'</span></strong>
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

</html>
';

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
 
    $mail->SetFrom("ALMousallauqu@gmail.com");
    $mail->Subject = 'رمز التأكيد | المصلـــى';
    $mail->msgHTML($emailTemplate);
    $mail->AddAddress($FACULTYEMAIL);
  
        if (!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
          } else {
            echo "Message has been sent";
          
          }
      
      
   session_start();
  $_SESSION['facultyid'] = $FACULTYID;
  $_SESSION['facultyname'] =$FACULTYENAME;
  $_SESSION['facultyemail']= $FACULTYEMAIL;
  $_SESSION['facultypn'] =$FACULTYPHONENUM;
  $_SESSION['facultydep'] = $FACULTYDEP;
  $_SESSION['facultypw'] =$FACULTYPASSWORD;
  $_SESSION['facultyAUTHCODE'] =$AUTHCODE;



    header("Location:../validitionCode.php");


  }else {
    header("Location:../Sign up.php?reason1=badchoice");


}

}else {
  header("Location:../Sign up.php?reason1=Fwrongemail");
}

  ?>
