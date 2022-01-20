var images = [
    'img/place4.jpeg',
    'img/place3.jpeg',
    'img/place2.jpeg',
    'img/placeholding.png',
    'upload/IMG_9088.JPG',
];

var n = images.length;
var index = 0;

function changeImg(direction) {
    //change the index when the button is clicked
    if (direction === 'left') {
        if (index === 0) {
            index = (n - 1);
        } else {
            index--;
        }
    }

    if (direction === 'right') {
        if (index === n - 1) {
            index = 0;
        } else {
            index++;
        }
    }

    //showing the images
    for (let i = 0; i < 4; i++) {
        if (index + i >= n) {
            document.getElementById("slide-im" + (i+1)).src = images[index + i - n];
        } else {
            document.getElementById("slide-im" + (i+1)).src = images[index + i];
        }
    }
}