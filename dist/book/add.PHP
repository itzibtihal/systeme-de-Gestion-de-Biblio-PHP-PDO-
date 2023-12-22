<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap JS (including Popper.js) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

   
    <title>Document</title>

</head>
<body>
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3 class="text-white">Add New BOOK </h3>
                <p class="text-white">A good library will never be too neat, or too dusty, because somebody will always be in it, taking books off the shelves and staying up late reading them.</p>
                <div class="card">
                    <h5 class="text-center mb-4">Adding a new BOOK to  SmartLibra</h5>
                    <form class="form-card" action="../../app/controllers/Book/BookController.php" method="post">
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">title:</span></label> <input type="text" id="fname" name="title" placeholder=""> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Author:</span></label> <input type="text" id="lname" name="author" placeholder="" > </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">genre:</span></label> <input type="text" id="email" name="genre" placeholder="" > </div>
                            
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-6">description:</span></label> <input type="text" id="job" name="job" placeholder="" > </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">publication year:</span></label> <input type="date" id="ans" name="publication_year" placeholder=""> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">total copies:</span></label> <input type="number" id="email" name="total_copies" placeholder="" > </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Available copies:</span></label> <input type="number" id="mob" name="available_copies" placeholder="" > </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary" style="background-color: rgb(154, 118, 72); border-color: black;"> SAVE THE BOOK <3 </button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>