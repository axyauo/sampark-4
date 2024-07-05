<?php
include "header.php";
?>
<section class="hero-banner">
    <div class="overlay-banner">
        <h2>Gallery</h2>
    </div>
</section>
<section class="stay-connected my-5">
    <div class="container">
        <div class="connected">
            <h2>Our <span>Gallery</span></h2>
            <p class="mb-4">Our cultural gallery is a kaleidoscope of traditions, celebrations, and performances. Experience the joy and energy of our festivals, talent shows, and cultural days that bring together students from diverse backgrounds to celebrate their heritage and creativity.</p>
        </div>
    </div>
</section>
<section>
    <div class="gallery">
        <div class="gallery-item" onclick="openModal(0)">
            <img src="./assets/images/g2.png">
        </div>
        <div class="gallery-item" onclick="openModal(1)">
            <img src="./assets/images/g3.png">
        </div>
        <div class="gallery-item" onclick="openModal(2)">
            <img src="./assets/images/g4.png">
        </div>
        <div class="gallery-item" onclick="openModal(3)">
            <img src="./assets/images/g5.png">
        </div>
    </div>
    <div id="modal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <div class="modal-content">
            <div class="modal-left">
                <img id="modal-img" src="" alt="Modal Image">
            </div>
            <div class="modal-right">
                <p id="modal-text"></p>
                <button class="nav-btn" onclick="prevImage()">&#9664;</button>
                <button class="nav-btn" onclick="nextImage()">&#9654;</button>
            </div>
        </div>
    </div>
</section>
<script>
    const images = [{
            src: './assets/images/g2.png',
            text: '64th orientatio.'
        },
        {
            src: './assets/images/g3.png',
            text: 'image'
        },
        {
            src: './assets/images/g4.png',
            text: 'Political Science.'
        },
        {
            src: './assets/images/g5.png',
            text: 'image'
        },

    ];
    let currentIndex = 0;

    function openModal(index) {
        currentIndex = index;
        document.getElementById('modal-img').src = images[index].src;
        document.getElementById('modal-text').innerText = images[index].text;
        document.getElementById('modal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('modal').style.display = 'none';
    }

    function prevImage() {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;
        updateModal();
    }

    function nextImage() {
        currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
        updateModal();
    }

    function updateModal() {
        document.getElementById('modal-img').src = images[currentIndex].src;
        document.getElementById('modal-text').innerText = images[currentIndex].text;
    }
</script>
<?php
include "footer.php";
?>