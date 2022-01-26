<script src="scripts/zoom-slide.js" type="text/javascript"></script>

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
                <a class="food-imgs-prev" onclick="changeZoomImg('left', 'zoomed-img')"><i class="fas fa-angle-double-left"></i></a>
                <a class="food-imgs-next" onclick="changeZoomImg('right', 'zoomed-img')"><i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div id="zoom-img" class="modal">
        <span class="close" onclick="closeModal('zoom-img')"><i class="fas fa-times"></i></span>
        <img id="zoom-myImg" class="zoompic">
        <a class="food-imgs-prev" onclick="changeZoomImg('left', 'zoom-myImg')"><i class="fas fa-angle-double-left"></i></a>
        <a class="food-imgs-next" onclick="changeZoomImg('right', 'zoom-myImg')"><i class="fas fa-angle-double-right"></i></a>
    </div>
    
</div>
