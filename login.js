config = {
  enableTime: true,
  dateFormat: "Y-m-d H:1",
  altInput: true,
  altFormat: "F j, Y (h:S K)",
  minDate: "today",
  mode: "multiple",
  conjunction: "        TO      ",
};

flatpickr(".datetime", config);

document.getElementById("timeInput").ariaValueMax;

const loginButton = document.getElementById("loginButton");
const loginPanel = document.getElementById("loginPanel");

loginButton.addEventListener("click", function () {
  if (loginPanel.style.display === "none") {
    loginPanel.style.display === "absolute";
  } /*else {
    loginPanel.style.display = "none";
  }
    */
});
