var c = document.querySelector("#canvas");
var ctx = c.getContext("2d");
var image = new Image();
var file;
var data;
var name = " قم بالكتابة ";
var names = ["asrar"];
colorWell = document.querySelector("#colorWell");
ctx.textAlign = "center";
var color = "#000000";
var size = 30;
ctx.fillStyle = color;
var x = 500;
var y = 300;
var text = [];
var index = 0;
var data = "Asrar-files/templateCertificate.png";
image.onload = () => {
  window.imageSrc = this;
  onLoadImg(x, y);
};

image.src = data;

image.onload = () => {
  onLoadImg(x, y);
};
function addText() {
  var textMsg = document.querySelector("#text-message").value;
  let element = [textMsg, x, y, color, size];
  index = text.push(element) - 1;
  addToSelect(textMsg);
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  image.onload = () => {
    onLoadImg(x, y);
  };
  image.src = data;
  x += 50;
  y += 50;
  document.querySelector("#text-message").value = "";
  Swal.fire({
    icon: "success",
    title: "تم إضافة النص بنجاح",
    showConfirmButton: false,
    timer: 2000
  });
}
function addToSelect(text) {
  var select = document.querySelector("#text-array");
  select.innerHTML +=
    '<option class="text-right" value="' + index + '" >' + text + "</option>";
}

function onLoadImg(x, y) {
  var width = image.naturalWidth;
  var height = image.naturalHeight;
  c.width = width;
  c.height = height;
  ctx.drawImage(image, 0, 0, width, height);
  c.setAttribute("dir", "ltr");
  ctx.direction = "rtl";
  for (var ii = 0; ii < text.length; ii++) {
    ctx.font = text[ii][4] + "px Comic Sans MS";
    ctx.fillStyle = text[ii][3];
    ctx.fillText(text[ii][0], text[ii][1], text[ii][2]);
  }
}
document.querySelector("#text-array").addEventListener("change", event => {
  index = event.target.value;
});

function sizeD() {
  let sizeText = text[index][4];
  sizeText -= 1;
  text[index][4] = sizeText;
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  image.onload = () => {
    onLoadImg(text[index][1], text[index][2]);
  };
  image.src = data;
}

function sizeI() {
  let sizeText = text[index][4];
  sizeText += 1;
  text[index][4] = sizeText;
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  image.onload = () => {
    onLoadImg(text[index][1], text[index][2]);
  };
  image.src = data;
}

function up() {
  let yy = text[index][2];
  yy -= 10;
  text[index][2] = yy;
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  image.onload = () => {
    onLoadImg(text[index][1], text[index][2]);
  };
  image.src = data;
}

function down() {
  let yy = text[index][2];
  yy += 10;
  text[index][2] = yy;
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  image.onload = () => {
    onLoadImg(text[index][1], text[index][2]);
  };
  image.src = data;
}

function right() {
  let xx = text[index][1];
  xx += 10;
  text[index][1] = xx;
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  image.onload = () => {
    onLoadImg(text[index][1], text[index][2]);
  };
  image.src = data;
}

function left() {
  let xx = text[index][1];
  xx -= 10;
  text[index][1] = xx;
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  image.onload = () => {
    onLoadImg(text[index][1], text[index][2]);
  };
  image.src = data;
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
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  image.onload = () => {
    onLoadImg(x, y);
  };
  image.src = data;
}

colorWell.addEventListener("input", () => {
  color = event.target.value;
  text[index][3] = color;
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  image.onload = () => {
    onLoadImg(x, y);
  };
  image.src = data;
});

function addName() {
  name = document.getElementById("name").value;
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  image.onload = () => {
    onLoadImg(x, y);
  };
  image.src = data;
}

function addNames() {
  names = document.getElementById("names").value.split("\n");
  // ctx.clearRect(0, 0, canvas.width, canvas.height);
  // image.onload = () => {
  //   onLoadImg(x, y);
  // }
  // image.src = data;
}

function saveEveryName(StudentName) {
  name = StudentName;
}

function saveZip() {
  image = new Image();
  image.setAttribute("crossOrigin", "anonymous");
  image.src = data;
  var imgUrl;
  // var zip = new JSZip();
  for (let i = 0; i < names.length; i++) {
    name = names[i];
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    onLoadImg(x, y);
    // image.setAttribute('crossOrigin', 'anonymous');
    // image.crossOrigin = '*';
    // image.src = data;

    imgUrl = c.toDataURL();
    // zip.file("certificate" + [i + 1] + ".png", imgUrl.split("base64,")[1], {
    //   base64: true
    // });
  }

  // zip.generateAsync({ type: "blob" }).then(function(content) {
  //   // see FileSaver.js
  //   saveAs(content, "Certificates.zip");
  // });
}

function sendCertificate() {
  var pngUrl = c.toDataURL();
}
