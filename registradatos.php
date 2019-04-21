<?php

$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$direccion = $_POST['direccion'];
$horario = $_POST['horario'];
$payasos = $_POST['payaso'];
$muneco = $_POST['muneco'];
$bailarina = $_POST['bailarina'];
$mago = $_POST['mago'];
$distrito = $_POST['distrito'];
$decoracion = $_POST['decoracion'];
$grabacion = $_POST['grabacion'];


$precioTotal = 0;

echo "Usuario :&nbsp;&nbsp;&nbsp;&nbsp; $nombre <br>";
echo "Direccion :&nbsp; $direccion <br>";
echo "Fecha : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$fecha <br><br><br>";


echo "<center><table border= 1px align=center cellspacing=0>";
echo "<tr bgcolor=#9999ff ><th width=170 height=50>Descripcion</th><th width=170>Cantidad</th><th width=170>Precio Unitario</th><th width=170>Precio SubTotal</th></tr>";

if ($horario == "3-5") {
    $precioHorario = 400;
    $precioTotal += $precioHorario;
} else {
    $precioHorario = 500;
    $precioTotal += $precioHorario;
}
echo "<tr ><td height=50 >Horario $horario </td><td>1</td> <td>$precioHorario</td> <td >$precioHorario</td><tr>";

if ($payasos != 0) {
    echo "<tr ><td height=50>Payasos</td><td>$payasos</td> <td >60.00</td> <td>", $payasos * 60, "</td><tr>";
    $precioTotal += $payasos * 60;
}

if ($muneco != 0) {
    echo "<tr><td height=50>Muñecos</td><td>$muneco</td> <td>50.00</td> <td>", $muneco * 50, "</td><tr>";
    $precioTotal +=$muneco * 50;
}

if ($bailarina != 0) {
    echo "<tr><td height=50>Bailarina</td><td>$bailarina</td> <td>40.00</td> <td>", $bailarina * 40, "</td><tr>";
    $precioTotal +=$bailarina * 40;
}

if ($mago != 0) {
    echo "<tr><td height=50>Mago</td><td>$mago</td> <td>80.00</td> <td>", $mago * 80, "</td><tr>";
    $precioTotal +=$mago * 80;
}

if ($decoracion == "si") {
    echo "<tr><td height=50>Decoracion</td><td>1</td> <td>150</td> <td>150</td><tr>";
    $precioTotal +=150;
}


switch ($grabacion) {

    case 'HD':
        echo "<tr><td height=50>Grabacion</td><td>1</td> <td>100</td> <td>100</td><tr>";
        $precioTotal +=100;
        break;
    case 'FHD':
        echo "<tr><td height=50>Grabacion</td><td>1</td> <td>150</td> <td>150</td><tr>";
        $precioTotal +=150;
        break;
    case 'UHD':
        echo "<tr><td height=50>Grabacion</td><td>1</td> <td>200</td> <td>200</td><tr>";
        $precioTotal +=200;
        break;
}

switch ($distrito) {
    case 'La Molina':
        echo "<tr><td height=50>Extra $distrito </td><td>1</td> <td>50</td> <td>50</td><tr>";
        $precioTotal +=50;
        break;
    case 'Ate Vitarte':
        echo "<tr><td height=50>Extra $distrito</td><td>1</td> <td>50</td> <td>50</td><tr>";
        $precioTotal +=50;
        break;
    case 'Villa el Salvador':
        echo "<tr><td height=50>Extra $distrito</td><td>1</td> <td>50</td> <td>50</td><tr>";
        $precioTotal +=50;
        break;
    default : echo "<tr><td height=50>$distrito</td><td>-</td> <td>0</td> <td>0</td><tr>";
        break;
}

echo "<tr><td height=50>Precio</td><td>-</td> <td>-</td> <td>$ $precioTotal</td><tr></table></center>";
?>