let numVotes = 0;
const upvote = document.getElementById("upvote")
const downvote = document.getElementById("downvote")
const votenum = document.getElementById("votenum")

upvote.addEventListener('click', event => {
    if (!(upvote === document.activeElement || downvote === document.activeElement)){
        numVotes++;
    }
    else if (downvote === document.activeElement) {
        downvote.classList.toggle('active');
        numVotes += 2;
    }
    else if (upvote === document.activeElement) {
        numVotes--;
    }
    upvote.classList.toggle('active');
    votenum.textContent = numVotes;
});

downvote.addEventListener('click', event => {
    if (!(upvote === document.activeElement || downvote === document.activeElement)){
        numVotes--;
    }
    else if (upvote === document.activeElement) {
        upvote.classList.toggle('active');
        numVotes -= 2;
    }
    else if (downvote === document.activeElement) {
        numVotes++;
    }
    downvote.classList.toggle('active');
    votenum.textContent = numVotes;
});