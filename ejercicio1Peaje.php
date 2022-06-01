
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
                        <h1>Peaje a Pagar</h1>


                    <form method="post">
                      <input type="radio" id="coche" name="car" value="coche">
                      <label for="car">Coche</label><br>
                      <input type="radio" id="motocicleta" name="car" value="motocicleta">
                      <label for="car">Motocicleta</label><br>
                      <input type="radio" id="Camión" name="car" value="Camión">
                      <label for="car">Camión</label>
                      <br>
                      <input type="radio" id="otro" name="car" value="otro">
                      <label for="javascript">otro</label>
                    </form>
                    
                    <input type="button" onclick="Reload Page" value="Enviar">
                    <br>
                    
                        <?php
                        echo $_POST['car'];
                        
                            //Datos de entrada
                            $tipocoche = "Coche";
                            
                            //Algoritmo
                            if ($tipocoche == Motocicleta)
                            {
                                $mensaje = "Pagas 2,5€";
                            }
                            else if ($tipocoche == Coche)
                            {
                                //Triángulo
                                $mensaje = "Pagas 5,8€ " ;
                            }
                            else if ($tipocoche == Camión)
                            {

                                $mensaje = "Pagas 9,5€";
                            }
                            else
                            {
                                $mensaje = "Pagas 12€";
                            }
                        
                            //Presentación de resultados
                            echo $mensaje;
                        
                        ?>

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