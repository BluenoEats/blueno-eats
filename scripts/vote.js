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

function upvote(review_id, original_votes) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      const upvote = document.getElementById("upvote-"+review_id);
      const downvote = document.getElementById("downvote-"+review_id);
      const votenum = document.getElementById("votenum-"+review_id);

      upvote.classList.toggle('active');
      downvote.classList.remove('active');
      votenum.textContent = original_votes + upvote.classList.contains('active') ? 1 : 0;
    }
  };
  xhttp.open("POST", "functions/vote.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("review_id="+review_id+"&vote=1");
}

function downvote(review_id, original_votes) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText == "1") {
        const upvote = document.getElementById("upvote-"+review_id);
        const downvote = document.getElementById("downvote-"+review_id);
        const votenum = document.getElementById("votenum-"+review_id);

        downvote.classList.toggle('active');
        upvote.classList.remove('active');
        votenum.textContent = original_votes + downvote.classList.contains('active') ? -1 : 0;
      }
    }
  };
  xhttp.open("POST", "functions/vote.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("review_id="+review_id+"&vote=-1");
}
