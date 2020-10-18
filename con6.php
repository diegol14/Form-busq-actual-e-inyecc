<?php

$server = "127.0.0.1";
$user = "root";
$pass = "";
$ddbb = "gestiondepedidos";
$port = "3306";

$con6 = mysqli_connect($server, $user, $pass, "",$port);
echo "<p class = 'p'>Informaci&oacute;n de conexi&oacute;n</p>";

//Tres maneras de comprobar la conexion
if (! $con6) { echo "Conecction failed".mysqli_connect_error() ;
}else {
    echo  "Con6 ok";   }
    
    if (mysqli_connect_errno()) {
        echo "<br/>Conexion failed2 ".mysqli_connect_error() ;
    }else {       echo "<br/>Connected to server2";  }
    
    if (mysqli_connect_errno()) {
        printf("<br/>Connect failed4: %s\n ", mysqli_connect_error());
        exit();
    }else {
        echo "<br/>conn ok6";
    }
    mysqli_select_db($con6, $ddbb);
    
    if ($result = mysqli_query($con6, "SELECT DATABASE()")) {
        
        $row = mysqli_fetch_row($result);
        printf("<br/>Actual database is %s. \n ", $row[0]);
        mysqli_free_result($result);
    }
    
    ?>