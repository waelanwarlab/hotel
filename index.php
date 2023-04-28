
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

    

    <style>
                .availability-form{
            margin-top:-60px;
            z-index:2;
            position:relative;
        }

        @media screen and (max-width: 575px){
            .availability-form{
            margin-top:25px;
            padding:0 35px;
        }
        }
    </style>

    <title>Lusinda Hotel - HOME</title>
</head>


<body class="bg-light">
    
<!--HEADER -->
<?php 
    require('modules/header.php');
?>
<!--HEADER Link-->

<!--Slider [Swiper Carousel]-->
<div class="container-fluid px-lg-4 mt-4">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="imgs/carousel/slide1.png" class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
                <img src="imgs/carousel/slide2.png" class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
                <img src="imgs/carousel/slide3.png" class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
                <img src="imgs/carousel/slide4.png" class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
                <img src="imgs/carousel/slide5.png" class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
                <img src="imgs/carousel/slide6.png" class="w-100 d-block"/>
            </div>

        </div>
    </div>
</div>
<!--Slider [Swiper Carousel] ends-->




<!--Check Room Availability-->
        <div class="container availability-form">
            <div class="row">
                <div class="col-lg-12 bg-white shadow p-4 rounded">
                    <h5 class="mb-4">Check Room Availability</h5>
                    <form>
                        <div class="row align-items-end">
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight : 500;">Check-in</label>
                                <input type="date" class="form-control shadow-none">
                            </div>

                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight : 500;">Check-out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>

                            <div class="col-lg-2 mb-3">
                                <label class="form-label" style="font-weight : 500;">Adult</label>
                                    <select class="form-select shadow-none">
                                        <option selected>Select..</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                            </div>

                            <div class="col-lg-2 mb-3">
                                <label class="form-label" style="font-weight : 500;">Chelderen</label>
                                <select class="form-select shadow-none">
                                        <option selected>No Childeren</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                            </div>

                            <div class="col-lg-2 mb-lg-3 mt-2">
                                <button type="submit" class="btn text-white shadow-none custom-bg">Check</button>
                            </div>

                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
<!--Check Room Availability ends-->



<!--ROOMS-->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 my-3">

                            <div class="card border-0 shadow-none" style="max-width:350px; margin:auto;">
                                <img src="imgs/rooms/room8.png" class="card-img-top">
                                <div class="card-body">
                                    <h5>Single Room</h5>
                                    <h6 mb-4>1450 EGP/night</h6>
                                    <div class="features mb-4">
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
                                                Sofa
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Bad
                                            </span>
                                    </div>

                                    <div class="facilities mb-4">
                                            <h6 class="mb-4">Facilities</h6>
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

                                    <div class="rating">
                                        <h6 class="mb-1">Rating</h6>
                                        <span class="badge rounded-pill bg-light">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </span>
                                    </div>

                                    <div class="d-flex justify-content-evenly mb-2">
                                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                                    </div>
                                </div>
                            </div>
                </div>


                <div class="col-lg-4 col-md-6 my-3">

                            <div class="card border-0 shadow-none" style="max-width: 350px; margin:auto;">
                                <img src="imgs/rooms/double.png" class="card-img-top">
                                <div class="card-body">
                                    <h5>Double Room</h5>
                                    <h6 mb-4>1850 EGP/night</h6>
                                    <div class="features mb-4">
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
                                                Sofa
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Bad
                                            </span>
                                    </div>

                                    <div class="facilities mb-4">
                                            <h6 class="mb-4">Facilities</h6>
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

                                    <div class="rating">
                                        <h6 class="mb-1">Rating</h6>
                                        <span class="badge rounded-pill bg-light">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </span>
                                    </div>

                                    <div class="d-flex justify-content-evenly mb-2">
                                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                                    </div>
                                </div>
                            </div>
                </div>


                <div class="col-lg-4 col-md-6 my-3">

                            <div class="card border-0 shadow-none" style="max-width: 350px; margin:auto;">
                                <img src="imgs/rooms/triple.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5>Triple Room</h5>
                                    <h6 mb-4>2400 EGP/night</h6>
                                    <div class="features mb-4">
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
                                                Sofa
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Bad
                                            </span>
                                    </div>

                                    <div class="facilities mb-4">
                                            <h6 class="mb-4">Facilities</h6>
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

                                    <div class="rating">
                                        <h6 class="mb-1">Rating</h6>
                                        <span class="badge rounded-pill bg-light">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </span>
                                    </div>

                                    <div class="d-flex justify-content-evenly mb-2">
                                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                                    </div>
                                </div>
                            </div>
                </div>




                <!--More Rooms Section-->
                <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
                </div>
                <!--More Rooms Section ends-->
            </div>
        </div>
<!--ROOMS ends-->



<!--Facilities-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="imgs/facilities/wifi.jpg" width="88px">
                <h5 class="mt-3">Wifi</h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="imgs/facilities/ac.jpg" width="88px">
                <h5 class="mt-3">AC</h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="imgs/facilities/locker.jpg" width="88px">
                <h5 class="mt-3">Locking system</h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="imgs/facilities/safebox.jpg" width="88px">
                <h5 class="mt-3">Safe Box</h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="imgs/facilities/minibar.jpg" width="88px">
                <h5 class="mt-3">mini-bar Fridge</h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="imgs/facilities/tv.jpg" width="88px">
                <h5 class="mt-3">Television</h5>
            </div>

        <!--More Facilities-->
            <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>
        <!--More Facilities ends-->
            
        </div>
    </div>
<!--Facilities ends-->



<!--Testimonials [SwiperJS]-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

        <div class="container">
            
                <div class="swiper swiper-testimonial">
                    <div class="swiper-wrapper">
                        

                            <div class="swiper-slide bg-white p-4">
                                <div class="profile d-flex align-items-center mb-3">
                                    <img src="imgs/features/testimonial1.jpg" width="300px">
                                    <h6 class="m-0 ms-2">Random User1</h6>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Exercitationem suscipit reprehenderit veritatis cum ex 
                                    corporis ullam error nobis modi autem?
                                </p>
                                <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                </div>
                            </div>

                            <div class="swiper-slide bg-white p-4">
                                <div class="profile d-flex align-items-center mb-3">
                                    <img src="imgs/features/testimonial2.jpg" width="300px">
                                    <h6 class="m-0 ms-2">Random User2</h6>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Exercitationem suscipit reprehenderit veritatis cum ex 
                                    corporis ullam error nobis modi autem?
                                </p>
                                <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                </div>
                            </div>

                            <div class="swiper-slide bg-white p-4">
                                <div class="profile d-flex align-items-center mb-3">
                                    <img src="imgs/features/testimonial2.jpg" width="300px">
                                    <h6 class="m-0 ms-2">Random User3</h6>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Exercitationem suscipit reprehenderit veritatis cum ex 
                                    corporis ullam error nobis modi autem?
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
<!--Testimonials ends-->



<!--Contact Us-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.8429218959623!2d32.541627560360865!3d29.95519649261261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145625d589fe6b35%3A0x65f93388bc88c3fc!2sLusinda%20Resort%20%26%20Spa!5e0!3m2!1sen!2seg!4v1680957461409!5m2!1sen!2seg" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-2">
                <h5>Contact Us</h5>
                <a href="Mobile: +20 111 222 333" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone"></i> Phone : +20 111 222 333
                </a>
                <br>
                <a href="Mobile: +20 111 222 333" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i> Mobile : +20 111 222 333
                </a>
                <br>
                <a href="Mobile: +20 111 222 333" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-envelope-at"></i> E-mail : SALES@zad-group.com
                </a>
            </div>

            <div class="bg-white p-4 rounded mb-3">
                <h5>Message Us</h5>

                <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-messenger"></i> Messenger
                    </span>
                </a>

                <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-whatsapp"></i> Whatsapp
                    </span>
                </a>
                <br>
            </div>

            <div class="bg-white p-4 rounded mb-2">
                <h5>Follow Us</h5>

                <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-facebook"></i> Facebook
                    </span>
                </a>
                
                <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-twitter"></i> Twitter
                    </span>
                </a>
                
                <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-instagram"></i> Instagram
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Contact Us ends-->





<!--Footer-->
<?php require('modules/footer.php')?>
<!--Footer-->




<!--Swiper JS-->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


<!-- Initialize Swiper -->
<script>
        var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        loop:true ,
        autoplay:{
            delay:3500, 
            disableOnInteraction:false,
        }
        });

        var swiper = new Swiper(".swiper-testimonial", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
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
                320:{
                    slidesPerView:1,
                },
                640:{
                    slidesPerView:1,
                },
                768:{
                    slidesPerView:2,
                },
                1024:{
                    slidesPerView:3,
                },
            }
    });
  </script>
</body>
</html>