
<!-- Ref. Link ::
// https://www.youtube.com/watch?v=BLqDewjag48&list=PLWxTHN2c_6cbh1C7yIskoXszoTl-okogt&index=2 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!--Links-->
    <?php require('modules/links.php'); ?>
    <!--Links ends-->


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500;600&family=Merienda:wght@300;400&family=Poppins:wght@400;500;600&family=Spline+Sans+Mono:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <title>Lusinda Hotel - ROOMS Details</title>
</head>


<body class="bg-light">
    
<!--HEADER -->
<?php 
    require('modules/header.php');
?>
<!--HEADER ends-->


<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
    <div class="h-line bg-dark"></div>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">

            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                            <h4 class="mt-2">Filter</h4>
                            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filter" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse flex-column align-items-stretch mt-3" id="#filter">
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 16px">CHECK AVAILABILITY</h5>
                                    <label class="form-label">Check-in</label>
                                    <input type="date" class="form-control shadow-none mb-3">
                                    <label class="form-label">Check-Out</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>

                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 16px">FACILITIES</h5>
                                    <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Facility-One</label>
                                    </div>

                                    <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">Facility-Two</label>
                                    </div>

                                    <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Facility-Three</label>
                                    </div>

                                </div>

                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 16px">GUESTS</h5>
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <label class="form-label">ADULTS</label>
                                            <input type="number" class="form-control shadow-none">
                                        </div>

                                        <div>
                                            <label class="form-label">Children</label>
                                            <input type="number" class="form-control shadow-none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </nav>
        </div>

        <div class="col-lg-9 col-md-12 px-4">

            <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 aligh-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="imgs/rooms/room1.jpg" class="img-fluid rounded">
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Single Room</h5>
                                    <div class="features mb-3">
                                        <h6 class="mb-1">Features</h6>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Modern Room
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Bathroom
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Balacony
                                            </span>
                                        
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Bed
                                            </span>
                                    </div>

                                    <div class="facilities mb-3">
                                            <h6 class="mb-2">Facilities</h6>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Wi-Fi
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                TV
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Safe
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                AC
                                            </span>
                                    </div>
                    </div>
                    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                        <h6 class="mb-4">1450 EGP per night</h6>
                        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                        <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>

            </div>

            <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 aligh-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="imgs/rooms/double.png" class="img-fluid rounded">
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Double Room</h5>
                                    <div class="features mb-3">
                                        <h6 class="mb-1">Features</h6>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Modern Room
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Bathroom
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Balacony
                                            </span>
                                        
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Bed
                                            </span>
                                    </div>

                                    <div class="facilities mb-3">
                                            <h6 class="mb-2">Facilities</h6>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Wi-Fi
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                TV
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Safe
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                AC
                                            </span>
                                    </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <h6 class="mb-4">1850 EGP per night</h6>
                        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                        <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>

            </div>

            <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 aligh-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="imgs/rooms/triple.jpg" class="img-fluid rounded">
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Triple Room</h5>
                                    <div class="features mb-3">
                                        <h6 class="mb-1">Features</h6>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Modern Room
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Bathroom
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Balacony
                                            </span>
                                        
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Bed
                                            </span>
                                    </div>

                                    <div class="facilities mb-3">
                                            <h6 class="mb-2">Facilities</h6>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Wi-Fi
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                TV
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Safe
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                AC
                                            </span>
                                    </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <h6 class="mb-4">2400 EGP per night</h6>
                        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                        <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>




<!--Footer-->
<?php require('modules/footer.php')?>
<!--Footer-->


</body>
</html>