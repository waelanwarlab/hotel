<?php 
    require('modules/pfunctions.php');
    require('modules/dbconfig.php');
    session_start();
    
    if((isset($_SESSION['adminlogin']) && $_SESSION['adminlogin'] == true))
    {
        redirect('dashboard.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Login</title>

    <?php require('modules/links.php');?>

    <style>
        div.login-form{
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%, -50%);
            width:250px;
        }
    </style>
</head>


<body class="bg-light">
    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">Admin Panel - Login</h4> 

            <div class="p-3">
                <div class="mb-3">
                    <input name="username" required type="text" class="form-control shadow-none" placeholder="Enter User Name">
                </div>

                <div class="mb-3">
                    <input name="password" required type="password" class="form-control shadow-none" placeholder="Enter your Password">
                </div>
                <button name="btn_login" type="submit" class="btn text-white custom-bg shadow-none">Login</button>
            </div>
        </form>
    </div>




    <?php 
        //Validate User Credentials
        if(isset($_POST['btn_login']))
        {
            $filtered_data=filteration($_POST);
           // print_r($_POST);
            // print_r($filtered_data);
            //echo "<h1>$filtered_data[username]</h1>";
            //echo "<h1>$filtered_data[password]</h1>";
            
            $query = "SELECT * FROM users WHERE username=? AND password=?";
            $values = [$filtered_data['username'], $filtered_data['password']];
            $res = select($query, $values, "ss");
           // print_r($res);
           if($res->num_rows==1){
            $row=mysqli_fetch_assoc($res);
            //session_start();
            $_SESSION['adminlogin']=true;
            $SESSION['userid']=$row['user_id'];
            redirect('dashboard.php');

           }
           else{
            alert('error', 'Login Failed - Invalid Credentials!');
           }
        }
    ?>

<?php require('modules/scripts.php'); ?>
</body>
</html>