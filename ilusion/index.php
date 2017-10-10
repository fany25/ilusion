<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="http://elmejoralex.comj.com/web/Style.css">
    </head>
    <form action="index.php" method="POST">
        <h3>Ingresar el codigo de pedido :</h3>
        <input type="int" name="codigo_pedido"><br>
        <h3>Ingresar Id de clienta :</h3>
        <input type="int" name="id_clienta"><br>
        <h3>Ingresar el monto :</h3>
        <input type="int" name="monto"><br>
  
 <input type="submit" name="Calcular"<br>
    </form>

    <body>
        <?php
        if (isset($_POST['Calcular'])){
            
       $codigo_pedido =$_POST['codigo_pedido'];
       $id_clienta =$_POST['id_clienta'];
       $monto =$_POST['monto'];
      
       $con=@mysql_connect("localhost","root","","ilusion");
    if (mysqli_connect_errno($con))
        {
        echo "failed to connect to MYSQL: " . mysqli_connect_error();
        }
        $sql = "INSERT INTO pedidos (codpedido,nombreclienta,monto) VALUES('$codigo_pedido','$id_clienta','$monto')";
             echo "'<br>'<h2> ha sido registrado el abono: $codigo_pedido <br> <br> en el numero de clienta: $id_clienta </h2>'<br>'";
        if (!mysqli_query($con,$sql))
         {
         die ('Error: ' . mysqli_error($con));
         }
        echo "<h2>gracias por su abono </h2>";
            mysqli_close($con);
        }
         ?>
    </body>
</html>
