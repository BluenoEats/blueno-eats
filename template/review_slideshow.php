<div class="food-body food-imgs">
    <div class="food-imgs-row">
        <div class="food-imgs-col">
        <img id="slide-im1" src="img/place4.jpeg" style="width:100%" onclick="openSlideModal('zoom-img','1')" class="hover-shadow">
        </div>
        <div class="food-imgs-col">
        <img id="slide-im2" src="img/place3.jpeg" style="width:100%" onclick="openSlideModal('zoom-img','2')" class="hover-shadow">
        </div>
        <div class="food-imgs-col">
        <img id="slide-im3" src="img/place2.jpeg" style="width:100%" onclick="openSlideModal('zoom-img','3')" class="hover-shadow">
        </div>
        <div class="food-imgs-col">
        <img id="slide-im4" src="img/placeholding.png" style="width:100%" onclick="openSlideModal('zoom-img','4')" class="hover-shadow">
        </div>
    </div>
    <div class="img-control">
        <button type="button" class="all-btn all-left" onclick="changeImg('left')"><i class="fas fa-angle-double-left"></i></button>
        <button onclick="openModal('all-food-modal')" class="all-img"> See all image here </button>
        <button type="button" class="all-btn all-right" onclick="changeImg('right')"><i class="fas fa-angle-double-right"></i></i></button>
        <script src="scripts/array-slide.js" type="text/javascript"></script>
    </div>

    <div id="all-food-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="closeModal('all-food-modal')"><i class="fas fa-times"></i></span>
            </div>
            <div class="modal-body" id="all-food-modal-body"></div>
            <div id="all-img-zoom">
                <span class="back-all"><i class="far fa-arrow-alt-circle-left" onclick="show_all_img()"></i> View Image Gallery</span>
                <img id="zoomed-img" class="zoompic">
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div id="zoom-img" class="modal">
        <span class="close" onclick="closeModal('zoom-img')"><i class="fas fa-times"></i></span>
        <img id="zoom-myImg" class="zoompic">
        <a class="food-imgs-prev" onclick="changeZoomImg('left')"><i class="fas fa-angle-double-left"></i></a>
        <a class="food-imgs-next"onclick="changeZoomImg('right')"><i class="fas fa-angle-double-right"></i></a>
        <script src="scripts/zoom-slide.js" type="text/javascript"></script>
    </div>

</div>




<!--hello
    <div id="food-pic-modal" class="modal">
    <div class=" modal-content">
        <span class="close" onclick="closeModal('food-pic-modal')"><i class="fas fa-times"></i></span>
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
    -->
