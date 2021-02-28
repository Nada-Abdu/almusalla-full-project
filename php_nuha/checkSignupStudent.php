<!doctype html>
<?php
$connect = mysqli_connect('localhost','root','05371433','almusalla');
  ?>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
  </head>
  <?php
    $STUDENTEMAIL = $_POST["studentemail"];
    $STUDENTPASSWORD =$_POST["studentpass"];
    $STUDENTNAME = $_POST["studentname"];
    $STUDENTID =$_POST["studentID"];

  $checkSm ='@st.uqu.edu.sa';

  if (strlen($STUDENTID) != 9 ){
    header("Location:../Sign up.php?reason1=wrongid");

   }else if (strlen($STUDENTPASSWORD)< 8 ){
    header("Location:../Sign up.php?reason1=wrongpass");

   }else if(!(empty($STUDENTEMAIL))&&(preg_match("/{$checkSm}/i",$STUDENTEMAIL))){


    $result = $connect->query("SELECT 	university_ID FROM `student` WHERE 	university_ID=$STUDENTID ");
    $result2 = $connect->query("SELECT university_ID FROM `student` WHERE  university_email='$STUDENTEMAIL'");

    if ((mysqli_num_rows($result) < 1) && (mysqli_num_rows($result2) < 1) ) {

      $AUTHCODE = rand(1000,9999);

  $result = $connect->query("INSERT INTO `student`(name,university_ID,university_email,password,authorization_code)
  VALUES ('$STUDENTNAME',$STUDENTID,'$STUDENTEMAIL',$STUDENTPASSWORD,$AUTHCODE) ");





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
    $mail->AddAddress($STUDENTEMAIL);
    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
      } else {
        echo "Message has been sent";
      
      }

   session_start();
  $_SESSION['studentid'] = $STUDENTID;
  $_SESSION['studentname'] =$STUDENTNAME;
  $_SESSION['studentemail']= $STUDENTEMAIL;
  $_SESSION['studentpw'] =$STUDENTPASSWORD;
  $_SESSION['studentAUTHCODE'] =$AUTHCODE;



    header("Location:../validitionCode.php");


  }else {
    header("Location:../Sign up.php?reason1=badchoice");


}}else {
  header("Location:../Sign up.php?reason1=Swrongemail");
}

  ?>
</html>
