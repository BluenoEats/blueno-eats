var images = [
    'img/place4.jpeg',
    'img/place3.jpeg',
    'img/place2.jpeg',
    'img/placeholding.png',
    'upload/IMG_9088.JPG',
];

var n = images.length;

function changeZoomImg(direction) {
    //change the index when the button is clicked
    var x = document.getElementById('zoom-myImg').src;
    x = 'img' + x.split('/img')[1];

    var index = images.indexOf(x);
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
    document.getElementById('zoom-myImg').src = images[index];
}