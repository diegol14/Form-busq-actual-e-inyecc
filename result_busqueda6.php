<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8 sin bom">
<title>Resultado-busqueda</title>
<style >

.p  { font-size:1.2em; color:#0000FF;	
}
table
{
border:1px solid #F00;
	padding:20px 50px;
	margin-top:50px;
	background-color:#FFC;}

table tr {
  text-align:inherit;
}
</style>
</head>
<body>
<?php

$busqueda=$_GET["busqueda"];
echo "<p class='p'>Palabra/s buscada/s: ".$busqueda."</p>";
require 'con6.php';

mysqli_select_db($con6, 'gestiondepedidos') or die(
    "No se encuentra base de datos");

 //$myquery3c = "select * from productos where(NOMBREART�CULO like'%$busqueda%')";
 
 $myquery3c = "select * from productos where(NOMBREART�CULO like'%$busqueda%')";


echo "<br/>".$myquery3c;

$resultMyquery3c=mysqli_query($con6, $myquery3c);

while ($row=mysqli_fetch_array($resultMyquery3c,MYSQLI_ASSOC)) {
    
    echo "<form action='Actualizar.php' method='get'>
    <table >
        <tr>
            <td>C�digo Art�culo</td>
             <td><label for='c_art'></label>
             <input type='text' name='c_art' value='". $row['C�DIGOART�CULO']."'></td>
        </tr>
        <tr>
            <td>Secci�n</td>
            <td><label for='seccion'></label>
            <input type = 'text' name = 'seccion' value = ' ". $row['SECCI�N']." ' ></td>
        </tr>
        <tr>
            <td>Nombre art�culo</td>
            <td><label for='n_art'></label>
            <input type = 'text' name='nom_art' value='". $row['NOMBREART�CULO']." '></td>
        </tr>
            <td>Precio</td>
            <td><label for='precio'></label>
            <input type = 'text' name = 'precio' value = ' ". $row['PRECIO']." '></td>
        </tr>
        <tr>
            <td>Fecha</td>
      <td><label for='fecha'></label>
            <input type = 'text' name = 'fecha' value = ' " . $row['FECHA']." '></td>
        </tr>
        <tr>
            <td>Importado</td>
            <td><label for='importado'></label>
            <input type = 'text' name = 'impor' value = ' " . $row['IMPORTADO']." '></td>
        </tr>
        <tr>
            <td>Pa�s de Origen</td>
            <td><label for='p_orig'></label>
            <input type = 'text' name = 'p_orig' value = ' " . $row['PA�SDEORIGEN']."'</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td align='center'><input type='submit' name='update' id='update' value='Update'></td>
        </tr>
  </table> 
</form><br/>";
         
        }
        mysqli_close($con6);
?>
</body>
</html>