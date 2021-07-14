<?php
$dbhost ="localhost";
$dbuser ="root";
$dbpass ="";
$dbname ="formuario";

$link =mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
$cedula =$_POST["Cedulas"];


$query = "SELECT * FROM usuarios where Cedulas=$cedula";
$qry = mysqli_query($link,$query); 
 
 
$row = mysqli_fetch_array($qry);
 
if(mysqli_num_rows($qry)!=1){
 

echo'<script type="text/javascript">
    alert("El número de documento ingresado no se encuentre registrado.'.$cedula.'");
    window.location.href="cedulas2.php";
    </script>';
 
}else{
    
    echo'<script type="text/javascript">
        window.location.href="preregistro.php";
        </script>'; 
    }
    
    
    mysqli_close($mysqli);
?>