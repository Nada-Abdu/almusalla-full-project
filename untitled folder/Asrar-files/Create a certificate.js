var c = document.querySelector("#canvas");
var canvas = c;
var ctx = c.getContext("2d");
var image = new Image();
var file;
var data;
var name = "اسم الطالبة";
var names = ["أسرار", "أسماء", "أحلام ", "أهداب ", "أفنا ن"];
colorWell = document.querySelector("#colorWell");
ctx.textAlign = "center";
var color = "#000000";
var size = 30;
var myImage;
ctx.fillStyle = color;
var x = 500;
var y = 300;
var text = [];
var indexCertificate = 0;
var data;
var StampX = 0;
var StampY = image.naturalHeight;
var StampImage;
var studentInfo = new Array();

function StampUp() {
  if (StampImage == null) {
    stampEmpty();
  } else {
    StampY -= 10;
    updateStampLoction();
  }
}

function StampDown() {
  if (StampImage == null) {
    stampEmpty();
  } else {
    StampY += 10;
    updateStampLoction();
  }
}

function StampRight() {
  if (StampImage == null) {
    stampEmpty();
  } else {
    StampX += 10;
    updateStampLoction();
  }
}

function StampLeft() {
  if (StampImage == null) {
    stampEmpty();
  } else {
    StampX -= 10;
    updateStampLoction();
  }
}

function updateStampLoction() {
  if (StampImage == undefined) {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    image.onload = () => {
      onLoadImg(x, y);
    };
    image.src = data;
  } else {
    drawImage(StampImage);
  }
}

function uploadStamp(e) {
  var reader = new FileReader();
  reader.onload = function (event) {
    StampImage = new Image();
    StampImage.onload = function () {
      drawImage(StampImage);
    };
    StampImage.src = event.target.result;
  };
  reader.readAsDataURL(e.target.files[0]);
}

function drawImage(StampImage) {
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  var width = image.naturalWidth;
  var height = image.naturalHeight;
  c.width = width;
  c.height = height;
  ctx.drawImage(image, 0, 0, width, height);
  ctx.drawImage(StampImage, StampX, StampY);

  c.setAttribute("dir", "ltr");
  ctx.direction = "rtl";
  ctx.font = size + "px Comic Sans MS";
  ctx.fillStyle = color;
  ctx.fillText(name, x, y);
}

image.onload = () => {
  onLoadImg(x, y);
};

window.onload = addLessons();

function addLessons() {
 
  var List = document.getElementById("div-text");
  
  $.ajax({
    url: "Asrar-files/certificateInfo.php",
    type: "get",
    dataType: "JSON",
    success: function (response) {
      len = response.length;
      console.log(len);
      for (var i = 0; i < len; i++) {
        let IslamicVolunteerID = response[i].IslamicVolunteerID;
        let CertificateName = response[i].CertificateName;
        let lessonName = response[i].lessonName;
        List.innerHTML +=
          ' <div style="margin-right:0px;" class="row"><div style="margin-left:10%;" class="col-1" >' +
          '<label style="color:#07B5B2;width:1010px "><input readonly="" type="text" id="' +
          IslamicVolunteerID +
          '" name="inputRequest" value="' +
          lessonName +
          '" style="text-align: right; height:10%;"> </label></div><div class="col-2">' +
          ' <input name=" ' +
          IslamicVolunteerID +
          '" id="' +
          CertificateName +
          '" type="button" value="  ' +
          "استعراض الشهادة" +
          '" style="margin-left:-68px; " onClick="showCertificate(event)"></div></div>';
      }
    },
  });
}

function showCertificate(event) {
  studentInfo=new Array();
  var table = document.querySelector("#studentNames");
  data = event.target.id; // certificate name
  let IslamicVolunteerID = event.target.name; //IslamicVolunteerID
  table.innerHTML='';
  table.innerHTML += '<div class="table-head text-center" dir="rtl">' +
  '<div class="serial text-center" dir="rtl">#</div>' +
  '<div class="country text-right" dir="rtl">اسم الطالبة</div></div>';

  $.ajax({
    url: "Asrar-files/studentNamesWorth.php",
    type: "get",
    dataType: "JSON",
    data: { IslamicVolunteerID },
    success: function (response) {
      len = response.length;
      console.log(len);
      for (var i = 0; i < len; i++) {
        let name = response[i].name;
        let email = response[i].university_email;
        table.innerHTML +=
          '<div class="table-row text-center" dir="rtl">' +
          '<div class="serial text-left" dir="rtl" style="padding-left: 0px;padding-right: 20px;">' +
          (i + 1) +
          '</div><div class="country text-center" dir="rtl">' +
          name +
          "</div></div>";
        studentInfo.push({ name: name, email: email });
      }
    },
  });

  showHiddenDiv();

  ctx.clearRect(0, 0, c.width, c.height);
  image.onload = () => {
    window.imageSrc = this;
    onLoadImg(x, y);
  };
  data = "Certificates/" + data;
  image.src = data;
}

function addToTable(studentNumber) {
  var table = document.querySelector("#studentNames");
  if (table.childElementCount > 1) {
    var e = document.querySelector("#studentNames");
    var child = e.lastElementChild;
    while (child) {
      e.removeChild(child);
      child = e.lastElementChild;
    }
    table.innerHTML +=
      '<div class="table-head text-center" dir="rtl">' +
      '<div class="serial text-center" dir="rtl">#</div>' +
      '<div class="country text-right" dir="rtl">اسم الطالبة</div></div>';
  }
  //send IslamicVolunteerID to get student names
  // for (var i = 0; i < studentNumber; i++) {
  //   table.innerHTML += '<div class="table-row text-center" dir="rtl">' +
  //     '<div class="serial text-left" dir="rtl" style="padding-left: 0px;padding-right: 20px;">' + (i + 1) +
  //     '</div><div class="country text-center" dir="rtl">' + names[i] + '</div></div>';
  // }
}

function onLoadImg(x, y) {
  var width = image.naturalWidth;
  var height = image.naturalHeight;
  c.width = width;
  c.height = height;
  ctx.drawImage(image, 0, 0, width, height);
  c.setAttribute("dir", "ltr");
  ctx.direction = "rtl";
  ctx.font = size + "px Comic Sans MS";
  ctx.fillStyle = color;
  ctx.fillText(name, x, y);
}

// document.querySelector("#text-array").addEventListener('click', (e) => {
//   indexCertificate = e.target.parentNode.value;
//   if (indexCertificate == 0) {
//     data = 'https://media.prod.mdn.mozit.cloud/attachments/2012/07/09/1456/941aaa8d98ead9a0d46aef80d02198f7/Canvas_sun.png';
//     studentNumber = 1;
//   }
//   if (indexCertificate == 1) {
//     data = '/Users/asrar/Desktop/Screen Shot 1441-07-04 at 5.59.16 PM.png';
//     studentNumber = 2;
//   }
//   if (indexCertificate == 2) {
//     data = 'img/blog/single_blog_5.png';
//     studentNumber = 5;

//   }
//   showHiddenDiv();
//   addToTable(studentNumber);
//   ctx.clearRect(0, 0, c.width, c.height);
//   image.onload = () => {
//     window.imageSrc = this;
//     onLoadImg(x, y);
//   };
//   image.src = data;
// });

function showHiddenDiv() {
  document.getElementById("hidden-div-1").style.display = "block";
  document.getElementById("hidden-div-2").style.display = "block";
}

function sizeD() {
  size -= 1;
  updateStampLoction();
}

function sizeI() {
  size += 1;
  updateStampLoction();
}

function up() {
  y -= 10;
  updateStampLoction();
}

function down() {
  y += 10;
  updateStampLoction();
}

function right() {
  x += 10;
  updateStampLoction();
}

function left() {
  x -= 10;
  updateStampLoction();
}
document.addEventListener("keyup", logKey);

function logKey(e) {
  if (e.keyCode === 37) {
    //left
    left();
  }
  if (e.keyCode === 39) {
    //right
    right();
  }
  if (e.keyCode === 38) {
    //up
    up();
  }
  if (e.keyCode === 40) {
    //down
    down();
  }
  if (e.keyCode === 189) {
    //-
    sizeD();
  }
  if (e.keyCode === 187) {
    //+
    sizeI();
  }
  updateStampLoction();
}

colorWell.addEventListener("input", () => {
  color = event.target.value;
  updateStampLoction();
});

function addName() {
  name = document.getElementById("name").value;
  ctx.clearRect(0, 0, c.width, c.height);
  image.onload = () => {
    onLoadImg(x, y);
  };
  image.src = data;
}

function addNames() {
  names = document.getElementById("names").value.split("\n");
}

function saveEveryName() {
  let StudentName;
}


function stampEmpty() {
  Swal.fire({
    icon: "warning",
    title: "فضلًا قومي برفع الختم أولاً ",
    showConfirmButton: false,
    timer: 2000,
  });
}


function waitAlert(){
  Swal.fire({
    icon: "info",
    title: "يرجى عدم إغلاق الصفحة حتى يتم إرسال جميع الشهادات",
    showConfirmButton: false,
    timer: 2000,
  });
}
function successAlert() {
  Swal.fire({
    icon: 'success',
    title: 'تم إرسال الشهادة لإيميل جميع الطالبات بنجاح',
    showConfirmButton: false,
    timer: 2000
  })
}
function generateCertificate() {
  if (StampImage == null) {
    stampEmpty();
  } else {
    var canvasData, canvas, imgUrl, studentName, data, studentEmail;
    let len = studentInfo.length;
   
    waitAlert();
    window.setTimeout(function() {
      for (let i = 0; i < len; i++) {
        console.log(studentInfo[i].name);
        console.log(studentInfo[i].email);
        name=studentInfo[i].name;
        studentEmail=studentInfo[i].email;
        canvas = document.querySelector("#canvas");
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        updateStampLoction();
        canvas = document.querySelector("#canvas");
        canvasData = canvas.toDataURL("image/png");
        console.log("sending email");
        data = {
          data: {
            certificate: canvasData,
            email: studentEmail,
          },
        };
        // send certificate to email
        $.ajax({
          url: "Asrar-files/sendEmail.php",
          type: "POST",
          data: data,
          success: function (response) {
            console.log("Successfully send email");
           
          }
        });
      }
      successAlert();
      }, 2100);
   
   
  }
}

// len = response.length;
//       console.log(len);
//       for (var i = 0; i < len; i++) {

//           name = response[i].studentName;
//           studentEmail=response[i].studentEmail;
//           console.log("email "+studentEmail);
//           canvas = document.querySelector('#canvas');
//           ctx.clearRect(0, 0, canvas.width, canvas.height);
//           updateStampLoction();
//           canvas = document.querySelector('#canvas');
//           canvasData = canvas.toDataURL("image/png");
//           console.log("sending email");
//            data={
//              'data':{
//               certificate: canvasData,
//               email: studentEmail
//              }

// function saveZip() {
//   image = new Image();
//   image.src = data;
//   var imgUrl;
//   var zip = new JSZip();
//   for (let i = 0; i < names.length; i++) {
//     name = names[i];
//     ctx.clearRect(0, 0, canvas.width, canvas.height);
//     onLoadImg(x, y);
//     imgUrl = c.toDataURL();
//     zip.file("certificate" + [i + 1] + ".png", imgUrl.split("base64,")[1], {
//       base64: true,
//     });
//   }

//   zip
//     .generateAsync({
//       type: "blob",
//     })
//     .then(function (content) {
//       // see FileSaver.js
//       saveAs(content, "Certificates.zip");
//     });
// }
