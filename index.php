<? require_once("./controllers/login.php")  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./public/css/styles.css">

    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b65193eb61.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <title>Login</title>
    <link rel="icon" href="https://i.ibb.co/svFrgWR/imankuco.jpg">
</head>
<body class="background">
    


<!-- Form Election -->

<div class="container d-flex flex-column ">
    <div class="row vh-100">
        <div class="col-sm-10 col-md-8 col-lg-5 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">


                <p class="text-center text-light fw-normal fs-3">
                                TEST-ELECTIONS
                </p>

                <div class="card border-2 bg-light">
                    <div class="card-body">
                        <div class="m-sm-3">
                            <div class="text-center">
                                <img class="img-fluid" src="./public/img/user.png" width="70" alt="">
                            </div>
                            <p class="text-center fw-normal py-2">
                                Sign in to start your session
                            </p>

                            <form method="POST" id="formelection" class="my-4">
                                <div class="row g-3 mx-2">


                                    <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                        <input type="email" class="form-control form-control-lg" placeholder="Email" id="logemail"
                                        name="logemail" value="imanku@imanku.com">
                                        
                                    </div>

                                    <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                        <input type="password" class="form-control form-control-lg" placeholder="password" id="password"
                                        name="password" value="12345">
                                        
                                    </div>

                                <div class="d-flex justify-content-end">
                                    <input type="submit" class="btn btn-primary btn-md boton" value="Sign In" />
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="public/js/loginValidation.js"></script>
<script src="public/js/login.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>


</body>