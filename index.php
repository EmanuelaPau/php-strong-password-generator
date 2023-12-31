<!-- Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale -->

<?php 
    include_once __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super strong password generator</title>
    <!-- CSS -->
    <link href="./style/style.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <main>
       <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
                    <h1 class="text-center text-color-grey">
                        Strong Password Generator
                    </h1>
                    <h2 class="text-center text-color-white mb-4">
                        Genera una password sicura
                    </h2>
                </div>
            </div>
       </div>

       <?php if (empty($_GET["passwordLenght"]) &  !is_numeric($_GET["passwordLenght"]) === true) { ?>
                <div class="container mb-4">
                    <div class="row">
                        <div class="col-12 alert alert-primary">
                            
                            Nessun parametro valido inserito
                           
                        </div>
                    </div>
                </div>
            <?php }

            else  { 
                $passwordLenght = $_GET["passwordLenght"];
                ?>
                <div class="container bg-color-grey p-3 rounded-3 mb-4">
                    <div class="row">
                        <div class="col-12">
                            <p class="mb-0">Your password is: <span class="bg-color-light-blue px-2 py-1 rounded-2"><?php echo createPassword($passwordLenght)?></span>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?> 
            
            
                
           

       <div class="container mb-5">
            <form class="row bg-color-grey px-3 py-4 rounded-3 d-flex mb-5" method="GET" name="passwordGeneratorForm">
                <div class="col-6 d-flex align-items-center mb-3">
                    <label for="exampleInputEmail1"><Label>Lunghezza password:</Label>
                </div>                
                <div class="col-6 mb-3">
                    <input type="number" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="passwordLenght">
                </div>

                <div class="col-6 d-flex mb-3">
                    <label for="radio-buttons"><Label>Consenti ripetizioni di uno o piu caratteri: </Label>
                </div>                
                <div class="col-6 mb-3 d-flex flex-column">
                    <div>
                        <input class="form-check-input" type="radio" name="radio" id="radio-yes" value="option1" checked>
                        <label for="radio"><Label>Si </Label>
                    </div>
                    <div class="mb-3">
                        <input class="form-check-input" type="radio" name="radio" id="radio-no" value="option1" >
                        <label for="radio"><Label>No</Label>
                    </div>
                    
                    <div>
                        <input class="form-check-input" type="checkbox" value="Lettere" id="defaultCheck1" name="lettere">
                        <label for="radio"><Label>Lettere</Label>
                    </div>

                    <div>
                        <input class="form-check-input" type="checkbox" value="Numeri" id="defaultCheck1" name="letters">
                        <label for="radio"><Label>Numeri</Label>
                    </div>

                    <div>
                        <input class="form-check-input" type="checkbox" value="Simboli" id="defaultCheck1" name="symbols">
                        <label for="radio"><Label>Simboli</Label>
                    </div>

                </div>

                <div class="col-4">
                    <button type="send" class="btn btn-primary">Invia</button>
                    <button type="send" class="btn btn-secondary">Annulla</button>
                </div>
                    
                
            </form>    

       </div>
    </main>
</body>
</html>