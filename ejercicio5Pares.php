
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>num pares</title>
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
                        
                        
                        <p>num pares</p>
                        
                        
                        
                         <?php
                            //Invitados a la fiesta
                            $numeros = array(2,25,43,12,73,32,81,22,44,73);
                            $miarray = array();
                            $numpares=0;
                            

                            for ($i=0; $i<count($numeros); $i++)
                            {
                            
                                If  ($numeros[$i]%2==0)
                                {
                                $numpares=$numpares+1;
                                $miarray=$miarray+[$i];
                                //array_push($miarray,"$i");
                                }
                                
                               
                            }

                             echo "num pares " . $numpares ."<br/>";
                             echo "posiciones lista " . $miarray ."<br/>";
                            
                            

                            if ($numpares > count($numeros)/2) {
                                echo "Hay más pares que impares";
                            } elseif ($numpares == count($numeros)/2) {
                                echo "hay iguales";
                            } else {
                                echo "Hay menos pares que impares";
                            }


                            

                            
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