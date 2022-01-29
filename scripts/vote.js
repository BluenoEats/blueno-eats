let numVotes = 0;
const upvote = document.getElementById("upvote");
const downvote = document.getElementById("downvote");
const votenum = document.getElementById("votenum");

upvote.addEventListener('click', event => {
    if (!(upvote.classList.contains('active') || downvote.classList.contains('active'))){
        numVotes++;
    }
    else if (downvote.classList.contains('active')) {
        downvote.classList.toggle('active');
        numVotes += 2;
    }
    else if (upvote.classList.contains('active')) {
        numVotes--;
    }
    upvote.classList.toggle('active');
    votenum.textContent = numVotes;
});

downvote.addEventListener('click', event => {
    if (!(upvote.classList.contains('active') || downvote.classList.contains('active'))){
        numVotes--;
    }
    else if (upvote.classList.contains('active')) {
        upvote.classList.toggle('active');
        numVotes -= 2;
    }
    else if (downvote.classList.contains('active')) {
        numVotes++;
    }
    downvote.classList.toggle('active');
    votenum.textContent = numVotes;
});
