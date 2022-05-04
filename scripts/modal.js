function show_all_img() {
    document.getElementById("all-food-modal-body").style.display = "block";
    document.getElementById("all-img-zoom").style.display = "none";
}

function create_all_image_modal() {
    for (let i = 0; i < n; i++) {
        let img = document.createElement("img");
        img.src = images[i];
        img.className = "all-image-style";
        img.addEventListener('click', function (event) {
            document.getElementById("all-food-modal-body").style.display = "none";
            document.getElementById("all-img-zoom").style.display = "block";
            document.getElementById("zoomed-img").src = img.src;
        });
        document.getElementById("all-food-modal-body").appendChild(img);
    }
}

var count = 0;

function openModal(n) {
    document.getElementById(n).style.display = "block";

    if ((n === 'all-food-modal') && (count === 0)) {
        create_all_image_modal();
        count++;
    }
}

function openSlideModal(n, i) {
    document.getElementById("zoom-myImg").src = document.getElementById("slide-im" + i).src;
    document.getElementById(n).style.display = "block";
}

function closeModal(n) {
    document.getElementById(n).style.display = "none";
}

var wr_modal = document.getElementById("wr-modal");
var food_pic_modal = document.getElementById("food-pic-modal");
var report_modal = document.getElementById("report-modal");
var all_food_modal = document.getElementById("all-food-modal");
// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == wr_modal) {
        wr_modal.style.display = "none";
    }
    if (event.target == food_pic_modal) {
        food_pic_modal.style.display = "none";
    }
    if (event.target == report_modal) {
        report_modal.style.display = "none";
    }
    if (event.target == all_food_modal) {
        all_food_modal.style.display = "none";
    }
}