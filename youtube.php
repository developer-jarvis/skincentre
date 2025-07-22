<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<style>
    .youtube-section {
        padding: 60px 0;
    }

    .youtubeSwiper {
        position: relative;
    }

    .youtubeSwiper .swiper-button-next,
    .youtubeSwiper .swiper-button-prev {
        color: var(--tertiary-color);
        border-radius: 50%;
        width: 40px;
        height: 40px;
        top: 45%;
    }

    .youtubeSwiper iframe {
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
</style>

<section class="youtube-section bg-light">
    <div class="container">
        <div class="head-title mb-4">
            <h2 class="">Our Latest Videos</h2>
            <p>Catch up with our latest updates and health tips on YouTube</p>
        </div>

        <div class="swiper youtubeSwiper">
            <div class="swiper-wrapper" id="youtube-slider"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<script>
    fetch("youtube-videos.php")
        .then(res => res.json())
        .then(videos => {
            let html = "";
            videos.forEach(video => {
                html += `<div class="swiper-slide">
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/${video.videoId}" 
                    title="${video.title}" frameborder="0" allowfullscreen></iframe>
                </div>`;
            });

            document.getElementById("youtube-slider").innerHTML = html;

            new Swiper(".youtubeSwiper", {
                slidesPerView: 1,
                spaceBetween: 20,
                autoplay: {
                    delay: 3000
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2
                    },
                    992: {
                        slidesPerView: 3
                    }
                },
                loop: true,
                navigation: {
                    nextEl: '.youtubeSwiper .swiper-button-next',
                    prevEl: '.youtubeSwiper .swiper-button-prev',
                },
            });
        });
</script>