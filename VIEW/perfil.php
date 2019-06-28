<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Perfil</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../CSS/miestilo.css">
        <link rel="stylesheet" href="../CSS/bootstrap/css/bootstrap.min.css">
        
    </head>
    <body>
<!-- ********************************************|1 CONTENIDO |*******************************************************************************************************************-->
    <header>
    <!-- Barra Navegacion -->
    <nav class="navbar navbar-expand-lg">
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
                <a class="nav-link" href="#">
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
            <div class="col-xl-3 borde-b">
                <h3>Menu Navegacion</h3>
            </div>
            <!--*************************|2 FIN MENU DE NAVEGACION IZQUIERDO |******************************************************-->
            <div class="col-xl-9 borde-b">
                <div class="container" style="margin-top:30px;">
                <!--*****************|3 CONTENIDO INTERNO DE PAG|*****************************************************************-->
                    <div class="row align-content-center">
                        <div class="col-xl-1 text-center borde-r"></div>
                        <div class="col-xl-10 text-center borde-r">
                            <h1>Perfil</h1>
                        </div>
                        <div class="col-xl-1 text-center borde-r"></div>
                        <div class="col-xl-12 borde-r">
                            <h1>Información personal</h1>
<!--********************************|A) INFORMACION PERSONAL|***************************************-->
<form action="">
    <div class="row">
        <div class="col-xl-4">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Rut :</span>
                </div>
                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" disabled>
            </div>
        </div>
        <div class="col-xl-8"></div>
        <div class="col-xl-4">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nombre :</span>
                </div>
                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-xl-4">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Apellido Paterno :</span>
                </div>
                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-xl-4">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Apellido Materno :</span>
                </div>
                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-xl-4">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@email :</span>
                </div>
                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-xl-4">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Telefono :</span>
                </div>
                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-xl-4"></div>
        <div class="col-xl-12">
            <h5>Fecha de nacimiento</h5>
        </div>
        <div class="col-xl-2">
            <div class="input-group mb-4">
                <div class="input-group-append">
                    <label class="input-group-text" for="inputGroupSelect02">Dia :</label>
                </div>
                <select class="custom-select" id="inputGroupSelect02">
                    <option selected disabled>-Dia-</option>
                    <!--
                    <php
                        for ($i = 1; $i <=31; $i++){
                            if(substr($p->getFecha_nacimiento(),-2)==$i){
                                echo '<option value="'.$i.'" selected>'.$i.'</option>';
                            }else{
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            }
                        }
                    ?>
                    -->
                </select>
            </div>
        </div>
        <div class="col-xl-2">
            <div class="input-group mb-4">
                <div class="input-group-append">
                    <label class="input-group-text" for="inputGroupSelect02">Mes :</label>
                </div>
                <select class="custom-select" id="inputGroupSelect02">
                    <option value="" selected disabled>- Mes -</option>
                    <option value="01">Enero</option>
                    <option value="02">Febrero</option>
                    <option value="03">Marzo</option>
                    <option value="04">Abril</option>
                    <option value="05">Mayo</option>
                    <option value="06">Junio</option>
                    <option value="07">Julio</option>
                    <option value="08">Agosto</option>
                    <option value="09">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                </select>
            </div>
        </div>
        <div class="col-xl-2">
            <div class="input-group mb-4">
                <div class="input-group-append">
                    <label class="input-group-text" for="inputGroupSelect02">Año :</label>
                </div>
                <select class="custom-select" id="inputGroupSelect02">
                    <option value=""selected disabled>- Año -</option>
                        <!--
                        <php
                            $a=2019;
                            for ($i = 1; $i <=70; $i++){
                                if(substr($p->getFecha_nacimiento(),0,-6)==$i){
                                    echo '<option value="'.$a.'" selected>'.$a.'</option>';
                                }
                                else{
                                    echo '<option value="'.$a.'">'.$a.'</option>';
                                }
                                $a=$a-1;
                            }
                        ?>
                        -->
                </select>
            </div>
        </div>
        <div class="col-xl-6"></div>
        <div class="col-xl-12">
            <h5>Dirección</h5>
        </div>
        <div class="col-xl-4">
            <div class="input-group mb-2">
                <div class="input-group-append">
                    <label class="input-group-text" for="inputGroupSelect02">Región :</label>
                </div>
                <select class="custom-select" id="inputGroupSelect02">
                    <option selected disabled>-Region-</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="input-group mb-2">
                <div class="input-group-append">
                    <label class="input-group-text" for="inputGroupSelect02">Comuna :</label>
                </div>
                <select class="custom-select" id="inputGroupSelect02">
                    <option selected disabled>-Comuna-</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="col-xl-4"></div>
        <div class="col-xl-6">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Calle :</span>
                </div>
                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-xl-3">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">N° calle # :</span>
                </div>
                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-xl-12 mb-3">
            <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Guardar Información">
        </div>

        
    </div>
</form>
                
<!--********************************|A) FIN INFORMACION PERSONAL|***************************************-->
                        </div>
                        <div class="col-xl-12 borde-r">
                            <h1>Información Educacional</h1>
<!--********************************|B) INFORMACION EDUCACIONAL|***************************************-->
    <form action="">
        <div class="row">
            <div class="col-xl-6">
                <div class="input-group mb-2">
                    <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">Nivel Educacional :</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect02">
                        <option value="" selected disabled>- Seleccione -</option>
                        <option value="0">Educación Especial</option>
                        <option value="0">Educación básica</option>
                        <option value="0">Educación básica</option>
                        <option value="0">Educación media incompleta</option>
                        <option value="0">Educación media completa</option>
                        <option value="0">Educación media técnico profecional incompleta</option>
                        <option value="0">Educación media técnico profecional completa</option>
                        <option value="0">Educación Superior incompleta</option>
                        <option value="0">Educación Superior completa</option>
                        <option value="0">Post-grado</option>
                    </select>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Titulo Cursado u Obtenido :</span>
                    </div>
                    <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Institución :</span>
                    </div>
                    <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Año de Egreso o termino :</span>
                    </div>
                    <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-xl-12 mb-3">
                <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Agregar Información">
            </div>
        </div>
    </form>
    <table class="table borde-black">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nivel Educacional</th>
                <th scope="col">Titulos Cursados u Obtenidos</th>
                <th scope="col">Institución</th>
                <th scope="col">Año Egresado</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Educación Media Completa</td>
                <td>4to Medio</td>
                <td>Boston Collegue</td>
                <td>2015</td>
                <td>
                    <img src="../CSS/open-iconic-master/png/delete-3x.png" alt="Eliminar">
                </td>
            </tr>
            <tr>
                <td>Educación Media Completa</td>
                <td>4to Medio</td>
                <td>Boston Collegue</td>
                <td>2015</td>
                <td>
                    <img src="../CSS/open-iconic-master/png/delete-3x.png" alt="Eliminar">
                </td>
            </tr>
            <tr>
                <td>Educación Media Completa</td>
                <td>4to Medio</td>
                <td>Boston Collegue</td>
                <td>2015</td>
                <td>
                    <img src="../CSS/open-iconic-master/png/delete-3x.png" alt="Eliminar">
                </td>
            </tr>
        </tbody>
    </table>
<!--********************************|B) FIN INFORMACION EDUCACIONAL|***************************************-->
                        </div>
                    </div>
                <!--*****************|3 FIN CONTENIDO INTERNO DE PAG|*************************************************************-->
                </div>
            </div>
        </div>  
    </div>
    <!--FINAL DE PAGINA-->
    <div class="container">
        <h1>Hola Mundo</h1>
        <h1>Hola Mundo</h1>
        <h1>Hola Mundo</h1>
    </div>
<!-- *******************************************|1 TERMINA EL CONTENIDO |*********************************************************************************************************-->    
        <script src="../CSS/bootstrap/js/jquery-3.2.1.slim.min.js"></script>
        <script src="../CSS/bootstrap/js/popper.min.js"></script>
        <script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
        
    </body>
</html>