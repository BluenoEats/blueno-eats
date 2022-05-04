var slideIndex = 1;
var timer = null;
showDivs(slideIndex);

function plusDivs(n) {
    clearTimeout(timer);
    showDivs(slideIndex += n);
}

function currentDiv(n) {
    clearTimeout(timer);
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n == undefined) {
        n = ++slideIndex;
    }
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    timer = setTimeout(showDivs, 4000); // Change image every 2 seconds
}
