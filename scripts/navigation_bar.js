function menu() {
    var x = document.getElementById("myNavbar");
    if (x.className === "nav") {
      x.className += " responsive";
    } else {
      x.className = "nav";
    }
  }

  if (window.innerWidth < 480) {
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropbtn");
    var i;
    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
  } else {
    var dropdown = document.getElementsByClassName("dropbtn");
    var i;
    for (i = 0; i < dropdown.length; i++) {
      if (dropdown[i].classList.contains('active')) {
        dropdown[i].classList.toggle('active');
      }
    }
  }