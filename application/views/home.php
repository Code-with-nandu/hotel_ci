<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> liVIN HOTEL:CI:HOME</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- Essencial Link  -->
    <?php require('inc/links.php') ?>

</head>
<!-- Header Part Added -->
<?php require('inc/header.php') ?>


    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo base_url() ?>assets/images/carousel/IMG_15372.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo base_url() ?>assets/images/carousel/IMG_40905.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo base_url() ?>assets/images/carousel/IMG_55667.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo base_url() ?>assets/images/carousel/IMG_62045.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo base_url() ?>assets/images/carousel/IMG_93127.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo base_url() ?>assets/images/carousel/IMG_99736.png" class="w-100 d-block">
                </div>
            </div>

        </div>

    </div>

    <!-- Chacking avibiltity  -->
    <div class="container avibiltity-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">

                <h5 mb-4>Checking booking Availabelity</h5>
                <form action="">
                    <div class="row  align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500">Check-in</label>
                            <input type="date" id="dob" name="dob" class="form-control">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500">Check-out</label>
                            <input type="date" id="dob" name="dob" class="form-control">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500">Adult</label>
                            <select name="" id="" class="form-select">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Tow</option>
                                <option value="3">Three</option>
                            </select>

                        </div>
                        <div class="col-lg-2  mb-3">
                            <label class="form-label" style="font-weight:500">Child</label>
                            <select name="" id="" class="form-select">
                                <option selected> Select menu</option>
                                <option value="1">One</option>
                                <option value="2">Tow</option>
                                <option value="3">Three</option>
                            </select>

                        </div>
                        <div class="col-lg-1  mb-3">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Ours Rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto; ">
                    <img src="<?php echo base_url() ?>assets/images/rooms/1.jpg" alt="" class="card-imag-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">RS 200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                            </span>

                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                WIFI
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Telivision
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room Heater
                            </span>

                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-evenly  mb-2">
                            <a href="" class="btn btn-sm text-white custom-bg">Book Now</a>
                            <a href="" class="btn btn-sm btn-outline-dark">More Details</a>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto; ">
                    <img src="<?php echo base_url() ?>assets/images/rooms/1.jpg" alt="" class="card-imag-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">RS 200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                            </span>

                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                WIFI
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Telivision
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room Heater
                            </span>

                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-evenly  mb-2">
                            <a href="" class="btn btn-sm text-white custom-bg">Book Now</a>
                            <a href="" class="btn btn-sm btn-outline-dark">More Details</a>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto; ">
                    <img src="<?php echo base_url() ?>assets/images/rooms/1.jpg" alt="" class="card-imag-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">RS 200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                            </span>

                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                WIFI
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Telivision
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room Heater
                            </span>

                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-evenly  mb-2">
                            <a href="" class="btn btn-sm text-white custom-bg">Book Now</a>
                            <a href="" class="btn btn-sm btn-outline-dark">More Details</a>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold">More Rooms>>>></a>
            </div>
        </div>
    </div>


    <!-- Our facilities  -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR Facilities</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="<?php echo base_url() ?>assets/images/facilities/wifi.svg" width="80px" alt="">
                <div class="mt-3">WIFI</div>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="<?php echo base_url() ?>assets/images/facilities/IMG_27079.svg" width="80px" alt="">
                <div class="mt-3">Room Heater</div>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="<?php echo base_url() ?>assets/images/facilities/IMG_41622.svg" width="80px" alt="">
                <div class="mt-3">TV</div>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="<?php echo base_url() ?>assets/images/facilities/IMG_47816.svg" width="80px" alt="">
                <div class="mt-3">Ayrveda services</div>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="<?php echo base_url() ?>assets/images/facilities/IMG_96423.svg" width="80px" alt="">
                <div class="mt-3">AC</div>
            </div>

        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold">More facilities>>>></a>
        </div>
    </div>




    <!-- Our TESTIMNILLS  -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
    <div class="container mt-5">
        <!-- Swiper -->
        <div class="swiper myTestimonils">
            <div class="swiper-wrapper mb-5 ">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3 ">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" width="150px" />
                        <h6 m-o ms-2>Random User1</h6>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero doloremque perferendis quibusdam voluptates magnam pariatur accusantium, dignissimos repellat veritatis obcaecati.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>

                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3 ">
                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" width="150px" />
                        <h6 m-o ms-2>Random User1</h6>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero doloremque perferendis quibusdam voluptates magnam pariatur accusantium, dignissimos repellat veritatis obcaecati.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>

                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3 ">
                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" width="150px" />
                        <h6 m-o ms-2>Random User1</h6>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero doloremque perferendis quibusdam voluptates magnam pariatur accusantium, dignissimos repellat veritatis obcaecati.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>

                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3 ">
                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" width="150px" />
                        <h6 m-o ms-2>Random User1</h6>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero doloremque perferendis quibusdam voluptates magnam pariatur accusantium, dignissimos repellat veritatis obcaecati.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>

                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3 ">
                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" width="150px" />
                        <h6 m-o ms-2>Random User1</h6>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero doloremque perferendis quibusdam voluptates magnam pariatur accusantium, dignissimos repellat veritatis obcaecati.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>

                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3 ">
                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" width="200px" />
                        <h6 m-o ms-2>Random User1</h6>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero doloremque perferendis quibusdam voluptates magnam pariatur accusantium, dignissimos repellat veritatis obcaecati.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>

                </div>



            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Reach Us  -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us </h2>
    <div class="container mt-5">
        <div class="row">
            <div class="ccol-lg-8 col-md-8 ">
                <iframe class="w-100 rounded " height="320 px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15560.875483032614!2d77.5115386!3d12.8291286!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae41aa962bb809%3A0x57dc6ecf37574f2b!2sArt%20of%20Living%20International%20Center!5e0!3m2!1sen!2sin!4v1726828155364!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>
            
            </div>
            <div class="col-lg-4 col-lg-4">
                <div class="bg-white p-4 rounded mb-4 ">
                    <h5>Call US</h5>
                    <a href="tel: +91943353232 " class="d-inline-block mb-2 text-decoration-none text-dark ">
                        <i class="bi bi-telephone-fill"></i>
                        919433532329</a>
                    <br>
                    <a href="tel: +91943353232 " class="d-inline-block mb-2 text-decoration-none text-dark ">
                        <i class="bi bi-telephone-fill"></i>
                        919143122451</a>
                </div>
                <div class="bg-white p-4 rounded mb-4 ">
                    <h5>Fallow US</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter"></i> Twitter
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook"></i> facebook
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram"></i> Instragram
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Tooper  Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 1000,
                disableOnInteraction: false,
            }
        });
    </script>
    <!-- TESTIMNILLS Swiper -->
    <script>
        var swiper = new Swiper(".myTestimonils", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1
                },
                640: {
                    slidesPerView: 1
                },

                768: {
                    slidesPerView: 2
                },

                1024: {
                    slidesPerView: 3
                },


            }
        });
    </script>
<!-- Footer Part Added -->
<?php require('inc/footer.php') ?>

</body>

</html>
