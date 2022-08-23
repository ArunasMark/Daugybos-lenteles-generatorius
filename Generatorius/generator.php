<?php
$check = $_POST['check'];
$dificult = $_POST['dificult'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Sugeneruota lentele</title>

<body>
    <h3 class="text-center mt-3">DAUGYBOS LENTELĖ</h3>
    <p class="text-center fw-bolder mt-5"><?php
                                            if ($dificult == 20) {
                                                echo ('Lygis: Lengvas');
                                            } elseif ($dificult == 30) {
                                                echo ('Lygis: Vidutinis');
                                            } else {
                                                echo ('Lygis: Sunkus');
                                            }
                                            ?></p>
    <div class="m-auto col-5 d-flex justify-content-center mt-5">

        <table class="table table-bordered border-dark table-hover text-center">
            <?php for ($x = 0; $x <= $check; $x++) { ?>
                <th class="bg-primary bg-opacity-25"><?= ($x == 0) ? " " : $x ?></th>
            <?php } ?>

            <?php for ($i = 1; $i <= $check; $i++) {

            ?>
                <tr>
                    <td class="bg-primary bg-opacity-25 fw-bolder "><?= $i ?></td>
                    <?php for ($y = 1; $y <= $check; $y++) { ?>
                        <td><?= (rand(0, 100) < $dificult) ? '-' : $i * $y ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>

        </table>
    </div>
    <!-- Mygtukas atgal -->
    <div class="button d-flex justify-content-center my-3">
        <a href="forma.php" class="btn btn-primary ">Grįžti atgal</a>
    </div>

</body>

</html>