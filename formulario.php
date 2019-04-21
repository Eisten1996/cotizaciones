<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Fiesta Infantil</title>
        <link rel="stylesheet" type="text/css" href="css/file.css"/>
        <script language="JavaScript" type="text/JavaScript" src="js/prototype.js"></script>
        <script language="JavaScript" type="text/JavaScript" src="js/file.js"></script>
    </head>
    <body>
        <form name ="datosF" action="registradatos.php" method="POST" onsubmit="return ValidaDatosR()">
            <table width="1100" border="0" align="center" cellpadding="10" cellspacing="10" class="estilo_tabla">
                <tr>
                    <td>
                        <table width = "100%" heigth="220" border="0" align="center" cellpadding="5" cellspacing="5" bgcolor="#ffffff">

                            <tr>
                                <td width="100%" boderr="0" colspan="2" align="center" valign="middle" >
                                    <table width="100%" cellpadding="0" cellspacing="0" bgcolor="#ccebff" style="border-radius: 6px;">
                                        <tr>
                                            <td align="center" class="style24" ><br>Fiestas infantiles<br><br></td>
                                        </tr>

                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table width = "100%" heigth="220" border="0" align="center" cellpadding="5" cellspacing="5" bgcolor="#ffffff" class="estilo_tabla">

                                        <tr>
                                            <td width="100%" boderr="0" colspan="2" align="center" valign="middle" >
                                                <table width="100%" cellpadding="0" cellspacing="0" bgcolor="#ccebff" style="border-radius: 6px;">
                                                    <tr>
                                                        <td align="left" class="style24" style="padding:1px 20px;"><br>Informacion Personal<br><br></td>
                                                    </tr>

                                                </table>

                                            </td>
                                        </tr>

                                        <tr>

                                            <td>
                                                <label class="style14" for="nombre">Nombre Completo</label><br>
                                                <input type="text" autofocus name="nombre" id="nombre" class="estilo_input" size="40" style="text-transform: capitalize" placeholder="Ingrese su nombre" />
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="style14" for="fecha">Fecha del evento</label><br>
                                                <input type="date"  name="fecha" id="fecha" class="estilo_input"/>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="style14" for="direccion">Direccion domicilio</label><br>
                                                <input type="text"  name="direccion" id="direccion" class="estilo_input" size="40"  placeholder="Ingrese su direccion"/>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td>
                                                <label class="style14" for="horario">Eliga su horario</label><br>
                                                <select class="estilo_input" name="horario" id="horario" >
                                                    <option value="">-Selecione-</option>
                                                    <option value="3-5">3 - 5 PM    -PRECIO : S/. 400.00</option>
                                                    <option value="5-7">5 - 7 PM    -PRECIO : S/. 500.00</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td width="100%" boderr="0" colspan="2" align="center" valign="middle" >
                                                <table width="100%" cellpadding="0" cellspacing="0" bgcolor="#ccebff" style="border-radius: 6px;">
                                                    <tr>
                                                        <td align="left" class="style24" style="padding:1px 20px;"><br>Adicionales<br><br></td>
                                                    </tr>

                                                </table>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="style14" for="payaso">Payasos -- PRECIO C/U S/.60.00</label><br>        
                                                <input  class="estilo_input" id="payaso" type="number" min=0 max=5 placeholder="0" name="payaso" value=0>
                                            </td>

                                            <td>
                                                <label class="style14" for="muneco">Muñecos -- PRECIO C/U S/.50.00</label><br>        
                                                <input class="estilo_input"  id="muneco" type="number" min=0 max=6 placeholder="0" name="muneco" value=0>
                                            </td>


                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="style14" for="bailarina">Bailarinas -- PRECIO C/U S/.40.00</label><br>        
                                                <input  class="estilo_input" id="bailarina" type="number" min=0 max=9 placeholder="0" name="bailarina" value=0>
                                            </td>

                                            <td>
                                                <label class="style14" for="mago">Mago -- PRECIO C/U S/.80.00</label><br>        
                                                <input  class="estilo_input" id="mago" type="number" min=0 max=1 placeholder="0" name="mago" value=0>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 
                                                <label class="style14" for="decoracion" >Desea decoracion?</label><br>
                                                <select class="estilo_input" id="decoracion" name="decoracion">
                                                    <option value="no">NO</option>
                                                    <option value="si">SI    -PRECIO :S/.150.00</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="style14" for="grabacion">Desea Grabacion?</label><br>
                                                <select class="estilo_input"  id="grabacion" name="grabacion">
                                                    <option value="no">NO</option>
                                                    <option value="HD">HD   -PRECIO :S/.100.00 </option>
                                                    <option value="FHD">FULL HD    -PRECIO :S/.150.00</option>
                                                    <option value="UHD">ULTRA HD    -PRECIO :S/.200.00</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="style14" for="distrito">Eliga el distrito</label><br>
                                                <select class="estilo_input" id="distrito" name="distrito">
                                                    <option value="Lima">Lima</option>
                                                    <option value="Callao">Callao</option>
                                                    <option value="Pueblo Libre">Pueblo Libre</option>
                                                    <option value="San Isidro">San Isidro</option>
                                                    <option value="La Molina">La Molina   -Extra : S/.50.00</option>
                                                    <option value="Ate Vitarte">Ate Vitarte   -Extra : S/.50.00</option>
                                                    <option value="Villa el Salvador">Villa el Salvador     -Extra : S/.50.00</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" name="confirmar" value="Aceptar" id="confirmar" class="boton_personalizado">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" name="cancelar" value="Limpiar" id="cancelar" class="boton_personalizado_red"><br>
                    </td>
                </tr>

            </table>

        </form>
        <?php
// put your code here
        ?>
    </body>
</html>
