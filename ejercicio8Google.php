<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ficha google</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, 
            maximum-scale=2, user-scalable=yes, shrink-to-fit=no">

        <!-- Referenciar archivos de CSS de bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />


        <style type="text/css" media="screen">

        /* TEMPORAL  faltan links hover margin etc*/
        
        .right {
            float: right;
        }
        
        </style>

    </head>
    <body>
        <header></header>
        <nav></nav>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Letras del abecedario (a b n j)</h1>
                        
                        <?php
                            //Datos de entrada
                            //Conectarse a una BD y obtener los immuebles
                            $a = array();

                                $a["Letra"]="a.webp";
                                $a["Titulo"]="La letra A";
                                $a["Texto"]="La letra a exite desde el principio de los tiempos, fue desarollada en abecedario griego al inicio de 
                                la civilizacion moderna avanzada en ....";
                                $a["Icono"]="2 hab";

                            $b = array();

                                $b["Letra"]="b.jpg";
                                $b["Titulo"]="La letra B";
                                $b["Texto"]="La letra b exite desde el año 2 DC, fue desarollada en abecedario griego al inicio de 
                                la civilizacion moderna avanzada en ....";
                                $b["Icono"]="2 hab";
                            
                            $j = array();

                                $b["Letra"]="j.jpg";
                                $b["Titulo"]="La letra J";
                                $b["Texto"]="La letra j exite desde el siglo X, fue desarollada en abecedario griego al inicio de 
                                la civilizacion moderna avanzada en ....";
                                $b["Icono"]="2 hab";
                                
                            $n = array();

                                $n["Letra"]="n.jpg";
                                $n["Titulo"]="La letra N";
                                $n["Texto"]="La letra n todavia no ha sido inventada, se predice que en el 2030 saldra la primera version
                                de esta letra. Despues de que google y alphabet se hayan ass....";
                                $n["Icono"]="2 hab";
                        
                        
                            //Algoritmo
                            $ficha1 = "<div class='row'>
                                          <div class='col-7'>
                                              <h3>" . $a["Titulo"] . "<i class='fa fa-sliders right' aria-hidden='true'></i></h3>
                                              

                                              <b>" . $a["Link"] . "</b>
                                              <p>" . $a["Texto"] . "</p>
                                             
                                              
                                          </div>
                                          
                                          <div class='col-2'>
                                            <img src='img/" . $a["Letra"] . "' alt='fotografía' width='100%' />
                                          </div>
                                          
                                       </div>";    
                                       
                                       
                                       
                            $ficha2 = "<div class='row'>
                                          <div class='col-7'>
                                              <h3>" . $b["Titulo"] . "<i class='fa fa-sliders right' aria-hidden='true'></i></h3>
                                              

                                              <b>" . $b["Link"] . "</b>
                                              <p>" . $b["Texto"] . "</p>
                                             
                                              
                                          </div>
                                          
                                          <div class='col-2'>
                                            <img src='img/" . $b["Letra"] . "' alt='fotografía' width='100%' />
                                          </div>
                                          
                                       </div>";
                                       
                            $ficha3 = "<div class='row'>
                                          <div class='col-7'>
                                              <h3>" . $n["Titulo"] . "<i class='fa fa-sliders right' aria-hidden='true'></i></h3>
                                              

                                              <b>" . $n["Link"] . "</b>
                                              <p>" . $n["Texto"] . "</p>
                                             
                                              
                                          </div>
                                          
                                          <div class='col-2'>
                                            <img src='img/" . $n["Letra"] . "' alt='fotografía' width='100%' />
                                          </div>
                                          
                                       </div>";
                                       
                            $ficha4 = "<div class='row'>
                                          <div class='col-7'>
                                              <h3>" . $j["Titulo"] . "<i class='fa fa-sliders right' aria-hidden='true'></i></h3>
                                              

                                              <b>" . $j["Link"] . "</b>
                                              <p>" . $j["Texto"] . "</p>
                                             
                                              
                                          </div>
                                          
                                          <div class='col-2'>
                                            <img src='img/" . $j["Letra"] . "' alt='fotografía' width='100%' />
                                          </div>
                                          
                                       </div>";
                            


                            
                            //Salida
                            echo $ficha1;
                            
                            echo $ficha2;
                            
                            echo $ficha3;
                            
                            echo $ficha4;
                            
                            
                            
                        ?>
    
                        <p>Fin pagina</p>
                        
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