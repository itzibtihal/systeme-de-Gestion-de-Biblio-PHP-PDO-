<?php

require_once "../../app/controllers/reservation/ReservationController.php";
$reservationimp = new \App\reservation\ReservationController();

$id = null;

if (isset($_GET["id"])) {
    $id = $_GET["id"];
}

$result = $reservationimp->findById($id);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Books Management">
    <meta name="keywords" content="Library books">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../public/css/styles.css">

</head>

<body>

    <h2>reservation Management</h2>

    <form action="../../app/controllers/reservation/ReservController.php" method="post">

        <?php if ($result) : ?>

            <input name="id" type="hidden" value="<?= $id ?>">


            <div class="form-group">
                <label for="description">description:</label>

                <input name="description" type="text" value="<?= $result["description"] ?>" class="form-control" id="description" required>
            </div>

            <div class="form-group">
                <label for="reservation_date">reservation_date:</label>
                <input name="reservation_date" type="text" value="<?= $result["reservation_date"] ?>" class="form-control" id="reservation_date" required>

            </div>

            <div class="form-group">
                <label for="return_date">return_date:</label>
                <input name="return_date" type="date" class="form-control" value="<?= $result["return_date"] ?>" id="return_date" required>
            
            </div>

            <div class="form-group">
                <label for="is_returned">is returned:</label>
                <input name="is_returned" type="number" class="form-control" value="<?= $result["is_returned"] ?>" id="is_returned" required>
            </div>


            <div class="form-group">
                <label for="id_book">id_book:</label>
                <input name="id_book" type="number" class="form-control" value="<?= $result["id_book"] ?>" id="id_book" required>
            </div>

        <?php endif; ?>

        <button name="edit-submit" type="submit" class="btn btn-success">save</button>

    </form>

    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3 class="text-white">EDIT BOOK RESERVATION </h3>
                <p class="text-white">A good library will never be too neat, or too dusty, because somebody will always
                    be in it, taking books off the shelves and staying up late reading them.</p>
                <div class="card">
                    <h5 class="text-center mb-4">Editing BOOK RESERVATION SmartLibra</h5>
                    <form class="form-card" action="../../app/controllers/reservation/ReservController.php" method="post">

                        <?php if ($result) : ?>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label for="description">description:</label>
                                    <input name="description" type="text" value="<?= $result["description"] ?>" class="form-control" id="description" required>
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label for="reservation_date">reservation_date:</label>
                                    <input name="reservation_date" type="text" value="<?= $result["reservation_date"] ?>" class="form-control" id="reservation_date" required>

                                </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-12 flex-column d-flex">
                                <label for="return_date">return_date:</label>
                <input name="return_date" type="date" class="form-control" value="<?= $result["return_date"] ?>" id="return_date" required>
            
                                </div>

                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-12 flex-column d-flex">
                                    <label class="form-control-label px-6">description:</span></label>
                                    <input type="text" id="job" name="job" placeholder="" value="<?= $result["description"] ?>">
                                </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex">
                                    <label class="form-control-label px-3">publication year:</span></label>
                                    <input type="date" id="ans" name="publication_year" placeholder="" value="<?= $result["publication_year"] ?>">
                                </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label class="form-control-label px-3">total copies:</span></label>
                                    <input type="number" id="email" name="total_copies" placeholder="" value="<?= $result["total_copies"] ?>">
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label class="form-control-label px-3">Available copies:</span></label>
                                    <input type="number" id="mob" name="available_copies" placeholder="" value="<?= $result["available_copies"] ?>">
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="row justify-content-center">
                            <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary" style="background-color: rgb(154, 118, 72); border-color: black;"> EDIT THE BOOK <3 </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>