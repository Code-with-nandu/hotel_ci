<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="home">Livein Hotel</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2 " aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2 " href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item">
                        <a class="nav-link me-2" href="<?php echo base_url('index.php/facilites'); ?>">Facilities</a>
                    </li>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/about'); ?>">About</a>
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