<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b65193eb61.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel="icon" href="https://i.ibb.co/svFrgWR/imankuco.jpg">
    <title>System Elections</title>
    <link rel="icon" href="">
</head>


    <!-- Navbar -->

    <header>
        <nav class="navbar navbar-expand-md sticky-top navbar-light container-fluid flex-wrap flex-md-nowrap shadow-sm">

            
                <button class="navbar-toggler btn btn-light" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon"></span>
                    <a class="navbar-brand m-2">
            <img class="img-fluid navbar-brand" src="https://i.ibb.co/JmfrmY2/Imanku-Colombia.png" width="90"/> 
            </a>
                </button>
                
            


            <div class="collapse navbar-collapse bg-white justify-content-center" id="bdNavbar">
            <a class="navbar-brand m-2">
            <img class="img-fluid navbar-brand" src="https://i.ibb.co/JmfrmY2/Imanku-Colombia.png" width="90"/> 
            </a>
                <ul class="navbar-nav flex-row flex-wrap py-md-0 fs-6">
                    <li>
                        <a class="nav-link text-success border-start border-end px-4" href="">
                            Inicio</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link text-success border-end px-4" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> Perfil
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light dropdown-menu-lg-end"
                            aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="./controllers/logout.php"><i class="fas fa-sign-out-alt me-2 text-success"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>