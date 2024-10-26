document.getElementById("demo").innerHTML = "Hello world";

document.getElementById("btn1").onclick = function () {
  document.getElementById("demo").innerHTML = "Clicked";
};

const find = document.querySelector("demo");

document.getElementById("btn2").onclick = function () {
  document.getElementById("mousepic").src = "rat.jpg";
};

document.getElementById("date").innerHTML = "Date: " + Date();

function validateForm() {
  let x = document.forms["myForm"]["input"].value;

  if (x <= 10) {
    window.alert("OK");
    return true;
  } else {
    window.alert("Error");
    return false;
  }
}
const x = document.getElementById("clickMe");

document.getElementById("changeColor").onclick = function () {
  document.getElementById("changeColor").style.backgroundColor = "blue";
  document.getElementById("changeColor").style.color = "white";
};

document.getElementById("clickMe").onclick = function () {
  document.getElementById("clickMe").style.backgroundColor = "BLue";
  // document.getElementById("clickMe").innerHTML = "Thank you!";
  document.getElementById("clickMe").innerHTML = "Date: " + Date();
};

if (
  (document.getElementById("clickMe").onmouseover = function () {
    x.innerHTML = "NOWW!!!!!!!!!";
  })
);
if (
  (document.getElementById("clickMe").onmouseout = function () {
    x.innerHTML = "ClICK ME";
  })
);

document
  .getElementById("eventListener")
  .addEventListener("mouseover", function () {
    window.alert("EventListener Works");
  });
