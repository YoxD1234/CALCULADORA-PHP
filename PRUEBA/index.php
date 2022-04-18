<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>PRUEBA</title>
</head>

<body>
<div class="container">
 <!------------------------------------------CESAR------------------------------------------------>
        <form method="post" action="index.php">
            <table> 
                <tr>
                    <td>
                        <input type="text" name="primernumero" id="primernumero" placeholder="PrimerNumero"class=tipotexto>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="segundonumero" id="segundonumero" placeholder="SegundoNumero" class=tipotexto>
                    </td>
                </tr>
                <tr> 
                    <td>
                        <input type="button" value="Sumar" onclick="suma()">
                        <input type="button" value="Restar" onclick="resta()">
                    </td>    
                </tr>
                <tr>
                    <td>
                        <input type="button" value="Multiplicar" onclick="multipli()">
                        <input type="button" value="Dividir" onclick="divid()">
                    </td>
                    
                </tr>
                <tr>
                    <td>
                       <input type="text" name="respuesta" id="respuesta" placeholder="Resultado" class=tipotexto>  
                    </d>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Enviar" name="enviar" id="enviar"> 
                    </td>
                </tr>
           
            
        </table>
           
        </form>
    </div>
<!-------------------------------------OMAR---------------------------------------------------------->

    <script type="text/javascript">

        function suma(){

            var numero1 = document.getElementById('primernumero').value;
            var numero2 = document.getElementById('segundonumero').value;
            var respuesta= parseInt(numero1)+parseInt(numero2);

            document.getElementById('respuesta').value= respuesta;
            
        }
        function resta(){

            var numero1 = document.getElementById('primernumero').value;
            var numero2 = document.getElementById('segundonumero').value;
            var respuesta= parseInt(numero1)-parseInt(numero2);

            document.getElementById('respuesta').value= respuesta;

        }
        function multipli(){

            var numero1 = document.getElementById('primernumero').value;
            var numero2 = document.getElementById('segundonumero').value;
            var respuesta= parseInt(numero1)*parseInt(numero2);

            document.getElementById('respuesta').value= respuesta;

        }
        function divid(){

            var numero1 = document.getElementById('primernumero').value;
            var numero2 = document.getElementById('segundonumero').value;
            var respuesta= parseFloat(numero1)/parseFloat(numero2);

            document.getElementById('respuesta').value= respuesta;


        }

        
        /******************************************GONZALO***************************************************/
            $('#enviar').click(function(){

                var numero1 = document.getElementById('primernumero').value;
                var numero2 = document.getElementById('segundonumero').value;


                <?php
                    $mysqli = mysqli_connect('localhost', 'root','','programacionweb');

                    if(isset($_POST['primernumero'], $_POST['segundonumero'], $_POST['respuesta'])){
                        
                        $primernumero=$_POST['primernumero'];
                        $segundonumero=$_POST['segundonumero'];
                        $respuesta = $_POST['respuesta'];

                        $consulta = "INSERT INTO operacion (primero, segundo, resultado) VALUES ('$primernumero','$segundonumero','$respuesta');";
                        mysqli_query($mysqli, $consulta);

                    }
                ?>
            });
            /****************************************************/
            
    </script>
</body>


</html>
