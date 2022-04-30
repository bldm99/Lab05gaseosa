<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 02 -Gaseosas PHP</title>
    <link rel="stylesheet" href="stylo.css">

</head>
<body>
<h1>Pepsi</h1>
<div class="datos">
    <h2>Gran Oferta</h2>

    <img src="imagenes/PEPSI-3-LITROS.jpg" alt="">
    
    <h3>Precio Antiguo: S/10.00 </h3>
    
    <h3>Ademas ten un descuento del 7% por cada unidad
        + 2 caramelos Sayon </h3>
</div>
    <form id="for" method="post"  action="">

        <div class="ing">
            <h2>Ingrese cantidad</h2>
            <input type="text" name="cantidad">
            <h2>Realize su compra ya!</h2>
            <input class="bt" type="submit" name="Comprar" value="Comprar">
        </div>
        
        
        
        
        <ul class="lista">
            <li class="a">PRECIO NUEVO</li>
            <li class="b">IMPORTE DE COMPRA</li>
            <li class="c">IMPORTE DE DESCUENTO</li>
            <li class="d">IMPORTE A PAGAR</li>
            <li class="e">C. CARAMELOS</li>
        </ul>



    </form>

<?php

  if(isset($_POST['cantidad'])){
  $varcantidad =$_POST['cantidad'];

  $Pr_antiguo = 10;
  $rebaja = 0.05;
  $descuento = 0.07;
  $caramelo = 2;
  
  /*---------------Precio Nuevo---------------------*/ 
  function Precionuevo($x , $y){
      $resulpre = $x - ($x * $y);
      return $resulpre;
  }
  $VPrecionuevo = Precionuevo($Pr_antiguo , $rebaja );
  echo "<p> S/ $VPrecionuevo </p>";
 
  /*---------------Importe de compra---------------------*/ 
  function Importecompra($x , $y){
      $resuli = $x * $y;
      return $resuli;
  }
  $VImportecompra = Importecompra($VPrecionuevo , $varcantidad );
  echo "<p> S/ $VImportecompra </p>";

  /*---------------Importe del Descuento--------------------*/
  function Importedesc($x , $y){
      $resuldesc = $x * $y;
      return $resuldesc;
  }
  $VImportedesc = Importedesc($VImportecompra , $descuento );
  echo "<p> S/ $VImportedesc </p>";

  /*---------------Importe a Pagar--------------------*/
  function Importepagar($x , $y){
      $resulpagar = $x - $y;
      return $resulpagar;
  }
  $VImportepagar = Importepagar($VImportecompra , $VImportedesc );
  echo "<p> S/ $VImportepagar </p>";

  /*---------------Obsequio--------------------*/
  function Obsequio($x , $y){
      $resulob = $x * $y;
      return $resulob;
  }
  $VObsequio = Obsequio($varcantidad , $caramelo);
  echo "<p> $VObsequio </p>";
  }

        
?>
</body>
</html>