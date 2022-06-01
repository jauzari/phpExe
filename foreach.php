<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Modelo bootstrap</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, 
            maximum-scale=2, user-scalable=yes, shrink-to-fit=no">

        <!-- Referenciar archivos de CSS de bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />


    </head>
    <body>
        <header></header>
        <nav></nav>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Listado de immuebles</h1>
                        
                        <?php
                            //Datos de entrada
                            //Conectarse a una BD y obtener los immuebles
                            $inmueble1 = array();

                            $inmueble1["Foto"]="imagen1.png";
                            $inmueble1["Nombre"]="Piso en venta en Sant Pere - Santa Caterina i la Ribera";
                            $inmueble1["Precio"]="830.000 €";
                            $inmueble1["Habitaciones"]="2 hab";
                            $inmueble1["Superficie"]="100 m2";
                            $inmueble1["Detalles"]="Planta 2ª exterior con ascensor";
                            $inmueble1["Descripcion"]="Este piso se encuentra en un histórico edificio de mediados del siglo XIX que ha sido totalmente rehabilitado para adaptarse a los tiempos actuales. Dispone de terraza comunitaria con piscina y ascensor. Se encuentra en el barrio del Born, una de los más eclécticos y atractivos de Barcelona que combina el encanto de lo tradicional con las últimas tendencias.";
                            $inmueble1["Telefono"]="932 754 236";

                            $inmueble2 = array();

                            $inmueble2["Foto"]="imagen2.png";
                            $inmueble2["Nombre"]="Piso en venta en pelai";
                            $inmueble2["Precio"]="680.000 €";
                            $inmueble2["Habitaciones"]="3 hab";
                            $inmueble2["Superficie"]="125 m2";
                            $inmueble2["Detalles"]="Bajos con patio";
                            $inmueble2["Descripcion"]="Luminoso piso reformado de 115m2 construidos según catastro en Eixample Dreta. Vivienda distribuida en un amplio comedor con salida al balcón y buenas vistas, impecable cocina abierta completamente equipada, 3 habitaciones, de las cuales 2 son dobles y una individual y 2 baños completos.";
                            $inmueble2["Telefono"]="932 755 513";
                        
                        
                            //Algoritmo
                            $ficha1 = "<div class='row'>
                                          <div class='col-sm-6 col-md-5'>
                                            <img src='img/" . $inmueble1["Foto"] . "' alt='fotografía' width='100%' />
                                          </div>
                                          <div class='col-sm-6 col-md-7'>
                                          <h3>" . $inmueble1["Nombre"] . "</h3>
                                          <b>" . $inmueble1["Precio"] . "</b>
                                          
                                          </div>
                                       </div>";    //HTML correspondiente al inmueble 1
                                       

                            $ficha2 = "<div class='row'>
                                          <div class='col-sm-6 col-md-5'>
                                            <img src='img/" . $inmueble2["Foto"] . "' alt='fotografía' width='100%' />
                                          </div>
                                          <div class='col-sm-6 col-md-7'>
                                          <h3>" . $inmueble2["Nombre"] . "</h3>
                                          <b>" . $inmueble2["Precio"] . "</b>
                                          <i class='fa fa-phone aria-hidden='true'></i>
                                          
                                          </div>
                                       </div>";    //HTML correspondiente al inmueble 2

                            
                            //Salida
                            echo $ficha1;
                            
                            echo $ficha2;
                            
                            foreach ($inmueble1 as $clave => $valor)
                            {
                                echo "<p><b>$clave:</b> $valor</p>";
                            }
                            
                            
                            
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