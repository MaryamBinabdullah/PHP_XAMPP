const errorDiv = document.getElementById("error");
const hideButton = document.getElementById("x");
const showButton = document.getElementById("showButton");

hideButton.addEventListener("click", function () {
  errorDiv.style.display = "none";
  showButton.style.display = "block"; // Show the button to display the error again
});

showButton.addEventListener("click", function () {
  errorDiv.style.display = "block";
  showButton.style.display = "none"; // Hide the button after showing the error
});
