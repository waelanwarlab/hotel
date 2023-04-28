
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
    
    <title>Lusinda Hotel - CONTACTS</title>
</head>


<body class="bg-light">
    
<!--HEADER -->
<?php 
    require('modules/header.php');
?>
<!--HEADER ends-->


<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">CONTACTS</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
        Lorem ipsum, dolor sit amet consectetur adipisicing <br>elit. 
        Omnis quasi repudiandae veritatis facere voluptates.
    </p>
</div>


<div class="container">
    <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 ">
                    <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.8429218959623!2d32.541627560360865!3d29.95519649261261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145625d589fe6b35%3A0x65f93388bc88c3fc!2sLusinda%20Resort%20%26%20Spa!5e0!3m2!1sen!2seg!4v1680957461409!5m2!1sen!2seg" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>                    
                        <a href="https://goo.gl/maps/QYTTEXGzc82UxZfH8" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                            <i class="bi bi-geo-alt-fill"></i>SUEZ, New kornish, 43511
                        </a>
                    <br>

                    <h5 class="mt-3">Contact Us</h5>
                        <a href="Phone: +20 111 222 333" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone"></i> Phone : +20 111 222 333
                        </a>

                        <br>

                        <a href="Mobile: +20 111 222 333" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> Mobile : +20 111 222 333
                        </a>

                        <br>
                        <h5 class="mt-3">Email</h5>
                        <a href="Eamil: +20 111 222 333" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-envelope-at"></i> Email Address : SALES@zad-group.com
                        </a>

                    <h5 class="mt-3">Follow Us</h5>
                        <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 me-2">
                                <i class="bi bi-facebook"></i> Facebook
                            </span>
                        </a>

                        <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 me-2">
                            <i class="bi bi-twitter"></i> Twitter
                            </span>
                        </a>

                        <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6">
                            <i class="bi bi-instagram"></i> Instagram
                            </span>
                        </a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 ">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>

                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Mobile</label>
                            <input type="text" class="form-control shadow-none">
                        </div>

                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">E-mail</label>
                            <input type="email" class="form-control shadow-none">
                        </div>

                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>

                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Message</label>
                            <textarea class="form-control shadow-none" rows=3 style="resize:none;"></textarea>
                        </div>

                        <button type="submit" class="btn text-white custom-bg mt-3">Send</button>
                    </form>
                </div>
            </div>


    </div>
</div>




<!--Footer-->
<?php require('modules/footer.php')?>
<!--Footer-->


</body>
</html>