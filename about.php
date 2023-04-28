
<!-- Ref. Link ::
// https://www.youtube.com/watch?v=BLqDewjag48&list=PLWxTHN2c_6cbh1C7yIskoXszoTl-okogt&index=2 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>Lusinda Hotel - About Us</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500;600&family=Merienda:wght@300;400&family=Poppins:wght@400;500;600&family=Spline+Sans+Mono:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!--Links-->
    <?php require('modules/links.php'); ?>
    <!--Links ends-->

    <style>
        .box{
            border-top-color: var(--teal) !important;
        }

    </style>
</head>


<body class="bg-light">
    
<!--HEADER -->
<?php 
    require('modules/header.php');
?>
<!--HEADER ends-->


<div class="my-5 px-4">
    <h2 class="fw-hold h-font text-center">ABOUT US</h2>
    <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Quibusdam iure blanditiis quod necessitatibus, 
        </p>
</div>


<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4order-lg-1 order-md-1 order2">
            <h3 class="mb-3">Lorem ipsum dolor sit</h3>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Aut architecto atque dicta quisquam rem non
            </p>
        </div>

        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order1">
            <img src="imgs/about/about.jpg" class="w-100">
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadowp-4 border-top border-4 text-center box">
                <img src="imgs/about/hotel.svg" width="70px">
                <h4 class="mt-3">50+ ROOMS </h4>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadowp-4 border-top border-4 text-center box">
                <img src="imgs/about/guest.png" width="70px">
                <h4 class="mt-3">10000+ GUEST </h4>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadowp-4 border-top border-4 text-center box">
                <img src="imgs/about/staff.svg" width="70px">
                <h4 class="mt-3">300+ STAFF</h4>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadowp-4 border-top border-4 text-center box">
                <img src="imgs/about/rating.svg" width="70px">
                <h4 class="mt-3">Rating#1 </h4>
            </div>
        </div>
    </div>
</div>

<h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
<div class="container px-4">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-5">
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="imgs/about/member.png">
                <h5 class="mt-2">CEO<h5>
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="imgs/about/member2.png">
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="imgs/about/member3.png">
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="imgs/about/member4.png">
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="imgs/about/member5.png">
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="imgs/about/member4.png">
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>




<!--Footer-->
<?php require('modules/footer.php')?>
<!--Footer-->




  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween:40,
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
                    slidesPerView:3,
                },
                1024:{
                    slidesPerView:3,
                },
            }
    });
  </script>

</body>
</html>