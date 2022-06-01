
<!DOCTYPE html>
<html lang="es">
    <head>
        <title><h1>Fichas Marcas</h1></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, 
            maximum-scale=2, user-scalable=yes, shrink-to-fit=no">

        <!-- Referenciar archivos de CSS de bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <header></header>
        <nav></nav>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12 diseno">
                        
                        <div class="col-lg-6 tabla1">
                        
                        
                        <h1>Ficha técnica 1</h1>
                        
                         <?php
                            //Coches
                            $coche1 = array("marca" => "peugot", "color" => "rojo","matricula " => "1985KLM","nombrePropietario" => "rojo", "potencia " => "100Kw","año " => "100Kw", "imagen " => "media/peugeot.jpg" );   
                            $coche2 = array("marca" => "VolksWagen", "color" => "rojo","matricula " => "1985KLM","nombrePropietario" => "rojo", "potencia " => "100Kw","año " => "100Kw", "imagen " => "media/vw2.png" );
                            $pic= "media/peugeot.jpg";
                            $pic2= "media/vw.jpg";


                            $ficha1 = "<div class='row'>
                                          <div class='col-sm-6 col-md-5'>
                                            <img src=". $coche1["imagen"] . "' alt='fotografía' />
                                          </div>
                                          <div class='col-sm-6 col-md-7'></div>
                                       </div>";    //HTML correspondiente al inmueble 1


                            $ficha2 = "<div class='row'>
                                          <div class='col-sm-6 col-md-5'>
                                            <img src=" . $coche2["imagen"] . "' alt='fotografía' />
                                          </div>
                                          <div class='col-sm-6 col-md-7'></div>
                                       </div>";    //HTML correspondiente al inmueble 2

                        

                        echo $ficha1;
                            
                        echo $ficha2;
                        echo "<img src=" . $pic2;
                        
                        

                        
                        
                            
                               
                            
                        ?>
                        
                        </div>
    
                        <p>Fin página</p>




                    </div>
                </div>
            </div>
        </main>
        <aside></aside>
        <footer></footer>


        <!-- Referenciar archivos de JS de bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>   
        <script src="scripts/scripts.js"></script>
    </body>
</html>