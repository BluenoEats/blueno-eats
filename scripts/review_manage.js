function ellipsis(id) {
  document.getElementById("ellipsis-content-"+id).classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.ellipsis-btn')) {
    var dropdowns = document.getElementsByClassName("ellipsis-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function delete_review(review_id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById(this.responseText).remove();
    }
  };
  xhttp.open("POST", "functions/delete_review.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("review_id="+review_id);
}