<div class="food-imgs">
    <div class="food-imgs-row">
        <div class="food-imgs-col">
        <img src="img/place4.jpeg" style="width:100%" onclick="openModal('food-pic-modal');currentSlide(1)" class="hover-shadow cursor">
        </div>
        <div class="food-imgs-col">
        <img src="img/place3.jpeg" style="width:100%" onclick="openModal('food-pic-modal');currentSlide(2)" class="hover-shadow cursor">
        </div>
        <div class="food-imgs-col">
        <img src="img/place2.jpeg" style="width:100%" onclick="openModal('food-pic-modal');currentSlide(3)" class="hover-shadow cursor">
        </div>
        <div class="food-imgs-col">
        <img src="img/placeholding.png" style="width:100%" onclick="openModal('food-pic-modal');currentSlide(4)" class="hover-shadow cursor">
        </div>
    </div>

    <div id="food-pic-modal" class="modal">
    <span class="close" onclick="closeModal('food-pic-modal')">&times;</span>
    <div class=" modal-content">
        <div class="food-imgs-slide">
            <div class="food-imgs-numtext">1 / 4</div>
            <img src="img/place4.jpeg" style="width:100%">
        </div>
        <div class="food-imgs-slide">
            <div class="food-imgs-numtext">2 / 4</div>
            <img src="img/place3.jpeg" style="width:100%">
        </div>
        <div class="food-imgs-slide">
            <div class="food-imgs-numtext">3 / 4</div>
            <img src="img/place2.jpeg" style="width:100%">
        </div>
        <div class="food-imgs-slide">
            <div class="food-imgs-numtext">4 / 4</div>
            <img src="img/placeholding.png" style="width:100%">
        </div>
        <a class="food-imgs-prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="food-imgs-next" onclick="plusSlides(1)">&#10095;</a>
        <div class="food-imgs-caption-container">
            <p id="caption"></p>
        </div>

        <div class="food-imgs-col">
            <img class="food-imgs-cur cursor" src="img/place4.jpeg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
        </div>
        <div class="food-imgs-col">
            <img class="food-imgs-cur cursor" src="img/place3.jpeg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
        </div>
        <div class="food-imgs-col">
            <img class="food-imgs-cur cursor" src="img/place2.jpeg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
        </div>
        <div class="food-imgs-col">
            <img class="food-imgs-cur cursor" src="img/placeholding.png" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
        </div>
    </div>
    </div>
</div>
<p> See all images </p>