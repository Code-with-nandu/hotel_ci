<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> liVIN HOTEL-FACILITES</title>
    <!-- Requeres page added -->
    <?php require('inc/links.php') ?>


</head>
<style>
    /* Page 2 (Facilities)*/
    :root {
        --teal: #2ec1ac;
        --teal_hover: #279e8c;
    }

    .h-line {
        width: 150px;
        margin: 0 auto;
        height: 1.7px;
    }

    .pop:hover {
        border-top-color: var(--teal) !important;
        transform: scale(1.03);
        transition: all 0.3 s;

    }
</style>

<body class="bg-light">

    <!-- Header Added -->
    <?php require('inc/header.php') ?>

    <!--OUR FACILITIES Heading   -->
    <div class="my-5 px-4">

        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            <br>Animi velit expedita cupiditate harum aut maxime voluptas tempora assumenda ipsa veritatis.
        </p>

    </div>

    <!-- Facilited  Part  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="<?php echo base_url() ?>assets/images/facilities/IMG_27079.svg" width="40px" alt="">
                        <h5 class="m-0 ms-3">Room Heater</h5>
                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates et ratione nobis, rem voluptatum minus debitis?</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="<?php echo base_url() ?>assets/images/facilities/IMG_41622.svg" width="40px" alt="">
                        <h5 class="m-0 ms-3">TV</h5>

                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates et ratione nobis, rem voluptatum minus debitis?</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="<?php echo base_url() ?>assets/images/facilities/IMG_47816.svg" width="40px" alt="">
                        <h5 class="m-0 ms-3">Ayurveda</h5>

                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates et ratione nobis, rem voluptatum minus debitis?</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="<?php echo base_url() ?>assets/images/facilities/IMG_49949.svg" width="40px" alt="">
                        <h5 class="m-0 ms-3">AC</h5>

                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates et ratione nobis, rem voluptatum minus debitis?</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="<?php echo base_url() ?>assets/images/facilities/IMG_96423.svg" width="40px" alt="">
                        <h5 class="m-0 ms-3">Radio</h5>

                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates et ratione nobis, rem voluptatum minus debitis?</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="<?php echo base_url() ?>assets/images/facilities/IMG_41622.svg" width="40px" alt="">
                        <h5 class="m-0 ms-3">TV</h5>

                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates et ratione nobis, rem voluptatum minus debitis?</p>
                </div>
            </div>
        </div>
    </div>




    <!-- Footer Added -->
    <?php require('inc/footer.php') ?>




</body>

</html>