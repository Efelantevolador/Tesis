<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Perfil</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
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
                <a class="nav-link" style="color:white;" href="#">
                    <img src="../CSS/open-iconic-master/png/account-login-3x.png" alt="icon name">  <!--|  Entrar  |--->
                    <img src="../CSS/open-iconic-master/png/account-logout-3x.png" alt="icon name"> <!--|  Salir   |--->
                    <img src="../CSS/open-iconic-master/png/person-3x.png" alt="icon name">         <!--| Usuario  |-->
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
            <div class="col-xl-3 borde-b table-dark">
                <div class="">
                    <table class="table asd"style="position:absolute;top:0;left:0;">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center" style="color:white;">Menu de navegacion</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <img src="../CSS/open-iconic-master/png/bookmark-3x.png" alt="icon name"><a href="" style="color:white;"> Perfil</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../CSS/open-iconic-master/png/bookmark-3x.png" alt="icon name"><a href="" style="color:white;"> Perfil Funcinal</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../CSS/open-iconic-master/png/bookmark-3x.png" alt="icon name"><a href="" style="color:white;">Mis Postulaciones</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../CSS/open-iconic-master/png/bookmark-3x.png" alt="icon name"><a href="" style="color:white;"> Buscar Trabajo</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--*************************|2 FIN MENU DE NAVEGACION IZQUIERDO |******************************************************-->
            <div class="col-xl-9 borde-b">
                <div class="container" style="margin-top:30px;">
                <!--*****************|3 CONTENIDO INTERNO DE PAG|*****************************************************************-->
                    <div class="row align-content-center">
                        <div class="col-xl-1 text-center borde-r"></div>
                        <div class="col-xl-10 text-center borde-r">
                            <h1>Perfil Funcional</h1>
                        </div>
                        <div class="col-xl-1 text-center borde-r"></div>
                        <div class="col-xl-12 borde-r">
                            <h1>Información Discapacidad</h1>
<!--********************************|A) INFORMACION Discapacidad|***************************************-->
                                <h3>Paralisis Cerebral:Espaticidad, Atetosis, Mixto </h3>
                                    <p>Espaticidad: Musculos tensos y rigidos (Aumento en la masa muscular)
                                    Movimientos Bruscos y malos coordinando</p>
                                    <p>Atetosis: Movimientos descoordinados, lentos.... paralisis afecta: brazos pies lengua... 
                                    Precenta movimientos involuntarios y tiene disminucion de masa muscular..</p> 
                                    <p>Mixto: puede mezclar caracteristicas de ambas paralisis</p>
                                    <h5>Puntos claves</h5>
                                    <p>Movimientos,Musculacion, Partes del cuerpo involucrado en paralisis.</p>
                                <h3>Paralisis: Hemiplegia, Diplegia, Cuadraplegia, Paraplegia, Monoplegia, Triplegia</h3>
                                
                                <h3>Tono Fisico: Isotonico, Hipertonico, Hipotonico. </h3>
                                <h3>Grado de Severidad: Grave,Moderado,Leve</h3>
                        </div>
                    </div>
                <!--*****************|3 FIN CONTENIDO INTERNO DE PAG|*************************************************************-->
                </div>
            </div>
        </div>  
    </div>
    <!--FINAL DE PAGINA-->
    <div class="container-fluid" style="background-color:black;">
        <br>
        <br>
    </div>
<!-- *******************************************|1 TERMINA EL CONTENIDO |*********************************************************************************************************-->    
        <script src="../CSS/bootstrap/js/jquery-3.2.1.slim.min.js"></script>
        <script src="../CSS/bootstrap/js/popper.min.js"></script>
        <script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
        
    </body>
</html>