function upvote(review_id, original_votes, control) {
  const upvote = control.getElementsByClassName("upvote")[0];
  const downvote = control.getElementsByClassName("downvote")[0];
  const votenum = control.getElementsByClassName("votenum")[0];

  upvote.classList.toggle('active');
  downvote.classList.remove('active');
  let vote = upvote.classList.contains('active') ? 1 : 0;
  votenum.textContent = original_votes + vote;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
    }
  };
  xhttp.open("POST", "functions/vote.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("review_id=" + review_id + "&vote=" + vote);
}

function downvote(review_id, original_votes, control) {
  const upvote = control.getElementsByClassName("upvote")[0];
  const downvote = control.getElementsByClassName("downvote")[0];
  const votenum = control.getElementsByClassName("votenum")[0];

  downvote.classList.toggle('active');
  upvote.classList.remove('active');
  let vote = downvote.classList.contains('active') ? -1 : 0;
  votenum.textContent = original_votes + vote;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
    }
  };
  xhttp.open("POST", "functions/vote.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("review_id=" + review_id + "&vote=" + vote);
}

function setVoteButtons() {
  const reviews = document.querySelectorAll('.user-comment,.my-comment')
  // const reviews = document.getElementsByClassName("user-comment");

  // TODO: get vote num from server
  for (let i = 0; i < reviews.length; i++) {
    const review_id = reviews[i].id;
    const control = reviews[i].getElementsByClassName("comment-control")[0];
    const upvote_button = control.getElementsByClassName("upvote")[0];
    const downvote_button = control.getElementsByClassName("downvote")[0];
    let vote = 0;
    if (upvote_button.classList.contains("active"))
      vote = 1;
    else if (downvote_button.classList.contains("active"))
      vote = -1;
    const original_vote_num = parseInt(control.getElementsByClassName("votenum")[0].innerHTML) - vote;
    upvote_button.addEventListener("click", () => upvote(review_id, original_vote_num, control));
    downvote_button.addEventListener("click", () => downvote(review_id, original_vote_num, control));
  }
}

setVoteButtons();
