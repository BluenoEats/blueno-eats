function openModal(n) {
  document.getElementById(n).style.display = "block";
}
function closeModal(n) {
  document.getElementById(n).style.display = "none";
}

var wr_modal = document.getElementById("wr-modal");
var food_pic_modal = document.getElementById("food-pic-modal");
var food_pic_modal = document.getElementById("report-modal");
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == wr_modal) {
    wr_modal.style.display = "none";
  }
  if (event.target == food_pic_modal) {
    food_pic_modal.style.display = "none";
  }
  if (event.target == report_modal) {
    report_modal.style.display = "none";
  }
}