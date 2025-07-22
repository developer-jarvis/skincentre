<style>
    .testimonial-card {
        background: #fff;
        border-radius: 12px;
        position: relative;
        border-bottom: 5px solid #dc3545;
    }

    .testimonial-card .quote-icon {
        font-size: 30px;
        color: #dc3545;
        margin-bottom: 10px;
    }

    .testimonial-card .stars {
        color: #ffc107;
        font-size: 18px;
    }

    .swiper-slide {
        padding: 15px;
    }
</style>


<!-- Testimonials Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="head-title mb-4 text-center">
                <p>Testimonials</p>
                <h2>What Our Clients Say</h2>
            </div>

            <!-- Swiper -->
            <div class="swiper testimonialSwiper">
                <div class="swiper-wrapper">

                    <!-- Testimonial Card 1 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card p-4 text-center rounded-4 shadow-sm">
                            <div class="quote-icon">❝</div>
                            <p class="testimonial-text mb-3">Very professional and affordable deep cleaning service. My
                                kitchen looks brand new!</p>
                            <div class="stars mb-2">⭐⭐⭐⭐⭐</div>
                            <h6 class="mb-0 fw-bold">Neha Sharma</h6>
                            <small class="text-muted">Homeowner, Gurgaon</small>
                        </div>
                    </div>

                    <!-- Testimonial Card 2 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card p-4 text-center rounded-4 shadow-sm">
                            <div class="quote-icon">❝</div>
                            <p class="testimonial-text mb-3">Timely service and good staff behavior. Recommended for
                                office cleaning.</p>
                            <div class="stars mb-2">⭐⭐⭐⭐</div>
                            <h6 class="mb-0 fw-bold">Amit Verma</h6>
                            <small class="text-muted">Office Manager</small>
                        </div>
                    </div>

                    <!-- Testimonial Card 3 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card p-4 text-center rounded-4 shadow-sm">
                            <div class="quote-icon">❝</div>
                            <p class="testimonial-text mb-3">Booked them for sofa & bathroom cleaning. Amazing results
                                and budget-friendly.</p>
                            <div class="stars mb-2">⭐⭐⭐⭐⭐</div>
                            <h6 class="mb-0 fw-bold">Priya Desai</h6>
                            <small class="text-muted">Freelancer</small>
                        </div>
                    </div>

                    <!-- Add more testimonials as needed -->
                </div>
            </div>
        </div>
    </div>
</section>


<!-- SwiperJS CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".testimonialSwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        breakpoints: {
            576: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
        },
    });
</script>