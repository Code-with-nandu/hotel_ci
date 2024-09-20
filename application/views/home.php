<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> liVIN HOTEL:Codeigniter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,
wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,
600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/common.css">

</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.html">Livein Hotel</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2 " aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2 " href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <i class="bi bi-person-circle"></i> Login
                    </button>
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#registerModal">
                        <i class="bi bi-person-lines-fill"></i></i> Register
                    </button>
                </div>

            </div>
        </div>
    </nav>
    <!--Login Modal -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center " id="staticBackdropLabel">
                            <i class="bi bi-person-circle fs-3 me-2"></i> User Login
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark">Submit</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Register Modal -->
    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center " id="staticBackdropLabel">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i></i> User Registration
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            Note : Your details match with ID (AADHAR CARD ,Passport,driving Lisence ,etc)
                            that will be requere during check-in.
                        </span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name" class="form-label ps-0 mb-3">Name</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label p-0 mb-3">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="mobile" class="form-label ps-0 mb-3">Mobile</label>
                                    <input type="number" id="mobile" name="mobile" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="picture" class="form-label p-0 mb-3">Picture</label>
                                    <input type="file" id="picture" name="picture" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="address" class="form-label p-0 mb-3">Address</label>
                                    <textarea id="address" name="address" class="form-control" rows="1"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="pincode" class="form-label ps-0 mb-3">Pincode</label>
                                    <input type="number" id="pincode" name="pincode" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="dob" class="form-label p-0 mb-3">Date of Birth</label>
                                    <input type="date" id="dob" name="dob" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="password" class="form-label ps-0 mb-3">Password</label>
                                    <input type="password" id="password" name="password" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="confirm_password" class="form-label p-0 mb-3">Confirm Password</label>
                                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
                                </div>

                                <div class="text-center my-1">
                                    <button type="submit" class="btn btn-dark btn-block mb-3">Sign Up</button>
                                </div>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Swiper carosel create-->

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
    <!-- Footer Part  -->

    <div class="container bg-white mt-5 ">
        <div class="row">
            <div class="col-lg-4 p-4 ">
                <h3>Livein Hotel</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam nisi quos repellendus neque aliquid praesentium ea quaerat ad inventore laborum.
                </p>

            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Links</h5>
                <a href="#" class="d-inline-blok mb-2 text-dark text-decoration-none">Home</a><br>
                <a href="#" class="d-inline-blok mb-2 text-dark text-decoration-none">Rooms</a><br>
                <a href="#" class="d-inline-blok mb-2 text-dark text-decoration-none">Facilities</a><br>
                <a href="#" class="d-inline-blok mb-2 text-dark text-decoration-none">Contact us</a><br>
                <a href="#" class="d-inline-blok mb-2 text-dark text-decoration-none">About</a>
            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Follow Us</h5>
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

    <!-- My Creation -->
    <div class="text-center bg-dark text-white p-2 m-0">
            

            <p>
                <strong>
                    Copyright &copy;2012-<span id="currentYear"></span>, <span id="formattedDate"></span> at <span id="formattedTime"></span>, GMT+5:30 ,<a href="http://krishnendu.in.co">KRISHNENDU @ KRISHNENDU</a>.
                </strong>
                All rights reserved.
            </p>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
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
<!-- Footer part -->
 
<script>
        function updateDateTime() {
            const now = new Date();
            
            // Format date (e.g., August 14)
            const dateOptions = { month: 'long', day: 'numeric' };
            const formattedDate = now.toLocaleDateString('en-US', dateOptions);
            document.getElementById('formattedDate').textContent = formattedDate;
            
            // Format time (e.g., 09:59:43 PM)
            const timeOptions = { 
                hour: '2-digit', 
                minute: '2-digit', 
                second: '2-digit', 
                hour12: true 
            };
            const formattedTime = now.toLocaleTimeString('en-US', timeOptions);
            document.getElementById('formattedTime').textContent = formattedTime;

            // Set the current year
            document.getElementById('currentYear').textContent = now.getFullYear();
        }

        // Update date and time when the page loads
        updateDateTime();

        // Optional: Update every second to keep time current
        setInterval(updateDateTime, 1000);
    </script>



</body>

</html>
