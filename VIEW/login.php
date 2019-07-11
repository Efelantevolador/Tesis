<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../CSS/miestilo.css">
        <link rel="stylesheet" href="../CSS/bootstrap/css/bootstrap.min.css">
        
    </head>
    <body>
<!-- ********************************************|1 CONTENIDO |*******************************************************************************************************************-->
    <header>
    <!-- Barra Navegacion -->
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="../VIEW/Base-pag.php">Trabaja a tu medida</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Info</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Desplegable
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Opción</a>
                        <a class="dropdown-item" href="#">Otra opción</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Ultima Opción separada</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Déshabilitado</a>
                    </li>
                </ul>
                <a class="nav-link" href="../VIEW/login.php" style="color:white;">
                    <img src="../CSS/open-iconic-master/png/account-login-3x.png" alt="icon name">  <!--|  Entrar  |--->
                    Iniciar Sesión
                </a>
                <!-- *************** BUSCADOR
                <form class="form-inline my-2 my-lg-0 disabled">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                -->
            </div>
        </div> 
    <!-- Fin Barra Navegacion -->   
    </nav>
    </header>
    
    <div class="container-fluid">
        <div class="row"> <!--row: se utiliza para definir una tabla de posicionamiento donde utilizar despues las clases Col-xs-?  -->
            <!--*************************|2 MENU DE NAVEGACION IZQUIERDO |**********************************************************-->
            <div class="col-xl-3">
            </div>
            <!--*************************|2 FIN MENU DE NAVEGACION IZQUIERDO |******************************************************-->
            <div class="col-xl-9">
                <div class="container">
                <!--*****************|3 CONTENIDO INTERNO DE PAG|*****************************************************************-->
                        <div class="row align-content-center">
                        <div class="col-xl-1 text-center"></div>
                        <div class="col-xl-10 text-center">
                            <h1 style="color:white;"></h1>
                        </div>
                        <div class="col-xl-1 text-center"></div>
                        <div class="col-xl-6"style="margin:80px;">
                            <h1 class="text-center">Inicio de Sesion</h1>
                            <!--Formulario inicio-->
                            <form action="">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@ Gmail</span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="" aria-label="email" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Password</span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="" aria-label="password" aria-describedby="basic-addon1">
                                </div>
                                <div class="col-xl-12 mb-3" >
                                    <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Iniciar Sesión">
                                </div>  
                            </form>
                            <!--Fin Formulario inicio-->
                    </div>
                <!--*****************|3 FIN CONTENIDO INTERNO DE PAG|*************************************************************-->
                </div>
            </div>
        </div>  
    </div>
<!-- *******************************************|1 TERMINA EL CONTENIDO |*********************************************************************************************************-->    
        <script src="../CSS/bootstrap/js/jquery-3.2.1.slim.min.js"></script>
        <script src="../CSS/bootstrap/js/popper.min.js"></script>
        <script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
        
    </body>
</html>