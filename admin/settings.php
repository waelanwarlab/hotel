
<?php require('modules/pfunctions.php');
adminlogin();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>

    <?php require('modules/links.php');?>
</head>


<body class="bg-light">
    <?php require('modules/header.php'); ?>

    

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Web App Settings</h3>

                <!--GENERAL SETTINGS Section-->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <!-- Button trigger modal -->
                                <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                                <i class="bi bi-pencil-square"></i>Edit
                                </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Website Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <form>
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">General Settings</h5>
                                </div>
                                <div class="modal-body">

                                    <div class="mb-3">
                                        <label class="form-label">Website Title</label>
                                        <input type="text" name="website_title" class="form-control shadow-none">
                                    </div>

                                    <div class="mb-3">
                                    <label class="form-label">About Us</label>
                                    <textarea name="website_about" class="form-control" rows="3"></textarea>

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="button" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                                </div>  
                            </div>
                        </form>
                    </div>
                </div>
                <!--GENERAL SETTINGS Section ends-->
            </div>
        </div>
    </div>


    <script>
        let general_data;

        function get_general_settings()
        {
            let site_title=document.getelementbyid('site_title');
            let site_about=document.getelementbyid('site_about');

            let xhr =new XMLHttprequest();
            xhr.open("POST", "ajax/settings_crud.php",true);
            xhr.setrequestheader('content-type','application/x-www-form-urlencoded');
            xhr.load=function(){
                general_data=JSON.parse(this.responsetext);
                //console.log(general_data);
                site_title.innertext=general_data.site_title;
                site_about.innertext=general_data.site_about;

            }

            xhr.send('get_website_title');

        }
            window.onload=function()
            {
                get_general_settings();
            }

    </script>
    <?php require('modules/scripts.php'); ?>
</body>
</html>