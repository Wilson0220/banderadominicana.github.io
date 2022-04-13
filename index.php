<html>
  <head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
    <style>
      .h1{
        color: red;
        text-align: center;
      }
      .row{
        width: 370px;
        height: 150px;
        background-color: red;
      }
      #cuadrante1{
        background-color: blue;
      }
      #blanco{
        background-color: white;
       height: 70px;
      }
      #cuadrante3{
        background-color: blue;
      }
      #cuadrante2A{
        background-color: white;
      }
      #cuadrante3A{
        background-color: white;
      }
      article{
        display: inline-block;
      }
      #article1{
        margin-left: 6%;
      }
      #article2{
        
      }
      #article3{
               
      }
      #article3A{
        width: 70px;
      }
      .escudo{
        /*background-image: url(imagenes/escudo.png);*/
        background-image: url("imagenes/escudo.png");
      }
    
    </style>
  </head>
</html><?php include('componentes.php'); ?>
<div id= "container1" class="container">
  <br><h1 class="h1">Explora los colores de tu bandera</h1><br>
  <div>
    <article id="article1">
          <div id="cuadrante1" class="row" onclick= "window.location='azul.php'">
      <div class="col col-xs-5"></div>
          </div>
          <div id="blanco" class="row">
      <div class="col col-xs-5"></div>
          </div>
          <div id="cuadrante4" class="row" onclick="window.location='rojo.php'">
      <div class="col col-xs-5"></div>
          </div>
          </article>
              
          <article id="article3A">
          <div id="cuadrante2A" class="row">
      <div class="col col-xs-5" onclick="window.location='blanco.php'"></div>
          </div>
          <div id="blanco" class="row" class="escudo">
      <div class="col col-xs-5" class="escudo" ></div>
          </div>
          <div id="cuadrante3A" class="row" class="escudo">
      <div class="col col-xs-5" ></div>
          </div>
          </article>
          <article id="article3">
          <div id="cuadrante2" class="row">
      <div class="col col-xs-5"onclick="window.location='rojo.php'"></div>
          </div>
          <div id="blanco" class="row">
      <div class="col col-xs-5"></div>
          </div>
          <div id="cuadrante3" class="row">
      <div class="col col-xs-5" onclick="window.location='azul.php'"></div>
          </div>
          </article>
         </div>

</div>
<?php include('componentes1.php'); ?>
