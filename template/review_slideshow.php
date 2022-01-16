<div class="food-body food-imgs">
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
    <div class=" modal-content">
        <span class="close" onclick="closeModal('food-pic-modal')">&times;</span>
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

        <div class="food-imgs-col">
            <img class="food-imgs-cur cursor" src="img/place4.jpeg" style="width:100%" onclick="currentSlide(1)" alt="Food example 1">
        </div>
        <div class="food-imgs-col">
            <img class="food-imgs-cur cursor" src="img/place3.jpeg" style="width:100%" onclick="currentSlide(2)" alt="Food example 2">
        </div>
        <div class="food-imgs-col">
            <img class="food-imgs-cur cursor" src="img/place2.jpeg" style="width:100%" onclick="currentSlide(3)" alt="Food example 3">
        </div>
        <div class="food-imgs-col">
            <img class="food-imgs-cur cursor" src="img/placeholding.png" style="width:100%" onclick="currentSlide(4)" alt="Food example 4">
        </div>
    </div>
    </div>
    <p> See all images </p>
</div>