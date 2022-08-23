<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Generatoriaus forma</title>
</head>

<body>
    <div class="container-fluid col-6 bg-success bg-opacity-25 mt-5 pb-3">
        <h3 class="text-center pt-3 mb-5">Daugybos generatorius</h3>
        <form action="generator.php" method="post">
            <div class="ms-5 d-flex justify-content-around">
                <div>
                    <h5>Pasirinkti lentelės dydį</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="5" name="check" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            nuo 1 iki 5
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="10" name="check" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            nuo 1 iki 10
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="15" name="check" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            nuo 1 iki 15
                        </label>
                    </div>
                </div>
                <div>
                    <h5>Pasirinkti sudėtingumo lygį</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="20" name="dificult" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Lengvas
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="30" name="dificult" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Vidutinis
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="50" name="dificult" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Sunkus
                        </label>
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-primary">Generuoti</button>
            </div>

        </form>
    </div>
</body>

</html>