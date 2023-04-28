
<?php 
$server='localhost';
$user='admin';
$pw='123';
$db='myhotel';

$conn = mysqli_connect($server,  $user,$pw, $db);

if(!$conn)
    {
        die("Can Not Access Database".mysqli_connect_error());
    }

    function filteration($data)
    {
        foreach($data as $key => $value){
            //$data[$key]= trim[$value];
            $data[$key]= stripcslashes($value);
            $data[$key]= htmlspecialchars($value);
            $data[$key]= strip_tags($value);
        }
        return $data;
    }


    function select($sql, $values, $datatypes)
        {
            $conn = $GLOBALS['conn'];
            if($stmt = mysqli_prepare($conn, $sql))
                {
                        mysqli_stmt_bind_param($stmt, $datatypes,...$values);
                        if(mysqli_stmt_execute($stmt)){
                            $res=mysqli_stmt_get_result($stmt);
                            mysqli_stmt_close($stmt);
                            return $res; 
                        }else{
                            mysqli_stmt_close($stmt);
                            die("Query Can not be executed - SELECT");
                        }
                }
            else
                {
                die("Query Can not be executed - SELECT");
                }
        }
?>