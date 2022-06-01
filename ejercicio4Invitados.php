
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
    </head>
    <body>
        <header></header>
        <nav></nav>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        
                        
                        
                        
                        
                        
                        <h1>Colecciones</h1>
                        
                        <?php
                            //Invitados a la fiesta
                            $nombres = array("Pedro","Marta","Sonia","Juan","Maria","Marta","Pablo","Jaimito");
                            
                            //Persona buscada entre los invitados
                            $personaBuscada = "Pedro";

                            //Booleano que indica si la persona buscada viene a la fiesta                            
                            $viene = false;     //Por defecto supongamos que no viene
                            

                            //Algoritmo
                            for ($i=0; $i<count($nombres); $i++)
                            {
                                if ($nombres[$i]==$personaBuscada)
                                {
                                    $viene=true;    //La persona viene a la fiesta
                                    $numero=$i+1; 
                                    break;
                                }
                            }
                            
                            //Presentación
                            if ($viene == true)
                            {
                                echo "$personaBuscada viene a la fiesta. $personaBuscada es la invitada número $numero invitados.<br/>";
                            }
                            else
                            {
                                echo "$personaBuscada no viene a la fiesta. Hay " . count($nombres) . " invitados.<br/>";
                            }
                            
                        ?>
    
                        <p>Fin página</p>



                        <p>FIN Peaje</p>
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