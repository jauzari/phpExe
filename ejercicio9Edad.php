
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Edad mayor</title>
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
                        
                        
                        
                        
                        
                        
                        <h1>Mayor menor</h1>
                        
                        <?php
                            //Invitados a la fiesta
                            $nombres = array("Jaimito","Pepe","Marta","Sonia","Juan","Maria","Marta","Pablo","Pedro");
                            $edad = array("25","50","30","20","50","90","70","60","104");
                            $big = 0;
                            //Persona buscada entre los invitados
                            
                            //Algoritmo
                            
                            for ($i = 1; $i<count($edad); $i++) 
                            {
                                
                                if ($edad[$i] > 30) 
                                {
                                   $big==$edad[$i];
                                 break;
                                }
                            
                                echo $nombre[$i];
                            }

                                echo $big . " texto";
                            //acabar con for 
                            
                            
                            
                            echo "La maxima edad con el la funcion directa es ". max($edad);
                            
                            
                        ?>
    
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