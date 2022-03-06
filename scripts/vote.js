// function upvote(review_id) {
//   const upvote = document.getElementById("upvote-"+review_id);
//   const downvote = document.getElementById("downvote-"+review_id);
//   const votenum = document.getElementById("votenum-"+review_id);
//   let numVotes = parseInt(votenum.textContent, 10);
//   if (!(upvote.classList.contains('active') || downvote.classList.contains('active'))){
//       numVotes++;
//   }
//   else if (downvote.classList.contains('active')) {
//       downvote.classList.toggle('active');
//       numVotes += 2;
//   }
//   else if (upvote.classList.contains('active')) {
//       numVotes--;
//   }
//   upvote.classList.toggle('active');
//   votenum.textContent = numVotes;
// }
//
// function downvote(review_id) {
//   const upvote = document.getElementById("upvote-"+review_id);
//   const downvote = document.getElementById("downvote-"+review_id);
//   const votenum = document.getElementById("votenum-"+review_id);
//   let numVotes = parseInt(votenum.textContent, 10);
//   if (!(upvote.classList.contains('active') || downvote.classList.contains('active'))){
//       numVotes--;
//   }
//   else if (upvote.classList.contains('active')) {
//       upvote.classList.toggle('active');
//       numVotes -= 2;
//   }
//   else if (downvote.classList.contains('active')) {
//       numVotes++;
//   }
//   downvote.classList.toggle('active');
//   votenum.textContent = numVotes;
// }

function upvote(review_id, original_votes, control) {
  const upvote = control.getElementsByClassName("upvote")[0];
  const downvote = control.getElementsByClassName("downvote")[0];
  const votenum = control.getElementsByClassName("votenum")[0];

  upvote.classList.toggle('active');
  downvote.classList.remove('active');
  let vote = upvote.classList.contains('active') ? 1 : 0;
  votenum.textContent = original_votes + vote;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    }
  };
  xhttp.open("POST", "functions/vote.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("review_id="+review_id+"&vote="+vote);
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
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    }
  };
  xhttp.open("POST", "functions/vote.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("review_id="+review_id+"&vote="+vote);
}

function setVoteButtons() {
  const reviews = document.getElementsByClassName("user-comment");
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
console.log("completed");