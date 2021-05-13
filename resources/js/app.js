require('./bootstrap');

let firstOptionalForm = document.getElementById("form-2");
let secondOptionalForm = document.getElementById("form-3");
let addButton = document.getElementById("add-button");

addButton.onclick = function showOptionalForm() {
  if (firstOptionalForm.style.display === "none") {
    firstOptionalForm.style.display = "block";
  } else {
    secondOptionalForm.style.display = "block";
  }
};
