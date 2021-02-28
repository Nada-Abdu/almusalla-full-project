 
<?php
$connect = mysqli_connect('localhost','root','05371433','almusalla');

session_start();

$nameofbook = $_POST["bookname"];
$nameoflesson = $_POST["nameoflesson"];
$date = $_POST["lessondate"];
$numberofmeeting = $_POST["numofmetting"];

$SUNhoursFROM = $_POST["SunhourFrom"];
$SUNminFROM = $_POST["SunminuteFrom"];
$SUNhoursTO = $_POST["Sunhourto"];
$SUNminTO = $_POST["Sunminuteto"];

$MONhoursFROM = $_POST["MonhourFrom"];
$MONminFROM = $_POST["MonminuteFrom"];
$MONhoursTO = $_POST["Monhourto"];
$MONminTO = $_POST["Monminuteto"];

$TUEhoursFROM = $_POST["TuehourFrom"];
$TUEminFROM = $_POST["TueminuteFrom"];
$TUEhoursTO = $_POST["Tuehourto"];
$TUEminTO = $_POST["Tueminuteto"];

$WDNhoursFROM = $_POST["WedhourFrom"];
$WDNminFROM = $_POST["WedminuteFrom"];
$WDNhoursTO = $_POST["Wedhourto"];
$WDNminTO = $_POST["Wedminuteto"];

$THUhoursFROM = $_POST["ThuhourFrom"];
$THUminFROM = $_POST["ThuminuteFrom"];
$THUhoursTO = $_POST["Thuhourto"];
$THUminTO = $_POST["Thuminuteto"];

$TIMEFROM = "";
$TIMETO = "";
$DAY = "";
$havingcertificate = -1;
$ID = $_SESSION['facultyid'];

if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){

if ($selected == "الأحد"){
$DAY= $selected;
switch ($SUNhoursFROM) {
  case '07':
    $TIMEFROM.="07";
    break;
    case '08':
      $TIMEFROM.="08";
      break;
      case '09':
        $TIMEFROM.="09";
        break;
        case '10':
          $TIMEFROM.="10";
          break;
          case '11':
            $TIMEFROM.="11";
            break;
            case '12':
              $TIMEFROM.="12";
              break;
              case '01':
                $TIMEFROM.="01";
                break;
}
$TIMEFROM.=":";
switch ($SUNminFROM) {
  case '00':
    $TIMEFROM.="00";
    break;
    case '15':
      $TIMEFROM.="15";
      break;
      case '30':
        $TIMEFROM.="30";
        break;
        case '45':
          $TIMEFROM.="45";
          break;
}

switch ($SUNhoursTO) {
  case '07':
    $TIMETO.="07";
    break;
    case '08':
      $TIMETO.="08";
      break;
      case '09':
        $TIMETO.="09";
        break;
        case '10':
          $TIMETO.="10";
          break;
          case '11':
            $TIMETO.="11";
            break;
            case '12':
              $TIMETO.="12";
              break;
              case '01':
                $TIMETO.="01";
                break;
}
$TIMETO.=":";
switch ($SUNminTO) {
  case '00':
    $TIMETO.="00";
    break;
    case '15':
      $TIMETO.="15";
      break;
      case '30':
        $TIMETO.="30";
        break;
        case '45':
          $TIMETO.="45";
          break;
}
}

if ($selected == "الأثنين"){
$DAY= $selected;
switch ($MONhoursFROM) {
  case '07':
    $TIMEFROM.="07";
    break;
    case '08':
      $TIMEFROM.="08";
      break;
      case '09':
        $TIMEFROM.="09";
        break;
        case '10':
          $TIMEFROM.="10";
          break;
          case '11':
            $TIMEFROM.="11";
            break;
            case '12':
              $TIMEFROM.="12";
              break;
              case '01':
                $TIMEFROM.="01";
                break;
}
$TIMEFROM.=":";
switch ($MONminFROM) {
  case '00':
    $TIMEFROM.="00";
    break;
    case '15':
      $TIMEFROM.="15";
      break;
      case '30':
        $TIMEFROM.="30";
        break;
        case '45':
          $TIMEFROM.="45";
          break;
}

switch ($MONhoursTO) {
  case '07':
    $TIMETO.="07";
    break;
    case '08':
      $TIMETO.="08";
      break;
      case '09':
        $TIMETO.="09";
        break;
        case '10':
          $TIMETO.="10";
          break;
          case '11':
            $TIMETO.="11";
            break;
            case '12':
              $TIMETO.="12";
              break;
              case '01':
                $TIMETO.="01";
                break;
}
$TIMETO.=":";
switch ($MONminTO) {
  case '00':
    $TIMETO.="00";
    break;
    case '15':
      $TIMETO.="15";
      break;
      case '30':
        $TIMETO.="30";
        break;
        case '45':
          $TIMETO.="45";
          break;
}
}

if ($selected == "الثلاثاء"){
$DAY= $selected;
switch ($TUEhoursFROM) {
  case '07':
    $TIMEFROM.="07";
    break;
    case '08':
      $TIMEFROM.="08";
      break;
      case '09':
        $TIMEFROM.="09";
        break;
        case '10':
          $TIMEFROM.="10";
          break;
          case '11':
            $TIMEFROM.="11";
            break;
            case '12':
              $TIMEFROM.="12";
              break;
              case '01':
                $TIMEFROM.="01";
                break;
}
$TIMEFROM.=":";
switch ($TUEminFROM) {
  case '00':
    $TIMEFROM.="00";
    break;
    case '15':
      $TIMEFROM.="15";
      break;
      case '30':
        $TIMEFROM.="30";
        break;
        case '45':
          $TIMEFROM.="45";
          break;
}

switch ($TUEhoursTO) {
  case '07':
    $TIMETO.="07";
    break;
    case '08':
      $TIMETO.="08";
      break;
      case '09':
        $TIMETO.="09";
        break;
        case '10':
          $TIMETO.="10";
          break;
          case '11':
            $TIMETO.="11";
            break;
            case '12':
              $TIMETO.="12";
              break;
              case '01':
                $TIMETO.="01";
                break;
}
$TIMETO.=":";
switch ($TUEminTO) {
  case '00':
    $TIMETO.="00";
    break;
    case '15':
      $TIMETO.="15";
      break;
      case '30':
        $TIMETO.="30";
        break;
        case '45':
          $TIMETO.="45";
          break;
}
}

if ($selected == "الاربعاء"){
$DAY= $selected;
switch ($WDNhoursFROM) {
  case '07':
    $TIMEFROM.="07";
    break;
    case '08':
      $TIMEFROM.="08";
      break;
      case '09':
        $TIMEFROM.="09";
        break;
        case '10':
          $TIMEFROM.="10";
          break;
          case '11':
            $TIMEFROM.="11";
            break;
            case '12':
              $TIMEFROM.="12";
              break;
              case '01':
                $TIMEFROM.="01";
                break;
}
$TIMEFROM.=":";
switch ($WDNminFROM) {
  case '00':
    $TIMEFROM.="00";
    break;
    case '15':
      $TIMEFROM.="15";
      break;
      case '30':
        $TIMEFROM.="30";
        break;
        case '45':
          $TIMEFROM.="45";
          break;
}

switch ($WDNhoursTO) {
  case '07':
    $TIMETO.="07";
    break;
    case '08':
      $TIMETO.="08";
      break;
      case '09':
        $TIMETO.="09";
        break;
        case '10':
          $TIMETO.="10";
          break;
          case '11':
            $TIMETO.="11";
            break;
            case '12':
              $TIMETO.="12";
              break;
              case '01':
                $TIMETO.="01";
                break;
}
$TIMETO.=":";
switch ($WDNminTO) {
  case '00':
    $TIMETO.="00";
    break;
    case '15':
      $TIMETO.="15";
      break;
      case '30':
        $TIMETO.="30";
        break;
        case '45':
          $TIMETO.="45";
          break;
}
}

if ($selected == "الخميس"){
$DAY= $selected;
switch ($THUhoursFROM) {
  case '07':
    $TIMEFROM.="07";
    break;
    case '08':
      $TIMEFROM.="08";
      break;
      case '09':
        $TIMEFROM.="09";
        break;
        case '10':
          $TIMEFROM.="10";
          break;
          case '11':
            $TIMEFROM.="11";
            break;
            case '12':
              $TIMEFROM.="12";
              break;
              case '01':
                $TIMEFROM.="01";
                break;
}
$TIMEFROM.=":";
switch ($THUminFROM) {
  case '00':
    $TIMEFROM.="00";
    break;
    case '15':
      $TIMEFROM.="15";
      break;
      case '30':
        $TIMEFROM.="30";
        break;
        case '45':
          $TIMEFROM.="45";
          break;
}

switch ($THUhoursTO) {
  case '07':
    $TIMETO.="07";
    break;
    case '08':
      $TIMETO.="08";
      break;
      case '09':
        $TIMETO.="09";
        break;
        case '10':
          $TIMETO.="10";
          break;
          case '11':
            $TIMETO.="11";
            break;
            case '12':
              $TIMETO.="12";
              break;
              case '01':
                $TIMETO.="01";
                break;
}
$TIMETO.=":";
switch ($THUminTO) {
  case '00':
    $TIMETO.="00";
    break;
    case '15':
      $TIMETO.="15";
      break;
      case '30':
        $TIMETO.="30";
        break;
        case '45':
          $TIMETO.="45";
          break;
}
}
}
if(!empty($_POST['check_yesno'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_yesno'] as $selected){
if ($selected == "yes"){
$havingcertificate = 1;
}else if($selected == "no") {
$havingcertificate = 0;
}
}

$TIMWOFLESSON = $TIMEFROM."-".$TIMETO;

$connect->query("INSERT INTO `islamicvolunteer`(lessonName,lessonDate,Day,bookName,havingCertificate,FacultyUniversityID,meetingsNumber,time,requestState)
VALUES ('$nameoflesson','$date','$DAY','$nameofbook',$havingcertificate,$ID,'$numberofmeeting','$TIMWOFLESSON','انتظار')");
 header("Location:../requesting form as Islamic volunteer.php?reason5=success");

}else{
 header("Location:../requesting form as Islamic volunteer.php?reason5=crtifcatempty");
}

}else{
 header("Location:../requesting form as Islamic volunteer.php?reason5=dayempty");
}


?>
