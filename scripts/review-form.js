function send_form() {
    const urlSearchParams = new URLSearchParams(window.location.search);
    const params = Object.fromEntries(urlSearchParams.entries());
    var author_id = 33774 // temporary val
    var dish_id = urlSearchParams.get('dish')
    var rating = document.getElementsByClassName("rating__star fas fa-star").length;
    var content = document.getElementById("review-msg").value;

    var xhttp = new XMLHttpRequest();
    // assuming all fields are filled
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("response").innerHTML = this.responseText;
      }
    };

    xhttp.open("GET", "write_review.php?author="+author_id+"&dish="+dish_id+"&rating="+rating+"&review-msg="+content, true);
    xhttp.send();
   }