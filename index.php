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
       <div class="container mb-5">
            <form class="row bg-color-grey px-3 py-4 rounded-3 d-flex mb-5">
                <div class="col-6 d-flex align-items-center mb-3">
                    <label for="exampleInputEmail1"><Label>Lunghezza password:</Label>
                </div>                
                <div class="col-6 mb-3">
                    <input type="email" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
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
                    <button type="button" class="btn btn-primary">Invia</button>
                    <button type="button" class="btn btn-secondary">Annulla</button>
                </div>
                    
                
            </form>    

       </div>
    </main>
</body>
</html>