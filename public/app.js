let firstOptionalForm = document.getElementById("form-2");
let secondOptionalForm = document.getElementById("form-3");
let addButton = document.getElementById("add-button");
let removeButton = document.getElementById("remove-button");

addButton.onclick = function showOptionalForm() {
  if (firstOptionalForm.style.display === "none") {
    firstOptionalForm.style.display = "block";
    removeButton.style.display = "inline";
  } else {
    secondOptionalForm.style.display = "block";
    addButton.style.visibility = "hidden";
  }
};

removeButton.onclick = function removeOptionalForm() {
  if (secondOptionalForm.style.display === "block") {
    secondOptionalForm.style.display = "none";
    addButton.style.visibility = "visible";
  } else {
    firstOptionalForm.style.display = "none";
    removeButton.style.display = "none";
  }
};
