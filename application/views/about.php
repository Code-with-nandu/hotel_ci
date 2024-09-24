<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> liVIN HOTEL-ABOUT US</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <!-- Requeres page added -->
    <?php require('inc/links.php') ?>

</head>
<style>
    /* Page 2 (Facilities)*/
    :root {
        --teal: #2ec1ac;
        --teal_hover: #279e8c;
    }
</style>

<body class="bg-light">

    <!-- Header Added -->
    <?php require('inc/header.php') ?>

    <!-- aBOUT US hEADING  -->
    <div class="my-5 px-4">

        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            <br>Animi velit expedita cupiditate harum aut maxime voluptas tempora assumenda ipsa veritatis.
        </p>

    </div>

    <!-- image + write -->
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3"> Lorem ipsum dolor sit. </h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nisi animi laboriosam recusandae illum, ipsum autem optio voluptates quasi harum.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nisi animi laboriosam recusandae illum, ipsum autem optio voluptates quasi harum.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-1 order-md-2 order-1 ">
                <img src="<?php echo base_url() ?>assets/images/about/about.jpg" class="w-100" alt="">
               
            </div>
        </div>
    </div>

     <!--    100 Rooms Customer tabbo create  -->
     <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class=" bg-white rounded shadow p-4  border-top border-4 text-center  box ">
                    <img src="<?php echo base_url() ?>assets/images/about/hotel.svg" alt="" width="50px">
                    <h4 class="mt-3">100+Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class=" bg-white rounded shadow p-4  border-top border-4 text-center  box ">
                    <img src="<?php echo base_url() ?>assets/images/about/customers.svg" alt="" width="50px">
                    <h4 class="mt-3">200+CUSTOMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4 ">
                <div class=" bg-white rounded shadow p-4  border-top border-4 text-center  box ">
                    <img src="<?php echo base_url() ?>assets/images/about/rating.svg" alt="" width="50px">
                    <h4 class="mt-3">150+Reviews</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class=" bg-white rounded shadow p-4  border-top border-4 text-center  box ">
                    <img src="<?php echo base_url() ?>assets/images/about/staff.svg" alt="" width="50px">
                    <h4 class="mt-3">200+Staffs</h4>
                </div>
            </div>
        </div>
    </div>

  <!-- Manegment team -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">MANEGMENT TEAM</h2>
    <div class="contaner px-4 ">
        <div class="swiper mySwiper ">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="<?php echo base_url() ?>assets/images/about/IMG_17352.jpg"  class="w-100" alt="">
                    <h5 class="mt-2" >Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="<?php echo base_url() ?>assets/images/about/IMG_17352.jpg"  class="w-100" alt="">
                    <h5 class="mt-2" >Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="<?php echo base_url() ?>assets/images/about/IMG_17352.jpg"  class="w-100" alt="">
                    <h5 class="mt-2" >Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="<?php echo base_url() ?>assets/images/about/IMG_17352.jpg"  class="w-100" alt="">
                    <h5 class="mt-2" >Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="<?php echo base_url() ?>assets/images/about/IMG_17352.jpg"  class="w-100" alt="">
                    <h5 class="mt-2" >Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="<?php echo base_url() ?>assets/images/about/IMG_17352.jpg"  class="w-100" alt="">
                    <h5 class="mt-2" >Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="<?php echo base_url() ?>assets/images/about/IMG_17352.jpg"  class="w-100" alt="">
                    <h5 class="mt-2" >Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="<?php echo base_url() ?>assets/images/about/IMG_17352.jpg"  class="w-100" alt="">
                    <h5 class="mt-2" >Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="<?php echo base_url() ?>assets/images/about/IMG_17352.jpg"  class="w-100" alt="">
                    <h5 class="mt-2" >Random Name</h5>
                </div>
               
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>



    <!-- Footer Added -->
    <?php require('inc/footer.php') ?>
    <!-- Initilize swipper -->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     <script>
        var swiper = new Swiper(".mySwiper",{

            loop: true,
            autoplay: {
                delay: 1000,
                disableOnInteraction: false,
            },
            
          
            spaceBetween :40,
            slidesPerView: "auto",
            pagination:{
                el:".swiper-pagination",
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
        })

     </script>


</body>

</html>