
<?php 
    require('../modules/dbconfig.php');
    require('../modules/pfunctions.php');
    adminlogin();

    if(isset($_POST['get_general_settings']))
    {
        $query="SELECT * FROM settings WHERE setting_id=?";
        $values=[1];
        $res=select($query, $values, "i");
        $data=mysqli_fetch_assoc($res);
        
        $json_data=json_encode($data);
        echo $json_data;

    }

?>